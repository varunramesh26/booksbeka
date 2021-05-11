<?php

/* default/template/account/forgotten.twig */
class __TwigTemplate_af74b00741b19201a6b7ae017875b408158f97f6c12d287bf3833dcdd2da8ca6 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<div id=\"account-forgotten\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  ";
        // line 8
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 9
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "</div>
  ";
        }
        // line 11
        echo "  <div class=\"row\">";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 12
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 13
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 14
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 15
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 16
            echo "    ";
        } else {
            // line 17
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 18
            echo "    ";
        }
        // line 19
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h1>";
        // line 20
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <p>";
        // line 21
        echo (isset($context["text_email"]) ? $context["text_email"] : null);
        echo "</p>
      <form action=\"";
        // line 22
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        <fieldset>
          <legend>";
        // line 24
        echo (isset($context["text_your_email"]) ? $context["text_your_email"] : null);
        echo "</legend>
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-email\">";
        // line 26
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 28
        echo (isset($context["email"]) ? $context["email"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" id=\"input-email\" class=\"form-control\" />
            </div>
          </div>
        </fieldset>
        <div class=\"buttons clearfix\">
          <div class=\"pull-left\"><a href=\"";
        // line 33
        echo (isset($context["back"]) ? $context["back"] : null);
        echo "\" class=\"btn btn-default\">";
        echo (isset($context["button_back"]) ? $context["button_back"] : null);
        echo "</a></div>
          <div class=\"pull-right\">
            <input type=\"submit\" value=\"";
        // line 35
        echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
        echo "\" class=\"btn btn-primary\" />
          </div>
        </div>
      </form>
      ";
        // line 39
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 40
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
";
        // line 42
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "default/template/account/forgotten.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 42,  134 => 40,  130 => 39,  123 => 35,  116 => 33,  106 => 28,  101 => 26,  96 => 24,  91 => 22,  87 => 21,  83 => 20,  76 => 19,  73 => 18,  70 => 17,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  56 => 12,  51 => 11,  45 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="account-forgotten" class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*     <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   {% if error_warning %}*/
/*   <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}</div>*/
/*   {% endif %}*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*     {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*     {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*     {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <p>{{ text_email }}</p>*/
/*       <form action="{{ action }}" method="post" enctype="multipart/form-data" class="form-horizontal">*/
/*         <fieldset>*/
/*           <legend>{{ text_your_email }}</legend>*/
/*           <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-email">{{ entry_email }}</label>*/
/*             <div class="col-sm-10">*/
/*               <input type="text" name="email" value="{{ email }}" placeholder="{{ entry_email }}" id="input-email" class="form-control" />*/
/*             </div>*/
/*           </div>*/
/*         </fieldset>*/
/*         <div class="buttons clearfix">*/
/*           <div class="pull-left"><a href="{{ back }}" class="btn btn-default">{{ button_back }}</a></div>*/
/*           <div class="pull-right">*/
/*             <input type="submit" value="{{ button_continue }}" class="btn btn-primary" />*/
/*           </div>*/
/*         </div>*/
/*       </form>*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* {{ footer }}*/
