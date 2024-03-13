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

/* layouts/header.html.twig */
class __TwigTemplate_393050b12aeaddcf932d6e558f246d95 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layouts/header.html.twig"));

        // line 1
        echo "<header class=\"header\">
    <div class=\"top-line\">
        <div class=\"logo\">
            <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/header/logo.svg"), "html", null, true);
        echo "\">
        </div>
        <h1>Секретный санта</h1>
        ";
        // line 7
        if ($this->env->getRuntime('App\Twig\Runtime\AuthRuntime')->isAuthorized()) {
            // line 8
            echo "            <div class=\"authorized\">
                <h5 class=\"username\">";
            // line 9
            echo $this->env->getRuntime('App\Twig\Runtime\AuthRuntime')->getUsername();
            echo "</h5>
                <div class=\"logout\">
                    <a href=\"";
            // line 11
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Выйти</a>
                </div>
            </div>
        ";
        } else {
            // line 15
            echo "            <div class=\"login\">
                <a href=\"";
            // line 16
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Войти</a>
            </div>
        ";
        }
        // line 19
        echo "    </div>
</header>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "layouts/header.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  80 => 19,  74 => 16,  71 => 15,  64 => 11,  59 => 9,  56 => 8,  54 => 7,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"header\">
    <div class=\"top-line\">
        <div class=\"logo\">
            <img src=\"{{ asset('images/header/logo.svg') }}\">
        </div>
        <h1>Секретный санта</h1>
        {% if isAuthorized() %}
            <div class=\"authorized\">
                <h5 class=\"username\">{{ getUsername()|raw }}</h5>
                <div class=\"logout\">
                    <a href=\"{{ path('app_login') }}\">Выйти</a>
                </div>
            </div>
        {% else %}
            <div class=\"login\">
                <a href=\"{{ path('app_login') }}\">Войти</a>
            </div>
        {% endif %}
    </div>
</header>
", "layouts/header.html.twig", "/var/www/html/templates/layouts/header.html.twig");
    }
}
