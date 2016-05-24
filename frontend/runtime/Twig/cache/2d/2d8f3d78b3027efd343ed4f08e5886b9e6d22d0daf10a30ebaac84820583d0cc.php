<?php

/* view.twig */
class __TwigTemplate_a11d8802f64eb1ab03edb12c78042a816a3275317a0fca47578923114ec9dc3c extends yii\twig\Template
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
        $this->env->getExtension('yii2-twig')->addUses("/yii/widgets/DetailView");
        echo "
";
        // line 2
        $context["title"] = $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "id", array());
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
        $context["breadcrumbs"] = twig_array_merge((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), array(0 => array("label" => "Stopwords", "url" => $this->env->getExtension('yii2-twig')->path(array(0 => "index")))));
        // line 9
        $context["breadcrumbs"] = twig_array_merge((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), array(0 => (isset($context["title"]) ? $context["title"] : null)));
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('yii2-twig')->setProperty((isset($context["this"]) ? $context["this"] : null), "params", twig_array_merge($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "params", array()), array("breadcrumbs" => (isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null)))), "html", null, true);
        echo "
<div class=\"stopword-view\">
    <h1>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["html"]) ? $context["html"] : null), "encode", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "title", array())), "method"), "html", null, true);
        echo "</h1>
    <p>
        <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('yii2-twig')->path("update", array("id" => $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">";
        echo "Update";
        echo "</a>
        <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('yii2-twig')->path("delete", array("id" => $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\" data-confirm=\"";
        echo "Are you sure you want to delete this item?";
        echo "\" data-method=\"post\">";
        echo "Delete";
        echo "</a>
    </p>
    ";
        // line 17
        echo $this->env->getExtension('yii2-twig')->widget("detail_view", array("model" =>         // line 18
(isset($context["model"]) ? $context["model"] : null), "attributes" => array(0 => "id", 1 => "word")));
        // line 24
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 24,  68 => 18,  67 => 17,  58 => 15,  52 => 14,  47 => 12,  42 => 10,  40 => 9,  38 => 8,  36 => 7,  31 => 5,  29 => 4,  25 => 3,  23 => 2,  19 => 1,);
    }
}
/* {{ use('/yii/widgets/DetailView') }}*/
/* {% set title = model.id %}*/
/* {{ set(this, 'title', title) }}*/
/* {% if not this.params.breadcrumbs %}*/
/* {{ set(this, 'params', this.params|merge({'breadcrumbs': []})) }}*/
/* {% endif %}*/
/* {% set breadcrumbs = this.params.breadcrumbs %}*/
/* {% set breadcrumbs = breadcrumbs|merge([{'label': 'Stopwords', 'url': path(['index'])}]) %}*/
/* {% set breadcrumbs = breadcrumbs|merge([title]) %}*/
/* {{ set(this, 'params', this.params|merge({'breadcrumbs': breadcrumbs})) }}*/
/* <div class="stopword-view">*/
/*     <h1>{{ html.encode(this.title) }}</h1>*/
/*     <p>*/
/*         <a href="{{ path('update', {'id': model.id}) }}" class="btn btn-primary">{{ 'Update' }}</a>*/
/*         <a href="{{ path('delete', {'id': model.id}) }}" class="btn btn-danger" data-confirm="{{ 'Are you sure you want to delete this item?' }}" data-method="post">{{ 'Delete' }}</a>*/
/*     </p>*/
/*     {{ detail_view_widget({*/
/*             'model': model,*/
/*             'attributes': [*/
/*                 'id',*/
/*                 'word',*/
/*             ]*/
/*         })*/
/*     }}*/
/* </div>*/
