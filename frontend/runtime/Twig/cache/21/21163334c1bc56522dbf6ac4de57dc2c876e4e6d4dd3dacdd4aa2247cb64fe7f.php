<?php

/* main.twig */
class __TwigTemplate_856a9524c05cef84f27d56392c81927026f4041dbb3daa9e8d4469b9f119dd92 extends yii\twig\Template
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
        <section id=\"header\">
        ";
        // line 15
        $this->env->getExtension('yii2-twig')->beginWidget("nav_bar", array("brandLabel" => (("<div class=\"logo\"><img src=\"" . $this->getAttribute(        // line 16
(isset($context["url"]) ? $context["url"] : null), "base", array(0 => true), "method")) . "/images/png/logo.png\" alt=\"logo\"/></div>"), "brandUrl" => $this->getAttribute(        // line 17
(isset($context["app"]) ? $context["app"] : null), "homeUrl", array()), "options" => array("class" => "header navbar navbar-fixed-top")));
        // line 21
        echo "
        ";
        // line 22
        $context["menuItems"] = array();
        // line 23
        echo "        ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "isGuest", array()) == false)) {
            // line 24
            echo "            ";
            $context["menuItems"] = twig_array_merge((isset($context["menuItems"]) ? $context["menuItems"] : null), array(0 => array("label" => "Main", "url" => array(0 => "/site/index")), 1 => array("label" => "About", "url" => array(0 => "/site/about")), 2 => array("label" => "Manage Me", "url" => array(0 => "/site/manage")), 3 => array("label" => (("logout (" . $this->getAttribute($this->getAttribute($this->getAttribute(            // line 30
(isset($context["app"]) ? $context["app"] : null), "user", array()), "identity", array()), "username", array())) . ")"), "url" => array(0 => "/site/logout"), "linkOptions" => array("data-method" => "post"))));
            // line 36
            echo "        ";
        } else {
            // line 37
            echo "            ";
            $context["menuItems"] = twig_array_merge((isset($context["menuItems"]) ? $context["menuItems"] : null), array(0 => array("label" => "login", "url" => array(0 => "/site/login"))));
            // line 41
            echo "        ";
        }
        // line 42
        echo "        ";
        echo $this->env->getExtension('yii2-twig')->widget("nav", array("options" => array("class" => "navbar-nav navbar-right"), "items" =>         // line 46
(isset($context["menuItems"]) ? $context["menuItems"] : null)));
        // line 47
        echo "
        ";
        // line 48
        $this->env->getExtension('yii2-twig')->endWidget("nav_bar");
        echo "
        </section>
        ";
        // line 50
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
        <footer class=\"footer\">
            <div class=\"container\">
                <p class=\"pull-left\">&copy; My Company ";
        // line 53
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</p>
                <p class=\"pull-right\">";
        // line 54
        echo $this->getAttribute((isset($context["Yii"]) ? $context["Yii"] : null), "powered", array(), "method");
        echo "</p>
            </div>
        </footer>
        ";
        // line 57
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('void')->getCallable(), array($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "endBody", array(), "method"))), "html", null, true);
        echo "
    </body>
</html>
";
        // line 60
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('void')->getCallable(), array($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "endPage", array(), "method"))), "html", null, true);
        echo "
";
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
        return array (  115 => 60,  109 => 57,  103 => 54,  99 => 53,  93 => 50,  88 => 48,  85 => 47,  83 => 46,  81 => 42,  78 => 41,  75 => 37,  72 => 36,  70 => 30,  68 => 24,  65 => 23,  63 => 22,  60 => 21,  58 => 17,  57 => 16,  56 => 15,  51 => 13,  45 => 10,  41 => 9,  37 => 8,  32 => 6,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* {{ register_asset_bundle('frontend/assets/AppAsset') }}  {# asset root for yii advanced template #}*/
/* {{   void(this.beginPage()) }}*/
/* <!DOCTYPE html>*/
/* <html lang="{{ app.language }}">*/
/*     <head>*/
/*         <meta charset="{{ app.charset }}">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <title>{{ html.encode(this.title) }}</title>*/
/*         {{ html.csrfMetaTags | raw }}*/
/*         {{   void(this.head) }}*/
/*     </head>*/
/*     <body>*/
/*         {{   void(this.beginBody()) }}*/
/*         <section id="header">*/
/*         {{ nav_bar_begin({*/
/*             'brandLabel': '<div class="logo"><img src="' ~ url.base(true) ~'/images/png/logo.png" alt="logo"/></div>',*/
/*             'brandUrl' : app.homeUrl,*/
/*             'options' : {*/
/*                 'class' : 'header navbar navbar-fixed-top',*/
/*             }*/
/*         }) }}*/
/*         {% set menuItems = [] %}*/
/*         {% if app.user.isGuest == false %}*/
/*             {% set menuItems = menuItems|merge([*/
/*                 {'label' : 'Main', 'url' : ['/site/index']},*/
/*                 {'label' : 'About', 'url' : ['/site/about']},*/
/*                 {'label' : 'Manage Me', 'url' : ['/site/manage']},*/
/* */
/*                 {*/
/*                     'label' : 'logout (' ~ app.user.identity.username ~ ')',*/
/*                     'url' : ['/site/logout'],*/
/*                     'linkOptions' : {'data-method' : 'post'}*/
/*                 }*/
/*             ])*/
/*         %}*/
/*         {% else %}*/
/*             {% set menuItems = menuItems|merge([*/
/*                 {'label' : 'login', 'url' : ['/site/login']}*/
/*             ])*/
/*         %}*/
/*         {% endif %}*/
/*         {{ nav_widget({*/
/*             'options': {*/
/*                 'class': 'navbar-nav navbar-right',*/
/*             },*/
/*             'items': menuItems*/
/*         }) }}*/
/*         {{ nav_bar_end() }}*/
/*         </section>*/
/*         {{ content | raw}}*/
/*         <footer class="footer">*/
/*             <div class="container">*/
/*                 <p class="pull-left">&copy; My Company {{ 'now'|date('Y') }}</p>*/
/*                 <p class="pull-right">{{ Yii.powered() | raw }}</p>*/
/*             </div>*/
/*         </footer>*/
/*         {{   void(this.endBody()) }}*/
/*     </body>*/
/* </html>*/
/* {{   void(this.endPage()) }}*/
/* */
