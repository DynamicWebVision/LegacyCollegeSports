/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

var active_menu = "GeneralSectionMenu";
            
       $(document).ready(function(){
            
            $("#VideosSectionMenuFullView").hide();
            $("#VideosSectionMenuFullView").removeClass("hidden");
            
            $("#TwitterSectionMenuFullView").hide();
            $("#TwitterSectionMenuFullView").removeClass("hidden");
            
            $("#ThrowbackSectionMenuFullView").hide();
            $("#ThrowbackSectionMenuFullView").removeClass("hidden");
            
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
              
                $('#GeneralSectionMenu').live("click touchstart",function() {
                    
                    if (active_menu != "GeneralSectionMenu")
                    {
                        $("#"+active_menu+"Top").removeClass("SelectedBMTopSection");
                        $("#"+active_menu+"Bottom").removeClass("SelectedBMBottomSection");
                        $("#"+active_menu+"Top").addClass("NotSelectedBMTopSection");
                        $("#"+active_menu+"Bottom").addClass("NotSelectedBMBottomSection");
                        
                        $("#"+active_menu+"FullView").fadeOut("500");
                        
                        active_menu = "GeneralSectionMenu";

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
              
                $('.YoutubeImage').live("click touchstart",function() {
                    
                            var yt_key = this.id;
                            
                            window.location="http://www.youtube.com/embed/"+yt_key;
                    
                    
		});
            });