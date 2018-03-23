<?php

/* tra_travail/show.html.twig */
class __TwigTemplate_d980f27244091136d8e695b50fbad892835825e2d2dd37fc9c7d49d4d00199b1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tra_travail/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tra_travail/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tra_travail/show.html.twig"));

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
    <h2>Details Du Chantier</h2>
        <div classe=\"row\">
            <div class=\"col-md-12\">
                <table class=\"table table-bordered\" id=\"details_chantier\">
                    <tbody>
                        <tr>
                            <th>Id</th>
                            <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tRA_travail"]) || array_key_exists("tRA_travail", $context) ? $context["tRA_travail"] : (function () { throw new Twig_Error_Runtime('Variable "tRA_travail" does not exist.', 14, $this->source); })()), "id", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Titre</th>
                            <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tRA_travail"]) || array_key_exists("tRA_travail", $context) ? $context["tRA_travail"] : (function () { throw new Twig_Error_Runtime('Variable "tRA_travail" does not exist.', 18, $this->source); })()), "titre", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tRA_travail"]) || array_key_exists("tRA_travail", $context) ? $context["tRA_travail"] : (function () { throw new Twig_Error_Runtime('Variable "tRA_travail" does not exist.', 22, $this->source); })()), "description", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Prix</th>
                            <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tRA_travail"]) || array_key_exists("tRA_travail", $context) ? $context["tRA_travail"] : (function () { throw new Twig_Error_Runtime('Variable "tRA_travail" does not exist.', 26, $this->source); })()), "prix", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Datedebut</th>
                            <td>";
        // line 30
        if (twig_get_attribute($this->env, $this->source, (isset($context["tRA_travail"]) || array_key_exists("tRA_travail", $context) ? $context["tRA_travail"] : (function () { throw new Twig_Error_Runtime('Variable "tRA_travail" does not exist.', 30, $this->source); })()), "dateDebut", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tRA_travail"]) || array_key_exists("tRA_travail", $context) ? $context["tRA_travail"] : (function () { throw new Twig_Error_Runtime('Variable "tRA_travail" does not exist.', 30, $this->source); })()), "dateDebut", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
                        </tr>
                        <tr>
                            <th>Daterappel</th>
                            <td>";
        // line 34
        if (twig_get_attribute($this->env, $this->source, (isset($context["tRA_travail"]) || array_key_exists("tRA_travail", $context) ? $context["tRA_travail"] : (function () { throw new Twig_Error_Runtime('Variable "tRA_travail" does not exist.', 34, $this->source); })()), "dateRappel", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tRA_travail"]) || array_key_exists("tRA_travail", $context) ? $context["tRA_travail"] : (function () { throw new Twig_Error_Runtime('Variable "tRA_travail" does not exist.', 34, $this->source); })()), "dateRappel", array()), "Y-m-d"), "html", null, true);
        }
        echo "</td>
                        </tr>
                        <tr>
                            <th>Modepaiment</th>
                            <td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tRA_travail"]) || array_key_exists("tRA_travail", $context) ? $context["tRA_travail"] : (function () { throw new Twig_Error_Runtime('Variable "tRA_travail" does not exist.', 38, $this->source); })()), "modePaiment", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Lieux</th>
                            <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tRA_travail"]) || array_key_exists("tRA_travail", $context) ? $context["tRA_travail"] : (function () { throw new Twig_Error_Runtime('Variable "tRA_travail" does not exist.', 42, $this->source); })()), "lieux", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Garantie</th>
                            <td>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tRA_travail"]) || array_key_exists("tRA_travail", $context) ? $context["tRA_travail"] : (function () { throw new Twig_Error_Runtime('Variable "tRA_travail" does not exist.', 46, $this->source); })()), "garantie", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Devis</th>
                            <td>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tRA_travail"]) || array_key_exists("tRA_travail", $context) ? $context["tRA_travail"] : (function () { throw new Twig_Error_Runtime('Variable "tRA_travail" does not exist.', 50, $this->source); })()), "devis", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Processverbal</th>
                            <td>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tRA_travail"]) || array_key_exists("tRA_travail", $context) ? $context["tRA_travail"] : (function () { throw new Twig_Error_Runtime('Variable "tRA_travail" does not exist.', 54, $this->source); })()), "processVerbal", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Facture</th>
                            <td>";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tRA_travail"]) || array_key_exists("tRA_travail", $context) ? $context["tRA_travail"] : (function () { throw new Twig_Error_Runtime('Variable "tRA_travail" does not exist.', 58, $this->source); })()), "facture", array()), "html", null, true);
        echo "</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
</div>
    
    <ul>
        <li>
            <a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_chantier_index");
        echo "\" class=\"btn btn-warning\">Retour</a>
        </li>
        <li>
            <a href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_chantier_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["tRA_travail"]) || array_key_exists("tRA_travail", $context) ? $context["tRA_travail"] : (function () { throw new Twig_Error_Runtime('Variable "tRA_travail" does not exist.', 71, $this->source); })()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-success\">Modifier</a>
        </li>
        <li>
            ";
        // line 74
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 74, $this->source); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"supprimer\" class=\"btn btn-danger\">
            ";
        // line 76
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 76, $this->source); })()), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "tra_travail/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 76,  171 => 74,  165 => 71,  159 => 68,  146 => 58,  139 => 54,  132 => 50,  125 => 46,  118 => 42,  111 => 38,  102 => 34,  93 => 30,  86 => 26,  79 => 22,  72 => 18,  65 => 14,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    

<div class=\"container\">
    <h2>Details Du Chantier</h2>
        <div classe=\"row\">
            <div class=\"col-md-12\">
                <table class=\"table table-bordered\" id=\"details_chantier\">
                    <tbody>
                        <tr>
                            <th>Id</th>
                            <td>{{ tRA_travail.id }}</td>
                        </tr>
                        <tr>
                            <th>Titre</th>
                            <td>{{ tRA_travail.titre }}</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>{{ tRA_travail.description }}</td>
                        </tr>
                        <tr>
                            <th>Prix</th>
                            <td>{{ tRA_travail.prix }}</td>
                        </tr>
                        <tr>
                            <th>Datedebut</th>
                            <td>{% if tRA_travail.dateDebut %}{{ tRA_travail.dateDebut|date('Y-m-d') }}{% endif %}</td>
                        </tr>
                        <tr>
                            <th>Daterappel</th>
                            <td>{% if tRA_travail.dateRappel %}{{ tRA_travail.dateRappel|date('Y-m-d') }}{% endif %}</td>
                        </tr>
                        <tr>
                            <th>Modepaiment</th>
                            <td>{{ tRA_travail.modePaiment }}</td>
                        </tr>
                        <tr>
                            <th>Lieux</th>
                            <td>{{ tRA_travail.lieux }}</td>
                        </tr>
                        <tr>
                            <th>Garantie</th>
                            <td>{{ tRA_travail.garantie }}</td>
                        </tr>
                        <tr>
                            <th>Devis</th>
                            <td>{{ tRA_travail.devis }}</td>
                        </tr>
                        <tr>
                            <th>Processverbal</th>
                            <td>{{ tRA_travail.processVerbal }}</td>
                        </tr>
                        <tr>
                            <th>Facture</th>
                            <td>{{ tRA_travail.facture }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
</div>
    
    <ul>
        <li>
            <a href=\"{{ path('fiche_chantier_index') }}\" class=\"btn btn-warning\">Retour</a>
        </li>
        <li>
            <a href=\"{{ path('fiche_chantier_edit', { 'id': tRA_travail.id }) }}\" class=\"btn btn-success\">Modifier</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"supprimer\" class=\"btn btn-danger\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "tra_travail/show.html.twig", "/home/chris/symfony-projet/SPH2/app/Resources/views/tra_travail/show.html.twig");
    }
}
