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
    // $iOpdrachtnummer = "";
    // $iTVCTNummer = "";
    // $sDatum = "";
    // $sOparator = "";
    // $sDeskundigen = "";
    // $sFabrikant = "";
    // $sFabrikaat = "";
    // $sHijsModelType = "";
    // $sOnderModelType = "";
    // $iSerieNumber = "";
    // $iIndentificationNumber = "";
    // $iHijsBedrijfsNummer = "";
    // $iOnderBedrijfsNummer = "";
    // $iBouwJaar = "";
    // $sUitvoeringDoor="";
    // $bUitvoeringkraan="";
    // $bUitvoeringOnderwagen="";
    // $bUitvoeringToren="";
    // $bHaakhoogte="";
    // $bTelescoop="";
    // $bOpbouwGiek="";
    // $bTopbaar="";
    // $bHulpgiek="";
    // $bMetloopkat="";
    // $bRailstellen="";
    // $bVerstelbareGiek="";
    // $bRijdend="";
    // $bMonogiek="";
    // $bStationare="";
    // $bFlyJib="";
    // $bBingietframe="";
    // $bStempel="";
    // $bVrijstaand="";
    // $bStempel="";
    // $bBevindingen="";
    // $bTekortkomingAofB="";
    // $bJa="";
    // $bNee="";
    // $sAfgemeldDoor = "";
    // $sDirecteVoorzieningen = "";
    // $sToelichting = "";
//Fill a variable with the posted Note
if(!empty($_POST)) {
    var_dump($_POST);

    $iOpdrachtnummer = $_POST['iOpdrachtnummer'];
    $iTVCTNummer= $_POST['iTVCTNummer'];
    $sDatum =$_POST['sDatum'];
    $sOparator=$_POST['sOparator'];
    $sDeskundigen=$_POST['sDeskundigen'];
    $sFabrikant=$_POST['sFabrikant'];
    $sFabrikaat=$_POST['sFabrikaat'];
    $sHijsModelType=$_POST['sHijsModelType'];
    $sOnderModelType=$_POST['sOnderModelType'];
    $iSerieNumber=$_POST['iSerieNumber'];
    $iIndentificationNumber=$_POST['iIndentificationNumber'];
    $iHijsBedrijfsNummer=$_POST['iHijsBedrijfsNummer'];
    $iOnderBedrijfsNummer=$_POST['iOnderBedrijfsNummer'];
    $iBouwJaar=$_POST['iBouwjaar'];
    $sUitvoeringDoor = $_POST['sUitvoeringDoor'];
    $bUitvoeringKraan = $_POST['bUitvoeringKraan'];
    $bUitvoeringOnderwagen = $_POST['bUitvoeringOnderwagen'];
    $bUitvoeringToren = $_POST['bUitvoeringtoren'];
    $bTelescoop = $_POST['bTelescoop'];
    $bOpbouwGiek = $_POST['bOpbouwGiek'];
    $bTopbaar = $_POST['bTopbaar'];
    $bHulpgiek = $_POST['bHulpgiek'];
    $bMetloopkat = $_POST['bMetloopkat'];
    $bRailstellen = $_POST['bRailstellen'];
    $bKnikgiek = $_POST['bKnikgiek'];
    $bVerstelbareGiek =$_POST['bVerstelbareGiek'];
    $bRijdend =$_POST['bRijdend'];
    $bMonogiek =$_POST['bMonoGiek'];
    $bHaakhoogte =$_POST['bHaakHoogte'];
    $bStationare =$_POST['bStationare'];
    $bFlyJib =$_POST['bFlyJib'];
    $bIngietframe =$_POST['bIngietFrame'];
    $bStempel =$_POST['bStempel'];
    $bVrijstaand =$_POST['bVrijStaand'];
    $bDozenblazer =$_POST['bDozenblazer'];
    $bBevindingen =$_POST['bBevindingen'];
    $bTekortkomingAofB =$_POST['bTekortkoming'];
    $bJa =$_POST['bJa'];
    $bNee =$_POST['bNee'];
    $sAfgemeldDoor =$_POST['sAfmelding'];
    $sDirecteVoorzieningen =$_POST['sDirecteVoorzieningen'];
    $sToelichting =$_POST['sToelichting'];
//     load the database
    $aDatabase = LoadArray();
    // Count the number of records in the database
    $aInputRadioButtons = array($bUitvoeringKraan,
        $bUitvoeringOnderwagen,$bUitvoeringToren,$bTelescoop,$bOpbouwGiek,$bTopbaar,$bHulpgiek,$bMetloopkat,
        $bRailstellen,$bKnikgiek,$bVerstelbareGiek,$bRijdend,$bMonogiek,$bHaakhoogte,$bStationare,$bFlyJib,$bIngietframe,$bDozenblazer,
        $bVrijstaand,$bStempel,$bBevindingen,$bTekortkomingAofB,$bJa,$bNee);
    $iRecordCounter = count($aDatabase);
    // Add a new record to the database
    $aDatabase[$iRecordCounter] = array($sAfgemeldDoor,$sDirecteVoorzieningen,$sToelichting,$iOpdrachtnummer,$iTVCTNummer,
        $sDatum,$sOparator,$sDeskundigen,$sFabrikant,$sFabrikaat,$sHijsModelType,$sOnderModelType,$iSerieNumber,$iIndentificationNumber,
        $iHijsBedrijfsNummer,$iOnderBedrijfsNummer,$iBouwJaar,$sUitvoeringDoor);

    // A foreach to walk thru the array
    foreach($aInputRadioButtons as $sButton){
        if(!empty($sButton)){

        } // End if not
    } // End foreach Radiobutton


//   save the database to file
    SaveArray($aDatabase);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <!--Bootstrap-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!--Stylesheet-->
<link rel="stylesheet" href="./css.css">
</head>
<body class='keuring'>

    <div>
        <center><img src="./Afbeeldingen/Place image here.jpg" style: width="10%"></center>
        <header style="float: right;"><h2>Hijstabel</h2></header>
        <br><br>
        <button>Bestand</button>
        <button>Info</button>
    </div>
    <br>
    <br>
    <form method="POST">
    <div class="tableholder overFlow">
        <Table width="80%" style="margin-left: auto; margin-right: auto;">


            <tr>
                <th class="invisablecell" colspan="5">Periodiek keuring voorblad keuringsrapport</th>     <!--onzichtbare row-->
            </tr>
            <tr>
                <td class="invisablecell" colspan="6"></td>     <!--onzichtbare row-->
            </tr>


            <tr>    <!--onzichtbare row met tekst-->
                <td class="invisablecell" colspan="1"><b>opdrachtnummer:</b></td>
                <td colspan="2" class="invisablecell"><input type="number" name="iOpdrachtnummer"></td>
                <td colspan="1" class="invisablecell"></td>
                <td class="invisablecell" colspan="2"><b>TCVT-nummer:</b></td>
                <td colspan="1" class="invisablecell"></td>
                <td colspan="1" class="invisablecell"><input type="number" name="iTVCTNummer"></td>
            </tr>


            <tr>
                <td class="noLeftBorder noRightBorder noTopBorder" colspan="6"></td>     <!--onzichtbare row-->
            </tr>


            <tr>    <!--onzichtbare row met tekst-->
                <td class="noRightBorder noBottomBorder" colspan="1"><b>Keuring</b></td>
                <td class="noLeftBorder noRightBorder noBottomBorder" colspan="1">keurings datum</td>
                <td class="noLeftBorder noRightBorder noBottomBorder"><input type="datetime-local" name="sDatum"></td>
                <td class="invisablecell" colspan="1"></td>
                <td class="noLeftBorder noRightBorder noBottomBorder" colspan="3"></td>
                <td class="noLeftBorder noBottomBorder" colspan="3"></td>
            </tr>
            <tr>    <!--onzichtbare row met tekst-->
                <td class="noRightBorder noTopBorder" colspan="1"></td>
                <td class="noLeftBorder noRightBorder noTopBorder" colspan="1">uitgevoerd door</td>
                <td class="noLeftBorder noRightBorder noTopBorder" colspan="1"><input type="Name" name="sOparator"></td>
                <td class="noLeftBorder noRightBorder noTopBorder" colspan="1"></td>
                <td class="noLeftBorder noRightBorder noTopBorder" colspan="1">deskundige</td>
                <td class="invisablecell" colspan="1"></td>
                <td class="noLeftBorder noRightBorder  noTopBorder" colspan="1"></td>
                <td class="noLeftBorder noTopBorder" colspan="1"><input type="name" name="$sDeskundigen"></td>
            </tr>


            <tr>
                <td class="noLeftBorder noRightBorder noTopBorder" colspan="8"></td>     <!--onzichtbare row-->
            </tr>


            <tr>
                <td class="noRightBorder noBottomBorder" colspan="1">Materiaal</td>
                <td class="noBottomBorder noRightBorder noLeftBorder" colspan="1">hijskraan</td>
                <td class="noLeftBorder noRightBorder noBottomBorder " colspan="1"></td>
                <td class="noLeftBorder noRightBorder noBottomBorder" colspan="1">onderwagen</td>
                <td class="noLeftBorder noRightBorder noBottomBorder" colspan="1"></td>
                <td class="noLeftBorder noRightBorder noBottomBorder" colspan="1"></td>
                <td class="noLeftBorder noBottomBorder" colspan="2"></td>
            </tr>
            <tr>
                <td class="noRightBorder noBottomBorder" colspan="1"></td>
                <td class="noBottomBorder noRightBorder noLeftBorder" colspan="1">Fabrikant</td>
                <td class="noLeftBorder noRightBorder noBottomBorder" colspan="1"><input type="text" name="sFabrikant"></td>
                <td class="noLeftBorder noRightBorder noBottomBorder" colspan="1">fabrikaat</td>
                <td class="noLeftBorder noRightBorder noBottomBorder" colspan="1"><input type="text" name="sfabrikaat"></td>
                <td class="noLeftBorder noRightBorder noBottomBorder" colspan="1"></td>
                <td class="noLeftBorder noBottomBorder" colspan="2"></td>
            </tr>
            <tr>
                <td class="noRightBorder noBottomBorder" colspan="1"></td>
                <td class="noBottomBorder noRightBorder noLeftBorder" colspan="1">model/type:</td>
                <td class="noLeftBorder noRightBorder noBottomBorder" colspan="1"><input type="text" name="sHijsModelType"></td>
                <td class="noLeftBorder noRightBorder noBottomBorder" colspan="1">model/type:</td>
                <td class="noLeftBorder noRightBorder noBottomBorder" colspan="1"><input type="text" name=sOnderModelType></td>
                <td class="noLeftBorder noRightBorder noBottomBorder" colspan="1"></td>
                <td class="noLeftBorder noBottomBorder" colspan="2"></td>
            </tr>
            <tr>
                <td class="noRightBorder noBottomBorder" colspan="1"></td>
                <td class="noBottomBorder noRightBorder noLeftBorder" colspan="1">serienummer:</td>
                <td class="noLeftBorder noRightBorder noBottomBorder" colspan="1"><input type="number" name="iSerienumber"></td>
                <td class="noLeftBorder noRightBorder noBottomBorder" colspan="1">indenticatienummer:</td>
                <td class="noLeftBorder noRightBorder noBottomBorder" colspan="1"><input type="number" name="iIndentificationNumber"></td>
                <td class="noLeftBorder noRightBorder noBottomBorder" colspan="1"></td>
                <td class="noLeftBorder noBottomBorder" colspan="2"></td>
            </tr>
            <tr>
                <td class="noRightBorder noBottomBorder" colspan="1"></td>
                <td class="noBottomBorder noRightBorder noLeftBorder" colspan="1">bedrijfsnummer:</td>
                <td class="noLeftBorder noRightBorder noBottomBorder" colspan="1"><input type="number" name="iHijsBedrijfsNummer"></td>
                <td class="noLeftBorder noRightBorder noBottomBorder" colspan="1">bedrijfsnummer:</td>
                <td class="noLeftBorder noRightBorder noBottomBorder" colspan="1"><input type="number" name="iOnderBedrijfsNummer"></td>
                <td class="noLeftBorder noRightBorder noBottomBorder" colspan="1"></td>
                <td class="noLeftBorder noBottomBorder" colspan="2"></td>
            </tr>
            <tr>
                <td class="noRightBorder" colspan="1"></td>
                <td class="noRightBorder noLeftBorder" colspan="1">bouwjaar:</td>
                <td class="noLeftBorder noRightBorder" colspan="1"><input type="datetime-local" name="iBouwjaar"></td>
                <td class="noLeftBorder noRightBorder noBottomBorder" colspan="1"></td>
                <td class="noLeftBorder noRightBorder noBottomBorder" colspan="1"><input type="text"></td>
                <td class="noLeftBorder noRightBorder noBottomBorder" colspan="1"></td>
                <td class="noLeftBorder" colspan="2"></td>
            </tr>


            <tr>
                <td class="noLeftBorder noRightBorder" colspan="8"></td>     <!--onzichtbare row-->
            </tr>


            <tr>    <!--onzichtbare row met tekst-->
                <td class="noBottomBorder" colspan="1"><b>uitvoeringkraan</b></td>
                <td class=" noTopBorder noBottomBorder" colspan="1">uitvoering onderwagen</td>
                <td class="noRightBorder noTopBorder noBottomBorder" colspan="1">uitvoering Toren</td>
                <td class="noTopBorder noBottomBorder" colspan="5"></td>
            </tr>
            <tr>    <!--onzichtbare row met tekst-->
                <td class="noBottomBorder" colspan="1"></td>
                <td class=" noBottomBorder" colspan="1"><input type="checkbox">op banden(zelfrijdend</td>
                <td class="noRightBorder noBottomBorder" colspan="1"><input type="checkbox" name="bHaakHoogte">haakhoogte</td>
                <td class="noRightBorder noBottomBorder"><input type="text"></td>
                <td class="noBottomBorder" colspan="4"></td>
            </tr>

            <tr>
                <td class="noTopBorder noBottomBorder" colspan="1"></td>
                <td class=" noBottomBorder" colspan="1"><input type="checkbox" name="bOpTruck">op truck</td>
                <td class="noTopBorder noBottomBorder" colspan="6"></td>     <!--onzichtbare row-->
            </tr>

            <tr>    <!--onzichtbare row met tekst-->
                <td class="noTopBorder noBottomBorder" colspan="1"></td>
                <td colspan="1"><input type="checkbox">weg-/ruwterein(kenteken)</td>
                <td class="invisablecell" colspan="1"><input type="checkbox" name="bTelescoop">telescoop</td>
                <td class="invisablecell"><input type="text"></td>
                <td class="invisablecell" colspan="1"><input type="checkbox" name="bGiekLengte">gieklengte</td>
                <td class="invisablecell"><input type="text"></td>
                <td class="noTopBorder noBottomBorder noLeftBorder" colspan="2"></td>
            </tr>

            <tr>    <!--onzichtbare row met tekst-->
                <td class="noRightBorder noTopBorder noBottomBorder" colspan="1"></td>
                <td class="noBottomBorder noRightBorder" colspan="1"></td>
                <td class="invisablecell" colspan="1"><input type="radio" name="bOpbouwGiek">opbouw giek</td>
                <td class="invisablecell"><input type="text"></td>
                <td class="invisablecell" colspan="1"><input type="checkbox" name="bTopbaar">topbaar</td>
                <td class="invisablecell"><input type="text"></td>
                <td class="noLeftBorder noBottomBorder noTopBorder" colspan="2"></td>
            </tr>
            <tr>    <!--onzichtbare row met tekst-->
                <td class="noRightBorder noTopBorder noBottomBorder" colspan="1"></td>
                <td class="noRightBorder noTopBorder noBottomBorder" colspan="1"><b>Opstelling:</b></td>
                <td colspan="1" class="invisablecell"><input type="checkbox" name="BHulpGiek">hulpgiek</td>
                <td class="invisablecell"><input type="text"></td>
                <td class="invisablecell" colspan="1"><input type="checkbox" name="bMetLoopkat">met loopkat</td>
                <td colspan="2" class="invisablecell"></td>
                <td colspan="1" class="noLeftBorder noBottomBorder noTopBorder"></td>
            </tr>
            <tr>    <!--onzichtbare row met tekst-->
                <td class="noRightBorder noTopBorder noBottomBorder" colspan="1"></td>
                <td class="invisablecell" colspan="1"><input type="checkbox" name="bRailstellen">Railstellen(spoorbreete/wielbalast</td>
                <td class="invisablecell" colspan="1"><input type="checkbox" name="bKnikgiek">knikgiek</td>
                <td class="invisablecell" colspan="1"></td>
                <td class="invisablecell" colspan="1"><input type="checkbox" name="bVerstelbaregiek">verstelbare giek</td>
                <td class="noLeftBorder noBottomBorder noTopBorder" colspan="3"></td>
            </tr>
            <tr>    <!--onzichtbare row met tekst-->
                <td class="noRightBorder noTopBorder noBottomBorder" colspan="1"></td>
                <td class="invisablecell" colspan="1"><input type="checkbox" name="bRijdend">rijdend</td>
                <td class="invisablecell" colspan="1"><input type="checkbox" name="bMonoGiek">monogiek</td>
                <td class="invisablecell"><input type="text"></td>
                <td class="invisablecell" colspan="1"></td>
                <td class="noLeftBorder noBottomBorder noTopBorder" colspan="3"></td>
            </tr>
            <tr>    <!--onzichtbare row met tekst-->
                <td class="noRightBorder noTopBorder noBottomBorder" colspan="1"></td>
                <td class="invisablecell" colspan="1"><input type="checkbox" name="bStationare">stationare</td>
                <td class="invisablecell" colspan="1"><input type="checkbox" name="bFlyJib">fly-jib</td>
                <td class="invisablecell"><input type="text"></td>
                <td class="invisablecell" colspan="1"><b>stempels</b></td>
                <td class="noLeftBorder noBottomBorder noTopBorder" colspan="3"></td>
            </tr>
            <tr>    <!--onzichtbare row met tekst-->
                <td class="noRightBorder noTopBorder noBottomBorder" colspan="1"></td>
                <td class="invisablecell" colspan="1"><input type="checkbox" name="bIngietframe">ingietframe</td>
                <td class="invisablecell" colspan="1"></td>
                <td class="invisablecell" colspan="1"></td>
                <td class="invisablecell" colspan="1"><input type="checkbox" name="bStempel">bstempel</td>
                <td class="noLeftBorder noBottomBorder noTopBorder" colspan="3"></td>
            </tr>
            <tr>    <!--onzichtbare row met tekst-->
                <td class="noRightBorder noTopBorder" colspan="1"></td>
                <td class="noRightBorder" colspan="1"><input type="checkbox" name="bVrijstaand">vrijstaand(kruisframe onderwagen zonder railstellen</td>

                <td class="noRightBorder" colspan="1"></td>
                <td class="noLeftBorder noRightBorder" colspan="1"></td>
                <td class="noRightBorder" colspan="1"><input type="checkbox" name="bDozerblad">dozerblad</td>
                <td class="noLeftBorder noTopBorder" colspan="3"></td>
            </tr>


            <tr>
                <td class="noLeftBorder noRightBorder noTopBorder" colspan="6"></td>
            </tr>

            <!--Begin eigenaar kolom-->

            <tr>    <!--onzichtbare row met tekst-->
                <td class="noRightBorder noBottomBorder" colspan="1"><b>Eigenaar</b></td>
                <td class="noLeftBorder noRightBorder noBottomBorder" colspan="2">Naam: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="sNaam"></td>
                <td class="noLeftBorder noRightBorder noBottomBorder"></td>
                <td class="invisablecell" colspan="1"></td>
                <td class="noLeftBorder noRightBorder noBottomBorder" colspan="3"></td>
                <td class="noLeftBorder noBottomBorder" colspan="3"></td>
            </tr>

            <tr>    <!--onzichtbare row met tekst-->
                <td class="noRightBorder noBottomBorder" colspan="1"></td>
                <td class="noLeftBorder noRightBorder noBottomBorder" colspan="2">Adress: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="sAdress"></td>
                <td class="noLeftBorder noRightBorder noBottomBorder"></td>
                <td class="invisablecell" colspan="1"></td>
                <td class="noLeftBorder noRightBorder noBottomBorder" colspan="3"></td>
                <td class="noLeftBorder noBottomBorder" colspan="3"></td>
            </tr>

                        <tr>    <!--onzichtbare row met tekst-->
                <td class="noRightBorder noBottomBorder" colspan="1"></td>
                <td class="noLeftBorder noRightBorder noBottomBorder" colspan="2">Postcode/Plaats:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="sPostcodePlaats"></td>
                <td class="noLeftBorder noRightBorder noBottomBorder"></td>
                <td class="invisablecell" colspan="1"><input type="text"></td>
                <td class="noLeftBorder noRightBorder noBottomBorder" colspan="3"></td>
                <td class="noLeftBorder noBottomBorder" colspan="3"></td>
            </tr>

                        <tr>    <!--onzichtbare row met tekst-->
                <td class="noRightBorder" colspan="1"></td>
                <td class="noLeftBorder noRightBorder" colspan="2">Telefoonnummer: &nbsp;&nbsp;&nbsp;  <input type="text" name="sTelefoonNumer"></td>
                <td class="noLeftBorder noRightBorder"></td>
                <td class="invisablecell" colspan="1"></td>
                <td class="noLeftBorder noRightBorder" colspan="3"></td>
                <td class="noLeftBorder" colspan="3"></td>
            </tr>

            <!--Einde eigenaar kolom-->

            <tr>
                <td class="noLeftBorder noRightBorder noTopBorder" colspan="6"></td>
            </tr>

            <!--Begin opdrachtgever kolom-->

            <tr>    <!--onzichtbare row met tekst-->
                <td class="noRightBorder noBottomBorder" colspan="1"><b>Opdrachtgever</b></td>
                <td class="noLeftBorder noRightBorder noBottomBorder" colspan="2">Bedrijf: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="sBedrijf"></td>
                <td class="noLeftBorder noRightBorder noBottomBorder"></td>
                <td class="invisablecell" colspan="1"></td>
                <td class="noLeftBorder noRightBorder noBottomBorder" colspan="3"></td>
                <td class="noLeftBorder noBottomBorder" colspan="3"></td>
            </tr>

            </tr>

                        <tr>    <!--onzichtbare row met tekst-->
                <td class="noRightBorder" colspan="1"></td>
                <td class="noLeftBorder noRightBorder" colspan="2">Functionaris: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="text" name="sFunctionaris"></td>
                <td class="noLeftBorder noRightBorder"></td>
                <td class="invisablecell" colspan="1"></td>
                <td class="noLeftBorder noRightBorder" colspan="3"></td>
                <td class="noLeftBorder" colspan="3"></td>
            </tr>

            <!--Einde opdrachtgever kolom--> 

            <tr>
                <td class="noLeftBorder noRightBorder noTopBorder" colspan="6"></td>
            </tr>


            <tr>    <!--onzichtbare row met tekst-->
                <td class="noBottomBorder noRightBorder" colspan="1"><b>bevindingen</b></td>
                <td class="noBottomBorder noLeftBorder noRightBorder" colspan="1"><input type="checkbox">Tekortkoming A of B</td>
                <td class="noBottomBorder noLeftBorder noRightBorder" colspan="1"></td>
                <td class="noBottomBorder noLeftBorder noRightBorder" colspan="1"><input type="checkbox" name="bJa">ja</td>
                <td class="noBottomBorder noLeftBorder noRightBorder" colspan="1"><input type="checkbox" name="bNee">nee</td>
                <td class="noBottomBorder noLeftBorder" colspan="3"></td>
                
            </tr>
            <tr>    <!--onzichtbare row met tekst-->
                <td class="noTopborder noBottomBorder noRightBorder" colspan="1"></td>
                <td class="invisablecell" colspan="1" >Afgemeld door</td>
                <td class="noTopborder noBottomBorder noLeftBorder" colspan="6"><input type="text" name="sAfmelding"></td>
            </tr>
            <tr>    <!--onzichtbare row met tekst-->
                <td class="noTopborder noBottomBorder noRightBorder" colspan="1"></td>
                <td class="noTopborder noBottomBorder noLeftBorder" colspan="7" >Directe voorzieningen voordat de kraan weer in gebruik gesteld hier bij herkeurung vereist is</td>
            </tr>       
                <tr>
                    <td class="noTopborder noBottomBorder noRightBorder"></td>
                    <td class="noTopborder noBottomBorder noLeftBorder" colspan="7"><textarea name="sDirecteVoorziening" id="" cols="157" rows="3"></textarea></td>
                </tr>            
            <tr>    
                <td class="noTopborder noBottomBorder noRightBorder" colspan="1"></td>
                <td class="noTopborder noBottomBorder noLeftBorder" colspan="7" ><b>toelichting</b></td>
            </tr>

            <tr>
                <td class="noBottomBorder noRightBorder noTopBorder"></td>
                <td class="noTopborder noBottomBorder noLeftBorder" colspan="7"><textarea name="sToelichting" id="" cols="157" rows="8"></textarea></td>
            </tr>

            <tr>
            <td class="noTopBorder" colspan="8" ></td>
            </tr>

        </table>

        </div>
        <input type="submit" value="submit">
    </form>
</body>
</html>