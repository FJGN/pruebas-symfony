<?php

/* lucky/number.html.twig */
class __TwigTemplate_9aee4d8781d70553681797e73d64f2ce0b547883ad7d451331ae05e4a1dc139f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "lucky/number.html.twig", 2);
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
        $__internal_e788e9ffba95c02f202c1b89d5ce799e197a456f82eaf41864b9f0864e205d1f = $this->env->getExtension("native_profiler");
        $__internal_e788e9ffba95c02f202c1b89d5ce799e197a456f82eaf41864b9f0864e205d1f->enter($__internal_e788e9ffba95c02f202c1b89d5ce799e197a456f82eaf41864b9f0864e205d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lucky/number.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e788e9ffba95c02f202c1b89d5ce799e197a456f82eaf41864b9f0864e205d1f->leave($__internal_e788e9ffba95c02f202c1b89d5ce799e197a456f82eaf41864b9f0864e205d1f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_8511ebcead057e67e059745d6b9a845630631a9a55a5e052e2b92deddb9843c8 = $this->env->getExtension("native_profiler");
        $__internal_8511ebcead057e67e059745d6b9a845630631a9a55a5e052e2b92deddb9843c8->enter($__internal_8511ebcead057e67e059745d6b9a845630631a9a55a5e052e2b92deddb9843c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>Lucky Numbers: ";
        echo twig_escape_filter($this->env, (isset($context["luckyNumberList"]) ? $context["luckyNumberList"] : $this->getContext($context, "luckyNumberList")), "html", null, true);
        echo "</h1>
";
        
        $__internal_8511ebcead057e67e059745d6b9a845630631a9a55a5e052e2b92deddb9843c8->leave($__internal_8511ebcead057e67e059745d6b9a845630631a9a55a5e052e2b92deddb9843c8_prof);

    }

    public function getTemplateName()
    {
        return "lucky/number.html.twig";
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
/*     <h1>Lucky Numbers: {{luckyNumberList}}</h1>*/
/* {% endblock %}*/
