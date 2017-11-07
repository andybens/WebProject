<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f15d2d2117a6d0d6690f4be14ed5195d9a61f91dd1103730b160e660f47af610 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a7fa8c678c6aabefdf966743a97f6e0fa1df5c16f6d70f85ced4b4dbe72fed89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7fa8c678c6aabefdf966743a97f6e0fa1df5c16f6d70f85ced4b4dbe72fed89->enter($__internal_a7fa8c678c6aabefdf966743a97f6e0fa1df5c16f6d70f85ced4b4dbe72fed89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7fa8c678c6aabefdf966743a97f6e0fa1df5c16f6d70f85ced4b4dbe72fed89->leave($__internal_a7fa8c678c6aabefdf966743a97f6e0fa1df5c16f6d70f85ced4b4dbe72fed89_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fe3d4edcbf2380ee5a6a929bd1ea34d5f35832b1403d8267c6876c77b7d74c75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe3d4edcbf2380ee5a6a929bd1ea34d5f35832b1403d8267c6876c77b7d74c75->enter($__internal_fe3d4edcbf2380ee5a6a929bd1ea34d5f35832b1403d8267c6876c77b7d74c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fe3d4edcbf2380ee5a6a929bd1ea34d5f35832b1403d8267c6876c77b7d74c75->leave($__internal_fe3d4edcbf2380ee5a6a929bd1ea34d5f35832b1403d8267c6876c77b7d74c75_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd2d7b980328b9fe5a87b2b4a15592136bd82256fbe986574ca28876d8067995 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd2d7b980328b9fe5a87b2b4a15592136bd82256fbe986574ca28876d8067995->enter($__internal_fd2d7b980328b9fe5a87b2b4a15592136bd82256fbe986574ca28876d8067995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fd2d7b980328b9fe5a87b2b4a15592136bd82256fbe986574ca28876d8067995->leave($__internal_fd2d7b980328b9fe5a87b2b4a15592136bd82256fbe986574ca28876d8067995_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b11ca7a50c7cbd75380cb774cc2a62ebfc189d9a6f0a4cb783e3916ca32b6af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b11ca7a50c7cbd75380cb774cc2a62ebfc189d9a6f0a4cb783e3916ca32b6af->enter($__internal_5b11ca7a50c7cbd75380cb774cc2a62ebfc189d9a6f0a4cb783e3916ca32b6af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5b11ca7a50c7cbd75380cb774cc2a62ebfc189d9a6f0a4cb783e3916ca32b6af->leave($__internal_5b11ca7a50c7cbd75380cb774cc2a62ebfc189d9a6f0a4cb783e3916ca32b6af_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
