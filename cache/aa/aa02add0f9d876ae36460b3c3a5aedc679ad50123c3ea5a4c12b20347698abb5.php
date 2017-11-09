<?php

/* register_success.html.twig */
class __TwigTemplate_d8e689d7e3d1ff603e948ff45d7e270b5e1b17cb63c7e7e6a338037012b0f041 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "register_success.html.twig", 1);
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    Register success
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<html>
        <body>
            <div class=\"container\">
                <div class=\"well\">
                    <h1 style=\"text-align:center;\" >You've been registered. You may now</h1>
                    
                    <br>
                    <p style=\"text-align:center;\" ><a href=\"./login\">click to continue</a></p>
                </div>
            </div>
        </body>
    </html>
    
";
    }

    public function getTemplateName()
    {
        return "register_success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
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

{% block title %}
    Register success
{% endblock %}

{% block content %}
<html>
        <body>
            <div class=\"container\">
                <div class=\"well\">
                    <h1 style=\"text-align:center;\" >You've been registered. You may now</h1>
                    
                    <br>
                    <p style=\"text-align:center;\" ><a href=\"./login\">click to continue</a></p>
                </div>
            </div>
        </body>
    </html>
    
{% endblock %}", "register_success.html.twig", "C:\\xampp\\htdocs\\realestate\\templates\\register_success.html.twig");
    }
}
