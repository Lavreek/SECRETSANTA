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
class __TwigTemplate_8b5fc11951590882e4c3f9ab09b269bc extends Template
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
<div class=\"game-preview\">
    <h5 class=\"text-title\">Найдите или создайте игру</h5>
    <div class=\"game-preview-control\">
        ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["gameCreate"]) || array_key_exists("gameCreate", $context) ? $context["gameCreate"] : (function () { throw new RuntimeError('Variable "gameCreate" does not exist.', 7, $this->source); })()), 'form_start');
        echo "
        ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["gameCreate"]) || array_key_exists("gameCreate", $context) ? $context["gameCreate"] : (function () { throw new RuntimeError('Variable "gameCreate" does not exist.', 8, $this->source); })()), 'form_end');
        echo "
        ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["gameSearch"]) || array_key_exists("gameSearch", $context) ? $context["gameSearch"] : (function () { throw new RuntimeError('Variable "gameSearch" does not exist.', 9, $this->source); })()), 'form_start');
        echo "
        ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["gameSearch"]) || array_key_exists("gameSearch", $context) ? $context["gameSearch"] : (function () { throw new RuntimeError('Variable "gameSearch" does not exist.', 10, $this->source); })()), 'form_end');
        echo "
    </div>
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
        return array (  65 => 10,  61 => 9,  57 => 8,  53 => 7,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set gameCreate = getGameCreateForm() %}
{% set gameSearch = getGameSearchForm() %}

<div class=\"game-preview\">
    <h5 class=\"text-title\">Найдите или создайте игру</h5>
    <div class=\"game-preview-control\">
        {{ form_start(gameCreate) }}
        {{ form_end(gameCreate) }}
        {{ form_start(gameSearch) }}
        {{ form_end(gameSearch) }}
    </div>
</div>
", "game/preview.html.twig", "/var/www/html/templates/game/preview.html.twig");
    }
}
