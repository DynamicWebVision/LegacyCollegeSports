<?php

$config['db'] = array(
'host' => '198.154.209.170',
'username' => 'bailjack_admin',
'password' => 'people96321',
'dbname' => 'bailjack_csblitz'
);

$db = new PDO('mysql:host='.$config['db']['host'].';dbname='.$config['db']['dbname'], $config['db']['username'], $config['db']['password']);    
  
//Make story entry have a video media type
$updateStoryMedia = $db->prepare("update story set MEDIA = 'Y' where STORY_KEY = :storyKey ;");    

$updateStoryMedia->bindValue(':storyKey', $_GET['storyKey']);

$updateStoryMedia->execute();

print_r($db->errorInfo());

//Insert Video Key
$insertVideo = $db->prepare("insert into story_videos (STORY_KEY , YOUTUBE_KEY ) values (:storyKey , :videoKey );");    

$insertVideo->bindValue(':storyKey', $_GET['storyKey']);

$insertVideo->bindValue(':videoKey', $_GET['videoKey']);

$insertVideo->execute();

print_r($db->errorInfo());
?>
