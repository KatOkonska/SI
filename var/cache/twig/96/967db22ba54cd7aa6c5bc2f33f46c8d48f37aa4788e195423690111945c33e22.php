<?php

/* layout.html.twig */
class __TwigTemplate_9d83f3ecb4b9eb7c5a9927093108b4eb9335cc0e24162388ca28f976f3e06bdf extends Twig_Template
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
        $__internal_e576ca8d49e2a5b955758eee951cb4803ad7596b8312c0885237ee1a99488577 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e576ca8d49e2a5b955758eee951cb4803ad7596b8312c0885237ee1a99488577->enter($__internal_e576ca8d49e2a5b955758eee951cb4803ad7596b8312c0885237ee1a99488577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_e083932346058551e79f8979914d9eb415c2c250e541ab394994af89096497fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e083932346058551e79f8979914d9eb415c2c250e541ab394994af89096497fc->enter($__internal_e083932346058551e79f8979914d9eb415c2c250e541ab394994af89096497fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_e576ca8d49e2a5b955758eee951cb4803ad7596b8312c0885237ee1a99488577->leave($__internal_e576ca8d49e2a5b955758eee951cb4803ad7596b8312c0885237ee1a99488577_prof);

        
        $__internal_e083932346058551e79f8979914d9eb415c2c250e541ab394994af89096497fc->leave($__internal_e083932346058551e79f8979914d9eb415c2c250e541ab394994af89096497fc_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_0fc0e34550a13dc81d1551784a3441289dfc8c267c2e4eabd7cddfee2544d95d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fc0e34550a13dc81d1551784a3441289dfc8c267c2e4eabd7cddfee2544d95d->enter($__internal_0fc0e34550a13dc81d1551784a3441289dfc8c267c2e4eabd7cddfee2544d95d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_950b7feee3287ab89f2a706038bd34a4c00c1966f511d0a9f2d5eb23ca03d200 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_950b7feee3287ab89f2a706038bd34a4c00c1966f511d0a9f2d5eb23ca03d200->enter($__internal_950b7feee3287ab89f2a706038bd34a4c00c1966f511d0a9f2d5eb23ca03d200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "";
        
        $__internal_950b7feee3287ab89f2a706038bd34a4c00c1966f511d0a9f2d5eb23ca03d200->leave($__internal_950b7feee3287ab89f2a706038bd34a4c00c1966f511d0a9f2d5eb23ca03d200_prof);

        
        $__internal_0fc0e34550a13dc81d1551784a3441289dfc8c267c2e4eabd7cddfee2544d95d->leave($__internal_0fc0e34550a13dc81d1551784a3441289dfc8c267c2e4eabd7cddfee2544d95d_prof);

    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        $__internal_426fd8312c7e10c74321f718cf29044b9f79f4e7457c435c6a67ed0283f57c45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_426fd8312c7e10c74321f718cf29044b9f79f4e7457c435c6a67ed0283f57c45->enter($__internal_426fd8312c7e10c74321f718cf29044b9f79f4e7457c435c6a67ed0283f57c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_9832a702c538539667558e75cc07a6b38b95702f9ca884f64020fc3351c93bfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9832a702c538539667558e75cc07a6b38b95702f9ca884f64020fc3351c93bfb->enter($__internal_9832a702c538539667558e75cc07a6b38b95702f9ca884f64020fc3351c93bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_9832a702c538539667558e75cc07a6b38b95702f9ca884f64020fc3351c93bfb->leave($__internal_9832a702c538539667558e75cc07a6b38b95702f9ca884f64020fc3351c93bfb_prof);

        
        $__internal_426fd8312c7e10c74321f718cf29044b9f79f4e7457c435c6a67ed0283f57c45->leave($__internal_426fd8312c7e10c74321f718cf29044b9f79f4e7457c435c6a67ed0283f57c45_prof);

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
