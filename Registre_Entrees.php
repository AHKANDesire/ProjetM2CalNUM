<?php
if(!(isset($_GET['Id'])))
header('location:Page_Accueil.html');
$idmed=$_GET['Id'];
?>
 <HTML>
        <HEAD>
            <META CHARSET="UTF-8">
                <title> RegistreEntrees</title>
        </HEAD>
        <BODY>
               <b> <font color='green'>INSERTION DANS LA REGISTRE ENTREES</font></b><BR>
               <B>REMPLISSEZ LE FORMULAIRE:</B><BR>
               <FORM METHOD="POST" ACTION="Ajouter_RegistreEntrees.php">
                <table >
                    <tr>
                        <td>Date_entrees:</td>
                        <td><input type="text" name="dat" required></td>
                    </tr>
                    <tr>
                        <td>Id_Medicament:</td>
                        <td><?php echo"$idmed"; ?>
                            <input type="hidden" name='Idmed' value='<?php echo"$idmed"; ?>'></td>
                    </tr>
                    <tr>
                        <td>QuantiteEntrees:</td>
                        <td><input type="text" name="qe" required></td>
                    </tr>
                    <tr>
                         <td>PrixU:</td>
                         <td><input type="text" name="pu" value=0 required></td>
                    </tr>
                    <tr>
                        <td>Fournisseur:</td>
                        <td><input type="text" name="four"></td>
                    </tr>
                    <tr>
                        <td>Observation:</td>
                        <td><input type="text" name="obs"></td>
                    </tr>
                         <tr>
                            <td></td>
                            <td><input type="SUBMIT" VALUE="ENREGISTRER"></td> 
                         </tr>                                                
                </table>                         
                                  
              </FORM>
        </BODY>
    </HTML>