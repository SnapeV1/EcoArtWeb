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

/* admin.html.twig */
class __TwigTemplate_ee3168c748cd6f8bee628e5c6b35264c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
        <meta name=\"description\" content=\"\" />
        <meta name=\"author\" content=\"\" />
        <title>Dashboard - SB Admin</title>
         ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    </head>
    <body class=\"sb-nav-fixed\">
     ";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 143
        echo "    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "      <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/simple-datatables@7.1.2/dist/style.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
<script src=\"https://use.fontawesome.com/releases/v6.3.0/js/all.js\" crossorigin=\"anonymous\"></script>

         ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 18
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "        <nav class=\"sb-topnav navbar navbar-expand navbar-dark bg-dark\">
            <!-- Navbar Brand-->
            <a class=\"navbar-brand ps-3\" href=\"index.html\">Start Bootstrap</a>
            <!-- Sidebar Toggle-->
            <button class=\"btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0\" id=\"sidebarToggle\" href=\"#!\"><i class=\"fas fa-bars\"></i></button>
            <!-- Navbar Search-->
            <form class=\"d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0\">
                <div class=\"input-group\">
                    <input class=\"form-control\" type=\"text\" placeholder=\"Search for...\" aria-label=\"Search for...\" aria-describedby=\"btnNavbarSearch\" />
                    <button class=\"btn btn-primary\" id=\"btnNavbarSearch\" type=\"button\"><i class=\"fas fa-search\"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class=\"navbar-nav ms-auto ms-md-0 me-3 me-lg-4\">
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdown\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"><i class=\"fas fa-user fa-fw\"></i></a>
                    <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"navbarDropdown\">
                        <li><a class=\"dropdown-item\" href=\"#!\">Settings</a></li>
                        <li><a class=\"dropdown-item\" href=\"#!\">Activity Log</a></li>
                        <li><hr class=\"dropdown-divider\" /></li>
                        <li><a class=\"dropdown-item\" href=\"#!\">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id=\"layoutSidenav\">
            <div id=\"layoutSidenav_nav\">
                <nav class=\"sb-sidenav accordion sb-sidenav-dark\" id=\"sidenavAccordion\">
                    <div class=\"sb-sidenav-menu\">
                        <div class=\"nav\">
                            <div class=\"sb-sidenav-menu-heading\">Core</div>
                            <a class=\"nav-link\" href=\"index.html\">
                                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-tachometer-alt\"></i></div>
                                Dashboard
                            </a>
                            <div class=\"sb-sidenav-menu-heading\">Interface</div>
                            <a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseLayouts\" aria-expanded=\"false\" aria-controls=\"collapseLayouts\">
                                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-columns\"></i></div>
                                Layouts
                                <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
                            </a>
                            <div class=\"collapse\" id=\"collapseLayouts\" aria-labelledby=\"headingOne\" data-bs-parent=\"#sidenavAccordion\">
                                <nav class=\"sb-sidenav-menu-nested nav\">
                                    <a class=\"nav-link\" href=\"layout-static.html\">Static Navigation</a>
                                    <a class=\"nav-link\" href=\"layout-sidenav-light.html\">Light Sidenav</a>
                                </nav>
                            </div>
                            <a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapsePages\" aria-expanded=\"false\" aria-controls=\"collapsePages\">
                                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-book-open\"></i></div>
                                Pages
                                <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
                            </a>
                            <div class=\"collapse\" id=\"collapsePages\" aria-labelledby=\"headingTwo\" data-bs-parent=\"#sidenavAccordion\">
                                <nav class=\"sb-sidenav-menu-nested nav accordion\" id=\"sidenavAccordionPages\">
                                    <a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#pagesCollapseAuth\" aria-expanded=\"false\" aria-controls=\"pagesCollapseAuth\">
                                        Authentication
                                        <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
                                    </a>
                                    <div class=\"collapse\" id=\"pagesCollapseAuth\" aria-labelledby=\"headingOne\" data-bs-parent=\"#sidenavAccordionPages\">
                                        <nav class=\"sb-sidenav-menu-nested nav\">
                                            <a class=\"nav-link\" href=\"login.html\">Login</a>
                                            <a class=\"nav-link\" href=\"register.html\">Register</a>
                                            <a class=\"nav-link\" href=\"password.html\">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#pagesCollapseError\" aria-expanded=\"false\" aria-controls=\"pagesCollapseError\">
                                        Error
                                        <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
                                    </a>
                                    <div class=\"collapse\" id=\"pagesCollapseError\" aria-labelledby=\"headingOne\" data-bs-parent=\"#sidenavAccordionPages\">
                                        <nav class=\"sb-sidenav-menu-nested nav\">
                                            <a class=\"nav-link\" href=\"401.html\">401 Page</a>
                                            <a class=\"nav-link\" href=\"404.html\">404 Page</a>
                                            <a class=\"nav-link\" href=\"500.html\">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class=\"sb-sidenav-menu-heading\">Addons</div>
                            <a class=\"nav-link\" href=\"charts.html\">
                                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-chart-area\"></i></div>
                                Charts
                            </a>
                            <a class=\"nav-link\" href=\"tables.html\">
                                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-table\"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                    <div class=\"sb-sidenav-footer\">
                        <div class=\"small\">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
          
                        
                </main>
                ";
        // line 117
        $this->displayBlock('footer', $context, $blocks);
        // line 131
        echo "            </div>
        </div>
        ";
        // line 133
        $this->displayBlock('javascripts', $context, $blocks);
        // line 142
        echo "          ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 117
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 118
        echo "                <footer class=\"py-4 bg-light mt-auto\">
                    <div class=\"container-fluid px-4\">
                        <div class=\"d-flex align-items-center justify-content-between small\">
                            <div class=\"text-muted\">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href=\"#\">Privacy Policy</a>
                                &middot;
                                <a href=\"#\">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
                 ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 133
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 134
        echo "       <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\" crossorigin=\"anonymous\"></script>
<script src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/demo/chart-area-demo.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/demo/chart-bar-demo.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"), "html", null, true);
        echo "\" crossorigin=\"anonymous\"></script>
<script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/datatables-simple-demo.js"), "html", null, true);
        echo "\"></script>

          ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  298 => 139,  294 => 138,  290 => 137,  286 => 136,  282 => 135,  277 => 134,  267 => 133,  245 => 118,  235 => 117,  225 => 142,  223 => 133,  219 => 131,  217 => 117,  117 => 19,  107 => 18,  93 => 12,  88 => 11,  78 => 10,  66 => 143,  64 => 18,  60 => 16,  58 => 10,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
        <meta name=\"description\" content=\"\" />
        <meta name=\"author\" content=\"\" />
        <title>Dashboard - SB Admin</title>
         {% block stylesheets %}
      <link href=\"{{ asset('vendor/simple-datatables@7.1.2/dist/style.min.css') }}\" rel=\"stylesheet\" />
<link href=\"{{ asset('css/styles.css') }}\" rel=\"stylesheet\" />
<script src=\"https://use.fontawesome.com/releases/v6.3.0/js/all.js\" crossorigin=\"anonymous\"></script>

         {% endblock %}
    </head>
    <body class=\"sb-nav-fixed\">
     {% block body %}
        <nav class=\"sb-topnav navbar navbar-expand navbar-dark bg-dark\">
            <!-- Navbar Brand-->
            <a class=\"navbar-brand ps-3\" href=\"index.html\">Start Bootstrap</a>
            <!-- Sidebar Toggle-->
            <button class=\"btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0\" id=\"sidebarToggle\" href=\"#!\"><i class=\"fas fa-bars\"></i></button>
            <!-- Navbar Search-->
            <form class=\"d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0\">
                <div class=\"input-group\">
                    <input class=\"form-control\" type=\"text\" placeholder=\"Search for...\" aria-label=\"Search for...\" aria-describedby=\"btnNavbarSearch\" />
                    <button class=\"btn btn-primary\" id=\"btnNavbarSearch\" type=\"button\"><i class=\"fas fa-search\"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class=\"navbar-nav ms-auto ms-md-0 me-3 me-lg-4\">
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdown\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"><i class=\"fas fa-user fa-fw\"></i></a>
                    <ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"navbarDropdown\">
                        <li><a class=\"dropdown-item\" href=\"#!\">Settings</a></li>
                        <li><a class=\"dropdown-item\" href=\"#!\">Activity Log</a></li>
                        <li><hr class=\"dropdown-divider\" /></li>
                        <li><a class=\"dropdown-item\" href=\"#!\">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id=\"layoutSidenav\">
            <div id=\"layoutSidenav_nav\">
                <nav class=\"sb-sidenav accordion sb-sidenav-dark\" id=\"sidenavAccordion\">
                    <div class=\"sb-sidenav-menu\">
                        <div class=\"nav\">
                            <div class=\"sb-sidenav-menu-heading\">Core</div>
                            <a class=\"nav-link\" href=\"index.html\">
                                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-tachometer-alt\"></i></div>
                                Dashboard
                            </a>
                            <div class=\"sb-sidenav-menu-heading\">Interface</div>
                            <a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseLayouts\" aria-expanded=\"false\" aria-controls=\"collapseLayouts\">
                                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-columns\"></i></div>
                                Layouts
                                <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
                            </a>
                            <div class=\"collapse\" id=\"collapseLayouts\" aria-labelledby=\"headingOne\" data-bs-parent=\"#sidenavAccordion\">
                                <nav class=\"sb-sidenav-menu-nested nav\">
                                    <a class=\"nav-link\" href=\"layout-static.html\">Static Navigation</a>
                                    <a class=\"nav-link\" href=\"layout-sidenav-light.html\">Light Sidenav</a>
                                </nav>
                            </div>
                            <a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapsePages\" aria-expanded=\"false\" aria-controls=\"collapsePages\">
                                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-book-open\"></i></div>
                                Pages
                                <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
                            </a>
                            <div class=\"collapse\" id=\"collapsePages\" aria-labelledby=\"headingTwo\" data-bs-parent=\"#sidenavAccordion\">
                                <nav class=\"sb-sidenav-menu-nested nav accordion\" id=\"sidenavAccordionPages\">
                                    <a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#pagesCollapseAuth\" aria-expanded=\"false\" aria-controls=\"pagesCollapseAuth\">
                                        Authentication
                                        <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
                                    </a>
                                    <div class=\"collapse\" id=\"pagesCollapseAuth\" aria-labelledby=\"headingOne\" data-bs-parent=\"#sidenavAccordionPages\">
                                        <nav class=\"sb-sidenav-menu-nested nav\">
                                            <a class=\"nav-link\" href=\"login.html\">Login</a>
                                            <a class=\"nav-link\" href=\"register.html\">Register</a>
                                            <a class=\"nav-link\" href=\"password.html\">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class=\"nav-link collapsed\" href=\"#\" data-bs-toggle=\"collapse\" data-bs-target=\"#pagesCollapseError\" aria-expanded=\"false\" aria-controls=\"pagesCollapseError\">
                                        Error
                                        <div class=\"sb-sidenav-collapse-arrow\"><i class=\"fas fa-angle-down\"></i></div>
                                    </a>
                                    <div class=\"collapse\" id=\"pagesCollapseError\" aria-labelledby=\"headingOne\" data-bs-parent=\"#sidenavAccordionPages\">
                                        <nav class=\"sb-sidenav-menu-nested nav\">
                                            <a class=\"nav-link\" href=\"401.html\">401 Page</a>
                                            <a class=\"nav-link\" href=\"404.html\">404 Page</a>
                                            <a class=\"nav-link\" href=\"500.html\">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class=\"sb-sidenav-menu-heading\">Addons</div>
                            <a class=\"nav-link\" href=\"charts.html\">
                                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-chart-area\"></i></div>
                                Charts
                            </a>
                            <a class=\"nav-link\" href=\"tables.html\">
                                <div class=\"sb-nav-link-icon\"><i class=\"fas fa-table\"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                    <div class=\"sb-sidenav-footer\">
                        <div class=\"small\">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
          
                        
                </main>
                {% block footer %}
                <footer class=\"py-4 bg-light mt-auto\">
                    <div class=\"container-fluid px-4\">
                        <div class=\"d-flex align-items-center justify-content-between small\">
                            <div class=\"text-muted\">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href=\"#\">Privacy Policy</a>
                                &middot;
                                <a href=\"#\">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
                 {% endblock %}
            </div>
        </div>
        {% block javascripts %}
       <script src=\"{{ asset('vendor/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js') }}\" crossorigin=\"anonymous\"></script>
<script src=\"{{ asset('js/scripts.js') }}\"></script>
<script src=\"{{ asset('assets/demo/chart-area-demo.js') }}\"></script>
<script src=\"{{ asset('assets/demo/chart-bar-demo.js') }}\"></script>
<script src=\"{{ asset('vendor/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js') }}\" crossorigin=\"anonymous\"></script>
<script src=\"{{ asset('js/datatables-simple-demo.js') }}\"></script>

          {% endblock %}
          {% endblock %}
    </body>
</html>
", "admin.html.twig", "C:\\Users\\hamad\\OneDrive\\Desktop\\WebProject\\WebProjectV2\\templates\\admin.html.twig");
    }
}
