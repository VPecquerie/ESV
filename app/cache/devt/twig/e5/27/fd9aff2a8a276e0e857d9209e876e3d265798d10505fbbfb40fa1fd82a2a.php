<?php

/* SonataCoreBundle:Form:datepicker.html.twig */
class __TwigTemplate_e527fd9aff2a8a276e0e857d9209e876e3d265798d10505fbbfb40fa1fd82a2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_type_date_picker_widget' => array($this, 'block_sonata_type_date_picker_widget'),
            'sonata_type_datetime_picker_widget' => array($this, 'block_sonata_type_datetime_picker_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $this->displayBlock('sonata_type_date_picker_widget', $context, $blocks);
        // line 32
        echo "
";
        // line 33
        $this->displayBlock('sonata_type_datetime_picker_widget', $context, $blocks);
        // line 54
        echo "
";
    }

    // line 11
    public function block_sonata_type_date_picker_widget($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        ob_start();
        // line 13
        echo "        <div class=\"form-group\">
            ";
        // line 14
        if ((isset($context["datepicker_use_button"]) ? $context["datepicker_use_button"] : $this->getContext($context, "datepicker_use_button"))) {
            // line 15
            echo "                <div class='input-group date' id='";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "' data-date-format=\"";
            echo twig_escape_filter($this->env, (isset($context["moment_format"]) ? $context["moment_format"] : $this->getContext($context, "moment_format")), "html", null, true);
            echo "\">
            ";
        } else {
            // line 17
            echo "                ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-date-format" => (isset($context["moment_format"]) ? $context["moment_format"] : $this->getContext($context, "moment_format"))));
            // line 18
            echo "            ";
        }
        // line 19
        echo "            ";
        $this->displayBlock("date_widget", $context, $blocks);
        echo "
            ";
        // line 20
        if ((isset($context["datepicker_use_button"]) ? $context["datepicker_use_button"] : $this->getContext($context, "datepicker_use_button"))) {
            // line 21
            echo "                    <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-calendar\"></span></span>
                </div>
            ";
        }
        // line 24
        echo "        </div>
        <script type=\"text/javascript\">
            jQuery(function (\$) {
                \$('#";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').datetimepicker(";
        echo twig_jsonencode_filter((isset($context["dp_options"]) ? $context["dp_options"] : $this->getContext($context, "dp_options")));
        echo ");
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 33
    public function block_sonata_type_datetime_picker_widget($context, array $blocks = array())
    {
        // line 34
        echo "    ";
        ob_start();
        // line 35
        echo "        <div class=\"form-group\">
            ";
        // line 36
        if ((isset($context["datepicker_use_button"]) ? $context["datepicker_use_button"] : $this->getContext($context, "datepicker_use_button"))) {
            // line 37
            echo "                <div class='input-group date' id='";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "' data-date-format=\"";
            echo twig_escape_filter($this->env, (isset($context["moment_format"]) ? $context["moment_format"] : $this->getContext($context, "moment_format")), "html", null, true);
            echo "\">
            ";
        } else {
            // line 39
            echo "                ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-date-format" => (isset($context["moment_format"]) ? $context["moment_format"] : $this->getContext($context, "moment_format"))));
            // line 40
            echo "            ";
        }
        // line 41
        echo "            ";
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "
            ";
        // line 42
        if ((isset($context["datepicker_use_button"]) ? $context["datepicker_use_button"] : $this->getContext($context, "datepicker_use_button"))) {
            // line 43
            echo "                  <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-calendar\"></span></span>
                </div>
            ";
        }
        // line 46
        echo "        </div>
        <script type=\"text/javascript\">
            jQuery(function (\$) {
                \$('#";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').datetimepicker(";
        echo twig_jsonencode_filter((isset($context["dp_options"]) ? $context["dp_options"] : $this->getContext($context, "dp_options")));
        echo ");
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:Form:datepicker.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  128 => 49,  123 => 46,  118 => 43,  116 => 42,  111 => 41,  108 => 40,  105 => 39,  97 => 37,  95 => 36,  92 => 35,  89 => 34,  86 => 33,  75 => 27,  70 => 24,  65 => 21,  63 => 20,  58 => 19,  55 => 18,  52 => 17,  44 => 15,  42 => 14,  39 => 13,  36 => 12,  33 => 11,  28 => 54,  26 => 33,  23 => 32,  21 => 11,);
    }
}
