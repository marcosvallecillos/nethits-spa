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

/* flex-objects/page.html.twig */
class __TwigTemplate_07ae18738e2efbe920cc434f8e8c3aa4581028f65ead0ad0025d6b0f476fc4d2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 3
        $context["options"] = (($context["options"]) ?? ([]));
        // line 4
        $context["flex"] = $this->getAttribute(($context["grav"] ?? null), "get", [0 => "flex_objects"], "method");
        // line 5
        $context["list"] = (($context["list"]) ?? (((($this->getAttribute(($context["options"] ?? null), "list", [], "any", true, true) &&  !(null === $this->getAttribute(($context["options"] ?? null), "list", [])))) ? ($this->getAttribute(($context["options"] ?? null), "list", [])) : (twig_get_array_keys_filter(((($this->getAttribute(($context["options"] ?? null), "directories", [], "any", true, true) &&  !(null === $this->getAttribute(($context["options"] ?? null), "directories", [])))) ? ($this->getAttribute(($context["options"] ?? null), "directories", [])) : ($this->getAttribute(($context["flex"] ?? null), "defaultDirectories", [], "method"))))))));
        // line 7
        if (((($this->getAttribute(($context["page_assets"] ?? null), "css", [], "any", true, true) &&  !(null === $this->getAttribute(($context["page_assets"] ?? null), "css", [])))) ? ($this->getAttribute(($context["page_assets"] ?? null), "css", [])) : (((($this->getAttribute(($context["config"] ?? null), "get", [0 => "plugins.flex-objects.built_in_css"], "method", true, true) &&  !(null === $this->getAttribute(($context["config"] ?? null), "get", [0 => "plugins.flex-objects.built_in_css"], "method")))) ? ($this->getAttribute(($context["config"] ?? null), "get", [0 => "plugins.flex-objects.built_in_css"], "method")) : (true))))) {
            // line 8
            echo "    ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "plugin://flex-objects/css/site.css"], "method");
        }
        // line 10
        if (((($this->getAttribute(($context["page_assets"] ?? null), "jss", [], "any", true, true) &&  !(null === $this->getAttribute(($context["page_assets"] ?? null), "jss", [])))) ? ($this->getAttribute(($context["page_assets"] ?? null), "jss", [])) : (true))) {
            // line 11
            echo "    ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "plugin://flex-objects/js/list.min.js"], "method");
        }
        // line 14
        if (($context["type"] ?? null)) {
            // line 15
            $context["options"] = ((($this->getAttribute($this->getAttribute(($context["options"] ?? null), "directories", [], "any", false, true), ($context["type"] ?? null), [], "array", true, true) &&  !(null === $this->getAttribute($this->getAttribute(($context["options"] ?? null), "directories", [], "any", false, true), ($context["type"] ?? null), [], "array")))) ? ($this->getAttribute($this->getAttribute(($context["options"] ?? null), "directories", [], "any", false, true), ($context["type"] ?? null), [], "array")) : (($context["options"] ?? null)));
            // line 17
            if (!twig_in_filter(($context["type"] ?? null), ($context["list"] ?? null))) {
                // line 18
                echo "        ";
                // line 19
                echo "        ";
                $this->loadTemplate("flex-objects/views/404.html.twig", "flex-objects/page.html.twig", 19)->display($context);
            } elseif (            // line 21
($context["id"] ?? null)) {
                // line 22
                echo "        ";
                $context["options"] = ((($this->getAttribute(($context["options"] ?? null), "object", [], "any", true, true) &&  !(null === $this->getAttribute(($context["options"] ?? null), "object", [])))) ? ($this->getAttribute(($context["options"] ?? null), "object", [])) : (($context["options"] ?? null)));
                // line 23
                echo "
        ";
                // line 25
                echo "        ";
                $this->loadTemplate("flex-objects/views/object.html.twig", "flex-objects/page.html.twig", 25)->display(twig_array_merge($context, ["type" => ($context["type"] ?? null), "id" => ($context["id"] ?? null), "options" => ($context["options"] ?? null)]));
            } else {
                // line 28
                echo "        ";
                $context["options"] = ((($this->getAttribute(($context["options"] ?? null), "collection", [], "any", true, true) &&  !(null === $this->getAttribute(($context["options"] ?? null), "collection", [])))) ? ($this->getAttribute(($context["options"] ?? null), "collection", [])) : (($context["options"] ?? null)));
                // line 29
                echo "
        ";
                // line 31
                echo "        ";
                $this->loadTemplate("flex-objects/views/directory.html.twig", "flex-objects/page.html.twig", 31)->display(twig_array_merge($context, ["type" => ($context["type"] ?? null), "options" => ($context["options"] ?? null)]));
            }
        } else {
            // line 35
            echo "    ";
            // line 36
            echo "    ";
            $this->loadTemplate("flex-objects/views/directories.html.twig", "flex-objects/page.html.twig", 36)->display(twig_array_merge($context, ["options" => ($context["options"] ?? null), "list" => ($context["list"] ?? null)]));
        }
    }

    public function getTemplateName()
    {
        return "flex-objects/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 36,  82 => 35,  77 => 31,  74 => 29,  71 => 28,  67 => 25,  64 => 23,  61 => 22,  59 => 21,  56 => 19,  54 => 18,  52 => 17,  50 => 15,  48 => 14,  44 => 11,  42 => 10,  38 => 8,  36 => 7,  34 => 5,  32 => 4,  30 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# flex-objects/page.html.twig #}

{%- set options = options ?? {} %}
{%- set flex = grav.get('flex_objects') %}
{%- set list = list ?? options.list ?? (options.directories ?? flex.defaultDirectories())|keys %}

{%- if page_assets.css ?? config.get('plugins.flex-objects.built_in_css') ?? true %}
    {% do assets.addCss('plugin://flex-objects/css/site.css') %}
{% endif %}
{%- if page_assets.jss ?? true %}
    {% do assets.addJs('plugin://flex-objects/js/list.min.js') %}
{% endif %}

{%- if type %}
    {%- set options = options.directories[type] ?? options %}

    {%- if type not in list %}
        {# Display error page #}
        {% include 'flex-objects/views/404.html.twig' %}

    {%- elseif id %}
        {% set options = options.object ?? options %}

        {# Display specified object #}
        {% include 'flex-objects/views/object.html.twig' with { type: type, id: id, options: options } %}

    {%- else %}
        {% set options = options.collection ?? options %}

        {# Display specified directory #}
        {% include 'flex-objects/views/directory.html.twig' with { type: type, options: options } %}
    {%- endif %}

{%- else %}
    {# Display list of directories #}
    {% include 'flex-objects/views/directories.html.twig' with { options: options, list: list } %}
{% endif %}
", "flex-objects/page.html.twig", "C:\\xampp\\htdocs\\grav-admin-spa\\user\\plugins\\flex-objects\\templates\\flex-objects\\page.html.twig");
    }
}
