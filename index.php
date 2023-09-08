<?php
    include_once "./function.php";


    // function randomPassword(){

    //     //array di lettere con cui creare la password
    //     $elements_array = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*_';

    //     //numero ottenuto dal get
    //     $user_number = $_GET["number"] ?? null;

    //     //condizione che permette di avere una password minima di 1 carattere
    //     if ($user_number < 0){
    //         $user_number = 1;
    //     };

    //     $password = [];        
    //         //ciclo per la creazione della password
    //     for ($i=0; $i < $user_number; $i++) { 
    //         $num = rand(0, strlen($elements_array) - 1);
    //         $password[] = $elements_array[$num];
    //     };


    //     if ($password){
    //         $final_password =implode('',$password);
    //     } else {
    //         $final_password = "La tua password non è stata ancora creata";
    //     }
    
    //     //return + implode per creare la parola
    //     return $final_password;
    // };    
    
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
    <div class="container text-center mt-3">
        <h1 class="display-1">Password Generator</h1>

        <div class="input-container">
            <form action="index.php" method="GET">
                <div class="mt-5 w-50 m-auto">
                    <label for="number" class="form-label h3">Scegli la lunghezza della tua password</label>
                    <input type="number" name="number" class="form-control" id="number" >
                </div>
    
                <div>
                    <button type="submit" class="btn btn-primary mt-3">Invia</button>
                </div>

                <h2 class="display-1"><?php echo randomPassword() ?></h2>
            </form>


        </div>

    </div>
</body>
</html>