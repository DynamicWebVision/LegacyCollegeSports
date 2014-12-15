<?php

require_once('Functions.php');
    
    Get_DB_Connection();
    
    
    $QUERY_SCHOOL = $db->prepare("SELECT S_KEY from schools");

    $QUERY_SCHOOL->execute(); 

    while ($row = $QUERY_SCHOOL->fetch(PDO::FETCH_ASSOC))
    {
        
        $QUERY_SCHOOL_EXIST = $db->prepare("select * from football_ranking_history where S_KEY = :s_key ");
            
        $QUERY_SCHOOL_EXIST->bindValue(':s_key', $row['S_KEY']);

        $QUERY_SCHOOL_EXIST->execute(); 

        $EXIST_COUNT = $QUERY_SCHOOL_EXIST->rowCount();

        IF ($EXIST_COUNT < 1)
        {   
            echo $row['S_KEY'];
            
            $QUERY_TABLES = $db->prepare("select TABLE_NAME from reference_school_items where TABLE_NAME = 'football_ranking_history'");

            $QUERY_TABLES->execute(); 

            while ($row_table = $QUERY_TABLES->fetch(PDO::FETCH_ASSOC))
            {

                    $INSERT_SCHOOL = $db->prepare("insert into ".$row_table['TABLE_NAME']." (S_KEY) values (:s_key)");

                    $INSERT_SCHOOL->bindValue(':s_key', $row['S_KEY']);
                    $INSERT_SCHOOL->execute(); 
            }   
        }
        
        

    }

?>
