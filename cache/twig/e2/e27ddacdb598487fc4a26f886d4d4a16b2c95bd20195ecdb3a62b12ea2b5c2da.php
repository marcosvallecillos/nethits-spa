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

/* flex-objects/views/directories.html.twig */
class __TwigTemplate_17f47dbe2703e6cdd7d3a145cc46e74aefda5b857a7b32f056826300716faa68 extends \Twig\Template
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
        // line 2
        echo "
";
        // line 3
        $context["flex"] = $this->getAttribute(($context["grav"] ?? null), "get", [0 => "flex_objects"], "method");
        // line 4
        $context["directory_url"] = $this->getAttribute(($context["page"] ?? null), "route", [], "method");
        // line 5
        $context["list"] = (($context["list"]) ?? ($this->getAttribute(($context["options"] ?? null), "list", [])));
        // line 6
        $context["directories"] = ((($context["list"] ?? null)) ? ($this->getAttribute(($context["flex"] ?? null), "directories", [0 => $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->arrayFilter(($context["list"] ?? null))], "method")) : ($this->getAttribute(($context["flex"] ?? null), "defaultDirectories", [], "method")));
        // line 7
        $context["layout"] = (($this->getAttribute(($context["options"] ?? null), "layout", [])) ? ($this->getAttribute(($context["options"] ?? null), "layout", [])) : ("default"));
        // line 8
        echo "
";
        // line 9
        $this->loadTemplate([0 => (("flex-objects/directories/" .         // line 10
($context["layout"] ?? null)) . ".html.twig"), 1 => "flex-objects/directories/default.html.twig"], "flex-objects/views/directories.html.twig", 9)->display($context);
    }

    public function getTemplateName()
    {
        return "flex-objects/views/directories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 10,  46 => 9,  43 => 8,  41 => 7,  39 => 6,  37 => 5,  35 => 4,  33 => 3,  30 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# flex-objects/views/directories.html.twig #}

{% set flex = grav.get('flex_objects') %}
{% set directory_url = page.route() %}
{% set list = list ?? options.list %}
{% set directories = list ? flex.directories(list|array) : flex.defaultDirectories() %}
{% set layout = options.layout ?: 'default' %}

{% include [
    'flex-objects/directories/' ~ layout ~ '.html.twig',
    'flex-objects/directories/default.html.twig'
] %}
", "flex-objects/views/directories.html.twig", "C:\\xampp\\htdocs\\grav-admin-spa\\user\\plugins\\flex-objects\\templates\\flex-objects\\views\\directories.html.twig");
    }
}
