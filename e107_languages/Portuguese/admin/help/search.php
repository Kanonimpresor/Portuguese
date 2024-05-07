<?php
/*
 * Copyright e107 Inc e107.org, Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
 * $Id$
 *
 * Search Admin Help
 * 
*/

if (!defined('e107_INIT')) { exit; }

$caption = "Ajuda da procura";
$text = "
	Se a vers�o do seu servidor MySQL suportar, voc� pode mudar
ao m�todo de classifica��o do MySQL, que � mais r�pido que o m�todo de classifica��o do PHP. Veja prefer�ncias.
<br /><br />
Se o seu site incluir idiomas ideogr�ficos, como chin�s e japon�s, voc� dever�
use o m�todo PHP sort e desative a correspond�ncia de palavras inteiras.

";
$ns -> tablerender($caption, mb_convert_encoding($text, "HTML-ENTITIES", "ISO-8859-1"));
