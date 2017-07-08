<?php

/* questionnaire/form_user.php */
class __TwigTemplate_604fcc1c898a271df32e82c375c822463a2b44cefede5176711cab963de9136a extends Twig_Template
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
            'B5' => array($this, 'block_B5'),
            'B51' => array($this, 'block_B51'),
            'B52' => array($this, 'block_B52'),
            'B53' => array($this, 'block_B53'),
            'B54' => array($this, 'block_B54'),
            'B6' => array($this, 'block_B6'),
            'B61' => array($this, 'block_B61'),
            'B62' => array($this, 'block_B62'),
            'B7' => array($this, 'block_B7'),
            'B71' => array($this, 'block_B71'),
            'B72' => array($this, 'block_B72'),
            'C' => array($this, 'block_C'),
            'C1' => array($this, 'block_C1'),
            'C1a' => array($this, 'block_C1a'),
            'C1b' => array($this, 'block_C1b'),
            'C1c' => array($this, 'block_C1c'),
            'C1d' => array($this, 'block_C1d'),
            'C11' => array($this, 'block_C11'),
            'C12' => array($this, 'block_C12'),
            'C13' => array($this, 'block_C13'),
            'C14' => array($this, 'block_C14'),
            'C2' => array($this, 'block_C2'),
            'C21' => array($this, 'block_C21'),
            'C22' => array($this, 'block_C22'),
            'C23' => array($this, 'block_C23'),
            'C24' => array($this, 'block_C24'),
            'C3' => array($this, 'block_C3'),
            'C31' => array($this, 'block_C31'),
            'C32' => array($this, 'block_C32'),
            'C4' => array($this, 'block_C4'),
            'C41' => array($this, 'block_C41'),
            'C42' => array($this, 'block_C42'),
            'C5' => array($this, 'block_C5'),
            'C51' => array($this, 'block_C51'),
            'C52' => array($this, 'block_C52'),
            'D' => array($this, 'block_D'),
            'E' => array($this, 'block_E'),
            'E1' => array($this, 'block_E1'),
            'E2' => array($this, 'block_E2'),
            'E3' => array($this, 'block_E3'),
            'E4' => array($this, 'block_E4'),
            'sub' => array($this, 'block_sub'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
<head>
\t<title>Questionnaire for user</title>
\t<base href=\"";
        // line 4
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "\">
\t<script src=\"resource/js/jquery-3.2.1.min.js\"></script>
\t<script type=\"text/javascript\" src=\"resource/js/form.js\">
\t</script>
\t<script type=\"text/javascript\" src=\"resource/js/table.js\">
\t</script>
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"resource/css/form_user.css\">
</head>
<body>
<header>
\t<!-- <embed src=\"resource/musics/relaxing.mp3\" autostart=\"true\" loop=infinite hidden=\"true\" > -->
\t<form method=\"post\" action=\"index.php/questionnaire/userForm\">
\t\t<input type=\"image\" name=\"language\" value=\"en\" src=\"resource/images/gb.png\" alt=\"Submit\" align=\"right\" style=\"margin:5px;\">
\t\t<input type=\"image\" name=\"language\" value=\"fr\" src=\"resource/images/fr.png\" alt=\"Submit\" align=\"right\" style=\"margin:5px\"> 
\t\t<input type=\"image\" name=\"language\" value=\"zh\" src=\"resource/images/cn.png\" alt=\"Submit\" align=\"right\" style=\"margin:5px\">
\t</form>
\t<br/><br/><br/><br/>
</header>
<div class=\"body_size\">
\t<h1 align=\"center\" > ";
        // line 23
        $this->displayBlock('Title', $context, $blocks);
        echo "</h1>

\t<form action=\"index.php/questionnaire/valid_userForm\" method=\"post\">
\t<h2>";
        // line 26
        $this->displayBlock('A', $context, $blocks);
        echo "</h2>
\t<div class=\"a\">
\t\t<span>";
        // line 28
        $this->displayBlock('A1', $context, $blocks);
        echo "</span><br/>
\t\t<input type=\"radio\" id=\"A11\" name=\"A1\" value=\"1\" required>
\t\t<label for=\"A11\">";
        // line 30
        $this->displayBlock('A11', $context, $blocks);
        echo "</label><br/>
\t\t<input type=\"radio\" id=\"A12\" name=\"A1\" value=\"2\" />
\t\t<label for=\"A12\">";
        // line 32
        $this->displayBlock('A12', $context, $blocks);
        echo "</label><br/>
\t\t<input type=\"radio\" id=\"A13\" name=\"A1\" value=\"3\" />
\t\t<label for=\"A13\">";
        // line 34
        $this->displayBlock('A13', $context, $blocks);
        echo "</label><br/>
\t\t<input type=\"radio\" id=\"A14\" name=\"A1\" value=\"s4\" />
\t\t<label for=\"A14\">";
        // line 36
        $this->displayBlock('A14', $context, $blocks);
        echo "</label><br/>
\t\t<input type=\"radio\" id=\"A15\" name=\"A1\" value=\"5\" />
\t\t<label for=\"A15\">";
        // line 38
        $this->displayBlock('A15', $context, $blocks);
        echo "</label><br/>
\t\t<input type=\"radio\" id=\"A16\" name=\"A1\" value=\"6\" />
\t\t<label for=\"A16\">";
        // line 40
        $this->displayBlock('A16', $context, $blocks);
        echo "</label><br/>
\t</div><br/>
\t<div class=\"a\">
\t\t<span>";
        // line 43
        $this->displayBlock('A2', $context, $blocks);
        echo "</span><br/>
\t\t<input type=\"radio\" id=\"A21\" name=\"A2\" value=\"1\" required> <label for=\"A21\">";
        // line 44
        $this->displayBlock('A21', $context, $blocks);
        echo "</label><br/>
\t\t<input type=\"radio\" id=\"A22\" name=\"A2\" value=\"2\"> <label for=\"A22\">";
        // line 45
        $this->displayBlock('A22', $context, $blocks);
        echo "</label><br/>
\t</div><br/>
\t<div class=\"a\">
\t\t<span> ";
        // line 48
        $this->displayBlock('A3', $context, $blocks);
        echo "</span><br/>
\t\t<input type=\"radio\" id=\"A31\" name=\"A3\" value=\"1\" required> <label for=\"A31\">";
        // line 49
        $this->displayBlock('A31', $context, $blocks);
        echo "</label>\t<br/>
\t\t<input type=\"radio\" id=\"A32\" name=\"A3\" value=\"2\"> <label for=\"A32\">";
        // line 50
        $this->displayBlock('A32', $context, $blocks);
        echo "</label><br/>
\t\t<input type=\"radio\" id=\"A33\" name=\"A3\" value=\"3\"> <label for=\"A33\">";
        // line 51
        $this->displayBlock('A33', $context, $blocks);
        echo "</label><br/>
\t</div><br/>

\t<h2>";
        // line 54
        $this->displayBlock('B', $context, $blocks);
        echo "</h2>
\t<div class=\"a\">
\t\t<span>";
        // line 56
        $this->displayBlock('B1', $context, $blocks);
        echo "</span><br/>
\t\t<input type=\"radio\" id=\"B11\" name=\"B1\" value=\"1\" required> <label for=\"B11\">";
        // line 57
        $this->displayBlock('B11', $context, $blocks);
        echo "</label><br/>
\t\t<input type=\"radio\" id=\"B12\" name=\"B1\" value=\"2\"> <label for=\"B12\">";
        // line 58
        $this->displayBlock('B12', $context, $blocks);
        echo "</label><br/>
\t</div><br/>
\t<div class=\"a\">
\t\t<span>";
        // line 61
        $this->displayBlock('B2', $context, $blocks);
        echo "</span><br/>
\t\t<input type=\"radio\" id=\"B2a1\" name=\"B2a\" value=\"1\" required onchange=\"isDisplay()\" > <label for=\"B2a1\">";
        // line 62
        $this->displayBlock('B21', $context, $blocks);
        echo "</label>\t<br/>
\t\t<input type=\"radio\" id=\"B2a2\" name=\"B2a\" value=\"2\" onchange=\"isDisplay()\" > <label for=\"B2a2\">";
        // line 63
        $this->displayBlock('B22', $context, $blocks);
        echo "</label><br/>
\t\t<input type=\"radio\" id=\"B2a3\" name=\"B2a\" value=\"3\" onchange=\"isDisplay()\" > <label for=\"B2a3\">";
        // line 64
        $this->displayBlock('B23', $context, $blocks);
        echo "</label>
\t\t<input id=\"display\" type=\"text\" id=\"\" name=\"B2b\" maxlength=\"100\" style=\"font-size:25px;margin-left:50px;display:none;border-radius: 10px;width: 80%;height: 30px\">
\t</div><br/>
\t<div class=\"a\">
\t\t<span> ";
        // line 68
        $this->displayBlock('B3', $context, $blocks);
        echo "</span><br/>
\t\t<input type=\"radio\" id=\"B31\" name=\"B3\" value=\"1\" required> <label for=\"B31\">";
        // line 69
        $this->displayBlock('B31', $context, $blocks);
        echo "</label><br/>
\t\t<input type=\"radio\" id=\"B32\" name=\"B3\" value=\"2\"> <label for=\"B32\">";
        // line 70
        $this->displayBlock('B32', $context, $blocks);
        echo "</label><br/>
\t\t<input type=\"radio\" id=\"B33\" name=\"B3\" value=\"3\"> <label for=\"B33\">";
        // line 71
        $this->displayBlock('B33', $context, $blocks);
        echo "</label><br/>
\t\t<input type=\"radio\" id=\"B34\" name=\"B3\" value=\"4\"> <label for=\"B34\">";
        // line 72
        $this->displayBlock('B34', $context, $blocks);
        echo "</label><br/>
\t\t<input type=\"radio\" id=\"B35\" name=\"B3\" value=\"5\"> <label for=\"B35\">";
        // line 73
        $this->displayBlock('B35', $context, $blocks);
        echo "</label><br/>
\t</div><br/>
\t<div class=\"a\">
\t\t<span>";
        // line 76
        $this->displayBlock('B4', $context, $blocks);
        echo "</span><br/>
\t\t<input type=\"radio\" id=\"B41\" name=\"B4\" value=\"1\" required> <label for=\"B41\">";
        // line 77
        $this->displayBlock('B41', $context, $blocks);
        echo "</label>\t<br/>
\t\t<input type=\"radio\" id=\"B42\" name=\"B4\" value=\"2\"> <label for=\"B42\">";
        // line 78
        $this->displayBlock('B42', $context, $blocks);
        echo "</label><br/>
\t\t<input type=\"radio\" id=\"B43\" name=\"B4\" value=\"3\"> <label for=\"B43\">";
        // line 79
        $this->displayBlock('B43', $context, $blocks);
        echo "</label><br/>
\t</div><br/>
\t<div class=\"a\">
\t\t<span> ";
        // line 82
        $this->displayBlock('B5', $context, $blocks);
        echo "</span><br/>
\t\t<input type=\"radio\" id=\"B51\" name=\"B5\" value=\"1\" required> <label for=\"B51\">";
        // line 83
        $this->displayBlock('B51', $context, $blocks);
        echo "</label>\t<br/>
\t\t<input type=\"radio\" id=\"B52\" name=\"B5\" value=\"2\"> <label for=\"B52\">";
        // line 84
        $this->displayBlock('B52', $context, $blocks);
        echo "</label><br/>
\t\t<input type=\"radio\" id=\"B53\" name=\"B5\" value=\"3\"> <label for=\"B53\">";
        // line 85
        $this->displayBlock('B53', $context, $blocks);
        echo "</label><br/>
\t\t<input type=\"radio\" id=\"B54\" name=\"B5\" value=\"4\"> <label for=\"B54\">";
        // line 86
        $this->displayBlock('B54', $context, $blocks);
        echo "</label><br/>
\t</div><br/>
\t<div class=\"a\">
\t\t<span>";
        // line 89
        $this->displayBlock('B6', $context, $blocks);
        echo "</span><br/>
\t\t<input type=\"radio\" id=\"B61\" name=\"B6\" value=\"1\" required> <label for=\"B61\">";
        // line 90
        $this->displayBlock('B61', $context, $blocks);
        echo "</label><br/>
\t\t<input type=\"radio\" id=\"B62\" name=\"B6\" value=\"2\"> <label for=\"B62\">";
        // line 91
        $this->displayBlock('B62', $context, $blocks);
        echo "</label><br/>
\t</div><br/>
\t<div class=\"a\">
\t\t<span>";
        // line 94
        $this->displayBlock('B7', $context, $blocks);
        echo "</span><br/>
\t\t<input type=\"radio\" id=\"B71\" name=\"B7\" value=\"1\" required> <label for=\"B71\">";
        // line 95
        $this->displayBlock('B71', $context, $blocks);
        echo "</label>\t<br/>
\t\t<input type=\"radio\" id=\"B72\" name=\"B7\" value=\"2\"> <label for=\"B72\">";
        // line 96
        $this->displayBlock('B72', $context, $blocks);
        echo "</label><br/>
\t</div><br/>

\t<h2>";
        // line 99
        $this->displayBlock('C', $context, $blocks);
        echo "</h2>
\t<div class=\"a\">
\t\t<span> ";
        // line 101
        $this->displayBlock('C1', $context, $blocks);
        echo "</span><br/>
\t\t<table border=\"3\" >
\t\t\t<tr >
\t\t\t\t<th width=\"100px\"> </th>
\t\t\t\t<th width=\"100px\"> ";
        // line 105
        $this->displayBlock('C1a', $context, $blocks);
        echo " </th>
\t\t\t\t<th width=\"100px\"> ";
        // line 106
        $this->displayBlock('C1b', $context, $blocks);
        echo " </th>
\t\t\t\t<th width=\"100px\" align=\"center\" > ";
        // line 107
        $this->displayBlock('C1c', $context, $blocks);
        echo " </th>
\t\t\t\t<th width=\"100px\"> ";
        // line 108
        $this->displayBlock('C1d', $context, $blocks);
        echo " </th>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th> ";
        // line 111
        $this->displayBlock('C11', $context, $blocks);
        echo " </th>
\t\t\t\t<td align=\"center\"> <input type=\"radio\" name=\"C1a\" value=\"1\" required> </td>
\t\t\t\t<td align=\"center\"> <input type=\"radio\" name=\"C1a\" value=\"2\"> </td>
\t\t\t\t<td align=\"center\"> <input type=\"radio\" name=\"C1a\" value=\"3\"> </td>
\t\t\t\t<td align=\"center\"> <input type=\"radio\" name=\"C1a\" value=\"4\"> </td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th> ";
        // line 118
        $this->displayBlock('C12', $context, $blocks);
        echo " </th>
\t\t\t\t<td align=\"center\"> <input type=\"radio\" name=\"C1b\" value=\"1\" required> </td>
\t\t\t\t<td align=\"center\"> <input type=\"radio\" name=\"C1b\" value=\"2\"> </td>
\t\t\t\t<td align=\"center\"> <input type=\"radio\" name=\"C1b\" value=\"3\"> </td>
\t\t\t\t<td align=\"center\"> <input type=\"radio\" name=\"C1b\" value=\"4\"> </td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th> ";
        // line 125
        $this->displayBlock('C13', $context, $blocks);
        echo " </th>
\t\t\t\t<td align=\"center\"> <input type=\"radio\" name=\"C1c\" value=\"1\" required> </td>
\t\t\t\t<td align=\"center\"> <input type=\"radio\" name=\"C1c\" value=\"2\"> </td>
\t\t\t\t<td align=\"center\"> <input type=\"radio\" name=\"C1c\" value=\"3\"> </td>
\t\t\t\t<td align=\"center\"> <input type=\"radio\" name=\"C1c\" value=\"4\"> </td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th> ";
        // line 132
        $this->displayBlock('C14', $context, $blocks);
        echo " </th>
\t\t\t\t<td align=\"center\"> <input type=\"radio\" name=\"C1d\" value=\"1\" required> </td>
\t\t\t\t<td align=\"center\"> <input type=\"radio\" name=\"C1d\" value=\"2\"> </td>
\t\t\t\t<td align=\"center\"> <input type=\"radio\" name=\"C1d\" value=\"3\"> </td>
\t\t\t\t<td align=\"center\"> <input type=\"radio\" name=\"C1d\" value=\"4\"> </td>
\t\t\t</tr>
\t\t</table>

\t</div><br/>
\t<div class=\"a\">
\t\t<span> ";
        // line 142
        $this->displayBlock('C2', $context, $blocks);
        echo "</span><br/>
\t\t<input type=\"radio\" id=\"C21\" name=\"C2\" value=\"1\" required> <label for=\"C21\">";
        // line 143
        $this->displayBlock('C21', $context, $blocks);
        echo "</label><br/>
\t\t<input type=\"radio\" id=\"C22\" name=\"C2\" value=\"2\"> <label for=\"C22\">";
        // line 144
        $this->displayBlock('C22', $context, $blocks);
        echo "</label><br/>
\t\t<input type=\"radio\" id=\"C23\" name=\"C2\" value=\"3\"> <label for=\"C23\">";
        // line 145
        $this->displayBlock('C23', $context, $blocks);
        echo "</label><br/>
\t\t<input type=\"radio\" id=\"C24\" name=\"C2\" value=\"4\"> <label for=\"C24\">";
        // line 146
        $this->displayBlock('C24', $context, $blocks);
        echo "</label><br/>
\t</div><br/>
\t<div class=\"a\">
\t\t<span> ";
        // line 149
        $this->displayBlock('C3', $context, $blocks);
        echo "</span><br/>
\t\t<input type=\"radio\" id=\"C31\" name=\"C3\" value=\"1\" required> <label for=\"C31\">";
        // line 150
        $this->displayBlock('C31', $context, $blocks);
        echo "</label><br/>
\t\t<input type=\"radio\" id=\"C32\" name=\"C3\" value=\"2\"> <label for=\"C32\">";
        // line 151
        $this->displayBlock('C32', $context, $blocks);
        echo "</label><br/>
\t</div><br/>
\t<div class=\"a\">
\t\t<span> ";
        // line 154
        $this->displayBlock('C4', $context, $blocks);
        echo "</span><br/>
\t\t<input type=\"radio\" id=\"C41\" name=\"C4\" value=\"1\" required> <label for=\"C41\">";
        // line 155
        $this->displayBlock('C41', $context, $blocks);
        echo "</label>\t<br/>
\t\t<input type=\"radio\" id=\"C42\" name=\"C4\" value=\"2\"> <label for=\"C42\">";
        // line 156
        $this->displayBlock('C42', $context, $blocks);
        echo "</label><br/>
\t</div><br/>
\t<div class=\"a\">
\t\t<span> ";
        // line 159
        $this->displayBlock('C5', $context, $blocks);
        echo "</span><br/>
\t\t<input type=\"radio\" id=\"C51\" name=\"C5\" value=\"1\" required> <label for=\"C51\">";
        // line 160
        $this->displayBlock('C51', $context, $blocks);
        echo "</label><br/>
\t\t<input type=\"radio\" id=\"C52\" name=\"C5\" value=\"2\"> <label for=\"C52\">";
        // line 161
        $this->displayBlock('C52', $context, $blocks);
        echo "</label><br/>
\t</div><br/>

\t<h2>";
        // line 164
        $this->displayBlock('D', $context, $blocks);
        echo "</h2>
\t<textarea name=\"D1\" rows=\"5\" cols=\"60\" maxlength=\"1000\"></textarea>
\t<br/><br/>

\t<h2>";
        // line 168
        $this->displayBlock('E', $context, $blocks);
        echo "</h2>
\t<div class=\"a\">
\t";
        // line 170
        $this->displayBlock('E1', $context, $blocks);
        echo " <input type=\"text\" name=\"name\" maxlength=\"50\" style=\"font-size:25px;width: 100%;height: 30px;border-radius: 10px\"><br>
\t";
        // line 171
        $this->displayBlock('E2', $context, $blocks);
        echo " <input type=\"email\" name=\"email\" maxlength=\"50\" style=\"font-size:25px;width: 100%;height: 30px;border-radius: 10px\"><br>
\t";
        // line 172
        $this->displayBlock('E3', $context, $blocks);
        echo " <input type=\"tel\" pattern=\"[0-9]{10}\" name=\"tel\" maxlength=\"20\" style=\"font-size:25px;width: 100%;height: 30px;border-radius: 10px\"><br>
\t";
        // line 173
        $this->displayBlock('E4', $context, $blocks);
        echo " <input type=\"text\" name=\"address\" maxlength=\"50\" style=\"font-size:25px;width: 100%;height: 30px;border-radius: 10px\"><br>
\t</div><br/>
\t<br/><br/><br/>
\t<div style=\"margin:0px auto;width:200px;\">
\t\t<input type=\"hidden\" name=\"language\" value=\"";
        // line 177
        echo twig_escape_filter($this->env, (isset($context["lang"]) ? $context["lang"] : null), "html", null, true);
        echo "\" >
\t\t<input id=\"submit\" type=\"submit\" value=";
        // line 178
        $this->displayBlock('sub', $context, $blocks);
        echo ">
\t</div>
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

    // line 44
    public function block_A21($context, array $blocks = array())
    {
        echo "男";
    }

    // line 45
    public function block_A22($context, array $blocks = array())
    {
        echo "女";
    }

    // line 48
    public function block_A3($context, array $blocks = array())
    {
        echo "3.您的身份是：";
    }

    // line 49
    public function block_A31($context, array $blocks = array())
    {
        echo "在职员工";
    }

    // line 50
    public function block_A32($context, array $blocks = array())
    {
        echo "学生";
    }

    // line 51
    public function block_A33($context, array $blocks = array())
    {
        echo "其它";
    }

    // line 54
    public function block_B($context, array $blocks = array())
    {
        echo "二、请告诉我们您对公共网络的看法";
    }

    // line 56
    public function block_B1($context, array $blocks = array())
    {
        echo "1.您是否有使用公共网络的需求？";
    }

    // line 57
    public function block_B11($context, array $blocks = array())
    {
        echo "有";
    }

    // line 58
    public function block_B12($context, array $blocks = array())
    {
        echo "没有";
    }

    // line 61
    public function block_B2($context, array $blocks = array())
    {
        echo "2.如果有，您更倾向于哪种使用方式？";
    }

    // line 62
    public function block_B21($context, array $blocks = array())
    {
        echo "向店家询问他的wifi密码";
    }

    // line 63
    public function block_B22($context, array $blocks = array())
    {
        echo "使用登录平台直接进行网络连接";
    }

    // line 64
    public function block_B23($context, array $blocks = array())
    {
        echo "其它（请说明）：";
    }

    // line 68
    public function block_B3($context, array $blocks = array())
    {
        echo "3.在使用公共网络的同时，您是否会担心自己的信息安全性？";
    }

    // line 69
    public function block_B31($context, array $blocks = array())
    {
        echo "完全不担心";
    }

    // line 70
    public function block_B32($context, array $blocks = array())
    {
        echo "不太担心";
    }

    // line 71
    public function block_B33($context, array $blocks = array())
    {
        echo "担心";
    }

    // line 72
    public function block_B34($context, array $blocks = array())
    {
        echo "有些担心";
    }

    // line 73
    public function block_B35($context, array $blocks = array())
    {
        echo "非常心";
    }

    // line 76
    public function block_B4($context, array $blocks = array())
    {
        echo "4.您在使用公共wifi时信息是否遭遇过侵害？";
    }

    // line 77
    public function block_B41($context, array $blocks = array())
    {
        echo "是";
    }

    // line 78
    public function block_B42($context, array $blocks = array())
    {
        echo "否";
    }

    // line 79
    public function block_B43($context, array $blocks = array())
    {
        echo "不知道";
    }

    // line 82
    public function block_B5($context, array $blocks = array())
    {
        echo "5.平均每次使用公共网络的时长";
    }

    // line 83
    public function block_B51($context, array $blocks = array())
    {
        echo "30分钟以下";
    }

    // line 84
    public function block_B52($context, array $blocks = array())
    {
        echo "30分钟到1小时";
    }

    // line 85
    public function block_B53($context, array $blocks = array())
    {
        echo "超过2小时";
    }

    // line 86
    public function block_B54($context, array $blocks = array())
    {
        echo "从到该场所一直到离开";
    }

    // line 89
    public function block_B6($context, array $blocks = array())
    {
        echo "6.在选择餐厅或娱乐场所的时候是否会考虑有没有wifi？";
    }

    // line 90
    public function block_B61($context, array $blocks = array())
    {
        echo "是";
    }

    // line 91
    public function block_B62($context, array $blocks = array())
    {
        echo "否";
    }

    // line 94
    public function block_B7($context, array $blocks = array())
    {
        echo "7.商家提供的wifi是否会延长您在该商家停留的时间？";
    }

    // line 95
    public function block_B71($context, array $blocks = array())
    {
        echo "是";
    }

    // line 96
    public function block_B72($context, array $blocks = array())
    {
        echo "否";
    }

    // line 99
    public function block_C($context, array $blocks = array())
    {
        echo "三、请帮助我们完善产品或服务的功能";
    }

    // line 101
    public function block_C1($context, array $blocks = array())
    {
        echo "1.对不同形式wifi连接广告的接受程度：";
    }

    // line 105
    public function block_C1a($context, array $blocks = array())
    {
        echo "不能接受";
    }

    // line 106
    public function block_C1b($context, array $blocks = array())
    {
        echo "勉强接受";
    }

    // line 107
    public function block_C1c($context, array $blocks = array())
    {
        echo "接受";
    }

    // line 108
    public function block_C1d($context, array $blocks = array())
    {
        echo "乐于接受";
    }

    // line 111
    public function block_C11($context, array $blocks = array())
    {
        echo "登录认证和等待时的网页图片广告";
    }

    // line 118
    public function block_C12($context, array $blocks = array())
    {
        echo "点击广告才能上网";
    }

    // line 125
    public function block_C13($context, array $blocks = array())
    {
        echo "发布微博、朋友圈才能上网";
    }

    // line 132
    public function block_C14($context, array $blocks = array())
    {
        echo "观看完视频广告才能上网";
    }

    // line 142
    public function block_C2($context, array $blocks = array())
    {
        echo "2.对于要观看完广告视频才能上网的广告，您比较容易接受多长的视频广告？";
    }

    // line 143
    public function block_C21($context, array $blocks = array())
    {
        echo "10秒以内";
    }

    // line 144
    public function block_C22($context, array $blocks = array())
    {
        echo "20秒以内";
    }

    // line 145
    public function block_C23($context, array $blocks = array())
    {
        echo "30秒以内";
    }

    // line 146
    public function block_C24($context, array $blocks = array())
    {
        echo "30秒以上";
    }

    // line 149
    public function block_C3($context, array $blocks = array())
    {
        echo "3.对于30分钟后要重新登陆验证的wifi，您是否会重新登录？";
    }

    // line 150
    public function block_C31($context, array $blocks = array())
    {
        echo "会";
    }

    // line 151
    public function block_C32($context, array $blocks = array())
    {
        echo "不会";
    }

    // line 154
    public function block_C4($context, array $blocks = array())
    {
        echo "4.在wifi跳转页看到感兴趣的产品广告或者商家优惠信息是否会点击了解详情？";
    }

    // line 155
    public function block_C41($context, array $blocks = array())
    {
        echo "会";
    }

    // line 156
    public function block_C42($context, array $blocks = array())
    {
        echo "不会";
    }

    // line 159
    public function block_C5($context, array $blocks = array())
    {
        echo "5.能否接受通过手机号或邮箱地址连接wifi后商家给您发送优惠信息？";
    }

    // line 160
    public function block_C51($context, array $blocks = array())
    {
        echo "能";
    }

    // line 161
    public function block_C52($context, array $blocks = array())
    {
        echo "不能";
    }

    // line 164
    public function block_D($context, array $blocks = array())
    {
        echo "四、请告诉我们您对该网络分享平台的一些期待和建议";
    }

    // line 168
    public function block_E($context, array $blocks = array())
    {
        echo "五、请填写您的个人信息";
    }

    // line 170
    public function block_E1($context, array $blocks = array())
    {
        echo "姓名:";
    }

    // line 171
    public function block_E2($context, array $blocks = array())
    {
        echo "邮箱:";
    }

    // line 172
    public function block_E3($context, array $blocks = array())
    {
        echo "电话:";
    }

    // line 173
    public function block_E4($context, array $blocks = array())
    {
        echo "地址:";
    }

    // line 178
    public function block_sub($context, array $blocks = array())
    {
        echo "提交";
    }

    public function getTemplateName()
    {
        return "questionnaire/form_user.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  971 => 178,  965 => 173,  959 => 172,  953 => 171,  947 => 170,  941 => 168,  935 => 164,  929 => 161,  923 => 160,  917 => 159,  911 => 156,  905 => 155,  899 => 154,  893 => 151,  887 => 150,  881 => 149,  875 => 146,  869 => 145,  863 => 144,  857 => 143,  851 => 142,  845 => 132,  839 => 125,  833 => 118,  827 => 111,  821 => 108,  815 => 107,  809 => 106,  803 => 105,  797 => 101,  791 => 99,  785 => 96,  779 => 95,  773 => 94,  767 => 91,  761 => 90,  755 => 89,  749 => 86,  743 => 85,  737 => 84,  731 => 83,  725 => 82,  719 => 79,  713 => 78,  707 => 77,  701 => 76,  695 => 73,  689 => 72,  683 => 71,  677 => 70,  671 => 69,  665 => 68,  659 => 64,  653 => 63,  647 => 62,  641 => 61,  635 => 58,  629 => 57,  623 => 56,  617 => 54,  611 => 51,  605 => 50,  599 => 49,  593 => 48,  587 => 45,  581 => 44,  575 => 43,  569 => 40,  563 => 38,  557 => 36,  551 => 34,  545 => 32,  539 => 30,  533 => 28,  527 => 26,  521 => 23,  505 => 178,  501 => 177,  494 => 173,  490 => 172,  486 => 171,  482 => 170,  477 => 168,  470 => 164,  464 => 161,  460 => 160,  456 => 159,  450 => 156,  446 => 155,  442 => 154,  436 => 151,  432 => 150,  428 => 149,  422 => 146,  418 => 145,  414 => 144,  410 => 143,  406 => 142,  393 => 132,  383 => 125,  373 => 118,  363 => 111,  357 => 108,  353 => 107,  349 => 106,  345 => 105,  338 => 101,  333 => 99,  327 => 96,  323 => 95,  319 => 94,  313 => 91,  309 => 90,  305 => 89,  299 => 86,  295 => 85,  291 => 84,  287 => 83,  283 => 82,  277 => 79,  273 => 78,  269 => 77,  265 => 76,  259 => 73,  255 => 72,  251 => 71,  247 => 70,  243 => 69,  239 => 68,  232 => 64,  228 => 63,  224 => 62,  220 => 61,  214 => 58,  210 => 57,  206 => 56,  201 => 54,  195 => 51,  191 => 50,  187 => 49,  183 => 48,  177 => 45,  173 => 44,  169 => 43,  163 => 40,  158 => 38,  153 => 36,  148 => 34,  143 => 32,  138 => 30,  133 => 28,  128 => 26,  122 => 23,  100 => 4,  95 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "questionnaire/form_user.php", "D:\\XAMPP\\htdocs\\CI\\application\\views\\questionnaire\\form_user.php");
    }
}
