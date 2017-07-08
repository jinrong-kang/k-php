<?php

if (isset($_POST["languege"]))
{
	switch($_POST['languege'])
	{
		case "english": set_en(); break;
		case "france": set_fr(); break;
		case "chinese": set_ch(); break;
		default: break;
	}
}

function set_en()
{
	define('PACKAGE', 'ui_log');
	putenv('LANG=en_US'); 
	setlocale(LC_ALL, 'en_US');
	bindtextdomain(PACKAGE, 'languege/'); 
	textdomain(PACKAGE);
}

function set_fr()
{
	define('PACKAGE', 'ui_log');
	putenv('LANG=fr_FR'); 
	setlocale(LC_ALL, 'fr_FR');
	bindtextdomain(PACKAGE, 'languege/'); 
	textdomain(PACKAGE);
}

function set_ch()
{
	//
}
?>