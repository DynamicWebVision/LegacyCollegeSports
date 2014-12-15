<?
ob_start(); 
session_start();
?>
<!DOCTYPE html>
<?
    require_once('Functions.php');
    Get_DB_Connection();
    
    $S_KEY = $_GET['S_KEY'];
    
    $QUERY_SCHOOL = $db->prepare("SELECT DISTINCT schools.S_NAME,
            
                            school_bars.BAR_1, school_bars.BAR_NAME_1, school_bars.BAR_2, school_bars.BAR_NAME_2, school_bars.BAR_3, school_bars.BAR_NAME_3,

                            school_basketball_recr.B_RECR_1, school_basketball_recr.B_RECR_NAME_1,school_basketball_recr.B_RECR_2, school_basketball_recr.B_RECR_NAME_2,
                            school_basketball_recr.B_RECR_3, school_basketball_recr.B_RECR_NAME_3, school_basketball_recr.B_RECR_4, school_basketball_recr.B_RECR_NAME_4,
                            school_basketball_recr.B_RECR_5, school_basketball_recr.B_RECR_NAME_5,

                            school_blogs.BLOG_1, school_blogs.BLOG_NAME_1, school_blogs.BLOG_2, school_blogs.BLOG_NAME_2, school_blogs.BLOG_3, school_blogs.BLOG_NAME_3,
                            school_blogs.BLOG_4, school_blogs.BLOG_NAME_4,school_blogs.BLOG_5, school_blogs.BLOG_NAME_5,

                            school_football_recr.F_RECR_1, school_football_recr.F_RECR_NAME_1, school_football_recr.F_RECR_2, school_football_recr.F_RECR_NAME_2, 
                            school_football_recr.F_RECR_3, school_football_recr.F_RECR_NAME_3, school_football_recr.F_RECR_4, school_football_recr.F_RECR_NAME_4, 
                            school_football_recr.F_RECR_5, school_football_recr.F_RECR_NAME_5, school_football.ALL_TIME_WINS as FOOTBALL_ALL_TIME_WINS 
                            , 
                            
                            school_football.ALL_TIME_LOSSES as FOOTBALL_ALL_TIME_LOSSES, school_football.RECORD_2012 , school_football.POST_SEASON_2012 , school_football.RECORD_2012 , 

                            school_link_1.RADIO_LINK, school_link_1.RADIO_LINK_NAME, school_link_1.OFFICIAL_ATHLETIC_SITE, school_link_1.OFFICIAL_ATHLETIC_NAME, 
                            school_link_1.FOOTBALL_ROSTER, school_link_1.FOOTBALL_ROSTER_NAME, school_link_1.FOOTBALL_SCHEDULE, school_link_1.FOOTBALL_SCHEDULE_NAME, 
                            school_link_1.BASKETBALL_ROSTER, school_link_1.BASKETBALL_ROSTER_NAME, school_link_1.BASKETBALL_ROSTER, school_link_1.BASKETBALL_ROSTER_NAME, 
                            school_link_1.BASKETBALL_SCHEDULE_LINK,

                            school_message_boards.MESSAGE_BOARD_1, school_message_boards.MESSAGE_BOARD_NAME_1, school_message_boards.MESSAGE_BOARD_2, 
                            school_message_boards.MESSAGE_BOARD_NAME_2, school_message_boards.MESSAGE_BOARD_3, school_message_boards.MESSAGE_BOARD_NAME_3, 
                            school_message_boards.MESSAGE_BOARD_4, school_message_boards.MESSAGE_BOARD_NAME_4, school_message_boards.MESSAGE_BOARD_5, 
                            school_message_boards.MESSAGE_BOARD_NAME_5,

                            school_restaurants.RESTAURANT_1, school_restaurants.RESTAURANT_NAME_1, school_restaurants.RESTAURANT_2, school_restaurants.RESTAURANT_NAME_2, 
                            school_restaurants.RESTAURANT_3, school_restaurants.RESTAURANT_NAME_3,

                            school_traditions.S_KEY, school_traditions.TRADITION_1, school_traditions.TRADITION_NAME_1, school_traditions.TRADITION_2, school_traditions.TRADITION_NAME_2, 
                            school_traditions.TRADITION_3, school_traditions.TRADITION_NAME_3, school_traditions.TRADITION_4, school_traditions.TRADITION_NAME_4, 
                            school_traditions.TRADITION_5, school_traditions.TRADITION_NAME_5,
                            
                            school_colors.U_COLOR, school_colors.SPORTS_DIRECT_COLOR , school_colors.TOP_BAR , school_colors.MENU_BAR_BACKGROUND, school_colors.MENU_BAR_TEXT,
                            school_colors.LIGHT_TONE , school_colors.DARK_TONE , school_colors.NAV_COLOR , 
                            
                            school_general_info.HOME_CITY, school_general_info.STATE_KEY , school_general_info.STUDENT_POPULATION , school_general_info.MONETARY_ENDOWMENT, 
                            
                            school_basketball.ALL_TIME_WINS, school_basketball.ALL_TIME_LOSSES, school_basketball.NCAA_TOURNAMENT_APPEARENCES, school_basketball.NCAA_SWEET_SIXTEEN_APPEARENCES, school_basketball.NCAA_ELITE_EIGHT_APPEARENCES, 
                            school_basketball.NCAA_FINAL_FOUR_APPEARENCES, school_basketball.NATIONAL_CHAMPIONSHIPS,
                            
                            schools.FOOTBALL_STADIUM_NAME , schools.FOOTBALL_STADIUM_ADDRESS , schools.BASKETBALL_STADIUM_NAME , schools.BASKETBALL_STADIUM_ADDRESS ,
                            
                            states.STATE_NAME , 
                            
                            football_ranking_history.TOP_25_COUNT , football_ranking_history.TOP_25_YEARS , football_ranking_history.TOP_10_COUNT , football_ranking_history.TOP_10_YEARS ,
                            football_ranking_history.TOP_5_COUNT , football_ranking_history.TOP_5_YEARS , football_ranking_history.NATIONAL_TITLES , football_ranking_history.NATIONAL_TITLE_YEARS
                            
                            FROM schools 
                            JOIN school_bars ON school_bars.S_KEY = schools.S_KEY
                            JOIN school_basketball_recr ON school_basketball_recr.S_KEY = schools.S_KEY
                            JOIN school_blogs ON school_blogs.S_KEY = schools.S_KEY
                            JOIN school_football_recr ON school_football_recr.S_KEY = schools.S_KEY
                            JOIN school_link_1 ON school_link_1.S_KEY = schools.S_KEY 
                            JOIN school_message_boards ON school_message_boards.S_KEY = schools.S_KEY
                            JOIN school_restaurants ON school_restaurants.S_KEY = schools.S_KEY
                            JOIN school_traditions ON school_traditions.S_KEY = schools.S_KEY
                            JOIN school_colors ON school_colors.S_KEY = schools.S_KEY
                            JOIN school_general_info on schools.S_KEY = school_general_info.S_KEY 
                            JOIN school_basketball on schools.S_KEY = school_basketball.S_KEY 
                            JOIN states on school_general_info.STATE_KEY = states.STATE_KEY 
                            JOIN school_football on schools.S_KEY = school_football.S_KEY 
                            JOIN football_ranking_history on schools.S_KEY = football_ranking_history.S_KEY 
                            WHERE schools.S_KEY = :s_key ");
          
        $QUERY_SCHOOL->bindValue(':s_key', $S_KEY);
        
        $QUERY_SCHOOL->execute(); 
        
        while ($row = $QUERY_SCHOOL->fetch(PDO::FETCH_ASSOC))
        {
            $SCHOOL_NAME = $row['S_NAME'];

            $BAR_1 = $row['BAR_1'];
            $BAR_NAME_1 = $row['BAR_NAME_1'];
            $BAR_2 = $row['BAR_2'];
            $BAR_NAME_2 = $row['BAR_NAME_2'];
            $BAR_3 = $row['BAR_3'];
            $BAR_NAME_3 = $row['BAR_NAME_3'];

            $B_RECR_1 = $row['B_RECR_1']; 
            $B_RECR_NAME_1 = $row['B_RECR_NAME_1'];
            $B_RECR_2 = $row['B_RECR_2'];
            $B_RECR_NAME_2 = $row['B_RECR_NAME_2'];
            $B_RECR_3 = $row['B_RECR_3'];
            $B_RECR_NAME_3 = $row['B_RECR_NAME_3'];
            $B_RECR_4 = $row['B_RECR_4'];
            $B_RECR_NAME_4 = $row['B_RECR_NAME_4'];
            $B_RECR_5 = $row['B_RECR_5'];
            $B_RECR_NAME_5 = $row['B_RECR_NAME_5'];

            $BLOG_1 = $row['BLOG_1']; 
            $BLOG_NAME_1 = $row['BLOG_NAME_1']; 
            $BLOG_2 = $row['BLOG_2'];
            $BLOG_NAME_2 = $row['BLOG_NAME_2'];
            $BLOG_3 = $row['BLOG_3'];
            $BLOG_NAME_3 = $row['BLOG_NAME_3'];
            $BLOG_4 = $row['BLOG_4'];
            $BLOG_NAME_4 = $row['BLOG_NAME_4'];
            $BLOG_5 = $row['BLOG_5'];
            $BLOG_NAME_5 = $row['BLOG_NAME_5'];

            $F_RECR_1 = $row['F_RECR_1'];
            $F_RECR_NAME_1 = $row['F_RECR_NAME_1'];
            $F_RECR_2 = $row['F_RECR_2'];
            $F_RECR_NAME_2 = $row['F_RECR_NAME_2'];
            $F_RECR_3 = $row['F_RECR_3'];
            $F_RECR_NAME_3 = $row['F_RECR_NAME_3'];
            $F_RECR_4 = $row['F_RECR_4'];
            $F_RECR_NAME_4 = $row['F_RECR_NAME_4'];
            $F_RECR_5 = $row['F_RECR_5'];
            $F_RECR_NAME_5 = $row['F_RECR_NAME_5'];

            $RADIO_LINK = $row['RADIO_LINK'];
            $RADIO_LINK_NAME = $row['RADIO_LINK_NAME'];
            $OFFICIAL_ATHLETIC_SITE = $row['OFFICIAL_ATHLETIC_SITE'];
            $OFFICIAL_ATHLETIC_NAME = $row['OFFICIAL_ATHLETIC_NAME'];
            $FOOTBALL_ROSTER = $row['FOOTBALL_ROSTER'];
            $FOOTBALL_ROSTER_NAME = $row['FOOTBALL_ROSTER_NAME'];
            $FOOTBALL_SCHEDULE = $row['FOOTBALL_SCHEDULE'];
            $FOOTBALL_SCHEDULE_NAME = $row['FOOTBALL_SCHEDULE_NAME'];
            $BASKETBALL_ROSTER = $row['BASKETBALL_ROSTER'];
            $BASKETBALL_ROSTER_NAME = $row['BASKETBALL_ROSTER_NAME'];
            $BASKETBALL_SCHEDULE = $row['BASKETBALL_SCHEDULE_LINK'];

            $MESSAGE_BOARD_1 = $row['MESSAGE_BOARD_1'];
            $MESSAGE_BOARD_NAME_1 = $row['MESSAGE_BOARD_NAME_1'];
            $MESSAGE_BOARD_2 = $row['MESSAGE_BOARD_2'];
            $MESSAGE_BOARD_NAME_2 = $row['MESSAGE_BOARD_NAME_2'];
            $MESSAGE_BOARD_3 = $row['MESSAGE_BOARD_3'];
            $MESSAGE_BOARD_NAME_3 = $row['MESSAGE_BOARD_NAME_3'];
            $MESSAGE_BOARD_4 = $row['MESSAGE_BOARD_4'];
            $MESSAGE_BOARD_NAME_4 = $row['MESSAGE_BOARD_NAME_4'];
            $MESSAGE_BOARD_5 = $row['MESSAGE_BOARD_5'];
            $MESSAGE_BOARD_NAME_5 = $row['MESSAGE_BOARD_NAME_5'];

            $RESTAURANT_1 = $row['RESTAURANT_1'];
            $RESTAURANT_NAME_1 = $row['RESTAURANT_NAME_1'];
            $RESTAURANT_2 = $row['RESTAURANT_2'];
            $RESTAURANT_NAME_2 = $row['RESTAURANT_NAME_2'];
            $RESTAURANT_3 = $row['RESTAURANT_3'];
            $RESTAURANT_NAME_3 = $row['RESTAURANT_NAME_3'];

            $TRADITION_1 = $row['TRADITION_1'];
            $TRADITION_NAME_1 = $row['TRADITION_NAME_1'];
            $TRADITION_2 = $row['TRADITION_2'];
            $TRADITION_NAME_2 = $row['TRADITION_NAME_2'];
            $TRADITION_3 = $row['TRADITION_3'];
            $TRADITION_NAME_3 = $row['TRADITION_NAME_3'];
            $TRADITION_4 = $row['TRADITION_4'];
            $TRADITION_NAME_4 = $row['TRADITION_NAME_4'];
            $TRADITION_5 = $row['TRADITION_5'];
            $TRADITION_NAME_5 = $row['TRADITION_NAME_5'];
            
            $COLOR_1 = $row['U_COLOR'];
            $COLOR_2 = $row['SPORTS_DIRECT_COLOR'];
            $COLOR_TOP_BAR = $row['TOP_BAR'];
            $COLOR_MENU_BACKGROUND = $row['MENU_BAR_BACKGROUND'];
            $COLOR_MENU_BAR_TEXT = $row['MENU_BAR_TEXT'];
            
            $FOOTBALL_STADIUM_NAME = $row['FOOTBALL_STADIUM_NAME'];
            $FOOTBALL_STADIUM_ADDRESS = $row['FOOTBALL_STADIUM_ADDRESS'];
            $BASKETBALL_STADIUM_NAME = $row['BASKETBALL_STADIUM_NAME'];
            $BASKETBALL_STADIUM_ADDRESS = $row['BASKETBALL_STADIUM_ADDRESS'];
            
            $HOME_CITY = $row['HOME_CITY'];
            $STATE_NAME = $row['STATE_NAME'];
            $STUDENT_POPULATION = $row['STUDENT_POPULATION'];
            $MONETARY_ENDOWMENT = $row['MONETARY_ENDOWMENT'];
            
            $ALL_BASKETBALL_WINS = $row['ALL_TIME_WINS'];
            $ALL_BASKETBALL_LOSSES = $row['ALL_TIME_LOSSES'];
            
            $BAKETBALL_TOURNAMENT_APPEARENCES = $row['NCAA_TOURNAMENT_APPEARENCES'];
            $BASKETBALL_TOURNAMENT_COUNT = substr_count($BAKETBALL_TOURNAMENT_APPEARENCES ,"19") + substr_count($BAKETBALL_TOURNAMENT_APPEARENCES ,"20");
            
            $BAKETBALL_SWEET_SIXTEEN = $row['NCAA_SWEET_SIXTEEN_APPEARENCES'];
            $BAKETBALL_SWEET_SIXTEEN_COUNT = substr_count($BAKETBALL_SWEET_SIXTEEN ,"19") + substr_count($BAKETBALL_SWEET_SIXTEEN ,"20");
                        
            $BAKETBALL_ELITE_EIGHT = $row['NCAA_ELITE_EIGHT_APPEARENCES'];
            $BAKETBALL_ELITE_EIGHT_COUNT = substr_count($BAKETBALL_ELITE_EIGHT ,"19") + substr_count($BAKETBALL_ELITE_EIGHT ,"20");
            
            $BAKETBALL_FINAL_FOUR = $row['NCAA_FINAL_FOUR_APPEARENCES'];
            $BAKETBALL_FINAL_FOUR_COUNT = substr_count($BAKETBALL_FINAL_FOUR ,"19") + substr_count($BAKETBALL_FINAL_FOUR ,"20");
            
//            $BAKETBALL_TITLE_GAME = $row['NATIONAL_TITLE_GAME_APPEARENCES'];
            $BAKETBALL_TITLES = $row['NATIONAL_CHAMPIONSHIPS'];
            $BAKETBALL_TITLES_COUNT = substr_count($BAKETBALL_TITLES ,"19") + substr_count($BAKETBALL_TITLES ,"20");
            
            $FOOTBALL_ALL_TIME_WINS = $row['FOOTBALL_ALL_TIME_WINS'];
            $FOOTBALL_ALL_TIME_LOSSES = $row['FOOTBALL_ALL_TIME_LOSSES'];
            
            $LAST_SEASON_RECORD = $row['RECORD_2012'];
            
            $LAST_SEASON_POST = $row['POST_SEASON_2012'];
            
            $FOOTBALL_TOP_25_COUNT = $row['TOP_25_COUNT'];
            $FOOTBALL_TOP_25_YEARS = $row['TOP_25_YEARS'];
            
            $FOOTBALL_TOP_10_COUNT = $row['TOP_10_COUNT'];
            $FOOTBALL_TOP_10_YEARS = $row['TOP_10_YEARS'];
            
            $FOOTBALL_TOP_5_COUNT = $row['TOP_5_COUNT'];
            $FOOTBALL_TOP_5_YEARS = $row['TOP_5_YEARS'];
            
            $DARK_COLOR = $row['DARK_TONE'];
            $LIGHT_COLOR = $row['LIGHT_TONE'];
            
            $NAV_COLOR = $row['NAV_COLOR'];
            
            $FOOTBALL_NATIONAL_TITLE_COUNT = $row['NATIONAL_TITLES'];
            $FOOTBALL_NATIONAL_TITLE_YEARS = $row['NATIONAL_TITLE_YEARS'];     
            
            $META_DATA_KEY_WORDS = $SCHOOL_NAME." Football,".$SCHOOL_NAME." Game Radio, ".$SCHOOL_NAME." Basketball, ".$SCHOOL_NAME." Profile ";
            
            $META_DATA_DESCRIPTION = "This is a robust profile of ".$SCHOOL_NAME." information for Football, Basketball, Game Day Information, Radio, and everything else.";
        }
 
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
<title><? echo $SCHOOL_NAME; ?></title>





<link href="Mobile_CSS/MobileSchoolProfile.css" rel="stylesheet" type="text/css">

 <link href='http://fonts.googleapis.com/css?family=Coda+Caption:800' rel='stylesheet' type='text/css'>
    
    <script type="text/javascript" src="JQuery.js"></script>
    <script type="text/javascript" src="MobileJavascript/SchoolProfile.js"></script>
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
    
    <DIV class ="Scroller">
        
        
    </DIV>
    
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
    
    <DIV id ="TopPush"></DIV>
    
    <DIV id ="GeneeralSectionMenuFullView">

        <H1 class ="SectionHeader"><? echo $SCHOOL_NAME; ?></H1>


        <?
        
        echo "<DIV class = 'LineItemContain'>";
            echo "<a class = 'SchoolProfileMainLink' href = '".$OFFICIAL_ATHLETIC_SITE."' target = '_blank'>".$OFFICIAL_ATHLETIC_NAME."</a>";
        echo "</DIV>";
        
        echo "<DIV class = 'LineItemContain'>";
            echo "<a class = 'SchoolProfileMainLink' href = '".$RADIO_LINK."' target = '_blank'>Game Radio</a>";
        echo "</DIV>";
        
        echo "<DIV class = 'SmallBump'></DIV>";
        
        echo "<DIV class = 'LineItemContain'>";
            echo "<DIV class = 'SchoolProfileOtherInfo'>".$HOME_CITY.", ".$STATE_NAME."</DIV>";
        echo "</DIV>";
        
        
        
        echo "<DIV class = 'LineItemContain'>";
            echo "<DIV class = 'SchoolProfileOtherInfo'>".$STUDENT_POPULATION." students</DIV>";
        echo "</DIV>";
        
        echo "<DIV class = 'LineItemContain'>";
            echo "<DIV class = 'SchoolProfileOtherInfo'>".$MONETARY_ENDOWMENT." endowment</DIV>";
        echo "</DIV>";
        
        $STADIUM_ADDRESS_FORMATTED = str_replace(" ", "+", $FOOTBALL_STADIUM_ADDRESS);
        
        echo "<DIV class = 'SmallBump'></DIV>";
        
        echo "<DIV class = 'LineItemContain'>";
            echo "<DIV class = 'SchoolProfileLabelLinkContain'><SPAN class = 'LinkLabel'>Football Stadium: </SPAN><a class = 'LabeledLink' href = 'http://maps.google.com/maps?f=q&source=s%5Fq&hl=en&q=".$STADIUM_ADDRESS_FORMATTED."' target = '_blank'>".$FOOTBALL_STADIUM_NAME."</a></DIV>";
        echo "</DIV>";
        
        

//        $STADIUM_ADDRESS_FORMATTED = str_replace(" ", "+", $FOOTBALL_STADIUM_ADDRESS);
//
//        echo "<DIV id = 'FootballStadiumLabel'>Football Stadium:</DIV>";
//        echo "<a class = 'StadiumAddressLink' href = 'http://maps.google.com/maps?f=q&source=s%5Fq&hl=en&q=".$STADIUM_ADDRESS_FORMATTED."' target = '_blank'>".$FOOTBALL_STADIUM_NAME."</a>";
//
//        echo "<DIV id = 'PageTextAd'>";
       
        ?>



    </DIV>
    
    <DIV id ="FootballSectionMenuFullView" class ="hidden">
    
        <H1 class ="SectionHeader">Football</H1>
        
        <?
        
        echo "<DIV class = 'LineItemContain'>";
            echo "<a class = 'SchoolProfileMainLink' href = '".$FOOTBALL_SCHEDULE."' target = '_blank'>2013 Schedule</a>";
        echo "</DIV>";
        
        echo "<DIV class = 'LineItemContain'>";
            echo "<a class = 'SchoolProfileMainLink' href = '".$FOOTBALL_ROSTER."' target = '_blank'>Team Roster</a>";
        echo "</DIV>";
        
        echo "<DIV class = 'SmallBump'></DIV>";
        
        IF (strlen($FOOTBALL_TOP_25_COUNT > 0)) {
        
        echo "<DIV class = 'LineItemContain'>";
            echo "<DIV id = 'FootballTop25' class = 'ExpandableHeadNotActive'><SPAN class = 'ExpandableLabel'>Top 25 Seasons: </SPAN><SPAN class = 'ExpandableDataValue'>".$FOOTBALL_TOP_25_COUNT."</SPAN></DIV>";
        echo "</DIV>";
        
        echo "<DIV id = 'FootballTop25Data' class = 'DataList'>".$FOOTBALL_TOP_25_YEARS."</DIV>";

        }
        
        IF (strlen($FOOTBALL_TOP_10_COUNT > 0)) {
         echo "<DIV class = 'LineItemContain'>";
            echo "<DIV id = 'FootballTop10' class = 'ExpandableHeadNotActive'><SPAN class = 'ExpandableLabel'>Top 10 Seasons: </SPAN><SPAN class = 'ExpandableDataValue'>".$FOOTBALL_TOP_10_COUNT."</SPAN></DIV>";
        echo "</DIV>";
        
        echo "<DIV id = 'FootballTop10Data' class = 'DataList'>".$FOOTBALL_TOP_10_YEARS."</DIV>";
        }
        
        IF (strlen($FOOTBALL_TOP_5_COUNT > 0)) {
         echo "<DIV class = 'LineItemContain'>";
            echo "<DIV id = 'FootballTop5' class = 'ExpandableHeadNotActive'><SPAN class = 'ExpandableLabel'>Top 5 Seasons: </SPAN><SPAN class = 'ExpandableDataValue'>".$FOOTBALL_TOP_5_COUNT."</SPAN></DIV>";
        echo "</DIV>";
        
        echo "<DIV id = 'FootballTop5Data' class = 'DataList'>".$FOOTBALL_TOP_5_YEARS."</DIV>";
        }
        
        IF (strlen($FOOTBALL_NATIONAL_TITLE_COUNT > 0)) {
         echo "<DIV class = 'LineItemContain'>";
            echo "<DIV id = 'NationalTitles' class = 'ExpandableHeadNotActive'><SPAN class = 'ExpandableLabel'>National Championships: </SPAN><SPAN class = 'ExpandableDataValue'>".$FOOTBALL_NATIONAL_TITLE_COUNT."</SPAN></DIV>";
        echo "</DIV>";
        
        echo "<DIV id = 'NationalTitlesData' class = 'DataList'>".$FOOTBALL_NATIONAL_TITLE_YEARS."</DIV>";
        }
        
        echo "<DIV class = 'LineItemContain'>";
            echo "<DIV class = 'SchoolProfileOtherInfo'>".$FOOTBALL_ALL_TIME_WINS." - ".$FOOTBALL_ALL_TIME_LOSSES." all time</DIV>";
        echo "</DIV>";
      
        
        echo "<DIV class = 'SmallBump'></DIV>";
        
        echo "<DIV class = 'LineItemContain'>";
            echo "<DIV  class = 'ListHead'>Recruiting Class</DIV>";
        echo "</DIV>";
        
        IF (!is_null($F_RECR_1) && $F_RECR_1 != "" && !is_null($F_RECR_NAME_1) && $F_RECR_NAME_1 != "" )
        {
            echo "<DIV class = 'LineItemContain'>";
                echo "<a  class = 'ListLinkItem' href = '".$F_RECR_1."'>".$F_RECR_NAME_1."</a>";
            echo "</DIV>";
        }

        IF (!is_null($F_RECR_2) && $F_RECR_2 != "" && !is_null($F_RECR_NAME_2) && $F_RECR_NAME_2 != "" )
        {
            echo "<DIV class = 'LineItemContain'>";
                echo "<a  class = 'ListLinkItem' href = '".$F_RECR_2."'>".$F_RECR_NAME_2."</a>";
            echo "</DIV>";
        }
        
        IF (!is_null($F_RECR_3) && $F_RECR_3 != "" && !is_null($F_RECR_NAME_3) && $F_RECR_NAME_3 != "" )
        {
            echo "<DIV class = 'LineItemContain'>";
                echo "<a  class = 'ListLinkItem' href = '".$F_RECR_3."'>".$F_RECR_NAME_3."</a>";
            echo "</DIV>";
        }
        
        IF (!is_null($F_RECR_4) && $F_RECR_4 != "" && !is_null($F_RECR_NAME_4) && $F_RECR_NAME_4 != "" )
        {
            echo "<DIV class = 'LineItemContain'>";
                echo "<a  class = 'ListLinkItem' href = '".$F_RECR_4."'>".$F_RECR_NAME_4."</a>";
            echo "</DIV>";
        }
        
        IF (!is_null($F_RECR_5) && $F_RECR_5 != "" && !is_null($F_RECR_NAME_5) && $F_RECR_NAME_5 != "" )
        {
            echo "<DIV class = 'LineItemContain'>";
                echo "<a  class = 'ListLinkItem' href = '".$F_RECR_5."'>".$F_RECR_NAME_5."</a>";
            echo "</DIV>";
        }
        
        ?>   
        
    </DIV>
    
    
    
    <DIV id ="BasketballSectionMenuFullView" class ="hidden">
    
        <H1 class ="SectionHeader">Basketball</H1>
        
        <?
        
        echo "<DIV class = 'LineItemContain'>";
            echo "<a class = 'SchoolProfileMainLink' href = '".$BASKETBALL_SCHEDULE."' target = '_blank'>2013 Schedule</a>";
        echo "</DIV>";
        
        echo "<DIV class = 'LineItemContain'>";
            echo "<a class = 'SchoolProfileMainLink' href = '".$BASKETBALL_ROSTER."' target = '_blank'>Team Roster</a>";
        echo "</DIV>";
        
        echo "<DIV class = 'SmallBump'></DIV>";
        
        IF (strlen($BAKETBALL_TOURNAMENT_APPEARENCES > 0)) {
        
        echo "<DIV class = 'LineItemContain'>";
            echo "<DIV id = 'TournamentAppearences' class = 'ExpandableHeadNotActive'><SPAN class = 'ExpandableLabel'>Tournament Appearences: </SPAN><SPAN class = 'ExpandableDataValue'>".$BASKETBALL_TOURNAMENT_COUNT."</SPAN></DIV>";
        echo "</DIV>";
        
        echo "<DIV id = 'TournamentAppearencesData' class = 'DataList'>".$BAKETBALL_TOURNAMENT_APPEARENCES."</DIV>";

        }
        
        IF (strlen($BAKETBALL_SWEET_SIXTEEN > 0)) {
         echo "<DIV class = 'LineItemContain'>";
            echo "<DIV id = 'Sweet16' class = 'ExpandableHeadNotActive'><SPAN class = 'ExpandableLabel'>Sweet 16 Appearences: </SPAN><SPAN class = 'ExpandableDataValue'>".$BAKETBALL_SWEET_SIXTEEN_COUNT."</SPAN></DIV>";
        echo "</DIV>";
        
        echo "<DIV id = 'Sweet16Data' class = 'DataList'>".$BAKETBALL_SWEET_SIXTEEN."</DIV>";
        }
        
        IF (strlen($BAKETBALL_ELITE_EIGHT > 0)) {
         echo "<DIV class = 'LineItemContain'>";
            echo "<DIV id = 'Elite8' class = 'ExpandableHeadNotActive'><SPAN class = 'ExpandableLabel'>Elite 8 Appearances: </SPAN><SPAN class = 'ExpandableDataValue'>".$BAKETBALL_ELITE_EIGHT_COUNT."</SPAN></DIV>";
        echo "</DIV>";
        
        echo "<DIV id = 'Elite8Data' class = 'DataList'>".$BAKETBALL_ELITE_EIGHT."</DIV>";
        }
        
        IF (strlen($BAKETBALL_FINAL_FOUR > 0)) {
         echo "<DIV class = 'LineItemContain'>";
            echo "<DIV id = 'FinalFour' class = 'ExpandableHeadNotActive'><SPAN class = 'ExpandableLabel'>Final 4 Appearances: </SPAN><SPAN class = 'ExpandableDataValue'>".$BAKETBALL_FINAL_FOUR_COUNT."</SPAN></DIV>";
        echo "</DIV>";
        
        echo "<DIV id = 'FinalFourData' class = 'DataList'>".$BAKETBALL_FINAL_FOUR."</DIV>";
        }
        
        IF (strlen($BAKETBALL_TITLES > 0)) {
         echo "<DIV class = 'LineItemContain'>";
            echo "<DIV id = 'NationalTitles' class = 'ExpandableHeadNotActive'><SPAN class = 'ExpandableLabel'>National Titles: </SPAN><SPAN class = 'ExpandableDataValue'>".$BAKETBALL_TITLES_COUNT."</SPAN></DIV>";
        echo "</DIV>";
        
        echo "<DIV id = 'NationalTitlesData' class = 'DataList'>".$BAKETBALL_TITLES."</DIV>";
        }
        
        IF ($ALL_BASKETBALL_WINS > 0) {
        echo "<DIV class = 'LineItemContain'>";
            echo "<DIV class = 'SchoolProfileOtherInfo'>".$ALL_BASKETBALL_WINS." - ".$ALL_BASKETBALL_LOSSES." all time</DIV>";
        echo "</DIV>";
        }
        
        echo "<DIV class = 'SmallBump'></DIV>";
        
        echo "<DIV class = 'LineItemContain'>";
            echo "<DIV  class = 'ListHead'>Recruiting Class</DIV>";
        echo "</DIV>";
        
        IF (!is_null($B_RECR_1) && $B_RECR_1 != "" && !is_null($B_RECR_NAME_1) && $B_RECR_NAME_1 != "" )
        {
            echo "<DIV class = 'LineItemContain'>";
                echo "<a  class = 'ListLinkItem' href = '".$B_RECR_1."' target = '_blank'>".$B_RECR_NAME_1."</a>";
            echo "</DIV>";
        }

        IF (!is_null($B_RECR_2) && $B_RECR_2 != "" && !is_null($B_RECR_NAME_2) && $B_RECR_NAME_2 != "" )
        {
            echo "<DIV class = 'LineItemContain'>";
                echo "<a  class = 'ListLinkItem' href = '".$B_RECR_2."' target = '_blank'>".$B_RECR_NAME_2."</a>";
            echo "</DIV>";
        }
        
        IF (!is_null($B_RECR_3) && $B_RECR_3 != "" && !is_null($B_RECR_NAME_3) && $B_RECR_NAME_3 != "" )
        {
            echo "<DIV class = 'LineItemContain'>";
                echo "<a  class = 'ListLinkItem' href = '".$B_RECR_3."' target = '_blank'>".$B_RECR_NAME_3."</a>";
            echo "</DIV>";
        }
        
        IF (!is_null($B_RECR_4) && $B_RECR_4 != "" && !is_null($B_RECR_NAME_4) && $B_RECR_NAME_4 != "" )
        {
            echo "<DIV class = 'LineItemContain'>";
                echo "<a  class = 'ListLinkItem' href = '".$B_RECR_4."' target = '_blank'>".$B_RECR_NAME_4."</a>";
            echo "</DIV>";
        }
        
        IF (!is_null($B_RECR_5) && $B_RECR_5 != "" && !is_null($B_RECR_NAME_5) && $B_RECR_NAME_5 != "" )
        {
            echo "<DIV class = 'LineItemContain'>";
                echo "<a  class = 'ListLinkItem' href = '".$B_RECR_5."' target = '_blank'>".$B_RECR_NAME_5."</a>";
            echo "</DIV>";
        }
        
        ?>   
        
    </DIV>
    
    
    <DIV id ="FanSitesSectionMenuFullView" class ="hidden">
    
        <H1 class ="SectionHeader">Fan Sites</H1>
        
        <?
        
        echo "<DIV class = 'LineItemContain'>";
            echo "<DIV  class = 'ListHead'>Blogs</DIV>";
        echo "</DIV>";
        
        IF (!is_null($BLOG_1) && $BLOG_1 != "" && !is_null($BLOG_NAME_1) && $BLOG_NAME_1 != "" )
        {
            echo "<DIV class = 'LineItemContain'>";
                echo "<a  class = 'ListLinkItem' href = '".$BLOG_1."' target = '_blank'>".$BLOG_NAME_1."</a>";
            echo "</DIV>";
        }
        
        IF (!is_null($BLOG_2) && $BLOG_2 != "" && !is_null($BLOG_NAME_2) && $BLOG_NAME_2 != "" )
        {
            echo "<DIV class = 'LineItemContain'>";
                echo "<a  class = 'ListLinkItem' href = '".$BLOG_2."' target = '_blank'>".$BLOG_NAME_2."</a>";
            echo "</DIV>";
        }
        
        IF (!is_null($BLOG_3) && $BLOG_3 != "" && !is_null($BLOG_NAME_3) && $BLOG_NAME_3 != "" )
        {
            echo "<DIV class = 'LineItemContain'>";
                echo "<a  class = 'ListLinkItem' href = '".$BLOG_3."' target = '_blank'>".$BLOG_NAME_3."</a>";
            echo "</DIV>";
        }

        IF (!is_null($BLOG_4) && $BLOG_4 != "" && !is_null($BLOG_NAME_4) && $BLOG_NAME_4 != "" )
        {
            echo "<DIV class = 'LineItemContain'>";
                echo "<a  class = 'ListLinkItem' href = '".$BLOG_4."' target = '_blank'>".$BLOG_NAME_4."</a>";
            echo "</DIV>";
        }
        
        IF (!is_null($BLOG_5) && $BLOG_5 != "" && !is_null($BLOG_NAME_5) && $BLOG_NAME_5 != "" )
        {
            echo "<DIV class = 'LineItemContain'>";
                echo "<a  class = 'ListLinkItem' href = '".$BLOG_5."' target = '_blank'>".$BLOG_NAME_5."</a>";
            echo "</DIV>";
        }
        
        echo "<DIV class = 'SmallBump'></DIV>";
        
        echo "<DIV class = 'LineItemContain'>";
            echo "<DIV  class = 'ListHead'>Message Boards</DIV>";
        echo "</DIV>";
        
        IF (!is_null($MESSAGE_BOARD_1) && $MESSAGE_BOARD_1 != "" && !is_null($MESSAGE_BOARD_NAME_1) && $MESSAGE_BOARD_NAME_1 != "" )
        {
            echo "<DIV class = 'LineItemContain'>";
                echo "<a  class = 'ListLinkItem' href = '".$MESSAGE_BOARD_1."' target = '_blank'>".$MESSAGE_BOARD_NAME_1."</a>";
            echo "</DIV>";
        }
        
        IF (!is_null($MESSAGE_BOARD_2) && $MESSAGE_BOARD_2 != "" && !is_null($MESSAGE_BOARD_NAME_2) && $MESSAGE_BOARD_NAME_2 != "" )
        {
            echo "<DIV class = 'LineItemContain'>";
                echo "<a  class = 'ListLinkItem' href = '".$MESSAGE_BOARD_2."' target = '_blank'>".$MESSAGE_BOARD_NAME_2."</a>";
            echo "</DIV>";
        }
        
        IF (!is_null($MESSAGE_BOARD_3) && $MESSAGE_BOARD_3 != "" && !is_null($MESSAGE_BOARD_NAME_3) && $MESSAGE_BOARD_NAME_3 != "" )
        {
            echo "<DIV class = 'LineItemContain'>";
                echo "<a  class = 'ListLinkItem' href = '".$MESSAGE_BOARD_3."' target = '_blank'>".$MESSAGE_BOARD_NAME_3."</a>";
            echo "</DIV>";
        }
        
        IF (!is_null($MESSAGE_BOARD_4) && $MESSAGE_BOARD_4 != "" && !is_null($MESSAGE_BOARD_NAME_4) && $MESSAGE_BOARD_NAME_4 != "" )
        {
            echo "<DIV class = 'LineItemContain'>";
                echo "<a  class = 'ListLinkItem' href = '".$MESSAGE_BOARD_4."' target = '_blank'>".$MESSAGE_BOARD_NAME_4."</a>";
            echo "</DIV>";
        }
        
        IF (!is_null($MESSAGE_BOARD_5) && $MESSAGE_BOARD_5 != "" && !is_null($MESSAGE_BOARD_NAME_5) && $MESSAGE_BOARD_NAME_5 != "" )
        {
            echo "<DIV class = 'LineItemContain'>";
                echo "<a  class = 'ListLinkItem' href = '".$MESSAGE_BOARD_5."' target = '_blank'>".$MESSAGE_BOARD_NAME_5."</a>";
            echo "</DIV>";
        }
        ?>   
        
    </DIV>
         
    
    
    <DIV id ="VideosSectionMenuFullView" class ="hidden">
    
        <H1 class ="SectionHeader">Videos</H1>
        
        <?
        
        echo "<DIV class = 'VideosBump'></DIV>";
        
        $QUERY_YOUTUBE = $db->prepare("select VIDEO_TITLE , YOUTUBE_KEY , VIEW_ORDER from school_videos where S_KEY = :s_key 
                                            and YOUTUBE_KEY IS NOT NULL and YOUTUBE_KEY != '' order by VIEW_ORDER");

        $QUERY_YOUTUBE->bindValue(':s_key', $S_KEY);

        $QUERY_YOUTUBE->execute();
        

        while ($row = $QUERY_YOUTUBE->fetch(PDO::FETCH_ASSOC))
        {
            
            echo "<DIV class = 'YoutubeVideoContain'>";
                
                echo "<div class = 'YoutubeAuto'>";
                echo "<img id='".$row['YOUTUBE_KEY']."' class='YouTubeImage' src='http://img.youtube.com/vi/".$row['YOUTUBE_KEY']."/0.jpg' width = '250' height = '188'>";
                echo "</div>";
            
            echo "</DIV>";
            
            echo "<DIV class = 'YouTubeTitle'>".$row['VIDEO_TITLE']."</DIV>";
            
        }
        ?>   
        
    </DIV>
    
    <DIV id = "GeneeralSectionMenu" class ="BMButtonSelected">
        <DIV class ="BottomMenuText">General Info</DIV>
        <DIV id ="GeneeralSectionMenuTop" class ="SelectedBMTopSection"></DIV>
        <DIV id ="GeneeralSectionMenuBottom"  class ="SelectedBMBottomSection"></DIV>
    </DIV>
    
    <DIV class ="BottomSeperator"></DIV>
    <DIV id = "FootballSectionMenu" class ="BMButtonNotSelected">
        <DIV  class ="BottomMenuText">Football</DIV>
        <DIV id ="FootballSectionMenuTop" class ="NotSelectedBMTopSection"></DIV>
        <DIV id ="FootballSectionMenuBottom" class ="NotSelectedBMBottomSection"></DIV>
    </DIV>
    
    <DIV class ="BottomSeperator"></DIV>
    <DIV id = "BasketballSectionMenu" class ="BMButtonNotSelected">
        <DIV class ="BottomMenuText">Basketball</DIV>
        <DIV id ="BasketballSectionMenuTop" class ="NotSelectedBMTopSection"></DIV>
        <DIV id ="BasketballSectionMenuBottom" class ="NotSelectedBMBottomSection"></DIV>
    </DIV>
    
    <DIV class ="BottomSeperator"></DIV>
    <DIV id = "FanSitesSectionMenu" class ="BMButtonNotSelected">
        <DIV class ="BottomMenuText">Fan Sites</DIV>
        <DIV id ="FanSitesSectionMenuTop" class ="NotSelectedBMTopSection"></DIV>
        <DIV id ="FanSitesSectionMenuBottom" class ="NotSelectedBMBottomSection"></DIV>
    </DIV>
    
    <DIV class ="BottomSeperator"></DIV>
    <DIV id = "VideosSectionMenu" class ="BMButtonNotSelected">
        <DIV class ="BottomMenuText">Videos</DIV>
        <DIV id ="VideosSectionMenuTop" class ="NotSelectedBMTopSection"></DIV>
        <DIV id ="VideosSectionMenuBottom" class ="NotSelectedBMBottomSection"></DIV>
    </DIV>
    </DIV>
</body>
<style>


    #SportsDirectLogo
{
    color: <? IF ( $COLOR_2 == "#FFFFFF") {echo "#8A8A8A"; } else { echo "#F5F5F5"; }  ?>;;
    font-family: 'Roboto Condensed', sans-serif;
    font-size: 20px;
    top: -10px;
    left: -2px;
    position: relative;
}
    
    #ULogo
    {
        color: <? echo $COLOR_2; ?>;
        font-family: 'Coda Caption', sans-serif;
        font-size: 28px;
        position: relative;
        top: -7px;

    }
    
    .BottomSeperator
    {
        position: relative;
        width: 100%;
        height: 2px;
        
        background-color:  <? echo $COLOR_1; ?>;
    }
    
    .SchoolProfileMainLink
    {
        position: absolute;
        left: 8%;
        color: #A8A8A8;
        font-family: arial;
        font-size: 1.1em;
    }
    
    .ListHead
    {
        position: absolute;
        left: 8%;
        color: #A8A8A8;
        font-family: arial;
        font-size: 1.1em;
        text-decoration: underline;
    }
    
    .ListLinkItem
    {
        position: absolute;
        left: 12%;
        color: <? echo $COLOR_1; ?>;
        font-family: arial;
        font-size: 1.1em;
        text-decoration: none;
    }
    
    .ListLinkItem:active
    {
        text-decoration: underline;
    }
    
    .SchoolProfileMainLink:active
    {
        position: absolute;
        left: 8%;
        color: <? echo $COLOR_1; ?>;
        font-family: arial;
        font-size: 1.1em;
    }
    
    .SchoolProfileOtherInfo
    {
        position: absolute;
        left: 8%;
        color: <? echo $COLOR_1; ?>;
        font-family: arial;
        font-size: 1.1em;
    }
    
    .LinkLabel
    {
        color: <? echo $COLOR_1; ?>;
        font-style: italic;
    }
    
    .LabeledLink
    {
        color: #A8A8A8;
        font-family: arial;
    }
    
    .ExpandableLabel
    {
        color: #A8A8A8;
    }
    
    .ExpandableDataValue
    {
     color: <? echo $COLOR_1; ?>;
     font-weight: bold;
    }
    
    .HeadColor
    {  
    background: <? echo $COLOR_1; ?>; 
    background: -webkit-linear-gradient(bottom, <? echo $LIGHT_COLOR; ?>, <? echo $DARK_COLOR; ?>);  
    background: -moz-linear-gradient(bottom, <? echo $LIGHT_COLOR; ?>, <? echo $DARK_COLOR; ?>);  
    background: -o-linear-gradient(bottom, <? echo $LIGHT_COLOR; ?>, <? echo $DARK_COLOR; ?>); 
    background: -ms-linear-gradient(bottom, <? echo $LIGHT_COLOR; ?>, <? echo $DARK_COLOR; ?>); 
    } 
    
    .SelectedBMTopSection 
    { 
    position: absolute; 
    width: 100%; 
    height: 25px; 
    bottom: 0px; 
    left: 0px;  
    background: <? echo $COLOR_1; ?>; 
    background: -webkit-linear-gradient(top, <? echo $LIGHT_COLOR; ?>, <? echo $DARK_COLOR; ?>); 
    background: -moz-linear-gradient(top, <? echo $LIGHT_COLOR; ?>, <? echo $DARK_COLOR; ?>); 
    background: -o-linear-gradient(top, <? echo $LIGHT_COLOR; ?>, <? echo $DARK_COLOR; ?>); 
    background: -ms-linear-gradient(top, <? echo $LIGHT_COLOR; ?>, <? echo $DARK_COLOR; ?>);  
    }
    
    .SelectedBMBottomSection 
    { 
    position: absolute; 
    width: 100%; 
    height: 25px; 
    top: 0px; 
    left: 0px;  
    background: <? echo $COLOR_1; ?>; 
    background: -webkit-linear-gradient(bottom, <? echo $LIGHT_COLOR; ?>, <? echo $DARK_COLOR; ?>); 
    background: -moz-linear-gradient(bottom, <? echo $LIGHT_COLOR; ?>, <? echo $DARK_COLOR; ?>); 
    background: -o-linear-gradient(bottom, <? echo $LIGHT_COLOR; ?>, <? echo $DARK_COLOR; ?>); 
    background: -ms-linear-gradient(bottom, <? echo $LIGHT_COLOR; ?>, <? echo $DARK_COLOR; ?>);  
    }
    
    DIV#MenuIcon {
    position: absolute;
    right: 5px;
    top: 4px;
    z-index: 3;
    width: 30px;
    height: 30px;
    background-color: <? echo $LIGHT_COLOR; ?>;
    border-color: <? echo $NAV_COLOR; ?>;
    border-width: 2px;
    border-radius: 2px;
    border-style: solid;
    }
    
    DIV#MenuLine1 {
    position: absolute;
    top: 8px;
    left: 3px;
    width: 24px;
    height: 2px;
    background-color: <? echo $NAV_COLOR; ?>;
    }
    
    DIV#MenuLine2 {
    position: absolute;
    top: 15px;
    left: 3px;
    width: 24px;
    height: 2px;
    background-color: <? echo $NAV_COLOR; ?>;
    }
    
    DIV#MenuLine3 {
    position: absolute;
    top: 22px;
    left: 3px;
    width: 24px;
    height: 2px;
    background-color: <? echo $NAV_COLOR; ?>;
    }
    
    .YouTubeImage
    {   
        margin: auto;
        
        border-style: solid; 
        border-width: 3px; 
        border-color: <? echo $COLOR_1; ?>; 
        border-radius: 3px;

        width: 150px;
        height: 113px;
    }

    .YouTubeImage:active
    {
        border-color: #9C9C9C;
        border-style: solid; 
        border-width: 3px; 
        border-radius: 3px;

        cursor: pointer;

        box-shadow: 0px 2px 2px #DEDEDE;
    }
    
</style>
 

</html>
