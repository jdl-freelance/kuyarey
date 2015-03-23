<?php 
    include('../conn.php');
    if($_POST['ListID']==null){
        mysql_select_db($db,$conn);
       $sql_check = "Select `Visibility` from wm_webinars_content where `ContentName`='lists' AND `TemplateID`=2";
       $query = mysql_query($sql_check);
       $count = count($query);
       if($count!=null){
           $row = mysql_fetch_assoc($query);
           $visibility = $row['Visibility'];
           if($visibility==1){
                mysql_select_db($db,$conn);
                $sql_s = "Select * from wm_webinars_lists where Visibility=1 AND TemplateID=2";
                $query = mysql_query($sql_s);
                $count = mysql_num_rows($query);
                if($count != null){
                    while($row = mysql_fetch_assoc($query)){
                        writeAllList($row['ListID'],$row['ListText'],$row['ListIcon']);
                    }
                }
           }
       }
        
        
    }
   
    function writeAllList($listID,$listText,$listIcon){
        echo "<li id='$listID'><div class='list clearfix'><figure><img src='$listIcon' alt=''/></figure><div class='list-content'><p>$listText</p></div></div></li>";
    }
    
 
?>