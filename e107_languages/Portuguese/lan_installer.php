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
define("LANINS_001", "Instalação do e107");

define("LANINS_002", "Passo ");
define("LANINS_003", "1");
define("LANINS_004", "Seleção de Idioma");
define("LANINS_005", "Por favor, escolha o idioma a ser utilizado durante a instalação");
// define("LANINS_006", "Definir Idioma");
define("LANINS_007", "4");
define("LANINS_008", "Verificação das versões do PHP e MySQL / Verificação das permissões de ficheiros");
define("LANINS_009", "Reverificar permissões de ficheiros");
define("LANINS_010", "Ficheiro não gravável: ");
define("LANINS_010a", "Pasta não gravável: ");
// define("LANINS_011", "Erro"); novo > LAN_ERROR
define("LANINS_012", "Parece que as funções MySQL não estão disponíveis. Isso provavelmente significa que a extensão MySQL do PHP não está instalada ou a tua instalação do PHP não foi compilada com suporte para MySQL."); // ajuda para 012
define("LANINS_013", "Não foi possível determinar o número da versão do MySQL. Este é um erro não fatal, então por favor, continue a instalação, mas tenha em mente que o e107 requer MySQL >= 3.23 para funcionar corretamente.");
define("LANINS_014", "Permissões de Ficheiros");
define("LANINS_015", "Versão do PHP");
// define("LANINS_016", "MySQL");
define("LANINS_017", "PASS");
define("LANINS_018", "Certifique-se de que todos os ficheiros listados existem e são graváveis pelo servidor. Normalmente, isso envolve definir permissões 777, mas os ambientes variam – entre em contacto com o seu host se tiver algum problema.");
define("LANINS_019", "A versão do PHP instalada no seu servidor não é capaz de executar o e107. O e107 requer uma versão do PHP de pelo menos ".MIN_PHP_VERSION." para funcionar corretamente. Atualize a sua versão do PHP ou entre em contacto com o seu host para atualizar.");
// define("LANINS_020", "Continuar a Instalação"); //LAN_CONTINUE
define("LANINS_021", "2");
define("LANINS_022", "Detalhes do Servidor MySQL");
define("LANINS_023", "Por favor, insira as suas configurações do MySQL aqui.

Se tiver permissões de root, pode criar uma nova base de dados marcando a caixa, caso contrário, deve criar uma base de dados ou utilizar uma existente.

Se tiver apenas uma base de dados, use um prefixo para que outros scripts possam partilhar a mesma base de dados.
Se não souber os seus detalhes do MySQL, entre em contacto com o seu host.");
define("LANINS_024", "Servidor MySQL:");
define("LANINS_025", "Utilizador MySQL:");
define("LANINS_026", "Palavra-passe MySQL:");
define("LANINS_027", "Base de Dados MySQL:");
define("LANINS_028", "Criar Base de Dados?");
define("LANINS_029", "Prefixo das Tabelas:");
define("LANINS_030", "O servidor MySQL que deseja que o e107 utilize. Também pode incluir um número de porta, ex: 'hostname:porta' ou um caminho para um socket local ex: \":/caminho/para/socket\" para o localhost.");
define("LANINS_031", "O nome de utilizador que deseja que o e107 utilize para se ligar ao seu servidor MySQL");
define("LANINS_032", "A palavra-passe para o utilizador que acabou de inserir. Não pode conter aspas simples ou duplas.");
define("LANINS_033", "A base de dados MySQL onde deseja que o e107 seja instalado, por vezes referida como esquema. Deve começar com uma letra. Se o utilizador tiver permissões para criar a base de dados, pode optar por criá-la automaticamente, caso não exista.");
define("LANINS_034", "O prefixo que deseja que o e107 utilize ao criar as tabelas do e107. Útil para múltiplas instalações do e107 numa mesma base de dados.");
// define("LANINS_035", "Continuar"); // LAN_CONTINUE
define("LANINS_036", "3");
define("LANINS_037", "Verificação da Conexão MySQL");
define("LANINS_038", " e Criação da Base de Dados");
define("LANINS_039", "Por favor, certifique-se de que preenche todos os campos, especialmente o Servidor MySQL, Utilizador MySQL e Base de Dados MySQL (estes são sempre requeridos pelo Servidor MySQL)");
define("LANINS_040", "Erros");
define("LANINS_041", "O e107 não conseguiu estabelecer uma conexão com o servidor MySQL utilizando as informações que inseriu. Por favor, volte à página anterior e assegure-se de que as informações estão corretas.");
define("LANINS_042", "Conexão com o servidor MySQL estabelecida e verificada.");
define("LANINS_043", "Não foi possível criar a base de dados, por favor, verifique se tem as permissões corretas para criar bases de dados no seu servidor.");
define("LANINS_044", "Base de dados criada com sucesso.");
define("LANINS_045", "Por favor, clique no botão para continuar para a próxima etapa.");
define("LANINS_046", "5");
define("LANINS_047", "Detalhes do Administrador");
define("LANINS_048", "Extensão EXIF");
define("LANINS_049", "As duas palavras-passe que inseriu não são iguais. Por favor, volte e tente novamente.");
define("LANINS_050", "Extensão XML");
define("LANINS_051", "Instalada");
define("LANINS_052", "Não Instalada");
// define("LANINS_053", "O e107 v2.x requer que a Extensão PHP XML esteja instalada. Por favor, entre em contacto com o seu host ou leia as informações em [x] antes de continuar");
// define("LANINS_054", "O e107 v2.x requer que a Extensão PHP EXIF esteja instalada. Por favor, entre em contacto com o seu host ou leia as informações em [x] antes de continuar");
define("LANINS_055", "Confirmação da Instalação");
define("LANINS_056", "6");
define("LANINS_057", "O e107 agora tem todas as informações necessárias para completar a instalação.

Por favor, clique no botão para criar as tabelas da base de dados e guardar todas as suas configurações.

");
define("LANINS_058", "7");
define("LANINS_060", "Não foi possível ler o ficheiro de dados SQL

Por favor, verifique se o ficheiro [b]core_sql.php[/b] existe na pasta [b]/e107_core/sql[/b].");
define("LANINS_061", "O e107 não conseguiu criar todas as tabelas necessárias da base de dados.
Por favor, limpe a base de dados e corrija os problemas antes de tentar novamente.");


// define("LANINS_063", "Bem-vindo ao e107");

define("LANINS_069", "O e107 foi instalado com sucesso!

Por questões de segurança, deverá agora definir as permissões do ficheiro [b]e107_config.php[/b] de volta para 644.

Além disso, por favor, apague o install.php do seu servidor depois de clicar no botão abaixo.");
define("LANINS_070", "O e107 não conseguiu guardar o ficheiro de configuração principal no seu servidor.

Por favor, verifique se o ficheiro [b]e107_config.php[/b] tem as permissões corretas");
define("LANINS_071", "Instalação Completa");

define("LANINS_072", "Nome de Utilizador do Administrador");
define("LANINS_073", "Este é o nome que irá utilizar para fazer login no site. Se desejar utilizar este nome também como nome de exibição");
define("LANINS_074", "Nome de Exibição do Administrador");
// define("LANINS_075", "Este é o nome que deseja que os seus utilizadores vejam exibido no seu perfil, fóruns e outras áreas. Se desejar usar o mesmo nome que o seu nome de utilizador, deixe isto em branco.");
define("LANINS_076", "Palavra-passe do Administrador");
define("LANINS_077", "Por favor, escreva a palavra-passe do administrador que deseja utilizar aqui");
define("LANINS_078", "Confirmação da Palavra-passe do Administrador");
define("LANINS_079", "Por favor, escreva novamente a palavra-passe do administrador para confirmação");
define("LANINS_080", "Email do Administrador");
define("LANINS_081", "Insira o seu endereço de email");

// define("LANINS_082", "user@seudominio.com");

// Relatório de erros de criação de tabelas melhorado
define("LANINS_083", "Erro Reportado pelo MySQL:");
define("LANINS_084", "O instalador não conseguiu estabelecer uma conexão com a base de dados");
define("LANINS_085", "O instalador não conseguiu selecionar a base de dados:");

define("LANINS_086", "Nome de Utilizador do Administrador, Palavra-passe do Administrador e Email do Administrador são campos obrigatórios. Por favor, volte à página anterior e assegure-se de que as informações foram inseridas corretamente.");

// define("LANINS_087", "Diversos");
// define("LANINS_088", "Início");
// define("LANINS_089", "Downloads");
// define("LANINS_090", "Membros");
// define("LANINS_091", "Submeter Notícias");
// define("LANINS_092", "Contactar");
// define("LANINS_093", "Concede acesso a itens de menu privados");
// define("LANINS_094", "Exemplo de classe de fórum privado");
// define("LANINS_095", "Verificação de Integridade");

// define("LANINS_096", 'Últimos Comentários');
// define("LANINS_097", '[mais ...]');
// define("LANINS_098", 'Artigos');
// define("LANINS_099", 'Página Inicial de Artigos ...');
// define("LANINS_100", 'Últimos Posts do Fórum');
// define("LANINS_101", 'Atualizar Configurações do Menu');
// define("LANINS_102", 'Data / Hora');
// define("LANINS_103", 'Revisões');
// define("LANINS_104", 'Página Inicial de Revisões ...');

define("LANINS_105", "Um nome de base de dados ou prefixo começando com dígitos seguidos de 'e' ou 'E' não é aceitável");
define("LANINS_106", "AVISO - O e107 não consegue escrever nas pastas e/ou ficheiros listados. Embora isso não impeça a instalação do e107, significa que certas funcionalidades não estarão disponíveis.
                Será necessário alterar as permissões de ficheiros para usar estas funcionalidades");

define("LANINS_107", "Nome do Site");
define("LANINS_108", "Meu Site");
define("LANINS_109", "Tema do Site");
// define("LANINS_110", "");
define("LANINS_111", "Incluir Conteúdo/Configuração");
define("LANINS_112", "Reproduzir rapidamente o visual da pré-visualização ou demonstração do tema. (Se disponível)");
define("LANINS_113", "Por favor, insira o nome do site");
define("LANINS_114", "Por favor, selecione um tema");
define("LANINS_115", "Nome do Tema");
define("LANINS_116", "Tipo de Tema");
define("LANINS_117", "Preferências do Site");
define("LANINS_118", "Instalar Plugins");
define("LANINS_119", "Instalar todos os plugins que o tema pode exigir.");
define("LANINS_120", "8");
define("LANINS_121", "e107_config.php não é um ficheiro vazio");
define("LANINS_122", "Pode ter uma instalação existente");
define("LANINS_123", "Opcional: O seu nome público ou pseudónimo. Deixe em branco para usar o nome de utilizador");
define("LANINS_124", "Por favor, escolha uma palavra-passe de pelo menos 8 caracteres");
define("LANINS_125", "O e107 foi instalado com sucesso!");
define("LANINS_126", "Por questões de segurança, deverá agora definir as permissões do ficheiro e107_config.php de volta para 644.");
define("LANINS_127", "A base de dados [x] já existe. Substituí-la? (todos os dados existentes serão perdidos)");
define("LANINS_128", "Substituir");
define("LANINS_129", "Base de dados não encontrada.");

define("LANINS_134", "Instalação");
define("LANINS_135", "de");   //uso único do instalador como em .1 de 8, não substituindo por LAN_SEARCH_12
define("LANINS_136", "Base de dados existente eliminada");
define("LANINS_137", "Base de dados existente encontrada");
// define("LANINS_138", "Versão");

define("LANINS_141", "Por favor, preenche o formulário abaixo com os teus dados MySQL. Se não souberes estas informações, contacta o teu provedor de alojamento. Podes passar o rato por cima de cada campo para obter informações adicionais.");
define("LANINS_142", "IMPORTANTE: Renomeia o arquivo e107.htaccess para .htaccess");
define("LANINS_144", "IMPORTANTE: Copia e cola o conteúdo do [b]e107.htaccess[/b] no teu arquivo [b].htaccess[/b]. Certifica-te de não sobrescrever quaisquer dados existentes que possam já lá estar.");
define("LANINS_145", "e107 v2.x requer o PHP [x] para ser instalado. Contacta o teu provedor de alojamento ou lê a informação em [y] antes de continuar.");

define("LANINS_146", "Aparência da área de administração");
define("LANINS_147", "Administração");
