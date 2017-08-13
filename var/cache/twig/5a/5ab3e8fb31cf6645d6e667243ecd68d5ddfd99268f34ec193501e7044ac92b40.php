<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_9d22aec2d605d27ea876cb57c249051d85fe874c7ea140a6e9c3f5480b44e517 extends Twig_Template
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
        $__internal_00eeed94ca9501e24c263f5f5843a56df07f698ee8199b77a29f057045329be4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00eeed94ca9501e24c263f5f5843a56df07f698ee8199b77a29f057045329be4->enter($__internal_00eeed94ca9501e24c263f5f5843a56df07f698ee8199b77a29f057045329be4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_70052d80b539e125c8d3903449297a162b8dae0f1d5d74a385dfc144b5b0fec2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70052d80b539e125c8d3903449297a162b8dae0f1d5d74a385dfc144b5b0fec2->enter($__internal_70052d80b539e125c8d3903449297a162b8dae0f1d5d74a385dfc144b5b0fec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00eeed94ca9501e24c263f5f5843a56df07f698ee8199b77a29f057045329be4->leave($__internal_00eeed94ca9501e24c263f5f5843a56df07f698ee8199b77a29f057045329be4_prof);

        
        $__internal_70052d80b539e125c8d3903449297a162b8dae0f1d5d74a385dfc144b5b0fec2->leave($__internal_70052d80b539e125c8d3903449297a162b8dae0f1d5d74a385dfc144b5b0fec2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2d220f1914248b2cf676d2d60520998dd0b8e69f7bc3ef0783788aacfe27baea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d220f1914248b2cf676d2d60520998dd0b8e69f7bc3ef0783788aacfe27baea->enter($__internal_2d220f1914248b2cf676d2d60520998dd0b8e69f7bc3ef0783788aacfe27baea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5d02fcba6e133bb7728df2877b62edfa921d5d0aeb0524bac91caa892af2e199 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d02fcba6e133bb7728df2877b62edfa921d5d0aeb0524bac91caa892af2e199->enter($__internal_5d02fcba6e133bb7728df2877b62edfa921d5d0aeb0524bac91caa892af2e199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_5d02fcba6e133bb7728df2877b62edfa921d5d0aeb0524bac91caa892af2e199->leave($__internal_5d02fcba6e133bb7728df2877b62edfa921d5d0aeb0524bac91caa892af2e199_prof);

        
        $__internal_2d220f1914248b2cf676d2d60520998dd0b8e69f7bc3ef0783788aacfe27baea->leave($__internal_2d220f1914248b2cf676d2d60520998dd0b8e69f7bc3ef0783788aacfe27baea_prof);

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
