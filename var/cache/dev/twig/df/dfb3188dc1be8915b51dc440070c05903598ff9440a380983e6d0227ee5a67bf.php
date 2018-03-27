<?php

/* default/index.html.twig */
class __TwigTemplate_8d024ff5b34f79ee83b10035109e13e130a5e0f5a681b1a6a620c7ac2be9b92c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

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

        echo "Connexion";
        
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
        echo "
<div class=\"container , line\">
    <div class=\"row\">
        <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("web/Logo_SPH.png"), "html", null, true);
        echo "\" alt=\"Logo SPH\">    
    </div> 

        <div class=\"row\">
                <div class=\"col-sm-4 col-sm-offset-4\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading text-center\">
                            <h3 class=\"panel-title\">Identification</h3>
                        </div>
                        <div class=\"panel-body\">
                            <form method=\"post\" role=\"form\">
                                <fieldset>
                                    
                                    <div class=\"form-group\">
                                        <input class=\"form-control\" placeholder=\"identifiant\" name=\"co_pseudo\" type=\"text\" autofocus required>
                                    </div>    
                                    <div class=\"form-group\">
                                        <input class=\"form-control\" placeholder=\"Mot de passe\" name=\"co_password\" type=\"password\" required>
                                    </div>
                                        <div>
                                    <input name=\"valider\" type=\"submit\" class=\"btn btn-success btn-block\" value=\"Valider\">
                                    </div>
                                </fieldset>
                            </form>
                                ";
        // line 38
        echo "                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 38,  77 => 9,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Connexion{% endblock %}

{% block body %}

<div class=\"container , line\">
    <div class=\"row\">
        <img src=\"{{ asset('web/Logo_SPH.png') }}\" alt=\"Logo SPH\">    
    </div> 

        <div class=\"row\">
                <div class=\"col-sm-4 col-sm-offset-4\">
                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading text-center\">
                            <h3 class=\"panel-title\">Identification</h3>
                        </div>
                        <div class=\"panel-body\">
                            <form method=\"post\" role=\"form\">
                                <fieldset>
                                    
                                    <div class=\"form-group\">
                                        <input class=\"form-control\" placeholder=\"identifiant\" name=\"co_pseudo\" type=\"text\" autofocus required>
                                    </div>    
                                    <div class=\"form-group\">
                                        <input class=\"form-control\" placeholder=\"Mot de passe\" name=\"co_password\" type=\"password\" required>
                                    </div>
                                        <div>
                                    <input name=\"valider\" type=\"submit\" class=\"btn btn-success btn-block\" value=\"Valider\">
                                    </div>
                                </fieldset>
                            </form>
                                {# <ul>
                                    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                                        <li><a href=\"{{ path('fiche_chantier_show' ,  { 'id': tRA_travail.id }) }}\"></a></li>
                                    {% endif %} 
                                </ul>    #}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

{% endblock %}                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  

", "default/index.html.twig", "/home/chris/symfony-projet/SPH2/app/Resources/views/default/index.html.twig");
    }
}
