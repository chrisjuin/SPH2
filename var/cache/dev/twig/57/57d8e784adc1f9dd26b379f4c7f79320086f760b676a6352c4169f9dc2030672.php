<?php

/* tra_travail/index.html.twig */
class __TwigTemplate_84401b68ccd30bb4e028aedd947fba0af1eee80ccc92e1e97e6a765297509691 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tra_travail/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tra_travail/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tra_travail/index.html.twig"));

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
    <h2>Liste des Chantier</h2>
        <div class=\"row\">
            <table class=\"table table-bordered\" id=\"liste_chantier\">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Titre</th>
                        <th>Description</th>
                        <th>Prix</th>
                        <th>Date debut</th>
                        <th>Date rappel</th>
                        <th>Mode paiment</th>
                        <th>Lieux</th>
                        <th>Garantie</th>
                        <th>Devis</th>
                        <th>Process verbal</th>
                        <th>Facture</th>
                        
                    </tr>
                </thead>
        </div>        
                
                <div class=\"row\">
                    <tbody>
                ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tRA_travails"]) || array_key_exists("tRA_travails", $context) ? $context["tRA_travails"] : (function () { throw new Twig_Error_Runtime('Variable "tRA_travails" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tRA_travail"]) {
            // line 31
            echo "                        <tr>
                            <td><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_chantier_show", array("id" => twig_get_attribute($this->env, $this->source, $context["tRA_travail"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tRA_travail"], "id", array()), "html", null, true);
            echo "</a></td>
                            <td><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_chantier_show", array("id" => twig_get_attribute($this->env, $this->source, $context["tRA_travail"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tRA_travail"], "titre", array()), "html", null, true);
            echo "</a></td>
                            <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_chantier_show", array("id" => twig_get_attribute($this->env, $this->source, $context["tRA_travail"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tRA_travail"], "description", array()), "html", null, true);
            echo "</a></td>
                            <td><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_chantier_show", array("id" => twig_get_attribute($this->env, $this->source, $context["tRA_travail"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tRA_travail"], "prix", array()), "html", null, true);
            echo "</a></td>
                            <td><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_chantier_show", array("id" => twig_get_attribute($this->env, $this->source, $context["tRA_travail"], "id", array()))), "html", null, true);
            echo "\">";
            if (twig_get_attribute($this->env, $this->source, $context["tRA_travail"], "dateDebut", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tRA_travail"], "dateDebut", array()), "Y-m-d"), "html", null, true);
            }
            echo "</a></td>
                            <td><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_chantier_show", array("id" => twig_get_attribute($this->env, $this->source, $context["tRA_travail"], "id", array()))), "html", null, true);
            echo "\">";
            if (twig_get_attribute($this->env, $this->source, $context["tRA_travail"], "dateRappel", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tRA_travail"], "dateRappel", array()), "Y-m-d"), "html", null, true);
            }
            echo "</a></td>
                            <td><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_chantier_show", array("id" => twig_get_attribute($this->env, $this->source, $context["tRA_travail"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tRA_travail"], "modePaiment", array()), "html", null, true);
            echo "</a></td>
                            <td><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_chantier_show", array("id" => twig_get_attribute($this->env, $this->source, $context["tRA_travail"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tRA_travail"], "lieux", array()), "html", null, true);
            echo "</a></td>
                            <td><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_chantier_show", array("id" => twig_get_attribute($this->env, $this->source, $context["tRA_travail"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tRA_travail"], "garantie", array()), "html", null, true);
            echo "</a></td>
                            <td><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_chantier_show", array("id" => twig_get_attribute($this->env, $this->source, $context["tRA_travail"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tRA_travail"], "devis", array()), "html", null, true);
            echo "</a></td>
                            <td><a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_chantier_show", array("id" => twig_get_attribute($this->env, $this->source, $context["tRA_travail"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tRA_travail"], "processVerbal", array()), "html", null, true);
            echo "</a></td>
                            <td><a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_chantier_show", array("id" => twig_get_attribute($this->env, $this->source, $context["tRA_travail"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tRA_travail"], "facture", array()), "html", null, true);
            echo "</a></td>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tRA_travail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                        </tbody>
                    </table>
                </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "tra_travail/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 46,  158 => 43,  152 => 42,  146 => 41,  140 => 40,  134 => 39,  128 => 38,  120 => 37,  112 => 36,  106 => 35,  100 => 34,  94 => 33,  88 => 32,  85 => 31,  81 => 30,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    
<div class=\"container\">
    <h2>Liste des Chantier</h2>
        <div class=\"row\">
            <table class=\"table table-bordered\" id=\"liste_chantier\">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Titre</th>
                        <th>Description</th>
                        <th>Prix</th>
                        <th>Date debut</th>
                        <th>Date rappel</th>
                        <th>Mode paiment</th>
                        <th>Lieux</th>
                        <th>Garantie</th>
                        <th>Devis</th>
                        <th>Process verbal</th>
                        <th>Facture</th>
                        
                    </tr>
                </thead>
        </div>        
                
                <div class=\"row\">
                    <tbody>
                {% for tRA_travail in tRA_travails %}
                        <tr>
                            <td><a href=\"{{ path('fiche_chantier_show', { 'id': tRA_travail.id }) }}\">{{ tRA_travail.id }}</a></td>
                            <td><a href=\"{{ path('fiche_chantier_show', { 'id': tRA_travail.id }) }}\">{{ tRA_travail.titre }}</a></td>
                            <td><a href=\"{{ path('fiche_chantier_show', { 'id': tRA_travail.id }) }}\">{{ tRA_travail.description }}</a></td>
                            <td><a href=\"{{ path('fiche_chantier_show', { 'id': tRA_travail.id }) }}\">{{ tRA_travail.prix }}</a></td>
                            <td><a href=\"{{ path('fiche_chantier_show', { 'id': tRA_travail.id }) }}\">{% if tRA_travail.dateDebut %}{{ tRA_travail.dateDebut|date('Y-m-d') }}{% endif %}</a></td>
                            <td><a href=\"{{ path('fiche_chantier_show', { 'id': tRA_travail.id }) }}\">{% if tRA_travail.dateRappel %}{{ tRA_travail.dateRappel|date('Y-m-d') }}{% endif %}</a></td>
                            <td><a href=\"{{ path('fiche_chantier_show', { 'id': tRA_travail.id }) }}\">{{ tRA_travail.modePaiment }}</a></td>
                            <td><a href=\"{{ path('fiche_chantier_show', { 'id': tRA_travail.id }) }}\">{{ tRA_travail.lieux }}</a></td>
                            <td><a href=\"{{ path('fiche_chantier_show', { 'id': tRA_travail.id }) }}\">{{ tRA_travail.garantie }}</a></td>
                            <td><a href=\"{{ path('fiche_chantier_show', { 'id': tRA_travail.id }) }}\">{{ tRA_travail.devis }}</a></td>
                            <td><a href=\"{{ path('fiche_chantier_show', { 'id': tRA_travail.id }) }}\">{{ tRA_travail.processVerbal }}</a></td>
                            <td><a href=\"{{ path('fiche_chantier_show', { 'id': tRA_travail.id }) }}\">{{ tRA_travail.facture }}</a></td>

                {% endfor %}
                        </tbody>
                    </table>
                </div>

{% endblock %}
", "tra_travail/index.html.twig", "/home/simplon/projet-symfony/SPH2/app/Resources/views/tra_travail/index.html.twig");
    }
}
