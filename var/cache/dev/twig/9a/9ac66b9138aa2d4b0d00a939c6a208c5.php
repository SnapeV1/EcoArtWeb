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

/* test/test.html.twig */
class __TwigTemplate_b598f130f353a6758bdcbb300a7fc79d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test/test.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test/test.html.twig"));

        // line 2
        echo "<!DOCTYPE html>
<html>
<head>
    <title>Test Repository</title>
</head>
<body>
    <h1>Conversation Details</h1>
    <ul>
        <li><strong>ID:</strong> ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["conversation"]) || array_key_exists("conversation", $context) ? $context["conversation"] : (function () { throw new RuntimeError('Variable "conversation" does not exist.', 10, $this->source); })()), "getidconv", [], "method", false, false, false, 10), "html", null, true);
        echo "</li>
     
        <li><strong>Message:</strong> ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["conversation"]) || array_key_exists("conversation", $context) ? $context["conversation"] : (function () { throw new RuntimeError('Variable "conversation" does not exist.', 12, $this->source); })()), "msg", [], "any", false, false, false, 12), "html", null, true);
        echo "</li>
        <li><strong>User ID 1:</strong> ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["conversation"]) || array_key_exists("conversation", $context) ? $context["conversation"] : (function () { throw new RuntimeError('Variable "conversation" does not exist.', 13, $this->source); })()), "iduser1", [], "any", false, false, false, 13), "html", null, true);
        echo "</li>
        <li><strong>User ID 2:</strong> ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["conversation"]) || array_key_exists("conversation", $context) ? $context["conversation"] : (function () { throw new RuntimeError('Variable "conversation" does not exist.', 14, $this->source); })()), "iduser2", [], "any", false, false, false, 14), "html", null, true);
        echo "</li>
    </ul>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "test/test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 14,  62 => 13,  58 => 12,  53 => 10,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/test/index.html.twig #}
<!DOCTYPE html>
<html>
<head>
    <title>Test Repository</title>
</head>
<body>
    <h1>Conversation Details</h1>
    <ul>
        <li><strong>ID:</strong> {{ conversation.getidconv() }}</li>
     
        <li><strong>Message:</strong> {{ conversation.msg }}</li>
        <li><strong>User ID 1:</strong> {{ conversation.iduser1 }}</li>
        <li><strong>User ID 2:</strong> {{ conversation.iduser2 }}</li>
    </ul>
</body>
</html>
", "test/test.html.twig", "C:\\Users\\hamad\\OneDrive\\Desktop\\WebProject\\WebProjectV2\\templates\\test\\test.html.twig");
    }
}
