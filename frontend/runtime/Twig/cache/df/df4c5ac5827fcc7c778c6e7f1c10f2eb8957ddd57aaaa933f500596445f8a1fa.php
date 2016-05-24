<?php

/* index.twig */
class __TwigTemplate_eab7044a46559e25dbdbd195c759e84c0520c5058d1daecec4d261681b823ba9 extends yii\twig\Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('yii2-twig')->setProperty((isset($context["this"]) ? $context["this"] : null), "title", "FAQ"), "html", null, true);
        echo "
<div class=\"row\">
    <div class=\"col-xs-6 col-md-4\">
        <nav class=\"bs-docs-sidebar fixed\">
            <ul class=\"nav nav-stacked\">
                ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), "query", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 7
            echo "                    <li><a class=\"\" href=\"#category-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "-part\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "            </ul>
            <br/>
            <a href=\"/questions/create\" class=\"btn btn-success\">Still have a question?</a>
        </nav>
        <br/>
    </div>
    <div class=\"col-xs-6 col-md-8\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), "query", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 17
            echo "            <div class=\"panel-group\" id=\"accordion-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "\" role=\"tablist\" aria-multiselectable=\"true\">
                ";
            // line 18
            $context["questions"] = $this->getAttribute($this->getAttribute($this->getAttribute($context["category"], "getQuestions", array(), "method"), "where", array(0 => "state='published' AND is_blocked=0"), "method"), "all", array(), "method");
            // line 19
            echo "                <h2 id=\"category-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "-part\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</h2>
                ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
                // line 21
                echo "                    <div class=\"panel panel-default\">
                        <div class=\"panel-heading\" role=\"tab\" id=\"heading-";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
                echo "\">
                            <h4 class=\"panel-title\">
                                <a role=\"button\" data-toggle=\"collapse\" data-parent=\"#accordion-";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                echo "\"
                                   href=\"#collapse-";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
                echo "\" aria-expanded=\"false\"
                                   aria-controls=\"collapse-";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
                echo "\">
                                    ";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "question", array()), "html", null, true);
                echo "
                                </a>
                            </h4>
                        </div>
                        <div id=\"collapse-";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
                echo "\" class=\"panel-collapse collapse ";
                if (($this->getAttribute($context["loop"], "index", array()) == 1)) {
                    echo "in";
                }
                echo "\" role=\"tabpanel\"
                             aria-labelledby=\"heading-";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
                echo "\">
                            <div class=\"panel-body\">
                                ";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "answer", array()), "html", null, true);
                echo "
                            </div>
                        </div>
                    </div>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "            </div>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    </div>
</div>

";
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
        return array (  153 => 42,  145 => 39,  126 => 34,  121 => 32,  113 => 31,  106 => 27,  102 => 26,  98 => 25,  94 => 24,  89 => 22,  86 => 21,  69 => 20,  62 => 19,  60 => 18,  55 => 17,  51 => 16,  42 => 9,  31 => 7,  27 => 6,  19 => 1,);
    }
}
/* {{ set(this,'title','FAQ') }}*/
/* <div class="row">*/
/*     <div class="col-xs-6 col-md-4">*/
/*         <nav class="bs-docs-sidebar fixed">*/
/*             <ul class="nav nav-stacked">*/
/*                 {% for category in categories.query %}*/
/*                     <li><a class="" href="#category-{{ category.id }}-part">{{ category.name }}</a></li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*             <br/>*/
/*             <a href="/questions/create" class="btn btn-success">Still have a question?</a>*/
/*         </nav>*/
/*         <br/>*/
/*     </div>*/
/*     <div class="col-xs-6 col-md-8">*/
/*         {% for category in categories.query %}*/
/*             <div class="panel-group" id="accordion-{{ category.id }}" role="tablist" aria-multiselectable="true">*/
/*                 {% set questions =  category.getQuestions().where("state='published' AND is_blocked=0").all() %}*/
/*                 <h2 id="category-{{ category.id }}-part">{{ category.name }}</h2>*/
/*                 {% for question in questions %}*/
/*                     <div class="panel panel-default">*/
/*                         <div class="panel-heading" role="tab" id="heading-{{ question.id }}">*/
/*                             <h4 class="panel-title">*/
/*                                 <a role="button" data-toggle="collapse" data-parent="#accordion-{{ category.id }}"*/
/*                                    href="#collapse-{{ question.id }}" aria-expanded="false"*/
/*                                    aria-controls="collapse-{{ question.id }}">*/
/*                                     {{ question.question }}*/
/*                                 </a>*/
/*                             </h4>*/
/*                         </div>*/
/*                         <div id="collapse-{{ question.id }}" class="panel-collapse collapse {% if loop.index==1 %}in{% endif %}" role="tabpanel"*/
/*                              aria-labelledby="heading-{{ question.id }}">*/
/*                             <div class="panel-body">*/
/*                                 {{ question.answer }}*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             </div>*/
/* */
/*         {% endfor %}*/
/*     </div>*/
/* </div>*/
/* */
/* */
