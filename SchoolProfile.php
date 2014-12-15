<?PHP
ob_start(); 
session_start();
?>
<!DOCTYPE html>
<?PHP
    require_once('Functions.php');
    
    Get_DB_Connection();
    
    IF (ISSET($_GET['id']))
    {
        $S_KEY = Get_S_KEY($_GET['id']);
    }
    ELSE
    {
        $S_KEY = $_GET['S_KEY'];
    }
    
    $QUERY_SCHOOL = $db->prepare("SELECT DISTINCT schools.S_NAME, 
            
        school_bars.BAR_1, school_bars.BAR_NAME_1, school_bars.BAR_2, school_bars.BAR_NAME_2, school_bars.BAR_3, school_bars.BAR_NAME_3, schools.S_KEY , 

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
        school_colors.LIGHT_TONE , school_colors.DARK_TONE , 
        
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
        
        $count = $QUERY_SCHOOL->rowCount();
        
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
            
            $FOOTBALL_NATIONAL_TITLE_COUNT = $row['NATIONAL_TITLES'];
            $FOOTBALL_NATIONAL_TITLE_YEARS = $row['NATIONAL_TITLE_YEARS'];   
            
            $DARK_COLOR = $row['DARK_TONE'];
            $LIGHT_COLOR = $row['LIGHT_TONE'];
                        
            $META_DATA_KEY_WORDS = $SCHOOL_NAME." Football,".$SCHOOL_NAME." Game Radio, ".$SCHOOL_NAME." Basketball, ".$SCHOOL_NAME." Profile ";
            
            $META_DATA_DESCRIPTION = "This is a robust profile of ".$SCHOOL_NAME." information for Football, Basketball, Game Day Information, Radio, and everything else.";
            
            $S_KEY = $row['S_KEY'];
        }
        
?>    
<!--[if lt IE 9]>             <html class="no-js ie lt-ie9" lang="en-US"><![endif]-->
<!--[if IE 9]>                <html class="no-js ie ie9" lang="en-US">   <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class="no-js no-ie" lang="en-US">    <!--<![endif]-->

	<!-- Head section -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-43633819-1', 'usportsdirect.com');
    ga('send', 'pageview');

    </script>
    
    <?PHP echo "<meta name='keywords' content='".$META_DATA_KEY_WORDS."'>";  ?>
    <?PHP echo " <meta name='description' content='".$META_DATA_DESCRIPTION."'>"; ?>
    
    <META NAME="ROBOTS" CONTENT="INDEX, FOLLOW">
    
    <link rel="stylesheet" href="http://csportsdirect.com/MainStyleSheet.css" />
<!--    <link rel="stylesheet" href="http://csportsdirect.com/CSS_Page_Specific/School_Profile.css" />-->
    
    <link rel="stylesheet" href="CSS_Page_Specific/School_Profile.css" />

    <link href='http://fonts.googleapis.com/css?family=Coda+Caption:800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="data/css/mobile.min.css" media="only screen and (max-width: 767px)" />

    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="http://csportsdirect.com/JQuery.js"></script>
    <script type="text/javascript" src="http://csportsdirect.com/Javascript_Specific_Page/School_Profile.js"></script>

    <script type="text/javascript">
        
        var s_key = <?= json_encode($S_KEY); ?>;
        
        var isMobile = {
            Android: function() {
                return navigator.userAgent.match(/Android/i);
            },
            BlackBerry: function() {
                return navigator.userAgent.match(/BlackBerry/i);
            },
            iOS: function() {
                return navigator.userAgent.match(/iPhone|iPod/i);
            },
            Opera: function() {
                return navigator.userAgent.match(/Opera Mini/i);
            },
            Windows: function() {
                return navigator.userAgent.match(/IEMobile/i);
            },
            any: function() {
                return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
            }
        };
        
        if(isMobile.any()){
            window.location = "http://csportsdirect.com/MobileSchoolProfile.php?S_KEY="+s_key;
        }
        
    </script> 

    <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <script type="text/javascript" src="data/js/selectivizr.min.js"></script>
    <![endif]-->
    <title><?PHP echo $SCHOOL_NAME; ?></title>
</head>

<body id ="MainBody">
    <DIV id ="TEST">
    <DIV id ="WhiteOverBlanket" class ="hidden"></DIV>
    
    <DIV id ="FixedContain" class ="hidden">
        <DIV id ="VideoContainCenter">
            <DIV id ="Video1">
                <DIV class ="CloseYouTubeVideo1"></DIV>
                <DIV id ="VideoCode"></DIV>
            </DIV>


        </DIV>
    </DIV>
    
    <div id ="TopBar"></div>
    <DIV id ="CenterFixed">
        <DIV id ="HeadMargin">
            <DIV id ="MainHeadAbsolute" class ="navhigh">
                <DIV id ="LogoCustom">
                    <DIV class ="ULogo">C</DIV><DIV class ="SportsDirect">SPORTS DIRECT</DIV>
                    <DIV id ="SchoolNameHead"><?PHP echo $SCHOOL_NAME; ?></DIV>
                </DIV>
                
                <div id='cssmenu'>
                    <ul>
                    <li ><a href='http://csportsdirect.com'><span>Home</span></a></li>
                    <li class='has-sub active'><a href='#'><span>Schools</span></a>
                        <ul>
                            <li class ="SchoolsMenuShow"><DIV id ="SchoolMenuList">
                                    <?PHP
                                    
                                    ListMenuSchools();
                                    
                                    
                                    ?>
                                </DIV></li>
                        </ul>
                    </li>
                    <li class='has-sub'><a href='#'><span>Features</span></a>
                        <ul>
                            <li><a href='http://csportsdirect.com/HeismanWinners.php'><span>Heisman Winners</span></a></li>
                            <li><a href='http://csportsdirect.com/College_Football_TV_Schedule.php'><span>TV Schedule</span></a></li>
                        </ul>
                    </li>
                    </ul>
                </div>
                
            </DIV>    
        </DIV>
    </DIV>
    <div id ="ProfileMenuContainer">
        <div id ="ProfileMenu">
            <div id ="ProfileNavMenuBar"></div>

            <DIV id ="ProfileMenuLinkContain">
               <DIV id ="GeneralInfoButton" class ="TopMenuButtonActive">General</DIV>
                <DIV id ="FootballButton" class ="TopMenuButtonNotActive">Football</DIV>
                <DIV id ="BasketballButton" class ="TopMenuButtonNotActive">Basketball</DIV>
                <DIV id ="Section4Button" class ="TopMenuButtonNotActive">Fan Sites</DIV>
                <DIV id ="Section5Button" class ="TopMenuButtonNotActive">Videos</DIV>
            </DIV>    
            <div id ="ProfileNavMenuBarBottom"></div>
            
                
        </div>
    </div>
    
    <div id ="TopPush"></div>
    <DIV id ="MainContentContain">
                
                <div id ="borderlefttopfront"></div>
                <div id ="borderrighttopfront"></div>
                <div id ="borderleft"></div>
                <div id ="borderright"></div>
                <DIV id ="GeneralTopSection">
                    
                    <H1 class ="SectionHead">General Info</H1>

                    <IMG id ="RadioImg" src ="IMAGES_LATER/radio.png" alt ="radio_icon">

                    <?PHP
                    echo "<a class = 'OfficialAthleticSiteLink' href = '".$OFFICIAL_ATHLETIC_SITE."' target = '_blank'>".$OFFICIAL_ATHLETIC_NAME."</a>";
                    echo "<a class = 'GameRadioLink' href = '".$RADIO_LINK."' target = '_blank'>Game Radio</a>";


                    echo "<DIV id = 'Location'>".$HOME_CITY.", ".$STATE_NAME."</DIV>";
                    echo "<DIV id = 'Students'>".$STUDENT_POPULATION." students</DIV>";
                    echo "<DIV id = 'Endowment'>".$MONETARY_ENDOWMENT." endowment</DIV>";

                    $STADIUM_ADDRESS_FORMATTED = str_replace(" ", "+", $FOOTBALL_STADIUM_ADDRESS);

                    echo "<DIV id = 'FootballStadiumLabel'>Football Stadium:</DIV>";
                    echo "<a class = 'StadiumAddressLink' href = 'http://maps.google.com/maps?f=q&source=s%5Fq&hl=en&q=".$STADIUM_ADDRESS_FORMATTED."' target = '_blank'>".$FOOTBALL_STADIUM_NAME."</a>";

                    ?>
                    
                    
                    
                </DIV>

                <DIV id ="FootballSection">
                    <H1 class ="SectionHead">Football</H1>

                    <?PHP
                    echo "<a class = 'FootballSchedule' href = '".$FOOTBALL_SCHEDULE."' target = '_blank'>2013 Football Schedule</a>";
                    echo "<a class = 'FootballRoster' href = '".$FOOTBALL_ROSTER."' target = '_blank'>".$FOOTBALL_ROSTER_NAME."</a>";
                    ?>

                    <DIV id ="BasketballHistoryData">
                    <?PHP
                    IF (strlen($FOOTBALL_TOP_25_COUNT > 0)) { echo "<DIV id ='TournamnetAppearencesLabel' ><SPAN class ='SectionLabel'>Top 25 Seasons: </SPAN><SPAN id = 'FootballTourneyCount' class = 'StatText'>".$FOOTBALL_TOP_25_COUNT."</SPAN></DIV>"; }

                        echo "<DIV id = 'FootballTourneyAppearences' class = 'hidden'>".$FOOTBALL_TOP_25_YEARS."</DIV>";

                    IF (strlen($FOOTBALL_TOP_10_COUNT > 0)) { echo "<DIV id ='SweetSixteenAppearencesLabel' ><SPAN class ='SectionLabel'>Top 10 Seasons: </SPAN><SPAN id = 'FootballSweetSixteenCount' class = 'StatText'>".$FOOTBALL_TOP_10_COUNT."</SPAN></DIV>"; }

                        echo "<DIV id = 'FootballSweetSixteenAppearences' class = 'hidden'>".$FOOTBALL_TOP_10_YEARS."</DIV>";

                    IF (strlen($FOOTBALL_TOP_5_COUNT > 0)) { echo "<DIV id ='EliteEightAppearencesLabel' ><SPAN class ='SectionLabel'>Top 5 Seasons: </SPAN><SPAN id = 'FootballEliteEightCount' class = 'StatText'>".$FOOTBALL_TOP_5_COUNT."</SPAN></DIV>"; }

                        echo "<DIV id = 'FootballEliteEightAppearences' class = 'hidden'>".$FOOTBALL_TOP_5_YEARS."</DIV>";

                    IF (strlen($FOOTBALL_NATIONAL_TITLE_COUNT > 0)) { echo "<DIV id ='FinalFourAppearencesLabel' ><SPAN class ='SectionLabel'>National Championships: </SPAN><SPAN id = 'FootballFinalFourCount' class = 'StatText'>".$FOOTBALL_NATIONAL_TITLE_COUNT."</SPAN></DIV>";}

                        echo "<DIV id = 'FootballFinalFourAppearences' class = 'hidden'>".$FOOTBALL_NATIONAL_TITLE_YEARS."</DIV>";

                    echo "<DIV id ='NationalChampionshipsLabel' ><SPAN class ='SectionLabel'>Last Season: </SPAN><SPAN id = 'FootballNationalTitleCount' class = 'StatText'>".$LAST_SEASON_RECORD."</SPAN></DIV>"; 

                        echo "<DIV id = 'FootballNationalTitlesAppearences' class = 'hidden'>".$LAST_SEASON_POST."</DIV>";

                    $FOOTBALL_TOP_25_COUNT = $row['TOP_25_COUNT'];
                        $FOOTBALL_TOP_25_YEARS = $row['TOP_25_YEARS'];

                        $FOOTBALL_TOP_10_COUNT = $row['TOP_10_COUNT'];
                        $FOOTBALL_TOP_10_YEARS = $row['TOP_10_YEARS'];

                        $FOOTBALL_TOP_5_COUNT = $row['TOP_5_COUNT'];
                        $FOOTBALL_TOP_5_YEARS = $row['TOP_5_YEARS'];
                    ?>
                    </DIV>

                    <DIV id ="AllTimeRecordFootball"><?PHP echo $FOOTBALL_ALL_TIME_WINS." - ".$FOOTBALL_ALL_TIME_LOSSES." all time"; ?></DIV> 


                    <DIV class ="RecruitingHead">Recruiting Class</DIV>

                    <ul id ="FootballRecruitingList">
                        <?PHP
                            IF (!is_null($F_RECR_1) && $F_RECR_1 != "" && !is_null($F_RECR_NAME_1) && $F_RECR_NAME_1 != "" )
                            {
                                echo "<li class = 'ListItem' ><a href = '".$F_RECR_1."' target = '_blank'  >".$F_RECR_NAME_1."</a></li>";
                            }

                            IF (!is_null($F_RECR_2) && $F_RECR_2 != "" && !is_null($F_RECR_NAME_2) && $F_RECR_NAME_2 != "" )
                            {
                                echo "<li class = 'ListItem' ><a href = '".$F_RECR_2."' target = '_blank'  >".$F_RECR_NAME_2."</a></li>";
                            }

                            IF (!is_null($F_RECR_3) && $F_RECR_3 != "" && !is_null($F_RECR_NAME_3) && $F_RECR_NAME_3 != "" )
                            {
                                echo "<li class = 'ListItem' ><a href = '".$F_RECR_3."' target = '_blank'  >".$F_RECR_NAME_3."</a></li>";
                            }

                            IF (!is_null($F_RECR_4) && $F_RECR_4 != "" && !is_null($F_RECR_NAME_4) && $F_RECR_NAME_4 != "" )
                            {
                                echo "<li class = 'ListItem' ><a href = '".$F_RECR_4."' target = '_blank'  >".$F_RECR_NAME_4."</a></li>";
                            }

                            IF (!is_null($F_RECR_5) && $F_RECR_5 != "" && !is_null($F_RECR_NAME_5) && $F_RECR_NAME_5 != "" )
                            {
                                echo "<li class = 'ListItem' ><a href = '".$F_RECR_5."' target = '_blank' >".$F_RECR_NAME_5."</a></li>";
                            }
                        ?>
                    </ul>    

                </DIV>    

                <DIV id ="FootballSection">
                    <H1 class ="SectionHead">Basketball</H1>

                    <?PHP
                    echo "<a class = 'BasketballRoster' href = '".$BASKETBALL_ROSTER."' target = '_blank'>Basketball Roster</a>";
                    echo "<a class = 'BasketballSchedule' href = '".$BASKETBALL_SCHEDULE."' target = '_blank'>2013 Basketball Schedule</a>";
                    ?>

                    <DIV class ="RecruitingHead">Recruiting Class</DIV>

                    <ul id ="BasketballRecruitingList">
                        <?PHP
                                IF (!is_null($B_RECR_1) && $B_RECR_1 != "" && !is_null($B_RECR_NAME_1) && $B_RECR_NAME_1 != "" )
                            {
                                echo "<li class = 'ListItem' ><a href = '".$B_RECR_1."' target = '_blank'  >".$B_RECR_NAME_1."</a></li>";
                            }

                            IF (!is_null($B_RECR_2) && $B_RECR_2 != "" && !is_null($B_RECR_NAME_2) && $B_RECR_NAME_2 != "" )
                            {
                                echo "<li class = 'ListItem' ><a href = '".$B_RECR_2."' target = '_blank'  >".$B_RECR_NAME_2."</a></li>";
                            }

                            IF (!is_null($B_RECR_3) && $B_RECR_3 != "" && !is_null($B_RECR_NAME_3) && $B_RECR_NAME_3 != "" )
                            {
                                echo "<li class = 'ListItem' ><a href = '".$B_RECR_3."' target = '_blank'  >".$B_RECR_NAME_3."</a></li>";
                            }

                            IF (!is_null($B_RECR_4) && $B_RECR_4 != "" && !is_null($B_RECR_NAME_4) && $B_RECR_NAME_4 != "" )
                            {
                                echo "<li class = 'ListItem' ><a href = '".$B_RECR_4."' target = '_blank'  >".$B_RECR_NAME_4."</a></li>";
                            }

                            IF (!is_null($B_RECR_5) && $B_RECR_5 != "" && !is_null($B_RECR_NAME_5) && $B_RECR_NAME_5 != "" )
                            {
                                echo "<li class = 'ListItem' ><a href = '".$B_RECR_5."' target = '_blank' >".$B_RECR_NAME_5."</a></li>";
                            }
                        ?>
                    </ul>
                    <DIV id ="BasketballHistoryData">
                    <?PHP
                    IF (strlen($BAKETBALL_TOURNAMENT_APPEARENCES > 0)) { echo "<DIV id ='TournamnetAppearencesLabel' ><SPAN class ='SectionLabel'>Tournaments: </SPAN><SPAN id = 'BasketballTourneyCount' class = 'StatText'>".$BASKETBALL_TOURNAMENT_COUNT."</SPAN></DIV>"; }

                        echo "<DIV id = 'BasketballTourneyAppearences' class = 'hidden'>".$BAKETBALL_TOURNAMENT_APPEARENCES."</DIV>";

                    IF (strlen($BAKETBALL_SWEET_SIXTEEN > 0)) { echo "<DIV id ='SweetSixteenAppearencesLabel' ><SPAN class ='SectionLabel'>Sweet Sixteens: </SPAN><SPAN id = 'BasketballSweetSixteenCount' class = 'StatText'>".$BAKETBALL_SWEET_SIXTEEN_COUNT."</SPAN></DIV>"; }

                        echo "<DIV id = 'BasketballSweetSixteenAppearences' class = 'hidden'>".$BAKETBALL_SWEET_SIXTEEN."</DIV>";

                    IF (strlen($BAKETBALL_ELITE_EIGHT > 0)) { echo "<DIV id ='EliteEightAppearencesLabel' ><SPAN class ='SectionLabel'>Elite Eights: </SPAN><SPAN id = 'BasketballEliteEightCount' class = 'StatText'>".$BAKETBALL_ELITE_EIGHT_COUNT."</SPAN></DIV>"; }

                        echo "<DIV id = 'BasketballEliteEightAppearences' class = 'hidden'>".$BAKETBALL_ELITE_EIGHT."</DIV>";

                    IF (strlen($BAKETBALL_FINAL_FOUR > 0)) { echo "<DIV id ='FinalFourAppearencesLabel' ><SPAN class ='SectionLabel'>Final Fours: </SPAN><SPAN id = 'BasketballFinalFourCount' class = 'StatText'>".$BAKETBALL_FINAL_FOUR_COUNT."</SPAN></DIV>";}

                        echo "<DIV id = 'BasketballFinalFourAppearences' class = 'hidden'>".$BAKETBALL_FINAL_FOUR."</DIV>";

                    IF (strlen($BAKETBALL_TITLES > 0)) { echo "<DIV id ='NationalChampionshipsLabel' ><SPAN class ='SectionLabel'>National Championships: </SPAN><SPAN id = 'BasketballNationalTitleCount' class = 'StatText'>".$BAKETBALL_TITLES_COUNT."</SPAN></DIV>"; }

                        echo "<DIV id = 'BasketballNationalTitlesAppearences' class = 'hidden'>".$BAKETBALL_TITLES."</DIV>";

                    ?>
                    </DIV>
                    <DIV id ="AllTimeRecordBasketball"><?PHP IF ($ALL_BASKETBALL_WINS > 0) { echo $ALL_BASKETBALL_WINS." - ".$ALL_BASKETBALL_LOSSES." all time"; } ?></DIV> 
                </DIV>

                <DIV id ="Section4Section">
                    <H1 class ="SectionHead">Fan Sites</H1>

                    <DIV id ="BlogsHead">Blogs</DIV>

                    <ul id ="FootballRecruitingList">
                        <?PHP
                            IF (!is_null($BLOG_1) && $BLOG_1 != "" && !is_null($BLOG_NAME_1) && $BLOG_NAME_1 != "" )
                            {
                                echo "<li class = 'ListItem' ><a href = '".$BLOG_1."' target = '_blank'  >".$BLOG_NAME_1."</a></li>";
                            }

                            IF (!is_null($BLOG_2) && $BLOG_2 != "" && !is_null($BLOG_NAME_2) && $BLOG_NAME_2 != "" )
                            {
                                echo "<li class = 'ListItem' ><a href = '".$BLOG_2."' target = '_blank'  >".$BLOG_NAME_2."</a></li>";
                            }

                            IF (!is_null($BLOG_3) && $BLOG_3 != "" && !is_null($BLOG_NAME_3) && $BLOG_NAME_3 != "" )
                            {
                                echo "<li class = 'ListItem' ><a href = '".$BLOG_3."' target = '_blank'  >".$BLOG_NAME_3."</a></li>";
                            }

                            IF (!is_null($BLOG_4) && $BLOG_4 != "" && !is_null($BLOG_NAME_4) && $BLOG_NAME_4 != "" )
                            {
                                echo "<li class = 'ListItem' ><a href = '".$BLOG_4."' target = '_blank'  >".$BLOG_NAME_4."</a></li>";
                            }

                            IF (!is_null($BLOG_5) && $BLOG_5 != "" && !is_null($BLOG_NAME_5) && $BLOG_NAME_5 != "" )
                            {
                                echo "<li class = 'ListItem' ><a href = '".$BLOG_5."' target = '_blank' >".$BLOG_NAME_5."</a></li>";
                            }
                        ?>
                    </ul>



                    <DIV id ="MessageBoardsHead">Message Boards</DIV>

                    <ul id ="MessageBoardsList">
                        <?PHP
                            IF (!is_null($MESSAGE_BOARD_1) && $MESSAGE_BOARD_1 != "" && !is_null($MESSAGE_BOARD_NAME_1) && $MESSAGE_BOARD_NAME_1 != "" )
                            {
                                echo "<li class = 'ListItem' ><a href = '".$MESSAGE_BOARD_1."' target = '_blank'  >".$MESSAGE_BOARD_NAME_1."</a></li>";
                            }

                            IF (!is_null($MESSAGE_BOARD_2) && $MESSAGE_BOARD_2 != "" && !is_null($MESSAGE_BOARD_NAME_2) && $MESSAGE_BOARD_NAME_2 != "" )
                            {
                                echo "<li class = 'ListItem' ><a href = '".$MESSAGE_BOARD_2."' target = '_blank'  >".$MESSAGE_BOARD_NAME_2."</a></li>";
                            }

                            IF (!is_null($MESSAGE_BOARD_3) && $MESSAGE_BOARD_3 != "" && !is_null($MESSAGE_BOARD_NAME_3) && $MESSAGE_BOARD_NAME_3 != "" )
                            {
                                echo "<li class = 'ListItem' ><a href = '".$MESSAGE_BOARD_3."' target = '_blank'  >".$MESSAGE_BOARD_NAME_3."</a></li>";
                            }

                            IF (!is_null($MESSAGE_BOARD_4) && $MESSAGE_BOARD_4 != "" && !is_null($MESSAGE_BOARD_NAME_4) && $MESSAGE_BOARD_NAME_4 != "" )
                            {
                                echo "<li class = 'ListItem' ><a href = '".$MESSAGE_BOARD_4."' target = '_blank'  >".$MESSAGE_BOARD_NAME_4."</a></li>";
                            }

                            IF (!is_null($MESSAGE_BOARD_5) && $MESSAGE_BOARD_5 != "" && !is_null($MESSAGE_BOARD_NAME_5) && $MESSAGE_BOARD_NAME_5 != "" )
                            {
                                echo "<li class = 'ListItem' ><a href = '".$MESSAGE_BOARD_5."' target = '_blank' >".$MESSAGE_BOARD_NAME_5."</a></li>";
                            }
                        ?>
                    </ul>

                </DIV>

                <DIV id ="Section5Section">
                    <H1 class ="SectionHead">Videos</H1>
                    <?PHP

                    $QUERY_YOUTUBE = $db->prepare("select VIDEO_TITLE , YOUTUBE_KEY , VIEW_ORDER from school_videos where S_KEY = :s_key 
                                            and YOUTUBE_KEY IS NOT NULL and YOUTUBE_KEY != '' order by VIEW_ORDER");

                    $QUERY_YOUTUBE->bindValue(':s_key', $S_KEY);

                    $QUERY_YOUTUBE->execute();
                    //print_r($QUERY_RULE_COMMENTS->errorInfo());

                    $HORIZONTAL_COUNT = 1;
                    $VERTICAL_COUNT = 0;

                    $TOP_VIDEOS = 110;
                    $TOP_TEXT = 210;

                    while ($row = $QUERY_YOUTUBE->fetch(PDO::FETCH_ASSOC))
                    { 
                        $YOUTUBE_KEY = $row['YOUTUBE_KEY'];



                        IF ($HORIZONTAL_COUNT == 1)
                        {
                            $LEFT = "58px;";

                            $LEFT_TITLE = "48px";
                        }
                        ELSEIF ($HORIZONTAL_COUNT == 2)
                        {
                            $LEFT = "242px;";

                            $LEFT_TITLE = "232px";
                        }
                        ELSEIF ($HORIZONTAL_COUNT == 3)
                        {
                            $LEFT = "426px;";

                            $LEFT_TITLE = "416px";
                        }
                        ELSEIF ($HORIZONTAL_COUNT == 4)
                        {
                            $LEFT = "610px;";

                            $LEFT_TITLE = "600px";
                        }
                        ELSEIF ($HORIZONTAL_COUNT == 5)
                        {
                            $LEFT = "794px;";

                            $LEFT_TITLE = "784px";
                        }

                        echo "<img id = '".$row['YOUTUBE_KEY']."' class = 'YouTubeImage' src = 'http://img.youtube.com/vi/".$YOUTUBE_KEY."/0.jpg' style = 'position: absolute;
                            top: ".$TOP_VIDEOS."px; left: ".$LEFT."' >";

                        echo "<DIV id = '".$row['YOUTUBE_KEY']."' class = 'VideoTitle' style = 'position: absolute; top: ".$TOP_TEXT."px; left: ".$LEFT_TITLE."; '>".$row['VIDEO_TITLE']."</DIV>";

                        $HORIZONTAL_COUNT = $HORIZONTAL_COUNT + 1;

                        IF ($HORIZONTAL_COUNT == 6)
                        {
                            $VERTICAL_COUNT = $VERTICAL_COUNT + 1;

                            $TOP_VIDEOS = (110 + (150*$VERTICAL_COUNT));
                            $TOP_TEXT = (210 + (150*$VERTICAL_COUNT));

                            $HORIZONTAL_COUNT = 1;
                        }


                    }
                    IF ($HORIZONTAL_COUNT == 1)
                    {
                        $SECTION_5_SIZE = (300 + ($VERTICAL_COUNT-1)*150);
                    }
                    ELSE
                    {
                        $SECTION_5_SIZE = (300 + $VERTICAL_COUNT*150);
                    }


                    ?>

                </DIV>
                
                <DIV id ="Section6Section">
                    
                    
                <H1 class ="SectionHead">Twitter</H1>
                
                <DIV id ="TwitterWidget"><a class="twitter-timeline" href="https://twitter.com/Usportsdirect/usportsdirect" data-widget-id="371791603934842880">Tweets from @Usportsdirect/usportsdirect</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

                </DIV>
                
                </DIV>
                    
                </DIV>

            </DIV>
       <DIV id ="FooterContain">
           <DIV id ="FooterCenterMargin">
               <DIV id ="FooterCenterAbsolute">
                   <DIV id ="FooterTopBorder"></DIV>
                   
                   <DIV id ="CopyRight">&#169; Copyright 2013 Dynamic Web Vision LLC.  All Rights Reserved.</DIV>
                   
                   <ul id="navlist">
                    <?PHP Footer(); ?>
                  </ul>
                   
               </DIV>    
           </DIV>    
       </DIV>
    
   
</body> 

            <style>

           

            div#TopBar
            {
                width: 100%;
                background-color: <?PHP IF (strtoupper($COLOR_2) != "#FFFFFF"  ) { echo $COLOR_2; } else { echo "#3B3B3B"; } ?>;
                height: 4px;
                position: fixed;
                left: 0px;
                z-index: 1000;

                top: 0px;
                margin: 0px;
                padding: 0px;
                
            }

            div#contentpush
            {
                position: relative;
                width: 100%;
                height: 40px;

            }

            .TopMenuButtonNotActive
            {
                color: #F5F5F5;
            }

            .TopMenuButtonNotActive:hover
            {
                background-color: <?PHP IF (strtoupper($COLOR_2) != "#FFFFFF"  ) { echo $COLOR_2; } else { echo $COLOR_1; } ?>;

                color: #F5F5F5;
                cursor: pointer;
            }

            .TopMenuButtonActive
            {
                background-color: <?PHP IF (strtoupper($COLOR_2) != "#FFFFFF"  ) { echo $COLOR_2; } else { echo $COLOR_1; } ?>;

                color: #F5F5F5;
            }

            /*.TopMenuButtonNotActive
            {
                color: <?PHP echo $COLOR_1; ?>;
                cursor: pointer;
            }

            .TopMenuButtonNotActive:hover
            {
                background-color: <?PHP echo $COLOR_2; ?>;

                color: <?PHP echo $COLOR_1; ?>;
            }

            .TopMenuButtonActive
            {
                background-color: <?PHP echo $COLOR_1; ?>;

                color: <?PHP echo $COLOR_2; ?>;
            }*/

            div#ProfileMenu
            {
                margin: auto;
                width: 1024px;
                height: 30px;
                background: url("BACKGROUNDS/mochaGrunge.png");

            }

            .SportsDirect
            {
                color: <?PHP IF ( $COLOR_2 == "#FFFFFF") {echo "#8A8A8A"; } else { echo "#F5F5F5"; }  ?>;;
                font-size: 2.1em;
                font-family: 'Roboto Condensed', sans-serif;
                position: absolute;
                left: 50px;
                top: 6px;
                width: 250px;
            }

            .ULogo
            {   
                padding-top: 0px;
                font-family: 'Coda Caption', sans-serif;
                color: <?PHP echo $COLOR_2; ?>;
                font-size: 4.2em;
               
                position: absolute;
                left: -4px;
                top: -14px;
                
            }

            .RecruitingHead
            {
                position: absolute;
                color: <?PHP echo $COLOR_1; ?> ;
                top: 90px;
                left: 325px;
                font-size: 1.3em;
            }

            #FootballRecruitingList
            {
                position: absolute;
                list-style-type:none;
                top: 96px;
                left: 315px;
                font-size: 1.1em;

                color: <?PHP echo $COLOR_1; ?>;
            }

            DIV#BlogsHead
            {
                position: absolute;
                color: <?PHP echo $COLOR_1; ?> ;
                top: 90px;
                left: 325px;
                font-size: 1.5em;
            }

            #BlogsList
            {
                position: absolute;
                list-style-type:none;
                top: 96px;
                left: 315px;
                font-size: 1.2em;

                color: <?PHP echo $COLOR_1; ?>;
            }

            DIV#MessageBoardsHead
            {
                position: absolute;
                color: <?PHP echo $COLOR_1; ?> ;
                top: 90px;
                left: 45px;
                font-size: 1.5em;
            }

            #MessageBoardsList
            {
                position: absolute;
                list-style-type:none;
                top: 96px;
                left: 35px;
                font-size: 1.1em;

                color: <?PHP echo $COLOR_1; ?>;
            }


            #BasketballRecruitingList
            {
                position: absolute;
                list-style-type:none;
                top: 96px;
                left: 315px;
                font-size: 1.1em;

                color: <?PHP echo $COLOR_1; ?>;
            }

            .ListItem a
            {
                color: #808080;
                font-style: italic;
            }

            DIV#Location
            {
                position: absolute;
                top: 160px;
                left: 50px;
                font-size: 1.2em;

                color: <?PHP echo $COLOR_1; ?>;

            }

            DIV#Students
            {
                position: absolute;
                top: 190px;
                left: 50px;
                font-size: 1.2em;

                color: <?PHP echo $COLOR_1; ?>;
            }

            DIV#Endowment
            {
                position: absolute;
                top: 220px;
                left: 50px;
                font-size: 1.2em;

                color: <?PHP echo $COLOR_1; ?>;
            }

            .YouTubeImage
            {
                border-style: solid; 
                border-width: 3px; 
                border-color: <?PHP echo $COLOR_1; ?>;
                border-radius: 3px;

                width: 120px;
                height: 90px;
            }

            .YouTubeImage:hover
            {
                border-color: #9C9C9C;
                border-style: solid; 
                border-width: 3px; 
                border-radius: 3px;

                cursor: pointer;

                box-shadow: 0px 2px 2px #DEDEDE;
            }

            .VideoTitle
            {
                width: 145px;

                text-align: center;
                font-size: .75em;

                line-height: 1;

                color: #9C9C9C;
            }

            .VideoTitle:hover
            {
                text-decoration: underline;
                color:  <?PHP echo $COLOR_1; ?>;
                cursor: pointer;
            }

            .StatText
            {
                color:  <?PHP echo $COLOR_1; ?>;
                font-size: 1em;
                font-weight: bold;
                font-style: italic;
                cursor: pointer;
            }

            DIV#Video1
            {
                position: absolute;
                width: 420px;
                height: 315px;

                border-width: 3px;
                border-style: ridge;
                border-color: <?PHP echo $COLOR_1; ?>;

                background-color: #7A7A7A;

                box-shadow: 4px 4px 3px #888888;
            }

            DIV#AllTimeRecordBasketball
            {   
                position: absolute;
                left: 50px;
                bottom: 15px;
                color:  <?PHP echo $COLOR_1; ?>;
                font-size: 1.2em;
                font-weight: bold;
                font-style: italic;
            }

            DIV#AllTimeRecordFootball
            {   
                position: absolute;
                left: 50px;
                bottom: 15px;
                color:  <?PHP echo $COLOR_1; ?>;
                font-size: 1.2em;
                font-weight: bold;
                font-style: italic;
            }

            DIV#BasketballTourneyAppearences
            {
                position: absolute;
                left: 150px;

                color:  <?PHP echo $COLOR_1; ?>;

                width: 300px;

                min-height: 100px;
                background: url("BACKGROUNDS/cloth_alike.png");

                border-width: 2px;
                border-style: ridge;
                border-color: <?PHP echo $COLOR_1; ?>;
                border-radius: 3px;
                z-index: 1000;

                padding: 5px;
                overflow-x: hidden;
                overflow-y: scroll;
                box-shadow: 4px 4px 3px #888888;
                font-size: .9em;
            }

            DIV#BasketballSweetSixteenAppearences
            {
                position: absolute;
                left: 130px;
                top: 20px;

                color:  <?PHP echo $COLOR_1; ?>;

                width: 150px;

                min-height: 100px;
                background: url("BACKGROUNDS/cloth_alike.png");

                border-width: 2px;
                border-style: ridge;
                border-color: <?PHP echo $COLOR_1; ?>;
                border-radius: 3px;
                z-index: 1000;

                padding: 5px;
                overflow-x: hidden;
                box-shadow: 4px 4px 3px #888888;
                font-size: .9em;
            }

            DIV#BasketballEliteEightAppearences
            {
                position: absolute;
                left: 110px;
                top: 40px;

                color:  <?PHP echo $COLOR_1; ?>;

                width: 150px;

                min-height: 50px;
                background: url("BACKGROUNDS/cloth_alike.png");

                border-width: 2px;
                border-style: ridge;
                border-color: <?PHP echo $COLOR_1; ?>;
                border-radius: 3px;
                z-index: 1000;

                padding: 5px;
                overflow-x: hidden;
                box-shadow: 4px 4px 3px #888888;
                font-size: .9em;
            }

            DIV#BasketballFinalFourAppearences
            {
                position: absolute;
                left: 110px;
                top: 60px;

                color:  <?PHP echo $COLOR_1; ?>;

                width: 150px;

                min-height: 50px;
                background: url("BACKGROUNDS/cloth_alike.png");

                border-width: 2px;
                border-style: ridge;
                border-color: <?PHP echo $COLOR_1; ?>;
                border-radius: 3px;
                z-index: 1000;

                padding: 5px;
                overflow-x: hidden;
                box-shadow: 4px 4px 3px #888888;
                font-size: .9em;
            }

            DIV#BasketballNationalTitlesAppearences
            {
                position: absolute;
                left: 190px;
                top: 80px;

                color:  <?PHP echo $COLOR_1; ?>;

                width: 150px;

                min-height: 50px;
                background: url("BACKGROUNDS/cloth_alike.png");

                border-width: 2px;
                border-style: ridge;
                border-color: <?PHP echo $COLOR_1; ?>;
                border-radius: 3px;
                z-index: 1000;

                padding: 5px;
                overflow-x: hidden;

                box-shadow: 4px 4px 3px #888888;
                font-size: .9em;
            }


            DIV#FootballTourneyAppearences
            {
                position: absolute;
                left: 150px;

                color:  <?PHP echo $COLOR_1; ?>;

                width: 300px;

                min-height: 100px;
                background: url("BACKGROUNDS/cloth_alike.png");

                border-width: 2px;
                border-style: ridge;
                border-color: <?PHP echo $COLOR_1; ?>;
                border-radius: 3px;
                z-index: 1000;

                padding: 5px;
                overflow-x: hidden;
                overflow-y: scroll;
                box-shadow: 4px 4px 3px #888888;
                
                font-size: .9em;
            }

            DIV#FootballSweetSixteenAppearences
            {
                position: absolute;
                left: 142px;
                top: 20px;

                color:  <?PHP echo $COLOR_1; ?>;

                width: 150px;
                font-size: .9em;
                min-height: 100px;
                background: url("BACKGROUNDS/cloth_alike.png");

                border-width: 2px;
                border-style: ridge;
                border-color: <?PHP echo $COLOR_1; ?>;
                border-radius: 3px;
                z-index: 1000;

                padding: 5px;
                overflow-x: hidden;
                box-shadow: 4px 4px 3px #888888;
            }

            DIV#FootballEliteEightAppearences
            {
                position: absolute;
                left: 131px;
                top: 40px;

                color:  <?PHP echo $COLOR_1; ?>;

                width: 150px;

                min-height: 50px;
                background: url("BACKGROUNDS/cloth_alike.png");

                border-width: 2px;
                border-style: ridge;
                border-color: <?PHP echo $COLOR_1; ?>;
                border-radius: 3px;
                z-index: 1000;
                font-size: .9em;
                padding: 5px;
                overflow-x: hidden;
                box-shadow: 4px 4px 3px #888888;
            }

            DIV#FootballFinalFourAppearences
            {
                position: absolute;
                left: 190px;
                top: 60px;

                color:  <?PHP echo $COLOR_1; ?>;

                width: 150px;

                min-height: 50px;
                background: url("BACKGROUNDS/cloth_alike.png");

                border-width: 2px;
                border-style: ridge;
                border-color: <?PHP echo $COLOR_1; ?>;
                border-radius: 3px;
                z-index: 1000;
                font-size: .9em;
                padding: 5px;
                overflow-x: hidden;
                box-shadow: 4px 4px 3px #888888;
            }

            DIV#FootballNationalTitlesAppearences
            {
                position: absolute;
                left: 190px;
                top: 80px;

                color:  <?PHP echo $COLOR_1; ?>;

                width: 150px;

                min-height: 50px;
                background: url("BACKGROUNDS/cloth_alike.png");

                border-width: 2px;
                border-style: ridge;
                border-color: <?PHP echo $COLOR_1; ?>;
                border-radius: 3px;
                z-index: 1000;

                padding: 5px;
                overflow-x: hidden;

                box-shadow: 4px 4px 3px #888888;
                font-size: .9em;
            }

            DIV#Section5Section
            {
                position: relative;
                width: 100%;
                height: <?PHP echo $SECTION_5_SIZE."px"; ?>;


                background: #FFFFFF; /* Background for IE9 and older browsers */
                background: -webkit-linear-gradient(bottom, #FAFAFA,#FFFFFF ); /* Background for Chrome & Safari */
                background: -moz-linear-gradient(bottom, #FAFAFA,#FFFFFF); /* Background for Firefox */
                background: -o-linear-gradient(bottom, #FAFAFA,#FFFFFF); /* Background for Opera */
                background: -ms-linear-gradient(bottom, #FAFAFA,#FFFFFF); /* Background for Internet Explorer 10 */   
            }
            
            DIV#Section6Section
            {
                position: relative;
                width: 100%;
                height: 520px;


                background: #FFFFFF; /* Background for IE9 and older browsers */
                background: -webkit-linear-gradient(bottom, #FAFAFA,#FFFFFF ); /* Background for Chrome & Safari */
                background: -moz-linear-gradient(bottom, #FAFAFA,#FFFFFF); /* Background for Firefox */
                background: -o-linear-gradient(bottom, #FAFAFA,#FFFFFF); /* Background for Opera */
                background: -ms-linear-gradient(bottom, #FAFAFA,#FFFFFF); /* Background for Internet Explorer 10 */   
            }
            
            DIV#FootballStadiumLabel
            {
                position: absolute;
                left: 320px;
                top: 120px;
                font-size: 1.2em;
                color:  <?PHP echo $COLOR_1; ?>;
            }

            .StadiumAddressLink
            {
                position: absolute;
                left: 478px;
                width: 250px;
                top: 120px;
                font-size: 1em;
                color:  #808080;

                font-style: italic;
            }

            .StadiumAddressLink:hover
            {
                color:  <?PHP echo $COLOR_1; ?>;
                text-decoration: underline;
            }
            
            DIV#FooterTopBorder
            {
                position: absolute;
                width: 100%;
                height: 3px;
                background-color: <?PHP echo $COLOR_1; ?>;
            }
            
            DIV#SchoolNameHead
            {
                position: absolute;
                font-family: 'Francois One', sans-serif;
                color: <?PHP echo $COLOR_2;    ?>;
                width: 210px;
                height: 25px;
                left: 50px;
                top: 42px;
                text-align: center;
                font-size: 1.1em;
            }
            
            DIV#PageTextAd
            {
                position: absolute;
                right: 10px;
                bottom: 5px;
                
                border-width: 2px;
                border-style: ridge;
                border-color: <?PHP echo $COLOR_1; ?>;
                border-radius: 3px;
                z-index: 1;
                
                width: 300px;
                height: 250px;
            }
            
            div#ProfileNavMenuBar
            {
                position: absolute;
                top: -2px;
                width: 1024px;
                height: 2px;
                background-color: <?PHP IF ( $COLOR_2 != "#FFFFFF") {echo $COLOR_2; } else { echo "#3B3B3B"; }  ?>;
            /*    background: #C4C4C4;  Background for IE9 and older browsers 
                background: -webkit-linear-gradient(bottom, #C4C4C4, #6B6B6B);  Background for Chrome & Safari 
                background: -moz-linear-gradient(bottom, #C4C4C4, #6B6B6B);  Background for Firefox 
                background: -o-linear-gradient(bottom, #C4C4C4, #6B6B6B);  Background for Opera 
                background: -ms-linear-gradient(bottom, #C4C4C4, #6B6B6B);  Background for Internet Explorer 10 */

            }

            div#ProfileNavMenuBarBottom
            {
                position: absolute;
                bottom: -2px;
                width: 1024px;
                height: 2px;
                background-color: <?PHP IF ( $COLOR_2 != "#FFFFFF") {echo $COLOR_2; } else { echo "#3B3B3B"; }  ?>;

            /*    background: #C4C4C4;  Background for IE9 and older browsers 
                background: -webkit-linear-gradient(bottom, #C4C4C4, #6B6B6B);  Background for Chrome & Safari 
                background: -moz-linear-gradient(bottom, #C4C4C4, #6B6B6B);  Background for Firefox 
                background: -o-linear-gradient(bottom, #C4C4C4, #6B6B6B);  Background for Opera 
                background: -ms-linear-gradient(bottom, #C4C4C4, #6B6B6B);  Background for Internet Explorer 10 */


                box-shadow: 0px 3px 3px #DEDEDE;
            }
            
            .navhigh 
            {  background: <?PHP echo $COLOR_1; ?>; 
                background: -webkit-linear-gradient(bottom, <?PHP echo $LIGHT_COLOR; ?> , <? echo $DARK_COLOR; ?> );  
                background: -moz-linear-gradient(bottom, <?PHP echo $LIGHT_COLOR; ?> , <? echo $DARK_COLOR; ?> );  
                background: -o-linear-gradient(bottom, <?PHP echo $LIGHT_COLOR; ?> , <? echo $DARK_COLOR; ?> ); 
                background: -ms-linear-gradient(bottom, <?PHP echo $LIGHT_COLOR; ?> , <? echo $DARK_COLOR; ?> ); 
            }

            /*#navhigh
            {
                background: #C4C4C4;  Background for IE9 and older browsers 
                background: -webkit-linear-gradient(bottom, #858585, #9E9E9E);  Background for Chrome & Safari 
                background: -moz-linear-gradient(bottom, #858585, #9E9E9E);  Background for Firefox 
                background: -o-linear-gradient(bottom, #858585, #9E9E9E);  Background for Opera 
                background: -ms-linear-gradient(bottom, #858585, #9E9E9E);  Background for Internet Explorer 10 
            }*/

        </style>
        <script type="text/javascript">
                $(document).ready(function(){

               $(window).load(function() {
                        $("#MainBody").fadeIn("400");
                    });


//                var border_left = "<style> DIV#borderleft { position: absolute; left: -8px; top: -92px; width: 8px; height: "+main_height+"px; background: #C4C4C4; background: -webkit-linear-gradient(left, #0F0F0F, #949494); background: -moz-linear-gradient(left, #0F0F0F, #949494); background: -o-linear-gradient(left, #0F0F0F, #949494); background: -ms-linear-gradient(left, #0F0F0F, #949494); box-shadow: -5px 0px 8px #888888; } </style>";
//                var border_right = "<style> DIV#borderright { position: absolute; left: 1024px; top: -92px; width: 8px; height: "+main_height+"px; background: #C4C4C4; background: -webkit-linear-gradient(right, #0F0F0F, #949494); background: -moz-linear-gradient(right, #0F0F0F, #949494); background: -o-linear-gradient(right, #0F0F0F, #949494); background: -ms-linear-gradient(right, #0F0F0F, #949494); box-shadow: 5px 0px 8px #888888; } </style>";

//                function ColorLuminance(hex, lum) {
//                                // validate hex string
//                                hex = String(hex).replace(/[^0-9a-f]/gi, '');
//                                if (hex.length < 6) {
//                                        hex = hex[0]+hex[0]+hex[1]+hex[1]+hex[2]+hex[2];
//                                }
//                                lum = lum || 0;
//                                // convert to decimal and change luminosity
//                                var rgb = "#", c, i;
//                                for (i = 0; i < 3; i++) {
//                                        c = parseInt(hex.substr(i*2,2), 16);
//                                        c = Math.round(Math.min(Math.max(0, c + (c * lum)), 255)).toString(16);
//                                        rgb += ("00"+c).substr(c.length);
//                                }
//                                return rgb;
//                        }
//
//                    var color_1_bright = ColorLuminance(color_1, .2);
//                    var color_1_dark = ColorLuminance(color_1, -.2);
//                    var style_insert = "<style> .navhigh {  background: "+color_1+"; background: -webkit-linear-gradient(bottom, "+color_1_bright+", "+color_1_dark+");  background: -moz-linear-gradient(bottom, "+color_1_bright+", "+color_1_dark+");  background: -o-linear-gradient(bottom, "+color_1_bright+", "+color_1_dark+"); background: -ms-linear-gradient(bottom, "+color_1_bright+", "+color_1_dark+"); } </style>";

            // document.write(style_insert);

//            $(style_insert)
//                .appendTo("head");
            //$('#body-wrap').preloadThis();
//
//            $(border_left)
//                .appendTo("head");
//
//            $(border_right)
//                .appendTo("head");     
            //$('#body-wrap').preloadThis();

                });






            </script>
</html>