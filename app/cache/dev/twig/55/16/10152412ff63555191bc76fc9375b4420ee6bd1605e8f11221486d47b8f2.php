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
    <!-- <div class=\"row\">
      <div class=\"col-xs-2\">
        <h1><i class=\"fa fa-shopping-cart\"></i>&nbsp;</h1>
      </div>
      <div class=\"col-xs-8\">
        <span class=\"nbArticles\">";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), "nbArticles", array()), "html", null, true);
            echo "</span> Article(s) <br />
        Total : <span class=\"montant\">";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["panier"]) ? $context["panier"] : $this->getContext($context, "panier")), "montant", array()), "html", null, true);
            echo " €</span>
      </div>
    </div>
    <div class=\"row\">
      <button name=\"button\" class=\"col-xs-12 btn btn-default\">Valider la commande</button>
    </div>
  -->
    <img src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ressources/img/loader.gif"), "html", null, true);
            echo "\" alt=\"Chargement...\" title=\"Chargment en cours...\"
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
        return array (  43 => 16,  33 => 9,  29 => 8,  21 => 2,  19 => 1,);
    }
}
