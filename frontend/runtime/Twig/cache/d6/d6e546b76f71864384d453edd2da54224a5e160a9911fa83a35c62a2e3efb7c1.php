<?php

/* main.twig */
class __TwigTemplate_ffd013ffd849eea3b8509743c6dc4eb114362e3ebd7147a0b600c646660ebc6b extends yii\twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo $this->env->getExtension('yii2-twig')->registerAssetBundle($context, "frontend/assets/AppAsset");
        echo "  ";
        // line 2
        $this->env->getExtension('yii2-twig')->addUses("yii/widgets/Breadcrumbs");
        echo "
";
        // line 3
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('void')->getCallable(), array($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "beginPage", array(), "method"))), "html", null, true);
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "language", array()), "html", null, true);
        echo "\">
<head>
    <meta charset=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "charset", array()), "html", null, true);
        echo "\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["html"]) ? $context["html"] : null), "encode", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "title", array())), "method"), "html", null, true);
        echo "</title>
    ";
        // line 10
        echo $this->getAttribute((isset($context["html"]) ? $context["html"] : null), "csrfMetaTags", array());
        echo "
    ";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('void')->getCallable(), array($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "head", array()))), "html", null, true);
        echo "
</head>
<body>
";
        // line 14
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('void')->getCallable(), array($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "beginBody", array(), "method"))), "html", null, true);
        echo "

<header class=\"page-header\">
    ";
        // line 17
        $this->env->getExtension('yii2-twig')->beginWidget("nav_bar", array("brandLabel" => "<img src=\"./img/faq-logo.png\" alt=\"logo\" /><p class=\"brand-text\">&lt;?askAnythingSpecial?&gt;</p>", "brandUrl" => $this->getAttribute(        // line 19
(isset($context["app"]) ? $context["app"] : null), "homeUrl", array()), "options" => array("class" => "navbar navbar-fixed-top")));
        // line 23
        echo "
    ";
        // line 24
        $context["menuItems"] = array();
        // line 25
        echo "    ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "isGuest", array()) == false)) {
            // line 26
            echo "        ";
            $context["menuItems"] = twig_array_merge((isset($context["menuItems"]) ? $context["menuItems"] : null), array(0 => array("label" => "Main", "url" => array(0 => "/")), 1 => array("label" => "Categories", "url" => array(0 => "/categories")), 2 => array("label" => "Questions", "url" => array(0 => "/questions/new")), 3 => array("label" => "Stop Words", "url" => array(0 => "/stopwords")), 4 => array("label" => "Users", "url" => array(0 => "/users")), 5 => array("label" => (("Logout (" . $this->getAttribute($this->getAttribute($this->getAttribute(            // line 32
(isset($context["app"]) ? $context["app"] : null), "user", array()), "identity", array()), "username", array())) . ")"), "url" => array(0 => "/site/logout"), "linkOptions" => array("data-method" => "post"))));
            // line 37
            echo "    ";
        } else {
            // line 38
            echo "        ";
            $context["menuItems"] = twig_array_merge((isset($context["menuItems"]) ? $context["menuItems"] : null), array(0 => array("label" => "Sign In", "url" => array(0 => "/site/login"))));
            // line 41
            echo "    ";
        }
        // line 42
        echo "    ";
        echo $this->env->getExtension('yii2-twig')->widget("nav", array("options" => array("class" => "navbar-nav navbar-right"), "items" =>         // line 46
(isset($context["menuItems"]) ? $context["menuItems"] : null)));
        // line 47
        echo "
    ";
        // line 48
        $this->env->getExtension('yii2-twig')->endWidget("nav_bar");
        echo "
</header>
<main class=\"content\">
    <div class=\"container\">
        ";
        // line 52
        echo $this->env->getExtension('yii2-twig')->widget("breadcrumbs", array("links" => (($this->getAttribute($this->getAttribute(        // line 53
(isset($context["this"]) ? $context["this"] : null), "params", array(), "any", false, true), "breadcrumbs", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "params", array(), "any", false, true), "breadcrumbs", array(), "array"), array())) : (array()))));
        // line 54
        echo "
        ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "info", 1 => "success", 2 => "warning", 3 => "error"));
        foreach ($context['_seq'] as $context["_key"] => $context["alert"]) {
            // line 56
            echo "            ";
            if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "hasFlash", array(0 => $context["alert"]), "method")) {
                // line 57
                echo "                <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["alert"], "html", null, true);
                echo "\">
                    <button class=\"close\" data-dismiss=\"alert\">&times;</button>
                    ";
                // line 59
                echo twig_join_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "getFlash", array(0 => $context["alert"]), "method"), "<br/>");
                echo "
                </div>
            ";
            }
            // line 62
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "
        ";
        // line 64
        $this->displayBlock('content', $context, $blocks);
        // line 66
        echo "        ";
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
    </div>
</main>
<footer class=\"footer\">
    <div class=\"container\">
        <p class=\"pull-left\">&copy; Netology Diploma ";
        // line 71
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</p>
        <p class=\"pull-right\">Powered by <a href=\"//github.com/ksyukaksyu\">Ksyukaksyu</a></p>
    </div>
</footer>
";
        // line 75
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('void')->getCallable(), array($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "endBody", array(), "method"))), "html", null, true);
        echo "
</body>
</html>
";
        // line 78
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('void')->getCallable(), array($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "endPage", array(), "method"))), "html", null, true);
        echo "
";
    }

    // line 64
    public function block_content($context, array $blocks = array())
    {
        // line 65
        echo "        ";
    }

    public function getTemplateName()
    {
        return "main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 65,  164 => 64,  158 => 78,  152 => 75,  145 => 71,  136 => 66,  134 => 64,  131 => 63,  125 => 62,  119 => 59,  113 => 57,  110 => 56,  106 => 55,  103 => 54,  101 => 53,  100 => 52,  93 => 48,  90 => 47,  88 => 46,  86 => 42,  83 => 41,  80 => 38,  77 => 37,  75 => 32,  73 => 26,  70 => 25,  68 => 24,  65 => 23,  63 => 19,  62 => 17,  56 => 14,  50 => 11,  46 => 10,  42 => 9,  37 => 7,  32 => 5,  27 => 3,  23 => 2,  20 => 1,);
    }
}
/* {{ register_asset_bundle('frontend/assets/AppAsset') }}  {# asset root for yii advanced template #}*/
/* {{ use('yii/widgets/Breadcrumbs') }}*/
/* {{ void(this.beginPage()) }}*/
/* <!DOCTYPE html>*/
/* <html lang="{{ app.language }}">*/
/* <head>*/
/*     <meta charset="{{ app.charset }}">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <title>{{ html.encode(this.title) }}</title>*/
/*     {{ html.csrfMetaTags | raw }}*/
/*     {{ void(this.head) }}*/
/* </head>*/
/* <body>*/
/* {{ void(this.beginBody()) }}*/
/* */
/* <header class="page-header">*/
/*     {{ nav_bar_begin({*/
/*         'brandLabel': '<img src="./img/faq-logo.png" alt="logo" /><p class="brand-text">&lt;?askAnythingSpecial?&gt;</p>',*/
/*         'brandUrl' : app.homeUrl,*/
/*         'options' : {*/
/*             'class' : 'navbar navbar-fixed-top',*/
/*         }*/
/*     }) }}*/
/*     {% set menuItems = [] %}*/
/*     {% if app.user.isGuest == false %}*/
/*         {% set menuItems = menuItems|merge([*/
/*         {'label' : 'Main', 'url' : ['/']},*/
/*         {'label' : 'Categories', 'url' : ['/categories']},*/
/*         {'label' : 'Questions', 'url' : ['/questions/new']},*/
/*         {'label' : 'Stop Words', 'url' : ['/stopwords']},*/
/*         {'label' : 'Users', 'url' : ['/users']},*/
/*         {'label' : 'Logout (' ~ app.user.identity.username ~ ')',*/
/*         'url' : ['/site/logout'],*/
/*         'linkOptions' : {'data-method' : 'post'}*/
/*         }*/
/*         ]) %}*/
/*     {% else %}*/
/*         {% set menuItems = menuItems|merge([*/
/*         {'label' : 'Sign In', 'url' : ['/site/login']}*/
/*         ]) %}*/
/*     {% endif %}*/
/*     {{ nav_widget({*/
/*         'options': {*/
/*             'class': 'navbar-nav navbar-right',*/
/*         },*/
/*         'items': menuItems*/
/*     }) }}*/
/*     {{ nav_bar_end() }}*/
/* </header>*/
/* <main class="content">*/
/*     <div class="container">*/
/*         {{ breadcrumbs_widget({*/
/*             'links' : this.params['breadcrumbs'] | default([]),*/
/*         }) }}*/
/*         {% for alert in [ 'info', 'success', 'warning', 'error'] %}*/
/*             {% if app.session.hasFlash(alert) %}*/
/*                 <div class="alert alert-{{ alert }}">*/
/*                     <button class="close" data-dismiss="alert">&times;</button>*/
/*                     {{ app.session.getFlash(alert)|join('<br/>') | raw}}*/
/*                 </div>*/
/*             {% endif %}*/
/*         {% endfor %}*/
/* */
/*         {% block content %}*/
/*         {% endblock %}*/
/*         {{ content | raw }}*/
/*     </div>*/
/* </main>*/
/* <footer class="footer">*/
/*     <div class="container">*/
/*         <p class="pull-left">&copy; Netology Diploma {{ 'now'|date('Y') }}</p>*/
/*         <p class="pull-right">Powered by <a href="//github.com/ksyukaksyu">Ksyukaksyu</a></p>*/
/*     </div>*/
/* </footer>*/
/* {{ void(this.endBody()) }}*/
/* </body>*/
/* </html>*/
/* {{ void(this.endPage()) }}*/
/* */
