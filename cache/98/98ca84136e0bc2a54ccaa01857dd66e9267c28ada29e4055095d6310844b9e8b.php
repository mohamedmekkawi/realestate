<?php

/* index.html.twig */
class __TwigTemplate_8bad6d851d44ab30b26af535e8ae817b706f7a25b1ce5d7da0c9001597282eb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "index.html.twig", 1);
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
        echo "Index";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    
    <div class=\"properties\">
        <ul id=\"propertieslist\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["propertiesList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 10
            echo "                <li><a href=\"/list/\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "description", array()), "html", null, true);
            echo "</a></li>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        </ul>
    </div>
    <div class=\"propertiesList\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["productList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 17
            echo "            <div class=\"propertiesContainer\">
                <div class=\"imageContainer\">
                    <img src=\"../images/";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "imagePath", array()), "html", null, true);
            echo "\" width=\"100\">
                </div>
                <p>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "name", array()), "html", null, true);
            echo "</p> <p>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "price", array()), "html", null, true);
            echo "</p>
            </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 25,  75 => 21,  70 => 19,  66 => 17,  62 => 16,  57 => 13,  47 => 10,  43 => 9,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
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

{% block title %}Index{% endblock %}

{% block content %}
    
    <div class=\"properties\">
        <ul id=\"propertieslist\">
            {% for c in propertiesList %}
                <li><a href=\"/list/\">{{c.description}}</a></li>

            {% endfor %}
        </ul>
    </div>
    <div class=\"propertiesList\">
        {% for p in productList %}
            <div class=\"propertiesContainer\">
                <div class=\"imageContainer\">
                    <img src=\"../images/{{p.imagePath}}\" width=\"100\">
                </div>
                <p>{{p.name}}</p> <p>{{p.price}}</p>
            </div>

        {% endfor %}
    </div>
{% endblock %}", "index.html.twig", "/Applications/MAMP/htdocs/realestate/templates/index.html.twig");
    }
}
