<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d714fbbe96b190a7583c00489d8dc3f6a5092d1f0910664bdeb8747fe6173ad5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0ea310b80f94083b4d87cb7737914c130222fe930513aefc884487f564d634c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0ea310b80f94083b4d87cb7737914c130222fe930513aefc884487f564d634c->enter($__internal_c0ea310b80f94083b4d87cb7737914c130222fe930513aefc884487f564d634c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0ea310b80f94083b4d87cb7737914c130222fe930513aefc884487f564d634c->leave($__internal_c0ea310b80f94083b4d87cb7737914c130222fe930513aefc884487f564d634c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_90375c75fa6f3f52a41b2a855e4a822196fc4868f7e0c7b13e0ed9b477feeaa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90375c75fa6f3f52a41b2a855e4a822196fc4868f7e0c7b13e0ed9b477feeaa5->enter($__internal_90375c75fa6f3f52a41b2a855e4a822196fc4868f7e0c7b13e0ed9b477feeaa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_90375c75fa6f3f52a41b2a855e4a822196fc4868f7e0c7b13e0ed9b477feeaa5->leave($__internal_90375c75fa6f3f52a41b2a855e4a822196fc4868f7e0c7b13e0ed9b477feeaa5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_430f9ad3f155e574130d8f45ce68da33f0be88f34ae15d5400ac8918d3172b16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_430f9ad3f155e574130d8f45ce68da33f0be88f34ae15d5400ac8918d3172b16->enter($__internal_430f9ad3f155e574130d8f45ce68da33f0be88f34ae15d5400ac8918d3172b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_430f9ad3f155e574130d8f45ce68da33f0be88f34ae15d5400ac8918d3172b16->leave($__internal_430f9ad3f155e574130d8f45ce68da33f0be88f34ae15d5400ac8918d3172b16_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d0a9c6ef436fd33cf0e9d91c3f5402063b88386fd85fd04094bdd2039f272577 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0a9c6ef436fd33cf0e9d91c3f5402063b88386fd85fd04094bdd2039f272577->enter($__internal_d0a9c6ef436fd33cf0e9d91c3f5402063b88386fd85fd04094bdd2039f272577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d0a9c6ef436fd33cf0e9d91c3f5402063b88386fd85fd04094bdd2039f272577->leave($__internal_d0a9c6ef436fd33cf0e9d91c3f5402063b88386fd85fd04094bdd2039f272577_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
