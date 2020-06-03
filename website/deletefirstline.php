<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="http://richieste.altervista.org/richieste/favicon.ico">
    <link rel="stylesheet" href="bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Richieste Musica</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        p,h4{
            padding: 3px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="http://richieste.altervista.org/richieste">
            <img src="icon.svg" width="30" height="30" class="d-inline-block align-top" alt="">
            Richiedi una canzone
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="http://richieste.altervista.org/richieste">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link active" href="http://richieste.altervista.org/richieste/table.php">Lista</a>
            </div>
        </div>
    </nav>

    <div class="form">
        <div class="alert alert-primary " style="display: inline-block; padding:20px" role="alert">
            <h4 class="alert-heading">Linea cancellata</h4>
            <hr style="margin-top: 10px">
            <p style="word-break: break-all; margin: 0px">
                <?php
                $filename = "richieste.txt";
                $file = file($filename);
                $output = $file[0];
                unset($file[0]);
                file_put_contents($filename, $file);

                $x = explode('|', $output);
                $ip = $x[0];
                $giorno = $x[1];
                $ora = $x[2];
                $titolo = $x[3];
                $autore = $x[4];
                $link = $x[5];

                echo "Ip: $ip" . "<br>";
                echo '</p>';
                echo '<p style="word-break: break-all; margin: 0px">';

                echo "Giorno: $giorno" . "<br>";
                echo '</p>';
                echo '<p style="word-break: break-all; margin: 0px">';

                echo "Orario: $ora" . "<br>";
                echo '</p>';
                echo '<p style="word-break: break-all; margin: 0px">';
                
                echo "Titolo: $titolo" . "<br>";
                echo '</p>';
                echo '<p style="word-break: break-all; margin: 0px">';

                echo "Autore: $autore" . "<br>";
                echo '</p>';
                echo '<p style="word-break: break-all; margin: 0px">';

                echo "Link: $link";
                ?>
            </p>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
</body>

</html>