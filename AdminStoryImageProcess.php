<?
ob_start(); 
session_start();
?>
<!DOCTYPE html>
<?

require_once('Functions.php');
Get_DB_Connection(); 


    
// store session data

//echo $_FILES['name'];
$image_name = $_FILES['IMAGE']['name'];
$image_size = $_FILES['IMAGE']['size'];
$image_temp = $_FILES['IMAGE']['tmp_name'];

//$image_ext = strtolower(end(explode('.', $image_name)));

//IF ($image_size > 5242880)
//{
//    header('Location: ManageShopInfo.php?IMG_ER=6');
//}

$STORY_KEY = $_POST['STORY_KEY'];
    
$IMAGE_NAME = strtoupper($image_name);

$JPG_COUNT = substr_count($IMAGE_NAME, '.JPG');
$JPEG_COUNT = substr_count($IMAGE_NAME, '.JPEG');
$PNG_COUNT = substr_count($IMAGE_NAME, '.PNG');
$GIF_COUNT = substr_count($IMAGE_NAME, '.GIF');


$IMAGE_NAME = addslashes($IMAGE_NAME);

IF ($JPG_COUNT == 0 && $JPEG_COUNT == 0 && $PNG_COUNT == 0 && 
                            $GIF_COUNT == 0)
    
     {
        header("Location:  AdminStoryMedia.php?IMG_ER=5");

     }   
            
 ELSE
     {
//            $QUERY_IMAGE = $db->prepare("select IMAGE_EXIST , IMAGE_WIDTH , IMAGE_HEIGHT , FILE_TYPE from band_images where ID = :id ;");
//            
//            $QUERY_IMAGE->bindValue(':id', $_SESSION['ID']);
//
//            $QUERY_IMAGE->execute(); 
//
//            WHILE ($row = $QUERY_IMAGE->fetch(PDO::FETCH_ASSOC)){
//                $IMAGE_EXIST = $row['IMAGE_EXIST'];
//                
//                $IMAGE_WIDTH = $row['IMAGE_WIDTH'];
//                $IMAGE_HEIGHT = $row['IMAGE_HEIGHT'];
//                
//                $FILE_TYPE = $row['FILE_TYPE'];
//            }
//            
//            
//            
//            IF ($IMAGE_EXIST == "Y")
//            {
//                    $FILE_NAME = "TALENT_IMAGES/".$_SESSION['ID'].".".$FILE_TYPE;
//                
//                    unlink($FILE_NAME);                    
//            }
            
                
                    IF ($JPG_COUNT > 0)
                    { 
                     $DB_IMAGE_NAME = $STORY_KEY.".JPG";
                     $IMAGE_TYPE = "JPG";
                    }

                    IF ($JPEG_COUNT > 0)
                    { 
                     $DB_IMAGE_NAME = $STORY_KEY.".JPEG";
                     $IMAGE_TYPE = "JPEG";
                    }

                    IF ($PNG_COUNT > 0)
                    { 
                     $DB_IMAGE_NAME = $STORY_KEY.".PNG";
                     $IMAGE_TYPE = "PNG";
                    }

                    IF ($GIF_COUNT > 0)
                    { 
                     $DB_IMAGE_NAME = $STORY_KEY.".GIF";
                     $IMAGE_TYPE = "GIF";
                    }
                    
                    $DB_IMAGE_NAME = trim($DB_IMAGE_NAME);

                   move_uploaded_file($image_temp, "STORY_IMAGES/"."TEMP".$DB_IMAGE_NAME);
                   
                   $FILE_NAME = "STORY_IMAGES/TEMP".$DB_IMAGE_NAME;
                   
                    // Get new dimensions
                    list($width, $height) = getimagesize($FILE_NAME);
                    
                    IF ($width == $height)
                    {
                        $new_width = 800;
                        $new_height = 800;
                    }
                    ELSEIF ($width > $height)
                    {
                        $new_width = 800;
                        $new_height = round(800*($height/$width));
                    }
                    ELSE
                    {
                        $new_height = 800;
                        $new_width = round(800*($width/$height));
                    }
                                        
                 
//                    // Resample
                    $image_p = imagecreatetruecolor($new_width, $new_height);
                    
                    IF ($JPG_COUNT > 0 || $JPEG_COUNT > 0)
                    {
                        $image = imagecreatefromjpeg($FILE_NAME);
                    }
                    ELSEIF ($PNG_COUNT > 0 )
                    {
                        $image = imagecreatefrompng($FILE_NAME);
                    }
                    ELSEIF ($GIF_COUNT > 0)
                    {
                        $image = imagecreatefromgif($FILE_NAME);
                    }
                    
                    
                    imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
                    
                    IF ($IMAGE_TYPE == "JPG")
                    {
                        imagejpeg($image_p, "STORY_IMAGES/".$DB_IMAGE_NAME);
                    }
                    
                    ELSEIF ($IMAGE_TYPE == "JPEG")
                    {
                        imagejpeg($image_p, "STORY_IMAGES/".$DB_IMAGE_NAME);
                    }
                    
                    ELSEIF ($IMAGE_TYPE == "GIF")
                    {
                        imagegif($image_p, "STORY_IMAGES/".$DB_IMAGE_NAME);
                    }
                    
                    ELSEIF ($IMAGE_TYPE == "PNG")
                    {
                        imagepng($image_p, "STORY_IMAGES/".$DB_IMAGE_NAME);
                    }
                                        
                    $TEMP_FILE = "STORY_IMAGES/TEMP".$DB_IMAGE_NAME;
                    
                    unlink($TEMP_FILE);
                    
                    $IMAGE_ALT = addslashes(str_replace("’", "'",$_POST['IMAGE_ALT']));
                    
                    $IMAGE_CREDIT = addslashes(str_replace("’", "'",$_POST['IMAGE_CREDIT']));
                    
                    $INSERT_IMAGE = $db->prepare("insert into story_images (STORY_KEY , IMAGE_WIDTH , IMAGE_HEIGHT , FILE_TYPE , IMAGE_ALT , IMAGE_CREDIT) 
                            values (:story_key , :image_width , :image_height , :file_type , :image_alt , :image_credit );");    
                    
                    $INSERT_IMAGE->bindValue(':story_key', $STORY_KEY);
                    $INSERT_IMAGE->bindValue(':image_width', $new_width);
                    $INSERT_IMAGE->bindValue(':image_height', $new_height);
                    $INSERT_IMAGE->bindValue(':file_type', $IMAGE_TYPE);
                    $INSERT_IMAGE->bindValue(':image_alt', $IMAGE_ALT);
                    $INSERT_IMAGE->bindValue(':image_credit', $IMAGE_CREDIT);
                    $INSERT_IMAGE->execute();  
                                                                         
                    header("Location:  http://csportsdirect.com/ContactUs.php");
           
         }

?>