
var old_top_menu_section = "GeneralInfoButton";

jQuery(document).ready(function($) {

        $(document).ready(function(){
            
            
            $("#WhiteOverBlanket").hide();
            $("#WhiteOverBlanket").removeClass("hidden");
            
            $("#FixedContain").hide();
             $("#FixedContain").removeClass("hidden");
             
              $("#BasketballTourneyAppearences").hide();
             $("#BasketballTourneyAppearences").removeClass("hidden");
             
              $("#BasketballSweetSixteenAppearences").hide();
             $("#BasketballSweetSixteenAppearences").removeClass("hidden");
             
              $("#BasketballEliteEightAppearences").hide();
             $("#BasketballEliteEightAppearences").removeClass("hidden");
             
             $("#BasketballFinalFourAppearences").hide();
             $("#BasketballFinalFourAppearences").removeClass("hidden");
             
             $("#BasketballNationalTitlesAppearences").hide();
             $("#BasketballNationalTitlesAppearences").removeClass("hidden");
             
             $("#FootballTourneyAppearences").hide();
             $("#FootballTourneyAppearences").removeClass("hidden");
             
              $("#FootballSweetSixteenAppearences").hide();
             $("#FootballSweetSixteenAppearences").removeClass("hidden");
             
              $("#FootballEliteEightAppearences").hide();
             $("#FootballEliteEightAppearences").removeClass("hidden");
             
             $("#FootballFinalFourAppearences").hide();
             $("#FootballFinalFourAppearences").removeClass("hidden");
             
             $("#Video1").hide();
            
        });

          $(document).ready(function(){
              
                $('.TopMenuButtonNotActive').live("click touchstart",function() {
                    
                        var new_section = this.id;
                        
                        $("#"+new_section).removeClass("TopMenuButtonNotActive");
                        $("#"+new_section).addClass("TopMenuButtonActive");
                        
                        if (new_section == "FootballButton")
                            {
                                $('body,html').animate({
				scrollTop: 300
                                }, 200);
                            }
                        else if (new_section == "BasketballButton")
                            {
                                $('body,html').animate({
				scrollTop: 600
                                }, 200);
                            }
                        else if (new_section == "Section4Button")
                            {
                                $('body,html').animate({
				scrollTop: 900
                                }, 200);
                            } 
                        else if (new_section == "Section5Button")
                            {
                                $('body,html').animate({
				scrollTop: 1200
                                }, 200);
                            }
                        else if (new_section == "GeneralInfoButton")
                           {  
                                $('body,html').animate({
				scrollTop: 0
                                }, 200);
                            }     
                        
                        var old_div = "#"+old_top_menu_section;
                        
                        $(old_div).removeClass("TopMenuButtonActive");
                        $(old_div).addClass("TopMenuButtonNotActive");
                        
                        old_top_menu_section = new_section;
			return false;
		});
            });
            
            $(document).ready(function(){
              
                $('#GeneralInfoButton').live("click touchstart",function() {
                    
                        if (old_top_menu_section != "GeneralInfoButton")
                        {
                             $('#GeneralInfoButton').removeClass("TopMenuButtonNotActive");
                             $('#GeneralInfoButton').addClass("TopMenuButtonActive");
                             
                             var old_div = "#"+old_top_menu_section;
                        
                            $(old_div).removeClass("TopMenuButtonActive");
                            $(old_div).addClass("TopMenuButtonNotActive");
                            
                            old_top_menu_section = "GeneralInfoButton";
                            
                             $('body,html').animate({
				scrollTop: 0
                                }, 200);
                            
                        }
                        
                        
			return false;
		});
            });
            
            
        $(document).ready(function(){
              
                $('.YouTubeImage').live("click touchstart",function() {
                    
                    var youtube_key = this.id;
                    
                    
                    $("#VideoCode").html("<iframe width='420' height='315' src = '//www.youtube.com/embed/"+youtube_key+"?wmode=transparent' wmode='Opaque' frameborder='0' allowfullscreen></iframe>"); 
                
                     $("#FixedContain").show();
                     
                    $("#WhiteOverBlanket").fadeIn(800);
                    $("#Video1").fadeIn(1200);
                    
                    
                    
		});
            });    
            
       $(document).ready(function(){
                        
                        $("#FixedContain").hide();
                        $("#FixedContain").removeClass("hidden");
                        
                        $(".MenuSchoolLink").live("click touchstart",function() {

                        var url = this.id;
                        
                        window.location="http://csportsdirect.com/school/"+url;

                    });

                });      
            
       $(document).ready(function(){
              
                $('.VideoTitle').live("click touchstart",function() {
                    
                    var youtube_key = this.id;
                    
                    
                    $("#VideoCode").html("<iframe width='420' height='315' src = '//www.youtube.com/embed/"+youtube_key+"?wmode=transparent' wmode='Opaque' frameborder='0' allowfullscreen></iframe>"); 
                
                     $("#FixedContain").show();
                     
                    $("#WhiteOverBlanket").fadeIn(800);
                    $("#Video1").fadeIn(1200);
                    
                    
                    
		});
            });      
            
            
            
     $(document).ready(function(){
        $("#BasketballTourneyCount").mouseover(function(){
            
            $("#BasketballTourneyAppearences").fadeIn(500);
        });
        $("#BasketballTourneyCount").mouseout(function(){
            $("#BasketballTourneyAppearences").fadeOut(500);
        });
        
        $("#BasketballSweetSixteenCount").mouseover(function(){
            
            $("#BasketballSweetSixteenAppearences").fadeIn(500);
        });
        $("#BasketballSweetSixteenCount").mouseout(function(){
            $("#BasketballSweetSixteenAppearences").fadeOut(500);
        });
        
        $("#BasketballEliteEightCount").mouseover(function(){
            
            $("#BasketballEliteEightAppearences").fadeIn(500);
        });
        $("#BasketballEliteEightCount").mouseout(function(){
            $("#BasketballEliteEightAppearences").fadeOut(500);
        });
        
        $("#BasketballFinalFourCount").mouseover(function(){
            
            $("#BasketballFinalFourAppearences").fadeIn(500);
        });
        $("#BasketballFinalFourCount").mouseout(function(){
            $("#BasketballFinalFourAppearences").fadeOut(500);
        });
        
        $("#BasketballNationalTitleCount").mouseover(function(){
            
            $("#BasketballNationalTitlesAppearences").fadeIn(500);
        });
        $("#BasketballNationalTitleCount").mouseout(function(){
            $("#BasketballNationalTitlesAppearences").fadeOut(500);
        });
        
        
        
        
        $("#FootballTourneyCount").mouseover(function(){
            
            $("#FootballTourneyAppearences").fadeIn(500);
        });
        $("#FootballTourneyCount").mouseout(function(){
            $("#FootballTourneyAppearences").fadeOut(500);
        });
        
        $("#FootballSweetSixteenCount").mouseover(function(){
            
            $("#FootballSweetSixteenAppearences").fadeIn(500);
        });
        $("#FootballSweetSixteenCount").mouseout(function(){
            $("#FootballSweetSixteenAppearences").fadeOut(500);
        });
        
        $("#FootballEliteEightCount").mouseover(function(){
            
            $("#FootballEliteEightAppearences").fadeIn(500);
        });
        $("#FootballEliteEightCount").mouseout(function(){
            $("#FootballEliteEightAppearences").fadeOut(500);
        });
        
        $("#FootballFinalFourCount").mouseover(function(){
            
            $("#FootballFinalFourAppearences").fadeIn(500);
        });
        $("#FootballFinalFourCount").mouseout(function(){
            $("#FootballFinalFourAppearences").fadeOut(500);
        });
        
        
        });      
            
     $(document).ready(function(){
         
            function ColorLuminance(hex, lum) {
                    // validate hex string
                    hex = String(hex).replace(/[^0-9a-f]/gi, '');
                    if (hex.length < 6) {
                            hex = hex[0]+hex[0]+hex[1]+hex[1]+hex[2]+hex[2];
                    }
                    lum = lum || 0;
                    // convert to decimal and change luminosity
                    var rgb = "#", c, i;
                    for (i = 0; i < 3; i++) {
                            c = parseInt(hex.substr(i*2,2), 16);
                            c = Math.round(Math.min(Math.max(0, c + (c * lum)), 255)).toString(16);
                            rgb += ("00"+c).substr(c.length);
                    }
                    return rgb;
            }
         
         
         var test = ColorLuminance("#A32638", -.5);
           
             $(".CloseYouTubeVideo1").live("click touchstart",function() {
                  
                     $("#FixedContain").show();
                     
                     $("#VideoCode").html(" "); 
                     
                     $("#WhiteOverBlanket").fadeOut(800, function(){
                         
                         $("#FixedContain").hide();
                });
                     $("#Video1").fadeOut(800);
                });
        });        
            

});


