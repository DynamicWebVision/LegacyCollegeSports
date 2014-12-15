<?
ob_start(); 
session_start();




//IF (!ISSET($_SESSION['CS_LOGIN_PASS']))
//        {
//            header("Location: index.php");
//        }
        
        IF (isset($_POST['submit'])) 
                 {
            
              
                 require_once('CS_Functions.php');
                 
                 Get_DB_Connection();
                 
                 $QUERY_SCHOOL = $db->prepare("
                select LINK from front_links where LINK_ORDER = '1'                ");
                 

                $QUERY_SCHOOL->execute(); 
                 
                while ($row = $QUERY_SCHOOL->fetch(PDO::FETCH_ASSOC))
                {
                
                    IF ($row['LINK'] != $_POST['LINK_1'])
                    {   
                        $dateFormat="Y-m-d G:i:s";              
                        $CURRENT_DATE =gmdate($dateFormat);
                        
                        $UPDATE = $db->prepare(" update
                        front_links set LINK_TITLE = :link_title , LINK = :link , POST_DATE = :date where LINK_ORDER = '1'");

                        $UPDATE->bindValue(':link_title', addslashes($_POST['LINK_TITLE_1']));
                        
                        $UPDATE->bindValue(':link', $_POST['LINK_1']);
                        
                        $UPDATE->bindValue(':date', $CURRENT_DATE);

                        $UPDATE->execute(); 
                    }
                    
                }
                
                $QUERY_SCHOOL = $db->prepare("
                select LINK from front_links where LINK_ORDER = '2'                ");
                 

                $QUERY_SCHOOL->execute(); 
                 
                while ($row = $QUERY_SCHOOL->fetch(PDO::FETCH_ASSOC))
                {
                
                    IF ($row['LINK'] != $_POST['LINK_2'])
                    {   
                        $dateFormat="Y-m-d G:i:s";              $CURRENT_DATE =gmdate($dateFormat);
                        
                        $UPDATE = $db->prepare(" update
                        front_links set LINK_TITLE = :link_title , LINK = :link , POST_DATE = :date where LINK_ORDER = '2'");

                        $UPDATE->bindValue(':link_title', addslashes($_POST['LINK_TITLE_2']));
                        
                        $UPDATE->bindValue(':link', $_POST['LINK_2']);
                        
                        $UPDATE->bindValue(':date', $CURRENT_DATE);

                        $UPDATE->execute(); 
                    }
                    
                }

                $QUERY_SCHOOL = $db->prepare("
                select LINK from front_links where LINK_ORDER = '3'                ");
                 

                $QUERY_SCHOOL->execute(); 
                 
                while ($row = $QUERY_SCHOOL->fetch(PDO::FETCH_ASSOC))
                {
                
                    IF ($row['LINK'] != $_POST['LINK_3'])
                    {   
                        $dateFormat="Y-m-d G:i:s";              $CURRENT_DATE =gmdate($dateFormat);
                        
                        $UPDATE = $db->prepare(" update
                        front_links set LINK_TITLE = :link_title , LINK = :link , POST_DATE = :date where LINK_ORDER = '3'");

                        $UPDATE->bindValue(':link_title', addslashes($_POST['LINK_TITLE_3']));
                        
                        $UPDATE->bindValue(':link', $_POST['LINK_3']);
                        
                        $UPDATE->bindValue(':date', $CURRENT_DATE);

                        $UPDATE->execute(); 
                    }
                    
                }
                 
                $QUERY_SCHOOL = $db->prepare("
                select LINK from front_links where LINK_ORDER = '4'                ");
                 

                $QUERY_SCHOOL->execute(); 
                 
                while ($row = $QUERY_SCHOOL->fetch(PDO::FETCH_ASSOC))
                {
                
                    IF ($row['LINK'] != $_POST['LINK_4'])
                    {   
                        $dateFormat="Y-m-d G:i:s";              
                        
                        $CURRENT_DATE =gmdate($dateFormat);
                        
                        $UPDATE = $db->prepare(" update
                        front_links set LINK_TITLE = :link_title , LINK = :link , POST_DATE = :date where LINK_ORDER = '4'");

                        $UPDATE->bindValue(':link_title', addslashes($_POST['LINK_TITLE_4']));
                        
                        $UPDATE->bindValue(':link', $_POST['LINK_4']);
                        
                        $UPDATE->bindValue(':date', $CURRENT_DATE);

                        $UPDATE->execute(); 
                    }
                    
                }   
                
                $QUERY_SCHOOL = $db->prepare("
                select LINK from front_links where LINK_ORDER = '5'                ");
                 

                $QUERY_SCHOOL->execute(); 
                 
                while ($row = $QUERY_SCHOOL->fetch(PDO::FETCH_ASSOC))
                {
                
                    IF ($row['LINK'] != $_POST['LINK_5'])
                    {   
                        $dateFormat="Y-m-d G:i:s";              $CURRENT_DATE =gmdate($dateFormat);
                        
                        $UPDATE = $db->prepare(" update
                        front_links set LINK_TITLE = :link_title , LINK = :link , POST_DATE = :date where LINK_ORDER = '5'");

                        $UPDATE->bindValue(':link_title', addslashes($_POST['LINK_TITLE_5']));
                        
                        $UPDATE->bindValue(':link', $_POST['LINK_5']);
                        
                        $UPDATE->bindValue(':date', $CURRENT_DATE);

                        $UPDATE->execute(); 
                    }
                    
                }
                
                $QUERY_SCHOOL = $db->prepare("
                select LINK from front_links where LINK_ORDER = '6'                ");
                 

                $QUERY_SCHOOL->execute(); 
                 
                while ($row = $QUERY_SCHOOL->fetch(PDO::FETCH_ASSOC))
                {
                
                    IF ($row['LINK'] != $_POST['LINK_6'])
                    {   
                        $dateFormat="Y-m-d G:i:s";              $CURRENT_DATE =gmdate($dateFormat);
                        
                        $UPDATE = $db->prepare(" update
                        front_links set LINK_TITLE = :link_title , LINK = :link , POST_DATE = :date where LINK_ORDER = '6'");

                        $UPDATE->bindValue(':link_title', addslashes($_POST['LINK_TITLE_6']));
                        
                        $UPDATE->bindValue(':link', $_POST['LINK_6']);
                        
                        $UPDATE->bindValue(':date', $CURRENT_DATE);

                        $UPDATE->execute(); 
                    }
                    
                }
                
                $QUERY_SCHOOL = $db->prepare("
                select LINK from front_links where LINK_ORDER = '7'                ");
                 

                $QUERY_SCHOOL->execute(); 
                 
                while ($row = $QUERY_SCHOOL->fetch(PDO::FETCH_ASSOC))
                {
                
                    IF ($row['LINK'] != $_POST['LINK_7'])
                    {   
                        $dateFormat="Y-m-d G:i:s";              $CURRENT_DATE =gmdate($dateFormat);
                        
                        $UPDATE = $db->prepare(" update
                        front_links set LINK_TITLE = :link_title , LINK = :link , POST_DATE = :date where LINK_ORDER = '7'");

                        $UPDATE->bindValue(':link_title', $_POST['LINK_TITLE_7']);
                        
                        $UPDATE->bindValue(':link', addslashes($_POST['LINK_7']));
                        
                        $UPDATE->bindValue(':date', $CURRENT_DATE);

                        $UPDATE->execute(); 
                    }
                    
                }
                
                $QUERY_SCHOOL = $db->prepare("
                select LINK from front_links where LINK_ORDER = '8'                ");
                 

                $QUERY_SCHOOL->execute(); 
                 
                while ($row = $QUERY_SCHOOL->fetch(PDO::FETCH_ASSOC))
                {
                
                    IF ($row['LINK'] != $_POST['LINK_8'])
                    {   
                        $dateFormat="Y-m-d G:i:s";              $CURRENT_DATE =gmdate($dateFormat);
                        
                        $UPDATE = $db->prepare(" update
                        front_links set LINK_TITLE = :link_title , LINK = :link , POST_DATE = :date where LINK_ORDER = '8'");

                        $UPDATE->bindValue(':link_title', addslashes($_POST['LINK_TITLE_8']));
                        
                        $UPDATE->bindValue(':link', $_POST['LINK_8']);
                        
                        $UPDATE->bindValue(':date', $CURRENT_DATE);

                        $UPDATE->execute(); 
                    }
                    
                }
                
                $QUERY_SCHOOL = $db->prepare("
                select LINK from front_links where LINK_ORDER = '9'                ");
                 

                $QUERY_SCHOOL->execute(); 
                 
                while ($row = $QUERY_SCHOOL->fetch(PDO::FETCH_ASSOC))
                {
                
                    IF ($row['LINK'] != $_POST['LINK_9'])
                    {   
                        $dateFormat="Y-m-d G:i:s";              $CURRENT_DATE =gmdate($dateFormat);
                        
                        $UPDATE = $db->prepare(" update
                        front_links set LINK_TITLE = :link_title , LINK = :link , POST_DATE = :date where LINK_ORDER = '9'");

                        $UPDATE->bindValue(':link_title', addslashes($_POST['LINK_TITLE_9']));
                        
                        $UPDATE->bindValue(':link', $_POST['LINK_9']);
                        
                        $UPDATE->bindValue(':date', $CURRENT_DATE);

                        $UPDATE->execute(); 
                    }
                    
                }
                
                $QUERY_SCHOOL = $db->prepare("
                select LINK from front_links where LINK_ORDER = '10'                ");
                 

                $QUERY_SCHOOL->execute(); 
                 
                while ($row = $QUERY_SCHOOL->fetch(PDO::FETCH_ASSOC))
                {
                
                    IF ($row['LINK'] != $_POST['LINK_10'])
                    {   
                        $dateFormat="Y-m-d G:i:s";              $CURRENT_DATE =gmdate($dateFormat);
                        
                        $UPDATE = $db->prepare(" update
                        front_links set LINK_TITLE = :link_title , LINK = :link , POST_DATE = :date where LINK_ORDER = '10'");

                        $UPDATE->bindValue(':link_title', addslashes($_POST['LINK_TITLE_10']));
                        
                        $UPDATE->bindValue(':link', $_POST['LINK_10']);
                        
                        $UPDATE->bindValue(':date', $CURRENT_DATE);

                        $UPDATE->execute(); 
                    }
                    
                }
                
                
                //YOUTUBE STUFF
                
                $QUERY_SCHOOL = $db->prepare("
                select LINK from front_youtube_links where LINK_ORDER = '1'                ");
                 

                $QUERY_SCHOOL->execute(); 
                 
                while ($row = $QUERY_SCHOOL->fetch(PDO::FETCH_ASSOC))
                {
                
                    IF ($row['LINK'] != $_POST['YOUTUBE_LINK_1'])
                    {   
                        $dateFormat="Y-m-d G:i:s";              
                        $CURRENT_DATE =gmdate($dateFormat);
                        
                        $UPDATE = $db->prepare(" update
                        front_youtube_links set LINK_TITLE = :link_title , LINK = :link , POST_DATE = :date where LINK_ORDER = '1'");

                        $UPDATE->bindValue(':link_title', addslashes($_POST['YOUTUBE_LINK_TITLE_1']));
                        
                        $UPDATE->bindValue(':link', $_POST['YOUTUBE_LINK_1']);
                        
                        $UPDATE->bindValue(':date', $CURRENT_DATE);

                        $UPDATE->execute(); 
                    }
                    
                }
                
                $QUERY_SCHOOL = $db->prepare("
                select LINK from front_youtube_links where LINK_ORDER = '2'                ");
                 

                $QUERY_SCHOOL->execute(); 
                 
                while ($row = $QUERY_SCHOOL->fetch(PDO::FETCH_ASSOC))
                {
                
                    IF ($row['LINK'] != $_POST['YOUTUBE_LINK_2'])
                    {   
                        $dateFormat="Y-m-d G:i:s";              $CURRENT_DATE =gmdate($dateFormat);
                        
                        $UPDATE = $db->prepare(" update
                        front_youtube_links set LINK_TITLE = :link_title , LINK = :link , POST_DATE = :date where LINK_ORDER = '2'");

                        $UPDATE->bindValue(':link_title', addslashes($_POST['YOUTUBE_LINK_TITLE_2']));
                        
                        $UPDATE->bindValue(':link', $_POST['YOUTUBE_LINK_2']);
                        
                        $UPDATE->bindValue(':date', $CURRENT_DATE);

                        $UPDATE->execute(); 
                    }
                    
                }

                $QUERY_SCHOOL = $db->prepare("
                select LINK from front_youtube_links where LINK_ORDER = '3'                ");
                 

                $QUERY_SCHOOL->execute(); 
                 
                while ($row = $QUERY_SCHOOL->fetch(PDO::FETCH_ASSOC))
                {
                
                    IF ($row['LINK'] != $_POST['YOUTUBE_LINK_3'])
                    {   
                        $dateFormat="Y-m-d G:i:s";              $CURRENT_DATE =gmdate($dateFormat);
                        
                        $UPDATE = $db->prepare(" update
                        front_youtube_links set LINK_TITLE = :link_title , LINK = :link , POST_DATE = :date where LINK_ORDER = '3'");

                        $UPDATE->bindValue(':link_title', addslashes($_POST['YOUTUBE_LINK_TITLE_3']));
                        
                        $UPDATE->bindValue(':link', $_POST['YOUTUBE_LINK_3']);
                        
                        $UPDATE->bindValue(':date', $CURRENT_DATE);

                        $UPDATE->execute(); 
                    }
                    
                }
                 
                $QUERY_SCHOOL = $db->prepare("
                select LINK from front_youtube_links where LINK_ORDER = '4'                ");
                 

                $QUERY_SCHOOL->execute(); 
                 
                while ($row = $QUERY_SCHOOL->fetch(PDO::FETCH_ASSOC))
                {
                
                    IF ($row['LINK'] != $_POST['YOUTUBE_LINK_4'])
                    {   
                        $dateFormat="Y-m-d G:i:s";              
                        
                        $CURRENT_DATE =gmdate($dateFormat);
                        
                        $UPDATE = $db->prepare(" update
                        front_youtube_links set LINK_TITLE = :link_title , LINK = :link , POST_DATE = :date where LINK_ORDER = '4'");

                        $UPDATE->bindValue(':link_title', addslashes($_POST['YOUTUBE_LINK_TITLE_4']));
                        
                        $UPDATE->bindValue(':link', $_POST['YOUTUBE_LINK_4']);
                        
                        $UPDATE->bindValue(':date', $CURRENT_DATE);

                        $UPDATE->execute(); 
                    }
                    
                }   
                
                $QUERY_SCHOOL = $db->prepare("
                select LINK from front_youtube_links where LINK_ORDER = '5'                ");
                 

                $QUERY_SCHOOL->execute(); 
                 
                while ($row = $QUERY_SCHOOL->fetch(PDO::FETCH_ASSOC))
                {
                
                    IF ($row['LINK'] != $_POST['YOUTUBE_LINK_5'])
                    {   
                        $dateFormat="Y-m-d G:i:s";              $CURRENT_DATE =gmdate($dateFormat);
                        
                        $UPDATE = $db->prepare(" update
                        front_youtube_links set LINK_TITLE = :link_title , LINK = :link , POST_DATE = :date where LINK_ORDER = '5'");

                        $UPDATE->bindValue(':link_title', addslashes($_POST['YOUTUBE_LINK_TITLE_5']));
                        
                        $UPDATE->bindValue(':link', $_POST['YOUTUBE_LINK_5']);
                        
                        $UPDATE->bindValue(':date', $CURRENT_DATE);

                        $UPDATE->execute(); 
                    }
                    
                }
                
                $QUERY_SCHOOL = $db->prepare("
                select LINK from front_youtube_links where LINK_ORDER = '6'                ");
                 

                $QUERY_SCHOOL->execute(); 
                 
                while ($row = $QUERY_SCHOOL->fetch(PDO::FETCH_ASSOC))
                {
                
                    IF ($row['LINK'] != $_POST['YOUTUBE_LINK_6'])
                    {   
                        $dateFormat="Y-m-d G:i:s";              $CURRENT_DATE =gmdate($dateFormat);
                        
                        $UPDATE = $db->prepare(" update
                        front_youtube_links set LINK_TITLE = :link_title , LINK = :link , POST_DATE = :date where LINK_ORDER = '6'");

                        $UPDATE->bindValue(':link_title', addslashes($_POST['YOUTUBE_LINK_TITLE_6']));
                        
                        $UPDATE->bindValue(':link', $_POST['YOUTUBE_LINK_6']);
                        
                        $UPDATE->bindValue(':date', $CURRENT_DATE);

                        $UPDATE->execute(); 
                    }
                    
                }
                
                $QUERY_SCHOOL = $db->prepare("
                select LINK from front_youtube_links where LINK_ORDER = '7'                ");
                 

                $QUERY_SCHOOL->execute(); 
                 
                while ($row = $QUERY_SCHOOL->fetch(PDO::FETCH_ASSOC))
                {
                
                    IF ($row['LINK'] != $_POST['YOUTUBE_LINK_7'])
                    {   
                        $dateFormat="Y-m-d G:i:s";              $CURRENT_DATE =gmdate($dateFormat);
                        
                        $UPDATE = $db->prepare(" update
                        front_youtube_links set LINK_TITLE = :link_title , LINK = :link , POST_DATE = :date where LINK_ORDER = '7'");

                        $UPDATE->bindValue(':link_title', $_POST['YOUTUBE_LINK_TITLE_7']);
                        
                        $UPDATE->bindValue(':link', addslashes($_POST['YOUTUBE_LINK_7']));
                        
                        $UPDATE->bindValue(':date', $CURRENT_DATE);

                        $UPDATE->execute(); 
                    }
                    
                }
                
                $QUERY_SCHOOL = $db->prepare("
                select LINK from front_youtube_links where LINK_ORDER = '8'                ");
                 

                $QUERY_SCHOOL->execute(); 
                 
                while ($row = $QUERY_SCHOOL->fetch(PDO::FETCH_ASSOC))
                {
                
                    IF ($row['LINK'] != $_POST['YOUTUBE_LINK_8'])
                    {   
                        $dateFormat="Y-m-d G:i:s";              $CURRENT_DATE =gmdate($dateFormat);
                        
                        $UPDATE = $db->prepare(" update
                        front_youtube_links set LINK_TITLE = :link_title , LINK = :link , POST_DATE = :date where LINK_ORDER = '8'");

                        $UPDATE->bindValue(':link_title', addslashes($_POST['YOUTUBE_LINK_TITLE_8']));
                        
                        $UPDATE->bindValue(':link', $_POST['YOUTUBE_LINK_8']);
                        
                        $UPDATE->bindValue(':date', $CURRENT_DATE);

                        $UPDATE->execute(); 
                    }
                    
                }
                
                $QUERY_SCHOOL = $db->prepare("
                select LINK from front_youtube_links where LINK_ORDER = '9'                ");
                 

                $QUERY_SCHOOL->execute(); 
                 
                while ($row = $QUERY_SCHOOL->fetch(PDO::FETCH_ASSOC))
                {
                
                    IF ($row['LINK'] != $_POST['YOUTUBE_LINK_9'])
                    {   
                        $dateFormat="Y-m-d G:i:s";              $CURRENT_DATE =gmdate($dateFormat);
                        
                        $UPDATE = $db->prepare(" update
                        front_youtube_links set LINK_TITLE = :link_title , LINK = :link , POST_DATE = :date where LINK_ORDER = '9'");

                        $UPDATE->bindValue(':link_title', addslashes($_POST['YOUTUBE_LINK_TITLE_9']));
                        
                        $UPDATE->bindValue(':link', $_POST['YOUTUBE_LINK_9']);
                        
                        $UPDATE->bindValue(':date', $CURRENT_DATE);

                        $UPDATE->execute(); 
                    }
                    
                }
                
                $QUERY_SCHOOL = $db->prepare("
                select LINK from front_youtube_links where LINK_ORDER = '10'                ");
                 

                $QUERY_SCHOOL->execute(); 
                 
                while ($row = $QUERY_SCHOOL->fetch(PDO::FETCH_ASSOC))
                {
                
                    IF ($row['LINK'] != $_POST['YOUTUBE_LINK_10'])
                    {   
                        $dateFormat="Y-m-d G:i:s";              $CURRENT_DATE =gmdate($dateFormat);
                        
                        $UPDATE = $db->prepare(" update
                        front_youtube_links set LINK_TITLE = :link_title , LINK = :link , POST_DATE = :date where LINK_ORDER = '10'");

                        $UPDATE->bindValue(':link_title', addslashes($_POST['YOUTUBE_LINK_TITLE_10']));
                        
                        $UPDATE->bindValue(':link', $_POST['YOUTUBE_LINK_10']);
                        
                        $UPDATE->bindValue(':date', $CURRENT_DATE);

                        $UPDATE->execute(); 
                    }
                    
                }
                
                
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


.HeismanLine
{
    position: relative;
    width: 90%;
    left: 5%;
    height: 45px;
    
    margin-bottom: 15px;
}

.heiyear
{
    position: absolute;
}

.SchoolDropwDown
{
    position: absolute;
    left: 75px;
    width: 250px;
}

.PlayerName
{
    position: absolute;
    left: 240px;
    
    width: 150px;
}

.StatusDate
{
    position: absolute;
    left: 515px;
}

.YouTubeLink
{
    position: absolute;
    left: 410px;
    
    width: 225px;
}

.FreeSchool
{
    position: absolute;
    left: 665px;
    
    width: 85px;
}

.Position
{
    position: absolute;
    left: 788px;
    
    width: 35px;
}

.Y3
{
    color: blue;
}


.Y4
{
    color: red;
}

.Y5
{
    color: green;
}

.Y6
{
    color: maroon;
}

.Y7
{
    color: orange;
}

.Y8
{
    color: gold;
}

.Y9
{
    color: brown;
}

.Y0
{
    color: purple;
}

.Y1
{
    color: cyan;
}

.SubmitButton
{
    margin-bottom: 100px;
    position: relative;
    width: 100%;
    height: 44px;
}

.Record1
{
    position: absolute;
    left: 345px;
    width: 140px;
}

.SchoolDropwDown2
{
    position: absolute;
    left: 320px;
    height: 40px;
}

.Record2
{
    position: absolute;
    left: 490px;
    width: 50px;
}

.SchoolDropwDown3
{
    position: absolute;
    left: 560px;
    height: 40px;
}

.Record3
{
    position: absolute;
    left: 720px;
    width: 50px;
}

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

<script type="text/javascript" src="JS_SpecificPage/NationalChampionships.js"></script>    

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
    <H1>Front Page Links</H1>
    <?
      
//        IF (ISSET($_SESSION['CS_LOGIN_PASS']))
//        {
//            IF ($_SESSION['CS_LOGIN_PASS'] != "1")
//            {
//                header("Location: index.php");
//            }
//            
//        }
//        ELSE
//        {
//            header("Location: index.php");
//        }
      
        
    
        require_once('CS_Functions.php');
        
        Get_DB_Connection();
        
        echo "<div id = 'SchoolLinkList'>";
        
        $QUERY_SCHOOL = $db->prepare("
                select LINK_ORDER , LINK_TITLE , LINK , POST_DATE from front_links
                ");

        $QUERY_SCHOOL->execute(); 
        
       echo "<DIV class = 'HeismanLine'>";
       
       echo "<DIV class = 'heiyear'>Link Order</DIV>";
       
       echo "<DIV class = 'SchoolDropwDown'>Link Title</DIV>";
       
       echo "<DIV class = 'Record1'>Link</DIV>";
       
       
//       echo "<DIV class = 'SchoolDropwDown3'>School 3</DIV>";
//       
//       echo "<DIV class = 'Record3'>Record</DIV>";
       
       $_TMZ_DIFF = 5;
       
       echo "</DIV>";
        echo "<FORM method = 'POST' action='Front_Links.php'>";
        while ($row = $QUERY_SCHOOL->fetch(PDO::FETCH_ASSOC))
        {   
            IF ($row['LINK_ORDER'] == "1")
            {
                $LINK_TITLE_1 = $row['LINK_TITLE'];
                $LINK_1 = $row['LINK'];
                
                //DB Status Date
                $DB_DATE_TIME = $row['POST_DATE']." - ".$_TMZ_DIFF." hour";

                //Current Date
                $CURRENT_DATE = gmdate('m/d/Y G:i:s');

                $VISITOR_DATE_TIME = $CURRENT_DATE." - ".$_TMZ_DIFF." hour";

                //Today Check
                $CURRENT_DATE_TODAY = date("m/d/Y",strtotime($VISITOR_DATE_TIME));
                $DB_DATE_COMPARE = date("m/d/Y",strtotime($DB_DATE_TIME));

                //Yesterday Check
                $CURRENT_DATE_YESTERDAY = date("m/d/Y",strtotime($VISITOR_DATE_TIME." - 24 hour"));

                //Four Days Check
                $CURRENT_DATE_FOUR_DAYS_AGO = strtotime(date("m/d/Y g:i a",strtotime($VISITOR_DATE_TIME." - 110 hour")));
                $DB_DATE_4_DAYS_COMPARE = strtotime(date("m/d/Y G:i:s",strtotime($DB_DATE_TIME)));


                //$FOUR_DAYS_CALC_CHECK = date("m/d/Y",strtotime($FOUR_DAYS_CALC));

                IF ($CURRENT_DATE_TODAY == $DB_DATE_COMPARE)
                {
                    $STATUS_DATE = "Today ".date("g:i a",strtotime($DB_DATE_TIME));
                }
                ELSEIF ($CURRENT_DATE_YESTERDAY == $DB_DATE_COMPARE)
                {
                    $STATUS_DATE = "Yesterday ".date("g:i a",strtotime($DB_DATE_TIME));
                }
                ELSEIF ($CURRENT_DATE_FOUR_DAYS_AGO < $DB_DATE_4_DAYS_COMPARE)
                {
                    $STATUS_DATE = date("l g:i a",strtotime($DB_DATE_TIME));
                }
                ELSE
                {
                    $STATUS_DATE = date("m/d/Y g:i a",strtotime($DB_DATE_TIME));
                }
                
                $POST_DATE_1 = $STATUS_DATE;
            }
            
            IF ($row['LINK_ORDER'] == "2")
            {
                $LINK_TITLE_2 = $row['LINK_TITLE'];
                $LINK_2 = $row['LINK'];
                
                //DB Status Date
                $DB_DATE_TIME = $row['POST_DATE']." - ".$_TMZ_DIFF." hour";

                //Current Date
                $CURRENT_DATE = gmdate('m/d/Y G:i:s');

                $VISITOR_DATE_TIME = $CURRENT_DATE." - ".$_TMZ_DIFF." hour";

                //Today Check
                $CURRENT_DATE_TODAY = date("m/d/Y",strtotime($VISITOR_DATE_TIME));
                $DB_DATE_COMPARE = date("m/d/Y",strtotime($DB_DATE_TIME));

                //Yesterday Check
                $CURRENT_DATE_YESTERDAY = date("m/d/Y",strtotime($VISITOR_DATE_TIME." - 24 hour"));

                //Four Days Check
                $CURRENT_DATE_FOUR_DAYS_AGO = strtotime(date("m/d/Y g:i a",strtotime($VISITOR_DATE_TIME." - 110 hour")));
                $DB_DATE_4_DAYS_COMPARE = strtotime(date("m/d/Y G:i:s",strtotime($DB_DATE_TIME)));


                //$FOUR_DAYS_CALC_CHECK = date("m/d/Y",strtotime($FOUR_DAYS_CALC));

                IF ($CURRENT_DATE_TODAY == $DB_DATE_COMPARE)
                {
                    $STATUS_DATE = "Today ".date("g:i a",strtotime($DB_DATE_TIME));
                }
                ELSEIF ($CURRENT_DATE_YESTERDAY == $DB_DATE_COMPARE)
                {
                    $STATUS_DATE = "Yesterday ".date("g:i a",strtotime($DB_DATE_TIME));
                }
                ELSEIF ($CURRENT_DATE_FOUR_DAYS_AGO < $DB_DATE_4_DAYS_COMPARE)
                {
                    $STATUS_DATE = date("l g:i a",strtotime($DB_DATE_TIME));
                }
                ELSE
                {
                    $STATUS_DATE = date("m/d/Y g:i a",strtotime($DB_DATE_TIME));
                }
                
                $POST_DATE_2 = $STATUS_DATE;
            }
            
            IF ($row['LINK_ORDER'] == "3")
            {
                $LINK_TITLE_3 = $row['LINK_TITLE'];
                $LINK_3 = $row['LINK'];
                
                //DB Status Date
                $DB_DATE_TIME = $row['POST_DATE']." - ".$_TMZ_DIFF." hour";

                //Current Date
                $CURRENT_DATE = gmdate('m/d/Y G:i:s');

                $VISITOR_DATE_TIME = $CURRENT_DATE." - ".$_TMZ_DIFF." hour";

                //Today Check
                $CURRENT_DATE_TODAY = date("m/d/Y",strtotime($VISITOR_DATE_TIME));
                $DB_DATE_COMPARE = date("m/d/Y",strtotime($DB_DATE_TIME));

                //Yesterday Check
                $CURRENT_DATE_YESTERDAY = date("m/d/Y",strtotime($VISITOR_DATE_TIME." - 24 hour"));

                //Four Days Check
                $CURRENT_DATE_FOUR_DAYS_AGO = strtotime(date("m/d/Y g:i a",strtotime($VISITOR_DATE_TIME." - 110 hour")));
                $DB_DATE_4_DAYS_COMPARE = strtotime(date("m/d/Y G:i:s",strtotime($DB_DATE_TIME)));


                //$FOUR_DAYS_CALC_CHECK = date("m/d/Y",strtotime($FOUR_DAYS_CALC));

                IF ($CURRENT_DATE_TODAY == $DB_DATE_COMPARE)
                {
                    $STATUS_DATE = "Today ".date("g:i a",strtotime($DB_DATE_TIME));
                }
                ELSEIF ($CURRENT_DATE_YESTERDAY == $DB_DATE_COMPARE)
                {
                    $STATUS_DATE = "Yesterday ".date("g:i a",strtotime($DB_DATE_TIME));
                }
                ELSEIF ($CURRENT_DATE_FOUR_DAYS_AGO < $DB_DATE_4_DAYS_COMPARE)
                {
                    $STATUS_DATE = date("l g:i a",strtotime($DB_DATE_TIME));
                }
                ELSE
                {
                    $STATUS_DATE = date("m/d/Y g:i a",strtotime($DB_DATE_TIME));
                }
                
                $POST_DATE_3 = $STATUS_DATE;
            }
            
            IF ($row['LINK_ORDER'] == "4")
            {
                $LINK_TITLE_4 = $row['LINK_TITLE'];
                $LINK_4 = $row['LINK'];
                
                //DB Status Date
                $DB_DATE_TIME = $row['POST_DATE']." - ".$_TMZ_DIFF." hour";

                //Current Date
                $CURRENT_DATE = gmdate('m/d/Y G:i:s');

                $VISITOR_DATE_TIME = $CURRENT_DATE." - ".$_TMZ_DIFF." hour";

                //Today Check
                $CURRENT_DATE_TODAY = date("m/d/Y",strtotime($VISITOR_DATE_TIME));
                $DB_DATE_COMPARE = date("m/d/Y",strtotime($DB_DATE_TIME));

                //Yesterday Check
                $CURRENT_DATE_YESTERDAY = date("m/d/Y",strtotime($VISITOR_DATE_TIME." - 24 hour"));

                //Four Days Check
                $CURRENT_DATE_FOUR_DAYS_AGO = strtotime(date("m/d/Y g:i a",strtotime($VISITOR_DATE_TIME." - 110 hour")));
                $DB_DATE_4_DAYS_COMPARE = strtotime(date("m/d/Y G:i:s",strtotime($DB_DATE_TIME)));


                //$FOUR_DAYS_CALC_CHECK = date("m/d/Y",strtotime($FOUR_DAYS_CALC));

                IF ($CURRENT_DATE_TODAY == $DB_DATE_COMPARE)
                {
                    $STATUS_DATE = "Today ".date("g:i a",strtotime($DB_DATE_TIME));
                }
                ELSEIF ($CURRENT_DATE_YESTERDAY == $DB_DATE_COMPARE)
                {
                    $STATUS_DATE = "Yesterday ".date("g:i a",strtotime($DB_DATE_TIME));
                }
                ELSEIF ($CURRENT_DATE_FOUR_DAYS_AGO < $DB_DATE_4_DAYS_COMPARE)
                {
                    $STATUS_DATE = date("l g:i a",strtotime($DB_DATE_TIME));
                }
                ELSE
                {
                    $STATUS_DATE = date("m/d/Y g:i a",strtotime($DB_DATE_TIME));
                }
                
                $POST_DATE_4 = $STATUS_DATE;
            }
            
            IF ($row['LINK_ORDER'] == "5")
            {
                $LINK_TITLE_5 = $row['LINK_TITLE'];
                $LINK_5 = $row['LINK'];
                
                //DB Status Date
                $DB_DATE_TIME = $row['POST_DATE']." - ".$_TMZ_DIFF." hour";

                //Current Date
                $CURRENT_DATE = gmdate('m/d/Y G:i:s');

                $VISITOR_DATE_TIME = $CURRENT_DATE." - ".$_TMZ_DIFF." hour";

                //Today Check
                $CURRENT_DATE_TODAY = date("m/d/Y",strtotime($VISITOR_DATE_TIME));
                $DB_DATE_COMPARE = date("m/d/Y",strtotime($DB_DATE_TIME));

                //Yesterday Check
                $CURRENT_DATE_YESTERDAY = date("m/d/Y",strtotime($VISITOR_DATE_TIME." - 24 hour"));

                //Four Days Check
                $CURRENT_DATE_FOUR_DAYS_AGO = strtotime(date("m/d/Y g:i a",strtotime($VISITOR_DATE_TIME." - 110 hour")));
                $DB_DATE_4_DAYS_COMPARE = strtotime(date("m/d/Y G:i:s",strtotime($DB_DATE_TIME)));


                //$FOUR_DAYS_CALC_CHECK = date("m/d/Y",strtotime($FOUR_DAYS_CALC));

                IF ($CURRENT_DATE_TODAY == $DB_DATE_COMPARE)
                {
                    $STATUS_DATE = "Today ".date("g:i a",strtotime($DB_DATE_TIME));
                }
                ELSEIF ($CURRENT_DATE_YESTERDAY == $DB_DATE_COMPARE)
                {
                    $STATUS_DATE = "Yesterday ".date("g:i a",strtotime($DB_DATE_TIME));
                }
                ELSEIF ($CURRENT_DATE_FOUR_DAYS_AGO < $DB_DATE_4_DAYS_COMPARE)
                {
                    $STATUS_DATE = date("l g:i a",strtotime($DB_DATE_TIME));
                }
                ELSE
                {
                    $STATUS_DATE = date("m/d/Y g:i a",strtotime($DB_DATE_TIME));
                }
                
                $POST_DATE_5 = $STATUS_DATE;
            }
            
            IF ($row['LINK_ORDER'] == "6")
            {
                $LINK_TITLE_6 = $row['LINK_TITLE'];
                $LINK_6 = $row['LINK'];
                
                //DB Status Date
                $DB_DATE_TIME = $row['POST_DATE']." - ".$_TMZ_DIFF." hour";

                //Current Date
                $CURRENT_DATE = gmdate('m/d/Y G:i:s');

                $VISITOR_DATE_TIME = $CURRENT_DATE." - ".$_TMZ_DIFF." hour";

                //Today Check
                $CURRENT_DATE_TODAY = date("m/d/Y",strtotime($VISITOR_DATE_TIME));
                $DB_DATE_COMPARE = date("m/d/Y",strtotime($DB_DATE_TIME));

                //Yesterday Check
                $CURRENT_DATE_YESTERDAY = date("m/d/Y",strtotime($VISITOR_DATE_TIME." - 24 hour"));

                //Four Days Check
                $CURRENT_DATE_FOUR_DAYS_AGO = strtotime(date("m/d/Y g:i a",strtotime($VISITOR_DATE_TIME." - 110 hour")));
                $DB_DATE_4_DAYS_COMPARE = strtotime(date("m/d/Y G:i:s",strtotime($DB_DATE_TIME)));


                //$FOUR_DAYS_CALC_CHECK = date("m/d/Y",strtotime($FOUR_DAYS_CALC));

                IF ($CURRENT_DATE_TODAY == $DB_DATE_COMPARE)
                {
                    $STATUS_DATE = "Today ".date("g:i a",strtotime($DB_DATE_TIME));
                }
                ELSEIF ($CURRENT_DATE_YESTERDAY == $DB_DATE_COMPARE)
                {
                    $STATUS_DATE = "Yesterday ".date("g:i a",strtotime($DB_DATE_TIME));
                }
                ELSEIF ($CURRENT_DATE_FOUR_DAYS_AGO < $DB_DATE_4_DAYS_COMPARE)
                {
                    $STATUS_DATE = date("l g:i a",strtotime($DB_DATE_TIME));
                }
                ELSE
                {
                    $STATUS_DATE = date("m/d/Y g:i a",strtotime($DB_DATE_TIME));
                }
                
                $POST_DATE_6 = $STATUS_DATE;
            }
            
            IF ($row['LINK_ORDER'] == "7")
            {
                $LINK_TITLE_7 = $row['LINK_TITLE'];
                $LINK_7 = $row['LINK'];
                
                //DB Status Date
                $DB_DATE_TIME = $row['POST_DATE']." - ".$_TMZ_DIFF." hour";

                //Current Date
                $CURRENT_DATE = gmdate('m/d/Y G:i:s');

                $VISITOR_DATE_TIME = $CURRENT_DATE." - ".$_TMZ_DIFF." hour";

                //Today Check
                $CURRENT_DATE_TODAY = date("m/d/Y",strtotime($VISITOR_DATE_TIME));
                $DB_DATE_COMPARE = date("m/d/Y",strtotime($DB_DATE_TIME));

                //Yesterday Check
                $CURRENT_DATE_YESTERDAY = date("m/d/Y",strtotime($VISITOR_DATE_TIME." - 24 hour"));

                //Four Days Check
                $CURRENT_DATE_FOUR_DAYS_AGO = strtotime(date("m/d/Y g:i a",strtotime($VISITOR_DATE_TIME." - 110 hour")));
                $DB_DATE_4_DAYS_COMPARE = strtotime(date("m/d/Y G:i:s",strtotime($DB_DATE_TIME)));


                //$FOUR_DAYS_CALC_CHECK = date("m/d/Y",strtotime($FOUR_DAYS_CALC));

                IF ($CURRENT_DATE_TODAY == $DB_DATE_COMPARE)
                {
                    $STATUS_DATE = "Today ".date("g:i a",strtotime($DB_DATE_TIME));
                }
                ELSEIF ($CURRENT_DATE_YESTERDAY == $DB_DATE_COMPARE)
                {
                    $STATUS_DATE = "Yesterday ".date("g:i a",strtotime($DB_DATE_TIME));
                }
                ELSEIF ($CURRENT_DATE_FOUR_DAYS_AGO < $DB_DATE_4_DAYS_COMPARE)
                {
                    $STATUS_DATE = date("l g:i a",strtotime($DB_DATE_TIME));
                }
                ELSE
                {
                    $STATUS_DATE = date("m/d/Y g:i a",strtotime($DB_DATE_TIME));
                }
                
                $POST_DATE_7 = $STATUS_DATE;
            }
            
            IF ($row['LINK_ORDER'] == "8")
            {
                $LINK_TITLE_8 = $row['LINK_TITLE'];
                $LINK_8 = $row['LINK'];
                
                //DB Status Date
                $DB_DATE_TIME = $row['POST_DATE']." - ".$_TMZ_DIFF." hour";

                //Current Date
                $CURRENT_DATE = gmdate('m/d/Y G:i:s');

                $VISITOR_DATE_TIME = $CURRENT_DATE." - ".$_TMZ_DIFF." hour";

                //Today Check
                $CURRENT_DATE_TODAY = date("m/d/Y",strtotime($VISITOR_DATE_TIME));
                $DB_DATE_COMPARE = date("m/d/Y",strtotime($DB_DATE_TIME));

                //Yesterday Check
                $CURRENT_DATE_YESTERDAY = date("m/d/Y",strtotime($VISITOR_DATE_TIME." - 24 hour"));

                //Four Days Check
                $CURRENT_DATE_FOUR_DAYS_AGO = strtotime(date("m/d/Y g:i a",strtotime($VISITOR_DATE_TIME." - 110 hour")));
                $DB_DATE_4_DAYS_COMPARE = strtotime(date("m/d/Y G:i:s",strtotime($DB_DATE_TIME)));


                //$FOUR_DAYS_CALC_CHECK = date("m/d/Y",strtotime($FOUR_DAYS_CALC));

                IF ($CURRENT_DATE_TODAY == $DB_DATE_COMPARE)
                {
                    $STATUS_DATE = "Today ".date("g:i a",strtotime($DB_DATE_TIME));
                }
                ELSEIF ($CURRENT_DATE_YESTERDAY == $DB_DATE_COMPARE)
                {
                    $STATUS_DATE = "Yesterday ".date("g:i a",strtotime($DB_DATE_TIME));
                }
                ELSEIF ($CURRENT_DATE_FOUR_DAYS_AGO < $DB_DATE_4_DAYS_COMPARE)
                {
                    $STATUS_DATE = date("l g:i a",strtotime($DB_DATE_TIME));
                }
                ELSE
                {
                    $STATUS_DATE = date("m/d/Y g:i a",strtotime($DB_DATE_TIME));
                }
                
                $POST_DATE_8 = $STATUS_DATE;
            }
            
            IF ($row['LINK_ORDER'] == "9")
            {
                $LINK_TITLE_9 = $row['LINK_TITLE'];
                $LINK_9 = $row['LINK'];
                
                //DB Status Date
                $DB_DATE_TIME = $row['POST_DATE']." - ".$_TMZ_DIFF." hour";

                //Current Date
                $CURRENT_DATE = gmdate('m/d/Y G:i:s');

                $VISITOR_DATE_TIME = $CURRENT_DATE." - ".$_TMZ_DIFF." hour";

                //Today Check
                $CURRENT_DATE_TODAY = date("m/d/Y",strtotime($VISITOR_DATE_TIME));
                $DB_DATE_COMPARE = date("m/d/Y",strtotime($DB_DATE_TIME));

                //Yesterday Check
                $CURRENT_DATE_YESTERDAY = date("m/d/Y",strtotime($VISITOR_DATE_TIME." - 24 hour"));

                //Four Days Check
                $CURRENT_DATE_FOUR_DAYS_AGO = strtotime(date("m/d/Y g:i a",strtotime($VISITOR_DATE_TIME." - 110 hour")));
                $DB_DATE_4_DAYS_COMPARE = strtotime(date("m/d/Y G:i:s",strtotime($DB_DATE_TIME)));


                //$FOUR_DAYS_CALC_CHECK = date("m/d/Y",strtotime($FOUR_DAYS_CALC));

                IF ($CURRENT_DATE_TODAY == $DB_DATE_COMPARE)
                {
                    $STATUS_DATE = "Today ".date("g:i a",strtotime($DB_DATE_TIME));
                }
                ELSEIF ($CURRENT_DATE_YESTERDAY == $DB_DATE_COMPARE)
                {
                    $STATUS_DATE = "Yesterday ".date("g:i a",strtotime($DB_DATE_TIME));
                }
                ELSEIF ($CURRENT_DATE_FOUR_DAYS_AGO < $DB_DATE_4_DAYS_COMPARE)
                {
                    $STATUS_DATE = date("l g:i a",strtotime($DB_DATE_TIME));
                }
                ELSE
                {
                    $STATUS_DATE = date("m/d/Y g:i a",strtotime($DB_DATE_TIME));
                }
                
                $POST_DATE_9 = $STATUS_DATE;
            }
            
            IF ($row['LINK_ORDER'] == "10")
            {
                $LINK_TITLE_10 = $row['LINK_TITLE'];
                $LINK_10 = $row['LINK'];
                
                //DB Status Date
                $DB_DATE_TIME = $row['POST_DATE']." - ".$_TMZ_DIFF." hour";

                //Current Date
                $CURRENT_DATE = gmdate('m/d/Y G:i:s');

                $VISITOR_DATE_TIME = $CURRENT_DATE." - ".$_TMZ_DIFF." hour";

                //Today Check
                $CURRENT_DATE_TODAY = date("m/d/Y",strtotime($VISITOR_DATE_TIME));
                $DB_DATE_COMPARE = date("m/d/Y",strtotime($DB_DATE_TIME));

                //Yesterday Check
                $CURRENT_DATE_YESTERDAY = date("m/d/Y",strtotime($VISITOR_DATE_TIME." - 24 hour"));

                //Four Days Check
                $CURRENT_DATE_FOUR_DAYS_AGO = strtotime(date("m/d/Y g:i a",strtotime($VISITOR_DATE_TIME." - 110 hour")));
                $DB_DATE_4_DAYS_COMPARE = strtotime(date("m/d/Y G:i:s",strtotime($DB_DATE_TIME)));


                //$FOUR_DAYS_CALC_CHECK = date("m/d/Y",strtotime($FOUR_DAYS_CALC));

                IF ($CURRENT_DATE_TODAY == $DB_DATE_COMPARE)
                {
                    $STATUS_DATE = "Today ".date("g:i a",strtotime($DB_DATE_TIME));
                }
                ELSEIF ($CURRENT_DATE_YESTERDAY == $DB_DATE_COMPARE)
                {
                    $STATUS_DATE = "Yesterday ".date("g:i a",strtotime($DB_DATE_TIME));
                }
                ELSEIF ($CURRENT_DATE_FOUR_DAYS_AGO < $DB_DATE_4_DAYS_COMPARE)
                {
                    $STATUS_DATE = date("l g:i a",strtotime($DB_DATE_TIME));
                }
                ELSE
                {
                    $STATUS_DATE = date("m/d/Y g:i a",strtotime($DB_DATE_TIME));
                }
                
                $POST_DATE_10 = $STATUS_DATE;
            }
        }
        
        $QUERY_YOU_TUBE = $db->prepare("
                select LINK_ORDER , LINK_TITLE , LINK , POST_DATE from front_youtube_links
                ");
 
        $QUERY_YOU_TUBE->execute(); 
        
        while ($row = $QUERY_YOU_TUBE->fetch(PDO::FETCH_ASSOC))
        {   
            IF ($row['LINK_ORDER'] == "1")
            {
                $YOU_TUBE_TITLE_1 = $row['LINK_TITLE'];
                $YOUTUBE_LINK_1 = $row['LINK'];
                
                //DB Status Date
                $DB_DATE_TIME = $row['POST_DATE']." - ".$_TMZ_DIFF." hour";

                //Current Date
                $CURRENT_DATE = gmdate('m/d/Y G:i:s');

                $VISITOR_DATE_TIME = $CURRENT_DATE." - ".$_TMZ_DIFF." hour";

                //Today Check
                $CURRENT_DATE_TODAY = date("m/d/Y",strtotime($VISITOR_DATE_TIME));
                $DB_DATE_COMPARE = date("m/d/Y",strtotime($DB_DATE_TIME));

                //Yesterday Check
                $CURRENT_DATE_YESTERDAY = date("m/d/Y",strtotime($VISITOR_DATE_TIME." - 24 hour"));

                //Four Days Check
                $CURRENT_DATE_FOUR_DAYS_AGO = strtotime(date("m/d/Y g:i a",strtotime($VISITOR_DATE_TIME." - 110 hour")));
                $DB_DATE_4_DAYS_COMPARE = strtotime(date("m/d/Y G:i:s",strtotime($DB_DATE_TIME)));


                //$FOUR_DAYS_CALC_CHECK = date("m/d/Y",strtotime($FOUR_DAYS_CALC));

                IF ($CURRENT_DATE_TODAY == $DB_DATE_COMPARE)
                {
                    $STATUS_DATE = "Today ".date("g:i a",strtotime($DB_DATE_TIME));
                }
                ELSEIF ($CURRENT_DATE_YESTERDAY == $DB_DATE_COMPARE)
                {
                    $STATUS_DATE = "Yesterday ".date("g:i a",strtotime($DB_DATE_TIME));
                }
                ELSEIF ($CURRENT_DATE_FOUR_DAYS_AGO < $DB_DATE_4_DAYS_COMPARE)
                {
                    $STATUS_DATE = date("l g:i a",strtotime($DB_DATE_TIME));
                }
                ELSE
                {
                    $STATUS_DATE = date("m/d/Y g:i a",strtotime($DB_DATE_TIME));
                }
                
                $YOUTUBE_POST_DATE_1 = $STATUS_DATE;
            }
            
            IF ($row['LINK_ORDER'] == "2")
            {
                $YOU_TUBE_TITLE_2 = $row['LINK_TITLE'];
                $YOUTUBE_LINK_2 = $row['LINK'];
                
                //DB Status Date
                $DB_DATE_TIME = $row['POST_DATE']." - ".$_TMZ_DIFF." hour";

                //Current Date
                $CURRENT_DATE = gmdate('m/d/Y G:i:s');

                $VISITOR_DATE_TIME = $CURRENT_DATE." - ".$_TMZ_DIFF." hour";

                //Today Check
                $CURRENT_DATE_TODAY = date("m/d/Y",strtotime($VISITOR_DATE_TIME));
                $DB_DATE_COMPARE = date("m/d/Y",strtotime($DB_DATE_TIME));

                //Yesterday Check
                $CURRENT_DATE_YESTERDAY = date("m/d/Y",strtotime($VISITOR_DATE_TIME." - 24 hour"));

                //Four Days Check
                $CURRENT_DATE_FOUR_DAYS_AGO = strtotime(date("m/d/Y g:i a",strtotime($VISITOR_DATE_TIME." - 110 hour")));
                $DB_DATE_4_DAYS_COMPARE = strtotime(date("m/d/Y G:i:s",strtotime($DB_DATE_TIME)));


                //$FOUR_DAYS_CALC_CHECK = date("m/d/Y",strtotime($FOUR_DAYS_CALC));

                IF ($CURRENT_DATE_TODAY == $DB_DATE_COMPARE)
                {
                    $STATUS_DATE = "Today ".date("g:i a",strtotime($DB_DATE_TIME));
                }
                ELSEIF ($CURRENT_DATE_YESTERDAY == $DB_DATE_COMPARE)
                {
                    $STATUS_DATE = "Yesterday ".date("g:i a",strtotime($DB_DATE_TIME));
                }
                ELSEIF ($CURRENT_DATE_FOUR_DAYS_AGO < $DB_DATE_4_DAYS_COMPARE)
                {
                    $STATUS_DATE = date("l g:i a",strtotime($DB_DATE_TIME));
                }
                ELSE
                {
                    $STATUS_DATE = date("m/d/Y g:i a",strtotime($DB_DATE_TIME));
                }
                
                $YOUTUBE_POST_DATE_2 = $STATUS_DATE;
            }
            
            IF ($row['LINK_ORDER'] == "3")
            {
                $YOU_TUBE_TITLE_3 = $row['LINK_TITLE'];
                $YOUTUBE_LINK_3 = $row['LINK'];
                
                //DB Status Date
                $DB_DATE_TIME = $row['POST_DATE']." - ".$_TMZ_DIFF." hour";

                //Current Date
                $CURRENT_DATE = gmdate('m/d/Y G:i:s');

                $VISITOR_DATE_TIME = $CURRENT_DATE." - ".$_TMZ_DIFF." hour";

                //Today Check
                $CURRENT_DATE_TODAY = date("m/d/Y",strtotime($VISITOR_DATE_TIME));
                $DB_DATE_COMPARE = date("m/d/Y",strtotime($DB_DATE_TIME));

                //Yesterday Check
                $CURRENT_DATE_YESTERDAY = date("m/d/Y",strtotime($VISITOR_DATE_TIME." - 24 hour"));

                //Four Days Check
                $CURRENT_DATE_FOUR_DAYS_AGO = strtotime(date("m/d/Y g:i a",strtotime($VISITOR_DATE_TIME." - 110 hour")));
                $DB_DATE_4_DAYS_COMPARE = strtotime(date("m/d/Y G:i:s",strtotime($DB_DATE_TIME)));


                //$FOUR_DAYS_CALC_CHECK = date("m/d/Y",strtotime($FOUR_DAYS_CALC));

                IF ($CURRENT_DATE_TODAY == $DB_DATE_COMPARE)
                {
                    $STATUS_DATE = "Today ".date("g:i a",strtotime($DB_DATE_TIME));
                }
                ELSEIF ($CURRENT_DATE_YESTERDAY == $DB_DATE_COMPARE)
                {
                    $STATUS_DATE = "Yesterday ".date("g:i a",strtotime($DB_DATE_TIME));
                }
                ELSEIF ($CURRENT_DATE_FOUR_DAYS_AGO < $DB_DATE_4_DAYS_COMPARE)
                {
                    $STATUS_DATE = date("l g:i a",strtotime($DB_DATE_TIME));
                }
                ELSE
                {
                    $STATUS_DATE = date("m/d/Y g:i a",strtotime($DB_DATE_TIME));
                }
                
                $YOUTUBE_POST_DATE_3 = $STATUS_DATE;
            }
            
            IF ($row['LINK_ORDER'] == "4")
            {
                $YOU_TUBE_TITLE_4 = $row['LINK_TITLE'];
                $YOUTUBE_LINK_4 = $row['LINK'];
                
                //DB Status Date
                $DB_DATE_TIME = $row['POST_DATE']." - ".$_TMZ_DIFF." hour";

                //Current Date
                $CURRENT_DATE = gmdate('m/d/Y G:i:s');

                $VISITOR_DATE_TIME = $CURRENT_DATE." - ".$_TMZ_DIFF." hour";

                //Today Check
                $CURRENT_DATE_TODAY = date("m/d/Y",strtotime($VISITOR_DATE_TIME));
                $DB_DATE_COMPARE = date("m/d/Y",strtotime($DB_DATE_TIME));

                //Yesterday Check
                $CURRENT_DATE_YESTERDAY = date("m/d/Y",strtotime($VISITOR_DATE_TIME." - 24 hour"));

                //Four Days Check
                $CURRENT_DATE_FOUR_DAYS_AGO = strtotime(date("m/d/Y g:i a",strtotime($VISITOR_DATE_TIME." - 110 hour")));
                $DB_DATE_4_DAYS_COMPARE = strtotime(date("m/d/Y G:i:s",strtotime($DB_DATE_TIME)));


                //$FOUR_DAYS_CALC_CHECK = date("m/d/Y",strtotime($FOUR_DAYS_CALC));

                IF ($CURRENT_DATE_TODAY == $DB_DATE_COMPARE)
                {
                    $STATUS_DATE = "Today ".date("g:i a",strtotime($DB_DATE_TIME));
                }
                ELSEIF ($CURRENT_DATE_YESTERDAY == $DB_DATE_COMPARE)
                {
                    $STATUS_DATE = "Yesterday ".date("g:i a",strtotime($DB_DATE_TIME));
                }
                ELSEIF ($CURRENT_DATE_FOUR_DAYS_AGO < $DB_DATE_4_DAYS_COMPARE)
                {
                    $STATUS_DATE = date("l g:i a",strtotime($DB_DATE_TIME));
                }
                ELSE
                {
                    $STATUS_DATE = date("m/d/Y g:i a",strtotime($DB_DATE_TIME));
                }
                
                $YOUTUBE_POST_DATE_4 = $STATUS_DATE;
            }
            
            IF ($row['LINK_ORDER'] == "5")
            {
                $YOU_TUBE_TITLE_5 = $row['LINK_TITLE'];
                $YOUTUBE_LINK_5 = $row['LINK'];
                
                //DB Status Date
                $DB_DATE_TIME = $row['POST_DATE']." - ".$_TMZ_DIFF." hour";

                //Current Date
                $CURRENT_DATE = gmdate('m/d/Y G:i:s');

                $VISITOR_DATE_TIME = $CURRENT_DATE." - ".$_TMZ_DIFF." hour";

                //Today Check
                $CURRENT_DATE_TODAY = date("m/d/Y",strtotime($VISITOR_DATE_TIME));
                $DB_DATE_COMPARE = date("m/d/Y",strtotime($DB_DATE_TIME));

                //Yesterday Check
                $CURRENT_DATE_YESTERDAY = date("m/d/Y",strtotime($VISITOR_DATE_TIME." - 24 hour"));

                //Four Days Check
                $CURRENT_DATE_FOUR_DAYS_AGO = strtotime(date("m/d/Y g:i a",strtotime($VISITOR_DATE_TIME." - 110 hour")));
                $DB_DATE_4_DAYS_COMPARE = strtotime(date("m/d/Y G:i:s",strtotime($DB_DATE_TIME)));


                //$FOUR_DAYS_CALC_CHECK = date("m/d/Y",strtotime($FOUR_DAYS_CALC));

                IF ($CURRENT_DATE_TODAY == $DB_DATE_COMPARE)
                {
                    $STATUS_DATE = "Today ".date("g:i a",strtotime($DB_DATE_TIME));
                }
                ELSEIF ($CURRENT_DATE_YESTERDAY == $DB_DATE_COMPARE)
                {
                    $STATUS_DATE = "Yesterday ".date("g:i a",strtotime($DB_DATE_TIME));
                }
                ELSEIF ($CURRENT_DATE_FOUR_DAYS_AGO < $DB_DATE_4_DAYS_COMPARE)
                {
                    $STATUS_DATE = date("l g:i a",strtotime($DB_DATE_TIME));
                }
                ELSE
                {
                    $STATUS_DATE = date("m/d/Y g:i a",strtotime($DB_DATE_TIME));
                }
                
                $YOUTUBE_POST_DATE_5 = $STATUS_DATE;
            }
            
            IF ($row['LINK_ORDER'] == "6")
            {
                $YOU_TUBE_TITLE_6 = $row['LINK_TITLE'];
                $YOUTUBE_LINK_6 = $row['LINK'];
                
                //DB Status Date
                $DB_DATE_TIME = $row['POST_DATE']." - ".$_TMZ_DIFF." hour";

                //Current Date
                $CURRENT_DATE = gmdate('m/d/Y G:i:s');

                $VISITOR_DATE_TIME = $CURRENT_DATE." - ".$_TMZ_DIFF." hour";

                //Today Check
                $CURRENT_DATE_TODAY = date("m/d/Y",strtotime($VISITOR_DATE_TIME));
                $DB_DATE_COMPARE = date("m/d/Y",strtotime($DB_DATE_TIME));

                //Yesterday Check
                $CURRENT_DATE_YESTERDAY = date("m/d/Y",strtotime($VISITOR_DATE_TIME." - 24 hour"));

                //Four Days Check
                $CURRENT_DATE_FOUR_DAYS_AGO = strtotime(date("m/d/Y g:i a",strtotime($VISITOR_DATE_TIME." - 110 hour")));
                $DB_DATE_4_DAYS_COMPARE = strtotime(date("m/d/Y G:i:s",strtotime($DB_DATE_TIME)));


                //$FOUR_DAYS_CALC_CHECK = date("m/d/Y",strtotime($FOUR_DAYS_CALC));

                IF ($CURRENT_DATE_TODAY == $DB_DATE_COMPARE)
                {
                    $STATUS_DATE = "Today ".date("g:i a",strtotime($DB_DATE_TIME));
                }
                ELSEIF ($CURRENT_DATE_YESTERDAY == $DB_DATE_COMPARE)
                {
                    $STATUS_DATE = "Yesterday ".date("g:i a",strtotime($DB_DATE_TIME));
                }
                ELSEIF ($CURRENT_DATE_FOUR_DAYS_AGO < $DB_DATE_4_DAYS_COMPARE)
                {
                    $STATUS_DATE = date("l g:i a",strtotime($DB_DATE_TIME));
                }
                ELSE
                {
                    $STATUS_DATE = date("m/d/Y g:i a",strtotime($DB_DATE_TIME));
                }
                
                $YOUTUBE_POST_DATE_6 = $STATUS_DATE;
            }
            
            IF ($row['LINK_ORDER'] == "7")
            {
                $YOU_TUBE_TITLE_7 = $row['LINK_TITLE'];
                $YOUTUBE_LINK_7 = $row['LINK'];
                
                //DB Status Date
                $DB_DATE_TIME = $row['POST_DATE']." - ".$_TMZ_DIFF." hour";

                //Current Date
                $CURRENT_DATE = gmdate('m/d/Y G:i:s');

                $VISITOR_DATE_TIME = $CURRENT_DATE." - ".$_TMZ_DIFF." hour";

                //Today Check
                $CURRENT_DATE_TODAY = date("m/d/Y",strtotime($VISITOR_DATE_TIME));
                $DB_DATE_COMPARE = date("m/d/Y",strtotime($DB_DATE_TIME));

                //Yesterday Check
                $CURRENT_DATE_YESTERDAY = date("m/d/Y",strtotime($VISITOR_DATE_TIME." - 24 hour"));

                //Four Days Check
                $CURRENT_DATE_FOUR_DAYS_AGO = strtotime(date("m/d/Y g:i a",strtotime($VISITOR_DATE_TIME." - 110 hour")));
                $DB_DATE_4_DAYS_COMPARE = strtotime(date("m/d/Y G:i:s",strtotime($DB_DATE_TIME)));


                //$FOUR_DAYS_CALC_CHECK = date("m/d/Y",strtotime($FOUR_DAYS_CALC));

                IF ($CURRENT_DATE_TODAY == $DB_DATE_COMPARE)
                {
                    $STATUS_DATE = "Today ".date("g:i a",strtotime($DB_DATE_TIME));
                }
                ELSEIF ($CURRENT_DATE_YESTERDAY == $DB_DATE_COMPARE)
                {
                    $STATUS_DATE = "Yesterday ".date("g:i a",strtotime($DB_DATE_TIME));
                }
                ELSEIF ($CURRENT_DATE_FOUR_DAYS_AGO < $DB_DATE_4_DAYS_COMPARE)
                {
                    $STATUS_DATE = date("l g:i a",strtotime($DB_DATE_TIME));
                }
                ELSE
                {
                    $STATUS_DATE = date("m/d/Y g:i a",strtotime($DB_DATE_TIME));
                }
                
                $YOUTUBE_POST_DATE_7 = $STATUS_DATE;
            }
            
            IF ($row['LINK_ORDER'] == "8")
            {
                $YOU_TUBE_TITLE_8 = $row['LINK_TITLE'];
                $YOUTUBE_LINK_8 = $row['LINK'];
                
                //DB Status Date
                $DB_DATE_TIME = $row['POST_DATE']." - ".$_TMZ_DIFF." hour";

                //Current Date
                $CURRENT_DATE = gmdate('m/d/Y G:i:s');

                $VISITOR_DATE_TIME = $CURRENT_DATE." - ".$_TMZ_DIFF." hour";

                //Today Check
                $CURRENT_DATE_TODAY = date("m/d/Y",strtotime($VISITOR_DATE_TIME));
                $DB_DATE_COMPARE = date("m/d/Y",strtotime($DB_DATE_TIME));

                //Yesterday Check
                $CURRENT_DATE_YESTERDAY = date("m/d/Y",strtotime($VISITOR_DATE_TIME." - 24 hour"));

                //Four Days Check
                $CURRENT_DATE_FOUR_DAYS_AGO = strtotime(date("m/d/Y g:i a",strtotime($VISITOR_DATE_TIME." - 110 hour")));
                $DB_DATE_4_DAYS_COMPARE = strtotime(date("m/d/Y G:i:s",strtotime($DB_DATE_TIME)));


                //$FOUR_DAYS_CALC_CHECK = date("m/d/Y",strtotime($FOUR_DAYS_CALC));

                IF ($CURRENT_DATE_TODAY == $DB_DATE_COMPARE)
                {
                    $STATUS_DATE = "Today ".date("g:i a",strtotime($DB_DATE_TIME));
                }
                ELSEIF ($CURRENT_DATE_YESTERDAY == $DB_DATE_COMPARE)
                {
                    $STATUS_DATE = "Yesterday ".date("g:i a",strtotime($DB_DATE_TIME));
                }
                ELSEIF ($CURRENT_DATE_FOUR_DAYS_AGO < $DB_DATE_4_DAYS_COMPARE)
                {
                    $STATUS_DATE = date("l g:i a",strtotime($DB_DATE_TIME));
                }
                ELSE
                {
                    $STATUS_DATE = date("m/d/Y g:i a",strtotime($DB_DATE_TIME));
                }
                
                $YOUTUBE_POST_DATE_8 = $STATUS_DATE;
            }
            
            IF ($row['LINK_ORDER'] == "9")
            {
                $YOU_TUBE_TITLE_9 = $row['LINK_TITLE'];
                $YOUTUBE_LINK_9 = $row['LINK'];
                
                //DB Status Date
                $DB_DATE_TIME = $row['POST_DATE']." - ".$_TMZ_DIFF." hour";

                //Current Date
                $CURRENT_DATE = gmdate('m/d/Y G:i:s');

                $VISITOR_DATE_TIME = $CURRENT_DATE." - ".$_TMZ_DIFF." hour";

                //Today Check
                $CURRENT_DATE_TODAY = date("m/d/Y",strtotime($VISITOR_DATE_TIME));
                $DB_DATE_COMPARE = date("m/d/Y",strtotime($DB_DATE_TIME));

                //Yesterday Check
                $CURRENT_DATE_YESTERDAY = date("m/d/Y",strtotime($VISITOR_DATE_TIME." - 24 hour"));

                //Four Days Check
                $CURRENT_DATE_FOUR_DAYS_AGO = strtotime(date("m/d/Y g:i a",strtotime($VISITOR_DATE_TIME." - 110 hour")));
                $DB_DATE_4_DAYS_COMPARE = strtotime(date("m/d/Y G:i:s",strtotime($DB_DATE_TIME)));


                //$FOUR_DAYS_CALC_CHECK = date("m/d/Y",strtotime($FOUR_DAYS_CALC));

                IF ($CURRENT_DATE_TODAY == $DB_DATE_COMPARE)
                {
                    $STATUS_DATE = "Today ".date("g:i a",strtotime($DB_DATE_TIME));
                }
                ELSEIF ($CURRENT_DATE_YESTERDAY == $DB_DATE_COMPARE)
                {
                    $STATUS_DATE = "Yesterday ".date("g:i a",strtotime($DB_DATE_TIME));
                }
                ELSEIF ($CURRENT_DATE_FOUR_DAYS_AGO < $DB_DATE_4_DAYS_COMPARE)
                {
                    $STATUS_DATE = date("l g:i a",strtotime($DB_DATE_TIME));
                }
                ELSE
                {
                    $STATUS_DATE = date("m/d/Y g:i a",strtotime($DB_DATE_TIME));
                }
                
                $YOUTUBE_POST_DATE_9 = $STATUS_DATE;
            }
            
            IF ($row['LINK_ORDER'] == "10")
            {
                $YOU_TUBE_TITLE_10 = $row['LINK_TITLE'];
                $YOUTUBE_LINK_10 = $row['LINK'];
                
                //DB Status Date
                $DB_DATE_TIME = $row['POST_DATE']." - ".$_TMZ_DIFF." hour";

                //Current Date
                $CURRENT_DATE = gmdate('m/d/Y G:i:s');

                $VISITOR_DATE_TIME = $CURRENT_DATE." - ".$_TMZ_DIFF." hour";

                //Today Check
                $CURRENT_DATE_TODAY = date("m/d/Y",strtotime($VISITOR_DATE_TIME));
                $DB_DATE_COMPARE = date("m/d/Y",strtotime($DB_DATE_TIME));

                //Yesterday Check
                $CURRENT_DATE_YESTERDAY = date("m/d/Y",strtotime($VISITOR_DATE_TIME." - 24 hour"));

                //Four Days Check
                $CURRENT_DATE_FOUR_DAYS_AGO = strtotime(date("m/d/Y g:i a",strtotime($VISITOR_DATE_TIME." - 110 hour")));
                $DB_DATE_4_DAYS_COMPARE = strtotime(date("m/d/Y G:i:s",strtotime($DB_DATE_TIME)));


                //$FOUR_DAYS_CALC_CHECK = date("m/d/Y",strtotime($FOUR_DAYS_CALC));

                IF ($CURRENT_DATE_TODAY == $DB_DATE_COMPARE)
                {
                    $STATUS_DATE = "Today ".date("g:i a",strtotime($DB_DATE_TIME));
                }
                ELSEIF ($CURRENT_DATE_YESTERDAY == $DB_DATE_COMPARE)
                {
                    $STATUS_DATE = "Yesterday ".date("g:i a",strtotime($DB_DATE_TIME));
                }
                ELSEIF ($CURRENT_DATE_FOUR_DAYS_AGO < $DB_DATE_4_DAYS_COMPARE)
                {
                    $STATUS_DATE = date("l g:i a",strtotime($DB_DATE_TIME));
                }
                ELSE
                {
                    $STATUS_DATE = date("m/d/Y g:i a",strtotime($DB_DATE_TIME));
                }
                
                $YOUTUBE_POST_DATE_10 = $STATUS_DATE;
            }
        }
        
        echo "<DIV class = 'HeismanLine'>";
        echo "<DIV class = 'heiyear'>1</DIV>";
        echo "<input type = 'text' class = 'SchoolDropwDown'value = '".str_replace("'","&#39",stripslashes($LINK_TITLE_1))."' name = 'LINK_TITLE_1' maxlength = '40'  >";
        echo "<input type = 'text' class = 'Record1'  value = '".$LINK_1."' name = 'LINK_1' >";
        echo "<DIV class = 'StatusDate'>".$POST_DATE_1."</DIV>";
        echo "</DIV>";
        
        echo "<DIV class = 'HeismanLine'>";
        echo "<DIV class = 'heiyear'>2</DIV>";
        echo "<input type = 'text' class = 'SchoolDropwDown'value = '".str_replace("'","&#39",stripslashes($LINK_TITLE_2))."' name = 'LINK_TITLE_2' maxlength = '40'   >";
        echo "<input type = 'text' class = 'Record1'  value = '".$LINK_2."' name = 'LINK_2'  >";
        echo "<DIV class = 'StatusDate'>".$POST_DATE_2."</DIV>";
        echo "</DIV>";
        
        
        echo "<DIV class = 'HeismanLine'>";
        echo "<DIV class = 'heiyear'>3</DIV>";
        echo "<input type = 'text' class = 'SchoolDropwDown' value = '".str_replace("'","&#39",stripslashes($LINK_TITLE_3))."' name = 'LINK_TITLE_3' maxlength = '40'   >";
        echo "<input type = 'text' class = 'Record1'  value = '".$LINK_3."' name = 'LINK_3'  >";
        echo "<DIV class = 'StatusDate'>".$POST_DATE_3."</DIV>";
        echo "</DIV>";
        
        
        echo "<DIV class = 'HeismanLine'>";
        echo "<DIV class = 'heiyear'>4</DIV>";
        echo "<input type = 'text' class = 'SchoolDropwDown'value = '".str_replace("'","&#39",stripslashes($LINK_TITLE_4))."' name = 'LINK_TITLE_4' maxlength = '40'   >";
        echo "<input type = 'text' class = 'Record1'  value = '".$LINK_4."' name = 'LINK_4'  >";
        echo "<DIV class = 'StatusDate'>".$POST_DATE_4."</DIV>";
        echo "</DIV>";
        
        
        echo "<DIV class = 'HeismanLine'>";
        echo "<DIV class = 'heiyear'>5</DIV>";
        echo "<input type = 'text' class = 'SchoolDropwDown'value = '".str_replace("'","&#39",stripslashes($LINK_TITLE_5))."' name = 'LINK_TITLE_5' maxlength = '40'   >";
        echo "<input type = 'text' class = 'Record1'  value = '".$LINK_5."' name = 'LINK_5'  >";
        echo "<DIV class = 'StatusDate'>".$POST_DATE_5."</DIV>";
        echo "</DIV>";
        
        
        echo "<DIV class = 'HeismanLine'>";
        echo "<DIV class = 'heiyear'>6</DIV>";
        echo "<input type = 'text' class = 'SchoolDropwDown' value = '".str_replace("'","&#39",stripslashes($LINK_TITLE_6))."'  name = 'LINK_TITLE_6' maxlength = '40' >";
        echo "<input type = 'text' class = 'Record1'  value = '".$LINK_6."' name = 'LINK_6'  >";
        echo "<DIV class = 'StatusDate'>".$POST_DATE_6."</DIV>";
        echo "</DIV>";
        
        
        echo "<DIV class = 'HeismanLine'>";
        echo "<DIV class = 'heiyear'>7</DIV>";
        echo "<input type = 'text' class = 'SchoolDropwDown' value = '".str_replace("'","&#39",stripslashes($LINK_TITLE_7))."'  name = 'LINK_TITLE_7' maxlength = '40'   >";
        echo "<input type = 'text' class = 'Record1'  value = '".$LINK_7."' name = 'LINK_7'  >";
        echo "<DIV class = 'StatusDate'>".$POST_DATE_7."</DIV>";
        echo "</DIV>";
        
        
        echo "<DIV class = 'HeismanLine'>";
            echo "<DIV class = 'heiyear'>8</DIV>";
                echo "<input type = 'text' class = 'SchoolDropwDown' value = '".str_replace("'","&#39",stripslashes($LINK_TITLE_8))."'  name = 'LINK_TITLE_8' maxlength = '40'   >";
                echo "<input type = 'text' class = 'Record1'  value = '".$LINK_8."' name = 'LINK_8'  >";
            echo "<DIV class = 'StatusDate'>".$POST_DATE_8."</DIV>";
        echo "</DIV>";
        
        
        echo "<DIV class = 'HeismanLine'>";
        echo "<DIV class = 'heiyear'>9</DIV>";
        echo "<input type = 'text' class = 'SchoolDropwDown' value = '".str_replace("'","&#39",stripslashes($LINK_TITLE_9))."'  name = 'LINK_TITLE_9'  maxlength = '40'  >";
        echo "<input type = 'text' class = 'Record1'  value = '".$LINK_9."' name = 'LINK_9'  >";
        echo "<DIV class = 'StatusDate'>".$POST_DATE_9."</DIV>";
        echo "</DIV>";
        
        
        echo "<DIV class = 'HeismanLine'>";
            echo "<DIV class = 'heiyear'>10</DIV>";
                echo "<input type = 'text' class = 'SchoolDropwDown' value = '".str_replace("'","&#39",stripslashes($LINK_TITLE_10))."'  name = 'LINK_TITLE_10'  maxlength = '40'  >";
                echo "<input type = 'text' class = 'Record1'  value = '".$LINK_10."' name = 'LINK_10'  >";
            echo "<DIV class = 'StatusDate'>".$POST_DATE_10."</DIV>";
        echo "</DIV>";
        
        echo "<BR><BR><BR>";
        
        echo "<H1>YouTube Videos</H1>";
        
        echo "<DIV class = 'HeismanLine'>";
            echo "<DIV class = 'heiyear'>1</DIV>";
                echo "<input type = 'text' class = 'SchoolDropwDown'value = '".str_replace("'","&#39",stripslashes($YOU_TUBE_TITLE_1))."' name = 'YOUTUBE_LINK_TITLE_1' >";
                echo "<input type = 'text' class = 'Record1'  value = '".$YOUTUBE_LINK_1."' name = 'YOUTUBE_LINK_1' >";
            echo "<DIV class = 'StatusDate'>".$YOUTUBE_POST_DATE_1."</DIV>";
        echo "</DIV>";
        
        echo "<DIV class = 'HeismanLine'>";
        echo "<DIV class = 'heiyear'>2</DIV>";
        echo "<input type = 'text' class = 'SchoolDropwDown'value = '".str_replace("'","&#39",stripslashes($YOU_TUBE_TITLE_2))."' name = 'YOUTUBE_LINK_TITLE_2'  >";
        echo "<input type = 'text' class = 'Record1'  value = '".$YOUTUBE_LINK_2."' name = 'YOUTUBE_LINK_2'  >";
        echo "<DIV class = 'StatusDate'>".$YOUTUBE_POST_DATE_2."</DIV>";
        echo "</DIV>";
        
        
        echo "<DIV class = 'HeismanLine'>";
        echo "<DIV class = 'heiyear'>3</DIV>";
        echo "<input type = 'text' class = 'SchoolDropwDown' value = '".str_replace("'","&#39",stripslashes($YOU_TUBE_TITLE_3))."' name = 'YOUTUBE_LINK_TITLE_3'  >";
        echo "<input type = 'text' class = 'Record1'  value = '".$YOUTUBE_LINK_3."' name = 'YOUTUBE_LINK_3'  >";
        echo "<DIV class = 'StatusDate'>".$YOUTUBE_POST_DATE_3."</DIV>";
        echo "</DIV>";
        
        
        echo "<DIV class = 'HeismanLine'>";
        echo "<DIV class = 'heiyear'>4</DIV>";
        echo "<input type = 'text' class = 'SchoolDropwDown'value = '".str_replace("'","&#39",stripslashes($YOU_TUBE_TITLE_4))."' name = 'YOUTUBE_LINK_TITLE_4'  >";
        echo "<input type = 'text' class = 'Record1'  value = '".$YOUTUBE_LINK_4."' name = 'YOUTUBE_LINK_4'  >";
        echo "<DIV class = 'StatusDate'>".$YOUTUBE_POST_DATE_4."</DIV>";
        echo "</DIV>";
        
        
        echo "<DIV class = 'HeismanLine'>";
        echo "<DIV class = 'heiyear'>5</DIV>";
        echo "<input type = 'text' class = 'SchoolDropwDown'value = '".str_replace("'","&#39",stripslashes($YOU_TUBE_TITLE_5))."' name = 'YOUTUBE_LINK_TITLE_5'  >";
        echo "<input type = 'text' class = 'Record1'  value = '".$YOUTUBE_LINK_5."' name = 'YOUTUBE_LINK_5'  >";
        echo "<DIV class = 'StatusDate'>".$YOUTUBE_POST_DATE_5."</DIV>";
        echo "</DIV>";
        
        
        echo "<DIV class = 'HeismanLine'>";
        echo "<DIV class = 'heiyear'>6</DIV>";
        echo "<input type = 'text' class = 'SchoolDropwDown' value = '".str_replace("'","&#39",stripslashes($YOU_TUBE_TITLE_6))."'  name = 'YOUTUBE_LINK_TITLE_6'  >";
        echo "<input type = 'text' class = 'Record1'  value = '".$YOUTUBE_LINK_6."' name = 'YOUTUBE_LINK_6'  >";
        echo "<DIV class = 'StatusDate'>".$YOUTUBE_POST_DATE_6."</DIV>";
        echo "</DIV>";
        
        
        echo "<DIV class = 'HeismanLine'>";
        echo "<DIV class = 'heiyear'>7</DIV>";
        echo "<input type = 'text' class = 'SchoolDropwDown' value = '".str_replace("'","&#39",stripslashes($YOU_TUBE_TITLE_7))."'  name = 'YOUTUBE_LINK_TITLE_7'  >";
        echo "<input type = 'text' class = 'Record1'  value = '".$YOUTUBE_LINK_7."' name = 'YOUTUBE_LINK_7'  >";
        echo "<DIV class = 'StatusDate'>".$YOUTUBE_POST_DATE_7."</DIV>";
        echo "</DIV>";
        
        
        echo "<DIV class = 'HeismanLine'>";
        echo "<DIV class = 'heiyear'>8</DIV>";
        echo "<input type = 'text' class = 'SchoolDropwDown' value = '".str_replace("'","&#39",stripslashes($YOU_TUBE_TITLE_8))."'  name = 'YOUTUBE_LINK_TITLE_8'  >";
        echo "<input type = 'text' class = 'Record1'  value = '".$YOUTUBE_LINK_8."' name = 'YOUTUBE_LINK_8'  >";
        echo "<DIV class = 'StatusDate'>".$YOUTUBE_POST_DATE_8."</DIV>";
        echo "</DIV>";
        
        
        echo "<DIV class = 'HeismanLine'>";
        echo "<DIV class = 'heiyear'>9</DIV>";
        echo "<input type = 'text' class = 'SchoolDropwDown' value = '".str_replace("'","&#39",stripslashes($YOU_TUBE_TITLE_9))."'  name = 'YOUTUBE_LINK_TITLE_9'  >";
        echo "<input type = 'text' class = 'Record1'  value = '".$YOUTUBE_LINK_9."' name = 'YOUTUBE_LINK_9'  >";
        echo "<DIV class = 'StatusDate'>".$YOUTUBE_POST_DATE_9."</DIV>";
        echo "</DIV>";
        
        
        echo "<DIV class = 'HeismanLine'>";
        echo "<DIV class = 'heiyear'>10</DIV>";
        echo "<input type = 'text' class = 'SchoolDropwDown' value = '".str_replace("'","&#39",stripslashes($YOU_TUBE_TITLE_10))."'  name = 'YOUTUBE_LINK_TITLE_10'  >";
        echo "<input type = 'text' class = 'Record1'  value = '".$YOUTUBE_LINK_10."' name = 'YOUTUBE_LINK_10'  >";
        echo "<DIV class = 'StatusDate'>".$YOUTUBE_POST_DATE_10."</DIV>";
        echo "</DIV>";
        
        
       echo "<BR><BR><input class = 'SubmitButton' type='submit' name='submit' value='Update Front Links'>";
            
            echo "</FORM>";
        
        
        ?>
    
  </div>
</div>
<!--section for features ends--> 


<!--section for requirements and gallery starts-->

<!--section for requirements and gallery ends--> 

<!--footer starts-->

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