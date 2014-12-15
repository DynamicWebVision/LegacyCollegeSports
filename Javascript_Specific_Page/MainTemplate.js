
var old_top_menu_section_main = "MainInfoButton";


$(document).ready(function(){
                        
                        $("#FixedContain").hide();
                        $("#FixedContain").removeClass("hidden");
                                                
                        $(".MenuSchoolLink").live("click touchstart",function() {

                        var url = this.id;
                        
                        window.location="http://csportsdirect.com/school/"+url;

                    });

                }); 
                
  $(document).ready(function(){
                
                $(".CloseYouTubeVideo1").click(function() {
                  
                     $("#FixedContain").show();
                     
                     $("#VideoCode").html(" "); 
                     
                     $("#WhiteOverBlanket").fadeOut(800, function(){
                         
                         $("#FixedContain").hide();
                });
                     $("#Video1").fadeOut(800);
                });
                
                $('.YouTubeImage').click(function () {
                    
                    var youtube_key = this.id;
                    
                    
                    $("#VideoCode").html("<iframe width='420' height='315' src = '//www.youtube.com/embed/"+youtube_key+"?wmode=transparent' wmode='Opaque' frameborder='0' allowfullscreen></iframe>"); 
                
                     $("#FixedContain").fadeIn(600);
                     
                    $("#WhiteOverBlanket").fadeIn(800);
                    $("#Video1").fadeIn(600);
                    
                    
                    
		});
            });    
            
       $(document).ready(function(){
              
                $('.VideoTitle').click(function () {
                    
                    var youtube_key = this.id;
                    
                    
                    $("#VideoCode").html("<iframe width='420' height='315' src = '//www.youtube.com/embed/"+youtube_key+"?wmode=transparent' wmode='Opaque' frameborder='0' allowfullscreen></iframe>"); 
                
                     $("#FixedContain").show();
                     
                    $("#WhiteOverBlanket").fadeIn(800);
                    $("#Video1").fadeIn(1200);
                    
                    
                    
		});
            });              

              
  $(document).ready(function(){            
              
        $(".TopMenuButtonNotActive").click(function () {
            
                var new_section = this.id;
                
                $("#"+new_section).removeClass("TopMenuButtonNotActive");
                $("#"+new_section).addClass("TopMenuButtonActive");
             
                if (new_section == "SchoolProfilesButton")
                    {
                        $('body,html').animate({
                        scrollTop: 450
                        }, 200);
                    }
                else if (new_section == "VideosButton")
                    {
                        $('body,html').animate({
                        scrollTop: 770
                        }, 200);
                    }
                else if (new_section == "TwitterButton")
                    {
                        $('body,html').animate({
                        scrollTop: 1220
                        }, 200);
                    } 
                else if (new_section == "OlderButton")
                    {
                        $('body,html').animate({
                        scrollTop: 1500
                        }, 200);
                    }
                else if (new_section == "MainInfoButton")
                    {    
                        $('body,html').animate({
                        scrollTop: 0
                        }, 200);
                    }     
                    
                var old_div = "#"+old_top_menu_section_main;
               
               //alert(old_div);
               
                $(old_div).removeClass("TopMenuButtonActive");
                $(old_div).addClass("TopMenuButtonNotActive");
                
                //alert($(old_div).attr("class"));
                
                old_top_menu_section_main = new_section;
                return false;
        });
    });          
    
    $(document).ready(function(){
              
                $('#MainInfoButton').click(function () {
                    
                        if (old_top_menu_section_main != "MainInfoButton")
                        {
                             $('#MainInfoButton').removeClass("TopMenuButtonNotActive");
                             $('#MainInfoButton').addClass("TopMenuButtonActive");
                             
                             var old_div = "#"+old_top_menu_section_main;
                        
                            $(old_div).removeClass("TopMenuButtonActive");
                            $(old_div).addClass("TopMenuButtonNotActive");
                            
                            old_top_menu_section_main = "MainInfoButton";
                            
                             $('body,html').animate({
				scrollTop: 0
                                }, 200);
                            
                        }
                        
                        
			return false;
		});
            });