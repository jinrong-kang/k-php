<?php

/* questionnaire/fr_client_form.php.twig */
class __TwigTemplate_3b21112b25a814da48196192ed7f01ef1a0f29682174897c951c0f44a64f5196 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("questionnaire/form_client.php", "questionnaire/fr_client_form.php.twig", 1);
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

    protected function doGetParent(array $context)
    {
        return "questionnaire/form_client.php";
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
        echo "\t3.Dans quelle branche principale exercez-vous votre métier:
";
    }

    // line 55
    public function block_A31($context, array $blocks = array())
    {
        // line 56
        echo "\tSanté & soins médicaux
";
    }

    // line 59
    public function block_A32($context, array $blocks = array())
    {
        // line 60
        echo "\tGuide & guide d’achat
";
    }

    // line 63
    public function block_A33($context, array $blocks = array())
    {
        // line 64
        echo "\tCoiffeur cosmétique
";
    }

    // line 67
    public function block_A34($context, array $blocks = array())
    {
        // line 68
        echo "\tBoutique & magasin
";
    }

    // line 71
    public function block_A35($context, array $blocks = array())
    {
        // line 72
        echo "\tCadre dans le gouvernement
";
    }

    // line 75
    public function block_A36($context, array $blocks = array())
    {
        // line 76
        echo "\tEtudiant / lycéen
";
    }

    // line 79
    public function block_A37($context, array $blocks = array())
    {
        // line 80
        echo "\tRestauration
";
    }

    // line 83
    public function block_A38($context, array $blocks = array())
    {
        // line 84
        echo "\tHébergement & Exposition
";
    }

    // line 87
    public function block_A39($context, array $blocks = array())
    {
        // line 88
        echo "\tAutre
";
    }

    // line 91
    public function block_B($context, array $blocks = array())
    {
        // line 92
        echo "\tII. Ce que vous pensez du réseau public (wifi public)
";
    }

    // line 95
    public function block_B1($context, array $blocks = array())
    {
        // line 96
        echo "\t1.Est-ce qu’il y a le service de wifi pour les clients chez vous?
";
    }

    // line 99
    public function block_B11($context, array $blocks = array())
    {
        // line 100
        echo "\tOui
";
    }

    // line 103
    public function block_B12($context, array $blocks = array())
    {
        // line 104
        echo "\tNon\t
";
    }

    // line 107
    public function block_B2($context, array $blocks = array())
    {
        // line 108
        echo "\t2.Si oui, lequel des moyens suivants que vous préférez en fournissant le service du wifi?
";
    }

    // line 111
    public function block_B21($context, array $blocks = array())
    {
        // line 112
        echo "\tMot de passe du wifi ouvert
";
    }

    // line 115
    public function block_B22($context, array $blocks = array())
    {
        // line 116
        echo "\tL’accès au réseau au travers de la plateforme internet de connexion
";
    }

    // line 119
    public function block_B23($context, array $blocks = array())
    {
        // line 120
        echo "\tAutre (précisez svp)
";
    }

    // line 123
    public function block_B3($context, array $blocks = array())
    {
        // line 124
        echo "\t3.Quel est votre degré de confiance sur vos donnés sensibles quant au partage de wifi avec les clients?
";
    }

    // line 127
    public function block_B31($context, array $blocks = array())
    {
        // line 128
        echo "\tTotal confiance
";
    }

    // line 131
    public function block_B32($context, array $blocks = array())
    {
        // line 132
        echo "\tHaut
";
    }

    // line 135
    public function block_B33($context, array $blocks = array())
    {
        // line 136
        echo "\tMoyen
";
    }

    // line 139
    public function block_B34($context, array $blocks = array())
    {
        // line 140
        echo "\tFaible
";
    }

    // line 143
    public function block_B35($context, array $blocks = array())
    {
        // line 144
        echo "\tNul (zéro confiance)
";
    }

    // line 147
    public function block_B4($context, array $blocks = array())
    {
        // line 148
        echo "\t4.Avez-vous rencontré de l’attaque sur vos donnés en fournissant le service du wifi?
";
    }

    // line 151
    public function block_B41($context, array $blocks = array())
    {
        // line 152
        echo "\tOui
";
    }

    // line 155
    public function block_B42($context, array $blocks = array())
    {
        // line 156
        echo "\tNon
";
    }

    // line 159
    public function block_B43($context, array $blocks = array())
    {
        // line 160
        echo "\tJe ne sais pas
";
    }

    // line 163
    public function block_C($context, array $blocks = array())
    {
        // line 164
        echo "\tIII. S’il vous plaît aidez-nous à perfectionner le fonctionnement du produit et service
";
    }

    // line 167
    public function block_C1($context, array $blocks = array())
    {
        // line 168
        echo "\t1.Souhaitez-vous avoir l’emprise sur les usagers à travers la plateforme Internet de connexion?
";
    }

    // line 171
    public function block_C11($context, array $blocks = array())
    {
        // line 172
        echo "\tOui, j'espère
";
    }

    // line 175
    public function block_C12($context, array $blocks = array())
    {
        // line 176
        echo "\tNon, j'espère pas
";
    }

    // line 179
    public function block_C13($context, array $blocks = array())
    {
        // line 180
        echo "\tIndifférent(e)
";
    }

    // line 183
    public function block_C2($context, array $blocks = array())
    {
        // line 184
        echo "\t2.Souhaitez-vous élaborer votre propre service à valeur ajoutée (service étendu)?
";
    }

    // line 187
    public function block_C21($context, array $blocks = array())
    {
        // line 188
        echo "\tOui, j'espère
";
    }

    // line 191
    public function block_C22($context, array $blocks = array())
    {
        // line 192
        echo "\tNon, j'espère pas
";
    }

    // line 195
    public function block_C23($context, array $blocks = array())
    {
        // line 196
        echo "\tIndifférent(e)
";
    }

    // line 199
    public function block_C3($context, array $blocks = array())
    {
        // line 200
        echo "\t3.Souhaitez-vous publier vos annonces dans cette plateforme?
";
    }

    // line 203
    public function block_C31($context, array $blocks = array())
    {
        // line 204
        echo "\tOui, j'espère
";
    }

    // line 207
    public function block_C32($context, array $blocks = array())
    {
        // line 208
        echo "\tNon, j'espère pas
";
    }

    // line 211
    public function block_C33($context, array $blocks = array())
    {
        // line 212
        echo "\tIndifférent(e)
";
    }

    // line 215
    public function block_C4($context, array $blocks = array())
    {
        // line 216
        echo "\t4.Souhaitez-vous envoyer des publicités aux clients qui ont utilisé votre service du wifi publique?
";
    }

    // line 219
    public function block_C41($context, array $blocks = array())
    {
        // line 220
        echo "\tOui, j'espère
";
    }

    // line 223
    public function block_C42($context, array $blocks = array())
    {
        // line 224
        echo "\tNon, j'espère pas
";
    }

    // line 227
    public function block_C43($context, array $blocks = array())
    {
        // line 228
        echo "\tIndifférent(e)
";
    }

    // line 231
    public function block_C5($context, array $blocks = array())
    {
        // line 232
        echo "\t5.Seriez-vous intéressé(e) par une collaboration avec vos partenaires via une telle plateforme Internet?
";
    }

    // line 235
    public function block_C51($context, array $blocks = array())
    {
        // line 236
        echo "\tOui
";
    }

    // line 239
    public function block_C52($context, array $blocks = array())
    {
        // line 240
        echo "\tNon
";
    }

    // line 243
    public function block_C53($context, array $blocks = array())
    {
        // line 244
        echo "\tIndifférent(e)
";
    }

    // line 247
    public function block_C6($context, array $blocks = array())
    {
        // line 248
        echo "\t6.Permettez-vous de donner l’autorité de publicité à vos partenaires?
";
    }

    // line 251
    public function block_C61($context, array $blocks = array())
    {
        // line 252
        echo "\tOui
";
    }

    // line 255
    public function block_C62($context, array $blocks = array())
    {
        // line 256
        echo "\tNon
";
    }

    // line 259
    public function block_C63($context, array $blocks = array())
    {
        // line 260
        echo "\tIndifférent(e)
";
    }

    // line 263
    public function block_C7($context, array $blocks = array())
    {
        // line 264
        echo "\t7.Voulez-vous fournir le service discount aux clients via une telle plateforme Internet?
";
    }

    // line 267
    public function block_C71($context, array $blocks = array())
    {
        // line 268
        echo "\tOui
";
    }

    // line 271
    public function block_C72($context, array $blocks = array())
    {
        // line 272
        echo "\tNon
";
    }

    // line 275
    public function block_C73($context, array $blocks = array())
    {
        // line 276
        echo "\tIndifférent(e)
";
    }

    // line 279
    public function block_D($context, array $blocks = array())
    {
        // line 280
        echo "\tIV. N’hésitez-pas à nous donner votre avis et expectation sur cette plateforme de partage de réseau public
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
    public function block_F($context, array $blocks = array())
    {
        // line 304
        echo "Soumettre
";
    }

    public function getTemplateName()
    {
        return "questionnaire/fr_client_form.php.twig";
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
        return new Twig_Source("", "questionnaire/fr_client_form.php.twig", "D:\\XAMPP\\htdocs\\CI\\application\\views\\questionnaire\\fr_client_form.php.twig");
    }
}
