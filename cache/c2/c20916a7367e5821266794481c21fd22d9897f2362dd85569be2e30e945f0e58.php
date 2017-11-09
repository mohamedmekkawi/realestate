<?php

/* /property/property_list.html.twig */
class __TwigTemplate_6e1615ca4e1d2d55ac10d5a83e6768b6b8cad7b0836f2ba5df2f39026c56170b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "/property/property_list.html.twig", 1);
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Property list";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <p><a href=\"/property/add\">Add Property</a><p>
    <table border=1>
          <tr>
              <th>#</th>
              <th>Title</th>
              <th>PropertyType</th>
              <th>Latitude</th>
              <th>Longitude</th>
              <th>room</th>
              <th>Bath</th>
              <th>Parking</th>
              <th>Price</th>
              <th>SqureFeet</th>
              <th>Description</th>
              <th>Image</th>
              <th>action</th>
          </tr>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) ? $context["list"] : null));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 22
            echo "                <tr class=\"";
            if (($this->getAttribute($context["loop"], "index", array()) % 2 == 1)) {
                echo "rowodd";
            } else {
                echo "roweven";
            }
            echo "\">
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "propertyId", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "title", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "propertyType", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "latitude", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "longitude", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "room", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "bath", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "parking", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "price", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "squreFeet", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "description", array()), "html", null, true);
            echo "</td>
                    <td><img src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "imagePath", array()), "html", null, true);
            echo "\"  width=\"200\"></td>
                    <td>
                        <a href=\"/property/delete/";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "propertyId", array()), "html", null, true);
            echo "\">Delete</a>
                        <a href=\"/property/edit/";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "propertyId", array()), "html", null, true);
            echo "\">Edit</a>
                    </td>
                </tr>
        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 41
            echo "            <tr><td colspan=\"6\"> You have no property</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "    </table>    
";
    }

    public function getTemplateName()
    {
        return "/property/property_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 43,  154 => 41,  137 => 37,  133 => 36,  128 => 34,  124 => 33,  120 => 32,  116 => 31,  112 => 30,  108 => 29,  104 => 28,  100 => 27,  96 => 26,  92 => 25,  88 => 24,  84 => 23,  75 => 22,  57 => 21,  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
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
{% block title %}Property list{% endblock %}
{% block content %}
    <p><a href=\"/property/add\">Add Property</a><p>
    <table border=1>
          <tr>
              <th>#</th>
              <th>Title</th>
              <th>PropertyType</th>
              <th>Latitude</th>
              <th>Longitude</th>
              <th>room</th>
              <th>Bath</th>
              <th>Parking</th>
              <th>Price</th>
              <th>SqureFeet</th>
              <th>Description</th>
              <th>Image</th>
              <th>action</th>
          </tr>
        {% for p in list %}
                <tr class=\"{% if loop.index is odd %}rowodd{% else %}roweven{% endif %}\">
                    <td>{{p.propertyId}}</td>
                    <td>{{p.title}}</td>
                    <td>{{p.propertyType}}</td>
                    <td>{{p.latitude}}</td>
                    <td>{{p.longitude}}</td>
                    <td>{{p.room}}</td>
                    <td>{{p.bath}}</td>
                    <td>{{p.parking}}</td>
                    <td>{{p.price}}</td>
                    <td>{{p.squreFeet}}</td>
                    <td>{{p.description}}</td>
                    <td><img src=\"{{p.imagePath}}\"  width=\"200\"></td>
                    <td>
                        <a href=\"/property/delete/{{p.propertyId}}\">Delete</a>
                        <a href=\"/property/edit/{{p.propertyId}}\">Edit</a>
                    </td>
                </tr>
        {% else %}
            <tr><td colspan=\"6\"> You have no property</td></tr>
        {% endfor %}
    </table>    
{% endblock %}", "/property/property_list.html.twig", "C:\\xampp\\htdocs\\realestate\\templates\\property\\property_list.html.twig");
    }
}
