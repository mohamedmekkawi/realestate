<?php

/* register.html.twig */
class __TwigTemplate_bad9f3f9ef7bb6cc18cfd77633e467e37a8c076747f1d37693fa4259450ab0c8 extends Twig_Template
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
        if ((isset($context["errorList"]) ? $context["errorList"] : null)) {
            // line 17
            echo "        <ul>
            ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errorList"]) ? $context["errorList"] : null));
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
        // line 27
        echo "    <script>
        \$(document).ready(function () {
            \$('input[name=email]').bind(\"propertychange change click keyup input paste\", function () {
                var email = \$('input[name=email]').val();
                \$('#isTaken').load('/isemailregistered/' + email);
            });
        });

        \$(document).ready(function () {
            \$('input[name=username]').bind(\"propertychange change click keyup input paste\", function () {
                var username = \$('input[name=username]').val();
                \$('#UisTaken').load('/isusernameregistered/' + username);
            });
        });

    </script>

    <div class=\"container\">
        <div class=\"well\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <h3>Registration Form</h3>
                    <form class=\"form-horizontal\" method=\"post\" enctype=\"multipart/form-data\">

                        <div class=\"form-group\">

                            ";
        // line 54
        echo "                            <label class=\"col-md-3 control-label\">Full Name:</label>
                            <div class=\"col-md-9\">
                                <input type=\"text\" name=\"name\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "name", array()), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"Ex. Mohamed-mekkawi\" >
                            </div>
                        </div>
                        ";
        // line 60
        echo "
                        <div class=\"form-group\">
                            <label class=\"col-md-3 control-label\">User Name:</label>
                            <div class=\"col-md-9\">
                                <input type=\"text\" name=\"username\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "username", array()), "html", null, true);
        echo "\" class=\"form-control\"  placeholder=\"At least 6 characters with letters or digits.\" >
                            </div>
                        </div>

                        ";
        // line 69
        echo "                        <div class=\"form-group\">
                            <label class=\"col-md-3 control-label\">Email:</label>
                            <div class=\"col-md-9\">
                                <input type=\"text\" name=\"email\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "email", array()), "html", null, true);
        echo "\" class=\"form-control\" id=\"EMAIL\"  placeholder=\"Ex. john-mohamed@example.com\" ><span id=\"isTaken\"></span>
                            </div>
                        </div>


                        ";
        // line 78
        echo "
                        <div class=\"form-group\">
                            <label class=\"col-md-3 control-label\">Password:</label>
                            <div class=\"col-md-9\">
                                <input type=\"password\" name=\"pass1\" class=\"form-control\"   placeholder=\"At least 6 characters, with capital letters & digits.\">
                            </div>
                        </div>

                        ";
        // line 87
        echo "
                        <div class=\"form-group\">
                            <label for=\"CONFIRM_PASS\" class=\"col-md-3 control-label\">Confirm:</label>
                            <div class=\"col-md-9\">
                                <input type=\"password\" name=\"pass2\" class=\"form-control\"  placeholder=\"Confirm Password\">
                            </div>
                        </div>

                        ";
        // line 96
        echo "                        <div class=\"form-group\">
                            <label class=\"col-md-3 control-label\">Register As:</label>
                            <div class=\"col-md-9\">
                                <select name=\"userRole\" style=\"width: 100%;\">
                                    <option value=\"buyer\">Buyer</option>
                                    <option value=\"seller\">Seller</option>
                                </select>
                            </div>
                        </div>
                        ";
        // line 106
        echo "                        <div class=\"form-group\">
                            <label class=\"col-md-3 control-label\">Phone:</label>
                            <div class=\"col-md-9\">
                                <input type=\"text\" name=\"phone\" value=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "phone", array()), "html", null, true);
        echo "\" class=\"form-control\" id=\"EMAIL\"  placeholder=\"(514)555-5555\" >
                            </div>
                        </div>

                        ";
        // line 114
        echo "                        <div class=\"form-group\">
                            <label class=\"col-md-3 control-label\">Address:</label>
                            <div class=\"col-md-9\">
                                <input type=\"text\" name=\"address\" value=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "address", array()), "html", null, true);
        echo "\" class=\"form-control\" id=\"EMAIL\"  placeholder=\"address\" >
                            </div>
                        </div>

                        ";
        // line 122
        echo "
                        <div class=\"form-group\">
                            <div class=\"col-md-offset-3 col-md-9\">
                                <input type=\"submit\" value=\"Register\" class=\"btn btn-primary\">                    
                            </div>
                        </div>
                    </form>
                </div>

                ";
        // line 132
        echo "
                <div class=\"col-md-4\">
                    <h3>How to Register <span class=\"glyphicon glyphicon-asterisk\"></span></h3>
                    <ol>
                        <li>Your name  must contain characters.</li>
                        <li>Select either Seller or Buyer.</li>
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
        return array (  203 => 132,  192 => 122,  185 => 117,  180 => 114,  173 => 109,  168 => 106,  157 => 96,  147 => 87,  137 => 78,  129 => 72,  124 => 69,  117 => 64,  111 => 60,  105 => 56,  101 => 54,  73 => 27,  68 => 23,  64 => 21,  55 => 19,  51 => 18,  48 => 17,  46 => 16,  43 => 15,  40 => 13,  37 => 12,  32 => 6,  29 => 5,  11 => 1,);
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
    <script>
        \$(document).ready(function () {
            \$('input[name=email]').bind(\"propertychange change click keyup input paste\", function () {
                var email = \$('input[name=email]').val();
                \$('#isTaken').load('/isemailregistered/' + email);
            });
        });

        \$(document).ready(function () {
            \$('input[name=username]').bind(\"propertychange change click keyup input paste\", function () {
                var username = \$('input[name=username]').val();
                \$('#UisTaken').load('/isusernameregistered/' + username);
            });
        });

    </script>

    <div class=\"container\">
        <div class=\"well\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <h3>Registration Form</h3>
                    <form class=\"form-horizontal\" method=\"post\" enctype=\"multipart/form-data\">

                        <div class=\"form-group\">

                            {#=============  Name   ==================== #}
                            <label class=\"col-md-3 control-label\">Full Name:</label>
                            <div class=\"col-md-9\">
                                <input type=\"text\" name=\"name\" value=\"{{v.name}}\" class=\"form-control\" placeholder=\"Ex. Mohamed-mekkawi\" >
                            </div>
                        </div>
                        {#=============  Username   ==================== #}

                        <div class=\"form-group\">
                            <label class=\"col-md-3 control-label\">User Name:</label>
                            <div class=\"col-md-9\">
                                <input type=\"text\" name=\"username\" value=\"{{v.username}}\" class=\"form-control\"  placeholder=\"At least 6 characters with letters or digits.\" >
                            </div>
                        </div>

                        {#=============  Email   ==================== #}
                        <div class=\"form-group\">
                            <label class=\"col-md-3 control-label\">Email:</label>
                            <div class=\"col-md-9\">
                                <input type=\"text\" name=\"email\" value=\"{{v.email}}\" class=\"form-control\" id=\"EMAIL\"  placeholder=\"Ex. john-mohamed@example.com\" ><span id=\"isTaken\"></span>
                            </div>
                        </div>


                        {#=============  Password   ==================== #}

                        <div class=\"form-group\">
                            <label class=\"col-md-3 control-label\">Password:</label>
                            <div class=\"col-md-9\">
                                <input type=\"password\" name=\"pass1\" class=\"form-control\"   placeholder=\"At least 6 characters, with capital letters & digits.\">
                            </div>
                        </div>

                        {#=============  Password(repeat) ==================== #}

                        <div class=\"form-group\">
                            <label for=\"CONFIRM_PASS\" class=\"col-md-3 control-label\">Confirm:</label>
                            <div class=\"col-md-9\">
                                <input type=\"password\" name=\"pass2\" class=\"form-control\"  placeholder=\"Confirm Password\">
                            </div>
                        </div>

                        {#=============  User Role   ==================== #}
                        <div class=\"form-group\">
                            <label class=\"col-md-3 control-label\">Register As:</label>
                            <div class=\"col-md-9\">
                                <select name=\"userRole\" style=\"width: 100%;\">
                                    <option value=\"buyer\">Buyer</option>
                                    <option value=\"seller\">Seller</option>
                                </select>
                            </div>
                        </div>
                        {#=============  phone   ==================== #}
                        <div class=\"form-group\">
                            <label class=\"col-md-3 control-label\">Phone:</label>
                            <div class=\"col-md-9\">
                                <input type=\"text\" name=\"phone\" value=\"{{v.phone}}\" class=\"form-control\" id=\"EMAIL\"  placeholder=\"(514)555-5555\" >
                            </div>
                        </div>

                        {#=============  address   ==================== #}
                        <div class=\"form-group\">
                            <label class=\"col-md-3 control-label\">Address:</label>
                            <div class=\"col-md-9\">
                                <input type=\"text\" name=\"address\" value=\"{{v.address}}\" class=\"form-control\" id=\"EMAIL\"  placeholder=\"address\" >
                            </div>
                        </div>

                        {#=============  submit   ==================== #}

                        <div class=\"form-group\">
                            <div class=\"col-md-offset-3 col-md-9\">
                                <input type=\"submit\" value=\"Register\" class=\"btn btn-primary\">                    
                            </div>
                        </div>
                    </form>
                </div>

                {#=============  right   ==================== #}

                <div class=\"col-md-4\">
                    <h3>How to Register <span class=\"glyphicon glyphicon-asterisk\"></span></h3>
                    <ol>
                        <li>Your name  must contain characters.</li>
                        <li>Select either Seller or Buyer.</li>
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
", "register.html.twig", "C:\\xampp\\htdocs\\realestate\\templates\\register.html.twig");
    }
}
