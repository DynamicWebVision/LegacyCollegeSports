<?
ob_start(); 
session_start();
?>
<!DOCTYPE html>
<?
    require_once('Functions.php');
    Get_DB_Connection();
    
    
 
?>
<!DOCTYPE html>
<head>
<link rel="apple-touch-icon" href="/SmallLogo.png"/>
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
<script src='http://connect.facebook.net/en_US/all.js'></script>

<link rel="apple-touch-startup-image" href="images/splash/splash-screen.PNG" media="screen and (max-device-width: 320px)" /> 
<link rel="apple-touch-startup-image" href="images/splash/splash-screen@2x.png" media="(max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2)" /> 
<meta name="apple-mobile-web-app-capable" content="yes"/>
<title>C SPORTS DIRECT</title>

<link href="Mobile_CSS/MobileMain.css" rel="stylesheet" type="text/css">
<link href="Mobile_CSS/HeismanWinners.css" rel="stylesheet" type="text/css">

 <link href='http://fonts.googleapis.com/css?family=Coda+Caption:800' rel='stylesheet' type='text/css'>
    
    <script type="text/javascript" src="JQuery.js"></script>
    <script type="text/javascript" src="MobileJavascript/Main.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>
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
    
    <DIV class ="ContentPushMain"></DIV>
    
    <H1 class ="PageHeadH">Heisman Trophy Winners</H1>
    
    <DIV class ="HeismanSection">
                
                <DIV class ="SectionHeadHeisman">2010's</DIV>
                
                <?
                ///2010's

                $QUERY_HEISMAN_WINNERS = $db->prepare("select HEISMAN_YEAR , PLAYER_NAME , heisman.S_KEY as SCHOOL_KEY , YOUTUBE_LINK , FREE_FORM_SCHOOL , POSITION  , schools.S_NAME as DB_SCHOOL
                from heisman 
                left join schools on heisman.S_KEY = schools.S_KEY 
                where substring(HEISMAN_YEAR, 3, 1) = 1 order by HEISMAN_YEAR desc;");

                $QUERY_HEISMAN_WINNERS->execute(); 

                while ($row = $QUERY_HEISMAN_WINNERS->fetch(PDO::FETCH_ASSOC))
                {
                    //2010's
                    echo "<DIV class = 'HeismanLine'>";

                        echo "<DIV class = 'HeismanYear'>".$row['HEISMAN_YEAR']."</DIV>";
                        
                        echo "<DIV class = 'YoutubeVideoContain'>";
                            echo "<DIV class = 'YouTubeMargin'>";
                                echo "<img id='".$row['YOUTUBE_LINK']."' class='HeismanYoutube' src='http://img.youtube.com/vi/".$row['YOUTUBE_LINK']."/0.jpg' >";
                            echo "</DIV>";
                        echo "</DIV>";
                        
                        echo "<DIV class = 'PlayerInfoContain'>";
                            
                            echo "<DIV class = 'PlayerInfoMargin'> <DIV class = 'PlayerInfoAbsolute'>";
                        
                                echo "<DIV class = 'PlayerName'>".$row['PLAYER_NAME']." - ".$row['POSITION']."</DIV>";

                                IF ($row['SCHOOL_KEY'] != "-1")
                                {
                                    echo "<DIV class = 'SchoolLine'>".$row['DB_SCHOOL']."</DIV>";
                                }
                                ELSE
                                {
                                    echo "<DIV class = 'SchoolLine'>".$row['FREE_FORM_SCHOOL']."</DIV>";
                                }
                            
                            echo "</DIV></DIV>";
                            
                        echo "</DIV>";
                        
                    echo "</DIV>";

                }


                ?>
            
            </DIV>
            
            
            
            <DIV class ="HeismanSection">
                
                <DIV class ="SectionHeadHeisman">2000's</DIV>
                
                <?
                ///2000's

                $QUERY_HEISMAN_WINNERS = $db->prepare("select HEISMAN_YEAR , PLAYER_NAME , heisman.S_KEY as SCHOOL_KEY, YOUTUBE_LINK , FREE_FORM_SCHOOL , POSITION  , schools.S_NAME as DB_SCHOOL , school_colors.U_COLOR
                    from heisman 
                    left join schools on heisman.S_KEY = schools.S_KEY 
                    left join school_colors on heisman.S_KEY = school_colors.S_KEY
                    where substring(HEISMAN_YEAR, 3, 1) = 0 order by HEISMAN_YEAR desc;");

                $QUERY_HEISMAN_WINNERS->execute(); 

                while ($row = $QUERY_HEISMAN_WINNERS->fetch(PDO::FETCH_ASSOC))
                {
                    //2010's
                    echo "<DIV class = 'HeismanLine'>";

                        echo "<DIV class = 'HeismanYear'>".$row['HEISMAN_YEAR']."</DIV>";
                        
                        echo "<DIV class = 'YoutubeVideoContain'>";
                            echo "<DIV class = 'YouTubeMargin'>";
                                echo "<img id='".$row['YOUTUBE_LINK']."' class='HeismanYoutube' src='http://img.youtube.com/vi/".$row['YOUTUBE_LINK']."/0.jpg' >";
                            echo "</DIV>";
                        echo "</DIV>";
                        
                        echo "<DIV class = 'PlayerInfoContain'>";
                            
                            echo "<DIV class = 'PlayerInfoMargin'> <DIV class = 'PlayerInfoAbsolute'>";
                        
                                echo "<DIV class = 'PlayerName'>".$row['PLAYER_NAME']." - ".$row['POSITION']."</DIV>";

                                IF ($row['SCHOOL_KEY'] != "-1")
                                {
                                    echo "<DIV class = 'SchoolLine'>".$row['DB_SCHOOL']."</DIV>";
                                }
                                ELSE
                                {
                                    echo "<DIV class = 'SchoolLine'>".$row['FREE_FORM_SCHOOL']."</DIV>";
                                }
                            
                            echo "</DIV></DIV>";
                            
                        echo "</DIV>";
                        
                    echo "</DIV>";

                }


                ?>
            
            </DIV>
            
            
            <DIV class ="HeismanSection">
                
                <DIV class ="SectionHeadHeisman">1990's</DIV>
                
                <?
                ///1990's

                $QUERY_HEISMAN_WINNERS = $db->prepare("select HEISMAN_YEAR , PLAYER_NAME , heisman.S_KEY as SCHOOL_KEY, YOUTUBE_LINK , FREE_FORM_SCHOOL , POSITION  , schools.S_NAME as DB_SCHOOL , school_colors.U_COLOR
                    from heisman 
                    left join schools on heisman.S_KEY = schools.S_KEY 
                    left join school_colors on heisman.S_KEY = school_colors.S_KEY
                    where substring(HEISMAN_YEAR, 3, 1) = 9 order by HEISMAN_YEAR desc;");

                $QUERY_HEISMAN_WINNERS->execute(); 

                while ($row = $QUERY_HEISMAN_WINNERS->fetch(PDO::FETCH_ASSOC))
                {
                    //2010's
                    echo "<DIV class = 'HeismanLine'>";

                        echo "<DIV class = 'HeismanYear'>".$row['HEISMAN_YEAR']."</DIV>";
                        
                        echo "<DIV class = 'YoutubeVideoContain'>";
                            echo "<DIV class = 'YouTubeMargin'>";
                                echo "<img id='".$row['YOUTUBE_LINK']."' class='HeismanYoutube' src='http://img.youtube.com/vi/".$row['YOUTUBE_LINK']."/0.jpg' >";
                            echo "</DIV>";
                        echo "</DIV>";
                        
                        echo "<DIV class = 'PlayerInfoContain'>";
                            
                            echo "<DIV class = 'PlayerInfoMargin'> <DIV class = 'PlayerInfoAbsolute'>";
                        
                                echo "<DIV class = 'PlayerName'>".$row['PLAYER_NAME']." - ".$row['POSITION']."</DIV>";

                                IF ($row['SCHOOL_KEY'] != "-1")
                                {
                                    echo "<DIV class = 'SchoolLine'>".$row['DB_SCHOOL']."</DIV>";
                                }
                                ELSE
                                {
                                    echo "<DIV class = 'SchoolLine'>".$row['FREE_FORM_SCHOOL']."</DIV>";
                                }
                            
                            echo "</DIV></DIV>";
                            
                        echo "</DIV>";
                        
                    echo "</DIV>";

                }


                ?>
            
            </DIV>
            
            
            
            <DIV class ="HeismanSection">
                
                <DIV class ="SectionHeadHeisman">1980's</DIV>
                
                <?
                ///1980's

                $QUERY_HEISMAN_WINNERS = $db->prepare("select HEISMAN_YEAR , PLAYER_NAME , heisman.S_KEY as SCHOOL_KEY, YOUTUBE_LINK , FREE_FORM_SCHOOL , POSITION  , schools.S_NAME as DB_SCHOOL , school_colors.U_COLOR
                    from heisman 
                    left join schools on heisman.S_KEY = schools.S_KEY 
                    left join school_colors on heisman.S_KEY = school_colors.S_KEY
                    where substring(HEISMAN_YEAR, 3, 1) = 8 order by HEISMAN_YEAR desc;");

                $QUERY_HEISMAN_WINNERS->execute(); 

                while ($row = $QUERY_HEISMAN_WINNERS->fetch(PDO::FETCH_ASSOC))
                {
                    //2010's
                    echo "<DIV class = 'HeismanLine'>";

                        echo "<DIV class = 'HeismanYear'>".$row['HEISMAN_YEAR']."</DIV>";
                        
                        echo "<DIV class = 'YoutubeVideoContain'>";
                            echo "<DIV class = 'YouTubeMargin'>";
                                echo "<img id='".$row['YOUTUBE_LINK']."' class='HeismanYoutube' src='http://img.youtube.com/vi/".$row['YOUTUBE_LINK']."/0.jpg' >";
                            echo "</DIV>";
                        echo "</DIV>";
                        
                        echo "<DIV class = 'PlayerInfoContain'>";
                            
                            echo "<DIV class = 'PlayerInfoMargin'> <DIV class = 'PlayerInfoAbsolute'>";
                        
                                echo "<DIV class = 'PlayerName'>".$row['PLAYER_NAME']." - ".$row['POSITION']."</DIV>";

                                IF ($row['SCHOOL_KEY'] != "-1")
                                {
                                    echo "<DIV class = 'SchoolLine'>".$row['DB_SCHOOL']."</DIV>";
                                }
                                ELSE
                                {
                                    echo "<DIV class = 'SchoolLine'>".$row['FREE_FORM_SCHOOL']."</DIV>";
                                }
                            
                            echo "</DIV></DIV>";
                            
                        echo "</DIV>";
                        
                    echo "</DIV>";

                }


                ?>
            
            </DIV>
            
            
            <DIV class ="HeismanSection">
                
                <DIV class ="SectionHeadHeisman">1970's</DIV>
                
                <?
                ///1970's

                $QUERY_HEISMAN_WINNERS = $db->prepare("select HEISMAN_YEAR , PLAYER_NAME , heisman.S_KEY as SCHOOL_KEY, YOUTUBE_LINK , FREE_FORM_SCHOOL , POSITION  , schools.S_NAME as DB_SCHOOL , school_colors.U_COLOR
                    from heisman 
                    left join schools on heisman.S_KEY = schools.S_KEY 
                    left join school_colors on heisman.S_KEY = school_colors.S_KEY
                    where substring(HEISMAN_YEAR, 3, 1) = 7  order by HEISMAN_YEAR desc;");

                $QUERY_HEISMAN_WINNERS->execute(); 

                while ($row = $QUERY_HEISMAN_WINNERS->fetch(PDO::FETCH_ASSOC))
                {
                    //2010's
                    echo "<DIV class = 'HeismanLine'>";

                        echo "<DIV class = 'HeismanYear'>".$row['HEISMAN_YEAR']."</DIV>";
                        
                        echo "<DIV class = 'YoutubeVideoContain'>";
                            echo "<DIV class = 'YouTubeMargin'>";
                                echo "<img id='".$row['YOUTUBE_LINK']."' class='HeismanYoutube' src='http://img.youtube.com/vi/".$row['YOUTUBE_LINK']."/0.jpg' >";
                            echo "</DIV>";
                        echo "</DIV>";
                        
                        echo "<DIV class = 'PlayerInfoContain'>";
                            
                            echo "<DIV class = 'PlayerInfoMargin'> <DIV class = 'PlayerInfoAbsolute'>";
                        
                                echo "<DIV class = 'PlayerName'>".$row['PLAYER_NAME']." - ".$row['POSITION']."</DIV>";

                                IF ($row['SCHOOL_KEY'] != "-1")
                                {
                                    echo "<DIV class = 'SchoolLine'>".$row['DB_SCHOOL']."</DIV>";
                                }
                                ELSE
                                {
                                    echo "<DIV class = 'SchoolLine'>".$row['FREE_FORM_SCHOOL']."</DIV>";
                                }
                            
                            echo "</DIV></DIV>";
                            
                        echo "</DIV>";
                        
                    echo "</DIV>";

                }


                ?>
            
            </DIV>
            
            <DIV class ="HeismanSection">
                
                <DIV class ="SectionHeadHeisman">1960's</DIV>
                
                <?
                ///1960's

                $QUERY_HEISMAN_WINNERS = $db->prepare("select HEISMAN_YEAR , PLAYER_NAME , heisman.S_KEY as SCHOOL_KEY, YOUTUBE_LINK , FREE_FORM_SCHOOL , POSITION  , schools.S_NAME as DB_SCHOOL , school_colors.U_COLOR
                    from heisman 
                    left join schools on heisman.S_KEY = schools.S_KEY 
                    left join school_colors on heisman.S_KEY = school_colors.S_KEY
                    where substring(HEISMAN_YEAR, 3, 1) = 6  order by HEISMAN_YEAR desc;");

                $QUERY_HEISMAN_WINNERS->execute(); 

                while ($row = $QUERY_HEISMAN_WINNERS->fetch(PDO::FETCH_ASSOC))
                {
                    //2010's
                    echo "<DIV class = 'HeismanLine'>";

                        echo "<DIV class = 'HeismanYear'>".$row['HEISMAN_YEAR']."</DIV>";
                        
                        echo "<DIV class = 'YoutubeVideoContain'>";
                            echo "<DIV class = 'YouTubeMargin'>";
                                echo "<img id='".$row['YOUTUBE_LINK']."' class='HeismanYoutube' src='http://img.youtube.com/vi/".$row['YOUTUBE_LINK']."/0.jpg' >";
                            echo "</DIV>";
                        echo "</DIV>";
                        
                        echo "<DIV class = 'PlayerInfoContain'>";
                            
                            echo "<DIV class = 'PlayerInfoMargin'> <DIV class = 'PlayerInfoAbsolute'>";
                        
                                echo "<DIV class = 'PlayerName'>".$row['PLAYER_NAME']." - ".$row['POSITION']."</DIV>";

                                IF ($row['SCHOOL_KEY'] != "-1")
                                {
                                    echo "<DIV class = 'SchoolLine'>".$row['DB_SCHOOL']."</DIV>";
                                }
                                ELSE
                                {
                                    echo "<DIV class = 'SchoolLine'>".$row['FREE_FORM_SCHOOL']."</DIV>";
                                }
                            
                            echo "</DIV></DIV>";
                            
                        echo "</DIV>";
                        
                    echo "</DIV>";

                }


                ?>
            
            </DIV>
            
                        
            <DIV class ="HeismanSection">
                
                <DIV class ="SectionHeadHeisman">1950's</DIV>
                
                <?
                ///1960's

                $QUERY_HEISMAN_WINNERS = $db->prepare("select HEISMAN_YEAR , PLAYER_NAME , heisman.S_KEY as SCHOOL_KEY, YOUTUBE_LINK , FREE_FORM_SCHOOL , POSITION  , schools.S_NAME as DB_SCHOOL , school_colors.U_COLOR
                    from heisman 
                    left join schools on heisman.S_KEY = schools.S_KEY 
                    left join school_colors on heisman.S_KEY = school_colors.S_KEY
                    where substring(HEISMAN_YEAR, 3, 1) = 5  order by HEISMAN_YEAR desc;");

                $QUERY_HEISMAN_WINNERS->execute(); 

                while ($row = $QUERY_HEISMAN_WINNERS->fetch(PDO::FETCH_ASSOC))
                {
                    //2010's
                    echo "<DIV class = 'HeismanLine'>";

                        echo "<DIV class = 'HeismanYear'>".$row['HEISMAN_YEAR']."</DIV>";
                        
                        echo "<DIV class = 'YoutubeVideoContain'>";
                            echo "<DIV class = 'YouTubeMargin'>";
                                echo "<img id='".$row['YOUTUBE_LINK']."' class='HeismanYoutube' src='http://img.youtube.com/vi/".$row['YOUTUBE_LINK']."/0.jpg' >";
                            echo "</DIV>";
                        echo "</DIV>";
                        
                        echo "<DIV class = 'PlayerInfoContain'>";
                            
                            echo "<DIV class = 'PlayerInfoMargin'> <DIV class = 'PlayerInfoAbsolute'>";
                        
                                echo "<DIV class = 'PlayerName'>".$row['PLAYER_NAME']." - ".$row['POSITION']."</DIV>";

                                IF ($row['SCHOOL_KEY'] != "-1")
                                {
                                    echo "<DIV class = 'SchoolLine'>".$row['DB_SCHOOL']."</DIV>";
                                }
                                ELSE
                                {
                                    echo "<DIV class = 'SchoolLine'>".$row['FREE_FORM_SCHOOL']."</DIV>";
                                }
                            
                            echo "</DIV></DIV>";
                            
                        echo "</DIV>";
                        
                    echo "</DIV>";

                }


                ?>
            
            </DIV>
            
            
            <DIV class ="HeismanSection">
                
                <DIV class ="SectionHeadHeisman">1940's</DIV>
                
                <?
                ///1960's

                $QUERY_HEISMAN_WINNERS = $db->prepare("select HEISMAN_YEAR , PLAYER_NAME , heisman.S_KEY as SCHOOL_KEY, YOUTUBE_LINK , FREE_FORM_SCHOOL , POSITION  , schools.S_NAME as DB_SCHOOL , school_colors.U_COLOR
                    from heisman 
                    left join schools on heisman.S_KEY = schools.S_KEY 
                    left join school_colors on heisman.S_KEY = school_colors.S_KEY
                    where substring(HEISMAN_YEAR, 3, 1) = 4  order by HEISMAN_YEAR desc;");

                $QUERY_HEISMAN_WINNERS->execute(); 

                while ($row = $QUERY_HEISMAN_WINNERS->fetch(PDO::FETCH_ASSOC))
                {
                    //2010's
                    echo "<DIV class = 'HeismanLine'>";

                        echo "<DIV class = 'HeismanYear'>".$row['HEISMAN_YEAR']."</DIV>";
                        
                        echo "<DIV class = 'YoutubeVideoContain'>";
                            echo "<DIV class = 'YouTubeMargin'>";
                                echo "<img id='".$row['YOUTUBE_LINK']."' class='HeismanYoutube' src='http://img.youtube.com/vi/".$row['YOUTUBE_LINK']."/0.jpg' >";
                            echo "</DIV>";
                        echo "</DIV>";
                        
                        echo "<DIV class = 'PlayerInfoContain'>";
                            
                            echo "<DIV class = 'PlayerInfoMargin'> <DIV class = 'PlayerInfoAbsolute'>";
                        
                                echo "<DIV class = 'PlayerName'>".$row['PLAYER_NAME']." - ".$row['POSITION']."</DIV>";

                                IF ($row['SCHOOL_KEY'] != "-1")
                                {
                                    echo "<DIV class = 'SchoolLine'>".$row['DB_SCHOOL']."</DIV>";
                                }
                                ELSE
                                {
                                    echo "<DIV class = 'SchoolLine'>".$row['FREE_FORM_SCHOOL']."</DIV>";
                                }
                            
                            echo "</DIV></DIV>";
                            
                        echo "</DIV>";
                        
                    echo "</DIV>";

                }


                ?>
            
            </DIV>
            
            
            
            <DIV class ="HeismanSection">
                
                <DIV class ="SectionHeadHeisman">1930's</DIV>
                
                <?
                ///1960's

                $QUERY_HEISMAN_WINNERS = $db->prepare("select HEISMAN_YEAR , PLAYER_NAME , heisman.S_KEY as SCHOOL_KEY, YOUTUBE_LINK , FREE_FORM_SCHOOL , POSITION  , schools.S_NAME as DB_SCHOOL , school_colors.U_COLOR
                    from heisman 
                    left join schools on heisman.S_KEY = schools.S_KEY 
                    left join school_colors on heisman.S_KEY = school_colors.S_KEY
                    where substring(HEISMAN_YEAR, 3, 1) = 3  order by HEISMAN_YEAR desc;");

                $QUERY_HEISMAN_WINNERS->execute(); 

                while ($row = $QUERY_HEISMAN_WINNERS->fetch(PDO::FETCH_ASSOC))
                {
                    //2010's
                    echo "<DIV class = 'HeismanLine'>";

                        echo "<DIV class = 'HeismanYear'>".$row['HEISMAN_YEAR']."</DIV>";
                        
                        echo "<DIV class = 'YoutubeVideoContain'>";
                            echo "<DIV class = 'YouTubeMargin'>";
                                echo "<img id='".$row['YOUTUBE_LINK']."' class='HeismanYoutube' src='http://img.youtube.com/vi/".$row['YOUTUBE_LINK']."/0.jpg' >";
                            echo "</DIV>";
                        echo "</DIV>";
                        
                        echo "<DIV class = 'PlayerInfoContain'>";
                            
                            echo "<DIV class = 'PlayerInfoMargin'> <DIV class = 'PlayerInfoAbsolute'>";
                        
                                echo "<DIV class = 'PlayerName'>".$row['PLAYER_NAME']." - ".$row['POSITION']."</DIV>";

                                IF ($row['SCHOOL_KEY'] != "-1")
                                {
                                    echo "<DIV class = 'SchoolLine'>".$row['DB_SCHOOL']."</DIV>";
                                }
                                ELSE
                                {
                                    echo "<DIV class = 'SchoolLine'>".$row['FREE_FORM_SCHOOL']."</DIV>";
                                }
                            
                            echo "</DIV></DIV>";
                            
                        echo "</DIV>";
                        
                    echo "</DIV>";

                }


                ?>
            
        </DIV>
    
    </DIV>
</body>


</html>
