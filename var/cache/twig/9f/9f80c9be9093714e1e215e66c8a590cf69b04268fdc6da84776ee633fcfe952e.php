<?php

/* layout.html.twig */
class __TwigTemplate_ceeff88474db8d8742ac6e41f6ee71db312c07f0ec51d2d90d88dcc81c60377f extends Twig_Template
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
        $__internal_2c2ae89a50506f89dade9c09295eaee600c95478aa49ec7eafd5c0c5922fbd0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c2ae89a50506f89dade9c09295eaee600c95478aa49ec7eafd5c0c5922fbd0f->enter($__internal_2c2ae89a50506f89dade9c09295eaee600c95478aa49ec7eafd5c0c5922fbd0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_834d84dd4bf65e19ff1a9728610ea28914ff2f4a718b04be8f658dfac7e8d53b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_834d84dd4bf65e19ff1a9728610ea28914ff2f4a718b04be8f658dfac7e8d53b->enter($__internal_834d84dd4bf65e19ff1a9728610ea28914ff2f4a718b04be8f658dfac7e8d53b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_2c2ae89a50506f89dade9c09295eaee600c95478aa49ec7eafd5c0c5922fbd0f->leave($__internal_2c2ae89a50506f89dade9c09295eaee600c95478aa49ec7eafd5c0c5922fbd0f_prof);

        
        $__internal_834d84dd4bf65e19ff1a9728610ea28914ff2f4a718b04be8f658dfac7e8d53b->leave($__internal_834d84dd4bf65e19ff1a9728610ea28914ff2f4a718b04be8f658dfac7e8d53b_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b4e402fc2e09e8f4b19b99befc29e7d4ea183a4ecd8d287bcd942d75a08d677 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b4e402fc2e09e8f4b19b99befc29e7d4ea183a4ecd8d287bcd942d75a08d677->enter($__internal_9b4e402fc2e09e8f4b19b99befc29e7d4ea183a4ecd8d287bcd942d75a08d677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_65469a0dbfe7edae32d268f77d60e9e65c15de50818a2a233df883bca36b95fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65469a0dbfe7edae32d268f77d60e9e65c15de50818a2a233df883bca36b95fc->enter($__internal_65469a0dbfe7edae32d268f77d60e9e65c15de50818a2a233df883bca36b95fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "";
        
        $__internal_65469a0dbfe7edae32d268f77d60e9e65c15de50818a2a233df883bca36b95fc->leave($__internal_65469a0dbfe7edae32d268f77d60e9e65c15de50818a2a233df883bca36b95fc_prof);

        
        $__internal_9b4e402fc2e09e8f4b19b99befc29e7d4ea183a4ecd8d287bcd942d75a08d677->leave($__internal_9b4e402fc2e09e8f4b19b99befc29e7d4ea183a4ecd8d287bcd942d75a08d677_prof);

    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        $__internal_2b51d900dd443a3b4de427a6f9e3ec18c55cdde546ebfcc7e5589c622e361a75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b51d900dd443a3b4de427a6f9e3ec18c55cdde546ebfcc7e5589c622e361a75->enter($__internal_2b51d900dd443a3b4de427a6f9e3ec18c55cdde546ebfcc7e5589c622e361a75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ec706ccc5d5871d43040e358b4cd3ed80d74fc4c9ce7229054b1b45e30dfe66e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec706ccc5d5871d43040e358b4cd3ed80d74fc4c9ce7229054b1b45e30dfe66e->enter($__internal_ec706ccc5d5871d43040e358b4cd3ed80d74fc4c9ce7229054b1b45e30dfe66e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_ec706ccc5d5871d43040e358b4cd3ed80d74fc4c9ce7229054b1b45e30dfe66e->leave($__internal_ec706ccc5d5871d43040e358b4cd3ed80d74fc4c9ce7229054b1b45e30dfe66e_prof);

        
        $__internal_2b51d900dd443a3b4de427a6f9e3ec18c55cdde546ebfcc7e5589c622e361a75->leave($__internal_2b51d900dd443a3b4de427a6f9e3ec18c55cdde546ebfcc7e5589c622e361a75_prof);

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
