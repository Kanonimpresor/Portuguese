<?php
/*
+---------------------------------------------------------------+
|       e107 content management system.
|       (Portuguese language file)
|
|       Tradução Português(PT) -> Comunidade e107 Portugal
|      	(http://www.e107pt.com), 2025
|
|       Released under the terms and conditions of the
|       GNU General Public License (http://gnu.org).
+---------------------------------------------------------------+
*/
setlocale(LC_ALL,  'pt_PT.UTF-8', 'pt_PT.utf8', 'pt_pt.utf8', 'pt');
define("CORE_LC", "pt");
define("CORE_LC2", "pt");
// define("TEXTDIRECTION","rtl"); // obsoleto: todos os pacotes de idioma devem ser UTF-8
//define("CHARSET", "utf-8");  // para um site verdadeiramente multilíngua. :)
define("CORE_LAN1", "Erro: tema em falta.\\n\\nAltera o tema usado nas tuas preferências (área de administração) ou envia os ficheiros do tema atual para o servidor."); //obsoleto
define("CORE_LAN2","\\1 escreveu:"); // "\\1" representa o nome de utilizador. //obsoleto
define("CORE_LAN3", "anexos desativados"); // Não usado na versão 0.8
define("CORE_LAN4", "Por favor apaga o ficheiro install.php do teu servidor");
define("CORE_LAN5", "se não o fizeres, a tua página pode estar em risco de segurança");
define("CORE_LAN6", "A proteção contra spam deste site foi ativada e és avisado que, se continuares a pedir páginas, poderás ser banido.");
define("CORE_LAN7", "O núcleo está a tentar restaurar as preferências a partir de um backup automático.");
define("CORE_LAN8", "Erro nas Preferências do Núcleo");
define("CORE_LAN9", "O núcleo não conseguiu restaurar a partir do backup automático. Execução interrompida.");
define("CORE_LAN10", "Foi detetado um cookie corrompido - sessão terminada.");

// Rodapé
define("CORE_LAN11", "Tempo de renderização: ");
define("CORE_LAN12", " seg (");
define("CORE_LAN13", "% disso para consultas) ");
define("CORE_LAN14", "%2.3f seg de CPU (%2.2f%% de carga, %2.3f inicialização). Relógio: ");
define("CORE_LAN15", "Consultas à BD: ");
define("CORE_LAN16", "Memória: ");

// img.bb
define("CORE_LAN17", "[ imagem desativada ]");
define("CORE_LAN18", "Imagem: ");

define("CORE_LAN_B", "B");
define("CORE_LAN_KB", "kB");
define("CORE_LAN_MB", "MB");
define("CORE_LAN_GB", "GB");
define("CORE_LAN_TB", "TB");

define("EMESSLAN_TITLE_INFO", "Informações do Sistema");
define("EMESSLAN_TITLE_ERROR", "Erro");
define("EMESSLAN_TITLE_SUCCESS", "Sucesso");
define("EMESSLAN_TITLE_WARNING", "Aviso");
define("EMESSLAN_TITLE_DEBUG", "Depuração do Sistema");

define("LAN_NO_PERMISSIONS", "Não tens permissão para ver esta página.");
define("LAN_EDIT","Editar");
define("LAN_DELETE","Apagar");
define("LAN_DEFAULT","Padrão");
define("LAN_MORE", "Mais...");
define("LAN_LESS", "...Menos");
define("LAN_READ_MORE", "Ler mais...");
define("LAN_GOPAGE", "Ir para a página");
define("LAN_GOTOPAGEX", "Ir para a página [x]");
define("LAN_GO", "Ir");
define("LAN_SUBMIT", "Submeter");
define("LAN_NONE", "Nenhum");
define("LAN_WARNING", "Aviso!");
define("LAN_ERROR", "Erro");
define("LAN_ANONYMOUS", "Anónimo");
define("LAN_EMAIL_SUBS", "-email-");
define("LAN_ACTIVE","Ativo");
define("LAN_YES", "Sim");
define("LAN_NO", "Não");
define("LAN_OK", "OK");
define("LAN_ACTIONS", "Ações");
define("LAN_THANK_YOU", "Obrigado");
define("LAN_CONTINUE", "Continuar");
define("LAN_ENTER", "Entrar");
define("LAN_ENTER_CODE", "Introduz o código");
define("LAN_INVALID_CODE", "Código introduzido incorreto.");
define("LAN_SEARCH", "Procurar");
define("LAN_VIEW", "Ver");
define("LAN_CLICK_TO_VIEW", "Clica para ver");
define("LAN_SORT", "Ordenar");
define("LAN_ORDER_BY", "Ordenar por");
define("LAN_ASCENDING", "Ascendente");
define("LAN_DESCENDING", "Descendente");
define("LAN_SHARE", "Partilhar");
define("LAN_BACK", "Voltar");
define("LAN_NAME", "Nome");
define("LAN_DESCRIPTION", "Descrição");
define("LAN_CANCEL","Cancelar");
define("LAN_DATE","Data");
define("LAN_DATE_POSTED", "Data de publicação");
define("LAN_POSTED_BY", "Publicado por");
define("LAN_JSCONFIRM","Tens a certeza?");
define("LAN_IP","IP");
define("LAN_IP_ADDRESS","Endereço IP");
define("LAN_AUTHOR","Autor");
define("LAN_CATEGORY", "Categoria");
define("LAN_CATEGORIES", "Categorias");
define("LAN_GUEST", "Convidado");
define("LAN_NEXT", "Seguinte");
define("LAN_PREVIOUS", "Anterior");
define("LAN_LOGIN", "Iniciar sessão");
define("LAN_LOGOUT", "Terminar sessão");
define("LAN_VERIFY", "Verificar");
define("LAN_SETTINGS", "Configurações");
define("LAN_PASSWORD", "Palavra-passe");
define("LAN_INCORRECT_PASSWORD", "Palavra-passe incorreta");
define("LAN_TYPE", "Tipo");
define("LAN_SCREENSHOT", "Captura de ecrã");
define("LAN_FILE", "Ficheiro");
define("LAN_YOUTUBE_VIDEO", "Vídeo do YouTube");
define("LAN_YOUTUBE_PLAYLIST", "Playlist do YouTube");
define("LAN_FILETYPES", "Tipos de ficheiro");
define("LAN_FILE_NOT_FOUND", "Ficheiro não encontrado");
define("LAN_FILES","Ficheiros");

define("LAN_SIZE", "Tamanho");
define("LAN_VERSION", "Versão");
define("LAN_DOWNLOAD", "Transferir");
define("LAN_DOWNLOAD_NO_PERMISSION", "Ficheiro não encontrado ou não tens permissão para o transferir!");
define("LAN_WEBSITE", "Website");
define("LAN_COMMENTS", "Comentários");
define("LAN_LOCATION", "Localização");
define("LAN_NO_RECORDS_FOUND","Nenhum registo encontrado");
define("LAN_RATING", "Avaliação");
define("LAN_IMAGE","Imagem");
define("LAN_ABOUT", "Sobre");
define("LAN_TITLE", "Título");
define("LAN_MESSAGE", "Mensagem");
define("LAN_USER", "Utilizador");
define("LAN_EMAIL","Endereço de email");
define("LAN_WROTE", "escreveu"); // como em João escreveu...
define("LAN_RE_ORDER", "Reordenar");
define("LAN_RELATED", "Relacionado");
define("LAN_CLOSE", "Fechar");
define("LAN_EXPAND", "Expandir");
define("LAN_LIST", "Lista");
define("LAN_DATESTAMP","Data");
define("LAN_SUBJECT","Assunto");

define("LAN_ENTER_USRNAME_EMAIL", "Por favor introduz o teu nome de utilizador ou email");
define("LAN_PWD_REQUIRED", "Palavra-passe obrigatória");
define("LAN_SHOW", "Mostrar");
define("LAN_GENERATE", "Gerar");
define("LAN_SUMMARY", "Resumo");
define("LAN_REQUIRED_BLANK", "Campo(s) obrigatório(s) deixado(s) em branco.");
define("LAN_PLEASEWAIT", "Por favor, espera");
define("LAN_CHOOSE_FILE", "Escolhe um ficheiro");
define("LAN_REQUIRED", "Obrigatório");

define("LAN_DEVELOPERMODE_CHECK", "[b]O modo de programador está atualmente ativado. Usa este modo apenas durante o desenvolvimento![/b] [br]Por favor desativa o modo de programador ao usares o teu site em produção. Quando está ativado, podem ser exibidas informações sensíveis ao público!");
