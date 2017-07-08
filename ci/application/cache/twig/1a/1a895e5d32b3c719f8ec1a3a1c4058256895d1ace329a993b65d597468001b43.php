<?php

/* questionnaire/form_client.php */
class __TwigTemplate_5f2b9bc9b1df72a62cc4843760e279b497d118116fd7da4d0f7f7137741cd611 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'Title' => array($this, 'block_Title'),
            'A' => array($this, 'block_A'),
            'A1' => array($this, 'block_A1'),
            'A11' => array($this, 'block_A11'),
            'A12' => array($this, 'block_A12'),
            'A13' => array($this, 'block_A13'),
            'A14' => array($this, 'block_A14'),
            'A15' => array($this, 'block_A15'),
            'A16' => array($this, 'block_A16'),
            'A2' => array($this, 'block_A2'),
            'A21' => array($this, 'block_A21'),
            'A22' => array($this, 'block_A22'),
            'A3' => array($this, 'block_A3'),
            'A31' => array($this, 'block_A31'),
            'A32' => array($this, 'block_A32'),
            'A33' => array($this, 'block_A33'),
            'A34' => array($this, 'block_A34'),
            'A35' => array($this, 'block_A35'),
            'A36' => array($this, 'block_A36'),
            'A37' => array($this, 'block_A37'),
            'A38' => array($this, 'block_A38'),
            'A39' => array($this, 'block_A39'),
            'B' => array($this, 'block_B'),
            'B1' => array($this, 'block_B1'),
            'B11' => array($this, 'block_B11'),
            'B12' => array($this, 'block_B12'),
            'B2' => array($this, 'block_B2'),
            'B21' => array($this, 'block_B21'),
            'B22' => array($this, 'block_B22'),
            'B23' => array($this, 'block_B23'),
            'B3' => array($this, 'block_B3'),
            'B31' => array($this, 'block_B31'),
            'B32' => array($this, 'block_B32'),
            'B33' => array($this, 'block_B33'),
            'B34' => array($this, 'block_B34'),
            'B35' => array($this, 'block_B35'),
            'B4' => array($this, 'block_B4'),
            'B41' => array($this, 'block_B41'),
            'B42' => array($this, 'block_B42'),
            'B43' => array($this, 'block_B43'),
            'C' => array($this, 'block_C'),
            'C1' => array($this, 'block_C1'),
            'C11' => array($this, 'block_C11'),
            'C12' => array($this, 'block_C12'),
            'C13' => array($this, 'block_C13'),
            'C2' => array($this, 'block_C2'),
            'C21' => array($this, 'block_C21'),
            'C22' => array($this, 'block_C22'),
            'C23' => array($this, 'block_C23'),
            'C3' => array($this, 'block_C3'),
            'C31' => array($this, 'block_C31'),
            'C32' => array($this, 'block_C32'),
            'C33' => array($this, 'block_C33'),
            'C4' => array($this, 'block_C4'),
            'C41' => array($this, 'block_C41'),
            'C42' => array($this, 'block_C42'),
            'C43' => array($this, 'block_C43'),
            'C5' => array($this, 'block_C5'),
            'C51' => array($this, 'block_C51'),
            'C52' => array($this, 'block_C52'),
            'C53' => array($this, 'block_C53'),
            'C6' => array($this, 'block_C6'),
            'C61' => array($this, 'block_C61'),
            'C62' => array($this, 'block_C62'),
            'C63' => array($this, 'block_C63'),
            'C7' => array($this, 'block_C7'),
            'C71' => array($this, 'block_C71'),
            'C72' => array($this, 'block_C72'),
            'C73' => array($this, 'block_C73'),
            'D' => array($this, 'block_D'),
            'E' => array($this, 'block_E'),
            'E1' => array($this, 'block_E1'),
            'E2' => array($this, 'block_E2'),
            'E3' => array($this, 'block_E3'),
            'E4' => array($this, 'block_E4'),
            'F' => array($this, 'block_F'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
<head>
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
\t<title>Questionnaire for client</title>
\t<base href=\"";
        // line 5
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "\">
\t<script type=\"text/javascript\" src=\"resource/js/form.js\">
\t</script>
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"resource/css/form_client.css\">
</head>

<body>
\t<header>
\t\t<!-- <embed src=\"resource/musics/doudizhu.mp3\" autostart=\"true\" loop=infinite hidden=\"true\" > -->

\t\t<form method=\"post\" action=\"index.php/questionnaire/clientForm\">
\t\t\t<input type=\"image\" name=\"language\" value=\"en\" src=\"resource/images/gb.png\" alt=\"Submit\" align=\"right\" style=\"margin:5px;\">
\t\t\t<input type=\"image\" name=\"language\" value=\"fr\" src=\"resource/images/fr.png\" alt=\"Submit\" align=\"right\" style=\"margin:5px\"> 
\t\t\t<input type=\"image\" name=\"language\" value=\"zh\" src=\"resource/images/cn.png\" alt=\"Submit\" align=\"right\" style=\"margin:5px\">
\t\t</form>
\t\t<br/><br/><br/><br/>
\t</header>
\t<div class=\"body_size\">
\t\t<h1 align=\"center\"> ";
        // line 23
        $this->displayBlock('Title', $context, $blocks);
        echo " </h1>

\t\t<form action=\"index.php/questionnaire/valid_clientForm\" method=\"post\">
\t\t<h2>";
        // line 26
        $this->displayBlock('A', $context, $blocks);
        echo "</h2>
\t\t<div class=\"a\">
\t\t\t<span >&nbsp;";
        // line 28
        $this->displayBlock('A1', $context, $blocks);
        echo "</span><br/>
\t\t\t&nbsp;<input type=\"radio\" id=\"A11\" name=\"A1\" value=\"1\" required>
\t\t\t<label for=\"A11\"> ";
        // line 30
        $this->displayBlock('A11', $context, $blocks);
        echo "</label><br/>
\t\t\t&nbsp;<input type=\"radio\" id=\"A12\" name=\"A1\" value=\"2\">
\t\t\t<label for=\"A12\"> ";
        // line 32
        $this->displayBlock('A12', $context, $blocks);
        echo "</label><br/>
\t\t\t&nbsp;<input type=\"radio\" id=\"A13\" name=\"A1\" value=\"3\">
\t\t\t<label for=\"A13\"> ";
        // line 34
        $this->displayBlock('A13', $context, $blocks);
        echo "</label><br/>
\t\t\t&nbsp;<input type=\"radio\" id=\"A14\" name=\"A1\" value=\"4\">
\t\t\t<label for=\"A14\"> ";
        // line 36
        $this->displayBlock('A14', $context, $blocks);
        echo "</label><br/>
\t\t\t&nbsp;<input type=\"radio\" id=\"A15\" name=\"A1\" value=\"5\">
\t\t\t<label for=\"A15\"> ";
        // line 38
        $this->displayBlock('A15', $context, $blocks);
        echo "</label><br/>
\t\t\t&nbsp;<input type=\"radio\" id=\"A16\" name=\"A1\" value=\"6\">
\t\t\t<label for=\"A16\"> ";
        // line 40
        $this->displayBlock('A16', $context, $blocks);
        echo "</label><br/>
\t\t</div><br/>
\t\t<div class=\"a\">\t
\t\t\t<span >&nbsp;";
        // line 43
        $this->displayBlock('A2', $context, $blocks);
        echo "</span><br/>
\t\t\t&nbsp;<input type=\"radio\" id=\"A21\" name=\"A2\" value=\"1\" required>
\t\t\t<label for=\"A21\"> ";
        // line 45
        $this->displayBlock('A21', $context, $blocks);
        echo "</label><br/>
\t\t\t&nbsp;<input type=\"radio\" id=\"A22\" name=\"A2\" value=\"2\">
\t\t\t<label for=\"A22\"> ";
        // line 47
        $this->displayBlock('A22', $context, $blocks);
        echo "</label><br/>
\t\t</div><br/>
\t\t<div class=\"a\">
\t\t\t<span >&nbsp;";
        // line 50
        $this->displayBlock('A3', $context, $blocks);
        echo "</span><br/>
\t\t\t&nbsp;<input type=\"radio\" id=\"A31\" name=\"A3\" value=\"1\" required>
\t\t\t<label for=\"A31\"> ";
        // line 52
        $this->displayBlock('A31', $context, $blocks);
        echo "</label>&nbsp;
\t\t\t&nbsp;<input type=\"radio\" id=\"A32\" name=\"A3\" value=\"2\">
\t\t\t<label for=\"A32\"> ";
        // line 54
        $this->displayBlock('A32', $context, $blocks);
        echo "</label>&nbsp;
\t\t\t&nbsp;<input type=\"radio\" id=\"A33\" name=\"A3\" value=\"3\">
\t\t\t<label for=\"A33\"> ";
        // line 56
        $this->displayBlock('A33', $context, $blocks);
        echo "</label><br/>
\t\t\t&nbsp;<input type=\"radio\" id=\"A34\" name=\"A3\" value=\"4\">
\t\t\t<label for=\"A34\"> ";
        // line 58
        $this->displayBlock('A34', $context, $blocks);
        echo "</label>&nbsp;\t
\t\t\t&nbsp;<input type=\"radio\" id=\"A35\" name=\"A3\" value=\"5\">
\t\t\t<label for=\"A35\"> ";
        // line 60
        $this->displayBlock('A35', $context, $blocks);
        echo "</label>&nbsp;
\t\t\t&nbsp;<input type=\"radio\" id=\"A36\" name=\"A3\" value=\"6\">
\t\t\t<label for=\"A36\"> ";
        // line 62
        $this->displayBlock('A36', $context, $blocks);
        echo "</label><br/>
\t\t\t&nbsp;<input type=\"radio\" id=\"A37\" name=\"A3\" value=\"7\">
\t\t\t<label for=\"A37\"> ";
        // line 64
        $this->displayBlock('A37', $context, $blocks);
        echo "</label>&nbsp;\t
\t\t\t&nbsp;<input type=\"radio\" id=\"A38\" name=\"A3\" value=\"8\">
\t\t\t<label for=\"A38\"> ";
        // line 66
        $this->displayBlock('A38', $context, $blocks);
        echo "</label>&nbsp;
\t\t\t&nbsp;<input type=\"radio\" id=\"A39\" name=\"A3\" value=\"9\">
\t\t\t<label for=\"A39\"> ";
        // line 68
        $this->displayBlock('A39', $context, $blocks);
        echo "</label><br/>
\t\t</div><br/>

\t\t<h2>";
        // line 71
        $this->displayBlock('B', $context, $blocks);
        echo "</h2>
\t\t<div class=\"a\">
\t\t\t<span >&nbsp;";
        // line 73
        $this->displayBlock('B1', $context, $blocks);
        echo "</span><br/>
\t\t\t&nbsp;<input type=\"radio\" id=\"B11\" name=\"B1\" value=\"1\" required>
\t\t\t<label for=\"B11\"> ";
        // line 75
        $this->displayBlock('B11', $context, $blocks);
        echo "</label><br/>
\t\t\t&nbsp;<input type=\"radio\" id=\"B12\" name=\"B1\" value=\"2\">
\t\t\t<label for=\"B12\"> ";
        // line 77
        $this->displayBlock('B12', $context, $blocks);
        echo "</label><br/>
\t\t</div><br/>
\t\t<div class=\"a\">
\t\t\t<span >&nbsp;";
        // line 80
        $this->displayBlock('B2', $context, $blocks);
        echo "</span><br/>
\t\t\t&nbsp;<input type=\"radio\" id=\"B2a1\" name=\"B2a\" value=\"1\" onchange=\"isDisplay()\" required>
\t\t\t<label for=\"B2a1\">";
        // line 82
        $this->displayBlock('B21', $context, $blocks);
        echo "</label>\t<br/>
\t\t\t&nbsp;<input type=\"radio\" id=\"B2a2\" name=\"B2a\" value=\"2\" onchange=\"isDisplay()\">
\t\t\t<label for=\"B2a2\">";
        // line 84
        $this->displayBlock('B22', $context, $blocks);
        echo "</label><br/>
\t\t\t&nbsp;<input type=\"radio\" id=\"B2a3\" name=\"B2a\" value=\"3\" onchange=\"isDisplay()\">
\t\t\t<label for=\"B2a3\">";
        // line 86
        $this->displayBlock('B23', $context, $blocks);
        echo "</label>
\t\t\t<input id=\"display\" type=\"text\" name=\"B2b\" maxlength=\"100\" style=\"font-size:25px;margin-left:50px;display:none;border-radius: 10px;width: 80%;height: 30px\">
\t\t</div><br/>
\t\t<div class=\"a\">
\t\t\t<span >&nbsp;";
        // line 90
        $this->displayBlock('B3', $context, $blocks);
        echo "</span><br/>
\t\t\t&nbsp;<input type=\"radio\" id=\"B31\" name=\"B3\" value=\"1\" required>
\t\t\t<label for=\"B31\"> ";
        // line 92
        $this->displayBlock('B31', $context, $blocks);
        echo "</label><br/>
\t\t\t&nbsp;<input type=\"radio\" id=\"B32\" name=\"B3\" value=\"2\">
\t\t\t<label for=\"B32\"> ";
        // line 94
        $this->displayBlock('B32', $context, $blocks);
        echo "</label><br/>
\t\t\t&nbsp;<input type=\"radio\" id=\"B33\" name=\"B3\" value=\"3\">
\t\t\t<label for=\"B33\"> ";
        // line 96
        $this->displayBlock('B33', $context, $blocks);
        echo "</label><br/>
\t\t\t&nbsp;<input type=\"radio\" id=\"B34\" name=\"B3\" value=\"4\">
\t\t\t<label for=\"B34\"> ";
        // line 98
        $this->displayBlock('B34', $context, $blocks);
        echo "</label><br/>
\t\t\t&nbsp;<input type=\"radio\" id=\"B35\" name=\"B3\" value=\"5\">
\t\t\t<label for=\"B35\"> ";
        // line 100
        $this->displayBlock('B35', $context, $blocks);
        echo "</label><br/>
\t\t</div><br/>
\t\t<div class=\"a\">
\t\t\t<span >&nbsp;";
        // line 103
        $this->displayBlock('B4', $context, $blocks);
        echo "</span><br/>
\t\t\t&nbsp;<input type=\"radio\" id=\"B41\" name=\"B4\" value=\"1\" required>
\t\t\t<label for=\"B41\"> ";
        // line 105
        $this->displayBlock('B41', $context, $blocks);
        echo "</label><br/>
\t\t\t&nbsp;<input type=\"radio\" id=\"B42\" name=\"B4\" value=\"2\">
\t\t\t<label for=\"B42\"> ";
        // line 107
        $this->displayBlock('B42', $context, $blocks);
        echo "</label><br/>
\t\t\t&nbsp;<input type=\"radio\" id=\"B43\" name=\"B4\" value=\"3\">
\t\t\t<label for=\"B43\"> ";
        // line 109
        $this->displayBlock('B43', $context, $blocks);
        echo "</label><br/>
\t\t</div><br/>


\t\t<h2>";
        // line 113
        $this->displayBlock('C', $context, $blocks);
        echo "</h2>
\t\t<div class=\"a\">
\t\t\t<span >&nbsp;";
        // line 115
        $this->displayBlock('C1', $context, $blocks);
        echo "</span><br/>
\t\t\t&nbsp;<input type=\"radio\" id=\"C11\" name=\"C1\" value=\"1\" required>
\t\t\t<label for=\"C11\"> ";
        // line 117
        $this->displayBlock('C11', $context, $blocks);
        echo "</label><br/>
\t\t\t&nbsp;<input type=\"radio\" id=\"C12\" name=\"C1\" value=\"2\">
\t\t\t<label for=\"C12\"> ";
        // line 119
        $this->displayBlock('C12', $context, $blocks);
        echo "</label><br/>
\t\t\t&nbsp;<input type=\"radio\" id=\"C13\" name=\"C1\" value=\"3\">
\t\t\t<label for=\"C13\"> ";
        // line 121
        $this->displayBlock('C13', $context, $blocks);
        echo "</label><br/>
\t\t</div><br/>
\t\t<div class=\"a\">
\t\t\t<span >&nbsp;";
        // line 124
        $this->displayBlock('C2', $context, $blocks);
        echo "</span><br/>
\t\t\t&nbsp;<input type=\"radio\" id=\"C21\" name=\"C2\" value=\"1\" required>
\t\t\t<label for=\"C21\"> ";
        // line 126
        $this->displayBlock('C21', $context, $blocks);
        echo "</label><br/>
\t\t\t&nbsp;<input type=\"radio\" id=\"C22\" name=\"C2\" value=\"2\">
\t\t\t<label for=\"C22\"> ";
        // line 128
        $this->displayBlock('C22', $context, $blocks);
        echo "</label><br/>
\t\t\t&nbsp;<input type=\"radio\" id=\"C23\" name=\"C2\" value=\"3\">
\t\t\t<label for=\"C23\"> ";
        // line 130
        $this->displayBlock('C23', $context, $blocks);
        echo "</label><br/>
\t\t</div><br/>
\t\t<div class=\"a\">
\t\t\t<span >&nbsp;";
        // line 133
        $this->displayBlock('C3', $context, $blocks);
        echo "</span><br/>
\t\t\t&nbsp;<input type=\"radio\" id=\"C31\" name=\"C3\" value=\"1\" required>
\t\t\t<label for=\"C31\"> ";
        // line 135
        $this->displayBlock('C31', $context, $blocks);
        echo "</label><br/>
\t\t\t&nbsp;<input type=\"radio\" id=\"C32\" name=\"C3\" value=\"2\">
\t\t\t<label for=\"C32\"> ";
        // line 137
        $this->displayBlock('C32', $context, $blocks);
        echo "</label><br/>
\t\t\t&nbsp;<input type=\"radio\" id=\"C33\" name=\"C3\" value=\"3\">
\t\t\t<label for=\"C33\"> ";
        // line 139
        $this->displayBlock('C33', $context, $blocks);
        echo "</label><br/>
\t\t</div><br/>
\t\t<div class=\"a\">
\t\t\t<span >&nbsp;";
        // line 142
        $this->displayBlock('C4', $context, $blocks);
        echo "</span><br/>
\t\t\t&nbsp;<input type=\"radio\" id=\"C41\" name=\"C4\" value=\"1\" required>
\t\t\t<label for=\"C41\"> ";
        // line 144
        $this->displayBlock('C41', $context, $blocks);
        echo "</label><br/>
\t\t\t&nbsp;<input type=\"radio\" id=\"C42\" name=\"C4\" value=\"2\">
\t\t\t<label for=\"C42\"> ";
        // line 146
        $this->displayBlock('C42', $context, $blocks);
        echo "</label><br/>
\t\t\t&nbsp;<input type=\"radio\" id=\"C43\" name=\"C4\" value=\"3\">
\t\t\t<label for=\"C43\"> ";
        // line 148
        $this->displayBlock('C43', $context, $blocks);
        echo "</label><br/>
\t\t</div><br/>
\t\t<div class=\"a\">
\t\t\t<span >&nbsp;";
        // line 151
        $this->displayBlock('C5', $context, $blocks);
        echo "</span><br/>
\t\t\t&nbsp;<input type=\"radio\" id=\"C51\" name=\"C5\" value=\"1\" required>
\t\t\t<label for=\"C51\"> ";
        // line 153
        $this->displayBlock('C51', $context, $blocks);
        echo "</label><br/>
\t\t\t&nbsp;<input type=\"radio\" id=\"C52\" name=\"C5\" value=\"2\">
\t\t\t<label for=\"C52\"> ";
        // line 155
        $this->displayBlock('C52', $context, $blocks);
        echo "</label><br/>
\t\t\t&nbsp;<input type=\"radio\" id=\"C53\" name=\"C5\" value=\"3\">
\t\t\t<label for=\"C53\"> ";
        // line 157
        $this->displayBlock('C53', $context, $blocks);
        echo "</label><br/>
\t\t</div><br/>
\t\t<div class=\"a\">
\t\t\t<span >&nbsp;";
        // line 160
        $this->displayBlock('C6', $context, $blocks);
        echo "</span><br/>
\t\t\t&nbsp;<input type=\"radio\" id=\"C61\" name=\"C6\" value=\"1\" required>
\t\t\t<label for=\"C61\"> ";
        // line 162
        $this->displayBlock('C61', $context, $blocks);
        echo "</label><br/>
\t\t\t&nbsp;<input type=\"radio\" id=\"C62\" name=\"C6\" value=\"2\">
\t\t\t<label for=\"C62\"> ";
        // line 164
        $this->displayBlock('C62', $context, $blocks);
        echo "</label><br/>
\t\t\t&nbsp;<input type=\"radio\" id=\"C63\" name=\"C6\" value=\"3\">
\t\t\t<label for=\"C63\"> ";
        // line 166
        $this->displayBlock('C63', $context, $blocks);
        echo "</label><br/>
\t\t</div><br/>
\t\t<div class=\"a\">
\t\t\t<span >&nbsp;";
        // line 169
        $this->displayBlock('C7', $context, $blocks);
        echo "</span><br/>
\t\t\t&nbsp;<input type=\"radio\" id=\"C71\" name=\"C7\" value=\"1\" required>
\t\t\t<label for=\"C71\"> ";
        // line 171
        $this->displayBlock('C71', $context, $blocks);
        echo "</label><br/>
\t\t\t&nbsp;<input type=\"radio\" id=\"C72\" name=\"C7\" value=\"2\">
\t\t\t<label for=\"C72\"> ";
        // line 173
        $this->displayBlock('C72', $context, $blocks);
        echo "</label><br/>
\t\t\t&nbsp;<input type=\"radio\" id=\"C73\" name=\"C7\" value=\"3\">
\t\t\t<label for=\"C73\"> ";
        // line 175
        $this->displayBlock('C73', $context, $blocks);
        echo "</label><br/>
\t\t</div><br/>

\t\t<h2>";
        // line 178
        $this->displayBlock('D', $context, $blocks);
        echo "</h2>
\t\t<textarea name=\"D1\" rows=\"4\" cols=\"60\" maxlength=\"1000\" style=\"font-size: 25px;\"></textarea>

\t\t<h2>";
        // line 181
        $this->displayBlock('E', $context, $blocks);
        echo "</h2>\t
\t\t<div class=\"a\">
\t\t\t&nbsp;";
        // line 183
        $this->displayBlock('E1', $context, $blocks);
        echo " <input type=\"text\" name=\"name\" maxlength=\"50\" style=\"font-size:25px;width: 100%;height: 30px;border-radius: 10px\"><br>
\t\t\t&nbsp;";
        // line 184
        $this->displayBlock('E2', $context, $blocks);
        echo " <input type=\"email\" name=\"email\" maxlength=\"50\" style=\"font-size:25px;width: 100%;height: 30px;border-radius: 10px\"><br>
\t\t\t&nbsp;";
        // line 185
        $this->displayBlock('E3', $context, $blocks);
        echo " <input type=\"tel\" pattern=\"[0-9]{10}\" name=\"tel\" maxlength=\"20\" style=\"font-size:25px;width: 100%;height: 30px;border-radius: 10px\"><br>
\t\t\t&nbsp;";
        // line 186
        $this->displayBlock('E4', $context, $blocks);
        echo " <input type=\"text\" name=\"address\" maxlength=\"50\" style=\"font-size:25px;width: 100%;height: 30px;border-radius: 10px\"><br>
\t\t</div><br/>
\t\t<br/><br/><br/>
\t\t<input type=\"hidden\" name=\"language\" value=\"";
        // line 189
        echo twig_escape_filter($this->env, (isset($context["lang"]) ? $context["lang"] : null), "html", null, true);
        echo "\" >
\t\t<input id=\"submit\" type=\"submit\" value=\"";
        // line 190
        $this->displayBlock('F', $context, $blocks);
        echo "\">
\t</form>
</div>
<footer>
\t<br/><br/><br/><br/><br/>
</footer>
</body>
</html>


";
    }

    // line 23
    public function block_Title($context, array $blocks = array())
    {
        echo "AIWIFI 调查问卷";
    }

    // line 26
    public function block_A($context, array $blocks = array())
    {
        echo "一、请帮助我们甄别您的所属群体";
    }

    // line 28
    public function block_A1($context, array $blocks = array())
    {
        echo "1.您的年龄：";
    }

    // line 30
    public function block_A11($context, array $blocks = array())
    {
        echo "15岁以下";
    }

    // line 32
    public function block_A12($context, array $blocks = array())
    {
        echo "15到25岁";
    }

    // line 34
    public function block_A13($context, array $blocks = array())
    {
        echo "26到35岁";
    }

    // line 36
    public function block_A14($context, array $blocks = array())
    {
        echo "36到45岁";
    }

    // line 38
    public function block_A15($context, array $blocks = array())
    {
        echo "46到55岁";
    }

    // line 40
    public function block_A16($context, array $blocks = array())
    {
        echo "55岁以上";
    }

    // line 43
    public function block_A2($context, array $blocks = array())
    {
        echo "2.您的性别：";
    }

    // line 45
    public function block_A21($context, array $blocks = array())
    {
        echo "男";
    }

    // line 47
    public function block_A22($context, array $blocks = array())
    {
        echo "女";
    }

    // line 50
    public function block_A3($context, array $blocks = array())
    {
        echo "3.您所从事的行业是：";
    }

    // line 52
    public function block_A31($context, array $blocks = array())
    {
        echo "医药卫生";
    }

    // line 54
    public function block_A32($context, array $blocks = array())
    {
        echo "导游导购";
    }

    // line 56
    public function block_A33($context, array $blocks = array())
    {
        echo "理发美容";
    }

    // line 58
    public function block_A34($context, array $blocks = array())
    {
        echo "商场商铺";
    }

    // line 60
    public function block_A35($context, array $blocks = array())
    {
        echo "政府办公";
    }

    // line 62
    public function block_A36($context, array $blocks = array())
    {
        echo "学生";
    }

    // line 64
    public function block_A37($context, array $blocks = array())
    {
        echo "酒楼饭馆";
    }

    // line 66
    public function block_A38($context, array $blocks = array())
    {
        echo "酒店会展";
    }

    // line 68
    public function block_A39($context, array $blocks = array())
    {
        echo "其它";
    }

    // line 71
    public function block_B($context, array $blocks = array())
    {
        echo "二、请告诉我们您对公共网络的看法";
    }

    // line 73
    public function block_B1($context, array $blocks = array())
    {
        echo "1.您有向顾客提供wifi服务的习惯吗？";
    }

    // line 75
    public function block_B11($context, array $blocks = array())
    {
        echo "有";
    }

    // line 77
    public function block_B12($context, array $blocks = array())
    {
        echo "没有";
    }

    // line 80
    public function block_B2($context, array $blocks = array())
    {
        echo "2.如果有，您更倾向于哪种使用方式？";
    }

    // line 82
    public function block_B21($context, array $blocks = array())
    {
        echo "向顾客公开您的wifi密码";
    }

    // line 84
    public function block_B22($context, array $blocks = array())
    {
        echo "使用登录平台进行网络连接";
    }

    // line 86
    public function block_B23($context, array $blocks = array())
    {
        echo "其它（请说明）：";
    }

    // line 90
    public function block_B3($context, array $blocks = array())
    {
        echo "3.在给顾客提供网络的同时，您是否会担心自己的信息安全性？";
    }

    // line 92
    public function block_B31($context, array $blocks = array())
    {
        echo "完全不担心";
    }

    // line 94
    public function block_B32($context, array $blocks = array())
    {
        echo "不太担心";
    }

    // line 96
    public function block_B33($context, array $blocks = array())
    {
        echo "担心";
    }

    // line 98
    public function block_B34($context, array $blocks = array())
    {
        echo "有些担心";
    }

    // line 100
    public function block_B35($context, array $blocks = array())
    {
        echo "非常担心";
    }

    // line 103
    public function block_B4($context, array $blocks = array())
    {
        echo "4.您在提供公共wifi时信息是否遭遇过侵害？";
    }

    // line 105
    public function block_B41($context, array $blocks = array())
    {
        echo "是";
    }

    // line 107
    public function block_B42($context, array $blocks = array())
    {
        echo "否";
    }

    // line 109
    public function block_B43($context, array $blocks = array())
    {
        echo "不知道";
    }

    // line 113
    public function block_C($context, array $blocks = array())
    {
        echo "三、请帮助我们完善产品或服务的功能";
    }

    // line 115
    public function block_C1($context, array $blocks = array())
    {
        echo "1.您希望通过登录平台来控制连接网络的人群吗？";
    }

    // line 117
    public function block_C11($context, array $blocks = array())
    {
        echo "希望";
    }

    // line 119
    public function block_C12($context, array $blocks = array())
    {
        echo "不希望";
    }

    // line 121
    public function block_C13($context, array $blocks = array())
    {
        echo "无所谓";
    }

    // line 124
    public function block_C2($context, array $blocks = array())
    {
        echo "2.您希望制定自己的增值服务吗？";
    }

    // line 126
    public function block_C21($context, array $blocks = array())
    {
        echo "希望";
    }

    // line 128
    public function block_C22($context, array $blocks = array())
    {
        echo "不希望";
    }

    // line 130
    public function block_C23($context, array $blocks = array())
    {
        echo "无所谓";
    }

    // line 133
    public function block_C3($context, array $blocks = array())
    {
        echo "3.您希望在该平台上发布自己的广告吗？";
    }

    // line 135
    public function block_C31($context, array $blocks = array())
    {
        echo "希望";
    }

    // line 137
    public function block_C32($context, array $blocks = array())
    {
        echo "不希望";
    }

    // line 139
    public function block_C33($context, array $blocks = array())
    {
        echo "无所谓";
    }

    // line 142
    public function block_C4($context, array $blocks = array())
    {
        echo "4.您希望给使用过您家共享网络的客户发送广告推送吗？";
    }

    // line 144
    public function block_C41($context, array $blocks = array())
    {
        echo "希望";
    }

    // line 146
    public function block_C42($context, array $blocks = array())
    {
        echo "不希望";
    }

    // line 148
    public function block_C43($context, array $blocks = array())
    {
        echo "无所谓";
    }

    // line 151
    public function block_C5($context, array $blocks = array())
    {
        echo "5.您愿意同其它使用该平台的商户结成合作关系吗？";
    }

    // line 153
    public function block_C51($context, array $blocks = array())
    {
        echo "愿意";
    }

    // line 155
    public function block_C52($context, array $blocks = array())
    {
        echo "不愿意";
    }

    // line 157
    public function block_C53($context, array $blocks = array())
    {
        echo "无所谓";
    }

    // line 160
    public function block_C6($context, array $blocks = array())
    {
        echo "6.您愿意对合作商户开放广告权限吗？";
    }

    // line 162
    public function block_C61($context, array $blocks = array())
    {
        echo "愿意";
    }

    // line 164
    public function block_C62($context, array $blocks = array())
    {
        echo "不愿意";
    }

    // line 166
    public function block_C63($context, array $blocks = array())
    {
        echo "无所谓";
    }

    // line 169
    public function block_C7($context, array $blocks = array())
    {
        echo "7.您愿意通过平台推送来给顾客提供折扣服务吗？";
    }

    // line 171
    public function block_C71($context, array $blocks = array())
    {
        echo "愿意";
    }

    // line 173
    public function block_C72($context, array $blocks = array())
    {
        echo "不愿意";
    }

    // line 175
    public function block_C73($context, array $blocks = array())
    {
        echo "无所谓";
    }

    // line 178
    public function block_D($context, array $blocks = array())
    {
        echo "四、请告诉我们您对该网络分享平台的一些期待和建议(选填)";
    }

    // line 181
    public function block_E($context, array $blocks = array())
    {
        echo "五、请填写您的个人信息(选填)";
    }

    // line 183
    public function block_E1($context, array $blocks = array())
    {
        echo "姓名:";
    }

    // line 184
    public function block_E2($context, array $blocks = array())
    {
        echo "邮箱:";
    }

    // line 185
    public function block_E3($context, array $blocks = array())
    {
        echo "电话:";
    }

    // line 186
    public function block_E4($context, array $blocks = array())
    {
        echo "地址:";
    }

    // line 190
    public function block_F($context, array $blocks = array())
    {
        echo "提交";
    }

    public function getTemplateName()
    {
        return "questionnaire/form_client.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  982 => 190,  976 => 186,  970 => 185,  964 => 184,  958 => 183,  952 => 181,  946 => 178,  940 => 175,  934 => 173,  928 => 171,  922 => 169,  916 => 166,  910 => 164,  904 => 162,  898 => 160,  892 => 157,  886 => 155,  880 => 153,  874 => 151,  868 => 148,  862 => 146,  856 => 144,  850 => 142,  844 => 139,  838 => 137,  832 => 135,  826 => 133,  820 => 130,  814 => 128,  808 => 126,  802 => 124,  796 => 121,  790 => 119,  784 => 117,  778 => 115,  772 => 113,  766 => 109,  760 => 107,  754 => 105,  748 => 103,  742 => 100,  736 => 98,  730 => 96,  724 => 94,  718 => 92,  712 => 90,  706 => 86,  700 => 84,  694 => 82,  688 => 80,  682 => 77,  676 => 75,  670 => 73,  664 => 71,  658 => 68,  652 => 66,  646 => 64,  640 => 62,  634 => 60,  628 => 58,  622 => 56,  616 => 54,  610 => 52,  604 => 50,  598 => 47,  592 => 45,  586 => 43,  580 => 40,  574 => 38,  568 => 36,  562 => 34,  556 => 32,  550 => 30,  544 => 28,  538 => 26,  532 => 23,  517 => 190,  513 => 189,  507 => 186,  503 => 185,  499 => 184,  495 => 183,  490 => 181,  484 => 178,  478 => 175,  473 => 173,  468 => 171,  463 => 169,  457 => 166,  452 => 164,  447 => 162,  442 => 160,  436 => 157,  431 => 155,  426 => 153,  421 => 151,  415 => 148,  410 => 146,  405 => 144,  400 => 142,  394 => 139,  389 => 137,  384 => 135,  379 => 133,  373 => 130,  368 => 128,  363 => 126,  358 => 124,  352 => 121,  347 => 119,  342 => 117,  337 => 115,  332 => 113,  325 => 109,  320 => 107,  315 => 105,  310 => 103,  304 => 100,  299 => 98,  294 => 96,  289 => 94,  284 => 92,  279 => 90,  272 => 86,  267 => 84,  262 => 82,  257 => 80,  251 => 77,  246 => 75,  241 => 73,  236 => 71,  230 => 68,  225 => 66,  220 => 64,  215 => 62,  210 => 60,  205 => 58,  200 => 56,  195 => 54,  190 => 52,  185 => 50,  179 => 47,  174 => 45,  169 => 43,  163 => 40,  158 => 38,  153 => 36,  148 => 34,  143 => 32,  138 => 30,  133 => 28,  128 => 26,  122 => 23,  101 => 5,  95 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "questionnaire/form_client.php", "D:\\XAMPP\\htdocs\\CI\\application\\views\\questionnaire\\form_client.php");
    }
}
