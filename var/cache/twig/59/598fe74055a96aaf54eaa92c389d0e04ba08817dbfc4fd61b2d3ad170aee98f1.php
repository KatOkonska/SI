<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_842c0b7b10ecd63f7c790b22189570dad56a1a8b465a04b909181745843be350 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_7f78958f75c49ac0382d480bb921cbb192485720af3a48a751685c2768c10137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f78958f75c49ac0382d480bb921cbb192485720af3a48a751685c2768c10137->enter($__internal_7f78958f75c49ac0382d480bb921cbb192485720af3a48a751685c2768c10137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_8d5b38ffb39eaf23d5b4f0ce48dad9fadd0b67f1936fe969b4d2f06a641f34af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d5b38ffb39eaf23d5b4f0ce48dad9fadd0b67f1936fe969b4d2f06a641f34af->enter($__internal_8d5b38ffb39eaf23d5b4f0ce48dad9fadd0b67f1936fe969b4d2f06a641f34af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f78958f75c49ac0382d480bb921cbb192485720af3a48a751685c2768c10137->leave($__internal_7f78958f75c49ac0382d480bb921cbb192485720af3a48a751685c2768c10137_prof);

        
        $__internal_8d5b38ffb39eaf23d5b4f0ce48dad9fadd0b67f1936fe969b4d2f06a641f34af->leave($__internal_8d5b38ffb39eaf23d5b4f0ce48dad9fadd0b67f1936fe969b4d2f06a641f34af_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7430cd765a73c90c8f99d82c7b65b30611a119a674ad76e260f392bfececdbdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7430cd765a73c90c8f99d82c7b65b30611a119a674ad76e260f392bfececdbdf->enter($__internal_7430cd765a73c90c8f99d82c7b65b30611a119a674ad76e260f392bfececdbdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_746752532cdc6942b02a7c5514096fd18cb4542e7a029c75173da8ac3921bfca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_746752532cdc6942b02a7c5514096fd18cb4542e7a029c75173da8ac3921bfca->enter($__internal_746752532cdc6942b02a7c5514096fd18cb4542e7a029c75173da8ac3921bfca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_746752532cdc6942b02a7c5514096fd18cb4542e7a029c75173da8ac3921bfca->leave($__internal_746752532cdc6942b02a7c5514096fd18cb4542e7a029c75173da8ac3921bfca_prof);

        
        $__internal_7430cd765a73c90c8f99d82c7b65b30611a119a674ad76e260f392bfececdbdf->leave($__internal_7430cd765a73c90c8f99d82c7b65b30611a119a674ad76e260f392bfececdbdf_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a0f02e6ac91028ea73200f1a1e8abed80fd3b80bfe2e479c10f3121e87a5f30d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0f02e6ac91028ea73200f1a1e8abed80fd3b80bfe2e479c10f3121e87a5f30d->enter($__internal_a0f02e6ac91028ea73200f1a1e8abed80fd3b80bfe2e479c10f3121e87a5f30d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_51a4aea5a3acf7ca2f0493288421785530df65afeb23cfcaf3981aa5fa5b4455 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51a4aea5a3acf7ca2f0493288421785530df65afeb23cfcaf3981aa5fa5b4455->enter($__internal_51a4aea5a3acf7ca2f0493288421785530df65afeb23cfcaf3981aa5fa5b4455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_51a4aea5a3acf7ca2f0493288421785530df65afeb23cfcaf3981aa5fa5b4455->leave($__internal_51a4aea5a3acf7ca2f0493288421785530df65afeb23cfcaf3981aa5fa5b4455_prof);

        
        $__internal_a0f02e6ac91028ea73200f1a1e8abed80fd3b80bfe2e479c10f3121e87a5f30d->leave($__internal_a0f02e6ac91028ea73200f1a1e8abed80fd3b80bfe2e479c10f3121e87a5f30d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2a8eca562bc9b493e616d38407c9c6c053376d9105a737ba89dfcd26dfd6e9e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a8eca562bc9b493e616d38407c9c6c053376d9105a737ba89dfcd26dfd6e9e0->enter($__internal_2a8eca562bc9b493e616d38407c9c6c053376d9105a737ba89dfcd26dfd6e9e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_558d205160739497a76c2f43e1baacf0c8fb10edd204122366cf04092a6c613a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_558d205160739497a76c2f43e1baacf0c8fb10edd204122366cf04092a6c613a->enter($__internal_558d205160739497a76c2f43e1baacf0c8fb10edd204122366cf04092a6c613a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_558d205160739497a76c2f43e1baacf0c8fb10edd204122366cf04092a6c613a->leave($__internal_558d205160739497a76c2f43e1baacf0c8fb10edd204122366cf04092a6c613a_prof);

        
        $__internal_2a8eca562bc9b493e616d38407c9c6c053376d9105a737ba89dfcd26dfd6e9e0->leave($__internal_2a8eca562bc9b493e616d38407c9c6c053376d9105a737ba89dfcd26dfd6e9e0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/kasia/public_html/SI/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.html.twig");
    }
}
