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

/* product/show.html.twig */
class __TwigTemplate_3114fef160e77dc0e05a52b2ba85300b974d6edfe0630225ea2722821ea8fd8a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        echo " Mix";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 27
        echo "    
    <div class=\"container\">
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "flashes", ["error"], "method", false, false, false, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 30
            echo "            <div class=\"alert alert-danger\">
                ";
            // line 31
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        <div class=\"row mt-3 mb-4\">
            <div class=\"col-md-4\">
                <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 36, $this->source); })()), "imageUrl", [300], "method", false, false, false, 36), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 36, $this->source); })()), "name", [], "any", false, false, false, 36), "html", null, true);
        echo "\" class=\"img-fluid\" style=\"border-radius: 10px\">
            </div>
            <div class=\"col-md-8\">
                <h1 class=\"mt-4 mt-md-0\">";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 39, $this->source); })()), "name", [], "any", false, false, false, 39), "html", null, true);
        echo "</h1>
                <h2>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 40, $this->source); })()), "price", [], "any", false, false, false, 40), "html", null, true);
        echo " €</h2>
                <b>SKU:</b> ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 41, $this->source); })()), "sku", [], "any", false, false, false, 41), "html", null, true);
        echo "
                <b>Category: </b>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 42, $this->source); })()), "category", [], "any", false, false, false, 42), "html", null, true);
        echo "
                <hr>
";
        // line 51
        echo "
                ";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), 'form_start', ["attr" => ["class" => "mt-4 p-4 bg-secondary"]]);
        echo "
                <div class=\"form-group\">
                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "quantity", [], "any", false, false, false, 54), 'label');
        echo "
                    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "quantity", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => ("form-control " . ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 57
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "quantity", [], "any", false, false, false, 57), "vars", [], "any", false, false, false, 57), "valid", [], "any", false, false, false, 57)) ? ("") : ("is-invalid")))]]);
        // line 59
        echo "
                    <div class=\"invalid-feedback\">
                        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "quantity", [], "any", false, false, false, 61), 'errors');
        echo "
                    </div>
                </div>
                ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "add", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "btn btn-warning w-25", "style" => "margin-top:10px"]]);
        echo "
                ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "product/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 65,  148 => 64,  142 => 61,  138 => 59,  136 => 57,  135 => 55,  131 => 54,  126 => 52,  123 => 51,  118 => 42,  114 => 41,  110 => 40,  106 => 39,  98 => 36,  94 => 34,  85 => 31,  82 => 30,  78 => 29,  74 => 27,  67 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ product.name }} Mix{% endblock %}

{% block body %}
{#    <div class=\"container\">#}
{#        <h1 class=\"d-inline me-3\">{{ product.name }}</h1>#}
{#        <div class=\"row mt-5\">#}
{#            <div class=\"col-12 col-md-4\">#}
{#                <img src=\"{{ product.imageUrl(300) }}\" alt=\"Product cover\">#}
{#            </div>#}
{#            <div class=\"col-12 col-md-8 ps-5\">#}
{#                <h2 class=\"mb-4\">SKU: {{ product.sku }}</h2>#}
{#                <p>Price: {{ product.price }}</p>#}
{#                <p>Cateogry: {{ product.category }}</p>#}
{#                <form action=\"{{ path('app_product_addToCart', {id: product.id }) }}\" method=\"POST\">#}
{#                    <button#}
{#                            type=\"submit\"#}
{#                            class=\"btn btn-outline-primary\"#}
{#                    >#}
{#                        {% include('/product/_addToCart.html.twig') %}#}
{#                    </button>#}
{#                </form>#}
{#            </div>#}
{#        </div>#}
{#    </div>#}
    
    <div class=\"container\">
        {% for message in app.flashes('error') %}
            <div class=\"alert alert-danger\">
                {{ message }}
            </div>
        {% endfor %}
        <div class=\"row mt-3 mb-4\">
            <div class=\"col-md-4\">
                <img src=\"{{ product.imageUrl(300) }}\" alt=\"{{ product.name }}\" class=\"img-fluid\" style=\"border-radius: 10px\">
            </div>
            <div class=\"col-md-8\">
                <h1 class=\"mt-4 mt-md-0\">{{ product.name }}</h1>
                <h2>{{ product.price }} €</h2>
                <b>SKU:</b> {{ product.sku }}
                <b>Category: </b>{{ product.category }}
                <hr>
{#                <form class=\"mt-4 p-4 bg-light\" method=\"post\">#}
{#                    <div class=\"form-group\">#}
{#                        <label for=\"quantity text-dark\">Quantity</label>#}
{#                        <input type=\"number\" class=\"form-control\" id=\"quantity\">#}
{#                    </div>#}
{#                    <button class=\"btn btn-warning\">Add to Cart</button>#}
{#                </form>#}

                {{ form_start(form, {'attr': {'class': 'mt-4 p-4 bg-secondary'}}) }}
                <div class=\"form-group\">
                    {{ form_label(form.quantity) }}
                    {{ form_widget(form.quantity, {
                        'attr': {
                            'class': 'form-control ' ~ (form.quantity.vars.valid ? '' : 'is-invalid')
                        }
                    }) }}
                    <div class=\"invalid-feedback\">
                        {{ form_errors(form.quantity) }}
                    </div>
                </div>
                {{ form_widget(form.add, {'attr': {'class': 'btn btn-warning w-25','style' : 'margin-top:10px'}}) }}
                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}
", "product/show.html.twig", "/var/www/symfony_docker/templates/product/show.html.twig");
    }
}
