//getData("header","Header");
     //getData("article-left","ArticleLeft");
     //getData("article-right","ArticleRight");
     //getData("footer","Footer");
     
     function getList(id,edit,url){
        $.ajax({
            type: "POST",
            url: url,
            data: {ListID:id},dataType: 'html',
            success: function(data){
                if(edit===false){
                    id===null?$("#lists").html("<form id='frmList'>"+data+"</form>"):$("#list"+id).html(data);
                }
                else{
                    id===null?$("#dvObj").html("<form id='frmList'>"+data+"</form>"):$("#list"+id).html(data);
                }
            }
          });
    }
   
     $(document).ready(function(){
         
        var obj = ['#header-innercontainer','#top-meta-innercontainer','#img1','#img2','#title','#lists', '#containerWarning','#footerButton','#profiles'];
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
            if(btnName=="#lists"){
                
                //HTML structure for LightBox
                htmlLightBox = "<div id='lightBoxBG'></div><div id='lightBox'><div id='lb-1'><div id='lb-1-1'><div id='lb-1-1-1' class='gradientBackground1'><div id='lb-1-1-1-1'></div><div id='lb-0'><svg id='btnExit' width='30' height='30' viewBox='0 0 40 40'><path d='M20 0c-11.046 0-20 8.954-20 20s8.954 20 20 20 20-8.954 20-20-8.954-20-20-20zM30 13.536l-6.464 6.464 6.464 6.464v3.536h-3.536l-6.464-6.464-6.464 6.464h-3.536v-3.536l6.464-6.464-6.464-6.464v-3.536h3.536l6.464 6.464 6.464-6.464h3.536v3.536z' fill='#FFF' /></svg></div></div><div id='lb-1-1-2'><div id='dvObj'>"+obj+"</div></div><div id='lb-1-1-3' class='gradientBackground2'><div id='containerButton'><form><input type='button' id='"+btnID+"' value='Insert'/></form></div></div></form></div></div></div>";
                $("body").append(htmlLightBox);
                getList(null,true,"template/editHTMLList.php");
            }
            else{
                //HTML structure for LightBox
                htmlLightBox = "<div id='lightBoxBG'></div><div id='lightBox'><div id='lb-1'><div id='lb-1-1'><div id='lb-1-1-1' class='gradientBackground1'><div id='lb-1-1-1-1'></div><div id='lb-0'><svg id='btnExit' width='30' height='30' viewBox='0 0 40 40'><path d='M20 0c-11.046 0-20 8.954-20 20s8.954 20 20 20 20-8.954 20-20-8.954-20-20-20zM30 13.536l-6.464 6.464 6.464 6.464v3.536h-3.536l-6.464-6.464-6.464 6.464h-3.536v-3.536l6.464-6.464-6.464-6.464v-3.536h3.536l6.464 6.464 6.464-6.464h3.536v3.536z' fill='#FFF' /></svg></div></div><div id='lb-1-1-2'><div id='dvObj'>"+obj+"</div></div><div id='lb-1-1-3' class='gradientBackground2'><div id='containerButton'><form><input type='button' id='"+btnID+"' value='Insert'/></form></div></div></form></div></div></div>";
                $("body").append(htmlLightBox);
            }
           
            
            
            tinymce.init({height:'290',selector:'.txtArea',mode : "textareas",plugins: ["image","media","link","textcolor"],toolbar: "insertfile | undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | forecolor backcolor"});
           

            ///Function: Shows the Lightbox with FadeIn Transition
            $("#lightBoxBG").hide();$("#lightBox").hide();$("#lightBoxBG").fadeIn('fast');$("#lightBox").fadeIn('fast');$("#lb-1-1").animate({height:'530px'});
            
            //Function:Close the LightBox
            $("#lb-0").hover(function () {$("#btnExit path").css('fill','#999');}, function () {$("#btnExit path").css('fill','#FFF');});
            
          
            $("#lb-0").click(function(){
                removeLightBox();
                removeTinyMCE();
            });
            
            $("#"+btnID).click(function(){
                if(btnID=='btnlists'){
                    saveList();
                }
                else{
                    
                    var ed =tinymce.get('content');
                    var contentText = ed.getContent();

                    $.ajax({

                        type: "POST",
                        url: "process.php",
                        data: {ContentName:ContentName,ContentText:contentText},
                        success: function(){$(btnName).html(getData(btnName.substring(1,btnName.length),ContentName));$("#lightBox").fadeOut('fast');$("#lightBoxBG").fadeOut('fast');removeTinyMCE();removeLightBox();},
                        dataType: 'html'
                      });
                    
                }
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
        
        function saveList(){
            
            var NL = arrNewList;
            for(i=0;i<NL.length;i++){
                var nlid = NL[i];
                var oV1 = document.getElementById("tb"+nlid).value;
                var oV2 = document.getElementById("iconFileName"+nlid).value;
                if(oV1!=null || oV2!=null){
                    listIDS2.push(nlid);
                }
            }
            var li = listIDS2;
            var data=[];
            //var data2=[];
            for(i=0;i<li.length;i++){
                var lid = li[i];
                var objValue1 = document.getElementById("tb"+lid).value;
                var objValue2 = document.getElementById("iconFileName"+lid).value;
                data.push([objValue1,objValue2]);
                //data2.push([]);
            }
            $.ajax({
            type: "POST",
            url:"process.php",
            data:{SaveList:"1",ID:listIDS2,Data:data},
            dataType: 'html',
            success: function(data){removeLightBox();getBodyContent();}
          });
        }
        
        //---------------------------
        //Header
        if(isObjExist(obj[0])){
            $(obj[0]).hover(function(){
                $(this).css('outline',borderWidth+' '+borderStyle+' '+borderColor);
                var htmlCurrent = $(obj[0]).html();
                var htmlContent = "<textarea name='content' class='txtArea'>"+htmlCurrent+"</textarea>"
                hoverShowMenu("#header-innercontainer");
                hoverButton(obj[0],htmlContent,"header-innercontainer");
            },function(){
                $(this).css('outline','none');
                hoverShowMenu("#header-innercontainer");
            }); 
            
            $(obj).fancybox({
				'titlePosition'		: 'outside',
				'overlayColor'		: '#000',
				'overlayOpacity'	: 0.9
            });
        }
        
        //meta container
        $(obj[1]).hover(function(){
            $(this).css('outline',borderWidth+' '+borderStyle+' '+borderColor);
            var htmlCurrent = $(obj[1]).html();
            var htmlContent = "<textarea name='content' class='txtArea'>"+htmlCurrent+"</textarea>"
            hoverShowMenu("#metabutton");
            hoverButton(obj[1],htmlContent,"ArticleLeft");
        },function(){
            $(this).css('outline','none');
            $("#optionContainer").remove();
            hoverShowMenu("#metabutton");
        }); 
        
        //img1
        $(obj[2]).hover(function(){
            $(this).css('outline',borderWidth+' '+borderStyle+' '+borderColor);
            hoverShowMenu("#img1");
            var htmlCurrent = $(obj[2]).html();
            var htmlContent = "<textarea name='content' class='txtArea'>"+htmlCurrent+"</textarea>"
            
            hoverButton(obj[2],htmlContent,"top-meta-innercontainer");
        },function(){
            $(this).css('outline','none');
            $("#img1 #optionContainer").remove();
            hoverShowMenu("#img1");
        }); 
        
        //img2
        $(obj[3]).hover(function(){
            $(this).css('outline',borderWidth+' '+borderStyle+' '+borderColor);
            hoverShowMenu("#img2");
            var htmlCurrent = $(obj[3]).html();
            var htmlContent = "<textarea name='content' class='txtArea'>"+htmlCurrent+"</textarea>"
            hoverButton(obj[3],htmlContent,"profiles");
        },function(){
            $(this).css('outline','none');
            $("#img2 #optionContainer").remove();
            hoverShowMenu("#img2");
        }); 
        
        $(obj[4]).hover(function(){
            $(this).css('outline',borderWidth+' '+borderStyle+' '+borderColor);
            hoverShowMenu("#title");
            var htmlCurrent = $(obj[4]).html();
            var htmlContent = "<textarea name='content' class='txtArea'>"+htmlCurrent+"</textarea>"
            hoverButton(obj[4],htmlContent,"title");
            $("#title #optionContainer svg").css("top","-37px");
        },function(){
            $(this).css('outline','none');
            $("#title #optionContainer").remove();
            hoverShowMenu("#title");
        }); 
        
        $(obj[5]).hover(function(){
            $(this).css('outline',borderWidth+' '+borderStyle+' '+borderColor);
            hoverShowMenu("#lists");
            var htmlCurrent = '';
            //var htmlContent = "<textarea name='content' class='txtArea'>"+htmlCurrent+"</textarea>"
            hoverButton(obj[5],htmlCurrent,"lists");
        },function(){
            $(this).css('outline','none');
            $("#lists #optionContainer").remove();
            hoverShowMenu("#lists");
        });
        
        
        $(obj[6]).hover(function(){
            $(this).css('outline',borderWidth+' '+borderStyle+' '+borderColor);
            hoverShowMenu("#containerWarning");
            var htmlCurrent = $(obj[6]).html();
            var htmlContent = "<textarea name='content' class='txtArea'>"+htmlCurrent+"</textarea>"
            hoverButton(obj[6],htmlContent,"containerWarning");
        },function(){
            $(this).css('outline','none');
            $("#containerWarning #optionContainer").remove();
            hoverShowMenu("#containerWarning");
        });
        
        
         $(obj[7]).hover(function(){
            $(this).css('outline',borderWidth+' '+borderStyle+' '+borderColor);
            hoverShowMenu("#footerButton");
            var htmlCurrent = $(obj[7]).html();
            var htmlContent = "<textarea name='content' class='txtArea'>"+htmlCurrent+"</textarea>"
            hoverButton(obj[7],htmlContent,"footerButton");
        },function(){
            $(this).css('outline','none');
            $("#footerButton #optionContainer").remove();
            hoverShowMenu("#footerButton");
        });
        
        $(obj[8]).hover(function(){
            $(this).css('outline',borderWidth+' '+borderStyle+' '+borderColor);
            hoverShowMenu("#profiles");
            var htmlCurrent = $(obj[8]).html();
            var htmlContent = "<textarea name='content' class='txtArea'>"+htmlCurrent+"</textarea>"
            hoverButton(obj[8],htmlContent,"profiles");
            
        },function(){
            $(this).css('outline','none');
            $("#profiles #optionContainer").remove();
            hoverShowMenu("#profiles");
        });
        
     });

function getBodyContent(){
    getList(null,false,"template/htmlList.php");
    var arrElements = ['header-innercontainer','top-meta-innercontainer','profiles','title','containerWarning','footerButton'];
    for(var z=0;z<arrElements.length;z++){
        getData(arrElements[z]);
    }
}


    function closeDialog0(){$(".dialog3").dialog("close");$(".dialog3").remove();};
    
    function deleteContent(delID){
        var htmlDialog3 = "<div class='dialog3' title='Delete Confirmation' style='font-size:12px;font-weight:bold;'>Delete this content?</div>";
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
     
  