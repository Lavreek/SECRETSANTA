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

/* game/create.stream.html.twig */
class __TwigTemplate_72bf1e353dd82b7c7e1542a2c3f3441d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game/create.stream.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game/create.stream.html.twig"));

        // line 1
        if ($this->env->getRuntime('App\Twig\Runtime\AuthRuntime')->isAuthorized()) {
            // line 2
            echo "    ";
            $context["gameBuilder"] = $this->env->getRuntime('App\Twig\Runtime\GameRuntime')->getGameBuilderForm();
            // line 3
            echo "<turbo-stream action=\"replace\" target=\"game-preview\">
    <template>
        ";
            // line 5
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["gameBuilder"]) || array_key_exists("gameBuilder", $context) ? $context["gameBuilder"] : (function () { throw new RuntimeError('Variable "gameBuilder" does not exist.', 5, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_game_build")]);
            echo "
        ";
            // line 6
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["gameBuilder"]) || array_key_exists("gameBuilder", $context) ? $context["gameBuilder"] : (function () { throw new RuntimeError('Variable "gameBuilder" does not exist.', 6, $this->source); })()), 'form_end');
            echo "
    </template>
</turbo-stream>
";
        } else {
            // line 10
            echo "    <turbo-stream action=\"replace\" target=\"game-preview\">
        <template>
            <div class=\"game-preview\">
                <h5 class=\"text-title\">Чтобы создать игру, необходимо зарегистрироваться</h5>
                <div class=\"game-preview-control\">
                    <div>
                        <a href=\"";
            // line 16
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\">Зарегистрироваться</a>
                    </div>
                </div>
        </template>
    </turbo-stream>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "game/create.stream.html.twig";
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
        return array (  71 => 16,  63 => 10,  56 => 6,  52 => 5,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if isAuthorized() %}
    {% set gameBuilder = getGameBuilderForm() %}
<turbo-stream action=\"replace\" target=\"game-preview\">
    <template>
        {{ form_start(gameBuilder, {'action' : path('app_game_build')}) }}
        {{ form_end(gameBuilder) }}
    </template>
</turbo-stream>
{% else %}
    <turbo-stream action=\"replace\" target=\"game-preview\">
        <template>
            <div class=\"game-preview\">
                <h5 class=\"text-title\">Чтобы создать игру, необходимо зарегистрироваться</h5>
                <div class=\"game-preview-control\">
                    <div>
                        <a href=\"{{ path('app_register') }}\">Зарегистрироваться</a>
                    </div>
                </div>
        </template>
    </turbo-stream>
{% endif %}
", "game/create.stream.html.twig", "/var/www/html/templates/game/create.stream.html.twig");
    }
}
