<?php

/* _form.twig */
class __TwigTemplate_69274668f8fdd915ace5abab796e2af05afa1127c8d44119780811c1b055c350 extends yii\twig\Template
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
        $this->env->getExtension('yii2-twig')->addUses("yii/widgets/ActiveForm");
        echo "
<div class=\"question-form\">
    ";
        // line 3
        $context["form"] = $this->env->getExtension('yii2-twig')->beginWidget("active_form");
        // line 4
        echo "
    ";
        // line 5
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "field", array(0 =>         // line 6
(isset($context["model"]) ? $context["model"] : null), 1 => "author_name"), "method"), "label", array(0 => "Your Name"), "method"), "textInput", array(0 => array("maxlength" => true)), "method");
        // line 9
        echo "

    ";
        // line 11
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "field", array(0 =>         // line 12
(isset($context["model"]) ? $context["model"] : null), 1 => "author_mail"), "method"), "label", array(0 => "Your E-Mail"), "method"), "textInput", array(0 => array("maxlength" => true)), "method");
        // line 15
        echo "

    ";
        // line 17
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "field", array(0 =>         // line 18
(isset($context["model"]) ? $context["model"] : null), 1 => "id_category"), "method"), "label", array(0 => "Category"), "method"), "dropDownList", array(0 =>         // line 21
(isset($context["categories"]) ? $context["categories"] : null), 1 => array("prompt" => "Select Category")), "method");
        // line 24
        echo "


    ";
        // line 27
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "field", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "question"), "method"), "label", array(0 => "Your Question"), "method"), "textarea", array(0 => array("rows" => 6)), "method");
        echo "

    <div class=\"form-group\">
        <input type=\"submit\" value=\"Add my question\" class=\"btn btn-success\" />
    </div>
    ";
        // line 32
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
        return array (  60 => 32,  52 => 27,  47 => 24,  45 => 21,  44 => 18,  43 => 17,  39 => 15,  37 => 12,  36 => 11,  32 => 9,  30 => 6,  29 => 5,  26 => 4,  24 => 3,  19 => 1,);
    }
}
/* {{ use('yii/widgets/ActiveForm') }}*/
/* <div class="question-form">*/
/*     {% set form = active_form_begin() %}*/
/* */
/*     {{ form*/
/*         .field(model, 'author_name')*/
/*         .label("Your Name")*/
/*         .textInput({'maxlength':true})|raw*/
/*     }}*/
/* */
/*     {{ form*/
/*         .field(model, 'author_mail')*/
/*         .label("Your E-Mail")*/
/*         .textInput({'maxlength':true})|raw*/
/*     }}*/
/* */
/*     {{ form*/
/*         .field(model, 'id_category')*/
/*         .label("Category")*/
/*         .dropDownList(*/
/*             categories,*/
/*             {'prompt':'Select Category'}*/
/*         )|raw*/
/*     }}*/
/* */
/* */
/*     {{ form.field(model, 'question').label("Your Question").textarea({'rows':6})|raw }}*/
/* */
/*     <div class="form-group">*/
/*         <input type="submit" value="Add my question" class="btn btn-success" />*/
/*     </div>*/
/*     {{ active_form_end() }}*/
/* </div>*/
