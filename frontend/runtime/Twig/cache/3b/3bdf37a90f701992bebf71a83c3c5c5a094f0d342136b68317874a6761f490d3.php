<?php

/* _form.twig */
class __TwigTemplate_e9427a6649d239c6f7f8f1a4eecc2b800695ac0bcab9df0fb5812c8d8fb25be2 extends yii\twig\Template
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
<div class=\"user-form\">
    ";
        // line 4
        $context["form"] = $this->env->getExtension('yii2-twig')->beginWidget("active_form");
        // line 5
        echo "
    ";
        // line 6
        if ($this->getAttribute((isset($context["model"]) ? $context["model"] : null), "isNewRecord", array(), "method")) {
            // line 7
            echo "        ";
            echo $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "field", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "username"), "method"), "textInput", array(0 => array("autofocus" => true)), "method");
            echo "
    ";
        } else {
            // line 9
            echo "        <div class=\"form-group\">
            <strong>User Name:</strong> ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "username", array()), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 13
        echo "


        ";
        // line 16
        echo $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "field", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "email"), "method"), "textInput", array(), "method");
        echo "

        ";
        // line 18
        if ($this->getAttribute((isset($context["model"]) ? $context["model"] : null), "isNewRecord", array(), "method")) {
            // line 19
            echo "
            ";
            // line 20
            echo $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "field", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "password"), "method"), "passwordInput", array(), "method");
            echo "

            ";
            // line 22
            echo $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "field", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "password_confirm"), "method"), "passwordInput", array(), "method");
            echo "
        ";
        } else {
            // line 24
            echo "            ";
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "field", array(0 =>             // line 25
(isset($context["model"]) ? $context["model"] : null), 1 => "status"), "method"), "label", array(0 => "Status"), "method"), "dropDownList", array(0 => $this->getAttribute(            // line 28
(isset($context["model"]) ? $context["model"] : null), "getStatusesList", array(), "method"), 1 => array("prompt" => "Select Status")), "method");
            // line 31
            echo "

            <div class=\"form-group\">
                <i><strong>Note:</strong> If you want to change password for current user, fill the fields below:</i>
                <br/><br/>
                ";
            // line 36
            echo $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "field", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "password"), "method"), "passwordInput", array(), "method");
            echo "

                ";
            // line 38
            echo $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "field", array(0 => (isset($context["model"]) ? $context["model"] : null), 1 => "password_confirm"), "method"), "passwordInput", array(), "method");
            echo "
            </div>
        ";
        }
        // line 41
        echo "
    <div class=\"form-group\">
        <input type=\"submit\" value=\"";
        // line 43
        echo (($this->getAttribute((isset($context["model"]) ? $context["model"] : null), "isNewRecord", array(), "method")) ? ("Create") : ("Update"));
        echo "\" class=\"";
        echo (($this->getAttribute((isset($context["model"]) ? $context["model"] : null), "isNewRecord", array(), "method")) ? ("btn btn-success") : ("btn btn-primary"));
        echo "\">
    </div>
    ";
        // line 45
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
        return array (  109 => 45,  102 => 43,  98 => 41,  92 => 38,  87 => 36,  80 => 31,  78 => 28,  77 => 25,  75 => 24,  70 => 22,  65 => 20,  62 => 19,  60 => 18,  55 => 16,  50 => 13,  44 => 10,  41 => 9,  35 => 7,  33 => 6,  30 => 5,  28 => 4,  23 => 2,  19 => 1,);
    }
}
/* {{ use('/yii/widgets/ActiveForm') }}*/
/* {{ use('/yii/widgets/DetailView') }}*/
/* <div class="user-form">*/
/*     {% set form = active_form_begin() %}*/
/* */
/*     {% if model.isNewRecord() %}*/
/*         {{ form.field(model, 'username').textInput({'autofocus' : true})|raw }}*/
/*     {% else %}*/
/*         <div class="form-group">*/
/*             <strong>User Name:</strong> {{ model.username }}*/
/*         </div>*/
/*     {% endif %}*/
/* */
/* */
/* */
/*         {{ form.field(model, 'email').textInput()|raw }}*/
/* */
/*         {% if model.isNewRecord() %}*/
/* */
/*             {{ form.field(model, 'password').passwordInput()|raw }}*/
/* */
/*             {{ form.field(model, 'password_confirm').passwordInput()|raw }}*/
/*         {% else %}*/
/*             {{ form*/
/*                 .field(model, 'status')*/
/*                 .label("Status")*/
/*                 .dropDownList(*/
/*                     model.getStatusesList(),*/
/*                     {'prompt':'Select Status'}*/
/*                 )|raw*/
/*             }}*/
/* */
/*             <div class="form-group">*/
/*                 <i><strong>Note:</strong> If you want to change password for current user, fill the fields below:</i>*/
/*                 <br/><br/>*/
/*                 {{ form.field(model, 'password').passwordInput()|raw }}*/
/* */
/*                 {{ form.field(model, 'password_confirm').passwordInput()|raw }}*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*     <div class="form-group">*/
/*         <input type="submit" value="{{ model.isNewRecord() ? 'Create' : 'Update' }}" class="{{ model.isNewRecord() ? "btn btn-success" : "btn btn-primary" }}">*/
/*     </div>*/
/*     {{ active_form_end() }}*/
/* </div>*/
