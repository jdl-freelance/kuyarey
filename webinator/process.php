<?php
    include("conn.php");
    if(isset($_GET['ContentName'])){
        $ContentName=$_GET['ContentName'];
        mysql_set_charset('utf8',$conn);
        mysql_select_db($db,$conn);
        $sql_s = "Select * from wm_webinars_content where ContentName='$ContentName' AND Visibility=1 AND TemplateID=2";
        $queryResult = mysql_query($sql_s);
        $count = count($queryResult);
        if($count==1){
            $row = mysql_fetch_assoc($queryResult);
            $ContentText = (string)$row['ContentText'];
            echo "$ContentText";
        }
    }
    
    if(isset($_POST['ContentName'])){
        $ContentName=$_POST['ContentName'];
        $ContentText = $_POST['ContentText'];
        mysql_select_db($db,$conn);
        $sql_s = "Update wm_webinars_content SET `ContentText`='$ContentText' where `ContentName`='$ContentName'";
        mysql_query($sql_s);

    }
    
    if(isset($_POST['SaveList'])){
        mysql_select_db($db,$conn);
        $arrID = $_POST['ID'];
        $arrData = $_POST['Data'];
        //$arrText = $_POST['Text'];
        //print_r($arrData);echo "ArrID:".count($arrID);
        for($i=0;$i<count($arrID);$i++){
            $ListID = $arrID[$i];
            $sql_s = "SELECT COUNT(`ListID`) as ListID FROM `wm_webinars_lists` WHERE `ListID`='$ListID' AND TemplateID=2";
            $query = mysql_query($sql_s);
            $row = mysql_fetch_assoc($query);
            $count = $row['ListID'];
            //echo "Count:".$count."ListID:".$ListID;
            if($count==1){
                $Text = addslashes($arrData[$i][0]);
                $Icon = $arrData[$i][1];
                
                if($Icon==""){
                    $sql_u = "UPDATE wm_webinars_lists SET `ListText`='$Text' where `ListID`='$ListID'";
                    mysql_query($sql_u);
                }
                else{
                    $sql_u = "UPDATE wm_webinars_lists SET `ListText`='$Text', `ListIcon`='$Icon' where `ListID`='$ListID'";
                    mysql_query($sql_u);
                }
                
            }
            else if($count==0){
                $Text = $arrData[$i][0];
                $Icon = $arrData[$i][1];
                if($Icon!=null || $Text!=null){
                    $sql_i="Insert into wm_webinars_lists (`ListText`,`ListIcon`,`Visibility`,`TemplateID`) values ('$Text','$Icon',1,2)";
                    mysql_query($sql_i);
                }
                
            }
        }
    }
    
    if(isset($_POST['DeleteID'])){
        $strDelete = $_POST['DeleteID'];
        $deleteID = substr($strDelete, 2,strlen($strDelete));
        mysql_select_db($db,$conn);
        $sql_u = "Update `wm_webinars_lists` SET `Visibility`='0' where `ListID`='$deleteID'";
        mysql_query($sql_u);
        echo "$deleteID";
    }
    
    if(isset($_POST['DeleteContent'])){
        $idName = $_POST['DeleteContent'];
        $ContentName= substr($idName,1,  strlen($idName));
        mysql_select_db($db,$conn);
        $sql_u = "Update `wm_webinars_content` SET `Visibility`='0' where `ContentName`='$ContentName' AND `TemplateID`=2";
        mysql_query($sql_u);
        echo "$sql_u";
    }
    
?>