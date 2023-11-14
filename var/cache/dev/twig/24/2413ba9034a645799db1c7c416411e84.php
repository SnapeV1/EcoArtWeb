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
        .display {
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
            <th></th>
        </tr>
      ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["members"]) || array_key_exists("members", $context) ? $context["members"] : (function () { throw new RuntimeError('Variable "members" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 48
            echo "    <tr>
        <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["member"], "getUser", [], "method", false, false, false, 49), "getUsername", [], "method", false, false, false, 49), "html", null, true);
            echo "</td>
        <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["member"], "getUser", [], "method", false, false, false, 50), "getCin", [], "method", false, false, false, 50), "html", null, true);
            echo "</td>
        <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["member"], "getUser", [], "method", false, false, false, 51), "getEmail", [], "method", false, false, false, 51), "html", null, true);
            echo "</td>
        <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["member"], "getUser", [], "method", false, false, false, 52), "getDateNaissance", [], "method", false, false, false, 52), "Y-m-d"), "html", null, true);
            echo "</td>
        <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["member"], "getRole", [], "method", false, false, false, 53), "html", null, true);
            echo "</td>
        <td>
            <form action=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_member", ["groupId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "request", [], "any", false, false, false, 55), "get", ["id"], "method", false, false, false, 55), "userId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["member"], "getUser", [], "method", false, false, false, 55), "getId", [], "method", false, false, false, 55)]), "html", null, true);
            echo "\" method=\"post\">
    <button type=\"submit\" style=\"background-color: #f44336; color: white; padding: 5px 3px; border: none; border-radius: 4px; cursor: pointer;\">
        Delete
    </button></form>
<a href=\"#\" class=\"btn btn-primary\" onclick=\"return editmember(";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["member"], "getUser", [], "method", false, false, false, 59), "getid", [], "method", false, false, false, 59), "html", null, true);
            echo ")\" style=\"text-decoration: none; padding: 5px 10px; border-radius: 5px; color: white;\">Edit</a>
</td>




       
    </tr>


<tr id=\"editForm_";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["member"], "getUser", [], "method", false, false, false, 69), "getid", [], "method", false, false, false, 69), "html", null, true);
            echo "\" style=\"display: none;\">
    <td colspan=\"4\" style=\"padding: 10px;\">
       
<form action=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_member", ["memberid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["member"], "getUser", [], "method", false, false, false, 72), "getId", [], "method", false, false, false, 72), "groupid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "request", [], "any", false, false, false, 72), "get", ["id"], "method", false, false, false, 72), "userid" => (isset($context["userid"]) || array_key_exists("userid", $context) ? $context["userid"] : (function () { throw new RuntimeError('Variable "userid" does not exist.', 72, $this->source); })())]), "html", null, true);
            echo "\" method=\"post\">   
   <select name=\"member_role\">
    <option value=\"Moderator\" >Moderator</option>
    <option value=\"Member\">Member</option>
</select>

    <button type=\"submit\">Save</button>
</form>
    </td>
</tr>
    
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "
           
    </table>
</div>


<div style=\"text-align: center;\">
    <a href=\"javascript:void(0);\" onclick=\"toggleAddMembersSection()\" class=\"add-member-button\">Add Members</a>
</div>
<div id=\"addMembersSection\" style=\"display: none; text-align: center;\">
    <br><br>
<form id=\"add-members-form\" action=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addmember", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "request", [], "any", false, false, false, 95), "get", ["id"], "method", false, false, false, 95), "userId" => (isset($context["userid"]) || array_key_exists("userid", $context) ? $context["userid"] : (function () { throw new RuntimeError('Variable "userid" does not exist.', 95, $this->source); })())]), "html", null, true);
        echo "\" method=\"POST\" onsubmit=\"submitMembers(event)\">
        <label for=\"member-email\" style=\"display: block; margin-bottom: 10px;\">Member Email:</label>
        <input type=\"email\" id=\"member-email\" name=\"memberEmail\" required style=\"padding: 8px;\"><br><br>
        <!-- Additional form fields for member details -->
        <button type=\"submit\" style=\"padding: 8px 20px; background-color: #4CAF50; color: white; border: none;\">Add Member</button>
    </form>
</div>





    <script>
function toggleAddMembersSection() {
    var section = document.getElementById('addMembersSection');
    if (section.style.display === 'none') {
        section.style.display = 'block';
    } else {
        section.style.display = 'none';
    }
}

function editmember(memberid) {
    var editForm = document.getElementById(\"editForm_\" + memberid);

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
        return "membre/members.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 95,  187 => 84,  169 => 72,  163 => 69,  150 => 59,  143 => 55,  138 => 53,  134 => 52,  130 => 51,  126 => 50,  122 => 49,  119 => 48,  115 => 47,  68 => 4,  58 => 3,  35 => 1,);
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
        .display {
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
            <th></th>
        </tr>
      {% for member in members %}
    <tr>
        <td>{{ member.getUser().getUsername() }}</td>
        <td>{{ member.getUser().getCin() }}</td>
        <td>{{ member.getUser().getEmail() }}</td>
        <td>{{ member.getUser().getDateNaissance()|date('Y-m-d') }}</td>
        <td>{{ member.getRole() }}</td>
        <td>
            <form action=\"{{ path('delete_member', {'groupId': app.request.get('id'), 'userId': member.getUser().getId()}) }}\" method=\"post\">
    <button type=\"submit\" style=\"background-color: #f44336; color: white; padding: 5px 3px; border: none; border-radius: 4px; cursor: pointer;\">
        Delete
    </button></form>
<a href=\"#\" class=\"btn btn-primary\" onclick=\"return editmember({{ member.getUser().getid() }})\" style=\"text-decoration: none; padding: 5px 10px; border-radius: 5px; color: white;\">Edit</a>
</td>




       
    </tr>


<tr id=\"editForm_{{ member.getUser().getid() }}\" style=\"display: none;\">
    <td colspan=\"4\" style=\"padding: 10px;\">
       
<form action=\"{{ path('update_member', {'memberid': member.getUser().getId(), 'groupid': app.request.get('id'), 'userid': userid}) }}\" method=\"post\">   
   <select name=\"member_role\">
    <option value=\"Moderator\" >Moderator</option>
    <option value=\"Member\">Member</option>
</select>

    <button type=\"submit\">Save</button>
</form>
    </td>
</tr>
    
{% endfor %}

           
    </table>
</div>


<div style=\"text-align: center;\">
    <a href=\"javascript:void(0);\" onclick=\"toggleAddMembersSection()\" class=\"add-member-button\">Add Members</a>
</div>
<div id=\"addMembersSection\" style=\"display: none; text-align: center;\">
    <br><br>
<form id=\"add-members-form\" action=\"{{ path('addmember', {'id': app.request.get('id'), 'userId': userid}) }}\" method=\"POST\" onsubmit=\"submitMembers(event)\">
        <label for=\"member-email\" style=\"display: block; margin-bottom: 10px;\">Member Email:</label>
        <input type=\"email\" id=\"member-email\" name=\"memberEmail\" required style=\"padding: 8px;\"><br><br>
        <!-- Additional form fields for member details -->
        <button type=\"submit\" style=\"padding: 8px 20px; background-color: #4CAF50; color: white; border: none;\">Add Member</button>
    </form>
</div>





    <script>
function toggleAddMembersSection() {
    var section = document.getElementById('addMembersSection');
    if (section.style.display === 'none') {
        section.style.display = 'block';
    } else {
        section.style.display = 'none';
    }
}

function editmember(memberid) {
    var editForm = document.getElementById(\"editForm_\" + memberid);

    if (editForm) {
        editForm.style.display = \"table-row\"; // Display the edit form
    }

    return false;
}

</script>
{% endblock %}
", "membre/members.html.twig", "C:\\Users\\hamad\\OneDrive\\Desktop\\WebProject\\WebProjectV2\\templates\\membre\\members.html.twig");
    }
}
