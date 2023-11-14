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

/* conversation/select_receiver.html.twig */
class __TwigTemplate_ed0347b97368e09ee3cb7504f84ac1dc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conversation/select_receiver.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conversation/select_receiver.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "conversation/select_receiver.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Select Receiver";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div style=\"text-align: center; padding: 20px; background-color: #f5f5f5; border-radius: 10px;\">
        <h1 style=\"color: #3498db;\">Select Receiver</h1>
        
        <form id=\"selectReceiverForm\" method=\"post\" action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("display_conversations", ["user1Id" => (isset($context["user1Id"]) || array_key_exists("user1Id", $context) ? $context["user1Id"] : (function () { throw new RuntimeError('Variable "user1Id" does not exist.', 10, $this->source); })()), "user2Id" => "__USER2_ID__"]), "html", null, true);
        echo "\" style=\"max-width: 400px; margin: 0 auto;\">

            <label for=\"receiverId\" style=\"display: block; margin-bottom: 10px;\">Select a User to Send a Message:</label>
            
            <select id=\"receiverId\" name=\"receiverId\" style=\"width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;\">
                ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 16
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 16), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 16), "html", null, true);
            echo "</option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "            </select><br><br>

            <button type=\"button\" onclick=\"openConversation()\" style=\"background-color: #3498db; color: white; padding: 10px; border: none; border-radius: 5px; cursor: pointer;\">Open Conversation</button>
        </form>
    </div>

    <script>
        function openConversation() {
            // Get the selected user ID
            var selectedUserId = document.getElementById('receiverId').value;

            // Update the form action with the selected user ID
            var form = document.getElementById('selectReceiverForm');
            form.action = form.action.replace('__USER2_ID__', selectedUserId);

            // Submit the form
            form.submit();
        }
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "conversation/select_receiver.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 18,  108 => 16,  104 => 15,  96 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Select Receiver{% endblock %}
  
{% block body %}
    {{ parent() }}
    <div style=\"text-align: center; padding: 20px; background-color: #f5f5f5; border-radius: 10px;\">
        <h1 style=\"color: #3498db;\">Select Receiver</h1>
        
        <form id=\"selectReceiverForm\" method=\"post\" action=\"{{ path('display_conversations', {'user1Id': user1Id, 'user2Id': '__USER2_ID__'}) }}\" style=\"max-width: 400px; margin: 0 auto;\">

            <label for=\"receiverId\" style=\"display: block; margin-bottom: 10px;\">Select a User to Send a Message:</label>
            
            <select id=\"receiverId\" name=\"receiverId\" style=\"width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box;\">
                {% for user in users %}
                    <option value=\"{{ user.id }}\">{{ user.username }}</option>
                {% endfor %}
            </select><br><br>

            <button type=\"button\" onclick=\"openConversation()\" style=\"background-color: #3498db; color: white; padding: 10px; border: none; border-radius: 5px; cursor: pointer;\">Open Conversation</button>
        </form>
    </div>

    <script>
        function openConversation() {
            // Get the selected user ID
            var selectedUserId = document.getElementById('receiverId').value;

            // Update the form action with the selected user ID
            var form = document.getElementById('selectReceiverForm');
            form.action = form.action.replace('__USER2_ID__', selectedUserId);

            // Submit the form
            form.submit();
        }
    </script>
{% endblock %}
", "conversation/select_receiver.html.twig", "C:\\Users\\hamad\\OneDrive\\Desktop\\WebProject\\WebProjectV2\\templates\\conversation\\select_receiver.html.twig");
    }
}
