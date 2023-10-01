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

/* cart/index.html.twig */
class __TwigTemplate_bb601da1f095c9eec9dce2fab262615494b19f010f3efdd39f6b93becc9e753a extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Cart";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container mt-4\">
        <h1>Your Cart</h1>
        ";
        // line 8
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 8, $this->source); })()), "items", [], "any", false, false, false, 8), "count", [], "any", false, false, false, 8) > 0)) {
            // line 9
            echo "            <div class=\"row mt-4\">
                
                <!-- List of items -->
                <div class=\"col-md-8\">
                    ";
            // line 13
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start');
            echo "
                    <div class=\"card\">
                        <div class=\"card-header bg-dark text-white d-flex\">
                            <h5>Items</h5>
                            <div class=\"ml-2\" style=\"margin-left: 5px;\">
                                ";
            // line 18
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "save", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "btn btn-warning"]]);
            echo "
                                ";
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "clear", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "btn btn-light"]]);
            echo "
                            </div>
                        </div>
                        <ul class=\"list-group list-group-flush\">
                            ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "items", [], "any", false, false, false, 23));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 24
                echo "                                <li class=\"list-group-item d-flex\">
                                    <div class=\"flex-fill mr-2\" style=\"margin-right: 15px\">
                                        <img src=\"";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "vars", [], "any", false, false, false, 26), "data", [], "any", false, false, false, 26), "product", [], "any", false, false, false, 26), "imageUrl", [300], "method", false, false, false, 26), "html", null, true);
                echo "\" width=\"64\" alt=\"Product image\">
                                    </div>
                                    <div class=\"flex-fill mr-2\" style=\"margin-right: 5px\">
                                        <h5 class=\"mt-0 mb-0\">";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "vars", [], "any", false, false, false, 29), "data", [], "any", false, false, false, 29), "product", [], "any", false, false, false, 29), "name", [], "any", false, false, false, 29), "html", null, true);
                echo "</h5>
                                        <small><b>Category:</b> ";
                // line 30
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "vars", [], "any", false, false, false, 30), "data", [], "any", false, false, false, 30), "product", [], "any", false, false, false, 30), "category", [], "any", false, false, false, 30), 0, 50), "html", null, true);
                echo "</small>
                                        <small><b>SKU:</b> ";
                // line 31
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "vars", [], "any", false, false, false, 31), "data", [], "any", false, false, false, 31), "product", [], "any", false, false, false, 31), "sku", [], "any", false, false, false, 31), 0, 50), "html", null, true);
                echo "</small>
                                        <div class=\"form-inline mt-2\">
                                            <div class=\"form-group mb-0 mr-2\">
                                                ";
                // line 34
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => ("form-control form-control-sm " . ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 36
$context["item"], "quantity", [], "any", false, false, false, 36), "vars", [], "any", false, false, false, 36), "valid", [], "any", false, false, false, 36)) ? ("") : ("is-invalid")))]]);
                // line 38
                echo "
                                                <div class=\"invalid-feedback\">
                                                    ";
                // line 40
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 40), 'errors');
                echo "
                                                </div>
                                            </div>
                                            ";
                // line 43
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["item"], "remove", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "btn btn-dark btn-sm", "style" => "margin-top: 10px"]]);
                echo "
                                        </div>
                                    </div>
                                    <div class=\"flex-fill mr-2 text-right\">
                                        <b>";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "vars", [], "any", false, false, false, 47), "data", [], "any", false, false, false, 47), "getTotal", [], "method", false, false, false, 47), "html", null, true);
                echo " €</b>
                                    </div>
                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "                        </ul>
                    </div>
                    ";
            // line 53
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "_token", [], "any", false, false, false, 53), 'row');
            echo "
                    ";
            // line 54
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), 'form_end', ["render_rest" => false]);
            echo "
                </div>
                
                
                <!-- Summary -->
                <div class=\"col-md-4\">
                    <div class=\"card mt-4 mt-md-0\">
                        <h5 class=\"card-header bg-dark text-white\">Summary</h5>
                        <ul class=\"list-group list-group-flush\">
                            <li class=\"list-group-item d-flex justify-content-between\">
                                <div><b>Total</b></div>
                                <span><b>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 65, $this->source); })()), "total", [], "any", false, false, false, 65), "html", null, true);
            echo " €</b></span>
                            </li>
                        </ul>
                        <div class=\"card-body\">
                            <a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("checkout", ["cartId" => twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 69, $this->source); })()), "id", [], "any", false, false, false, 69)]), "html", null, true);
            echo "\" class=\"btn btn-warning w-100\">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        ";
        } else {
            // line 75
            echo "            <div class=\"alert alert-info\">
                Your cart is empty. Go to the <a href=\"";
            // line 76
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_browse");
            echo "\">product list</a>.
            </div>
        ";
        }
        // line 79
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 79,  203 => 76,  200 => 75,  191 => 69,  184 => 65,  170 => 54,  166 => 53,  162 => 51,  152 => 47,  145 => 43,  139 => 40,  135 => 38,  133 => 36,  132 => 34,  126 => 31,  122 => 30,  118 => 29,  112 => 26,  108 => 24,  104 => 23,  97 => 19,  93 => 18,  85 => 13,  79 => 9,  77 => 8,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Cart{% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        <h1>Your Cart</h1>
        {% if cart.items.count > 0 %}
            <div class=\"row mt-4\">
                
                <!-- List of items -->
                <div class=\"col-md-8\">
                    {{ form_start(form) }}
                    <div class=\"card\">
                        <div class=\"card-header bg-dark text-white d-flex\">
                            <h5>Items</h5>
                            <div class=\"ml-2\" style=\"margin-left: 5px;\">
                                {{ form_widget(form.save, {'attr': {'class': 'btn btn-warning'}}) }}
                                {{ form_widget(form.clear, {'attr': {'class': 'btn btn-light'}}) }}
                            </div>
                        </div>
                        <ul class=\"list-group list-group-flush\">
                            {% for item in form.items %}
                                <li class=\"list-group-item d-flex\">
                                    <div class=\"flex-fill mr-2\" style=\"margin-right: 15px\">
                                        <img src=\"{{ item.vars.data.product.imageUrl(300) }}\" width=\"64\" alt=\"Product image\">
                                    </div>
                                    <div class=\"flex-fill mr-2\" style=\"margin-right: 5px\">
                                        <h5 class=\"mt-0 mb-0\">{{ item.vars.data.product.name }}</h5>
                                        <small><b>Category:</b> {{ item.vars.data.product.category[:50] }}</small>
                                        <small><b>SKU:</b> {{ item.vars.data.product.sku[:50] }}</small>
                                        <div class=\"form-inline mt-2\">
                                            <div class=\"form-group mb-0 mr-2\">
                                                {{ form_widget(item.quantity, {
                                                    'attr': {
                                                        'class': 'form-control form-control-sm ' ~ (item.quantity.vars.valid ? '' : 'is-invalid')
                                                    }
                                                }) }}
                                                <div class=\"invalid-feedback\">
                                                    {{ form_errors(item.quantity) }}
                                                </div>
                                            </div>
                                            {{ form_widget(item.remove, {'attr': {'class': 'btn btn-dark btn-sm','style': 'margin-top: 10px'}}) }}
                                        </div>
                                    </div>
                                    <div class=\"flex-fill mr-2 text-right\">
                                        <b>{{ item.vars.data.getTotal() }} €</b>
                                    </div>
                                </li>
                            {% endfor %}
                        </ul>
                    </div>
                    {{ form_row(form._token) }}
                    {{ form_end(form, {'render_rest': false}) }}
                </div>
                
                
                <!-- Summary -->
                <div class=\"col-md-4\">
                    <div class=\"card mt-4 mt-md-0\">
                        <h5 class=\"card-header bg-dark text-white\">Summary</h5>
                        <ul class=\"list-group list-group-flush\">
                            <li class=\"list-group-item d-flex justify-content-between\">
                                <div><b>Total</b></div>
                                <span><b>{{ cart.total }} €</b></span>
                            </li>
                        </ul>
                        <div class=\"card-body\">
                            <a href=\"{{ path('checkout',{cartId: cart.id}) }}\" class=\"btn btn-warning w-100\">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"alert alert-info\">
                Your cart is empty. Go to the <a href=\"{{ path('app_browse') }}\">product list</a>.
            </div>
        {% endif %}
    </div>
{% endblock %}", "cart/index.html.twig", "/var/www/symfony_docker/templates/cart/index.html.twig");
    }
}
