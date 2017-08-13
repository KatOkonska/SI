<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0d48766c4257bfcc4a5def2ccaa2b47689f3f0249b07893143fadbf9d225f3b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_647a773eacbd358519b3dbcd6b6b0d4cb57fe5c903117e50af942d057bad6627 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_647a773eacbd358519b3dbcd6b6b0d4cb57fe5c903117e50af942d057bad6627->enter($__internal_647a773eacbd358519b3dbcd6b6b0d4cb57fe5c903117e50af942d057bad6627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_28dda4be00fd9ae600612298a3a0782e8f90421feee58b18950262b4e5c293a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28dda4be00fd9ae600612298a3a0782e8f90421feee58b18950262b4e5c293a6->enter($__internal_28dda4be00fd9ae600612298a3a0782e8f90421feee58b18950262b4e5c293a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_647a773eacbd358519b3dbcd6b6b0d4cb57fe5c903117e50af942d057bad6627->leave($__internal_647a773eacbd358519b3dbcd6b6b0d4cb57fe5c903117e50af942d057bad6627_prof);

        
        $__internal_28dda4be00fd9ae600612298a3a0782e8f90421feee58b18950262b4e5c293a6->leave($__internal_28dda4be00fd9ae600612298a3a0782e8f90421feee58b18950262b4e5c293a6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b34b0974094f2d12896f35808aadd9dbf7ce3a3642f0ba3e9c770199873884c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b34b0974094f2d12896f35808aadd9dbf7ce3a3642f0ba3e9c770199873884c6->enter($__internal_b34b0974094f2d12896f35808aadd9dbf7ce3a3642f0ba3e9c770199873884c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3b2fa9b5855f446874dd89bb5ab2c44d43e88f0761f41e977e845e1f956ef16f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b2fa9b5855f446874dd89bb5ab2c44d43e88f0761f41e977e845e1f956ef16f->enter($__internal_3b2fa9b5855f446874dd89bb5ab2c44d43e88f0761f41e977e845e1f956ef16f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3b2fa9b5855f446874dd89bb5ab2c44d43e88f0761f41e977e845e1f956ef16f->leave($__internal_3b2fa9b5855f446874dd89bb5ab2c44d43e88f0761f41e977e845e1f956ef16f_prof);

        
        $__internal_b34b0974094f2d12896f35808aadd9dbf7ce3a3642f0ba3e9c770199873884c6->leave($__internal_b34b0974094f2d12896f35808aadd9dbf7ce3a3642f0ba3e9c770199873884c6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3e7156d5d5e74b88c087e674d5a0f94653be923f47018cd54ec3f05675a47a70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e7156d5d5e74b88c087e674d5a0f94653be923f47018cd54ec3f05675a47a70->enter($__internal_3e7156d5d5e74b88c087e674d5a0f94653be923f47018cd54ec3f05675a47a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f781bde5b30d3f869900f64017d81d29a957a8a034398dea5817b590aa3ad37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f781bde5b30d3f869900f64017d81d29a957a8a034398dea5817b590aa3ad37->enter($__internal_6f781bde5b30d3f869900f64017d81d29a957a8a034398dea5817b590aa3ad37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6f781bde5b30d3f869900f64017d81d29a957a8a034398dea5817b590aa3ad37->leave($__internal_6f781bde5b30d3f869900f64017d81d29a957a8a034398dea5817b590aa3ad37_prof);

        
        $__internal_3e7156d5d5e74b88c087e674d5a0f94653be923f47018cd54ec3f05675a47a70->leave($__internal_3e7156d5d5e74b88c087e674d5a0f94653be923f47018cd54ec3f05675a47a70_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_256bed753517cd3476295c7fa3c47e6c81fabd44a0efd5fe0f6cdab0dd52587e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_256bed753517cd3476295c7fa3c47e6c81fabd44a0efd5fe0f6cdab0dd52587e->enter($__internal_256bed753517cd3476295c7fa3c47e6c81fabd44a0efd5fe0f6cdab0dd52587e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1233903a0c2377fca47224300264c9eb1f54580d9564d50662e06911db386ca4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1233903a0c2377fca47224300264c9eb1f54580d9564d50662e06911db386ca4->enter($__internal_1233903a0c2377fca47224300264c9eb1f54580d9564d50662e06911db386ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1233903a0c2377fca47224300264c9eb1f54580d9564d50662e06911db386ca4->leave($__internal_1233903a0c2377fca47224300264c9eb1f54580d9564d50662e06911db386ca4_prof);

        
        $__internal_256bed753517cd3476295c7fa3c47e6c81fabd44a0efd5fe0f6cdab0dd52587e->leave($__internal_256bed753517cd3476295c7fa3c47e6c81fabd44a0efd5fe0f6cdab0dd52587e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/kasia/public_html/SI/vendor/symfony/web-profiler-bundle/Resources/views/Collector/router.html.twig");
    }
}
