<?php

/* AppBundle:pho_photo:index.html.twig */
class __TwigTemplate_538a37ee354d59d0d6574aa10c8b899f13ca5e66039ca22a28ea7413dcc647bd extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:pho_photo:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:pho_photo:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:pho_photo:index.html.twig"));

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

        echo "AppBundle:pho_photo:index";
        
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
        echo "<div class=\"container\">
    <div class=\"container\">

<!-- Full-width images with number text -->
<div class=\"mySlides\">
    <div class=\"numbertext\">1 / 6</div>
        <img src=\"img_woods_wide.jpg\" style=\"width:100%\">
    </div>
        <div class=\"mySlides\">
            <div class=\"numbertext\">2 / 6</div>
                <img src=\"img_fjords_wide.jpg\" style=\"width:100%\">
        </div>
        <div class=\"mySlides\">
            <div class=\"numbertext\">3 / 6</div>
                <img src=\"img_mountains_wide.jpg\" style=\"width:100%\">
        </div>
        <div class=\"mySlides\">
            <div class=\"numbertext\">4 / 6</div>
                <img src=\"img_lights_wide.jpg\" style=\"width:100%\">
        </div>
        <div class=\"mySlides\">
            <div class=\"numbertext\">5 / 6</div>
                <img src=\"img_nature_wide.jpg\" style=\"width:100%\">
        </div>
        <div class=\"mySlides\">
            <div class=\"numbertext\">6 / 6</div>
                <img src=\"img_snow_wide.jpg\" style=\"width:100%\">
        </div>
        <!-- Next and previous buttons -->
        <a class=\"prev\" onclick=\"plusSlides(-1)\">&#10094;</a>
        <a class=\"next\" onclick=\"plusSlides(1)\">&#10095;</a>
        <!-- Image text -->
        <div class=\"caption-container\">
            <p id=\"caption\"></p>
        </div>

    <!-- Thumbnail images -->
    <div class=\"row\">
        <div class=\"column\">
            <img class=>
    </div>
    <div class=\"column\">
        <img class=>
    </div>
    <div class=\"column\">
        <img class=>
    </div>
    <div class=\"column\">
        <img class=>
    </div>
    <div class=\"column\">
        <img class=>
    </div>
    <div class=\"column\">
        <img class=>
        </div>
    </div>
</div>    
    
<input type=\"file\" name=\"Parcourir\" />



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:pho_photo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}AppBundle:pho_photo:index{% endblock %}

{% block body %}
<div class=\"container\">
    <div class=\"container\">

<!-- Full-width images with number text -->
<div class=\"mySlides\">
    <div class=\"numbertext\">1 / 6</div>
        <img src=\"img_woods_wide.jpg\" style=\"width:100%\">
    </div>
        <div class=\"mySlides\">
            <div class=\"numbertext\">2 / 6</div>
                <img src=\"img_fjords_wide.jpg\" style=\"width:100%\">
        </div>
        <div class=\"mySlides\">
            <div class=\"numbertext\">3 / 6</div>
                <img src=\"img_mountains_wide.jpg\" style=\"width:100%\">
        </div>
        <div class=\"mySlides\">
            <div class=\"numbertext\">4 / 6</div>
                <img src=\"img_lights_wide.jpg\" style=\"width:100%\">
        </div>
        <div class=\"mySlides\">
            <div class=\"numbertext\">5 / 6</div>
                <img src=\"img_nature_wide.jpg\" style=\"width:100%\">
        </div>
        <div class=\"mySlides\">
            <div class=\"numbertext\">6 / 6</div>
                <img src=\"img_snow_wide.jpg\" style=\"width:100%\">
        </div>
        <!-- Next and previous buttons -->
        <a class=\"prev\" onclick=\"plusSlides(-1)\">&#10094;</a>
        <a class=\"next\" onclick=\"plusSlides(1)\">&#10095;</a>
        <!-- Image text -->
        <div class=\"caption-container\">
            <p id=\"caption\"></p>
        </div>

    <!-- Thumbnail images -->
    <div class=\"row\">
        <div class=\"column\">
            <img class=>
    </div>
    <div class=\"column\">
        <img class=>
    </div>
    <div class=\"column\">
        <img class=>
    </div>
    <div class=\"column\">
        <img class=>
    </div>
    <div class=\"column\">
        <img class=>
    </div>
    <div class=\"column\">
        <img class=>
        </div>
    </div>
</div>    
    
<input type=\"file\" name=\"Parcourir\" />



{% endblock %}
", "AppBundle:pho_photo:index.html.twig", "/home/chris/symfony-projet/SPH2/src/AppBundle/Resources/views/pho_photo/index.html.twig");
    }
}
