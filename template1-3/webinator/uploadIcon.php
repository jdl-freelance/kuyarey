<?php

    if(isset($_FILES['photos'])){
        //print_r($_FILES['photos']);
        //print_r($_POST['htmlID']);
        $ft = $_FILES['photos']['type'][0];
        $fn = $_FILES['photos']['name'][0];
        $fs = $_FILES['photos']['size'][0];
        $ftmp = $_FILES['photos']['tmp_name'][0];
       
        if($ft =="image/jpeg" || $ft=="image/jpg" || $ft =="image/png" || $ft =="image/tiff" || $ft=="image/gif"){
            $time = date("YmdHis");
            
            $fileName = "thumbnails/originalSize/".$time.$fn;
            $thumbFileName = "thumbnails/100x100/".$time.$fn;
            $temporaryPath = "thumbnails/temporary/".$time.$fn;
            list($w,$h) = getimagesize($ftmp);
            
            if($w<=500 && $h<=500){
                move_uploaded_file($ftmp, $temporaryPath);
                echo $temporaryPath;
//                $id = substr($_POST['htmlID'],1,1);
//                $iconFileName = "#iconFileName".$id;
//                echo "<script>$('$iconFileName').val($temporaryPath);$('icon'".").attr('src','$temporaryPath');</script>";
                
//                if(file_exists($fileName)){
////                    list($width, $height) = getimagesize($fileName);
////
////                    $thumb = imagecreatetruecolor(100,100);
////                    $imgSource = imagecreatefromjpeg($fileName);
////                    imagecopyresized($thumb,$imgSource, 0,0,0,0,100,100,$width,$height);
////                    imagejpeg($thumb, $thumbFileName);
//                    move_uploaded_file($temporaryPath, $ftmp);
//                    //$iconFileName = "#iconFileName".substr($_POST['htmlID'],1,1);
//                    
//                    //echo "<script>$('$iconFileName').text($temporaryPath);</script>";
//                    echo $temporaryPath;
//                }
//                else{
//                    echo alert("File doesn't exist!");
//                }
                
            }
            else{return null;
                //echo alert("Error:Image Selected exceeds maximum allowable size(500x500).");
            }
            
        }
        else if($ft=="image/gif" || $ft=="image/bmp"){return null;
            //echo alert("Error: JPEG, PNG and TIFF are allowed Image File Type only!");
        }
        else{return null;
            //echo alert("Error: File Selected is not an image!");
        }
        
    }

    function alert($message){
        return "<script>alert('$message');</script>";
    }

?>

