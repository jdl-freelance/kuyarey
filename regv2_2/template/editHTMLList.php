<?php 
    include('../conn.php');
    $arrID = array();
    $arrID2 = array();
    if(isset($_POST['ListID'])){
       
        mysql_select_db($db,$conn);
        $sql_s = "Select * from wm_webinars_lists where `Visibility`=1 AND `TemplateID`=5";
        $query = mysql_query($sql_s);
        $count = mysql_num_rows($query);
        if($count != null){
            while($row = mysql_fetch_assoc($query)){
                 writeAllList($row['ListID'],$row['ListText'],$row['ListIcon']);
            }
        }
        
        mysql_select_db($db,$conn);
        $sql_s = "Select * from wm_webinars_lists where `TemplateID`=5";
        $query = mysql_query($sql_s);
        $count = mysql_num_rows($query);
        if($count != null){
            while($row = mysql_fetch_assoc($query)){
                 array_push($arrID,$row['ListID']);
            }
        }
        
        mysql_select_db($db,$conn);
        $sql_s = "Select * from wm_webinars_lists where `Visibility`=1 AND `TemplateID`=5";
        $query = mysql_query($sql_s);
        $count = mysql_num_rows($query);
        if($count != null){
            while($row = mysql_fetch_assoc($query)){
                 array_push($arrID2,$row['ListID']);
            }
        }
        
    }
    else if(isset($_POST['ListID'])){
       
        mysql_select_db($db,$conn);
        $sql_s = "Select * from wm_webinars_lists where ListID ='$_POST[ListID]' AND Visibility=1 AND `TemplateID`=5";
        $query = mysql_query($sql_s);
        $count = mysql_num_rows($query);
        
        
        
        if($count ==1){
            
            while($row = mysql_fetch_assoc($query)){
                writeOneList($row['ListID'],$row['ListText'],$row['ListIcon']);
                //array_push($arrID,$row['ListID']);
            }
             
        }
        
       
        
    }
    
    function writeAllList($listID,$listText,$listIcon){
//        echo "<li id='$listID' class='containerLI'><div class='list clearfix'><figure><img src='$listIcon' alt=''/></figure><div class='list-content'><p>$listText</p></div></div></li>";
//    }
//    
//    function writeOneList($listID,$listText,$listIcon){
//        echo "<div class='list clearfix'><figure><img src='$listIcon' alt=''/></figure><div class='list-content'><p>$listText</p></div></div>";
//    }
?>
<div class="containerLI" id="<?php echo "list".$listID; ?>">
    <div class="containerIcon">
        <div>
            <img id="icon<?php echo $listID; ?>" src="<?php echo $listIcon; ?>" style="width:58px;height:58px;float:left;"/>
        </div>
        <div>
            <a href="javascript:;" class="linkUpload" id="a<?php echo $listID;?>" onclick="showLightBox(this.id)" style="">Upload</a>
            <input type="text" id="<?php echo "iconFileName".$listID; ?>" hidden="hidden" class="hidden"/>
            
        </div>
    </div>
    <div>
  
        <textarea id="<?php echo "tb".$listID; ?>" class="txtArea1" rows="3"><?php echo $listText; ?></textarea>
    </div>
    <a href="javascript:;" class="aDelete" id="<?php echo "dl".$listID; ?>" onclick="deleteList(this.id)">Delete</a>
</div>
   
<?php } 

?>
<script type="text/javascript">
    
    function showLightBox(obj){
          var htmlDialog = "<div class='dialog' title='Upload Icon'><form enctype='multipart/form-data'><input type='file' id='fileIcon' width='200px'/></form></div>";
          $("body").append(htmlDialog);
          $(".dialog").dialog({autoOpen:true,height:200,width:500,modal:true,
              close:function(){closeDialog();},
              buttons:{"Upload": function(){uploadIcon(obj);}}
          });
          $( ".dialog").dialog( "option", "draggable", false );
    }
    
    
    
    function closeDialog(){$(".dialog").dialog("close");$(".dialog").remove();};
    function closeDialog2(){$(".dialog2").dialog("close");$(".dialog2").remove();};
    
    function deleteList(delID){
        var htmlDialog2 = "<div class='dialog2' title='Delete Confirmation' style='font-size:12px;font-weight:bold;'>Delete this list?</div>";
        $("body").append(htmlDialog2);
        $(".dialog2").dialog({autoOpen:true,height:200,width:300,modal:true,
            close:function(){closeDialog2();},
            buttons:{"Yes": function(){executeDeleteList(delID);},"No":function(){closeDialog2();}}
        });
        $( ".dialog2").dialog( "option", "draggable", false );
    }
    
    function deleteList2(delID){
        var htmlDialog2 = "<div class='dialog2' title='Delete Confirmation' style='font-size:12px;font-weight:bold;'>Delete this list?</div>";
        $("body").append(htmlDialog2);
        $(".dialog2").dialog({autoOpen:true,height:200,width:300,modal:true,
            close:function(){closeDialog2();},
            buttons:{"Yes": function(){executeDeleteList2(delID);},"No":function(){closeDialog2();}}
        });
        $( ".dialog2").dialog( "option", "draggable", false );
    }

    function executeDeleteList(delID){
        var uploadURL ="process.php";
        var lids2 = listIDS2;
        for(var i=0;i<lids2.length;i++){
            var id =delID.substring(2,delID.length);
            if(lids2[i]==id){
                listIDS2.splice(i,1);
            }
        }
        $.ajax({
            url: uploadURL,
            type: "POST",
            data: {DeleteID:delID},
            dataType:'text',
            success:function(res){if(res!=null){$("#list"+res).remove();getList(null,false,"template/htmlList.php");closeDialog2();}}
        }); 
        
        
    }
    
    function executeDeleteList2(delID){
        var anl = arrNewList;
        for(var i=0;i<anl.length;i++){
            var id =delID.substring(2,delID.length);
            if(anl[i]==id){
                arrNewList.splice(i,1);
            }
        }
        $("#list"+id).remove();closeDialog2();
    }
    
    
    function uploadIcon(obj){
    var file = document.getElementById("fileIcon").value;
    if(file ==""){
        alert("Error: No File Selected!");
    }
    else{
        var extension = file.substring(file.lastIndexOf('.')+1).toLowerCase();
        if(extension == "gif"|| extension =="png" || extension =="bmp"|| extension=="jpg"|| extension=="jpeg"){
            var files = document.getElementById("fileIcon").files;
            var formData = new FormData();
            for (var i = 0; i < files.length; i++) {
              file = files[i];
              if (!file.type.match('image.*')) {
                continue;
              }
              formData.append('htmlID',obj);
              formData.append('photos[]', file, file.name);
              sendFileToServer(formData,obj);
            }
      
        }
        else{
            alert("Inappropriate File Type! Please Select an Image File!");
            
        }
    }
}

function sendFileToServer(formData, obj)
{
    var uploadURL ="uploadIcon.php"; //Upload URL
    
    var id = obj.substring(1,obj.length);
    $.ajax({
        url: uploadURL,
        type: "POST",
        contentType:false,
        processData: false,
        cache: false,
        data: formData,
        dataType:'html',
        success:function(res){if(res!==""){$("#iconFileName"+id).val(res);$("#icon"+id).attr("src",res);}closeDialog();}
    }); 

}

<?php 
$strIDS = '';
$strIDS2 ='';

for($i=0;$i<count($arrID);$i++){
   $strIDS .=",".$arrID[$i];
}
for($i=0;$i<count($arrID2);$i++){
   $strIDS2.=",".$arrID2[$i];
}
echo "var listIDS=[".substr($strIDS,1,  strlen($strIDS)-1)."];";
echo "var listIDS2=[".substr($strIDS2,1,  strlen($strIDS2)-1)."];";
?>
    
var arrNewList = [];

$("#btnAddList").click(function(){
    var id=null;
    if(arrNewList.length==0){
        var id = listIDS.length +1;
        arrNewList.push(id);
        
    }
    else{
        var id = arrNewList[arrNewList.length-1] +1;
        arrNewList.push(id);
    }
    
    var htmlListLayout = "<div class='containerLI' id='list"+id+"'><div class='containerIcon'><div><img id='icon"+id+"' src='' style='width:58px;height:58px;float:left;'/></div><div><a href='javascript:;' class='linkUpload' id='a"+id+"' onclick='showLightBox(this.id)' style=''>Upload</a><input type='text' id='iconFileName"+id+"' hidden='hidden' class='hidden'/> </div></div><div><textarea id='tb"+id+"' class='txtArea1' rows='3'></textarea></div><a href='javascript:;' class='aDelete' id='dl"+id+"' onclick='deleteList2(this.id)'>Delete</a></div>";
    $("#newList").append(htmlListLayout);   
    
});

$(document).ready(function(){
       $(".linkUpload").click(function(event){event.preventDefault();}); 
       $(".aDelete").click(function(event){event.preventDefault();}); 
});
</script>

<div id="newList"></div>

<div style="width:98%;clear:both;margin:10px;">
    <input type="button" id="btnAddList" value="Add New List"/>
</div>

<div></div>

<style>
    .containerLI{width:98%;clear:both;clear:both;margin:10px;overflow:hidden;position:relative;}
    .containerLI>div{float:left;margin:5px;}
    .containerIcon{height:90px;width:60px;}
    .containerIcon div:first-child{width:100%;}
    .containerIcon div:last-child{font-size: 14px; text-align: center;}
    .containerIcon div:last-child a{width:100%;}
    .containerIcon div img{padding:2px;border:1px dashed #CCC;}
    .containerLI>div>a{position:absolute;}
    .txtArea1{width:630px;height:60px;margin:10px;margin-top:0px;}
    
    .aDelete{visibility:hidden;font-size:12px;position:absolute;right:5px;bottom:0;padding:1px;padding-left:10px;padding-right:10px;background:#999;color:#FFF;border-radius:5px;border-bottom-left-radius: 0;border-bottom-right-radius:0;text-decoration: none;}
    .aDelete:hover{background:#333;text-decoration: none;}
    .containerLI:hover{outline:1px dashed #999;}
    .containerLI:hover .aDelete{visibility:visible;color:#FFF;}
    
    .dialog{z-index:15; position:fixed;}
    .dialog2{z-index:20; position:fixed;}
    .hidden{visibility: hidden;}
</style>



