<?php

/* questionnaire/fr_thanks.twig */
class __TwigTemplate_ba4df417b68253658b7faad2f08faf9db1322df3cde3a834312973d7e89c8430 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("questionnaire/thanks.php", "questionnaire/fr_thanks.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
            'back' => array($this, 'block_back'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "questionnaire/thanks.php";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        // line 3
        echo "\tMerci pour votre participation. <br/>Bonne journée!
";
    }

    // line 6
    public function block_back($context, array $blocks = array())
    {
        // line 7
        echo "Acceuil
";
    }

    public function getTemplateName()
    {
        return "questionnaire/fr_thanks.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  37 => 6,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "questionnaire/fr_thanks.twig", "D:\\XAMPP\\htdocs\\CI\\application\\views\\questionnaire\\fr_thanks.twig");
    }
}
