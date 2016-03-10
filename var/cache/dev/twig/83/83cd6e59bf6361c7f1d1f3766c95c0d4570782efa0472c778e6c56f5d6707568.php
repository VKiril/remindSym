<?php

/* base.html.twig */
class __TwigTemplate_7045b4073e78dc676b914690e983e3c32287c742c5064b7212e97ab56ebd25b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e94d2e64a458b30f2f4925a6660de3767f7f61441a90e89f6cc7d988b1b5f45 = $this->env->getExtension("native_profiler");
        $__internal_4e94d2e64a458b30f2f4925a6660de3767f7f61441a90e89f6cc7d988b1b5f45->enter($__internal_4e94d2e64a458b30f2f4925a6660de3767f7f61441a90e89f6cc7d988b1b5f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_4e94d2e64a458b30f2f4925a6660de3767f7f61441a90e89f6cc7d988b1b5f45->leave($__internal_4e94d2e64a458b30f2f4925a6660de3767f7f61441a90e89f6cc7d988b1b5f45_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1198b2fff02d14f67ec07b0fa236a17927fab9600ddf7572c686aac7cbd04b75 = $this->env->getExtension("native_profiler");
        $__internal_1198b2fff02d14f67ec07b0fa236a17927fab9600ddf7572c686aac7cbd04b75->enter($__internal_1198b2fff02d14f67ec07b0fa236a17927fab9600ddf7572c686aac7cbd04b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1198b2fff02d14f67ec07b0fa236a17927fab9600ddf7572c686aac7cbd04b75->leave($__internal_1198b2fff02d14f67ec07b0fa236a17927fab9600ddf7572c686aac7cbd04b75_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4247e53b50f17afd90bc06aa39700cad48d7baa913143a3fc1a7b713f28351b5 = $this->env->getExtension("native_profiler");
        $__internal_4247e53b50f17afd90bc06aa39700cad48d7baa913143a3fc1a7b713f28351b5->enter($__internal_4247e53b50f17afd90bc06aa39700cad48d7baa913143a3fc1a7b713f28351b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4247e53b50f17afd90bc06aa39700cad48d7baa913143a3fc1a7b713f28351b5->leave($__internal_4247e53b50f17afd90bc06aa39700cad48d7baa913143a3fc1a7b713f28351b5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a2c31dac66d3af0cd7aa139ad8ec05352dadafaec509c96ed8919ca16299510 = $this->env->getExtension("native_profiler");
        $__internal_2a2c31dac66d3af0cd7aa139ad8ec05352dadafaec509c96ed8919ca16299510->enter($__internal_2a2c31dac66d3af0cd7aa139ad8ec05352dadafaec509c96ed8919ca16299510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2a2c31dac66d3af0cd7aa139ad8ec05352dadafaec509c96ed8919ca16299510->leave($__internal_2a2c31dac66d3af0cd7aa139ad8ec05352dadafaec509c96ed8919ca16299510_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f38fb27ed112b5cde776d7596f4afcab906646a615cd348032ea4120e02986b1 = $this->env->getExtension("native_profiler");
        $__internal_f38fb27ed112b5cde776d7596f4afcab906646a615cd348032ea4120e02986b1->enter($__internal_f38fb27ed112b5cde776d7596f4afcab906646a615cd348032ea4120e02986b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f38fb27ed112b5cde776d7596f4afcab906646a615cd348032ea4120e02986b1->leave($__internal_f38fb27ed112b5cde776d7596f4afcab906646a615cd348032ea4120e02986b1_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
