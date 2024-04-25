<?php
/*
 * Copyright e107 Inc e107.org, Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
 * $Id$
 *
 * Frontpage Admin Help
 * 
*/

if (!defined('e107_INIT')) { exit; }

$caption = "Ajuda da primeira p�gina";
/* FIXME - English native speakers: what should stay and what should go? 
	<p>
		The list of rules are scanned in turn, until the class of the current user matches. 
		This then determines the user's front (home) page, and also the page he sees immediately after entrar.
	</p>
 */
$texto = "
<p>
Nessa tela voc� pode escolher o que exibir como p�gina inicial do seu site, o padr�o � not�cias. Voc� tamb�m pode determinar se
os usu�rios s�o enviados para uma p�gina espec�fica ap�s o entrar.
</p>
<p>
As regras s�o pesquisadas em ordem, para encontrar a primeira onde o utilizador atual pertence � classe especificada na regra.
Essa regra determina ent�o a p�gina inicial (inicial) e qualquer p�gina espec�fica p�s-login. Se nenhuma regra corresponder, news.php ser� definido como a p�gina inicial.
</p>
<p>
O utilizador � enviado para a &quot;p�gina p�s-login&quot; especificada. (se especificado) imediatamente ap�s um entrar.
</p>
";
$ns->tablerender( mb_convert_encoding($caption, "HTML-ENTITIES", "ISO-8859-1"),  mb_convert_encoding($text, "HTML-ENTITIES", "ISO-8859-1"), 'admin_help');
