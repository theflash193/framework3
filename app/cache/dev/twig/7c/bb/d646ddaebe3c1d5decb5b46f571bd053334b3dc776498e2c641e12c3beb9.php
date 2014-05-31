<?php

/* grassIntraBundle:Blog:menu.html.twig */
class __TwigTemplate_7cbbd646ddaebe3c1d5decb5b46f571bd053334b3dc776498e2c641e12c3beb9 extends Twig_Template
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
        // line 2
        echo "
<h3>Les derniers articles</h3>

<ul class=\"nav nav-pills nav-stacked\">
  ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_articles"]) ? $context["liste_articles"] : $this->getContext($context, "liste_articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 7
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sdzblog_voir", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre"), "html", null, true);
            echo "</a></li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "grassIntraBundle:Blog:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 6,  19 => 2,  182 => 105,  179 => 104,  177 => 103,  174 => 102,  170 => 91,  167 => 90,  160 => 9,  157 => 8,  151 => 6,  145 => 107,  143 => 102,  131 => 92,  129 => 90,  123 => 87,  117 => 84,  113 => 83,  97 => 69,  37 => 11,  35 => 8,  23 => 1,  63 => 16,  60 => 15,  55 => 17,  52 => 15,  46 => 10,  43 => 8,  40 => 9,  33 => 4,  30 => 6,  81 => 23,  74 => 21,  66 => 18,  62 => 17,  56 => 16,  53 => 15,  48 => 14,  42 => 15,  39 => 9,  32 => 6,  29 => 7,);
    }
}
