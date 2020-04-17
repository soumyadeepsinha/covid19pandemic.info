<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Waypoint CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha256-jDnOKIOq2KNsQZTcBTEnsp76FnfMEttF6AV2DF2fFNE=" crossorigin="anonymous"></script>
  <!-- Counter Up CND -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha256-JtQPj/3xub8oapVMaIijPNoM0DHoAtgh/gwFYuN5rik=" crossorigin="anonymous"></script>
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <!-- Font Awesome 4.7 CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha256-NuCn4IvuZXdBaFKJOAcsU2Q3ZpwbdFisd5dux4jkQ5w=" crossorigin="anonymous" />
  <!-- Remove Favicon -->
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
  <!-- Custom Stylesheet -->
  <link rel="stylesheet" href="./assets/css/style.css">
  <title>Novel Corona Virus</title>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg nav_style p-3">
    <a class="navbar-brand pl-5 font-weight-bolder" href="index.php"> COVID-19 Pandemic </a>
    <button class="navbar-toggler navbar-dark bg-dark" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto pr-5 text-capitalize">
        <li class="nav-item">
          <a class="nav-link" href="index.php">home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php#aboutid">about</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php#sympid">symptoms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php#previd">prevention</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php#contactid">contact</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- Logo & Main Div -->
  <div class="main_header">
    <div class="row w-100 h-100">
      <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
        <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
          <img src="./assets/images/Corona_Icon.png" alt="Corona Virus" class="icon">
        </div>
      </div>
      <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
        <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
          <h1> Stay Home <i class="fa fa-home"></i> <span class="text-primary"> Stay Safe </span> Fight Together Against C<span class="rotate"><img src="./assets/images/O.png" alt="O"></span>rona Virus </h1>
        </div>
      </div>
    </div>
  </div>
  <!-- Lastest Update -->
  <section class="corona_update container-fluid">
    <div class="my-3">
      <h3 class="text-capitalize text-center"> COVID-19 🇮🇳 Indian Day wise Statistics <span class="update"> </span></h3>
      <h3 class="timestamp text-center"> on
        <?php date_default_timezone_set('Asia/Kolkata');
        $currentTime = date('d-m-Y h:i:s A', time());
        echo $currentTime; ?>
        <form action="world.php" target="_blank"><button type="submit" class="btn btn-outline-success update_button">World Wide Update</button></form>
      </h3>
    </div>
    <div class="table-responsive">
      <table class="table table-bordered table-striped text-center" id="table1">

        <?php

        $data = file_get_contents('https://api.covid19india.org/data.json');
        $coranalive = json_decode($data, true);
        $statescount = count($coranalive['statewise']);

        $i = 1;
        while ($i < $statescount) {
        ?>
          <tr>
            <th class="text-left" colspan="6">Date & Month</th>
          </tr>
          <tr>
            <td colspan="6" class="text-left"> <?php echo $coranalive['cases_time_series'][$i]['date'] . "<br />"; ?> </td>
          </tr>
          <tr class="text-capitalize text-white">
            <th style="color: #fff; background: #2196f3;"> total confirmed </th>
            <th style="color: #fff; background: #ffc107;"> daily confirmed </th>
            <th style="color: #fff; background: #008c76ff;"> daily recovered </th>
            <th style="color: #fff; background: #c91e7f;"> daily deceased </th>
            <th style="color: #fff; background: #4caf50;"> total recovered </th>
            <th style="color: #fff; background: #332737ff;"> total deceased </th>
          </tr>
          <tr class="mb-5">
            <td style="background: #bed2f3;"> <?php echo $coranalive['statewise'][$i]['lastupdatedtime'] . "<br>"; ?> </td>
            <td style="background: #ffe493;"> <?php echo $coranalive['statewise'][$i]['state'] . "<br>"; ?> </td>
            <td style="background: #9de9ccff;"> <?php echo $coranalive['statewise'][$i]['confirmed'] . "<br>"; ?> </td>
            <td style="background: #fc95c6;"> <?php echo $coranalive['statewise'][$i]['active'] . "<br>"; ?> </td>
            <td style="background: #88d28b;"> <?php echo $coranalive['statewise'][$i]['recovered'] . "<br>"; ?> </td>
            <td style="background: #fb99a1;"> <?php echo $coranalive['statewise'][$i]['deaths'] . "<br>"; ?> </td>
          </tr>

        <?php
          $i++;
        }
        ?>
      </table>
    </div>
    <!-- Top Cursor -->
    <div class="container scrolltop float-right pr-5">
      <i class="fa fa-arrow-up" aria-hidden="true" onclick="topFunction()" id="myBtn"></i>
    </div>
    <!-- Footer -->
    <footer class="mt-5">
      <div class="disclaimer text-white text-center bg-dark">
        <h3> Disclaimer </h3>
        <p class="p1"> This is a website just for testing some skills; The above information are collected from Indian govt Official website <br />
          I made this website for some tutorial purpose, with help of youtube videos <br />
          World Wide & State cases data are have been collecting by using json api <br />
          I will never share any of your contact details with any one <br />
          I'll update this once or twice a day; For exact info you can follow top listed Govt. Websites <br />
          Thank You <br />
          <form action="https://bitbucket.org/soumyadeepsinha/covid19info/src/master/" target="_blank"><button type="submit" class="btn btn-outline-success">
              < Source Code /> </button></form>
        </p>
      </div>
      <div class="footer_style text-white text-center container-fluid">
        <h6 class="text-center"> Designed by Soumyadeep Sinha </h6>
      </div>
    </footer>
    <!-- JavaScript -->
    <script>
      // JavaScript for Arrow button
      mybutton = document.getElementById("myBtn");
      window.onscroll = function() {
        scrollFunction()
      };
      // Scrolling page with arrow
      function scrollFunction() {
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
          mybutton.style.display = "block";
        } else {
          mybutton.style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
</body>

</html>