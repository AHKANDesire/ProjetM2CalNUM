<?php
if(!(isset($_GET['Id'])))
header('location:Page_Accueil.html');
include"connect.php";
$idmed=$_GET['Id'];
$req16="SELECT * FROM listemedicament WHERE Id_Medicament=$idmed";
$result16=mysqli_query($con,$req16)or die('ERROR16');
$col16=mysqli_fetch_array($result16);
mysqli_close($con);
?>
<html>
    <body>
          <FORM METHOD="POST" ACTION="ModifierMedicament.php">
                <table >
                    <tr>
                        <td>Id_Medicament:</td>
                        <td><?php echo"$col16[0]"; ?>
                            <input type="hidden" name='Id' value="<?php echo"$col16[0]"; ?>"></td>
                    </tr>
                    <tr>
                        <td>Denomination:</td>
                        <td><INPUT type="text" name='de'value="<?php echo"$col16[1]"; ?>"></td>
                    </tr>
                    <tr>
                        <td>Forme:</td>                       
                        <td><input type="text" name='fo' value="<?php echo"$col16[2]"; ?>"></td>
                    </tr>
                    <tr>
                         <td>Dosage:</td>
                         <td><input type="text" name='do'value="<?php echo"$col16[3]"; ?>"></td>
                    </tr>
                     <tr>
                        <td>Catégorie:</td>
                        <td><input type="text" name='ca' value="<?php echo"$col16[4]"; ?>"></td>
                    </tr>
                    <tr>
                         <td>Stock_max:</td>
                         <td><input type="text" name='sma'value="<?php echo"$col16[5]"; ?>"></td>
                    </tr>
                     <tr>
                        <td>Stock_min:</td>
                        <td><input type="text" name='smi' value="<?php echo"$col16[6]"; ?>"></td>
                    </tr>
                    <tr>
                         <td>Observation:</td>
                         <td><input type="text" name='obs'value="<?php echo"$col16[7]"; ?>"></td>
                    </tr>
                         <tr>
                            <td></td>
                            <td><input type="SUBMIT" VALUE="ENREGISTRER"></td> 
                         </tr>                                                
                </table>                                              
               
              </FORM>
    </body>
</html>
