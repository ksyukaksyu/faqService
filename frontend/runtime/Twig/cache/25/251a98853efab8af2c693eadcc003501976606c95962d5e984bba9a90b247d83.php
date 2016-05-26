<?php

/* _search.twig */
class __TwigTemplate_56cffbebb58e1d76cde06f4ee2df2d7d0197b703a2f26b01666398a1aed1fc89 extends yii\twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->getExtension('yii2-twig')->addUses("/yii/widgets/ActiveForm");
        echo "
<div class=\"question-search\">
    ";
        // line 3
        $context["form"] = $this->env->getExtension('yii2-twig')->beginWidget("active_form", array("action" => array(0 => "index"), "method" => "get"));
        // line 8
        echo "
    ";
        // line 10
        echo "
    ";
        // line 12
        echo "
    ";
        // line 14
        echo "
    ";
        // line 16
        echo "
    ";
        // line 18
        echo "
    ";
        // line 20
        echo "
    ";
        // line 22
        echo "
    ";
        // line 24
        echo "
    ";
        // line 25
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "field", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "question"), "method");
        echo "

    ";
        // line 28
        echo "
    <div class=\"form-group\">
        <input type=\"submit\" value=\"";
        // line 30
        echo "Search";
        echo "\" class=\"btn btn-primary\">
        <input type=\"reset\" value=\"";
        // line 31
        echo "Reset";
        echo "\" class=\"btn btn-default\">
    </div>
    ";
        // line 33
        $this->env->getExtension('yii2-twig')->endWidget("active_form");
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "_search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 33,  66 => 31,  62 => 30,  58 => 28,  53 => 25,  50 => 24,  47 => 22,  44 => 20,  41 => 18,  38 => 16,  35 => 14,  32 => 12,  29 => 10,  26 => 8,  24 => 3,  19 => 1,);
    }
}
/* {{ use('/yii/widgets/ActiveForm') }}*/
/* <div class="question-search">*/
/*     {% set form = active_form_begin({*/
/*             'action': ['index'],*/
/*             'method': 'get',*/
/*         })*/
/*     %}*/
/* */
/*     {#{{ form.field(model, 'id')|raw }}#}*/
/* */
/*     {#{{ form.field(model, 'id_category')|raw }}#}*/
/* */
/*     {#{{ form.field(model, 'datetime_added')|raw }}#}*/
/* */
/*     {#{{ form.field(model, 'state')|raw }}#}*/
/* */
/*     {#{{ form.field(model, 'is_blocked')|raw }}#}*/
/* */
/*     {# form.field(model, 'is_telegram')|raw #}*/
/* */
/*     {# form.field(model, 'author_name')|raw #}*/
/* */
/*     {# form.field(model, 'author_mail')|raw #}*/
/* */
/*     {{ form.field(model, 'question')|raw }}*/
/* */
/*     {# form.field(model, 'answer')|raw #}*/
/* */
/*     <div class="form-group">*/
/*         <input type="submit" value="{{ 'Search' }}" class="btn btn-primary">*/
/*         <input type="reset" value="{{ 'Reset' }}" class="btn btn-default">*/
/*     </div>*/
/*     {{ active_form_end() }}*/
/* </div>*/
