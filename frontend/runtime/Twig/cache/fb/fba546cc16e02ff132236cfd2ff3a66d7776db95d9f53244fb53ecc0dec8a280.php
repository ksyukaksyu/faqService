<?php

/* blocked.twig */
class __TwigTemplate_1799d93399580603b85f1693b1b20e6e41e69fd5f0365090eff426f85e372d8f extends yii\twig\Template
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
        $context["title"] = "Blocked Questions";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('yii2-twig')->setProperty((isset($context["this"]) ? $context["this"] : null), "title", (isset($context["title"]) ? $context["title"] : null)), "html", null, true);
        echo "
";
        // line 4
        if ( !$this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "params", array()), "breadcrumbs", array())) {
            // line 5
            echo "    ";
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
        // line 18
        echo "            ";
        echo twig_include($this->env, $context, "_categories.twig");
        echo "
            ";
        // line 19
        echo $this->env->getExtension('yii2-twig')->widget("grid_view", array("dataProvider" =>         // line 20
(isset($context["dataProvider"]) ? $context["dataProvider"] : null), "filterModel" =>         // line 21
(isset($context["searchModel"]) ? $context["searchModel"] : null), "columns" => array(0 => array("class" => "\\yii\\grid\\SerialColumn"), 1 => "author_name", 2 => "questionShort", 3 => array("attribute" => "id_category", "value" => "category.name", "label" => "Category", "filter" =>         // line 31
(isset($context["categories"]) ? $context["categories"] : null)), 4 => array("attribute" => "datetime_added", "format" => "datetime", "filter" => $this->getAttribute(        // line 36
(isset($context["DatePicker"]) ? $context["DatePicker"] : null), "widget", array(0 => array("model" =>         // line 37
(isset($context["searchModel"]) ? $context["searchModel"] : null), "attribute" => "datetime_added", "dateFormat" => "dd.MM.yyyy", "options" => array("class" => "form-control"))), "method")), 5 => array("attribute" => "telegram", "format" => "raw", "label" => ""), 6 => array("class" => "\\yii\\grid\\ActionColumn"))));
        // line 54
        echo "
        </div>
    </div>

    ";
        // line 65
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "blocked.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 65,  70 => 54,  68 => 37,  67 => 36,  66 => 31,  65 => 21,  64 => 20,  63 => 19,  58 => 18,  54 => 16,  48 => 13,  41 => 9,  39 => 8,  37 => 7,  31 => 5,  29 => 4,  25 => 3,  23 => 2,  19 => 1,);
    }
}
/* {{ use('/yii/grid/GridView') }}*/
/* {% set title = 'Blocked Questions' %}*/
/* {{ set(this, 'title', title) }}*/
/* {% if not this.params.breadcrumbs %}*/
/*     {{ set(this, 'params', this.params|merge({'breadcrumbs': []})) }}*/
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
/*             {# { include('_search.twig', {'model': searchModel}) } #}*/
/*             {{ include('_categories.twig') }}*/
/*             {{ grid_view_widget({*/
/*                 'dataProvider': dataProvider,*/
/*                 'filterModel': searchModel,*/
/*                 'columns': [*/
/*                     {'class': '\\yii\\grid\\SerialColumn'},*/
/* */
/*                     'author_name',*/
/*                     'questionShort',*/
/*                     {*/
/*                         'attribute' : 'id_category',*/
/*                         'value' : 'category.name',*/
/*                         'label' : 'Category',*/
/*                         'filter' : categories,*/
/*                     },*/
/*                     {*/
/*                         'attribute': 'datetime_added',*/
/*                         'format': 'datetime',*/
/*                         'filter': DatePicker.widget({*/
/*                             'model' : searchModel,*/
/*                             'attribute': 'datetime_added',*/
/*                             'dateFormat' : 'dd.MM.yyyy',*/
/*                             'options' : {*/
/*                                 'class' : 'form-control'*/
/*                             }*/
/*                         })*/
/*                     },*/
/*                     {*/
/*                         'attribute' : 'telegram',*/
/*                         'format' : 'raw',*/
/*                         'label' : ''*/
/*                     },*/
/* */
/*                     {'class': '\\yii\\grid\\ActionColumn'},*/
/*                 ],*/
/*             })*/
/*             }}*/
/*         </div>*/
/*     </div>*/
/* */
/*     {#*/
/*     'is_telegram',*/
/*     'author_name',*/
/*     'author_mail',*/
/*     'question:ntext',*/
/*     'answer:ntext'*/
/*     #}*/
/* </div>*/
