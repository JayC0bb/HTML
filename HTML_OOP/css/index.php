<?php

require_once(__DIR__ . 'C:\xampp\htdocs\data\config');
$query = "select * from oop";
$result = mysqli_query($con, $query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <title>Fetch Data From Database And PHP</title>
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="display-6 text-center">Fetch Data From Database in PHP</h2>
                    </div>
					<div class="card-body">
					<table class="table table-bordered text-center">
						<tr>
							<td> User ID </td>
							<td> First Name </td>
							<td> Last Name </td>
							<td> Email </td>
						</tr>
						<tr>
						<?php

                            while($row = mysqli_fetch_assoc($result))
                            {
                            ?>
                            <td>
                                <?php echo $row['user_id']; ?>
                            </td>

                            </tr>
                            <?php
                            }
                            
                        ?>
						
					</table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>