<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7f09fff53c33455ccb3d4d761340a11eeee663b7c3ceee5578eddcfbc503c30a extends Twig_Template
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
        $__internal_eb51ca76c2568fa1ffeb1b2716e40befa122473e6b05f15e9528ebbd5100de81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb51ca76c2568fa1ffeb1b2716e40befa122473e6b05f15e9528ebbd5100de81->enter($__internal_eb51ca76c2568fa1ffeb1b2716e40befa122473e6b05f15e9528ebbd5100de81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_4c60ca8b391e6c3eef43d4f3919ad000bb52d0548b86921dc6397d2e4091c430 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c60ca8b391e6c3eef43d4f3919ad000bb52d0548b86921dc6397d2e4091c430->enter($__internal_4c60ca8b391e6c3eef43d4f3919ad000bb52d0548b86921dc6397d2e4091c430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb51ca76c2568fa1ffeb1b2716e40befa122473e6b05f15e9528ebbd5100de81->leave($__internal_eb51ca76c2568fa1ffeb1b2716e40befa122473e6b05f15e9528ebbd5100de81_prof);

        
        $__internal_4c60ca8b391e6c3eef43d4f3919ad000bb52d0548b86921dc6397d2e4091c430->leave($__internal_4c60ca8b391e6c3eef43d4f3919ad000bb52d0548b86921dc6397d2e4091c430_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b97ea45a8c9319a77202446cdca876cc14ce2320137ae766574d2df3ea7863e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b97ea45a8c9319a77202446cdca876cc14ce2320137ae766574d2df3ea7863e7->enter($__internal_b97ea45a8c9319a77202446cdca876cc14ce2320137ae766574d2df3ea7863e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fbe6ae9d68588e13f4f4b804dab8b59da425458a28d4975ccd04dfebb1631bec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbe6ae9d68588e13f4f4b804dab8b59da425458a28d4975ccd04dfebb1631bec->enter($__internal_fbe6ae9d68588e13f4f4b804dab8b59da425458a28d4975ccd04dfebb1631bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fbe6ae9d68588e13f4f4b804dab8b59da425458a28d4975ccd04dfebb1631bec->leave($__internal_fbe6ae9d68588e13f4f4b804dab8b59da425458a28d4975ccd04dfebb1631bec_prof);

        
        $__internal_b97ea45a8c9319a77202446cdca876cc14ce2320137ae766574d2df3ea7863e7->leave($__internal_b97ea45a8c9319a77202446cdca876cc14ce2320137ae766574d2df3ea7863e7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7486611729f48eef19f2811222328ac32a2f96ef43b84e985e640e8b8449eec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7486611729f48eef19f2811222328ac32a2f96ef43b84e985e640e8b8449eec3->enter($__internal_7486611729f48eef19f2811222328ac32a2f96ef43b84e985e640e8b8449eec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b021e3e427299b70830a3b5a3cbc19fc940c7a904b25c295fe26e3c321c66b92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b021e3e427299b70830a3b5a3cbc19fc940c7a904b25c295fe26e3c321c66b92->enter($__internal_b021e3e427299b70830a3b5a3cbc19fc940c7a904b25c295fe26e3c321c66b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b021e3e427299b70830a3b5a3cbc19fc940c7a904b25c295fe26e3c321c66b92->leave($__internal_b021e3e427299b70830a3b5a3cbc19fc940c7a904b25c295fe26e3c321c66b92_prof);

        
        $__internal_7486611729f48eef19f2811222328ac32a2f96ef43b84e985e640e8b8449eec3->leave($__internal_7486611729f48eef19f2811222328ac32a2f96ef43b84e985e640e8b8449eec3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_436762a445c5732b72a50fe7f7b3dff3d7c0a4dec1db260714a203e91fda3b5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_436762a445c5732b72a50fe7f7b3dff3d7c0a4dec1db260714a203e91fda3b5c->enter($__internal_436762a445c5732b72a50fe7f7b3dff3d7c0a4dec1db260714a203e91fda3b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5a7520a442b9ca3ec5f04fe5054dfbb231282d6463d05c80d4dced44a7390fc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a7520a442b9ca3ec5f04fe5054dfbb231282d6463d05c80d4dced44a7390fc8->enter($__internal_5a7520a442b9ca3ec5f04fe5054dfbb231282d6463d05c80d4dced44a7390fc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5a7520a442b9ca3ec5f04fe5054dfbb231282d6463d05c80d4dced44a7390fc8->leave($__internal_5a7520a442b9ca3ec5f04fe5054dfbb231282d6463d05c80d4dced44a7390fc8_prof);

        
        $__internal_436762a445c5732b72a50fe7f7b3dff3d7c0a4dec1db260714a203e91fda3b5c->leave($__internal_436762a445c5732b72a50fe7f7b3dff3d7c0a4dec1db260714a203e91fda3b5c_prof);

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
