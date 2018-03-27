<?php

/* cli_client/show.html.twig */
class __TwigTemplate_26a04b5d6256f968f5e566a93f54dd9b250f512f9d9620d92ca626f2d7a8ffc7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cli_client/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cli_client/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cli_client/show.html.twig"));

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
    <h2>Detail Du Client</h2>
        <div class=\"row\">
            <div class=\"col-md-6\">
                <table class=\"table table-bordered\" id=\"detail_client\">
                    <tbody>
                        <tr>
                            <th>Numero du client</th>
                            <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cli_client"]) || array_key_exists("cli_client", $context) ? $context["cli_client"] : (function () { throw new Twig_Error_Runtime('Variable "cli_client" does not exist.', 14, $this->source); })()), "id", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Nom</th>
                            <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cli_client"]) || array_key_exists("cli_client", $context) ? $context["cli_client"] : (function () { throw new Twig_Error_Runtime('Variable "cli_client" does not exist.', 18, $this->source); })()), "nom", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Prenom</th>
                            <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cli_client"]) || array_key_exists("cli_client", $context) ? $context["cli_client"] : (function () { throw new Twig_Error_Runtime('Variable "cli_client" does not exist.', 22, $this->source); })()), "prenom", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                        <tr>
                            <th>Telephone</th>
                            <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cli_client"]) || array_key_exists("cli_client", $context) ? $context["cli_client"] : (function () { throw new Twig_Error_Runtime('Variable "cli_client" does not exist.', 27, $this->source); })()), "telephone", array()), "html", null, true);
        echo "</td>
                        </tr>
                            <th>Provenance</th>
                            <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cli_client"]) || array_key_exists("cli_client", $context) ? $context["cli_client"] : (function () { throw new Twig_Error_Runtime('Variable "cli_client" does not exist.', 30, $this->source); })()), "provenance", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                        <tr>    
                            <th>Email</th>
                            <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cli_client"]) || array_key_exists("cli_client", $context) ? $context["cli_client"] : (function () { throw new Twig_Error_Runtime('Variable "cli_client" does not exist.', 35, $this->source); })()), "email", array()), "html", null, true);
        echo "</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


    <div class=\"row\">
        <div class=\"col-md-8\">
            <table class=\"table table-bordered\" id=\"detail_client2\">
                <tbody>
                    <tr>
                        <th>Adresse</th>
                        <td>";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cli_client"]) || array_key_exists("cli_client", $context) ? $context["cli_client"] : (function () { throw new Twig_Error_Runtime('Variable "cli_client" does not exist.', 49, $this->source); })()), "adresse", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Codepostal</th>
                        <td>";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cli_client"]) || array_key_exists("cli_client", $context) ? $context["cli_client"] : (function () { throw new Twig_Error_Runtime('Variable "cli_client" does not exist.', 53, $this->source); })()), "codePostal", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Ville</th>
                        <td>";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cli_client"]) || array_key_exists("cli_client", $context) ? $context["cli_client"] : (function () { throw new Twig_Error_Runtime('Variable "cli_client" does not exist.', 57, $this->source); })()), "ville", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Note</th>
                        <td><textarea>";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cli_client"]) || array_key_exists("cli_client", $context) ? $context["cli_client"] : (function () { throw new Twig_Error_Runtime('Variable "cli_client" does not exist.', 61, $this->source); })()), "note", array()), "html", null, true);
        echo "</textarea></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <ul>
        <li>
            <a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_chantier_new");
        echo "\" class=\"btn btn-primary\" >Créer un chantier</a>
        </li>
        
        <li>
            <a href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_client_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["cli_client"]) || array_key_exists("cli_client", $context) ? $context["cli_client"] : (function () { throw new Twig_Error_Runtime('Variable "cli_client" does not exist.', 74, $this->source); })()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-success\">Modifier</a>
        </li>
        
        <li>
            <a href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_client_index");
        echo "\" class=\"btn btn-warning\">Retour</a>
        </li>
        
        <li>
            ";
        // line 82
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 82, $this->source); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\">
            ";
        // line 84
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 84, $this->source); })()), 'form_end');
        echo "
        </li>
    </ul>
</div>  

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cli_client/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 84,  172 => 82,  165 => 78,  158 => 74,  151 => 70,  139 => 61,  132 => 57,  125 => 53,  118 => 49,  101 => 35,  93 => 30,  87 => 27,  79 => 22,  72 => 18,  65 => 14,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    

<div class=\"container\">
    <h2>Detail Du Client</h2>
        <div class=\"row\">
            <div class=\"col-md-6\">
                <table class=\"table table-bordered\" id=\"detail_client\">
                    <tbody>
                        <tr>
                            <th>Numero du client</th>
                            <td>{{ cli_client.id }}</td>
                        </tr>
                        <tr>
                            <th>Nom</th>
                            <td>{{ cli_client.nom }}</td>
                        </tr>
                        <tr>
                            <th>Prenom</th>
                            <td>{{ cli_client.prenom }}</td>
                        </tr>
                        <tr>
                        <tr>
                            <th>Telephone</th>
                            <td>{{ cli_client.telephone }}</td>
                        </tr>
                            <th>Provenance</th>
                            <td>{{ cli_client.provenance }}</td>
                        </tr>
                        <tr>
                        <tr>    
                            <th>Email</th>
                            <td>{{ cli_client.email }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


    <div class=\"row\">
        <div class=\"col-md-8\">
            <table class=\"table table-bordered\" id=\"detail_client2\">
                <tbody>
                    <tr>
                        <th>Adresse</th>
                        <td>{{ cli_client.adresse }}</td>
                    </tr>
                    <tr>
                        <th>Codepostal</th>
                        <td>{{ cli_client.codePostal }}</td>
                    </tr>
                    <tr>
                        <th>Ville</th>
                        <td>{{ cli_client.ville }}</td>
                    </tr>
                    <tr>
                        <th>Note</th>
                        <td><textarea>{{ cli_client.note }}</textarea></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <ul>
        <li>
            <a href=\"{{ path('fiche_chantier_new') }}\" class=\"btn btn-primary\" >Créer un chantier</a>
        </li>
        
        <li>
            <a href=\"{{ path('fiche_client_edit', { 'id': cli_client.id }) }}\" class=\"btn btn-success\">Modifier</a>
        </li>
        
        <li>
            <a href=\"{{ path('fiche_client_index') }}\" class=\"btn btn-warning\">Retour</a>
        </li>
        
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
</div>  

{% endblock %}
", "cli_client/show.html.twig", "/home/chris/symfony-projet/SPH2/app/Resources/views/cli_client/show.html.twig");
    }
}
