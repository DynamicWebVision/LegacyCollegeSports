<?PHP
ob_start(); 
session_start();
?>
<!DOCTYPE html>
<?PHP
    require_once('Functions.php');
    
    Get_DB_Connection();
    
    $QUERY_VIDEO = $db->prepare("select LINK_TITLE , LINK , LINK_ORDER from front_youtube_links order by LINK_ORDER;");
          
    $QUERY_VIDEO->execute(); 

    while ($row = $QUERY_VIDEO->fetch(PDO::FETCH_ASSOC))
    {
        IF ($row['LINK_ORDER'] == "1")
        {
            $VIDEO_LINK_1 = $row['LINK'];
            $VIDEO_LINK_TITLE_1 = $row['LINK_TITLE'];
        }
        
        IF ($row['LINK_ORDER'] == "2")
        {
            $VIDEO_LINK_2 = $row['LINK'];
            $VIDEO_LINK_TITLE_2 = $row['LINK_TITLE'];
        }
        
        IF ($row['LINK_ORDER'] == "3")
        {
            $VIDEO_LINK_3 = $row['LINK'];
            $VIDEO_LINK_TITLE_3 = $row['LINK_TITLE'];
        }
        
        IF ($row['LINK_ORDER'] == "4")
        {
            $VIDEO_LINK_4 = $row['LINK'];
            $VIDEO_LINK_TITLE_4 = $row['LINK_TITLE'];
        }
        
        IF ($row['LINK_ORDER'] == "5")
        {
            $VIDEO_LINK_5 = $row['LINK'];
            $VIDEO_LINK_TITLE_5 = $row['LINK_TITLE'];
        }
        
        IF ($row['LINK_ORDER'] == "6")
        {
            $VIDEO_LINK_6 = $row['LINK'];
            $VIDEO_LINK_TITLE_6 = $row['LINK_TITLE'];
        }
        
        IF ($row['LINK_ORDER'] == "7")
        {
            $VIDEO_LINK_7 = $row['LINK'];
            $VIDEO_LINK_TITLE_7 = $row['LINK_TITLE'];
        }
        
        IF ($row['LINK_ORDER'] == "8")
        {
            $VIDEO_LINK_8 = $row['LINK'];
            $VIDEO_LINK_TITLE_8 = $row['LINK_TITLE'];
        }
        
        IF ($row['LINK_ORDER'] == "9")
        {
            $VIDEO_LINK_9 = $row['LINK'];
            $VIDEO_LINK_TITLE_9 = $row['LINK_TITLE'];
        }
        
        IF ($row['LINK_ORDER'] == "10")
        {
            $VIDEO_LINK_10 = $row['LINK'];
            $VIDEO_LINK_TITLE_10 = $row['LINK_TITLE'];
        }
    }
    
    
$QUERY_VIDEO = $db->prepare("select LINK_TITLE , LINK , LINK_ORDER from front_throwback_videos order by LINK_ORDER;");
          
    $QUERY_VIDEO->execute(); 

    while ($row = $QUERY_VIDEO->fetch(PDO::FETCH_ASSOC))
    {
        IF ($row['LINK_ORDER'] == "1")
        {
            $THROWBACK_VIDEO_LINK_1 = $row['LINK'];
            $THROWBACK_VIDEO_LINK_TITLE_1 = $row['LINK_TITLE'];
        }
        
        IF ($row['LINK_ORDER'] == "2")
        {
            $THROWBACK_VIDEO_LINK_2 = $row['LINK'];
            $THROWBACK_VIDEO_LINK_TITLE_2 = $row['LINK_TITLE'];
        }
        
        IF ($row['LINK_ORDER'] == "3")
        {
            $THROWBACK_VIDEO_LINK_3 = $row['LINK'];
            $THROWBACK_VIDEO_LINK_TITLE_3 = $row['LINK_TITLE'];
        }
        
        IF ($row['LINK_ORDER'] == "4")
        {
            $THROWBACK_VIDEO_LINK_4 = $row['LINK'];
            $THROWBACK_VIDEO_LINK_TITLE_4 = $row['LINK_TITLE'];
        }
        
        IF ($row['LINK_ORDER'] == "5")
        {
            $THROWBACK_VIDEO_LINK_5 = $row['LINK'];
            $THROWBACK_VIDEO_LINK_TITLE_5 = $row['LINK_TITLE'];
        }
        
        IF ($row['LINK_ORDER'] == "6")
        {
            $THROWBACK_VIDEO_LINK_6 = $row['LINK'];
            $THROWBACK_VIDEO_LINK_TITLE_6 = $row['LINK_TITLE'];
        }
        
        IF ($row['LINK_ORDER'] == "7")
        {
            $THROWBACK_VIDEO_LINK_7 = $row['LINK'];
            $THROWBACK_VIDEO_LINK_TITLE_7 = $row['LINK_TITLE'];
        }
        
        IF ($row['LINK_ORDER'] == "8")
        {
            $THROWBACK_VIDEO_LINK_8 = $row['LINK'];
            $THROWBACK_VIDEO_LINK_TITLE_8 = $row['LINK_TITLE'];
        }
        
        IF ($row['LINK_ORDER'] == "9")
        {
            $THROWBACK_VIDEO_LINK_9 = $row['LINK'];
            $THROWBACK_VIDEO_LINK_TITLE_9 = $row['LINK_TITLE'];
        }
        
        IF ($row['LINK_ORDER'] == "10")
        {
            $THROWBACK_VIDEO_LINK_10 = $row['LINK'];
            $THROWBACK_VIDEO_LINK_TITLE_10 = $row['LINK_TITLE'];
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

    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <script type="text/javascript" src="data/js/selectivizr.min.js"></script>
    <![endif]-->
    <title>C Sports Direct</title>
</head>

<body id ="MainBody" style ="display: none;">
    
    <DIV id ="FixedContain" class ="hidden">
        <DIV id ="VideoContainCenter">
            <DIV id ="Video1">
                <DIV class ="CloseYouTubeVideo1"></DIV>
                <DIV id ="VideoCode"></DIV>
            </DIV>


        </DIV>
    </DIV>
    
    <div class ="page-wrap">
    <DIV id ="WhiteOverBlanket"></DIV>
    
    
    
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
                    <li class ="active"><a href='index.php'><span>Home</span></a></li>
                    <li class='has-sub'><a href='#'><span>Schools</span></a>
                       
                                    <?PHP
                                    
                                    SchoolNavList();
                                    
                                    
                                    ?>
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
    <div id ="FrontMenuContain">
        <div id ="FrontMenu">
            <div id ="ProfileNavMenuBar"></div>

            <DIV id ="ProfileMenuLinkContain">
                
                <DIV id ="MainInfoButton" class ="TopMenuButtonActive">Main</DIV>
                <DIV id ="SchoolProfilesButton" class ="TopMenuButtonNotActive">Schools</DIV>
                <DIV id ="VideosButton" class ="TopMenuButtonNotActive">Videos</DIV>
                <DIV id ="TwitterButton" class ="TopMenuButtonNotActive">Twitter</DIV>
                <DIV id ="OlderButton" class ="TopMenuButtonNotActive">Throwback</DIV>
                
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
            
            <?PHP TopSection(); ?>
            
            
            
            <DIV id ="FrontSchoolsSection">
                <H1 class ="SectionHead">Schools</H1>
             
                <?PHP
                    FrontSchoolList();
                ?>
             
            </DIV>
            
            <DIV id ="YouTubeSection">
                <H1 class ="SectionHead">Videos</H1>
                
                <?PHP
                echo "<img id='".$VIDEO_LINK_1."' class='YouTubeImage' src='IMG/FRONT_VIDEO_LINKS/1.jpg' style='position: absolute;
                        top: 110px; left: 58px;'>";
                
                echo "<DIV id = 'VideoTitlePositionOne' class = 'VideoTitle' >".$VIDEO_LINK_TITLE_1."</DIV>";
                
                
                echo "<img id='".$VIDEO_LINK_2."' class='YouTubeImage' src='IMG/FRONT_VIDEO_LINKS/2.jpg' style='position: absolute;
                        top: 110px; left: 242px;'>";
                
                echo "<DIV id = 'VideoTitlePositionTwo' class = 'VideoTitle' >".$VIDEO_LINK_TITLE_2."</DIV>";
                
                
                echo "<img id='".$VIDEO_LINK_3."' class='YouTubeImage' src='IMG/FRONT_VIDEO_LINKS/3.jpg' style='position: absolute;
                        top: 110px; left: 426px;'>";
                
                echo "<DIV id = 'VideoTitlePositionThree' class = 'VideoTitle' >".$VIDEO_LINK_TITLE_3."</DIV>";
                
                echo "<img id='".$VIDEO_LINK_4."' class='YouTubeImage' src='IMG/FRONT_VIDEO_LINKS/4.jpg' style='position: absolute;
                        top: 110px; left: 610px;'>";
                
                echo "<DIV id = 'VideoTitlePositionFour' class = 'VideoTitle' >".$VIDEO_LINK_TITLE_4."</DIV>";
                
                echo "<img id='".$VIDEO_LINK_5."' class='YouTubeImage' src='IMG/FRONT_VIDEO_LINKS/5.jpg' style='position: absolute;
                        top: 110px; left: 794px;'>";
                
                echo "<DIV id = 'VideoTitlePositionFive' class = 'VideoTitle' >".$VIDEO_LINK_TITLE_5."</DIV>";
                
                
                
                echo "<img id='".$VIDEO_LINK_6."' class='YouTubeImage' src='IMG/FRONT_VIDEO_LINKS/6.jpg' style='position: absolute;
                        top: 260px; left: 58px;'>";
                
                echo "<DIV id = 'VideoTitlePositionSix' class = 'VideoTitle' >".$VIDEO_LINK_TITLE_6."</DIV>";
                
                
                echo "<img id='".$VIDEO_LINK_7."' class='YouTubeImage' src='IMG/FRONT_VIDEO_LINKS/7.jpg' style='position: absolute;
                        top: 260px; left: 242px;'>";
                
                echo "<DIV id = 'VideoTitlePositionSeven' class = 'VideoTitle' >".$VIDEO_LINK_TITLE_7."</DIV>";
                
                
                echo "<img id='".$VIDEO_LINK_8."' class='YouTubeImage' src='IMG/FRONT_VIDEO_LINKS/8.jpg' style='position: absolute;
                        top: 260px; left: 426px;'>";
                
                echo "<DIV id = 'VideoTitlePositionEight' class = 'VideoTitle' >".$VIDEO_LINK_TITLE_8."</DIV>";
                
                echo "<img id='".$VIDEO_LINK_9."' class='YouTubeImage' src='IMG/FRONT_VIDEO_LINKS/9.jpg' style='position: absolute;
                        top: 260px; left: 610px;'>";
                
                echo "<DIV id = 'VideoTitlePositionNine' class = 'VideoTitle' >".$VIDEO_LINK_TITLE_9."</DIV>";
                
                echo "<img id='".$VIDEO_LINK_10."' class='YouTubeImage' src='IMG/FRONT_VIDEO_LINKS/10.jpg' style='position: absolute;
                        top: 260px; left: 794px;'>";
                
                echo "<DIV id = 'VideoTitlePositionTen' class = 'VideoTitle' >".$VIDEO_LINK_TITLE_10."</DIV>";
                
                
                ?>
                
                
            </DIV>
            
            <DIV id ="TwitterSection">
                <H1 class ="SectionHead">Twitter</H1>
                
                <DIV id ="TwitterWidget"><a class="twitter-timeline" href="https://twitter.com/Usportsdirect/usportsdirect" data-widget-id="371791603934842880">Tweets from @Usportsdirect/usportsdirect</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

                </DIV>
                
            </DIV>
            
            <DIV id ="ThrowbackYouTubeSection">
                <H1 class ="SectionHead">Throwback Videos</H1>
                
                <?PHP
                echo "<img id='".$THROWBACK_VIDEO_LINK_1."' class='YouTubeImage' src='IMG/FRONT_THROWBACK_VIDEOS/1.jpg' style='position: absolute;
                        top: 110px; left: 58px;'>";
                
                echo "<DIV id = 'VideoTitlePositionOne' class = 'VideoTitle' >".$THROWBACK_VIDEO_LINK_TITLE_1."</DIV>";
                
                
                echo "<img id='".$THROWBACK_VIDEO_LINK_2."' class='YouTubeImage' src='IMG/FRONT_THROWBACK_VIDEOS/2.jpg' style='position: absolute;
                        top: 110px; left: 242px;'>";
                
                echo "<DIV id = 'VideoTitlePositionTwo' class = 'VideoTitle' >".$THROWBACK_VIDEO_LINK_TITLE_2."</DIV>";
                
                
                echo "<img id='".$THROWBACK_VIDEO_LINK_3."' class='YouTubeImage' src='IMG/FRONT_THROWBACK_VIDEOS/3.jpg' style='position: absolute;
                        top: 110px; left: 426px;'>";
                
                echo "<DIV id = 'VideoTitlePositionThree' class = 'VideoTitle' >".$THROWBACK_VIDEO_LINK_TITLE_3."</DIV>";
                
                echo "<img id='".$THROWBACK_VIDEO_LINK_4."' class='YouTubeImage' src='IMG/FRONT_THROWBACK_VIDEOS/4.jpg' style='position: absolute;
                        top: 110px; left: 610px;'>";
                
                echo "<DIV id = 'VideoTitlePositionFour' class = 'VideoTitle' >".$THROWBACK_VIDEO_LINK_TITLE_4."</DIV>";
                
                echo "<img id='".$THROWBACK_VIDEO_LINK_5."' class='YouTubeImage' src='IMG/FRONT_THROWBACK_VIDEOS/5.jpg' style='position: absolute;
                        top: 110px; left: 794px;'>";
                
                echo "<DIV id = 'VideoTitlePositionFive' class = 'VideoTitle' >".$THROWBACK_VIDEO_LINK_TITLE_5."</DIV>";
                
                
                
                echo "<img id='".$THROWBACK_VIDEO_LINK_6."' class='YouTubeImage' src='IMG/FRONT_THROWBACK_VIDEOS/6.jpg' style='position: absolute;
                        top: 260px; left: 58px;'>";
                
                echo "<DIV id = 'VideoTitlePositionSix' class = 'VideoTitle' >".$THROWBACK_VIDEO_LINK_TITLE_6."</DIV>";
                
                
                echo "<img id='".$THROWBACK_VIDEO_LINK_7."' class='YouTubeImage' src='IMG/FRONT_THROWBACK_VIDEOS/7.jpg' style='position: absolute;
                        top: 260px; left: 242px;'>";
                
                echo "<DIV id = 'VideoTitlePositionSeven' class = 'VideoTitle' >".$THROWBACK_VIDEO_LINK_TITLE_7."</DIV>";
                
                
                echo "<img id='".$THROWBACK_VIDEO_LINK_8."' class='YouTubeImage' src='IMG/FRONT_THROWBACK_VIDEOS/8.jpg' style='position: absolute;
                        top: 260px; left: 426px;'>";
                
                echo "<DIV id = 'VideoTitlePositionEight' class = 'VideoTitle' >".$THROWBACK_VIDEO_LINK_TITLE_8."</DIV>";
                
                echo "<img id='".$THROWBACK_VIDEO_LINK_9."' class='YouTubeImage' src='IMG/FRONT_THROWBACK_VIDEOS/9.jpg' style='position: absolute;
                        top: 260px; left: 610px;'>";
                
                echo "<DIV id = 'VideoTitlePositionNine' class = 'VideoTitle' >".$THROWBACK_VIDEO_LINK_TITLE_9."</DIV>";
                
                echo "<img id='".$THROWBACK_VIDEO_LINK_10."' class='YouTubeImage' src='IMG/FRONT_THROWBACK_VIDEOS/10.jpg' style='position: absolute;
                        top: 260px; left: 794px;'>";
                
                echo "<DIV id = 'VideoTitlePositionTen' class = 'VideoTitle' >".$THROWBACK_VIDEO_LINK_TITLE_10."</DIV>";
                
                
                ?>
                
                
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
<link rel="stylesheet" href="MainStyleSheet.css" />
    <link rel="stylesheet" href="CSS_Page_Specific/MainTemplateStyle.css" />

    <link href='http://fonts.googleapis.com/css?family=Coda+Caption:800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="data/css/mobile.min.css" media="only screen and (max-width: 767px)" />

    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>
<!--    <link href='http://fonts.googleapis.com/css?family=Prosto+One' rel='stylesheet' type='text/css'>-->
    
    <script type="text/javascript" src="JQuery.js"></script>
    <script type="text/javascript" src="Javascript_Specific_Page/MainTemplate.js"></script>

    <script type="text/javascript">
        
        $(window).load(function() {
            $("#MainBody").fadeIn("400");
        });
        
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

</html>