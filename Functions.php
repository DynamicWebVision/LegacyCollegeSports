<?php

function Get_DB_Connection()
{   
    
    global $db;    
    global $config;
 
    $config['db'] = array(
    'host' => '198.154.209.170',
    'username' => 'bailjack_admin',
    'password' => 'people96321',
    'dbname' => 'bailjack_csblitz'
    );

    $db = new PDO('mysql:host='.$config['db']['host'].';dbname='.$config['db']['dbname'], $config['db']['username'], $config['db']['password']);
 
}

function SchoolNavList()
{
    echo "<ul>
   <li class='SchoolsMenuShow'>
      <div id='SchoolMenuList'>
         <div id='AACLabel' class='ConferenceLabel'>AAC</div>
         <table id='SchoolListAAC'>
            <tbody>
               <tr>
                  <td class='SchoolListRow'><span id='CentralFlorida' class='MenuSchoolLink'>Central Florida</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='Cincinnati' class='MenuSchoolLink'>Cincinnati</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='Connecticut' class='MenuSchoolLink'>Connecticut</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='Houston' class='MenuSchoolLink'>Houston</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='Louisville' class='MenuSchoolLink'>Louisville</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='Memphis' class='MenuSchoolLink'>Memphis</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='Rutgers' class='MenuSchoolLink'>Rutgers</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='SMU' class='MenuSchoolLink'>SMU</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='SouthFlorida' class='MenuSchoolLink'>South Florida</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='Temple' class='MenuSchoolLink'>Temple</span></td>
               </tr>
            </tbody>
         </table>
         <div id='ACCLabel' class='ConferenceLabel'>ACC</div>
         <div id='B1GLabel' class='ConferenceLabel'>B1G</div>
         <table id='SchoolListACC'>
            <tbody>
               <tr>
                  <td class='SchoolListRow'><span id='BostonCollege' class='MenuSchoolLink'>Boston College</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='Clemson' class='MenuSchoolLink'>Clemson</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='Duke' class='MenuSchoolLink'>Duke</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='FloridaState' class='MenuSchoolLink'>Florida State</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='GeorgiaTech' class='MenuSchoolLink'>Georgia Tech</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='Maryland' class='MenuSchoolLink'>Maryland</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='Miami' class='MenuSchoolLink'>Miami</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='NorthCarolina' class='MenuSchoolLink'>North Carolina</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='NorthCarolinaState' class='MenuSchoolLink'>North Carolina State</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='Pittsburgh' class='MenuSchoolLink'>Pittsburgh</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='Syracuse' class='MenuSchoolLink'>Syracuse</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='Virginia' class='MenuSchoolLink'>Virginia</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='VirginiaTech' class='MenuSchoolLink'>Virginia Tech</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='WakeForest' class='MenuSchoolLink'>Wake Forest</span></td>
               </tr>
            </tbody>
         </table>
         <table id='SchoolListB1G'>
            <tbody>
               <tr>
                  <td class='SchoolListRow'><span id='Illinois' class='MenuSchoolLink'>Illinois</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='Indiana' class='MenuSchoolLink'>Indiana</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='Iowa' class='MenuSchoolLink'>Iowa</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='Michigan' class='MenuSchoolLink'>Michigan</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='MichiganState' class='MenuSchoolLink'>Michigan State</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='Minnesota' class='MenuSchoolLink'>Minnesota</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='Nebraska' class='MenuSchoolLink'>Nebraska</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='Northwestern' class='MenuSchoolLink'>Northwestern</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='OhioState' class='MenuSchoolLink'>Ohio State</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='PennState' class='MenuSchoolLink'>Penn State</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='Purdue' class='MenuSchoolLink'>Purdue</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='Wisconsin' class='MenuSchoolLink'>Wisconsin</span></td>
               </tr>
            </tbody>
         </table>
         <div id='XIILabel' class='ConferenceLabel'>Big XII</div>
         <table id='SchoolListXII'>
            <tbody>
               <tr>
                  <td class='SchoolListRow'><span id='Baylor' class='MenuSchoolLink'>Baylor</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='IowaState' class='MenuSchoolLink'>Iowa State</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='Kansas' class='MenuSchoolLink'>Kansas</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='KansasState' class='MenuSchoolLink'>Kansas State</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='Oklahoma' class='MenuSchoolLink'>Oklahoma</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='OklahomaState' class='MenuSchoolLink'>Oklahoma State</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='TCU' class='MenuSchoolLink'>TCU</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='Texas' class='MenuSchoolLink'>Texas</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='TexasTech' class='MenuSchoolLink'>Texas Tech</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='WestVirginia' class='MenuSchoolLink'>West Virginia</span></td>
               </tr>
            </tbody>
         </table>
         <div id='SECLabel' class='ConferenceLabel'>SEC</div>
         <table id='SchoolListSEC'>
            <tbody>
               <tr>
                  <td class='SchoolListRow'><span id='Alabama' class='MenuSchoolLink'>Alabama</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='Arkansas' class='MenuSchoolLink'>Arkansas</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='Auburn' class='MenuSchoolLink'>Auburn</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='Florida' class='MenuSchoolLink'>Florida</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='Georgia' class='MenuSchoolLink'>Georgia</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='Kentucky' class='MenuSchoolLink'>Kentucky</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='LouisianaState' class='MenuSchoolLink'>Louisiana State</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='MississippiState' class='MenuSchoolLink'>Mississippi State</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='Missouri' class='MenuSchoolLink'>Missouri</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='OleMiss' class='MenuSchoolLink'>Ole Miss</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='SouthCarolina' class='MenuSchoolLink'>South Carolina</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='Tennessee' class='MenuSchoolLink'>Tennessee</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='TexasAM' class='MenuSchoolLink'>Texas A&amp;M</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='Vanderbilt' class='MenuSchoolLink'>Vanderbilt</span></td>
               </tr>
            </tbody>
         </table>
         <div id='INDLabel' class='ConferenceLabel'>Independents</div>
         <table id='SchoolListIND'>
            <tbody>
               <tr>
                  <td class='SchoolListRow'><span id='NotreDame' class='MenuSchoolLink'>Notre Dame</span></td>
               </tr>
            </tbody>
         </table>
         <div id='PACLabel' class='ConferenceLabel'>Pac 12</div>
         <table id='SchoolListPAC'>
            <tbody>
               <tr>
                  <td class='SchoolListRow'><span id='Arizona' class='MenuSchoolLink'>Arizona</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='ArizonaState' class='MenuSchoolLink'>Arizona State</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='California' class='MenuSchoolLink'>California</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='Colorado' class='MenuSchoolLink'>Colorado</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='Oregon' class='MenuSchoolLink'>Oregon</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='OregonState' class='MenuSchoolLink'>Oregon State</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='Stanford' class='MenuSchoolLink'>Stanford</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='UCLA' class='MenuSchoolLink'>UCLA</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='USC' class='MenuSchoolLink'>USC</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='Utah' class='MenuSchoolLink'>Utah</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='Washington' class='MenuSchoolLink'>Washington</span></td>
               </tr>
               <tr>
                  <td class='SchoolListRow'><span id='WashingtonState' class='MenuSchoolLink'>Washington State</span></td>
               </tr>
            </tbody>
         </table>
      </div>
   </li>
</ul>";
}

function FrontSchoolList()
{
    echo "<div id='MainSchoolList'>
            <div id='MainAACLabel' class='ConferenceLabel'>AAC</div>
            <table id='MainSchoolListAAC'>
                <tbody>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/CentralFlorida'>Central Florida</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/Cincinnati'>Cincinnati</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/Connecticut'>Connecticut</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/Houston'>Houston</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/Louisville'>Louisville</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/Memphis'>Memphis</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/Rutgers'>Rutgers</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/SMU'>SMU</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/SouthFlorida'>South Florida</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/Temple'>Temple</a></td>
                    </tr>
                </tbody>
            </table>
            <div id='MainACCLabel' class='ConferenceLabel'>ACC</div>
            <div id='MainB1GLabel' class='ConferenceLabel'>B1G</div>
            <table id='MainSchoolListACC'>
                <tbody>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/BostonCollege'>Boston College</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/Clemson'>Clemson</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/Duke'>Duke</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/FloridaState'>Florida State</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/GeorgiaTech'>Georgia Tech</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/Maryland'>Maryland</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/Miami'>Miami</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/NorthCarolina'>North Carolina</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/NorthCarolinaState'>North Carolina State</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/Pittsburgh'>Pittsburgh</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/Syracuse'>Syracuse</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/Virginia'>Virginia</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/VirginiaTech'>Virginia Tech</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/WakeForest'>Wake Forest</a></td>
                    </tr>
                </tbody>
            </table>
            <table id='MainSchoolListB1G'>
                <tbody>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/Illinois'>Illinois</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/Indiana'>Indiana</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/Iowa'>Iowa</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/Michigan'>Michigan</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/MichiganState'>Michigan State</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/Minnesota'>Minnesota</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/Nebraska'>Nebraska</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/Northwestern'>Northwestern</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/OhioState'>Ohio State</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/PennState'>Penn State</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/Purdue'>Purdue</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/Wisconsin'>Wisconsin</a></td>
                    </tr>
                </tbody>
            </table>
            <div id='MainXIILabel' class='ConferenceLabel'>Big XII</div>
            <table id='MainSchoolListXII'>
                <tbody>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/Baylor'>Baylor</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/IowaState'>Iowa State</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/Kansas'>Kansas</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/KansasState'>Kansas State</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/Oklahoma'>Oklahoma</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/OklahomaState'>Oklahoma State</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/TCU'>TCU</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/Texas'>Texas</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/TexasTech'>Texas Tech</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/WestVirginia'>West Virginia</a></td>
                    </tr>
                </tbody>
            </table>
            <div id='MainSECLabel' class='ConferenceLabel'>SEC</div>
            <table id='MainSchoolListSEC'>
                <tbody>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/Alabama'>Alabama</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/Arkansas'>Arkansas</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/Auburn'>Auburn</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/Florida'>Florida</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/Georgia'>Georgia</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/Kentucky'>Kentucky</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/LouisianaState'>Louisiana State</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/MississippiState'>Mississippi State</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/Missouri'>Missouri</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/OleMiss'>Ole Miss</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/SouthCarolina'>South Carolina</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/Tennessee'>Tennessee</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/TexasAM'>Texas A&amp;M</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/Vanderbilt'>Vanderbilt</a></td>
                    </tr>
                </tbody>
            </table>
            <div id='MainINDLabel' class='ConferenceLabel'>Independents</div>
            <table id='MainSchoolListIND'>
                <tbody>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/NotreDame'>Notre Dame</a></td>
                    </tr>
                </tbody>
            </table>
            <div id='MainPACLabel' class='ConferenceLabel'>Pac 12</div>
            <table id='MainSchoolListPAC'>
                <tbody>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/Arizona'>Arizona</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/ArizonaState'>Arizona State</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/California'>California</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/Colorado'>Colorado</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/Oregon'>Oregon</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/OregonState'>Oregon State</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/Stanford'>Stanford</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/UCLA'>UCLA</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/USC'>USC</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/Utah'>Utah</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/Washington'>Washington</a></td>
                    </tr>
                    <tr>
                        <td class='SchoolListRow'><a class='MenuSchoolLink' href='http://csportsdirect.com/school/WashingtonState'>Washington State</a></td>
                    </tr>
                </tbody>
            </table>
            </div>";
}


function ListMenuSchools()
{   
    $config['db'] = array(
    'host' => '198.154.209.170',
    'username' => 'bailjack_admin',
    'password' => 'people96321',
    'dbname' => 'bailjack_csblitz'
    );

    $db = new PDO('mysql:host='.$config['db']['host'].';dbname='.$config['db']['dbname'], $config['db']['username'], $config['db']['password']);
    
    //AAC
    $QUERY_CONFERENCE_SCHOOLS = $db->prepare("select S_NAME , S_KEY , URL from schools where CONFERENCE = 'AAC' order by S_NAME;");

    $QUERY_CONFERENCE_SCHOOLS->execute(); 
    
    echo "<DIV id = 'AACLabel' class = 'ConferenceLabel'>AAC</DIV>";
    
    echo "<table id = 'SchoolListAAC'>";
    
    while ($row = $QUERY_CONFERENCE_SCHOOLS->fetch(PDO::FETCH_ASSOC))
    {
        echo "<tr><td  class = 'SchoolListRow'><SPAN id = '".$row['URL']."' class = 'MenuSchoolLink' >".$row['S_NAME']."</SPAN></td></tr>";
    }
    
    echo "</table>";
    
    
    
    
    //ACC
    $QUERY_CONFERENCE_SCHOOLS = $db->prepare("select S_NAME , S_KEY , URL  from schools where CONFERENCE = 'ACC' order by S_NAME;");

    $QUERY_CONFERENCE_SCHOOLS->execute(); 
    
    echo "<DIV id = 'ACCLabel' class = 'ConferenceLabel'>ACC</DIV>";
    
    echo "<table id = 'SchoolListACC'>";
    
    while ($row = $QUERY_CONFERENCE_SCHOOLS->fetch(PDO::FETCH_ASSOC))
    {
        echo "<tr><td  class = 'SchoolListRow'><SPAN id = '".$row['URL']."' class = 'MenuSchoolLink' >".$row['S_NAME']."</SPAN></td></tr>";
    }
    
    
    
    
    //B1G
    $QUERY_CONFERENCE_SCHOOLS = $db->prepare("select S_NAME , S_KEY , URL  from schools where CONFERENCE = 'B1G' order by S_NAME;");

    $QUERY_CONFERENCE_SCHOOLS->execute(); 
    
    echo "<DIV id = 'B1GLabel' class = 'ConferenceLabel'>B1G</DIV>";
    
    echo "<table id = 'SchoolListB1G'>";
    
    while ($row = $QUERY_CONFERENCE_SCHOOLS->fetch(PDO::FETCH_ASSOC))
    {
        echo "<tr><td  class = 'SchoolListRow'><SPAN id = '".$row['URL']."' class = 'MenuSchoolLink' >".$row['S_NAME']."</SPAN></td></tr>";
    }
    
    echo "</table>";
    
    
    //Big XII
    $QUERY_CONFERENCE_SCHOOLS = $db->prepare("select S_NAME , S_KEY , URL  from schools where CONFERENCE = 'XII' order by S_NAME;");

    $QUERY_CONFERENCE_SCHOOLS->execute(); 
    
    echo "<DIV id = 'XIILabel' class = 'ConferenceLabel'>Big XII</DIV>";
    
    echo "<table id = 'SchoolListXII'>";
    
    while ($row = $QUERY_CONFERENCE_SCHOOLS->fetch(PDO::FETCH_ASSOC))
    {
        echo "<tr><td  class = 'SchoolListRow'><SPAN id = '".$row['URL']."' class = 'MenuSchoolLink' >".$row['S_NAME']."</SPAN></td></tr>";
    }
    
    echo "</table>";
    
    
    
    //SEC
    $QUERY_CONFERENCE_SCHOOLS = $db->prepare("select S_NAME , S_KEY , URL  from schools where CONFERENCE = 'SEC' order by S_NAME;");

    $QUERY_CONFERENCE_SCHOOLS->execute(); 
    
    echo "<DIV id = 'SECLabel' class = 'ConferenceLabel'>SEC</DIV>";
    
    echo "<table id = 'SchoolListSEC'>";
    
    while ($row = $QUERY_CONFERENCE_SCHOOLS->fetch(PDO::FETCH_ASSOC))
    {
        echo "<tr><td  class = 'SchoolListRow'><SPAN id = '".$row['URL']."' class = 'MenuSchoolLink' >".$row['S_NAME']."</SPAN></td></tr>";
    }
    
    echo "</table>";
    
    
    //IND
    $QUERY_CONFERENCE_SCHOOLS = $db->prepare("select S_NAME , S_KEY , URL  from schools where CONFERENCE = 'EAS' order by S_NAME;");
    
    $QUERY_CONFERENCE_SCHOOLS->execute(); 
    
    echo "<DIV id = 'INDLabel' class = 'ConferenceLabel'>Independents</DIV>";
    
    echo "<table id = 'SchoolListIND'>";
    
    while ($row = $QUERY_CONFERENCE_SCHOOLS->fetch(PDO::FETCH_ASSOC))
    {
        echo "<tr><td  class = 'SchoolListRow'><SPAN id = '".$row['URL']."' class = 'MenuSchoolLink' >".$row['S_NAME']."</SPAN></td></tr>";
    }
    
    echo "</table>";
    
    
    //PAC
    $QUERY_CONFERENCE_SCHOOLS = $db->prepare("select S_NAME , S_KEY , URL  from schools where CONFERENCE = 'PAC' order by S_NAME;");
    
    $QUERY_CONFERENCE_SCHOOLS->execute(); 
    
    echo "<DIV id = 'PACLabel' class = 'ConferenceLabel'>Pac 12</DIV>";
    
    echo "<table id = 'SchoolListPAC'>";
    
    while ($row = $QUERY_CONFERENCE_SCHOOLS->fetch(PDO::FETCH_ASSOC))
    {
        echo "<tr><td  class = 'SchoolListRow'><SPAN id = '".$row['URL']."' class = 'MenuSchoolLink' >".$row['S_NAME']."</SPAN></td></tr>";
    }
    
    echo "</table>";
}



function ListMainPageSchools()
{   
    $config['db'] = array(
    'host' => '198.154.209.170',
    'username' => 'bailjack_admin',
    'password' => 'people96321',
    'dbname' => 'bailjack_csblitz'
    );
    
    $db = new PDO('mysql:host='.$config['db']['host'].';dbname='.$config['db']['dbname'], $config['db']['username'], $config['db']['password']);
    
    //AAC
    $QUERY_CONFERENCE_SCHOOLS = $db->prepare("select S_NAME , S_KEY , URL from schools where CONFERENCE = 'AAC' order by S_NAME;");

    $QUERY_CONFERENCE_SCHOOLS->execute(); 
    
    echo "<DIV id = 'MainAACLabel' class = 'ConferenceLabel'>AAC</DIV>";
    
    echo "<table id = 'MainSchoolListAAC'>";
    
    while ($row = $QUERY_CONFERENCE_SCHOOLS->fetch(PDO::FETCH_ASSOC))
    {
        echo "<tr><td  class = 'SchoolListRow'><a class = 'MenuSchoolLink' href = 'http://csportsdirect.com/school/".$row['URL']."'  >".$row['S_NAME']."</a></td></tr>";
    }
    
    echo "</table>";
    
    
    
    
    //ACC
    $QUERY_CONFERENCE_SCHOOLS = $db->prepare("select S_NAME , S_KEY  , URL from schools where CONFERENCE = 'ACC' order by S_NAME;");

    $QUERY_CONFERENCE_SCHOOLS->execute(); 
    
    echo "<DIV id = 'MainACCLabel' class = 'ConferenceLabel'>ACC</DIV>";
    
    echo "<table id = 'MainSchoolListACC'>";
    
    while ($row = $QUERY_CONFERENCE_SCHOOLS->fetch(PDO::FETCH_ASSOC))
    {
        echo "<tr><td  class = 'SchoolListRow'><a class = 'MenuSchoolLink' href = 'http://csportsdirect.com/school/".$row['URL']."'  >".$row['S_NAME']."</a></td></tr>";
    }
    
    
    
    
    //B1G
    $QUERY_CONFERENCE_SCHOOLS = $db->prepare("select S_NAME , S_KEY , URL  from schools where CONFERENCE = 'B1G' order by S_NAME;");

    $QUERY_CONFERENCE_SCHOOLS->execute(); 
    
    echo "<DIV id = 'MainB1GLabel' class = 'ConferenceLabel'>B1G</DIV>";
    
    echo "<table id = 'MainSchoolListB1G'>";
    
    while ($row = $QUERY_CONFERENCE_SCHOOLS->fetch(PDO::FETCH_ASSOC))
    {
        echo "<tr><td  class = 'SchoolListRow'><a class = 'MenuSchoolLink' href = 'http://csportsdirect.com/school/".$row['URL']."'  >".$row['S_NAME']."</a></td></tr>";
    }
    
    echo "</table>";
    
    
    //Big XII
    $QUERY_CONFERENCE_SCHOOLS = $db->prepare("select S_NAME , S_KEY , URL  from schools where CONFERENCE = 'XII' order by S_NAME;");

    $QUERY_CONFERENCE_SCHOOLS->execute(); 
    
    echo "<DIV id = 'MainXIILabel' class = 'ConferenceLabel'>Big XII</DIV>";
    
    echo "<table id = 'MainSchoolListXII'>";
    
    while ($row = $QUERY_CONFERENCE_SCHOOLS->fetch(PDO::FETCH_ASSOC))
    {
        echo "<tr><td  class = 'SchoolListRow'><a class = 'MenuSchoolLink' href = 'http://csportsdirect.com/school/".$row['URL']."'  >".$row['S_NAME']."</a></td></tr>";
    }
    
    echo "</table>";
    
    
    
    //SEC
    $QUERY_CONFERENCE_SCHOOLS = $db->prepare("select S_NAME , S_KEY , URL  from schools where CONFERENCE = 'SEC' order by S_NAME;");

    $QUERY_CONFERENCE_SCHOOLS->execute(); 
    
    echo "<DIV id = 'MainSECLabel' class = 'ConferenceLabel'>SEC</DIV>";
    
    echo "<table id = 'MainSchoolListSEC'>";
    
    while ($row = $QUERY_CONFERENCE_SCHOOLS->fetch(PDO::FETCH_ASSOC))
    {
        echo "<tr><td  class = 'SchoolListRow'><a class = 'MenuSchoolLink' href = 'http://csportsdirect.com/school/".$row['URL']."'  >".$row['S_NAME']."</a></td></tr>";
    }
    
    echo "</table>";
    
    
    //IND
    $QUERY_CONFERENCE_SCHOOLS = $db->prepare("select S_NAME , S_KEY , URL  from schools where CONFERENCE = 'EAS' order by S_NAME;");
    
    $QUERY_CONFERENCE_SCHOOLS->execute(); 
    
    echo "<DIV id = 'MainINDLabel' class = 'ConferenceLabel'>Independents</DIV>";
    
    echo "<table id = 'MainSchoolListIND'>";
    
    while ($row = $QUERY_CONFERENCE_SCHOOLS->fetch(PDO::FETCH_ASSOC))
    {
        echo "<tr><td  class = 'SchoolListRow'><a class = 'MenuSchoolLink' href = 'http://csportsdirect.com/school/".$row['URL']."'  >".$row['S_NAME']."</a></td></tr>";
    }
    
    echo "</table>";
    
    
    //PAC
    $QUERY_CONFERENCE_SCHOOLS = $db->prepare("select S_NAME , S_KEY , URL  from schools where CONFERENCE = 'PAC' order by S_NAME;");
    
    $QUERY_CONFERENCE_SCHOOLS->execute(); 
    
    echo "<DIV id = 'MainPACLabel' class = 'ConferenceLabel'>Pac 12</DIV>";
    
    echo "<table id = 'MainSchoolListPAC'>";
    
    while ($row = $QUERY_CONFERENCE_SCHOOLS->fetch(PDO::FETCH_ASSOC))
    {
        echo "<tr><td  class = 'SchoolListRow'><a class = 'MenuSchoolLink' href = 'http://csportsdirect.com/school/".$row['URL']."'  >".$row['S_NAME']."</a></td></tr>";
    }
    
    echo "</table>";
}

function Footer()
{
    echo "<li><a href='LinkingMediaPolicy.php'>Linking & Media Policy</a></li>";
    echo "<li><a href='PrivacyPolicyTermsUse.php'>Privacy Policy & Terms of Use</a></li>";
    echo "<li><a href='ContactUs.php'>Contact Us</a></li>";
}




function Get_S_KEY($URL)
{
    IF ($URL == 'Alabama' )
    {
    $S_KEY = '56';
    }
    ELSEIF ($URL == 'Arizona' )
    {
    $S_KEY = '44';
    }
    ELSEIF ($URL == 'ArizonaState' )
    {
    $S_KEY = '45';
    }
    ELSEIF ($URL == 'Arkansas' )
    {
    $S_KEY = '57';
    }
    ELSEIF ($URL == 'Auburn' )
    {
    $S_KEY = '58';
    }
    ELSEIF ($URL == 'Baylor' )
    {
    $S_KEY = '13';
    }
    ELSEIF ($URL == 'BostonCollege' )
    {
    $S_KEY = '1';
    }
    ELSEIF ($URL == 'California' )
    {
    $S_KEY = '46';
    }
    ELSEIF ($URL == 'CentralFlorida' )
    {
    $S_KEY = '68';
    }
    ELSEIF ($URL == 'Cincinnati' )
    {
    $S_KEY = '23';
    }
    ELSEIF ($URL == 'Clemson' )
    {
    $S_KEY = '2';
    }
    ELSEIF ($URL == 'Colorado' )
    {
    $S_KEY = '47';
    }
    ELSEIF ($URL == 'Connecticut' )
    {
    $S_KEY = '24';
    }
    ELSEIF ($URL == 'Duke' )
    {
    $S_KEY = '3';
    }
    ELSEIF ($URL == 'Florida' )
    {
    $S_KEY = '59';
    }
    ELSEIF ($URL == 'FloridaState' )
    {
    $S_KEY = '4';
    }
    ELSEIF ($URL == 'Georgia' )
    {
    $S_KEY = '60';
    }
    ELSEIF ($URL == 'GeorgiaTech' )
    {
    $S_KEY = '5';
    }
    ELSEIF ($URL == 'Houston' )
    {
    $S_KEY = '69';
    }
    ELSEIF ($URL == 'Illinois' )
    {
    $S_KEY = '32';
    }
    ELSEIF ($URL == 'Indiana' )
    {
    $S_KEY = '33';
    }
    ELSEIF ($URL == 'Iowa' )
    {
    $S_KEY = '34';
    }
    ELSEIF ($URL == 'IowaState' )
    {
    $S_KEY = '14';
    }
    ELSEIF ($URL == 'Kansas' )
    {
    $S_KEY = '15';
    }
    ELSEIF ($URL == 'KansasState' )
    {
    $S_KEY = '16';
    }
    ELSEIF ($URL == 'Kentucky' )
    {
    $S_KEY = '61';
    }
    ELSEIF ($URL == 'LouisianaState' )
    {
    $S_KEY = '62';
    }
    ELSEIF ($URL == 'Louisville' )
    {
    $S_KEY = '25';
    }
    ELSEIF ($URL == 'Maryland' )
    {
    $S_KEY = '6';
    }
    ELSEIF ($URL == 'Memphis' )
    {
    $S_KEY = '70';
    }
    ELSEIF ($URL == 'Miami' )
    {
    $S_KEY = '7';
    }
    ELSEIF ($URL == 'Michigan' )
    {
    $S_KEY = '35';
    }
    ELSEIF ($URL == 'MichiganState' )
    {
    $S_KEY = '36';
    }
    ELSEIF ($URL == 'Minnesota' )
    {
    $S_KEY = '37';
    }
    ELSEIF ($URL == 'MississippiState' )
    {
    $S_KEY = '63';
    }
    ELSEIF ($URL == 'Missouri' )
    {
    $S_KEY = '17';
    }
    ELSEIF ($URL == 'Nebraska' )
    {
    $S_KEY = '38';
    }
    ELSEIF ($URL == 'NorthCarolina' )
    {
    $S_KEY = '8';
    }
    ELSEIF ($URL == 'NorthCarolinaState' )
    {
    $S_KEY = '9';
    }
    ELSEIF ($URL == 'Northwestern' )
    {
    $S_KEY = '39';
    }
    ELSEIF ($URL == 'NotreDame' )
    {
    $S_KEY = '26';
    }
    ELSEIF ($URL == 'OhioState' )
    {
    $S_KEY = '40';
    }
    ELSEIF ($URL == 'Oklahoma' )
    {
    $S_KEY = '18';
    }
    ELSEIF ($URL == 'OklahomaState' )
    {
    $S_KEY = '19';
    }
    ELSEIF ($URL == 'OleMiss' )
    {
    $S_KEY = '64';
    }
    ELSEIF ($URL == 'Oregon' )
    {
    $S_KEY = '48';
    }
    ELSEIF ($URL == 'OregonState' )
    {
    $S_KEY = '49';
    }
    ELSEIF ($URL == 'PennState' )
    {
    $S_KEY = '41';
    }
    ELSEIF ($URL == 'Pittsburgh' )
    {
    $S_KEY = '27';
    }
    ELSEIF ($URL == 'Purdue' )
    {
    $S_KEY = '42';
    }
    ELSEIF ($URL == 'Rutgers' )
    {
    $S_KEY = '28';
    }
    ELSEIF ($URL == 'SMU' )
    {
    $S_KEY = '71';
    }
    ELSEIF ($URL == 'SouthCarolina' )
    {
    $S_KEY = '65';
    }
    ELSEIF ($URL == 'SouthFlorida' )
    {
    $S_KEY = '29';
    }
    ELSEIF ($URL == 'Stanford' )
    {
    $S_KEY = '50';
    }
    ELSEIF ($URL == 'Syracuse' )
    {
    $S_KEY = '30';
    }
    ELSEIF ($URL == 'TCU' )
    {
    $S_KEY = '73';
    }
    ELSEIF ($URL == 'Temple' )
    {
    $S_KEY = '72';
    }
    ELSEIF ($URL == 'Tennessee' )
    {
    $S_KEY = '66';
    }
    ELSEIF ($URL == 'Texas' )
    {
    $S_KEY = '20';
    }
    ELSEIF ($URL == 'TexasAM' )
    {
    $S_KEY = '21';
    }
    ELSEIF ($URL == 'TexasTech' )
    {
    $S_KEY = '22';
    }
    ELSEIF ($URL == 'UCLA' )
    {
    $S_KEY = '51';
    }
    ELSEIF ($URL == 'USC' )
    {
    $S_KEY = '52';
    }
    ELSEIF ($URL == 'Utah' )
    {
    $S_KEY = '53';
    }
    ELSEIF ($URL == 'Vanderbilt' )
    {
    $S_KEY = '67';
    }
    ELSEIF ($URL == 'Virginia' )
    {
    $S_KEY = '10';
    }
    ELSEIF ($URL == 'VirginiaTech' )
    {
    $S_KEY = '11';
    }
    ELSEIF ($URL == 'WakeForest' )
    {
    $S_KEY = '12';
    }
    ELSEIF ($URL == 'Washington' )
    {
    $S_KEY = '54';
    }
    ELSEIF ($URL == 'WashingtonState' )
    {
    $S_KEY = '55';
    }
    ELSEIF ($URL == 'WestVirginia' )
    {
    $S_KEY = '31';
    }
    ELSEIF ($URL == 'Wisconsin' )
    {
    $S_KEY = '43';
    }
    ELSE
    {
    $S_KEY = "XXX";
    }
    
    return $S_KEY;
}

function AjaxGenerator()
{
    echo "<DIV id = 'FixedAjaxLoaderContain' class = 'hidden' style = 'position: fixed; width: 100%; top: 10%; height: 100px; z-index: 5;'>";
        echo "<DIV style = 'margin: auto; width: 100px; height: 100px;'><IMG style = 'position: absolute; width: 100px; height: 100px;' src = 'IMG/ajax-loader.gif'></DIV>";
    echo "</DIV>";
}

function TopSection()
{  
    
    $config['db'] = array(
    'host' => '198.154.209.170',
    'username' => 'bailjack_admin',
    'password' => 'people96321',
    'dbname' => 'bailjack_csblitz'
    );
    
    $db = new PDO('mysql:host='.$config['db']['host'].';dbname='.$config['db']['dbname'], $config['db']['username'], $config['db']['password']);    
    
    function FrontTopLinks()
    {
     $config['db'] = array(
    'host' => '198.154.209.170',
    'username' => 'bailjack_admin',
    'password' => 'people96321',
    'dbname' => 'bailjack_csblitz'
    );
    
    $db = new PDO('mysql:host='.$config['db']['host'].';dbname='.$config['db']['dbname'], $config['db']['username'], $config['db']['password']);
    
    //Links Query
    $QUERY_FRONT_LINKS = $db->prepare("select LINK_ORDER , LINK_TITLE , LINK from front_links 
            order by LINK_ORDER;");

    $QUERY_FRONT_LINKS->execute(); 
    
    echo "<UL id = 'FrontTopLinks'>";
    
    while ($row = $QUERY_FRONT_LINKS->fetch(PDO::FETCH_ASSOC))
    {
        echo "<li class = 'FrontTopLinkInstance'><a class = 'StandardFrontLink' href = '".$row['LINK']."' target = '_blank'>".$row['LINK_TITLE']."</a></li>";
    }
    
    echo "</UL>";
    }
    
    $QUERY_TOP_SECTION_STORY = $db->prepare("select story.STORY_KEY , STORY_TITLE , STORY_URL , IMAGE_HEIGHT , IMAGE_WIDTH , FILE_TYPE , IMAGE_ALT , IMAGE_CREDIT 
                FROM story
                join admins on story.AUTHOR_KEY = admins.ADMIN_KEY 
                join story_images on story.STORY_KEY = story_images.STORY_KEY 
                join front_stories on story.STORY_KEY = front_stories.LEAD_STORY_KEY;");

    $QUERY_TOP_SECTION_STORY->execute();
    
    while ($row = $QUERY_TOP_SECTION_STORY->fetch(PDO::FETCH_ASSOC))
    {
        $STORY_KEY = $row['STORY_KEY'];
        $STORY_TITLE = $row['STORY_TITLE'];
        $STORY_URL = $row['STORY_URL'];
        
        $IMAGE_HEIGHT = $row['IMAGE_HEIGHT'];
        $IMAGE_WIDTH = $row['IMAGE_WIDTH'];
        
        $FILE_TYPE = $row['FILE_TYPE'];
        
        $IMAGE_ALT = $row['IMAGE_ALT'];
        $IMAGE_CREDIT = $row['IMAGE_CREDIT'];
    }
    
    $NEW_IMAGE_WIDTH = round((450*$IMAGE_WIDTH)/$IMAGE_HEIGHT);
    
    $RIGHT_LINKS_WIDTH = 1024 - $NEW_IMAGE_WIDTH;
    
    echo "<DIV id = 'FrontMainSection' style = 'height: 450px;'>";
    
        echo "<img style = 'position: absolute;  width: ".$NEW_IMAGE_WIDTH."px; height: 100%;' src ='STORY_IMAGES/".$STORY_KEY.".".$FILE_TYPE."' alt ='".$IMAGE_ALT."' width = '".$NEW_IMAGE_WIDTH."' height = '450' >";
        
        echo "<DIV class ='BlackFadeBackground' style = 'width: ".$NEW_IMAGE_WIDTH."px;'></DIV>";
        
        echo "<DIV class ='FrontTextHolder' style = 'width: ".$NEW_IMAGE_WIDTH."px;'>
                <a class ='HeadArticleTitle' href ='http://csportsdirect.com/story/".$STORY_URL."'>".$STORY_TITLE."</a>";
                IF (!is_null($row['IMAGE_CREDIT'])) { echo "<DIV class='PhotoCredit'>photo credit: ".  stripslashes($row['IMAGE_CREDIT'])."</DIV>"; }
       echo "</DIV>";
        
        echo "<DIV class ='HeadlinesContainerBox' style = 'width: ".$RIGHT_LINKS_WIDTH."px;'>
                    <DIV id ='HeadlinesHead'>Headlines</DIV>";
                 FrontTopLinks(); 
                    
                    echo "<DIV class ='RightContentBar'></DIV>
                    
                    
                    <DIV class ='FrontTopRightSectionBackTop'></DIV>
                    <DIV class ='FrontTopRightSectionBackBottom'></DIV>
                </DIV>";
        
    echo "</DIV>";
}

function MobileTopSection()
{
    $config['db'] = array(
    'host' => '198.154.209.170',
    'username' => 'bailjack_admin',
    'password' => 'people96321',
    'dbname' => 'bailjack_csblitz'
    );
    
    $db = new PDO('mysql:host='.$config['db']['host'].';dbname='.$config['db']['dbname'], $config['db']['username'], $config['db']['password']);
    
    $QUERY_TOP_SECTION_STORY = $db->prepare("select story.STORY_KEY , STORY_TITLE , STORY_URL , IMAGE_HEIGHT , IMAGE_WIDTH , FILE_TYPE , IMAGE_ALT , IMAGE_CREDIT 
                FROM story
                join admins on story.AUTHOR_KEY = admins.ADMIN_KEY 
                join story_images on story.STORY_KEY = story_images.STORY_KEY 
                join front_stories on story.STORY_KEY = front_stories.LEAD_STORY_KEY;");

    $QUERY_TOP_SECTION_STORY->execute();
    
    while ($row = $QUERY_TOP_SECTION_STORY->fetch(PDO::FETCH_ASSOC))
    {
        $STORY_KEY = $row['STORY_KEY'];
        $STORY_TITLE = $row['STORY_TITLE'];
        $STORY_URL = $row['STORY_URL'];
        
        $IMAGE_HEIGHT = round($row['IMAGE_HEIGHT']*(280/$row['IMAGE_WIDTH']));
        
        $IMAGE_WIDTH = $row['IMAGE_WIDTH'];
        
        $FILE_TYPE = $row['FILE_TYPE'];
        
        $IMAGE_ALT = $row['IMAGE_ALT'];
        $IMAGE_CREDIT = $row['IMAGE_CREDIT'];
        
        $DIV_HEIGHT = $IMAGE_HEIGHT + 15;
    }
    
    echo "<DIV style ='position: relative; width: 100%; height: ".$DIV_HEIGHT."px; margin-left: 0px; margin-right: 0px; margin-top: 15px; padding: 0px;'>
            <DIV style ='margin: auto; width: 280px;'>
                <img class ='FrontLeadImage' style ='position: absolute; width: 280px; height: ".$IMAGE_HEIGHT."px' src ='STORY_IMAGES/".$STORY_KEY.".".$FILE_TYPE."' alt ='".$IMAGE_ALT."'>
            </DIV>
        </DIV>";
    
    echo "<H1 class ='ArticleHeader'><a href ='MobileStory.php?STORY_KEY=".$STORY_URL."'>".$STORY_TITLE."</a></H1>";
}

function GetStoryKey($STORY_URL)
{   
    $config['db'] = array(
    'host' => '198.154.209.170',
    'username' => 'bailjack_admin',
    'password' => 'people96321',
    'dbname' => 'bailjack_csblitz'
    );
    
    $db = new PDO('mysql:host='.$config['db']['host'].';dbname='.$config['db']['dbname'], $config['db']['username'], $config['db']['password']);
    
    
    IF ($STORY_URL == "Week-9-Recap")
    {
        return "1";
    }
    ELSE
    {
        $QUERY_STORY_KEY = $db->prepare("select STORY_KEY from story where STORY_URL = :story_url;");

        $QUERY_STORY_KEY->bindValue(':story_url', $STORY_URL);
        
        $QUERY_STORY_KEY->execute(); 
        
        while ($row = $QUERY_STORY_KEY->fetch(PDO::FETCH_ASSOC))
        {
            return $row['STORY_KEY'];
        }
    }
}

function ArticleDate($DB_DATE)
{
                //DB Status Date
            $DB_DATE_TIME = $DB_DATE - 25200;
           
            //Today Check
            $CURRENT_DATE_TODAY = date("m/d/Y",time()-25200);
            $DB_DATE_COMPARE = date("m/d/Y",$DB_DATE_TIME);

            //Yesterday Check
            $CURRENT_DATE_YESTERDAY = date("m/d/Y",time()-10800);

            //Four Days Check
            $FOUR_DAY_DIFFERENCE = time() - $DB_DATE;


            IF ($CURRENT_DATE_TODAY == $DB_DATE_COMPARE)
            {
                $STATUS_DATE = " Today ".date("g:i a",$DB_DATE_TIME);
            }
            ELSEIF ($CURRENT_DATE_YESTERDAY == $DB_DATE_COMPARE)
            {
                $STATUS_DATE = " Yesterday ".date("g:i a",$DB_DATE_TIME);
            }
            ELSEIF ($FOUR_DAY_DIFFERENCE < 349200)
            {
                $STATUS_DATE = "on ".date("l",$DB_DATE_TIME)." ".date("g:i a",$DB_DATE_TIME);
            }
            ELSE
            {
                $STATUS_DATE = "on ".date("m/d/Y",$DB_DATE_TIME)." ".date("g:i a",$DB_DATE_TIME);
            }
            
            return $STATUS_DATE;
}

function FrontTopLinksMobile()
    {
     $config['db'] = array(
    'host' => '198.154.209.170',
    'username' => 'bailjack_admin',
    'password' => 'people96321',
    'dbname' => 'bailjack_csblitz'
    );
    
    $db = new PDO('mysql:host='.$config['db']['host'].';dbname='.$config['db']['dbname'], $config['db']['username'], $config['db']['password']);
    
    //Links Query
    $QUERY_FRONT_LINKS = $db->prepare("select LINK_ORDER , LINK_TITLE , LINK from front_links 
            order by LINK_ORDER;");

    $QUERY_FRONT_LINKS->execute(); 
    
    echo "<UL id = 'FrontTopLinks'>";
    
    while ($row = $QUERY_FRONT_LINKS->fetch(PDO::FETCH_ASSOC))
    {
        echo "<li class = 'FrontTopLinkInstance'><a class = 'StandardFrontLink' href = '".$row['LINK']."' target = '_blank'>".$row['LINK_TITLE']."</a></li>";
    }
    
    echo "</UL>";
    }
    
function PopulateStoryTraditional($STORY_KEY)
{   
    
   $config['db'] = array(
    'host' => '198.154.209.170',
    'username' => 'bailjack_admin',
    'password' => 'people96321',
    'dbname' => 'bailjack_csblitz'
    );
    
    $db = new PDO('mysql:host='.$config['db']['host'].';dbname='.$config['db']['dbname'], $config['db']['username'], $config['db']['password']);
    
    
    $QUERY_STORY_TEXT = $db->prepare("select SUB_HEADER , PARAGRAPH_ENTRY from traditional_story where STORY_KEY = :story_key order by ENTRY_ORDER;");
    
    $QUERY_STORY_TEXT->bindValue(':story_key', $STORY_KEY);
    
    $QUERY_STORY_TEXT->execute(); 

    while ($row = $QUERY_STORY_TEXT->fetch(PDO::FETCH_ASSOC))
    {
        IF (!IS_NULL($row['SUB_HEADER']))
        {
            echo "<H2 class ='SecondaryHead'>".stripslashes($row['SUB_HEADER'])."</H2>";
        }
        ELSE
        {
            echo stripslashes($row['PARAGRAPH_ENTRY']);
        }
    }
}

function MobileTraditionalStory($STORY_KEY)
{
    $config['db'] = array(
    'host' => '198.154.209.170',
    'username' => 'bailjack_admin',
    'password' => 'people96321',
    'dbname' => 'bailjack_csblitz'
    );
    
    $db = new PDO('mysql:host='.$config['db']['host'].';dbname='.$config['db']['dbname'], $config['db']['username'], $config['db']['password']);
    
    
    $QUERY_TOP_SECTION_STORY = $db->prepare("select story.STORY_KEY , STORY_TITLE , STORY_URL , IMAGE_HEIGHT , IMAGE_WIDTH , FILE_TYPE , IMAGE_ALT , IMAGE_CREDIT 
                FROM story
                join admins on story.AUTHOR_KEY = admins.ADMIN_KEY 
                join story_images on story.STORY_KEY = story_images.STORY_KEY 
                join front_stories on story.STORY_KEY = front_stories.LEAD_STORY_KEY;");

    $QUERY_TOP_SECTION_STORY->execute();
    
    while ($row = $QUERY_TOP_SECTION_STORY->fetch(PDO::FETCH_ASSOC))
    {
        $STORY_KEY = $row['STORY_KEY'];
        $STORY_TITLE = $row['STORY_TITLE'];
        $STORY_URL = $row['STORY_URL'];
        
        $IMAGE_HEIGHT = round($row['IMAGE_HEIGHT']*(280/$row['IMAGE_WIDTH']));
        
        $IMAGE_WIDTH = $row['IMAGE_WIDTH'];
        
        $FILE_TYPE = $row['FILE_TYPE'];
        
        $IMAGE_ALT = $row['IMAGE_ALT'];
        $IMAGE_CREDIT = $row['IMAGE_CREDIT'];
        
        $DIV_HEIGHT = $IMAGE_HEIGHT + 15;
    }
    
    echo "<H1 class ='PageHead'>".$STORY_TITLE."</H1>";
    
    echo "<DIV style ='position: relative; width: 100%; height: ".$DIV_HEIGHT."px; margin-left: 0px; margin-right: 0px; margin-top: 15px; padding: 0px;'>
            <DIV style ='margin: auto; width: 280px;'>
                <img class ='FrontLeadImage' style ='position: absolute; width: 280px; height: ".$IMAGE_HEIGHT."px; border-style: solid; border-width: 3px; border-color: #A8A8A8; border-radius: 2px;' src ='STORY_IMAGES/".$STORY_KEY.".".$FILE_TYPE."' alt ='".$IMAGE_ALT."'>
            </DIV>
        </DIV>";
    
    $QUERY_STORY_TEXT = $db->prepare("select SUB_HEADER , PARAGRAPH_ENTRY from traditional_story where STORY_KEY = :story_key order by ENTRY_ORDER;");
    
    $QUERY_STORY_TEXT->bindValue(':story_key', $STORY_KEY);
    
    $QUERY_STORY_TEXT->execute(); 

    while ($row = $QUERY_STORY_TEXT->fetch(PDO::FETCH_ASSOC))
    {
        IF (!IS_NULL($row['SUB_HEADER']))
        {
            echo "<H2 class ='ArticleSectionHead'>".stripslashes($row['SUB_HEADER'])."</H2>";
        }
        ELSE
        {
            echo "<p class = 'ArticleText'>".stripslashes($row['PARAGRAPH_ENTRY'])."</p>";
        }
    }
    
}


function XMLTreatment($TEXT)
{   
    $RETURN_TEXT = htmlspecialchars($TEXT);
    
    $RETURN_TEXT = stripslashes($RETURN_TEXT);
    
    $RETURN_TEXT = str_replace("'", "",$RETURN_TEXT);
    
    $RETURN_TEXT = str_replace("<BR>", "",$RETURN_TEXT);
    
    $RETURN_TEXT = str_replace("’", "",$RETURN_TEXT);
    
    $RETURN_TEXT = str_replace("`", "",$RETURN_TEXT);
    
    $RETURN_TEXT = str_replace("<br/>", "",$RETURN_TEXT);
    
    $RETURN_TEXT = str_replace("<br />", "",$RETURN_TEXT);
    
    return $RETURN_TEXT;
}

?>