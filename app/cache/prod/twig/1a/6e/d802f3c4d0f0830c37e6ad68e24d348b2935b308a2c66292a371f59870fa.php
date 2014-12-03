<?php

/* CroangelsESVEcommerceBundle:TPL:categories.html.twig */
class __TwigTemplate_1a6ed802f3c4d0f0830c37e6ad68e24d348b2935b308a2c66292a371f59870fa extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 2
            echo "  ";
            if (($this->getAttribute($context["categorie"], "nom", array()) != "Racine")) {
                // line 3
                echo "    ";
                if ((twig_length_filter($this->env, $this->getAttribute($context["categorie"], "fils", array())) > 0)) {
                    // line 4
                    echo "      <li class=\"dropdown-submenu\">
        <a href=\"#\">";
                    // line 5
                    echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom", array()), "html", null, true);
                    echo "</a>
        <ul class=\"dropdown-menu\">
          ";
                    // line 7
                    $this->env->loadTemplate("CroangelsESVEcommerceBundle:TPL:categories.html.twig")->display(array_merge($context, array("categories" => $this->getAttribute($context["categorie"], "fils", array()))));
                    // line 8
                    echo "        </ul>
      </li>
    ";
                } else {
                    // line 11
                    echo "      <li>
        <a ng-click=\"filtreProduit.categorie = '";
                    // line 12
                    echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom", array()), "html", null, true);
                    echo "'\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom", array()), "html", null, true);
                    echo "</a>
      </li>
    ";
                }
                // line 15
                echo "  ";
            } else {
                // line 16
                echo "
  <li class=\"dropdown\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">
      Catégories
      <span class=\"caret\"></span>
    </a>
      <ul class=\"dropdown-menu multi-level\" role=\"menu\" aria-labelledby=\"dropdownMenu\">
        ";
                // line 23
                $this->env->loadTemplate("CroangelsESVEcommerceBundle:TPL:categories.html.twig")->display(array_merge($context, array("categories" => $this->getAttribute($context["categorie"], "fils", array()))));
                // line 24
                echo "      </ul>
 </li>
  ";
            }
            // line 27
            echo "

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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "CroangelsESVEcommerceBundle:TPL:categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 27,  82 => 24,  80 => 23,  71 => 16,  68 => 15,  60 => 12,  57 => 11,  52 => 8,  50 => 7,  45 => 5,  42 => 4,  39 => 3,  36 => 2,  19 => 1,);
    }
}
