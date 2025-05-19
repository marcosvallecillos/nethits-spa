<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* flex-objects.html.twig */
class __TwigTemplate_30c319a84c1f29fd5058817f5f286a2d7e94181068489890d8b6dba5f174c560 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'page_content' => [$this, 'block_page_content'],
            'flex_content' => [$this, 'block_flex_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "flex-objects.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "    ";
        $this->displayBlock('page_content', $context, $blocks);
        // line 7
        echo "
    ";
        // line 8
        $this->displayBlock('flex_content', $context, $blocks);
    }

    // line 4
    public function block_page_content($context, array $blocks = [])
    {
        // line 5
        echo "        ";
        echo $this->getAttribute(($context["page"] ?? null), "content", []);
        echo "
    ";
    }

    // line 8
    public function block_flex_content($context, array $blocks = [])
    {
        // line 9
        echo "        ";
        $context["options"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "flex", []);
        // line 10
        echo "        ";
        $context["page_assets"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "assets", []);
        // line 11
        echo "        ";
        $context["type"] = ((($this->getAttribute(($context["options"] ?? null), "directory", [], "any", true, true) &&  !(null === $this->getAttribute(($context["options"] ?? null), "directory", [])))) ? ($this->getAttribute(($context["options"] ?? null), "directory", [])) : ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "directory", [])));
        // line 12
        echo "        ";
        if (($context["type"] ?? null)) {
            // line 13
            echo "            ";
            $context["list"] = $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->arrayFilter(($context["type"] ?? null));
            // line 14
            echo "        ";
        } else {
            // line 15
            echo "            ";
            $context["type"] = $this->getAttribute(($context["uri"] ?? null), "param", [0 => "directory"], "method");
            // line 16
            echo "        ";
        }
        // line 17
        echo "        ";
        $context["id"] = ((($this->getAttribute(($context["options"] ?? null), "id", [], "any", true, true) &&  !(null === $this->getAttribute(($context["options"] ?? null), "id", [])))) ? ($this->getAttribute(($context["options"] ?? null), "id", [])) : ($this->getAttribute(($context["uri"] ?? null), "param", [0 => "id"], "method")));
        // line 18
        echo "
        ";
        // line 19
        $this->loadTemplate("flex-objects/page.html.twig", "flex-objects.html.twig", 19)->display($context);
        // line 20
        echo "    ";
    }

    public function getTemplateName()
    {
        return "flex-objects.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 20,  97 => 19,  94 => 18,  91 => 17,  88 => 16,  85 => 15,  82 => 14,  79 => 13,  76 => 12,  73 => 11,  70 => 10,  67 => 9,  64 => 8,  57 => 5,  54 => 4,  50 => 8,  47 => 7,  44 => 4,  41 => 3,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% block content %}
    {% block page_content %}
        {{ page.content|raw }}
    {% endblock %}

    {% block flex_content %}
        {% set options = page.header.flex %}
        {% set page_assets = page.header.assets %}
        {% set type = options.directory ?? page.header.directory %}
        {% if type %}
            {% set list = type|array %}
        {% else %}
            {% set type = uri.param('directory') %}
        {% endif %}
        {% set id = options.id ?? uri.param('id') %}

        {% include 'flex-objects/page.html.twig' %}
    {% endblock %}
{% endblock %}
", "flex-objects.html.twig", "C:\\xampp\\htdocs\\grav-admin-spa\\user\\plugins\\flex-objects\\templates\\flex-objects.html.twig");
    }
}
