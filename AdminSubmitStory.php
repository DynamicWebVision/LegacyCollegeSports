<?
ob_start(); 
session_start();
?>
<!DOCTYPE html>
<?
    require_once('Functions.php');
    
    Get_DB_Connection();

    IF (!ISSET($_SESSION['ADMIN_KEY']))
    {
        header('Location: AdminLogin.php');
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
    
    <link rel="stylesheet" href="CSS_Page_Specific/AdminStory.css" />

    <link href='http://fonts.googleapis.com/css?family=Coda+Caption:800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="data/css/mobile.min.css" media="only screen and (max-width: 767px)" />

    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="JQuery.js"></script>
    <script type="text/javascript" src="Javascript_Specific_Page/AdminStorySubmit.js"></script>

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
    <title>Submit Story</title>
</head>

<body id ="MainBody">
    
    <? AjaxGenerator(); ?>
    <div id ="ps"></div>
    <div class ="page-wrap">
    <DIV id ="DarkOverBlanket" ></DIV>
    
    <DIV id ="FixedContain">
        <div class ="ajaxAuto">
            <div class ="imageAbsolute">
                <img class = "whiteAjaxLoader" src ="IMG/white_ajax.gif">
                <div class ="ProcessingText">Processing...</div>
            </div>
        </div>
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
                    <li class ="active"><a href='index.php'><span>Home</span></a></li>
                    <li class='has-sub'><a href='WriterProfile.php'><span>Writer Profile</span></a>
                        
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
    <DIV id ="MainContentContain" class ="MainContentContainClass">
        
        <div id ="borderlefttop"></div>
        <div id ="borderrighttop"></div>
        
        <div id ="borderleft"></div>
        <div id ="borderright"></div>
        
        <DIV id ="MainContent">
            <DIV class ="ContentPush"></DIV>
            <H1 id ="PageHead">Submit Story</H1>
            <DIV class ="FifteenPush"></DIV>
                
                <DIV id ="StoryTypeQuestion">
                    <div class="RedFontLabelCenter">What type of story will you be submitting?</div>
                    
                    <div class ="CenterButtonContain">
                        <div id ="TraditionalStory" class ="buttonoption">Traditional Story</div>
                    </div>
                    
                </DIV>
                
                <DIV id = "TraditionalStoryFull" class ="hidden">
                    
                    <DIV class ="HeaderLabel">Story Title</DIV>
                    
                    <input id ="StoryTitle" class ="HeaderInput" type ="text" name ="STORY_HEADER" value ="">
                    
                    <DIV class ="HeaderLabel">Meta Data Key Words</DIV>
                    
                    <input id ="MetaDataKeyWords" class ="HeaderInput" type ="text" name ="META_DATA_KEYWORDS" value ="">
                    
                    <DIV class ="HeaderLabel">Meta Data Description</DIV>
                    
                    <textarea id = 'MetaDataDescription' class = 'SmallParagraphContent' name = 'META_DATA_DESCRIPTION'></textarea>
                    
                    <div id ="TraditionalStoryInitialQuestion">
                        <div class="RedFontLabelCenter">Will your story begin with paragraph text or a sub header?</div>

                        <div class ="CenterButtonContain">
                            <div id ="Paragraph" class ="secondarybuttonoption">Paragraph Text</div>
                        </div>

                        <div class ="CenterButtonContain">
                            <div id ="SubHeader" class ="secondarybuttonoption">Sub Header</div>
                        </div>
                    </div>
                    
                    <div id ="TraditionalStoryInitialStory"></div>
                    
                    <div class ="CenterButtonContain">
                            <div id ="NewSection" class ="AddNewSectionButton">New Section</div>
                    </div>
                    
                    <DIV class ="FifteenPush"></DIV>
                    <div class ="CenterButtonContain">
                        <div id ="SubHeader" class ="StoryCompleteButton">Complete</div>
                    </div>
                    
                </DIV>
            
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