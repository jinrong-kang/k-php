<?php

/* questionnaire/en_thanks.php.twig */
class __TwigTemplate_06bd4d4e3861ae2f50c39cb79cee7a930aa0aadda06d6debd81af399f834dbe6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("questionnaire/thanks.php", "questionnaire/en_thanks.php.twig", 1);
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
        echo "\tThank you for your participation. <br/>Have a nice day!
";
    }

    // line 6
    public function block_back($context, array $blocks = array())
    {
        // line 7
        echo "Home
";
    }

    public function getTemplateName()
    {
        return "questionnaire/en_thanks.php.twig";
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
        return new Twig_Source("", "questionnaire/en_thanks.php.twig", "D:\\XAMPP\\htdocs\\CI\\application\\views\\questionnaire\\en_thanks.php.twig");
    }
}
