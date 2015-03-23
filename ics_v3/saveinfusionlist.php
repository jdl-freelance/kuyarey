<?php
    include("conn.php");
    $user_session_id = '539';
       mysql_set_charset('utf8',$conn);
        mysql_select_db($db,$conn);
        if(isset($_POST["action"])){
	        if($_POST["action"] == "hasinfo"){
		        $sql = "SELECT infusionsoft,infusionsoftlist FROM wp_users where ID='".$user_session_id."'";
		        $result = mysql_query($sql);
		        $row = mysql_fetch_array($result);
		        echo $row["infusionsoft"]."~".$row["infusionsoftlist"];
		       
	        }
	        if($_POST["action"] == "update"){
		         $sql = "UPDATE wp_users SET infusionsoftlist='".$_POST['infusionsoftlist']."' where ID='".$user_session_id."' ";

		        $result = mysql_query($sql);

				echo "updated";
	        }
        }
		/*
$asksql = "SELECT * FROM wm_webinars_integration where wid='".$wid."' and type='".$action."' and dataName='".$k."'";	
		//echo  $asksql;	
		$result = mysql_query($asksql);
		$row =  mysql_fetch_array($result);
		
		// var_dump(!is_array($row));
		$dataPiece = explode("~",$v);
		if($row)
		{
		$mysql = "UPDATE wm_webinars_integration SET dataValue='".$dataPiece[0]."',dataAttr='".$dataPiece[1]."' where wid=".$wid." and type='".$action."' and dataName='".$k."'";
		echo "updated";
		
		
		}
		else
		{
		$mysql = "INSERT INTO wm_webinars_integration (wid, type, dataName, dataValue,dataAttr) VALUES (".$wid.",'".$action."','".$k."','".$dataPiece[0]."','".$dataPiece[1]."')";
		echo "insert";
		}
		
		//	 mysql_query($mysql);
		     mysql_query($mysql);
*/
		     
		     
    
?>