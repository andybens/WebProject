<?php

/* base.html.twig */
class __TwigTemplate_b3b69c522ffbd009e71f0dc15951de50804011526f0d6d886dec33f0b0ec9b63 extends Twig_Template
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
        $__internal_83c29fcc0e1508269d2a2e8949f9aacd720859bd1c250925e7a54e55058b446a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83c29fcc0e1508269d2a2e8949f9aacd720859bd1c250925e7a54e55058b446a->enter($__internal_83c29fcc0e1508269d2a2e8949f9aacd720859bd1c250925e7a54e55058b446a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_83c29fcc0e1508269d2a2e8949f9aacd720859bd1c250925e7a54e55058b446a->leave($__internal_83c29fcc0e1508269d2a2e8949f9aacd720859bd1c250925e7a54e55058b446a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_887678fda382fa27269b2398080c452e3a44d75669b3abec5bcef438929267c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_887678fda382fa27269b2398080c452e3a44d75669b3abec5bcef438929267c2->enter($__internal_887678fda382fa27269b2398080c452e3a44d75669b3abec5bcef438929267c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_887678fda382fa27269b2398080c452e3a44d75669b3abec5bcef438929267c2->leave($__internal_887678fda382fa27269b2398080c452e3a44d75669b3abec5bcef438929267c2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a13a77692b2d530e6e869120dd708184a6e0fafc61d233a5e6eef12241425c17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a13a77692b2d530e6e869120dd708184a6e0fafc61d233a5e6eef12241425c17->enter($__internal_a13a77692b2d530e6e869120dd708184a6e0fafc61d233a5e6eef12241425c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a13a77692b2d530e6e869120dd708184a6e0fafc61d233a5e6eef12241425c17->leave($__internal_a13a77692b2d530e6e869120dd708184a6e0fafc61d233a5e6eef12241425c17_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3606ec225904c15907da45ea24f94af0776557223b65b55ca766ede5a1c9953d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3606ec225904c15907da45ea24f94af0776557223b65b55ca766ede5a1c9953d->enter($__internal_3606ec225904c15907da45ea24f94af0776557223b65b55ca766ede5a1c9953d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3606ec225904c15907da45ea24f94af0776557223b65b55ca766ede5a1c9953d->leave($__internal_3606ec225904c15907da45ea24f94af0776557223b65b55ca766ede5a1c9953d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6d8c76be087ca2a37060df44228c2b0df1106bcb1d14cb39c025d24749b44643 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d8c76be087ca2a37060df44228c2b0df1106bcb1d14cb39c025d24749b44643->enter($__internal_6d8c76be087ca2a37060df44228c2b0df1106bcb1d14cb39c025d24749b44643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6d8c76be087ca2a37060df44228c2b0df1106bcb1d14cb39c025d24749b44643->leave($__internal_6d8c76be087ca2a37060df44228c2b0df1106bcb1d14cb39c025d24749b44643_prof);

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
