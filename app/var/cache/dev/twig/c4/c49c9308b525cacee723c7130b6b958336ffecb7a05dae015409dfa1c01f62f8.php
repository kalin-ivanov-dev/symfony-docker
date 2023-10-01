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

/* product_administration/show.html.twig */
class __TwigTemplate_e96a8cecbfcd6cd02b9927361cda0b11f90356a7d6d1f202a54bb94877793fbd extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product_administration/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product_administration/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Product";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">
        <h2 class=\"text-center mt-5 mb-3\">Show Product</h2>
        <div class=\"card\">
            <div class=\"card-header\">
                <a class=\"btn btn-outline-info float-right\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_administration_index");
        echo "\">
                    Back To List
                </a>
            </div>
            <div class=\"card-body\">
                <b class=\"text-muted\">Name:</b>
                <p class=\"text-dark\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
        echo "</p>
                <b class=\"text-muted\">Sku:</b>
                <p class=\"text-dark\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 18, $this->source); })()), "sku", [], "any", false, false, false, 18), "html", null, true);
        echo "</p>  
                <b class=\"text-muted\">Price:</b>
                <p class=\"text-dark\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 20, $this->source); })()), "price", [], "any", false, false, false, 20), "html", null, true);
        echo "</p>  
                <b class=\"text-muted\">Category:</b>
                <p class=\"text-dark\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 22, $this->source); })()), "category", [], "any", false, false, false, 22), "html", null, true);
        echo "</p>
                <b class=\"text-muted\">Date Created:</b>
                <p class=\"text-dark\">";
        // line 24
        ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 24, $this->source); })()), "createdAt", [], "any", false, false, false, 24)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 24, $this->source); })()), "createdAt", [], "any", false, false, false, 24), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</p>
                <b class=\"text-muted\">Date Updated:</b>
                <p class=\"text-dark\">";
        // line 26
        ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 26, $this->source); })()), "updatedAt", [], "any", false, false, false, 26)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 26, $this->source); })()), "updatedAt", [], "any", false, false, false, 26), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</p>
            </div>
            <form method=\"post\" action=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_administration_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                <a
                        class=\"btn btn-outline-success mt-2\"
                        href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_administration_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31)]), "html", null, true);
        echo "\">
                    Edit
                </a>
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34))), "html", null, true);
        echo "\">
                <button class=\"btn btn-outline-danger mt-2\">Delete</button>
            </form>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "product_administration/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 34,  124 => 31,  118 => 28,  113 => 26,  108 => 24,  103 => 22,  98 => 20,  93 => 18,  88 => 16,  79 => 10,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Product{% endblock %}

{% block body %}
    <div class=\"container\">
        <h2 class=\"text-center mt-5 mb-3\">Show Product</h2>
        <div class=\"card\">
            <div class=\"card-header\">
                <a class=\"btn btn-outline-info float-right\" href=\"{{ path('app_product_administration_index') }}\">
                    Back To List
                </a>
            </div>
            <div class=\"card-body\">
                <b class=\"text-muted\">Name:</b>
                <p class=\"text-dark\">{{ product.name }}</p>
                <b class=\"text-muted\">Sku:</b>
                <p class=\"text-dark\">{{ product.sku }}</p>  
                <b class=\"text-muted\">Price:</b>
                <p class=\"text-dark\">{{ product.price }}</p>  
                <b class=\"text-muted\">Category:</b>
                <p class=\"text-dark\">{{ product.category }}</p>
                <b class=\"text-muted\">Date Created:</b>
                <p class=\"text-dark\">{{ product.createdAt ? product.createdAt|date('Y-m-d H:i:s') : '' }}</p>
                <b class=\"text-muted\">Date Updated:</b>
                <p class=\"text-dark\">{{ product.updatedAt ? product.updatedAt|date('Y-m-d H:i:s') : '' }}</p>
            </div>
            <form method=\"post\" action=\"{{ path('app_product_administration_delete', {'id': product.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                <a
                        class=\"btn btn-outline-success mt-2\"
                        href=\"{{ path('app_product_administration_edit', {'id': product.id}) }}\">
                    Edit
                </a>
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ product.id) }}\">
                <button class=\"btn btn-outline-danger mt-2\">Delete</button>
            </form>
        </div>
    </div>
{% endblock %}
", "product_administration/show.html.twig", "/var/www/symfony_docker/templates/product_administration/show.html.twig");
    }
}
