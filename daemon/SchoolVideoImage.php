<?php

require_once('../Functions.php');
    
Get_DB_Connection();

$queryVideo = $db->prepare("select YOUTUBE_KEY , VIDEO_KEY from school_videos where YOUTUBE_KEY != '' and VIDEO_IMAGE is null ");
                 

$queryVideo->execute(); 

while ($row = $queryVideo->fetch(PDO::FETCH_ASSOC))
{
    copy('http://img.youtube.com/vi/'.$row['YOUTUBE_KEY'].'/0.jpg', '../IMG/VIDEO/'.$row['YOUTUBE_KEY'].'.jpg');
    
    $updateVideo = $db->prepare(" update school_videos set VIDEO_IMAGE = '1' where VIDEO_KEY = :video_key ");

    $updateVideo->bindValue(':video_key', $_POST['VIDEO_KEY']);

    $updateVideo->execute(); 
}

?>
