<?
ob_start(); 
session_start();
?>
<!DOCTYPE html>
<?
    require_once('Functions.php');
    Get_DB_Connection();
    
    
 
?>
<!DOCTYPE html>
<head>
<link rel="apple-touch-icon" href="/SmallLogo.png"/>
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
<script src='http://connect.facebook.net/en_US/all.js'></script>

<link rel="apple-touch-startup-image" href="images/splash/splash-screen.PNG" media="screen and (max-device-width: 320px)" /> 
<link rel="apple-touch-startup-image" href="images/splash/splash-screen@2x.png" media="(max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2)" /> 
<meta name="apple-mobile-web-app-capable" content="yes"/>
<title>U SPORTS DIRECT</title>

<link href="Mobile_CSS/MobileMain.css" rel="stylesheet" type="text/css">
<link href="Mobile_CSS/MobileTVSchedule.css" rel="stylesheet" type="text/css">

 <link href='http://fonts.googleapis.com/css?family=Coda+Caption:800' rel='stylesheet' type='text/css'>
    
    <script type="text/javascript" src="JQuery.js"></script>
    <script type="text/javascript" src="MobileJavascript/SchoolProfile.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>
</head>

<body > 

<DIV id ="Header" class ="HeadColor">
    
    <DIV id ="logo"><span id="ULogo">C</span><span id ="SportsDirectLogo"> SPORTS DIRECT</span></DIV>
    
    <DIV id ="MenuIcon">
        <DIV id ="MenuLine1"></DIV>
        <DIV id ="MenuLine2"></DIV>
        <DIV id ="MenuLine3"></DIV>
    </DIV> 
    
</DIV>
    
<DIV id ="NavigationMenu" class ="hidden">
    <DIV id ="NavigationHead">Site Navigation</DIV>
    
    <DIV id ="MobileMain" class="NavigationLine"><a class ="NavLink" href ="MobileMain.php">Main Page</a></DIV>
    
    <DIV id ="Schools" class="NavigationLine"><span class ="NavLink" >Schools</span></DIV>
    
    <DIV id ="MobileHeisman" class="NavigationLine"><a class ="NavLink" href ="MobileHeisman.php">Heisman Winners</a></DIV>
    
    <DIV id ="MobileTVSchedule" class="NavigationLine"><a class ="NavLink" href ="MobileTVSchedule.php">TV Schedule</a></DIV>
    
    <DIV class ="NavBottomBorder"></DIV>
    
    <DIV class ="NavBackButtonContain">
        <DIV class ="NavBackButton">Back</DIV>
    </DIV>
    
</DIV>
    
<DIV id ="SchoolsNavigationMenu" class ="hidden">
    <DIV id ="NavigationHead">School Pages</DIV>
    
    <DIV class ="Scroller"></DIV>
    
     <DIV class ="ScrollText">
        
        <DIV class ="UpArrowScroll">&#8593;</DIV>
        
        <DIV class ="DownArrowScroll">&#8595;</DIV>
        
    </DIV>
    
    <?
    
    $QUERY_CONFERENCE = $db->prepare(" select * from decode_conference order by CONFERENCE_NAME ");

    $QUERY_CONFERENCE->execute();



    while ($row = $QUERY_CONFERENCE->fetch(PDO::FETCH_ASSOC))
    {
        
        echo "<DIV class = 'ConferenceHead'>".$row['CONFERENCE_NAME']."</DIV>";

        $CONFERENCE_CODE = $row['CONFERENCE_CODE'];

        $QUERY_TEAM = $db->prepare(" select schools.S_NAME as SCHOOL, schools.S_KEY from schools
        where schools.CONFERENCE = :conference_code 
        order by schools.S_NAME; ");

        $QUERY_TEAM->bindValue(':conference_code', $CONFERENCE_CODE);

        $QUERY_TEAM->execute();

        while ($row_school = $QUERY_TEAM->fetch(PDO::FETCH_ASSOC))
        {

            echo "<DIV id = '".$row_school['S_KEY']."' class = 'NavigationSchoolLine'><a class = 'NavLink' href = 'MobileSchoolProfile.php?S_KEY=".$row_school['S_KEY']."'>".$row_school['SCHOOL']."</a></DIV>";

        }

        echo "<DIV class ='NavBottomBorder'></DIV>";
    }
    
    ?>
    
    <DIV class ="NavBottomBorder"></DIV>
    
    <DIV class ="NavBackButtonSchoolsFixed">
        <DIV class ="NavBackButtonSchools">Back</DIV>
    </DIV>
    
</DIV>
    

    
    <DIV id ="MainContent">
    
    <DIV class ="ContentPushMain"></DIV>
    
    <H1 class ="PageHead">Week 9 Recap</H1>
    
    <H2 class ="ArticleSectionHead">Oregon and Florida State Race for 2nd</H2>
            
    <p class ="ArticleText">Despite an early struggle, Oregon managed to match Florida State at remaining unbeaten on the year, and remaining in the hunt for a place in the BCS Championship game.  <BR><BR>
    If you just saw the score on Sunday (42-14), you might assume that business was as usual in Eugene on Saturday.  You’d be missing that it was a halftime score of 14-14, and that we were given a glimpse into one of the Duck’s potential vulnerabilities… they can be beaten up.  <BR><BR>
    The finesse offense eventually seized control, putting up 21 points in the fourth quarter to seal the game; however, in the first half the Bruins defense played physical and it clearly had an effect on Mariota and the Duck’s offense in the first half.  The young Bruins defense was deceptively fast, but still not might be as talented as an Alabama or SEC style defense they would face in a championship game.  <BR><BR>
    Equally as important, a weathered SEC defense won’t be worn down in the fourth quarter like the young UCLA defense did.  <BR><BR>
    Nonetheless, with UCLA coming into the week ranked at 12, it’s no surprise that Oregon was able to jump Florida State in the new BCS rankings that came out on Sunday.  <BR><BR>
    Florida State thumped an NC State team still looking for their first ACC win of the year, and at one point was up 35-0 … in the first quarter.  <BR><BR>
    Jameis Winston, Florida State’s standout freshmen quarterback, finished with three touchdowns, 292 yards, and a quarterback rating of 96.  <BR><BR>
    With both teams hoping to finish out with undefeated records, each of their next games are shaping up to be big ones with regard to their final ranking in the BCS system.  Next week on a Thursday night ESPN game Oregon travels to Palo Alto to take on a fifth ranked Stanford team.  After that, Utah, @ Arizona, and Oregon State are all that remains on the Duck’s schedule. <BR><BR>
    Saturday, Florida State hosts seventh ranked Miami, with only @ Wake Forest, Syracuse, Idaho, and @ Florida remaining on the schedule after this week. <BR><BR></p>

    <H2 class ="ArticleSectionHead">Alabama is Freakishly Good</H2> 

    <p class ="ArticleText">This week’s matchup with Tennessee was intriguing for most college football fans.  While very few would have expected the Vols to deal Alabama their first loss, most would coincide that it would have been an interesting game… at least for a half.  <BR><BR>
    In the two previous weeks Tennessee lost a heart breaker by a field goal in overtime to an unbeatable looking Georgia squad, and last week pulled off a 23-21 upset over a solid one-loss South Carolina team.  <BR><BR>
    It couldn’t have been more different this week. <BR><BR>
    Alabama led 21-0 at the end of the first quarter, and 35-0 at the end of the first half.  AJ McCarron finished with 275 yards and two touchdowns, while Kenyan Drake and T.J. Yeldon added 89 and 72 yards of rushing offense.  <BR><BR></p>

    <H2 class ="ArticleSectionHead">Baylor Moves Up to 5 in Newest BCS Rankings</H2> 

    <p class ="ArticleText">Baylor has lit up the scoreboard every time they’ve taken the field this year.  While many expected them to taper off following the end of the RGIII/ Terrence Williams era, the opposite has been the case.  <BR><BR>
    The ground Baylor has gained in the last ten years is remarkable.  In 2003 Baylor finished 3-9, and 1-7 in the Big 12.  That year they suffered losses of 52-14 (UNT), 73-10 (A&M), 56-0 (UT), 38-10 (K-State) and 62-14 (Texas Tech).  <BR><BR>
    This year Baylor has wins of 73-42 (WVU), 71-7 (ISU), 59-14 (KU) and a combined score of 209-23 in their first three games against non BCS opponents.  <BR><BR>
    Baylor is as high as fifth in the newest BCS rankings put out on Sunday.  With most trying part of their schedule still remaining, Baylor will look to remain atop the Big 12 with OU and Tech coming to Waco in the next three weeks.  Their final three games are @OSU, @ TCU, and UT.</p>  

    
    
    </DIV>
</body>


</html>
