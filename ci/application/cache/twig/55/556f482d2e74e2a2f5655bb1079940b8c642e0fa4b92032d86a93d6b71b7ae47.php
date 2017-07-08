<?php

/* questionnaire/fr_thanks.php.twig */
class __TwigTemplate_57c42a402cfe65ce10fa088914ef3bd10c81b83210be09da776c266b1fee755a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("questionnaire/thanks.php", "questionnaire/fr_thanks.php.twig", 1);
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
        echo "\tMerci pour votre participation. <br/>Nous vous souhaitons une très bonne journée!
";
    }

    // line 6
    public function block_back($context, array $blocks = array())
    {
        // line 7
        echo "Page d'Acceuil
";
    }

    public function getTemplateName()
    {
        return "questionnaire/fr_thanks.php.twig";
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
        return new Twig_Source("", "questionnaire/fr_thanks.php.twig", "D:\\XAMPP\\htdocs\\CI\\application\\views\\questionnaire\\fr_thanks.php.twig");
    }
}
