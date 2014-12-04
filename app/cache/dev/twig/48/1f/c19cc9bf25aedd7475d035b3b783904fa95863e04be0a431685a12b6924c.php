<?php

/* CroangelsESVEcommerceBundle:Panier:voir.html.twig */
class __TwigTemplate_481fc19cc9bf25aedd7475d035b3b783904fa95863e04be0a431685a12b6924c extends Twig_Template
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
        echo "<table class=\"table table-hover table-\">
  <tr>
    <th style=\"width:5%;\">
      &nbsp;
    </th>
    <th style=\"width:60%;\">
      Désignation
    </th>
    <th style=\"width:10%;\">
      <abbr title=\"Prix Unitaire\">PU</abbr>
    </th>
    <th style=\"width:10%;\">
      <abbr title=\"Quantité\">Qté</abbr>
    </th>
    <th style=\"width:15%;\">
      Total
    </th>
  </tr>

";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), "ligneCommandes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["ligneCommande"]) {
            // line 21
            echo "  <tr>
    <td>
      <a id=\"supp_";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligneCommande"], "id", array()), "html", null, true);
            echo "\"><i class=\"fa fa-remove\"></i></a>
    </td>
    <td>
      <a href=\"\">
        ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ligneCommande"], "article", array()), "libelle", array()), "html", null, true);
            echo "
      </a>
    </td>
    <td>
      ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ligneCommande"], "article", array()), "tarif", array()), "html", null, true);
            echo " €
    </td>
    <td>
      ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligneCommande"], "quantite", array()), "html", null, true);
            echo "
    </td>
    <td>
      ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligneCommande"], "total", array()), "html", null, true);
            echo " € 
    </td>
  </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligneCommande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "CroangelsESVEcommerceBundle:Panier:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 41,  74 => 37,  68 => 34,  62 => 31,  55 => 27,  48 => 23,  44 => 21,  40 => 20,  19 => 1,);
    }
}
