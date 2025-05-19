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

/* flex-objects/directories/default.html.twig */
class __TwigTemplate_2d76817b02e9dc31f9ac6e98d1f8d40565fae34f037408d44ceda1b8469a9c40 extends \Twig\Template
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
        // line 1
        echo "<table id=\"data-table\" class=\"table\">
    <colgroup>
        <col width=\"20\" />
        <col width=\"80\" />
    </colgroup>
    <thead>
    <tr>
        <th>Type</th>
        <th>Description</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["directories"] ?? null));
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
        foreach ($context['_seq'] as $context["type"] => $context["directory"]) {
            // line 14
            $context["title"] = ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["options"] ?? null), "directories", [], "any", false, true), $context["type"], [], "array", false, true), "title", [], "array", true, true) &&  !(null === $this->getAttribute($this->getAttribute($this->getAttribute(($context["options"] ?? null), "directories", [], "any", false, true), $context["type"], [], "array", false, true), "title", [], "array")))) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["options"] ?? null), "directories", [], "any", false, true), $context["type"], [], "array", false, true), "title", [], "array")) : (((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["options"] ?? null), "directories", [], "any", false, true), $context["type"], [], "array", false, true), "collection", [], "array", false, true), "title", [], "array", true, true) &&  !(null === $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["options"] ?? null), "directories", [], "any", false, true), $context["type"], [], "array", false, true), "collection", [], "array", false, true), "title", [], "array")))) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["options"] ?? null), "directories", [], "any", false, true), $context["type"], [], "array", false, true), "collection", [], "array", false, true), "title", [], "array")) : ($this->getAttribute($context["directory"], "title", [])))));
            // line 15
            if (preg_match("/{/", ($context["title"] ?? null))) {
                // line 16
                $context["title"] = twig_trim_filter(twig_include($this->env, $context, twig_template_from_string($this->env, ($context["title"] ?? null), "collection title template")));
            }
            // line 18
            $context["description"] = ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["options"] ?? null), "directories", [], "any", false, true), $context["type"], [], "array", false, true), "description", [], "array", true, true) &&  !(null === $this->getAttribute($this->getAttribute($this->getAttribute(($context["options"] ?? null), "directories", [], "any", false, true), $context["type"], [], "array", false, true), "description", [], "array")))) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["options"] ?? null), "directories", [], "any", false, true), $context["type"], [], "array", false, true), "description", [], "array")) : (((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["options"] ?? null), "directories", [], "any", false, true), $context["type"], [], "array", false, true), "collection", [], "array", false, true), "description", [], "array", true, true) &&  !(null === $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["options"] ?? null), "directories", [], "any", false, true), $context["type"], [], "array", false, true), "collection", [], "array", false, true), "description", [], "array")))) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["options"] ?? null), "directories", [], "any", false, true), $context["type"], [], "array", false, true), "collection", [], "array", false, true), "description", [], "array")) : ($this->getAttribute($context["directory"], "description", [])))));
            // line 20
            echo "<tr>
            <td>
                <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->urlFunc(((($context["directory_url"] ?? null) . "/directory:") . $context["type"])));
            echo "\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null));
            echo "</a>
            </td>
            <td>
                ";
            // line 25
            echo twig_escape_filter($this->env, ($context["description"] ?? null));
            echo "
            </td>
        </tr>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['directory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "flex-objects/directories/default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 29,  82 => 25,  74 => 22,  70 => 20,  68 => 18,  65 => 16,  63 => 15,  61 => 14,  44 => 13,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<table id=\"data-table\" class=\"table\">
    <colgroup>
        <col width=\"20\" />
        <col width=\"80\" />
    </colgroup>
    <thead>
    <tr>
        <th>Type</th>
        <th>Description</th>
    </tr>
    </thead>
    <tbody>
    {% for type, directory in directories %}
        {%- set title = options.directories[type]['title'] ?? options.directories[type]['collection']['title'] ?? directory.title -%}
        {%- if title matches '/\\{/' -%}
            {%- set title = include(template_from_string(title, 'collection title template'))|trim -%}
        {%- endif -%}
        {%- set description = options.directories[type]['description'] ?? options.directories[type]['collection']['description'] ?? directory.description -%}

        <tr>
            <td>
                <a href=\"{{ url(directory_url ~ '/directory:' ~ type)|e }}\">{{ title|e }}</a>
            </td>
            <td>
                {{ description|e }}
            </td>
        </tr>
    {% endfor %}
    </tbody>
</table>
", "flex-objects/directories/default.html.twig", "C:\\xampp\\htdocs\\grav-admin-spa\\user\\plugins\\flex-objects\\templates\\flex-objects\\directories\\default.html.twig");
    }
}
