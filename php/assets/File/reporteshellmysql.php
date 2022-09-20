<?php


error_reporting( E_ALL );
ini_set('display_errors', 1);

include('Net/SSH2.php');
// include('SSH2.php');
// include('var/www/html/Pool/php/Net/SSH2.php');
include('File/ANSI.php');
require "functions.php";
require "database.php";
require "class/host.php";

define('NET_SSH2_LOGGING', NET_SSH2_LOG_COMPLEX);

/*
$salida = shell_exec('top');
echo "<pre>Resultado del comando 'TOP'</pre>";
echo "<pre>$salida</pre>";
*/
$salida = shell_exec('df -h');
echo "<b><pre>Resultado del comando para ver uso de discos</pre></b>";
echo "<pre>$salida</pre>";

			//$connection = ssh2_connect('10.31.7.252', 22);
			$ssh = new Net_SSH2('10.31.7.252', '22'); 		
				if (!$ssh->login('administrador', '...') ) {
			// $ssh = new Net_SSH2("10.100.55.90", 2222);
			// if (!$ssh->login("noc", 'Noc.0ptical1p') ) {
				echo 'falla de conexion...';		
			} else {			
			$ssh->setTimeout(1);
				//$ssh->write("clear\n");
				$ssh->write("top\n");
				$result=$ssh->read();
				$result=str_ireplace("[?1h=[H[J","",	str_ireplace("[K","",str_ireplace("[7m","",str_ireplace("[1m","",str_ireplace("[m","",$result)))));
				echo "<pre>Resultado del comando 'TOP'</pre>";
				echo "<pre>$result</pre>";	
				
				//ssh2_exec($connection, 'exit;');
				
				//ssh2_exec('logout')
			}

			
			/*
			$ssh = new Net_SSH2('10.31.7.252', '22'); 		
				if (!$ssh->login('administrador', '...') ) {
			// $ssh = new Net_SSH2("10.100.55.90", 2222);
			// if (!$ssh->login("noc", 'Noc.0ptical1p') ) {
				echo 'falla de conexion...';		
			} else {			
			$ssh->setTimeout(1);
				//$ssh->write("clear\n");
				$ssh->write("mysql --user=root --password=...\n");
				//$ssh->write("\c\n");
				$ssh->write('SELECT table_schema "Data Base Name", sum( data_length + index_length ) / 1024 /1024 "Data BaseSize in MB",sum( data_free )/ 1024 / 1024 "Free Space in MB" FROM information_schema.TABLES GROUP BY table_schema\n');
				$result=$ssh->read();
				
				echo "<b><pre>Resultado del comando para ver uso de bases de datos</pre></b>";
				echo "<pre>$result</pre>";




				$sql_bd='SELECT table_schema "Data Base Name", sum( data_length + index_length ) / 1024 /1024 "Data BaseSize in MB",sum( data_free )/ 1024 / 1024 "Free Space in MB" FROM information_schema.TABLES GROUP BY table_schema';
								
				$sql_table='SELECT table_schema, table_name Tabla,format((data_length+index_length)/(1024*1024)) Tamaño_MB FROM information_schema.tables where (data_length+index_length) is not null and table_schema not in ("information_schema","mysql","performance_schema","phpmyadmin","sys") order by table_schema';
			
			*/
			
			$sql=dbSelect("select * from monitor2.sensores ");
			
			print_r($sql);
/*
$salida = shell_exec('mysql --user=root --password=... \ SELECT table_schema "Data Base Name", sum( data_length + index_length ) / 1024 /1024 "Data BaseSize in MB",sum( data_free )/ 1024 / 1024 "Free Space in MB" FROM information_schema.TABLES GROUP BY table_schema ;');
echo "<b><pre>Resultado del comando para ver uso de bases de datos</pre></b>";
echo "<pre>$salida</pre>";

$salida = shell_exec('SELECT table_schema, table_name Tabla,format((data_length+index_length)/(1024*1024)) Tamaño_MB FROM information_schema.tables where (data_length+index_length) is not null and table_schema not in ("information_schema","mysql","performance_schema","phpmyadmin","sys") order by table_schema');
echo "<b><pre>Resultado del comando para ver uso de tablas de mysql</pre></b>";
echo "<pre>$salida</pre>";
*/
//mysql --user=root --password=...

