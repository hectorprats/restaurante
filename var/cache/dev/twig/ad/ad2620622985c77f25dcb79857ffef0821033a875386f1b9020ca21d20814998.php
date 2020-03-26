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
class __TwigTemplate_af586824f54533543c46e79b670f38c548f6155ee95a0ed59180a5d97e31777e extends Template
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
        echo "

";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "session", [], "any", false, false, false, 8), "flashbag", [], "any", false, false, false, 8), "get", [0 => "notice"], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 9
            echo "    <div class=\"flash-notice\">
        ";
            // line 10
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
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
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pedidos"]) || array_key_exists("pedidos", $context) ? $context["pedidos"] : (function () { throw new RuntimeError('Variable "pedidos" does not exist.', 27, $this->source); })()));
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
            // line 28
            echo "        
            <tr>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pedido"], "id", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pedido"], "getIdProveedor", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            ((twig_get_attribute($this->env, $this->source, $context["pedido"], "fechaPedido", [], "any", false, false, false, 32)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pedido"], "fechaPedido", [], "any", false, false, false, 32), "d-m-Y"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 33
            ((twig_get_attribute($this->env, $this->source, $context["pedido"], "fechaEntrega", [], "any", false, false, false, 33)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pedido"], "fechaEntrega", [], "any", false, false, false, 33), "d-m-Y"), "html", null, true))) : (print ("")));
            echo "</td>
                <td><button class=\"btn\" onclick=\"window.location.href='";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pedido_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["pedido"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "'\">Editar</button>
                ";
            // line 35
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
            // line 39
            echo "            <tr>
                <td colspan=\"4\">No hay pedidos registrados</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pedido'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
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
                <th>Precio Total</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["linea_pedidos"]) || array_key_exists("linea_pedidos", $context) ? $context["linea_pedidos"] : (function () { throw new RuntimeError('Variable "linea_pedidos" does not exist.', 63, $this->source); })()));
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
            // line 64
            echo "            <tr>
                <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["linea_pedido"], "id", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["linea_pedido"], "getIdArticulo", [], "method", false, false, false, 66), "html", null, true);
            echo "</td>
                <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["linea_pedido"], "unidades", [], "any", false, false, false, 67), "html", null, true);
            echo "</td>
                <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["linea_pedido"], "precioLinea", [], "any", false, false, false, 68), "html", null, true);
            echo "€</td>
                <td colspan=\"2\"><button class=\"btn\" onclick=\"window.location.href='";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("linea_pedido_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["linea_pedido"], "id", [], "any", false, false, false, 69)]), "html", null, true);
            echo "'\">Editar</button>
                ";
            // line 70
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
            // line 73
            echo "            <tr>
                <td colspan=\"4\">No hay líneas de pedido registradas</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['linea_pedido'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "        </tbody>
    </table>
    <div class=\"form_linea\">
    <h5>Crear Nueva Linea</h5>
    ";
        // line 81
        echo twig_include($this->env, $context, "linea_pedido/_form.html.twig");
        echo "
    </div>
    <div class=\"form_pedido\">
    <h5>Crear Pedido</h5>
    ";
        // line 85
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
        return array (  293 => 85,  286 => 81,  280 => 77,  271 => 73,  255 => 70,  251 => 69,  247 => 68,  243 => 67,  239 => 66,  235 => 65,  232 => 64,  214 => 63,  192 => 43,  183 => 39,  166 => 35,  162 => 34,  158 => 33,  154 => 32,  150 => 31,  146 => 30,  142 => 28,  124 => 27,  108 => 13,  99 => 10,  96 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestiona JMJ{% endblock %}

{% block body %}


{% for flash_message in app.session.flashbag.get('notice') %}
    <div class=\"flash-notice\">
        {{ flash_message }}
    </div>
{% endfor %}

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
                <th>Precio Total</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        {% for linea_pedido in linea_pedidos %}
            <tr>
                <td>{{ linea_pedido.id }}</td>
                <td>{{ linea_pedido.getIdArticulo() }}</td>
                <td>{{ linea_pedido.unidades }}</td>
                <td>{{ linea_pedido.precioLinea }}€</td>
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
", "pedido/index.html.twig", "C:\\xampp\\htdocs\\restaurante2\\templates\\pedido\\index.html.twig");
    }
}
