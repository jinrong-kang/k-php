<?php

/* questionnaire/thanks.php */
class __TwigTemplate_3bb524753d40b25644a0ea0bf5fcf9164408f2cd2b0864d85b67aa52512860fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'container' => array($this, 'block_container'),
            'back' => array($this, 'block_back'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
\t<title></title>
\t<base href=\"";
        // line 6
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "\">
\t<script type=\"text/javascript\">
　　\tsetTimeout(\"window.location.href='index.php/questionnaire/index/";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["lang"]) ? $context["lang"] : null), "html", null, true);
        echo "'\",4500);   
\t</script>
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"resource/css/thanks.css\">
</head>
<body>
<header>
\t<form method=\"post\" action=\"index.php/questionnaire/thanks\">
\t\t<input type=\"image\" name=\"language\" value=\"en\" src=\"resource/images/gb.png\" alt=\"Submit\" align=\"right\" style=\"margin:5px;\">
\t\t<input type=\"image\" name=\"language\" value=\"fr\" src=\"resource/images/fr.png\" alt=\"Submit\" align=\"right\" style=\"margin:5px\"> 
\t\t<input type=\"image\" name=\"language\" value=\"zh\" src=\"resource/images/cn.png\" alt=\"Submit\" align=\"right\" style=\"margin:5px\">
\t</form>
\t<br/><br/><br/>
</header>
\t<div class=\"word\">
\t\t<h1 align=\"center\"> ";
        // line 22
        $this->displayBlock('container', $context, $blocks);
        echo " </h1>
\t</div>
\t<div style=\"margin:0 auto;width:200px;\">
\t\t<!-- <a href=\"<?php echo site_url('questionnaire/index'); ?>\" id=\"button\" value=\"Home\" >返回</a> -->
\t\t<form style=\"color: #FFFFE0;\" method=\"post\" action=\"index.php/questionnaire/index\">
\t\t\t<input type=\"hidden\" name=\"language\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["lang"]) ? $context["lang"] : null), "html", null, true);
        echo "\" >
\t\t\t<input type=\"submit\" id=\"button\" value=\"";
        // line 28
        $this->displayBlock('back', $context, $blocks);
        echo "\">
\t</div>
<footer>
\t
</footer>
</body>
</html>";
    }

    // line 22
    public function block_container($context, array $blocks = array())
    {
        echo "谢谢你的参与!";
    }

    // line 28
    public function block_back($context, array $blocks = array())
    {
        echo "返回";
    }

    public function getTemplateName()
    {
        return "questionnaire/thanks.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 28,  73 => 22,  62 => 28,  58 => 27,  50 => 22,  33 => 8,  28 => 6,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "questionnaire/thanks.php", "D:\\XAMPP\\htdocs\\CI\\application\\views\\questionnaire\\thanks.php");
    }
}
