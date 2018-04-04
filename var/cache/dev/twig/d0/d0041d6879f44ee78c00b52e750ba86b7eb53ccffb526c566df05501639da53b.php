<?php

/* cli_client/index.html.twig */
class __TwigTemplate_a5cc352cc78836b1ff6c2674036a90a103e788ba00212426688df22dd16e9c12 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cli_client/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cli_client/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cli_client/index.html.twig"));

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

        echo "Enregistrer un client";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
<div class=\"container\">
    <h2>Liste client</h2>
        <div class=\"row\">
            <div class=\"col-ms-12\"> 
                <table class=\"table table-striped\" id=\"liste_client\">
                    <thead>
                        <tr>
                            <th>Numero client</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Telephone</th>
                            <th>Email</th>
                            <th>Provenance</th>
                            <th>Adresse</th>
                            <th>Code postal</th>
                            <th>Ville</th>
                            <th>Note</th>
                        </tr>
                    </thead>
            </div>
        </div>

                <tbody>
                    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter((isset($context["cli_clients"]) || array_key_exists("cli_clients", $context) ? $context["cli_clients"] : (function () { throw new Twig_Error_Runtime('Variable "cli_clients" does not exist.', 31, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["cli_client"]) {
            // line 32
            echo "                        <tr>
                            <td><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_client_show", array("id" => twig_get_attribute($this->env, $this->source, $context["cli_client"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cli_client"], "id", array()), "html", null, true);
            echo "</a></td>
                            <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_client_show", array("id" => twig_get_attribute($this->env, $this->source, $context["cli_client"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cli_client"], "nom", array()), "html", null, true);
            echo "</a></td>
                            <td><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_client_show", array("id" => twig_get_attribute($this->env, $this->source, $context["cli_client"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cli_client"], "prenom", array()), "html", null, true);
            echo "</a></td>
                            <td><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_client_show", array("id" => twig_get_attribute($this->env, $this->source, $context["cli_client"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cli_client"], "telephone", array()), "html", null, true);
            echo "</a></td>
                            <td><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_client_show", array("id" => twig_get_attribute($this->env, $this->source, $context["cli_client"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cli_client"], "email", array()), "html", null, true);
            echo "</a></td>
                            <td><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_client_show", array("id" => twig_get_attribute($this->env, $this->source, $context["cli_client"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cli_client"], "provenance", array()), "html", null, true);
            echo "</a></td>            
                            <td><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_client_show", array("id" => twig_get_attribute($this->env, $this->source, $context["cli_client"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cli_client"], "adresse", array()), "html", null, true);
            echo "</a></td>
                            <td><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_client_show", array("id" => twig_get_attribute($this->env, $this->source, $context["cli_client"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cli_client"], "codePostal", array()), "html", null, true);
            echo "</a></td>
                            <td><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_client_show", array("id" => twig_get_attribute($this->env, $this->source, $context["cli_client"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cli_client"], "ville", array()), "html", null, true);
            echo "</a></td>
                            <td><a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_client_show", array("id" => twig_get_attribute($this->env, $this->source, $context["cli_client"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cli_client"], "note", array()), "html", null, true);
            echo "</a></td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cli_client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                </tbody>
            </table>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cli_client/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 45,  159 => 42,  153 => 41,  147 => 40,  141 => 39,  135 => 38,  129 => 37,  123 => 36,  117 => 35,  111 => 34,  105 => 33,  102 => 32,  98 => 31,  72 => 7,  63 => 6,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

    {% block title %}Enregistrer un client{% endblock %}


{% block body %}

<div class=\"container\">
    <h2>Liste client</h2>
        <div class=\"row\">
            <div class=\"col-ms-12\"> 
                <table class=\"table table-striped\" id=\"liste_client\">
                    <thead>
                        <tr>
                            <th>Numero client</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Telephone</th>
                            <th>Email</th>
                            <th>Provenance</th>
                            <th>Adresse</th>
                            <th>Code postal</th>
                            <th>Ville</th>
                            <th>Note</th>
                        </tr>
                    </thead>
            </div>
        </div>

                <tbody>
                    {% for cli_client in cli_clients | sort %}
                        <tr>
                            <td><a href=\"{{ path('fiche_client_show', { 'id': cli_client.id }) }}\">{{ cli_client.id }}</a></td>
                            <td><a href=\"{{ path('fiche_client_show', { 'id': cli_client.id }) }}\">{{ cli_client.nom }}</a></td>
                            <td><a href=\"{{ path('fiche_client_show', { 'id': cli_client.id }) }}\">{{ cli_client.prenom }}</a></td>
                            <td><a href=\"{{ path('fiche_client_show', { 'id': cli_client.id }) }}\">{{ cli_client.telephone }}</a></td>
                            <td><a href=\"{{ path('fiche_client_show', { 'id': cli_client.id }) }}\">{{ cli_client.email }}</a></td>
                            <td><a href=\"{{ path('fiche_client_show', { 'id': cli_client.id }) }}\">{{ cli_client.provenance }}</a></td>            
                            <td><a href=\"{{ path('fiche_client_show', { 'id': cli_client.id }) }}\">{{ cli_client.adresse }}</a></td>
                            <td><a href=\"{{ path('fiche_client_show', { 'id': cli_client.id }) }}\">{{ cli_client.codePostal }}</a></td>
                            <td><a href=\"{{ path('fiche_client_show', { 'id': cli_client.id }) }}\">{{ cli_client.ville }}</a></td>
                            <td><a href=\"{{ path('fiche_client_show', { 'id': cli_client.id }) }}\">{{ cli_client.note }}</a></td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
</div>
{% endblock %}
", "cli_client/index.html.twig", "/home/simplon/projet-symfony/SPH2/app/Resources/views/cli_client/index.html.twig");
    }
}
