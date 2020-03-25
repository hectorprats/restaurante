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

/* pedido/index.html.twig */
class __TwigTemplate_3ed0c79a0a3ff438ea4e3290eab1c71bd4b89ab1e063a6c026a19e9ee7bb8d3b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pedido/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pedido/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pedido/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Gestiona JMJ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h3>Listado de Pedidos</h3>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Número de Pedido</th>
                <th>Proveedor</th>
                <th>Fecha de pedido</th>
                <th>Fecha de entrega</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pedidos"]) || array_key_exists("pedidos", $context) ? $context["pedidos"] : (function () { throw new RuntimeError('Variable "pedidos" does not exist.', 19, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["pedido"]) {
            // line 20
            echo "        
            <tr>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pedido"], "id", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pedido"], "getIdProveedor", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            ((twig_get_attribute($this->env, $this->source, $context["pedido"], "fechaPedido", [], "any", false, false, false, 24)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pedido"], "fechaPedido", [], "any", false, false, false, 24), "d-m-Y"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 25
            ((twig_get_attribute($this->env, $this->source, $context["pedido"], "fechaEntrega", [], "any", false, false, false, 25)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pedido"], "fechaEntrega", [], "any", false, false, false, 25), "d-m-Y"), "html", null, true))) : (print ("")));
            echo "</td>
                <td><button class=\"btn\" onclick=\"window.location.href='";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pedido_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["pedido"], "id", [], "any", false, false, false, 26)]), "html", null, true);
            echo "'\">Editar</button>
                ";
            // line 27
            echo twig_include($this->env, $context, "pedido/_delete_form.html.twig");
            echo "
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 31
            echo "            <tr>
                <td colspan=\"4\">No hay pedidos registrados</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pedido'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <!-- Linea de Pedido -->
    <br>
    <br>
    <br>
    <h3>Crear Nuevo Pedido</h3>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Número de línea</th>
                <th>Artículo</th>
                <th>Unidades</th>
                <th>Precio</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["linea_pedidos"]) || array_key_exists("linea_pedidos", $context) ? $context["linea_pedidos"] : (function () { throw new RuntimeError('Variable "linea_pedidos" does not exist.', 55, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["linea_pedido"]) {
            // line 56
            echo "        <?php 
            var_dump(linea_pedido.getIdarticulo());
        ?>
            <tr>
                <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["linea_pedido"], "id", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["linea_pedido"], "getIdArticulo", [], "method", false, false, false, 61), "html", null, true);
            echo "</td>
                <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["linea_pedido"], "unidades", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["linea_pedido"], "precioLinea", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                <td colspan=\"2\"><button class=\"btn\" onclick=\"window.location.href='";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("linea_pedido_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["linea_pedido"], "id", [], "any", false, false, false, 64)]), "html", null, true);
            echo "'\">Editar</button>
                ";
            // line 65
            echo twig_include($this->env, $context, "linea_pedido/_delete_form.html.twig");
            echo "</td>
            </tr>
        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 68
            echo "            <tr>
                <td colspan=\"4\">No hay líneas de pedido registradas</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['linea_pedido'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "        </tbody>
    </table>
    <div class=\"form_linea\">
    <h5>Crear Nueva Linea</h5>
    ";
        // line 76
        echo twig_include($this->env, $context, "linea_pedido/_form.html.twig");
        echo "
    </div>
    <div class=\"form_pedido\">
    <h5>Crear Pedido</h5>
    ";
        // line 80
        echo twig_include($this->env, $context, "pedido/_form.html.twig");
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pedido/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 80,  268 => 76,  262 => 72,  253 => 68,  237 => 65,  233 => 64,  229 => 63,  225 => 62,  221 => 61,  217 => 60,  211 => 56,  193 => 55,  171 => 35,  162 => 31,  145 => 27,  141 => 26,  137 => 25,  133 => 24,  129 => 23,  125 => 22,  121 => 20,  103 => 19,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestiona JMJ{% endblock %}

{% block body %}
    <h3>Listado de Pedidos</h3>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Número de Pedido</th>
                <th>Proveedor</th>
                <th>Fecha de pedido</th>
                <th>Fecha de entrega</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        {% for pedido in pedidos %}
        
            <tr>
                <td>{{ pedido.id }}</td>
                <td>{{ pedido.getIdProveedor }}</td>
                <td>{{ pedido.fechaPedido ? pedido.fechaPedido|date('d-m-Y') : '' }}</td>
                <td>{{ pedido.fechaEntrega ? pedido.fechaEntrega|date('d-m-Y') : '' }}</td>
                <td><button class=\"btn\" onclick=\"window.location.href='{{ path('pedido_edit', {'id': pedido.id}) }}'\">Editar</button>
                {{ include('pedido/_delete_form.html.twig') }}
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"4\">No hay pedidos registrados</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <!-- Linea de Pedido -->
    <br>
    <br>
    <br>
    <h3>Crear Nuevo Pedido</h3>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Número de línea</th>
                <th>Artículo</th>
                <th>Unidades</th>
                <th>Precio</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        {% for linea_pedido in linea_pedidos %}
        <?php 
            var_dump(linea_pedido.getIdarticulo());
        ?>
            <tr>
                <td>{{ linea_pedido.id }}</td>
                <td>{{ linea_pedido.getIdArticulo() }}</td>
                <td>{{ linea_pedido.unidades }}</td>
                <td>{{ linea_pedido.precioLinea }}</td>
                <td colspan=\"2\"><button class=\"btn\" onclick=\"window.location.href='{{ path('linea_pedido_edit', {'id': linea_pedido.id}) }}'\">Editar</button>
                {{ include('linea_pedido/_delete_form.html.twig') }}</td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"4\">No hay líneas de pedido registradas</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    <div class=\"form_linea\">
    <h5>Crear Nueva Linea</h5>
    {{ include('linea_pedido/_form.html.twig') }}
    </div>
    <div class=\"form_pedido\">
    <h5>Crear Pedido</h5>
    {{ include('pedido/_form.html.twig') }}
    </div>
{% endblock %}
", "pedido/index.html.twig", "C:\\xampp\\htdocs\\restaurante\\templates\\pedido\\index.html.twig");
    }
}
