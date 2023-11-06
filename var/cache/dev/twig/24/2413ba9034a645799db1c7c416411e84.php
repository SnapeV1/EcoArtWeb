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

/* membre/members.html.twig */
class __TwigTemplate_42d6c2b7ddc1557e4ce38b917aa13417 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "membre/members.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "membre/members.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "membre/members.html.twig", 1);
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
    <!-- In the head section -->
<style>
    table {
        width: 100%;
        border-collapse: collapse;
        text-align: center; /* Center table content */
    }

    th, td {
        padding: 8px;
        text-align: center; /* Center table cell content */
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #ddd;
    }
    .display{
          text-align: center;
    }
</style>

    <h1 style=\"text-align: center;\">Members of the Group</h1>
    <div style=\"display: flex; justify-content: center;\">
        <table style=\"width: 70%;\">
            <tr>
                <th>Username</th>
                <th>CIN</th>
                <th>Email</th>
                <th>Date of Birth</th>
                <th>Role</th>
            </tr>
            ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["members"]) || array_key_exists("members", $context) ? $context["members"] : (function () { throw new RuntimeError('Variable "members" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 46
            echo "                <tr>
                    <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["member"], "getUser", [], "method", false, false, false, 47), "getUsername", [], "method", false, false, false, 47), "html", null, true);
            echo "</td>
                    <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["member"], "getUser", [], "method", false, false, false, 48), "getCin", [], "method", false, false, false, 48), "html", null, true);
            echo "</td>
                    <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["member"], "getUser", [], "method", false, false, false, 49), "getEmail", [], "method", false, false, false, 49), "html", null, true);
            echo "</td>
                    <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["member"], "getUser", [], "method", false, false, false, 50), "getDateNaissance", [], "method", false, false, false, 50), "Y-m-d"), "html", null, true);
            echo "</td>
                    <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "getRole", [], "method", false, false, false, 51), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "        </table>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "membre/members.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 54,  136 => 51,  132 => 50,  128 => 49,  124 => 48,  120 => 47,  117 => 46,  113 => 45,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    {{ parent() }}
    <!-- In the head section -->
<style>
    table {
        width: 100%;
        border-collapse: collapse;
        text-align: center; /* Center table content */
    }

    th, td {
        padding: 8px;
        text-align: center; /* Center table cell content */
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #ddd;
    }
    .display{
          text-align: center;
    }
</style>

    <h1 style=\"text-align: center;\">Members of the Group</h1>
    <div style=\"display: flex; justify-content: center;\">
        <table style=\"width: 70%;\">
            <tr>
                <th>Username</th>
                <th>CIN</th>
                <th>Email</th>
                <th>Date of Birth</th>
                <th>Role</th>
            </tr>
            {% for member in members %}
                <tr>
                    <td>{{ member.getUser().getUsername() }}</td>
                    <td>{{ member.getUser().getCin() }}</td>
                    <td>{{ member.getUser().getEmail() }}</td>
                    <td>{{ member.getUser().getDateNaissance()|date('Y-m-d') }}</td>
                    <td>{{ member.getRole() }}</td>
                </tr>
            {% endfor %}
        </table>
    </div>
{% endblock %}
", "membre/members.html.twig", "C:\\Users\\hamad\\OneDrive\\Desktop\\WebProject\\WebProjectV2\\templates\\membre\\members.html.twig");
    }
}
