<?php

/* OCPlatformBundle:Default:add.html.twig */
class __TwigTemplate_e46675619787b859f0c600fc630c382ad5a4f8f26ad742e4654cb07f54323515 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9fc687f853580d8fdf8c6a26483274a93446aa0d7befad74dbdb9f2ed77d182 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9fc687f853580d8fdf8c6a26483274a93446aa0d7befad74dbdb9f2ed77d182->enter($__internal_d9fc687f853580d8fdf8c6a26483274a93446aa0d7befad74dbdb9f2ed77d182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Default:add.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_d9fc687f853580d8fdf8c6a26483274a93446aa0d7befad74dbdb9f2ed77d182->leave($__internal_d9fc687f853580d8fdf8c6a26483274a93446aa0d7befad74dbdb9f2ed77d182_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_580fb6cd3f99dc863e439a2d1dae189075f7ec599d64d0e995ce732b8ecf4388 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_580fb6cd3f99dc863e439a2d1dae189075f7ec599d64d0e995ce732b8ecf4388->enter($__internal_580fb6cd3f99dc863e439a2d1dae189075f7ec599d64d0e995ce732b8ecf4388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "
  <h2>Ajouter une annonce</h2>

  ";
        // line 5
        echo twig_include($this->env, $context, "OCPlatformBundle:Default:form.html.twig");
        echo "
  ";
        // line 6
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "bootstrap_3_layout.html.twig"));
        // line 7
        echo "  <p>
    Attention : cette annonce sera ajoutée directement
    sur la page d'accueil après validation du formulaire.
  </p>

";
        
        $__internal_580fb6cd3f99dc863e439a2d1dae189075f7ec599d64d0e995ce732b8ecf4388->leave($__internal_580fb6cd3f99dc863e439a2d1dae189075f7ec599d64d0e995ce732b8ecf4388_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Default:add.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  46 => 7,  44 => 6,  40 => 5,  35 => 2,  23 => 1,);
    }

    public function getSource()
    {
        return "{% block body %}

  <h2>Ajouter une annonce</h2>

  {{ include(\"OCPlatformBundle:Default:form.html.twig\") }}
  {% form_theme form 'bootstrap_3_layout.html.twig'  %}
  <p>
    Attention : cette annonce sera ajoutée directement
    sur la page d'accueil après validation du formulaire.
  </p>

{% endblock %}
";
    }
}
