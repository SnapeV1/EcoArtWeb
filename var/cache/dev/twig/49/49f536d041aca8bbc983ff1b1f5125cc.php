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

/* group/getall.html.twig */
class __TwigTemplate_0ee16102b858ed7a4a69b600ca989273 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "group/getall.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "group/getall.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "group/getall.html.twig", 1);
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
        <h1 style=\"text-align: center;\">List of Groups</h1>

        <table style=\"border-collapse: collapse; width: 80%; margin: 0 auto; margin-top: 20px;\">
            <thead style=\"background-color: #f2f2f2;\">
                <tr>
                    <th style=\"padding: 10px;\">Group Name</th>
                    <th style=\"padding: 10px;\">Size</th>
                    <th style=\"padding: 10px;\">Logo</th>
                    <th style=\"padding: 10px;\">Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 20
            echo "                    <tr style=\"border-bottom: 1px solid #ccc;\">
                        <td style=\"padding: 10px;\">
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("members_getall", ["id" => twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 22), "userid" => (isset($context["userid"]) || array_key_exists("userid", $context) ? $context["userid"] : (function () { throw new RuntimeError('Variable "userid" does not exist.', 22, $this->source); })())]), "html", null, true);
            echo "\" style=\"text-decoration: none; color: blue;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "nom", [], "any", false, false, false, 22), "html", null, true);
            echo "</a>
                        </td>
                        <td style=\"padding: 10px;\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "size", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                        <td style=\"padding: 10px;\">
                            <img src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["group"], "logo", [], "any", false, false, false, 26)), "html", null, true);
            echo "\" alt=\"Group Logo\" style=\"width: 100px; height: auto; border-radius: 5px; box-shadow: 0 0 10px 0 rgba(0,0,0,0.1);\">
                        </td>
                        <td style=\"padding: 10px;\">
                            <a href=\"#\" class=\"btn btn-primary\" onclick=\"return editGroup(";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo ")\" style=\"text-decoration: none; padding: 5px 10px; border-radius: 5px; color: white;\">Edit</a>
                            <a href=\"#\" class=\"btn btn-danger\" onclick=\"return confirmDelete(";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 30), "html", null, true);
            echo ")\" style=\"text-decoration: none; padding: 5px 10px; border-radius: 5px; color: white;\">Delete</a>
                        </td>
                    </tr>
                  
 <tr id=\"editForm_";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 34), "html", null, true);
            echo "\" style=\"display: none;\">
    <td colspan=\"4\" style=\"padding: 10px;\">
       
                  <form action=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_group", ["id" => twig_get_attribute($this->env, $this->source, $context["group"], "id", [], "any", false, false, false, 37), "userid" => (isset($context["userid"]) || array_key_exists("userid", $context) ? $context["userid"] : (function () { throw new RuntimeError('Variable "userid" does not exist.', 37, $this->source); })())]), "html", null, true);
            echo "\" method=\"POST\" enctype=\"multipart/form-data\">
    <input type=\"text\" name=\"group_name\" value=\"";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "nom", [], "any", false, false, false, 38), "html", null, true);
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
        // line 46
        echo "            </tbody>
        </table>
    </div>

    <script>
        function confirmDelete(groupId) {
            if (confirm(\"Are you sure you want to delete this group?\")) {
       window.location.href = \"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deletegroup", ["id" => "GROUP_ID", "userid" => "USER_ID"]), "html", null, true);
        echo "\".replace('GROUP_ID', groupId).replace('USER_ID', ";
        echo twig_escape_filter($this->env, (isset($context["userid"]) || array_key_exists("userid", $context) ? $context["userid"] : (function () { throw new RuntimeError('Variable "userid" does not exist.', 53, $this->source); })()), "html", null, true);
        echo ");

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

    public function getTemplateName()
    {
        return "group/getall.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 53,  148 => 46,  134 => 38,  130 => 37,  124 => 34,  117 => 30,  113 => 29,  107 => 26,  102 => 24,  95 => 22,  91 => 20,  87 => 19,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    {{ parent() }}

    <div style=\"margin-top: 50px;\">
        <h1 style=\"text-align: center;\">List of Groups</h1>

        <table style=\"border-collapse: collapse; width: 80%; margin: 0 auto; margin-top: 20px;\">
            <thead style=\"background-color: #f2f2f2;\">
                <tr>
                    <th style=\"padding: 10px;\">Group Name</th>
                    <th style=\"padding: 10px;\">Size</th>
                    <th style=\"padding: 10px;\">Logo</th>
                    <th style=\"padding: 10px;\">Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for group in groups %}
                    <tr style=\"border-bottom: 1px solid #ccc;\">
                        <td style=\"padding: 10px;\">
                            <a href=\"{{ path('members_getall', {'id': group.id, 'userid': userid}) }}\" style=\"text-decoration: none; color: blue;\">{{ group.nom }}</a>
                        </td>
                        <td style=\"padding: 10px;\">{{ group.size }}</td>
                        <td style=\"padding: 10px;\">
                            <img src=\"{{ asset(group.logo) }}\" alt=\"Group Logo\" style=\"width: 100px; height: auto; border-radius: 5px; box-shadow: 0 0 10px 0 rgba(0,0,0,0.1);\">
                        </td>
                        <td style=\"padding: 10px;\">
                            <a href=\"#\" class=\"btn btn-primary\" onclick=\"return editGroup({{ group.id }})\" style=\"text-decoration: none; padding: 5px 10px; border-radius: 5px; color: white;\">Edit</a>
                            <a href=\"#\" class=\"btn btn-danger\" onclick=\"return confirmDelete({{ group.id }})\" style=\"text-decoration: none; padding: 5px 10px; border-radius: 5px; color: white;\">Delete</a>
                        </td>
                    </tr>
                  
 <tr id=\"editForm_{{ group.id }}\" style=\"display: none;\">
    <td colspan=\"4\" style=\"padding: 10px;\">
       
                  <form action=\"{{ path('update_group', {'id': group.id, 'userid': userid}) }}\" method=\"POST\" enctype=\"multipart/form-data\">
    <input type=\"text\" name=\"group_name\" value=\"{{ group.nom }}\" />
   
    <button type=\"submit\">Save</button>
</form>
    </td>
</tr>

                {% endfor %}
            </tbody>
        </table>
    </div>

    <script>
        function confirmDelete(groupId) {
            if (confirm(\"Are you sure you want to delete this group?\")) {
       window.location.href = \"{{ path('deletegroup', {'id': 'GROUP_ID', 'userid': 'USER_ID'}) }}\".replace('GROUP_ID', groupId).replace('USER_ID', {{ userid }});

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
", "group/getall.html.twig", "C:\\Users\\hamad\\OneDrive\\Desktop\\WebProject\\WebProjectV2\\templates\\group\\getall.html.twig");
    }
}
