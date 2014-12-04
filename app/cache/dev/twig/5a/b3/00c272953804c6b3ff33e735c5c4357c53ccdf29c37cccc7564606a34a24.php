<?php

/* ::base.html.twig */
class __TwigTemplate_5ab300c272953804c6b3ff33e735c5c4357c53ccdf29c37cccc7564606a34a24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'contenu' => array($this, 'block_contenu'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (array_key_exists("form", $context)) {
            // line 2
            echo "  ";
            $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "CroangelsESVUtilisateurBundle:Form:bootstrap.html.twig"));
        }
        // line 4
        echo "
<!DOCTYPE html>
<html lang=\"fr\" ng-app=\"monApplication\">
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta name=\"description\" content=\"SITE E-COMMERCE ESV\">
  <meta name=\"author\" content=\"PECQUERIE VINCENT\">
  <link rel=\"icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ressources/img/favicon.ico"), "html", null, true);
        echo "\">

  <title>E Com'herse</title>

  <!-- Bootstrap core CSS -->
  <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ressources/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ressources/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ressources/css/font-awesome.min.css"), "html", null, true);
        echo "\">
  <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ressources/libs/select2/select2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
  <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ressources/libs/select2/select2-bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
  <![endif]-->
</head>
<body ng-controller=\"ProductListController\">
  <nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
          <span class=\"sr-only\">Toggle navigation</span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"#\">E com'Herse</a>
      </div>
      <div id=\"navbar\" class=\"collapse navbar-collapse\">
        <ul class=\"nav navbar-nav\">
          <li class=\"active\"><a href=\"#\">Accueil</a></li>
          ";
        // line 45
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("CroangelsESVEcommerceBundle:Default:getCategories"), array());
        // line 46
        echo "        </ul>
        <ul class=\"nav navbar-right navbar-nav\">
          ";
        // line 48
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "nom", array(), "any", true, true)) {
            // line 49
            echo "          <li class=\"dropdown\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">
              ";
            // line 51
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array())), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenom", array())), "html", null, true);
            echo "
              <span class=\"caret\"></span>
            </a>
            <ul class=\"dropdown-menu\" role=\"menu\">
              <li><a href=\"#\">Mes Commandes</a></li>
              <li><a href=\"#\">Mon Panier</a></li>
              <li><a href=\"";
            // line 57
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\">Mon Profil</a></li>
              <li class=\"divider\"></li>
              <li><a href=\"";
            // line 59
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Se déconnecter</a></li>
            </ul>
          </li>
          ";
        } else {
            // line 63
            echo "          <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\" id=\"lienShowMenu\">Connexion</a></li>
          <div id=\"menuConnexion\">
            <form id=\"form_id\" action=\"";
            // line 65
            echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
            echo "\" method=\"post\" role=\"form\" class=\"form-horizontal\">
              <label class=\"col-sm-4 control-label\">
                Nom d'utilisateur :
              </label>
              <div class=\"col-sm-8\">
                <input type=\"text\" name=\"_username\" placeholder=\"Ex: jDupond\" class=\"form-control\">
              </div>

              <label class=\"col-sm-4 control-label\">
                Mot de passe :
              </label>
              <div class=\"col-sm-8\">
                <input type=\"password\" name=\"_password\" placeholder=\"Ex: jQ2x\$a10\" class=\"form-control\">
              </div>

              <label class=\"col-sm-4 control-label\">&nbsp;</label>
              <div class=\"col-sm-8\">
                <button name=\"button\" class=\"btn btn-default form-control\"><i class=\"fa fa-power-off\"></i> Se Connecter</button>
              </div>
              <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fos_csrf_provider"]) ? $context["fos_csrf_provider"] : $this->getContext($context, "fos_csrf_provider")), "generateCsrfToken", array(0 => "authenticate"), "method"), "html", null, true);
            echo "\" />
            </form>
          </div>
          <li><a href=\"";
            // line 87
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">S'inscrire</a></li>
          ";
        }
        // line 89
        echo "        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>

  <div class=\"container\">

        ";
        // line 96
        $this->displayBlock('contenu', $context, $blocks);
        // line 101
        echo "
  </div><!-- /.container -->

  ";
        // line 104
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("CroangelsESVEcommerceBundle:Panier:getInfo"));
        echo "

  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 110
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>

  <script src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ressources/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ressources/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ressources/libs/select2/select2.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ressources/js/custom.js"), "html", null, true);
        echo "\"></script>

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("ressources/js/ie10-viewport-bug-workaround.js"), "html", null, true);
        echo "\"></script>

  ";
        // line 120
        $this->displayBlock('javascripts', $context, $blocks);
        // line 123
        echo "

  <!-- ATTENTION FICHIER JS INCLU VIA TWIG -->

</body>
</html>
";
    }

    // line 96
    public function block_contenu($context, array $blocks = array())
    {
        // line 97
        echo "
        <h1>Page en construction....</h1>

        ";
    }

    // line 120
    public function block_javascripts($context, array $blocks = array())
    {
        // line 121
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 121,  240 => 120,  233 => 97,  230 => 96,  220 => 123,  218 => 120,  213 => 118,  207 => 115,  203 => 114,  199 => 113,  195 => 112,  190 => 110,  186 => 109,  178 => 104,  173 => 101,  171 => 96,  162 => 89,  157 => 87,  151 => 84,  129 => 65,  123 => 63,  116 => 59,  111 => 57,  100 => 51,  96 => 49,  94 => 48,  90 => 46,  88 => 45,  62 => 22,  58 => 21,  54 => 20,  50 => 19,  46 => 18,  38 => 13,  27 => 4,  23 => 2,  21 => 1,);
    }
}
