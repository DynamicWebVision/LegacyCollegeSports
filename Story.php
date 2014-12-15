<?
ob_start(); 
session_start();
?>
<!DOCTYPE html>
<?
    require_once('Functions.php');
    
    Get_DB_Connection();
    
    
    IF (ISSET($_GET['id']))
    {   
       
        
        $STORY_KEY = GetStoryKey($_GET['id']);
    }
    ELSEIF (ISSET($_GET['STORY_KEY']))
    {
        $STORY_KEY = $_GET['STORY_KEY'];
    }
    
    
    $QUERY_STORY_KEY = $db->prepare("select STORY_TITLE , STORY_TYPE_CODE , AUTHOR_KEY , PUBLISH_DATE, admins.NAME , story_images.FILE_TYPE,  story_images.IMAGE_WIDTH , story_images.IMAGE_HEIGHT
                        from story join admins on story.AUTHOR_KEY = admins.ADMIN_KEY 
                        join story_images on story.STORY_KEY = story_images.STORY_KEY 
                        where story.STORY_KEY = :story_key;");

    $QUERY_STORY_KEY->bindValue(':story_key', $STORY_KEY);
    
    $QUERY_STORY_KEY->execute(); 
    
    while ($row = $QUERY_STORY_KEY->fetch(PDO::FETCH_ASSOC))
    {
        $STORY_TITLE = $row['STORY_TITLE'];
        
        $STORY_TYPE = $row['STORY_TYPE_CODE'];
        
        $AUTHOR_KEY = $row['AUTHOR_KEY'];
        
        $PUBLISH_DATE = $row['PUBLISH_DATE'];
        
        $NAME = $row['NAME'];
        
        $FILE_TYPE = $row['FILE_TYPE'];
        
        IF ($row['IMAGE_HEIGHT'] > $row['IMAGE_WIDTH'])
        {
        $IMAGE_WIDTH = round(450*($row['IMAGE_WIDTH']/$row['IMAGE_HEIGHT']));

        $IMAGE_HEIGHT = 450;
        }
        ELSEIF ($row['IMAGE_WIDTH'] > $row['IMAGE_HEIGHT'])
        {   

            $IMAGE_HEIGHT = round(450*($row['IMAGE_HEIGHT']/$row['IMAGE_WIDTH']));
            $IMAGE_WIDTH = 450; 
        }
        ELSE
        {
            $IMAGE_HEIGHT = 450;
            $IMAGE_WIDTH = 450; 
        }
        
    }
?>    
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

    <link rel="stylesheet" href="http://csportsdirect.com/MainStyleSheet.css" />
    <link rel="stylesheet" href="http://csportsdirect.com/CSS_Page_Specific/MainTemplateStyle.css" />
    <link rel="stylesheet" href="http://csportsdirect.com/CSS_Page_Specific/ArticlePage.css" />
    
    <link href='http://fonts.googleapis.com/css?family=Coda+Caption:800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="data/css/mobile.min.css" media="only screen and (max-width: 767px)" />

    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="http://csportsdirect.com/JQuery.js"></script>
    <script type="text/javascript" src="http://csportsdirect.com/Javascript_Specific_Page/MainTemplate.js"></script>

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
    
    <script type="text/javascript">var switchTo5x=true;</script>
    <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "e8fdead4-d26b-4550-bf4b-ca2c21dee471", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

    <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <script type="text/javascript" src="data/js/selectivizr.min.js"></script>
    <![endif]-->
    <title>C Sports Direct</title>
</head>

<body id ="MainBody">
    
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=607030132676373";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    
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
                            <li><a href='http://csportsdirect.com/HeismanWinners.php'><span>Heisman Winners</span></a></li>
                            <li><a href='http://csportsdirect.com/College_Football_TV_Schedule.php'><span>TV Schedule</span></a></li>
                            
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
        <div id ="borderleft"></div>
        <div id ="borderright"></div>
        
        <div id ="borderlefttopfront"></div>
        <div id ="borderrighttopfront"></div>
        
        <DIV id ="MainContentFront">
            <DIV id ="ArticleContentWrap">
                <DIV class ="SeventyPush"></DIV>
                
                <DIV id ="ShareContain">
                    <span class='st_facebook_large' displayText='Facebook'></span>
                    <span class='st_twitter_large' displayText='Tweet'></span>
                    <span class='st_googleplus_large' displayText='Google +'></span>
                    <span class='st_reddit_large' displayText='Reddit'></span>
                    <span class='st_stumbleupon_large' displayText='StumbleUpon'></span>
                    <span class='st_email_large' displayText='Email'></span>
                </DIV>
                
                
                <H1 class ="ArticleTitle"><? echo $STORY_TITLE; ?></H1>

                <DIV class ="ArticleAuthorLine"><? echo "By ".$NAME." ".ArticleDate($PUBLISH_DATE); ?></DIV>
                
                <? echo "<img id ='TopImage' src ='http://csportsdirect.com/STORY_IMAGES/".$STORY_KEY.".".$FILE_TYPE."' style = ' width: ".$IMAGE_WIDTH."px; height: ".$IMAGE_HEIGHT."px; ' >"; ?>
                
                <?
                    
                IF ($STORY_TYPE == "1")
                {
                    PopulateStoryTraditional($STORY_KEY);
                }
                
                ?>
                
                <DIV id ="FacebookCommentsContain">
                <? echo "<div class='fb-comments' data-href='http://csportsdirect.com/story/Week-9-Recap' data-numposts='5'></div>"; ?>
                </DIV>
                    
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