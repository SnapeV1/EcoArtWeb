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

/* event_user/getall.html.twig */
class __TwigTemplate_3b348904257fe1719279d410ae6d42b0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event_user/getall.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event_user/getall.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "event_user/getall.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    
    <div class=\"container text-center\"> <!-- Utilisez la classe \"container\" pour centrer le contenu, et \"text-center\" pour centrer horizontalement -->
        <h1>Liste des événements</h1>
        
        <div class=\"mx-auto\" style=\"width: 70%;\"> <!-- Utilisez la classe \"mx-auto\" pour centrer le contenu horizontalement et définissez la largeur -->
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th scope=\"col\">Nom de l'événement</th>
                        <th scope=\"col\">Date de l'événement</th>
                        <th scope=\"col\">Lieu</th>
                        <th scope=\"col\">Description</th>
                        <th scope=\"col\">Image</th>
                        <th scope=\"col\">Prix</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 23
            echo "                    <tr class=\"table-active\">
                        
                        <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "nom", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                        <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "date", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "lieu", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                        <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                        <td> <img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 29)), "html", null, true);
            echo "\"</td>
                        <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "prix", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                       
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                </tbody>
            </table>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "event_user/getall.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 34,  118 => 30,  114 => 29,  110 => 28,  106 => 27,  102 => 26,  98 => 25,  94 => 23,  90 => 22,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    {{ parent() }}
    
    <div class=\"container text-center\"> <!-- Utilisez la classe \"container\" pour centrer le contenu, et \"text-center\" pour centrer horizontalement -->
        <h1>Liste des événements</h1>
        
        <div class=\"mx-auto\" style=\"width: 70%;\"> <!-- Utilisez la classe \"mx-auto\" pour centrer le contenu horizontalement et définissez la largeur -->
            <table class=\"table table-hover\">
                <thead>
                    <tr>
                        <th scope=\"col\">Nom de l'événement</th>
                        <th scope=\"col\">Date de l'événement</th>
                        <th scope=\"col\">Lieu</th>
                        <th scope=\"col\">Description</th>
                        <th scope=\"col\">Image</th>
                        <th scope=\"col\">Prix</th>
                    </tr>
                </thead>
                <tbody>
                    {% for event in events %}
                    <tr class=\"table-active\">
                        
                        <td>{{ event.nom }}</td>
                        <td>{{ event.date }}</td>
                        <td>{{ event.lieu }}</td>
                        <td>{{ event.description }}</td>
                        <td> <img src=\"{{ asset(event.image) }}\"</td>
                        <td>{{ event.prix }}</td>
                       
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
{% endblock %}
", "event_user/getall.html.twig", "C:\\Users\\ASUS\\Downloads\\EcoArtWeb-main\\EcoArtWeb-main\\templates\\event_user\\getall.html.twig");
    }
}
