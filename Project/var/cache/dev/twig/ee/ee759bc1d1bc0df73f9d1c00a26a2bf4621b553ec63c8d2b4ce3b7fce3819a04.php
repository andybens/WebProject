<?php

/* OCPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_915056cd4a0f4be95cc08bfe78d1c8c5e074bd34cdc6618a25fc977fa6d5cfa5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle:Advert:layout.html.twig", "OCPlatformBundle:Advert:add.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle:Advert:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e34a6354305be4fd626974bdf7498f3cb4cbc134400acc6ef00a6743b8ef891 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e34a6354305be4fd626974bdf7498f3cb4cbc134400acc6ef00a6743b8ef891->enter($__internal_0e34a6354305be4fd626974bdf7498f3cb4cbc134400acc6ef00a6743b8ef891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e34a6354305be4fd626974bdf7498f3cb4cbc134400acc6ef00a6743b8ef891->leave($__internal_0e34a6354305be4fd626974bdf7498f3cb4cbc134400acc6ef00a6743b8ef891_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d4d0fae911d1945981b810714c5e013d39bee1d88881113c81eb0620ce2a2ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d4d0fae911d1945981b810714c5e013d39bee1d88881113c81eb0620ce2a2ae->enter($__internal_7d4d0fae911d1945981b810714c5e013d39bee1d88881113c81eb0620ce2a2ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  <h2>Ajouter une annonce</h2>

  ";
        // line 9
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    Attention : cette annonce sera ajoutée directement
    sur la page d'accueil après validation du formulaire.
  </p>

";
        
        $__internal_7d4d0fae911d1945981b810714c5e013d39bee1d88881113c81eb0620ce2a2ae->leave($__internal_7d4d0fae911d1945981b810714c5e013d39bee1d88881113c81eb0620ce2a2ae_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  40 => 6,  34 => 5,  11 => 3,);
    }

    public function getSource()
    {
        return "{# src/OC/PlatformBundle/Resources/views/Advert/add.html.twig #}

{% extends \"OCPlatformBundle:Advert:layout.html.twig\" %}

{% block body %}

  <h2>Ajouter une annonce</h2>

  {{ include(\"OCPlatformBundle:Advert:form.html.twig\") }}

  <p>
    Attention : cette annonce sera ajoutée directement
    sur la page d'accueil après validation du formulaire.
  </p>

{% endblock %}
";
    }
}
