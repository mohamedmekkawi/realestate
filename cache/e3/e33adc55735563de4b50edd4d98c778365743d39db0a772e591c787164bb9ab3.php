<?php

/* register.html.twig */
class __TwigTemplate_63082750792fc545552b6254bf89a7ef5444df3a9b4ae046e96bdb442923969a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "register.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "master.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "    Resister
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "
";
        // line 15
        echo "
    ";
        // line 16
        if (($context["errorList"] ?? null)) {
            // line 17
            echo "        <ul>
            ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errorList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 19
                echo "                <li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "        </ul>
    ";
        }
        // line 23
        echo "    
";
        // line 25
        echo "
    <div class=\"navbar-default\">
        <div class=\"container\">
            <div class=\"navbar-header nabar-left\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#nav-bar-links\">
                    <span class=\"sr-only\">Toggle navigation</span> 
                    <span class=\"icon-bar\"></span> 
                    <span class=\"icon-bar\"></span> 
                </button>
                <a class=\"navbar-brand\" href=\"../\">
                    <img src=\"images/logo.png\" width=\"140\" style=\"margin-top:-10px\">
                </a> 
            </div>
            
";
        // line 40
        echo "            <div class=\"collapse navbar-collapse\" id=\"nav-bar-links\">

                <form class=\"navbar-form navbar-right\" style=\"border: none\" onSubmit=\"return Validate()\" method=\"post\" action=\"\">
                    
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"User Name\" name=\"username\">
                        <input type=\"password\" class=\"form-control\" placeholder=\"Password\" name=\"password\">
                        <input type=\"submit\" class=\"btn btn-default\" value=\"Sign In\" name=\"submit1\">
                    </div>
                </form>

                <ul class=\"nav navbar-nav navbar-right\">
                    <li><a href=\"\">Register</a></li>
                </ul>
            </div>
        </div>
    </div>

";
        // line 59
        echo "
    <div class=\"container\">
        <div class=\"well\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <h3>Registration Form</h3>
                    <form class=\"form-horizontal\" method=\"post\" onSubmit=\"return validateRegistration()\" action=\"index.php\">
                        
                        <div name=\"form-validate\" class=\"form-group\">
                            
                            <label for=\"NAME\" class=\"col-md-3 control-label\">Name:</label>
                            <div class=\"col-md-9\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Ex. Mohamed-mekkawi\" name=\"name\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute(($context["v"] ?? null), "name", array()), "html", null, true);
        echo "\">
                            </div>
                        </div>
                            
                            
                      
                        <div name=\"form-validate\" class=\"form-group\">
                            <label for=\"USER_TYPE\" class=\"col-md-3 control-label\">Register As:</label>
                            <div id=\"USER_TYPE\" class=\"col-md-9\">
                                
                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"seller\" value=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute(($context["v"] ?? null), "seller", array()), "html", null, true);
        echo "\">Seller
                                </label>
                                
                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"buyer\" value=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute(($context["v"] ?? null), "buyer", array()), "html", null, true);
        echo "\">buyer
                                </label>
                            </div>
                        </div>
                        <div name=\"form-validate\" class=\"form-group\">
                            <label for=\"PHONE_NUMBER\" class=\"col-md-3 control-label\">Phone Number:</label>
                            <div class=\"col-md-9\">
                                
                                <input type=\"text\" class=\"form-control\" name=\"phoneNumber\" placeholder=\"Ex. (514)619-6420\" value=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute(($context["v"] ?? null), "phoneNumber", array()), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div name=\"form-validate\" class=\"form-group\">
                            <label for=\"EMAIL\" class=\"col-md-3 control-label\">Email:</label>
                            <div class=\"col-md-9\">
                                <input type=\"email\" class=\"form-control\" id=\"EMAIL\" name=\"EMAIL\" placeholder=\"Ex. john-smith@example.com\" maxlength=\"40\" value=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute(($context["v"] ?? null), "name", array()), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <div name=\"form-validate\" class=\"form-group\">
                            <label for=\"USERNAME\" class=\"col-md-3 control-label\">Username:</label>
                            <div class=\"col-md-9\">
                                <input type=\"text\" class=\"form-control\" name=\"username\" placeholder=\"At least 6 characters with letters or digits.\" >
                            </div>
                        </div>
                        <div name=\"form-validate\" class=\"form-group\">
                            <label for=\"PASSWORD\" class=\"col-md-3 control-label\">Password:</label>
                            <div class=\"col-md-9\">
                                <input type=\"password\" class=\"form-control\"  name=\"pass1\" placeholder=\"At least 6 characters, with capital letters & digits.\">
                            </div>
                        </div>
                        <div name=\"form-validate\" class=\"form-group\">
                            <label for=\"CONFIRM_PASS\" class=\"col-md-3 control-label\">Confirm:</label>
                            <div class=\"col-md-9\">
                                <input type=\"password\" class=\"form-control\" name=\"pass2\" placeholder=\"Confirm Password\">
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-md-offset-3 col-md-9\">
                                <button type=\"submit\" class=\"btn btn-primary\" name=\"submit2\">Register & Sign in</button>
                            </div>
                        </div>
                    </form>
                </div>
                
";
        // line 130
        echo "
    <div class=\"col-md-4\">
        <h3>How to Register <span class=\"glyphicon glyphicon-asterisk\"></span></h3>
        <ol>
            <li>Your name  must only contain characters and hypens(-).</li>
            <li>Your last name must only contain characters and hypens(-). </li>
            <li>Select either Seller or Buyer.</li>
            <li>The phone number must be in this format(514)619-6420 </li>
            <li>Enter your email address.</li>
            <li>Login in name should be at least 6 characters with a combination of letters and digits only.</li>
            <li>Password must contain a least one digit, an uppercase and lowercase letter.</li>
            <li>Retype your password to confirm.</li>
        </ol>
    </div>
</div>

    </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 130,  162 => 100,  153 => 94,  142 => 86,  135 => 82,  121 => 71,  107 => 59,  87 => 40,  71 => 25,  68 => 23,  64 => 21,  55 => 19,  51 => 18,  48 => 17,  46 => 16,  43 => 15,  40 => 13,  37 => 12,  32 => 6,  29 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"master.html.twig\" %}

{#=========================   ================================== #}

{% block title %}
    Resister
{% endblock %}




{% block content %}

{#=========================   ================================== #}

    {% if errorList %}
        <ul>
            {% for error in errorList %}
                <li>{{error}}</li>
                {% endfor %}
        </ul>
    {% endif %}
    
{#=========================   ================================== #}

    <div class=\"navbar-default\">
        <div class=\"container\">
            <div class=\"navbar-header nabar-left\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#nav-bar-links\">
                    <span class=\"sr-only\">Toggle navigation</span> 
                    <span class=\"icon-bar\"></span> 
                    <span class=\"icon-bar\"></span> 
                </button>
                <a class=\"navbar-brand\" href=\"../\">
                    <img src=\"images/logo.png\" width=\"140\" style=\"margin-top:-10px\">
                </a> 
            </div>
            
{#=========================   ================================== #}
            <div class=\"collapse navbar-collapse\" id=\"nav-bar-links\">

                <form class=\"navbar-form navbar-right\" style=\"border: none\" onSubmit=\"return Validate()\" method=\"post\" action=\"\">
                    
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"User Name\" name=\"username\">
                        <input type=\"password\" class=\"form-control\" placeholder=\"Password\" name=\"password\">
                        <input type=\"submit\" class=\"btn btn-default\" value=\"Sign In\" name=\"submit1\">
                    </div>
                </form>

                <ul class=\"nav navbar-nav navbar-right\">
                    <li><a href=\"\">Register</a></li>
                </ul>
            </div>
        </div>
    </div>

{#=========================   ================================== #}

    <div class=\"container\">
        <div class=\"well\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <h3>Registration Form</h3>
                    <form class=\"form-horizontal\" method=\"post\" onSubmit=\"return validateRegistration()\" action=\"index.php\">
                        
                        <div name=\"form-validate\" class=\"form-group\">
                            
                            <label for=\"NAME\" class=\"col-md-3 control-label\">Name:</label>
                            <div class=\"col-md-9\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Ex. Mohamed-mekkawi\" name=\"name\" value=\"{{v.name}}\">
                            </div>
                        </div>
                            
                            
                      
                        <div name=\"form-validate\" class=\"form-group\">
                            <label for=\"USER_TYPE\" class=\"col-md-3 control-label\">Register As:</label>
                            <div id=\"USER_TYPE\" class=\"col-md-9\">
                                
                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"seller\" value=\"{{v.seller}}\">Seller
                                </label>
                                
                                <label class=\"radio-inline\">
                                    <input type=\"radio\" name=\"buyer\" value=\"{{v.buyer}}\">buyer
                                </label>
                            </div>
                        </div>
                        <div name=\"form-validate\" class=\"form-group\">
                            <label for=\"PHONE_NUMBER\" class=\"col-md-3 control-label\">Phone Number:</label>
                            <div class=\"col-md-9\">
                                
                                <input type=\"text\" class=\"form-control\" name=\"phoneNumber\" placeholder=\"Ex. (514)619-6420\" value=\"{{v.phoneNumber}}\">
                            </div>
                        </div>
                        <div name=\"form-validate\" class=\"form-group\">
                            <label for=\"EMAIL\" class=\"col-md-3 control-label\">Email:</label>
                            <div class=\"col-md-9\">
                                <input type=\"email\" class=\"form-control\" id=\"EMAIL\" name=\"EMAIL\" placeholder=\"Ex. john-smith@example.com\" maxlength=\"40\" value=\"{{v.name}}\">
                            </div>
                        </div>
                        <div name=\"form-validate\" class=\"form-group\">
                            <label for=\"USERNAME\" class=\"col-md-3 control-label\">Username:</label>
                            <div class=\"col-md-9\">
                                <input type=\"text\" class=\"form-control\" name=\"username\" placeholder=\"At least 6 characters with letters or digits.\" >
                            </div>
                        </div>
                        <div name=\"form-validate\" class=\"form-group\">
                            <label for=\"PASSWORD\" class=\"col-md-3 control-label\">Password:</label>
                            <div class=\"col-md-9\">
                                <input type=\"password\" class=\"form-control\"  name=\"pass1\" placeholder=\"At least 6 characters, with capital letters & digits.\">
                            </div>
                        </div>
                        <div name=\"form-validate\" class=\"form-group\">
                            <label for=\"CONFIRM_PASS\" class=\"col-md-3 control-label\">Confirm:</label>
                            <div class=\"col-md-9\">
                                <input type=\"password\" class=\"form-control\" name=\"pass2\" placeholder=\"Confirm Password\">
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-md-offset-3 col-md-9\">
                                <button type=\"submit\" class=\"btn btn-primary\" name=\"submit2\">Register & Sign in</button>
                            </div>
                        </div>
                    </form>
                </div>
                
{#=========================   ================================== #}

    <div class=\"col-md-4\">
        <h3>How to Register <span class=\"glyphicon glyphicon-asterisk\"></span></h3>
        <ol>
            <li>Your name  must only contain characters and hypens(-).</li>
            <li>Your last name must only contain characters and hypens(-). </li>
            <li>Select either Seller or Buyer.</li>
            <li>The phone number must be in this format(514)619-6420 </li>
            <li>Enter your email address.</li>
            <li>Login in name should be at least 6 characters with a combination of letters and digits only.</li>
            <li>Password must contain a least one digit, an uppercase and lowercase letter.</li>
            <li>Retype your password to confirm.</li>
        </ol>
    </div>
</div>

    </div>
    </div>

{% endblock %} 

", "register.html.twig", "/Applications/MAMP/htdocs/realestate/templates/register.html.twig");
    }
}
