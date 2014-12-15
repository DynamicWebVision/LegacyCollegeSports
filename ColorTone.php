<?
    require_once('Functions.php');
    
    Get_DB_Connection();
    
    
        
    $UPDATE_COLOR = $db->prepare("update school_colors set LIGHT_TONE = :color_light where S_KEY = :s_key ");

    $UPDATE_COLOR->bindValue(':color_light', "#".$_GET['COLOR_LIGHT']);
    
    $UPDATE_COLOR->bindValue(':s_key', $_GET['S_KEY']);
            
    $UPDATE_COLOR->execute();
        
            
        
    $UPDATE_COLOR = $db->prepare("update school_colors set DARK_TONE = :color_dark where S_KEY = :s_key ");

    $UPDATE_COLOR->bindValue(':color_dark', "#".$_GET['COLOR_DARK']);
            
    $UPDATE_COLOR->bindValue(':s_key', $_GET['S_KEY']);

    $UPDATE_COLOR->execute();
            
            
            
    $UPDATE_COLOR = $db->prepare("update school_colors set NAV_COLOR = :color_nav where S_KEY = :s_key ");

    $UPDATE_COLOR->bindValue(':color_nav', "#".$_GET['COLOR_NAV']);
            
    $UPDATE_COLOR->bindValue(':s_key', $_GET['S_KEY']);

    $UPDATE_COLOR->execute();
            
            
?>    