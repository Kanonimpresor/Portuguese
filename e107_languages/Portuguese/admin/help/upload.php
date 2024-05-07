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
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/carregamento.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }
if (e_QUERY) list($action,$junk) = explode('.',e_QUERY); else $action = 'list';

switch ($action)
{
  case 'filetypes' :
    $text = "Os tipos de arquivo e o tamanho m�ximo de arquivo que pode ser carregado s�o definidos por classe de utilizador. Esta op��o gera um arquivo chamado ".e_UPLOAD_TEMP_DIR.e_SAVE_FILETYPES.",
que deve ser copiado ou movido para o diret�rio ".e_ADMIN_ABS." e renomeado para ".e_READ_FILETYPES." antes de entrar em vigor.<br />
� permitida uma defini��o por classe.<br />
Observe que essas defini��es se aplicam a todo o site, mesmo que o recurso de uploads p�blicos esteja desativado.";
    break;
  case 'options' :
    $text = "O sistema completo de uploads p�blicos pode ser desativado aqui.<br />
O armazenamento de arquivos simples geralmente � apropriado (caso contr�rio, o tamanho m�ximo do arquivo � limitado a 500kb).<br />
O tamanho m�ximo do arquivo substitui quaisquer defini��es definidas em filetypes.xml.<br />
Os uploads p�blicos podem ser restritos a uma classe de utilizador espec�fica, mas essas configura��es tamb�m se aplicam a outras �reas do site onde os uploads podem ser permitidos, como
not�cias e formul�rios.";
	break;
  case 'view' :
  default :
	$text = "Esta p�gina lista todos os uploads enviados. Voc� pode optar por exclu�-los, transferi-los para downloads ou public�-los em not�cias";
}
$ns -> tablerender(mb_convert_encoding("Ajuda para uploads p�blicos", "HTML-ENTITIES", "ISO-8859-1"), mb_convert_encoding($text, "HTML-ENTITIES", "ISO-8859-1"));
