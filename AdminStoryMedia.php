<?PHP
ob_start(); 
session_start();
?>
<!DOCTYPE html>
<?PHP
    require_once('Functions.php');
    
    Get_DB_Connection();
    
    $_SESSION['NEW_STORY_KEY'] = -4;

?>    
<!--[if lt IE 9]>             <html class="no-js ie lt-ie9" lang="en-US"><![endif]-->
<!--[if IE 9]>                <html class="no-js ie ie9" lang="en-US">   <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class="no-js no-ie" lang="en-US">    <!--<![endif]-->

	<!-- Head section -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
    <link rel="stylesheet" href="http://csportsdirect.com/MainStyleSheet.css" />
    <link rel="stylesheet" href="http://csportsdirect.com/CSS_Page_Specific/MainTemplateStyle.css" />
    
    <link rel="stylesheet" href="CSS_Page_Specific/AdminStory.css" />

    <link href='http://fonts.googleapis.com/css?family=Coda+Caption:800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="data/css/mobile.min.css" media="only screen and (max-width: 767px)" />

    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>

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
    <title>Story Media</title>
</head>

<body id ="MainBody">
    
    <div id ="FixedErrorContainer">
        <div id ="AutoErrorContainer">
            <div id ="AbsoluteError">
                <div class ="closeError"></div>
                <div id ="errorText"></div>
            </div>
        </div>
    </div>
    
    <div id ="invisibleCover"></div>
    
    <?PHP AjaxGenerator(); ?>
    <div id ="ps"></div>
    <div class ="page-wrap">
    <DIV id ="WhiteOverBlanket" class ="hidden"></DIV>
    
    

    
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
                    <li class='has-sub'><a href='#'><span>Schools</span></a>
                        
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
            <H1 id ="PageHead">Story Media</H1>
            <DIV class ="FifteenPush"></DIV>
                
                <DIV id ="MediaTypeQuestion">
                    <div class="RedFontLabelCenter">What type of media will your story have?</div>
                    
                    <div class ="CenterButtonContain">
                        <div id ="ImageButton" class ="buttonoption">Image</div>
                    </div>
                    
                    <div class ="CenterButtonContain">
                        <div id ="VideoButtons" class ="buttonoption">Video</div>
                    </div>
                    
                </DIV>
            
                <DIV id ="ImageUploadContain" >
                    <div class="RedFontLabelLeft">Upload the Image Below</div>
                    
                    <FORM action='AdminStoryImageProcess.php?' method='post' enctype='multipart/form-data'>
   
                    <DIV id = 'SelectFile'>
                        Choose File: <input type='file' name='IMAGE' value = 'Select Picture' enctype='multipart/form-data'/>
                    </DIV>
                
                    <div class="RedFontLabelLeft">Image Title (ALT Tag): <input id ="ImageAlt" type ="text" name ="IMAGE_ALT"></div>
                    <div class="RedFontLabelLeft">Image Credit: <input id ="ImageAlt" type ="text" name ="IMAGE_CREDIT"></div>
                    <input type ="hidden" name ="STORY_KEY" <?PHP echo "value = '".$_SESSION['NEW_STORY_KEY']." '"; ?> maxlength ="95">    
                        
                    <input id ="SubmitImage" class="SubmitButton" type='submit' name='IMAGE_LOAD' value='Replace Image' />
             
                </FORM>
                    
                </DIV>
                
                
                <DIV id ="YouTubeUploadContain" style ="display: none;">
                    <div class="RedFontLabelLeft">Video Information</div>
                    
   
                
                    <div class="RedFontLabelLeft">YouTube Key: <input id ="youTubeKey" type ="text" name ="IMAGE_ALT"></div>
                    
                    <input id ="videoStoryKey" type ="hidden" name ="STORY_KEY" <?PHP echo "value = '".$_SESSION['NEW_STORY_KEY']." '"; ?> maxlength ="95">
                        
                    <input id ="SubmitVideo" class="SubmitButton" type='submit' name='IMAGE_LOAD' value='Submit Video' />
                    
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