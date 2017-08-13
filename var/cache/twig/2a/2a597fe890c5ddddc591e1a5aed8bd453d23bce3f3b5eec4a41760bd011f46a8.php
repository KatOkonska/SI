<?php

/* welcome/index.html.twig */
class __TwigTemplate_912e43b1738ab9c281709a1541716c3a50d2a08a57248e83b87d90efa37a5a5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "welcome/index.html.twig", 1);
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
        $__internal_b109bbfd76fbf6d28640dafdba4e2b1e96f5cb07207ac86d922dd96105ed5b8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b109bbfd76fbf6d28640dafdba4e2b1e96f5cb07207ac86d922dd96105ed5b8c->enter($__internal_b109bbfd76fbf6d28640dafdba4e2b1e96f5cb07207ac86d922dd96105ed5b8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "welcome/index.html.twig"));

        $__internal_205a2f0dab45a95ce967d1405bbf1df2fdc42df89892e93020f636aecc7cd959 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_205a2f0dab45a95ce967d1405bbf1df2fdc42df89892e93020f636aecc7cd959->enter($__internal_205a2f0dab45a95ce967d1405bbf1df2fdc42df89892e93020f636aecc7cd959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "welcome/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b109bbfd76fbf6d28640dafdba4e2b1e96f5cb07207ac86d922dd96105ed5b8c->leave($__internal_b109bbfd76fbf6d28640dafdba4e2b1e96f5cb07207ac86d922dd96105ed5b8c_prof);

        
        $__internal_205a2f0dab45a95ce967d1405bbf1df2fdc42df89892e93020f636aecc7cd959->leave($__internal_205a2f0dab45a95ce967d1405bbf1df2fdc42df89892e93020f636aecc7cd959_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_1152a663b6fb2fed3b3ebc30d1206b8aad9a6b968ea7e6d3fa02430f816bf2f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1152a663b6fb2fed3b3ebc30d1206b8aad9a6b968ea7e6d3fa02430f816bf2f0->enter($__internal_1152a663b6fb2fed3b3ebc30d1206b8aad9a6b968ea7e6d3fa02430f816bf2f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_d3b6b4279b560dc71e8effd64f06591e44809b2657e491c98f81c13eb3006013 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3b6b4279b560dc71e8effd64f06591e44809b2657e491c98f81c13eb3006013->enter($__internal_d3b6b4279b560dc71e8effd64f06591e44809b2657e491c98f81c13eb3006013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
";
        
        $__internal_d3b6b4279b560dc71e8effd64f06591e44809b2657e491c98f81c13eb3006013->leave($__internal_d3b6b4279b560dc71e8effd64f06591e44809b2657e491c98f81c13eb3006013_prof);

        
        $__internal_1152a663b6fb2fed3b3ebc30d1206b8aad9a6b968ea7e6d3fa02430f816bf2f0->leave($__internal_1152a663b6fb2fed3b3ebc30d1206b8aad9a6b968ea7e6d3fa02430f816bf2f0_prof);

    }

    public function getTemplateName()
    {
        return "welcome/index.html.twig";
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

{% endblock %}
", "welcome/index.html.twig", "/home/kasia/public_html/SI/templates/welcome/index.html.twig");
    }
}
