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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Login";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "
";
        // line 8
        if (($context["error"] ?? null)) {
            // line 9
            echo "    <p>Login invalid. Try again or <a href=\"/register\">register</a>.</p>
";
        }
        // line 11
        echo "

<html>
    <body>
    <div class=\"container\">
        <div class=\"well\">
              <h1 class=\"mb-4\">Login</h1>
              <form method=\"post\">
                <div class=\"form-group\"> <label>Username</label>
                  <input type=\"text\"  name=\"username\" class=\"form-control\" placeholder=\"Enter username\"> </div>
                <div class=\"form-group\"> <label>Password</label>
                  <input type=\"password\" name=\"pass\" class=\"form-control\" placeholder=\"Password\"> </div>
                <button type=\"submit\" class=\"btn btn-secondary\">Login</button>
              </form>
              <br>
              <p>Forgot Password?<br> <a id=\"click\" href=\"/password/request\"><b><u>Click here</u></b></a></p>
              <style> 
                  #click {
                      color:white;
                  }
              </style>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
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
        return array (  47 => 11,  43 => 9,  41 => 8,  38 => 7,  35 => 6,  29 => 4,  11 => 1,);
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


{% block title %}Login{% endblock %}

{% block content %}

{% if error %}
    <p>Login invalid. Try again or <a href=\"/register\">register</a>.</p>
{% endif %}


<html>
    <body>
    <div class=\"container\">
        <div class=\"well\">
              <h1 class=\"mb-4\">Login</h1>
              <form method=\"post\">
                <div class=\"form-group\"> <label>Username</label>
                  <input type=\"text\"  name=\"username\" class=\"form-control\" placeholder=\"Enter username\"> </div>
                <div class=\"form-group\"> <label>Password</label>
                  <input type=\"password\" name=\"pass\" class=\"form-control\" placeholder=\"Password\"> </div>
                <button type=\"submit\" class=\"btn btn-secondary\">Login</button>
              </form>
              <br>
              <p>Forgot Password?<br> <a id=\"click\" href=\"/password/request\"><b><u>Click here</u></b></a></p>
              <style> 
                  #click {
                      color:white;
                  }
              </style>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
{% endblock %}
", "login.html.twig", "/Applications/MAMP/htdocs/realestate/templates/login.html.twig");
    }
}
