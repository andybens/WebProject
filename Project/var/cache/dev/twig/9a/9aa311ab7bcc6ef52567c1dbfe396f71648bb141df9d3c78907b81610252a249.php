<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_326747f5bdb670baecf569bdd2f1880956d65779601730feba81ae337ab115af extends Twig_Template
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
        $__internal_9da40e86efc4d57ef8faf6117ebe511a505751cced735a0d8875f335b19ca746 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9da40e86efc4d57ef8faf6117ebe511a505751cced735a0d8875f335b19ca746->enter($__internal_9da40e86efc4d57ef8faf6117ebe511a505751cced735a0d8875f335b19ca746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9da40e86efc4d57ef8faf6117ebe511a505751cced735a0d8875f335b19ca746->leave($__internal_9da40e86efc4d57ef8faf6117ebe511a505751cced735a0d8875f335b19ca746_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a51aca7196e36695e7aa8f407b78266f7a31d1f7cb1a24459198472a14ef6414 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a51aca7196e36695e7aa8f407b78266f7a31d1f7cb1a24459198472a14ef6414->enter($__internal_a51aca7196e36695e7aa8f407b78266f7a31d1f7cb1a24459198472a14ef6414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a51aca7196e36695e7aa8f407b78266f7a31d1f7cb1a24459198472a14ef6414->leave($__internal_a51aca7196e36695e7aa8f407b78266f7a31d1f7cb1a24459198472a14ef6414_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9f27be2344394a95dc3dfa58089164730def0cf5f223651c84de9c5f0d11fab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f27be2344394a95dc3dfa58089164730def0cf5f223651c84de9c5f0d11fab4->enter($__internal_9f27be2344394a95dc3dfa58089164730def0cf5f223651c84de9c5f0d11fab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9f27be2344394a95dc3dfa58089164730def0cf5f223651c84de9c5f0d11fab4->leave($__internal_9f27be2344394a95dc3dfa58089164730def0cf5f223651c84de9c5f0d11fab4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e80c2187f9663f00970cfc687d8af950f41b64450ed63d8750e0c049db913216 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e80c2187f9663f00970cfc687d8af950f41b64450ed63d8750e0c049db913216->enter($__internal_e80c2187f9663f00970cfc687d8af950f41b64450ed63d8750e0c049db913216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e80c2187f9663f00970cfc687d8af950f41b64450ed63d8750e0c049db913216->leave($__internal_e80c2187f9663f00970cfc687d8af950f41b64450ed63d8750e0c049db913216_prof);

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
