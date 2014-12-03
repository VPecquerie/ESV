<?php

/* ::base.json.twig */
class __TwigTemplate_0249c496cdd85839b7de656f2f35941a882a8d048af0774fa27ac621e77daa3b extends Twig_Template
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
