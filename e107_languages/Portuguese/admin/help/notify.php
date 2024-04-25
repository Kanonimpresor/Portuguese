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
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/notify.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$text = "A Notifica��o envia notifica��es por endere�o electr�nico quando ocorrem eventos e107.<br /><br />
Por exemplo, defina 'IP banido por inunda��o do site' para a classe de utilizador 'Admin' e todos os administradores receber�o um endere�o electr�nico quando seu
o site est� sendo inundado.<br /><br />
Voc� tamb�m pode, como outro exemplo, definir 'Not�cia postada pelo administrador' para a classe de utilizador 'Membros' e todos os seus usu�rios ser�o
enviou not�cias que voc� postou no site por endere�o electr�nico.<br /><br />
Se desejar que as notifica��es por endere�o electr�nico sejam enviadas para um endere�o electr�nico alternativo - selecione a op��o 'Endere�o electr�nico' e
digite o endere�o electr�nico no campo fornecido.";

$ns -> tablerender("Ajuda das Notifica��es", mb_convert_encoding($text, "HTML-ENTITIES", "ISO-8859-1"));
