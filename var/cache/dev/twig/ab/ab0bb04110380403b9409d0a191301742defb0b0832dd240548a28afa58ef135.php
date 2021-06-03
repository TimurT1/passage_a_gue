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

        echo "Passage à gué";
        
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
        echo "    <h1>Passage à gué</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Gps X</th>
                <th>Gps Y</th>
                <th>Fréquence de submersion</th>
                <th>Largeur du passage</th>
                <th>Longueur du passage</th>
                <th>Trafic journalier</th>
                <th>Limitation respectée</th>
                <th>Archive</th>
                <th>Taux d'accidentalité</th>
                <th>Type d'ouvrage</th>
                <th>Cours d'eau</th>
                <th>Localisation</th>
                <th>Gestionnaire</th>
                <th>Utilisateurs ayant accès aux données</th>
                <th>Submersions</th>
                <th>Route</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["passage_a_gues"]) || array_key_exists("passage_a_gues", $context) ? $context["passage_a_gues"] : (function () { throw new RuntimeError('Variable "passage_a_gues" does not exist.', 31, $this->source); })()));
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
            // line 32
            echo "            <tr>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["passage_a_gue"], "gpsX", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["passage_a_gue"], "gpsY", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["passage_a_gue"], "frequenceSubmersion", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["passage_a_gue"], "largeurPassage", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["passage_a_gue"], "longueurPassage", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["passage_a_gue"], "traficJournalier", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo ((twig_get_attribute($this->env, $this->source, $context["passage_a_gue"], "boolLimitationRespectee", [], "any", false, false, false, 39)) ? ("Oui") : ("Non"));
            echo "</td>
                <td>";
            // line 40
            echo ((twig_get_attribute($this->env, $this->source, $context["passage_a_gue"], "boolArchive", [], "any", false, false, false, 40)) ? ("Oui") : ("Non"));
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["passage_a_gue"], "tauxAccidentalite", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["passage_a_gue"], "TypeOuvrage", [], "any", false, false, false, 42), "html", null, true);
            echo "</td> 
                <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["passage_a_gue"], "CoursEau", [], "any", false, false, false, 43), "html", null, true);
            echo "</td> 
                <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["passage_a_gue"], "localisation", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>  
                <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["passage_a_gue"], "idUtilisateur", [], "any", false, false, false, 45), "fullname", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>                
                <td>
                    <select name=\"\" id=\"\"> 
                        <option>Utilisateurs</option>
                    ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["passage_a_gue"], "users", [], "any", false, false, false, 49));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 50
                echo "                        <option>
                        ";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "fullname", [], "any", false, false, false, 51), "html", null, true);
                echo " 
                        </option> 
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "                 
                    </select>
                </td>
                <td>               
                    <select name=\"\" id=\"\"> 
                        <option>Submersions</option>
                    ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["passage_a_gue"], "submersions", [], "any", false, false, false, 59));
            foreach ($context['_seq'] as $context["_key"] => $context["submersion"]) {
                // line 60
                echo "                        <option>
                        ";
                // line 61
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["submersion"], "fullname", [], "any", false, false, false, 61) . ";"), "html", null, true);
                echo " 
                        </option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submersion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                 
                </select>   
                </td> 
                <td>               
                    <select name=\"\" id=\"\"> 
                        <option>Routes</option>
                    ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["passage_a_gue"], "route", [], "any", false, false, false, 69));
            foreach ($context['_seq'] as $context["_key"] => $context["route"]) {
                // line 70
                echo "                        <option>
                        ";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["route"], "numeroRoute", [], "any", false, false, false, 71), "html", null, true);
                echo " 
                        </option> 
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['route'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "                 
                    </select>   
                </td>         

                <td>
                    <div class=\"bouton-align\">
                        <a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passage_a_gue_show", ["id" => twig_get_attribute($this->env, $this->source, $context["passage_a_gue"], "id", [], "any", false, false, false, 79)]), "html", null, true);
            echo "\" class=\"btn btn-info\">Voir + </a>
                        <a href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("passage_a_gue_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["passage_a_gue"], "id", [], "any", false, false, false, 80)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Modifier</a>
                        ";
            // line 81
            echo twig_include($this->env, $context, "passage/_delete_form.html.twig");
            echo "
                    </div>
                </td>
            </tr>
        ";
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
            // line 86
            echo "            <tr>
                <td colspan=\"11\">Pas d'enregistrement trouvé</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['passage_a_gue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "        </tbody>
    </table>
    <div class=\"bouton-align\">
        <a href=\"";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("creation");
        echo "\" class=\"btn btn-success\">Créer un nouveau passage</a>
        <a href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\" class=\"btn btn-secondary\">Retour</a>
    </div>
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
        return array (  307 => 94,  303 => 93,  298 => 90,  289 => 86,  271 => 81,  267 => 80,  263 => 79,  255 => 73,  246 => 71,  243 => 70,  239 => 69,  231 => 63,  222 => 61,  219 => 60,  215 => 59,  207 => 53,  198 => 51,  195 => 50,  191 => 49,  184 => 45,  180 => 44,  176 => 43,  172 => 42,  168 => 41,  164 => 40,  160 => 39,  156 => 38,  152 => 37,  148 => 36,  144 => 35,  140 => 34,  136 => 33,  133 => 32,  115 => 31,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Passage à gué{% endblock %}

{% block main %}
    <h1>Passage à gué</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Gps X</th>
                <th>Gps Y</th>
                <th>Fréquence de submersion</th>
                <th>Largeur du passage</th>
                <th>Longueur du passage</th>
                <th>Trafic journalier</th>
                <th>Limitation respectée</th>
                <th>Archive</th>
                <th>Taux d'accidentalité</th>
                <th>Type d'ouvrage</th>
                <th>Cours d'eau</th>
                <th>Localisation</th>
                <th>Gestionnaire</th>
                <th>Utilisateurs ayant accès aux données</th>
                <th>Submersions</th>
                <th>Route</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for passage_a_gue in passage_a_gues %}
            <tr>
                <td>{{ passage_a_gue.gpsX }}</td>
                <td>{{ passage_a_gue.gpsY }}</td>
                <td>{{ passage_a_gue.frequenceSubmersion }}</td>
                <td>{{ passage_a_gue.largeurPassage }}</td>
                <td>{{ passage_a_gue.longueurPassage }}</td>
                <td>{{ passage_a_gue.traficJournalier }}</td>
                <td>{{ passage_a_gue.boolLimitationRespectee ? 'Oui' : 'Non' }}</td>
                <td>{{ passage_a_gue.boolArchive ? 'Oui' : 'Non' }}</td>
                <td>{{ passage_a_gue.tauxAccidentalite }}</td>
                <td>{{ passage_a_gue.TypeOuvrage }}</td> 
                <td>{{ passage_a_gue.CoursEau }}</td> 
                <td>{{ passage_a_gue.localisation }}</td>  
                <td>{{ passage_a_gue.idUtilisateur.fullname }}</td>                
                <td>
                    <select name=\"\" id=\"\"> 
                        <option>Utilisateurs</option>
                    {% for user in passage_a_gue.users %}
                        <option>
                        {{ user.fullname }} 
                        </option> 
                    {% endfor %}                 
                    </select>
                </td>
                <td>               
                    <select name=\"\" id=\"\"> 
                        <option>Submersions</option>
                    {% for submersion in passage_a_gue.submersions %}
                        <option>
                        {{ submersion.fullname ~ ';'}} 
                        </option>
                    {% endfor %}                 
                </select>   
                </td> 
                <td>               
                    <select name=\"\" id=\"\"> 
                        <option>Routes</option>
                    {% for route in passage_a_gue.route %}
                        <option>
                        {{ route.numeroRoute }} 
                        </option> 
                    {% endfor %}                 
                    </select>   
                </td>         

                <td>
                    <div class=\"bouton-align\">
                        <a href=\"{{ path('passage_a_gue_show', {'id': passage_a_gue.id}) }}\" class=\"btn btn-info\">Voir + </a>
                        <a href=\"{{ path('passage_a_gue_edit', {'id': passage_a_gue.id}) }}\" class=\"btn btn-primary\">Modifier</a>
                        {{ include('passage/_delete_form.html.twig') }}
                    </div>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"11\">Pas d'enregistrement trouvé</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    <div class=\"bouton-align\">
        <a href=\"{{ path('creation') }}\" class=\"btn btn-success\">Créer un nouveau passage</a>
        <a href=\"{{ path('accueil') }}\" class=\"btn btn-secondary\">Retour</a>
    </div>
{% endblock %}", "passage/index.html.twig", "C:\\Users\\samyg\\Desktop\\StageDev\\templates\\passage\\index.html.twig");
    }
}
