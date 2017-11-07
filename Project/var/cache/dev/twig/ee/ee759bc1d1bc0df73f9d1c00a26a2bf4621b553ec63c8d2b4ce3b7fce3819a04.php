<?php

/* OCPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_915056cd4a0f4be95cc08bfe78d1c8c5e074bd34cdc6618a25fc977fa6d5cfa5 extends Twig_Template
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
        $__internal_9ea14a4ffa25176f4aa82b29e3b59cc1c45234912447bfbb85245b379321b475 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ea14a4ffa25176f4aa82b29e3b59cc1c45234912447bfbb85245b379321b475->enter($__internal_9ea14a4ffa25176f4aa82b29e3b59cc1c45234912447bfbb85245b379321b475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_9ea14a4ffa25176f4aa82b29e3b59cc1c45234912447bfbb85245b379321b475->leave($__internal_9ea14a4ffa25176f4aa82b29e3b59cc1c45234912447bfbb85245b379321b475_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_3794dac270b53bd9a50f915706bb1307b0c3e249ca75726defa56b9fda0ea217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3794dac270b53bd9a50f915706bb1307b0c3e249ca75726defa56b9fda0ea217->enter($__internal_3794dac270b53bd9a50f915706bb1307b0c3e249ca75726defa56b9fda0ea217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "
  <h2>Ajouter une annonce</h2>

  ";
        // line 5
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    Attention : cette annonce sera ajoutée directement
    sur la page d'accueil après validation du formulaire.
  </p>

";
        
        $__internal_3794dac270b53bd9a50f915706bb1307b0c3e249ca75726defa56b9fda0ea217->leave($__internal_3794dac270b53bd9a50f915706bb1307b0c3e249ca75726defa56b9fda0ea217_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:add.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  35 => 2,  23 => 1,);
    }

    public function getSource()
    {
        return "{% block body %}

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
