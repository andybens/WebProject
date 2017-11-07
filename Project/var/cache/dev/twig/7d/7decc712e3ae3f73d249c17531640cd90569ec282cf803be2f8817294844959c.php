<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_e607b910c41c2d88f9f1b03104cd126027634c9c80cee2b76d7b4715a15ec372 extends Twig_Template
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
        $__internal_6f38216efaa9668d263aae9f9da451c2ddbe7a3fcd2ec1c72b1464d16e9b4cb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f38216efaa9668d263aae9f9da451c2ddbe7a3fcd2ec1c72b1464d16e9b4cb9->enter($__internal_6f38216efaa9668d263aae9f9da451c2ddbe7a3fcd2ec1c72b1464d16e9b4cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f38216efaa9668d263aae9f9da451c2ddbe7a3fcd2ec1c72b1464d16e9b4cb9->leave($__internal_6f38216efaa9668d263aae9f9da451c2ddbe7a3fcd2ec1c72b1464d16e9b4cb9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_278ddbe6525560f53003dc28ad6e17ee42f85ff0fd7df1ca17687092ec4abd68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_278ddbe6525560f53003dc28ad6e17ee42f85ff0fd7df1ca17687092ec4abd68->enter($__internal_278ddbe6525560f53003dc28ad6e17ee42f85ff0fd7df1ca17687092ec4abd68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : null))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_278ddbe6525560f53003dc28ad6e17ee42f85ff0fd7df1ca17687092ec4abd68->leave($__internal_278ddbe6525560f53003dc28ad6e17ee42f85ff0fd7df1ca17687092ec4abd68_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6ee1cc006171c2e61e312c570d675aba29fa9b07027ff2a45c931d6cf1af20d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ee1cc006171c2e61e312c570d675aba29fa9b07027ff2a45c931d6cf1af20d2->enter($__internal_6ee1cc006171c2e61e312c570d675aba29fa9b07027ff2a45c931d6cf1af20d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_6ee1cc006171c2e61e312c570d675aba29fa9b07027ff2a45c931d6cf1af20d2->leave($__internal_6ee1cc006171c2e61e312c570d675aba29fa9b07027ff2a45c931d6cf1af20d2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_84fbef15ee18dee6e3a0fd6ff45451d4e4cf0f6c12f20372db3b2074a49c4d14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84fbef15ee18dee6e3a0fd6ff45451d4e4cf0f6c12f20372db3b2074a49c4d14->enter($__internal_84fbef15ee18dee6e3a0fd6ff45451d4e4cf0f6c12f20372db3b2074a49c4d14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "hasexception", array())) {
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
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : null))));
            echo "
        </div>
    ";
        }
        
        $__internal_84fbef15ee18dee6e3a0fd6ff45451d4e4cf0f6c12f20372db3b2074a49c4d14->leave($__internal_84fbef15ee18dee6e3a0fd6ff45451d4e4cf0f6c12f20372db3b2074a49c4d14_prof);

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
