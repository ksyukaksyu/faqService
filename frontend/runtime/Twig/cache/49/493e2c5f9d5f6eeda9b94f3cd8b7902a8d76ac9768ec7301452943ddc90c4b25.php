<?php

/* last.twig */
class __TwigTemplate_3c8b74c9575b4920524e45b2a26c892da648c4e841bee95521abd3b754eb763c extends yii\twig\Template
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
        $context["title"] = "Questions";
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
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["html"]) ? $context["html"] : null), "encode", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "title", array())), "method"), "html", null, true);
        echo "</h1>
    ";
        // line 12
        echo $this->env->getExtension('yii2-twig')->widget("grid_view", array("dataProvider" =>         // line 13
(isset($context["dataProvider"]) ? $context["dataProvider"] : null), "columns" => array(0 => array("class" => "\\yii\\grid\\SerialColumn"), 1 => "id", 2 => "idCategory.name", 3 => "datetime_added:datetime", 4 => "state", 5 => "is_blocked", 6 => array("class" => "\\yii\\grid\\ActionColumn"))));
        // line 26
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "last.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 26,  50 => 13,  49 => 12,  45 => 11,  40 => 9,  38 => 8,  36 => 7,  31 => 5,  29 => 4,  25 => 3,  23 => 2,  19 => 1,);
    }
}
/* {{ use('/yii/grid/GridView') }}*/
/* {% set title = 'Questions' %}*/
/* {{ set(this, 'title', title) }}*/
/* {% if not this.params.breadcrumbs %}*/
/* {{ set(this, 'params', this.params|merge({'breadcrumbs': []})) }}*/
/* {% endif %}*/
/* {% set breadcrumbs = this.params.breadcrumbs %}*/
/* {% set breadcrumbs = breadcrumbs|merge([title]) %}*/
/* {{ set(this, 'params', this.params|merge({'breadcrumbs': breadcrumbs})) }}*/
/* <div class="question-index">*/
/*     <h1>{{ html.encode(this.title) }}</h1>*/
/*     {{ grid_view_widget({*/
/*             'dataProvider': dataProvider,*/
/*             'columns': [*/
/*                 {'class': '\\yii\\grid\\SerialColumn'},*/
/* */
/*                 'id',*/
/*                 'idCategory.name',*/
/*                 'datetime_added:datetime',*/
/*                 'state',*/
/*                 'is_blocked',*/
/* */
/*                 {'class': '\\yii\\grid\\ActionColumn'},*/
/*             ],*/
/*         })*/
/*     }}*/
/* </div>*/
