<?
ob_start(); 
session_start();
?>
<!DOCTYPE html>
<?
    require_once('Functions.php');
    
    Get_DB_Connection();
    
    IF (ISSET($_POST['SUBMIT']))
    {


        $to = "dynamicwebvision@gmail.com";


        $SUBJECT = addslashes("DF Contact: ".$_POST['contact_reason']." ".$_POST['ContactSubject']);

        $EMAIL = addslashes($_POST['ConatactEmail']);


        $message = addslashes($_POST['ContactMessage']);

        $headers = "From:" . $EMAIL;
        mail($to,$SUBJECT,$message,$headers);

        $MESSAGE_SEND = "1";
        header('Location: index.php?MESSAGE_SENT=1');
    }
    ELSE
    {
        $MESSAGE_SEND = "0";
    }

    
?>    
<!--[if lt IE 9]>             <html class="no-js ie lt-ie9" lang="en-US"><![endif]-->
<!--[if IE 9]>                <html class="no-js ie ie9" lang="en-US">   <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class="no-js no-ie" lang="en-US">    <!--<![endif]-->

	<!-- Head section -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
    <link rel="stylesheet" href="MainStyleSheet.css" />
    <link rel="stylesheet" href="CSS_Page_Specific/MainTemplateStyle.css" />
    <link rel="stylesheet" href="CSS_Page_Specific/ContactUs.css" />

    <link href='http://fonts.googleapis.com/css?family=Coda+Caption:800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="data/css/mobile.min.css" media="only screen and (max-width: 767px)" />

    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="JQuery.js"></script>
    <script type="text/javascript" src="Javascript_Specific_Page/MainTemplate.js"></script>

    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-43633819-1', 'usportsdirect.com');
  ga('send', 'pageview');

</script>

    <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <script type="text/javascript" src="data/js/selectivizr.min.js"></script>
    <![endif]-->
    <title>Contact Us</title>
</head>

<body id ="MainBody">
    <div class ="page-wrap">
  
    
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
                    <DIV id ="PageNameHead">Contact Us</DIV>
                </DIV>
                
                <div id='cssmenu'>
                    <ul>
                    <li ><a href='index.php'><span>Home</span></a></li>
                    <li class='has-sub'><a href='#'><span>Schools</span></a>
                        <ul>
                            <li class ="SchoolsMenuShow"><DIV id ="SchoolMenuList">
                                    <?
                                    
                                    ListMenuSchools();
                                    
                                    
                                    ?>
                                </DIV></li>
                        </ul>
                    </li>
                    <li class='has-sub'><a href='#'><span>Features</span></a>
                        <ul>
                            <li><a href='#'><span>Heisman Winners</span></a></li>
                            
                        </ul>
                    </li>
                    </ul>
                </div>
                
            </DIV>    
        </DIV>
    </DIV>
    <div id ="MainTemplateMenuContain">
        <div id ="ProfileMenu">
            <div id ="ProfileNavMenuBar"></div>

            <DIV id ="ProfileMenuLinkContain">
           
            </DIV>    
            <div id ="ProfileNavMenuBarBottom"></div>
            
                
        </div>
    </div>
    
    <div id ="TopPush"></div>
    <DIV id = "MainContentContain"  class ="MainContentContainClass" >
        <div id ="borderleft"></div>
        <div id ="borderright"></div>
        
        <DIV id ="MainContent">
            <DIV class ="ContentPush"></DIV>
            <H1 id ="PageHead">Contact Us</H1>
            
            <form action="ContactUs.php" method="post" enctype="multipart/form-data">
                <div id="ContactUsFormContain">
                    <div class="ContactSubHeader">Reason:</div>

                    <div id="ContactRadioButtons">
                        <div id="ContactSuggestionContain">
                            <input class="ContactRadio" type="radio" name="contact_reason" value="Suggestion">
                            <div class="ContactLabel">Suggestion</div>
                        </div>    

                        <div id="ContactFeedbackContain">
                            <input class="ContactRadio" type="radio" name="contact_reason" value="Feedback">
                            <div class="ContactLabel">Feedback</div>
                        </div> 

                        <div id="ContactAdContain">
                            <input class="ContactRadio" type="radio" name="contact_reason" value="Obnoxious Ad">
                            <div class="ContactLabel">Obnoxious Ad</div>
                        </div> 

                        <div id="ContactBugContain">
                            <input class="ContactRadio" type="radio" name="contact_reason" value="Bug">
                            <div class="ContactLabel">Bug</div>
                        </div> 

                        <div id="ContactRosterContain">
                            <input class="ContactRadio" type="radio" name="contact_reason" value="Roster Issue">
                            <div class="ContactLabel">Inaccurate Information/Data</div>
                        </div> 

                        <div id="ContactOtherContain">
                            <input class="ContactRadio" type="radio" name="contact_reason" value="Other">
                            <div class="ContactLabel">Other</div>
                        </div> 

                    </div>    
                    <div class="ContactSubHeader">Email Address:</div>
                    <input id="ContactEmail" type="text" name="ConatactEmail" value="">
                    
                    <div class="ContactSubHeader">Subject:</div>
                    <input id="ContactSubject" type="text" name="ContactSubject" value="">
                    
                    <div class="ContactSubHeader">Message:</div>
                    <textarea id="ContactMessage" type="text" name="ContactMessage"></textarea>
                    
                    <input id="ContactSubmit" name="SUBMIT" class="SubmitButton" type="submit" value="Submit">
                    
                </div>
            </form>
            
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
                        <? Footer(); ?>
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

                var border_left = "<style> DIV#borderleft { position: absolute; left: -8px; top: -92px; width: 8px; height: "+main_height+"px; background: #C4C4C4; background: -webkit-linear-gradient(left, #0F0F0F, #949494); background: -moz-linear-gradient(left, #0F0F0F, #949494); background: -o-linear-gradient(left, #0F0F0F, #949494); background: -ms-linear-gradient(left, #0F0F0F, #949494); box-shadow: -5px 0px 8px #888888; } </style>";
                var border_right = "<style> DIV#borderright { position: absolute; left: 1024px; top: -92px; width: 8px; height: "+main_height+"px; background: #C4C4C4; background: -webkit-linear-gradient(right, #0F0F0F, #949494); background: -moz-linear-gradient(right, #0F0F0F, #949494); background: -o-linear-gradient(right, #0F0F0F, #949494); background: -ms-linear-gradient(right, #0F0F0F, #949494); box-shadow: 5px 0px 8px #888888; } </style>";
                
                var main_content = "<style>DIV#MainContent { position: relative;   padding-right: 5%; padding-left: 5%; width: 90%;  min-height: "+main_content_height+"px; background: #FFFFFF; /* Background for IE9 and older browsers */ background: -webkit-linear-gradient(bottom, #FAFAFA,#FFFFFF ); /* Background for Chrome & Safari */ background: -moz-linear-gradient(bottom, #FAFAFA,#FFFFFF); /* Background for Firefox */ background: -o-linear-gradient(bottom, #FAFAFA,#FFFFFF); /* Background for Opera */ background: -ms-linear-gradient(bottom, #FAFAFA,#FFFFFF); /* Background for Internet Explorer 10 */  } </style>";
 
                
                $(border_left)
                .appendTo("head");

                $(border_right)
                    .appendTo("head");     
                //$('#body-wrap').preloadThis();
                $(main_content)
                    .appendTo("head"); 
                    
                $(window).resize(function() {
                    
                    var main_height_resize = $(".page-wrap").height()-36;
                    var main_content_height_resize = $(".page-wrap").height()-128;

                    var border_left_resize = "<style> DIV#borderleft { position: absolute; left: -8px; top: -92px; width: 8px; height: "+main_height_resize+"px; background: #C4C4C4; background: -webkit-linear-gradient(left, #0F0F0F, #949494); background: -moz-linear-gradient(left, #0F0F0F, #949494); background: -o-linear-gradient(left, #0F0F0F, #949494); background: -ms-linear-gradient(left, #0F0F0F, #949494); box-shadow: -5px 0px 8px #888888; } </style>";
                    var border_right_resize = "<style> DIV#borderright { position: absolute; left: 1024px; top: -92px; width: 8px; height: "+main_height_resize+"px; background: #C4C4C4; background: -webkit-linear-gradient(right, #0F0F0F, #949494); background: -moz-linear-gradient(right, #0F0F0F, #949494); background: -o-linear-gradient(right, #0F0F0F, #949494); background: -ms-linear-gradient(right, #0F0F0F, #949494); box-shadow: 5px 0px 8px #888888; } </style>";

                    var main_content_resize = "<style>DIV#MainContent { position: relative; padding-right: 5%; padding-left: 5%; width: 90%; min-height: "+main_content_height_resize+"px; background: #FFFFFF; /* Background for IE9 and older browsers */ background: -webkit-linear-gradient(bottom, #FAFAFA,#FFFFFF ); /* Background for Chrome & Safari */ background: -moz-linear-gradient(bottom, #FAFAFA,#FFFFFF); /* Background for Firefox */ background: -o-linear-gradient(bottom, #FAFAFA,#FFFFFF); /* Background for Opera */ background: -ms-linear-gradient(bottom, #FAFAFA,#FFFFFF); /* Background for Internet Explorer 10 */  } </style>";


                    $(border_left_resize)
                    .appendTo("head");

                    $(border_right_resize)
                        .appendTo("head");     
                    //$('#body-wrap').preloadThis();
                    $(main_content_resize)
                        .appendTo("head"); 
                    
                });    
                    
                    
                });


                



            </script>
</html>