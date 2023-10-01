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

/* product_administration/_form.html.twig */
class __TwigTemplate_ba21d01eee3c67155a4bfdd55044de2e5e399d77d3a691f3a23cbd8f743b2781 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product_administration/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "

 ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "children", [], "any", false, false, false, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 4
            echo "     ";
            // line 5
            echo "     ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 5), "errors", [], "any", false, false, false, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 6
                echo "         <li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 6), "html", null, true);
                echo "</li>
     ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "
";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", ["error"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            echo "    <div class=\"alert alert-danger\">
        ";
            // line 12
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "<div class=\"form-group\" style=\"color:black;\">
    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
</div>
<div class=\"form-group\" style=\"color:black;\">
    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "sku", [], "any", false, false, false, 19), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
</div>
<div class=\"form-group\" style=\"color:black;\">
    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "price", [], "any", false, false, false, 22), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
</div>
<div class=\"form-group\" style=\"color:black;\">
    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "category", [], "any", false, false, false, 25), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
</div>
";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "_token", [], "any", false, false, false, 27), 'row');
        echo "
<button class=\"btn ";
        // line 28
        echo twig_escape_filter($this->env, ((array_key_exists("button_color", $context)) ? (_twig_default_filter((isset($context["button_color"]) || array_key_exists("button_color", $context) ? $context["button_color"] : (function () { throw new RuntimeError('Variable "button_color" does not exist.', 28, $this->source); })()), "btn-outline-primary")) : ("btn-outline-primary")), "html", null, true);
        echo "  mt-3\">";
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 28, $this->source); })()), "Save Product")) : ("Save Product")), "html", null, true);
        echo "</button>

";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), 'form_end', ["render_rest" => false]);
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "product_administration/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 30,  120 => 28,  116 => 27,  111 => 25,  105 => 22,  99 => 19,  93 => 16,  90 => 15,  81 => 12,  78 => 11,  74 => 10,  71 => 9,  65 => 8,  56 => 6,  51 => 5,  49 => 4,  45 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}

 {% for child in form.children %}
     {# Display the errors of the form item #}
     {%for error in child.vars.errors%}
         <li>{{error.message}}</li>
     {%endfor%}
 {%endfor%}

{% for message in app.flashes('error') %}
    <div class=\"alert alert-danger\">
        {{ message }}
    </div>
{% endfor %}
<div class=\"form-group\" style=\"color:black;\">
    {{ form_row(form.name, {'attr': {'class': 'form-control'}}) }}
</div>
<div class=\"form-group\" style=\"color:black;\">
    {{ form_row(form.sku, {'attr': {'class': 'form-control'}}) }}
</div>
<div class=\"form-group\" style=\"color:black;\">
    {{ form_row(form.price, {'attr': {'class': 'form-control'}}) }}
</div>
<div class=\"form-group\" style=\"color:black;\">
    {{ form_row(form.category, {'attr': {'class': 'form-control'}}) }}
</div>
{{ form_row(form._token) }}
<button class=\"btn {{ button_color|default('btn-outline-primary') }}  mt-3\">{{ button_label|default('Save Product') }}</button>

{{ form_end(form,{'render_rest': false})  }}

", "product_administration/_form.html.twig", "/var/www/symfony_docker/templates/product_administration/_form.html.twig");
    }
}
