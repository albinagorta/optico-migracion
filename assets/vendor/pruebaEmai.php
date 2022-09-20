<?php 
// require_once './vendor/autoload.php';
require_once 'autoload.php';


date_default_timezone_set('America/Lima');

$servername = "10.31.7.207";
$username = 'usrmon';
$password = '$47Mv2qa0_';
$basedatos = "monitor2";
echo "\r\n";
// Create connection
$conn = new mysqli($servername, $username, $password);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "\r\nConnected successfully\r\n";
echo "\n";
mysqli_select_db ($conn, $basedatos);


$sql ="
SELECT 
DISTINCT
sh.*,
h.cust_id,
c.cust_name,
u.user_email,
s.class_id,
h.hostname,
h.id_servicio,
h.id_tiposerv
FROM 
template_sensor_host sh
JOIN host h ON h.id=sh.host_id
JOIN users u ON u.cust_id=h.cust_id
JOIN sensores s ON s.id_sensor=sh.id_sensor 
JOIN customers c  ON c.cust_id=h.cust_id
where  sh.in_enviamail='1'
AND h.cust_id='0bb4754749789333cb3b1253bc38e746'
";

// AND h.hostname='10.40.12.226'

// $sql ="
// SELECT 
// sh.*,
// h.cust_id,
// c.cust_name,
// u.user_email,
// s.class_id,
// h.hostname,
// h.id_servicio,
// h.id_tiposerv
// FROM 
// template_sensor_host sh
// JOIN host h ON h.id=sh.host_id
// JOIN users u ON u.cust_id=h.cust_id
// JOIN sensores s ON s.id_sensor=sh.id_sensor 
// JOIN customers c  ON c.cust_id=h.cust_id
// limit 1
// ";

$result = $conn->query($sql);



$newRESULT = [];
if ($result->num_rows > 0) {     
    $n = mysqli_num_rows($result);
    while ($row = $result->fetch_assoc()) { 




        $nombreCliente = $row['cust_name'];
        // $correoCliente = $row['user_email'];
        $correoCliente = 'jacuna@optical.pe';
        $tipoSensor = $row['class_id'];
        $ip = $row['hostname'];
        $id_servicio = $row['id_servicio'];
        $id_tiposerv = $row['id_tiposerv'];
        $umbrall_por = $row['umbrall_por'];
        $newRESULT[] = $row;
   

        $msgtext = "";
        if ($tipoSensor == 'ping') {
            $msgtext = "El equipo no responde ".$$ip;
        }
        if  ($tipoSensor == "oct-in" || $tipoSensor == "oct-out") {        
            $msgtext = "El servicio está en el %".$umbrall_por." de su consumo.  IP: ".$ip;
        }
         
        



   
// exit;





    }
}

// print_r($newRESULT);
// echo "\n";
// exit;
echo "total correos ".count($newRESULT);
echo  "\n";

if (!empty($newRESULT)) {
    foreach ($newRESULT as $key => $row) {
    

        $nombreCliente = $row['cust_name'];
        // $correoCliente = $row['user_email'];
        $correoCliente = 'joelbroncano90@gmail.com';        
        $tipoSensor = $row['class_id'];
        $ip = $row['hostname'];
        $id_servicio = $row['id_servicio'];
        $id_tiposerv = $row['id_tiposerv'];
        $umbrall_por = $row['umbrall_por'];
        $newRESULT[] = $row;
   

        $msgtext = "";
        if ($tipoSensor == 'ping') {
            $msgtext = "El equipo no responde ".$$ip;
        }
        if  ($tipoSensor == "oct-in" || $tipoSensor == "oct-out") {        
            $msgtext = "El servicio está en el %".$umbrall_por." de su consumo.  IP: ".$ip;
        }

         try {
            

            // $transport = (new Swift_SmtpTransport('correo.opticloud.pe', 587,'tls'))
            //     ->setUsername('monitor@opticloud.pe')
            //     ->setPassword('P@$$w0rd.123!');

// Servidor: 10.7.7.200 (correo.opticalsc.pe)

// Cuenta: monitor@optical-ti.pe

// Contraseña: P@$$w0rd.123!

// Puerto de salida: 587, 465


            // $transport = (new Swift_SmtpTransport('correo.opticalsc.pe', 587,'tls'))
            // $transport = (new Swift_SmtpTransport('correo.opticalsc.pe', 587,'tls'))
            //     ->setUsername('monitor@optical-ti.pe')
            //     ->setPassword('P@$$w0rd.123!');

// Servidor: 190.102.132.106

// Usuario: monitor@optical.com.pe

// Contraseña: P@$$w0rd.123!

            $transport = (new Swift_SmtpTransport('190.102.132.106', 25))
            ->setUsername('monitor@optical.com.pe')
            ->setPassword('P@$$w0rd.123!');
      


            // Create the Mailer using your created Transport
            $mailer = new Swift_Mailer($transport);
         
            // Create a message
            $message = new Swift_Message();
         
            // Set a "subject"
            $message->setSubject('X2Alerta Sensor. '.$id_servicio." ".$tipoSensor);
         
            // Set the "From address"
            $message->setFrom(['monitor@optical.com.pe' => 'Monitor']);
         
            // Set the "To address" [Use setTo method for multiple recipients, argument should be array]
            $message->addTo($correoCliente,$nombreCliente);            
         
            // Add "CC" address [Use setCc method for multiple recipients, argument should be array]
            $message->addCc('jacuna@opticaln.onmicrosoft.com', 'Admin');
            
         
            // Add "BCC" address [Use setBcc method for multiple recipients, argument should be array]
            // $message->addBcc('jacuna@optical.pe', 'recipient name');
         
           
            $message->setBody($msgtext."\n\nGracias,\nAdministración");
         
         
            // Send the message
            $result = $mailer->send($message);
        } catch (Exception $e) {
          echo $e->getMessage();
        }

        // sleep(1);

    }    
}







?>
