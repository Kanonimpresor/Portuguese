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
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/administrator.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$caption = "Ajuda do administrador do site";
$text = "Use esta p�gina para editar as prefer�ncias ou excluir administradores do site. O administrador s� ter� permiss�o para acessar os recursos que estiverem marcados.<br /><br />
Para criar um novo administrador, v� para a p�gina de configura��o do utilizador e atualize um utilizador existente para o status de administrador.";
$ns -> tablerender($caption, mb_convert_encoding($text, "HTML-ENTITIES", "ISO-8859-1"));
