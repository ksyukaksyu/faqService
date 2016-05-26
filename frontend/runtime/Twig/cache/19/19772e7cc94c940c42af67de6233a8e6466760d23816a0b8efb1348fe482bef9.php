<?php

/* index.twig */
class __TwigTemplate_f0df3d236e6859dc4768d863b3d4a240e44a85846ce69cd4293bd01b6d6ee0ed extends yii\twig\Template
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
        $context["title"] = "Stopwords";
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
<div class=\"stopword-index\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["html"]) ? $context["html"] : null), "encode", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "title", array())), "method"), "html", null, true);
        echo "</h1>
    ";
        // line 13
        echo "    <p>
        <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('yii2-twig')->path(array(0 => "create")), "html", null, true);
        echo "\" class=\"btn btn-success\">";
        echo "Create Stopword";
        echo "</a>
    </p>
    ";
        // line 16
        echo $this->env->getExtension('yii2-twig')->widget("grid_view", array("dataProvider" =>         // line 17
(isset($context["dataProvider"]) ? $context["dataProvider"] : null), "filterModel" =>         // line 18
(isset($context["searchModel"]) ? $context["searchModel"] : null), "columns" => array(0 => array("class" => "\\yii\\grid\\SerialColumn"), 1 => "word", 2 => array("class" => "\\yii\\grid\\ActionColumn"))));
        // line 27
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
        return array (  63 => 27,  61 => 18,  60 => 17,  59 => 16,  52 => 14,  49 => 13,  45 => 11,  40 => 9,  38 => 8,  36 => 7,  31 => 5,  29 => 4,  25 => 3,  23 => 2,  19 => 1,);
    }
}
/* {{ use('/yii/grid/GridView') }}*/
/* {% set title = 'Stopwords' %}*/
/* {{ set(this, 'title', title) }}*/
/* {% if not this.params.breadcrumbs %}*/
/* {{ set(this, 'params', this.params|merge({'breadcrumbs': []})) }}*/
/* {% endif %}*/
/* {% set breadcrumbs = this.params.breadcrumbs %}*/
/* {% set breadcrumbs = breadcrumbs|merge([title]) %}*/
/* {{ set(this, 'params', this.params|merge({'breadcrumbs': breadcrumbs})) }}*/
/* <div class="stopword-index">*/
/*     <h1>{{ html.encode(this.title) }}</h1>*/
/*     {# include('_search.twig', {'model': searchModel}) #}*/
/*     <p>*/
/*         <a href="{{ path(['create']) }}" class="btn btn-success">{{ 'Create Stopword' }}</a>*/
/*     </p>*/
/*     {{ grid_view_widget({*/
/*             'dataProvider': dataProvider,*/
/*             'filterModel': searchModel,*/
/*                 'columns': [*/
/*                 {'class': '\\yii\\grid\\SerialColumn'},*/
/* */
/*                 'word',*/
/* */
/*                 {'class': '\\yii\\grid\\ActionColumn'},*/
/*             ],*/
/*         })*/
/*     }}*/
/* </div>*/
