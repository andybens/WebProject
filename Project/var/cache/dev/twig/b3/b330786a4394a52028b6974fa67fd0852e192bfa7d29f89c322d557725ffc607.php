<?php

/* base.html.twig */
class __TwigTemplate_707c5d23301fc8eca6460fefdff520ba6ae965fdaf87253f7f36d74e1849fea8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_888772fb2a8af7d2a2d013e8af4ab7b65297c5372fc0cbc3681548e97c9715a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_888772fb2a8af7d2a2d013e8af4ab7b65297c5372fc0cbc3681548e97c9715a7->enter($__internal_888772fb2a8af7d2a2d013e8af4ab7b65297c5372fc0cbc3681548e97c9715a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_888772fb2a8af7d2a2d013e8af4ab7b65297c5372fc0cbc3681548e97c9715a7->leave($__internal_888772fb2a8af7d2a2d013e8af4ab7b65297c5372fc0cbc3681548e97c9715a7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c1ca77dbcb11528bae07f809c2082f4d33249dd39419db4f70f9cd83a8b275c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1ca77dbcb11528bae07f809c2082f4d33249dd39419db4f70f9cd83a8b275c5->enter($__internal_c1ca77dbcb11528bae07f809c2082f4d33249dd39419db4f70f9cd83a8b275c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c1ca77dbcb11528bae07f809c2082f4d33249dd39419db4f70f9cd83a8b275c5->leave($__internal_c1ca77dbcb11528bae07f809c2082f4d33249dd39419db4f70f9cd83a8b275c5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3819407de87b944b9d77ce1de4fb7d426e19995bec3f50a09f92f05795fc5761 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3819407de87b944b9d77ce1de4fb7d426e19995bec3f50a09f92f05795fc5761->enter($__internal_3819407de87b944b9d77ce1de4fb7d426e19995bec3f50a09f92f05795fc5761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3819407de87b944b9d77ce1de4fb7d426e19995bec3f50a09f92f05795fc5761->leave($__internal_3819407de87b944b9d77ce1de4fb7d426e19995bec3f50a09f92f05795fc5761_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_10f3e7f80080030df8c3a8fee864cd8350e1be34d4c709f0e5d672858222d58c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10f3e7f80080030df8c3a8fee864cd8350e1be34d4c709f0e5d672858222d58c->enter($__internal_10f3e7f80080030df8c3a8fee864cd8350e1be34d4c709f0e5d672858222d58c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_10f3e7f80080030df8c3a8fee864cd8350e1be34d4c709f0e5d672858222d58c->leave($__internal_10f3e7f80080030df8c3a8fee864cd8350e1be34d4c709f0e5d672858222d58c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_58683fdf2a592fecd416b026a973a3f3ccbd3a98c7e347131aa28056ece5e2fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58683fdf2a592fecd416b026a973a3f3ccbd3a98c7e347131aa28056ece5e2fc->enter($__internal_58683fdf2a592fecd416b026a973a3f3ccbd3a98c7e347131aa28056ece5e2fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_58683fdf2a592fecd416b026a973a3f3ccbd3a98c7e347131aa28056ece5e2fc->leave($__internal_58683fdf2a592fecd416b026a973a3f3ccbd3a98c7e347131aa28056ece5e2fc_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
";
    }
}
