<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_18d2f1af18cb3c4ec61a099a0f90e20093f37304f7b98030428078861264e626 extends Twig_Template
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
        $__internal_9ddb80baf7637016ea15fb409f518c720d5dd781dd5dcbb28579e0c670d2945e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ddb80baf7637016ea15fb409f518c720d5dd781dd5dcbb28579e0c670d2945e->enter($__internal_9ddb80baf7637016ea15fb409f518c720d5dd781dd5dcbb28579e0c670d2945e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_de804d71a5816ef87b6b05421b97e69bf13a152cd985df1dfc1455d20326cf45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de804d71a5816ef87b6b05421b97e69bf13a152cd985df1dfc1455d20326cf45->enter($__internal_de804d71a5816ef87b6b05421b97e69bf13a152cd985df1dfc1455d20326cf45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ddb80baf7637016ea15fb409f518c720d5dd781dd5dcbb28579e0c670d2945e->leave($__internal_9ddb80baf7637016ea15fb409f518c720d5dd781dd5dcbb28579e0c670d2945e_prof);

        
        $__internal_de804d71a5816ef87b6b05421b97e69bf13a152cd985df1dfc1455d20326cf45->leave($__internal_de804d71a5816ef87b6b05421b97e69bf13a152cd985df1dfc1455d20326cf45_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e4673f12dced3a0cb4f97d101b704307599c065c82fbf60898a643aa14d6490d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4673f12dced3a0cb4f97d101b704307599c065c82fbf60898a643aa14d6490d->enter($__internal_e4673f12dced3a0cb4f97d101b704307599c065c82fbf60898a643aa14d6490d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_00a29b163de27468b5135cd958c6f89de36985504e69ebed59b9434cb36cb72c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00a29b163de27468b5135cd958c6f89de36985504e69ebed59b9434cb36cb72c->enter($__internal_00a29b163de27468b5135cd958c6f89de36985504e69ebed59b9434cb36cb72c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_00a29b163de27468b5135cd958c6f89de36985504e69ebed59b9434cb36cb72c->leave($__internal_00a29b163de27468b5135cd958c6f89de36985504e69ebed59b9434cb36cb72c_prof);

        
        $__internal_e4673f12dced3a0cb4f97d101b704307599c065c82fbf60898a643aa14d6490d->leave($__internal_e4673f12dced3a0cb4f97d101b704307599c065c82fbf60898a643aa14d6490d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f605d099890c119642a1806dbfc5285fb38aeadac5459e3ac887bfa899aeb3be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f605d099890c119642a1806dbfc5285fb38aeadac5459e3ac887bfa899aeb3be->enter($__internal_f605d099890c119642a1806dbfc5285fb38aeadac5459e3ac887bfa899aeb3be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b7a2a9929023d09af59a51f491d68b4229933e58d55cd5ad019fcffe99c3dfb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7a2a9929023d09af59a51f491d68b4229933e58d55cd5ad019fcffe99c3dfb9->enter($__internal_b7a2a9929023d09af59a51f491d68b4229933e58d55cd5ad019fcffe99c3dfb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b7a2a9929023d09af59a51f491d68b4229933e58d55cd5ad019fcffe99c3dfb9->leave($__internal_b7a2a9929023d09af59a51f491d68b4229933e58d55cd5ad019fcffe99c3dfb9_prof);

        
        $__internal_f605d099890c119642a1806dbfc5285fb38aeadac5459e3ac887bfa899aeb3be->leave($__internal_f605d099890c119642a1806dbfc5285fb38aeadac5459e3ac887bfa899aeb3be_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f64b2bcb793b438165d771af17b65c8965bf2fe9f121a35af49b4a4c39e68c5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f64b2bcb793b438165d771af17b65c8965bf2fe9f121a35af49b4a4c39e68c5a->enter($__internal_f64b2bcb793b438165d771af17b65c8965bf2fe9f121a35af49b4a4c39e68c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_81e08ca2dabb505fd7964c6efcd6eb9c52904a239e3841bad9e66e329f2108c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81e08ca2dabb505fd7964c6efcd6eb9c52904a239e3841bad9e66e329f2108c9->enter($__internal_81e08ca2dabb505fd7964c6efcd6eb9c52904a239e3841bad9e66e329f2108c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_81e08ca2dabb505fd7964c6efcd6eb9c52904a239e3841bad9e66e329f2108c9->leave($__internal_81e08ca2dabb505fd7964c6efcd6eb9c52904a239e3841bad9e66e329f2108c9_prof);

        
        $__internal_f64b2bcb793b438165d771af17b65c8965bf2fe9f121a35af49b4a4c39e68c5a->leave($__internal_f64b2bcb793b438165d771af17b65c8965bf2fe9f121a35af49b4a4c39e68c5a_prof);

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
