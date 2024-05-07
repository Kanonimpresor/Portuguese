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
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/users.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$caption = "Gerenciamento de usu�rios";
if (e_QUERY) list($action,$junk) = explode('.',e_QUERY); else $action = 'list';

switch ($action)
{
  case 'create' :
    $text = "Esta p�gina permite que voc� crie um utilizador, que � imediatamente um membro normal do site, com qualquer associa��o de classe que voc� atribuir.<br /><br />
Se voc� marcar a caixa 'Enviar endere�o electr�nico de confirma��o com senha para novo utilizador', o nome de entrar e a senha ser�o enviados <b>em claro</b>, portanto o utilizador dever� alterar
sua senha no recebimento.
	";
    break;

  case 'prune' :
	$text = "Exclui em massa usu�rios indesejados do banco de dados. Podem ser aqueles que n�o conseguiram concluir o processo de registro ou
aqueles cujos endere�os de endere�o electr�nico foram devolvidos. Quaisquer postagens no f�rum, coment�rios etc. permanecem e s�o sinalizados como sendo de um 'Utilizador Exclu�do'.
	";
	break;

  case 'unverified' :
	$text = "Mostra os membros que n�o conseguiram completar o seu registo. Op��es geralmente como a lista completa de membros.";
    break;

  case 'options' :
	$text = "Define diversas op��es que afetam todos os usu�rios.<br /><br />
<b>Permitir carregamento de avatar</b><br />
Se ativado, os usu�rios poder�o fazer carregamento de um avatar de sua escolha, que ser� armazenado em seu servidor. Isto pode ter implica��es de seguran�a.<br /><br />
<b>Permitir carregamento de fotos</b><br />
Se ativado, os usu�rios poder�o fazer carregamento de uma foto de sua escolha, que ser� armazenada em seu servidor. Isto pode ter implica��es de seguran�a.<br /><br />
<b>Rastreamento de usu�rios on-line</b><br />
Isso deve ser ativado para acompanhar a maioria das atividades do utilizador, incluindo contagens de membros online. Ele aumenta significativamente a atividade do banco de dados.<br /><br />
<b>Informa��es do S�cio</b><br />
Determina qual classe de membros pode visualizar a lista de membros.
	";
    break;

  default :
	$text = "Esta p�gina mostra uma lista de seus membros registrados. Voc� pode atualizar suas configura��es, conceder status de administrador e definir sua classe de utilizador
entre outras coisas.<br /><br />

A ordem de classifica��o pode ser alterada clicando no cabe�alho da coluna.<br /><br />

<b>Classes de utilizador</b><br />
As classes de utilizador podem ser definidas de duas maneiras: 'inline' clicando na coluna 'userclass' ou selecionando um/v�rios usu�rios e usando as op��es de 'lote' na parte inferior da tabela. <br /><br />

<b>Editar</b><br />
Visualize e edite todas as configura��es deste utilizador. <br /><br />

<b>Banir/Desbanir</b><br />
Determine se o utilizador pode acessar o site. <br /><br />

<b>Ativar</b><br />
Isso ativa um utilizador que normalmente teria respondido ao endere�o electr�nico de ativa��o.<br /><br />

<b>Reenviar endere�o electr�nico</b><br />
Reenvia o endere�o electr�nico de ativa��o para o utilizador.<br /><br />

<b>Endere�o electr�nico de teste</b><br />
Verifique a validade do endere�o electr�nico do utilizador (n�o envia um endere�o electr�nico)<br /><br />

<b>Excluir</b><br />
Remove totalmente o utilizador da associa��o ao site (quaisquer postagens no f�rum, coment�rios etc. permanecem e s�o sinalizados como sendo de um 'Utilizador exclu�do')
	";
}


$ns -> tablerender(mb_convert_encoding($caption, "HTML-ENTITIES", "ISO-8859-1"), mb_convert_encoding($text, "HTML-ENTITIES", "ISO-8859-1"));
unset($text);
