<?php

/* index.html.twig */
class __TwigTemplate_14793d0d9d14363af6f57b9e3a0f412c9b2f231a4d59cdc25cac031a04a0c351 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_624c960b8218c1ce196fd0d1af2e977cb0a9102607d317faad1b5d94add8b300 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_624c960b8218c1ce196fd0d1af2e977cb0a9102607d317faad1b5d94add8b300->enter($__internal_624c960b8218c1ce196fd0d1af2e977cb0a9102607d317faad1b5d94add8b300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_fd64b990684e4a403e879ae9b39fb85f6718acfdd910338135fd23b63a3e51e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd64b990684e4a403e879ae9b39fb85f6718acfdd910338135fd23b63a3e51e2->enter($__internal_fd64b990684e4a403e879ae9b39fb85f6718acfdd910338135fd23b63a3e51e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_624c960b8218c1ce196fd0d1af2e977cb0a9102607d317faad1b5d94add8b300->leave($__internal_624c960b8218c1ce196fd0d1af2e977cb0a9102607d317faad1b5d94add8b300_prof);

        
        $__internal_fd64b990684e4a403e879ae9b39fb85f6718acfdd910338135fd23b63a3e51e2->leave($__internal_fd64b990684e4a403e879ae9b39fb85f6718acfdd910338135fd23b63a3e51e2_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_9df01ff315fccce49adfecb8e28a184573d39d5a8ff101ffc0aa93620dec92e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9df01ff315fccce49adfecb8e28a184573d39d5a8ff101ffc0aa93620dec92e8->enter($__internal_9df01ff315fccce49adfecb8e28a184573d39d5a8ff101ffc0aa93620dec92e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_4d1e714d843230e06824a985605c8b09634e0f53958d590e538f7ee2a73660b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d1e714d843230e06824a985605c8b09634e0f53958d590e538f7ee2a73660b1->enter($__internal_4d1e714d843230e06824a985605c8b09634e0f53958d590e538f7ee2a73660b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    Witaj ";
        echo " !
";
        
        $__internal_4d1e714d843230e06824a985605c8b09634e0f53958d590e538f7ee2a73660b1->leave($__internal_4d1e714d843230e06824a985605c8b09634e0f53958d590e538f7ee2a73660b1_prof);

        
        $__internal_9df01ff315fccce49adfecb8e28a184573d39d5a8ff101ffc0aa93620dec92e8->leave($__internal_9df01ff315fccce49adfecb8e28a184573d39d5a8ff101ffc0aa93620dec92e8_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}

{% block content %}
    Witaj {#name#} !
{% endblock %}
", "index.html.twig", "/home/kasia/public_html/SI/templates/index.html.twig");
    }
}
