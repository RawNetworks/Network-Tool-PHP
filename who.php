<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>RAW Networks - Network Tools</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/bootstrap4-neon-glow.min.css">
    
    
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel='stylesheet' href='//cdn.jsdelivr.net/font-hack/2.020/css/hack.min.css'>
    
  </head>
  <body>

  <div class="navbar-dark text-white">
    <div class="container">
      <nav class="navbar px-0 navbar-expand-lg navbar-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a href="index.php" class="pl-md-0 p-3 text-light">Home</a>
            <a href="ping.php" class="p-3 text-decoration-none text-light">Ping Tool</a>
            <a href="portscan.php" class="p-3 text-decoration-none text-light">Port Scan</a>
            <a href="who.php" class="p-3 text-decoration-none text-light">Whois</a>
          </div>
        </div>
      </nav>

    </div>
  </div>


  

<div class="jumbotron bg-transparent mb-0 radius-0">
  <div class="container">
      <div class="row">
        <div class="col-xl-6">
          <h1 class="display-2">RAW Network<span class="vim-caret">s</span></h1>
          <div class="lead mb-3 text-mono text-success">YouTuber & Scripter</div>
          <div class="text-mono">
            <a href="ts3server://ts.rawnetworks.eu"
               title="RAW Networks - Support"
               class="btn btn-success btn-shadow px-3 my-2 ml-0 text-left">
              TeamSpeak 3 Support
            </a>
            <a href="https://youtube.com/c/RawNetworksYouTube" target="_blank"
               title="RAW Networks - YouTube"
               class="btn btn-danger btn-shadow px-3 my-2 ml-0 ml-sm-1 text-left">
              YouTube
            </a>
          </div>

      </div>
  </div>
</div>


<form class="needs-validation" novalidate="" action="who.php" method="post">
        <div class="center">
          <div class="col-md-4 mb-1">
            <label for="firstName">Please enter a Domain: </label>
            <input type="text" class="form-control" id="domains" name="domain" placeholder="" value="" required="">
            <div class="invalid-feedback">
            The Domain must be specified!
            </div>


          </div>
          
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">WHOIS</button>
      </form>

      </div>
      </div>
      </div>

<?php

    $domains = $_POST["domain"];

    $whois = shell_exec("whois $domains");

    echo "<td style='word-break:break-all;word-wrap:break-word'></td><center><span><p style='border:3px; border-style:solid; border-color:#FF0000; padding: 1em;'>$whois</p></span></center>";

    // echo wordwrap('<center>' ,$whois, 80, '<br>', '</center>');


    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>
