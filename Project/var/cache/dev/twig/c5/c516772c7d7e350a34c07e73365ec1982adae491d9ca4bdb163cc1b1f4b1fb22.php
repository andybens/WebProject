<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_21305a0307a4ffd9280a3e9d82c663329ad7b7703af7cd06465e75aa0364a285 extends Twig_Template
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
        $__internal_5aa81d90c3b330fd9be5b4a757b2a5ccd8caf33257975d5f2327cb9adb3967b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aa81d90c3b330fd9be5b4a757b2a5ccd8caf33257975d5f2327cb9adb3967b3->enter($__internal_5aa81d90c3b330fd9be5b4a757b2a5ccd8caf33257975d5f2327cb9adb3967b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5aa81d90c3b330fd9be5b4a757b2a5ccd8caf33257975d5f2327cb9adb3967b3->leave($__internal_5aa81d90c3b330fd9be5b4a757b2a5ccd8caf33257975d5f2327cb9adb3967b3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4c53c2100f202700bbd08f9c6ca33fe554c3d291a08eed2ea690aaba19c607d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c53c2100f202700bbd08f9c6ca33fe554c3d291a08eed2ea690aaba19c607d6->enter($__internal_4c53c2100f202700bbd08f9c6ca33fe554c3d291a08eed2ea690aaba19c607d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4c53c2100f202700bbd08f9c6ca33fe554c3d291a08eed2ea690aaba19c607d6->leave($__internal_4c53c2100f202700bbd08f9c6ca33fe554c3d291a08eed2ea690aaba19c607d6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1b35ec6acf0db2fe4ac465748fffa5b7ba637e6f568e2785287ae477e4c209e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b35ec6acf0db2fe4ac465748fffa5b7ba637e6f568e2785287ae477e4c209e6->enter($__internal_1b35ec6acf0db2fe4ac465748fffa5b7ba637e6f568e2785287ae477e4c209e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1b35ec6acf0db2fe4ac465748fffa5b7ba637e6f568e2785287ae477e4c209e6->leave($__internal_1b35ec6acf0db2fe4ac465748fffa5b7ba637e6f568e2785287ae477e4c209e6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_735a822d7fdb7db2fa0b967435cec70c8ea8bed82cf051d32399ed7ce915240e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_735a822d7fdb7db2fa0b967435cec70c8ea8bed82cf051d32399ed7ce915240e->enter($__internal_735a822d7fdb7db2fa0b967435cec70c8ea8bed82cf051d32399ed7ce915240e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_735a822d7fdb7db2fa0b967435cec70c8ea8bed82cf051d32399ed7ce915240e->leave($__internal_735a822d7fdb7db2fa0b967435cec70c8ea8bed82cf051d32399ed7ce915240e_prof);

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
