<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2009 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 *
 *
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/prefs.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$text = "Suas prefer�ncias permitem que voc� especifique todas as configura��es importantes do seu site, desde o nome e a descri��o do site at� a prote��o contra inunda��es e filtragem de palavr�es.";
$ns -> tablerender( mb_convert_encoding("Ajuda de prefer�ncias", "HTML-ENTITIES", "ISO-8859-1"),  mb_convert_encoding($text, "HTML-ENTITIES", "ISO-8859-1"));
