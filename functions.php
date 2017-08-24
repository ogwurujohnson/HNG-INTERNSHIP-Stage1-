<?php
/**
 * Created by PhpStorm.
 * User: BlackHatJohnny
 * Date: 8/24/2017
 * Time: 8:51 AM
 */
include('config.php');
function get_all_records(){
    $conn = getdb();
    $Sql = "SELECT * FROM interninfo";
    $result = mysqli_query($conn, $Sql);


    if (mysqli_num_rows($result) > 0) {
        echo "<div class='table-responsive'><table id='myTable' class='table table-striped table-bordered'>
             <thead><tr><th>INTERN ID</th>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Email</th>
                          <th>Registration Date</th>
                        </tr></thead><tbody>";


        while($row = mysqli_fetch_assoc($result)) {

            echo "<tr><td>" . $row['int_id']."</td>
                   <td>" . $row['firstname']."</td>
                   <td>" . $row['lastname']."</td>
                   <td>" . $row['email']."</td>
                   <td>" . $row['reg_date']."</td></tr>";
        }

        echo "</tbody></table></div>";

    } else {
        echo "you have no records";
    }
}

 if(isset($_POST["Import"])){
     $conn = getdb();
     $filename=$_FILES["file"]["tmp_name"];


     if($_FILES["file"]["size"] > 0)
     {
         $file = fopen($filename, "r");

         while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
         {



             $sql = "INSERT into interninfo (int_id,firstname,lastname,email,reg_date) 
                   values ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."')";
             $result = mysqli_query($conn, $sql);
             if(!isset($result))
             {
                 echo "<script type=\"text/javascript\">
							alert(\"Invalid File:Please Upload CSV File.\");
							window.location = \"index.php\"
						  </script>";
             }
             else {
                 echo "<script type=\"text/javascript\">
						alert(\"CSV File has been successfully Imported.\");
						window.location = \"index.php\"
					</script>";
             }
         }

         fclose($file);
     }
 }

if(isset($_POST["Export"])){
    $conn = getdb();

    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=data.csv');
    $output = fopen("php://output", "w");
    fputcsv($output, array('ID','INTERN ID','First Name', 'Last Name', 'Email', 'Joining Date'));
    $query = "SELECT * from interninfo ORDER BY int_id DESC";
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($result))
    {
        fputcsv($output, $row);
    }
    fclose($output);
}


?>