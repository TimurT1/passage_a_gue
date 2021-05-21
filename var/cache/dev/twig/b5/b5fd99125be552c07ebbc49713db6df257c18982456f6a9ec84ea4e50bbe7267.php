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
    <link rel=\"stylesheet\" href=\"style.css\"><!--  Notre feuille de style  -->
    <link rel=\"stylesheet\" href=\"./fontawesome/css/all.min.css\"><!--  Font Awesome  -->
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"./img/site/logo.ico\"/><!--  Notre logo  -->
    
    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        echo "<!--  Nos feuilles de styles propres à chaque page seront surchargées ici  -->
</head>

<body>       
    <header><!--  Dans notre header, il y a uniquement notre navbar  -->  
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\"> <img class=\"logo\" src=\"./img/site/logo.png\" alt=\"logo du site\"> Pagué</a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
                <ul class=\"navbar-nav me-auto\"><!--  cette liste est classé par droits d'accès  -->
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Recherche</a>
                    </li>
                    ";
        // line 27
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_GESTIONNAIRE")) {
            // line 28
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Création</a>
                    </li>
                    ";
        }
        // line 32
        echo "                    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 33
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Tables de paramétrages</a>
                        </li>
                    ";
        }
        // line 37
        echo "                </ul>

                <!--  infos sur l'utilisateur si on est connecté  -->
                ";
        // line 40
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40)) {
            // line 41
            echo "                <ul class=\"navbar-nav me-auto\">
                    <li class=\"nav-item\">
                        <span>Connecté en tant que ";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43), "pseudoUtilisateur", [], "any", false, false, false, 43), "html", null, true);
            echo " \t&nbsp;</span>
                    </li>
                    <li class=\"nav-item\">
                        <i class=\"fas fa-user-secret fa-lg\"></i>
                    </li>
                </ul>
                ";
        }
        // line 50
        echo "
                <!--  connexion et inscription vont ensemble, mais déconnexion apparait uniquement si on est connecté  -->
                <ul class=\"navbar-nav\">
                    ";
        // line 53
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53)) {
            // line 54
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"\">Mon profil</a>
                        </li>
                        <li class=\"nav-item\">                
                            <a class=\"nav-link\" href=\"";
            // line 58
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
                        </li>
                    ";
        } else {
            // line 61
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
            // line 65
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_registration");
            echo "\">Inscription</a>
                        </li>
                    ";
        }
        // line 68
        echo "                </ul>
            </div>
        </div>
        </nav>
    </header>

    <main><!--  Dans notre main, on surcharge notre main :)   -->
        ";
        // line 75
        $this->displayBlock('main', $context, $blocks);
        // line 76
        echo "    </main>

    <footer><!--  Notre footer contient les liens vers d'autres sites, et vers les informations \"secondaires\"  -->
        <a href=\"https://www.cerema.fr/\" >
            <figure>
                <img src=\"./img/site/LogoCerema_horizontal.svg\" alt=\"Logotype Cerema\">
            </figure>
        </a>
        <a href=\"#\">
            <figure>
                <img src=\"./img/site/MIIAM_logo2.jpg\" alt=\"Logotype MIIAM\">
            </figure>
        </a>
        <a href=\"https://www.afpa.fr/\" >
            <figure>
                <img src=\"./img/site/LogoAfpa.jpg\" alt=\"Logotype Afpa\">
            </figure>
        </a>
        <a href=\"#\" class=\"btn btn-secondary bouton\">Portail technique</a>
        <a href=\"#\" class=\"btn btn-secondary bouton\">Mentions légales</a>
        <a href=\"#\" class=\"btn btn-info bouton\">Contactez-nous!</a>
    </footer>
    <script src=\"https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.bundle.min.js\"></script><!--  Script js bootstrap  -->
</body>    
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

    // line 11
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

    // line 75
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
        return array (  237 => 75,  219 => 11,  201 => 5,  166 => 76,  164 => 75,  155 => 68,  149 => 65,  143 => 62,  140 => 61,  134 => 58,  128 => 54,  126 => 53,  121 => 50,  111 => 43,  107 => 41,  105 => 40,  100 => 37,  94 => 33,  91 => 32,  85 => 28,  83 => 27,  71 => 18,  61 => 11,  52 => 5,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">        
    <title>{% block title %}{% endblock %}</title><!--  Titre de la page dynamique  -->
    <link rel=\"stylesheet\" href=\"https://bootswatch.com/5/yeti/bootstrap.css\"><!--  Thème Bootstrap  -->
    <link rel=\"stylesheet\" href=\"style.css\"><!--  Notre feuille de style  -->
    <link rel=\"stylesheet\" href=\"./fontawesome/css/all.min.css\"><!--  Font Awesome  -->
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"./img/site/logo.ico\"/><!--  Notre logo  -->
    
    {% block stylesheets %}{% endblock %}<!--  Nos feuilles de styles propres à chaque page seront surchargées ici  -->
</head>

<body>       
    <header><!--  Dans notre header, il y a uniquement notre navbar  -->  
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"{{ path('accueil') }}\"> <img class=\"logo\" src=\"./img/site/logo.png\" alt=\"logo du site\"> Pagué</a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
                <ul class=\"navbar-nav me-auto\"><!--  cette liste est classé par droits d'accès  -->
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Recherche</a>
                    </li>
                    {% if is_granted('ROLE_GESTIONNAIRE') %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\">Création</a>
                    </li>
                    {% endif %}
                    {% if is_granted('ROLE_ADMIN') %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"#\">Tables de paramétrages</a>
                        </li>
                    {% endif %}
                </ul>

                <!--  infos sur l'utilisateur si on est connecté  -->
                {% if app.user %}
                <ul class=\"navbar-nav me-auto\">
                    <li class=\"nav-item\">
                        <span>Connecté en tant que {{app.user.pseudoUtilisateur}} \t&nbsp;</span>
                    </li>
                    <li class=\"nav-item\">
                        <i class=\"fas fa-user-secret fa-lg\"></i>
                    </li>
                </ul>
                {% endif %}

                <!--  connexion et inscription vont ensemble, mais déconnexion apparait uniquement si on est connecté  -->
                <ul class=\"navbar-nav\">
                    {% if app.user %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"\">Mon profil</a>
                        </li>
                        <li class=\"nav-item\">                
                            <a class=\"nav-link\" href=\"{{ path('app_logout') }}\">Déconnexion</a>
                        </li>
                    {% else %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('app_login') }}\">Connexion</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('app_registration') }}\">Inscription</a>
                        </li>
                    {% endif %}
                </ul>
            </div>
        </div>
        </nav>
    </header>

    <main><!--  Dans notre main, on surcharge notre main :)   -->
        {% block main %}{% endblock %}
    </main>

    <footer><!--  Notre footer contient les liens vers d'autres sites, et vers les informations \"secondaires\"  -->
        <a href=\"https://www.cerema.fr/\" >
            <figure>
                <img src=\"./img/site/LogoCerema_horizontal.svg\" alt=\"Logotype Cerema\">
            </figure>
        </a>
        <a href=\"#\">
            <figure>
                <img src=\"./img/site/MIIAM_logo2.jpg\" alt=\"Logotype MIIAM\">
            </figure>
        </a>
        <a href=\"https://www.afpa.fr/\" >
            <figure>
                <img src=\"./img/site/LogoAfpa.jpg\" alt=\"Logotype Afpa\">
            </figure>
        </a>
        <a href=\"#\" class=\"btn btn-secondary bouton\">Portail technique</a>
        <a href=\"#\" class=\"btn btn-secondary bouton\">Mentions légales</a>
        <a href=\"#\" class=\"btn btn-info bouton\">Contactez-nous!</a>
    </footer>
    <script src=\"https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.bundle.min.js\"></script><!--  Script js bootstrap  -->
</body>    
</html>
", "base.html.twig", "C:\\Users\\samyg\\Desktop\\Stage\\passage_a_gue\\templates\\base.html.twig");
    }
}
