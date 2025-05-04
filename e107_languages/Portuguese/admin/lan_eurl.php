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

define("LAN_EURL_NAME", "Gerenciar URLs do Site");
define("LAN_EURL_NAME_CONFIG", "Perfis");
define("LAN_EURL_NAME_ALIASES", "Aliases");
define("LAN_EURL_NAME_SETTINGS", "Configurações gerais");
define("LAN_EURL_NAME_HELP", "Ajuda");

define("LAN_EURL_EMPTY", "A lista está vazia");
define("LAN_EURL_LEGEND_CONFIG", "Escolha o perfil de URL por área do site");
define("LAN_EURL_LEGEND_ALIASES", "Configurar aliases de URL base por perfil de URL");

define("LAN_EURL_DEFAULT", "Padrão");
define("LAN_EURL_PROFILE", "Perfil");

define("LAN_EURL_INFOALT", "Info");
define("LAN_EURL_PROFILE_INFO", "Informações do perfil não disponíveis");
define("LAN_EURL_LOCATION", "Localização do Perfil");
define("LAN_EURL_LOCATION_NONE", "Arquivo de configuração não disponível");
define("LAN_EURL_FORM_HELP_DEFAULT", "Alias quando no idioma padrão.");
define("LAN_EURL_FORM_HELP_ALIAS_0", "Valor padrão é ");
define("LAN_EURL_FORM_HELP_ALIAS_1", "Alias quando em ");
define("LAN_EURL_FORM_HELP_EXAMPLE", "URL base");

// mensagens
define("LAN_EURL_ERR_ALIAS_MODULE", "Alias &quot;%1\$s&quot; não pode ser salvo - existe um perfil de URL do sistema com o mesmo nome. Por favor, escolha outro valor de alias para o perfil de URL do sistema &quot;%2\$s&quot;"); // FIXME HTML IN LAN
define("LAN_EURL_SURL_UPD",    "&nbsp; URLs SEF foram atualizadas.");
define("LAN_EURL_SURL_NUPD",    "&nbsp; URLs SEF NÃO foram atualizadas.");
// configurações
define("LAN_EURL_SETTINGS_PATHINFO", "Remover nome do arquivo da URL");
define("LAN_EURL_SETTINGS_MAINMODULE", "Associar namespace raiz");
define("LAN_EURL_SETTINGS_MAINMODULE_HELP", "Escolha qual área do site será conectada com sua URL base do site. Exemplo: Quando News é o seu namespace raiz https://yoursite.com/News-Item-Title será associado com notícias (a página de item será resolvida)");
define("LAN_EURL_SETTINGS_REDIRECT", "Redirecionar para página de sistema não encontrada");
define("LAN_EURL_SETTINGS_REDIRECT_HELP", "Se definido como falso, a página não encontrada será renderizada diretamente (sem redirecionamento do navegador)");
define("LAN_EURL_SETTINGS_SEFTRANSLATE", "Tipo de criação automática de string SEF");
define("LAN_EURL_SETTINGS_SEFTRANSLATE_HELP", "Escolha como será montada a string SEF quando ela for gerada automaticamente a partir de um valor de Título (por exemplo, em notícias, páginas personalizadas, etc.)");
define("LAN_EURL_SETTINGS_SEFTRTYPE_NONE", "Apenas garantir");
define("LAN_EURL_SETTINGS_SEFTRTYPE_DASHL", "transformar-em-caixa-baixa-com-tracinho");
define("LAN_EURL_SETTINGS_SEFTRTYPE_DASHC", "Transformar-em-Camel-Case-com-tracinho");
define("LAN_EURL_SETTINGS_SEFTRTYPE_DASH", "Transformar-com-tracinho-sem-mudar-de-caso");
define("LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCOREL", "underscore_para_caixa_baixa");
define("LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCOREC", "Underscore_Para_Camel_Case");
define("LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCORE", "Underscore_como-sem-mudar-de-caso");
define("LAN_EURL_SETTINGS_SEFTRTYPE_PLUSL", "plus+separador+para+caixa+baixa");
define("LAN_EURL_SETTINGS_SEFTRTYPE_PLUSC", "Plus+Separador+Para+Camel+Case");
define("LAN_EURL_SETTINGS_SEFTRTYPE_PLUS", "Plus+separador+sem-mudar-de-caso");

define("LAN_EURL_MODREWR_DESCR", "Remove o nome do script de entrada (index.php/) das suas URLs. Você precisará ter o mod_rewrite instalado e funcionando no seu servidor (Servidor Web Apache). Após ativar essa configuração, vá até a pasta raiz do seu site, renomeie htaccess.txt para .htaccess e modifique a diretiva <em>&quot;RewriteBase&quot;</em> se necessário.");

// navegação
define("LAN_EURL_MENU", "URLs do Site");
define("LAN_EURL_MENU_CONFIG", "Configurações");
define("LAN_EURL_MENU_ALIASES", "Aliases de Perfil");
define("LAN_EURL_MENU_SETTINGS", "Configurações");
define("LAN_EURL_MENU_HELP", "Ajuda");
define("LAN_EURL_MENU_PROFILES", "Perfis");

define("LAN_EURL_UC", "Em Construção");

define("LAN_EURL_CORE_MAIN", "Namespace Raiz do Site - alias não em uso.");

define("LAN_EURL_FRIENDLY",   "Amigável");
define("LAN_EURL_LEGACY", "URLs diretas legadas.");

define("LAN_EURL_REWRITE_LABEL", "URLs Amigáveis");
define("LAN_EURL_REWRITE_DESCR", "URLs amigáveis para motores de busca e usuários.");

// Notícias
define("LAN_EURL_CORE_NEWS", "Notícias");
define("LAN_EURL_NEWS_REWRITEF_LABEL", "URLs Amigáveis Completas (sem impacto de performance e mais amigáveis)");
define("LAN_EURL_NEWS_REWRITEF_DESCR", "");

define("LAN_EURL_NEWS_REWRITE_LABEL", "URLs Amigáveis sem ID (sem impacto de performance, mais amigáveis)");
define("LAN_EURL_NEWS_REWRITE_DESCR", "Demonstra a análise e montagem manual de links.");

define("LAN_EURL_NEWS_REWRITEX_LABEL", "URLs Amigáveis com ID (em termos de performance)");
define("LAN_EURL_NEWS_REWRITEX_DESCR", "Demonstra a análise e montagem automática de links com base em regras de rota pré-definidas.");

// Downloads
//define("LAN_EURL_CORE_DOWNLOADS", "Downloads");

// Usuários
define("LAN_EURL_CORE_USER", "Usuários");
define("LAN_EURL_USER_REWRITE_LABEL", "URLs Amigáveis");
define("LAN_EURL_USER_REWRITE_DESCR", "URLs amigáveis para motores de busca e usuários.");

// Páginas
define("LAN_EURL_CORE_PAGE", "Páginas Personalizadas");
define("LAN_EURL_PAGE_SEF_LABEL", "URLs Amigáveis com ID (performance)");
define("LAN_EURL_PAGE_SEF_DESCR", "URLs amigáveis para motores de busca e usuários.");

define("LAN_EURL_PAGE_SEFNOID_LABEL", "URLs Amigáveis sem ID (sem performance, mais amigáveis)");
define("LAN_EURL_PAGE_SEFNOID_DESCR", "URLs amigáveis para motores de busca e usuários.");

// Busca
define("LAN_EURL_CORE_SEARCH", "Busca");
define("LAN_EURL_SEARCH_DEFAULT_LABEL", "URL de Busca Padrão");
define("LAN_EURL_SEARCH_DEFAULT_DESCR", "URL direta legada.");
define("LAN_EURL_SEARCH_REWRITE_LABEL", "URL Amigável");
define("LAN_EURL_SEARCH_REWRITE_DESCR", "");

// Sistema
define("LAN_EURL_CORE_SYSTEM", "Sistema");
define("LAN_EURL_SYSTEM_DEFAULT_LABEL", "URLs Padrão do Sistema");
define("LAN_EURL_SYSTEM_DEFAULT_DESCR", "URLs para páginas como Não Encontrado, Acesso Negado, etc.");

define("LAN_EURL_SYSTEM_REWRITE_LABEL", "URLs Amigáveis do Sistema");
define("LAN_EURL_SYSTEM_REWRITE_DESCR", "URLs para páginas como Não Encontrado, Acesso Negado, etc.");

// Sistema
define("LAN_EURL_CORE_INDEX", "Página Inicial");
define("LAN_EURL_CORE_INDEX_INFO", "A Página Inicial não pode ter um alias.");
define("LAN_EURL_REBUILD",    "Reconstruir");
define("LAN_EURL_REGULAR_EXPRESSION", "Expressão Regular");
define("LAN_EURL_KEY", "Chave");
define("LAN_EURL_TABLE", "Tabela");
