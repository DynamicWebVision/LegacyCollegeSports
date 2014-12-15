<?
ob_start(); 
session_start();
?>
<!DOCTYPE html>
<?
    require_once('Functions.php');
    
    Get_DB_Connection();
    
    

    
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
    <link rel="stylesheet" href="CSS_Page_Specific/TV_Schedule.css" />
    
    <link rel="stylesheet" href="CSS_Page_Specific/ArticlePage.css" />

    <link href='http://fonts.googleapis.com/css?family=Trade+Winds' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="data/css/mobile.min.css" media="only screen and (max-width: 767px)" />
    
     <link href='http://fonts.googleapis.com/css?family=Coda+Caption:800' rel='stylesheet' type='text/css'>
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
    <title>Week 9 Recap</title>
    
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
            window.location = "MobileTVSchedule.php";
        }
        
    </script>
    
</head>

<body id ="MainBody">
    <div class ="page-wrap">
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
                    <DIV id ="PageNameHead">Week 9 Recap</DIV>
                </DIV>
                
                <div id='cssmenu'>
                    <ul>
                    <li class ="active"><a href='index.php'><span>Home</span></a></li>
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
    <DIV id ="MainContentContain">
        <div id ="borderleft"></div>
        <div id ="borderright"></div>
        
        <DIV id ="MainContent">
            <DIV class ="ContentPush"></DIV>
            <H1 class ="ArticleTitle">Week 9 Recap</H1>
            
            <img id ="TopImage" src ="ARTICLE_IMAGES/Week_9.jpg">
            
            <H2 class ="SecondaryHead">Oregon and Florida State Race for 2nd</H2>
            
            Despite an early struggle, Oregon managed to match Florida State at remaining unbeaten on the year, and remaining in the hunt for a place in the BCS Championship game.  <BR><BR>
            If you just saw the score on Sunday (42-14), you might assume that business was as usual in Eugene on Saturday.  You’d be missing that it was a halftime score of 14-14, and that we were given a glimpse into one of the Duck’s potential vulnerabilities… they can be beaten up.  <BR><BR>
            The finesse offense eventually seized control, putting up 21 points in the fourth quarter to seal the game; however, in the first half the Bruins defense played physical and it clearly had an effect on Mariota and the Duck’s offense in the first half.  The young Bruins defense was deceptively fast, but still not might be as talented as an Alabama or SEC style defense they would face in a championship game.  <BR><BR>
            Equally as important, a weathered SEC defense won’t be worn down in the fourth quarter like the young UCLA defense did.  <BR><BR>
            Nonetheless, with UCLA coming into the week ranked at 12, it’s no surprise that Oregon was able to jump Florida State in the new BCS rankings that came out on Sunday.  <BR><BR>
            Florida State thumped an NC State team still looking for their first ACC win of the year, and at one point was up 35-0 … in the first quarter.  <BR><BR>
            Jameis Winston, Florida State’s standout freshmen quarterback, finished with three touchdowns, 292 yards, and a quarterback rating of 96.  <BR><BR>
            With both teams hoping to finish out with undefeated records, each of their next games are shaping up to be big ones with regard to their final ranking in the BCS system.  Next week on a Thursday night ESPN game Oregon travels to Palo Alto to take on a fifth ranked Stanford team.  After that, Utah, @ Arizona, and Oregon State are all that remains on the Duck’s schedule. <BR><BR>
            Saturday, Florida State hosts seventh ranked Miami, with only @ Wake Forest, Syracuse, Idaho, and @ Florida remaining on the schedule after this week. <BR><BR>

            <H2 class ="SecondaryHead">Alabama is Freakishly Good</H2> 
            
            This week’s matchup with Tennessee was intriguing for most college football fans.  While very few would have expected the Vols to deal Alabama their first loss, most would coincide that it would have been an interesting game… at least for a half.  <BR><BR>
            In the two previous weeks Tennessee lost a heart breaker by a field goal in overtime to an unbeatable looking Georgia squad, and last week pulled off a 23-21 upset over a solid one-loss South Carolina team.  <BR><BR>
            It couldn’t have been more different this week. <BR><BR>
            Alabama led 21-0 at the end of the first quarter, and 35-0 at the end of the first half.  AJ McCarron finished with 275 yards and two touchdowns, while Kenyan Drake and T.J. Yeldon added 89 and 72 yards of rushing offense.  <BR><BR>

            <H2 class ="SecondaryHead">Baylor Moves Up to 5 in Newest BCS Rankings</H2> 
            
            Baylor has lit up the scoreboard every time they’ve taken the field this year.  While many expected them to taper off following the end of the RGIII/ Terrence Williams era, the opposite has been the case.  <BR><BR>
            The ground Baylor has gained in the last ten years is remarkable.  In 2003 Baylor finished 3-9, and 1-7 in the Big 12.  That year they suffered losses of 52-14 (UNT), 73-10 (A&M), 56-0 (UT), 38-10 (K-State) and 62-14 (Texas Tech).  <BR><BR>
            This year Baylor has wins of 73-42 (WVU), 71-7 (ISU), 59-14 (KU) and a combined score of 209-23 in their first three games against non BCS opponents.  <BR><BR>
            Baylor is as high as fifth in the newest BCS rankings put out on Sunday.  With most trying part of their schedule still remaining, Baylor will look to remain atop the Big 12 with OU and Tech coming to Waco in the next three weeks.  Their final three games are @OSU, @ TCU, and UT.  

            
            <DIV class="bottompush"></DIV>
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

                
                var main_height = $(".page-wrap").height()+59;
                var main_content_height = $(".page-wrap").height()-126;

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
                
                    var main_height_resize = $(".page-wrap").height()+66;
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