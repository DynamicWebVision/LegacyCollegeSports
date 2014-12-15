/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

var active_menu = "GeneeralSectionMenu";
            
       $(document).ready(function(){
            
            $("#FootballSectionMenuFullView").hide();
            $("#FootballSectionMenuFullView").removeClass("hidden");
            
            $("#BasketballSectionMenuFullView").hide();
            $("#BasketballSectionMenuFullView").removeClass("hidden");
            
            $("#FanSitesSectionMenuFullView").hide();
            $("#FanSitesSectionMenuFullView").removeClass("hidden");
            
            $("#VideosSectionMenuFullView").hide();
            $("#VideosSectionMenuFullView").removeClass("hidden");
            
            $("#NavigationMenu").hide();
            $("#NavigationMenu").removeClass("hidden");
            
            $("#SchoolsNavigationMenu").hide();
            $("#SchoolsNavigationMenu").removeClass("hidden");
            
            $(".DataList").hide();
       });  
            
       $(document).ready(function(){
              
                $('.BMButtonNotSelected').live("click touchstart",function() {
                    
                    $("#"+active_menu+"Top").removeClass("SelectedBMTopSection");
                    $("#"+active_menu+"Bottom").removeClass("SelectedBMBottomSection");
                    $("#"+active_menu+"Top").addClass("NotSelectedBMTopSection");
                    $("#"+active_menu+"Bottom").addClass("NotSelectedBMBottomSection");
                    
                     $("#"+active_menu+"FullView").fadeOut("500");
                    
                    active_menu = this.id;
                    
                    $("#"+active_menu+"Top").removeClass("NotSelectedBMTopSection");
                    $("#"+active_menu+"Bottom").removeClass("NotSelectedBMBottomSection");
                    $("#"+active_menu+"Top").addClass("SelectedBMTopSection");
                    $("#"+active_menu+"Bottom").addClass("SelectedBMBottomSection");
                    
                    $('html, body').animate({scrollTop:0}, '500', function() {
                        $("#"+active_menu+"FullView").slideDown("400");
                    });
                    
                    
		});
            });      
            
        $(document).ready(function(){
              
                $('#GeneeralSectionMenu').live("click touchstart",function() {
                    
                    if (active_menu != "GeneeralSectionMenu")
                    {
                        $("#"+active_menu+"Top").removeClass("SelectedBMTopSection");
                        $("#"+active_menu+"Bottom").removeClass("SelectedBMBottomSection");
                        $("#"+active_menu+"Top").addClass("NotSelectedBMTopSection");
                        $("#"+active_menu+"Bottom").addClass("NotSelectedBMBottomSection");
                        
                        $("#"+active_menu+"FullView").fadeOut("500");
                        
                        active_menu = "GeneeralSectionMenu";

                        $("#"+active_menu+"Top").removeClass("NotSelectedBMTopSection");
                        $("#"+active_menu+"Bottom").removeClass("NotSelectedBMBottomSection");
                        $("#"+active_menu+"Top").addClass("SelectedBMTopSection");
                        $("#"+active_menu+"Bottom").addClass("SelectedBMBottomSection");
                        
                        $('html, body').animate({scrollTop:0}, '500', function() {
                        $("#"+active_menu+"FullView").slideDown("400");
                    });
                    }
                    
                    
                    
		});
            });     
            
        $(document).ready(function(){
              
                $('.ExpandableHeadNotActive').live("click touchstart",function() {
                    
                    var data_field = this.id;
                    
                    
                    $("#"+data_field+"Data").slideDown("500");
                    
                    $("#"+data_field).removeClass("ExpandableHeadNotActive");
                    $("#"+data_field).addClass("ExpandableHeadActive");
                    
		});
            }); 
            
        $(document).ready(function(){
              
                $('.ExpandableHeadActive').live("click touchstart",function() {
                    
                    var data_field = this.id;
                    
                    
                    $("#"+data_field+"Data").slideUp("500");
                    
                    $("#"+data_field).removeClass("ExpandableHeadActive");
                    $("#"+data_field).addClass("ExpandableHeadNotActive");
                    
		});
            }); 
            
        $(document).ready(function(){
              
                $('#MenuIcon').live("click touchstart",function() {
                    
                    $("#MainContent").hide();
                    $("#NavigationMenu").fadeIn("500");
                    
                    
		});
            }); 
            
        $(document).ready(function(){
              
                $('.NavBackButton').live("click touchstart",function() {
                    
                    $("#MainContent").delay("800").fadeIn("500");
                    $("#NavigationMenu").hide();
                    
                    
		});
            }); 
            
        
        $(document).ready(function(){
              
                $('.NavigationLine').live("click touchstart",function() {
                    
                    var new_loc = this.id;
                    
                    if (new_loc == "Schools")
                        {
                            $("#SchoolsNavigationMenu").fadeIn("500");
                        }
                    else
                        {
                            window.location=new_loc+".php";
                        }
                    
                    
		});
            });
            
            
        $(document).ready(function(){
              
                $('.NavigationSchoolLine').live("click touchstart",function() {
                    
                    var s_key = this.id;
                    
                    
                            window.location="MobileSchoolProfile.php?S_KEY="+s_key;
                    
                    
                    
		});
            });
            
         $(document).ready(function(){
              
                $('.NavBackButtonSchools').live("click touchstart",function() {
                    
                            $("#SchoolsNavigationMenu").fadeOut("500");
                    
                    
		});
            });
            
            
            $(document).ready(function(){
              
                $('.YouTubeImage').live("click touchstart",function() {
                    
                            var yt_key = this.id;
                            
                            window.location="http://www.youtube.com/embed/"+yt_key;
                    
                    
		});
            });