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
/*
As definições neste ficheiro são para mensagens "explicativas" padrão que podem ser introduzidas
em qualquer um dos registos do sistema. Estão divididas em três grupos com prefixos diferentes:
	LAN_ADMIN_LOG_nnn - o registo de administração (regista ações intencionais dos administradores)
	LAN_AUDIT_LOG_nnn - o registo de auditoria (regista ações, geralmente intencionais, dos utilizadores)
	LAN_ROLL_LOG_nnn - o registo contínuo (regista eventos extra, depuração, etc.)
*/


// Eventos da trilha de auditoria de utilizadores. Para as mensagens 11-30, os últimos 2 dígitos devem coincidir com a definição do tipo de evento no ficheiro da classe de registo de administração
define("LAN_AUDIT_LOG_001", "Acesso por utilizador banido");
define("LAN_AUDIT_LOG_002", "Proteção contra flood ativada");
define("LAN_AUDIT_LOG_003", "Acesso a partir de endereço IP banido");
define("LAN_AUDIT_LOG_004", "");
define("LAN_AUDIT_LOG_005", "");
define("LAN_AUDIT_LOG_006", "Utilizador alterou a palavra-passe");
define("LAN_AUDIT_LOG_007", "Utilizador alterou o endereço de email");
define("LAN_AUDIT_LOG_008", "");
define("LAN_AUDIT_LOG_009", "");
define("LAN_AUDIT_LOG_010", "Dados do utilizador alterados por admin");
define("LAN_AUDIT_LOG_011", "Utilizador registou-se");
define("LAN_AUDIT_LOG_012", "Utilizador confirmou o registo");
define("LAN_AUDIT_LOG_013", "Login do utilizador");
define("LAN_AUDIT_LOG_014", "Logout do utilizador");
define("LAN_AUDIT_LOG_015", "Utilizador alterou o nome de exibição");
define("LAN_AUDIT_LOG_016", "Utilizador alterou a palavra-passe");
define("LAN_AUDIT_LOG_017", "Utilizador alterou o endereço de email");
define("LAN_AUDIT_LOG_018", "Palavra-passe do utilizador redefinida");
define("LAN_AUDIT_LOG_019", "Utilizador alterou as definições");
define("LAN_AUDIT_LOG_020", "Utilizador adicionado pelo admin");
define("LAN_AUDIT_LOG_021", "Email devolvido (bounce) do utilizador");
define("LAN_AUDIT_LOG_022", "Utilizador banido");
define("LAN_AUDIT_LOG_023", "Bounce do utilizador reiniciado");
define("LAN_AUDIT_LOG_024", "Estado temporário do utilizador");


// Eventos do registo de administração
//-------------------------------------
define("LAN_AL_ADLOG_01", "Registo admin - preferências atualizadas");
define("LAN_AL_ADLOG_02", "Registo admin - dados antigos eliminados");
define("LAN_AL_ADLOG_03", "Registo de auditoria - dados antigos eliminados");
define("LAN_AL_ADLOG_04", "Opções de auditoria do utilizador atualizadas");
define("LAN_AL_ADLOG_05", "");


// Edições de utilizadores
//------------------------
define("LAN_AL_USET_01", "Admin editou os dados do utilizador");
define("LAN_AL_USET_02", "Utilizador adicionado pelo admin");
define("LAN_AL_USET_03", "Opções do utilizador atualizadas");
define("LAN_AL_USET_04", "Utilizadores eliminados");
define("LAN_AL_USET_05", "Utilizador banido");
define("LAN_AL_USET_06", "Banimento do utilizador removido");
define("LAN_AL_USET_07", "Utilizador eliminado");
define("LAN_AL_USET_08", "Utilizador tornado admin");
define("LAN_AL_USET_09", "Estado de admin revogado ao utilizador");
define("LAN_AL_USET_10", "Utilizador aprovado");
define("LAN_AL_USET_11", "Reenvio do email de validação");
define("LAN_AL_USET_12", "Reenvio de todos os emails de validação");
define("LAN_AL_USET_13", "Emails devolvidos (bounced) eliminados");
define("LAN_AL_USET_14", "Filiação em classes atualizada");
define("LAN_AL_USET_15", "Registo recusado"); // Demasiados utilizadores com o mesmo IP


// Eventos relacionados com classes de utilizadores
//-------------------------------------------------
define("LAN_AL_UCLASS_00", "Evento desconhecido relacionado com classes de utilizadores");
define("LAN_AL_UCLASS_01", "Classe de utilizadores criada");
define("LAN_AL_UCLASS_02", "Classe de utilizadores eliminada");
define("LAN_AL_UCLASS_03", "Classe de utilizadores editada");
define("LAN_AL_UCLASS_04", "Filiação em classe atualizada");
define("LAN_AL_UCLASS_05", "Definições iniciais das classes de utilizadores editadas");
define("LAN_AL_UCLASS_06", "Filiação em classe esvaziada");


// Eventos da lista de banimentos
//--------------------------------
define("LAN_AL_BANLIST_00", "Evento de banimento desconhecido");
define("LAN_AL_BANLIST_01", "Banimento manual adicionado");
define("LAN_AL_BANLIST_02", "Banimento eliminado");
define("LAN_AL_BANLIST_03", "Tempo de banimento alterado");
define("LAN_AL_BANLIST_04", "Entrada na lista branca adicionada");
define("LAN_AL_BANLIST_05", "Entrada na lista branca eliminada");
define("LAN_AL_BANLIST_06", "Lista de banimentos exportada");
define("LAN_AL_BANLIST_07", "Lista de banimentos importada");
define("LAN_AL_BANLIST_08", "Opções da lista de banimentos atualizadas");
define("LAN_AL_BANLIST_09", "Entrada na lista de banimentos editada");
define("LAN_AL_BANLIST_10", "Entrada na lista branca editada");
define("LAN_AL_BANLIST_11", "Acerto na lista branca para entrada de banimento");
define("LAN_AL_BANLIST_12", "Banimentos expirados eliminados");


// Eventos relacionados com comentários
//-------------------------------------
define("LAN_AL_COMMENT_01", "Comentário(s) eliminado(s)");


// Eventos do registo contínuo
//----------------------------
define("LAN_ROLL_LOG_01", "Nome de utilizador e/ou palavra-passe em branco");
define("LAN_ROLL_LOG_02", "Código de imagem incorreto introduzido");
define("LAN_ROLL_LOG_03", "Combinação inválida de nome de utilizador/palavra-passe");
define("LAN_ROLL_LOG_04", "Nome de utilizador inválido introduzido");
define("LAN_ROLL_LOG_05", "Tentativa de login por utilizador ainda não totalmente registado");
define("LAN_ROLL_LOG_06", "Login bloqueado por gestor de eventos");
define("LAN_ROLL_LOG_07", "Múltiplos logins a partir do mesmo endereço");
define("LAN_ROLL_LOG_08", "Nome de utilizador com comprimento excessivo");
define("LAN_ROLL_LOG_09", "Utilizador banido tentou iniciar sessão");
define("LAN_ROLL_LOG_10", "Falha no login - motivo desconhecido");
define("LAN_ROLL_LOG_11", "Falha no login de admin");


// Eventos de preferências
//------------------------
define("LAN_AL_PREFS_01", "Preferências alteradas");
define("LAN_AL_PREFS_02", "Novas preferências criadas");
define("LAN_AL_PREFS_03", "Erro ao guardar as preferências");


// Eventos da página inicial
//--------------------------
define("LAN_AL_FRONTPG_00", "Evento desconhecido relacionado com a página inicial");
define("LAN_AL_FRONTPG_01", "Ordem das regras alterada");
define("LAN_AL_FRONTPG_02", "Regra adicionada");
define("LAN_AL_FRONTPG_03", "Regra editada");
define("LAN_AL_FRONTPG_04", "Regra eliminada");
define("LAN_AL_FRONTPG_05", "");
define("LAN_AL_FRONTPG_06", "");


// Administração de temas de utilizador
//-------------------------------------
define("LAN_AL_UTHEME_00", "Evento desconhecido relacionado com tema do utilizador");
define("LAN_AL_UTHEME_01", "Definições do tema do utilizador alteradas");
define("LAN_AL_UTHEME_02", "");


// Rotinas de atualização
//-----------------------
define("LAN_AL_UPDATE_00", "Evento desconhecido relacionado com atualização de software");
define("LAN_AL_UPDATE_01", "Atualização de 1.0 para 2.0 executada");
define("LAN_AL_UPDATE_02", "Atualização de 0.7.x para 0.7.6 executada");
define("LAN_AL_UPDATE_03", "Preferências em falta adicionadas");


// Rotinas de administrador
//-------------------------
define("LAN_AL_ADMIN_00", "Evento de administrador desconhecido");
define("LAN_AL_ADMIN_01", "Permissões de admin atualizadas");
define("LAN_AL_ADMIN_02", "Direitos de admin removidos");
define("LAN_AL_ADMIN_03", "");


// Modo de manutenção
//-------------------
define("LAN_AL_MAINT_00", "Mensagem de manutenção desconhecida");
define("LAN_AL_MAINT_01", "Modo de manutenção ativado");
define("LAN_AL_MAINT_02", "Modo de manutenção desativado");


// Rotinas de ligações do site
//----------------------------
define("LAN_AL_SLINKS_00", "Mensagem de ligações do site desconhecida");
define("LAN_AL_SLINKS_01", "Sub-ligações geradas");
define("LAN_AL_SLINKS_02", "Ligação do site movida para cima");
define("LAN_AL_SLINKS_03", "Ligação do site movida para baixo");
define("LAN_AL_SLINKS_04", "Ordem das ligações do site atualizada");
define("LAN_AL_SLINKS_05", "Opções das ligações do site atualizadas");
define("LAN_AL_SLINKS_06", "Ligação do site eliminada");
define("LAN_AL_SLINKS_07", "Ligação do site submetida");
define("LAN_AL_SLINKS_08", "Ligação do site atualizada");


// Rotinas do gestor de temas
//-----------------------
define("LAN_AL_THEME_00", "Mensagem desconhecida relacionada com o tema");
define("LAN_AL_THEME_01", "Tema do site atualizado");
define("LAN_AL_THEME_02", "Tema da administração atualizado");
define("LAN_AL_THEME_03", "Pré-carregamento de imagens/CSS do site atualizado");
define("LAN_AL_THEME_04", "Estilo/CSS da administração atualizado");
define("LAN_AL_THEME_05", "");


// Rotinas de controlo da cache
//-----------------------
define("LAN_AL_CACHE_00", "Mensagem desconhecida relacionada com a cache");
define("LAN_AL_CACHE_01", "Definições da cache atualizadas");
define("LAN_AL_CACHE_02", "Cache do sistema limpa");
define("LAN_AL_CACHE_03", "Cache de conteúdos limpa");
define("LAN_AL_CACHE_04", "");


// Administração de emoticons
//------------
define("LAN_AL_EMOTE_00", "Mensagem desconhecida relacionada com emoticons");
define("LAN_AL_EMOTE_01", "Pacote de emoticons ativo alterado");
define("LAN_AL_EMOTE_02", "Emoticons ativados");
define("LAN_AL_EMOTE_03", "Emoticons desativados");


// Mensagem de boas-vindas
//----------------
define("LAN_AL_WELCOME_00", "Mensagem desconhecida relacionada com a mensagem de boas-vindas");
define("LAN_AL_WELCOME_01", "Mensagem de boas-vindas criada");
define("LAN_AL_WELCOME_02", "Mensagem de boas-vindas atualizada");
define("LAN_AL_WELCOME_03", "Mensagem de boas-vindas eliminada");
define("LAN_AL_WELCOME_04", "Opções da mensagem de boas-vindas alteradas");
define("LAN_AL_WELCOME_05", "");


// Palavra-passe de administrador
//---------------
define("LAN_AL_ADMINPW_01", "Palavra-passe do administrador alterada");
define("LAN_AL_ADMINPW_02", "Palavra-passe do administrador reprocessada");

// Administração de banners
//--------------
define("LAN_AL_BANNER_00", "Mensagem desconhecida relacionada com banners");
define("LAN_AL_BANNER_01", "Menu de banners atualizado");
define("LAN_AL_BANNER_02", "Banner criado");
define("LAN_AL_BANNER_03", "Banner atualizado");
define("LAN_AL_BANNER_04", "Banner eliminado");
define("LAN_AL_BANNER_05", "Configuração dos banners atualizada");
define("LAN_AL_BANNER_06", "");

// Gestão de imagens
//-----------------
define("LAN_AL_IMALAN_00", "Mensagem desconhecida relacionada com imagens");
define("LAN_AL_IMALAN_01", "Avatar eliminado");
define("LAN_AL_IMALAN_02", "Todos os avatares e fotos eliminados");
define("LAN_AL_IMALAN_03", "Avatar eliminado");
define("LAN_AL_IMALAN_04", "Definições atualizadas");
define("LAN_AL_IMALAN_05", "");
define("LAN_AL_IMALAN_06", "");

// Gestão de idiomas
//--------------------
define("LAN_AL_LANG_00", "Mensagem desconhecida relacionada com idioma");
define("LAN_AL_LANG_01", "Preferências de idioma alteradas");
define("LAN_AL_LANG_02", "Tabelas de idioma eliminadas");
define("LAN_AL_LANG_03", "Tabelas de idioma criadas");
define("LAN_AL_LANG_04", "Ficheiro zip de idioma criado");
define("LAN_AL_LANG_05", "");

// Meta Tags
//----------
define("LAN_AL_META_01", "Meta tags atualizadas");

// Downloads
//----------
/*
define("LAN_AL_DOWNL_01", "Opções de download alteradas");
define("LAN_AL_DOWNL_02", "Categoria de download criada");
define("LAN_AL_DOWNL_03", "Categoria de download atualizada");
define("LAN_AL_DOWNL_04", "Categoria de download eliminada");
define("LAN_AL_DOWNL_05", "Download criado");
define("LAN_AL_DOWNL_06", "Download atualizado");
define("LAN_AL_DOWNL_07", "Download eliminado");
define("LAN_AL_DOWNL_08", "Ordem das categorias de download atualizada");
define("LAN_AL_DOWNL_09", "Limite de download adicionado");
define("LAN_AL_DOWNL_10", "Limite de download editado");
define("LAN_AL_DOWNL_11", "Limite de download eliminado");
define("LAN_AL_DOWNL_12", "Espelho de download adicionado");
define("LAN_AL_DOWNL_13", "Espelho de download atualizado");
define("LAN_AL_DOWNL_14", "Espelho de download eliminado");
define("LAN_AL_DOWNL_15", "");
*/

// Páginas/Menus personalizados
//-------------------
define("LAN_AL_CPAGE_01", "Página/menu personalizado adicionado");
define("LAN_AL_CPAGE_02", "Página/menu personalizado atualizado");
define("LAN_AL_CPAGE_03", "Página/menu personalizado eliminado");
define("LAN_AL_CPAGE_04", "Definições de página/menu personalizadas atualizadas");

// Campos de utilizador estendidos
//---------------------
define("LAN_AL_EUF_01", "EUF movido para cima");
define("LAN_AL_EUF_02", "EUF movido para baixo");
define("LAN_AL_EUF_03", "Categoria de EUF movida para cima");
define("LAN_AL_EUF_04", "Categoria de EUF movida para baixo");
define("LAN_AL_EUF_05", "Campo de utilizador estendido adicionado");
define("LAN_AL_EUF_06", "Campo de utilizador estendido atualizado");
define("LAN_AL_EUF_07", "Campo de utilizador estendido eliminado");
define("LAN_AL_EUF_08", "Categoria de EUF adicionada");
define("LAN_AL_EUF_09", "Categoria de EUF atualizada");
define("LAN_AL_EUF_10", "Categoria de EUF eliminada");
define("LAN_AL_EUF_11", "Campos de utilizador estendidos ativados");
define("LAN_AL_EUF_12", "Campos de utilizador estendidos desativados");

// Menus
//------
define("LAN_AL_MENU_01", "Menu ativado");
define("LAN_AL_MENU_02", "Menu - definir visibilidade");
define("LAN_AL_MENU_03", "Menu - alterar área");
define("LAN_AL_MENU_04", "Menu desativado");
define("LAN_AL_MENU_05", "Menu - mover para o topo");
define("LAN_AL_MENU_06", "Menu - mover para o fundo");
define("LAN_AL_MENU_07", "Menu - mover para cima");
define("LAN_AL_MENU_08", "Menu - mover para baixo");
define("LAN_AL_MENU_09", "");

// Uploads públicos
//---------------
define("LAN_AL_UPLOAD_01", "Ficheiro carregado eliminado");
define("LAN_AL_UPLOAD_02", "Preferências de upload alteradas");

// Pesquisa
//-------
define("LAN_AL_SEARCH_01", "Definições de pesquisa atualizadas");
define("LAN_AL_SEARCH_02", "Preferências de pesquisa atualizadas");
define("LAN_AL_SEARCH_03", "Parâmetros de pesquisa atualizados automaticamente");
define("LAN_AL_SEARCH_04", "Áreas pesquisáveis atualizadas");
define("LAN_AL_SEARCH_05", "Definições do manipulador de pesquisa atualizadas");
define("LAN_AL_SEARCH_06", "");

// Notificações
//-------
define("LAN_AL_NOTIFY_01", "Definições de notificação atualizadas");

// Notícias
//-----
define("LAN_AL_NEWS_01", "Notícia eliminada");
define("LAN_AL_NEWS_02", "Categoria de notícia eliminada");
define("LAN_AL_NEWS_03", "Notícia submetida eliminada");
define("LAN_AL_NEWS_04", "Categoria de notícia criada");
define("LAN_AL_NEWS_05", "Categoria de notícia atualizada");
define("LAN_AL_NEWS_06", "Preferências de notícias atualizadas");
define("LAN_AL_NEWS_07", "Notícia submetida autorizada");
define("LAN_AL_NEWS_08", "Notícia adicionada");
define("LAN_AL_NEWS_09", "Notícia atualizada");
define("LAN_AL_NEWS_10", "Reescrita da categoria de notícia alterada");
define("LAN_AL_NEWS_11", "Reescrita da categoria de notícia eliminada");
define("LAN_AL_NEWS_12", "Reescrita de notícia alterada");
define("LAN_AL_NEWS_13", "Reescrita de notícia eliminada");


// Gestor de ficheiros
//-------------
define("LAN_AL_FILEMAN_01", "Ficheiro(s) eliminado(s)");
define("LAN_AL_FILEMAN_02", "Ficheiro(s) movido(s)");
define("LAN_AL_FILEMAN_03", "Ficheiro(s) carregado(s)");
define("LAN_AL_FILEMAN_04", "");

// Correio
//-----
define("LAN_AL_MAIL_01", "Email de teste enviado");
define("LAN_AL_MAIL_02", "Envio de email criado");
define("LAN_AL_MAIL_03", "Definições de email atualizadas");
define("LAN_AL_MAIL_04", "Detalhes do envio de email eliminados");
define("LAN_AL_MAIL_05", "Base de dados de email organizada");
define("LAN_AL_MAIL_06", "Envio de email ativado");
define("LAN_AL_MAIL_07", "");

// Gestor de plugins
//---------------
define("LAN_AL_PLUGMAN_01", "Plugin instalado");
define("LAN_AL_PLUGMAN_02", "Plugin atualizado");
define("LAN_AL_PLUGMAN_03", "Plugin desinstalado");
define("LAN_AL_PLUGMAN_04", "Plugin atualizado (refresh)");

// Gestor de URLs
//---------------
define("LAN_AL_EURL_01", "Configuração de URLs do site alterada");

// Pseudo-plugins diversos
//----------------------
define("LAN_AL_MISC_01", "Definições do menu em árvore atualizadas");
define("LAN_AL_MISC_02", "Definições do menu online atualizadas");
define("LAN_AL_MISC_03", "Definições do menu de login atualizadas");
define("LAN_AL_MISC_04", "Definições do menu de comentários atualizadas");
define("LAN_AL_MISC_05", "Definições do menu do relógio atualizadas");
define("LAN_AL_MISC_06", "Definições do menu do calendário do blog atualizadas");
//define("LAN_AL_MISC_07", "");


define("LAN_AL_PING_01", "Ping ao serviço");

define("LAN_AL_ADMINUI_01", "Inserção na tabela da BD da Admin-UI: [x]");
define("LAN_AL_ADMINUI_02", "Atualização na tabela da BD da Admin-UI: [x]");
define("LAN_AL_ADMINUI_03", "Eliminação na tabela da BD da Admin-UI: [x]");
define("LAN_AL_ADMINUI_04", "Erro na BD da Admin-UI: [x]");

define("LAN_AL_BACKUP", "Cópia de segurança da base de dados");

define("LAN_AL_MEDIA_01", "Ficheiro multimédia carregado");

define("LAN_AL_USET_100", "Administrador iniciou sessão como outro utilizador");
define("LAN_AL_USET_101", "Administrador terminou sessão como outro utilizador");
