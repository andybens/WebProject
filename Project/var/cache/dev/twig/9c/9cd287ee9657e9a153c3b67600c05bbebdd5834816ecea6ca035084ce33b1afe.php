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
        $__internal_91fde44e166e9757b6cd8f29a3bb26995ad33214e35f4208655bd82919f9c1b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91fde44e166e9757b6cd8f29a3bb26995ad33214e35f4208655bd82919f9c1b3->enter($__internal_91fde44e166e9757b6cd8f29a3bb26995ad33214e35f4208655bd82919f9c1b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91fde44e166e9757b6cd8f29a3bb26995ad33214e35f4208655bd82919f9c1b3->leave($__internal_91fde44e166e9757b6cd8f29a3bb26995ad33214e35f4208655bd82919f9c1b3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f8e1517cdce02cf7dfe8ec5fe32d775570e71661c9650239e09e3b234f62c3b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8e1517cdce02cf7dfe8ec5fe32d775570e71661c9650239e09e3b234f62c3b4->enter($__internal_f8e1517cdce02cf7dfe8ec5fe32d775570e71661c9650239e09e3b234f62c3b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f8e1517cdce02cf7dfe8ec5fe32d775570e71661c9650239e09e3b234f62c3b4->leave($__internal_f8e1517cdce02cf7dfe8ec5fe32d775570e71661c9650239e09e3b234f62c3b4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_17dd324a7d1c14c57cc3448a45d30b77515f37391bb91c0df9a5d76ff227c473 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17dd324a7d1c14c57cc3448a45d30b77515f37391bb91c0df9a5d76ff227c473->enter($__internal_17dd324a7d1c14c57cc3448a45d30b77515f37391bb91c0df9a5d76ff227c473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_17dd324a7d1c14c57cc3448a45d30b77515f37391bb91c0df9a5d76ff227c473->leave($__internal_17dd324a7d1c14c57cc3448a45d30b77515f37391bb91c0df9a5d76ff227c473_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8078b04777eb5d621da6e9d82a18ea3a3a06ceb6025ded8fc038164e1022e932 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8078b04777eb5d621da6e9d82a18ea3a3a06ceb6025ded8fc038164e1022e932->enter($__internal_8078b04777eb5d621da6e9d82a18ea3a3a06ceb6025ded8fc038164e1022e932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_8078b04777eb5d621da6e9d82a18ea3a3a06ceb6025ded8fc038164e1022e932->leave($__internal_8078b04777eb5d621da6e9d82a18ea3a3a06ceb6025ded8fc038164e1022e932_prof);

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
