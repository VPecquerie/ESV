<?php

/* CroangelsESVEcommerceBundle:Panier:getInfo.html.twig */
class __TwigTemplate_551610152412ff63555191bc76fc9375b4420ee6bd1605e8f11221486d47b8f2 extends Twig_Template
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
        if ((!(null === (isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier"))))) {
            // line 2
            echo "  <div id=\"panier-info\">
    <div>
      ";
            // line 4
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), "ligneCommandes", array())), "html", null, true);
            echo " Article(s) <br />
      Montant total : ";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), "montant", array()), "html", null, true);
            echo "
    </div>
    <button name=\"button\"><i class=\"fa fa-shopping-cart\"></i> Valider la commande</button>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "CroangelsESVEcommerceBundle:Panier:getInfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
