<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="http://richieste.altervista.org/richieste/favicon.ico">
    <link rel="stylesheet" href="bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista richieste</title>
    <link rel="stylesheet" type="text/css" href="style.css">
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
        <div class="table-responsive" >
            <table class="table table-striped">
                <caption>Lista delle richieste</caption>
                <thead>
                    <tr>
                        <!--<th scope="col">Ip</th>-->
                        <!--<th scope="col">Giorno</th>-->
                        <!--<th scope="col">Ora</th>-->
                        <th scope="col">Title</th>
                        <th scope="col">Author</th>
                        <th scope="col">Link</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $file = fopen("richieste.txt", "r");
                    while (!feof($file)) {
                        $x = explode('|', fgets($file));
                        $ip = $x[0];
                        $giorno = $x[1];
                        $ora = $x[2];
                        $titolo = $x[3];
                        $autore = $x[4];
                        $link = $x[5];
                        if ($titolo != "") {
                            echo "
                            <tr>
                                <th scope=\"row\">$titolo</th>
                                <td>$autore</td>
                                <td>$link</td>
                            </tr>";
                        }
                    }

                    fclose($file);
                    ?>
                </tbody>
            </table>

        </div>
    </div>


    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>

</body>

</html>