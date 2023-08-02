
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title> store sensor values into a database</title>
        
    </head>
    <body>
    <?php
    $value=$_GET['Value'];
    
    $conn = new mysqli("localhost", "root", "", "data");
    
    if(empty($value))
    {
    echo 'not submited';
    }
    else
    {
    echo ' The entered value is:'.$value;
    
    }

    $query= "insert into sensor values($value)" ;
    $run=mysqli_query($conn,$query)

    ?>

    </body>
    </html>
        