<?php
if(!(isset($_GET['Idmed'])))
header('location:Page_Accueil.html');
$idmed=$_GET['Idmed'];
?>
 <HTML>
        <HEAD>
            <META CHARSET="UTF-8">
                <title> RegistreSortie</title>
        </HEAD>
        <BODY>
               <b> <font color='green'>INSERTION DANS LA REGISTRE SORTIE</font></b><BR>
               <B>REMPLISSEZ LE FORMULAIRE:</B><BR>
               <FORM METHOD="POST" ACTION="Ajouter_RegistreSortie.php">
                <table >
                    <tr>
                        <td>Date_sortie:</td>
                        <td><input type="text" name="dat" required></td>
                    </tr>
                    <tr>
                        <td>Id_Medicament:</td>
                        <td><?php echo"$idmed"; ?>
                            <input type="hidden" name='Idmed' value='<?php echo"$idmed"; ?>'></td>
                    </tr>
                    <tr>
                        <td>Quantite Sortie:</td>
                        <td><input type="text" name="qs" required></td>
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