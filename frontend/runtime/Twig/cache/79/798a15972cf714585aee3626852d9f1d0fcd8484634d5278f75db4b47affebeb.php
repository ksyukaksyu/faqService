<?php

/* index.twig */
class __TwigTemplate_3424338dcf173e53ffe638cb05c366c2d928e024b2e65b8fc92ac70ad58ff0dc extends yii\twig\Template
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
        $this->env->getExtension('yii2-twig')->addUses("/common/models/User");
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
(isset($context["searchModel"]) ? $context["searchModel"] : null), "columns" => array(0 => array("class" => "\\yii\\grid\\SerialColumn"), 1 => "username", 2 => "email:email", 3 => array("attribute" => "status", "format" => "text", "content" => $this->getAttribute(        // line 28
(isset($context["this"]) ? $context["this"] : null), "getUFStatus", array(), "method"), "filter" => array("0" => "Locked")), 4 => "created_at:datetime", 5 => "updated_at:datetime", 6 => array("class" => "\\yii\\grid\\ActionColumn"))));
        // line 37
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
        return array (  68 => 37,  66 => 28,  65 => 19,  64 => 18,  63 => 17,  56 => 15,  53 => 14,  49 => 12,  44 => 10,  42 => 9,  40 => 8,  35 => 6,  33 => 5,  29 => 4,  27 => 3,  23 => 2,  19 => 1,);
    }
}
/* {{ use('/yii/grid/GridView') }}*/
/* {{ use('/common/models/User') }}*/
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
/*                     'content' : this.getUFStatus(),*/
/*                     'filter': {'0': 'Locked'}*/
/*                 },*/
/*                 'created_at:datetime',*/
/*                 'updated_at:datetime',*/
/* */
/*                 {'class': '\\yii\\grid\\ActionColumn'},*/
/*             ],*/
/*         })*/
/*     }}*/
/* </div>*/
