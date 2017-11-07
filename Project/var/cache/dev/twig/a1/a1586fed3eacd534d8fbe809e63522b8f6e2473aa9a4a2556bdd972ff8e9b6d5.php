<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_79aa38d61bb5c3066157fcc9f05002ea5843405a250b23a0488191fbacb4879d extends Twig_Template
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
        $__internal_3c0a1c6101944c076a35d4860311a9596ebf78a535d54eba89ef969223cf69e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c0a1c6101944c076a35d4860311a9596ebf78a535d54eba89ef969223cf69e1->enter($__internal_3c0a1c6101944c076a35d4860311a9596ebf78a535d54eba89ef969223cf69e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c0a1c6101944c076a35d4860311a9596ebf78a535d54eba89ef969223cf69e1->leave($__internal_3c0a1c6101944c076a35d4860311a9596ebf78a535d54eba89ef969223cf69e1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b487d1e8ff6b9f4cebed6eb2c8ea63d1b337a346c451a5cd737d5bfbdca6a5e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b487d1e8ff6b9f4cebed6eb2c8ea63d1b337a346c451a5cd737d5bfbdca6a5e5->enter($__internal_b487d1e8ff6b9f4cebed6eb2c8ea63d1b337a346c451a5cd737d5bfbdca6a5e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b487d1e8ff6b9f4cebed6eb2c8ea63d1b337a346c451a5cd737d5bfbdca6a5e5->leave($__internal_b487d1e8ff6b9f4cebed6eb2c8ea63d1b337a346c451a5cd737d5bfbdca6a5e5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_42e7cef644ca22749df62547ee0c3704c74d526eab435e7e43787760a476d6b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42e7cef644ca22749df62547ee0c3704c74d526eab435e7e43787760a476d6b1->enter($__internal_42e7cef644ca22749df62547ee0c3704c74d526eab435e7e43787760a476d6b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_42e7cef644ca22749df62547ee0c3704c74d526eab435e7e43787760a476d6b1->leave($__internal_42e7cef644ca22749df62547ee0c3704c74d526eab435e7e43787760a476d6b1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4f7e5f0e658b20982e84b49d4119f02ea4becfe91fedc62b34ed4392a73a0f80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f7e5f0e658b20982e84b49d4119f02ea4becfe91fedc62b34ed4392a73a0f80->enter($__internal_4f7e5f0e658b20982e84b49d4119f02ea4becfe91fedc62b34ed4392a73a0f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : null))));
        echo "
";
        
        $__internal_4f7e5f0e658b20982e84b49d4119f02ea4becfe91fedc62b34ed4392a73a0f80->leave($__internal_4f7e5f0e658b20982e84b49d4119f02ea4becfe91fedc62b34ed4392a73a0f80_prof);

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
