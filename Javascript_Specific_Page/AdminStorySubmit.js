
var story_type;

var story_begin;

var section_count = 1;

var current_populate;

var new_section;

var new_section_html;

var initial_choice_build;

var ajax_send;

var first_p;

var first_h;

var new_header;

var new_paragraph;

var loop_counter;

$(document).ready(function(){
                
                function InitialStory(initial_choice)
                {   
                    if (story_type == "TraditionalStory")
                        {
                            if (initial_choice == "Paragraph")
                                {
                                    current_populate = "<div class = 'HeaderLabel'>Paragraph 1</div><textarea id = 'ParagraphSection1' class = 'ParagraphContent' name = 'ParagraphSection1'></textarea><div id = 'Section2'></div>";

                                $("#"+story_type+"InitialStory").html(current_populate);

                                    story_begin = "Paragraph";

                                    $("#"+story_type+"InitialQuestion").hide();
                                    $("#"+story_type+"InitialStory").slideDown("400");

                                    $(".AddNewSectionButton").show();
                                }
                            else if (initial_choice == "SubHeader")
                                {
                                    current_populate = "<div class = 'HeaderLabel'>Sub Header 1</div><input id = 'SubHeader1' class ='HeaderInput' type ='text' name ='SubHeader1' value =''><div class = 'HeaderLabel'>Paragraph 1</div><textarea id = 'ParagraphSection1' class = 'ParagraphContent' name = 'ParagraphSection1'></textarea><div id = 'Section2'></div>";

                                $("#"+story_type+"InitialStory").html(current_populate);

                                    story_begin = "SubHeader";

                                    $("#"+story_type+"InitialQuestion").hide();
                                    $("#"+story_type+"InitialStory").slideDown("400");

                                    $(".AddNewSectionButton").show();
                                }
                        }
                    
                }
                
                function AddNewSection()
                {   
                    function html_generation(sc)
                    {
                        if (story_type == "TraditionalStory")
                            {   
                                var next_section =++sc;
                                
                                return "<div class = 'HeaderLabel'>Sub Header "+section_count+"</div><input id = 'SubHeader"+section_count+"' class ='HeaderInput' type ='text' name ='SubHeader"+section_count+"' value =''><div class = 'HeaderLabel'>Paragraph "+section_count+"</div><textarea id = 'ParagraphSection"+section_count+"' class = 'ParagraphContent' name = 'ParagraphSection"+section_count+"'></textarea><div id = 'Section"+next_section+"'></div>";
                            }
                    }
                    
                    section_count =++section_count;
                    
                    new_section = "#Section"+section_count;
                    
                    $(new_section).hide();
                    
                    new_section_html = html_generation(section_count);
                    
                    $(new_section).html(new_section_html);
                    
                    $(new_section).slideDown("400");
                }
                
                $('.buttonoption').live("click touchstart",function() {
                    
                        story_type = this.id;
                        
                        $("#StoryTypeQuestion").hide();
                        
                        $("#"+story_type+"Full").slideDown("400");
                        
		});
                
                $('.AddNewSectionButton').live("click touchstart",function() {
                        
                        AddNewSection();
                        
		});
                
                $('.secondarybuttonoption').live("click touchstart",function() {
                        
                        InitialStory(this.id);
                        
                        initial_choice_build = this.id;
                        
		});
                
                
                $('.StoryCompleteButton').live("click touchstart",function() {
                        
                        
                        $("#FixedContain").show();
                        $("#DarkOverBlanket").show();
                        
                        var title = $("#StoryTitle").val();
                        
                        var meta_data_key_words = $("#MetaDataKeyWords").val();
                        
                        var meta_data_description = $("#MetaDataDescription").val();
                        
                        ajax_send = "AdminAjaxSubmitArticle.php?TITLE="+title+"&ENTRY_COUNT="+section_count+"&STORY_TYPE="+story_type+"&META_DATA_KEY_WORDS="+meta_data_key_words+"&META_DATA_DESCRIPTION="+meta_data_description;
                        
                        if (initial_choice_build == "Paragraph")
                            {   
                                first_p = $("#ParagraphSection1").val();
                                
                                first_p = first_p.replace(/\r?\n/g, '<br />');
                                
                                ajax_send += "&PARAGRAPH_1="+first_p;
                            }
                        else
                            {
                                first_p = $("#ParagraphSection1").val();
                                
                                first_p = first_p.replace(/\r?\n/g, '<br />');
                                
                                first_h = $("#SubHeader1").val();
                                
                                ajax_send += "&PARAGRAPH_1="+first_p+"&SUB_HEADER_1="+first_h;
                            }
                        
                        loop_counter = 2;
                        var over_section_count = ++section_count;
                        
                        while (loop_counter < over_section_count)
                            {
                                
                                new_header = $("#SubHeader"+loop_counter).val();
                                
                                new_paragraph = $("#ParagraphSection"+loop_counter).val();
                                
                                new_paragraph = new_paragraph.replace(/\r?\n/g, '<br />');
                                
                                ajax_send += "&PARAGRAPH_"+loop_counter+"="+new_paragraph+"&SUB_HEADER_"+loop_counter+"="+new_header;
                            
                            loop_counter++;
                            }
                       
                                    $.ajax({url: ajax_send,success:function(result){
                                                $("#ps").html(result);
                                                },
                                                complete: function(){
   


                                            $("#FixedAjaxLoaderContain").hide();
                                            $("#WhiteOverBlanket").hide();
                                            
                                            window.location="AdminStoryMedia.php";

                                        }
                                            });
		});
                
                $("#TraditionalStoryFull").removeClass("hidden");
                $("#TraditionalStoryFull").hide();
                $("#TraditionalStoryInitialStory").hide();
                $(".AddNewSectionButton").hide();
                
                $("#FixedAjaxLoaderContain").removeClass("hidden");
                $("#FixedAjaxLoaderContain").hide();
                
                $("#WhiteOverBlanket").removeClass("hidden");
                $("#WhiteOverBlanket").hide();
                
                $('.secondarybuttonoption').live("click touchstart",function() {
                        
                        InitialStory(this.id);
                        
                        initial_choice_build = this.id;
                        
		});
            
            //Media Type Question
            $("#ImageButton").on("click touchstart",function() {

                        $("#ImageUploadContain").slideDown("350");
                        $("#MediaTypeQuestion").hide();

                    });
                    
            $("#VideoButtons").on("click touchstart",function() {

                        $("#YouTubeUploadContain").slideDown("350");
                        $("#MediaTypeQuestion").hide();
                        
                    });
            
            $("#SubmitVideo").on("click touchstart",function() {

                        var videoKey = $("#youTubeKey").val();
                        var storyKey = $("#videoStoryKey").val();
                        
                        if (videoKey == "")
                            {   
                                $("#FixedErrorContainer").fadeIn("320");
                                $("#errorText").html("Video key cannot be left blank.  Re-submit.");
                                $("#invisibleCover").show();
                            }
                        else
                            {   
                        
                                $.ajax({url: "Admin/Ajax/StoryVideo.php?storyKey="+storyKey+"&videoKey="+videoKey,success:function(result){
                                                $("#ps").html(result);
                                                },
                                                complete: function(){
   


                                            $("#FixedAjaxLoaderContain").hide();
                                            $("#WhiteOverBlanket").hide();
                                            
                                            window.location="AdminStoryMedia.php";

                                        }
                                            });
                            }
                        
                    });    
                    
            $(".closeError").on("click touchstart",function() {
                $("#FixedErrorContainer").fadeOut("320");
                $("#invisibleCover").hide();
            });
            
            
});