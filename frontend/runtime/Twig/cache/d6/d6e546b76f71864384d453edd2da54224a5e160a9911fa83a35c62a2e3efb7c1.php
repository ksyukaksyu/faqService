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
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('void')->getCallable(), array($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "beginPage", array(), "method"))), "html", null, true);
        echo "
<!DOCTYPE html>
<html lang=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "language", array()), "html", null, true);
        echo "\">
<head>
    <meta charset=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "charset", array()), "html", null, true);
        echo "\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["html"]) ? $context["html"] : null), "encode", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "title", array())), "method"), "html", null, true);
        echo "</title>
    ";
        // line 9
        echo $this->getAttribute((isset($context["html"]) ? $context["html"] : null), "csrfMetaTags", array());
        echo "
    ";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('void')->getCallable(), array($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "head", array()))), "html", null, true);
        echo "
</head>
<body>
";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('void')->getCallable(), array($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "beginBody", array(), "method"))), "html", null, true);
        echo "

<header class=\"page-header\">
    ";
        // line 16
        $this->env->getExtension('yii2-twig')->beginWidget("nav_bar", array("brandLabel" => "<img src=\"/img/faq-logo.png\" alt=\"logo\" /><p class=\"brand-text\">&lt;?askAnythingSpecial?&gt;</p>", "brandUrl" => $this->getAttribute(        // line 18
(isset($context["app"]) ? $context["app"] : null), "homeUrl", array()), "options" => array("class" => "navbar navbar-fixed-top")));
        // line 22
        echo "
    ";
        // line 23
        $context["menuItems"] = array();
        // line 24
        echo "    ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "isGuest", array()) == false)) {
            // line 25
            echo "        ";
            $context["menuItems"] = twig_array_merge((isset($context["menuItems"]) ? $context["menuItems"] : null), array(0 => array("label" => "Main", "url" => array(0 => "/")), 1 => array("label" => "Categories", "url" => array(0 => "/categories")), 2 => array("label" => "Last Questions", "url" => array(0 => "/questions/new")), 3 => array("label" => "Stop Words", "url" => array(0 => "/stopwords")), 4 => array("label" => "Users", "url" => array(0 => "/users")), 5 => array("label" => (("Logout (" . $this->getAttribute($this->getAttribute($this->getAttribute(            // line 31
(isset($context["app"]) ? $context["app"] : null), "user", array()), "identity", array()), "username", array())) . ")"), "url" => array(0 => "/site/logout"), "linkOptions" => array("data-method" => "post"))));
            // line 36
            echo "    ";
        } else {
            // line 37
            echo "        ";
            $context["menuItems"] = twig_array_merge((isset($context["menuItems"]) ? $context["menuItems"] : null), array(0 => array("label" => "Sign In", "url" => array(0 => "/site/login"))));
            // line 40
            echo "    ";
        }
        // line 41
        echo "    ";
        echo $this->env->getExtension('yii2-twig')->widget("nav", array("options" => array("class" => "navbar-nav navbar-right"), "items" =>         // line 45
(isset($context["menuItems"]) ? $context["menuItems"] : null)));
        // line 46
        echo "
    ";
        // line 47
        $this->env->getExtension('yii2-twig')->endWidget("nav_bar");
        echo "
</header>
<main class=\"content\">
    <div class=\"container\">
        ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "info", 1 => "success", 2 => "warning", 3 => "error"));
        foreach ($context['_seq'] as $context["_key"] => $context["alert"]) {
            // line 52
            echo "            ";
            if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "hasFlash", array(0 => $context["alert"]), "method")) {
                // line 53
                echo "                <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["alert"], "html", null, true);
                echo "\">
                    <button class=\"close\" data-dismiss=\"alert\">&times;</button>
                    ";
                // line 55
                echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "getFlash", array(0 => $context["alert"]), "method"), "<br/>"), "html", null, true);
                echo "
                </div>
            ";
            }
            // line 58
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
        ";
        // line 60
        $this->displayBlock('content', $context, $blocks);
        // line 62
        echo "        ";
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
    </div>
</main>
<footer class=\"footer\">
    <div class=\"container\">
        <p class=\"pull-left\">&copy; Netology Diploma ";
        // line 67
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</p>
        <p class=\"pull-right\">Powered by <a href=\"//github.com/ksyukaksyu\">Ksyukaksyu</a></p>
    </div>
</footer>
";
        // line 71
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('void')->getCallable(), array($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "endBody", array(), "method"))), "html", null, true);
        echo "
</body>
</html>
";
        // line 74
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('void')->getCallable(), array($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "endPage", array(), "method"))), "html", null, true);
        echo "
";
    }

    // line 60
    public function block_content($context, array $blocks = array())
    {
        // line 61
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
        return array (  157 => 61,  154 => 60,  148 => 74,  142 => 71,  135 => 67,  126 => 62,  124 => 60,  121 => 59,  115 => 58,  109 => 55,  103 => 53,  100 => 52,  96 => 51,  89 => 47,  86 => 46,  84 => 45,  82 => 41,  79 => 40,  76 => 37,  73 => 36,  71 => 31,  69 => 25,  66 => 24,  64 => 23,  61 => 22,  59 => 18,  58 => 16,  52 => 13,  46 => 10,  42 => 9,  38 => 8,  33 => 6,  28 => 4,  23 => 2,  20 => 1,);
    }
}
/* {{ register_asset_bundle('frontend/assets/AppAsset') }}  {# asset root for yii advanced template #}*/
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
/*         'brandLabel': '<img src="/img/faq-logo.png" alt="logo" /><p class="brand-text">&lt;?askAnythingSpecial?&gt;</p>',*/
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
/*         {'label' : 'Last Questions', 'url' : ['/questions/new']},*/
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
/*         {% for alert in [ 'info', 'success', 'warning', 'error'] %}*/
/*             {% if app.session.hasFlash(alert) %}*/
/*                 <div class="alert alert-{{ alert }}">*/
/*                     <button class="close" data-dismiss="alert">&times;</button>*/
/*                     {{ app.session.getFlash(alert)|join('<br/>') }}*/
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
