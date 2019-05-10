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

<style>
    #note {
        position: absolute;
        z-index: 6001;
        top: 600;
        left: 0;
        right: 0;
        background: #6E6E6E;
        text-align: center;
        line-height: 2.5;
        overflow: hidden; 
        -webkit-box-shadow: 0 0 5px black;
        -moz-box-shadow:    0 0 5px black;
        box-shadow:         0 0 5px black;
    }
    .cssanimations.csstransforms #note {
        -webkit-transform: translateY(-50px);
        -webkit-animation: slideDown 2.5s 1.0s 1 ease forwards;
        -moz-transform:    translateY(-50px);
        -moz-animation:    slideDown 2.5s 1.0s 1 ease forwards;
    }


    #close {
      position: absolute;
      right: 10px;
      top: 9px;
      text-indent: -9999px;
      background: url(images/close.png);
      height: 16px;
      width: 16px;
      cursor: pointer;
    }
    .cssanimations.csstransforms #close {
      display: none;
    }
    
    @-webkit-keyframes slideDown {
        0%, 100% { -webkit-transform: translateY(-50px); }
        10%, 90% { -webkit-transform: translateY(0px); }
    }
    @-moz-keyframes slideDown {
        0%, 100% { -moz-transform: translateY(-50px); }
        10%, 90% { -moz-transform: translateY(0px); }
    }
	</style>


<form class="needs-validation" novalidate="" action="ping.php" method="post">
        <div class="center">
          <div class="col-md-4 mb-1">
            <label for="firstName">IP-Address</label>
            <input type="text" class="form-control" id="pings" name="ping" placeholder="" value="" required="">
            <div class="invalid-feedback">
            The IP address must be specified!
            </div>

          
          <div class="col-md-20 mb-20">
            <label for="firstName">Port</label>
            <input type="text" class="form-control" id="ports" name="port" placeholder="" value="" required="">
            <div class="invalid-feedback">
            The IP address must be specified!
            </div>
            </div>

          </div>
          </div>

          <p></p>
          <p></p>
          <p></p>
          <p></p>
          <p></p>
          <p></p>
          <p></p>

          <?php
          
          $host = $_POST["ping"];
          $ports = $_POST["port"];

          if ($host == "" ) {

            echo '<div id="note">
           Please enter a IP-Adress! <a id="close">[close]</a>
          </div>';


          }

          elseif (!$socket = @fsockopen("$host", $ports, $errno, $errstr, 30))
          {
           echo '<div id="note">
           Server is Down! <a id="close">[close]</a>
          </div>';
          }
          else 
          {
          echo '<div id="note">
            Server is Up! <a id="close">[close]</a>
           </div>';

          fclose($socket);
}

          ?>
          </div>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Check</button>
      </form>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>
