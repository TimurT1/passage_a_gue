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
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        echo "<!--  Nos feuilles de styles propres à chaque page seront surchargées ici  -->
</head>

<body>       
    <header><!--  Dans notre header, il y a uniquement notre navbar  -->  
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"";
        // line 17
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
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passage_a_gue_index");
        echo "\">Recherche</a>
                    </li>
                    ";
        // line 28
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_GESTIONNAIRE")) {
            // line 29
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("creation");
            echo "\">Création</a>
                    </li>
                    ";
        }
        // line 33
        echo "                    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 34
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("parametrage");
            echo "\">Tables de paramétrages</a>
                        </li>
                    ";
        }
        // line 38
        echo "                </ul>

                <!--  infos sur l'utilisateur si on est connecté  -->
                ";
        // line 41
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41)) {
            // line 42
            echo "                <ul class=\"navbar-nav me-auto\">
                    <li class=\"nav-item\">
                        <span>Connecté en tant que ";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), "pseudoUtilisateur", [], "any", false, false, false, 44), "html", null, true);
            echo " \t&nbsp;</span>
                    </li>
                    <li class=\"nav-item\">
                        <i class=\"fas fa-user-secret fa-lg\"></i>
                    </li>
                </ul>
                ";
        }
        // line 51
        echo "
                <!--  connexion et inscription vont ensemble, mais déconnexion apparait uniquement si on est connecté  -->
                <ul class=\"navbar-nav\">
                    ";
        // line 54
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54)) {
            // line 55
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
            // line 56
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profil");
            echo "\">Mon profil</a>
                        </li>
                        <li class=\"nav-item\">                
                            <a class=\"nav-link\" href=\"";
            // line 59
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnexion</a>
                        </li>
                    ";
        } else {
            // line 62
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
            // line 63
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Connexion</a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" href=\"";
            // line 66
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_registration");
            echo "\">Inscription</a>
                        </li>
                    ";
        }
        // line 69
        echo "                </ul>
            </div>
        </div>
        </nav>
    </header>

    <main><!--  Dans notre main, on surcharge notre main :)   -->
        ";
        // line 76
        $this->displayBlock('main', $context, $blocks);
        // line 77
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
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("portail");
        echo "\" class=\"btn btn-secondary bouton\">Portail technique</a>
            <a href=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mention");
        echo "\" class=\"btn btn-secondary bouton\">Mentions légales</a>
            <a href=\"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\" class=\"btn btn-info bouton\">Contactez-nous!</a>
        </div>
        
    </footer>
    <script src=\"https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.bundle.min.js\"></script><!--  Script js bootstrap  -->
    ";
        // line 105
        $this->displayBlock('script', $context, $blocks);
        // line 106
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

    // line 10
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

    // line 76
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

    // line 105
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
        return array (  287 => 105,  269 => 76,  251 => 10,  233 => 5,  221 => 106,  219 => 105,  211 => 100,  207 => 99,  203 => 98,  180 => 77,  178 => 76,  169 => 69,  163 => 66,  157 => 63,  154 => 62,  148 => 59,  142 => 56,  139 => 55,  137 => 54,  132 => 51,  122 => 44,  118 => 42,  116 => 41,  111 => 38,  105 => 35,  102 => 34,  99 => 33,  93 => 30,  90 => 29,  88 => 28,  83 => 26,  71 => 17,  61 => 10,  53 => 5,  47 => 1,);
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
                        <a class=\"nav-link\" href=\"{{ path('passage_a_gue_index') }}\">Recherche</a>
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
            <a href=\"{{ path('portail') }}\" class=\"btn btn-secondary bouton\">Portail technique</a>
            <a href=\"{{ path('mention') }}\" class=\"btn btn-secondary bouton\">Mentions légales</a>
            <a href=\"{{ path('contact') }}\" class=\"btn btn-info bouton\">Contactez-nous!</a>
        </div>
        
    </footer>
    <script src=\"https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.bundle.min.js\"></script><!--  Script js bootstrap  -->
    {% block script %}{% endblock %}
</body>     
</html>
", "base.html.twig", "C:\\Users\\samyg\\Desktop\\StageDev\\templates\\base.html.twig");
    }
}
