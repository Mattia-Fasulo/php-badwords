<?php

if (isset($_GET['censured']) && $_GET['censured'] != '') {
    $censured = trim($_GET['censured']);
} else {
    $censured = 'Non è stata inserita una parola da censurare';
};

if (isset($_GET['text']) && $_GET['text'] != '') {
    $text = trim($_GET['text']);
} else {
    $text = 'Non è stata inserito un testo';
};

$lenText = strlen($text);

$censuredText = str_replace($censured, '***', $text);

$lenCensuredText = strlen($censuredText);

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
    <title>Censured</title>
</head>


<body>
    <div class="main">
        <div class="container mt-5">
            <div class="text-container">
                <h2 class="fs-1">Il testo inserito contiene <?php echo $lenText ?> caratteri</h2>

                <p><?php echo $text ?></p>
            </div>

            <div class="text-container" class="mt-5">
                <h2 class="fs-1">Il testo censurato contiene <?php echo $lenCensuredText ?> caratteri</h2>

                <p><?php echo $censuredText ?></p>
            </div>

        </div>
    </div>

</body>

</html>