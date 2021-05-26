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
    <link rel=\"stylesheet\" href=\"font-awesome-4.7.0/css/font-awesome.min.css\">
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"./img/site/logo.ico\"/><!--  Notre logo  -->
    <link rel=\"stylesheet\" href=\"./css/base.css\">
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        echo "<!--  Nos feuilles de styles propres à chaque page seront surchargées ici  -->
</head>

<body>       
    <header><!--  Dans notre header, il y a uniquement notre navbar  -->  
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
        <div class=\"container-fluid\">
            
            <figure class=\"logotype\">
                    <img src=\"./img/site/logotypeSite.png\" alt=\"Logotype du site\">
            </figure> 
            <a class=\"navbar-brand\" href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">Pagué</a>
            <!--a class=\"navbar-brand\" href=\"";
        // line 24
        echo "\"> <img class=\"logo\" src=\"./img/site/logo.png\" alt=\"logo du site\"> Pagué</a-->
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
                <ul class=\"navbar-nav me-auto\"><!--  cette liste est classé par droits d'accès  -->
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recherche");
        echo "\">Recherche</a>
                    </li>
                    ";
        // line 33
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_GESTIONNAIRE")) {
            // line 34
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("creation");
            echo "\">Création</a>
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
            echo "\">Tables de paramétrages</a>
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
                        <span>Connecté en tant que ";
            // line 49
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
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59)) {
            // line 60
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
            // line 61
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil");
            echo "\">Mon profil</a>
                        </li>
                        <li class=\"nav-item\">                
                            <a class=\"nav-link\" href=\"";
            // line 64
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
                        </li>
                    ";
        } else {
            // line 67
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
            // line 68
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
            // line 71
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_registration");
            echo "\">Inscription</a>
                        </li>
                    ";
        }
        // line 74
        echo "                </ul>
            </div>
        </div>
        </nav>
    </header>

    <main><!--  Dans notre main, on surcharge notre main :)   -->
        ";
        // line 81
        $this->displayBlock('main', $context, $blocks);
        // line 82
        echo "    </main>

    <footer><!--  Notre footer contient les liens vers d'autres sites, et vers les informations \"secondaires\"  -->        
        <div>
            <a href=\"#\">
                <figure>
                    <img src=\"./img/site/MIIAM_logo2.jpg\" alt=\"Logotype MIIAM\">
                </figure>
            </a>
            <a href=\"https://www.cerema.fr/\" >
                <figure>
                    <img src=\"./img/site/LogoCerema_horizontal.svg\" alt=\"Logotype Cerema\">
                </figure>
            </a>
            <a href=\"https://www.afpa.fr/\" >
                <figure>
                    <img src=\"./img/site/LogoAfpa.jpg\" alt=\"Logotype Afpa\">
                </figure>
            </a>
        </div>
        <div>
            <a href=\"";
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("portail");
        echo "\" class=\"btn btn-secondary bouton\">Portail technique</a>
            <a href=\"";
        // line 104
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mention");
        echo "\" class=\"btn btn-secondary bouton\">Mentions légales</a>
            <a href=\"";
        // line 105
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\" class=\"btn btn-info bouton\">Contactez-nous!</a>
        </div>       
    </footer>
    <script src=\"https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.bundle.min.js\"></script><!--  Script js bootstrap  -->
    <script src=\"https://unpkg.com/@popperjs/core@2\"></script>
    <script src=\"./js/base.js\"></script>
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

    // line 12
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

    // line 81
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
        return array (  273 => 81,  255 => 12,  237 => 5,  217 => 105,  213 => 104,  209 => 103,  186 => 82,  184 => 81,  175 => 74,  169 => 71,  163 => 68,  160 => 67,  154 => 64,  148 => 61,  145 => 60,  143 => 59,  138 => 56,  128 => 49,  124 => 47,  122 => 46,  117 => 43,  111 => 40,  108 => 39,  105 => 38,  99 => 35,  96 => 34,  94 => 33,  89 => 31,  80 => 24,  76 => 23,  62 => 12,  52 => 5,  46 => 1,);
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
    <link rel=\"stylesheet\" href=\"font-awesome-4.7.0/css/font-awesome.min.css\">
    <link rel=\"shortcut icon\" type=\"image/png\" href=\"./img/site/logo.ico\"/><!--  Notre logo  -->
    <link rel=\"stylesheet\" href=\"./css/base.css\">
    {% block stylesheets %}{% endblock %}<!--  Nos feuilles de styles propres à chaque page seront surchargées ici  -->
</head>

<body>       
    <header><!--  Dans notre header, il y a uniquement notre navbar  -->  
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
        <div class=\"container-fluid\">
            
            <figure class=\"logotype\">
                    <img src=\"./img/site/logotypeSite.png\" alt=\"Logotype du site\">
            </figure> 
            <a class=\"navbar-brand\" href=\"{{ path('accueil') }}\">Pagué</a>
            <!--a class=\"navbar-brand\" href=\"{#{ path('accueil') }#}\"> <img class=\"logo\" src=\"./img/site/logo.png\" alt=\"logo du site\"> Pagué</a-->
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
                <ul class=\"navbar-nav me-auto\"><!--  cette liste est classé par droits d'accès  -->
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('recherche') }}\">Recherche</a>
                    </li>
                    {% if is_granted('ROLE_GESTIONNAIRE') %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('creation') }}\">Création</a>
                    </li>
                    {% endif %}
                    {% if is_granted('ROLE_ADMIN') %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"{{ path('parametrage') }}\">Tables de paramétrages</a>
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
                            <a class=\"nav-link\" href=\"{{ path('profil') }}\">Mon profil</a>
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
        <div>
            <a href=\"#\">
                <figure>
                    <img src=\"./img/site/MIIAM_logo2.jpg\" alt=\"Logotype MIIAM\">
                </figure>
            </a>
            <a href=\"https://www.cerema.fr/\" >
                <figure>
                    <img src=\"./img/site/LogoCerema_horizontal.svg\" alt=\"Logotype Cerema\">
                </figure>
            </a>
            <a href=\"https://www.afpa.fr/\" >
                <figure>
                    <img src=\"./img/site/LogoAfpa.jpg\" alt=\"Logotype Afpa\">
                </figure>
            </a>
        </div>
        <div>
            <a href=\"{{ path('portail') }}\" class=\"btn btn-secondary bouton\">Portail technique</a>
            <a href=\"{{ path('mention') }}\" class=\"btn btn-secondary bouton\">Mentions légales</a>
            <a href=\"{{ path('contact') }}\" class=\"btn btn-info bouton\">Contactez-nous!</a>
        </div>       
    </footer>
    <script src=\"https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.bundle.min.js\"></script><!--  Script js bootstrap  -->
    <script src=\"https://unpkg.com/@popperjs/core@2\"></script>
    <script src=\"./js/base.js\"></script>
</body>    
</html>

", "base.html.twig", "C:\\Users\\Fg\\passageAGue\\templates\\base.html.twig");
    }
}
