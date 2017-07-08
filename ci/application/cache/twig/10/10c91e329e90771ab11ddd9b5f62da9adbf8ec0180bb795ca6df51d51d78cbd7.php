<?php

/* questionnaire/index.php */
class __TwigTemplate_6ac913da10160e64651931240cdfed3066d475de4a8bab39b009d7c9e70add43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'Title' => array($this, 'block_Title'),
            'hello' => array($this, 'block_hello'),
            'p' => array($this, 'block_p'),
            'user' => array($this, 'block_user'),
            'merchant' => array($this, 'block_merchant'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<title >AIWIFI Questionnaire</title>

\t<base href=\"";
        // line 6
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"resource/css/index.css\">
</head>
<body>
<header>
<form method=\"post\" action=\"index.php/questionnaire/index\">
\t\t<input type=\"image\" name=\"language\" value=\"en\" src=\"resource/images/gb.png\" alt=\"Submit\" align=\"right\" style=\"margin:5px;\">
\t\t<input type=\"image\" name=\"language\" value=\"fr\" src=\"resource/images/fr.png\" alt=\"Submit\" align=\"right\" style=\"margin:5px\"> 
\t\t<input type=\"image\" name=\"language\" value=\"zh\" src=\"resource/images/cn.png\" alt=\"Submit\" align=\"right\" style=\"margin:5px\">
\t</form>
\t<br/><br/>
</header>
\t<div class=\"body_size\">
\t\t<h1> ";
        // line 19
        $this->displayBlock('Title', $context, $blocks);
        echo " </h1>
\t\t<br/>
\t\t<p>";
        // line 21
        $this->displayBlock('hello', $context, $blocks);
        // line 22
        echo "\t\t\t";
        $this->displayBlock('p', $context, $blocks);
        // line 23
        echo "\t\t</p>
\t\t<br/><br/>
\t\t<form class=\"form1\" method=\"post\" action=\"index.php/questionnaire/userForm\">
\t\t\t<input type=\"hidden\" name=\"language\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["lang"]) ? $context["lang"] : null), "html", null, true);
        echo "\" >
\t\t\t<input type=\"submit\" value=\"";
        // line 27
        $this->displayBlock('user', $context, $blocks);
        echo "\">
\t\t</form>
\t\t<form class=\"form2\" method=\"post\" action=\"index.php/questionnaire/clientForm\">
\t\t\t<input type=\"hidden\" name=\"language\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["lang"]) ? $context["lang"] : null), "html", null, true);
        echo "\" >
\t\t\t<input type=\"submit\" value=\"";
        // line 31
        $this->displayBlock('merchant', $context, $blocks);
        echo "\">
\t\t</form>
\t</div>
<footer>
\t<br/><br/><br/>
</footer>
</body>
</html>";
    }

    // line 19
    public function block_Title($context, array $blocks = array())
    {
        echo "用户调查问卷";
    }

    // line 21
    public function block_hello($context, array $blocks = array())
    {
        echo "您好！";
    }

    // line 22
    public function block_p($context, array $blocks = array())
    {
        echo "我们是AIWIFI项目研发团队的成员，正在进行一项有关公共网络（即公共wifi）应用状态的调查，想请教您的一些看法，您的回答将作为我们的重要参考。希望您在百忙之中抽出一点宝贵的时间，协助我们完成以下调查问卷，我们郑重保证您的回答只会作为完善我们服务的参考信息，不予公开。感谢您的配合！";
    }

    // line 27
    public function block_user($context, array $blocks = array())
    {
        echo "用户";
    }

    // line 31
    public function block_merchant($context, array $blocks = array())
    {
        echo "商家";
    }

    public function getTemplateName()
    {
        return "questionnaire/index.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 31,  106 => 27,  100 => 22,  94 => 21,  88 => 19,  76 => 31,  72 => 30,  66 => 27,  62 => 26,  57 => 23,  54 => 22,  52 => 21,  47 => 19,  31 => 6,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "questionnaire/index.php", "D:\\XAMPP\\htdocs\\CI\\application\\views\\questionnaire\\index.php");
    }
}
