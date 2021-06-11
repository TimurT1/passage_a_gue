<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_046e62fdcd6f0caf6f1d0e50d86295148d0e5c4ead60ee53c56fba3b975c4f55 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'main' => [$this, 'block_main'],
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">        
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title><!--  Titre de la page dynamique  -->
    <link rel=\"stylesheet\" href=\"https://bootswatch.com/5/yeti/bootstrap.css\"><!--  Thème Bootstrap  -->
    <link rel=\"stylesheet\" href=\"/style.css\"><!--  Notre feuille de style  -->
    <link rel=\"stylesheet\" href=\"/fontawesome/css/all.min.css\"><!--  Font Awesome  -->
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"/img/site/logo.ico\"/><!--  Notre logo  -->
    <!-- Carte -->
    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.7.1/dist/leaflet.css\" integrity=\"sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==\" crossorigin=\"\"/>
    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.css\">
    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.Default.css\">
    <!-- Carte -->
    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        echo "<!--  Nos feuilles de styles propres à chaque page seront surchargées ici  -->
</head>

<body>       
    <header><!--  Dans notre header, il y a uniquement notre navbar  -->  
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\"> 
                <img class=\"logo\" id=\"logo\" src=\"/img/site/logo.png\" alt=\"logo du site\">
             Pagué</a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
                <ul class=\"navbar-nav me-auto\"><!--  cette liste est classé par droits d'accès  -->
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passage_a_gue_index");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Recherche", [], "messages");
        echo "</a>
                    </li>
                    ";
        // line 33
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_GESTIONNAIRE")) {
            // line 34
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("creation");
            echo "\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Création", [], "messages");
            echo "</a>
                        </li>
                    ";
        }
        // line 38
        echo "                    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 39
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
            // line 40
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("parametrage");
            echo "\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tables de paramétrages", [], "messages");
            echo "</a>
                        </li>
                    ";
        }
        // line 43
        echo "                </ul>

                <!--  infos sur l'utilisateur si on est connecté  -->
                ";
        // line 46
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46)) {
            // line 47
            echo "                <ul class=\"navbar-nav me-auto\">
                    <li class=\"nav-item\">
                        <span>";
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Connecté en tant que", [], "messages");
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49), "pseudoUtilisateur", [], "any", false, false, false, 49), "html", null, true);
            echo " \t&nbsp;</span>
                    </li>
                    <li class=\"nav-item\">
                        <i class=\"fas fa-user-secret fa-lg\"></i>
                    </li>
                </ul>
                ";
        }
        // line 56
        echo "
                <!--  connexion et inscription vont ensemble, mais déconnexion apparait uniquement si on est connecté  -->
                <ul class=\"navbar-nav\">
                    ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new RuntimeError('Variable "locales" does not exist.', 59, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
            // line 60
            echo "                        ";
            if ((0 !== twig_compare($context["locale"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "request", [], "any", false, false, false, 60), "locale", [], "any", false, false, false, 60)))) {
                // line 61
                echo "                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("change_locale", ["locale" => $context["locale"]]), "html", null, true);
                echo "\"><img class=\"langue\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("img/site/" . $context["locale"]) . ".png")), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $context["locale"], "html", null, true);
                echo "\"></a>
                            </li>
                        ";
            }
            // line 65
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66)) {
            // line 67
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
            // line 68
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil");
            echo "\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mon profil", [], "messages");
            echo "</a>
                        </li>
                        <li class=\"nav-item\">                
                            <a class=\"nav-link\" href=\"";
            // line 71
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Déconnexion", [], "messages");
            echo "</a>
                        </li>
                    ";
        } else {
            // line 74
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
            // line 75
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Connexion", [], "messages");
            echo "</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
            // line 78
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_registration");
            echo "\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Inscription", [], "messages");
            echo "</a>
                        </li>
                    ";
        }
        // line 81
        echo "                </ul>
            </div>
        </div>
        </nav>
    </header>

    <section><!--  Dans notre section, nos messages d'erreurs / de validations...etc   -->
        ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "flashes", [0 => "message"], "method", false, false, false, 88));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 89
            echo "            <div class=\"alert alert-success\" role=\"alert\">
                ";
            // line 90
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "    </section>

    <main><!--  Dans notre main, on surcharge notre main :)   -->
        ";
        // line 96
        $this->displayBlock('main', $context, $blocks);
        // line 97
        echo "    </main>

    <footer><!--  Notre footer contient les liens vers d'autres sites, et vers les informations \"secondaires\"  -->
        <div>
            <a href=\"#\">
                <figure>
                    <img src=\"/img/site/MIIAM_logo2.jpg\" alt=\"Logotype MIIAM\">
                </figure>
            </a>
            <a href=\"https://www.cerema.fr/\" >
                <figure>
                    <img src=\"/img/site/LogoCerema_horizontal.svg\" alt=\"Logotype Cerema\">
                </figure>
            </a>
            <a href=\"https://www.afpa.fr/\" >
                <figure>
                    <img src=\"/img/site/LogoAfpa.jpg\" alt=\"Logotype Afpa\">
                </figure>
            </a>
        </div>
        <div>
            <a href=\"";
        // line 118
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("portail");
        echo "\" class=\"btn btn-secondary bouton\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Portail technique", [], "messages");
        echo "</a>
            <a href=\"";
        // line 119
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mention");
        echo "\" class=\"btn btn-secondary bouton\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mentions légales", [], "messages");
        echo "</a>
            <a href=\"";
        // line 120
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\" class=\"btn btn-info bouton\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Contactez-nous!", [], "messages");
        echo "</a>
        </div>
        
    </footer>    
    <script src=\"https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.bundle.min.js\"></script><!--  Script js bootstrap  -->
    ";
        // line 125
        $this->displayBlock('script', $context, $blocks);
        // line 126
        echo "</body>     
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 96
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 125
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  362 => 125,  344 => 96,  326 => 15,  308 => 5,  296 => 126,  294 => 125,  284 => 120,  278 => 119,  272 => 118,  249 => 97,  247 => 96,  242 => 93,  233 => 90,  230 => 89,  226 => 88,  217 => 81,  209 => 78,  201 => 75,  198 => 74,  190 => 71,  182 => 68,  179 => 67,  176 => 66,  170 => 65,  160 => 62,  157 => 61,  154 => 60,  150 => 59,  145 => 56,  133 => 49,  129 => 47,  127 => 46,  122 => 43,  114 => 40,  111 => 39,  108 => 38,  100 => 35,  97 => 34,  95 => 33,  88 => 31,  76 => 22,  66 => 15,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">        
    <title>{% block title %}{% endblock %}</title><!--  Titre de la page dynamique  -->
    <link rel=\"stylesheet\" href=\"https://bootswatch.com/5/yeti/bootstrap.css\"><!--  Thème Bootstrap  -->
    <link rel=\"stylesheet\" href=\"/style.css\"><!--  Notre feuille de style  -->
    <link rel=\"stylesheet\" href=\"/fontawesome/css/all.min.css\"><!--  Font Awesome  -->
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"/img/site/logo.ico\"/><!--  Notre logo  -->
    <!-- Carte -->
    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.7.1/dist/leaflet.css\" integrity=\"sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==\" crossorigin=\"\"/>
    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.css\">
    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.Default.css\">
    <!-- Carte -->
    {% block stylesheets %}{% endblock %}<!--  Nos feuilles de styles propres à chaque page seront surchargées ici  -->
</head>

<body>       
    <header><!--  Dans notre header, il y a uniquement notre navbar  -->  
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"{{ path('accueil') }}\"> 
                <img class=\"logo\" id=\"logo\" src=\"/img/site/logo.png\" alt=\"logo du site\">
             Pagué</a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
                <ul class=\"navbar-nav me-auto\"><!--  cette liste est classé par droits d'accès  -->
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('passage_a_gue_index') }}\">{% trans %}Recherche{% endtrans %}</a>
                    </li>
                    {% if is_granted('ROLE_GESTIONNAIRE') %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('creation') }}\">{% trans %}Création{% endtrans %}</a>
                        </li>
                    {% endif %}
                    {% if is_granted('ROLE_ADMIN') %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('parametrage') }}\">{% trans %}Tables de paramétrages{% endtrans %}</a>
                        </li>
                    {% endif %}
                </ul>

                <!--  infos sur l'utilisateur si on est connecté  -->
                {% if app.user %}
                <ul class=\"navbar-nav me-auto\">
                    <li class=\"nav-item\">
                        <span>{% trans %}Connecté en tant que{% endtrans %} {{app.user.pseudoUtilisateur}} \t&nbsp;</span>
                    </li>
                    <li class=\"nav-item\">
                        <i class=\"fas fa-user-secret fa-lg\"></i>
                    </li>
                </ul>
                {% endif %}

                <!--  connexion et inscription vont ensemble, mais déconnexion apparait uniquement si on est connecté  -->
                <ul class=\"navbar-nav\">
                    {% for locale in locales %}
                        {% if locale != app.request.locale %}
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"{{path('change_locale', {'locale': locale}) }}\"><img class=\"langue\" src=\"{{ asset('img/site/'~locale~'.png') }}\" alt=\"{{ locale }}\"></a>
                            </li>
                        {% endif %}
                    {% endfor %}
                    {% if app.user %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('profil') }}\">{% trans %}Mon profil{% endtrans %}</a>
                        </li>
                        <li class=\"nav-item\">                
                            <a class=\"nav-link\" href=\"{{ path('app_logout') }}\">{% trans %}Déconnexion{% endtrans %}</a>
                        </li>
                    {% else %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('app_login') }}\">{% trans %}Connexion{% endtrans %}</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('app_registration') }}\">{% trans %}Inscription{% endtrans %}</a>
                        </li>
                    {% endif %}
                </ul>
            </div>
        </div>
        </nav>
    </header>

    <section><!--  Dans notre section, nos messages d'erreurs / de validations...etc   -->
        {% for message in app.flashes('message') %}
            <div class=\"alert alert-success\" role=\"alert\">
                {{ message }}
            </div>
        {% endfor %}
    </section>

    <main><!--  Dans notre main, on surcharge notre main :)   -->
        {% block main %}{% endblock %}
    </main>

    <footer><!--  Notre footer contient les liens vers d'autres sites, et vers les informations \"secondaires\"  -->
        <div>
            <a href=\"#\">
                <figure>
                    <img src=\"/img/site/MIIAM_logo2.jpg\" alt=\"Logotype MIIAM\">
                </figure>
            </a>
            <a href=\"https://www.cerema.fr/\" >
                <figure>
                    <img src=\"/img/site/LogoCerema_horizontal.svg\" alt=\"Logotype Cerema\">
                </figure>
            </a>
            <a href=\"https://www.afpa.fr/\" >
                <figure>
                    <img src=\"/img/site/LogoAfpa.jpg\" alt=\"Logotype Afpa\">
                </figure>
            </a>
        </div>
        <div>
            <a href=\"{{ path('portail') }}\" class=\"btn btn-secondary bouton\">{% trans %}Portail technique{% endtrans %}</a>
            <a href=\"{{ path('mention') }}\" class=\"btn btn-secondary bouton\">{% trans %}Mentions légales{% endtrans %}</a>
            <a href=\"{{ path('contact') }}\" class=\"btn btn-info bouton\">{% trans %}Contactez-nous!{% endtrans %}</a>
        </div>
        
    </footer>    
    <script src=\"https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.bundle.min.js\"></script><!--  Script js bootstrap  -->
    {% block script %}{% endblock %}
</body>     
</html>
", "base.html.twig", "C:\\Users\\samyg\\Desktop\\StageDev\\templates\\base.html.twig");
    }
}
