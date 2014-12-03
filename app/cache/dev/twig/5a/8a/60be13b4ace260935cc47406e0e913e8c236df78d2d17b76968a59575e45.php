<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_5a8a60be13b4ace260935cc47406e0e913e8c236df78d2d17b76968a59575e45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div class=\"alert alert-danger alert-dismissible\" role=\"alert\">
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Fermer</span></button>
      <strong>Erreur!</strong> ";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
    </div>
";
        }
        // line 12
        echo "
<form action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" role=\"form\" class=\"form-horizontal\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

    <label for=\"username\" class=\"col-xs-3\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <div class=\"col-xs-9\">
      <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
    </div>
    <label for=\"password\" class=\"col-xs-3\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <div class=\"col-xs-9\">
      <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" />
    </div>


    <label for=\"remember_me\" class=\"col-xs-3\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <div class=\"col-xs-9\">
      <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    </div>

    <label for=\"password\" class=\"col-xs-3\">&nbsp;</label>
    <div class=\"col-xs-9\">
      <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-success\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>

</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 33,  74 => 26,  65 => 20,  60 => 18,  55 => 16,  50 => 14,  46 => 13,  43 => 12,  37 => 9,  33 => 7,  31 => 6,  28 => 5,);
    }
}
