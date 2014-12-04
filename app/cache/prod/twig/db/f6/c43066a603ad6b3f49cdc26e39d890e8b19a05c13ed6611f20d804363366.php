<?php

/* CroangelsESVEcommerceBundle:Default:index.html.twig */
class __TwigTemplate_dbf6c43066a603ad6b3f49cdc26e39d890e8b19a05c13ed6611f20d804363366 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'contenu' => array($this, 'block_contenu'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_contenu($context, array $blocks = array())
    {
        // line 4
        echo "
  <div class=\"filterBox\">
    <label for=\"\">Trié Par : </label>
    <select ng-model=\"ordre\">
      <option value=\"tarif\">Prix</option>
      <option value=\"libelle\">Nom</option>
    </select>

    <select ng-model=\"sens\">
      <option value=\"true\">Croissant</option>
      <option value=\"false\">Décroissant</option>
    </select>

    <label for=\"\">Rechercher : </label>
    <select ng-model=\"collonnefiltre\">
      <option value=\"\$\" selected>Tous</option>
      <option value=\"libelle\">Nom</option>
      <option value=\"descriptionLongue\">Description</option>
    </select>
    <input ng-model=\"filtreProduit.collonnefiltre\" />
  </filter>


  <div class=\"affichageVignette\" ng-if=\"affichage='vignette'\">
    <ul class=\"thumbnail-list\" id=\"ProductList\">
      <li class=\"col-xl-2 col-md-4 col-xs-6\" ng-repeat=\"product in products | filter:filtreProduit | orderBy:ordre:sens\">
        <div class=\"row\">
          <a href=\"#\" class=\"col-md-12\">
            <div id=\"carousel-product{[{product.id}]}\" class=\"carousel slide\" data-ride=\"carousel\">
              <div class=\"carousel-inner\" role=\"listbox\">

                <div class=\"item active\" ng-repeat-start=\"(key, vignette) in product.vignettes\" ng-if=\"\$first\">
                  <img class=\"img-responsive vignette-box\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ressources/img/{[{ vignette.url}]}"), "html", null, true);
        echo "\" alt=\"{[{ vignette.alt }]}\" title=\"{[{ vignette.title }]}\">
                </div>
                <div class=\"item\" ng-repeat-end=\"(key, vignette) in product.vignettes\" ng-if=\"!\$first\">
                  <img class=\"vignette-box\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ressources/img/{[{ vignette.url}]}"), "html", null, true);
        echo "\" alt=\"{[{ vignette.alt }]}\" title=\"{[{ vignette.title }]}\">
                </div>
              </div>
            </div>
          </a>
        </div>


        <div class=\"row\">
          <div class=\"col-md-12\">
            <h4 class=\"product-title\">{[{ product.libelle }]}</h4>
            <div class=\"product-price\">
              <span class=\"normal-price\">{[{product.tarif}]}</span><br />
              <button type=\"button\" class=\"btn btn-default navbar-btn btnAddOneProduct\" id=\"btnAddProduct_{[{ product.id }]}\"><i class=\"fa fa-shopping-cart\"></i> Ajouter au panier</button>
            </div>

          </div>
        </div>
      </li>
    </ul>
  </div>

  ";
        // line 61
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("CroangelsESVEcommerceBundle:Panier:getInfo"), array());
        // line 62
        echo "
";
    }

    // line 65
    public function block_javascripts($context, array $blocks = array())
    {
        // line 66
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ressources/js/angular.min.js"), "html", null, true);
        echo "\"></script>
  <script charset=\"utf-8\">
    var urlProducts = \"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("croangels_esv_ecommerce_ws_get_products", array("_format" => "json"));
        echo "\";
    var urlCategories = \"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("croangels_esv_ecommerce_ws_get_categories", array("_format" => "json"));
        echo "\";
  </script>
  <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ressources/js/accueil.angular.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "CroangelsESVEcommerceBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 71,  117 => 69,  113 => 68,  107 => 66,  104 => 65,  99 => 62,  97 => 61,  72 => 39,  66 => 36,  32 => 4,  29 => 3,);
    }
}
