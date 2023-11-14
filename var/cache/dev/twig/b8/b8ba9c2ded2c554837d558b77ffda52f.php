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

/* conversation/index.html.twig */
class __TwigTemplate_d5b579c95b851862a797d10e2a7791a5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conversation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conversation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "conversation/index.html.twig", 1);
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
        echo " 
<!DOCTYPE html>
<html>
<head>
    <title>Conversation</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #3498db;
            text-align: center;
            margin-bottom: 20px;
        }

        .conversation-container {
            display: flex;
            justify-content: space-between;
            margin: 0 auto;
            max-width: 800px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .user1-column,
        .user2-column {
            width: 48%; /* Adjust width as needed */
        }

        .user1-message,
        .user2-message {
            box-sizing: border-box;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            position: relative; /* Add relative positioning for absolute delete button */
        }

        .user1-message {
            background-color: #DCF8C6;
        }

        .user2-message {
            background-color: #C2DFFF;
        }

        .message-input {
            width: 100%; /* Full width */
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box; /* Include padding and border in the element's total width and height */
        }

.delete-button {
    position: absolute;
    top: 5px;
    right: 5px;
    background-color: #3498db;
    color: #fff;
    border: none;
    border-radius: 3px; /* Smaller border radius */
    padding: 6px 8px; /* Smaller padding */
    font-size: 7px; /* Smaller font size */
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.delete-button:hover {
    background-color: #2980b9;
}



         .send-button {
            width: calc(100% - 22px); /* Full width minus padding and border */
            padding: 10px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: inline-block; /* Align with the input */
        }

        .send-button:hover {
            background-color: #45a049;
        }

        .username {
            font-size: 18px;
            font-weight: bold;
            color: #3498db;
            margin-bottom: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
  ";
        // line 110
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <h1>Conversation</h1>
   
    <div class=\"conversation-container\">
        <div class=\"user1-column\">
            <div class=\"username\">";
        // line 115
        echo twig_escape_filter($this->env, (isset($context["username1"]) || array_key_exists("username1", $context) ? $context["username1"] : (function () { throw new RuntimeError('Variable "username1" does not exist.', 115, $this->source); })()), "html", null, true);
        echo "</div>
            ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, (isset($context["conversations"]) || array_key_exists("conversations", $context) ? $context["conversations"] : (function () { throw new RuntimeError('Variable "conversations" does not exist.', 116, $this->source); })())));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["conversation"]) {
            // line 117
            echo "                <div class=\"user1-message\">
                    <button class=\"delete-button\" onclick=\"window.location='";
            // line 118
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_message", ["id" => twig_get_attribute($this->env, $this->source, $context["conversation"], "idconv", [], "any", false, false, false, 118), "user1Id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 118, $this->source); })()), "request", [], "any", false, false, false, 118), "get", ["user1Id"], "method", false, false, false, 118), "user2Id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 118, $this->source); })()), "request", [], "any", false, false, false, 118), "get", ["user2Id"], "method", false, false, false, 118)]), "html", null, true);
            echo "'\">Delete</button>

                    <strong>Date:</strong> ";
            // line 120
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conversation"], "dateMsg", [], "any", false, false, false, 120), "Y-m-d H:i:s"), "html", null, true);
            echo "<br>
                    <strong>Message:</strong> ";
            // line 121
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conversation"], "msg", [], "any", false, false, false, 121), "html", null, true);
            echo "<br>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 124
            echo "                <p>No conversations found</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conversation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "        </div>

        <div class=\"user2-column\">
            <div class=\"username\">";
        // line 129
        echo twig_escape_filter($this->env, (isset($context["username2"]) || array_key_exists("username2", $context) ? $context["username2"] : (function () { throw new RuntimeError('Variable "username2" does not exist.', 129, $this->source); })()), "html", null, true);
        echo "</div>      
            ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, (isset($context["conversations2"]) || array_key_exists("conversations2", $context) ? $context["conversations2"] : (function () { throw new RuntimeError('Variable "conversations2" does not exist.', 130, $this->source); })())));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["conversation"]) {
            // line 131
            echo "                <div class=\"user2-message\">
                    <strong>Date:</strong> ";
            // line 132
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conversation"], "dateMsg", [], "any", false, false, false, 132), "Y-m-d H:i:s"), "html", null, true);
            echo "<br>
                    <strong>Message:</strong> ";
            // line 133
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["conversation"], "msg", [], "any", false, false, false, 133), "html", null, true);
            echo "<br>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 136
            echo "                <p>No conversations found</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conversation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "        </div>
    </div>

    <form onsubmit=\"return validateMessage()\" action=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("send_message", ["user1Id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 141, $this->source); })()), "request", [], "any", false, false, false, 141), "attributes", [], "any", false, false, false, 141), "get", ["user1Id"], "method", false, false, false, 141), "user2Id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 141, $this->source); })()), "request", [], "any", false, false, false, 141), "attributes", [], "any", false, false, false, 141), "get", ["user2Id"], "method", false, false, false, 141)]), "html", null, true);
        echo "\" method=\"post\">
      
        <input type=\"text\" id=\"message\" name=\"message\" class=\"message-input\" placeholder=\"Type your message...\" required>
            <span id=\"errorMessage\" class=\"error-message\"></span>

        <button type=\"submit\" class=\"send-button\">Send Message</button>
    </form>

</body>
<script>
    function validateMessage() {
        // Get the message input and error message span
        var messageInput = document.getElementById('message');
        var errorMessageSpan = document.getElementById('errorMessage');

        // Trim and replace multiple spaces with a single space
        var cleanedMessage = messageInput.value.trim().replace(/\\s+/g, ' ');

        // Check if the cleaned message is valid
        if (cleanedMessage === '') {
            // Display the error message
            errorMessageSpan.textContent = 'Please enter a valid message.';
            
            // Prevent the form submission
            return false;
        }

        // Clear any previous error messages
        errorMessageSpan.textContent = '';

        // Update the input value with the cleaned message
        messageInput.value = cleanedMessage;

        // If the message is valid, the form will be submitted
        return true;
    }
</script>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "conversation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 141,  256 => 138,  249 => 136,  241 => 133,  237 => 132,  234 => 131,  229 => 130,  225 => 129,  220 => 126,  213 => 124,  205 => 121,  201 => 120,  196 => 118,  193 => 117,  188 => 116,  184 => 115,  176 => 110,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
 
<!DOCTYPE html>
<html>
<head>
    <title>Conversation</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #3498db;
            text-align: center;
            margin-bottom: 20px;
        }

        .conversation-container {
            display: flex;
            justify-content: space-between;
            margin: 0 auto;
            max-width: 800px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .user1-column,
        .user2-column {
            width: 48%; /* Adjust width as needed */
        }

        .user1-message,
        .user2-message {
            box-sizing: border-box;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            position: relative; /* Add relative positioning for absolute delete button */
        }

        .user1-message {
            background-color: #DCF8C6;
        }

        .user2-message {
            background-color: #C2DFFF;
        }

        .message-input {
            width: 100%; /* Full width */
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box; /* Include padding and border in the element's total width and height */
        }

.delete-button {
    position: absolute;
    top: 5px;
    right: 5px;
    background-color: #3498db;
    color: #fff;
    border: none;
    border-radius: 3px; /* Smaller border radius */
    padding: 6px 8px; /* Smaller padding */
    font-size: 7px; /* Smaller font size */
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.delete-button:hover {
    background-color: #2980b9;
}



         .send-button {
            width: calc(100% - 22px); /* Full width minus padding and border */
            padding: 10px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            display: inline-block; /* Align with the input */
        }

        .send-button:hover {
            background-color: #45a049;
        }

        .username {
            font-size: 18px;
            font-weight: bold;
            color: #3498db;
            margin-bottom: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
  {{ parent() }}
    <h1>Conversation</h1>
   
    <div class=\"conversation-container\">
        <div class=\"user1-column\">
            <div class=\"username\">{{ username1 }}</div>
            {% for conversation in conversations|sort %}
                <div class=\"user1-message\">
                    <button class=\"delete-button\" onclick=\"window.location='{{ path('delete_message', {'id': conversation.idconv, 'user1Id': app.request.get('user1Id'), 'user2Id': app.request.get('user2Id')}) }}'\">Delete</button>

                    <strong>Date:</strong> {{ conversation.dateMsg|date('Y-m-d H:i:s') }}<br>
                    <strong>Message:</strong> {{ conversation.msg }}<br>
                </div>
            {% else %}
                <p>No conversations found</p>
            {% endfor %}
        </div>

        <div class=\"user2-column\">
            <div class=\"username\">{{ username2 }}</div>      
            {% for conversation in conversations2|sort %}
                <div class=\"user2-message\">
                    <strong>Date:</strong> {{ conversation.dateMsg|date('Y-m-d H:i:s') }}<br>
                    <strong>Message:</strong> {{ conversation.msg }}<br>
                </div>
            {% else %}
                <p>No conversations found</p>
            {% endfor %}
        </div>
    </div>

    <form onsubmit=\"return validateMessage()\" action=\"{{ path('send_message', {'user1Id': app.request.attributes.get('user1Id'), 'user2Id': app.request.attributes.get('user2Id') }) }}\" method=\"post\">
      
        <input type=\"text\" id=\"message\" name=\"message\" class=\"message-input\" placeholder=\"Type your message...\" required>
            <span id=\"errorMessage\" class=\"error-message\"></span>

        <button type=\"submit\" class=\"send-button\">Send Message</button>
    </form>

</body>
<script>
    function validateMessage() {
        // Get the message input and error message span
        var messageInput = document.getElementById('message');
        var errorMessageSpan = document.getElementById('errorMessage');

        // Trim and replace multiple spaces with a single space
        var cleanedMessage = messageInput.value.trim().replace(/\\s+/g, ' ');

        // Check if the cleaned message is valid
        if (cleanedMessage === '') {
            // Display the error message
            errorMessageSpan.textContent = 'Please enter a valid message.';
            
            // Prevent the form submission
            return false;
        }

        // Clear any previous error messages
        errorMessageSpan.textContent = '';

        // Update the input value with the cleaned message
        messageInput.value = cleanedMessage;

        // If the message is valid, the form will be submitted
        return true;
    }
</script>
</html>
{% endblock %}", "conversation/index.html.twig", "C:\\Users\\hamad\\OneDrive\\Desktop\\WebProject\\WebProjectV2\\templates\\conversation\\index.html.twig");
    }
}
