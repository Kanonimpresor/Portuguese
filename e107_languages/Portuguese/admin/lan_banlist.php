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
// define("BANLAN_1", "Banimento removido.");
// define("BANLAN_2", "Não há banimentos na lista.");
// define("BANLAN_3", "Banimentos existentes");
// define("BANLAN_4", "Remover banimento");
define("BANLAN_5", "Introduza IP, endereço de email ou host");
define("BANLAN_7", "Motivo");
// define("BANLAN_8", "Endereço de banimento");
define("BANLAN_9", "Banir utilizadores do site por email, IP ou endereço de host");
define("BANLAN_10", "IP / Email / Motivo");
define("BANLAN_11", "Auto-banimento: Mais de 10 tentativas falhadas de login");
// define("BANLAN_12", "Nota: Reverse DNS está atualmente desativado; deve ser ativado para permitir o banimento por host. O banimento por IP e endereço de email continuará a funcionar normalmente.");
// define("BANLAN_13", "Nota: Para banir um utilizador por nome de utilizador, vá à página de administração de utilizadores: ");
define("BANLAN_14", "Lista de Banimentos");
define("BANLAN_15", "Mensagens/Períodos de Banimento");
define("BANLAN_16", "Banimento");
// define("BANLAN_17", "Data de Banimento");
// define("BANLAN_18", "Banimento expira");
define("BANLAN_19", "Notas");
// define("BANLAN_20", "Tipo");
// define("BANLAN_21", "Nunca");
// define("BANLAN_22", "Desconhecido");
define("BANLAN_23", "dia(s)");
define("BANLAN_24", "hora(s)");
// define("BANLAN_25", "Adicionar à lista de banimentos");
// define("BANLAN_26", "Atualmente ");
// define("BANLAN_27", "Caracteres inválidos no endereço IP removidos - agora:");
define("BANLAN_28", "Tipo de banimento");
define("BANLAN_29", "Mensagem a mostrar ao utilizador banido");
define("BANLAN_30", "Duração do banimento");
define("BANLAN_31", "(Use uma mensagem em branco se desejar que o utilizador veja uma tela em branco)");
define("BANLAN_32", "Indefinido");
// define("BANLAN_33", "Configurações Atualizadas");
define("BANLAN_34", "Expirado");
define("BANLAN_35", "Importar/Exportar");
define("BANLAN_36", "Tipos de Exportação");
define("BANLAN_37", "Separador de campo");
define("BANLAN_38", "Citar (envolver cada valor)");
define("BANLAN_40", "Exportação da Lista de Banimentos");
define("BANLAN_41", "Importação da Lista de Banimentos");
define("BANLAN_42", "Opções de Importação");
define("BANLAN_43", "Substituir todos os banimentos importados existentes");
define("BANLAN_44", "Usar data/hora de expiração da importação");
// define("BANLAN_45", "Importar");
define("BANLAN_46", "Ficheiro de Importação:");
define("BANLAN_47", "Erro de envio de ficheiro");
define("BANLAN_48", "Eliminaram-se [y] entradas de banimento expiradas");
define("BANLAN_49", "Importação CSV: Aspas desequilibradas na linha ");
define("BANLAN_50", "Importação CSV: Erro ao escrever o registo da lista de banimentos na linha ");
define("BANLAN_51", "Importação CSV: Sucesso, [y] linhas importadas do ficheiro ");
define("BANLAN_52", "Lista Branca");
define("BANLAN_53", "Adicionar à Lista Branca");
define("BANLAN_54", "Sem entradas na lista branca");
define("BANLAN_55", "Data de Entrada");
define("BANLAN_56", "IP/Email, Utilizador");
define("BANLAN_57", "Utilizador");
define("BANLAN_58", "Adicionar utilizadores à lista branca");
define("BANLAN_59", "Editar entrada existente na lista branca");
define("BANLAN_60", "Editar entrada existente na lista de banimentos");
define("BANLAN_61", "Entradas existentes na lista branca");
// define("BANLAN_62", "Opções");
define("BANLAN_63", "Usar DNS reverso para permitir o banimento por host");
define("BANLAN_64", "Acessos de DNS reverso ao adicionar banimento");
define("BANLAN_65", "Ativar esta opção permitirá banir utilizadores por nome de domínio, em vez de apenas por IP ou endereço de email. <br />NOTA: Isto pode afetar os tempos de carregamento das páginas em alguns servidores ou se um servidor não responder.");
define("BANLAN_66", "Quando um banimento ocorrer, esta opção adicionará o domínio do endereço banido ao motivo");
define("BANLAN_67", "Definir taxa máxima de acesso");
define("BANLAN_68", "Isto determina o número máximo de acessos ao site em um período de 5 minutos");
define("BANLAN_69", "para membros");
define("BANLAN_70", "para visitantes");
define("BANLAN_71", "Reiniciar período de banimento");
define("BANLAN_72", "Opções de Banimento");
define("BANLAN_73", "Isto reiniciará o período de banimento se um utilizador banido aceder ao site");
define("BANLAN_74", "Manutenção da Lista de Banimentos");
define("BANLAN_75", "Remover banimentos expirados da lista");
define("BANLAN_76", "Executar");
define("BANLAN_77", "Mensagens/Períodos de Banimento");
define("BANLAN_78", "Contagem de acessos excedida ([x] pedidos dentro do tempo permitido)");
define("BANLAN_79", "Formato de Exportação CSV:");
define("BANLAN_80", "Formato de Importação CSV:");
define("BANLAN_81", "Registo de Ação de Banimento");
define("BANLAN_82", "Sem entradas no Registo de Ação de Banimento");
define("BANLAN_83", "Data/Hora");
define("BANLAN_84", "Endereço IP");
define("BANLAN_85", "Informações adicionais");
define("BANLAN_86", "Eventos relacionados com o banimento");
define("BANLAN_87", "Total de [y] entradas na lista");
define("BANLAN_88", "Esvaziar Registo de Ação de Banimento");
define("BANLAN_89", "Ficheiro de registo eliminado");
define("BANLAN_90", "Erro ao eliminar ficheiro de registo");
define("BANLAN_91", "Formato de data/hora para o registo de banimentos");
define("BANLAN_92", "Consulte a página da função strftime em php.net");
define("BANLAN_93", "");

// Tipos de banimento - bloco reservado 100-109
define("BANLAN_100", "Desconhecido");
define("BANLAN_101", "Manual");
define("BANLAN_102", "Flood");
define("BANLAN_103", "Contagem de acessos");
define("BANLAN_104", "Falha de login");
define("BANLAN_105", "Importado");
define("BANLAN_106", "Utilizador");
define("BANLAN_107", "Desconhecido");
define("BANLAN_108", "Desconhecido");
define("BANLAN_109", "Antigo");

// Explicações detalhadas para tipos de banimento - bloco reservado 110-119
define("BANLAN_110", "Provavelmente um banimento imposto antes de o e107 ser atualizado de 0.7.x");
define("BANLAN_111", "Inserido por um administrador");
define("BANLAN_112", "Tentativas de atualizar o site muito rapidamente");
define("BANLAN_113", "Tentativas de acessar o site com muita frequência a partir do mesmo endereço");
define("BANLAN_114", "Múltiplas tentativas falhadas de login do mesmo utilizador");
define("BANLAN_115", "Adicionado a partir de uma lista externa");
define("BANLAN_116", "Endereço IP banido devido a banimento de utilizador");
define("BANLAN_117", "Motivo em espera");
define("BANLAN_118", "Motivo em espera");
define("BANLAN_119", "Indica um erro de importação - banimentos anteriormente importados");

define("BANLAN_120", "Entrada na Lista Branca");
define("BANLAN_121", "Entrada na Lista Negra");
define("BANLAN_122", "Lista Negra");
define("BANLAN_123", "Adicionar à Lista Negra");
define("BANLAN_124", "Expira");   // não é ban_lan_34
define("BANLAN_125", "Usar o meu IP");
define("BANLAN_126", "IP / Email");
define("BANLAN_127", "Eliminar todos os [x] logins falhados da base de dados");

