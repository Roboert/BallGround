<?php 
include_once('config/db.php');

if(!isset($_POST[id]) || !isset($_POST[pwd])){
	//若沒有從Login submit或帳密為空白，就導回Login.php  
	header("location: login.php");

} else { 

	$admin_id = $_POST[id];
	$admin_pwd = $_POST[pwd];

    $sql = "select * from admin where id='".$admin_id."' and pwd=password('".$admin_pwd."') and status='Y' ";
	$sth = $PDOLink->prepare($sql);
	$sth->execute(array($Id, $pwd));
	$result = $sth->fetch(); 

		if($result){  
			
			 $_SESSION[admin_user][sn]=$result[sn];
			 $_SESSION[admin_user][id]=$result[id];
			 $_SESSION[admin_user][cname]=$result[cname]; 
			 $_SESSION[admin_user][pwd]=$result[pwd];
			 $_SESSION[admin_user][email]=$result[email];
			 $_SESSION[admin_user][data_type]=$result[data_type];

			 /* error_log php function */
			 $content=$result[id]."；管理員登入";
			 get_log_list($content);	

			 header("location: home.php"); 

		} else {  

		 	//echo "<h1 style='color:red;'>帳號密碼錯誤，請重新登入。</h1>";
		 	//echo "<p><a href='admin_login.php'>回到登入畫面</a></p>";
		 	header("location: login.php?error=1"); 
		
		}
	
	$PDOLink = NULL;
}
?>