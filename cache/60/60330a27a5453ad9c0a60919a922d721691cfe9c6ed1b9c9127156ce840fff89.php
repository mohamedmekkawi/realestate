<?php

/* login.html.twig */
class __TwigTemplate_3fcd2ffa7ce8d183f52ff72e39155077eb20417b958de82a602bdbe789ca920d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "login.html.twig", 1);
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
        echo "    Login
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "
";
        // line 14
        echo "
    ";
        // line 15
        if ((isset($context["errorList"]) ? $context["errorList"] : null)) {
            // line 16
            echo "        <ul>
            ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errorList"]) ? $context["errorList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 18
                echo "                <li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "        </ul>
    ";
        }
        // line 22
        echo "    

   
";
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 22,  64 => 20,  55 => 18,  51 => 17,  48 => 16,  46 => 15,  43 => 14,  40 => 12,  37 => 11,  32 => 6,  29 => 5,  11 => 1,);
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
    Login
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
    

   
{% endblock %} 

", "login.html.twig", "C:\\xampp\\htdocs\\realestate\\templates\\login.html.twig");
    }
}
