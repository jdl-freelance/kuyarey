<!DOCTYPE HTML>
<?php 
    
?>
<html lang="en">
<head>
  	<script type="text/javascript">
	  var _kmq = _kmq || [];
	  function _kms(u){
	    setTimeout(function(){
	    var s = document.createElement('script'); var f = document.getElementsByTagName('script')[0]; s.type = 'text/javascript'; s.async = true;
	    s.src = u; f.parentNode.insertBefore(s, f);
	    }, 1);
	  }
	  _kms('//i.kissmetrics.com/i.js');_kms('//doug1izaerwt3.cloudfront.net/1fd9527dd2470497c67d059b9fbb621ad032938c.1.js');
	</script>	
  <title>Steven Essa</title>
  <meta charset="UTF-8" />
  
  <link href="bs/css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
  <link rel="stylesheet" href="style.css" media="screen" />
  
  <meta name="viewport" content="width=device-width" initial-scale="1.0">
  <link href="media_query.css" rel="stylesheet" type="text/css">
  <script src="js/jquery.js" type="text/javascript"></script>
  <script src="js/ajax.js" type="text/javascript"></script>
  <script src="js/tinymce/tinymce.min.js" type="text/javascript"></script>
  <script src="bs/js/bootstrap.js" type="text/javascript"></script>
  <link href="css/jqueryUI.css" rel="stylesheet" type="text/css"/>
    <script src="js/jqueryUI.js" type="text/javascript"></script>
 
 <script>
     getData("header","Header");
     getData("article-left","ArticleLeft");
     getData("article-right","ArticleRight");
     getData("footer","Footer");
     $(document).ready(function(){
        var obj = ['#header','#article-left','#article-right','#footer'];
        var borderWidth = '2px';
        var borderStyle ='dashed';
        var borderColor = '#999';
        var transitionDuration ='2s';
        
        var parentName=null;
        var isShowMenu=0;
        //-----------------------------functions
        
        function isObjExist(id){
            if($(id).length>0){return true;}
            else{return false;}
        }
        
        function hoverShowMenu(objCurrent){
            if(parentName==null && isShowMenu==0){
                var iconEdit = "<svg width='18' height='18' viewBox='0 0 32 32'><g></g><path d='M27 0c2.761 0 5 2.239 5 5 0 1.126-0.372 2.164-1 3l-2 2-7-7 2-2c0.836-0.628 1.874-1 3-1zM2 23l-2 9 9-2 18.5-18.5-7-7-18.5 18.5zM22.362 11.362l-14 14-1.724-1.724 14-14 1.724 1.724z' fill='#FFF'></path></svg>";
                var iconExit = "<svg width='18' height='18' viewBox='0 0 32 32'><g></g><path d='M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z' fill='#FFF'></path></svg>";
                var htmlOptions = "<div id='optionContainer'><div id='btnEdit'>"+iconEdit+"</div><div id='btnExit'>"+iconExit+"</div></div>";;
                //$("#optionContainer div").css({float:'left'});
                //alert(htmlOptions+htmlPrevious);
                $(objCurrent).append(htmlOptions);
                parentName=objCurrent;
                isShowMenu=1;
            }
            else if(parentName==objCurrent && isShowMenu==1){
                $("#optionContainer").remove();
                parentName=null;
                isShowMenu=0;
            }
        }
        
        function hoverButton(obj, obj2, ContentName){
            var btnEdit = obj+" #btnEdit";
            var btnExit = obj+" #btnExit";
            $(btnEdit).hover(function(){$(this).css('backgroundColor','#666');},function(){$(this).css('backgroundColor','#999');});
            
            $(btnEdit).click(function(){showLightBox(obj2, obj,ContentName);});
            
            $(btnExit).hover(function(){$(this).css('backgroundColor','#666');}, function(){$(this).css('backgroundColor','#999');});
            $(btnExit).click(function(){deleteContent(obj);});
        }
        
        function showLightBox(obj,btnName, ContentName){
            //Includes HTML template from "template/html1.html" directory
           var btnID = "btn"+btnName.substring(1,btnName.length);
           var htmlLightBox='';
            if(btnName=="#article-right"){
                $.ajax({type:'POST',url:'template/html1.html',dataType:'html',success:function(data){$("#dvObj").html(data)}});
                //HTML structure for LightBox
                htmlLightBox = "<div id='lightBoxBG'></div><div id='lightBox'><div id='lb-1'><div id='lb-1-1'><div id='lb-1-1-1' class='gradientBackground1'><div id='lb-1-1-1-1'></div><div id='lb-0'><svg id='btnExit' width='30' height='30' viewBox='0 0 40 40'><path d='M20 0c-11.046 0-20 8.954-20 20s8.954 20 20 20 20-8.954 20-20-8.954-20-20-20zM30 13.536l-6.464 6.464 6.464 6.464v3.536h-3.536l-6.464-6.464-6.464 6.464h-3.536v-3.536l6.464-6.464-6.464-6.464v-3.536h3.536l6.464 6.464 6.464-6.464h3.536v3.536z' fill='#FFF' /></svg></div></div><div id='lb-1-1-2'><div id='dvObj'>"+obj+"</div></div><div id='lb-1-1-3' class='gradientBackground2'><div id='containerButton'><form><input type='button' id='insertForm' value='Insert' style='width:130px;'/><input type='button' value='Advance Options' id=''/></form></div></div></form></div></div></div>";
           
            }
            else{
                //HTML structure for LightBox
                htmlLightBox = "<div id='lightBoxBG'></div><div id='lightBox'><div id='lb-1'><div id='lb-1-1'><div id='lb-1-1-1' class='gradientBackground1'><div id='lb-1-1-1-1'></div><div id='lb-0'><svg id='btnExit' width='30' height='30' viewBox='0 0 40 40'><path d='M20 0c-11.046 0-20 8.954-20 20s8.954 20 20 20 20-8.954 20-20-8.954-20-20-20zM30 13.536l-6.464 6.464 6.464 6.464v3.536h-3.536l-6.464-6.464-6.464 6.464h-3.536v-3.536l6.464-6.464-6.464-6.464v-3.536h3.536l6.464 6.464 6.464-6.464h3.536v3.536z' fill='#FFF' /></svg></div></div><div id='lb-1-1-2'><div id='dvObj'>"+obj+"</div></div><div id='lb-1-1-3' class='gradientBackground2'><div id='containerButton'><form><input type='button' id='"+btnID+"' value='Insert'/></form></div></div></form></div></div></div>";

            }
           
            $("body").append(htmlLightBox);
            
            tinymce.init({height:'290',selector:'.txtArea',mode : "textareas",plugins: ["image","media","link","textcolor"],toolbar: "insertfile | undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | forecolor backcolor"});
            

            ///Function: Shows the Lightbox with FadeIn Transition
            $("#lightBoxBG").hide();$("#lightBox").hide();$("#lightBoxBG").fadeIn('fast');$("#lightBox").fadeIn('fast');$("#lb-1-1").animate({height:'530px'});
            
            //Function:Close the LightBox
            $("#lb-0").hover(function () {$("#btnExit path").css('fill','#999');}, function () {$("#btnExit path").css('fill','#FFF');});
            
          
            $("#lb-0").click(function(){
                removeLightBox();
                removeTinyMCE();
            });
            
            $("#insertForm").click(function(){
	           var tmpNum = $("#ddlIntegrationType").val();
	           var contentIfr =tinyMCE.activeEditor.getContent({format : 'raw'});
	           var ddlIntegrationType = $("#ddlIntegrationType").val();
	           var defaultTextSubmit = $("#defaultTextSubmit").val();
	           console.log("Iframe Content"+contentIfr);
	           console.log("Button"+ddlIntegrationType);
	           console.log("defaultTextSubmit"+defaultTextSubmit);
	           if(tmpNum == "1")
	           {
		           var email = $("#email").val()+"~name";
		           var emailorder = $("#emailorder").val()+"~''";
		           var isnamerequired = $("#isnamerequired").val()+"~''";
		           var disablename = $("#disablename").val()+"~''";
		           var redirecturl1 = $("#redirecturl1").val()+"~value";
		           var nameorder = $("#nameorder").val()+"~''";
				    $.ajax(
				    	{
			                type: "POST",
			                url: "process.php",
			                data: {wid:"539",action:"savecontent",email:email,emailorder:emailorder,isnamerequired:isnamerequired,disablename:disablename,redirecturl1:redirecturl1,nameorder:nameorder,contentIfr:contentIfr,ddlIntegrationType:ddlIntegrationType,defaultTextSubmit:defaultTextSubmit},
			                success: function(){
			                
			                //$(btnName).html(getData(btnName.substring(1,btnName.length),ContentName));$("#lightBox").fadeOut('fast');
			                
			             //   $("#lightBoxBG").fadeOut('fast');
			            //    removeTinyMCE();
			            //    removeLightBox();
			                
			                },
			                dataType: 'html'
			             });

		

				  
	           }
	           if(tmpNum == "2")
	           {
		            var tmpNameRequired = "display:none;";
		           
		            if($("#nameRequired").val() == 1){
			            tmpNameRequired = "display:block;";
		            }
		            var nameRequired = tmpNameRequired+"~style";
		            	            
		            var mcFormInfusionsoft = $("#mcFormInfusionsoft").val()+"~html";
		            var nameField = $("#nameField1").val()+"~name";
		            var emailField = $("#emailField1").val()+"~name";
		            var nameFieldOrder = $("#nameFieldOrder").val()+"~''";
		            var emailFieldOrder = $("#emailFieldOrder").val()+"~''";
		            var method = $("#method").val()+"~method";
		            var formURLField = $("#formURLField1").val()+"~action";
					var tmpGData = gData;
      tmpGData = tmpGData+"~hidden";
      
      contentIfr += "~data";
      ddlIntegrationType += "~data";
      defaultTextSubmit += "~html";
		     		 var myarrData = {wid:"539",action:"savecustomform",mcFormInfusionsoft:mcFormInfusionsoft,nameField:nameField,nameFieldOrder:nameFieldOrder,nameRequired:nameRequired,emailField:emailField,emailFieldOrder:emailFieldOrder,method:method,formURLField:formURLField,hiddenFields:tmpGData,contentIfr:contentIfr,ddlIntegrationType:ddlIntegrationType,defaultTextSubmit:defaultTextSubmit};
//		          myarrData.items.push("hiddenField:23333");
				    $.ajax(
				    	{
			                type: "POST",
			                url: "process.php",
			                data: myarrData,
			                success: function(){
			                
			                //$(btnName).html(getData(btnName.substring(1,btnName.length),ContentName));$("#lightBox").fadeOut('fast');
			                
			               // $("#lightBoxBG").fadeOut('fast');
			                //removeTinyMCE();
			                //removeLightBox();
			                
			                },
			                dataType: 'html'
			             });
			             
			             
	           }
	           
	           if(tmpNum == "3")
	           {
		            var formsList = $("#formsList").val()+"~''";
		            var disableName = $("#disableName").val()+"~''";
		            var nameField = $("#nameField1").val()+"~name";
		            var nameFieldOrder = $("#nameFieldOrder").val()+"~''";
		            var nameRequired = $("#nameRequired").val()+"~''";
		            var emailFieldOrder = $("#emailFieldOrder").val()+"~''";
		            var emailField = $("#emailField1").val()+"~name";
		            var emailOrder = $("#emailOrder").val()+"~''";
		            var method = $("#formMethod").val()+"~method";
		            var formURLField1 = $("#formURLField1").val()+"~action";
		            var tmpGData = gData;
      tmpGData = tmpGData+"~hidden";
					var myarrData = {wid:"539",action:"saveinfusionsoft",formsList:formsList,disableName:disableName,nameField:nameField,nameFieldOrder:nameFieldOrder,nameRequired:nameRequired,emailField:emailField,emailFieldOrder:emailFieldOrder,formURLField:method,formURLField:formURLField1,hiddenFields:tmpGData,contentIfr:contentIfr,ddlIntegrationType:ddlIntegrationType,defaultTextSubmit:defaultTextSubmit};
				    $.ajax(
				    	{
			                type: "POST",
			                url: "process.php",
			                data: myarrData,
			                success: function()
			                {
								//$(btnName).html(getData(btnName.substring(1,btnName.length),ContentName));$("#lightBox").fadeOut('fast');
								//$("#lightBoxBG").fadeOut('fast');
								//removeTinyMCE();
								//removeLightBox();
			                },
			                dataType: 'html'
			             });

	           }

            });
            
            $("#"+btnID).click(function(){
            var ed =tinymce.get('content');
            var contentText = ed.getContent();
            $.ajax({
                type: "POST",
                url: "process.php",
                data: {ContentName:ContentName,ContentText:contentText},
                success: function(){$(btnName).html(getData(btnName.substring(1,btnName.length),ContentName));$("#lightBox").fadeOut('fast');$("#lightBoxBG").fadeOut('fast');removeTinyMCE();removeLightBox();},
                dataType: 'html'
              });
            });
        }
        //Function: Removes Tiny MCE instance
        function removeTinyMCE(){
            tinymce.remove('div');
        }
        //Function: Removes LightBox instance
        function removeLightBox(){
            function del(obj){$(obj).remove();};
            $("#lightBoxBG").fadeOut('fast',function(){$(this).remove();});
            $("#lightBox").fadeOut('fast',function(){$(this).remove();});
            var arrOBJ = ["#lb-1","#lb-1-1","#lb-1-1-1","#lb-1-1-1-1","#lb-0","lb-1-1-2","lb-1-1-3","txtA"];
            for(i=0;i<arrOBJ.length;i++){
                del(arrOBJ[i]);
            }
        }
        
        //---------------------------
        //Header
        if(isObjExist(obj[0])){
            $(obj[0]).hover(function(){
                $(this).css('outline',borderWidth+' '+borderStyle+' '+borderColor);
                var htmlCurrent = $(obj[0]).html();
                var htmlContent = "<textarea name='content' class='txtArea'>"+htmlCurrent+"</textarea>"
                hoverShowMenu("#header");
                hoverButton(obj[0],htmlContent,"Header");
            },function(){
                $(this).css('outline','none');
                hoverShowMenu("#header");
            }); 
        }
        
        //Article-Left
        $(obj[1]).hover(function(){
            $(this).css('outline',borderWidth+' '+borderStyle+' '+borderColor);
            var htmlCurrent = $(obj[1]).html();
            var htmlContent = "<textarea name='content' class='txtArea'>"+htmlCurrent+"</textarea>"
            hoverShowMenu("#article-left");
            hoverButton(obj[1],htmlContent,"ArticleLeft");
        },function(){
            $(this).css('outline','none');
            $("#optionContainer").remove();
            hoverShowMenu("#article-left");
        }); 
        
        //Article-Right
        $(obj[2]).hover(function(){
            $(this).css('outline',borderWidth+' '+borderStyle+' '+borderColor);
            hoverShowMenu(".article-right");
            //var htmlCurrent = $(obj[2]).html();
            var htmlContent = "";
            
            hoverButton(obj[2],htmlContent,"ArticleRight");
        },function(){
            $(this).css('outline','none');
            $("#optionContainer").remove();
            hoverShowMenu(".article-right");
        }); 
        
        //Footer
        $(obj[3]).hover(function(){
            $(this).css('outline',borderWidth+' '+borderStyle+' '+borderColor);
            hoverShowMenu("#footer");
            var htmlCurrent = $(obj[3]).html();
            var htmlContent = "<textarea name='content' class='txtArea'>"+htmlCurrent+"</textarea>"
            hoverButton(obj[3],htmlContent,"Footer");
        },function(){
            $(this).css('outline','none');
            $("#optionContainer").remove();
            hoverShowMenu("#footer");
        }); 
        
        
     });
     
     function closeDialog0(){$(".dialog3").dialog("close");$(".dialog3").remove();};
    
    function deleteContent(delID){
        var htmlDialog3 = "<div class='dialog3' title='Delete Confirmation' style='font-size:12px;font-weight:bold;'>Delete this list?</div>";
        $("body").append(htmlDialog3);
        $(".dialog3").dialog({autoOpen:true,height:200,width:300,modal:true,
            close:function(){closeDialog0();},
            buttons:{"Yes": function(){executeDeleteContent(delID);},"No":function(){closeDialog0();}}
        });
        $( ".dialog3").dialog( "option", "draggable", false );
    }

    function executeDeleteContent(delID){
        
        var uploadURL ="process.php";
        $.ajax({
            url: uploadURL,
            type: "POST",
            data: {DeleteContent:delID},
            dataType:'text',
            success:function(res){if(res!=null){$(delID).remove();closeDialog0();}}
        }); 
    }
 </script> 
</head>
<body>
   
   
	
   <div id="header">
   </div>	
  
  <div id="wrapper">
      
      <div class="article-left" id="article-left">
         
      </div>

    <div class="article-right" id="article-right">

    </div>
    
  </div>

  <div id="footer">
  	
  </div>
    
</body>
</html>