<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_f72a9ef0b13f994009640183a66b2e3f1e3ef2d08794bb936a0e865b174fb9e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57692efdebbe653ac990b58ae6f40630d7eb6826327a38a82e6914b1e5b2a852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57692efdebbe653ac990b58ae6f40630d7eb6826327a38a82e6914b1e5b2a852->enter($__internal_57692efdebbe653ac990b58ae6f40630d7eb6826327a38a82e6914b1e5b2a852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_ffed740ec74d88e58bcf8c951d3ae46cd8e75beb379925b44af9c67dbd67298c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffed740ec74d88e58bcf8c951d3ae46cd8e75beb379925b44af9c67dbd67298c->enter($__internal_ffed740ec74d88e58bcf8c951d3ae46cd8e75beb379925b44af9c67dbd67298c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57692efdebbe653ac990b58ae6f40630d7eb6826327a38a82e6914b1e5b2a852->leave($__internal_57692efdebbe653ac990b58ae6f40630d7eb6826327a38a82e6914b1e5b2a852_prof);

        
        $__internal_ffed740ec74d88e58bcf8c951d3ae46cd8e75beb379925b44af9c67dbd67298c->leave($__internal_ffed740ec74d88e58bcf8c951d3ae46cd8e75beb379925b44af9c67dbd67298c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f50db41815d758ceff629febbe69e55efcc63ff91d244d7ac46dac66fe9a9fc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f50db41815d758ceff629febbe69e55efcc63ff91d244d7ac46dac66fe9a9fc1->enter($__internal_f50db41815d758ceff629febbe69e55efcc63ff91d244d7ac46dac66fe9a9fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_42984adf1a04157c4c8b72854b011a700f95363d9fbd9e4dad8bac05a267869e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42984adf1a04157c4c8b72854b011a700f95363d9fbd9e4dad8bac05a267869e->enter($__internal_42984adf1a04157c4c8b72854b011a700f95363d9fbd9e4dad8bac05a267869e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_42984adf1a04157c4c8b72854b011a700f95363d9fbd9e4dad8bac05a267869e->leave($__internal_42984adf1a04157c4c8b72854b011a700f95363d9fbd9e4dad8bac05a267869e_prof);

        
        $__internal_f50db41815d758ceff629febbe69e55efcc63ff91d244d7ac46dac66fe9a9fc1->leave($__internal_f50db41815d758ceff629febbe69e55efcc63ff91d244d7ac46dac66fe9a9fc1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/kasia/public_html/SI/vendor/symfony/web-profiler-bundle/Resources/views/Collector/ajax.html.twig");
    }
}
