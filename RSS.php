<?php
header('Content-Type: text/xml');
echo '<?xml version="1.0" encoding="ISO-8859-1"?>
<rss version="2.0">
<channel>
<title>C Sports Direct</title>
<description>Csportsdirect.com offers an organized network of digital media alternatives and solutions for fans wanting to follow games, past athletic events, and 
former and/or current players – via a free service. 
The site promotes accessible and engaging content, creating an interactive and entertaining source that accommodates the needs and wants of college sports fans.</description>
<language>en-us</language>
<category>College Sports</category>
<image>
    <url>http://needarule.com/img/NeedaRuleSmallIcon.JPG</url>
    <title>C Sports Direct</title>
    <link>http://csportsdirect.com</link>
</image>
<link>http://csportsdirect.com</link>';

require_once('Functions.php');
    
Get_DB_Connection();
    $QUERY_STORIES = $db->prepare("select story.STORY_TITLE , story.STORY_URL , story_meta_data.META_DATA_DESCRIPTION 
                                from story join story_meta_data on story.STORY_KEY = story_meta_data.STORY_KEY 
                                where story.PUBLISHED = 'Y';");

    $QUERY_STORIES->execute(); 
    
    while ($row = $QUERY_STORIES->fetch(PDO::FETCH_ASSOC))
    {   
        $STORY_TITLE = XMLTreatment($row['STORY_TITLE']);
        
        $STORY_DESCRIPTION = XMLTreatment($row['META_DATA_DESCRIPTION']);
        
        echo "<item>";
            echo "<title>".$STORY_TITLE."</title>";
            
            echo "<description>".$STORY_DESCRIPTION."</description>";
            
            echo "<link>http://csportsdirect.com/story/".$row['STORY_URL']."</link>";
        echo "</item>";
    }
echo "</channel> ";
echo "</rss>";
?>