/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

            
       $(document).ready(function(){

            
            $("#NavigationMenu").hide();
            $("#NavigationMenu").removeClass("hidden");
            
            $("#SchoolsNavigationMenu").hide();
            $("#SchoolsNavigationMenu").removeClass("hidden");
            
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
            
            $(document).ready(function(){
              
                $('.HeismanYoutube').live("click touchstart",function() {
                    
                            var yt_key = this.id;
                            
                            window.location="http://www.youtube.com/embed/"+yt_key;
                    
                    
		});
            });