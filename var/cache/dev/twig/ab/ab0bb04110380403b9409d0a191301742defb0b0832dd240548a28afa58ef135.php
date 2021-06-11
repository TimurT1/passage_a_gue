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

/* passage/index.html.twig */
class __TwigTemplate_d8e21dfda904c198ff30194d2db7a9e5686d0b528631c0b2d78accd38417e98e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "passage/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "passage/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "passage/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Passage à gué", [], "messages");
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <!-- Carte -->
    <div id=\"maCarte\"></div>
    <!-- Carte -->
    <h1>";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Passage à gué", [], "messages");
        echo "</h1>

    <table class=\"table table-sm table-hover\">
        <thead>
            <tr>
                <th>";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gps - X", [], "messages");
        echo "</th>
                <th>";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gps - Y", [], "messages");
        echo "</th>
                <th>";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Fréquence de submersion", [], "messages");
        echo "</th>
                <th>";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Largeur du passage", [], "messages");
        echo "</th>
                <th>";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Longueur du passage", [], "messages");
        echo "</th>
                <th>";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Trafic journalier", [], "messages");
        echo "</th>
                <th>";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Limitation respectée", [], "messages");
        echo "</th>
                <th>";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Archive", [], "messages");
        echo "</th>
                <th>";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Taux d'accidentalité", [], "messages");
        echo "</th>
                <th>";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Type d'ouvrage", [], "messages");
        echo "</th>
                <th>";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cours d'eau", [], "messages");
        echo "</th>
                <th>";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Localisation", [], "messages");
        echo "</th>
                <th>";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Gestionnaire", [], "messages");
        echo "</th>
                <th>";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Utilisateurs ayant accès aux données", [], "messages");
        echo "</th>
                <th>";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Submersions", [], "messages");
        echo "</th>
                <th>";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Route", [], "messages");
        echo "</th>
                <th>";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("actions", [], "messages");
        echo "</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["passage_a_gues"]) || array_key_exists("passage_a_gues", $context) ? $context["passage_a_gues"] : (function () { throw new RuntimeError('Variable "passage_a_gues" does not exist.', 34, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["passage_a_gue"]) {
            // line 35
            echo "            ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["passage_a_gue"], "boolArchive", [], "any", false, false, false, 35), 0))) {
                // line 36
                echo "                <tr>
                    <td class='gpsX' gpsX-id=\"";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["passage_a_gue"], "id", [], "any", false, false, false, 37), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["passage_a_gue"], "gpsX", [], "any", false, false, false, 37), "html", null, true);
                echo "</td>
                    <td class='gpsY' gpsY-id=\"";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["passage_a_gue"], "id", [], "any", false, false, false, 38), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["passage_a_gue"], "gpsY", [], "any", false, false, false, 38), "html", null, true);
                echo "</td>
                    <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["passage_a_gue"], "frequenceSubmersion", [], "any", false, false, false, 39), "html", null, true);
                echo "</td>
                    <td>";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["passage_a_gue"], "largeurPassage", [], "any", false, false, false, 40), "html", null, true);
                echo "</td>
                    <td>";
                // line 41
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["passage_a_gue"], "longueurPassage", [], "any", false, false, false, 41), "html", null, true);
                echo "</td>
                    <td>";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["passage_a_gue"], "traficJournalier", [], "any", false, false, false, 42), "html", null, true);
                echo "</td>
                    <td>";
                // line 43
                echo ((twig_get_attribute($this->env, $this->source, $context["passage_a_gue"], "boolLimitationRespectee", [], "any", false, false, false, 43)) ? ("Oui") : ("Non"));
                echo "</td>
                    <td>";
                // line 44
                echo ((twig_get_attribute($this->env, $this->source, $context["passage_a_gue"], "boolArchive", [], "any", false, false, false, 44)) ? ("Oui") : ("Non"));
                echo "</td>
                    <td>";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["passage_a_gue"], "tauxAccidentalite", [], "any", false, false, false, 45), "html", null, true);
                echo "</td>
                    <td>";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["passage_a_gue"], "TypeOuvrage", [], "any", false, false, false, 46), "html", null, true);
                echo "</td> 
                    <td>";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["passage_a_gue"], "CoursEau", [], "any", false, false, false, 47), "html", null, true);
                echo "</td> 
                    <td class='localisation' localisation-id=\"";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["passage_a_gue"], "id", [], "any", false, false, false, 48), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["passage_a_gue"], "localisation", [], "any", false, false, false, 48), "html", null, true);
                echo "</td>  
                    <td>";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage_a_gue"], "idUtilisateur", [], "any", false, false, false, 49), "fullname", [], "any", false, false, false, 49), "html", null, true);
                echo "</td>                
                    <td>
                        <select name=\"\" id=\"\"> 
                            <option>";
                // line 52
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Utilisateurs", [], "messages");
                echo "</option>
                        ";
                // line 53
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["passage_a_gue"], "users", [], "any", false, false, false, 53));
                foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                    // line 54
                    echo "                            <option>
                            ";
                    // line 55
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "fullname", [], "any", false, false, false, 55), "html", null, true);
                    echo " 
                            </option> 
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "                 
                        </select>
                    </td>
                    <td>               
                        <select name=\"\" id=\"\"> 
                            <option>";
                // line 62
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Submersions", [], "messages");
                echo "</option>
                        ";
                // line 63
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["passage_a_gue"], "submersions", [], "any", false, false, false, 63));
                foreach ($context['_seq'] as $context["_key"] => $context["submersion"]) {
                    // line 64
                    echo "                            <option>
                            ";
                    // line 65
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["submersion"], "fullname", [], "any", false, false, false, 65) . ";"), "html", null, true);
                    echo " 
                            </option>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submersion'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 67
                echo "                 
                    </select>   
                    </td> 
                    <td>               
                        <select name=\"\" id=\"\"> 
                            <option>";
                // line 72
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Routes", [], "messages");
                echo "</option>
                        ";
                // line 73
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["passage_a_gue"], "route", [], "any", false, false, false, 73));
                foreach ($context['_seq'] as $context["_key"] => $context["route"]) {
                    // line 74
                    echo "                            <option>
                            ";
                    // line 75
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["route"], "numeroRoute", [], "any", false, false, false, 75), "html", null, true);
                    echo " 
                            </option> 
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['route'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 77
                echo "                 
                        </select>   
                    </td>         

                    <td>
                        <div class=\"bouton-align\">
                            <a href=\"";
                // line 83
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passage_a_gue_show", ["id" => twig_get_attribute($this->env, $this->source, $context["passage_a_gue"], "id", [], "any", false, false, false, 83)]), "html", null, true);
                echo "\" voirPlus-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["passage_a_gue"], "id", [], "any", false, false, false, 83), "html", null, true);
                echo "\" class=\"btn btn-info\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Voir +", [], "messages");
                echo "</a>
                            ";
                // line 84
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_TECHNICIEN")) {
                    // line 85
                    echo "                                <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passage_a_gue_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["passage_a_gue"], "id", [], "any", false, false, false, 85)]), "html", null, true);
                    echo "\" class=\"btn btn-primary\">";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Modifier", [], "messages");
                    echo "</a>
                            ";
                }
                // line 87
                echo "                            ";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_GESTIONNAIRE")) {
                    // line 88
                    echo "                                ";
                    echo twig_include($this->env, $context, "passage/_archive_form.html.twig");
                    echo "
                            ";
                }
                // line 90
                echo "                            ";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 91
                    echo "                                ";
                    echo twig_include($this->env, $context, "passage/_delete_form.html.twig");
                    echo "
                            ";
                }
                // line 93
                echo "                        </div>
                    </td>
                </tr>
            ";
            }
            // line 97
            echo "        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 98
            echo "            <tr>
                <td colspan=\"11\">";
            // line 99
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Pas d'enregistrement trouvé", [], "messages");
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['passage_a_gue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "        </tbody>
    </table>
    <div class=\"bouton-align\">
        <a href=\"";
        // line 105
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("creation");
        echo "\" class=\"btn btn-success\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Créer un nouveau passage", [], "messages");
        echo "</a>
        <a href=\"";
        // line 106
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\" class=\"btn btn-secondary\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Retour", [], "messages");
        echo "</a>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 110
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 111
        echo "    <!-- Carte -->
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script src=\"https://unpkg.com/leaflet@1.7.1/dist/leaflet.js\"></script>
    <script src=\"https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js\"></script>
    <script src=\"/js/carte.js\"></script>
   <!-- Carte -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "passage/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  442 => 111,  432 => 110,  417 => 106,  411 => 105,  406 => 102,  397 => 99,  394 => 98,  381 => 97,  375 => 93,  369 => 91,  366 => 90,  360 => 88,  357 => 87,  349 => 85,  347 => 84,  339 => 83,  331 => 77,  322 => 75,  319 => 74,  315 => 73,  311 => 72,  304 => 67,  295 => 65,  292 => 64,  288 => 63,  284 => 62,  277 => 57,  268 => 55,  265 => 54,  261 => 53,  257 => 52,  251 => 49,  245 => 48,  241 => 47,  237 => 46,  233 => 45,  229 => 44,  225 => 43,  221 => 42,  217 => 41,  213 => 40,  209 => 39,  203 => 38,  197 => 37,  194 => 36,  191 => 35,  173 => 34,  166 => 30,  162 => 29,  158 => 28,  154 => 27,  150 => 26,  146 => 25,  142 => 24,  138 => 23,  134 => 22,  130 => 21,  126 => 20,  122 => 19,  118 => 18,  114 => 17,  110 => 16,  106 => 15,  102 => 14,  94 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% trans %}Passage à gué{% endtrans %}{% endblock %}

{% block main %}
    <!-- Carte -->
    <div id=\"maCarte\"></div>
    <!-- Carte -->
    <h1>{% trans %}Passage à gué{% endtrans %}</h1>

    <table class=\"table table-sm table-hover\">
        <thead>
            <tr>
                <th>{% trans %}Gps - X{% endtrans %}</th>
                <th>{% trans %}Gps - Y{% endtrans %}</th>
                <th>{% trans %}Fréquence de submersion{% endtrans %}</th>
                <th>{% trans %}Largeur du passage{% endtrans %}</th>
                <th>{% trans %}Longueur du passage{% endtrans %}</th>
                <th>{% trans %}Trafic journalier{% endtrans %}</th>
                <th>{% trans %}Limitation respectée{% endtrans %}</th>
                <th>{% trans %}Archive{% endtrans %}</th>
                <th>{% trans %}Taux d'accidentalité{% endtrans %}</th>
                <th>{% trans %}Type d'ouvrage{% endtrans %}</th>
                <th>{% trans %}Cours d'eau{% endtrans %}</th>
                <th>{% trans %}Localisation{% endtrans %}</th>
                <th>{% trans %}Gestionnaire{% endtrans %}</th>
                <th>{% trans %}Utilisateurs ayant accès aux données{% endtrans %}</th>
                <th>{% trans %}Submersions{% endtrans %}</th>
                <th>{% trans %}Route{% endtrans %}</th>
                <th>{% trans %}actions{% endtrans %}</th>
            </tr>
        </thead>
        <tbody>
        {% for passage_a_gue in passage_a_gues %}
            {% if passage_a_gue.boolArchive == 0 %}
                <tr>
                    <td class='gpsX' gpsX-id=\"{{ passage_a_gue.id }}\">{{ passage_a_gue.gpsX }}</td>
                    <td class='gpsY' gpsY-id=\"{{ passage_a_gue.id }}\">{{ passage_a_gue.gpsY }}</td>
                    <td>{{ passage_a_gue.frequenceSubmersion }}</td>
                    <td>{{ passage_a_gue.largeurPassage }}</td>
                    <td>{{ passage_a_gue.longueurPassage }}</td>
                    <td>{{ passage_a_gue.traficJournalier }}</td>
                    <td>{{ passage_a_gue.boolLimitationRespectee ? 'Oui' : 'Non' }}</td>
                    <td>{{ passage_a_gue.boolArchive ? 'Oui' : 'Non' }}</td>
                    <td>{{ passage_a_gue.tauxAccidentalite }}</td>
                    <td>{{ passage_a_gue.TypeOuvrage }}</td> 
                    <td>{{ passage_a_gue.CoursEau }}</td> 
                    <td class='localisation' localisation-id=\"{{ passage_a_gue.id }}\">{{ passage_a_gue.localisation }}</td>  
                    <td>{{ passage_a_gue.idUtilisateur.fullname }}</td>                
                    <td>
                        <select name=\"\" id=\"\"> 
                            <option>{% trans %}Utilisateurs{% endtrans %}</option>
                        {% for user in passage_a_gue.users %}
                            <option>
                            {{ user.fullname }} 
                            </option> 
                        {% endfor %}                 
                        </select>
                    </td>
                    <td>               
                        <select name=\"\" id=\"\"> 
                            <option>{% trans %}Submersions{% endtrans %}</option>
                        {% for submersion in passage_a_gue.submersions %}
                            <option>
                            {{ submersion.fullname ~ ';'}} 
                            </option>
                        {% endfor %}                 
                    </select>   
                    </td> 
                    <td>               
                        <select name=\"\" id=\"\"> 
                            <option>{% trans %}Routes{% endtrans %}</option>
                        {% for route in passage_a_gue.route %}
                            <option>
                            {{ route.numeroRoute }} 
                            </option> 
                        {% endfor %}                 
                        </select>   
                    </td>         

                    <td>
                        <div class=\"bouton-align\">
                            <a href=\"{{ path('passage_a_gue_show', {'id': passage_a_gue.id}) }}\" voirPlus-id=\"{{  passage_a_gue.id }}\" class=\"btn btn-info\">{% trans %}Voir + {% endtrans %}</a>
                            {% if is_granted('ROLE_TECHNICIEN') %}
                                <a href=\"{{ path('passage_a_gue_edit', {'id': passage_a_gue.id}) }}\" class=\"btn btn-primary\">{% trans %}Modifier{% endtrans %}</a>
                            {% endif %}
                            {% if is_granted('ROLE_GESTIONNAIRE') %}
                                {{ include('passage/_archive_form.html.twig') }}
                            {% endif %}
                            {% if is_granted('ROLE_ADMIN') %}
                                {{ include('passage/_delete_form.html.twig') }}
                            {% endif %}
                        </div>
                    </td>
                </tr>
            {% endif %}
        {% else %}
            <tr>
                <td colspan=\"11\">{% trans %}Pas d'enregistrement trouvé{% endtrans %}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    <div class=\"bouton-align\">
        <a href=\"{{ path('creation') }}\" class=\"btn btn-success\">{% trans %}Créer un nouveau passage{% endtrans %}</a>
        <a href=\"{{ path('accueil') }}\" class=\"btn btn-secondary\">{% trans %}Retour{% endtrans %}</a>
    </div>
{% endblock %}

{% block script %}
    <!-- Carte -->
    <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
    <script src=\"https://unpkg.com/leaflet@1.7.1/dist/leaflet.js\"></script>
    <script src=\"https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js\"></script>
    <script src=\"/js/carte.js\"></script>
   <!-- Carte -->
{% endblock %}", "passage/index.html.twig", "C:\\Users\\samyg\\Desktop\\StageDev\\templates\\passage\\index.html.twig");
    }
}
