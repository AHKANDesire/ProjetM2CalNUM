<?php
if(!(isset($_GET['Id'])))
header('location:Page_Accueil.html');
include"connect.php";
$idstock=$_GET['Id'];
$req="SELECT * FROM registre_stock WHERE Id_stock=$idstock";
$result=mysqli_query($con,$req)or die('ERROR');
$col=mysqli_fetch_array($result);
mysqli_close($con);
?>
<html>
    <body>
          <FORM METHOD="POST" ACTION="ModifierListeStock.php">
                <table >
                    <tr>
                        <td>Id_stock:</td>
                        <td><?php echo"$col[0]"; ?>
                            <input type="hidden" name='Idstock' value="<?php echo"$col[0]"; ?>"></td>
                    </tr>
                    <tr>
                        <td>Date_stock:</td>
                        <td><input type="text" name='dat' value="<?php echo"$col[1]"; ?>"></td>
                    </tr>
                    <tr>
                        <td>Id_medicament:</td>
                        <td><?php echo"$col[2]"; ?>
                            <input type="hidden" name='Idmed' value="<?php echo"$col[2]"; ?>"></td>
                    </tr>
                    <tr>
                        <td>Stock_disponible:</td>
                        <td><?php echo"$col[3]"; ?>
                            <input type="hidden" name='sd' value="<?php echo"$col[3]"; ?>"></td>
                    </tr>
                    <tr>
                        <td>Prix_U:</td>
                        <td><INPUT type="text" name='pu'value="<?php echo"$col[4]"; ?>"></td>
                    </tr>
                    <tr>
                        <td>Prix_T:</td>
                        <td><?php echo"$col[5]"; ?>
                            <input type="hidden" name='pt' value="<?php echo"$col[5]"; ?>"></td>
                    </tr>
                    <tr>
                         <td>Observation:</td>
                         <td><input type="text" name='obs'value="<?php echo"$col[6]"; ?>"></td>
                    </tr>
                    <tr>
                            <td></td>
                            <td><input type="SUBMIT" VALUE="ENREGISTRER"></td> 
                    </tr>                                                
                </table>                                              
               
              </FORM>
    </body>
</html>
