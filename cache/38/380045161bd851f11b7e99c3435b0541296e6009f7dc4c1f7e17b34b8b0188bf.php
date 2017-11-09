<?php

/* logout.html.twig */
class __TwigTemplate_1e52986d728e1c21cb6c0d41de616501fdc1c1ea5f6f380a216d8e92c8bee677 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "logout.html.twig", 1);
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
        echo "Logout";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <html>
        <body>
            <div class=\"container\">
                <div class=\"well\">
                    <h1 style=\"text-align:center;\" >You've been logged out</h1>
                    
                    <br>
                    <p style=\"text-align:center;\" ><a href=\"./\">click to continue</a></p>
                </div>
            </div>
        </body>
    </html>
    
";
    }

    public function getTemplateName()
    {
        return "logout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
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

{% block title %}Logout{% endblock %}

{% block content %}
    <html>
        <body>
            <div class=\"container\">
                <div class=\"well\">
                    <h1 style=\"text-align:center;\" >You've been logged out</h1>
                    
                    <br>
                    <p style=\"text-align:center;\" ><a href=\"./\">click to continue</a></p>
                </div>
            </div>
        </body>
    </html>
    
{% endblock %}", "logout.html.twig", "/Applications/MAMP/htdocs/realestate/templates/logout.html.twig");
    }
}
