<?php

/* _menu.twig */
class __TwigTemplate_65c8578c48544c252c042987769a212977796b4331f27c6124f4d5ac78aaaa1f extends yii\twig\Template
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
        echo "<nav class=\"fixed\">
    <ul class=\"nav nav-pills nav-stacked\">
        <li role=\"presentation\"><a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "toRoute", array(0 => array(0 => "questions/new")), "method"), "html", null, true);
        echo "\">New Questions <span class=\"label label-pill label-default\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["statistics"]) ? $context["statistics"] : null), "new", array()), "html", null, true);
        echo "</span></a> </li>
        <li role=\"presentation\"><a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "toRoute", array(0 => array(0 => "questions/index")), "method"), "html", null, true);
        echo "\">Published Questions <span class=\"label label-pill label-default\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["statistics"]) ? $context["statistics"] : null), "published", array()), "html", null, true);
        echo "</span></a></li>
        <li role=\"presentation\"><a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["url"]) ? $context["url"] : null), "toRoute", array(0 => array(0 => "questions/blocked")), "method"), "html", null, true);
        echo "\">Blocked Questions <span class=\"label label-pill label-default\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["statistics"]) ? $context["statistics"] : null), "blocked", array()), "html", null, true);
        echo "</span></a></li>
    </ul>
</nav>";
    }

    public function getTemplateName()
    {
        return "_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  23 => 3,  19 => 1,);
    }
}
/* <nav class="fixed">*/
/*     <ul class="nav nav-pills nav-stacked">*/
/*         <li role="presentation"><a href="{{ url.toRoute(['questions/new']) }}">New Questions <span class="label label-pill label-default">{{ statistics.new }}</span></a> </li>*/
/*         <li role="presentation"><a href="{{ url.toRoute(['questions/index']) }}">Published Questions <span class="label label-pill label-default">{{ statistics.published }}</span></a></li>*/
/*         <li role="presentation"><a href="{{ url.toRoute(['questions/blocked']) }}">Blocked Questions <span class="label label-pill label-default">{{ statistics.blocked }}</span></a></li>*/
/*     </ul>*/
/* </nav>*/
