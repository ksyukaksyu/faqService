<?php

/* update.twig */
class __TwigTemplate_fbdd405a4e00c87a72526e630730d7a74019be90f9611f46dc6a9476b3104ed7 extends yii\twig\Template
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
        $context["title"] = ("Update Stopword: " . $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "id", array()));
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('yii2-twig')->setProperty((isset($context["this"]) ? $context["this"] : null), "title", (isset($context["title"]) ? $context["title"] : null)), "html", null, true);
        echo "
";
        // line 3
        if ( !$this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "params", array()), "breadcrumbs", array())) {
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('yii2-twig')->setProperty((isset($context["this"]) ? $context["this"] : null), "params", twig_array_merge($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "params", array()), array("breadcrumbs" => array()))), "html", null, true);
            echo "
";
        }
        // line 6
        $context["breadcrumbs"] = $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "params", array()), "breadcrumbs", array());
        // line 7
        $context["breadcrumbs"] = twig_array_merge((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), array(0 => array("label" => "Stopwords", "url" => $this->env->getExtension('yii2-twig')->path(array(0 => "index")))));
        // line 8
        $context["breadcrumbs"] = twig_array_merge((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), array(0 => array("label" => $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "id", array()), "url" => $this->env->getExtension('yii2-twig')->path("view", array("id" => $this->getAttribute((isset($context["model"]) ? $context["model"] : null), "id", array()))))));
        // line 9
        $context["breadcrumbs"] = twig_array_merge((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), array(0 => "Update"));
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('yii2-twig')->setProperty((isset($context["this"]) ? $context["this"] : null), "params", twig_array_merge($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "params", array()), array("breadcrumbs" => (isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null)))), "html", null, true);
        echo "
<div class=\"stopword-update\">
    <h1>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["html"]) ? $context["html"] : null), "encode", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "title", array())), "method"), "html", null, true);
        echo "</h1>
        ";
        // line 13
        echo twig_include($this->env, $context, "_form.twig", array("model" =>         // line 14
(isset($context["model"]) ? $context["model"] : null)));
        // line 16
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "update.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 16,  50 => 14,  49 => 13,  45 => 12,  40 => 10,  38 => 9,  36 => 8,  34 => 7,  32 => 6,  27 => 4,  25 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set title = 'Update Stopword: ' ~ model.id %}*/
/* {{ set(this, 'title', title) }}*/
/* {% if not this.params.breadcrumbs %}*/
/* {{ set(this, 'params', this.params|merge({'breadcrumbs': []})) }}*/
/* {% endif %}*/
/* {% set breadcrumbs = this.params.breadcrumbs %}*/
/* {% set breadcrumbs = breadcrumbs|merge([{'label': 'Stopwords', 'url': path(['index'])}]) %}*/
/* {% set breadcrumbs = breadcrumbs|merge([{'label': model.id, 'url': path('view', {'id': model.id})}]) %}*/
/* {% set breadcrumbs = breadcrumbs|merge(['Update']) %}*/
/* {{ set(this, 'params', this.params|merge({'breadcrumbs': breadcrumbs})) }}*/
/* <div class="stopword-update">*/
/*     <h1>{{ html.encode(this.title) }}</h1>*/
/*         {{ include('_form.twig', {*/
/*                 'model': model,*/
/*             })*/
/*         }}*/
/* </div>*/
