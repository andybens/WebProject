<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_4bfd517035b48961246a140cd103f641384db0ef6e7759358931b2be21bdb87c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_50ad3915ebcc1d109f821e95ce6aa5f99fcfd30faa2e67fa6a259b1dc782cae0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50ad3915ebcc1d109f821e95ce6aa5f99fcfd30faa2e67fa6a259b1dc782cae0->enter($__internal_50ad3915ebcc1d109f821e95ce6aa5f99fcfd30faa2e67fa6a259b1dc782cae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50ad3915ebcc1d109f821e95ce6aa5f99fcfd30faa2e67fa6a259b1dc782cae0->leave($__internal_50ad3915ebcc1d109f821e95ce6aa5f99fcfd30faa2e67fa6a259b1dc782cae0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a4b62fb6a1bbc0907005c181283a257ff27b47244b393b4a327e9382d265dbb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4b62fb6a1bbc0907005c181283a257ff27b47244b393b4a327e9382d265dbb5->enter($__internal_a4b62fb6a1bbc0907005c181283a257ff27b47244b393b4a327e9382d265dbb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_a4b62fb6a1bbc0907005c181283a257ff27b47244b393b4a327e9382d265dbb5->leave($__internal_a4b62fb6a1bbc0907005c181283a257ff27b47244b393b4a327e9382d265dbb5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4875b6a2bdfe10fc365b77b7c997802db3d47e78d41f789a11a08f2669a39740 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4875b6a2bdfe10fc365b77b7c997802db3d47e78d41f789a11a08f2669a39740->enter($__internal_4875b6a2bdfe10fc365b77b7c997802db3d47e78d41f789a11a08f2669a39740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_4875b6a2bdfe10fc365b77b7c997802db3d47e78d41f789a11a08f2669a39740->leave($__internal_4875b6a2bdfe10fc365b77b7c997802db3d47e78d41f789a11a08f2669a39740_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ac2799705f2509eb49aa787c6e9eff3f3241a80040a8cd8bba390e4b7bc6df3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac2799705f2509eb49aa787c6e9eff3f3241a80040a8cd8bba390e4b7bc6df3d->enter($__internal_ac2799705f2509eb49aa787c6e9eff3f3241a80040a8cd8bba390e4b7bc6df3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_ac2799705f2509eb49aa787c6e9eff3f3241a80040a8cd8bba390e4b7bc6df3d->leave($__internal_ac2799705f2509eb49aa787c6e9eff3f3241a80040a8cd8bba390e4b7bc6df3d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
";
    }
}
