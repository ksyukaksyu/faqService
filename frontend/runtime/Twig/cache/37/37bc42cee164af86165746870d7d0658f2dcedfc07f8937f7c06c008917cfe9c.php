<?php

/* _adminForm.twig */
class __TwigTemplate_4bdbafcaa8e11bfbaccb59362412b8e8a91ba87cb07d5eec6e4a08c0a3b665c7 extends yii\twig\Template
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
";
        // line 2
        $this->env->getExtension('yii2-twig')->addUses("/yii/widgets/DetailView");
        echo "
<div class=\"question-form\">
    ";
        // line 4
        echo $this->env->getExtension('yii2-twig')->widget("detail_view", array("model" =>         // line 5
(isset($context["model"]) ? $context["model"] : null), "attributes" => array(0 => "author_name", 1 => "author_mail", 2 => "datetime_added:datetime", 3 => "is_telegram:boolean", 4 => "stopwordsBubles:raw")));
        // line 13
        echo "

    ";
        // line 15
        $context["form"] = $this->env->getExtension('yii2-twig')->beginWidget("active_form");
        // line 16
        echo "
    ";
        // line 17
        echo $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "field", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "author_name"), "method"), "textInput", array(0 => array("maxlength" => true)), "method");
        echo "

    ";
        // line 19
        echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "field", array(0 =>         // line 20
(isset($context["model"]) ? $context["model"] : null), 1 => "id_category"), "method"), "label", array(0 => "Category"), "method"), "dropDownList", array(0 =>         // line 23
(isset($context["categories"]) ? $context["categories"] : null), 1 => array("prompt" => "Select Category")), "method");
        // line 26
        echo "

    ";
        // line 28
        echo $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "field", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "question"), "method"), "textarea", array(0 => array("rows" => 6)), "method");
        echo "

    ";
        // line 30
        echo $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "field", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "answer"), "method"), "textarea", array(0 => array("rows" => 6)), "method");
        echo "

    ";
        // line 32
        echo $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "field", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "state"), "method"), "dropDownList", array(0 => array("draft" => "Draft", "published" => "Published", "hidden" => "Hidden", "" => ""), 1 => array("prompt" => "")), "method");
        echo "

    ";
        // line 34
        echo $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "field", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "is_blocked"), "method"), "checkbox", array(), "method");
        echo "

    <div class=\"form-group\">
        <input type=\"submit\" value=\"";
        // line 37
        echo (($this->getAttribute((isset($context["model"]) ? $context["model"] : null), "isNewRecord", array())) ? ("Create") : ("Update"));
        echo "\" class=\"";
        echo (($this->getAttribute((isset($context["model"]) ? $context["model"] : null), "isNewRecord", array())) ? ("btn btn-success") : ("btn btn-primary"));
        echo "\">
    </div>
    ";
        // line 39
        $this->env->getExtension('yii2-twig')->endWidget("active_form");
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "_adminForm.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 39,  74 => 37,  68 => 34,  63 => 32,  58 => 30,  53 => 28,  49 => 26,  47 => 23,  46 => 20,  45 => 19,  40 => 17,  37 => 16,  35 => 15,  31 => 13,  29 => 5,  28 => 4,  23 => 2,  19 => 1,);
    }
}
/* {{ use('/yii/widgets/ActiveForm') }}*/
/* {{ use('/yii/widgets/DetailView') }}*/
/* <div class="question-form">*/
/*     {{ detail_view_widget({*/
/*         'model': model,*/
/*         'attributes': [*/
/*             'author_name',*/
/*             'author_mail',*/
/*             'datetime_added:datetime',*/
/*             'is_telegram:boolean',*/
/*             'stopwordsBubles:raw'*/
/*         ]*/
/*     }) }}*/
/* */
/*     {% set form = active_form_begin() %}*/
/* */
/*     {{ form.field(model, 'author_name').textInput({'maxlength':true})|raw }}*/
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
/*     {{ form.field(model, 'question').textarea({'rows':6})|raw }}*/
/* */
/*     {{ form.field(model, 'answer').textarea({'rows':6})|raw }}*/
/* */
/*     {{ form.field(model, 'state').dropDownList({'draft':'Draft','published':'Published','hidden':'Hidden','':''}, {'prompt':''})|raw }}*/
/* */
/*     {{ form.field(model, 'is_blocked').checkbox()|raw }}*/
/* */
/*     <div class="form-group">*/
/*         <input type="submit" value="{{ model.isNewRecord ? 'Create' : 'Update' }}" class="{{ model.isNewRecord ? "btn btn-success" : "btn btn-primary" }}">*/
/*     </div>*/
/*     {{ active_form_end() }}*/
/* </div>*/
