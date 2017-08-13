<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_6330de7023c19a37ad3a4df842766ea7198ed8ce6283f8b3382c31b4e8fc4e64 extends Twig_Template
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
        $__internal_a2166fc8263f6cf00e21faed055b4c0578c1301e6dffaf37df9990f6e7a585db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2166fc8263f6cf00e21faed055b4c0578c1301e6dffaf37df9990f6e7a585db->enter($__internal_a2166fc8263f6cf00e21faed055b4c0578c1301e6dffaf37df9990f6e7a585db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_4fa2fa73ac18521eac088ccd6b59df4328b9588e94250111294d4c5cfc665284 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fa2fa73ac18521eac088ccd6b59df4328b9588e94250111294d4c5cfc665284->enter($__internal_4fa2fa73ac18521eac088ccd6b59df4328b9588e94250111294d4c5cfc665284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2166fc8263f6cf00e21faed055b4c0578c1301e6dffaf37df9990f6e7a585db->leave($__internal_a2166fc8263f6cf00e21faed055b4c0578c1301e6dffaf37df9990f6e7a585db_prof);

        
        $__internal_4fa2fa73ac18521eac088ccd6b59df4328b9588e94250111294d4c5cfc665284->leave($__internal_4fa2fa73ac18521eac088ccd6b59df4328b9588e94250111294d4c5cfc665284_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0bbc39fb49d7ded8b5a960b121e92adf56c5823e84495fcaefa38c28821a3f6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bbc39fb49d7ded8b5a960b121e92adf56c5823e84495fcaefa38c28821a3f6e->enter($__internal_0bbc39fb49d7ded8b5a960b121e92adf56c5823e84495fcaefa38c28821a3f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_aa1760f77402c6d7aff925742603a73f561b7b68df87c8b58dbd3dc4d2e3174b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa1760f77402c6d7aff925742603a73f561b7b68df87c8b58dbd3dc4d2e3174b->enter($__internal_aa1760f77402c6d7aff925742603a73f561b7b68df87c8b58dbd3dc4d2e3174b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_aa1760f77402c6d7aff925742603a73f561b7b68df87c8b58dbd3dc4d2e3174b->leave($__internal_aa1760f77402c6d7aff925742603a73f561b7b68df87c8b58dbd3dc4d2e3174b_prof);

        
        $__internal_0bbc39fb49d7ded8b5a960b121e92adf56c5823e84495fcaefa38c28821a3f6e->leave($__internal_0bbc39fb49d7ded8b5a960b121e92adf56c5823e84495fcaefa38c28821a3f6e_prof);

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
