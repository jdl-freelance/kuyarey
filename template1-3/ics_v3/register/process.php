<?php
    include("conn.php");
    mysql_select_db($db,$conn);
     mysql_set_charset('utf8',$conn);
    if(isset($_GET['ContentName'])){
        $ContentName=$_GET['ContentName'];
        
        
        
       
        
        $sql_s = "Select * from wm_webinars_content where ContentName='$ContentName'";
		$queryResult = mysql_query($sql_s);
        $count = count($queryResult);
        if($count==1){
            $row = mysql_fetch_assoc($queryResult);
			$row2  =  mysql_fetch_row($queryResult);
            $ContentText = (string)$row['ContentText'];
            echo $ContentText;
        }
      
    }
    
       
    if(isset($_POST['ContentName'])){
        $ContentName=$_POST['ContentName'];
        $ContentText = $_POST['ContentText'];
        $sql_s = "Update wm_webinars_content SET `ContentText`='$ContentText' where `ContentName`='$ContentName'";
        mysql_query($sql_s);
        echo "Saved";
    }
    
    if(isset($_POST['retrieve']))
    {
	    $mysql = "SELECT * FROM wm_webinars_integration where wid='539' ";
	    $result = mysql_query($mysql);	
	    $mydata = "";
		while($row = mysql_fetch_assoc($result)) 
	    {
	    	if($row["dataName"] != "mcFormInfusionsoft" && $row["dataName"] != "contentIfr")
	    	{	    	
				$mydata .= $row["dataName"]."||".$row["dataValue"]."||".$row["dataAttr"]."~";
	    	}
	    }
	    echo $mydata;
    }
    
?>