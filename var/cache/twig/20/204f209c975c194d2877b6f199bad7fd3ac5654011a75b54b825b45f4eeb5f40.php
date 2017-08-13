<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d084da3536a0ad6c39591ecc175cffc1a9132af4dc1bfbd8fc2ff52645df8bd7 extends Twig_Template
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
        $__internal_6fc4c60182bd768dc039634ed90d7c41ad1ba2efc6e4ee3dde2ff997c5ca320c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fc4c60182bd768dc039634ed90d7c41ad1ba2efc6e4ee3dde2ff997c5ca320c->enter($__internal_6fc4c60182bd768dc039634ed90d7c41ad1ba2efc6e4ee3dde2ff997c5ca320c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ed0c372ed44eaa5b90d1f0090dea96eb98cefe7acab559119c8983ab8b0095b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed0c372ed44eaa5b90d1f0090dea96eb98cefe7acab559119c8983ab8b0095b0->enter($__internal_ed0c372ed44eaa5b90d1f0090dea96eb98cefe7acab559119c8983ab8b0095b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fc4c60182bd768dc039634ed90d7c41ad1ba2efc6e4ee3dde2ff997c5ca320c->leave($__internal_6fc4c60182bd768dc039634ed90d7c41ad1ba2efc6e4ee3dde2ff997c5ca320c_prof);

        
        $__internal_ed0c372ed44eaa5b90d1f0090dea96eb98cefe7acab559119c8983ab8b0095b0->leave($__internal_ed0c372ed44eaa5b90d1f0090dea96eb98cefe7acab559119c8983ab8b0095b0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1dd2a52b9c951bd060469d27c85a5480a7060e4abb6181a478be71dda0719121 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dd2a52b9c951bd060469d27c85a5480a7060e4abb6181a478be71dda0719121->enter($__internal_1dd2a52b9c951bd060469d27c85a5480a7060e4abb6181a478be71dda0719121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ba855857f93f2dc896e6eae27274793b0936deac2174c88cc1f87605fc323579 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba855857f93f2dc896e6eae27274793b0936deac2174c88cc1f87605fc323579->enter($__internal_ba855857f93f2dc896e6eae27274793b0936deac2174c88cc1f87605fc323579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ba855857f93f2dc896e6eae27274793b0936deac2174c88cc1f87605fc323579->leave($__internal_ba855857f93f2dc896e6eae27274793b0936deac2174c88cc1f87605fc323579_prof);

        
        $__internal_1dd2a52b9c951bd060469d27c85a5480a7060e4abb6181a478be71dda0719121->leave($__internal_1dd2a52b9c951bd060469d27c85a5480a7060e4abb6181a478be71dda0719121_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_af11c5fb9e30d1601f8825e68fae4bab8e075b5c50b5cabbe9f0fbcb23abc588 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af11c5fb9e30d1601f8825e68fae4bab8e075b5c50b5cabbe9f0fbcb23abc588->enter($__internal_af11c5fb9e30d1601f8825e68fae4bab8e075b5c50b5cabbe9f0fbcb23abc588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_be6021507490339f58def50fed782a1292ec2e40abe3a0ca7550a412f7280da5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be6021507490339f58def50fed782a1292ec2e40abe3a0ca7550a412f7280da5->enter($__internal_be6021507490339f58def50fed782a1292ec2e40abe3a0ca7550a412f7280da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_be6021507490339f58def50fed782a1292ec2e40abe3a0ca7550a412f7280da5->leave($__internal_be6021507490339f58def50fed782a1292ec2e40abe3a0ca7550a412f7280da5_prof);

        
        $__internal_af11c5fb9e30d1601f8825e68fae4bab8e075b5c50b5cabbe9f0fbcb23abc588->leave($__internal_af11c5fb9e30d1601f8825e68fae4bab8e075b5c50b5cabbe9f0fbcb23abc588_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a5fe4a0d9d87c82ed639d025b572bbd35ddaaccea058e436d5fd293840018e5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5fe4a0d9d87c82ed639d025b572bbd35ddaaccea058e436d5fd293840018e5b->enter($__internal_a5fe4a0d9d87c82ed639d025b572bbd35ddaaccea058e436d5fd293840018e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_98a40af6e5550661ab1c19bdf45bbee9fb4f6123987943e453097890b316cf08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98a40af6e5550661ab1c19bdf45bbee9fb4f6123987943e453097890b316cf08->enter($__internal_98a40af6e5550661ab1c19bdf45bbee9fb4f6123987943e453097890b316cf08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_98a40af6e5550661ab1c19bdf45bbee9fb4f6123987943e453097890b316cf08->leave($__internal_98a40af6e5550661ab1c19bdf45bbee9fb4f6123987943e453097890b316cf08_prof);

        
        $__internal_a5fe4a0d9d87c82ed639d025b572bbd35ddaaccea058e436d5fd293840018e5b->leave($__internal_a5fe4a0d9d87c82ed639d025b572bbd35ddaaccea058e436d5fd293840018e5b_prof);

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
