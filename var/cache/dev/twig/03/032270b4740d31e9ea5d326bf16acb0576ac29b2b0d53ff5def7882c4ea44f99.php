<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_968f5a036eaa57b502ce46031d0af79f87e4b08b3bbed75426f35b49fd422002 extends Twig_Template
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
        $__internal_facc369c6aec1d9050c04b567a261c7013e32fbb000b9c7be2c952dd1c10480c = $this->env->getExtension("native_profiler");
        $__internal_facc369c6aec1d9050c04b567a261c7013e32fbb000b9c7be2c952dd1c10480c->enter($__internal_facc369c6aec1d9050c04b567a261c7013e32fbb000b9c7be2c952dd1c10480c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_facc369c6aec1d9050c04b567a261c7013e32fbb000b9c7be2c952dd1c10480c->leave($__internal_facc369c6aec1d9050c04b567a261c7013e32fbb000b9c7be2c952dd1c10480c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7a7e8d97236d1809494cc974dc4a4374c0a78d0fa709ba9b0f1c8c607fcbaf8c = $this->env->getExtension("native_profiler");
        $__internal_7a7e8d97236d1809494cc974dc4a4374c0a78d0fa709ba9b0f1c8c607fcbaf8c->enter($__internal_7a7e8d97236d1809494cc974dc4a4374c0a78d0fa709ba9b0f1c8c607fcbaf8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7a7e8d97236d1809494cc974dc4a4374c0a78d0fa709ba9b0f1c8c607fcbaf8c->leave($__internal_7a7e8d97236d1809494cc974dc4a4374c0a78d0fa709ba9b0f1c8c607fcbaf8c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a7ab401e965404b84faf0ce60029aed681f9484b5814f779145c13c18d5273b0 = $this->env->getExtension("native_profiler");
        $__internal_a7ab401e965404b84faf0ce60029aed681f9484b5814f779145c13c18d5273b0->enter($__internal_a7ab401e965404b84faf0ce60029aed681f9484b5814f779145c13c18d5273b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a7ab401e965404b84faf0ce60029aed681f9484b5814f779145c13c18d5273b0->leave($__internal_a7ab401e965404b84faf0ce60029aed681f9484b5814f779145c13c18d5273b0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ad7c950b862059f81de682f45c3a75c1930e202ecf94c03314b360a82b1cf526 = $this->env->getExtension("native_profiler");
        $__internal_ad7c950b862059f81de682f45c3a75c1930e202ecf94c03314b360a82b1cf526->enter($__internal_ad7c950b862059f81de682f45c3a75c1930e202ecf94c03314b360a82b1cf526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ad7c950b862059f81de682f45c3a75c1930e202ecf94c03314b360a82b1cf526->leave($__internal_ad7c950b862059f81de682f45c3a75c1930e202ecf94c03314b360a82b1cf526_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
