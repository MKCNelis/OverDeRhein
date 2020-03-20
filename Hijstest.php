<?php
//PHP always on top of the file

//    a funtion to save an array to a file
//@ parameter: $_a SavedArray
// Type array
// Description: to save an array
function SaveArray($p_SavedArray){
// Use JSON to encode the array into a storeable string
    $aJSONArray = json_encode($p_SavedArray);

    // Open the file in 'write' modus
    $file = fopen('database.json','w');

    // Save the content of the JSON array into the file
    file_put_contents('database.json', $aJSONArray);

// Close the file
    fclose($file);

}
// A funtion to load an array
//
function LoadArray(){
// Open the file in 'read' modus
    $file = fopen('database.json','r');

// Read the JSON array from the file
    $aJSONArray = file_get_contents('database.json');

// Convert to JSON array back to a PHP array
    $aReadArray = json_decode($aJSONArray,TRUE);

    // Close the file again
    fclose($file);
//send the loaded data to main
    return($aReadArray);
}
// Declare the Variables
    $sOpdrachtnummer = "";
    $sTVCTNummer = "";
    $sDatum = "";
$sDeKlijn = "";

    $sOparator = "";
    $sDeskundigen = "";
    $sUitvoeringDoor="";
    $bUitvoeringkraan="";
    $bUitvoeringOnderwagen="";
    $bUitvoeringToren="";
    $bHaakhoogte="";
    $bTelescoop="";
    $bHaakhoogte="";
    $bOpbouwGiek="";
    $bTopbaar="";
    $bHulpgiek="";
    $bMetloopkat="";
    $bRailstellenspoorbreetewielbalast="";
    $bVerstelbareGiek="";
    $bRijdend="";
    $bMonogiek="";
    $bHaakhoogte="";
    $bStationare="";
    $bFly_jib="";
    $bBingietframe="";
    $bStempel="";
    $bVrijstaand="";
    $bStempel="";
    $bBevindingen="";
    $bTekortkomingAofB="";
    $bJa="";
    $bNee="";
    $sAfgemeldDoor"";
    $sDirecteVoorzieningen="";
    $sToelichting="";
//Fill a variable with the posted Note
if(!empty($_POST)) {
    var_dump($_POST);

    $sOpdrachtnummer = $_POST ['sOPdrachtnummer'];
    $sTVCTNummer= $_POST ['sTVCTNummer'];
    $sDatum =$_POST ['sDatum'];
    $sOparator=$_POST ['sOparator'];
    $sDeskundigen=$_POST ['sDeskundligen'];
    $sUitvoeringDoor = $_POST ['sUuitvoeringDoor'];
    $bUitvoeringKraan = $_POST ['bUitvoeringKraan'];
    $bUitvoeringOnderwagen = $_POST ['uUitvoeringOnderwagen'];
    $bUitvoeringToren = $_POST ['bUitvoeringtoren'];
    $bHaakHoogte = $_POST ['bHaakHoogte'];
    $bTelescoop = $_POST ['bTelescoop'];
    $bHaakhoogte = $_POST ['bHaakHoogte'];
    $bOpbouwGiek = $_POST ['bOpbouGiek'];
    $bTopbaar = $_POST ['bTopbaar'];
    $bHulpgiek = $_POST ['bHulphiek'];
    $bMetloopkat = $_POST [''];
    $bRailstellenspoorbreetewielbalast = $_POST [''];
    $bVerstelbareGiek =$_POST ['bVerstelbareGiek'];
    $bRijdend =$_POST ['bRijdend'];
    $bMonogiek =$_POST ['bMonoGiek'];
    $bHaakhoogte =$_POST ['bHaakHoogte'];
    $bStationare =$_POST ['bStationare'];
    $bFlyJib =$_POST ['bFlyJib'];
    $bBingietframe =$_POST ['bBinggietFrame'];
    $bStempel =$_POST ['bStempel'];
    $bVrijstaand =$_POST ['bVrijStaand'];
    $bStempel =$_POST ['bStempel'];
    $bBevindingen =$_POST ['bBevindingen'];
    $bTekortkomingAofB =$_POST ['Btekortkoming'];
    $bJa =$_POST ['bJa'];
    $bNee =$_POST ['bNee'];
    $sAfgemeldDoor =$_POST ['aAfmelding'];
    $sDirecteVoorzieningen =$_POST ['sDirecteVoorzieningen'];
    $sToelichting =$_POST ['sToelichting'];
//     load the database
    $aDatabase = LoadArray();
    // Count the number of records in the database
    $iRecordCounter = count($aDatabase);
    // Add a new record to the database
    $aDatabase[$iRecordCounter] = array($sFirstName, $sPostalCode, $sCity);
//   save the databaseeeq to file
    SaveArray($aDatabase);
}
?>

<!DOCTYPE html>
<!--
name document:		Hijstest.html
author:				Maikel Nelis
date of creation:	12-02-2019
document function:	systeenm voor hijstesten
date last change:	18-02-2019
-->
<html>
    <head> <!--styling-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <link rel='stylesheet' Type='text/css' href="CSS\stylesheet.css">
    </head>
        <body><!--bodyclass for styling-->
            <div class='blockContainer'>
                <button>bestand</button>
                <button>info</button>
            </div>
            <br><br>
             <div class='container'>
                <div class='innerContainer'><!--begin innercontainer-->
                    <h4>Tabel Hijskraangegevens(2100)</h4><!--tilete fot page-->
                    <table class="tablestyle">
                        <td class="invisablecell" colspan="17" align="right">
                    <form>
                        <h6>opdrachtnummer</h6><input type="number"  placeholder="opdrachtnummer"> <br><!--ordernummer-->
                    </form>
                        </td>
                        <tr>
                    <td class="invisablecell" colspan="17" align="left"><!--text With formula-->
                    <p>Bepaal(bereken of lesst af uit de tabel) de toelaatbare hijslast bij gemeten vlucht.<br>
                         vereken vervolgens de afwijken met de volgende Formule<br>
                        (proeflast-toelaatberehuislast)<br>
                        _______________________________<br>
                    afwijking= toelatbare hijslast *100%
                        </p>
                    </td>
                </tr>
                    <br>
            <!--Begin table wil load info from A Datafile if it works-->
                <tr>
                    <th class="blue">hijstesten</th>
                    <th class="blue" colspan="3">opgesteld op</th>
                    <th class="blue" colspan="4">Gieklengte</th>
                    <th class="blue" colspan="3">Giekhoek</th>
                    <th class="blue" colspan="4">Zwenkelhoek</th>
                    <th class="blue" colspan="2">beproeving</th>
                    <th class="blue" colspan="2">akoord</th>
                </tr>

                <tr>
                    <th class="blue"></th>
                    <th class="blue">banden</th>
                    <th class="blue">Stempels</th>
                    <th class="blue">Rupsen</th>
                    <th class="blue">hoofd-<br>giek</th>
                    <th class="blue">mecha-<br>nische<br>sectie</th>
                    <th class="blue">hulp-<br>giek</th>
                    <th class="blue">Totale<br>giek<br>lengte</th>
                    <th class="blue">hoofd<br>giek</th>
                    <th class="blue">hulp-<br>giek</th>
                    <th class="blue">aantal<br>parten<br>hijskabel</th>
                    <th class="blue">R=360<br>A=achter<br>Z=zij<br>sV=Voorsector</th>
                    <th class="blue">Eingen<br>Massa<br>ballast <br>LMB code</th>
                    <th class="blue">Toelaatbere<br>bedrijfslast<br>bij inwerking</th>
                    <th class="blue">LMB<br>treedt in<br>bij werking bij</th>
                    <th class="blue">proeflast</th>
                    <th class="blue">Afwijking in %</th>
                    <th class='green'>ja  </th>
                    <th class='red'>Nee</th>
                </tr>

                <tr>
                    <th class="blue"></th>
                    <th class="blue"></th>
                    <th class="blue"></th>
                    <th class="blue"></th>
                    <th class="blue">m</th>
                    <th class="blue">m</th>
                    <th class="blue">m</th>
                    <th class="blue">m</th>
                    <th class="blue">gr</th>
                    <th class="blue">gr</th>
                    <th class="blue"></th>
                    <th class="blue"></th>
                    <th class="blue">t</th>
                    <th class="blue"></th>
                    <th class="blue"></th>
                    <th class="blue">m</th>
                    <th class="blue">t</th>
                    <th class="green"></th>
                    <th class="red"></th>
                </tr>
               
                <tr>
                    <td class="white">1</td>
                    <td class="white"></td>
                    <td class="white"></td>
                    <td class="white"></td>
                    <td class="white"></td>
                    <td class="white"></td>
                    <td class="white"></td>
                    <td class="white"></td>
                    <td class="white"></td>
                    <td class="white"></td>
                    <td class="white"></td>
                    <td class="white"></td>
                    <td class="white"></td>
                    <td class="white"></td>
                    <td class="white"></td>
                    <td class="white"></td>
                    <td class="white"></td>
                    <td class='green'></td>
                    <td class='red'></td>
                </tr>
                        <tr>
                        <td class="white">1</td>
                        <td class="white"></td>
                        <td class="white"></td>
                        <td class="white"></td>
                        <td class="white"></td>
                        <td class="white"></td>
                        <td class="white"></td>
                        <td class="white"></td>
                        <td class="white"></td>
                        <td class="white"></td>
                        <td class="white"></td>
                        <td class="white"></td>
                        <td class="white"></td>
                        <td class="white"></td>
                        <td class="white"></td>
                        <td class="white"></td>
                        <td class="white"></td>
                        <td class='green'></td>
                        <td class='red'></td>
                    </tr>

                <tr>
                    <td class="invisablecell" colspan="17" align="right">
                        <button>Exit</button>
                    </td>
                </tr>
            </table>
            </div>
        </div>
        </body>
    <footer>

    </footer>
</html>