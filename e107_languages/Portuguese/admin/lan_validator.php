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
 * Mensagens de erro por código de erro
 */
define("LAN_VALIDATE_0",   "Erro desconhecido");
define("LAN_VALIDATE_101", "Valor em falta");
define("LAN_VALIDATE_102", "Tipo de valor inesperado");
define("LAN_VALIDATE_103", "Caracteres inválidos encontrados");
define("LAN_VALIDATE_104", "Endereço de e-mail inválido");
define("LAN_VALIDATE_105", "Campos não coincidem");
define("LAN_VALIDATE_131", "String demasiado curta");
define("LAN_VALIDATE_132", "String demasiado longa");
define("LAN_VALIDATE_133", "Número demasiado baixo");
define("LAN_VALIDATE_134", "Número demasiado alto");
define("LAN_VALIDATE_135", "Contagem do array demasiado baixa");
define("LAN_VALIDATE_136", "Contagem do array demasiado alta");
define("LAN_VALIDATE_151", "Número do tipo inteiro esperado");
define("LAN_VALIDATE_152", "Número do tipo flutuante esperado");
define("LAN_VALIDATE_153", "Tipo de instância esperado");
define("LAN_VALIDATE_154", "Tipo de array esperado");
define("LAN_VALIDATE_191", "Valor em branco");
define("LAN_VALIDATE_201", "Ficheiro não existe");
define("LAN_VALIDATE_202", "Ficheiro não gravável");
define("LAN_VALIDATE_203", "Ficheiro excede o tamanho máximo permitido");
define("LAN_VALIDATE_204", "O tamanho do ficheiro é inferior ao tamanho mínimo permitido");
/*
 * INSTRUÇÕES DE TRADUÇÃO:
 * Não traduzir %1$s, %2$s, %3$s, etc.
 * 
 * Estes são substituídos pelo manipulador de validação:
 * %1$s - nome do campo
 * %2$d - código do erro de validação (número)
 * %3$s - mensagem de erro de validação (string)
 */

// define("LAN_VALIDATE_FAILMSG", "<strong>&quot;%1$s&quot;</strong> erro de validação: [#%2$d] %3$s.");

 //FIXME - usar isto em vez disso: 
define("LAN_VALIDATE_FAILMSG", "[x] erro de validação: [y] [z].");
