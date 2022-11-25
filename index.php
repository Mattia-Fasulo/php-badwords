<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@400;600;700;800&display=swap" rel="stylesheet">
    <!-- bootstrp -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- my style -->
    <link rel="stylesheet" href="css/style.css">
    <title>Hello PHP</title>
</head>

<body>
    <div class="main">
        <div class="container mt-5">
            <form action="censured.php">
                <div class="mb-3">
                    <label for="cansured" class="form-label">Inserire la parola che si vuole censurare</label>
                    <input type="text" class="form-control" name="censured" id="word-censured">
                </div>
                <div class="mb-3">
                    <label for="text" class="form-label">Inserire un testo</label>
                    <textarea name="text" class="form-control" id="text" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary mb-3">Censura</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>