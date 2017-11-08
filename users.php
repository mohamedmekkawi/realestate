<?php
// fake $app, $log so that Netbeans can provide suggestions while typing code
if (false) {
    $app = new \Slim\Slim();
    $log = new Logger('main');
}

if (!isset($_SESSION['user'])) {
    $_SESSION['user'] = array();
}

// User Login 
$app->get('/login', function() use ($app) {
    $app->render('/login.html.twig');
});

$app->post('/login', function() use ($app , $log) {
    $email = $app->request()->post('email');
    $pass = $app->request()->post('pass');
    $row = DB::queryFirstRow("SELECT * FROM users WHERE email=%s", $email);
    $error = false;
    if (!$row) {
        $error = true; // user not found
    } else {
        if (password_verify($pass, $row['password'])) {
            $error = false; // password invalid
        }
    }
    if ($error) {
        $app->render('/login.html.twig', array('error' => true));
    } else {
        unset($row['password']);
        $_SESSION['user'] = $row;
        $app->render('/login_success.html.twig', array('userSession' => $_SESSION['user']));
    }
});

// Is user email registered
$app->get('/isemailregistered/:email', function($email) use ($app) {
    $row = DB::queryFirstRow("SELECT * FROM users WHERE email=%s", $email);
    echo!$row ? "" : '<span style="background-color: red; font-weight: bold;">Email already taken</span>';
});

//Register User

$app->get('/register', function() use ($app) {
    $app->render('/register.html.twig');
});

$app->post('/register', function() use ($app) {
    $name       = $app->request()->post('name');
    $email      = $app->request()->post('email');
    $userTyep   = $app->request()->post('userTyep');
    $profPic    = $app->request()->post('profPic');
    $phone      = $app->request()->post('phone');
    $pass1      = $app->request()->post('pass1');
    $pass2      = $app->request()->post('pass2');
    //
    $values = array(
        'name'      => $name, 
        'email'     => $email, 
        'userTyep'  => $userTyep, 
        'phone'     => $phone
            );
    $errorList = array();
    //
    if (strlen($name) < 2 || strlen($name) > 50) {
        $values['name'] = '';
        array_push($errorList, "Name must be between 2 and 50 characters long");
    }
    if (filter_var($email, FILTER_VALIDATE_EMAIL) == FALSE) {
        $values['email'] = '';
        array_push($errorList, "Email must look like a valid email");
    } else {
        $row = DB::queryFirstRow("SELECT * FROM users WHERE email=%s", $email);
        if ($row) {
            $values['email'] = '';
            array_push($errorList, "Email already in use");
        }
    }
    if ($pass1 != $pass2) {
        array_push($errorList, "Passwords don't match");
    } else { 
        if (strlen($pass1) < 2 || strlen($pass1) > 50) {
            array_push($errorList, "Password too short, must be 6 characters or longer");
        }
        if (preg_match('/[A-Z]/', $pass1) != 1 || preg_match('/[a-z]/', $pass1) != 1 || preg_match('/[0-9]/', $pass1) != 1) {
            array_push($errorList, "Password must contain at least one lowercase, "
                    . "one uppercase letter, and a digit");
        }
    }
    
//    //user image
//    
//    $userImage = array();
//    
//    // is file being uploaded
//    if ($_FILES['userImage']['error'] != UPLOAD_ERR_NO_FILE) {
//        $userImage = $_FILES['userImage'];
//        if ($userImage['error'] != 0) {
//            array_push($errorList, "Error uploading file");
//            $log->err("Error uploading file: " . print_r($userImage, true));
//        } else {
//            if (strstr($userImage['name'], '..')) {
//                array_push($errorList, "Invalid file name");
//                $log->warn("Uploaded file name with .. in it (possible attack): " . print_r($userImage, true));
//            }
//            
//            $info = getimagesize($userImage["tmp_name"]);
//            if ($info == FALSE) {
//                array_push($errorList, "File doesn't look like a valid image");
//            } else {
//                if ($info['mime'] == 'image/jpeg' || $info['mime'] == 'image/gif' || $info['mime'] == 'image/png') {
//
//                    } else {
//                    array_push($errorList, "Image must be a JPG, GIF, or PNG only.");
//                }
//            }
//        }
//    } else { // no file uploaded
//        
//            array_push($errorList, "Image is required when creating new product");
//        
//    }
//    //
//    if ($errorList) { // 3. failed submission
//        $app->render('/register.html.twig', array(
//            'errorList' => $errorList,
//            'v' => $values));
//    } else { // 2. successful submission
//        
//        $passEnc = password_hash($pass1, PASSWORD_BCRYPT);
//        DB::insert('users', array(
//            'name' => $name, 
//            'email' => $email, 
//            'userTyep' => $userTyep, 
//            'phone' => $phone, 
//            'password' => $passEnc, 
//            'profPic'=>$profPic));
//        $app->render('/register_success.html.twig');
//            }
        });



// password Reset Request function


function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
// password Reset Request
$app->map('/passreset/request', function() use ($app, $log) {
    if ($app->request()->isGet()) {
        // State 1: first show
        $app->render('/passreset_request.html.twig');
        return;
    }
    // in Post - receiving submission
    $email = $app->request()->post('email');
    $user = DB::queryFirstRow("SELECT * FROM users WHERE email=%s", $email);
    if ($user) {
        $secretToken = generateRandomString(50);
        /* Version 1: delete-and-insert 2 operations */
        /* DB::delete('passresets', 'userId=%d', $user['id']);
          DB::insert('passresets', array(
          'userId' => $user['id'],
          $secretToken,
          'expiryDateTime' => date("Y-m-d H:i:s", strtotime("+1 day"))
          )); */
        /* Version 2: insertUpdate */
        DB::insertUpdate('passresets', array(
            'userId' => $user['id'],
            'secretToken' => $secretToken,
            'expiryDateTime' => date("Y-m-d H:i:s", strtotime("+5 minutes"))
        ));
        $url = 'http://' . $_SERVER['SERVER_NAME'] . '/passreset/token/' . $secretToken;
        $emailBody = $app->view()->render('/passreset_email.html.twig', array(
            'name' => $user['name'], // or 'username' or 'firstName'
            // 'name' => 'User', if you don't have user's name in your database
            'url' => $url
        ));
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html\r\n";
        $headers .= "From: Noreply <noreply@ipd10.com>\r\n";
        $headers .= "Date: " . date("Y-m-d H:i:s");
        $toEmail = sprintf("%s <%s>", htmlentities($user['name']), $user['email']);
        // $headers.= sprintf("To: %s\r\n", $user['email']);
        mail($toEmail, "Your password reset for " . $_SERVER['SERVER_NAME'], $emailBody, $headers);
        $log->info('Email sent for password reset for user id=' . $user['id']);
        $app->render('/passreset_request_success.html.twig');
    } else { // State 3: failed request, email not registered
        $app->render('/passreset_request.html.twig', array('error' => true));
    }
})->via('GET', 'POST');
$app->map('/passreset/token/:secretToken', function($secretToken) use ($app, $log) {
    $row = DB::queryFirstRow("SELECT * FROM passresets WHERE secretToken=%s", $secretToken);
    if (!$row) { // row not found
        $app->render('/passreset_notfound_expired.html.twig');
        return;
    }
    if (strtotime($row['expiryDateTime']) < time()) {
        // row found but token expired
        $app->render('/passreset_notfound_expired.html.twig');
        return;
    }
    //
    $user = DB::queryFirstRow("SELECT * FROM users WHERE id=%d", $row['userId']);
    if (!$user) {
        $log->err(sprintf("Passreset for token %s user id=%d not found", $row['secretToken'], $row['userId']));
        $app->render('error_internal.html.twig');
        return;
    }
    if ($app->request()->isGet()) { // State 1: first show
        $app->render('/passreset_form.html.twig', array(
            'name' => $user['name'], 'email' => $user['email']
        ));
    } else { // receiving POST with new password
        $pass1 = $app->request()->post('pass1');
        $pass2 = $app->request()->post('pass2');
//         FIXME: verify quality of the new password using a function
        $errorList = array();
        if ($pass1 != $pass2) {
            array_push($errorList, "Passwords don't match");
        } else { 
            if (strlen($pass1) < 2 || strlen($pass1) > 50) {
                array_push($errorList, "Password too short, must be 6 characters or longer");
            }
            if (preg_match('/[A-Z]/', $pass1) != 1 || preg_match('/[a-z]/', $pass1) != 1 || preg_match('/[0-9]/', $pass1) != 1) {
                array_push($errorList, "Password must contain at least one lowercase, "
                        . "one uppercase letter, and a digit");
            }
        }
        if ($errorList) { // 3. failed submission
            $app->render('/passreset_form.html.twig', array(
                'errorList' => $errorList,
                'name' => $user['name'],
                'email' => $user['email']
            ));
        } else { // 2. successful submission
            DB::update('users', array('password' => $pass1), 'id=%d', $user['id']);
            $app->render('/passreset_form_success.html.twig');
        }
    }
})->via('GET', 'POST');