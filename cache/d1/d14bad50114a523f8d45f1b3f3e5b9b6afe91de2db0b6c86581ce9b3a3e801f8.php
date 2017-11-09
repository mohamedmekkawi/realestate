<?php

/* /property/property_addedit.html.twig */
class __TwigTemplate_cf6ac8f8a6068edc80794c9df4ed42dd71e22df49cbcdad34977669f17b1ed90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "/property/property_addedit.html.twig", 1);
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
        echo "Add property";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "
    ";
        // line 8
        if ((isset($context["errorList"]) ? $context["errorList"] : null)) {
            // line 9
            echo "        <ul>
            ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errorList"]) ? $context["errorList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 11
                echo "                <li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "        </ul>
    ";
        }
        // line 15
        echo "<div class=\"container\">
        <div class=\"well\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <h3>Add property</h3>
    <form class=\"form-horizontal\" method=\"post\" enctype=\"multipart/form-data\">
        Title:  <input type=\"text\" name=\"title\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "title", array()), "html", null, true);
        echo "\"><br>
        Property Type: 
                    <select name=\"propertyType\">
                        <option value=\"appartement\">Appartement</option>
                        <option value=\"duplex\">Duplex</option>
                        <option value=\"townHouse\">Town House</option>
                        <option value=\"house\">House</option>
                        <option value=\"villa\">Villa</option>
                    </select><br>
        Latitude:  <input type=\"number\" min=\"-90 \" max=\"+90 \" step=\"0.01\" name=\"latitude\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "latitude", array()), "html", null, true);
        echo "\"><br>
        Longitude: <input type=\"number\" min=\"-180 \" max=\"+180 \" step=\"0.01\" name=\"longitude\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "longitude", array()), "html", null, true);
        echo "\"><br>
        room: <input type=\"number\" min=\"0\" max=\"10\" step=\"1\" name=\"room\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "room", array()), "html", null, true);
        echo "\"><br>
        Bath: <input type=\"number\" min=\"0\" max=\"10\" step=\"1\" name=\"bath\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "bath", array()), "html", null, true);
        echo "\"><br>
        Parking: <input type=\"number\" min=\"0\" max=\"10\" step=\"1\" name=\"parking\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "parking", array()), "html", null, true);
        echo "\"><br>
        Price: <input type=\"number\" min=\"0\" max=\"999999\" step=\"0.01\" name=\"squreFeet\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "squreFeet", array()), "html", null, true);
        echo "\"><br>
        SqureFeet: <input type=\"number\" min=\"0\" max=\"999999\" step=\"0.01\" name=\"price\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "price", array()), "html", null, true);
        echo "\"><br>
        Description:  <input type=\"text\" name=\"description\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["v"]) ? $context["v"] : null), "description", array()), "html", null, true);
        echo "\"><br>
        Image: <input type=\"file\" name=\"propertyImage\" ><br><br>
        <input type=\"submit\" value=\"Add Property\">
    </form>

        </div>
</div>
                </div>
</div>
            
";
    }

    public function getTemplateName()
    {
        return "/property/property_addedit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 37,  107 => 36,  103 => 35,  99 => 34,  95 => 33,  91 => 32,  87 => 31,  83 => 30,  71 => 21,  63 => 15,  59 => 13,  50 => 11,  46 => 10,  43 => 9,  41 => 8,  38 => 7,  35 => 6,  29 => 3,  11 => 1,);
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

{% block title %}Add property{% endblock %}


{% block content %}

    {% if errorList %}
        <ul>
            {% for error in errorList %}
                <li>{{error}}</li>
                {% endfor %}
        </ul>
    {% endif %}
<div class=\"container\">
        <div class=\"well\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <h3>Add property</h3>
    <form class=\"form-horizontal\" method=\"post\" enctype=\"multipart/form-data\">
        Title:  <input type=\"text\" name=\"title\" value=\"{{v.title}}\"><br>
        Property Type: 
                    <select name=\"propertyType\">
                        <option value=\"appartement\">Appartement</option>
                        <option value=\"duplex\">Duplex</option>
                        <option value=\"townHouse\">Town House</option>
                        <option value=\"house\">House</option>
                        <option value=\"villa\">Villa</option>
                    </select><br>
        Latitude:  <input type=\"number\" min=\"-90 \" max=\"+90 \" step=\"0.01\" name=\"latitude\" value=\"{{v.latitude}}\"><br>
        Longitude: <input type=\"number\" min=\"-180 \" max=\"+180 \" step=\"0.01\" name=\"longitude\" value=\"{{v.longitude}}\"><br>
        room: <input type=\"number\" min=\"0\" max=\"10\" step=\"1\" name=\"room\" value=\"{{v.room}}\"><br>
        Bath: <input type=\"number\" min=\"0\" max=\"10\" step=\"1\" name=\"bath\" value=\"{{v.bath}}\"><br>
        Parking: <input type=\"number\" min=\"0\" max=\"10\" step=\"1\" name=\"parking\" value=\"{{v.parking}}\"><br>
        Price: <input type=\"number\" min=\"0\" max=\"999999\" step=\"0.01\" name=\"squreFeet\" value=\"{{v.squreFeet}}\"><br>
        SqureFeet: <input type=\"number\" min=\"0\" max=\"999999\" step=\"0.01\" name=\"price\" value=\"{{v.price}}\"><br>
        Description:  <input type=\"text\" name=\"description\" value=\"{{v.description}}\"><br>
        Image: <input type=\"file\" name=\"propertyImage\" ><br><br>
        <input type=\"submit\" value=\"Add Property\">
    </form>

        </div>
</div>
                </div>
</div>
            
{% endblock %}
", "/property/property_addedit.html.twig", "C:\\xampp\\htdocs\\realestate\\templates\\property\\property_addedit.html.twig");
    }
}
