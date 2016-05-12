<?php

/* pruebas/nombreColor.html.twig */
class __TwigTemplate_88f5d1feacd68a77f14d22712363b121cea7a30d826be686a53ba0cdb0f3793d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "pruebas/nombreColor.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_65df001abd3a269dd090a95a9d8ccadfd72553de6cb8ab2e945dbded630d5fea = $this->env->getExtension("native_profiler");
        $__internal_65df001abd3a269dd090a95a9d8ccadfd72553de6cb8ab2e945dbded630d5fea->enter($__internal_65df001abd3a269dd090a95a9d8ccadfd72553de6cb8ab2e945dbded630d5fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pruebas/nombreColor.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65df001abd3a269dd090a95a9d8ccadfd72553de6cb8ab2e945dbded630d5fea->leave($__internal_65df001abd3a269dd090a95a9d8ccadfd72553de6cb8ab2e945dbded630d5fea_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_608c051dfb44da39094532e0837a34deaf957343dc7883823b961b6b2a3d7e1c = $this->env->getExtension("native_profiler");
        $__internal_608c051dfb44da39094532e0837a34deaf957343dc7883823b961b6b2a3d7e1c->enter($__internal_608c051dfb44da39094532e0837a34deaf957343dc7883823b961b6b2a3d7e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1 style=\"color: ";
        echo twig_escape_filter($this->env, (isset($context["color"]) ? $context["color"] : $this->getContext($context, "color")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["nombre"]) ? $context["nombre"] : $this->getContext($context, "nombre")), "html", null, true);
        echo "</h1>
";
        
        $__internal_608c051dfb44da39094532e0837a34deaf957343dc7883823b961b6b2a3d7e1c->leave($__internal_608c051dfb44da39094532e0837a34deaf957343dc7883823b961b6b2a3d7e1c_prof);

    }

    public function getTemplateName()
    {
        return "pruebas/nombreColor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* {# app/Resources/views/lucky/number.hmtl.twig #}*/
/* {%extends 'base.html.twig'%}*/
/* */
/* {%block body %}*/
/*     <h1 style="color: {{color}}">{{nombre}}</h1>*/
/* {% endblock %}*/
