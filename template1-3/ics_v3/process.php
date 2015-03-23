<?php
    include("conn.php");
    if(isset($_GET['ContentName'])){
        $ContentName=$_GET['ContentName'];
        mysql_set_charset('utf8',$conn);
        mysql_select_db($db,$conn);
        $sql_s = "Select * from wm_webinars_content where ContentName='$ContentName' AND Visibility=1 AND TemplateID=1";
		$queryResult = mysql_query($sql_s);
        $count = count($queryResult);
        if($count==1){
            $row = mysql_fetch_assoc($queryResult);
			$row2  =  mysql_fetch_row($queryResult);
            $ContentText = (string)$row['ContentText'];
            echo $ContentText;
        }
    }
    


	    if(isset($_POST["action"]))
	    {
		    extract($_POST);
$wid = $_POST["wid"];
$action = $_POST["action"];
 mysql_select_db($db,$conn);
		    foreach($_POST as $k=>$v)
		    {
				if($k != "wid" AND $k != "action"){		
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
				}
				
				
		    }
	    }
	

    
    if(isset($_POST['ContentName'])){
        $ContentName=$_POST['ContentName'];
        $ContentText = $_POST['ContentText'];
        mysql_select_db($db,$conn);
        $sql_s = "Update wm_webinars_content SET `ContentText`='$ContentText' where `ContentName`='$ContentName' AND TemplateID=1";
        mysql_query($sql_s);
        echo "Saved";
    }
    
    if(isset($_POST['DeleteContent'])){
        $idName = $_POST['DeleteContent'];
        $ContentName= substr($idName,1,  strlen($idName));
        mysql_select_db($db,$conn);
        $sql_u = "Update `wm_webinars_content` SET `Visibility`='0' where `ContentName`='$ContentName'";
        mysql_query($sql_u);
        echo "$sql_u";
    }
    
    
?>