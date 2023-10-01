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

/* homepage.html.twig */
class __TwigTemplate_752344b4c6b29e396d84f0fe6d11fe6fd856d5d952516ad69e05634edddb10e4 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "homepage.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Create a new Record | ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container\">
    <h1 class=\"d-inline me-3\">";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "</h1> <i class=\"fas fa-edit\"></i>
    <div class=\"row mt-5\">
        <div class=\"col-12 col-md-4\">

            <svg width=\"100%\" height=\"100%\" viewBox=\"0 0 496 496\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
                <defs>
                    <linearGradient x1=\"50%\" y1=\"0%\" x2=\"50%\" y2=\"100%\" id=\"linearGradient-1\">
                        <stop stop-color=\"#C380F3\" offset=\"0%\"></stop>
                        <stop stop-color=\"#4A90E2\" offset=\"100%\"></stop>
                    </linearGradient>
                </defs>
                <g id=\"Mixed-Vinyl\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                    <g id=\"Group\">
                        <g id=\"record-vinyl\" fill=\"#000000\" fill-rule=\"nonzero\">
                            <path d=\"M248,144 C190.562386,144 144,190.562386 144,248 C144,305.437614 190.562386,352 248,352 C305.437614,352 352,305.437614 352,248 C352,190.562386 305.437614,144 248,144 L248,144 Z M248,272 C234.745166,272 224,261.254834 224,248 C224,234.745166 234.745166,224 248,224 C261.254834,224 272,234.745166 272,248 C272,261.254834 261.254834,272 248,272 Z M248,0 C111,0 0,111 0,248 C0,385 111,496 248,496 C385,496 496,385 496,248 C496,111 385,0 248,0 Z M248,376 C177.307552,376 120,318.692448 120,248 C120,177.307552 177.307552,120 248,120 C318.692448,120 376,177.307552 376,248 C376,281.947711 362.514324,314.505012 338.509668,338.509668 C314.505012,362.514324 281.947711,376 248,376 Z\" id=\"Shape\"></path>
                        </g>
                        <g id=\"record-vinyl\" transform=\"translate(144.000000, 144.000000)\" fill=\"url(#linearGradient-1)\" fill-rule=\"nonzero\">
                            <path d=\"M104,0 C46.562386,0 0,46.562386 0,104 C0,161.437614 46.562386,208 104,208 C161.437614,208 208,161.437614 208,104 C208,46.562386 161.437614,0 104,0 L104,0 Z M104,128 C90.745166,128 80,117.254834 80,104 C80,90.745166 90.745166,80 104,80 C117.254834,80 128,90.745166 128,104 C128,117.254834 117.254834,128 104,128 Z\" id=\"Shape\"></path>
                        </g>
                        <circle id=\"Oval\" stroke=\"#979797\" cx=\"248\" cy=\"248\" r=\"235\"></circle>
                        <circle id=\"Oval\" stroke=\"#979797\" cx=\"248\" cy=\"248\" r=\"215\"></circle>
                        <circle id=\"Oval\" stroke=\"#979797\" cx=\"248\" cy=\"248\" r=\"195\"></circle>
                        <circle id=\"Oval\" stroke=\"#979797\" cx=\"248\" cy=\"248\" r=\"175\"></circle>
                        <circle id=\"Oval\" stroke=\"#979797\" cx=\"248\" cy=\"248\" r=\"155\"></circle>
                    </g>
                </g>
            </svg>
        </div>
        <div class=\"col-12 col-md-8 ps-5\">
            <h2 class=\"mb-4\">10 songs (30 minutes of 60 still available)</h2>
            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tracks"]) || array_key_exists("tracks", $context) ? $context["tracks"] : (function () { throw new RuntimeError('Variable "tracks" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["track"]) {
            // line 38
            echo "            <div class=\"song-list\">
                <div class=\"d-flex mb-3\">
                    <a href=\"#\" >
                        <i class=\"fas fa-play me-3\"></i>
                    </a>
                    <span class=\"song-details\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["track"], "song", [], "any", false, false, false, 43), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["track"], "artist", [], "any", false, false, false, 43), "html", null, true);
            echo "</span>
                    <a href=\"#\">
                        <i class=\"fas fa-bars mx-3\"></i>
                    </a>
                    <a href=\"#\">
                        <i class=\"fas fa-times\"></i>
                    </a>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['track'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "            <button type=\"button\" class=\"btn btn-success\"><i class=\"fas fa-plus\"></i> Add a song</button>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 53,  121 => 43,  114 => 38,  110 => 37,  77 => 7,  74 => 6,  67 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Create a new Record | {{ parent() }}{% endblock %}

{% block body %}
<div class=\"container\">
    <h1 class=\"d-inline me-3\">{{ title }}</h1> <i class=\"fas fa-edit\"></i>
    <div class=\"row mt-5\">
        <div class=\"col-12 col-md-4\">

            <svg width=\"100%\" height=\"100%\" viewBox=\"0 0 496 496\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\">
                <defs>
                    <linearGradient x1=\"50%\" y1=\"0%\" x2=\"50%\" y2=\"100%\" id=\"linearGradient-1\">
                        <stop stop-color=\"#C380F3\" offset=\"0%\"></stop>
                        <stop stop-color=\"#4A90E2\" offset=\"100%\"></stop>
                    </linearGradient>
                </defs>
                <g id=\"Mixed-Vinyl\" stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\">
                    <g id=\"Group\">
                        <g id=\"record-vinyl\" fill=\"#000000\" fill-rule=\"nonzero\">
                            <path d=\"M248,144 C190.562386,144 144,190.562386 144,248 C144,305.437614 190.562386,352 248,352 C305.437614,352 352,305.437614 352,248 C352,190.562386 305.437614,144 248,144 L248,144 Z M248,272 C234.745166,272 224,261.254834 224,248 C224,234.745166 234.745166,224 248,224 C261.254834,224 272,234.745166 272,248 C272,261.254834 261.254834,272 248,272 Z M248,0 C111,0 0,111 0,248 C0,385 111,496 248,496 C385,496 496,385 496,248 C496,111 385,0 248,0 Z M248,376 C177.307552,376 120,318.692448 120,248 C120,177.307552 177.307552,120 248,120 C318.692448,120 376,177.307552 376,248 C376,281.947711 362.514324,314.505012 338.509668,338.509668 C314.505012,362.514324 281.947711,376 248,376 Z\" id=\"Shape\"></path>
                        </g>
                        <g id=\"record-vinyl\" transform=\"translate(144.000000, 144.000000)\" fill=\"url(#linearGradient-1)\" fill-rule=\"nonzero\">
                            <path d=\"M104,0 C46.562386,0 0,46.562386 0,104 C0,161.437614 46.562386,208 104,208 C161.437614,208 208,161.437614 208,104 C208,46.562386 161.437614,0 104,0 L104,0 Z M104,128 C90.745166,128 80,117.254834 80,104 C80,90.745166 90.745166,80 104,80 C117.254834,80 128,90.745166 128,104 C128,117.254834 117.254834,128 104,128 Z\" id=\"Shape\"></path>
                        </g>
                        <circle id=\"Oval\" stroke=\"#979797\" cx=\"248\" cy=\"248\" r=\"235\"></circle>
                        <circle id=\"Oval\" stroke=\"#979797\" cx=\"248\" cy=\"248\" r=\"215\"></circle>
                        <circle id=\"Oval\" stroke=\"#979797\" cx=\"248\" cy=\"248\" r=\"195\"></circle>
                        <circle id=\"Oval\" stroke=\"#979797\" cx=\"248\" cy=\"248\" r=\"175\"></circle>
                        <circle id=\"Oval\" stroke=\"#979797\" cx=\"248\" cy=\"248\" r=\"155\"></circle>
                    </g>
                </g>
            </svg>
        </div>
        <div class=\"col-12 col-md-8 ps-5\">
            <h2 class=\"mb-4\">10 songs (30 minutes of 60 still available)</h2>
            {% for track in tracks %}
            <div class=\"song-list\">
                <div class=\"d-flex mb-3\">
                    <a href=\"#\" >
                        <i class=\"fas fa-play me-3\"></i>
                    </a>
                    <span class=\"song-details\">{{ track.song }} - {{ track.artist }}</span>
                    <a href=\"#\">
                        <i class=\"fas fa-bars mx-3\"></i>
                    </a>
                    <a href=\"#\">
                        <i class=\"fas fa-times\"></i>
                    </a>
                </div>
            </div>
            {% endfor %}
            <button type=\"button\" class=\"btn btn-success\"><i class=\"fas fa-plus\"></i> Add a song</button>
        </div>
    </div>
</div>
{% endblock %}
", "homepage.html.twig", "/var/www/symfony_docker/templates/homepage.html.twig");
    }
}
