<?php

/* navBar.html.twig */
class __TwigTemplate_4d72311cce2ed40986c853291480f6c52475d28205259b5a17d1d1ddb48bc7f3 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "navBar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "navBar.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "<div class=\"container\">
    <nav class=\"navbar navbar-default\">
        <div class=\"navbar-header\">
            <div class=\"noPadding\">
                <a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_chantier_index");
        echo "\">
                    <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sph.ico"), "html", null, true);
        echo "\"></a>
            </div>
        </div>
        
            
        <div class=\"col-xs-2\">
            <div class=\"nav navbar-nav\">
                <li class=\"hover\"><a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_client_new");
        echo "\">Ajouter client</a></li>
            </div>
        </div>
        
            <form class=\"navbar-form navbar-left\" action=\"/action_page.php\">
                <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" size=\"30\" placeholder=\"Recherche\">
                </div>
                <button type=\"submit\" class=\"btn btn-success\"><i class=\"glyphicon glyphicon-search\"></i></button>
            </form>
        
        <div class=\"navbar-form navbar-right\">
            <div class=\"dropdown\">
                <button class=\"btn btn-success btn btn-block dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    Parametres 
                    <span class=\"caret\"></span>
                </button>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
        echo "\">Deconnexion</a></li>
                </ul>  
            </div>
        </div>
    </nav> 
</div>  
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "navBar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  89 => 32,  68 => 14,  58 => 7,  54 => 6,  48 => 2,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block body %}
<div class=\"container\">
    <nav class=\"navbar navbar-default\">
        <div class=\"navbar-header\">
            <div class=\"noPadding\">
                <a href=\"{{ path('fiche_chantier_index') }}\">
                    <img src=\"{{ asset('sph.ico')}}\"></a>
            </div>
        </div>
        
            
        <div class=\"col-xs-2\">
            <div class=\"nav navbar-nav\">
                <li class=\"hover\"><a href=\"{{ path('fiche_client_new') }}\">Ajouter client</a></li>
            </div>
        </div>
        
            <form class=\"navbar-form navbar-left\" action=\"/action_page.php\">
                <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" size=\"30\" placeholder=\"Recherche\">
                </div>
                <button type=\"submit\" class=\"btn btn-success\"><i class=\"glyphicon glyphicon-search\"></i></button>
            </form>
        
        <div class=\"navbar-form navbar-right\">
            <div class=\"dropdown\">
                <button class=\"btn btn-success btn btn-block dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    Parametres 
                    <span class=\"caret\"></span>
                </button>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"{{ path('fos_user_security_logout') }}\">Deconnexion</a></li>
                </ul>  
            </div>
        </div>
    </nav> 
</div>  
{% endblock   %}", "navBar.html.twig", "/home/simplon/projet-symfony/SPH2/app/Resources/views/navBar.html.twig");
    }
}
