<?php

/* base.html.twig */
class __TwigTemplate_dc9080eb47ac36f32adce7de80266113159d096f1219edc9878b2265fe2c14ac extends Twig_Template
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
        $__internal_328b009eaf6b1e5c52e0dd84f315465f9016768c76e713572da2df26cd0ae1c3 = $this->env->getExtension("native_profiler");
        $__internal_328b009eaf6b1e5c52e0dd84f315465f9016768c76e713572da2df26cd0ae1c3->enter($__internal_328b009eaf6b1e5c52e0dd84f315465f9016768c76e713572da2df26cd0ae1c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_328b009eaf6b1e5c52e0dd84f315465f9016768c76e713572da2df26cd0ae1c3->leave($__internal_328b009eaf6b1e5c52e0dd84f315465f9016768c76e713572da2df26cd0ae1c3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5705ebff9652d5cc4a077f34715d318ee54397ddc9c54c2bb30868381f56df40 = $this->env->getExtension("native_profiler");
        $__internal_5705ebff9652d5cc4a077f34715d318ee54397ddc9c54c2bb30868381f56df40->enter($__internal_5705ebff9652d5cc4a077f34715d318ee54397ddc9c54c2bb30868381f56df40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5705ebff9652d5cc4a077f34715d318ee54397ddc9c54c2bb30868381f56df40->leave($__internal_5705ebff9652d5cc4a077f34715d318ee54397ddc9c54c2bb30868381f56df40_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_11d5668f77ea09c6d211c7c7bb538d93b258b01bd4d73619fab98f91f212984b = $this->env->getExtension("native_profiler");
        $__internal_11d5668f77ea09c6d211c7c7bb538d93b258b01bd4d73619fab98f91f212984b->enter($__internal_11d5668f77ea09c6d211c7c7bb538d93b258b01bd4d73619fab98f91f212984b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_11d5668f77ea09c6d211c7c7bb538d93b258b01bd4d73619fab98f91f212984b->leave($__internal_11d5668f77ea09c6d211c7c7bb538d93b258b01bd4d73619fab98f91f212984b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ae0949f6d9cc35c8334b8801aba68f3612ec63e2b4e0813291ebfcd64167fd1 = $this->env->getExtension("native_profiler");
        $__internal_5ae0949f6d9cc35c8334b8801aba68f3612ec63e2b4e0813291ebfcd64167fd1->enter($__internal_5ae0949f6d9cc35c8334b8801aba68f3612ec63e2b4e0813291ebfcd64167fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5ae0949f6d9cc35c8334b8801aba68f3612ec63e2b4e0813291ebfcd64167fd1->leave($__internal_5ae0949f6d9cc35c8334b8801aba68f3612ec63e2b4e0813291ebfcd64167fd1_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a59c33a63b847b7c9b28a1973acfd60688e3996f1a60a740ff10bf7e39f6e2d4 = $this->env->getExtension("native_profiler");
        $__internal_a59c33a63b847b7c9b28a1973acfd60688e3996f1a60a740ff10bf7e39f6e2d4->enter($__internal_a59c33a63b847b7c9b28a1973acfd60688e3996f1a60a740ff10bf7e39f6e2d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a59c33a63b847b7c9b28a1973acfd60688e3996f1a60a740ff10bf7e39f6e2d4->leave($__internal_a59c33a63b847b7c9b28a1973acfd60688e3996f1a60a740ff10bf7e39f6e2d4_prof);

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
