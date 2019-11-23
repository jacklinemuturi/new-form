<?php
    ob_start();
    require_once('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!--comment-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <div class = "container container-fluid">
        <table class = "table">
            <thead>
                <tr>
                    <th scope = "col">#</th>
                    <th scope = "col">Name</th>
                    <th scope = "col">Gender</th>
                <tr>
            </thead> 
        

            <?php
                $stmt = "SELECT * FROM test ORDER BY id DESC";
                $result = mysqli_query($conn, $stmt);
                
                $resultcheck = mysqli_num_rows($result);

                if($resultcheck > 0){
                    while($rows = mysqli_fetch_assoc($result)){
                        echo "
                        <tr>
                            <td>".$rows['id']."</td>
                            <td>".$rows['name']."</td>
                            <td>".$rows['gender']."</td>
                        </tr>";
                    }
                }else{
                    echo "no data";
                }
            ?>
        </table>
        <a href = "form.php" class = "btn btn-primary">&#60;&#60;BACK</a>

    </div>
   
    
    </body>
    <!--javascript-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</html>