<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4e9eb00d5c65592672a3a896d5a11a400b8ab5677ccc7a43d2bc1ca9d0f42bcd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca938071e62bf860cb663181915cd655457cbcc417cad6a90f6111fa8d9eedef = $this->env->getExtension("native_profiler");
        $__internal_ca938071e62bf860cb663181915cd655457cbcc417cad6a90f6111fa8d9eedef->enter($__internal_ca938071e62bf860cb663181915cd655457cbcc417cad6a90f6111fa8d9eedef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca938071e62bf860cb663181915cd655457cbcc417cad6a90f6111fa8d9eedef->leave($__internal_ca938071e62bf860cb663181915cd655457cbcc417cad6a90f6111fa8d9eedef_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f00b97e5cc49add3f275acb3f3dd30b78953a29678b753ce356ae65b90f4e8cd = $this->env->getExtension("native_profiler");
        $__internal_f00b97e5cc49add3f275acb3f3dd30b78953a29678b753ce356ae65b90f4e8cd->enter($__internal_f00b97e5cc49add3f275acb3f3dd30b78953a29678b753ce356ae65b90f4e8cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f00b97e5cc49add3f275acb3f3dd30b78953a29678b753ce356ae65b90f4e8cd->leave($__internal_f00b97e5cc49add3f275acb3f3dd30b78953a29678b753ce356ae65b90f4e8cd_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_12bce4025f3319c9f72863028283438ba7f55f16dc23d06cfaade827c5daece8 = $this->env->getExtension("native_profiler");
        $__internal_12bce4025f3319c9f72863028283438ba7f55f16dc23d06cfaade827c5daece8->enter($__internal_12bce4025f3319c9f72863028283438ba7f55f16dc23d06cfaade827c5daece8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_12bce4025f3319c9f72863028283438ba7f55f16dc23d06cfaade827c5daece8->leave($__internal_12bce4025f3319c9f72863028283438ba7f55f16dc23d06cfaade827c5daece8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_04c73cc7e11bfb8d491153ef96ab8554587172e80241e09c139c2afe4305d643 = $this->env->getExtension("native_profiler");
        $__internal_04c73cc7e11bfb8d491153ef96ab8554587172e80241e09c139c2afe4305d643->enter($__internal_04c73cc7e11bfb8d491153ef96ab8554587172e80241e09c139c2afe4305d643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_04c73cc7e11bfb8d491153ef96ab8554587172e80241e09c139c2afe4305d643->leave($__internal_04c73cc7e11bfb8d491153ef96ab8554587172e80241e09c139c2afe4305d643_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
