<?php

/* index.html.twig */
class __TwigTemplate_2b52a9a31ced35cd5c961fff8dcbb049cea762808ffdbae1f0fdf2239d610be9 extends Twig_Template
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
        $__internal_f9fb329910085ec876516284d8e7d314435949a932ca212e0e363cfc283aae05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9fb329910085ec876516284d8e7d314435949a932ca212e0e363cfc283aae05->enter($__internal_f9fb329910085ec876516284d8e7d314435949a932ca212e0e363cfc283aae05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_1e197bfa4ea38b0a44814fb306841e04a505aa0391066f3409bdee1d47649142 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e197bfa4ea38b0a44814fb306841e04a505aa0391066f3409bdee1d47649142->enter($__internal_1e197bfa4ea38b0a44814fb306841e04a505aa0391066f3409bdee1d47649142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9fb329910085ec876516284d8e7d314435949a932ca212e0e363cfc283aae05->leave($__internal_f9fb329910085ec876516284d8e7d314435949a932ca212e0e363cfc283aae05_prof);

        
        $__internal_1e197bfa4ea38b0a44814fb306841e04a505aa0391066f3409bdee1d47649142->leave($__internal_1e197bfa4ea38b0a44814fb306841e04a505aa0391066f3409bdee1d47649142_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_9f4bfd3ac55e43ea78aac8da957642b7ca2a5c3e446d8f8f34a86458dfa0c4c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f4bfd3ac55e43ea78aac8da957642b7ca2a5c3e446d8f8f34a86458dfa0c4c5->enter($__internal_9f4bfd3ac55e43ea78aac8da957642b7ca2a5c3e446d8f8f34a86458dfa0c4c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3cc88d278407328b4588697d2d0310683b28ad304c792f68ad6c86a966fb5ddb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cc88d278407328b4588697d2d0310683b28ad304c792f68ad6c86a966fb5ddb->enter($__internal_3cc88d278407328b4588697d2d0310683b28ad304c792f68ad6c86a966fb5ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    Witaj ";
        echo " !
";
        
        $__internal_3cc88d278407328b4588697d2d0310683b28ad304c792f68ad6c86a966fb5ddb->leave($__internal_3cc88d278407328b4588697d2d0310683b28ad304c792f68ad6c86a966fb5ddb_prof);

        
        $__internal_9f4bfd3ac55e43ea78aac8da957642b7ca2a5c3e446d8f8f34a86458dfa0c4c5->leave($__internal_9f4bfd3ac55e43ea78aac8da957642b7ca2a5c3e446d8f8f34a86458dfa0c4c5_prof);

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
