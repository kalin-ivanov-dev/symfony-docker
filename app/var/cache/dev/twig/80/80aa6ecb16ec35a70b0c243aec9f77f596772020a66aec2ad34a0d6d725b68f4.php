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

/* product_administration/index.html.twig */
class __TwigTemplate_a1823767d77e7b3afca92fe05869becf66d13330a88a432f8ed226cf52a9b374 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product_administration/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product_administration/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Product index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
";
        // line 45
        echo "
";
        // line 47
        echo "








    <div class=\"container\">
        
        <h2 class=\"text-center mt-5 mb-3\">Product Manager</h2>
        <div class=\"card\">
           x
            <div class=\"card-header\">
                <a class=\"btn btn-outline-primary\" href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_administration_new");
        echo "\">
                    Create New Product
                </a>
                ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "flashes", ["success"], "method", false, false, false, 65));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 66
            echo "                    <div class=\"alert alert-success\">
                        ";
            // line 67
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "            </div>
            <div class=\"card-body\">
                <table class=\"table table-bordered\">
                    <tr>
                        <th>Id</th>
                        <th>Sku</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Slug</th>
                        <th>CreatedAt</th>
                        <th>UpdatedAt</th>
                        <th>actions</th>
                    </tr>
                    ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 84, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 85
            echo "                        <tr>
                            <td>";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 86), "html", null, true);
            echo "</td>
                            <td>";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "sku", [], "any", false, false, false, 87), "html", null, true);
            echo "</td>
                            <td>";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 88), "html", null, true);
            echo "</td>
                            <td>";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 89), "html", null, true);
            echo "</td>
                            <td>";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 90), "html", null, true);
            echo "</td>
                            <td>";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "slug", [], "any", false, false, false, 91), "html", null, true);
            echo "</td>
                            <td>";
            // line 92
            ((twig_get_attribute($this->env, $this->source, $context["product"], "createdAt", [], "any", false, false, false, 92)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "createdAt", [], "any", false, false, false, 92), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                            <td>";
            // line 93
            ((twig_get_attribute($this->env, $this->source, $context["product"], "updatedAt", [], "any", false, false, false, 93)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "updatedAt", [], "any", false, false, false, 93), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                            <td>
                                <form method=\"post\" action=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_administration_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 95)]), "html", null, true);
            echo "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                                    <a
                                            class=\"btn btn-outline-info mt-2\"
                                            href=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_administration_show", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 98)]), "html", null, true);
            echo "\">
                                        Show
                                    </a>
                                    <a
                                            class=\"btn btn-outline-success mt-2\"
                                            href=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_administration_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 103)]), "html", null, true);
            echo "\">
                                        Edit
                                    </a>

                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 107))), "html", null, true);
            echo "\">
                                    <button class=\"btn btn-outline-danger mt-2\">Delete</button>
                                </form>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "                </table>
            </div>
        </div>
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "product_administration/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 113,  195 => 107,  188 => 103,  180 => 98,  174 => 95,  169 => 93,  165 => 92,  161 => 91,  157 => 90,  153 => 89,  149 => 88,  145 => 87,  141 => 86,  138 => 85,  134 => 84,  118 => 70,  109 => 67,  106 => 66,  102 => 65,  96 => 62,  79 => 47,  76 => 45,  73 => 7,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Product index{% endblock %}

{% block body %}
{#    <h1>Product index</h1>#}

{#    <table class=\"table\" style=\"color: white\">#}
{#        <thead>#}
{#            <tr>#}
{#                <th>Id</th>#}
{#                <th>Sku</th>#}
{#                <th>Name</th>#}
{#                <th>Price</th>#}
{#                <th>Category</th>#}
{#                <th>Slug</th>#}
{#                <th>CreatedAt</th>#}
{#                <th>UpdatedAt</th>#}
{#                <th>actions</th>#}
{#            </tr>#}
{#        </thead>#}
{#        <tbody>#}
{#        {% for product in products %}#}
{#            <tr>#}
{#                <td>{{ product.id }}</td>#}
{#                <td>{{ product.sku }}</td>#}
{#                <td>{{ product.name }}</td>#}
{#                <td>{{ product.price }}</td>#}
{#                <td>{{ product.category }}</td>#}
{#                <td>{{ product.slug }}</td>#}
{#                <td>{{ product.createdAt ? product.createdAt|date('Y-m-d H:i:s') : '' }}</td>#}
{#                <td>{{ product.updatedAt ? product.updatedAt|date('Y-m-d H:i:s') : '' }}</td>#}
{#                <td>#}
{#                    <a href=\"{{ path('app_product_administration_show', {'id': product.id}) }}\">show</a>#}
{#                    <a href=\"{{ path('app_product_administration_edit', {'id': product.id}) }}\">edit</a>#}
{#                </td>#}
{#            </tr>#}
{#        {% else %}#}
{#            <tr>#}
{#                <td colspan=\"9\">no records found</td>#}
{#            </tr>#}
{#        {% endfor %}#}
{#        </tbody>#}
{#    </table>#}

{#    <a href=\"{{ path('app_product_administration_new') }}\">Create new</a>#}









    <div class=\"container\">
        
        <h2 class=\"text-center mt-5 mb-3\">Product Manager</h2>
        <div class=\"card\">
           x
            <div class=\"card-header\">
                <a class=\"btn btn-outline-primary\" href=\"{{ path('app_product_administration_new') }}\">
                    Create New Product
                </a>
                {% for message in app.flashes('success') %}
                    <div class=\"alert alert-success\">
                        {{ message }}
                    </div>
                {% endfor %}
            </div>
            <div class=\"card-body\">
                <table class=\"table table-bordered\">
                    <tr>
                        <th>Id</th>
                        <th>Sku</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Slug</th>
                        <th>CreatedAt</th>
                        <th>UpdatedAt</th>
                        <th>actions</th>
                    </tr>
                    {% for product in products %}
                        <tr>
                            <td>{{ product.id }}</td>
                            <td>{{ product.sku }}</td>
                            <td>{{ product.name }}</td>
                            <td>{{ product.price }}</td>
                            <td>{{ product.category }}</td>
                            <td>{{ product.slug }}</td>
                            <td>{{ product.createdAt ? product.createdAt|date('Y-m-d H:i:s') : '' }}</td>
                            <td>{{ product.updatedAt ? product.updatedAt|date('Y-m-d H:i:s') : '' }}</td>
                            <td>
                                <form method=\"post\" action=\"{{ path('app_product_administration_delete', {'id': product.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                                    <a
                                            class=\"btn btn-outline-info mt-2\"
                                            href=\"{{ path('app_product_administration_show', {'id': product.id}) }}\">
                                        Show
                                    </a>
                                    <a
                                            class=\"btn btn-outline-success mt-2\"
                                            href=\"{{ path('app_product_administration_edit', {'id': product.id}) }}\">
                                        Edit
                                    </a>

                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ product.id) }}\">
                                    <button class=\"btn btn-outline-danger mt-2\">Delete</button>
                                </form>
                            </td>
                        </tr>
                    {% endfor %}
                </table>
            </div>
        </div>
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
{% endblock %}
", "product_administration/index.html.twig", "/var/www/symfony_docker/templates/product_administration/index.html.twig");
    }
}
