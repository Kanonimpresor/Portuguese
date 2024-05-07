<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2013 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 */

if (!defined('e107_INIT')) { exit; }

$e107 = e107::getInstance();

$action = e107::getParser()->toDB(varset($_GET['mode'],'makemail'));

  switch ($action)
  {
	case 'justone' :
      $text = 'Enviar endere�o electr�nico com restri��es especificadas por um plugin opcional';
	  break;
	case 'debug' :
      $text = 'Apenas para desenvolvedores. N�o utilizado atualmente';
	  break;
	case 'saved' :
      $text = 'Selecione e use um modelo de endere�o electr�nico salvo para enviar uma mensagem. Exclua qualquer modelo que n�o seja mais necess�rio';
	  break;
	case 'pending' :
        $text = 'Lista de mailshots liberados para envio, juntamente com o status atual. A tarefa do agendador de endere�o electr�nico processar� esses e-mails da melhor forma poss�vel, levando em considera��o as primeiras e �ltimas datas de envio que voc� definiu';
		break;
	case 'held' :
        $text = 'Lista de emails que foram preparados para envio, mas ainda n�o liberados';
		break;
	case 'sent' :
      $text = 'Lista de mailshots conclu�dos. Permite que voc� veja os resultados do envio.<br />';
	  break;
	case 'savedmail' :
	case 'makemail' :
	case 'main' :
      $text = 'Crie um endere�o electr�nico, d� um t�tulo significativo e selecione a lista de destinat�rios. Voc� pode salvar tudo como modelo para usar mais tarde ou enviar imediatamente.<br />';
      $text .= 'Endere�os de endere�o electr�nico podem ser contribu�dos por plugins (como newsletter), e duplicatas s�o removidas quando o endere�o electr�nico � enviado<br />';
      $text .= 'Qualquer anexo � selecionado da lista de downloads v�lidos.<br />';
      $text .= 'O endere�o electr�nico pode ser enviado como texto simples (mais universal e com menor risco de ser classificado como spam) ou como HTML (nesse caso, uma alternativa de texto simples � gerada automaticamente). O estilo do tema
opcionalmente, pode ser adicionado ao endere�o electr�nico. Alternativamente, um modelo predefinido pode ser selecionado.';
	  break;
	case 'recipients' :
      $text = 'Mostra todos os destinat�rios ou potenciais destinat�rios de um endere�o electr�nico, juntamente com o status atual';
		break;
	case 'prefs' :
      $text = '<b>Configurar op��es de mailshot.</b><br />
Um endere�o electr�nico de teste � enviado usando o m�todo e as configura��es atuais. Se voc� estiver tendo problemas com a devolu��o de e-mails, tente enviar um endere�o electr�nico de teste para: <i>check-auth@verifier.port25.com</i> para garantir que os registros MX do seu servidor estejam corretos. Claro, certifique-se de que o endere�o electr�nico do seu site esteja correto antes de fazer isso.<br /><br />';
      $text .= '<b>M�todo de envio por endere�o electr�nico</b><br />
Use SMTP para enviar e-mails, se poss�vel. As configura��es depender�o do servidor de endere�o electr�nico do seu host.<br /><br />';
      $text .= '<b>Formato de endere�o electr�nico padr�o</b><br />
Os e-mails podem ser enviados apenas em texto simples ou em formato HTML. Este �ltimo geralmente d� uma apar�ncia melhor, mas � mais propenso a ser filtrado por v�rios
medidas de seguran�a. Se voc� selecionar HTML, uma parte separada de texto simples ser� adicionada.<br /><br />';
      $text .= '<b>Controles de endere�o electr�nico em massa</b><br />
Os valores que voc� definir aqui depender�o do seu host e do n�mero de e-mails que voc� enviar; pode ser poss�vel definir todos os valores como zero para que o
a fila de correio � esvaziada virtualmente instantaneamente. Normalmente � melhor enviar menos de 500 e-mails por hora.<br /><br />';
      $text .= '<b>E-mails devolvidos</b><br />
Voc� pode especificar um endere�o electr�nico para receber a resposta de retorno quando um endere�o electr�nico n�o puder ser entregue. Se voc� tiver controle sobre seu servidor, poder� especificar o
script separado de processamento autom�tico orientado por agendador; isso recebe mensagens devolvidas � medida que chegam e atualiza o status instantaneamente. Caso contr�rio, voc� pode especificar uma conta de endere�o electr�nico separada,
que pode ser verificado periodicamente (usando o agendador) ou manualmente atrav�s do menu de op��es do utilizador. Normalmente este ser� um padr�o
Conta POP3; use as op��es relacionadas ao TLS somente se especificamente exigido pelo seu host<br /><br />';
      $text .= '<b>Fontes de endere�os de endere�o electr�nico</b><br />
Se voc� tiver plug-ins adicionais relacionados a endere�o electr�nico, poder� selecionar quais deles podem contribuir com endere�os de endere�o electr�nico para a lista.<br /><br />';
      $text .= '<b>Registro</b><br />
A op��o de log cria um arquivo de texto no diret�rio de log do sistema. Isso deve ser exclu�do periodicamente. O \'logging
As op��es only permitem que voc� veja exatamente quem receberia e-mails se realmente fossem enviados. A op��o \'com erros\' falha a cada
7� endere�o electr�nico, principalmente para teste';
	  break;
	 case 'maint' :
      $text = 'Fun��es de manuten��o da base de dados de correio';
		break;
	default :
      $text = 'Op��o n�o documentada';
  }

$ns->tablerender('Ajuda do correio',  mb_convert_encoding($text, "HTML-ENTITIES", "ISO-8859-1"));
