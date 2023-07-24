<?php
if(!(isset($_GET['Id'])))
header('location:Page_Accueil.html');
include"connect.php";
$iddecla=$_GET['Id'];
$req20="SELECT * FROM declaration_medicament WHERE Id_Declaration=$iddecla";
$result20=mysqli_query($con,$req20)or die('ERROR20');
$col20=mysqli_fetch_array($result20);
mysqli_close($con);
?>
<html>
    <body>
          <FORM METHOD="POST" ACTION="ModifierDeclaration.php">
                <table >
                    <tr>
                        <td>Id_Declaration:</td>
                        <td><?php echo"$col20[0]"; ?>
                            <input type="hidden" name='Iddecla' value="<?php echo"$col20[0]"; ?>"></td>
                    </tr>
                    <tr>
                        <td>Id_Medicament:</td>
                        <td><?php echo"$col20[1]"; ?>
                            <input type="hidden" name='Idmed' value="<?php echo"$col20[1]"; ?>"></td>
                    </tr>
                    <tr>
                        <td>Num_Autorisation:</td>
                        <td><INPUT type="text" name='numauto'value="<?php echo"$col20[2]"; ?>"></td>
                    </tr>
                    <tr>
                        <td>Num_lot:</td>                       
                        <td><input type="text" name='numlot' value="<?php echo"$col20[3]"; ?>"></td>
                    </tr>
                    <tr>
                         <td>Date_fabrication:</td>
                         <td><input type="text" name='datfab'value="<?php echo"$col20[4]"; ?>"></td>
                    </tr>
                     <tr>
                        <td>Date_peremption:</td>
                        <td><input type="text" name='dateper' value="<?php echo"$col20[5]"; ?>"></td>
                    </tr>
                    
                         <tr>
                            <td></td>
                            <td><input type="SUBMIT" VALUE="ENREGISTRER"></td> 
                         </tr>                                                
                </table>                                              
               
              </FORM>
    </body>
</html>
