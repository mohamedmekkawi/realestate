<?php

/* master.html.twig */
class __TwigTemplate_3018369d9241e65b0602ec01cb904d03ccd2c814f1b7b77b9752862f73882906 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'headextra' => array($this, 'block_headextra'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>

<html>

    <head>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <meta charset=\"UTF-8\">
        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
        <link href=\"/css/bootstrap.min.css\" type=\"text/css\" rel=\"stylesheet\" >
        <link href=\"/css/stylesheet.css\" type=\"text/css\" rel=\"stylesheet\">
        <link rel=\"shortcut icon\" href=\"/images/logo_icon.ico\">
        ";
        // line 14
        $this->displayBlock('headextra', $context, $blocks);
        // line 15
        echo "    </head>

    <body>


        <div class=\"navbar-default\">
            <div class=\"container\">
                <div class=\"navbar-header nabar-left\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#nav-bar-links\">
                        <span class=\"sr-only\">Toggle navigation</span> 
                        <span class=\"icon-bar\"></span> 
                        <span class=\"icon-bar\"></span> 
                    </button>
                    <a class=\"navbar-brand\" href=\"/\">
                        <img src=\"/images/logo.png\" width=\"140\" style=\"margin-top:-10px\">
                    </a> 
                </div>

                <div class=\"collapse navbar-collapse\" id=\"nav-bar-links\">
                    ";
        // line 34
        if (($context["userSession"] ?? null)) {
            // line 35
            echo "
                        <div class=\"nav navbar-nav navbar-right\">

                            <ul class=\"nav navbar-nav navbar-right\">
                                <li><span class=\"navbar-text navbar-right\" href=\"\">Welcom: &nbsp;";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute(($context["userSession"] ?? null), "name", array()), "html", null, true);
            echo "</a> &nbsp;</span>
                                <li><a href='/property/list'>Property List</a></li>
                                <li><a href='/property/add'>Add Property</a></li>
                                <li><a href='/logout'>Logout</a></li>
                            </ul>
                        </div>    

                    ";
        } else {
            // line 47
            echo "
                        <div class=\"nav navbar-nav navbar-right\">
                            <ul class=\"nav navbar-nav navbar-right\">
                                <li><span class=\"navbar-text navbar-right\" href=\"\">You're not logged in. You may  &nbsp;</span></li>
                                <li><a href='/login'>Login</a></li>
                                <li><span class=\"navbar-text\">or</span></li>
                                <li><a href='/register'>Register</a></li>
                            </ul>
                        </div>    

                    ";
        }
        // line 58
        echo "
                </div>
            </div>
        </div>

        ";
        // line 64
        echo "
        <div id=\"centeredContent\">
        ";
        // line 66
        $this->displayBlock('content', $context, $blocks);
        // line 67
        echo "    </div>
    <footer>
        <p class=\"text-center col-md-12\"r style=\"padding-top: 10px\">
            <small>ONQ8.com is a project of IPD-10's © 2017, All rights reserved.</small></p>
    </footer>
</body>
</html>";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Default";
    }

    // line 14
    public function block_headextra($context, array $blocks = array())
    {
        echo " ";
    }

    // line 66
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "master.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 66,  124 => 14,  118 => 8,  108 => 67,  106 => 66,  102 => 64,  95 => 58,  82 => 47,  71 => 39,  65 => 35,  63 => 34,  42 => 15,  40 => 14,  31 => 8,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>

<html>

    <head>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Default{% endblock %}</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
        <link href=\"/css/bootstrap.min.css\" type=\"text/css\" rel=\"stylesheet\" >
        <link href=\"/css/stylesheet.css\" type=\"text/css\" rel=\"stylesheet\">
        <link rel=\"shortcut icon\" href=\"/images/logo_icon.ico\">
        {% block headextra %} {% endblock %}
    </head>

    <body>


        <div class=\"navbar-default\">
            <div class=\"container\">
                <div class=\"navbar-header nabar-left\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#nav-bar-links\">
                        <span class=\"sr-only\">Toggle navigation</span> 
                        <span class=\"icon-bar\"></span> 
                        <span class=\"icon-bar\"></span> 
                    </button>
                    <a class=\"navbar-brand\" href=\"/\">
                        <img src=\"/images/logo.png\" width=\"140\" style=\"margin-top:-10px\">
                    </a> 
                </div>

                <div class=\"collapse navbar-collapse\" id=\"nav-bar-links\">
                    {% if userSession %}

                        <div class=\"nav navbar-nav navbar-right\">

                            <ul class=\"nav navbar-nav navbar-right\">
                                <li><span class=\"navbar-text navbar-right\" href=\"\">Welcom: &nbsp;{{ userSession.name }}</a> &nbsp;</span>
                                <li><a href='/property/list'>Property List</a></li>
                                <li><a href='/property/add'>Add Property</a></li>
                                <li><a href='/logout'>Logout</a></li>
                            </ul>
                        </div>    

                    {% else %}

                        <div class=\"nav navbar-nav navbar-right\">
                            <ul class=\"nav navbar-nav navbar-right\">
                                <li><span class=\"navbar-text navbar-right\" href=\"\">You're not logged in. You may  &nbsp;</span></li>
                                <li><a href='/login'>Login</a></li>
                                <li><span class=\"navbar-text\">or</span></li>
                                <li><a href='/register'>Register</a></li>
                            </ul>
                        </div>    

                    {% endif %}

                </div>
            </div>
        </div>

        {#=========================   ================================== #}

        <div id=\"centeredContent\">
        {% block content %}{% endblock %}
    </div>
    <footer>
        <p class=\"text-center col-md-12\"r style=\"padding-top: 10px\">
            <small>ONQ8.com is a project of IPD-10's © 2017, All rights reserved.</small></p>
    </footer>
</body>
</html>", "master.html.twig", "/Applications/MAMP/htdocs/realestate/templates/master.html.twig");
    }
}
