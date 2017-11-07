<?php

/* OCPlatformBundle:Default:add.html.twig */
class __TwigTemplate_8d048675e64e7b29c02f34f80589875ec842b58d140a70139ebac3a150690bd3 extends Twig_Template
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
        $__internal_256a780754663e9bb79ab2967363999d4f5252b1595e9667afd2121059e07ad5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_256a780754663e9bb79ab2967363999d4f5252b1595e9667afd2121059e07ad5->enter($__internal_256a780754663e9bb79ab2967363999d4f5252b1595e9667afd2121059e07ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Default:add.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_256a780754663e9bb79ab2967363999d4f5252b1595e9667afd2121059e07ad5->leave($__internal_256a780754663e9bb79ab2967363999d4f5252b1595e9667afd2121059e07ad5_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_09274de5ecb59242798401044d483823c9474355c3290c67f3b8c8ad592d6f97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09274de5ecb59242798401044d483823c9474355c3290c67f3b8c8ad592d6f97->enter($__internal_09274de5ecb59242798401044d483823c9474355c3290c67f3b8c8ad592d6f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "
  <h2>Ajouter une annonce</h2>

  ";
        // line 5
        echo twig_include($this->env, $context, "OCPlatformBundle:Default:form.html.twig");
        echo "

  <p>
    Attention : cette annonce sera ajoutée directement
    sur la page d'accueil après validation du formulaire.
  </p>

";
        
        $__internal_09274de5ecb59242798401044d483823c9474355c3290c67f3b8c8ad592d6f97->leave($__internal_09274de5ecb59242798401044d483823c9474355c3290c67f3b8c8ad592d6f97_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Default:add.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  35 => 2,  23 => 1,);
    }

    public function getSource()
    {
        return "{% block body %}

  <h2>Ajouter une annonce</h2>

  {{ include(\"OCPlatformBundle:Default:form.html.twig\") }}

  <p>
    Attention : cette annonce sera ajoutée directement
    sur la page d'accueil après validation du formulaire.
  </p>

{% endblock %}
";
    }
}
