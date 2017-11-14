<?php

/* base.html.twig */
class __TwigTemplate_b3b69c522ffbd009e71f0dc15951de50804011526f0d6d886dec33f0b0ec9b63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d42ef2e6f90cea6a0ab25c9ec4919ca3e7ecdfc3b56bb795bbaccd42114ee5c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d42ef2e6f90cea6a0ab25c9ec4919ca3e7ecdfc3b56bb795bbaccd42114ee5c3->enter($__internal_d42ef2e6f90cea6a0ab25c9ec4919ca3e7ecdfc3b56bb795bbaccd42114ee5c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_d42ef2e6f90cea6a0ab25c9ec4919ca3e7ecdfc3b56bb795bbaccd42114ee5c3->leave($__internal_d42ef2e6f90cea6a0ab25c9ec4919ca3e7ecdfc3b56bb795bbaccd42114ee5c3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5465315e927ac3747afa78c70e51b0b0486dd777381052464997a3067d39e3ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5465315e927ac3747afa78c70e51b0b0486dd777381052464997a3067d39e3ae->enter($__internal_5465315e927ac3747afa78c70e51b0b0486dd777381052464997a3067d39e3ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5465315e927ac3747afa78c70e51b0b0486dd777381052464997a3067d39e3ae->leave($__internal_5465315e927ac3747afa78c70e51b0b0486dd777381052464997a3067d39e3ae_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3571816fe2f41f9cb174109aa9746a63e693c900578e8f445ec438e55e40b193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3571816fe2f41f9cb174109aa9746a63e693c900578e8f445ec438e55e40b193->enter($__internal_3571816fe2f41f9cb174109aa9746a63e693c900578e8f445ec438e55e40b193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3571816fe2f41f9cb174109aa9746a63e693c900578e8f445ec438e55e40b193->leave($__internal_3571816fe2f41f9cb174109aa9746a63e693c900578e8f445ec438e55e40b193_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_53ddf6a36443dcac537dfa928466b63392adb78e69218847f8f56707929fbfa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53ddf6a36443dcac537dfa928466b63392adb78e69218847f8f56707929fbfa2->enter($__internal_53ddf6a36443dcac537dfa928466b63392adb78e69218847f8f56707929fbfa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_53ddf6a36443dcac537dfa928466b63392adb78e69218847f8f56707929fbfa2->leave($__internal_53ddf6a36443dcac537dfa928466b63392adb78e69218847f8f56707929fbfa2_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_020a02bf66ac8c1feeb39d97fcc0e24abe3243e88891150b24cda4264cbeef3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_020a02bf66ac8c1feeb39d97fcc0e24abe3243e88891150b24cda4264cbeef3b->enter($__internal_020a02bf66ac8c1feeb39d97fcc0e24abe3243e88891150b24cda4264cbeef3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_020a02bf66ac8c1feeb39d97fcc0e24abe3243e88891150b24cda4264cbeef3b->leave($__internal_020a02bf66ac8c1feeb39d97fcc0e24abe3243e88891150b24cda4264cbeef3b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
";
    }
}
