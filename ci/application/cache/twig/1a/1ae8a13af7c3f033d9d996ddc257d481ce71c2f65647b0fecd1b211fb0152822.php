<?php

/* default_layout.html.twig */
class __TwigTemplate_503726af1c5ef08015ce62b3e9db0c6abe2abbb44b66acf8a10f5db24a9b5335 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'pageTitle' => array($this, 'block_pageTitle'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        $this->displayBlock('pageTitle', $context, $blocks);
        echo "</title>

    <style type=\"text/css\">

        ::selection{ background-color: #E13300; color: white; }
        ::moz-selection{ background-color: #E13300; color: white; }
        ::webkit-selection{ background-color: #E13300; color: white; }

        body {
            background-color: #fff;
            margin: 40px;
            font: 13px/20px normal Helvetica, Arial, sans-serif;
            color: #4F5155;
        }

        a {
            color: #003399;
            background-color: transparent;
            font-weight: normal;
        }

        h1 {
            color: #444;
            background-color: transparent;
            border-bottom: 1px solid #D0D0D0;
            font-size: 19px;
            font-weight: normal;
            margin: 0 0 14px 0;
            padding: 14px 15px 10px 15px;
        }

        code {
            font-family: Consolas, Monaco, Courier New, Courier, monospace;
            font-size: 12px;
            background-color: #f9f9f9;
            border: 1px solid #D0D0D0;
            color: #002166;
            display: block;
            margin: 14px 0 14px 0;
            padding: 12px 10px 12px 10px;
        }

    </style>
</head>
<body>

";
        // line 51
        $this->displayBlock('container', $context, $blocks);
        // line 53
        echo "<p>123</p>
</body>
</html>";
    }

    // line 5
    public function block_pageTitle($context, array $blocks = array())
    {
    }

    // line 51
    public function block_container($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "default_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  89 => 51,  84 => 5,  78 => 53,  76 => 51,  27 => 5,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default_layout.html.twig", "D:\\XAMPP\\htdocs\\CI\\application\\views\\default_layout.html.twig");
    }
}
