<?php

/* login.html.twig */
class __TwigTemplate_c2cc34c52a4991dd6432617563c84139204aa38de8e706726ae4df5a0f5eaef8 extends Twig_Template
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
        if (($context["errorList"] ?? null)) {
            // line 16
            echo "        <ul>
            ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errorList"] ?? null));
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
        // line 24
        echo "
    <div class=\"navbar-default\">
        <div class=\"container\">
            <div class=\"navbar-header nabar-left\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#nav-bar-links\">
                    <span class=\"sr-only\">Toggle navigation</span> 
                    <span class=\"icon-bar\"></span> 
                    <span class=\"icon-bar\"></span> 
                </button>
                <a class=\"navbar-brand\" href=\"../\">
                    <img src=\"images/logo.png\" width=\"140\" style=\"margin-top:-10px\">
                </a> 
            </div>
            
";
        // line 39
        echo "            <div class=\"collapse navbar-collapse\" id=\"nav-bar-links\">

                <form class=\"navbar-form navbar-right\" style=\"border: none\" onSubmit=\"return Validate()\" method=\"post\" action=\"\">
                    
                    <div class=\"form-group\">
                        <input type=\"text\" name=\"username\" class=\"form-control\" placeholder=\"User Name\">
                        <input type=\"password\" name=\"pass\" class=\"form-control\" placeholder=\"Password\">
                        <input type=\"submit\" value=\"Login In\" name=\"login\" class=\"btn btn-default\">
                    </div>
                </form>

                <ul class=\"nav navbar-nav navbar-right\">
                    <li><a href=\"\">login</a></li>
                </ul>
            </div>
        </div>
    </div>

";
        // line 58
        echo "

";
        // line 61
        echo "
        

    </div>
    </div>

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
        return array (  111 => 61,  107 => 58,  87 => 39,  71 => 24,  68 => 22,  64 => 20,  55 => 18,  51 => 17,  48 => 16,  46 => 15,  43 => 14,  40 => 12,  37 => 11,  32 => 6,  29 => 5,  11 => 1,);
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
    
{#=========================   ================================== #}

    <div class=\"navbar-default\">
        <div class=\"container\">
            <div class=\"navbar-header nabar-left\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#nav-bar-links\">
                    <span class=\"sr-only\">Toggle navigation</span> 
                    <span class=\"icon-bar\"></span> 
                    <span class=\"icon-bar\"></span> 
                </button>
                <a class=\"navbar-brand\" href=\"../\">
                    <img src=\"images/logo.png\" width=\"140\" style=\"margin-top:-10px\">
                </a> 
            </div>
            
{#=========================   ================================== #}
            <div class=\"collapse navbar-collapse\" id=\"nav-bar-links\">

                <form class=\"navbar-form navbar-right\" style=\"border: none\" onSubmit=\"return Validate()\" method=\"post\" action=\"\">
                    
                    <div class=\"form-group\">
                        <input type=\"text\" name=\"username\" class=\"form-control\" placeholder=\"User Name\">
                        <input type=\"password\" name=\"pass\" class=\"form-control\" placeholder=\"Password\">
                        <input type=\"submit\" value=\"Login In\" name=\"login\" class=\"btn btn-default\">
                    </div>
                </form>

                <ul class=\"nav navbar-nav navbar-right\">
                    <li><a href=\"\">login</a></li>
                </ul>
            </div>
        </div>
    </div>

{#=========================   ================================== #}


{#=========================   ================================== #}

        

    </div>
    </div>

{% endblock %} 

", "login.html.twig", "/Applications/MAMP/htdocs/realestate/templates/login.html.twig");
    }
}
