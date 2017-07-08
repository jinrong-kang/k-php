<?php

/* welcome_index.html.twig */
class __TwigTemplate_eaa349cfc7418e6ba9914177c1bea478eb08bb9ba1aa7956f08eb02968b57891 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default_layout.html.twig", "welcome_index.html.twig", 1);
        $this->blocks = array(
            'pageTitle' => array($this, 'block_pageTitle'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_pageTitle($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        // line 6
        echo "    <div id=\"container\">
        <h1>";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</h1>

        <div id=\"body\">
            <p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

            <p>If you would like to edit this page you'll find it located at:</p>
            <code>application/views/welcome_message.php</code>

            <p>The corresponding controller for this page is found at:</p>
            <code>application/controllers/welcome.php</code>

            <p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href=\"user_guide/\">User Guide</a>.</p>
        </div>

        <p class=\"footer\">Page rendered in <strong>0.1530</strong> seconds</p>
    </div>
";
    }

    public function getTemplateName()
    {
        return "welcome_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "welcome_index.html.twig", "D:\\XAMPP\\htdocs\\CI\\application\\views\\welcome_index.html.twig");
    }
}
