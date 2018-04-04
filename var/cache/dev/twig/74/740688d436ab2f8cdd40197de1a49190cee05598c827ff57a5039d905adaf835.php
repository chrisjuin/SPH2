<?php

/* cli_client/new.html.twig */
class __TwigTemplate_d86013a7e954c937e9157b42d70fc411802c0b057d3c64e0434a418408631d70 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cli_client/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cli_client/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cli_client/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "


<div class=\"container\">
    ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->source); })()), 'form_start');
        echo "
        <div class=\"row\">
            <div class=\"col-md-6 col-md-4\">
                ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->source); })()), "nom", array()), 'label', array("label" => "NOM :"));
        echo "
                ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->source); })()), "nom", array()), 'errors');
        echo "
                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->source); })()), "nom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nom")));
        echo "
            </div>
            <div class=\"col-md-6 col-md-4\">
                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->source); })()), "prenom", array()), 'label', array("label" => "PRENOM :"));
        echo "
                ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->source); })()), "prenom", array()), 'errors');
        echo "
                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->source); })()), "prenom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Prenom")));
        echo "
            </div>
        
            <div class=\"col-md-6 col-md-4\">
                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->source); })()), "provenance", array()), 'label', array("label" => "PROVENANCE :"));
        echo "
                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->source); })()), "provenance", array()), 'errors');
        echo "
                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->source); })()), "provenance", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-8\">
                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->source); })()), "adresse", array()), 'label', array("label" => "ADRESSE :"));
        echo "
                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->source); })()), "adresse", array()), 'errors');
        echo "
                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->source); })()), "adresse", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Adresse")));
        echo "
            </div>
        </div>
        
        <div class=\"row\">
            <div class=\"col-md-6 col-md-4\">
                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->source); })()), "codePostal", array()), 'label', array("label" => "CODE POSTAL :"));
        echo "
                ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->source); })()), "codePostal", array()), 'errors');
        echo "
                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->source); })()), "codePostal", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Code postal")));
        echo "
            </div>
        
            <div class=\"col-md-6 col-md-4\">
                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 44, $this->source); })()), "ville", array()), 'label', array("label" => "VILLE :"));
        echo "
                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 45, $this->source); })()), "ville", array()), 'errors');
        echo "
                ";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 46, $this->source); })()), "ville", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
        
        <div class=\"row\">
            <div class=\"col-md-6 col-md-4\">
                ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 52, $this->source); })()), "telephone", array()), 'label', array("label" => "TELEPHONE :"));
        echo "
                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->source); })()), "telephone", array()), 'errors');
        echo "
                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 54, $this->source); })()), "telephone", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "n° Telephone")));
        echo "
            </div>
        
            <div class=\"col-md-6 col-md-4\">
                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->source); })()), "email", array()), 'label', array("label" => "EMAIL :"));
        echo "
                ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 59, $this->source); })()), "email", array()), 'errors');
        echo "
                ";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 60, $this->source); })()), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Email")));
        echo "
            </div>
        </div>
        
        <div class=\"row, push\">
            <div class=\"col-md-8\">
                ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 66, $this->source); })()), "note", array()), 'label', array("label" => "NOTE :"));
        echo "
                ";
        // line 67
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 67, $this->source); })()), "note", array()), 'errors');
        echo "
                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 68, $this->source); })()), "note", array()), 'widget', array("attr" => array("textarea" => "rows", "rows" => "10", "class" => "form-control")));
        echo "
                
            </div>
        </div>
        
        <div class=\"row\">
            <div class=\"col-md-offset-9\">
                <input type=\"submit\" value=\"Enregistrer Client\" class=\"btn btn-success btn-block\" />
                <a href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_client_index");
        echo "\" class=\"btn btn-warning btn-block\">Retour</a>
            </div>
        </div>  
    ";
        // line 79
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 79, $this->source); })()), 'form_end');
        echo "
</div>
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cli_client/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 79,  211 => 76,  200 => 68,  196 => 67,  192 => 66,  183 => 60,  179 => 59,  175 => 58,  168 => 54,  164 => 53,  160 => 52,  151 => 46,  147 => 45,  143 => 44,  136 => 40,  132 => 39,  128 => 38,  119 => 32,  115 => 31,  111 => 30,  102 => 24,  98 => 23,  94 => 22,  87 => 18,  83 => 17,  79 => 16,  73 => 13,  69 => 12,  65 => 11,  59 => 8,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}



<div class=\"container\">
    {{ form_start(form) }}
        <div class=\"row\">
            <div class=\"col-md-6 col-md-4\">
                {{ form_label(form.nom, 'NOM :') }}
                {{ form_errors(form.nom) }}
                {{ form_widget(form.nom, { 'attr': {'class': 'form-control', 'placeholder' : 'Nom'} }) }}
            </div>
            <div class=\"col-md-6 col-md-4\">
                {{ form_label(form.prenom, 'PRENOM :') }}
                {{ form_errors(form.prenom) }}
                {{ form_widget(form.prenom, { 'attr': {'class': 'form-control', 'placeholder' : 'Prenom'} }) }}
            </div>
        
            <div class=\"col-md-6 col-md-4\">
                {{ form_label(form.provenance , 'PROVENANCE :') }}
                {{ form_errors(form.provenance) }}
                {{ form_widget(form.provenance, { 'attr': { 'class': 'form-control' } }) }}
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-8\">
                {{ form_label(form.adresse, 'ADRESSE :') }}
                {{ form_errors(form.adresse) }}
                {{ form_widget(form.adresse, { 'attr': {'class': 'form-control', 'placeholder' : 'Adresse'} }) }}
            </div>
        </div>
        
        <div class=\"row\">
            <div class=\"col-md-6 col-md-4\">
                {{ form_label(form.codePostal, 'CODE POSTAL :') }}
                {{ form_errors(form.codePostal) }}
                {{ form_widget(form.codePostal, { 'attr': {'class': 'form-control', 'placeholder' : 'Code postal'} }) }}
            </div>
        
            <div class=\"col-md-6 col-md-4\">
                {{ form_label(form.ville, 'VILLE :') }}
                {{ form_errors(form.ville) }}
                {{ form_widget(form.ville, { 'attr': {'class': 'form-control'} }) }}
            </div>
        </div>
        
        <div class=\"row\">
            <div class=\"col-md-6 col-md-4\">
                {{ form_label(form.telephone, 'TELEPHONE :') }}
                {{ form_errors(form.telephone) }}
                {{ form_widget(form.telephone, { 'attr': {'class': 'form-control', 'placeholder' : 'n° Telephone'} }) }}
            </div>
        
            <div class=\"col-md-6 col-md-4\">
                {{ form_label(form.email, 'EMAIL :') }}
                {{ form_errors(form.email) }}
                {{ form_widget(form.email, { 'attr': {'class': 'form-control', 'placeholder' : 'Email'} }) }}
            </div>
        </div>
        
        <div class=\"row, push\">
            <div class=\"col-md-8\">
                {{ form_label(form.note, 'NOTE :') }}
                {{ form_errors(form.note) }}
                {{ form_widget(form.note, { 'attr': { 'textarea':'rows', 'rows':'10', 'class': 'form-control'} }) }}
                
            </div>
        </div>
        
        <div class=\"row\">
            <div class=\"col-md-offset-9\">
                <input type=\"submit\" value=\"Enregistrer Client\" class=\"btn btn-success btn-block\" />
                <a href=\"{{ path('fiche_client_index') }}\" class=\"btn btn-warning btn-block\">Retour</a>
            </div>
        </div>  
    {{ form_end(form) }}
</div>
    
{% endblock %}
", "cli_client/new.html.twig", "/home/simplon/projet-symfony/SPH2/app/Resources/views/cli_client/new.html.twig");
    }
}
