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
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/newspost.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$caption = "Ajuda para not�cias";
$action = varset($_GET['action']);
switch ($action)
{
  case 'create' :
	$text = "<b>Geral</b><br />
O corpo ser� exibido na p�gina principal; estendido poder� ser lido clicando no hiperliga��o 'Leia mais'.
<br />
<br />
<b>Mostrar apenas o t�tulo</b>
<br />
Habilite isto para mostrar o t�tulo da not�cia apenas na primeira p�gina, com hiperliga��o clic�vel para a hist�ria completa.
<br /><br />
<b>Ativa��o</b>
<br />
Se voc� definir uma data de in�cio e/ou t�rmino, sua not�cia s� ser� exibida entre essas datas.
";
	break;
  case 'cat' :
	$text = "Voc� pode separar suas not�cias em categorias diferentes e permitir que os visitantes exibam apenas as not�cias nessas categorias. <br /><br />Envie suas imagens de �cones de not�cias em ".e_THEME."-yourtheme-/images/ ou em themes/shared/newsicons/.";
    break;
  case 'pref' :
    $text = 'Defina diversas op��es relacionadas a not�cias<br /><br />
<b>Colunas de categorias de not�cias</b><br />
Requer que o suporte ao tema seja selecion�vel<br /><br />
<b>Postagens de not�cias a serem exibidas por p�gina</b><br />
Para a p�gina principal de not�cias; exibe itens em formato n�o estendido.<br /><br />
<b>Postagens de not�cias para exibir no arquivo</b><br />
Define o n�mero de postagens de not�cias que s�o exibidas apenas como t�tulo em cada p�gina de not�cias (inclu�das no total anterior).<br /><br />
<b>Ativar editor WYSIWYG</b><br />
Requer que os usu�rios que podem enviar not�cias tamb�m possam postar HTML.
	';
	break;
  case 'list' :
  default :
	$text = 'Lista de todas as not�cias. Para editar ou excluir, clique em um dos �cones da coluna \'op��es\'. Para visualizar o item, clique
na identifica��o.';
}
$ns -> tablerender(mb_convert_encoding($caption, "HTML-ENTITIES", "ISO-8859-1"), mb_convert_encoding($text, "HTML-ENTITIES", "ISO-8859-1"));
