@echo off
REM PHP_CodeSniffer tokenises PHP code and detects violations of a
REM defined set of coding standards.
REM 
REM PHP version 5
REM 
REM @category  PHP
REM @package   PHP_CodeSniffer
REM @author    Greg Sherwood <gsherwood@squiz.net>
REM @author    Marc McIntyre <mmcintyre@squiz.net>
REM @copyright 2006 Squiz Pty Ltd (ABN 77 084 670 600)
REM @license   http://matrix.squiz.net/developer/tools/php_cs/licence BSD Licence
REM @version   CVS: $Id: phpcs.bat,v 1.3 2007-11-04 22:02:16 squiz Exp $
REM @link      http://pear.php.net/package/PHP_CodeSniffer

REM "C:\Documents\xampp\php\php.exe" -d auto_append_file="C:\Documents\xampp\htdocs\" -d auto_prepend_file="" -d include_path="C:\Documents\xampp\php\" "C:\DOCUME~2\xampp\htdocs\PHP-CO~1\scripts\phpcs.exe" %*
"C:\Documents\xampp\php\php.exe" -d auto_append_file="C:\Documents\xampp\htdocs\" -d auto_prepend_file="" "C:\Documents\xampp\htdocs\php-codesniffer\scripts\phpcs" %*
