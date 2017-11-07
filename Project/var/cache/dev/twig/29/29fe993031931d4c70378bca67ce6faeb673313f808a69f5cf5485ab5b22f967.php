<?php

/* OCPlatformBundle:Advert:form.html.twig */
class __TwigTemplate_9bb4703a5f3c91b2dc3814f84f41033e5a969ce9fff73521f7f74c5016c0954f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_51779705f9130065a29797113fa6c682c25a5819ddb1544bb1c91c8457b5fb23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51779705f9130065a29797113fa6c682c25a5819ddb1544bb1c91c8457b5fb23->enter($__internal_51779705f9130065a29797113fa6c682c25a5819ddb1544bb1c91c8457b5fb23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:form.html.twig"));

        // line 2
        echo "
<h3>Formulaire d'annonce</h3>

<div class=\"well\">
  ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

  ";
        // line 9
        echo "  ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

  ";
        // line 12
        echo "  ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'row');
        echo "

  ";
        // line 15
        echo "  <div class=\"form-group\">
    ";
        // line 17
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Titre de l'annonce"));
        echo "

    ";
        // line 20
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "

    <div class=\"col-sm-10\">
      ";
        // line 24
        echo "      ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

  ";
        // line 29
        echo "  <div class=\"form-group\">
    ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Contenu de l'annonce"));
        echo "
    ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'errors');
        echo "
    <div class=\"col-sm-10\">
      ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

  ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author", array()), 'row');
        echo "
  ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "published", array()), 'row');
        echo "

  ";
        // line 41
        echo "  ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "

  ";
        // line 46
        echo "  ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

  ";
        // line 49
        echo "  ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>
";
        
        $__internal_51779705f9130065a29797113fa6c682c25a5819ddb1544bb1c91c8457b5fb23->leave($__internal_51779705f9130065a29797113fa6c682c25a5819ddb1544bb1c91c8457b5fb23_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 49,  103 => 46,  97 => 41,  92 => 38,  88 => 37,  81 => 33,  76 => 31,  72 => 30,  69 => 29,  61 => 24,  54 => 20,  48 => 17,  45 => 15,  39 => 12,  33 => 9,  28 => 6,  22 => 2,);
    }

    public function getSource()
    {
        return "{# src/OC/PlatformBundle/Resources/views/Advert/form.html.twig #}

<h3>Formulaire d'annonce</h3>

<div class=\"well\">
  {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}

  {# Les erreurs générales du formulaire. #}
  {{ form_errors(form) }}

  {# Génération du label + error + widget pour un champ. #}
  {{ form_row(form.date) }}

  {# Génération manuelle et éclatée : #}
  <div class=\"form-group\">
    {# Génération du label. #}
    {{ form_label(form.title, \"Titre de l'annonce\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}

    {# Affichage des erreurs pour ce champ précis. #}
    {{ form_errors(form.title) }}

    <div class=\"col-sm-10\">
      {# Génération de l'input. #}
      {{ form_widget(form.title, {'attr': {'class': 'form-control'}}) }}
    </div>
  </div>

  {# Idem pour un autre champ. #}
  <div class=\"form-group\">
    {{ form_label(form.content, \"Contenu de l'annonce\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
    {{ form_errors(form.content) }}
    <div class=\"col-sm-10\">
      {{ form_widget(form.content, {'attr': {'class': 'form-control'}}) }}
    </div>
  </div>

  {{ form_row(form.author) }}
  {{ form_row(form.published) }}

  {# Pour le bouton, pas de label ni d'erreur, on affiche juste le widget #}
  {{ form_widget(form.save, {'attr': {'class': 'btn btn-primary'}}) }}

  {# Génération automatique des champs pas encore écrits.
     Dans cet exemple, ce serait le champ CSRF (géré automatiquement par Symfony !)
     et tous les champs cachés (type « hidden »). #}
  {{ form_rest(form) }}

  {# Fermeture de la balise <form> du formulaire HTML #}
  {{ form_end(form) }}
</div>
";
    }
}
