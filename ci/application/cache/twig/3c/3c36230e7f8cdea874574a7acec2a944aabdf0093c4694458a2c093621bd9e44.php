<?php

/* questionnaire/en_user_form.php.twig */
class __TwigTemplate_c0709d8be20e1c0702a667116ae146b58287ea6c71fefe53390c779a284cd7ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("questionnaire/form_user.php", "questionnaire/en_user_form.php.twig", 1);
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

    protected function doGetParent(array $context)
    {
        return "questionnaire/form_user.php";
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
    public function block_A($context, array $blocks = array())
    {
        // line 8
        echo "\tI. Please help us identify yourself
";
    }

    // line 11
    public function block_A1($context, array $blocks = array())
    {
        // line 12
        echo "\t1.Your age:
";
    }

    // line 15
    public function block_A11($context, array $blocks = array())
    {
        // line 16
        echo "\tUnder 15 years old
";
    }

    // line 19
    public function block_A12($context, array $blocks = array())
    {
        // line 20
        echo "\tFrom 15 to 25 years old
";
    }

    // line 23
    public function block_A13($context, array $blocks = array())
    {
        // line 24
        echo "\tFrom 26 to 35 years old
";
    }

    // line 27
    public function block_A14($context, array $blocks = array())
    {
        // line 28
        echo "\tFrom 36 to 45 years old
";
    }

    // line 31
    public function block_A15($context, array $blocks = array())
    {
        // line 32
        echo "\tFrom 46 to 55 years old
";
    }

    // line 35
    public function block_A16($context, array $blocks = array())
    {
        // line 36
        echo "\tOver 55 years old
";
    }

    // line 39
    public function block_A2($context, array $blocks = array())
    {
        // line 40
        echo "\t2.Your sex:
";
    }

    // line 43
    public function block_A21($context, array $blocks = array())
    {
        // line 44
        echo "\tMale
";
    }

    // line 47
    public function block_A22($context, array $blocks = array())
    {
        // line 48
        echo "\tFemale
";
    }

    // line 51
    public function block_A3($context, array $blocks = array())
    {
        // line 52
        echo "\t3.Your social status:
";
    }

    // line 55
    public function block_A31($context, array $blocks = array())
    {
        // line 56
        echo "\tEmployee
";
    }

    // line 59
    public function block_A32($context, array $blocks = array())
    {
        // line 60
        echo "\tStudent
";
    }

    // line 63
    public function block_A33($context, array $blocks = array())
    {
        // line 64
        echo "\tOther
";
    }

    // line 67
    public function block_B($context, array $blocks = array())
    {
        // line 68
        echo "\tII. Please tell us your opinions about public wi-fi
";
    }

    // line 71
    public function block_B1($context, array $blocks = array())
    {
        // line 72
        echo "\t1.Do you have a need for public wi-fi?
";
    }

    // line 75
    public function block_B11($context, array $blocks = array())
    {
        // line 76
        echo "\tYes
";
    }

    // line 79
    public function block_B12($context, array $blocks = array())
    {
        // line 80
        echo "\tNo
";
    }

    // line 83
    public function block_B2($context, array $blocks = array())
    {
        // line 84
        echo "\t2.If yes, Which of the following ways would you like to connect wi-fi?
";
    }

    // line 87
    public function block_B21($context, array $blocks = array())
    {
        // line 88
        echo "\tAsk for wifi password directly from store/restaurant/hotel’s owner
";
    }

    // line 91
    public function block_B22($context, array $blocks = array())
    {
        // line 92
        echo "\tUse the login platform to connect wi-fi
";
    }

    // line 95
    public function block_B23($context, array $blocks = array())
    {
        // line 96
        echo "\tOther(specify please)
";
    }

    // line 99
    public function block_B3($context, array $blocks = array())
    {
        // line 100
        echo "\t3.Do you worry about your information security when using public wi-fi?
";
    }

    // line 103
    public function block_B31($context, array $blocks = array())
    {
        // line 104
        echo "\tI don't worry at all
";
    }

    // line 107
    public function block_B32($context, array $blocks = array())
    {
        // line 108
        echo "\tI don't worry that much
";
    }

    // line 111
    public function block_B33($context, array $blocks = array())
    {
        // line 112
        echo "\tI worry about that
";
    }

    // line 115
    public function block_B34($context, array $blocks = array())
    {
        // line 116
        echo "\tI worry a little
";
    }

    // line 119
    public function block_B35($context, array $blocks = array())
    {
        // line 120
        echo "\tI do worry a lot
";
    }

    // line 123
    public function block_B4($context, array $blocks = array())
    {
        // line 124
        echo "\t4.Have you ever encountered any data attacks when using public wi-fi?
";
    }

    // line 127
    public function block_B41($context, array $blocks = array())
    {
        // line 128
        echo "\tAffirmative
";
    }

    // line 131
    public function block_B42($context, array $blocks = array())
    {
        // line 132
        echo "\tNegative
";
    }

    // line 135
    public function block_B43($context, array $blocks = array())
    {
        // line 136
        echo "\tJe ne sais pas
";
    }

    // line 139
    public function block_B5($context, array $blocks = array())
    {
        // line 140
        echo "\t5.The average time of your each use of public wi-fi
";
    }

    // line 143
    public function block_B51($context, array $blocks = array())
    {
        // line 144
        echo "\tUnder 30 min
";
    }

    // line 147
    public function block_B52($context, array $blocks = array())
    {
        // line 148
        echo "\tFrom 30 min to 1h
";
    }

    // line 151
    public function block_B53($context, array $blocks = array())
    {
        // line 152
        echo "\tOver 2h
";
    }

    // line 155
    public function block_B54($context, array $blocks = array())
    {
        // line 156
        echo "\tSince your arrival of the place until your departure
";
    }

    // line 159
    public function block_B6($context, array $blocks = array())
    {
        // line 160
        echo "\t6.Will you take the provision of wi-fi into account when you choose a restaurant or an entertainment venue?
";
    }

    // line 163
    public function block_B61($context, array $blocks = array())
    {
        // line 164
        echo "\tYes
";
    }

    // line 167
    public function block_B62($context, array $blocks = array())
    {
        // line 168
        echo "\tNo
";
    }

    // line 171
    public function block_B7($context, array $blocks = array())
    {
        // line 172
        echo "\t7.Will the provision of wi-fi by the merchant extend your stay at the store/restaurant/hotel…?
";
    }

    // line 175
    public function block_B71($context, array $blocks = array())
    {
        // line 176
        echo "\tYes
";
    }

    // line 179
    public function block_B72($context, array $blocks = array())
    {
        // line 180
        echo "\tNo
";
    }

    // line 183
    public function block_C($context, array $blocks = array())
    {
        // line 184
        echo "\tIII. Please help us improve the function of our product and service
";
    }

    // line 187
    public function block_C1($context, array $blocks = array())
    {
        // line 188
        echo "\t1.Your acceptance degree of different forms of public wi-fi connected with ads:
";
    }

    // line 191
    public function block_C1a($context, array $blocks = array())
    {
        // line 192
        echo "\tI can’t accept
";
    }

    // line 195
    public function block_C1b($context, array $blocks = array())
    {
        // line 196
        echo "\tI accept with reluctance
";
    }

    // line 199
    public function block_C1c($context, array $blocks = array())
    {
        // line 200
        echo "\tI can accept
";
    }

    // line 203
    public function block_C1d($context, array $blocks = array())
    {
        // line 204
        echo "\tHappy to accept
";
    }

    // line 207
    public function block_C11($context, array $blocks = array())
    {
        // line 208
        echo "\tThe web image ads while you login in and wait
";
    }

    // line 211
    public function block_C12($context, array $blocks = array())
    {
        // line 212
        echo "\tclick on the ads to connect wi-fi
";
    }

    // line 215
    public function block_C13($context, array $blocks = array())
    {
        // line 216
        echo "\tShare with your social network to connect wi-fi
";
    }

    // line 219
    public function block_C14($context, array $blocks = array())
    {
        // line 220
        echo "\tAfter watching the video ads to connect wi-fi
";
    }

    // line 223
    public function block_C2($context, array $blocks = array())
    {
        // line 224
        echo "\t2.How long could you accept for an video ads you can connect wi-fi once after watching which?
";
    }

    // line 227
    public function block_C21($context, array $blocks = array())
    {
        // line 228
        echo "\tUnder 10s
";
    }

    // line 231
    public function block_C22($context, array $blocks = array())
    {
        // line 232
        echo "\tUnder 20s
";
    }

    // line 235
    public function block_C23($context, array $blocks = array())
    {
        // line 236
        echo "\tUnder 30s
";
    }

    // line 239
    public function block_C24($context, array $blocks = array())
    {
        // line 240
        echo "\tOver 30s
";
    }

    // line 243
    public function block_C3($context, array $blocks = array())
    {
        // line 244
        echo "\t3.Will you re-login when you are required an another authentification session to connect wi-fi after 30 min?
";
    }

    // line 247
    public function block_C31($context, array $blocks = array())
    {
        // line 248
        echo "\tYes
";
    }

    // line 251
    public function block_C32($context, array $blocks = array())
    {
        // line 252
        echo "\tNo
";
    }

    // line 255
    public function block_C4($context, array $blocks = array())
    {
        // line 256
        echo "\t4.Will you click on the ads or merchant offers which you are interested in to know more information?
";
    }

    // line 259
    public function block_C41($context, array $blocks = array())
    {
        // line 260
        echo "\tYes
";
    }

    // line 263
    public function block_C42($context, array $blocks = array())
    {
        // line 264
        echo "\tNo
";
    }

    // line 267
    public function block_C5($context, array $blocks = array())
    {
        // line 268
        echo "\t5.Will you accept receiving offers or ads from the merchant after you having connected wi-fi by your telephone number or email adresse?
";
    }

    // line 271
    public function block_C51($context, array $blocks = array())
    {
        // line 272
        echo "\tYes
";
    }

    // line 275
    public function block_C52($context, array $blocks = array())
    {
        // line 276
        echo "\tNo
";
    }

    // line 279
    public function block_D($context, array $blocks = array())
    {
        // line 280
        echo "\tIV. Please give us some of your suggestions and expectations about this network sharing platform
";
    }

    // line 283
    public function block_E($context, array $blocks = array())
    {
        // line 284
        echo "\tV. Please provide your personal information
";
    }

    // line 287
    public function block_E1($context, array $blocks = array())
    {
        // line 288
        echo "\tYour name:
";
    }

    // line 291
    public function block_E2($context, array $blocks = array())
    {
        // line 292
        echo "\tYour email address:
";
    }

    // line 295
    public function block_E3($context, array $blocks = array())
    {
        // line 296
        echo "\tYour telephone number:
";
    }

    // line 299
    public function block_E4($context, array $blocks = array())
    {
        // line 300
        echo "\tYour home address:
";
    }

    // line 303
    public function block_sub($context, array $blocks = array())
    {
        // line 304
        echo "Submit
";
    }

    public function getTemplateName()
    {
        return "questionnaire/en_user_form.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  706 => 304,  703 => 303,  698 => 300,  695 => 299,  690 => 296,  687 => 295,  682 => 292,  679 => 291,  674 => 288,  671 => 287,  666 => 284,  663 => 283,  658 => 280,  655 => 279,  650 => 276,  647 => 275,  642 => 272,  639 => 271,  634 => 268,  631 => 267,  626 => 264,  623 => 263,  618 => 260,  615 => 259,  610 => 256,  607 => 255,  602 => 252,  599 => 251,  594 => 248,  591 => 247,  586 => 244,  583 => 243,  578 => 240,  575 => 239,  570 => 236,  567 => 235,  562 => 232,  559 => 231,  554 => 228,  551 => 227,  546 => 224,  543 => 223,  538 => 220,  535 => 219,  530 => 216,  527 => 215,  522 => 212,  519 => 211,  514 => 208,  511 => 207,  506 => 204,  503 => 203,  498 => 200,  495 => 199,  490 => 196,  487 => 195,  482 => 192,  479 => 191,  474 => 188,  471 => 187,  466 => 184,  463 => 183,  458 => 180,  455 => 179,  450 => 176,  447 => 175,  442 => 172,  439 => 171,  434 => 168,  431 => 167,  426 => 164,  423 => 163,  418 => 160,  415 => 159,  410 => 156,  407 => 155,  402 => 152,  399 => 151,  394 => 148,  391 => 147,  386 => 144,  383 => 143,  378 => 140,  375 => 139,  370 => 136,  367 => 135,  362 => 132,  359 => 131,  354 => 128,  351 => 127,  346 => 124,  343 => 123,  338 => 120,  335 => 119,  330 => 116,  327 => 115,  322 => 112,  319 => 111,  314 => 108,  311 => 107,  306 => 104,  303 => 103,  298 => 100,  295 => 99,  290 => 96,  287 => 95,  282 => 92,  279 => 91,  274 => 88,  271 => 87,  266 => 84,  263 => 83,  258 => 80,  255 => 79,  250 => 76,  247 => 75,  242 => 72,  239 => 71,  234 => 68,  231 => 67,  226 => 64,  223 => 63,  218 => 60,  215 => 59,  210 => 56,  207 => 55,  202 => 52,  199 => 51,  194 => 48,  191 => 47,  186 => 44,  183 => 43,  178 => 40,  175 => 39,  170 => 36,  167 => 35,  162 => 32,  159 => 31,  154 => 28,  151 => 27,  146 => 24,  143 => 23,  138 => 20,  135 => 19,  130 => 16,  127 => 15,  122 => 12,  119 => 11,  114 => 8,  111 => 7,  106 => 4,  103 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "questionnaire/en_user_form.php.twig", "D:\\XAMPP\\htdocs\\CI\\application\\views\\questionnaire\\en_user_form.php.twig");
    }
}
