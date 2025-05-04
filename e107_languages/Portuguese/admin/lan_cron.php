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
if (!defined("PAGE_NAME")) { define("PAGE_NAME", "Agendar Tarefas"); }

// Menu
define("LAN_CRON_M_02", "Atualizar");

// Cabeçalho da tabela

define("LAN_CRON_2", "Função");
define("LAN_CRON_3", "Aba");
define("LAN_CRON_4", "Última execução");

// Cronos padrão
define("LAN_CRON_01_1", "Email de Teste");
define("LAN_CRON_01_2", "Enviar um email de teste para [eml]."); // [eml] é substituído automaticamente pelo endereço de email do administrador principal.
define("LAN_CRON_01_3", "Recomendado para testar o sistema de agendamento.");

define("LAN_CRON_02_1", "Fila de Email");
define("LAN_CRON_02_2", "Processar fila de emails.");

define("LAN_CRON_03_1", "Verificação de E-mails com Erro");
define("LAN_CRON_03_2", "Verificar e-mails com erro.");

define("LAN_CRON_04_1", "Verificação de Retrigger de Banimento");
define("LAN_CRON_04_2", "Processar retriggers de banimento.");
define("LAN_CRON_04_3", "Necessário apenas se o retrigger de banimento estiver ativado.");

define("LAN_CRON_05_1", "Backup da Base de Dados");
define("LAN_CRON_05_2", "Fazer backup da base de dados do sistema para");

define('LAN_CRON_06_1', "Processar Trigger de Banimento");

// Mensagens de erro e informações
define("LAN_CRON_6", "Não foi possível importar preferências");
define("LAN_CRON_7", "Não foi possível importar configurações de tempo");
define("LAN_CRON_8", "Configurações de tempo importadas para");

define("LAN_CRON_9", "[x] minutos e [y] segundos atrás."); // [x] e [y] são substituídos automaticamente.
define("LAN_CRON_10", "[y] segundos atrás.");

define("LAN_CRON_11", "Cronos Ativos");
define("LAN_CRON_12", "Última atualização do cron");
define("LAN_CRON_13", "Certifique-se de que cron.php é executável.");
define("LAN_CRON_14", "Altere as permissões de cron.php para 755.");

define("LAN_CRON_15", "Use o seguinte comando Cron");
define("LAN_CRON_16", "Usando o painel de controle do seu servidor (ex. cPanel, DirectAdmin, Plesk, etc.), crie um crontab para executar este comando no seu servidor a cada minuto.");

// Deixe algum espaço para adições/alterações

// Informações sobre o cron de verificação de atualização do core
define("LAN_CRON_20_1", "Verificar atualização do e107");
define("LAN_CRON_20_2", "Verificar atualizações do core no e107.org"); // [eml] é substituído automaticamente pelo endereço de email do administrador principal.
define("LAN_CRON_20_3", "Recomendado para manter o sistema atualizado.");
define("LAN_CRON_20_4", "Atualizar este repositório Git");
define("LAN_CRON_20_5", "Atualizar esta instalação do e107 com os arquivos mais recentes do github.");
define("LAN_CRON_20_6", "Recomendado apenas para desenvolvedores.");
// define("LAN_CRON_20_7", "Aviso!");//LAN_WARNING
define("LAN_CRON_20_8", "Pode causar instabilidade no site!");

define("LAN_CRON_30", "A Cada Minuto");
define("LAN_CRON_31", "A Cada Dois Minutos");
define("LAN_CRON_32", "A Cada 5 Minutos");
define("LAN_CRON_33", "A Cada 10 Minutos");
define("LAN_CRON_34", "A Cada 15 Minutos");
define("LAN_CRON_35", "A Cada 30 Minutos");

define("LAN_CRON_36", "A Cada Hora");
define("LAN_CRON_37", "A Cada Duas Horas");
define("LAN_CRON_38", "A Cada 3 Horas");
define("LAN_CRON_39", "A Cada 6 Horas");

define("LAN_CRON_40", "A Cada Dia");
define("LAN_CRON_41", "A Cada Mês");
define("LAN_CRON_42", "A Cada Dia Útil");

define("LAN_CRON_50", "Minuto(s):");
define("LAN_CRON_51", "Hora(s):");
define("LAN_CRON_52", "Dia(s):");
define("LAN_CRON_53", "Mês(es):");
define("LAN_CRON_54", "Dia(s) da Semana:");
define("LAN_CRON_55", "Falha no Backup da Base de Dados");
define("LAN_CRON_56", "Backup da Base de Dados Completo");

define("LAN_CRON_60", "Ir para o cPanel");
define("LAN_CRON_61", "Gerar novo token cron");
define("LAN_CRON_62", "Executando função de configuração [b][x][/b]");
define("LAN_CRON_63", "Função de configuração [b][x][/b] NÃO encontrada.");
define("LAN_CRON_64", "Um administrador pode automatizar tarefas usando as Tarefas Agendadas do e107. [br] Na aba Gerenciar, você pode editar, excluir e executar tarefas. [br] Ao editar uma tarefa, você pode definir os minutos, horas, dias, meses ou dias da semana em que a tarefa deve ser executada. Use * para executar a cada período. Use a propriedade Ativo para ativar a tarefa. [br] Nota: É aconselhável não excluir tarefas padrão. [br]");

define("LAN_CRON_BACKUP", "Backup");
define("LAN_CRON_LOGGING", "Registros");
define("LAN_CRON_RUNNING", "Em Execução");

define("LAN_CRON_65", "Atualizar repositório de tema Git");
define("LAN_CRON_66", "Nenhum repositório git encontrado");
define("LAN_CRON_67", "Nenhum repositório git encontrado na pasta do tema");
