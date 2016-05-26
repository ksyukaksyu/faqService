<?php

/* index.twig */
class __TwigTemplate_6a1746113398c71a9eb227cb6a7a494b931351d48ee0e7dea7e602498e23237f extends yii\twig\Template
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
        $this->env->getExtension('yii2-twig')->addUses("yii/jui/DatePicker");
        echo "
";
        // line 3
        $context["title"] = "Users";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('yii2-twig')->setProperty((isset($context["this"]) ? $context["this"] : null), "title", (isset($context["title"]) ? $context["title"] : null)), "html", null, true);
        echo "
";
        // line 5
        if ( !$this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "params", array()), "breadcrumbs", array())) {
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('yii2-twig')->setProperty((isset($context["this"]) ? $context["this"] : null), "params", twig_array_merge($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "params", array()), array("breadcrumbs" => array()))), "html", null, true);
            echo "
";
        }
        // line 8
        $context["breadcrumbs"] = $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "params", array()), "breadcrumbs", array());
        // line 9
        $context["breadcrumbs"] = twig_array_merge((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), array(0 => (isset($context["title"]) ? $context["title"] : null)));
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('yii2-twig')->setProperty((isset($context["this"]) ? $context["this"] : null), "params", twig_array_merge($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "params", array()), array("breadcrumbs" => (isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null)))), "html", null, true);
        echo "
<div class=\"user-index\">
    <h1>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["html"]) ? $context["html"] : null), "encode", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "title", array())), "method"), "html", null, true);
        echo "</h1>
    ";
        // line 14
        echo "    <p>
        <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('yii2-twig')->path(array(0 => "create")), "html", null, true);
        echo "\" class=\"btn btn-success\">";
        echo "Create User";
        echo "</a>
    </p>
    ";
        // line 17
        echo $this->env->getExtension('yii2-twig')->widget("grid_view", array("dataProvider" =>         // line 18
(isset($context["dataProvider"]) ? $context["dataProvider"] : null), "filterModel" =>         // line 19
(isset($context["searchModel"]) ? $context["searchModel"] : null), "columns" => array(0 => array("class" => "\\yii\\grid\\SerialColumn"), 1 => "username", 2 => "email:email", 3 => array("attribute" => "status", "format" => "text", "value" => "Status", "filter" =>         // line 29
(isset($context["statuses"]) ? $context["statuses"] : null)), 4 => array("attribute" => "created_at", "format" => "datetime", "filter" => $this->getAttribute(        // line 34
(isset($context["DatePicker"]) ? $context["DatePicker"] : null), "widget", array(0 => array("model" =>         // line 35
(isset($context["searchModel"]) ? $context["searchModel"] : null), "attribute" => "created_at", "dateFormat" => "dd.MM.yyyy", "options" => array("class" => "form-control"))), "method")), 5 => array("attribute" => "updated_at", "format" => "datetime", "filter" => $this->getAttribute(        // line 46
(isset($context["DatePicker"]) ? $context["DatePicker"] : null), "widget", array(0 => array("model" =>         // line 47
(isset($context["searchModel"]) ? $context["searchModel"] : null), "attribute" => "updated_at", "dateFormat" => "dd.MM.yyyy", "options" => array("class" => "form-control"))), "method")), 6 => array("class" => "\\yii\\grid\\ActionColumn"))));
        // line 61
        echo "
</div>";
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
        return array (  72 => 61,  70 => 47,  69 => 46,  68 => 35,  67 => 34,  66 => 29,  65 => 19,  64 => 18,  63 => 17,  56 => 15,  53 => 14,  49 => 12,  44 => 10,  42 => 9,  40 => 8,  35 => 6,  33 => 5,  29 => 4,  27 => 3,  23 => 2,  19 => 1,);
    }
}
/* {{ use('/yii/grid/GridView') }}*/
/* {{ use('yii/jui/DatePicker') }}*/
/* {% set title = 'Users' %}*/
/* {{ set(this, 'title', title) }}*/
/* {% if not this.params.breadcrumbs %}*/
/* {{ set(this, 'params', this.params|merge({'breadcrumbs': []})) }}*/
/* {% endif %}*/
/* {% set breadcrumbs = this.params.breadcrumbs %}*/
/* {% set breadcrumbs = breadcrumbs|merge([title]) %}*/
/* {{ set(this, 'params', this.params|merge({'breadcrumbs': breadcrumbs})) }}*/
/* <div class="user-index">*/
/*     <h1>{{ html.encode(this.title) }}</h1>*/
/*     {# include('_search.twig', {'model': searchModel}) #}*/
/*     <p>*/
/*         <a href="{{ path(['create']) }}" class="btn btn-success">{{ 'Create User' }}</a>*/
/*     </p>*/
/*     {{ grid_view_widget({*/
/*             'dataProvider': dataProvider,*/
/*             'filterModel': searchModel,*/
/*             'columns': [*/
/*                 {'class': '\\yii\\grid\\SerialColumn'},*/
/* */
/*                 'username',*/
/*                 'email:email',*/
/*                 {*/
/*                     'attribute': 'status',*/
/*                     'format': 'text',*/
/*                     'value': 'Status',*/
/*                     'filter': statuses*/
/*                 },*/
/*                 {*/
/*                     'attribute': 'created_at',*/
/*                     'format': 'datetime',*/
/*                     'filter': DatePicker.widget({*/
/*                         'model' : searchModel,*/
/*                         'attribute': 'created_at',*/
/*                         'dateFormat' : 'dd.MM.yyyy',*/
/*                         'options' : {*/
/*                             'class' : 'form-control'*/
/*                         }*/
/*                     })*/
/*                 },*/
/*                 {*/
/*                     'attribute': 'updated_at',*/
/*                     'format': 'datetime',*/
/*                     'filter': DatePicker.widget({*/
/*                         'model' : searchModel,*/
/*                         'attribute': 'updated_at',*/
/*                         'dateFormat' : 'dd.MM.yyyy',*/
/*                         'options' : {*/
/*                             'class' : 'form-control'*/
/*                         }*/
/*                     })*/
/*                 },*/
/* */
/*                 {*/
/*                     'class': '\\yii\\grid\\ActionColumn'*/
/*                 },*/
/*             ],*/
/*         })*/
/*     }}*/
/* </div>*/
