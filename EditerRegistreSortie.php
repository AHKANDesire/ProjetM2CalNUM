<?php
if(!(isset($_GET['Id'])))
header('location:Page_Accueil.html');
include"connect.php";
$idrs=$_GET['Id'];
$req="SELECT * FROM registre_sortie WHERE Id_sortie=$idrs";
$result=mysqli_query($con,$req)or die('ERROR');
$col=mysqli_fetch_array($result);
mysqli_close($con);
?>
<html>
    <body>
          <FORM METHOD="POST" ACTION="ModifierRegistreSortie.php">
                <table >
                    <tr>
                        <td>Id_sortie:</td>
                        <td><?php echo"$col[0]"; ?>
                            <input type="hidden" name='Idrs' value="<?php echo"$col[0]"; ?>"></td>
                    </tr>
                    <tr>
                        <td>Date_sortie:</td>
                        <td><input type="text" name='dat' value="<?php echo"$col[1]"; ?>"></td>
                    </tr>
                    <tr>
                        <td>Id_medicament:</td>
                        <td><?php echo"$col[2]"; ?>
                            <input type="hidden" name='Idmed' value="<?php echo"$col[2]"; ?>"></td>
                    </tr>
                    <tr>
                        <td>Quantite_sortie:</td>
                        <td><input type="text" name='qs' value="<?php echo"$col[3]"; ?>"></td>
                    </tr>
                    <tr>
                         <td>Observation:</td>
                         <td><input type="text" name='obs'value="<?php echo"$col[4]"; ?>"></td>
                    </tr>
                    <tr>
                            <td></td>
                            <td><input type="SUBMIT" VALUE="ENREGISTRER"></td> 
                    </tr>                                                
                </table>                                              
               
              </FORM>
    </body>
</html>
