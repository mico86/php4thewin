# php4thewin

This repo is about Smanazzo Violento e Casuale in PHP

# Here some useful information about local configuration

download:
- apache httpd 
- php

unzip under C and add to Path

- C:\php;C:\Apache24;C:\Apache24\bin;

run apache httpd as service:

C:\Apache24\ApacheMonitor.exe

in order to link the php installation modify the file:

C:\Apache24\conf\httpd.conf

adding that text:

#######################
#Loading php installed#
#######################
LoadModule php5_module "C:/php/php5apache2_4.dll"
AddHandler application/x-httpd-php .php
# configure the path to php.ini
PHPIniDir "C:/php"

modify php.ini to enable mysql:

; Directory in which the loadable extensions (modules) reside.
; http://php.net/extension-dir
; extension_dir = "./"
; On windows:
extension_dir = "C:\php\ext" <----------------------here
extension=php_mysql.dll <----------------------here
extension=php_mysqli.dll <----------------------here 
