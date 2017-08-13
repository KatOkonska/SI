<?php

/* layout.html.twig */
class __TwigTemplate_5e366e88c71a2bcd6b6f4309aba06e16301b115e3b5409881f1c4bcd29d7d02f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b1383d2a4f5d68dc97be8e35f25b5b256ca4d0d919c4036f37e09832e922a32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b1383d2a4f5d68dc97be8e35f25b5b256ca4d0d919c4036f37e09832e922a32->enter($__internal_5b1383d2a4f5d68dc97be8e35f25b5b256ca4d0d919c4036f37e09832e922a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_dd6d317c5bb58c115e959d6b63e74bd8e70150fcefc05354bcbf45a0c7508278 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd6d317c5bb58c115e959d6b63e74bd8e70150fcefc05354bcbf45a0c7508278->enter($__internal_dd6d317c5bb58c115e959d6b63e74bd8e70150fcefc05354bcbf45a0c7508278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo " - My Silex Application</title>

        <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

        <script type=\"text/javascript\">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
    </head>
    <body>
        ";
        // line 21
        $this->displayBlock('content', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
        
        $__internal_5b1383d2a4f5d68dc97be8e35f25b5b256ca4d0d919c4036f37e09832e922a32->leave($__internal_5b1383d2a4f5d68dc97be8e35f25b5b256ca4d0d919c4036f37e09832e922a32_prof);

        
        $__internal_dd6d317c5bb58c115e959d6b63e74bd8e70150fcefc05354bcbf45a0c7508278->leave($__internal_dd6d317c5bb58c115e959d6b63e74bd8e70150fcefc05354bcbf45a0c7508278_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_101e2e77b504cd60194e50c94d3380e25150bba33cd35334b8d18db0a888bb10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_101e2e77b504cd60194e50c94d3380e25150bba33cd35334b8d18db0a888bb10->enter($__internal_101e2e77b504cd60194e50c94d3380e25150bba33cd35334b8d18db0a888bb10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ca9b549c58bf32215f6caaddb893af69aa66ec7c77ca031e9d37c9eb39e4ae0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca9b549c58bf32215f6caaddb893af69aa66ec7c77ca031e9d37c9eb39e4ae0d->enter($__internal_ca9b549c58bf32215f6caaddb893af69aa66ec7c77ca031e9d37c9eb39e4ae0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "";
        
        $__internal_ca9b549c58bf32215f6caaddb893af69aa66ec7c77ca031e9d37c9eb39e4ae0d->leave($__internal_ca9b549c58bf32215f6caaddb893af69aa66ec7c77ca031e9d37c9eb39e4ae0d_prof);

        
        $__internal_101e2e77b504cd60194e50c94d3380e25150bba33cd35334b8d18db0a888bb10->leave($__internal_101e2e77b504cd60194e50c94d3380e25150bba33cd35334b8d18db0a888bb10_prof);

    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        $__internal_499a04cfc7fbaaf48c45d852931372de49cd53b68e691a0f42a8fd5b30056380 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_499a04cfc7fbaaf48c45d852931372de49cd53b68e691a0f42a8fd5b30056380->enter($__internal_499a04cfc7fbaaf48c45d852931372de49cd53b68e691a0f42a8fd5b30056380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_26a6eb73918ea02637827337d7e5cfd441201c1f9b63deae6e102d31eab76b90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26a6eb73918ea02637827337d7e5cfd441201c1f9b63deae6e102d31eab76b90->enter($__internal_26a6eb73918ea02637827337d7e5cfd441201c1f9b63deae6e102d31eab76b90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_26a6eb73918ea02637827337d7e5cfd441201c1f9b63deae6e102d31eab76b90->leave($__internal_26a6eb73918ea02637827337d7e5cfd441201c1f9b63deae6e102d31eab76b90_prof);

        
        $__internal_499a04cfc7fbaaf48c45d852931372de49cd53b68e691a0f42a8fd5b30056380->leave($__internal_499a04cfc7fbaaf48c45d852931372de49cd53b68e691a0f42a8fd5b30056380_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 21,  69 => 4,  57 => 22,  55 => 21,  37 => 6,  32 => 4,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <title>{% block title '' %} - My Silex Application</title>

        <link href=\"{{ asset('css/main.css') }}\" rel=\"stylesheet\" type=\"text/css\" />

        <script type=\"text/javascript\">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
    </head>
    <body>
        {% block content %}{% endblock %}
    </body>
</html>
", "layout.html.twig", "/home/kasia/public_html/SI/templates/layout.html.twig");
    }
}
