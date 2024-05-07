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
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/admin/help/userclass2.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }

$caption = "Ajuda da classe de utilizador";

if (!($action = vartrue($_GET['action'])))
{
	if (e_QUERY)
	{
	  $qs = explode(".", e_QUERY);
	}
	$action = varset($qs[0],'display');
}
switch ($action)
{
  case 'initial' :
	$text = "Defina as classes �s quais um novo membro do site ser� atribu�do inicialmente.
Se voc� tiver a verifica��o ativada, essa atribui��o poder� ocorrer quando o utilizador se inscrever ou quando o utilizador for verificado.<br /><br />
E lembre-se de que se voc� estiver usando classes de utilizador hier�rquicas, um utilizador ser� automaticamente membro de todas as classes 'acima' de cada classe selecionada na �rvore";
	break;
  case 'options' :
	$text = "As op��es de configura��o permitem criar e remover a hierarquia de classes padr�o. Voc� pode ver o efeito olhando a �rvore de usu�rios.<br />
Isso n�o destruir� as informa��es de outras classes e voc� poder� modificar ou remover a hierarquia posteriormente.<br /><br />
Voc� s� precisar� reconstruir a hierarquia de classes se ocorrer corrup��o do banco de dados";
	break;
  case 'membs' :
    $text = "Agora na p�gina de administra��o do utilizador";
	break;
  case 'debug' :
	$text = "Somente para usu�rios avan�ados - mostra a hierarquia das classes, mais as classes atribu�das e as classes �s quais os primeiros 20 membros do site t�m acesso.<br />
O n�mero na frente do nome da classe � seu ID exclusivo (n�mero de refer�ncia). A classe 'Todos' possui um ID 0 (zero). e107 usa esses IDs para se referir �s classes.<br />
Depois do nome da classe vem a visibilidade e editabilidade da classe - [vis:253, edit: 27] por exemplo. Isso significa que a classe estar� vis�vel na maioria dos seletores somente se o utilizador atual for membro da classe 253,
e o utilizador poder� editar sua associa��o de classe somente se for membro da classe 27.<br />
Finalmente, ap�s o '=', h� uma lista de todas as classes acima ou abaixo de cada classe na �rvore, mais o ID dessa classe. Assim, um utilizador que � membro de uma classe espec�fica ir�
ser membro de todas as classes desta lista.<br /><br />
Para ajudar na compreens�o, s�o mostrados os membros da classe dos primeiros 20 membros. A primeira entrada de cada linha mostra as classes das quais o utilizador � membro. O
a segunda entrada lista todas as classes das quais o utilizador � membro quando a heran�a entra em vigor. A terceira entrada mostra quais associa��es de classe eles podem editar";
	break;
  case 'test' :
  case 'special' :
    $text = "N�o use isto!!! Somente para desenvolvedores!!!";
	break;
  case 'edit' :
  case 'config' :
	$text = "Voc� pode criar classes ou editar classes existentes nesta p�gina.<br />
         Isso � �til para restringir usu�rios a determinadas partes do seu site. Por exemplo, voc� poderia criar uma classe chamada TEST,
em seguida, crie um f�rum que permita apenas que usu�rios da classe TEST o acessem.<br /><br />
O nome da classe � exibido em listas suspensas e similares; em alguns lugares, a descri��o mais detalhada tamb�m � exibida.<br /><br />
O �cone da classes poder� ser exibido em v�rios locais do site, caso haja algum configurado.<br /><br />
Para permitir que os usu�rios determinem se podem ser membros de uma classe, permita que eles a gerenciem. Se voc� definir 'ningu�m' aqui, apenas os administradores
pode gerenciar a associa��o da classe<br /><br />
O campo 'visibilidade' permite ocultar a classe da maioria dos membros - aplica-se em algumas listas suspensas e caixas de sele��o.<br /><br />
A 'classe pai' permite definir uma hierarquia de classes. Se o 'topo' da hierarquia for a classe 'Todos/P�blico' ou 'Membro', o
as classes mais abaixo na hierarquia tamb�m t�m os direitos de sua classe pai, e do pai dessa classe, e assim por diante. Se o 'topo' da hierarquia for
classe 'Ningu�m/Ningu�m', ent�o os direitos s�o acumulados na dire��o oposta - uma classe acumula todos os direitos de uma classe <b>abaixo</b> dela no
�rvore. A �rvore resultante � mostrada na parte inferior da p�gina; voc� pode expandir e contrair filiais clicando nas caixas '+' e '-'.";
	break;
  case 'display' :
  default :
	$text = "Voc� pode selecionar classes para edi��o e tamb�m excluir classes existentes nesta p�gina.";
}
e107::getRender() -> tablerender(mb_convert_encoding($caption, "HTML-ENTITIES", "ISO-8859-1"), mb_convert_encoding($text, "HTML-ENTITIES", "ISO-8859-1"));
