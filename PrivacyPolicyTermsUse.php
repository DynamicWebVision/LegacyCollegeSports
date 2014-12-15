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
    <title>Pivacy Policy & Terms of Use</title>
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
                    <DIV id ="PageNameHead">Terms of Use</DIV>
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
    <DIV id ="MainContentContain"  class ="MainContentContainClass" >
        <div id ="borderleft"></div>
        <div id ="borderright"></div>
        
        <DIV id ="MainContent">
            <DIV class ="ContentPush"></DIV>
            <H1 id ="PageHead">Privacy Policy and Terms of Use</H1>
            
            <BR><BR>Welcome to Usportsdirect.com, an online service intended for fans of college athletics.  These Terms of Use explain the terms by which you may use Usportsdirect.com and other online services we may provide.  Please read this agreement carefully before using Usportsdirect.com. By accessing or using our service, you agree that you have read, understood, and agree you are entirely bound by this agreement, and to the collection and use of your information as set forth in our privacy policy. This agreement applies to all who visit our site, and we thank you for any time that you spend here.  
            <BR><BR>THIS AGREEMENT CONTAINS A MANDATORY ARBITRATION OF DISPUTES PROVISION THAT REQUIRES THE USE OF ARBITRATION ON AN INDIVIDUAL BASIS TO RESOLVE DISPUTES, RATHER THAN JURY TRIALS OR CLASS ACTIONS.

            <BR><BR>Usportsdirect.com reserves the right, in its sole discretion, to modify or replace this agreement at any time we so choose.

            <BR><BR><SPAN class = 'Bold'>1. USE OF OUR SERVICE</SPAN>  
                <BR><BR><SPAN class = 'Bold'>a. Eligibility. </SPAN>  Out of respect for the college athletics community and those who frequent our site, the service is not available to any users previously removed from our page. This service is provided for your personal, noncommercial use only. You may not use the service for any commercial purposes.
                <BR><BR><SPAN class = 'Bold'>b. Interaction. </SPAN>You are solely responsible for your interactions with other users. We reserve the right, but have no obligation, to monitor disputes between you and other users. We claim no liability for your interactions with other users, or for any user’s action or inaction. Please be good to one another. 
                <BR><BR><SPAN class = 'Bold'>c. Changes to the Service. </SPAN> To provide users with new services, we may, without prior notice, change the service; stop providing the service or features of the service, to you or to users generally; or create usage limits for the service. 

                <BR><BR><SPAN class = 'Bold'>2. ACCEPTABLE USE OF THE BLEACHER REPORT SERVICE </SPAN>
                Usportsdirect.com provides users with a platform to follow and view content regardless of your team’s success, and/or your physical location.  By following the rules outlined in our Terms of Use and Privacy Policy pages – any fan across any spectrum is welcome to, and welcome to criticize, share content, or offer feedback regarding our service.  

                <BR><BR><SPAN class = 'Bold'>3. SHARING YOUR CONTENT </SPAN>
                <BR><BR><SPAN class = 'Bold'>a. Your content. </SPAN>Usportsdirect.com allows anyone to post content on the site’s literature or social media accounts, including comments, photos, blog posts, messages, blog URLs, and other materials. Any content a user submits, posts, or makes available on our site, including all Intellectual Property Rights is referred to as “User Content.”  You retain ownership of such content. 
                <BR><BR><SPAN class = 'Bold'>b. How Usportsdirect.com and Others Can Use Your Content. </SPAN>You own all of the user content you post or publish at Usportsdirect.com. In accordance with your post, you grant us a non-exclusive, continuous, irrevocable, royalty-free, transferable, sublicensable, license to use, reproduce, sell, offer to sell, translate, modify, publicly perform, publicly display, distribute, and make derivative works of your User Content on the service and in all forms and media now or hereafter known for the purposes of operating and providing the service to you and our users. Nothing in this Agreement shall restrict Usportsdirect.com’s rights under separate licenses to posted content. 
                <BR><BR><SPAN class = 'Bold'>c. Your responsibility for your content. </SPAN> By uploading, posting, submitting or otherwise disclosing or distributing User Content, you represent and warrant that you own all rights in your User Content and that any User Content you post does not and will not violate third-party rights of any kind, including without limitation any intellectual property rights, or rights of publicity or privacy. Usportsdirect.com reserves the right, but is not obligated, to reject and/or remove any User Content that we believe, in our sole discretion, violates these provisions. We take no responsibility and assume no liability for any User Content that you or any other users or third parties post or send over the service. You understand and agree that any loss or damage of any kind that occurs as a result of the use of any User Content that you send, upload, download, stream, post, transmit, display, or otherwise make available or access through your use of the service, is solely your responsibility, and you agree that we are only acting as a passive conduit for your online distribution and publication of your User Content. We are not responsible for any public display or misuse of your User Content. You understand and acknowledge that you may be exposed to User Content that is inaccurate, offensive, or indecent, and you agree that Usportsdirect.com shall not be liable for any damages you allege to incur as a result of such User Content.
                <BR><BR><SPAN class = 'Bold'>d. Definition of Intellectual Property Rights. </SPAN> For the purposes of this Agreement, “Intellectual Property Rights” means all patent rights, copyright rights, mask work rights, moral rights, rights of publicity, trademark, trade dress and service mark rights, goodwill, trade secret rights and other intellectual property rights as may now exist or hereafter come into existence, and all applications therefore and registrations, renewals and extensions thereof, under the laws of any state, country, territory or other jurisdiction.
                <BR><BR><SPAN class = 'Bold'>4. OUR CONTENT</SPAN>
                <BR><BR><SPAN class = 'Bold'>a. Our license to you. </SPAN> Subject to the terms and conditions of this agreement, Usportsdirect.com provides you with a license to use the service for your personal, noncommercial use only and as expressly permitted by the features of the site. Bleacher Report may terminate this license at any time for any reason or no reason.
                <BR><BR><SPAN class = 'Bold'>b. Feedback you provide. </SPAN>We value input from guests, and are interested in learning ways we can make Usportsdirect.com more valuable. You may choose to submit comments, ideas or feedback about the service, including without limitation about how to improve the service or our product. By submitting any feedback, you agree that your disclosure is gratuitous, unsolicited and without restriction and will not place Usportsdirect.com under any fiduciary or other obligation, and that we are free to use comments without any additional compensation to you, and/or to disclose the gesture on a non-confidential basis or otherwise to anyone. You further acknowledge that, by acceptance of your submission, we do not waive any rights to use similar or related feedback previously known to Usportsdirect.com, or developed by its employees, or obtained from sources other than you.
                <BR><BR><SPAN class = 'Bold'>5. BLEACHER REPORT'S COPYRIGHT POLICY</SPAN>
                Bleacher Report requires that Users of the service respect the copyright and other intellectual property rights of all third parties. In accordance with the Digital Millennium Copyright Act (“DMCA”), Usportsdirect.com will terminate, where warranted as determined in Bleacher Report’s sole discretion, Users whom Bleacher Report believes are intentional and/or repeat infringers.
                If you believe that your copyright in any material has been infringed on the site, please send a "DMCA Notice" described below to our contact information. For your request to be considered valid you do not have to submit any formatted questions in accordance with the law or copyright act offering various forms of proof – rather – we respect your wish to privacy and preference, and will act accordingly per your request.   
                <BR><BR><SPAN class = 'Bold'>6. PRIVACY</SPAN>
                We care about the privacy of our Users. You understand that by using Usportsdirect.com you consent to the collection, use and disclosure of your personally identifiable information and aggregate data as set forth in our Privacy Policy, and to have your personally identifiable information collected, used, transferred to and processed in the United States. We cannot guarantee that unauthorized third parties will never be able to defeat our security measures. You acknowledge that you provide your information at your own risk.
                <BR><BR><SPAN class = 'Bold'>8. INDEMNITY</SPAN>
                You agree to defend, indemnify and hold harmless Usportsdirect.com, its parents, subsidiaries, agents, affiliates, customers, vendors, officers and employees from and against any and all claims, damages, obligations, losses, liabilities, costs or debt, and expenses (including reasonable attorney’s fees and cost) arising from: 1. your use of and access to the Service; 2. your violation of any term of this agreement; 3. your violation of any third-party right, including without limitation any right of privacy or intellectual property rights; 4. your violation of any applicable law, rule, or regulation; 5. any claim or damages that arise as a result of any of your User Content.


                <BR><BR><SPAN class = 'Bold'>9. NO WARRANTY</SPAN>
                THE SERVICE, INCLUDING ALL CONTENT, IS PROVIDED ON AN "AS IS" AND “AS AVAILABLE” BASIS. USE OF THE SERVICE IS AT YOUR OWN RISK. THE SERVICE IS PROVIDED WITHOUT WARRANTIES OF ANY KIND, EITHER EXPRESS OR IMPLIED, INCLUDING, WITHOUT LIMITATION, IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE OR NON-INFRINGEMENT. WITHOUT LIMITING THE FOREGOING, Usportsdirect.com, DOES NOT WARRANT THE CONTENT ON THE SERVICE IS ACCURATE, RELIABLE OR CORRECT; THAT THE SERVICE WILL MEET YOUR REQUIREMENTS; THAT THE SERVICE WILL BE AVAILABLE AT ANY PARTICULAR TIME OR LOCATION, UNINTERRUPTED OR SECURE; THAT ANY DEFECTS OR ERRORS WILL BE CORRECTED; OR THAT THE SERVICE IS FREE OF VIRUSES OR OTHER HARMFUL COMPONENTS. ANY CONTENT DOWNLOADED OR OTHERWISE OBTAINED THROUGH THE USE OF THE SERVICE IS DOWNLOADED AT YOUR OWN RISK AND YOU WILL BE SOLELY RESPONSIBLE FOR ANY DAMAGE TO YOUR COMPUTER SYSTEM OR LOSS OF DATA, INCLUDING USER CONTENT, THAT RESULTS FROM SUCH DOWNLOAD OR YOUR USE OF THE SERVICE.
                Usportsdirect.com DOES NOT WARRANT, ENDORSE, GUARANTEE, OR ASSUME RESPONSIBILITY FOR ANY PRODUCT OR SERVICE ADVERTISED OR OFFERED BY A THIRD PARTY THROUGH THE BLEACHER REPORT SERVICE OR ANY HYPERLINKED WEBSITE OR SERVICE, OR FEATURED IN ANY BANNER OR OTHER ADVERTISING, AND BLEACHER REPORT WILL NOT BE A PARTY TO OR IN ANY WAY MONITOR ANY TRANSACTION BETWEEN YOU AND THIRD-PARTY PROVIDERS OF PRODUCTS OR SERVICES.
                <BR><BR><SPAN class = 'Bold'>10. THIRD-PARTY LINKS, SITES AND SERVICES</SPAN>
                The Service may contain links to other websites, advertisers, services, special offers, or other events or activities that are not owned or controlled by Usportsdirect.com. Because we have no control over such sites and resources not offered directly, you acknowledge and agree that Usportsdirect.com is not responsible for the availability of such external sites or resources, and does not endorse and is not responsible or liable for any content, advertising, products or other materials on or available from such sites or resources. You further acknowledge and agree that Usportsdirect.com shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with use of or reliance on any such content, goods or services available on or through any such site or resource. You understand that these Terms of Service and our Privacy Policy do not apply to your use of such sites. 
                <BR><BR><SPAN class = 'Bold'>11. LIMITATION OF LIABILITY</SPAN>
                TO THE MAXIMUM EXTENT PERMITTED BY APPLICABLE LAW, IN NO EVENT SHALL Usportsdirect.com OR ANYONE DIRECTLY INVOLVED BE LIABLE UNDER CONTRACT, TORT, STRICT LIABILITY, NEGLIGENCE OR OTHER LEGAL THEORY (I) WITH RESPECT TO THE SERVICE OR ANY CONTENT THEREON FOR ANY LOST PROFITS OR SPECIAL, INDIRECT, INCIDENTAL, PUNITIVE, OR CONSEQUENTIAL DAMAGES OF ANY KIND WHATSOEVER, SUBSTITUTE GOODS OR SERVICES, OR FOR ANY DIRECT DAMAGES -EVEN IF Usportsdirect.com HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGE. UNDER NO CIRCUMSTANCES WILL WE BE RESPONSIBLE FOR ANY DAMAGE, LOSS OR INJURY RESULTING FROM HACKING, TAMPERING OR OTHER UNAUTHORIZED ACCESS OR USE OF THE SERVICE OR YOUR VISIT TO OUR SITE- OR THE INFORMATION CONTAINED THEREIN. THE FOREGOING LIMITATION OF LIABILITY SHALL APPLY TO THE FULLEST EXTENT PERMITTED BY LAW IN THE APPLICABLE JURISDICTION.
                The service is controlled from its facilities in the United States. Usportsdirect.com makes no representations that the site is appropriate or available for use in other locations. Those who access or use the site from other jurisdictions do so at their own volition and are responsible for compliance with all applicable United States and local laws and regulations, including but not limited to export and import regulations. You may not use the Service if you are a resident of a country embargoed by the United States, or are a foreign person or entity blocked or denied by the United States government. Unless otherwise explicitly stated, all materials found on the service are solely directed to individuals, companies, or other entities located in the United States.

                <BR><BR><SPAN class = 'Bold'>12. TERMINATION OF YOUR ACCOUNT AND THE SERVICE</SPAN>
                <BR><BR >Usportsdirect.com may terminate or suspend your service in whole or in part and/or your, without prior notice or liability, for any reason or for no reason, including without limitation, if you breach any of the terms or conditions of this agreement. Upon termination, your right to use the service will immediately cease.
                <BR><BR><SPAN class = 'Bold'>13. GOVERNING LAW AND ARBITRATION</SPAN>
                <BR><BR><SPAN class = 'Bold'>a. Arbitration. </SPAN> For any dispute with Usportsdirect.com, you agree to first contact us at Usportsdirect@gmail.com and attempt to resolve the dispute with us informally. In the unlikely event that Usportsdirect.com has not been able to resolve a dispute it has with you after attempting to do so informally, we each agree to resolve any claim, dispute, or controversy (excluding any Usportsdirect.com claims for injunctive or other equitable relief) arising out of or in connection with or relating to this agreement, or the breach or alleged breach thereof by binding arbitration by the American Arbitration Association (“AAA”) under the Commercial Arbitration Rules and Supplementary Procedures for Consumer Related Disputes then in effect for the AAA, except as provided herein. Unless we conclude otherwise, the arbitration will be conducted in the county where you reside. Each party will be responsible for paying any AAA filing, administrative and arbitrator fees in accordance with AAA rules. The award rendered by the arbitrator shall include costs of arbitration, reasonable attorneys’ fees and reasonable costs for expert and other witnesses, and any judgment on the award rendered by the arbitrator may be entered in any court of competent jurisdiction. Nothing in this Section shall prevent either party from seeking injunctive or other equitable relief from the courts as necessary to prevent the actual or threatened infringement, misappropriation, or violation of that party’s data security, Intellectual Property Rights, or other proprietary rights. ALL CLAIMS MUST BE BROUGHT IN THE PARTIES’ INDIVIDUAL CAPACITY, AND NOT AS A PLAINTIFF OR CLASS MEMBER IN ANY PURPORTED CLASS OR REPRESENTATIVE PROCEEDING, AND, UNLESS WE AGREE OTHERWISE, THE ARBITRATOR MAY NOT CONSOLIDATE MORE THAN ONE PERSON’S CLAIMS. YOU AGREE THAT, BY ENTERING INTO THIS AGREEMENT, YOU AND Usportsdirect.com ARE EACH WAIVING THE RIGHT TO A TRIAL BY JURY OR TO PARTICIPATE IN A CLASS ACTION. 


                <BR><BR>Welcome to Usportsdirect.com, an online service intended for fans of college athletics.  These Terms of Use explain the terms by which you may use Usportsdirect.com and other online services we may provide.  Please read this agreement carefully before using Usportsdirect.com. By accessing or using our service, you agree that you have read, understood, and agree you are entirely bound by this agreement, and to the collection and use of your information as set forth in our privacy policy. This agreement applies to all who visit our site, and we thank you for any time that you spend here.  

                <BR><BR><SPAN class = 'Bold'>Privacy Policy</SPAN>
                <BR><BR>Welcome to Usportsdirect.com, an online service intended for fans of college athletics. Our Privacy Policy explains how we collect, use, disclose, and protect information that applies to our site, and your choices about the collection and use of your information.
                <BR><BR><SPAN class = 'Bold'>1. HOW WE COLLECT AND USE INFORMATION</SPAN>
                <BR><BR>We collect the following types of information about you:
                <BR><BR><SPAN class = 'Bold'>a. Access to any blog, site, social media account, or account revealing offered information by the site visitor</SPAN>
                <BR><BR><SPAN class = 'Bold'>b. Information from third parties: </SPAN>We may receive information about you from third parties. If you access or follow our website or service through a third-party connection (Twitter or Facebook, by “following,” “liking,” or adding any future applications, linking your account to our service in any way, etc., that third party may pass certain information about your use of its service to Usportsdirect.com. This information could include, but is not limited to, the user ID associated with your account (for example, your Facebook UID), an access token necessary to access that service, any information that you have permitted the third party to share with us, and any information you have made public in connection with that service, including your public profile picture, news feed, posts on your wall (including your friends’ posts on your wall), friends list, etc. You should always review, and if necessary, adjust your privacy settings on third-party websites and services before linking to our site. You may also unlink your third party account from the service by adjusting your settings on the third party service. If you unlink your third party account, we will remove the information collected about you in connection with that service.
                <BR><BR><SPAN class = 'Bold'>c. Analytics information. </SPAN>We may directly collect or use third-party analytics tools to help us measure traffic and usage trends for the service. These tools collect information sent by your browser or mobile device as part of a web page request, including the web pages you visit, your browser add-ons, your browser’s width and height, and other information that assists us in improving the service. We collect and use this analytics information in aggregate form such that it cannot reasonably be manipulated to identify any particular individual user.
                <BR><BR><SPAN class = 'Bold'>d. Log file information: </SPAN>Log file information is automatically reported by your browser each time you access a web page. When you use our service, our servers automatically record certain log file information. These server logs may include anonymous information such as your web request, Internet Protocol (“IP”) address, browser type, referring / exit pages and URLs, number of clicks and how you interact with links on the Service, domain names, landing pages, pages viewed, and other such information.
                <BR><BR><SPAN class = 'Bold'>e. Clear gifs/web beacons information: </SPAN> When you use the Service, we may employ clear gifs (also known as web beacons) which are used to anonymously track the online usage patterns of our Users. In addition, we may also use clear gifs in HTML-based emails sent to our users to track which emails are opened and which links are clicked by recipients. The information is allows for more accurate reporting and improvement of the Service.
                <BR><BR><SPAN class = 'Bold'>f. Commercial and marketing communications: </SPAN> We use the information we collect or receive to communicate directly with you. We will not send you marketing communications using SMS text messages or email unless otherwise requested. 
                <BR><BR><SPAN class = 'Bold'>2. SHARING OF YOUR INFORMATION</SPAN>
                <BR><BR>We will not rent or sell your information into third parties outside of Usportsdirect.com, unless otherwise requested or in one of the following situations mentioned below:
                <BR><BR><SPAN class = 'Bold'>a. Who we may share your information with: </SPAN> We may share your information with future third-party business partners for the purpose of providing the service to you. Those business partners will be given limited access to your information as is reasonably necessary to deliver the service, and we will require that such third parties comply with this Privacy Policy.
                <BR><BR><SPAN class = 'Bold'>b. Who you may choose to share your User Content with: </SPAN> Any information or content that you voluntarily disclose for posting to the Service, such as User Content, becomes available to the public, as controlled by any available privacy settings.  Any User Content that you voluntarily make public is searchable by other users, including your full name and blog URL (should you provide this optional information). In addition, Usportsdirect.com allows for the RSS syndication of all of its public content within the Service, and may allow third parties to access such information via a programming interface (“API”). If you remove information that you posted to the service, copies may remain viewable in cached and archived pages of the service, or if other users have copied or saved that information.
                <BR><BR><SPAN class = 'Bold'>c. What happens in the event of a change of control: </SPAN> We may buy or sell/divest/transfer our company (including any shares in the company), or any combination of its products, services, assets and/or businesses. Your information such as customer names and email addresses, User Content and other user information related to the service may be among the items sold or otherwise transferred in these types of transactions. We may also sell, assign or otherwise transfer such information in the course of corporate divestitures, mergers, acquisitions, bankruptcies, dissolutions, reorganizations, liquidations, similar transactions or proceedings involving all or a portion of the company.
                <BR><BR><SPAN class = 'Bold'>d. Instances where we are required to share your information: </SPAN>Usportsdirect.com will disclose your information where required to do so by law or subpoena or if we reasonably believe that such action is necessary to (a) comply with the law and the reasonable requests of law enforcement; (b) to enforce our Terms of Use or to protect the security or integrity of our Service; and/or (c) to exercise or protect the rights, property, or personal safety of Usportsdirect.com, our users or others.
                <BR><BR><SPAN class = 'Bold'>e. Sharing certain service type information we collect about you: </SPAN>We may share certain service type information, including information obtained through tools such as cookies, log files, device identifiers, location data and clear gifs (such as anonymous usage data, referring/exit pages and URLs, platform types, number of clicks, etc.) with our third-party business partners for the purposes described in the section above on ><SPAN class = 'Bold'> “How We Collect and Use Information.” </SPAN> We may also aggregate or otherwise strip data of all personally identifying characteristics and may share that aggregated, anonymized data with third parties.
                <BR><BR><SPAN class = 'Bold'>f. Ads on Usportsdirect.com: </SPAN>We may also share certain information such as your location, browser and cookie data and other data relating to your use of our service with our business partners to deliver advertisements (“ads”) that may be of interest to you. Bleacher Report may allow third-party ad servers or ad networks to serve advertisements on our site. These third-party ad servers or ad networks use technology to send, directly to your browser or mobile device, the ads and ad links that appear on the site, and will automatically receive your IP address when they do so. They may also use other technologies (such as cookies, JavaScript, device identifiers, location data, and clear gifs, see above) to compile information about your browser’s or device’s visits and usage patterns on the site, and to measure the effectiveness of their ads and to personalize the advertising content. Usportsdirect.com does not sell, rent, or share the information we collect directly from you or about you from third parties with these third-party ad servers or ad networks for such parties’ own marketing purposes, unless you choose in advance to have your information shared for this purpose. Additionally, you may wish to opt-out of receiving cookies by adjusting your browser settings to refuse cookies or to alert you when a cookie is placed. 
                Please note that an advertiser may ask Usportsdirect.com to show an ad to a certain audience of users (e.g., demographic, fan association, or other interests). In that situation, Usportsdirect.com determines the target audience and will serve the advertising to that audience and only provides anonymous aggregated data to the advertiser. If you respond to such an ad, the advertiser or ad server may conclude that you fit the description of the audience they are trying to reach. 
                The Usportsdirect.com Privacy Policy does not apply to, and we cannot control the activities of, third-party advertisers. Please consult the respective privacy policies of such advertisers or contact such advertisers for more information.
                <BR><BR><SPAN class = 'Bold'>3. HOW WE STORE AND PROTECT YOUR INFORMATION</SPAN>
                <BR><BR><SPAN class = 'Bold'>a. Storage and Processing: </SPAN>Your information collected through the site may be stored and processed in the United States - including personal information, to affiliated entities, or to other third parties across borders and from your country or jurisdiction to other countries or jurisdictions around the world. If you are located in the European Union or other regions with laws governing data collection and use that may differ from U.S. law, please note that we may transfer information, including personal information, to a country and jurisdiction that does not have the same data protection laws as your jurisdiction, and you consent to the transfer of information to the U.S. or any other country in which we are frequented on a service provider. 
                <BR><BR><SPAN class = 'Bold'>b. Keeping your information safe: </SPAN>Usportsdirect.com cares about the security of your information, and will safeguards the integrity and security of your information in the rare cases it is compiled. Usportsdirect.com is not responsible for the functionality or security measures of any third party – including any social networks or message boards.  
                <BR><BR><SPAN class = 'Bold'>c. Compromise of information: </SPAN>In the event that any information under our control is compromised as a result of a breach of security, Usportsdirect.com will take reasonable steps to investigate the situation and where appropriate, notify those individuals whose information may have been compromised and take other steps, in accordance with any applicable laws and regulations.
                <BR><BR><SPAN class = 'Bold'>4. YOUR CHOICES ABOUT YOUR INFORMATION</SPAN>
                <BR><BR><SPAN class = 'Bold'>a. </SPAN> If you have any questions about reviewing or modifying any information, or have questions or concerns across any spectrum, you can contact us directly at Usportsdirect@gmail.com. 
                <BR><BR><SPAN class = 'Bold'>b. Opting out of collection of your information for Tracking / Advertising: </SPAN>Please refer to your browser’s technical information for instructions on how to delete and disable cookies, and other tracking/recording tools. Depending on your type of device, it may not be possible to delete or disable tracking mechanisms on your mobile device. Note that disabling cookies and/or other tracking tools prevents Usportsdirect.com from tracking your browser’s activities in relation to the site, and for use in targeted advertising activities by third parties. However, doing so may potentially disable particular services offered through our site. If you have any questions about opting out of the collection of cookies and other tracking/recording tools, you can contact us directly at Usportsdirect@gmail.com.
                <BR><BR><SPAN class = 'Bold'>5. CHILDREN’S PRIVACY</SPAN>
                Usportsdirect.com does not knowingly collect or solicit any information from anyone under the age of 13 or knowingly advertise to anyone of such age. The Service and its content are not directed at children under the age of 13. If you are under 13, please do not send any information about yourself to us, including your name, address, telephone number, or email address. In the event that we learn that we have collected personal information from a child under age 13 without verification of parental consent, we will delete that information as quickly as possible. If you believe that we might have any information from or about a child under 13, please contact us at Usportsdirect@gmail.com 
                <BR><BR><SPAN class = 'Bold'>6. LINKS TO OTHER WEB SITES AND SERVICES</SPAN>
                We are not responsible for the practices employed by websites or services linked to or from our site, including the information or content contained therein. Please remember that when you use a link to go from the Service to another website, our Privacy Policy does not apply to third-party websites or services. Your browsing and interaction on any third-party website or service, including those that have a link or advertisement on our website, are subject to that third party’s own rules and policies. In addition, you agree that we are not responsible and we do not control over any third-parties that you authorize to access your User Content. If you are using a third-party website or service (like Facebook or Twitter) and you allow such a third-party access to you User Content you do so at your own risk. This Privacy Policy does not apply to information we collect by other means (including offline) or from other sources other than through the Service. 
                <BR><BR><SPAN class = 'Bold'>7. HOW TO CONTACT US</SPAN>
                <BR><BR>If you have any questions about this Privacy Policy or the Service, please contact us at Usportsdirect@gmail.com. 
                <BR><BR><SPAN class = 'Bold'>8. CHANGES TO OUR PRIVACY POLICY</SPAN>
                <BR><BR>Usportsdirect.com may modify or update this Privacy Policy occasionally in accordance with changes in our business and practices, and so you should review this page periodically if faced with any varying concern. 
                <BR><BR>
            
            
            
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