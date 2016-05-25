<?php

/* _form.twig */
class __TwigTemplate_576fc4bbc89ee023892f2f0e2f86db21dd21e2101058f9155bcd7a4c9093511e extends yii\twig\Template
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
<div class=\"user-form\">
    ";
        // line 3
        $context["form"] = $this->env->getExtension('yii2-twig')->beginWidget("active_form");
        // line 4
        echo "
        ";
        // line 5
        echo $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "field", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "status"), "method"), "textInput", array(), "method");
        echo "

    <div class=\"form-group\">
        <input type=\"submit\" value=\"";
        // line 8
        echo (($this->getAttribute((isset($context["model"]) ? $context["model"] : null), "isNewRecord", array())) ? ("Create") : ("Update"));
        echo "\" class=\"";
        echo (($this->getAttribute((isset($context["model"]) ? $context["model"] : null), "isNewRecord", array())) ? ("btn btn-success") : ("btn btn-primary"));
        echo "\">
    </div>
    ";
        // line 10
        $this->env->getExtension('yii2-twig')->endWidget("active_form");
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  35 => 8,  29 => 5,  26 => 4,  24 => 3,  19 => 1,);
    }
}
/* {{ use('/yii/widgets/ActiveForm') }}*/
/* <div class="user-form">*/
/*     {% set form = active_form_begin() %}*/
/* */
/*         {{ form.field(model, 'status').textInput()|raw }}*/
/* */
/*     <div class="form-group">*/
/*         <input type="submit" value="{{ model.isNewRecord ? 'Create' : 'Update' }}" class="{{ model.isNewRecord ? "btn btn-success" : "btn btn-primary" }}">*/
/*     </div>*/
/*     {{ active_form_end() }}*/
/* </div>*/
