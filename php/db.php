<?php
/* 東華3.0
  ndhuball_db 		 
*/
$web_title = "國立東華大學 球場系統";
$ndhu_title = "東華大學-球場";

$upload_set=true;//設定fckedit 是否可以上傳檔案true,false
$SchoolWebName='ndhuball_db';			//球場
session_cache_expire(28800);//session逾時設定;
session_start();
ob_start();//可以解決header有先送出東西的問題
ob_end_clean();//先ob_start 再進行一次ob_end_clean
header("Cache-Control:no-cache,must-revalidate");//強迫更新
header("P3P: CP=".$_SERVER["HTTP_HOST"]."");//解決在frame中session不能使用的問題，可填ip或是domain
header('Content-type: text/html; charset=utf-8');//指定utf8編碼 
header('Vary: Accept-Language'); 

/* 球場 Address_MAC */
$BallGroundMachineArrayName = array(   
	'B827EBCDFEF2' => '社區球場A', 
	'B827EBE400F8' => '棒、足球場B',
	'B827EB307F46' => '社區球場二1',
	'B827EBC4748E' => '體育館旁網球場1',
	'B827EB3F6053' => '綜合球場二1',
	'B827EB5B8CBA' => '社區球場B',
	'B827EB83001F' => '棒、足球場A',
	'B827EB8F928D' => '綜合球場一B1',
	'B827EBDD78DD' => '綜合球場一C1',
	'B827EB6EF962' => '綜合球場一A1'
);

/* 正規PDO連接  */
try {
    $PDOLink = new PDO('mysql:host=localhost;dbname=ndhuball_db','andy','aotech2018'); 
    $PDOLink->query("SET NAMES 'utf8'");
    $PDOLink->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// 此處放 DB做事的程式碼
}
catch(PDOException $e) { 
	print "連線失敗" . $e->getMessage();
}
 
/* mysqli 連接 config */ 
$MysqliServer = "localhost";  
$MysqliUser = "andy";   
$MysqliPass = "aotech2018"; 
$MysqliDB = "ndhuball_db";
$MysqliConn = new mysqli($MysqliServer, $MysqliUser, $MysqliPass, $MysqliDB);    
mysqli_query($MysqliConn,"SET NAMES utf8");

/* 輔助php-get function */
function get_id($sn,$db_name,$db_value)
{
	// function內的database load
    $PDOLink = new PDO('mysql:host=localhost;dbname=ndhuball_db','andy','aotech2018'); 
    $PDOLink->query("SET NAMES 'utf8'");
    
    $sql = "select * from ".$db_name." where 1 and id='".$sn."' ";
    $list_r = $PDOLink->prepare($sql); 
    $list_r->execute();
    $row = $list_r->fetch();         
	 
	return $row[$db_value];
}
function get_log_list($content)
{
	/* 使用資料庫 */
    $PDOLink = new PDO('mysql:host=localhost;dbname=ndhuball_db','andy','aotech2018');  
    $PDOLink->query("SET NAMES 'utf8'");

    /* insert log history */
    //$date = date('d.m.Y h:i:s');
    $date = date("Y-m-d H:i"); 
     
    /* error_log php function */
    error_log($content."\n", 3, "/var/tmp/my-errors.log","andy952737@gmail.com");

        /* log db save */
        try {
            $col="`content`,`data_type`,`add_date`";
            $col_data="'".$content."','1','".$date."' ";
            $ins_q="insert into log_list (".$col.") values (".$col_data.") ";
            $PDOLink->exec($ins_q); 
        }

        catch(PDOException $e){
           echo $ins_q . "<br>" . $e->getMessage();
        }

}
function chk_src()
{
	$src_url=dirname($_SERVER[HTTP_REFERER]);
	if(!instr($src_url,"happinesspetcuisine.com"))
	exit("<script>top.location.href='index.php';</script>");
}

/* Form PHP function 優化 var_list */
function form_select($Table,$Con,$Type,$Name) 
{
	include('controller/kioskStatus.php');
	$PDOLink = new PDO('mysql:host=localhost;dbname=ndhuball_db','andy','aotech2018'); 
    $PDOLink->query("SET NAMES 'utf8'");
	$sql = "select * from ".$Table." where ".$Con."='".$Type."' ";
	$sel_r= $PDOLink->Query($sql); 
	print "<select class='MachineKioskCode form-control' name='".$Name."'>";
	while($rs=$sel_r->Fetch())
	{
		$v_name=$rs[var_value2];
		$v_value=$rs[var_value2];
		print "<option value='".$v_value."'";if($Name==$v_value)print " selected "; print ">".$arrayKioskStatus[$v_name]."</option>";
	}
	print "</select> ";
}

// form class bootstrap 為主 
function form_input($type,$Name,$Value,$Class)
{
	$input = "<input type='' name='' value='' class=''>";  
	return $input;
}
/* Form PHP function 優化 End */

/* 確認後台管理是否登入 */
function chk_admin()
{
	$PDOLink = new PDO('mysql:host=localhost;dbname=ndhuball_db','andy','aotech2018'); 
	if($_SESSION[admin][id] && $_SESSION[admin][pwd])
	{
		$sql="select * from admin where id='".$_SESSION[admin][id]."' and pwd='".$_SESSION[admin][pwd]."' and status='Y' ";
		$sth = $PDOLink->prepare($sql);
		$sth->execute(array($_SESSION[admin][id],$_SESSION[admin][pwd]));
		$result = $sth->fetch(PDO::FETCH_OBJ); 
	}
	if(!$result)
	{
		header("location: session.php");
	} 
}
function admin_chk($uid,$upwd)
{
	$PDOLink = new PDO('mysql:host=localhost;dbname=ndhuball_db','barry','aotech2018'); 
	$PDOLink->query('SET NAMES "utf8"'); 
	$upwd=str_replace(" ","",$upwd);
	$uid=str_replace(" ","",$uid);
	if($upwd and $uid)
	{
		$mb_chk_q="select * from admin where id='".$uid."' and pwd=password('".$upwd."') and status='Y' ";
		$stmt = $PDOLink->prepare($mb_chk_q); 
		$stmt->execute(array($uid, $upwd));
		$result = $stmt->fetch(); 
		if($result)
		{
			$_SESSION[admin][id]=$result[id];
			$_SESSION[admin][pwd]=$result[pwd];
			$_SESSION[admin][sn]=$result[sn];
			$_SESSION[admin][cname]=$result[cname];
			$_SESSION[admin][power]=$result[data_type];
			$_SESSION[admin][data_type]=$result[data_type];
			header("Location:index.php");
		}
		else
		{
			print "<script>alert('帳號或密碼不正確請重新再試一次');</script>";
		}
		$PDOLink = NULL;
	}
}
function logout()
{
	unset($_SESSION[admin]);
	unset($_SESSION[user]);
}
/* Link databases */
// $hostname="localhost";
// $username="admin";
// $password="aotech";
// $dbname="wisdom_school_db";
// mysql_connect($hostname,$username, $password) or die ("html>script language='JavaScript'>alert('無法連線至資料庫！請稍後再重試一次。'),history.go(-1)/script>/html>");
// mysql_select_db($dbname);
//set_time_limit(30);
//ini_set("display_errors",true);
//ini_set("error_reporting",E_ALL & ~E_NOTICE);
//error_reporting(E_ALL ^ E_NOTICE);
//error_reporting(0);不輸出所有的erro
//php5.1.1 for win 要指定時區，不然可能會錯
//date_default_timezone_set('Asia/Taipei');
//$get_path=get_web();
// $db_prefix=$get_path["db_prefix"];
//$web=$get_path["web"];
//$s_path=$get_path["s_path"];
// //永豐金流設定
// $shopno=$get_path[shopno];
// $ShopNO=$shopno;
// $keyData=$get_path[keyData];
// $db_name="hs-v01";//資料庫名稱
// $fck_path=$sys_forder."/fckeditor/";
// $fck_path2=$sys_forder."/ckeditor/";   
// $today=date("Y-m-d");
// if(!$lang)$lang="zh-tw";
// $_SESSION[user][lang]=$lang;
// $reffrer=$_SERVER[HTTP_REFERER];
?>