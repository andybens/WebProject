<?php

/* OCPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_920330d607669ee893220094bffcafb4e36ef6a7e9bf620f6dbee4352c87cad9 extends Twig_Template
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
        $__internal_ec26cdd06e8fae4234a0b65c38843a86a8f12363f9a0430bd15bad83f02d6510 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec26cdd06e8fae4234a0b65c38843a86a8f12363f9a0430bd15bad83f02d6510->enter($__internal_ec26cdd06e8fae4234a0b65c38843a86a8f12363f9a0430bd15bad83f02d6510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_ec26cdd06e8fae4234a0b65c38843a86a8f12363f9a0430bd15bad83f02d6510->leave($__internal_ec26cdd06e8fae4234a0b65c38843a86a8f12363f9a0430bd15bad83f02d6510_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_c85141207eb92c4fe6421e28ce42cdc77d718bf6f481a1f590ebd3511e288296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c85141207eb92c4fe6421e28ce42cdc77d718bf6f481a1f590ebd3511e288296->enter($__internal_c85141207eb92c4fe6421e28ce42cdc77d718bf6f481a1f590ebd3511e288296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c85141207eb92c4fe6421e28ce42cdc77d718bf6f481a1f590ebd3511e288296->leave($__internal_c85141207eb92c4fe6421e28ce42cdc77d718bf6f481a1f590ebd3511e288296_prof);

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
