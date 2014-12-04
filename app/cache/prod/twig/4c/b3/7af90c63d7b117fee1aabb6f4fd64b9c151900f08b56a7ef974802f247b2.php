<?php

/* ::base.json.twig */
class __TwigTemplate_4cb37af90c63d7b117fee1aabb6f4fd64b9c151900f08b56a7ef974802f247b2 extends Twig_Template
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
        echo twig_jsonencode_filter((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
        echo "
";
    }

    public function getTemplateName()
    {
        return "::base.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
