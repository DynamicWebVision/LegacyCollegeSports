<?PHP
ob_start(); 
session_start();

require_once('Functions.php');
Get_DB_Connection();

function TraditionalStory($STORY_KEY)
{   
    
    $config['db'] = array(
    'host' => '198.154.209.170',
    'username' => 'bailjack_admin',
    'password' => 'people96321',
    'dbname' => 'bailjack_csblitz'
    );

    $db = new PDO('mysql:host='.$config['db']['host'].';dbname='.$config['db']['dbname'], $config['db']['username'], $config['db']['password']);    
    
    function TreatText($PARAGRAPH_TEXT)
    {
        $PARAGRAPH_TEXT = nl2br($PARAGRAPH_TEXT);
        
        $PARAGRAPH_TEXT = addslashes(str_replace("’", "'",$PARAGRAPH_TEXT));
        
        return $PARAGRAPH_TEXT;
    }
    
IF (ISSET($_GET['SUB_HEADER_1']))
{   
    $INSERT_SUB_HEADER = $db->prepare("insert into traditional_story (STORY_KEY , SUB_HEADER) values (:story_key , :sub_header );");

    $INSERT_SUB_HEADER->bindValue(':story_key', $STORY_KEY);

    $INSERT_SUB_HEADER->bindValue(':sub_header', TreatText($_GET['SUB_HEADER_1']));

    $INSERT_SUB_HEADER->execute();
    
    
    $INSERT_PARAGRAPH = $db->prepare("insert into traditional_story (STORY_KEY , PARAGRAPH_ENTRY) values (:story_key , :paragraph );");

    $INSERT_PARAGRAPH->bindValue(':story_key', $STORY_KEY);

    $INSERT_PARAGRAPH->bindValue(':paragraph', TreatText($_GET['PARAGRAPH_1']));

    $INSERT_PARAGRAPH->execute();
}
ELSE
{
    $INSERT_PARAGRAPH = $db->prepare("insert into traditional_story (STORY_KEY , PARAGRAPH_ENTRY) values (:story_key , :paragraph );");

    $INSERT_PARAGRAPH->bindValue(':story_key', $STORY_KEY);

    $INSERT_PARAGRAPH->bindValue(':paragraph', TreatText($_GET['PARAGRAPH_1']));

    $INSERT_PARAGRAPH->execute();
}

IF ($_GET['ENTRY_COUNT'] > 1)
{
    $ENTRY_COUNT = 2;
    
    $ENTRY_COUNT_CUT_OFF = $_GET['ENTRY_COUNT']+1;
    
    while ($ENTRY_COUNT < $ENTRY_COUNT_CUT_OFF)
    {
        $INSERT_SUB_HEADER = $db->prepare("insert into traditional_story (STORY_KEY , SUB_HEADER) values (:story_key , :sub_header );");

        $INSERT_SUB_HEADER->bindValue(':story_key', $STORY_KEY);

        $INSERT_SUB_HEADER->bindValue(':sub_header', TreatText($_GET['SUB_HEADER_'.$ENTRY_COUNT]));

        $INSERT_SUB_HEADER->execute();


        $INSERT_PARAGRAPH = $db->prepare("insert into traditional_story (STORY_KEY , PARAGRAPH_ENTRY) values (:story_key , :paragraph );");

        $INSERT_PARAGRAPH->bindValue(':story_key', $STORY_KEY);

        $INSERT_PARAGRAPH->bindValue(':paragraph', TreatText($_GET['PARAGRAPH_'.$ENTRY_COUNT]));

        $INSERT_PARAGRAPH->execute();
        
        $ENTRY_COUNT = $ENTRY_COUNT+1;
    }
    
}

}

$_SESSION['ADMIN_KEY'] = "1";    
    
$PROPOSE_DATE = time();

$TITLE = $_GET['TITLE'];

$STORY_URL = urlencode($TITLE);

$STORY_URL = str_replace("+", "-", $STORY_URL);

IF (substr($STORY_URL, 0, 1) == "-")
{
    $STORY_URL == substr($STORY_URL, 1);
}
    
$INSERT_STORY = $db->prepare(" insert into story (STORY_TITLE , STORY_TYPE_CODE , AUTHOR_KEY , PROPOSE_DATE , PUBLISH_DATE , STORY_URL) 
values (:story_title , '1', :admin_key , :time, null, :story_url ); ");

$INSERT_STORY->bindValue(':story_title', addslashes(str_replace("’", "'",$TITLE)));

$INSERT_STORY->bindValue(':admin_key', $_SESSION['ADMIN_KEY']);

$INSERT_STORY->bindValue(':story_url', $STORY_URL);

$INSERT_STORY->bindValue(':time', $PROPOSE_DATE);

$INSERT_STORY->execute();
    
$STORY_KEY = $db->lastInsertId();

$_SESSION['NEW_STORY_KEY'] = $STORY_KEY;

$INSERT_META_DATA = $db->prepare(" insert into story_meta_data (STORY_KEY , META_DATA_KEY_WORDS, META_DATA_DESCRIPTION) 
values (:story_key , :meta_data_key_words , :meta_data_description ); ");

$INSERT_META_DATA->bindValue(':story_key', $STORY_KEY);

$INSERT_META_DATA->bindValue(':meta_data_key_words', addslashes(str_replace("’", "'",$_GET['META_DATA_KEY_WORDS'])));

$INSERT_META_DATA->bindValue(':meta_data_description', addslashes(str_replace("’", "'",$_GET['META_DATA_DESCRIPTION'])));

$INSERT_META_DATA->execute();

IF ($_GET['STORY_TYPE'] == "TraditionalStory")
{
    TraditionalStory($STORY_KEY);
}





?>
