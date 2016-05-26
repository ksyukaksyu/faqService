<?php

/* _categories.twig */
class __TwigTemplate_6e9d158caebf04356b92b7501baeb3a876799b37df546292b1760a2ebfe68d62 extends yii\twig\Template
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
        echo "<div class=\"form-group\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["category"]) {
            // line 3
            echo "        <button type=\"button\" class=\"btn btn-";
            if (($context["key"] ==  -1)) {
                echo "warning";
            } else {
                echo "primary";
            }
            echo "\" onclick=\"questionFilter_setCategory('";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "')\">";
            echo twig_escape_filter($this->env, $context["category"], "html", null, true);
            echo "</button>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "    <button type=\"button\" class=\"btn btn-success\" onclick=\"questionFilter_setCategory('')\">All</button>
</div>";
    }

    public function getTemplateName()
    {
        return "_categories.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="form-group">*/
/*     {% for key, category in categories %}*/
/*         <button type="button" class="btn btn-{% if key == -1 %}warning{% else %}primary{% endif %}" onclick="questionFilter_setCategory('{{ key }}')">{{ category }}</button>*/
/*     {% endfor %}*/
/*     <button type="button" class="btn btn-success" onclick="questionFilter_setCategory('')">All</button>*/
/* </div>*/
