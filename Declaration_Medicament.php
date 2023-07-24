<?php
if(!(isset($_GET['Id'])))
header('location:Page_Accueil.html');
$id=$_GET["Id"];
?>
 <HTML>
        <HEAD>
            <META CHARSET="UTF-8">
                <title> DeclarMedicament </title>
        </HEAD>
        <BODY>
                   <b><font color='green'>IDENTIFICATION</font></b><BR>
                   <B>REMPLISSEZ LE FORMULAIRE:</B><BR>
              <FORM METHOD="POST" ACTION="Ajouter_DeclarationMedicament.php">
                <table >
                    <tr>
                        <td>Id_Medicament:</td>
                        <td><?php echo"$id"; ?>
                            <input type="hidden" name='Id' value="<?php echo"$id"; ?>"></td>
                    </tr>
                    <tr>
                        <td>Num_Autorisation:</td>
                        <td><input type="text" name="auto"></td>
                    </tr>
                    <tr>
                         <td>Num_lot:</td>
                         <td><input type="text" name="lot"></td>
                    </tr>
                    <tr>
                         <td>Date_fabrication:</td>
                         <td><input type="text" name="fab" value="aaaa-mm-jj" ></td>
                    </tr>
                    <tr>
                        <td>Date_peremption:</td>
                        <td><input type="text" name="per"required></td>
                    </tr>
                         <tr>
                            <td></td>
                            <td><input type="SUBMIT" VALUE="ENREGISTRER"></td> 
                         </tr>                                                
                </table>                         
                                  
              </FORM>
        </BODY>
    </HTML>