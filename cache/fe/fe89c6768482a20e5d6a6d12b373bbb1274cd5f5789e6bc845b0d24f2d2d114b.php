<?php

/* /login_success.html.twig */
class __TwigTemplate_5ade8803024902265c60f027c0136f118aefc19a72ca24df8fe33ec51a349b25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "/login_success.html.twig", 1);
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
        echo "Login Success
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<p>Login successful,  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userSession"]) ? $context["userSession"] : null), "name", array()), "html", null, true);
        echo " <a href=\"/\">click to continue</a>.</p>
";
    }

    public function getTemplateName()
    {
        return "/login_success.html.twig";
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
Login Success
{% endblock %}

{% block content %}
<p>Login successful,  {{userSession.name}} <a href=\"/\">click to continue</a>.</p>
{% endblock %}", "/login_success.html.twig", "C:\\xampp\\htdocs\\realestate\\templates\\login_success.html.twig");
    }
}
