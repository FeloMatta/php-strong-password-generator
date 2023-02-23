<?php 
    include __DIR__ . '/functions.php';
    $password = '';
    $error = null;
    $success = false;

    if(
        isset($_GET['length'])
        &&
        is_numeric($_GET['length'])
    ){

        $passwordLength = intval($_GET['length']);
        if($passwordLength < 8){
            $error = 'Lunghezza minima della password: 8 caratteri';
        }
        else if($passwordLength > 32){
            $error = 'Lunghezza massima della password: 8 caratteri';
        }
        else{
            $password = generateStrongPassword($passwordLength);

            $success = true;
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>
</head>
<body>
    
    <main>
        <h1>
            PHP Strong Password Generator   
        </h1>
        <div>
            <form action="" method="GET">
                <div>
                    <label for="password-length">Lunghezza password</label>
                    <input type="number" name="length" min="8" max="32" value="<?php echo ($_GET['length'] ?? 8); ?>" required>
                </div>
                <button type="submit">
                    Genera
                </button>
            </form>
        </div>
        <div class="message-container">
            <?php 
                if($error != null){
                    echo '<h2>';
                    echo  $error;
                    echo '</h2>';
                }
                else if($success){
                    echo '<h2>';
                    echo 'your password is: ';
                    echo $password;
                    echo '</h2>';
                }
            ?>
        </div>
    </main>

</body>
</html>