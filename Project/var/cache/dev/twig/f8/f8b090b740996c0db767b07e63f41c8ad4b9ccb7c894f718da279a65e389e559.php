<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b0f4141b93c9b110bd1df128866e3a3b4ff5a3eba4aa60785ae0a0e4e0db50aa extends Twig_Template
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
        $__internal_b7456473eb6dd0012d47e904c0a519ab5a114ffe3f1a3ef38e8c4543be660f2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7456473eb6dd0012d47e904c0a519ab5a114ffe3f1a3ef38e8c4543be660f2a->enter($__internal_b7456473eb6dd0012d47e904c0a519ab5a114ffe3f1a3ef38e8c4543be660f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7456473eb6dd0012d47e904c0a519ab5a114ffe3f1a3ef38e8c4543be660f2a->leave($__internal_b7456473eb6dd0012d47e904c0a519ab5a114ffe3f1a3ef38e8c4543be660f2a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4e209b0ad078c4787fcf4a95fc8f50ec4e1083ff16d6ff5a89c99373f12602a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e209b0ad078c4787fcf4a95fc8f50ec4e1083ff16d6ff5a89c99373f12602a8->enter($__internal_4e209b0ad078c4787fcf4a95fc8f50ec4e1083ff16d6ff5a89c99373f12602a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4e209b0ad078c4787fcf4a95fc8f50ec4e1083ff16d6ff5a89c99373f12602a8->leave($__internal_4e209b0ad078c4787fcf4a95fc8f50ec4e1083ff16d6ff5a89c99373f12602a8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_58fbc0e3b44ffb1ea1fd5a014247fc45aaaddc762256dcce8b29b27ae6a95615 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58fbc0e3b44ffb1ea1fd5a014247fc45aaaddc762256dcce8b29b27ae6a95615->enter($__internal_58fbc0e3b44ffb1ea1fd5a014247fc45aaaddc762256dcce8b29b27ae6a95615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "html", null, true);
        echo ")
";
        
        $__internal_58fbc0e3b44ffb1ea1fd5a014247fc45aaaddc762256dcce8b29b27ae6a95615->leave($__internal_58fbc0e3b44ffb1ea1fd5a014247fc45aaaddc762256dcce8b29b27ae6a95615_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b9873361521586146d7cbb51e4d7d63d34ef6b4ff1cf809a352f1729a06b3656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9873361521586146d7cbb51e4d7d63d34ef6b4ff1cf809a352f1729a06b3656->enter($__internal_b9873361521586146d7cbb51e4d7d63d34ef6b4ff1cf809a352f1729a06b3656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b9873361521586146d7cbb51e4d7d63d34ef6b4ff1cf809a352f1729a06b3656->leave($__internal_b9873361521586146d7cbb51e4d7d63d34ef6b4ff1cf809a352f1729a06b3656_prof);

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
