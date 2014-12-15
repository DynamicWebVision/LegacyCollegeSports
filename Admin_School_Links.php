<?
ob_start(); 
session_start();

if (isset($_GET['S_KEY']))
{
    $S_KEY = $_GET['S_KEY'];
}


//IF (!ISSET($_SESSION['CS_LOGIN_PASS']))
//        {
//            header("Location: index.php");
//        }
        
        IF (isset($_POST['submit'])) 
                 { 
            
              
                 require_once('CS_Functions.php');
                 
                 $S_KEY = $_POST['S_KEY'];
                                
                 get_old_db_connection();
                 
                    $BAR_1 = $_POST['BAR_1'];
                    $BAR_NAME_1 = $_POST['BAR_NAME_1'];
                    $BAR_2 = $_POST['BAR_2'];
                    $BAR_NAME_2 = $_POST['BAR_NAME_2'];
                    $BAR_3 = $_POST['BAR_3'];
                    $BAR_NAME_3 = $_POST['BAR_NAME_3'];
                    
                    $B_RECR_1 = $_POST['B_RECR_1']; 
                    $B_RECR_NAME_1 = $_POST['B_RECR_NAME_1'];
                    $B_RECR_2 = $_POST['B_RECR_2'];
                    $B_RECR_NAME_2 = $_POST['B_RECR_NAME_2'];
                    $B_RECR_3 = $_POST['B_RECR_3'];
                    $B_RECR_NAME_3 = $_POST['B_RECR_NAME_3'];
                    $B_RECR_4 = $_POST['B_RECR_4'];
                    $B_RECR_NAME_4 = $_POST['B_RECR_NAME_4'];
                    $B_RECR_5 = $_POST['B_RECR_5'];
                    $B_RECR_NAME_5 = $_POST['B_RECR_NAME_5'];
                    
                    $BLOG_1 = $_POST['BLOG_1']; 
                    $BLOG_NAME_1 = $_POST['BLOG_NAME_1']; 
                    $BLOG_2 = $_POST['BLOG_2'];
                    $BLOG_NAME_2 = $_POST['BLOG_NAME_2'];
                    $BLOG_3 = $_POST['BLOG_3'];
                    $BLOG_NAME_3 = $_POST['BLOG_NAME_3'];
                    $BLOG_4 = $_POST['BLOG_4'];
                    $BLOG_NAME_4 = $_POST['BLOG_NAME_4'];
                    $BLOG_5 = $_POST['BLOG_5'];
                    $BLOG_NAME_5 = $_POST['BLOG_NAME_5'];
                    
                    $F_RECR_1 = $_POST['F_RECR_1'];
                    $F_RECR_NAME_1 = $_POST['F_RECR_NAME_1'];
                    $F_RECR_2 = $_POST['F_RECR_2'];
                    $F_RECR_NAME_2 = $_POST['F_RECR_NAME_2'];
                    $F_RECR_3 = $_POST['F_RECR_3'];
                    $F_RECR_NAME_3 = $_POST['F_RECR_NAME_3'];
                    $F_RECR_4 = $_POST['F_RECR_4'];
                    $F_RECR_NAME_4 = $_POST['F_RECR_NAME_4'];
                    $F_RECR_5 = $_POST['F_RECR_5'];
                    $F_RECR_NAME_5 = $_POST['F_RECR_NAME_5'];
                    
                    $RADIO_LINK = $_POST['RADIO_LINK'];
                    $RADIO_LINK_NAME = $_POST['RADIO_NAME'];
                    $OFFICIAL_ATHLETIC_SITE = $_POST['OFFICIAL_ATHLETIC_LINK'];
                    $OFFICIAL_ATHLETIC_NAME = $_POST['OFFICIAL_ATHLETIC_NAME'];
                    $FOOTBALL_ROSTER = $_POST['FOOTBALL_ROSTER'];
                    $FOOTBALL_ROSTER_NAME = $_POST['FOOTBALL_ROSTER_NAME'];
                    $FOOTBALL_SCHEDULE = $_POST['FOOTBALL_SCHEDULE'];
                    $FOOTBALL_SCHEDULE_NAME = $_POST['FOOTBALL_SCHEDULE_NAME'];
                    $BASKETBALL_ROSTER = $_POST['BASKETBALL_ROSTER'];
                    $BASKETBALL_ROSTER_NAME = $_POST['BASKETBALL_ROSTER_NAME'];
                    $BASKETBALL_SCHEDULE = $_POST['BASKETBALL_SCHEDULE'];
                    
                    $MESSAGE_BOARD_1 = $_POST['MESSAGE_BOARD_1'];
                    $MESSAGE_BOARD_NAME_1 = $_POST['MESSAGE_BOARD_NAME_1'];
                    $MESSAGE_BOARD_USER_NAME_1 = $_POST['MESSAGE_BOARD_USER_NAME_1'];
                    $MESSAGE_BOARD_PASSWORD_1 = $_POST['MESSAGE_BOARD_PASS_1'];
                    
                    $MESSAGE_BOARD_2 = $_POST['MESSAGE_BOARD_2'];
                    $MESSAGE_BOARD_NAME_2 = $_POST['MESSAGE_BOARD_NAME_2'];
                    $MESSAGE_BOARD_USER_NAME_2 = $_POST['MESSAGE_BOARD_USER_NAME_2'];
                    $MESSAGE_BOARD_PASSWORD_2 = $_POST['MESSAGE_BOARD_PASS_2'];
                    
                    $MESSAGE_BOARD_3 = $_POST['MESSAGE_BOARD_3'];
                    $MESSAGE_BOARD_NAME_3 = $_POST['MESSAGE_BOARD_NAME_3'];
                    $MESSAGE_BOARD_USER_NAME_3 = $_POST['MESSAGE_BOARD_USER_NAME_3'];
                    $MESSAGE_BOARD_PASSWORD_3 = $_POST['MESSAGE_BOARD_PASS_3'];
                    
                    $MESSAGE_BOARD_4 = $_POST['MESSAGE_BOARD_4'];
                    $MESSAGE_BOARD_NAME_4 = $_POST['MESSAGE_BOARD_NAME_4'];
                    $MESSAGE_BOARD_USER_NAME_4 = $_POST['MESSAGE_BOARD_USER_NAME_4'];
                    $MESSAGE_BOARD_PASSWORD_4 = $_POST['MESSAGE_BOARD_PASS_4'];
                    
                    $MESSAGE_BOARD_5 = $_POST['MESSAGE_BOARD_5'];
                    $MESSAGE_BOARD_NAME_5 = $_POST['MESSAGE_BOARD_NAME_5'];
                    $MESSAGE_BOARD_USER_NAME_5 = $_POST['MESSAGE_BOARD_USER_NAME_5'];
                    $MESSAGE_BOARD_PASSWORD_5 = $_POST['MESSAGE_BOARD_PASS_5'];
                    
                    $RESTAURANT_1 = $_POST['RESTAURANT_1'];
                    $RESTAURANT_NAME_1 = $_POST['RESTAURANT_NAME_1'];
                    $RESTAURANT_2 = $_POST['RESTAURANT_2'];
                    $RESTAURANT_NAME_2 = $_POST['RESTAURANT_NAME_2'];
                    $RESTAURANT_3 = $_POST['RESTAURANT_3'];
                    $RESTAURANT_NAME_3 = $_POST['RESTAURANT_NAME_3'];
                    
                    $TRADITION_1 = $_POST['TRADITION_1'];
                    $TRADITION_NAME_1 = $_POST['TRADITION_NAME_1'];
                    $TRADITION_2 = $_POST['TRADITION_2'];
                    $TRADITION_NAME_2 = $_POST['TRADITION_NAME_2'];
                    $TRADITION_3 = $_POST['TRADITION_3'];
                    $TRADITION_NAME_3 = $_POST['TRADITION_NAME_3'];
                    $TRADITION_4 = $_POST['TRADITION_4'];
                    $TRADITION_NAME_4 = $_POST['TRADITION_NAME_4'];
                    $TRADITION_5 = $_POST['TRADITION_5'];
                    $TRADITION_NAME_5 = $_POST['TRADITION_NAME_5'];
                    
                    $COLOR_U = $_POST['COLOR_U'];
                    $COLOR_SPORTS_DIRECT = $_POST['COLOR_SPORTS_DIRECT'];
                    $COLOR_TOP_BAR = $_POST['COLOR_TOP_BAR'];
                    $COLOR_MENU_BACKGROUND = $_POST['COLOR_MENU_BACKGROUND'];
                    $COLOR_MENU_BAR_TEXT = $_POST['COLOR_MENU_BAR_TEXT'];
                    
                    $HOME_CITY = $_POST['HOME_CITY'];
                    $STATE_KEY = $_POST['SCHOOL_STATE'];
                    $STUDENT_POPULATION = $_POST['STUDENT_POPULATION'];
                    $MONETARY_ENDOWMENT = $_POST['MONETARY_ENDOWMENT'];
                    
                    $ALL_BASKETBALL_WINS = $_POST['BASKETBALL_ALL_TIME_WINS'];
                    $ALL_BASKETBALL_LOSSES = $_POST['BASKETBALL_ALL_TIME_LOSSES'];
                    
                    $BAKETBALL_TOURNAMENT_APPEARENCES = $_POST['BASKETBALL_ALL_TOURNAMENT_APPEARENCES'];
                    $BAKETBALL_SWEET_SIXTEEN = $_POST['BASKETBALL_SWEET_SIXTEEN'];
                    $BAKETBALL_ELITE_EIGHT = $_POST['BASKETBALL_ELITE_EIGHT'];
                    $BAKETBALL_FINAL_FOUR = $_POST['BASKETBALL_FINAL_FOUR'];
                  
                    $BAKETBALL_TITLES = $_POST['BASKETBALL_TITLES'];
                    
                    $ALL_FOOTBALL_WINS = $_POST['FOOTBALL_ALL_TIME_WINS'];
                    $ALL_FOOTBALL_LOSSES = $_POST['FOOTBALL_ALL_TIME_LOSSES'];
                    
                    $FOOTBALL_LAST_SEASON = $_POST['FOOTBALL_LAST_SEASON_RECORD'];
                    $FOOTBALL_LAST_POST = $_POST['FOOTBALL_LAST_POST'];
                    
                    $FOOTBALL_STADIUM_NAME = $_POST['FOOTBALL_STADIUM_NAME'];
                    $FOOTBALL_STADIUM_ADDRESS = $_POST['FOOTBALL_STADIUM_ADDRESS'];
                    
                    $BASKETBALL_STADIUM_NAME = $_POST['BASKETBALL_STADIUM_NAME'];
                    $BASKETBALL_STADIUM_ADDRESS = $_POST['BASKETBALL_STADIUM_ADDRESS'];
                    
                    $UPDATE_STATEMENT = "UPDATE schools SET
                                       FOOTBALL_STADIUM_NAME = '".$FOOTBALL_STADIUM_NAME."'
                                      ,FOOTBALL_STADIUM_ADDRESS = '".$FOOTBALL_STADIUM_ADDRESS."'
                                      ,BASKETBALL_STADIUM_NAME = '".$BASKETBALL_STADIUM_NAME."'
                                      ,BASKETBALL_STADIUM_ADDRESS = '".$BASKETBALL_STADIUM_ADDRESS."' 
                                      WHERE S_KEY = '".$S_KEY."'";

                   MYSQL_QUERY($UPDATE_STATEMENT);
                    
                    $UPDATE_STATEMENT = "UPDATE school_bars SET
                                       BAR_1 = '".$BAR_1."'
                                      ,BAR_2 = '".$BAR_2."'
                                      ,BAR_3 = '".$BAR_3."'
                                      ,BAR_NAME_1 = '".$BAR_NAME_1."'
                                      ,BAR_NAME_2 = '".$BAR_NAME_2."'
                                      ,BAR_NAME_3 = '".$BAR_NAME_3."'
                                      WHERE S_KEY = '".$S_KEY."'";

                   MYSQL_QUERY($UPDATE_STATEMENT);
                   //echo $UPDATE_STATEMENT."<br><br>";
                 
                    $UPDATE_STATEMENT = "UPDATE school_basketball_recr SET
                                        B_RECR_1  = '".$B_RECR_1."'
                                       ,B_RECR_NAME_1 = '".$B_RECR_NAME_1."'
                                       ,B_RECR_2 = '".$B_RECR_2."'
                                       ,B_RECR_NAME_2 = '".$B_RECR_NAME_2."'
                                       ,B_RECR_3 = '".$B_RECR_3."'
                                       ,B_RECR_NAME_3 = '".$B_RECR_NAME_3."'
                                       ,B_RECR_4 = '".$B_RECR_4."'
                                       ,B_RECR_NAME_4 = '".$B_RECR_NAME_4."'
                                       ,B_RECR_5 = '".$B_RECR_5."'
                                       ,B_RECR_NAME_5  = '".$B_RECR_NAME_5."'
                                       WHERE S_KEY = '".$S_KEY."'";
                    
                   // echo $UPDATE_STATEMENT;
                    
                   MYSQL_QUERY($UPDATE_STATEMENT);
                   //echo $UPDATE_STATEMENT."<br><br>";
                   
                   $UPDATE_STATEMENT = "UPDATE school_blogs 
                                        SET BLOG_1 = '".$BLOG_1."', 
                                        BLOG_NAME_1 = '".$BLOG_NAME_1."', 
                                        BLOG_2 = '".$BLOG_2."', 
                                        BLOG_NAME_2 = '".$BLOG_NAME_2."', 
                                        BLOG_3 = '".$BLOG_3."', 
                                        BLOG_NAME_3 = '".$BLOG_NAME_3."', 
                                        BLOG_4 = '".$BLOG_4."', 
                                        BLOG_NAME_4 = '".$BLOG_NAME_4."', 
                                        BLOG_5 = '".$BLOG_5."', 
                                        BLOG_NAME_5 = '".$BLOG_NAME_5."' 
                                        WHERE S_KEY = '".$S_KEY."'";

                   MYSQL_QUERY($UPDATE_STATEMENT);
                   //echo $UPDATE_STATEMENT."<br><br>";
                   
                   $UPDATE_STATEMENT = "UPDATE school_blogs  
                                        SET BLOG_1 = '".$BLOG_1."', 
                                        BLOG_NAME_1 = '".$BLOG_NAME_1."', 
                                        BLOG_2 = '".$BLOG_2."', 
                                        BLOG_NAME_2 = '".$BLOG_NAME_2."', 
                                        BLOG_3 = '".$BLOG_3."', 
                                        BLOG_NAME_3 = '".$BLOG_NAME_3."', 
                                        BLOG_4 = '".$BLOG_4."', 
                                        BLOG_NAME_4 = '".$BLOG_NAME_4."', 
                                        BLOG_5 = '".$BLOG_5."', 
                                        BLOG_NAME_5 = '".$BLOG_NAME_5."' 
                                        WHERE S_KEY = '".$S_KEY."'";

                   MYSQL_QUERY($UPDATE_STATEMENT);
                   //echo $UPDATE_STATEMENT."<br><br>";
                   
                   $UPDATE_STATEMENT = "UPDATE school_football_recr 
                                        SET F_RECR_1 = '".$F_RECR_1."', 
                                        F_RECR_NAME_1 = '".$F_RECR_NAME_1."', 
                                        F_RECR_2 = '".$F_RECR_2."', 
                                        F_RECR_NAME_2 = '".$F_RECR_NAME_2."', 
                                        F_RECR_3 = '".$F_RECR_3."', 
                                        F_RECR_NAME_3 = '".$F_RECR_NAME_3."', 
                                        F_RECR_4 = '".$F_RECR_4."', 
                                        F_RECR_NAME_4 = '".$F_RECR_NAME_4."', 
                                        F_RECR_5 = '".$F_RECR_5."', 
                                        F_RECR_NAME_5 = '".$F_RECR_NAME_5."' 
                                        WHERE S_KEY = '".$S_KEY."'";

                   MYSQL_QUERY($UPDATE_STATEMENT);
                   //echo $UPDATE_STATEMENT."<br><br>";
                   
                   $UPDATE_STATEMENT = "UPDATE school_link_1 
                                        SET RADIO_LINK = '".$RADIO_LINK."', 
                                        RADIO_LINK_NAME = '".$RADIO_LINK_NAME."', 
                                        OFFICIAL_ATHLETIC_SITE = '".$OFFICIAL_ATHLETIC_SITE."', 
                                        OFFICIAL_ATHLETIC_NAME = '".$OFFICIAL_ATHLETIC_NAME."', 
                                        FOOTBALL_ROSTER = '".$FOOTBALL_ROSTER."', 
                                        FOOTBALL_ROSTER_NAME = '".$FOOTBALL_ROSTER_NAME."', 
                                        FOOTBALL_SCHEDULE = '".$FOOTBALL_SCHEDULE."', 
                                        FOOTBALL_SCHEDULE_NAME = '".$FOOTBALL_SCHEDULE_NAME."',  
                                        BASKETBALL_ROSTER = '".$BASKETBALL_ROSTER."',  
                                        BASKETBALL_SCHEDULE_LINK = '".$BASKETBALL_SCHEDULE."',  
                                        BASKETBALL_ROSTER_NAME = '".$BASKETBALL_ROSTER_NAME."'
                                        WHERE S_KEY = '".$S_KEY."'";
                   
                   //echo $UPDATE_STATEMENT;

                   MYSQL_QUERY($UPDATE_STATEMENT);
                   //echo $UPDATE_STATEMENT."<br><br>";
                   
                   $UPDATE_STATEMENT = "UPDATE school_message_boards 
                                        SET MESSAGE_BOARD_1 = '".$MESSAGE_BOARD_1."', 
                                        MESSAGE_BOARD_NAME_1 = '".$MESSAGE_BOARD_NAME_1."',
                                        MESSAGE_BOARD_1_USER_NAME = '".$MESSAGE_BOARD_USER_NAME_1."', 
                                        MESSAGE_BOARD_1_PASSWORD = '".$MESSAGE_BOARD_PASSWORD_1."', 
                                        MESSAGE_BOARD_2 = '".$MESSAGE_BOARD_2."', 
                                        MESSAGE_BOARD_NAME_2 = '".$MESSAGE_BOARD_NAME_2."',
                                        MESSAGE_BOARD_2_USER_NAME = '".$MESSAGE_BOARD_USER_NAME_2."', 
                                        MESSAGE_BOARD_2_PASSWORD = '".$MESSAGE_BOARD_PASSWORD_2."', 
                                        MESSAGE_BOARD_3 = '".$MESSAGE_BOARD_3."', 
                                        MESSAGE_BOARD_NAME_3 = '".$MESSAGE_BOARD_NAME_3."',
                                        MESSAGE_BOARD_3_USER_NAME = '".$MESSAGE_BOARD_USER_NAME_3."', 
                                        MESSAGE_BOARD_3_PASSWORD = '".$MESSAGE_BOARD_PASSWORD_3."', 
                                        MESSAGE_BOARD_4 = '".$MESSAGE_BOARD_4."',  
                                        MESSAGE_BOARD_NAME_4 = '".$MESSAGE_BOARD_NAME_4."',
                                        MESSAGE_BOARD_4_USER_NAME = '".$MESSAGE_BOARD_USER_NAME_4."', 
                                        MESSAGE_BOARD_4_PASSWORD = '".$MESSAGE_BOARD_PASSWORD_4."', 
                                        MESSAGE_BOARD_5 = '".$MESSAGE_BOARD_5."',  
                                        MESSAGE_BOARD_NAME_5 = '".$MESSAGE_BOARD_NAME_5."',
                                        MESSAGE_BOARD_5_USER_NAME = '".$MESSAGE_BOARD_USER_NAME_5."', 
                                        MESSAGE_BOARD_5_PASSWORD = '".$MESSAGE_BOARD_PASSWORD_5."'
                                        WHERE S_KEY = '".$S_KEY."'";    
                   
                   echo $UPDATE_STATEMENT;
                   
                   MYSQL_QUERY($UPDATE_STATEMENT);
                   //echo $UPDATE_STATEMENT."<br><br>";
                   
                   $UPDATE_STATEMENT = "UPDATE school_restaurants 
                                        SET RESTAURANT_1 = '".$RESTAURANT_1."', 
                                        RESTAURANT_NAME_1 = '".$RESTAURANT_NAME_1."',  
                                        RESTAURANT_2 = '".$RESTAURANT_2."', 
                                        RESTAURANT_NAME_2 = '".$RESTAURANT_NAME_2."',  
                                        RESTAURANT_3 = '".$RESTAURANT_3."',  
                                        RESTAURANT_NAME_3 = '".$RESTAURANT_NAME_3."'  
                                        WHERE S_KEY = '".$S_KEY."'";    

                   MYSQL_QUERY($UPDATE_STATEMENT);
                   //echo $UPDATE_STATEMENT."<br><br>";
                   
                   $UPDATE_STATEMENT = "UPDATE school_traditions 
                                        SET  
                                        TRADITION_1 = '".$TRADITION_1."', 
                                        TRADITION_NAME_1 = '".$TRADITION_NAME_1."',  
                                        TRADITION_2 = '".$TRADITION_2."', 
                                        TRADITION_NAME_2 = '".$TRADITION_NAME_2."', 
                                        TRADITION_3 = '".$TRADITION_3."', 
                                        TRADITION_NAME_3 = '".$TRADITION_NAME_3."', 
                                        TRADITION_4 = '".$TRADITION_4."', 
                                        TRADITION_NAME_4 = '".$TRADITION_NAME_4."',  
                                        TRADITION_5 = '".$TRADITION_5."', 
                                        TRADITION_NAME_5 = '".$TRADITION_NAME_5."' 
                                        WHERE S_KEY = '".$S_KEY."'";    

                   MYSQL_QUERY($UPDATE_STATEMENT);
                   
                   $UPDATE_STATEMENT = "UPDATE school_colors 
                                        SET  
                                        U_COLOR = '".$COLOR_U."', 
                                        SPORTS_DIRECT_COLOR = '".$COLOR_SPORTS_DIRECT."',  
                                        TOP_BAR = '".$COLOR_TOP_BAR."', 
                                        MENU_BAR_BACKGROUND = '".$COLOR_MENU_BACKGROUND."', 
                                        MENU_BAR_TEXT = '".$COLOR_MENU_BAR_TEXT."'
                                        WHERE S_KEY = '".$S_KEY."'";    

                   MYSQL_QUERY($UPDATE_STATEMENT);
                   
                   
                   $UPDATE_STATEMENT = "UPDATE school_general_info 
                                        SET  
                                        HOME_CITY = '".$HOME_CITY."', 
                                        STATE_KEY = '".$STATE_KEY."',  
                                        STUDENT_POPULATION = '".$STUDENT_POPULATION."', 
                                        MONETARY_ENDOWMENT = '".$MONETARY_ENDOWMENT."'
                                        WHERE S_KEY = '".$S_KEY."'";    

                   MYSQL_QUERY($UPDATE_STATEMENT);
                   
                   $UPDATE_STATEMENT = "UPDATE school_basketball 
                                        SET  
                                        ALL_TIME_WINS = '".$ALL_BASKETBALL_WINS."', 
                                        ALL_TIME_LOSSES = '".$ALL_BASKETBALL_LOSSES."',  
                                        NCAA_TOURNAMENT_APPEARENCES = '".$BAKETBALL_TOURNAMENT_APPEARENCES."', 
                                        NCAA_SWEET_SIXTEEN_APPEARENCES = '".$BAKETBALL_SWEET_SIXTEEN."',
                                        NCAA_ELITE_EIGHT_APPEARENCES = '".$BAKETBALL_ELITE_EIGHT."', 
                                        NCAA_FINAL_FOUR_APPEARENCES = '".$BAKETBALL_FINAL_FOUR."',
                                      
                                        NATIONAL_CHAMPIONSHIPS = '".$BAKETBALL_TITLES."'
                                        WHERE S_KEY = '".$S_KEY."'";    

                   MYSQL_QUERY($UPDATE_STATEMENT);
                   
                   $UPDATE_STATEMENT = "update school_football set ALL_TIME_WINS = '".$ALL_FOOTBALL_WINS."' ,
                        ALL_TIME_LOSSES = '".$ALL_FOOTBALL_LOSSES."' , RECORD_2012 = '".$FOOTBALL_LAST_SEASON."' ,
                        POST_SEASON_2012 = '".$FOOTBALL_LAST_POST."'  
                        where S_KEY = '".$S_KEY."'" ;     

                   MYSQL_QUERY($UPDATE_STATEMENT);
                   
                   
                   echo $UPDATE_STATEMENT;
                   header("Location: Admin_School_Links.php?S_KEY=".$S_KEY);
                   
                 }

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="description" content="software app site template" />
<meta name="keywords" content="corporate, software, app, business, marketing, site template, web marketing, internate marketing"/>
<meta name="author" content="Tansh" />
<title>Dynamic Web Vision</title>
<link rel="icon" type="image/png" href="images/favicon.png"/>
<style type="text/css">
DIV#SchoolList
{
    width: 100%;
    height: 4000px;
    position: relative;
}

DIV#BottomElements
{
    position: relative;
    
    left: 0px;
    width: 100%;
}
    
DIV#ButtonContainer
{
    position: relative;
    top: 25px;
    
    width: 10%;
}

.BlueLink
{
    color: #525f90;
}

div#spacefiller
{
    position: relative;
    height: 200px;
    width: 100%;
    background-color: green;
    
    top: 700px;
}

DIV#ContanctUsInfoContainer
{
    position: absolute;
    
}

DIV#ContanctUsInfo
{
    position: absolute;
    left: 654px;
    top: 37px;
    
    background-color: #E6E6FA;
    
    border-width: 1px;
    border-style: solid;
    border-color: #D3D3D3;
    border-radius: 3px;
    
    padding-left: 20px;
    padding-top: 34px;
    
    width: 270px;
    height: 172px;
}

.ConferenceHead
{
    font-size: 1.8em;
}

.SchoolLink
{
    font-size: 1.2em;
    color: #FF7F00;
}

div#SchoolLinkList
{
    position: relative;
    width: 100%;
    
}

.SchoolStateDrop
{
    height: 30px;
}

.row
{
padding-bottom: 5px;    
}

.row:hover
{
    background-color: #E8E8E8;
}

.ADLink
{
    vertical-align: middle;
    
    color: #FF0000;
    
    font-size: 1.3em;
}

.Blog
{
    vertical-align: middle;
    
    color: #3333FF;
    
    font-size: 1.3em;
}

.FBallRecruiting
{
    vertical-align: middle;
    
    color: #472400;
}

.MessageBoard
{
    vertical-align: middle;
    font-size: 1.2em;
    color: #660066;
}

.BasketballRecruiting
{
    vertical-align: middle;
   
    color: #FF6600;
}

.Bar
{
    vertical-align: middle;
    font-size: 1.2em;
    color: #520000;
}

.Rest
{
    vertical-align: middle;
    font-size: 1.2em;
    color: #339966;
}

.Tradition
{
    vertical-align: middle;
    font-size: 1.2em;
    color: #996633;
}

.ColorHex
{
    vertical-align: middle;
    font-size: 1.2em;
    color: #39B7CD;
}

.GeneralSchoolInfo
{
    vertical-align: middle;
    font-size: 1.2em;
    color: #00B200;   
}

.BasketballInfo
{
    vertical-align: middle;
    font-size: 1.2em;
    color: #E68A00;   
}

<? echo $BUFFER_DIV; ?>
</style>
<!--style sheet-->
<link rel="stylesheet" media="screen" href="css/style.css"/>
<link rel="stylesheet" media="screen" href="css/navigation.css"/>
<link rel="stylesheet" media="screen" href="css/jquery-ui-1.8.17.custom.css"/>
<!--[if IE 7]>
        <link rel="stylesheet" type="text/css" href="css/ie7.css">
<![endif]-->
<!--[if IE 8]>
        <link rel="stylesheet" type="text/css" href="css/ie8.css">
<![endif]-->
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>

<!--contact scripts starts-->
<script src="js/jquery.validate.js"  type="text/javascript"></script>
<script src="js/jquery.form.js" type="text/javascript"></script>
<script type="text/javascript">
//$(document).ready(function() {	
//$(function() {
//		var v = $("#contactform").validate({
//			submitHandler: function(form) {
//				$(form).ajaxSubmit({
//					target: "#result",
//					clearForm: true
//				});
//			}
//		});
//		
//});
////To clear form field on page refresh
//$('#contactform #message').val('');
//});
</script>
<!--contact scripts ends-->
</head>
<body>


<!--header starts-->
<div id="header">
  <div class="container  header_inner clearfix">
    <div class="grid_12"> 
      
      <!--logo here--> 
      <a href="#"> <img src="images/DynamicWebVisionLogo.png" width="250" height="31" alt="logo" class="logo"> </a> 
      
      <!--menu / navigation starts-->
      <ul class="sf-menu">
        <li><a href="#">Other Media</a>
          <ul>
            <li><? echo "<a href='YouTubeVideos.php?S_KEY=".$S_KEY."'>YouTube Videos</a>"; ?></li>
            <li><a href="DemoInventoryManagement.php">Inventory Management</a></li>
            <li><a href="DemoCustomerAlerts.php">Customer Alerts</a></li>
          </ul>
        </li>
        <li><a href="Admin_Team_Home.php" >School List</a></li>  
        <li><a href="index.php" >Log Out</a></li>
        
      </ul>
      <!--menu ends-->
      
      <div class="clear"></div>
    </div>
  </div>
</div>
<!--header ends--> 

<!--header_bottom starts-->

<!--header_bottom ends--> 

<!--section for intro text and button starts-->

<!--section for intro text and button ends--> 

<!--section for features starts-->
<div class="section">
  <div class="container clearfix"> 
    
    <? //        IF (ISSET($_SESSION['CS_LOGIN_PASS']))
       // {
       //     IF ($_SESSION['CS_LOGIN_PASS'] != "1")
       //     {
       //         header("Location: index.php");
       //     }
            
      //  }
      //  ELSE
      //  {
      //      header("Location: index.php");
      //  }
      
        $S_KEY = $_GET['S_KEY'];
        
        require_once('CS_Functions.php');
        
        Get_DB_Connection();
        
        echo "<div id = 'SchoolLinkList'>";
        
        $QUERY_SCHOOL = $db->prepare("SELECT DISTINCT schools.S_NAME,
            
                            school_bars.BAR_1, school_bars.BAR_NAME_1, school_bars.BAR_2, school_bars.BAR_NAME_2, school_bars.BAR_3, school_bars.BAR_NAME_3,

                            school_basketball_recr.B_RECR_1, school_basketball_recr.B_RECR_NAME_1,school_basketball_recr.B_RECR_2, school_basketball_recr.B_RECR_NAME_2,
                            school_basketball_recr.B_RECR_3, school_basketball_recr.B_RECR_NAME_3, school_basketball_recr.B_RECR_4, school_basketball_recr.B_RECR_NAME_4,
                            school_basketball_recr.B_RECR_5, school_basketball_recr.B_RECR_NAME_5,

                            school_blogs.BLOG_1, school_blogs.BLOG_NAME_1, school_blogs.BLOG_2, school_blogs.BLOG_NAME_2, school_blogs.BLOG_3, school_blogs.BLOG_NAME_3,
                            school_blogs.BLOG_4, school_blogs.BLOG_NAME_4,school_blogs.BLOG_5, school_blogs.BLOG_NAME_5,

                            school_football_recr.F_RECR_1, school_football_recr.F_RECR_NAME_1, school_football_recr.F_RECR_2, school_football_recr.F_RECR_NAME_2, 
                            school_football_recr.F_RECR_3, school_football_recr.F_RECR_NAME_3, school_football_recr.F_RECR_4, school_football_recr.F_RECR_NAME_4, 
                            school_football_recr.F_RECR_5, school_football_recr.F_RECR_NAME_5,

                            school_link_1.RADIO_LINK, school_link_1.RADIO_LINK_NAME, school_link_1.OFFICIAL_ATHLETIC_SITE, school_link_1.OFFICIAL_ATHLETIC_NAME, 
                            school_link_1.FOOTBALL_ROSTER, school_link_1.FOOTBALL_ROSTER_NAME, school_link_1.FOOTBALL_SCHEDULE, school_link_1.FOOTBALL_SCHEDULE_NAME, 
                            school_link_1.BASKETBALL_ROSTER, school_link_1.BASKETBALL_ROSTER_NAME, school_link_1.BASKETBALL_SCHEDULE_LINK,

                            school_message_boards.MESSAGE_BOARD_1, school_message_boards.MESSAGE_BOARD_NAME_1, school_message_boards.MESSAGE_BOARD_2, 
                            school_message_boards.MESSAGE_BOARD_NAME_2, school_message_boards.MESSAGE_BOARD_3, school_message_boards.MESSAGE_BOARD_NAME_3, 
                            school_message_boards.MESSAGE_BOARD_4, school_message_boards.MESSAGE_BOARD_NAME_4, school_message_boards.MESSAGE_BOARD_5, 
                            school_message_boards.MESSAGE_BOARD_NAME_5, school_message_boards.MESSAGE_BOARD_1_USER_NAME , school_message_boards.MESSAGE_BOARD_1_PASSWORD , 
                            school_message_boards.MESSAGE_BOARD_2_USER_NAME , school_message_boards.MESSAGE_BOARD_2_PASSWORD , school_message_boards.MESSAGE_BOARD_3_USER_NAME , school_message_boards.MESSAGE_BOARD_3_PASSWORD , 
                            school_message_boards.MESSAGE_BOARD_4_USER_NAME , school_message_boards.MESSAGE_BOARD_4_PASSWORD , school_message_boards.MESSAGE_BOARD_5_USER_NAME , school_message_boards.MESSAGE_BOARD_5_PASSWORD , 

                            school_restaurants.RESTAURANT_1, school_restaurants.RESTAURANT_NAME_1, school_restaurants.RESTAURANT_2, school_restaurants.RESTAURANT_NAME_2, 
                            school_restaurants.RESTAURANT_3, school_restaurants.RESTAURANT_NAME_3,

                            school_traditions.S_KEY, school_traditions.TRADITION_1, school_traditions.TRADITION_NAME_1, school_traditions.TRADITION_2, school_traditions.TRADITION_NAME_2, 
                            school_traditions.TRADITION_3, school_traditions.TRADITION_NAME_3, school_traditions.TRADITION_4, school_traditions.TRADITION_NAME_4, 
                            school_traditions.TRADITION_5, school_traditions.TRADITION_NAME_5,
                            
                            school_colors.U_COLOR, school_colors.SPORTS_DIRECT_COLOR , school_colors.TOP_BAR , school_colors.MENU_BAR_BACKGROUND, school_colors.MENU_BAR_TEXT,

                            school_general_info.HOME_CITY, school_general_info.STATE_KEY , school_general_info.STUDENT_POPULATION , school_general_info.MONETARY_ENDOWMENT, 
                            
                            school_basketball.ALL_TIME_WINS as ALL_TIME_WINS_BASKETBALL, school_basketball.ALL_TIME_LOSSES  as ALL_TIME_LOSSES_BASKETBALL, school_basketball.NCAA_TOURNAMENT_APPEARENCES, school_basketball.NCAA_SWEET_SIXTEEN_APPEARENCES, school_basketball.NCAA_ELITE_EIGHT_APPEARENCES, 
                            school_basketball.NCAA_FINAL_FOUR_APPEARENCES, school_basketball.NATIONAL_CHAMPIONSHIPS,
                            
                            school_football.ALL_TIME_WINS , school_football.ALL_TIME_LOSSES ,  school_football.RECORD_2012 , school_football.POST_SEASON_2012 , 
                            
                            schools.FOOTBALL_STADIUM_NAME , schools.FOOTBALL_STADIUM_ADDRESS , schools.BASKETBALL_STADIUM_NAME , schools.BASKETBALL_STADIUM_ADDRESS 

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
                            JOIN school_football on schools.S_KEY = school_football.S_KEY 
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
            $MESSAGE_BOARD_USER_NAME_1 = $row['MESSAGE_BOARD_1_USER_NAME'];
            $MESSAGE_BOARD_PASSWORD_1 = $row['MESSAGE_BOARD_1_PASSWORD'];

            $MESSAGE_BOARD_2 = $row['MESSAGE_BOARD_2'];
            $MESSAGE_BOARD_NAME_2 = $row['MESSAGE_BOARD_NAME_2'];
            $MESSAGE_BOARD_USER_NAME_2 = $row['MESSAGE_BOARD_2_USER_NAME'];
            $MESSAGE_BOARD_PASSWORD_2 = $row['MESSAGE_BOARD_2_PASSWORD'];

            $MESSAGE_BOARD_3 = $row['MESSAGE_BOARD_3'];
            $MESSAGE_BOARD_NAME_3 = $row['MESSAGE_BOARD_NAME_3'];
            $MESSAGE_BOARD_USER_NAME_3 = $row['MESSAGE_BOARD_3_USER_NAME'];
            $MESSAGE_BOARD_PASSWORD_3 = $row['MESSAGE_BOARD_3_PASSWORD'];

            $MESSAGE_BOARD_4 = $row['MESSAGE_BOARD_4'];
            $MESSAGE_BOARD_NAME_4 = $row['MESSAGE_BOARD_NAME_4'];
            $MESSAGE_BOARD_USER_NAME_4 = $row['MESSAGE_BOARD_4_USER_NAME'];
            $MESSAGE_BOARD_PASSWORD_4 = $row['MESSAGE_BOARD_4_PASSWORD'];

            $MESSAGE_BOARD_5 = $row['MESSAGE_BOARD_5'];
            $MESSAGE_BOARD_NAME_5 = $row['MESSAGE_BOARD_NAME_5'];
            $MESSAGE_BOARD_USER_NAME_5 = $row['MESSAGE_BOARD_5_USER_NAME'];
            $MESSAGE_BOARD_PASSWORD_5 = $row['MESSAGE_BOARD_5_PASSWORD'];

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
            
            $COLOR_U = $row['U_COLOR'];
            $COLOR_SPORTS_DIRECT = $row['SPORTS_DIRECT_COLOR'];
            $COLOR_TOP_BAR = $row['TOP_BAR'];
            $COLOR_MENU_BACKGROUND = $row['MENU_BAR_BACKGROUND'];
            $COLOR_MENU_BAR_TEXT = $row['MENU_BAR_TEXT'];
            
            $HOME_CITY = $row['HOME_CITY'];
            $STATE_KEY = $row['STATE_KEY'];
            $STUDENT_POPULATION = $row['STUDENT_POPULATION'];
            $MONETARY_ENDOWMENT = $row['MONETARY_ENDOWMENT'];
            
            $ALL_BASKETBALL_WINS = $row['ALL_TIME_WINS_BASKETBALL'];
            $ALL_BASKETBALL_LOSSES = $row['ALL_TIME_LOSSES_BASKETBALL'];
            $BAKETBALL_TOURNAMENT_APPEARENCES = $row['NCAA_TOURNAMENT_APPEARENCES'];
            $BAKETBALL_SWEET_SIXTEEN = $row['NCAA_SWEET_SIXTEEN_APPEARENCES'];
            $BAKETBALL_ELITE_EIGHT = $row['NCAA_ELITE_EIGHT_APPEARENCES'];
            $BAKETBALL_FINAL_FOUR = $row['NCAA_FINAL_FOUR_APPEARENCES'];
         
            $BAKETBALL_TITLES = $row['NATIONAL_CHAMPIONSHIPS'];
            
            $ALL_FOOTBALL_WINS = $row['ALL_TIME_WINS'];
            $ALL_FOOTBALL_LOSSES = $row['ALL_TIME_LOSSES'];
            
            $FOOTBALL_LAST_SEASON = $row['RECORD_2012'];
            $FOOTBALL_LAST_POST = $row['POST_SEASON_2012'];
            
            $FOOTBALL_STADIUM_NAME = $row['FOOTBALL_STADIUM_NAME'];
            $FOOTBALL_STADIUM_ADDRESS = $row['FOOTBALL_STADIUM_ADDRESS'];

            $BASKETBALL_STADIUM_NAME = $row['BASKETBALL_STADIUM_NAME'];
            $BASKETBALL_STADIUM_ADDRESS = $row['BASKETBALL_STADIUM_ADDRESS'];
            
        }
                
        print_r($QUERY_SCHOOL->errorInfo());
        
        echo "<H1><a href = 'http://usportsdirect.com/School_Profile.php?S_KEY=".$S_KEY."' target = '_blank'>$SCHOOL_NAME</a></H1><br><br>";
         
        echo "<FORM method = 'POST' action='Admin_School_Links.php'>";
        echo "<TABLE>";
        
        echo "<TR>";
        echo "<TD id = 'BOLD'>Field</TD>";
        echo "<TD id = 'BOLD'>Name of Website <br>(ex. Facebook)</TD>";
        echo "<TD id = 'BOLD'>URL Address <br>(ex. http://www.facebook.com)</TD>";
        echo "</TR>";
        
        //Official Athletic Site
        echo "<TR class = 'row'>";
        echo "<TD class = 'ADLink'>Official Athletic Site:</TD>";
        echo "<TD><input type='text' name='OFFICIAL_ATHLETIC_NAME' maxlength='50' size ='20' value = '".$OFFICIAL_ATHLETIC_NAME."'></input></TD>";
        echo "<TD><input type='text' name='OFFICIAL_ATHLETIC_LINK' maxlength='200' size ='75' value = '".$OFFICIAL_ATHLETIC_SITE."'></input></TD>";
        echo "</TR>";
        
        //Radio Link
        echo "<TR class = 'row'>";
        echo "<TD class = 'ADLink'>Radio:</TD>";
        echo "<TD><input type='text' name='RADIO_NAME' maxlength='50' size ='20' value = '".$RADIO_LINK_NAME."'></input></TD>";
        echo "<TD><input type='text' name='RADIO_LINK' maxlength='200' size ='75' value = '".$RADIO_LINK."'></input></TD>";
        echo "</TR>";
        
        //Football Roster
        echo "<TR class = 'row'>";
        echo "<TD class = 'ADLink'>Football Roster:</TD>";
        echo "<TD><input type='text' name='FOOTBALL_ROSTER_NAME' maxlength='50' size ='20' value = '".$FOOTBALL_ROSTER_NAME."'></input></TD>";
        echo "<TD><input type='text' name='FOOTBALL_ROSTER' maxlength='200' size ='75' value = '".$FOOTBALL_ROSTER."'></input></TD>";
        echo "</TR>";
        
        //Football Schedule
        echo "<TR class = 'row'>";
        echo "<TD class = 'ADLink'>Football Schedule:</TD>";
        echo "<TD><input type='text' name='FOOTBALL_SCHEDULE_NAME' maxlength='50' size ='20' value = '".$FOOTBALL_SCHEDULE_NAME."'></input></TD>";
        echo "<TD><input type='text' name='FOOTBALL_SCHEDULE' maxlength='200' size ='75' value = '".$FOOTBALL_SCHEDULE."'></input></TD>";
        echo "</TR>";
        
        //$BASKETBALL_ROSTER
        echo "<TR class = 'row'>";
        echo "<TD class = 'ADLink'>Basketball Roster:</TD>";
        echo "<TD><input type='text' name='BASKETBALL_ROSTER_NAME' maxlength='50' size ='20' value = '".$BASKETBALL_ROSTER_NAME."'></input></TD>";
        echo "<TD><input type='text' name='BASKETBALL_ROSTER' maxlength='200' size ='75' value = '".$BASKETBALL_ROSTER."'></input></TD>";
        echo "</TR>";
        
        //$BASKETBALL SCHEDULE
        echo "<TR class = 'row'>";
        echo "<TD class = 'ADLink'>Basketball Schedule:</TD>";
        echo "<TD></TD>";
        echo "<TD><input type='text' name='BASKETBALL_SCHEDULE' maxlength='200' size ='75' value = '".$BASKETBALL_SCHEDULE."'></input></TD>";
        echo "</TR>";
        
        //$BLOG_1
        echo "<TR class = 'row'>";
        echo "<TD id = 'SectionSeperator' class = 'Blog' >Blog 1:</TD>";
        echo "<TD id = 'SectionSeperator'><input type='text' name='BLOG_NAME_1' maxlength='50' size ='20' value = '".$BLOG_NAME_1."'></input></TD>";
        echo "<TD id = 'SectionSeperator'><input type='text' name='BLOG_1' maxlength='200' size ='75' value = '".$BLOG_1."'></input></TD>";
        echo "</TR>";
        
        //BLOG_2
        echo "<TR class = 'row'>";
        echo "<TD class = 'Blog' >Blog 2:</TD>";
        echo "<TD><input type='text' name='BLOG_NAME_2' maxlength='50' size ='20' value = '".$BLOG_NAME_2."'></input></TD>";
        echo "<TD><input type='text' name='BLOG_2' maxlength='200' size ='75' value = '".$BLOG_2."'></input></TD>";
        echo "</TR>";
        
        //$BLOG 3
        echo "<TR class = 'row'>";
        echo "<TD class = 'Blog' >Blog 3:</TD>";
        echo "<TD><input type='text' name='BLOG_NAME_3' maxlength='50' size ='20' value = '".$BLOG_NAME_3."'></input></TD>";
        echo "<TD><input type='text' name='BLOG_3' maxlength='200' size ='75' value = '".$BLOG_3."'></input></TD>";
        echo "</TR>";
        
        //$BLOG_4
        echo "<TR class = 'row'>";
        echo "<TD class = 'Blog' >Blog 4:</TD>";
        echo "<TD><input type='text' name='BLOG_NAME_4' maxlength='50' size ='20' value = '".$BLOG_NAME_4."'></input></TD>";
        echo "<TD><input type='text' name='BLOG_4' maxlength='200' size ='75' value = '".$BLOG_4."'></input></TD>";
        echo "</TR>";
        
        //$BLOG 5
        echo "<TR class = 'row'>";
        echo "<TD class = 'Blog' >Blog 5:</TD>";
        echo "<TD><input type='text' name='BLOG_NAME_5' maxlength='50' size ='20' value = '".$BLOG_NAME_5."'></input></TD>";
        echo "<TD><input type='text' name='BLOG_5' maxlength='200' size ='75' value = '".$BLOG_5."'></input></TD>";
        echo "</TR>";
        
        //Football Recruiting Class 1
        echo "<TR class = 'row'>";
        echo "<TD id = 'SectionSeperator' class = 'FBallRecruiting' >Football Recruiting Class 1:</TD>";
        echo "<TD id = 'SectionSeperator'><input type='text' name='F_RECR_NAME_1' maxlength='50' size ='20' value = '".$F_RECR_NAME_1."'></input></TD>";
        echo "<TD id = 'SectionSeperator'><input type='text' name='F_RECR_1' maxlength='200' size ='75' value = '".$F_RECR_1."'></input></TD>";
        echo "</TR>";
        
        //Football Recruiting Class 2
        echo "<TR class = 'row'>";
        echo "<TD class = 'FBallRecruiting' >Football Recruiting Class 2:</TD>";
        echo "<TD><input type='text' name='F_RECR_NAME_2' maxlength='50' size ='20' value = '".$F_RECR_NAME_2."'></input></TD>";
        echo "<TD><input type='text' name='F_RECR_2' maxlength='200' size ='75' value = '".$F_RECR_2."'></input></TD>";
        echo "</TR>";
        
        //Football Recruiting Class 3
        echo "<TR class = 'row'>";
        echo "<TD class = 'FBallRecruiting' >Football Recruiting Class 3:</TD>";
        echo "<TD><input type='text' name='F_RECR_NAME_3' maxlength='50' size ='20' value = '".$F_RECR_NAME_3."'></input></TD>";
        echo "<TD><input type='text' name='F_RECR_3' maxlength='200' size ='75' value = '".$F_RECR_3."'></input></TD>";
        echo "</TR>";
        
        //Football Recruiting Class 4
        echo "<TR class = 'row'>";
        echo "<TD class = 'FBallRecruiting' >Football Recruiting Class 4:</TD>";
        echo "<TD><input type='text' name='F_RECR_NAME_4' maxlength='50' size ='20' value = '".$F_RECR_NAME_4."'></input></TD>";
        echo "<TD><input type='text' name='F_RECR_4' maxlength='200' size ='75' value = '".$F_RECR_4."'></input></TD>";
        echo "</TR>";
        
        //Football Recruiting Class 5
        echo "<TR class = 'row'>";
        echo "<TD class = 'FBallRecruiting' >Football Recruiting Class 5:</TD>";
        echo "<TD><input type='text' name='F_RECR_NAME_5' maxlength='50' size ='20' value = '".$F_RECR_NAME_5."'></input></TD>";
        echo "<TD><input type='text' name='F_RECR_5' maxlength='200' size ='75' value = '".$F_RECR_5."'></input></TD>";
        echo "</TR>";
        
        //Message Board 1
        echo "<TR class = 'row'>";
        echo "<TD class = 'MessageBoard' id = 'SectionSeperator'>Message Board 1:</TD>";
        echo "<TD id = 'SectionSeperator'><input type='text' name='MESSAGE_BOARD_NAME_1' maxlength='50' size ='20' value = '".$MESSAGE_BOARD_NAME_1."'></input></TD>";
        echo "<TD id = 'SectionSeperator'><input type='text' name='MESSAGE_BOARD_1' maxlength='200' size ='75' value = '".$MESSAGE_BOARD_1."'></input></TD>";
        echo "<TD><input type='text' name='MESSAGE_BOARD_USER_NAME_1' maxlength='50' size ='15' value = '".$MESSAGE_BOARD_USER_NAME_1."'></input></TD>";
        echo "<TD><input type='text' name='MESSAGE_BOARD_PASS_1' maxlength='50' size ='15' value = '".$MESSAGE_BOARD_PASSWORD_1."'></input></TD>";
        echo "</TR>";
        
        //Message Board 2
        echo "<TR class = 'row'>";
        echo "<TD class = 'MessageBoard' >Message Board 2:</TD>";
        echo "<TD><input type='text' name='MESSAGE_BOARD_NAME_2' maxlength='50' size ='20' value = '".$MESSAGE_BOARD_NAME_2."'></input></TD>";
        echo "<TD><input type='text' name='MESSAGE_BOARD_2' maxlength='200' size ='75' value = '".$MESSAGE_BOARD_2."'></input></TD>";
        echo "<TD><input type='text' name='MESSAGE_BOARD_USER_NAME_2' maxlength='50' size ='15' value = '".$MESSAGE_BOARD_USER_NAME_2."'></input></TD>";
        echo "<TD><input type='text' name='MESSAGE_BOARD_PASS_2' maxlength='50' size ='15' value = '".$MESSAGE_BOARD_PASSWORD_2."'></input></TD>";
        echo "</TR>";
        
        //Message Board 3
        echo "<TR class = 'row'>";
        echo "<TD class = 'MessageBoard' >Message Board 3:</TD>";
        echo "<TD><input type='text' name='MESSAGE_BOARD_NAME_3' maxlength='50' size ='20' value = '".$MESSAGE_BOARD_NAME_3."'></input></TD>";
        echo "<TD><input type='text' name='MESSAGE_BOARD_3' maxlength='200' size ='75' value = '".$MESSAGE_BOARD_3."'></input></TD>";
        echo "<TD><input type='text' name='MESSAGE_BOARD_USER_NAME_3' maxlength='50' size ='15' value = '".$MESSAGE_BOARD_USER_NAME_3."'></input></TD>";
        echo "<TD><input type='text' name='MESSAGE_BOARD_PASS_3' maxlength='50' size ='15' value = '".$MESSAGE_BOARD_PASSWORD_3."'></input></TD>";
        echo "</TR>";
        
        //Message Board 4
        echo "<TR class = 'row'>";
        echo "<TD class = 'MessageBoard' >Message Board 4:</TD>";
        echo "<TD><input type='text' name='MESSAGE_BOARD_NAME_4' maxlength='50' size ='20' value = '".$MESSAGE_BOARD_NAME_4."'></input></TD>";
        echo "<TD><input type='text' name='MESSAGE_BOARD_4' maxlength='200' size ='75' value = '".$MESSAGE_BOARD_4."'></input></TD>";
        echo "<TD><input type='text' name='MESSAGE_BOARD_USER_NAME_4' maxlength='50' size ='15' value = '".$MESSAGE_BOARD_USER_NAME_4."'></input></TD>";
        echo "<TD><input type='text' name='MESSAGE_BOARD_PASS_4' maxlength='50' size ='15' value = '".$MESSAGE_BOARD_PASSWORD_4."'></input></TD>";
        echo "</TR>";
        
        //Message Board 5
        echo "<TR class = 'row'>";
        echo "<TD class = 'MessageBoard' >Message Board 5:</TD>";
        echo "<TD><input type='text' name='MESSAGE_BOARD_NAME_5' maxlength='50' size ='20' value = '".$MESSAGE_BOARD_NAME_5."'></input></TD>";
        echo "<TD><input type='text' name='MESSAGE_BOARD_5' maxlength='200' size ='75' value = '".$MESSAGE_BOARD_5."'></input></TD>";
        echo "<TD><input type='text' name='MESSAGE_BOARD_USER_NAME_5' maxlength='50' size ='15' value = '".$MESSAGE_BOARD_USER_NAME_5."'></input></TD>";
        echo "<TD><input type='text' name='MESSAGE_BOARD_PASS_5' maxlength='50' size ='15' value = '".$MESSAGE_BOARD_PASSWORD_5."'></input></TD>";
        echo "</TR>";        
                
        //Basketball Recruiting Class 1
        echo "<TR class = 'row'>";
        echo "<TD class = 'BasketballRecruiting'  id = 'SectionSeperator'>Basketball Recruiting Class 1:</TD>";
        echo "<TD id = 'SectionSeperator'><input type='text' name='B_RECR_NAME_1' maxlength='50' size ='20' value = '".$B_RECR_NAME_1."'></input></TD>";
        echo "<TD id = 'SectionSeperator'><input type='text' name='B_RECR_1' maxlength='200' size ='75' value = '".$B_RECR_1."'></input></TD>";
        echo "</TR>";
        
        //Basketball Recruiting Class 2
        echo "<TR class = 'row'>";
        echo "<TD class = 'BasketballRecruiting' >Basketball Recruiting Class 2:</TD>";
        echo "<TD><input type='text' name='B_RECR_NAME_2' maxlength='50' size ='20' value = '".$B_RECR_NAME_2."'></input></TD>";
        echo "<TD><input type='text' name='B_RECR_2' maxlength='200' size ='75' value = '".$B_RECR_2."'></input></TD>";
        echo "</TR>";
        
        //Basketball Recruiting Class 3
        echo "<TR class = 'row'>";
        echo "<TD class = 'BasketballRecruiting' >Basketball Recruiting Class 3:</TD>";
        echo "<TD><input type='text' name='B_RECR_NAME_3' maxlength='50' size ='20' value = '".$B_RECR_NAME_3."'></input></TD>";
        echo "<TD><input type='text' name='B_RECR_3' maxlength='200' size ='75' value = '".$B_RECR_3."'></input></TD>";
        echo "</TR>";
        
        //Basketball Recruiting Class 4
        echo "<TR class = 'row'>";
        echo "<TD class = 'BasketballRecruiting' >Basketball Recruiting Class 4:</TD>";
        echo "<TD><input type='text' name='B_RECR_NAME_4' maxlength='50' size ='20' value = '".$B_RECR_NAME_4."'></input></TD>";
        echo "<TD><input type='text' name='B_RECR_4' maxlength='200' size ='75' value = '".$B_RECR_4."'></input></TD>";
        echo "</TR>";
        
        //Basketball Recruiting Class 5
        echo "<TR class = 'row'>";
        echo "<TD class = 'BasketballRecruiting' >Basketball Recruiting Class 5:</TD>";
        echo "<TD><input type='text' name='B_RECR_NAME_5' maxlength='50' size ='20' value = '".$B_RECR_NAME_5."'></input></TD>";
        echo "<TD><input type='text' name='B_RECR_5' maxlength='200' size ='75' value = '".$B_RECR_5."'></input></TD>";
        echo "</TR>";
        
        //Bar 1
        echo "<TR class = 'row'>";
        echo "<TD class = 'Bar' id = 'SectionSeperator'>Local Bar 1:</TD>";
        echo "<TD id = 'SectionSeperator'><input type='text' name='BAR_NAME_1' maxlength='50' size ='20' value = '".$BAR_NAME_1."'></input></TD>";
        echo "<TD id = 'SectionSeperator'><input type='text' name='BAR_1' maxlength='200' size ='75' value = '".$BAR_1."'></input></TD>";
        echo "</TR>";
        
        //Bar 2
        echo "<TR class = 'row'>";
        echo "<TD class = 'Bar' >Local Bar 2:</TD>";
        echo "<TD><input type='text' name='BAR_NAME_2' maxlength='50' size ='20' value = '".$BAR_NAME_2."'></input></TD>";
        echo "<TD><input type='text' name='BAR_2' maxlength='200' size ='75' value = '".$BAR_2."'></input></TD>";
        echo "</TR>";
        
        //Bar 3
        echo "<TR class = 'row'>";
        echo "<TD class = 'Bar' >Local Bar 3:</TD>";
        echo "<TD><input type='text' name='BAR_NAME_3' maxlength='50' size ='20' value = '".$BAR_NAME_3."'></input></TD>";
        echo "<TD><input type='text' name='BAR_3' maxlength='200' size ='75' value = '".$BAR_3."'></input></TD>";
        echo "</TR>";
        
        //Restaurant 1
        echo "<TR class = 'row'>";
        echo "<TD class = 'Rest' id = 'SectionSeperator'>Restaurant 1:</TD>";
        echo "<TD id = 'SectionSeperator'><input type='text' name='RESTAURANT_NAME_1' maxlength='50' size ='20' value = '".$RESTAURANT_NAME_1."'></input></TD>";
        echo "<TD id = 'SectionSeperator'><input type='text' name='RESTAURANT_1' maxlength='200' size ='75' value = '".$RESTAURANT_1."'></input></TD>";
        echo "</TR>";
        
        //Restaurant 2
        echo "<TR class = 'row'>";
        echo "<TD class = 'Rest' >Restaurant 2:</TD>";
        echo "<TD><input type='text' name='RESTAURANT_NAME_2' maxlength='50' size ='20' value = '".$RESTAURANT_NAME_2."'></input></TD>";
        echo "<TD><input type='text' name='RESTAURANT_2' maxlength='200' size ='75' value = '".$RESTAURANT_2."'></input></TD>";
        echo "</TR>";
        
        //Restaurant 3
        echo "<TR class = 'row'>";
        echo "<TD class = 'Rest' >Restaurant 3:</TD>";
        echo "<TD><input type='text' name='RESTAURANT_NAME_3' maxlength='50' size ='20' value = '".$RESTAURANT_NAME_3."'></input></TD>";
        echo "<TD><input type='text' name='RESTAURANT_3' maxlength='200' size ='75' value = '".$RESTAURANT_3."'></input></TD>";
        echo "</TR>";
        
        //Tradition 1
        echo "<TR class = 'row'>";
        echo "<TD class = 'Tradition' id = 'SectionSeperator'>Tradition 1:</TD>";
        echo "<TD id = 'SectionSeperator'><input type='text' name='TRADITION_NAME_1' maxlength='50' size ='20' value = '".$TRADITION_NAME_1."'></input></TD>";
        echo "<TD id = 'SectionSeperator'><input type='text' name='TRADITION_1' maxlength='200' size ='75' value = '".$TRADITION_1."'></input></TD>";
        echo "</TR>";
        
        //Tradition 2
        echo "<TR class = 'row'>";
        echo "<TD class = 'Tradition' >Tradition 2:</TD>";
        echo "<TD><input type='text' name='TRADITION_NAME_2' maxlength='50' size ='20' value = '".$TRADITION_NAME_2."'></input></TD>";
        echo "<TD><input type='text' name='TRADITION_2' maxlength='200' size ='75' value = '".$TRADITION_2."'></input></TD>";
        echo "</TR>";
        
        //Tradition 3
        echo "<TR class = 'row'>";
        echo "<TD class = 'Tradition' >Tradition 3:</TD>";
        echo "<TD><input type='text' name='TRADITION_NAME_3' maxlength='50' size ='20' value = '".$TRADITION_NAME_3."'></input></TD>";
        echo "<TD><input type='text' name='TRADITION_3' maxlength='200' size ='75' value = '".$TRADITION_3."'></input></TD>";
        echo "</TR>";
        
        //Tradition 4
        echo "<TR class = 'row'>";
        echo "<TD class = 'Tradition' >Tradition 4:</TD>";
        echo "<TD><input type='text' name='TRADITION_NAME_4' maxlength='50' size ='20' value = '".$TRADITION_NAME_4."'></input></TD>";
        echo "<TD><input type='text' name='TRADITION_4' maxlength='200' size ='75' value = '".$TRADITION_4."'></input></TD>";
        echo "</TR>";
        
        //Tradition 5
        echo "<TR class = 'row'>";
        echo "<TD class = 'Tradition' >Tradition 5:</TD>";
        echo "<TD><input type='text' name='TRADITION_NAME_5' maxlength='50' size ='20' value = '".$TRADITION_NAME_5."'></input></TD>";
        echo "<TD><input type='text' name='TRADITION_5' maxlength='200' size ='75' value = '".$TRADITION_5."'></input></TD>";
        echo "</TR>";
        
        //U Color
        echo "<TR class = 'row'>";
        echo "<TD class = 'ColorHex' id = 'SectionSeperator'>Color 1:</TD>";
        echo "<TD id = 'SectionSeperator'><input type='text' name='COLOR_U' maxlength='50' size ='20' value = '".$COLOR_U."'></input></TD>";
        echo "</TR>";
        
        //Sports Direct Color
        echo "<TR class = 'row'>";
        echo "<TD class = 'ColorHex' >Color 2: </TD>";
        echo "<TD><input type='text' name='COLOR_SPORTS_DIRECT' maxlength='50' size ='20' value = '".$COLOR_SPORTS_DIRECT."'></input></TD>";
        echo "</TR>";
        
        //Top Bar Color
        echo "<TR class = 'row'>";
        echo "<TD class = 'ColorHex' >XXX NOT USED XXX:</TD>";
        echo "<TD><input type='text' name='COLOR_TOP_BAR' maxlength='50' size ='20' value = '".$COLOR_TOP_BAR."'></input></TD>";
        echo "</TR>";
        
        //Menu Bar Background Color
        echo "<TR class = 'row'>";
        echo "<TD class = 'ColorHex' >XXX NOT USED XXX:</TD>";
        echo "<TD><input type='text' name='COLOR_MENU_BACKGROUND' maxlength='50' size ='20' value = '".$COLOR_MENU_BACKGROUND."'></input></TD>";
        echo "</TR>";
        
        //Menu Bar Text Color
        echo "<TR class = 'row'>";
        echo "<TD class = 'ColorHex' >XXX NOT USED XXX:</TD>";
        echo "<TD><input type='text' name='COLOR_MENU_BAR_TEXT' maxlength='50' size ='20' value = '".$COLOR_MENU_BAR_TEXT."'></input></TD>";
        echo "</TR>";    
        
         //Home City
        echo "<TR class = 'row'>";
        echo "<TD class = 'GeneralSchoolInfo' >Home City:</TD>";
        echo "<TD><input type='text' name='HOME_CITY' maxlength='50' size ='20' value = '".$HOME_CITY."'></input></TD>";
        echo "</TR>"; 
        
         //School State
        echo "<TR class = 'row'>";
        echo "<TD class = 'GeneralSchoolInfo' >Home State:</TD>";
        echo "<TD>";
        
            echo "<SELECT name = 'SCHOOL_STATE' class = 'SchoolStateDrop'>";
                
                $QUERY_STATE = $db->prepare("select STATE_KEY , STATE_NAME from states order by STATE_NAME");
    
                $QUERY_STATE->execute();

                while ($row_state = $QUERY_STATE->fetch(PDO::FETCH_ASSOC))
                {
                    IF ($STATE_KEY  == $row_state['STATE_KEY'])
                    {
                        echo "<OPTION value= '".$row_state['STATE_KEY']."' selected = 'selected' >".$row_state['STATE_NAME']."</OPTION>";
                    }
                    ELSE
                    {
                        echo "<OPTION value= '".$row_state['STATE_KEY']."'  >".$row_state['STATE_NAME']."</OPTION>";
                    }  
                }
            
            echo "</SELECT>";
                
        echo "</TD>";
        echo "</TR>"; 
        
         //Student Population
        echo "<TR class = 'row'>";
        echo "<TD class = 'GeneralSchoolInfo' >Student Population:</TD>";
        echo "<TD><input type='text' name='STUDENT_POPULATION' maxlength='50' size ='20' value = '".$STUDENT_POPULATION."'></input></TD>";
        echo "</TR>"; 
        
         //Monentary Endowment
        echo "<TR class = 'row'>";
        echo "<TD class = 'GeneralSchoolInfo' >Monetary Endowment:</TD>";
        echo "<TD><input type='text' name='MONETARY_ENDOWMENT' maxlength='50' size ='20' value = '".$MONETARY_ENDOWMENT."'></input></TD>";
        echo "</TR>"; 
        
        
        //Basketball All Time Record
        echo "<TR class = 'row'>";
        echo "<TD class = 'BasketballInfo' >Basketball All Time Record (W - L):</TD>";
        echo "<TD><input type='text' name='BASKETBALL_ALL_TIME_WINS' maxlength='50' size ='20' value = '".$ALL_BASKETBALL_WINS."'></input></TD>";
        echo "<TD><input type='text' name='BASKETBALL_ALL_TIME_LOSSES' maxlength='50' size ='20' value = '".$ALL_BASKETBALL_LOSSES."'></input></TD>";
        echo "</TR>"; 
        
        //Basketball Tournament Appearences
        echo "<TR class = 'row'>";
        echo "<TD class = 'BasketballInfo' >Tournamnet Appearences:</TD>";
        echo "<TD><input type='text' name='BASKETBALL_ALL_TOURNAMENT_APPEARENCES' maxlength='1000' size ='20' value = '".$BAKETBALL_TOURNAMENT_APPEARENCES."'></input></TD>";
        echo "</TR>"; 
        
        //Basketball Sweet Sixteen
        echo "<TR class = 'row'>";
        echo "<TD class = 'BasketballInfo' >Sweet 16 Appearences:</TD>";
        echo "<TD><input type='text' name='BASKETBALL_SWEET_SIXTEEN' maxlength='1000' size ='20' value = '".$BAKETBALL_SWEET_SIXTEEN."'></input></TD>";
        echo "</TR>"; 
        
        //Basketball Elite Eight
        echo "<TR class = 'row'>";
        echo "<TD class = 'BasketballInfo' >Elite 8 Appearences:</TD>";
        echo "<TD><input type='text' name='BASKETBALL_ELITE_EIGHT' maxlength='1000' size ='20' value = '".$BAKETBALL_ELITE_EIGHT."'></input></TD>";
        echo "</TR>"; 
        
        //Basketball Final Four
        echo "<TR class = 'row'>";
        echo "<TD class = 'BasketballInfo' >Final Four Appearences:</TD>";
        echo "<TD><input type='text' name='BASKETBALL_FINAL_FOUR' maxlength='1000' size ='20' value = '".$BAKETBALL_FINAL_FOUR."'></input></TD>";
        echo "</TR>"; 
        
        
        //Basketball National Championships
        echo "<TR class = 'row'>";
        echo "<TD class = 'BasketballInfo' >Titles:</TD>";
        echo "<TD><input type='text' name='BASKETBALL_TITLES' maxlength='1000' size ='20' value = '".$BAKETBALL_TITLES."'></input></TD>";
        echo "</TR>";
        
        
        
        //Football All Time Record
        echo "<TR class = 'row'>";
        echo "<TD class = 'FootballInfo' >Football All Time Record (W - L):</TD>";
        echo "<TD><input type='text' name='FOOTBALL_ALL_TIME_WINS' maxlength='50' size ='20' value = '".$ALL_FOOTBALL_WINS."'></input></TD>";
        echo "<TD><input type='text' name='FOOTBALL_ALL_TIME_LOSSES' maxlength='50' size ='20' value = '".$ALL_FOOTBALL_LOSSES."'></input></TD>";
        echo "</TR>"; 
        
        //Football Last Season Record
        echo "<TR class = 'row'>";
        echo "<TD class = 'FootballInfo' >Football Last Season Record:</TD>";
        echo "<TD><input type='text' name='FOOTBALL_LAST_SEASON_RECORD' maxlength='1000' size ='20' value = '".$FOOTBALL_LAST_SEASON."'></input></TD>";
        echo "</TR>";
        
        //Football Last Season Post Season Result
        echo "<TR class = 'row'>";
        echo "<TD class = 'FootballInfo' >Football Last Post Season:</TD>";
        echo "<TD><input type='text' name='FOOTBALL_LAST_POST' maxlength='1000' size ='20' value = '".$FOOTBALL_LAST_POST."'></input></TD>";
        echo "</TR>";
        
        //Football Stadium
        echo "<TR class = 'row'>";
        echo "<TD class = 'GeneralSchoolInfo' >Football Stadium:</TD>";
        echo "<TD><input type='text' name='FOOTBALL_STADIUM_NAME' maxlength='1000' size ='20' value = '".$FOOTBALL_STADIUM_NAME."'></input></TD>";
        echo "<TD><input type='text' name='FOOTBALL_STADIUM_ADDRESS' maxlength='1000' size ='20' value = '".$FOOTBALL_STADIUM_ADDRESS."' style = 'width: 250px;'></input></TD>";
        echo "</TR>";
        
        //Football Stadium
        echo "<TR class = 'row'>";
        echo "<TD class = 'GeneralSchoolInfo' >Basketball Stadium:</TD>";
        echo "<TD><input type='text' name='BASKETBALL_STADIUM_NAME' maxlength='1000' size ='20' value = '".$BASKETBALL_STADIUM_NAME."'></input></TD>";
        echo "<TD><input type='text' name='BASKETBALL_STADIUM_ADDRESS' maxlength='1000' size ='20' value = '".$BASKETBALL_STADIUM_ADDRESS."' style = 'width: 250px;'></input></TD>";
        echo "</TR>";
        
        echo "<input type='hidden' name='S_KEY' value='".$S_KEY."'></input>";
      
        echo "</TABLE>";
        
        echo "<BR><BR><input type='submit' name='submit' value='Update School Info'>";
        echo "</FORM>";
        
        echo "</div>";
        
        ?>
    
  </div>
</div>
<!--section for features ends--> 


<!--section for requirements and gallery starts-->

<!--section for requirements and gallery ends--> 

<!--footer starts-->
<div id="footer">
  <div class="container footer_inner clearfix"> 
    
    <!--about starts-->
    <div class="grid_3">

    <!--social starts-->
    <div class="grid_3">
    </div>
    <!--social ends-->
    
    <div class="clear"></div>
  </div>
</div>
<!--footer ends--> 

<!--copyright starts-->
<div id="copyright">
  <div class="container clearfix"> 
    
    <!--copyright text and general links-->
    <div class="grid_6">
      <p>Dynamic Web Vision LLC</p>
      
    </div>
    
    <!--social links-->
    
    <div class="clear"></div>
  </div>
</div>
<!--copyright ends--> 

<!--jqueries required--> 
<script type="text/javascript"> Cufon.now(); </script> 
<script src="js/jquery.cycle.all.js" type="text/javascript"></script> 
<script src="js/jquery-ui-1.8.17.custom.min.js" type="text/javascript"></script> 
<script src="js/jquery.easing.1.3.js" type="text/javascript"></script> 
<script src="js/jquery.supersubs.js" type="text/javascript"></script> 
<script src="js/jquery.superfish.js" type="text/javascript"></script> 
<script src="js/twitter.js" type="text/javascript"></script> 
<script src="js/cufon-yui.js" type="text/javascript"></script> 
<script src="js/Arimo_400.font.js" type="text/javascript"></script> 
<script src="js/custom.js" type="text/javascript"></script>
</body>
</html>