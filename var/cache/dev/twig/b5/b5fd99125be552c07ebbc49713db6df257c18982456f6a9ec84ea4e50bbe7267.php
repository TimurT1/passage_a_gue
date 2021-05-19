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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
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
        
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "
    </head>
    <body>       
        <header> 
               
               
            <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
            <div class=\"container-fluid\">
                <figure class=\"logotype\">
                    <img src=\"./img/site/logotypeSite.png\" alt=\"Logotype Afpa\">
                </figure>  
                <a class=\"navbar-brand\" href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\">Pagué</a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
                </button>

                <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
                <ul class=\"navbar-nav me-auto\">               
                    <li class=\"nav-item debut-nav\">
                        <a class=\"nav-link\" href=\"#\">Recherche</a>
                    </li>
                    <li class=\"nav-item fin-nav\">
                        <a class=\"nav-link\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Connexion</a>
                    </li>
                    <li class=\"nav-item fin-nav\">
                        <a class=\"nav-link\" href=\"#\">Inscription</a>
                    </li>
                    <li class=\"nav-item fin-nav\">
                        <a class=\"nav-link\" href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Déconnexion</a>
                    </li>
                    <li class=\"nav-item debut-nav\">
                        <a class=\"nav-link\" href=\"#\">Création</a>
                    </li>
                    <li class=\"nav-item debut-nav\">
                        <a class=\"nav-link\" href=\"#\">Tables de paramétrages</a>
                    </li>
                    <!--li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown</a>
                    <div class=\"dropdown-menu\">
                        <a class=\"dropdown-item\" href=\"#\">Action</a>
                        <a class=\"dropdown-item\" href=\"#\">Another action</a>
                        <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"#\">Separated link</a>
                    </div>
                    </li-->
                    
                </ul>
                <span class=\"userIcon\"><i class=\"fa fa-user-times fa-4x\" aria-hidden=\"true\"></i><p>Utilisateur</p></span>
                <!--span class=\"userIcon\"> <i class=\"fa fa-user-plus fa-4x\" aria-hidden=\"true\"></i></i><p>Utilisateur</p></span-->

               
                
                <!--form class=\"d-flex\">
                    <input class=\"form-control me-sm-2\" type=\"text\" placeholder=\"Search\">
                    <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Search</button>
                </form-->
                </div>
            </div>
            </nav>
        </header>
        <main>
            ";
        // line 73
        $this->displayBlock('body', $context, $blocks);
        // line 74
        echo "        </main>
        <footer>
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
    </body>    
</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"https://bootswatch.com/5/yeti/bootstrap.css\">
            <link rel=\"stylesheet\" href=\"font-awesome-4.7.0/css/font-awesome.min.css\">
            <link rel=\"stylesheet\" href=\"style.css\">            
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 73
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
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
        return array (  186 => 73,  173 => 7,  163 => 6,  129 => 74,  127 => 73,  90 => 39,  81 => 33,  67 => 22,  54 => 11,  52 => 6,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">        
        
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"https://bootswatch.com/5/yeti/bootstrap.css\">
            <link rel=\"stylesheet\" href=\"font-awesome-4.7.0/css/font-awesome.min.css\">
            <link rel=\"stylesheet\" href=\"style.css\">            
        {% endblock %}

    </head>
    <body>       
        <header> 
               
               
            <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
            <div class=\"container-fluid\">
                <figure class=\"logotype\">
                    <img src=\"./img/site/logotypeSite.png\" alt=\"Logotype Afpa\">
                </figure>  
                <a class=\"navbar-brand\" href=\"{{ path('accueil') }}\">Pagué</a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
                </button>

                <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
                <ul class=\"navbar-nav me-auto\">               
                    <li class=\"nav-item debut-nav\">
                        <a class=\"nav-link\" href=\"#\">Recherche</a>
                    </li>
                    <li class=\"nav-item fin-nav\">
                        <a class=\"nav-link\" href=\"{{ path('app_login') }}\">Connexion</a>
                    </li>
                    <li class=\"nav-item fin-nav\">
                        <a class=\"nav-link\" href=\"#\">Inscription</a>
                    </li>
                    <li class=\"nav-item fin-nav\">
                        <a class=\"nav-link\" href=\"{{ path('app_logout') }}\">Déconnexion</a>
                    </li>
                    <li class=\"nav-item debut-nav\">
                        <a class=\"nav-link\" href=\"#\">Création</a>
                    </li>
                    <li class=\"nav-item debut-nav\">
                        <a class=\"nav-link\" href=\"#\">Tables de paramétrages</a>
                    </li>
                    <!--li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" href=\"#\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown</a>
                    <div class=\"dropdown-menu\">
                        <a class=\"dropdown-item\" href=\"#\">Action</a>
                        <a class=\"dropdown-item\" href=\"#\">Another action</a>
                        <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"#\">Separated link</a>
                    </div>
                    </li-->
                    
                </ul>
                <span class=\"userIcon\"><i class=\"fa fa-user-times fa-4x\" aria-hidden=\"true\"></i><p>Utilisateur</p></span>
                <!--span class=\"userIcon\"> <i class=\"fa fa-user-plus fa-4x\" aria-hidden=\"true\"></i></i><p>Utilisateur</p></span-->

               
                
                <!--form class=\"d-flex\">
                    <input class=\"form-control me-sm-2\" type=\"text\" placeholder=\"Search\">
                    <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Search</button>
                </form-->
                </div>
            </div>
            </nav>
        </header>
        <main>
            {% block body %}{% endblock %}
        </main>
        <footer>
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
    </body>    
</html>

", "base.html.twig", "C:\\Users\\Fg\\passageAGue\\templates\\base.html.twig");
    }
}
