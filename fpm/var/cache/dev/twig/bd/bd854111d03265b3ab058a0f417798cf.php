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

/* game/search.stream.html.twig */
class __TwigTemplate_1aea72de9defb27e8a7959907d8ba52a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game/search.stream.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "game/search.stream.html.twig"));

        // line 1
        if ($this->env->getRuntime('App\Twig\Runtime\AuthRuntime')->isAuthorized()) {
            // line 2
            echo "<turbo-stream action=\"replace\" target=\"game-preview\">
    <template>
        ";
            // line 4
            if ((twig_length_filter($this->env, (isset($context["games"]) || array_key_exists("games", $context) ? $context["games"] : (function () { throw new RuntimeError('Variable "games" does not exist.', 4, $this->source); })())) < 1)) {
                // line 5
                echo "            Тайный сайта не найден.
        ";
            } else {
                // line 7
                echo "            <div style=\"display: flex; flex-direction: column; row-gap: 20px;\">
                ";
                // line 8
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["games"]) || array_key_exists("games", $context) ? $context["games"] : (function () { throw new RuntimeError('Variable "games" does not exist.', 8, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["game"]) {
                    // line 9
                    echo "                        <a href=\"/game/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["game"], "getIdentifier", [], "method", false, false, false, 9), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["game"], "getName", [], "method", false, false, false, 9), "html", null, true);
                    echo "</a>
                    ";
                    // line 10
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["game"], "getId", [], "method", false, false, false, 10), "html", null, true);
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['game'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 12
                echo "            </div>
        ";
            }
            // line 14
            echo "    </template>
</turbo-stream>
";
        } else {
            // line 17
            echo "    <turbo-stream action=\"replace\" target=\"game-preview\">
        <template>
            <div class=\"game-preview\">
                <h5 class=\"text-title\">Чтобы найти игру, необходимо авторизироваться</h5>
                <div class=\"game-preview-control\">
                    <div>
                        <a href=\"";
            // line 23
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Войти</a>
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
        return "game/search.stream.html.twig";
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
        return array (  94 => 23,  86 => 17,  81 => 14,  77 => 12,  69 => 10,  62 => 9,  58 => 8,  55 => 7,  51 => 5,  49 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if isAuthorized() %}
<turbo-stream action=\"replace\" target=\"game-preview\">
    <template>
        {% if games|length < 1 %}
            Тайный сайта не найден.
        {% else %}
            <div style=\"display: flex; flex-direction: column; row-gap: 20px;\">
                {% for game in games %}
                        <a href=\"/game/{{ game.getIdentifier() }}\">{{ game.getName() }}</a>
                    {{ game.getId() }}
                {% endfor %}
            </div>
        {% endif %}
    </template>
</turbo-stream>
{% else %}
    <turbo-stream action=\"replace\" target=\"game-preview\">
        <template>
            <div class=\"game-preview\">
                <h5 class=\"text-title\">Чтобы найти игру, необходимо авторизироваться</h5>
                <div class=\"game-preview-control\">
                    <div>
                        <a href=\"{{ path('app_login') }}\">Войти</a>
                    </div>
                </div>
        </template>
    </turbo-stream>
{% endif %}
", "game/search.stream.html.twig", "/var/www/html/templates/game/search.stream.html.twig");
    }
}
