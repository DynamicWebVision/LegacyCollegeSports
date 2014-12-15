<?PHP
ob_start(); 
session_start();
?>
<!DOCTYPE html>
<?PHP
    require_once('Functions.php');
    
    Get_DB_Connection();
    
//    IF (!ISSET($_SESSION['ADMIN_KEY']))
//    {
//        IF ($_SESSION['ADMIN_TYPE'] != "1")
//        {
//            header('Location: AdminLogin.php');
//        }
//    }
    
        
        IF (isset($_POST['submit'])) 
                 {
                 
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

                        $UPDATE->bindValue(':link_title', str_replace("'", "''", $_POST['LINK_TITLE_1']));
                        
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

                        $UPDATE->bindValue(':link_title', $_POST['LINK_TITLE_2']);
                        
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

                        $UPDATE->bindValue(':link_title', str_replace("'", "''", $_POST['LINK_TITLE_3']));
                        
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

                        $UPDATE->bindValue(':link_title', str_replace("'", "''", $_POST['LINK_TITLE_4']));
                        
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

                        $UPDATE->bindValue(':link_title', str_replace("'", "''", $_POST['LINK_TITLE_5']));
                        
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

                        $UPDATE->bindValue(':link_title', str_replace("'", "''", $_POST['LINK_TITLE_6']));
                        
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
                        
                        $UPDATE->bindValue(':link', str_replace("'", "''", $_POST['LINK_7']));
                        
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

                        $UPDATE->bindValue(':link_title', str_replace("'", "''", $_POST['LINK_TITLE_8']));
                        
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

                        $UPDATE->bindValue(':link_title', str_replace("'", "''", $_POST['LINK_TITLE_9']));
                        
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

                        $UPDATE->bindValue(':link_title', str_replace("'", "''", $_POST['LINK_TITLE_10']));
                        
                        $UPDATE->bindValue(':link', $_POST['LINK_10']);
                        
                        $UPDATE->bindValue(':date', $CURRENT_DATE);

                        $UPDATE->execute(); 
                    }
                    
                }
                
                
                
                //YOUTUBE STUFF
                
                $queryVideoKey = $db->prepare("select LINK , LINK_ORDER from front_youtube_links order by LINK_ORDER");
                 

                $queryVideoKey->execute(); 
                 
                while ($row = $queryVideoKey->fetch(PDO::FETCH_ASSOC))
                {
                
                    IF ($row['LINK'] != $_POST['YOUTUBE_LINK_'.$row['LINK_ORDER']])
                    {   
                        $dateFormat="Y-m-d G:i:s";              
                        $CURRENT_DATE =gmdate($dateFormat);
                        
                        $UPDATE = $db->prepare(" update
                        front_youtube_links set LINK_TITLE = :link_title , LINK = :link , POST_DATE = :date where LINK_ORDER = :link_order");

                        $UPDATE->bindValue(':link_title', str_replace("'", "''", $_POST['YOUTUBE_LINK_TITLE_'.$row['LINK_ORDER']]));
                        
                        $UPDATE->bindValue(':link', $_POST['YOUTUBE_LINK_'.$row['LINK_ORDER']]);
                        
                        $UPDATE->bindValue(':date', $CURRENT_DATE);
                        
                        $UPDATE->bindValue(':link_order', $row['LINK_ORDER']);

                        $UPDATE->execute(); 
                        
                        unlink('../IMG/FRONT_VIDEO_LINKS/'.$row['LINK_ORDER'].'.jpg');
                        
                        copy('http://img.youtube.com/vi/'.$_POST['YOUTUBE_LINK_'.$row['LINK_ORDER']].'/0.jpg', '../IMG/FRONT_VIDEO_LINKS/'.$row['LINK_ORDER'].'.jpg');
                    }
                    
                }
                
                
                
                $counter = 1;    
                        
                while ($counter < 11)
                {
                        
                        $UPDATE = $db->prepare(" update
                        front_throwback_videos set LINK_TITLE = :link_title , LINK = :link  where LINK_ORDER = '".$counter."'");

                        $UPDATE->bindValue(':link_title', str_replace("'", "''", $_POST['YOUTUBE_LINK_TITLE_THROWBACK'.$counter]));
                        
                        $UPDATE->bindValue(':link', $_POST['YOUTUBE_LINK_THROWBACK'.$counter]);
                        
                        $UPDATE->execute(); 
                        
                        unlink('../IMG/FRONT_THROWBACK_VIDEOS/'.$counter.'.jpg');
                        
                        copy('http://img.youtube.com/vi/'.$_POST['YOUTUBE_LINK_'.$row['LINK_ORDER']].'/0.jpg', '../IMG/FRONT_THROWBACK_VIDEOS/'.$counter.'.jpg');
                        
                    
                    $counter++;
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

    <link rel="stylesheet" href="MainStyleSheet.css" />
    <link rel="stylesheet" href="CSS_Page_Specific/MainTemplateStyle.css" />
    <link rel="stylesheet" href="CSS_Page_Specific/HeismanWinners.css" />
    <link rel="stylesheet" href="CSS_Page_Specific/AdminManagemnet.css" />

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
                  
                    <li class='has-sub'><a href='#'><span>Functions</span></a>
                        <ul>
                            <li><a href='AdminSubmitStory.php'><span>Create Story</span></a></li>
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
            
            <BR><BR><BR><BR>
            <H1 class ="ML">Admin Management</H1>
            <?PHP

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



echo "<DIV class = 'FrontItemHeader ML'>Front Links</DIV>";
                echo "<div id = 'SchoolLinkList'>";

                $QUERY_SCHOOL = $db->prepare("
                        select LINK_ORDER , LINK_TITLE , LINK , POST_DATE from front_links
                        ");

                $QUERY_SCHOOL->execute(); 

            echo "<DIV class = 'HeismanLineAM'>";

            echo "<DIV class = 'heiyear head'>Link Order</DIV>";

            echo "<DIV class = 'SchoolDropwDown head'>Link Title</DIV>";

            echo "<DIV class = 'Record1 head'>Link</DIV>";


        //       echo "<DIV class = 'SchoolDropwDown3'>School 3</DIV>";
        //       
        //       echo "<DIV class = 'Record3'>Record</DIV>";

            $_TMZ_DIFF = 5;

            echo "</DIV>";
                echo "<FORM method = 'POST' action='AdminManagement.php'>";
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
                
                
                echo "<DIV class = 'HeismanLineAM'>";
                echo "<DIV class = 'heiyear'>1</DIV>";
                echo "<input type = 'text' class = 'SchoolDropwDown'value = '".str_replace("'","&#39",stripslashes($LINK_TITLE_1))."' name = 'LINK_TITLE_1' maxlength = '40'  >";
                echo "<input type = 'text' class = 'Record1'  value = '".$LINK_1."' name = 'LINK_1' >";
                echo "<DIV class = 'StatusDate'>".$POST_DATE_1."</DIV>";
                echo "</DIV>";

                echo "<DIV class = 'HeismanLineAM'>";
                echo "<DIV class = 'heiyear'>2</DIV>";
                echo "<input type = 'text' class = 'SchoolDropwDown'value = '".str_replace("'","&#39",stripslashes($LINK_TITLE_2))."' name = 'LINK_TITLE_2' maxlength = '40'   >";
                echo "<input type = 'text' class = 'Record1'  value = '".$LINK_2."' name = 'LINK_2'  >";
                echo "<DIV class = 'StatusDate'>".$POST_DATE_2."</DIV>";
                echo "</DIV>";


                echo "<DIV class = 'HeismanLineAM'>";
                echo "<DIV class = 'heiyear'>3</DIV>";
                echo "<input type = 'text' class = 'SchoolDropwDown' value = '".str_replace("'","&#39",stripslashes($LINK_TITLE_3))."' name = 'LINK_TITLE_3' maxlength = '40'   >";
                echo "<input type = 'text' class = 'Record1'  value = '".$LINK_3."' name = 'LINK_3'  >";
                echo "<DIV class = 'StatusDate'>".$POST_DATE_3."</DIV>";
                echo "</DIV>";


                echo "<DIV class = 'HeismanLineAM'>";
                echo "<DIV class = 'heiyear'>4</DIV>";
                echo "<input type = 'text' class = 'SchoolDropwDown'value = '".str_replace("'","&#39",stripslashes($LINK_TITLE_4))."' name = 'LINK_TITLE_4' maxlength = '40'   >";
                echo "<input type = 'text' class = 'Record1'  value = '".$LINK_4."' name = 'LINK_4'  >";
                echo "<DIV class = 'StatusDate'>".$POST_DATE_4."</DIV>";
                echo "</DIV>";


                echo "<DIV class = 'HeismanLineAM'>";
                echo "<DIV class = 'heiyear'>5</DIV>";
                echo "<input type = 'text' class = 'SchoolDropwDown'value = '".str_replace("'","&#39",stripslashes($LINK_TITLE_5))."' name = 'LINK_TITLE_5' maxlength = '40'   >";
                echo "<input type = 'text' class = 'Record1'  value = '".$LINK_5."' name = 'LINK_5'  >";
                echo "<DIV class = 'StatusDate'>".$POST_DATE_5."</DIV>";
                echo "</DIV>";


                echo "<DIV class = 'HeismanLineAM'>";
                echo "<DIV class = 'heiyear'>6</DIV>";
                echo "<input type = 'text' class = 'SchoolDropwDown' value = '".str_replace("'","&#39",stripslashes($LINK_TITLE_6))."'  name = 'LINK_TITLE_6' maxlength = '40' >";
                echo "<input type = 'text' class = 'Record1'  value = '".$LINK_6."' name = 'LINK_6'  >";
                echo "<DIV class = 'StatusDate'>".$POST_DATE_6."</DIV>";
                echo "</DIV>";


                echo "<DIV class = 'HeismanLineAM'>";
                echo "<DIV class = 'heiyear'>7</DIV>";
                echo "<input type = 'text' class = 'SchoolDropwDown' value = '".str_replace("'","&#39",stripslashes($LINK_TITLE_7))."'  name = 'LINK_TITLE_7' maxlength = '40'   >";
                echo "<input type = 'text' class = 'Record1'  value = '".$LINK_7."' name = 'LINK_7'  >";
                echo "<DIV class = 'StatusDate'>".$POST_DATE_7."</DIV>";
                echo "</DIV>";


                echo "<DIV class = 'HeismanLineAM'>";
                    echo "<DIV class = 'heiyear'>8</DIV>";
                        echo "<input type = 'text' class = 'SchoolDropwDown' value = '".str_replace("'","&#39",stripslashes($LINK_TITLE_8))."'  name = 'LINK_TITLE_8' maxlength = '40'   >";
                        echo "<input type = 'text' class = 'Record1'  value = '".$LINK_8."' name = 'LINK_8'  >";
                    echo "<DIV class = 'StatusDate'>".$POST_DATE_8."</DIV>";
                echo "</DIV>";


                echo "<DIV class = 'HeismanLineAM'>";
                echo "<DIV class = 'heiyear'>9</DIV>";
                echo "<input type = 'text' class = 'SchoolDropwDown' value = '".str_replace("'","&#39",stripslashes($LINK_TITLE_9))."'  name = 'LINK_TITLE_9'  maxlength = '40'  >";
                echo "<input type = 'text' class = 'Record1'  value = '".$LINK_9."' name = 'LINK_9'  >";
                echo "<DIV class = 'StatusDate'>".$POST_DATE_9."</DIV>";
                echo "</DIV>";


                echo "<DIV class = 'HeismanLineAM'>";
                    echo "<DIV class = 'heiyear'>10</DIV>";
                        echo "<input type = 'text' class = 'SchoolDropwDown' value = '".str_replace("'","&#39",stripslashes($LINK_TITLE_10))."'  name = 'LINK_TITLE_10'  maxlength = '40'  >";
                        echo "<input type = 'text' class = 'Record1'  value = '".$LINK_10."' name = 'LINK_10'  >";
                    echo "<DIV class = 'StatusDate'>".$POST_DATE_10."</DIV>";
                echo "</DIV>";

                echo "<BR><BR><BR>";

                echo "<DIV class = 'FrontItemHeader ML'>YouTube Videos</DIV>";

                echo "<DIV class = 'HeismanLineAM'>";
                    echo "<DIV class = 'heiyear'>1</DIV>";
                        echo "<input type = 'text' class = 'SchoolDropwDown'value = '".str_replace("'","&#39",stripslashes($YOU_TUBE_TITLE_1))."' name = 'YOUTUBE_LINK_TITLE_1' >";
                        echo "<input type = 'text' class = 'Record1'  value = '".$YOUTUBE_LINK_1."' name = 'YOUTUBE_LINK_1' >";
                    echo "<DIV class = 'StatusDate'>".$YOUTUBE_POST_DATE_1."</DIV>";
                echo "</DIV>";

                echo "<DIV class = 'HeismanLineAM'>";
                echo "<DIV class = 'heiyear'>2</DIV>";
                echo "<input type = 'text' class = 'SchoolDropwDown'value = '".str_replace("'","&#39",stripslashes($YOU_TUBE_TITLE_2))."' name = 'YOUTUBE_LINK_TITLE_2'  >";
                echo "<input type = 'text' class = 'Record1'  value = '".$YOUTUBE_LINK_2."' name = 'YOUTUBE_LINK_2'  >";
                echo "<DIV class = 'StatusDate'>".$YOUTUBE_POST_DATE_2."</DIV>";
                echo "</DIV>";


                echo "<DIV class = 'HeismanLineAM'>";
                echo "<DIV class = 'heiyear'>3</DIV>";
                echo "<input type = 'text' class = 'SchoolDropwDown' value = '".str_replace("'","&#39",stripslashes($YOU_TUBE_TITLE_3))."' name = 'YOUTUBE_LINK_TITLE_3'  >";
                echo "<input type = 'text' class = 'Record1'  value = '".$YOUTUBE_LINK_3."' name = 'YOUTUBE_LINK_3'  >";
                echo "<DIV class = 'StatusDate'>".$YOUTUBE_POST_DATE_3."</DIV>";
                echo "</DIV>";


                echo "<DIV class = 'HeismanLineAM'>";
                echo "<DIV class = 'heiyear'>4</DIV>";
                echo "<input type = 'text' class = 'SchoolDropwDown'value = '".str_replace("'","&#39",stripslashes($YOU_TUBE_TITLE_4))."' name = 'YOUTUBE_LINK_TITLE_4'  >";
                echo "<input type = 'text' class = 'Record1'  value = '".$YOUTUBE_LINK_4."' name = 'YOUTUBE_LINK_4'  >";
                echo "<DIV class = 'StatusDate'>".$YOUTUBE_POST_DATE_4."</DIV>";
                echo "</DIV>";


                echo "<DIV class = 'HeismanLineAM'>";
                echo "<DIV class = 'heiyear'>5</DIV>";
                echo "<input type = 'text' class = 'SchoolDropwDown'value = '".str_replace("'","&#39",stripslashes($YOU_TUBE_TITLE_5))."' name = 'YOUTUBE_LINK_TITLE_5'  >";
                echo "<input type = 'text' class = 'Record1'  value = '".$YOUTUBE_LINK_5."' name = 'YOUTUBE_LINK_5'  >";
                echo "<DIV class = 'StatusDate'>".$YOUTUBE_POST_DATE_5."</DIV>";
                echo "</DIV>";


                echo "<DIV class = 'HeismanLineAM'>";
                echo "<DIV class = 'heiyear'>6</DIV>";
                echo "<input type = 'text' class = 'SchoolDropwDown' value = '".str_replace("'","&#39",stripslashes($YOU_TUBE_TITLE_6))."'  name = 'YOUTUBE_LINK_TITLE_6'  >";
                echo "<input type = 'text' class = 'Record1'  value = '".$YOUTUBE_LINK_6."' name = 'YOUTUBE_LINK_6'  >";
                echo "<DIV class = 'StatusDate'>".$YOUTUBE_POST_DATE_6."</DIV>";
                echo "</DIV>";


                echo "<DIV class = 'HeismanLineAM'>";
                echo "<DIV class = 'heiyear'>7</DIV>";
                echo "<input type = 'text' class = 'SchoolDropwDown' value = '".str_replace("'","&#39",stripslashes($YOU_TUBE_TITLE_7))."'  name = 'YOUTUBE_LINK_TITLE_7'  >";
                echo "<input type = 'text' class = 'Record1'  value = '".$YOUTUBE_LINK_7."' name = 'YOUTUBE_LINK_7'  >";
                echo "<DIV class = 'StatusDate'>".$YOUTUBE_POST_DATE_7."</DIV>";
                echo "</DIV>";


                echo "<DIV class = 'HeismanLineAM'>";
                echo "<DIV class = 'heiyear'>8</DIV>";
                echo "<input type = 'text' class = 'SchoolDropwDown' value = '".str_replace("'","&#39",stripslashes($YOU_TUBE_TITLE_8))."'  name = 'YOUTUBE_LINK_TITLE_8'  >";
                echo "<input type = 'text' class = 'Record1'  value = '".$YOUTUBE_LINK_8."' name = 'YOUTUBE_LINK_8'  >";
                echo "<DIV class = 'StatusDate'>".$YOUTUBE_POST_DATE_8."</DIV>";
                echo "</DIV>";


                echo "<DIV class = 'HeismanLineAM'>";
                echo "<DIV class = 'heiyear'>9</DIV>";
                echo "<input type = 'text' class = 'SchoolDropwDown' value = '".str_replace("'","&#39",stripslashes($YOU_TUBE_TITLE_9))."'  name = 'YOUTUBE_LINK_TITLE_9'  >";
                echo "<input type = 'text' class = 'Record1'  value = '".$YOUTUBE_LINK_9."' name = 'YOUTUBE_LINK_9'  >";
                echo "<DIV class = 'StatusDate'>".$YOUTUBE_POST_DATE_9."</DIV>";
                echo "</DIV>";


                echo "<DIV class = 'HeismanLineAM'>";
                echo "<DIV class = 'heiyear'>10</DIV>";
                echo "<input type = 'text' class = 'SchoolDropwDown' value = '".str_replace("'","&#39",stripslashes($YOU_TUBE_TITLE_10))."'  name = 'YOUTUBE_LINK_TITLE_10'  >";
                echo "<input type = 'text' class = 'Record1'  value = '".$YOUTUBE_LINK_10."' name = 'YOUTUBE_LINK_10'  >";
                echo "<DIV class = 'StatusDate'>".$YOUTUBE_POST_DATE_10."</DIV>";
                echo "</DIV>";
                
                $queryThrowbackVideo = $db->prepare("select LINK_ORDER , LINK_TITLE , LINK , POST_DATE from front_throwback_videos; ");

                $queryThrowbackVideo->execute(); 
                
                $throwbackVideos = array();
                
                while ($row = $queryThrowbackVideo->fetch(PDO::FETCH_ASSOC))
                {  
                    $throwbackVideos['videoNumber'.$row['LINK_ORDER']]['LINK_TITLE'] = $row['LINK_TITLE'];
                    $throwbackVideos['videoNumber'.$row['LINK_ORDER']]['LINK'] = $row['LINK'];
                    $throwbackVideos['videoNumber'.$row['LINK_ORDER']]['POST_DATE'] = $row['POST_DATE'];
                }
                
                $counter = 1;
                
                echo "<DIV class = 'FrontItemHeader ML'>Throwback Videos</DIV>";
                
                while ($counter < 11)
                {
                    
                    echo "<DIV class = 'HeismanLineAM'>";
                        echo "<DIV class = 'heiyear'>".$counter."</DIV>";
                        echo "<input type = 'text' class = 'SchoolDropwDown' value = '".str_replace("'","&#39",stripslashes($throwbackVideos['videoNumber'.$counter]['LINK_TITLE']))."'  name = 'YOUTUBE_LINK_TITLE_THROWBACK".$counter."'  >";
                        echo "<input type = 'text' class = 'Record1'  value = '".$throwbackVideos['videoNumber'.$counter]['LINK']."' name = 'YOUTUBE_LINK_THROWBACK".$counter."'  >";
                        echo "<DIV class = 'StatusDate'>".$throwbackVideos['videoNumber'.$counter]['POST_DATE']."</DIV>";
                    echo "</DIV>";
                    
                    $counter++;
                }
                        

            echo "<input class = 'SubmitButton ML' type='submit' name='submit' value='Update Front Links'>";

                    echo "</FORM>";


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