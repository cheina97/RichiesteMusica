<html>

<head>
    <link rel="shortcut icon" href="http://richieste.altervista.org/richieste/favicon.ico">
    <link rel="stylesheet" href="bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Richiesta accettata</title>
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
        <div style="display: inline-block; padding: 20px" class="alert alert-primary" role="alert">
            <h4 class="alert-heading">Richiesta accettata!</h4>
            <p>Soddisferemo la tua richiesta appena possibile.</p>
            <hr>
            <p class="mb-0">Puoi controllare la lista delle richieste <a href="table.php">qui</a>.</p>
            <hr>
            <p class="mb-0">Clicca <a href="index.html">qui</a> per tornare alla prima pagina.</p>
        </div>



        <?php

        function getUserIpAddr()
        {
            if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                //ip from share internet
                $ip = $_SERVER['HTTP_CLIENT_IP'];
            } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                //ip pass from proxy
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            } else {
                $ip = $_SERVER['REMOTE_ADDR'];
            }
            return $ip;
        }

        $data = date("Y/m/d");
        $orario = date("h:i:sa");
        $name = $_GET["name"];
        $author = $_GET["author"];
        $link = $_GET["link"];
        $ip = getUserIpAddr();

        $txt = $ip . "|" . $data . "|" . $orario . "|" . $name . "|" . $author . "|" . $link . "\n";

        $myfile = fopen("richieste.txt", "a");
        fwrite($myfile, $txt);
        fclose($myfile);
        ?>



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="bootstrap.min.js"></script>
    </div>
</body>

</html>