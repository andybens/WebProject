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
        $__internal_77cf55d61ffbb95bf07b0a08c6eb2da5301a8637f773110a43076b5d4e0d6c36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77cf55d61ffbb95bf07b0a08c6eb2da5301a8637f773110a43076b5d4e0d6c36->enter($__internal_77cf55d61ffbb95bf07b0a08c6eb2da5301a8637f773110a43076b5d4e0d6c36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77cf55d61ffbb95bf07b0a08c6eb2da5301a8637f773110a43076b5d4e0d6c36->leave($__internal_77cf55d61ffbb95bf07b0a08c6eb2da5301a8637f773110a43076b5d4e0d6c36_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7013b58b7a2b04e0c29ba21b53b6b5dbbf56d59d33564521e64d6ee2db9e385a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7013b58b7a2b04e0c29ba21b53b6b5dbbf56d59d33564521e64d6ee2db9e385a->enter($__internal_7013b58b7a2b04e0c29ba21b53b6b5dbbf56d59d33564521e64d6ee2db9e385a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7013b58b7a2b04e0c29ba21b53b6b5dbbf56d59d33564521e64d6ee2db9e385a->leave($__internal_7013b58b7a2b04e0c29ba21b53b6b5dbbf56d59d33564521e64d6ee2db9e385a_prof);

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
