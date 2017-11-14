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
        $__internal_4fc418a2136c3b15fdfa51be54da77207990ced088c92e320c83db53d2760fae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fc418a2136c3b15fdfa51be54da77207990ced088c92e320c83db53d2760fae->enter($__internal_4fc418a2136c3b15fdfa51be54da77207990ced088c92e320c83db53d2760fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fc418a2136c3b15fdfa51be54da77207990ced088c92e320c83db53d2760fae->leave($__internal_4fc418a2136c3b15fdfa51be54da77207990ced088c92e320c83db53d2760fae_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_06cbe55bbc8bd75dd7bee9450b0788bd08ffe6ceaaa11184dd731c5c2f52b83c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06cbe55bbc8bd75dd7bee9450b0788bd08ffe6ceaaa11184dd731c5c2f52b83c->enter($__internal_06cbe55bbc8bd75dd7bee9450b0788bd08ffe6ceaaa11184dd731c5c2f52b83c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_06cbe55bbc8bd75dd7bee9450b0788bd08ffe6ceaaa11184dd731c5c2f52b83c->leave($__internal_06cbe55bbc8bd75dd7bee9450b0788bd08ffe6ceaaa11184dd731c5c2f52b83c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1586d4b36e1769ae8e0dcd41dd80ff178380198b511d08a7ca0e1cc3d54976a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1586d4b36e1769ae8e0dcd41dd80ff178380198b511d08a7ca0e1cc3d54976a5->enter($__internal_1586d4b36e1769ae8e0dcd41dd80ff178380198b511d08a7ca0e1cc3d54976a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1586d4b36e1769ae8e0dcd41dd80ff178380198b511d08a7ca0e1cc3d54976a5->leave($__internal_1586d4b36e1769ae8e0dcd41dd80ff178380198b511d08a7ca0e1cc3d54976a5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_327e904e6f4b65632ac9a0f69a8ba7d832c618a1efeaf870fbe3b1753446ae40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_327e904e6f4b65632ac9a0f69a8ba7d832c618a1efeaf870fbe3b1753446ae40->enter($__internal_327e904e6f4b65632ac9a0f69a8ba7d832c618a1efeaf870fbe3b1753446ae40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_327e904e6f4b65632ac9a0f69a8ba7d832c618a1efeaf870fbe3b1753446ae40->leave($__internal_327e904e6f4b65632ac9a0f69a8ba7d832c618a1efeaf870fbe3b1753446ae40_prof);

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
