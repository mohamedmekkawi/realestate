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
        echo "<html>
    <head>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
";
        // line 7
        $this->displayBlock('headextra', $context, $blocks);
        // line 14
        echo " </head>
 
 ";
        // line 17
        echo " 
    <body>

        <div id=\"centeredContent\">
        ";
        // line 21
        $this->displayBlock('content', $context, $blocks);
        // line 22
        echo "        </div>
        <footer>
            <p class=\"text-center col-md-12\"r style=\"padding-top: 10px\">
            <small>© Copyright On Q8, 2017. All rights reserved.</small></p>
        </footer>
        
        <script src=\"../script/registration.js\"></script>
\t<script src=\"../script/validateform.js\"></script>
\t<script src=\"../script/jquery-1.11.2.min.js\"></script>
\t<script src=\"../script/bootstrap.min.js\"></script>
        
    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Default";
    }

    // line 7
    public function block_headextra($context, array $blocks = array())
    {
        echo " 
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
    <link href=\"css/bootstrap.min.css\" type=\"text/css\" rel=\"stylesheet\" >
    <link href=\"css/stylesheet.css\" type=\"text/css\" rel=\"stylesheet\">
    <link rel=\"shortcut icon\" href=\"images/logo_icon.ico\">     
";
    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "master.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  81 => 21,  69 => 7,  63 => 5,  47 => 22,  45 => 21,  39 => 17,  35 => 14,  33 => 7,  28 => 5,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
    <head>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Default{% endblock %}</title>
        
{% block headextra %} 
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
    <link href=\"css/bootstrap.min.css\" type=\"text/css\" rel=\"stylesheet\" >
    <link href=\"css/stylesheet.css\" type=\"text/css\" rel=\"stylesheet\">
    <link rel=\"shortcut icon\" href=\"images/logo_icon.ico\">     
{% endblock %}
 </head>
 
 {#=========================   ================================== #}
 
    <body>

        <div id=\"centeredContent\">
        {% block content %}{% endblock %}
        </div>
        <footer>
            <p class=\"text-center col-md-12\"r style=\"padding-top: 10px\">
            <small>© Copyright On Q8, 2017. All rights reserved.</small></p>
        </footer>
        
        <script src=\"../script/registration.js\"></script>
\t<script src=\"../script/validateform.js\"></script>
\t<script src=\"../script/jquery-1.11.2.min.js\"></script>
\t<script src=\"../script/bootstrap.min.js\"></script>
        
    </body>
</html>", "master.html.twig", "/Applications/MAMP/htdocs/realestate/templates/master.html.twig");
    }
}
