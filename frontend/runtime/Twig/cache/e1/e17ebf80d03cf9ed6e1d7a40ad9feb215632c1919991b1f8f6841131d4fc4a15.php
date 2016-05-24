<?php

/* create.twig */
class __TwigTemplate_6a349973bf25072cc3c2af111a9cee1f563a938d610c86310a52a7b6a2736555 extends yii\twig\Template
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
        $context["title"] = "Create Category";
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
        $context["breadcrumbs"] = twig_array_merge((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), array(0 => array("label" => "Categories", "url" => $this->env->getExtension('yii2-twig')->path(array(0 => "index")))));
        // line 8
        $context["breadcrumbs"] = twig_array_merge((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), array(0 => (isset($context["title"]) ? $context["title"] : null)));
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('yii2-twig')->setProperty((isset($context["this"]) ? $context["this"] : null), "params", twig_array_merge($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "params", array()), array("breadcrumbs" => (isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null)))), "html", null, true);
        echo "
<div class=\"category-create\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["html"]) ? $context["html"] : null), "encode", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "title", array())), "method"), "html", null, true);
        echo "</h1>
    ";
        // line 12
        echo twig_include($this->env, $context, "_form.twig", array("model" =>         // line 13
(isset($context["model"]) ? $context["model"] : null)));
        // line 15
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "create.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 15,  48 => 13,  47 => 12,  43 => 11,  38 => 9,  36 => 8,  34 => 7,  32 => 6,  27 => 4,  25 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set title = 'Create Category' %}*/
/* {{ set(this, 'title', title) }}*/
/* {% if not this.params.breadcrumbs %}*/
/* {{ set(this, 'params', this.params|merge({'breadcrumbs': []})) }}*/
/* {% endif %}*/
/* {% set breadcrumbs = this.params.breadcrumbs %}*/
/* {% set breadcrumbs = breadcrumbs|merge([{'label': 'Categories', 'url': path(['index'])}]) %}*/
/* {% set breadcrumbs = breadcrumbs|merge([title]) %}*/
/* {{ set(this, 'params', this.params|merge({'breadcrumbs': breadcrumbs})) }}*/
/* <div class="category-create">*/
/*     <h1>{{ html.encode(this.title) }}</h1>*/
/*     {{ include('_form.twig', {*/
/*             'model': model,*/
/*         })*/
/*     }}*/
/* </div>*/
