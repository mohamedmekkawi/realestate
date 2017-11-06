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
        <link href=\"/styles.css\" rel=\"stylesheet\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <meta charset=\"UTF-8\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
 ";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('headextra', $context, $blocks);
        // line 18
        echo "
 ";
        // line 20
        echo " 
    </head>
    <body>

        <div id=\"centeredContent\">
        ";
        // line 25
        $this->displayBlock('content', $context, $blocks);
        // line 26
        echo "        </div>
    </body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Default";
    }

    // line 10
    public function block_headextra($context, array $blocks = array())
    {
        echo " 
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
    <link href=\"css/bootstrap.min.css\" type=\"text/css\" rel=\"stylesheet\" >
    <link href=\"css/stylesheet.css\" type=\"text/css\" rel=\"stylesheet\">
    <link rel=\"shortcut icon\" href=\"images/logo_icon.ico\">     
";
    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "master.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  76 => 25,  63 => 10,  57 => 6,  51 => 26,  49 => 25,  42 => 20,  39 => 18,  37 => 10,  34 => 9,  29 => 6,  22 => 1,);
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
        <link href=\"/styles.css\" rel=\"stylesheet\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Default{% endblock %}</title>
        
 {#=========================   ================================== #}

{% block headextra %} 
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
    <link href=\"css/bootstrap.min.css\" type=\"text/css\" rel=\"stylesheet\" >
    <link href=\"css/stylesheet.css\" type=\"text/css\" rel=\"stylesheet\">
    <link rel=\"shortcut icon\" href=\"images/logo_icon.ico\">     
{% endblock %}

 {#=========================   ================================== #}
 
    </head>
    <body>

        <div id=\"centeredContent\">
        {% block content %}{% endblock %}
        </div>
    </body>
</html>", "master.html.twig", "/Applications/MAMP/htdocs/realestate/templates/master.html.twig");
    }
}
