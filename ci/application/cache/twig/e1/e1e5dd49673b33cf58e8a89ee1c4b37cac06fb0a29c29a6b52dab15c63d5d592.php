<?php

/* questionnaire/fr_index.twig */
class __TwigTemplate_968e3dc898b0a31fe34015b955e54cc7bbda22bdbde350c03ad7c267c479ac4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("questionnaire/index.php", "questionnaire/fr_index.twig", 1);
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
        echo "\tEnquête de AIWIFI
";
    }

    // line 7
    public function block_hello($context, array $blocks = array())
    {
        // line 8
        echo "\tBonjour!
";
    }

    // line 11
    public function block_p($context, array $blocks = array())
    {
        // line 12
        echo "\tNous sommes l’équipe de la recherche du programme AIWIFI. Nous menons une enquête sur l’application de WIFI public et nous avons besoin de vos opinions précieuses qui nous apparaissent très importantes. Merci de prendre un peu de temps dans vos horaires chargés pour nous aider à finir cette enquête. Nous promettons que votre réponse ne reste qu’information pour référence sans aucune divulgation. Nous vous remercions en avance !
";
    }

    // line 15
    public function block_user($context, array $blocks = array())
    {
        // line 16
        echo "&nbsp;&nbsp;Usagers&nbsp;&nbsp;
";
    }

    // line 19
    public function block_merchant($context, array $blocks = array())
    {
        // line 20
        echo "Marchands
";
    }

    public function getTemplateName()
    {
        return "questionnaire/fr_index.twig";
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
        return new Twig_Source("", "questionnaire/fr_index.twig", "D:\\XAMPP\\htdocs\\CI\\application\\views\\questionnaire\\fr_index.twig");
    }
}
