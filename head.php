<?php
$PDOhost = "localhost";
$PDOdbname = "ndhu_ball";
$PDOuser = "root";
$PDOpassword = "";


/*PDO 連接寫法*/ 
try{
    $PDO = new PDO("mysql:host=localhost;dbname=ndhu_ball",$PDOuser,$PDOpassword);
    $PDO->query("SET NAMES 'utf8'");
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $e){
    print "連接失敗" . $e->getMessage();
}





session_start();
?>