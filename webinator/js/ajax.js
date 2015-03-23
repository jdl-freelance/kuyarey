function ajaxComponent(elementID, getDetails)
{

    var xmlhttp;
    if(window.XMLHttpRequest)
    {
            xmlhttp = new XMLHttpRequest();
    }
    else
    {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.onreadystatechange = function()
    {
            if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                document.getElementById(elementID).innerHTML=xmlhttp.responseText;
            }
    }

    xmlhttp.open("GET",getDetails,true);
    xmlhttp.send();
}

function getData(elementID){
    ajaxComponent(elementID, "process.php?ContentName="+elementID);
}