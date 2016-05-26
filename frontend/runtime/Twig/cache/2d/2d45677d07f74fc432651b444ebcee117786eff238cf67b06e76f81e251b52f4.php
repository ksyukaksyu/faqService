<?php

/* index.twig */
class __TwigTemplate_2a3d414a52ee2111520adb9f1596fbb99812a3df506484851166ee1f67eaea41 extends yii\twig\Template
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
        $this->env->getExtension('yii2-twig')->addUses("/yii/grid/GridView");
        echo "
";
        // line 2
        $context["title"] = "Questions by Category";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('yii2-twig')->setProperty((isset($context["this"]) ? $context["this"] : null), "title", (isset($context["title"]) ? $context["title"] : null)), "html", null, true);
        echo "
";
        // line 4
        if ( !$this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "params", array()), "breadcrumbs", array())) {
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('yii2-twig')->setProperty((isset($context["this"]) ? $context["this"] : null), "params", twig_array_merge($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "params", array()), array("breadcrumbs" => array()))), "html", null, true);
            echo "
";
        }
        // line 7
        $context["breadcrumbs"] = $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "params", array()), "breadcrumbs", array());
        // line 8
        $context["breadcrumbs"] = twig_array_merge((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), array(0 => (isset($context["title"]) ? $context["title"] : null)));
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('yii2-twig')->setProperty((isset($context["this"]) ? $context["this"] : null), "params", twig_array_merge($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "params", array()), array("breadcrumbs" => (isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null)))), "html", null, true);
        echo "
<div class=\"question-index\">
    <div class=\"row\">
        <div class=\"col-xs-6 col-md-2\">
            ";
        // line 13
        echo twig_include($this->env, $context, "_menu.twig");
        echo "
        </div>
        <div class=\"col-xs-6 col-md-10\">
            <h1>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["html"]) ? $context["html"] : null), "encode", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "title", array())), "method"), "html", null, true);
        echo "</h1>
            ";
        // line 17
        echo twig_include($this->env, $context, "_categories.twig");
        echo "
            ";
        // line 19
        echo "            ";
        echo $this->env->getExtension('yii2-twig')->widget("grid_view", array("dataProvider" =>         // line 20
(isset($context["dataProvider"]) ? $context["dataProvider"] : null), "filterModel" =>         // line 21
(isset($context["searchModel"]) ? $context["searchModel"] : null), "columns" => array(0 => array("class" => "\\yii\\grid\\SerialColumn"), 1 => "questionShort", 2 => array("attribute" => "id_category", "value" => "category.name", "label" => "Category", "filter" =>         // line 30
(isset($context["categories"]) ? $context["categories"] : null)), 3 => array("attribute" => "datetime_added", "format" => "datetime", "filter" => $this->getAttribute(        // line 35
(isset($context["DatePicker"]) ? $context["DatePicker"] : null), "widget", array(0 => array("model" =>         // line 36
(isset($context["searchModel"]) ? $context["searchModel"] : null), "attribute" => "datetime_added", "dateFormat" => "dd.MM.yyyy", "options" => array("class" => "form-control"))), "method")), 4 => array("attribute" => "state", "filter" => array("published" => "Published", "hidden" => "Hidden")), 5 => array("attribute" => "telegram", "format" => "raw", "label" => ""), 6 => array("class" => "\\yii\\grid\\ActionColumn"))));
        // line 56
        echo "
        </div>
    </div>

";
        // line 67
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 67,  69 => 56,  67 => 36,  66 => 35,  65 => 30,  64 => 21,  63 => 20,  61 => 19,  57 => 17,  53 => 16,  47 => 13,  40 => 9,  38 => 8,  36 => 7,  31 => 5,  29 => 4,  25 => 3,  23 => 2,  19 => 1,);
    }
}
/* {{ use('/yii/grid/GridView') }}*/
/* {% set title = 'Questions by Category' %}*/
/* {{ set(this, 'title', title) }}*/
/* {% if not this.params.breadcrumbs %}*/
/* {{ set(this, 'params', this.params|merge({'breadcrumbs': []})) }}*/
/* {% endif %}*/
/* {% set breadcrumbs = this.params.breadcrumbs %}*/
/* {% set breadcrumbs = breadcrumbs|merge([title]) %}*/
/* {{ set(this, 'params', this.params|merge({'breadcrumbs': breadcrumbs})) }}*/
/* <div class="question-index">*/
/*     <div class="row">*/
/*         <div class="col-xs-6 col-md-2">*/
/*             {{ include('_menu.twig') }}*/
/*         </div>*/
/*         <div class="col-xs-6 col-md-10">*/
/*             <h1>{{ html.encode(this.title) }}</h1>*/
/*             {{ include('_categories.twig') }}*/
/*             {# { include('_search.twig', {'model': searchModel}) } #}*/
/*             {{ grid_view_widget({*/
/*                 'dataProvider': dataProvider,*/
/*                 'filterModel': searchModel,*/
/*                 'columns': [*/
/*                 {'class': '\\yii\\grid\\SerialColumn'},*/
/* */
/*                 'questionShort',*/
/*                 {*/
/*                     'attribute' : 'id_category',*/
/*                     'value' : 'category.name',*/
/*                     'label' : 'Category',*/
/*                     'filter' : categories*/
/*                 },*/
/*                 {*/
/*                     'attribute': 'datetime_added',*/
/*                     'format': 'datetime',*/
/*                     'filter': DatePicker.widget({*/
/*                         'model' : searchModel,*/
/*                         'attribute': 'datetime_added',*/
/*                         'dateFormat' : 'dd.MM.yyyy',*/
/*                         'options' : {*/
/*                             'class' : 'form-control'*/
/*                         }*/
/*                     })*/
/*                 },*/
/*                 {*/
/*                     'attribute' : 'state',*/
/*                     'filter' : {'published' : 'Published', 'hidden' : 'Hidden'}*/
/*                 },*/
/*                 {*/
/*                     'attribute' : 'telegram',*/
/*                     'format' : 'raw',*/
/*                     'label' : ''*/
/*                 },*/
/*                 {'class': '\\yii\\grid\\ActionColumn'},*/
/*                 ],*/
/*             })*/
/*             }}*/
/*         </div>*/
/*     </div>*/
/* */
/* {#*/
/* 'is_telegram',*/
/* 'author_name',*/
/* 'author_mail',*/
/* 'question:ntext',*/
/* 'answer:ntext'*/
/* #}*/
/* </div>*/
