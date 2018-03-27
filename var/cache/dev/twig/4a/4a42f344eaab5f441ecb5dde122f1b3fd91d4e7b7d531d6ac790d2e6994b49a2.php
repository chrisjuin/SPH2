<?php

/* tra_travail/new.html.twig */
class __TwigTemplate_a770374453ac2752797d0b928270f6c7c4acf8d24470d2fe67bca3efe1766078 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tra_travail/new.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tra_travail/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tra_travail/new.html.twig"));

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
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->source); })()), 'form_start');
        echo "
            <div class=\"row\">
                <div class=\"col-sm-4 text-center\">
                    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->source); })()), "description", array()), 'label', array("label" => "Description :"));
        echo "  
                    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->source); })()), "description", array()), 'errors');
        echo "    
                    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->source); })()), "description", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Natures des travaux")));
        echo "
                </div>
                
                <div class=\"col-sm-2 col-xs-12 text-center\">
                    ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->source); })()), "devis", array()), 'label', array("label" => "Date Devis :"));
        echo "  
                    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->source); })()), "devis", array()), 'errors');
        echo "    
                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->source); })()), "devis", array()), 'widget');
        echo "
                    <input type=\"date\" class=\"form-control text-right\" id=\"date_devis\"  name=\"date_devis\" value=\"<?= \$date_mtn ?>\">
                </div>
                
                <div class=\"col-sm-2 col-xs-12 text-center\">
                    <label for=\"date\">Date Travaux:</label>
                    <input type=\"date\" class=\"form-control text-right\" id=\"date\"  name=\"date\" value=\"<?= \$date_mtn ?>\">
                </div>
                
                <div class=\"col-sm-2 col-xs-6 text-center\">
                    <div class=\"form-group\">
                        <label for=\"montant\">Montant :</label>
                        <div class=\"input-group\">
                        <input required min=\"0\" step=\"0.01\" name=\"montant\" type=\"number\" class=\"form-control text-right\" id=\"montant\">   
                        <div class=\"input-group-addon\">€</div>
                        </div>
                    </div>
                </div>
                
                <div class=\"col-sm-2 col-xs-12 text-center\">
                    <label for=\"mode_de_paiment\">Moyen de paiement :</label>
                    <input type=\"text\"  class=\"form-control\" id=\"mode_de_paiment\"  name=\"mode_de_paiment\"></div>
                </div>
                
                <div class =\"row\">
                    <div class=\"col-xs-12\">
                        <label for=\"notes\">Notes :</label>
                        <textarea class=\"form-control\" id=\"notes\" name=\"notes\" rows=\"8\"></textarea> 
                        </div>
                        </div>
                        <br />
                        <input class=\"btn btn-success\" type=\"submit\" value=\"envoyer\"></div>                     
                    </div>
                </div>
            </div>
        ";
        // line 52
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 52, $this->source); })()), 'form_end');
        echo "
    </div> 


";
        // line 73
        echo "    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "tra_travail/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 73,  124 => 52,  86 => 17,  82 => 16,  78 => 15,  71 => 11,  67 => 10,  63 => 9,  57 => 6,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    
    <div class=\"container\">
        {{form_start(form)}}
            <div class=\"row\">
                <div class=\"col-sm-4 text-center\">
                    {{ form_label(form.description, 'Description :') }}  
                    {{ form_errors(form.description) }}    
                    {{ form_widget(form.description, {'attr': {'class': 'form-control', 'placeholder': 'Natures des travaux' } } ) }}
                </div>
                
                <div class=\"col-sm-2 col-xs-12 text-center\">
                    {{ form_label(form.devis, 'Date Devis :') }}  
                    {{ form_errors(form.devis) }}    
                    {{ form_widget(form.devis) }}
                    <input type=\"date\" class=\"form-control text-right\" id=\"date_devis\"  name=\"date_devis\" value=\"<?= \$date_mtn ?>\">
                </div>
                
                <div class=\"col-sm-2 col-xs-12 text-center\">
                    <label for=\"date\">Date Travaux:</label>
                    <input type=\"date\" class=\"form-control text-right\" id=\"date\"  name=\"date\" value=\"<?= \$date_mtn ?>\">
                </div>
                
                <div class=\"col-sm-2 col-xs-6 text-center\">
                    <div class=\"form-group\">
                        <label for=\"montant\">Montant :</label>
                        <div class=\"input-group\">
                        <input required min=\"0\" step=\"0.01\" name=\"montant\" type=\"number\" class=\"form-control text-right\" id=\"montant\">   
                        <div class=\"input-group-addon\">€</div>
                        </div>
                    </div>
                </div>
                
                <div class=\"col-sm-2 col-xs-12 text-center\">
                    <label for=\"mode_de_paiment\">Moyen de paiement :</label>
                    <input type=\"text\"  class=\"form-control\" id=\"mode_de_paiment\"  name=\"mode_de_paiment\"></div>
                </div>
                
                <div class =\"row\">
                    <div class=\"col-xs-12\">
                        <label for=\"notes\">Notes :</label>
                        <textarea class=\"form-control\" id=\"notes\" name=\"notes\" rows=\"8\"></textarea> 
                        </div>
                        </div>
                        <br />
                        <input class=\"btn btn-success\" type=\"submit\" value=\"envoyer\"></div>                     
                    </div>
                </div>
            </div>
        {{ form_end(form) }}
    </div> 


{# <div class=\"container\">
    <div class=\"row\">
        {{ form_start(form) }}

            
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Créer\" class=\"btn btn-success\"  />


        {{ form_end(form) }}
        <ul>
            <li>
                <a href=\"{{ path('fiche_chantier_index') }}\" class=\"btn btn-warning\">Retour</a>
            </li>
        </ul>
    </div>
</div> #}
    
{% endblock %}
        ", "tra_travail/new.html.twig", "/home/chris/symfony-projet/SPH2/app/Resources/views/tra_travail/new.html.twig");
    }
}
