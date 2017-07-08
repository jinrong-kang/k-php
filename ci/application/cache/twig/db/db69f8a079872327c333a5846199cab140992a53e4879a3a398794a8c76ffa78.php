<?php

/* questionnaire/fr_user_form.twig */
class __TwigTemplate_84adb844e2779061ebebe55f27ed10583fc20e230eeea448b5c01cbef1a98673 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("questionnaire/form_user.php", "questionnaire/fr_user_form.twig", 1);
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
        echo "\tEnquête de AIWIFI
";
    }

    // line 7
    public function block_A($context, array $blocks = array())
    {
        // line 8
        echo "\tI. S’il vous plaît aidez-nous à vous identifier
";
    }

    // line 11
    public function block_A1($context, array $blocks = array())
    {
        // line 12
        echo "\t1.Votre âge:
";
    }

    // line 15
    public function block_A11($context, array $blocks = array())
    {
        // line 16
        echo "\tMoins de 15 ans
";
    }

    // line 19
    public function block_A12($context, array $blocks = array())
    {
        // line 20
        echo "\t15 ans à 25 ans
";
    }

    // line 23
    public function block_A13($context, array $blocks = array())
    {
        // line 24
        echo "\t26 ans à 35 ans
";
    }

    // line 27
    public function block_A14($context, array $blocks = array())
    {
        // line 28
        echo "\t36 ans à 45 ans
";
    }

    // line 31
    public function block_A15($context, array $blocks = array())
    {
        // line 32
        echo "\t46 ans à 55 ans
";
    }

    // line 35
    public function block_A16($context, array $blocks = array())
    {
        // line 36
        echo "\tPlus de 55 ans
";
    }

    // line 39
    public function block_A2($context, array $blocks = array())
    {
        // line 40
        echo "\t2.Votre sexe:
";
    }

    // line 43
    public function block_A21($context, array $blocks = array())
    {
        // line 44
        echo "\tMasculin
";
    }

    // line 47
    public function block_A22($context, array $blocks = array())
    {
        // line 48
        echo "\tFéminin
";
    }

    // line 51
    public function block_A3($context, array $blocks = array())
    {
        // line 52
        echo "\t3.Quelle est votre catégorie socio-professionnelle:
";
    }

    // line 55
    public function block_A31($context, array $blocks = array())
    {
        // line 56
        echo "\tEmployé
";
    }

    // line 59
    public function block_A32($context, array $blocks = array())
    {
        // line 60
        echo "\tÉtudiant / lycéen
";
    }

    // line 63
    public function block_A33($context, array $blocks = array())
    {
        // line 64
        echo "\tAutres
";
    }

    // line 67
    public function block_B($context, array $blocks = array())
    {
        // line 68
        echo "\tII. Ce que vous pensez du réseau public (wifi public)
";
    }

    // line 71
    public function block_B1($context, array $blocks = array())
    {
        // line 72
        echo "\t1.Avez-vous besoin d’utiliser le réseau public (wifi public)?
";
    }

    // line 75
    public function block_B11($context, array $blocks = array())
    {
        // line 76
        echo "\tOui
";
    }

    // line 79
    public function block_B12($context, array $blocks = array())
    {
        // line 80
        echo "\tNon\t
";
    }

    // line 83
    public function block_B2($context, array $blocks = array())
    {
        // line 84
        echo "\t2.Si oui, lequel des moyens d’utilisation suivants que vous préférez?
";
    }

    // line 87
    public function block_B21($context, array $blocks = array())
    {
        // line 88
        echo "\tDemander le code du wifi au marchand
";
    }

    // line 91
    public function block_B22($context, array $blocks = array())
    {
        // line 92
        echo "\tAccéder à la plateforme Internet pour vous connecter le wi-fi
";
    }

    // line 95
    public function block_B23($context, array $blocks = array())
    {
        // line 96
        echo "\tAutre (précisez svp)
";
    }

    // line 99
    public function block_B3($context, array $blocks = array())
    {
        // line 100
        echo "\t3.Quel est votre degré de confiance sur vos donnés sensibles quand vous utilisez le réseau public?
";
    }

    // line 103
    public function block_B31($context, array $blocks = array())
    {
        // line 104
        echo "\tTotal confiance
";
    }

    // line 107
    public function block_B32($context, array $blocks = array())
    {
        // line 108
        echo "\tHaut
";
    }

    // line 111
    public function block_B33($context, array $blocks = array())
    {
        // line 112
        echo "\tMoyen
";
    }

    // line 115
    public function block_B34($context, array $blocks = array())
    {
        // line 116
        echo "\tFaible
";
    }

    // line 119
    public function block_B35($context, array $blocks = array())
    {
        // line 120
        echo "\tNul (zéro confiance)
";
    }

    // line 123
    public function block_B4($context, array $blocks = array())
    {
        // line 124
        echo "\t4.Avez-vous rencontré de l’attaque des données en utilisant le wifi public?
";
    }

    // line 127
    public function block_B41($context, array $blocks = array())
    {
        // line 128
        echo "\tOui
";
    }

    // line 131
    public function block_B42($context, array $blocks = array())
    {
        // line 132
        echo "\tNon
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
        echo "\t5.La durée moyenne de votre chaque utilisation du réseau public
";
    }

    // line 143
    public function block_B51($context, array $blocks = array())
    {
        // line 144
        echo "\tMoins de 30 min
";
    }

    // line 147
    public function block_B52($context, array $blocks = array())
    {
        // line 148
        echo "\t30 min à 1h
";
    }

    // line 151
    public function block_B53($context, array $blocks = array())
    {
        // line 152
        echo "\tPlus de 2h
";
    }

    // line 155
    public function block_B54($context, array $blocks = array())
    {
        // line 156
        echo "\tDepuis votre arrivée de cet endroit jusqu’à la sortie
";
    }

    // line 159
    public function block_B6($context, array $blocks = array())
    {
        // line 160
        echo "\t6.Tenez-vous compte de la fourniture du wifi public en choisissant les restaurants ou les lieux de divertissement?
";
    }

    // line 163
    public function block_B61($context, array $blocks = array())
    {
        // line 164
        echo "\tOui
";
    }

    // line 167
    public function block_B62($context, array $blocks = array())
    {
        // line 168
        echo "\tNon
";
    }

    // line 171
    public function block_B7($context, array $blocks = array())
    {
        // line 172
        echo "\t7.Est-ce que le service de wifi que le marchand fournit prolongerait la durée de votre séjour chez le marchand?
";
    }

    // line 175
    public function block_B71($context, array $blocks = array())
    {
        // line 176
        echo "\tOui
";
    }

    // line 179
    public function block_B72($context, array $blocks = array())
    {
        // line 180
        echo "\tNon
";
    }

    // line 183
    public function block_C($context, array $blocks = array())
    {
        // line 184
        echo "\tIII. S’il vous plaît aidez-nous à perfectionner le fonctionnement du produit et service
";
    }

    // line 187
    public function block_C1($context, array $blocks = array())
    {
        // line 188
        echo "\t1.Le degré d’acceptation des publicités liées à la connexion de wifi
";
    }

    // line 191
    public function block_C1a($context, array $blocks = array())
    {
        // line 192
        echo "\tInacceptable
";
    }

    // line 195
    public function block_C1b($context, array $blocks = array())
    {
        // line 196
        echo "\tL’acceptation réticente
";
    }

    // line 199
    public function block_C1c($context, array $blocks = array())
    {
        // line 200
        echo "\tAccepter
";
    }

    // line 203
    public function block_C1d($context, array $blocks = array())
    {
        // line 204
        echo "\tAccepter avec plaisir
";
    }

    // line 207
    public function block_C11($context, array $blocks = array())
    {
        // line 208
        echo "\tWeb images publicités au cours de votre identification
";
    }

    // line 211
    public function block_C12($context, array $blocks = array())
    {
        // line 212
        echo "\tConnecter le wifi une fois que cliquer sur l’annonce
";
    }

    // line 215
    public function block_C13($context, array $blocks = array())
    {
        // line 216
        echo "\tConnecter le wifi après avoir partagé avec réseaux sociaux
";
    }

    // line 219
    public function block_C14($context, array $blocks = array())
    {
        // line 220
        echo "\tConnecter le wifi après avoir regardé la vidéo d’annonce
";
    }

    // line 223
    public function block_C2($context, array $blocks = array())
    {
        // line 224
        echo "\t2.En ce qui concerne la vidéo d’annonce，combien de temps est dans votre acceptation?
";
    }

    // line 227
    public function block_C21($context, array $blocks = array())
    {
        // line 228
        echo "\tMoins de 10s
";
    }

    // line 231
    public function block_C22($context, array $blocks = array())
    {
        // line 232
        echo "\tMoins de 20s
";
    }

    // line 235
    public function block_C23($context, array $blocks = array())
    {
        // line 236
        echo "\tMoins de 30s
";
    }

    // line 239
    public function block_C24($context, array $blocks = array())
    {
        // line 240
        echo "\tPlus de 30s
";
    }

    // line 243
    public function block_C3($context, array $blocks = array())
    {
        // line 244
        echo "\t3.Connecterez-vous à nouveau le wifi qui exige une nouvelle session d’authentification pour la re-connexion après 30 min?
";
    }

    // line 247
    public function block_C31($context, array $blocks = array())
    {
        // line 248
        echo "\tOui
";
    }

    // line 251
    public function block_C32($context, array $blocks = array())
    {
        // line 252
        echo "\tNon
";
    }

    // line 255
    public function block_C4($context, array $blocks = array())
    {
        // line 256
        echo "\t4.Cliquerez-vous sur l’annonce sur le saut de page (page jump) du wifi pour en savoir plus si l’annonce vous intéresse?
";
    }

    // line 259
    public function block_C41($context, array $blocks = array())
    {
        // line 260
        echo "\tOui
";
    }

    // line 263
    public function block_C42($context, array $blocks = array())
    {
        // line 264
        echo "\tNon
";
    }

    // line 267
    public function block_C5($context, array $blocks = array())
    {
        // line 268
        echo "\t5.Permettez-vous de recevoir des offres et des promotions après avoir connecté le wifi en fournissant votre numéro de téléphone ou adresse mail?
";
    }

    // line 271
    public function block_C51($context, array $blocks = array())
    {
        // line 272
        echo "\tOui
";
    }

    // line 275
    public function block_C52($context, array $blocks = array())
    {
        // line 276
        echo "\tNon
";
    }

    // line 279
    public function block_D($context, array $blocks = array())
    {
        // line 280
        echo "\tIV. N’hésitez-pas à nous donner vos avis et expectations sur cette plateforme de partage de réseau public:
";
    }

    // line 283
    public function block_E($context, array $blocks = array())
    {
        // line 284
        echo "\tV. SVP ajoutez vos informations personnelles
";
    }

    // line 287
    public function block_E1($context, array $blocks = array())
    {
        // line 288
        echo "\tVotre nom
";
    }

    // line 291
    public function block_E2($context, array $blocks = array())
    {
        // line 292
        echo "\tVotre adresse e-mail
";
    }

    // line 295
    public function block_E3($context, array $blocks = array())
    {
        // line 296
        echo "\tVotre numéro de téléphone
";
    }

    // line 299
    public function block_E4($context, array $blocks = array())
    {
        // line 300
        echo "\tVotre adresse domicile
";
    }

    // line 303
    public function block_sub($context, array $blocks = array())
    {
        // line 304
        echo "Soumettre
";
    }

    public function getTemplateName()
    {
        return "questionnaire/fr_user_form.twig";
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
        return new Twig_Source("", "questionnaire/fr_user_form.twig", "D:\\XAMPP\\htdocs\\CI\\application\\views\\questionnaire\\fr_user_form.twig");
    }
}
