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
    <div id ="FrontMenuContain">
        <div id ="FrontMenu">
            <div id ="ProfileNavMenuBar"></div>

            <DIV id ="ProfileMenuLinkContain">
                
                <DIV id ="MenuButton2010" class ="TopMenuButtonActive">2010's</DIV>
                <DIV id ="MenuButton2000" class ="TopMenuButtonNotActive">2000's</DIV>
                
                <DIV id ="MenuButton1990" class ="TopMenuButtonNotActive">1990's</DIV>
                <DIV id ="MenuButton1980" class ="TopMenuButtonNotActive">1980's</DIV>
                <DIV id ="MenuButton1970" class ="TopMenuButtonNotActive">1970's</DIV>
                <DIV id ="MenuButton1960" class ="TopMenuButtonNotActive">1960's</DIV>
                <DIV id ="MenuButton1950" class ="TopMenuButtonNotActive">1950's</DIV>
                <DIV id ="MenuButton1940" class ="TopMenuButtonNotActive">1940's</DIV>
                <DIV id ="MenuButton1930" class ="TopMenuButtonNotActive">1930's</DIV>
                
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
            
            
            
            <DIV id ="TopPushH"></DIV>
            <DIV class ="HeismanSection">
                
                <DIV class ="SectionHeadHeisman">2010's</DIV>
                
                <?
                ///2010's

                $QUERY_HEISMAN_WINNERS = $db->prepare("select HEISMAN_YEAR , PLAYER_NAME , heisman.S_KEY as SCHOOL_KEY , YOUTUBE_LINK , FREE_FORM_SCHOOL , POSITION  , schools.S_NAME as DB_SCHOOL
                from heisman 
                left join schools on heisman.S_KEY = schools.S_KEY 
                where substring(HEISMAN_YEAR, 3, 1) = 1 order by HEISMAN_YEAR desc;");

                $QUERY_HEISMAN_WINNERS->execute(); 

                while ($row = $QUERY_HEISMAN_WINNERS->fetch(PDO::FETCH_ASSOC))
                {
                    //2010's
                    echo "<DIV class = 'HeismanLine'>";

                        echo "<DIV class = 'HeismanYear'>".$row['HEISMAN_YEAR']."</DIV>";

                        echo "<img id='".$row['YOUTUBE_LINK']."' class='HeismanYoutube' src='http://img.youtube.com/vi/".$row['YOUTUBE_LINK']."/0.jpg' >";
                        
                        echo "<DIV class = 'PlayerName'>".$row['PLAYER_NAME']." - ".$row['POSITION']."</DIV>";
                        
                        IF ($row['SCHOOL_KEY'] != "-1")
                        {
                            echo "<DIV class = 'SchoolLine'>".$row['DB_SCHOOL']."</DIV>";
                        }
                        ELSE
                        {
                            echo "<DIV class = 'SchoolLine'>".$row['FREE_FORM_SCHOOL']."</DIV>";
                        }

                    echo "</DIV>";

                }


                ?>
            
            </DIV>
            
            
            
            <DIV class ="HeismanSection">
                
                <DIV class ="SectionHeadHeisman">2000's</DIV>
                
                <?
                ///2000's

                $QUERY_HEISMAN_WINNERS = $db->prepare("select HEISMAN_YEAR , PLAYER_NAME , heisman.S_KEY as SCHOOL_KEY, YOUTUBE_LINK , FREE_FORM_SCHOOL , POSITION  , schools.S_NAME as DB_SCHOOL , school_colors.U_COLOR
                    from heisman 
                    left join schools on heisman.S_KEY = schools.S_KEY 
                    left join school_colors on heisman.S_KEY = school_colors.S_KEY
                    where substring(HEISMAN_YEAR, 3, 1) = 0 order by HEISMAN_YEAR desc;");

                $QUERY_HEISMAN_WINNERS->execute(); 

                while ($row = $QUERY_HEISMAN_WINNERS->fetch(PDO::FETCH_ASSOC))
                {
                    //2000's
                    echo "<DIV class = 'HeismanLine'>";

                        echo "<DIV class = 'HeismanYear'>".$row['HEISMAN_YEAR']."</DIV>";

                        echo "<img id='".$row['YOUTUBE_LINK']."' class='HeismanYoutube' src='http://img.youtube.com/vi/".$row['YOUTUBE_LINK']."/0.jpg' >";
                        
                        echo "<DIV class = 'PlayerName'>".$row['PLAYER_NAME']." - ".$row['POSITION']."</DIV>";
                        
                        IF ($row['SCHOOL_KEY'] != "-1")
                        {
                            echo "<DIV class = 'SchoolLine'><a class = 'HeismanSchoolLink' href = '".$row['SCHOOL_KEY']."' style = 'color: ".$row['U_COLOR'].";'>".$row['DB_SCHOOL']."</a></DIV>";
                        }
                        ELSE
                        {
                            echo "<DIV class = 'SchoolLine'>".$row['FREE_FORM_SCHOOL']."</DIV>";
                        }

                    echo "</DIV>";

                }


                ?>
            
            </DIV>
            
            
            <DIV class ="HeismanSection">
                
                <DIV class ="SectionHeadHeisman">1990's</DIV>
                
                <?
                ///1990's

                $QUERY_HEISMAN_WINNERS = $db->prepare("select HEISMAN_YEAR , PLAYER_NAME , heisman.S_KEY as SCHOOL_KEY, YOUTUBE_LINK , FREE_FORM_SCHOOL , POSITION  , schools.S_NAME as DB_SCHOOL , school_colors.U_COLOR
                    from heisman 
                    left join schools on heisman.S_KEY = schools.S_KEY 
                    left join school_colors on heisman.S_KEY = school_colors.S_KEY
                    where substring(HEISMAN_YEAR, 3, 1) = 9 order by HEISMAN_YEAR desc;");

                $QUERY_HEISMAN_WINNERS->execute(); 

                while ($row = $QUERY_HEISMAN_WINNERS->fetch(PDO::FETCH_ASSOC))
                {
                    
                    echo "<DIV class = 'HeismanLine'>";

                        echo "<DIV class = 'HeismanYear'>".$row['HEISMAN_YEAR']."</DIV>";

                        echo "<img id='".$row['YOUTUBE_LINK']."' class='HeismanYoutube' src='http://img.youtube.com/vi/".$row['YOUTUBE_LINK']."/0.jpg' >";
                        
                        echo "<DIV class = 'PlayerName'>".$row['PLAYER_NAME']." - ".$row['POSITION']."</DIV>";
                        
                        IF ($row['SCHOOL_KEY'] != "-1")
                        {
                            echo "<DIV class = 'SchoolLine'><a class = 'HeismanSchoolLink' href = '".$row['SCHOOL_KEY']."' style = 'color: ".$row['U_COLOR'].";'>".$row['DB_SCHOOL']."</a></DIV>";
                        }
                        ELSE
                        {
                            echo "<DIV class = 'SchoolLine'>".$row['FREE_FORM_SCHOOL']."</DIV>";
                        }

                    echo "</DIV>";

                }


                ?>
            
            </DIV>
            
            
            
            <DIV class ="HeismanSection">
                
                <DIV class ="SectionHeadHeisman">1980's</DIV>
                
                <?
                ///1980's

                $QUERY_HEISMAN_WINNERS = $db->prepare("select HEISMAN_YEAR , PLAYER_NAME , heisman.S_KEY as SCHOOL_KEY, YOUTUBE_LINK , FREE_FORM_SCHOOL , POSITION  , schools.S_NAME as DB_SCHOOL , school_colors.U_COLOR
                    from heisman 
                    left join schools on heisman.S_KEY = schools.S_KEY 
                    left join school_colors on heisman.S_KEY = school_colors.S_KEY
                    where substring(HEISMAN_YEAR, 3, 1) = 8 order by HEISMAN_YEAR desc;");

                $QUERY_HEISMAN_WINNERS->execute(); 

                while ($row = $QUERY_HEISMAN_WINNERS->fetch(PDO::FETCH_ASSOC))
                {
                    
                    echo "<DIV class = 'HeismanLine'>";

                        echo "<DIV class = 'HeismanYear'>".$row['HEISMAN_YEAR']."</DIV>";

                        echo "<img id='".$row['YOUTUBE_LINK']."' class='HeismanYoutube' src='http://img.youtube.com/vi/".$row['YOUTUBE_LINK']."/0.jpg' >";
                        
                        echo "<DIV class = 'PlayerName'>".$row['PLAYER_NAME']." - ".$row['POSITION']."</DIV>";
                        
                        IF ($row['SCHOOL_KEY'] != "-1")
                        {
                            echo "<DIV class = 'SchoolLine'><a class = 'HeismanSchoolLink' href = '".$row['SCHOOL_KEY']."' style = 'color: ".$row['U_COLOR'].";'>".$row['DB_SCHOOL']."</a></DIV>";
                        }
                        ELSE
                        {
                            echo "<DIV class = 'SchoolLine'>".$row['FREE_FORM_SCHOOL']."</DIV>";
                        }

                    echo "</DIV>";

                }


                ?>
            
            </DIV>
            
            
            <DIV class ="HeismanSection">
                
                <DIV class ="SectionHeadHeisman">1970's</DIV>
                
                <?
                ///1970's

                $QUERY_HEISMAN_WINNERS = $db->prepare("select HEISMAN_YEAR , PLAYER_NAME , heisman.S_KEY as SCHOOL_KEY, YOUTUBE_LINK , FREE_FORM_SCHOOL , POSITION  , schools.S_NAME as DB_SCHOOL , school_colors.U_COLOR
                    from heisman 
                    left join schools on heisman.S_KEY = schools.S_KEY 
                    left join school_colors on heisman.S_KEY = school_colors.S_KEY
                    where substring(HEISMAN_YEAR, 3, 1) = 7  order by HEISMAN_YEAR desc;");

                $QUERY_HEISMAN_WINNERS->execute(); 

                while ($row = $QUERY_HEISMAN_WINNERS->fetch(PDO::FETCH_ASSOC))
                {
                    
                    echo "<DIV class = 'HeismanLine'>";

                        echo "<DIV class = 'HeismanYear'>".$row['HEISMAN_YEAR']."</DIV>";

                        echo "<img id='".$row['YOUTUBE_LINK']."' class='HeismanYoutube' src='http://img.youtube.com/vi/".$row['YOUTUBE_LINK']."/0.jpg' >";
                        
                        echo "<DIV class = 'PlayerName'>".$row['PLAYER_NAME']." - ".$row['POSITION']."</DIV>";
                        
                        IF ($row['SCHOOL_KEY'] != "-1")
                        {
                            echo "<DIV class = 'SchoolLine'><a class = 'HeismanSchoolLink' href = '".$row['SCHOOL_KEY']."' style = 'color: ".$row['U_COLOR'].";'>".$row['DB_SCHOOL']."</a></DIV>";
                        }
                        ELSE
                        {
                            echo "<DIV class = 'SchoolLine'>".$row['FREE_FORM_SCHOOL']."</DIV>";
                        }

                    echo "</DIV>";

                }


                ?>
            
            </DIV>
            
            <DIV class ="HeismanSection">
                
                <DIV class ="SectionHeadHeisman">1960's</DIV>
                
                <?
                ///1960's

                $QUERY_HEISMAN_WINNERS = $db->prepare("select HEISMAN_YEAR , PLAYER_NAME , heisman.S_KEY as SCHOOL_KEY, YOUTUBE_LINK , FREE_FORM_SCHOOL , POSITION  , schools.S_NAME as DB_SCHOOL , school_colors.U_COLOR
                    from heisman 
                    left join schools on heisman.S_KEY = schools.S_KEY 
                    left join school_colors on heisman.S_KEY = school_colors.S_KEY
                    where substring(HEISMAN_YEAR, 3, 1) = 6  order by HEISMAN_YEAR desc;");

                $QUERY_HEISMAN_WINNERS->execute(); 

                while ($row = $QUERY_HEISMAN_WINNERS->fetch(PDO::FETCH_ASSOC))
                {
                    
                    echo "<DIV class = 'HeismanLine'>";

                        echo "<DIV class = 'HeismanYear'>".$row['HEISMAN_YEAR']."</DIV>";

                        echo "<img id='".$row['YOUTUBE_LINK']."' class='HeismanYoutube' src='http://img.youtube.com/vi/".$row['YOUTUBE_LINK']."/0.jpg' >";
                        
                        echo "<DIV class = 'PlayerName'>".$row['PLAYER_NAME']." - ".$row['POSITION']."</DIV>";
                        
                        IF ($row['SCHOOL_KEY'] != "-1")
                        {
                            echo "<DIV class = 'SchoolLine'><a class = 'HeismanSchoolLink' href = '".$row['SCHOOL_KEY']."' style = 'color: ".$row['U_COLOR'].";'>".$row['DB_SCHOOL']."</a></DIV>";
                        }
                        ELSE
                        {
                            echo "<DIV class = 'SchoolLine'>".$row['FREE_FORM_SCHOOL']."</DIV>";
                        }

                    echo "</DIV>";

                }


                ?>
            
            </DIV>
            
                        
            <DIV class ="HeismanSection">
                
                <DIV class ="SectionHeadHeisman">1950's</DIV>
                
                <?
                ///1960's

                $QUERY_HEISMAN_WINNERS = $db->prepare("select HEISMAN_YEAR , PLAYER_NAME , heisman.S_KEY as SCHOOL_KEY, YOUTUBE_LINK , FREE_FORM_SCHOOL , POSITION  , schools.S_NAME as DB_SCHOOL , school_colors.U_COLOR
                    from heisman 
                    left join schools on heisman.S_KEY = schools.S_KEY 
                    left join school_colors on heisman.S_KEY = school_colors.S_KEY
                    where substring(HEISMAN_YEAR, 3, 1) = 5  order by HEISMAN_YEAR desc;");

                $QUERY_HEISMAN_WINNERS->execute(); 

                while ($row = $QUERY_HEISMAN_WINNERS->fetch(PDO::FETCH_ASSOC))
                {
                    
                    echo "<DIV class = 'HeismanLine'>";

                        echo "<DIV class = 'HeismanYear'>".$row['HEISMAN_YEAR']."</DIV>";

                        echo "<img id='".$row['YOUTUBE_LINK']."' class='HeismanYoutube' src='http://img.youtube.com/vi/".$row['YOUTUBE_LINK']."/0.jpg' >";
                        
                        echo "<DIV class = 'PlayerName'>".$row['PLAYER_NAME']." - ".$row['POSITION']."</DIV>";
                        
                        IF ($row['SCHOOL_KEY'] != "-1")
                        {
                            echo "<DIV class = 'SchoolLine'><a class = 'HeismanSchoolLink' href = '".$row['SCHOOL_KEY']."' style = 'color: ".$row['U_COLOR'].";'>".$row['DB_SCHOOL']."</a></DIV>";
                        }
                        ELSE
                        {
                            echo "<DIV class = 'SchoolLine'>".$row['FREE_FORM_SCHOOL']."</DIV>";
                        }

                    echo "</DIV>";

                }


                ?>
            
            </DIV>
            
            
            <DIV class ="HeismanSection">
                
                <DIV class ="SectionHeadHeisman">1940's</DIV>
                
                <?
                ///1960's

                $QUERY_HEISMAN_WINNERS = $db->prepare("select HEISMAN_YEAR , PLAYER_NAME , heisman.S_KEY as SCHOOL_KEY, YOUTUBE_LINK , FREE_FORM_SCHOOL , POSITION  , schools.S_NAME as DB_SCHOOL , school_colors.U_COLOR
                    from heisman 
                    left join schools on heisman.S_KEY = schools.S_KEY 
                    left join school_colors on heisman.S_KEY = school_colors.S_KEY
                    where substring(HEISMAN_YEAR, 3, 1) = 4  order by HEISMAN_YEAR desc;");

                $QUERY_HEISMAN_WINNERS->execute(); 

                while ($row = $QUERY_HEISMAN_WINNERS->fetch(PDO::FETCH_ASSOC))
                {
                    
                    echo "<DIV class = 'HeismanLine'>";

                        echo "<DIV class = 'HeismanYear'>".$row['HEISMAN_YEAR']."</DIV>";

                        echo "<img id='".$row['YOUTUBE_LINK']."' class='HeismanYoutube' src='http://img.youtube.com/vi/".$row['YOUTUBE_LINK']."/0.jpg' >";
                        
                        echo "<DIV class = 'PlayerName'>".$row['PLAYER_NAME']." - ".$row['POSITION']."</DIV>";
                        
                        IF ($row['SCHOOL_KEY'] != "-1")
                        {
                            echo "<DIV class = 'SchoolLine'><a class = 'HeismanSchoolLink' href = '".$row['SCHOOL_KEY']."' style = 'color: ".$row['U_COLOR'].";'>".$row['DB_SCHOOL']."</a></DIV>";
                        }
                        ELSE
                        {
                            echo "<DIV class = 'SchoolLine'>".$row['FREE_FORM_SCHOOL']."</DIV>";
                        }

                    echo "</DIV>";

                }


                ?>
            
            </DIV>
            
            
            
            <DIV class ="HeismanSection">
                
                <DIV class ="SectionHeadHeisman">1930's</DIV>
                
                <?
                ///1960's

                $QUERY_HEISMAN_WINNERS = $db->prepare("select HEISMAN_YEAR , PLAYER_NAME , heisman.S_KEY as SCHOOL_KEY, YOUTUBE_LINK , FREE_FORM_SCHOOL , POSITION  , schools.S_NAME as DB_SCHOOL , school_colors.U_COLOR
                    from heisman 
                    left join schools on heisman.S_KEY = schools.S_KEY 
                    left join school_colors on heisman.S_KEY = school_colors.S_KEY
                    where substring(HEISMAN_YEAR, 3, 1) = 3  order by HEISMAN_YEAR desc;");

                $QUERY_HEISMAN_WINNERS->execute(); 

                while ($row = $QUERY_HEISMAN_WINNERS->fetch(PDO::FETCH_ASSOC))
                {
                    
                    echo "<DIV class = 'HeismanLine'>";

                        echo "<DIV class = 'HeismanYear'>".$row['HEISMAN_YEAR']."</DIV>";

                        echo "<img id='".$row['YOUTUBE_LINK']."' class='HeismanYoutube' src='http://img.youtube.com/vi/".$row['YOUTUBE_LINK']."/0.jpg' >";
                        
                        echo "<DIV class = 'PlayerName'>".$row['PLAYER_NAME']." - ".$row['POSITION']."</DIV>";
                        
                        IF ($row['SCHOOL_KEY'] != "-1")
                        {
                            echo "<DIV class = 'SchoolLine'><a class = 'HeismanSchoolLink' href = '".$row['SCHOOL_KEY']."' style = 'color: ".$row['U_COLOR'].";'>".$row['DB_SCHOOL']."</a></DIV>";
                        }
                        ELSE
                        {
                            echo "<DIV class = 'SchoolLine'>".$row['FREE_FORM_SCHOOL']."</DIV>";
                        }

                    echo "</DIV>";

                }


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