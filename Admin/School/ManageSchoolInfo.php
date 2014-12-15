<?PHP
ob_start(); 
session_start();


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
          
        $QUERY_SCHOOL->bindValue(':s_key', $_SESSION['S_KEY']);
        
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
            
        
        }
?>
<!DOCTYPE html>
<!--[if lt IE 9]>             <html class="no-js ie lt-ie9" lang="en-US"><![endif]-->
<!--[if IE 9]>                <html class="no-js ie ie9" lang="en-US">   <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class="no-js no-ie" lang="en-US">    <!--<![endif]-->

	<!-- Head section -->
<head>
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-43633819-1', 'usportsdirect.com');
    ga('send', 'pageview');

    </script>
    
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
    <meta name='keywords' content='U Sports Direct, College Football, College Basketball, College Game Radio, College Sports Directory'>
    <meta name='description' content='U Sports Direct is a college sports directory for College Football, College Basketball, College Spots Radio, and everything related to college sports.'>
    <META NAME="ROBOTS" CONTENT="INDEX, FOLLOW">

    <link rel="stylesheet" href="MainStyleSheet.css" />
    <link rel="stylesheet" href="CSS_Page_Specific/MainTemplateStyle.css" />
    <link rel="stylesheet" href="CSS_Page_Specific/HeismanWinners.css" />
    <link rel="stylesheet" href="CSS_Page_Specific/AdminManagemnet.css" />

    <link href='http://fonts.googleapis.com/css?family=Coda+Caption:800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="data/css/mobile.min.css" media="only screen and (max-width: 767px)" />

    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="JQuery.js"></script>
    <script type="text/javascript" src="Javascript_Specific_Page/Heismans.js"></script>

    <script type="text/javascript">
        
        
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
            window.location = "MobileMain.php";
        }
        
    </script> 

    <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <script type="text/javascript" src="data/js/selectivizr.min.js"></script>
    <![endif]-->
    <title>C Sports Direct</title>
</head>

<body id ="MainBody">
    
    <DIV id ="FixedContain" class ="hidden">
        <DIV id ="VideoContainCenter">
            <DIV id ="Video1">
                <DIV class ="CloseYouTubeVideo1"></DIV>
                <DIV id ="VideoCode"></DIV>
            </DIV>


        </DIV>
    </DIV>
    
    <div class ="page-wrap">
<!--    <DIV id ="WhiteOverBlanket" class ="hidden"></DIV>-->
    
    
    
    <div id ="TopBar"></div>
    <DIV id ="CenterFixed">
        <DIV id ="HeadMargin">
            <DIV id ="MainHeadAbsolute" class ="navhigh">
                <DIV id ="LogoCustom">
                    <DIV class ="ULogo">C</DIV><DIV class ="SportsDirect">SPORTS DIRECT</DIV>
                    <DIV id ="PageNameHead">College Sports Direct</DIV>
                </DIV>
                
                <div id='cssmenu'>
                    <ul>
                    <li ><a href='index.php'><span>Home</span></a></li>
                  
                    <li class='has-sub'><a href='#'><span>Functions</span></a>
                        <ul>
                            <li><a href='AdminSubmitStory.php'><span>Create Story</span></a></li>
                        </ul>
                    </li>
                    </ul>
                </div>
                
            </DIV>    
        </DIV>
    </DIV>
    <div id ="FrontMenuContain">
        <div id ="FrontMenu">
            <div id ="ProfileNavMenuBar"></div>

            <DIV id ="ProfileMenuLinkContain">
              
              
                
            </DIV>    
            <div id ="ProfileNavMenuBarBottom"></div>
            
                
        </div>
    </div>
    
    <div id ="TopPush"></div>
    <DIV id ="MainContentContain" class ="MainContentContainClass">
        <div id ="borderleft"></div>
        <div id ="borderright"></div>
        
        <div id ="borderlefttopfront"></div>
        <div id ="borderrighttopfront"></div>
        
        <DIV id ="MainContentFront">
            
            <BR><BR><BR><BR>
            <H1 class ="ML">Admin Management</H1>
            <?PHP
                


            ?>
            
            </DIV>
            <DIV class ="FiftyPush"></DIV>
        
            
        </DIV>    
    </DIV>
    </div>
        
       <div class ="site-footer"> 
       <DIV id ="FooterContain">
           <DIV id ="FooterCenterMargin">
               <DIV id ="FooterCenterAbsolute">
                   <DIV id ="FooterTopBorder"></DIV>
                   
                   <DIV id ="CopyRight">&#169; Copyright 2013 Dynamic Web Vision LLC.  All Rights Reserved.</DIV>
                   
                   <div id ="navlistcontain">
                    <ul id="navlist">
                        <?PHP Footer(); ?>
                    </ul>
                  </div> 
                       
               </DIV>    
           </DIV>    
       </DIV>
       </div>    
    
</body> 

             <script type="text/javascript">
                $(document).ready(function(){


                var main_height = $(".page-wrap").height()-36;
                var main_content_height = $(".page-wrap").height()-128;

                
                var main_content = "<style>DIV#MainContentContain { min-height: "+main_content_height+"px; background: #FFFFFF; /* Background for IE9 and older browsers */ background: -webkit-linear-gradient(bottom, #FAFAFA,#FFFFFF ); /* Background for Chrome & Safari */  background: -moz-linear-gradient(bottom, #FAFAFA,#FFFFFF); /* Background for Firefox */ background: -o-linear-gradient(bottom, #FAFAFA,#FFFFFF); /* Background for Opera */  background: -ms-linear-gradient(bottom, #FAFAFA,#FFFFFF);} </style>";
 
                
//                $(border_left)
//                .appendTo("head");
//
//                $(border_right)
//                    .appendTo("head");     
                //$('#body-wrap').preloadThis();
                $(main_content)
                    .appendTo("head"); 
                    
                $(window).resize(function() {
                    
                    var main_height_resize = $(".page-wrap").height()-128;
                    var main_content_height_resize = $(".page-wrap").height();

                   
                    var main_content = "<style>DIV#MainContentContain { min-height: "+main_content_height+"px; background: #FFFFFF; /* Background for IE9 and older browsers */ background: -webkit-linear-gradient(bottom, #FAFAFA,#FFFFFF ); /* Background for Chrome & Safari */  background: -moz-linear-gradient(bottom, #FAFAFA,#FFFFFF); /* Background for Firefox */ background: -o-linear-gradient(bottom, #FAFAFA,#FFFFFF); /* Background for Opera */  background: -ms-linear-gradient(bottom, #FAFAFA,#FFFFFF);} </style>";
 
                
//                $(border_left)
//                .appendTo("head");
//
//                $(border_right)
//                    .appendTo("head");     
                //$('#body-wrap').preloadThis();
                $(main_content)
                    .appendTo("head"); 
                });    
                    
                    
                });


                



            </script>
</html>