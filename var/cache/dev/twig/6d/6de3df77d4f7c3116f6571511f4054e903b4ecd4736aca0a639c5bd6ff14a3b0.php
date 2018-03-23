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
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "navBar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "navBar.html.twig"));

        // line 1
        echo "
<section class=\"container\">
    <nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
        <!-- logo renvoyant vers la liste des chantiers -->
            <div class=\"col-lg-1  nav navbar-nav\">
                <a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_chantier_index");
        echo "\">
                    <img class=\"padding\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("sph.ico"), "html", null, true);
        echo "\" />
                </a>
            </div>
        

                <!-- bouton pour navbar responsive   -->
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>
        </ul>

        <!-- contenu de la navbar -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
                <li class=\"hover\"><a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fiche_client_new");
        echo "\">Ajouter un client</a></li>
                <li>
        <!-- formulaire de recherche pour large device -->
                <form class=\"navbar-form navbar-default col-lg-3\"  method=\"POST\" action=\"?p=recherche_client\">
                        <input type=\"search\" class=\"form-control hidden-xs\" size=\"30\" placeholder=\"Rechercher un client par son nom\" aria-controls=\"liste_client\" id=\"recherche\" name=\"recherche\"/>
                        <button type=\"submit\" class=\"btn btn-success hidden-xs\"><i class=\"glyphicon glyphicon-search\"></i></button>
                </form>
        <!-- formulaire de recherche pour small device -->
                <form class=\"navbar-form navbar-right\"  method=\"POST\" action=\"?p=recherche_client\">
                    <div class=\"visible-xs col-xs-8\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher un client par son nom\"  id=\"recherche\" name=\"recherche\"/>
                    </div>
                    <button type=\"submit\" class=\"btn btn-success visible-xs\"><i class=\"glyphicon glyphicon-search\"></i></button>
                </form>
                </li>
            </ul>
            
            <form class=\"nav navbar-nav navbar-right list-inline\">
                <div class=\"dropdown, right\">
                    <button class=\"btn btn-success dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Parametre
                    <span class=\"caret\"></span>
                    </button>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink\">
                        <li><a id=\"hoverDeco\" href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
        echo "\">Se déconnecter</a></li>
                    </ul>
                </div>
            </form>


                
            </ul> 
            

        <!-- fin du navbar-collapse -->

    </nav>
</section>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "navBar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 50,  62 => 26,  40 => 7,  36 => 6,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<section class=\"container\">
    <nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
        <!-- logo renvoyant vers la liste des chantiers -->
            <div class=\"col-lg-1  nav navbar-nav\">
                <a href=\"{{ path('fiche_chantier_index') }}\">
                    <img class=\"padding\" src=\"{{ asset('sph.ico') }}\" />
                </a>
            </div>
        

                <!-- bouton pour navbar responsive   -->
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>
        </ul>

        <!-- contenu de la navbar -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
                <li class=\"hover\"><a href=\"{{ path('fiche_client_new') }}\">Ajouter un client</a></li>
                <li>
        <!-- formulaire de recherche pour large device -->
                <form class=\"navbar-form navbar-default col-lg-3\"  method=\"POST\" action=\"?p=recherche_client\">
                        <input type=\"search\" class=\"form-control hidden-xs\" size=\"30\" placeholder=\"Rechercher un client par son nom\" aria-controls=\"liste_client\" id=\"recherche\" name=\"recherche\"/>
                        <button type=\"submit\" class=\"btn btn-success hidden-xs\"><i class=\"glyphicon glyphicon-search\"></i></button>
                </form>
        <!-- formulaire de recherche pour small device -->
                <form class=\"navbar-form navbar-right\"  method=\"POST\" action=\"?p=recherche_client\">
                    <div class=\"visible-xs col-xs-8\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher un client par son nom\"  id=\"recherche\" name=\"recherche\"/>
                    </div>
                    <button type=\"submit\" class=\"btn btn-success visible-xs\"><i class=\"glyphicon glyphicon-search\"></i></button>
                </form>
                </li>
            </ul>
            
            <form class=\"nav navbar-nav navbar-right list-inline\">
                <div class=\"dropdown, right\">
                    <button class=\"btn btn-success dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        Parametre
                    <span class=\"caret\"></span>
                    </button>
                    <ul class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuLink\">
                        <li><a id=\"hoverDeco\" href=\"{{ path('fos_user_security_logout') }}\">Se déconnecter</a></li>
                    </ul>
                </div>
            </form>


                
            </ul> 
            

        <!-- fin du navbar-collapse -->

    </nav>
</section>", "navBar.html.twig", "/home/chris/symfony-projet/SPH2/app/Resources/views/navBar.html.twig");
    }
}
