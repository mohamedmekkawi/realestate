<?php

/* /property/property_addedit_success.html.twig */
class __TwigTemplate_20358f4136bdeaadc676953bbed6dc679641dec059a405dc7a4e8a9bab471b72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "/property/property_addedit_success.html.twig", 1);
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
        echo "Property ";
        if ((isset($context["isEditing"]) ? $context["isEditing"] : null)) {
            echo "update";
        } else {
            echo "add";
        }
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        echo "    
    <p>Property ";
        // line 6
        if ((isset($context["isEditing"]) ? $context["isEditing"] : null)) {
            echo "updated";
        } else {
            echo "added";
        }
        echo ".
        <a href=\"/property/list\">Click to continue</a>.</p>
";
    }

    public function getTemplateName()
    {
        return "/property/property_addedit_success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 6,  40 => 5,  29 => 3,  11 => 1,);
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

{% block title %}Property {% if isEditing %}update{% else %}add{% endif %}{% endblock %}

{% block content %}    
    <p>Property {% if isEditing %}updated{% else %}added{% endif %}.
        <a href=\"/property/list\">Click to continue</a>.</p>
{% endblock %}
", "/property/property_addedit_success.html.twig", "C:\\xampp\\htdocs\\realestate\\templates\\property\\property_addedit_success.html.twig");
    }
}
