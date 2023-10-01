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

/* cart/checkout.html.twig */
class __TwigTemplate_50b8034862dac2553370238f8fb60ed0b9f658bdabd67926b691f021cdc974fc extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/checkout.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/checkout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Order";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <div class=\"container mt-4\">
        <h1>Your Order</h1>

        <div class=\"row mt-4\">


            <!-- List of items -->

            <div class=\"col-md-8\">
                <div class=\"card\">
                    <ul class=\"list-group list-group-flush\">
                        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 19
            echo "                            <li class=\"list-group-item d-flex\">
                                <div class=\"flex-fill mr-2\" style=\"margin-right: 15px\">
                                    <img src=\"";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "getimageUrl", [300], "method", false, false, false, 21), "html", null, true);
            echo "\" width=\"64\" alt=\"Product image\">
                                </div>
                                <div class=\"flex-fill mr-2\" style=\"margin-right: 5px\">
                                    <h5 class=\"mt-0 mb-0\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 24), "html", null, true);
            echo "</h5>
                                    <small><b>Category:</b> ";
            // line 25
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 25), 0, 50), "html", null, true);
            echo "</small>
                                    <small><b>SKU:</b> ";
            // line 26
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "sku", [], "any", false, false, false, 26), 0, 50), "html", null, true);
            echo "</small>
                                    <small><b>Ordered Quantity:</b> ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 27), "html", null, true);
            echo "</small>
                                </div>
                                <div class=\"flex-fill mr-2 text-right\">
                                    <b>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 30), "html", null, true);
            echo " €</b>
                                </div>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                    </ul>
                </div>
            </div>


            <!-- Summary -->
            <div class=\"col-md-4\">
                <div class=\"card mt-4 mt-md-0\">
                    <h5 class=\"card-header bg-dark text-white\">Summary</h5>
                    <ul class=\"list-group list-group-flush\">
                        <li class=\"list-group-item d-flex justify-content-between\">
                            <div><b>Total</b></div>
                            <span><b>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 46, $this->source); })()), "totalValue", [], "any", false, false, false, 46), "html", null, true);
        echo " €</b></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "cart/checkout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 46,  129 => 34,  119 => 30,  113 => 27,  109 => 26,  105 => 25,  101 => 24,  95 => 21,  91 => 19,  87 => 18,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Order{% endblock %}

{% block body %}

    <div class=\"container mt-4\">
        <h1>Your Order</h1>

        <div class=\"row mt-4\">


            <!-- List of items -->

            <div class=\"col-md-8\">
                <div class=\"card\">
                    <ul class=\"list-group list-group-flush\">
                        {% for item in items %}
                            <li class=\"list-group-item d-flex\">
                                <div class=\"flex-fill mr-2\" style=\"margin-right: 15px\">
                                    <img src=\"{{ item.getimageUrl(300) }}\" width=\"64\" alt=\"Product image\">
                                </div>
                                <div class=\"flex-fill mr-2\" style=\"margin-right: 5px\">
                                    <h5 class=\"mt-0 mb-0\">{{ item.name }}</h5>
                                    <small><b>Category:</b> {{ item.category[:50] }}</small>
                                    <small><b>SKU:</b> {{ item.sku[:50] }}</small>
                                    <small><b>Ordered Quantity:</b> {{ item.quantity }}</small>
                                </div>
                                <div class=\"flex-fill mr-2 text-right\">
                                    <b>{{ item.price }} €</b>
                                </div>
                            </li>
                        {% endfor %}
                    </ul>
                </div>
            </div>


            <!-- Summary -->
            <div class=\"col-md-4\">
                <div class=\"card mt-4 mt-md-0\">
                    <h5 class=\"card-header bg-dark text-white\">Summary</h5>
                    <ul class=\"list-group list-group-flush\">
                        <li class=\"list-group-item d-flex justify-content-between\">
                            <div><b>Total</b></div>
                            <span><b>{{ order.totalValue }} €</b></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
{% endblock %}", "cart/checkout.html.twig", "/var/www/symfony_docker/templates/cart/checkout.html.twig");
    }
}
