<?php

/* /index.html.twig */
class __TwigTemplate_a1e3a8810ec62a3cd231c43a7763e0839891ff11b9dfea3f466665cf87a68ecb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("master.html.twig", "/index.html.twig", 1);
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
        echo "home";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
    <html>
        <body>
            <div class=\"navbar-default\">
                <div class=\"container\">

                </div>
            </div>
            <div class=\"jumbotron\">
                <div class=\"container\">
                    <div class=\"transbox\">
                        <h1 style=\"text-align:center;\">Find a Properties in Kuwait.</h1>
                        <p style=\"text-align:center;\">With over million users subscribed to our service!</p>
                    </div>
                </div>
            </div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-4 col-sm-6\">
                        <h3>Welcome!</h3>
                        <p style=\"opacity:\">Find the perfect home for you and your family. Meet properties owners who are waiting for you, or you search for them. With millions of people subscribed to our service, we at rentalmtl are trying our best to put smiles on everyone's face.</p>
                    </div>
                    <div class=\"col-md-4 col-sm-6\">

                        <h3>Get Started!</h3>
                        <ul style=\"list-style-type:square\">
                            <li><a href=\"#\">Your property</a></li>
                            <li><a href=\"#\">Post an property</a></li>
                            <li><a href=\"#\">Account Settings</a></li>
                            <li><a href=\"#\">update your profile!</a></li>
                        </ul>
                        <h3>What is OnQ8.com?</h3>
                        <p>OnQ8.com is a place where Buyer and Seller create a trusting relationship.</p>
                    </div>
                    <div class=\"col-md-4 col-sm-12\" >
                        <h3>How does it work?</h3>
                        <dl>
                            <dt>For Buyer:</dt>
                            <dd>have to simply set up a quick profile, and add your properties.</dd>
                            <dt>For seller:</dt>
                            <dd>seller post properties, and wait for you to contact.</dd>
                        </dl>
                    </div>
                </div>
                <hr>
            </div>
            <footer>
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-10  col-md-offset-1 text-center\">
                            <h3>Contact Us</h3>
                            <p><small> <strong>OnQ8.com</strong><br> Tel: 514-619-6420</small> </p>
                        </div>
                    </div>
                </div>
            </footer>
        </body>
    </html>
";
    }

    public function getTemplateName()
    {
        return "/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 8,  35 => 7,  29 => 4,  11 => 1,);
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


{% block title %}home{% endblock %}


{% block content %}

    <html>
        <body>
            <div class=\"navbar-default\">
                <div class=\"container\">

                </div>
            </div>
            <div class=\"jumbotron\">
                <div class=\"container\">
                    <div class=\"transbox\">
                        <h1 style=\"text-align:center;\">Find a Properties in Kuwait.</h1>
                        <p style=\"text-align:center;\">With over million users subscribed to our service!</p>
                    </div>
                </div>
            </div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-4 col-sm-6\">
                        <h3>Welcome!</h3>
                        <p style=\"opacity:\">Find the perfect home for you and your family. Meet properties owners who are waiting for you, or you search for them. With millions of people subscribed to our service, we at rentalmtl are trying our best to put smiles on everyone's face.</p>
                    </div>
                    <div class=\"col-md-4 col-sm-6\">

                        <h3>Get Started!</h3>
                        <ul style=\"list-style-type:square\">
                            <li><a href=\"#\">Your property</a></li>
                            <li><a href=\"#\">Post an property</a></li>
                            <li><a href=\"#\">Account Settings</a></li>
                            <li><a href=\"#\">update your profile!</a></li>
                        </ul>
                        <h3>What is OnQ8.com?</h3>
                        <p>OnQ8.com is a place where Buyer and Seller create a trusting relationship.</p>
                    </div>
                    <div class=\"col-md-4 col-sm-12\" >
                        <h3>How does it work?</h3>
                        <dl>
                            <dt>For Buyer:</dt>
                            <dd>have to simply set up a quick profile, and add your properties.</dd>
                            <dt>For seller:</dt>
                            <dd>seller post properties, and wait for you to contact.</dd>
                        </dl>
                    </div>
                </div>
                <hr>
            </div>
            <footer>
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-10  col-md-offset-1 text-center\">
                            <h3>Contact Us</h3>
                            <p><small> <strong>OnQ8.com</strong><br> Tel: 514-619-6420</small> </p>
                        </div>
                    </div>
                </div>
            </footer>
        </body>
    </html>
{% endblock %}", "/index.html.twig", "C:\\xampp\\htdocs\\realestate\\templates\\Index.html.twig");
    }
}
