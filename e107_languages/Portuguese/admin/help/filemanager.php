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
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/filemanager.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$text = "Voc� pode gerenciar os arquivos em seu diret�rio /files nesta p�gina. Se voc� estiver recebendo uma mensagem de erro sobre permiss�es durante o carregamento, fa�a CHMOD no diret�rio para o qual voc� est� tentando fazer carregamento para 777.";
$ns -> tablerender("Ajuda do Gerenciador de Arquivos",  mb_convert_encoding($text, "HTML-ENTITIES", "ISO-8859-1"));
