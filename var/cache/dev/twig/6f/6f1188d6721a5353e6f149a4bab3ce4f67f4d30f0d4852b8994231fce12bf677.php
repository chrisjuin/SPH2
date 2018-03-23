<?php

/* cli_client/edit.html.twig */
class __TwigTemplate_d81eafe367e93e842f08b452c79d51afebb0078a85db2702324ff67f93b71ed2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cli_client/edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cli_client/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cli_client/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Creation client";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 7, $this->source); })()), 'form_start');
        echo "
                    <div class=\"row\">
            <div class=\"col-md-6 col-md-4\">
                ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 10, $this->source); })()), "nom", array()), 'label', array("label" => "NOM :"));
        echo "
                ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 11, $this->source); })()), "nom", array()), 'errors');
        echo "
                ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 12, $this->source); })()), "nom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nom")));
        echo "
            </div>
            <div class=\"col-md-6 col-md-4\">
                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 15, $this->source); })()), "prenom", array()), 'label', array("label" => "PRENOM :"));
        echo "
                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 16, $this->source); })()), "prenom", array()), 'errors');
        echo "
                ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 17, $this->source); })()), "prenom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Prenom")));
        echo "
            </div>
        
            <div class=\"col-md-6 col-md-4\">
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 21, $this->source); })()), "provenance", array()), 'label', array("label" => "PROVENANCE :"));
        echo "
                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 22, $this->source); })()), "provenance", array()), 'errors');
        echo "
                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 23, $this->source); })()), "provenance", array()), 'widget', array("attr" => array("select" => "name", "name" => "provenance", "class" => "form-control")));
        echo "
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-8\">
                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 29, $this->source); })()), "adresse", array()), 'label', array("label" => "ADRESSE :"));
        echo "
                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 30, $this->source); })()), "adresse", array()), 'errors');
        echo "
                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 31, $this->source); })()), "adresse", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Adresse")));
        echo "
            </div>
        </div>
        
        <div class=\"row\">
            <div class=\"col-md-6 col-md-4\">
                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 37, $this->source); })()), "codePostal", array()), 'label', array("label" => "CODE POSTAL :"));
        echo "
                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 38, $this->source); })()), "codePostal", array()), 'errors');
        echo "
                ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 39, $this->source); })()), "codePostal", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Code postal")));
        echo "
            </div>
        
            <div class=\"col-md-6 col-md-4\">
                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 43, $this->source); })()), "ville", array()), 'label', array("label" => "VILLE :"));
        echo "
                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 44, $this->source); })()), "ville", array()), 'errors');
        echo "
                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 45, $this->source); })()), "ville", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Ville")));
        echo "
            </div>
        </div>
        
        <div class=\"row\">
            <div class=\"col-md-6 col-md-4\">
                ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 51, $this->source); })()), "telephone", array()), 'label', array("label" => "TELEPHONE :"));
        echo "
                ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 52, $this->source); })()), "telephone", array()), 'errors');
        echo "
                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 53, $this->source); })()), "telephone", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "n° Telephone")));
        echo "
            </div>
        
            <div class=\"col-md-6 col-md-4\">
                ";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 57, $this->source); })()), "email", array()), 'label', array("label" => "EMAIL :"));
        echo "
                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 58, $this->source); })()), "email", array()), 'errors');
        echo "
                ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 59, $this->source); })()), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Email")));
        echo "
            </div>
        </div>
        
        <div class=\"row, push\">
            <div class=\"col-md-8\">
                ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 65, $this->source); })()), "note", array()), 'label', array("label" => "NOTE :"));
        echo "
                ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 66, $this->source); })()), "note", array()), 'errors');
        echo "
                ";
        // line 67
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 67, $this->source); })()), "note", array()), 'widget', array("attr" => array("textarea" => "rows", "rows" => "10", "class" => "form-control")));
        echo "
            </div>
        </div>
        
        <div class=\"row\">
            <div class=\"col-md-offset-9\">
                <input type=\"submit\" value=\"Enregister les modifications\" class=\"btn btn-success btn-block\" />         
                <a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_client_index");
        echo "\" class=\"btn btn-warning btn-block\">Retour</a>
            </div>
        </div>
        ";
        // line 77
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 77, $this->source); })()), 'form_end');
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cli_client/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 77,  226 => 74,  216 => 67,  212 => 66,  208 => 65,  199 => 59,  195 => 58,  191 => 57,  184 => 53,  180 => 52,  176 => 51,  167 => 45,  163 => 44,  159 => 43,  152 => 39,  148 => 38,  144 => 37,  135 => 31,  131 => 30,  127 => 29,  118 => 23,  114 => 22,  110 => 21,  103 => 17,  99 => 16,  95 => 15,  89 => 12,  85 => 11,  81 => 10,  75 => 7,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Creation client{% endblock %}

{% block body %}
    <div class=\"container\">
        {{ form_start(edit_form) }}
                    <div class=\"row\">
            <div class=\"col-md-6 col-md-4\">
                {{ form_label(edit_form.nom, 'NOM :') }}
                {{ form_errors(edit_form.nom) }}
                {{ form_widget(edit_form.nom, { 'attr': {'class': 'form-control', 'placeholder' : 'Nom'} }) }}
            </div>
            <div class=\"col-md-6 col-md-4\">
                {{ form_label(edit_form.prenom, 'PRENOM :') }}
                {{ form_errors(edit_form.prenom) }}
                {{ form_widget(edit_form.prenom, { 'attr': {'class': 'form-control', 'placeholder' : 'Prenom'} }) }}
            </div>
        
            <div class=\"col-md-6 col-md-4\">
                {{ form_label(edit_form.provenance , 'PROVENANCE :') }}
                {{ form_errors(edit_form.provenance) }}
                {{ form_widget(edit_form.provenance, { 'attr': { 'select':'name' ,'name': 'provenance', 'class': 'form-control'} }) }}
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-8\">
                {{ form_label(edit_form.adresse, 'ADRESSE :') }}
                {{ form_errors(edit_form.adresse) }}
                {{ form_widget(edit_form.adresse, { 'attr': {'class': 'form-control', 'placeholder' : 'Adresse'} }) }}
            </div>
        </div>
        
        <div class=\"row\">
            <div class=\"col-md-6 col-md-4\">
                {{ form_label(edit_form.codePostal, 'CODE POSTAL :') }}
                {{ form_errors(edit_form.codePostal) }}
                {{ form_widget(edit_form.codePostal, { 'attr': {'class': 'form-control', 'placeholder' : 'Code postal'} }) }}
            </div>
        
            <div class=\"col-md-6 col-md-4\">
                {{ form_label(edit_form.ville, 'VILLE :') }}
                {{ form_errors(edit_form.ville) }}
                {{ form_widget(edit_form.ville, { 'attr': {'class': 'form-control', 'placeholder' : 'Ville'} }) }}
            </div>
        </div>
        
        <div class=\"row\">
            <div class=\"col-md-6 col-md-4\">
                {{ form_label(edit_form.telephone, 'TELEPHONE :') }}
                {{ form_errors(edit_form.telephone) }}
                {{ form_widget(edit_form.telephone, { 'attr': {'class': 'form-control', 'placeholder' : 'n° Telephone'} }) }}
            </div>
        
            <div class=\"col-md-6 col-md-4\">
                {{ form_label(edit_form.email, 'EMAIL :') }}
                {{ form_errors(edit_form.email) }}
                {{ form_widget(edit_form.email, { 'attr': {'class': 'form-control', 'placeholder' : 'Email'} }) }}
            </div>
        </div>
        
        <div class=\"row, push\">
            <div class=\"col-md-8\">
                {{ form_label(edit_form.note, 'NOTE :') }}
                {{ form_errors(edit_form.note) }}
                {{ form_widget(edit_form.note, { 'attr': { 'textarea':'rows', 'rows':'10', 'class': 'form-control'} }) }}
            </div>
        </div>
        
        <div class=\"row\">
            <div class=\"col-md-offset-9\">
                <input type=\"submit\" value=\"Enregister les modifications\" class=\"btn btn-success btn-block\" />         
                <a href=\"{{ path('fiche_client_index') }}\" class=\"btn btn-warning btn-block\">Retour</a>
            </div>
        </div>
        {{ form_end(edit_form) }}
    </div>
{% endblock %}
", "cli_client/edit.html.twig", "/home/chris/symfony-projet/SPH2/app/Resources/views/cli_client/edit.html.twig");
    }
}
