<?php

    session_start();

    include_once "./function.php";

    if (randomPassword() !== null){
        $_SESSION["password"] = randomPassword();
        header('Location: ./password.php ');
        die;
    }
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container text-center mt-5">
        <h1 class="display-1">Password Generator</h1>

        <div class="input-container mt-5 pt-5">
            <form action="index.php" method="GET">
                <div class="mt-5 w-50 m-auto">
                    <label for="number" class="form-label h3 mt-4">Scegli la lunghezza della tua password</label>
                    <input type="number" name="number" class="form-control mt-5" id="number" >
                </div>
    
                <div>
                    <button type="submit" class="btn btn-danger mt-5">GENERA</button>
                </div>

            </form>


        </div>

    </div>
</body>
</html>