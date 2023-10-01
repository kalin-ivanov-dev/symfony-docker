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

/* browse.html.twig */
class __TwigTemplate_cefc2ae9b9dca889602c66b459b38865372eda7a065221c0eab0f65dbdce6319 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "browse.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "browse.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <h1>Browse ";
        // line 5
        (((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 5, $this->source); })())) ? (print (twig_escape_filter($this->env, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 5, $this->source); })()), "html", null, true))) : (print ("All Categories")));
        echo "</h1>

    ";
        // line 7
        if ((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 7, $this->source); })())) {
            // line 8
            echo "        <a class=\"btn btn-info\" style=\"margin-top: 20px;\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_browse");
            echo "\">Go back</a>
    ";
        }
        // line 10
        echo "    <h2 class=\"mt-5 mb-4\">Filter by Category</h2>
    <ul class=\"category-list ps-0 mt-2 mb-3\">
        <li class=\"d-inline\">
            <a class=\"btn btn-primary btn-sm\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_browse", ["slug" => "dairy"]);
        // line 15
        echo "\">Dairy</a>
        </li>
        <li class=\"d-inline\">
            <a class=\"btn btn-primary btn-sm\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_browse", ["slug" => "frozen"]);
        // line 20
        echo "\">Frozen</a>
        </li>
        <li class=\"d-inline\">
            <a class=\"btn btn-primary btn-sm\" href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_browse", ["slug" => "vegetables"]);
        // line 25
        echo "\">Vegetables</a>
        </li>
    </ul>

    <div>
        <h2 class=\"mt-5\">Products</h2>
        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pager"]) || array_key_exists("pager", $context) ? $context["pager"] : (function () { throw new RuntimeError('Variable "pager" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 34
            echo "                    <div class=\"col-md-4\">
                        <div class=\"card mb-4\"\">
                            <img src=\" ";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "imageUrl", [400], "method", false, false, false, 36), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 36), "html", null, true);
            echo "\" class=\"card-img-top\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title text-dark\">";
            // line 38
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 38), 0, 30), "html", null, true);
            echo "</h5>
                                <p class=\"card-text text-dark\">Categroy: ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 39), "html", null, true);
            echo "</p>
                                <p class=\"card-text text-dark\">SKU: ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "sku", [], "any", false, false, false, 40), "html", null, true);
            echo "</p>
";
            // line 42
            echo "                                <div class=\"d-flex justify-content-between align-item-center\">
                                    <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["product"], "slug", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\" class=\"btn btn-dark\">View details</a>
                                    <span class=\"h5 mt-auto text-dark product-price-tag\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 44), "html", null, true);
            echo " €</span>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                ";
        echo $this->env->getRuntime('Pagerfanta\Twig\Extension\PagerfantaRuntime')->renderPagerfanta((isset($context["pager"]) || array_key_exists("pager", $context) ? $context["pager"] : (function () { throw new RuntimeError('Variable "pager" does not exist.', 50, $this->source); })()));
        echo "
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "browse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 50,  140 => 44,  136 => 43,  133 => 42,  129 => 40,  125 => 39,  121 => 38,  114 => 36,  110 => 34,  106 => 33,  96 => 25,  94 => 23,  89 => 20,  87 => 18,  82 => 15,  80 => 13,  75 => 10,  69 => 8,  67 => 7,  62 => 5,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container\">
    <h1>Browse {{ category ? category : 'All Categories' }}</h1>

    {% if category %}
        <a class=\"btn btn-info\" style=\"margin-top: 20px;\" href=\"{{ path('app_browse') }}\">Go back</a>
    {% endif %}
    <h2 class=\"mt-5 mb-4\">Filter by Category</h2>
    <ul class=\"category-list ps-0 mt-2 mb-3\">
        <li class=\"d-inline\">
            <a class=\"btn btn-primary btn-sm\" href=\"{{ path('app_browse', {
                slug: 'dairy'
            }) }}\">Dairy</a>
        </li>
        <li class=\"d-inline\">
            <a class=\"btn btn-primary btn-sm\" href=\"{{ path('app_browse', {
                slug: 'frozen'
            }) }}\">Frozen</a>
        </li>
        <li class=\"d-inline\">
            <a class=\"btn btn-primary btn-sm\" href=\"{{ path('app_browse', {
                slug: 'vegetables'
            }) }}\">Vegetables</a>
        </li>
    </ul>

    <div>
        <h2 class=\"mt-5\">Products</h2>
        <div class=\"container\">
            <div class=\"row\">
                {% for product in pager %}
                    <div class=\"col-md-4\">
                        <div class=\"card mb-4\"\">
                            <img src=\" {{ product.imageUrl(400) }}\" alt=\"{{ product.name }}\" class=\"card-img-top\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title text-dark\">{{ product.name[:30] }}</h5>
                                <p class=\"card-text text-dark\">Categroy: {{ product.category }}</p>
                                <p class=\"card-text text-dark\">SKU: {{ product.sku }}</p>
{#                                <p class=\"card-text text-dark\">Id: {{ product.id }}</p>#}
                                <div class=\"d-flex justify-content-between align-item-center\">
                                    <a href=\"{{ path('app_product_show', {slug: product.slug}) }}\" class=\"btn btn-dark\">View details</a>
                                    <span class=\"h5 mt-auto text-dark product-price-tag\">{{ product.price }} €</span>
                                </div>
                            </div>
                        </div>
                    </div>
                {% endfor %}
                {{ pagerfanta(pager) }}
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "browse.html.twig", "/var/www/symfony_docker/templates/browse.html.twig");
    }
}
