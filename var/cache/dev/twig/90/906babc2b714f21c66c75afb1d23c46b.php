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

/* group/Admingetall.html.twig */
class __TwigTemplate_c0ab066b40a2159891b01ff3e69d9b33 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "group/Admingetall.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "group/Admingetall.html.twig"));

        $this->parent = $this->loadTemplate("admin.html.twig", "group/Admingetall.html.twig", 1);
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
    <div style=\"margin-top: 50px;\">
        <div class=\"card mb-4\">
            <div class=\"card-header\">
                <i class=\"fas fa-table me-1\"></i>
                <h1 style=\"text-align: center;\">List of Groups</h1>
            </div>
            <div class=\"card-body\">
                <div class=\"row justify-content-end\">
                    <div class=\"col-xl-8\">
                        <table id=\"datatablesSimple\" class=\"table\">
                            <thead>
                                <tr>
                                    <th>Group Name</th>
                                    <th>Owner</th>
                                    <th>Size</th>
                                    <th>Logo</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 26
            echo "                                    <tr style=\"border-bottom: 1px solid #ccc;\">
                                        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "nom", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                                        <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "email", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                                        <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "size", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                                        <td>
                                            <img src=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["group"], "logo", [], "any", false, false, false, 31)), "html", null, true);
            echo "\" alt=\"Group Logo\" style=\"width: 100px; height: auto; border-radius: 5px; box-shadow: 0 0 10px 0 rgba(0,0,0,0.1);\">
                                        </td>
                                        <td>
                                            <a href=\"#\" class=\"btn btn-primary\" onclick=\"return editGroup(";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 34), "html", null, true);
            echo ")\" style=\"text-decoration: none; color: white;\">Edit</a>
                                            <a href=\"#\" class=\"btn btn-danger\" onclick=\"return confirmDelete(";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 35), "html", null, true);
            echo ")\" style=\"text-decoration: none; color: white;\">Delete</a>
                                        </td>
                                    </tr>
                                    <tr id=\"editForm_";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 38), "html", null, true);
            echo "\" style=\"display: none;\">
                                        <td colspan=\"4\">
                                            <form action=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_updategroup", ["id" => twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\" method=\"POST\" enctype=\"multipart/form-data\">
                                                <input type=\"text\" name=\"group_name\" value=\"";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "nom", [], "any", false, false, false, 41), "html", null, true);
            echo "\" />
                                                <button type=\"submit\">Save</button>
                                            </form>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 55
        $this->displayBlock('footer', $context, $blocks);
        // line 56
        echo "
    <script>
        function confirmDelete(groupId) {
            if (confirm(\"Are you sure you want to delete this group?\")) {
                window.location.href = \"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_deletegroup", ["id" => "GROUP_ID"]);
        echo "\".replace('GROUP_ID', groupId);
            }
            return false;
        }

        function editGroup(groupId) {
            var editForm = document.getElementById(\"editForm_\" + groupId);
            if (editForm) {
                editForm.style.display = \"table-row\"; // Display the edit form
            }
            return false;
        }
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 55
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        echo " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "group/Admingetall.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 55,  169 => 60,  163 => 56,  161 => 55,  151 => 47,  139 => 41,  135 => 40,  130 => 38,  124 => 35,  120 => 34,  114 => 31,  109 => 29,  105 => 28,  101 => 27,  98 => 26,  94 => 25,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.html.twig' %}

{% block body %}
    {{ parent() }} 
    <div style=\"margin-top: 50px;\">
        <div class=\"card mb-4\">
            <div class=\"card-header\">
                <i class=\"fas fa-table me-1\"></i>
                <h1 style=\"text-align: center;\">List of Groups</h1>
            </div>
            <div class=\"card-body\">
                <div class=\"row justify-content-end\">
                    <div class=\"col-xl-8\">
                        <table id=\"datatablesSimple\" class=\"table\">
                            <thead>
                                <tr>
                                    <th>Group Name</th>
                                    <th>Owner</th>
                                    <th>Size</th>
                                    <th>Logo</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for group in groups %}
                                    <tr style=\"border-bottom: 1px solid #ccc;\">
                                        <td>{{ group.nom }}</td>
                                        <td>{{ group.email }}</td>
                                        <td>{{ group.size }}</td>
                                        <td>
                                            <img src=\"{{ asset(group.logo) }}\" alt=\"Group Logo\" style=\"width: 100px; height: auto; border-radius: 5px; box-shadow: 0 0 10px 0 rgba(0,0,0,0.1);\">
                                        </td>
                                        <td>
                                            <a href=\"#\" class=\"btn btn-primary\" onclick=\"return editGroup({{ group.id }})\" style=\"text-decoration: none; color: white;\">Edit</a>
                                            <a href=\"#\" class=\"btn btn-danger\" onclick=\"return confirmDelete({{ group.id }})\" style=\"text-decoration: none; color: white;\">Delete</a>
                                        </td>
                                    </tr>
                                    <tr id=\"editForm_{{ group.id }}\" style=\"display: none;\">
                                        <td colspan=\"4\">
                                            <form action=\"{{ path('admin_updategroup', {'id': group.id}) }}\" method=\"POST\" enctype=\"multipart/form-data\">
                                                <input type=\"text\" name=\"group_name\" value=\"{{ group.nom }}\" />
                                                <button type=\"submit\">Save</button>
                                            </form>
                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {% block footer %} {% endblock %}

    <script>
        function confirmDelete(groupId) {
            if (confirm(\"Are you sure you want to delete this group?\")) {
                window.location.href = \"{{ path('admin_deletegroup', {'id': 'GROUP_ID'}) }}\".replace('GROUP_ID', groupId);
            }
            return false;
        }

        function editGroup(groupId) {
            var editForm = document.getElementById(\"editForm_\" + groupId);
            if (editForm) {
                editForm.style.display = \"table-row\"; // Display the edit form
            }
            return false;
        }
    </script>
{% endblock %}
", "group/Admingetall.html.twig", "C:\\Users\\hamad\\OneDrive\\Desktop\\WebProject\\WebProjectV2\\templates\\group\\Admingetall.html.twig");
    }
}
