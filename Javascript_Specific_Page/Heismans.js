/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

var old_top_menu_section_main = "MenuButton2010";

$(document).ready(function(){
                        
                        $("#FixedContain").hide();
                        $("#FixedContain").removeClass("hidden");
                        
                        $(".MenuSchoolLink").live("click touchstart",function() {

                        var s_key = this.id;
                        
                        window.location="SchoolProfile.php?S_KEY="+s_key;
                        
                        $("#FixedContain").hide();

                    });

                }); 

$(document).ready(function(){            
              
        $(".TopMenuButtonNotActive").click(function () {
            
                var new_section = this.id;
                
                $("#"+new_section).removeClass("TopMenuButtonNotActive");
                $("#"+new_section).addClass("TopMenuButtonActive");
             
                if (new_section == "MenuButton2000")
                    {
                        $('body,html').animate({
                        scrollTop: 560
                        }, 200);
                    }
                else if (new_section == "MenuButton1990")
                    {
                        $('body,html').animate({
                        scrollTop: 2045
                        }, 200);
                    }
                else if (new_section == "MenuButton1980")
                    {
                        $('body,html').animate({
                        scrollTop: 3535
                        }, 200);
                    } 
                else if (new_section == "MenuButton1970")
                    {
                        $('body,html').animate({
                        scrollTop: 5030
                        }, 200);
                    }
                else if (new_section == "MenuButton1960")
                    {    
                        $('body,html').animate({
                        scrollTop: 6515
                        }, 200);
                    } 
                else if (new_section == "MenuButton1950")
                    {    
                        $('body,html').animate({
                        scrollTop: 8010
                        }, 200);
                    } 
                else if (new_section == "MenuButton1940")
                    {    
                        $('body,html').animate({
                        scrollTop: 9500
                        }, 200);
                    } 
                else if (new_section == "MenuButton1930")
                    {    
                        $('body,html').animate({
                        scrollTop: 10975
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
              
                $('#MenuButton2010').click(function () {
                    
                        if (old_top_menu_section_main != "MenuButton2010")
                        {
                             $('#MenuButton2010').removeClass("TopMenuButtonNotActive");
                             $('#MenuButton2010').addClass("TopMenuButtonActive");
                             
                             var old_div = "#"+old_top_menu_section_main;
                        
                            $(old_div).removeClass("TopMenuButtonActive");
                            $(old_div).addClass("TopMenuButtonNotActive");
                            
                            old_top_menu_section_main = "MenuButton2010";
                            
                             $('body,html').animate({
				scrollTop: 0
                                }, 200);
                            
                        }
                        
                        
			return false;
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
                
                $('.HeismanYoutube').click(function () {
                    
                    var youtube_key = this.id;
                    
                    
                    $("#VideoCode").html("<iframe width='420' height='315' src = '//www.youtube.com/embed/"+youtube_key+"?wmode=transparent' wmode='Opaque' frameborder='0'  allowfullscreen></iframe>"); 
                
                     $("#FixedContain").fadeIn(600);
                     
                    $("#WhiteOverBlanket").fadeIn(800);
                    $("#Video1").fadeIn(600);
                    
                    
                    
		});
            });    
                       