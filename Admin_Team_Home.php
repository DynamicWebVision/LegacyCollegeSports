<?
ob_start(); 
session_start();
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
        <li><a href="Front_Links.php" >Front Links</a></li>
        <li><a href="NationalChampionships.php" >National Champions</a></li>
        <li><a href="HeismanManagement.php" >Heisman Winners</a></li>
        <li><a href="index.php" >Log Out</a></li>
        
      </ul>
      <!--menu ends-->
      <div class="clear"></div>
    </div>
  </div>
</div>
<!--header ends--> 

<!--top_gradient starts-->
<div class="top_gradient">
  <div class="container clearfix">
    <div class="grid_12"> 
      
      <!--page header starts-->
      <div class="page_header clearfix">
        <h1>School List</h1>
      </div>
      <!--page header ends--> 
      
     
      <?
      
        IF (ISSET($_SESSION['CS_LOGIN_PASS']))
        {
            IF ($_SESSION['CS_LOGIN_PASS'] != "1")
            {
                header("Location: index.php");
            }
            
        }
        ELSE
        {
            header("Location: index.php");
        }
      
        require_once('CS_Functions.php');

        Get_DB_Connection();

        $QUERY_CONFERENCE = $db->prepare(" select * from decode_conference order by CONFERENCE_NAME ");

        $QUERY_CONFERENCE->execute();
        
        
        
        while ($row = $QUERY_CONFERENCE->fetch(PDO::FETCH_ASSOC))
        {
            echo "<TABLE>";
            echo "<TR><TD id = 'BOLD'><SPAN class = 'ConferenceHead'>".$row['CONFERENCE_NAME']."</SPAN></TD></TR>";

            $CONFERENCE_CODE = $row['CONFERENCE_CODE'];

            $QUERY_TEAM = $db->prepare(" select schools.S_NAME as SCHOOL, schools.S_KEY from schools
            where schools.CONFERENCE = :conference_code 
            order by schools.S_NAME; ");
            
            
            
            $QUERY_TEAM->bindValue(':conference_code', $CONFERENCE_CODE);

            $QUERY_TEAM->execute();
        
            while ($row_school = $QUERY_TEAM->fetch(PDO::FETCH_ASSOC))
            {

                echo "<TR><TD><a class = 'SchoolLink' href = 'Admin_School_Links.php?S_KEY=".$row_school['S_KEY']."'>".$row_school['SCHOOL']."</a></TD></TR>";

            }
            echo "</TABLE><br><br>";


        }


        ?>
   
    </div>
  </div>
  
    
   
    
    
    
  <!--container for content and sidebar starts-->
  <div class="container clearfix"> 
    
    
    <!--content ends--> 
    
    <!--sidebar starts-->
    
      
      
      
      <!--map-->
      
    
      <!--hours-->
<!--      <h4>Working hours</h4>
      <p>Monday - Friday<br/>
        9am - 5pm IST<br/>
        Sunday Closed</p>-->
   
    <!--sidebar ends-->
  
    
    
    <div class="clear"></div>
    <DIV id ="Buffer"></DIV>
  </div>
  <!--container for content and sidebar ends-->
  
  <div class="clear"></div>
</div>
<!--top_gradient ends--> 

<!--spacer here-->
<div class="spacer_30px"></div>

<DIV id = "BottomElements">
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
      <p>Copyright © 2011 . All the respective rights reserved</p>
      <ul class="copyright">
        <li><a href="#">Terms</a></li>
        <li><a href="#">Privacy policy</a></li>
      </ul>
    </div>
    
    <!--social links-->
    <div class="grid_6">
      <ul class="social">
<!--        <li><a href="#"><img src="images/icons/social/twitter.png" width="16" height="16" alt="icon"></a></li>
        <li><a href="#"><img src="images/icons/social/facebook.png" width="16" height="16" alt="icon"></a></li>
        <li><a href="#"><img src="images/icons/social/google-plus.png" width="16" height="16" alt="icon"></a></li>
        <li><a href="#"><img src="images/icons/social/flickr.png" width="16" height="16" alt="icon"></a></li>
        <li><a href="#"><img src="images/icons/social/delicious.png" width="16" height="16" alt="icon"></a></li>-->
      </ul>
    </div>
    <div class="clear"></div>
  </div>
</div>
<!--copyright ends--> 
<DIV>
<!--jqueries required--> 
<script type="text/javascript"> Cufon.now(); </script> 
<script src="js/jquery-ui-1.8.17.custom.min.js" type="text/javascript"></script> 
<script src="js/jquery.cycle.all.js" type="text/javascript"></script> 
<script src="js/jquery.easing.1.3.js" type="text/javascript"></script> 
<script src="js/jquery.supersubs.js" type="text/javascript"></script> 
<script src="js/jquery.superfish.js" type="text/javascript"></script> 
<script src="js/twitter.js" type="text/javascript"></script> 
<script src="js/cufon-yui.js" type="text/javascript"></script> 
<script src="js/Arimo_400.font.js" type="text/javascript"></script> 
<script src="js/custom.js" type="text/javascript"></script>
</body>
</html>