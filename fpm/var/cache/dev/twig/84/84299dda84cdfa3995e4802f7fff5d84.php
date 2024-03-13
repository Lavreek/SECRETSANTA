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

/* game/preview.html.twig */
class __TwigTemplate_8cd42d6f819bc6f02035631d18b0b2ce extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game/preview.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game/preview.html.twig"));

        // line 1
        $context["gameCreate"] = $this->env->getRuntime('App\Twig\Runtime\GameRuntime')->getGameCreateForm();
        // line 2
        $context["gameSearch"] = $this->env->getRuntime('App\Twig\Runtime\GameRuntime')->getGameSearchForm();
        // line 3
        echo "
<div class=\"site-container\">
    <turbo-frame id=\"game-preview\">
        <div class=\"game-preview\">
            <h5 class=\"text-title\">Найдите или создайте игру</h5>
            <div class=\"game-preview-control\">
                ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["gameCreate"]) || array_key_exists("gameCreate", $context) ? $context["gameCreate"] : (function () { throw new RuntimeError('Variable "gameCreate" does not exist.', 9, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_game_create")]);
        echo "
                ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["gameCreate"]) || array_key_exists("gameCreate", $context) ? $context["gameCreate"] : (function () { throw new RuntimeError('Variable "gameCreate" does not exist.', 10, $this->source); })()), 'form_end');
        echo "
                ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["gameSearch"]) || array_key_exists("gameSearch", $context) ? $context["gameSearch"] : (function () { throw new RuntimeError('Variable "gameSearch" does not exist.', 11, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_game_search")]);
        echo "
                ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["gameSearch"]) || array_key_exists("gameSearch", $context) ? $context["gameSearch"] : (function () { throw new RuntimeError('Variable "gameSearch" does not exist.', 12, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
    </turbo-frame>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "game/preview.html.twig";
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
        return array (  67 => 12,  63 => 11,  59 => 10,  55 => 9,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set gameCreate = getGameCreateForm() %}
{% set gameSearch = getGameSearchForm() %}

<div class=\"site-container\">
    <turbo-frame id=\"game-preview\">
        <div class=\"game-preview\">
            <h5 class=\"text-title\">Найдите или создайте игру</h5>
            <div class=\"game-preview-control\">
                {{ form_start(gameCreate, {'action' : path('app_game_create')}) }}
                {{ form_end(gameCreate) }}
                {{ form_start(gameSearch, {'action' : path('app_game_search')}) }}
                {{ form_end(gameSearch) }}
            </div>
        </div>
    </turbo-frame>
</div>
", "game/preview.html.twig", "/var/www/html/templates/game/preview.html.twig");
    }
}
