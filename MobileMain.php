<?
ob_start(); 
session_start();
?>
<!DOCTYPE html>
<?
    require_once('Functions.php');
    Get_DB_Connection();
    
    $QUERY_VIDEO = $db->prepare("select LINK_TITLE , LINK , LINK_ORDER from front_youtube_links order by LINK_ORDER;");
          
    $QUERY_VIDEO->execute(); 

    while ($row = $QUERY_VIDEO->fetch(PDO::FETCH_ASSOC))
    {
        IF ($row['LINK_ORDER'] == "1")
        {
            $VIDEO_LINK_1 = $row['LINK'];
            $VIDEO_LINK_TITLE_1 = $row['LINK_TITLE'];
        }
        
        IF ($row['LINK_ORDER'] == "2")
        {
            $VIDEO_LINK_2 = $row['LINK'];
            $VIDEO_LINK_TITLE_2 = $row['LINK_TITLE'];
        }
        
        IF ($row['LINK_ORDER'] == "3")
        {
            $VIDEO_LINK_3 = $row['LINK'];
            $VIDEO_LINK_TITLE_3 = $row['LINK_TITLE'];
        }
        
        IF ($row['LINK_ORDER'] == "4")
        {
            $VIDEO_LINK_4 = $row['LINK'];
            $VIDEO_LINK_TITLE_4 = $row['LINK_TITLE'];
        }
        
        IF ($row['LINK_ORDER'] == "5")
        {
            $VIDEO_LINK_5 = $row['LINK'];
            $VIDEO_LINK_TITLE_5 = $row['LINK_TITLE'];
        }
        
        IF ($row['LINK_ORDER'] == "6")
        {
            $VIDEO_LINK_6 = $row['LINK'];
            $VIDEO_LINK_TITLE_6 = $row['LINK_TITLE'];
        }
        
        IF ($row['LINK_ORDER'] == "7")
        {
            $VIDEO_LINK_7 = $row['LINK'];
            $VIDEO_LINK_TITLE_7 = $row['LINK_TITLE'];
        }
        
        IF ($row['LINK_ORDER'] == "8")
        {
            $VIDEO_LINK_8 = $row['LINK'];
            $VIDEO_LINK_TITLE_8 = $row['LINK_TITLE'];
        }
        
        IF ($row['LINK_ORDER'] == "9")
        {
            $VIDEO_LINK_9 = $row['LINK'];
            $VIDEO_LINK_TITLE_9 = $row['LINK_TITLE'];
        }
        
        IF ($row['LINK_ORDER'] == "10")
        {
            $VIDEO_LINK_10 = $row['LINK'];
            $VIDEO_LINK_TITLE_10 = $row['LINK_TITLE'];
        }
    }
    
    
    $QUERY_VIDEO = $db->prepare("select LINK_TITLE , LINK , LINK_ORDER from front_throwback_videos order by LINK_ORDER;");
          
    $QUERY_VIDEO->execute(); 

    while ($row = $QUERY_VIDEO->fetch(PDO::FETCH_ASSOC))
    {
        IF ($row['LINK_ORDER'] == "1")
        {
            $THROWBACK_VIDEO_LINK_1 = $row['LINK'];
            $THROWBACK_VIDEO_LINK_TITLE_1 = $row['LINK_TITLE'];
        }
        
        IF ($row['LINK_ORDER'] == "2")
        {
            $THROWBACK_VIDEO_LINK_2 = $row['LINK'];
            $THROWBACK_VIDEO_LINK_TITLE_2 = $row['LINK_TITLE'];
        }
        
        IF ($row['LINK_ORDER'] == "3")
        {
            $THROWBACK_VIDEO_LINK_3 = $row['LINK'];
            $THROWBACK_VIDEO_LINK_TITLE_3 = $row['LINK_TITLE'];
        }
        
        IF ($row['LINK_ORDER'] == "4")
        {
            $THROWBACK_VIDEO_LINK_4 = $row['LINK'];
            $THROWBACK_VIDEO_LINK_TITLE_4 = $row['LINK_TITLE'];
        }
        
        IF ($row['LINK_ORDER'] == "5")
        {
            $THROWBACK_VIDEO_LINK_5 = $row['LINK'];
            $THROWBACK_VIDEO_LINK_TITLE_5 = $row['LINK_TITLE'];
        }
        
        IF ($row['LINK_ORDER'] == "6")
        {
            $THROWBACK_VIDEO_LINK_6 = $row['LINK'];
            $THROWBACK_VIDEO_LINK_TITLE_6 = $row['LINK_TITLE'];
        }
        
        IF ($row['LINK_ORDER'] == "7")
        {
            $THROWBACK_VIDEO_LINK_7 = $row['LINK'];
            $THROWBACK_VIDEO_LINK_TITLE_7 = $row['LINK_TITLE'];
        }
        
        IF ($row['LINK_ORDER'] == "8")
        {
            $THROWBACK_VIDEO_LINK_8 = $row['LINK'];
            $THROWBACK_VIDEO_LINK_TITLE_8 = $row['LINK_TITLE'];
        }
        
        IF ($row['LINK_ORDER'] == "9")
        {
            $THROWBACK_VIDEO_LINK_9 = $row['LINK'];
            $THROWBACK_VIDEO_LINK_TITLE_9 = $row['LINK_TITLE'];
        }
        
        IF ($row['LINK_ORDER'] == "10")
        {
            $THROWBACK_VIDEO_LINK_10 = $row['LINK'];
            $THROWBACK_VIDEO_LINK_TITLE_10 = $row['LINK_TITLE'];
        }
    }
 
?>
<!DOCTYPE html>
<head>
<link rel="apple-touch-icon" href="/SmallLogo.png"/>
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>


<link rel="apple-touch-startup-image" href="images/splash/splash-screen.PNG" media="screen and (max-device-width: 320px)" /> 
<link rel="apple-touch-startup-image" href="images/splash/splash-screen@2x.png" media="(max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2)" /> 
<meta name="apple-mobile-web-app-capable" content="yes"/>
<title>C SPORTS DIRECT</title>


</head>

<body > 

<DIV id ="Header" class ="HeadColor">
    
    <DIV id ="logo"><span id="ULogo">C</span><span id ="SportsDirectLogo"> SPORTS DIRECT</span></DIV>
    
    <DIV id ="MenuIcon">
        <DIV id ="MenuLine1"></DIV>
        <DIV id ="MenuLine2"></DIV>
        <DIV id ="MenuLine3"></DIV>
    </DIV> 
    
</DIV>
    
<DIV id ="NavigationMenu" class ="hidden">
    <DIV id ="NavigationHead">Site Navigation</DIV>
    
    <DIV id ="MobileMain" class="NavigationLine"><a class ="NavLink" href ="MobileMain.php">Main Page</a></DIV>
    
    <DIV id ="Schools" class="NavigationLine"><span class ="NavLink" >Schools</span></DIV>
    
    <DIV id ="MobileHeisman" class="NavigationLine"><a class ="NavLink" href ="MobileHeisman.php">Heisman Winners</a></DIV>
    
    <DIV id ="MobileTVSchedule" class="NavigationLine"><a class ="NavLink" href ="MobileTVSchedule.php">TV Schedule</a></DIV>
    
    <DIV class ="NavBottomBorder"></DIV>
    
    <DIV class ="NavBackButtonContain">
        <DIV class ="NavBackButton">Back</DIV>
    </DIV>
    
</DIV>
    
<DIV id ="SchoolsNavigationMenu" class ="hidden">
    <DIV id ="NavigationHead">School Pages</DIV>
    
    <DIV class ="Scroller"></DIV>
    
     <DIV class ="ScrollText">
        
        <DIV class ="UpArrowScroll">&#8593;</DIV>
        
        <DIV class ="DownArrowScroll">&#8595;</DIV>
        
    </DIV>
    
    <?
    
    $QUERY_CONFERENCE = $db->prepare(" select * from decode_conference order by CONFERENCE_NAME ");

    $QUERY_CONFERENCE->execute();



    while ($row = $QUERY_CONFERENCE->fetch(PDO::FETCH_ASSOC))
    {
        
        echo "<DIV class = 'ConferenceHead'>".$row['CONFERENCE_NAME']."</DIV>";

        $CONFERENCE_CODE = $row['CONFERENCE_CODE'];

        $QUERY_TEAM = $db->prepare(" select schools.S_NAME as SCHOOL, schools.S_KEY from schools
        where schools.CONFERENCE = :conference_code 
        order by schools.S_NAME; ");

        $QUERY_TEAM->bindValue(':conference_code', $CONFERENCE_CODE);

        $QUERY_TEAM->execute();

        while ($row_school = $QUERY_TEAM->fetch(PDO::FETCH_ASSOC))
        {

            echo "<DIV id = '".$row_school['S_KEY']."' class = 'NavigationSchoolLine'><a class = 'NavLink' href = 'MobileSchoolProfile.php?S_KEY=".$row_school['S_KEY']."'>".$row_school['SCHOOL']."</a></DIV>";

        }

        echo "<DIV class ='NavBottomBorder'></DIV>";
    }
    
    ?>
    
    <DIV class ="NavBottomBorder"></DIV>
    
    <DIV class ="NavBackButtonSchoolsFixed">
        <DIV class ="NavBackButtonSchools">Back</DIV>
    </DIV>
    
</DIV>
    

    
    <DIV id ="MainContent">
    
    <DIV class ="ContentPushMainFront"></DIV>
    
    <DIV id ="GeneralSectionMenuFullView">
        
        <? MobileTopSection(); ?>
        
        <H2 class ="OtherHeadlinesHead">Other Headlines</H2>
        
        <? FrontTopLinksMobile(); ?>
        
    </DIV>
    
    <DIV id ="VideosSectionMenuFullView" class ="hidden">
    
        <H1 class ="SectionHeader">Videos</H1>
        
        <?
        
        //Front Video 1
        echo "<DIV class = 'YoutubeVideoContain'>";
            echo "<DIV class = 'YouTubeMargin'>";
                echo "<img id='".$VIDEO_LINK_1."' class='YoutubeImage' src='http://img.youtube.com/vi/".$VIDEO_LINK_1."/0.jpg' >";
            echo "</DIV>";
        echo "</DIV>";
        
        echo "<DIV class = 'YouTubeLabel'>".$VIDEO_LINK_TITLE_1."</DIV>";
        
        
        //Front Video 2
        echo "<DIV class = 'YoutubeVideoContain'>";
            echo "<DIV class = 'YouTubeMargin'>";
                echo "<img id='".$VIDEO_LINK_2."' class='YoutubeImage' src='http://img.youtube.com/vi/".$VIDEO_LINK_2."/0.jpg' >";
            echo "</DIV>";
        echo "</DIV>";
        
        echo "<DIV class = 'YouTubeLabel'>".$VIDEO_LINK_TITLE_2."</DIV>";
        
        
        //Front Video 3
        echo "<DIV class = 'YoutubeVideoContain'>";
            echo "<DIV class = 'YouTubeMargin'>";
                echo "<img id='".$VIDEO_LINK_3."' class='YoutubeImage' src='http://img.youtube.com/vi/".$VIDEO_LINK_3."/0.jpg' >";
            echo "</DIV>";
        echo "</DIV>";
        
        echo "<DIV class = 'YouTubeLabel'>".$VIDEO_LINK_TITLE_3."</DIV>";
        
        
        
        echo "<DIV class = 'YoutubeVideoContain'>";
            echo "<DIV class = 'YouTubeMargin'>";
                echo "<img id='".$VIDEO_LINK_4."' class='YoutubeImage' src='http://img.youtube.com/vi/".$VIDEO_LINK_4."/0.jpg' >";
            echo "</DIV>";
        echo "</DIV>";
        
        echo "<DIV class = 'YouTubeLabel'>".$VIDEO_LINK_TITLE_4."</DIV>";
        
        
        //Front Video 5
        echo "<DIV class = 'YoutubeVideoContain'>";
            echo "<DIV class = 'YouTubeMargin'>";
                echo "<img id='".$VIDEO_LINK_5."' class='YoutubeImage' src='http://img.youtube.com/vi/".$VIDEO_LINK_5."/0.jpg' >";
            echo "</DIV>";
        echo "</DIV>";
        
        echo "<DIV class = 'YouTubeLabel'>".$VIDEO_LINK_TITLE_5."</DIV>";
        
        
        //Front Video 6
        echo "<DIV class = 'YoutubeVideoContain'>";
            echo "<DIV class = 'YouTubeMargin'>";
                echo "<img id='".$VIDEO_LINK_6."' class='YoutubeImage' src='http://img.youtube.com/vi/".$VIDEO_LINK_6."/0.jpg' >";
            echo "</DIV>";
        echo "</DIV>";
        
        echo "<DIV class = 'YouTubeLabel'>".$VIDEO_LINK_TITLE_6."</DIV>";
        
        
        
        //Front Video 7
        echo "<DIV class = 'YoutubeVideoContain'>";
            echo "<DIV class = 'YouTubeMargin'>";
                echo "<img id='".$VIDEO_LINK_7."' class='YoutubeImage' src='http://img.youtube.com/vi/".$VIDEO_LINK_7."/0.jpg' >";
            echo "</DIV>";
        echo "</DIV>";
        
        echo "<DIV class = 'YouTubeLabel'>".$VIDEO_LINK_TITLE_7."</DIV>";
        
        
        
        echo "<DIV class = 'YoutubeVideoContain'>";
            echo "<DIV class = 'YouTubeMargin'>";
                echo "<img id='".$VIDEO_LINK_8."' class='YoutubeImage' src='http://img.youtube.com/vi/".$VIDEO_LINK_8."/0.jpg' >";
            echo "</DIV>";
        echo "</DIV>";
        
        echo "<DIV class = 'YouTubeLabel'>".$VIDEO_LINK_TITLE_8."</DIV>";
        
        
        
        echo "<DIV class = 'YoutubeVideoContain'>";
            echo "<DIV class = 'YouTubeMargin'>";
                echo "<img id='".$VIDEO_LINK_9."' class='YoutubeImage' src='http://img.youtube.com/vi/".$VIDEO_LINK_9."/0.jpg' >";
            echo "</DIV>";
        echo "</DIV>";
        
        echo "<DIV class = 'YouTubeLabel'>".$VIDEO_LINK_TITLE_9."</DIV>";
        
        
        
        echo "<DIV class = 'YoutubeVideoContain'>";
            echo "<DIV class = 'YouTubeMargin'>";
                echo "<img id='".$VIDEO_LINK_10."' class='YoutubeImage' src='http://img.youtube.com/vi/".$VIDEO_LINK_10."/0.jpg' >";
            echo "</DIV>";
        echo "</DIV>";
        
        echo "<DIV class = 'YouTubeLabel'>".$VIDEO_LINK_TITLE_10."</DIV>";
        
        ?>   
        
    </DIV>
    
    
    
    
    
    
    <DIV id ="TwitterSectionMenuFullView"  class ="hidden" >
    
        <H1 class ="SectionHeader">Twitter</H1>
        
                
                <DIV id ="TwitterWidget"><a width ="300" class="twitter-timeline" href="https://twitter.com/Usportsdirect/usportsdirect" data-widget-id="371791603934842880">Tweets from @Usportsdirect/usportsdirect</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

                </DIV>
                
        
    </DIV>
    
    
    <DIV id ="ThrowbackSectionMenuFullView" class ="hidden">
    
        <H1 class ="SectionHeader">Throwback Videos</H1>
        
        <?
        
        //Front Video 1
        echo "<DIV class = 'YoutubeVideoContain'>";
            echo "<DIV class = 'YouTubeMargin'>";
                echo "<img id='".$THROWBACK_VIDEO_LINK_1."' class='YoutubeImage' src='http://img.youtube.com/vi/".$THROWBACK_VIDEO_LINK_1."/0.jpg' >";
            echo "</DIV>";
        echo "</DIV>";
        
        echo "<DIV class = 'YouTubeLabel'>".$THROWBACK_VIDEO_LINK_TITLE_1."</DIV>";
        
        
        //Front Video 2
        echo "<DIV class = 'YoutubeVideoContain'>";
            echo "<DIV class = 'YouTubeMargin'>";
                echo "<img id='".$THROWBACK_VIDEO_LINK_2."' class='YoutubeImage' src='http://img.youtube.com/vi/".$THROWBACK_VIDEO_LINK_2."/0.jpg' >";
            echo "</DIV>";
        echo "</DIV>";
        
        echo "<DIV class = 'YouTubeLabel'>".$THROWBACK_VIDEO_LINK_TITLE_2."</DIV>";
        
        
        //Front Video 3
        echo "<DIV class = 'YoutubeVideoContain'>";
            echo "<DIV class = 'YouTubeMargin'>";
                echo "<img id='".$THROWBACK_VIDEO_LINK_3."' class='YoutubeImage' src='http://img.youtube.com/vi/".$THROWBACK_VIDEO_LINK_3."/0.jpg' >";
            echo "</DIV>";
        echo "</DIV>";
        
        echo "<DIV class = 'YouTubeLabel'>".$THROWBACK_VIDEO_LINK_TITLE_3."</DIV>";
        
        
        
        echo "<DIV class = 'YoutubeVideoContain'>";
            echo "<DIV class = 'YouTubeMargin'>";
                echo "<img id='".$THROWBACK_VIDEO_LINK_4."' class='YoutubeImage' src='http://img.youtube.com/vi/".$THROWBACK_VIDEO_LINK_4."/0.jpg' >";
            echo "</DIV>";
        echo "</DIV>";
        
        echo "<DIV class = 'YouTubeLabel'>".$THROWBACK_VIDEO_LINK_TITLE_4."</DIV>";
        
        
        //Front Video 5
        echo "<DIV class = 'YoutubeVideoContain'>";
            echo "<DIV class = 'YouTubeMargin'>";
                echo "<img id='".$THROWBACK_VIDEO_LINK_5."' class='YoutubeImage' src='http://img.youtube.com/vi/".$THROWBACK_VIDEO_LINK_5."/0.jpg' >";
            echo "</DIV>";
        echo "</DIV>";
        
        echo "<DIV class = 'YouTubeLabel'>".$THROWBACK_VIDEO_LINK_TITLE_5."</DIV>";
        
        
        //Front Video 6
        echo "<DIV class = 'YoutubeVideoContain'>";
            echo "<DIV class = 'YouTubeMargin'>";
                echo "<img id='".$THROWBACK_VIDEO_LINK_6."' class='YoutubeImage' src='http://img.youtube.com/vi/".$THROWBACK_VIDEO_LINK_6."/0.jpg' >";
            echo "</DIV>";
        echo "</DIV>";
        
        echo "<DIV class = 'YouTubeLabel'>".$THROWBACK_VIDEO_LINK_TITLE_6."</DIV>";
        
        
        
        //Front Video 7
        echo "<DIV class = 'YoutubeVideoContain'>";
            echo "<DIV class = 'YouTubeMargin'>";
                echo "<img id='".$THROWBACK_VIDEO_LINK_7."' class='YoutubeImage' src='http://img.youtube.com/vi/".$THROWBACK_VIDEO_LINK_7."/0.jpg' >";
            echo "</DIV>";
        echo "</DIV>";
        
        echo "<DIV class = 'YouTubeLabel'>".$THROWBACK_VIDEO_LINK_TITLE_7."</DIV>";
        
        
        
        echo "<DIV class = 'YoutubeVideoContain'>";
            echo "<DIV class = 'YouTubeMargin'>";
                echo "<img id='".$THROWBACK_VIDEO_LINK_8."' class='YoutubeImage' src='http://img.youtube.com/vi/".$THROWBACK_VIDEO_LINK_8."/0.jpg' >";
            echo "</DIV>";
        echo "</DIV>";
        
        echo "<DIV class = 'YouTubeLabel'>".$THROWBACK_VIDEO_LINK_TITLE_8."</DIV>";
        
        
        
        echo "<DIV class = 'YoutubeVideoContain'>";
            echo "<DIV class = 'YouTubeMargin'>";
                echo "<img id='".$THROWBACK_VIDEO_LINK_9."' class='YoutubeImage' src='http://img.youtube.com/vi/".$THROWBACK_VIDEO_LINK_9."/0.jpg' >";
            echo "</DIV>";
        echo "</DIV>";
        
        echo "<DIV class = 'YouTubeLabel'>".$THROWBACK_VIDEO_LINK_TITLE_9."</DIV>";
        
        
        
        echo "<DIV class = 'YoutubeVideoContain'>";
            echo "<DIV class = 'YouTubeMargin'>";
                echo "<img id='".$THROWBACK_VIDEO_LINK_10."' class='YoutubeImage' src='http://img.youtube.com/vi/".$THROWBACK_VIDEO_LINK_10."/0.jpg' >";
            echo "</DIV>";
        echo "</DIV>";
        
        echo "<DIV class = 'YouTubeLabel'>".$THROWBACK_VIDEO_LINK_TITLE_10."</DIV>";
        
        ?>   
        
    </DIV>
    
    <DIV id = "GeneralSectionMenu" class ="BMButtonSelected">
        <DIV class ="BottomMenuText">General Info</DIV>
        <DIV id ="GeneralSectionMenuTop" class ="SelectedBMTopSection"></DIV>
        <DIV id ="GeneralSectionMenuBottom"  class ="SelectedBMBottomSection"></DIV>
    </DIV>
    
    <DIV class ="BottomSeperator"></DIV>
    
    <DIV id = "VideosSectionMenu" class ="BMButtonNotSelected">
        <DIV class ="BottomMenuText">Videos</DIV>
        <DIV id ="VideosSectionMenuTop" class ="NotSelectedBMTopSection"></DIV>
        <DIV id ="VideosSectionMenuBottom"  class ="NotSelectedBMBottomSection"></DIV>
    </DIV>
    
    <DIV class ="BottomSeperator"></DIV>
    
    <DIV id = "TwitterSectionMenu" class ="BMButtonNotSelected">
        <DIV class ="BottomMenuText">Twitter</DIV>
        <DIV id ="TwitterSectionMenuTop" class ="NotSelectedBMTopSection"></DIV>
        <DIV id ="TwitterSectionMenuBottom"  class ="NotSelectedBMBottomSection"></DIV>
    </DIV>
    
    <DIV class ="BottomSeperator"></DIV>
    
    <DIV id = "ThrowbackSectionMenu" class ="BMButtonNotSelected">
        <DIV class ="BottomMenuText">Throwback Videos</DIV>
        <DIV id ="ThrowbackSectionMenuTop" class ="NotSelectedBMTopSection"></DIV>
        <DIV id ="ThrowbackSectionMenuBottom"  class ="NotSelectedBMBottomSection"></DIV>
    </DIV>
    
    </DIV>
</body>

<link href="Mobile_CSS/MobileMain.css" rel="stylesheet" type="text/css">
<link href="Mobile_CSS/Front.css" rel="stylesheet" type="text/css">

 <link href='http://fonts.googleapis.com/css?family=Coda+Caption:800' rel='stylesheet' type='text/css'>
    
    <script type="text/javascript" src="JQuery.js"></script>
    <script type="text/javascript" src="MobileJavascript/MobileFront.js"></script>
    <script type="text/javascript" src="MobileJavascript/Main.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>
    <script src='http://connect.facebook.net/en_US/all.js'></script>
</html>
