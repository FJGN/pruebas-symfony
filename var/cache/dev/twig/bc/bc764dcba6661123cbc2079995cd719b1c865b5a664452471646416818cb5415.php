<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_39cbf7b8f66ccea02483c9ae3dce6208927bd6f3abeb86c217f81816b9a7cb53 extends Twig_Template
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
        $__internal_046cfb9b2388d88ee0f9d37b546996fbb56715508965ac0452fb26d27cdb63b5 = $this->env->getExtension("native_profiler");
        $__internal_046cfb9b2388d88ee0f9d37b546996fbb56715508965ac0452fb26d27cdb63b5->enter($__internal_046cfb9b2388d88ee0f9d37b546996fbb56715508965ac0452fb26d27cdb63b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_046cfb9b2388d88ee0f9d37b546996fbb56715508965ac0452fb26d27cdb63b5->leave($__internal_046cfb9b2388d88ee0f9d37b546996fbb56715508965ac0452fb26d27cdb63b5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e815e27cd2f44cb39b7575b3cc2b35860eaeb43c9ecb8f0b616a0cdd9c12aedc = $this->env->getExtension("native_profiler");
        $__internal_e815e27cd2f44cb39b7575b3cc2b35860eaeb43c9ecb8f0b616a0cdd9c12aedc->enter($__internal_e815e27cd2f44cb39b7575b3cc2b35860eaeb43c9ecb8f0b616a0cdd9c12aedc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e815e27cd2f44cb39b7575b3cc2b35860eaeb43c9ecb8f0b616a0cdd9c12aedc->leave($__internal_e815e27cd2f44cb39b7575b3cc2b35860eaeb43c9ecb8f0b616a0cdd9c12aedc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8ed22285c1821541493668867feaac8368d2097734ce92efe6f1268da4ce3c21 = $this->env->getExtension("native_profiler");
        $__internal_8ed22285c1821541493668867feaac8368d2097734ce92efe6f1268da4ce3c21->enter($__internal_8ed22285c1821541493668867feaac8368d2097734ce92efe6f1268da4ce3c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8ed22285c1821541493668867feaac8368d2097734ce92efe6f1268da4ce3c21->leave($__internal_8ed22285c1821541493668867feaac8368d2097734ce92efe6f1268da4ce3c21_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5b0f83a839a1dcccc3deb36f40e76bd4b55894c763decd75202b23a813c6bbe2 = $this->env->getExtension("native_profiler");
        $__internal_5b0f83a839a1dcccc3deb36f40e76bd4b55894c763decd75202b23a813c6bbe2->enter($__internal_5b0f83a839a1dcccc3deb36f40e76bd4b55894c763decd75202b23a813c6bbe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5b0f83a839a1dcccc3deb36f40e76bd4b55894c763decd75202b23a813c6bbe2->leave($__internal_5b0f83a839a1dcccc3deb36f40e76bd4b55894c763decd75202b23a813c6bbe2_prof);

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
