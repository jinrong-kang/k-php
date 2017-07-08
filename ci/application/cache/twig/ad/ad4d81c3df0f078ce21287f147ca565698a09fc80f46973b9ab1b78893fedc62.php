<?php

/* questionnaire/en_index.php.twig */
class __TwigTemplate_aec1073c5aed0e77832d3fd9f3fbf636807fe88ace4fd0e16e1561cb94070c62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("questionnaire/index.php", "questionnaire/en_index.php.twig", 1);
        $this->blocks = array(
            'Title' => array($this, 'block_Title'),
            'hello' => array($this, 'block_hello'),
            'p' => array($this, 'block_p'),
            'user' => array($this, 'block_user'),
            'merchant' => array($this, 'block_merchant'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "questionnaire/index.php";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_Title($context, array $blocks = array())
    {
        // line 4
        echo "\tAIWIFI Questionnaire
";
    }

    // line 7
    public function block_hello($context, array $blocks = array())
    {
        // line 8
        echo "\tHello!
";
    }

    // line 11
    public function block_p($context, array $blocks = array())
    {
        // line 12
        echo "\tWe are the research team of the AIWIFI program. We are searching for information about the application status of public network(public wi-fi) and we need your valuable opinions which mean a lot to our research. Thank you for taking a little extra time in your busy schedule to help us complete this investigation. We solemnly guarantee that your answers will only be used as a reference for the improvement of our services. Thank you for your cooperation!
";
    }

    // line 15
    public function block_user($context, array $blocks = array())
    {
        // line 16
        echo "&nbsp;&nbsp;&nbsp;&nbsp;User&nbsp;&nbsp;&nbsp;
";
    }

    // line 19
    public function block_merchant($context, array $blocks = array())
    {
        // line 20
        echo "Merchant
";
    }

    public function getTemplateName()
    {
        return "questionnaire/en_index.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 20,  64 => 19,  59 => 16,  56 => 15,  51 => 12,  48 => 11,  43 => 8,  40 => 7,  35 => 4,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "questionnaire/en_index.php.twig", "D:\\XAMPP\\htdocs\\CI\\application\\views\\questionnaire\\en_index.php.twig");
    }
}
