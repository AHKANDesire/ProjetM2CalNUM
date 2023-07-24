<?php
if(!(isset($_GET['Id'])))
header('location:Page_Accueil.html');
include"connect.php";
$idre=$_GET['Id'];
$req24="SELECT * FROM registre_entrees WHERE Id_entrees=$idre";
$result24=mysqli_query($con,$req24)or die('ERROR24');
$col24=mysqli_fetch_array($result24);
mysqli_close($con);
?>
<html>
    <body>
          <FORM METHOD="POST" ACTION="ModifierRegistreEntrees.php">
                <table >
                    <tr>
                        <td>Id_entrees:</td>
                        <td><?php echo"$col24[0]"; ?>
                            <input type="hidden" name='Idre' value="<?php echo"$col24[0]"; ?>"></td>
                    </tr>
                    <tr>
                        <td>Date_entrees:</td>
                        <td><INPUT type="text" name='dat'value="<?php echo"$col24[1]"; ?>"></td>
                    </tr>
                    <tr>
                        <td>Id_medicament:</td>
                        <td><?php echo"$col24[2]"; ?>
                            <input type="hidden" name='Idmed' value="<?php echo"$col24[2]"; ?>"></td>
                    </tr>
                    <tr>
                        <td>Quantite_entrees:</td>
                        <td><INPUT type="text" name='qe'value="<?php echo"$col24[3]"; ?>"></td>
                    </tr>
                    <tr>
                        <td>Prix_U:</td>                       
                        <td><input type="text" name='pu' value="<?php echo"$col24[4]"; ?>"></td>
                    </tr>
                    <tr>
                        <td>Prix_T:</td>
                        <td><?php echo"$col24[5]"; ?></td>
                    </tr>
                    <tr>
                         <td>Fourniseur:</td>
                         <td><input type="text" name='four'value="<?php echo"$col24[6]"; ?>"></td>
                    </tr>
                     <tr>
                        <td>Observation:</td>
                        <td><input type="text" name='obs' value="<?php echo"$col24[7]"; ?>"></td>
                    </tr>
                    
                         <tr>
                            <td></td>
                            <td><input type="SUBMIT" VALUE="ENREGISTRER"></td> 
                         </tr>                                                
                </table>                                              
               
              </FORM>
    </body>
</html>
