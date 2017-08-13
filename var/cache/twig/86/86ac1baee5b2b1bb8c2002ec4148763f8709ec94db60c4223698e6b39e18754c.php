<?php

/* login.html.twig */
class __TwigTemplate_33632b6944271cdcf93a4e60fee26c05f44b0e38297c059ab9b16e511bb6f4d7 extends Twig_Template
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
        $__internal_e23d333b70c170e86de30e4a8c98ec8def835b23b4f82456d25af1634bc0dbdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e23d333b70c170e86de30e4a8c98ec8def835b23b4f82456d25af1634bc0dbdd->enter($__internal_e23d333b70c170e86de30e4a8c98ec8def835b23b4f82456d25af1634bc0dbdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.html.twig"));

        $__internal_cafb84bfb6fcb907dc367fa947a36b86d4015f95b8fc4d061658682065c0900c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cafb84bfb6fcb907dc367fa947a36b86d4015f95b8fc4d061658682065c0900c->enter($__internal_cafb84bfb6fcb907dc367fa947a36b86d4015f95b8fc4d061658682065c0900c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e23d333b70c170e86de30e4a8c98ec8def835b23b4f82456d25af1634bc0dbdd->leave($__internal_e23d333b70c170e86de30e4a8c98ec8def835b23b4f82456d25af1634bc0dbdd_prof);

        
        $__internal_cafb84bfb6fcb907dc367fa947a36b86d4015f95b8fc4d061658682065c0900c->leave($__internal_cafb84bfb6fcb907dc367fa947a36b86d4015f95b8fc4d061658682065c0900c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3de25320147df3cc94e0c23797f464d9326a6e7866891d0853f1573962fb0a06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3de25320147df3cc94e0c23797f464d9326a6e7866891d0853f1573962fb0a06->enter($__internal_3de25320147df3cc94e0c23797f464d9326a6e7866891d0853f1573962fb0a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e828f22138dfdfeea45d58bd7f7ec638ad087d8714d39cd6c92ce742a7d78695 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e828f22138dfdfeea45d58bd7f7ec638ad087d8714d39cd6c92ce742a7d78695->enter($__internal_e828f22138dfdfeea45d58bd7f7ec638ad087d8714d39cd6c92ce742a7d78695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "'Zaloguj sie'";
        
        $__internal_e828f22138dfdfeea45d58bd7f7ec638ad087d8714d39cd6c92ce742a7d78695->leave($__internal_e828f22138dfdfeea45d58bd7f7ec638ad087d8714d39cd6c92ce742a7d78695_prof);

        
        $__internal_3de25320147df3cc94e0c23797f464d9326a6e7866891d0853f1573962fb0a06->leave($__internal_3de25320147df3cc94e0c23797f464d9326a6e7866891d0853f1573962fb0a06_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_7a4e6c788f28a8de80a6bfc7adf1af5fa0073e26c143d9eca830593c145db130 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a4e6c788f28a8de80a6bfc7adf1af5fa0073e26c143d9eca830593c145db130->enter($__internal_7a4e6c788f28a8de80a6bfc7adf1af5fa0073e26c143d9eca830593c145db130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_13eb377163d54918202c02fa1e0d78f3cd3e635cf778be2739b25712e5b32ced = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13eb377163d54918202c02fa1e0d78f3cd3e635cf778be2739b25712e5b32ced->enter($__internal_13eb377163d54918202c02fa1e0d78f3cd3e635cf778be2739b25712e5b32ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_13eb377163d54918202c02fa1e0d78f3cd3e635cf778be2739b25712e5b32ced->leave($__internal_13eb377163d54918202c02fa1e0d78f3cd3e635cf778be2739b25712e5b32ced_prof);

        
        $__internal_7a4e6c788f28a8de80a6bfc7adf1af5fa0073e26c143d9eca830593c145db130->leave($__internal_7a4e6c788f28a8de80a6bfc7adf1af5fa0073e26c143d9eca830593c145db130_prof);

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
