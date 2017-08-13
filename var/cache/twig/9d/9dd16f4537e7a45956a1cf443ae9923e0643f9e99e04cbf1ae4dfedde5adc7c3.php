<?php

/* login.html.twig */
class __TwigTemplate_e70c33c4ab03052d68c83337258ee5d4238fd04939d651fb1bea8bd4120f2562 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b95f61ebef2da2e6847baf324f47c23c3d41f5041bd7cf33b12b5d06ca701529 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b95f61ebef2da2e6847baf324f47c23c3d41f5041bd7cf33b12b5d06ca701529->enter($__internal_b95f61ebef2da2e6847baf324f47c23c3d41f5041bd7cf33b12b5d06ca701529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.html.twig"));

        $__internal_2a660f1d903910b237c4b381af6db98b8d5e876519087acff9d3df3dfdc82349 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a660f1d903910b237c4b381af6db98b8d5e876519087acff9d3df3dfdc82349->enter($__internal_2a660f1d903910b237c4b381af6db98b8d5e876519087acff9d3df3dfdc82349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b95f61ebef2da2e6847baf324f47c23c3d41f5041bd7cf33b12b5d06ca701529->leave($__internal_b95f61ebef2da2e6847baf324f47c23c3d41f5041bd7cf33b12b5d06ca701529_prof);

        
        $__internal_2a660f1d903910b237c4b381af6db98b8d5e876519087acff9d3df3dfdc82349->leave($__internal_2a660f1d903910b237c4b381af6db98b8d5e876519087acff9d3df3dfdc82349_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c1f0ba0174b5294c8fdfeb6abd914829e419a01745848271cc4bd75857a4d1e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1f0ba0174b5294c8fdfeb6abd914829e419a01745848271cc4bd75857a4d1e6->enter($__internal_c1f0ba0174b5294c8fdfeb6abd914829e419a01745848271cc4bd75857a4d1e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_756b3e2cc4b454f30d2c0e4d0245900deecd9f8ce2466ad5ef09c083ab4f4c76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_756b3e2cc4b454f30d2c0e4d0245900deecd9f8ce2466ad5ef09c083ab4f4c76->enter($__internal_756b3e2cc4b454f30d2c0e4d0245900deecd9f8ce2466ad5ef09c083ab4f4c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "'Zaloguj sie'";
        
        $__internal_756b3e2cc4b454f30d2c0e4d0245900deecd9f8ce2466ad5ef09c083ab4f4c76->leave($__internal_756b3e2cc4b454f30d2c0e4d0245900deecd9f8ce2466ad5ef09c083ab4f4c76_prof);

        
        $__internal_c1f0ba0174b5294c8fdfeb6abd914829e419a01745848271cc4bd75857a4d1e6->leave($__internal_c1f0ba0174b5294c8fdfeb6abd914829e419a01745848271cc4bd75857a4d1e6_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_c7c39329f31cea1026a5f265d90ee14dadacafeeecb1e16fef7fec8a0afac261 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7c39329f31cea1026a5f265d90ee14dadacafeeecb1e16fef7fec8a0afac261->enter($__internal_c7c39329f31cea1026a5f265d90ee14dadacafeeecb1e16fef7fec8a0afac261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f7ac8df66d5c7d0a6494ce547244adee78645f8c1c8c1cc861e32ffacf08e565 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7ac8df66d5c7d0a6494ce547244adee78645f8c1c8c1cc861e32ffacf08e565->enter($__internal_f7ac8df66d5c7d0a6494ce547244adee78645f8c1c8c1cc861e32ffacf08e565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1>Czesc, dzialam!</h1>
    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("login")));
        echo "
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <input type=\"submit\" value=\"Zaloguj\" class=\"btn btn-success\" />
    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_f7ac8df66d5c7d0a6494ce547244adee78645f8c1c8c1cc861e32ffacf08e565->leave($__internal_f7ac8df66d5c7d0a6494ce547244adee78645f8c1c8c1cc861e32ffacf08e565_prof);

        
        $__internal_c7c39329f31cea1026a5f265d90ee14dadacafeeecb1e16fef7fec8a0afac261->leave($__internal_c7c39329f31cea1026a5f265d90ee14dadacafeeecb1e16fef7fec8a0afac261_prof);

    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 10,  75 => 8,  71 => 7,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block title %}'Zaloguj sie'{% endblock %}

{% block content %}
    <h1>Czesc, dzialam!</h1>
    {{ form_start(form, { method: 'post', action: url('login') }) }}
    {{ form_widget(form) }}
    <input type=\"submit\" value=\"Zaloguj\" class=\"btn btn-success\" />
    {{ form_end(form) }}
{% endblock %}", "login.html.twig", "/home/kasia/public_html/SI/templates/login.html.twig");
    }
}
