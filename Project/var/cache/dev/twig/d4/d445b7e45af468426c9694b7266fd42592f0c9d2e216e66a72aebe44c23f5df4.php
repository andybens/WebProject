<?php

/* OCPlatformBundle:Advert:form.html.twig */
class __TwigTemplate_8e735819d2d8b26976de702eae18d2ba350a6dd377961a1f9488bd6e4ebe8bdf extends Twig_Template
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
        $__internal_b9b1d288ce872c0cfc36d38fe4a0d908819e60326a21bc5775ab1d59e73c7cd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9b1d288ce872c0cfc36d38fe4a0d908819e60326a21bc5775ab1d59e73c7cd6->enter($__internal_b9b1d288ce872c0cfc36d38fe4a0d908819e60326a21bc5775ab1d59e73c7cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:form.html.twig"));

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
        // line 40
        echo "  ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "

  ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categories", array()), 'row');
        echo "
  <a href=\"#\" id=\"add_category\" class=\"btn btn-default\">Ajouter une catégorie</a>

  ";
        // line 48
        echo "  ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

  ";
        // line 51
        echo "  ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</div>

<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>

";
        // line 57
        echo "<script type=\"text/javascript\">
  \$(document).ready(function() {
    // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
    var \$container = \$('div#oc_platformbundle_advert_categories');

    // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
    var index = \$container.find(':input').length;

    // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
    \$('#add_category').click(function(e) {
      addCategory(\$container);

      e.preventDefault(); // évite qu'un # apparaisse dans l'URL
      return false;
    });

    // On ajoute un premier champ automatiquement s'il n'en existe pas déjà un (cas d'une nouvelle annonce par exemple).
    if (index == 0) {
      addCategory(\$container);
    } else {
      // S'il existe déjà des catégories, on ajoute un lien de suppression pour chacune d'entre elles
      \$container.children('div').each(function() {
        addDeleteLink(\$(this));
      });
    }

    // La fonction qui ajoute un formulaire CategoryType
    function addCategory(\$container) {
      // Dans le contenu de l'attribut « data-prototype », on remplace :
      // - le texte \"__name__label__\" qu'il contient par le label du champ
      // - le texte \"__name__\" qu'il contient par le numéro du champ
      var template = \$container.attr('data-prototype')
        .replace(/__name__label__/g, 'Catégorie n°' + (index+1))
        .replace(/__name__/g,        index)
      ;

      // On crée un objet jquery qui contient ce template
      var \$prototype = \$(template);

      // On ajoute au prototype un lien pour pouvoir supprimer la catégorie
      addDeleteLink(\$prototype);

      // On ajoute le prototype modifié à la fin de la balise <div>
      \$container.append(\$prototype);

      // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
      index++;
    }

    // La fonction qui ajoute un lien de suppression d'une catégorie
    function addDeleteLink(\$prototype) {
      // Création du lien
      var \$deleteLink = \$('<a href=\"#\" class=\"btn btn-danger\">Supprimer</a>');

      // Ajout du lien
      \$prototype.append(\$deleteLink);

      // Ajout du listener sur le clic du lien pour effectivement supprimer la catégorie
      \$deleteLink.click(function(e) {
        \$prototype.remove();

        e.preventDefault(); // évite qu'un # apparaisse dans l'URL
        return false;
      });
    }
  });
</script>
";
        
        $__internal_b9b1d288ce872c0cfc36d38fe4a0d908819e60326a21bc5775ab1d59e73c7cd6->leave($__internal_b9b1d288ce872c0cfc36d38fe4a0d908819e60326a21bc5775ab1d59e73c7cd6_prof);

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
        return array (  123 => 57,  114 => 51,  108 => 48,  102 => 42,  96 => 40,  92 => 38,  88 => 37,  81 => 33,  76 => 31,  72 => 30,  69 => 29,  61 => 24,  54 => 20,  48 => 17,  45 => 15,  39 => 12,  33 => 9,  28 => 6,  22 => 2,);
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

  {{ form_row(form.categories) }}
  <a href=\"#\" id=\"add_category\" class=\"btn btn-default\">Ajouter une catégorie</a>

  {# Génération automatique des champs pas encore écrits.
     Dans cet exemple, ce serait le champ CSRF (géré automatiquement par Symfony !)
     et tous les champs cachés (type « hidden »). #}
  {{ form_rest(form) }}

  {# Fermeture de la balise <form> du formulaire HTML #}
  {{ form_end(form) }}
</div>

<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>

{# Voici le script en question : #}
<script type=\"text/javascript\">
  \$(document).ready(function() {
    // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
    var \$container = \$('div#oc_platformbundle_advert_categories');

    // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
    var index = \$container.find(':input').length;

    // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
    \$('#add_category').click(function(e) {
      addCategory(\$container);

      e.preventDefault(); // évite qu'un # apparaisse dans l'URL
      return false;
    });

    // On ajoute un premier champ automatiquement s'il n'en existe pas déjà un (cas d'une nouvelle annonce par exemple).
    if (index == 0) {
      addCategory(\$container);
    } else {
      // S'il existe déjà des catégories, on ajoute un lien de suppression pour chacune d'entre elles
      \$container.children('div').each(function() {
        addDeleteLink(\$(this));
      });
    }

    // La fonction qui ajoute un formulaire CategoryType
    function addCategory(\$container) {
      // Dans le contenu de l'attribut « data-prototype », on remplace :
      // - le texte \"__name__label__\" qu'il contient par le label du champ
      // - le texte \"__name__\" qu'il contient par le numéro du champ
      var template = \$container.attr('data-prototype')
        .replace(/__name__label__/g, 'Catégorie n°' + (index+1))
        .replace(/__name__/g,        index)
      ;

      // On crée un objet jquery qui contient ce template
      var \$prototype = \$(template);

      // On ajoute au prototype un lien pour pouvoir supprimer la catégorie
      addDeleteLink(\$prototype);

      // On ajoute le prototype modifié à la fin de la balise <div>
      \$container.append(\$prototype);

      // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
      index++;
    }

    // La fonction qui ajoute un lien de suppression d'une catégorie
    function addDeleteLink(\$prototype) {
      // Création du lien
      var \$deleteLink = \$('<a href=\"#\" class=\"btn btn-danger\">Supprimer</a>');

      // Ajout du lien
      \$prototype.append(\$deleteLink);

      // Ajout du listener sur le clic du lien pour effectivement supprimer la catégorie
      \$deleteLink.click(function(e) {
        \$prototype.remove();

        e.preventDefault(); // évite qu'un # apparaisse dans l'URL
        return false;
      });
    }
  });
</script>
";
    }
}
