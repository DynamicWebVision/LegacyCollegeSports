 $(document).ready(function(){

x = 69;


while (x < 74)
{
    
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

var color_1 = $("#U_Color"+x).attr("class");

var color_1_bright = ColorLuminance(color_1, .2);

var color_bright_php = color_1_bright.substring(1,7);

var color_1_dark = ColorLuminance(color_1, -.2);    

var color_1_dark_php = color_1_dark.substring(1,7);

var color_1_dark_nav = ColorLuminance(color_1, -.6);    

var color_1_dark_nav_php = color_1_dark_nav.substring(1,7);

$.ajax({url:"ColorTone.php?COLOR_LIGHT="+color_bright_php+"&COLOR_DARK="+color_1_dark_php+"&COLOR_NAV="+color_1_dark_nav_php+"&S_KEY="+x,success:function(result){
    $("#div1").html(result);
  }});

x = x+1;

}

 });