<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Expires" content="0">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keyword" content="Corona Virus Information, covid19pandemic, Corona Virsu Info, Corona Virus Update India">
  <meta name="description" content="Covid19information provides everything about Corona Virsu Information, Here You will get Covid-19 India's Statewise & Worldwide updates that we've collected using Official website & api">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Waypoint CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha256-jDnOKIOq2KNsQZTcBTEnsp76FnfMEttF6AV2DF2fFNE=" crossorigin="anonymous"></script>
  <!-- Font Awesome 4.7 CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha256-NuCn4IvuZXdBaFKJOAcsU2Q3ZpwbdFisd5dux4jkQ5w=" crossorigin="anonymous" />
  <!-- Remove Favicon -->
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
  <!-- Custom Stylesheet -->
  <link rel="stylesheet" href="./assets/css/style.css">
  <title>Corona Virus Information | Covid-19 Info</title>
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
          <a class="nav-link" href="#aboutid">about</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#sympid">symptoms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#previd">prevention</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="indiaupdate.php">updates</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contactid">contact</a>
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
          <h1> Stay Home <i class="fa fa-home fa-2.5x" aria-hidden="true"></i> <span class="text-primary"> Stay Safe </span> Let's Fight Together Against C<span class="rotate"><img src="./assets/images/O.png" alt="O"></span>rona Virus
          </h1>
        </div>
      </div>
    </div>
  </div>
  <!-- Lastest Update -->
  <section class="corona_update container-fluid">
    <div class="my-4">
      <h3 class="text-capitalize text-center"> COVID-19 🇮🇳 Indian Statistics <span class="update"> </span></h3>
      <h3 class="timestamp text-center"> On
        <?php date_default_timezone_set('Asia/Kolkata');
        $currentTime = date('d-m-Y');
        echo $currentTime; ?>
        <div class="update_button">
          <form action="world.php" target="_blank"><button type="submit" class="btn btn-outline-success _" blank">World Wide Updates</button></form>
        </div>
      </h3>
    </div>
    <div class="d-flex justify-content-around align-items-center count_style">
      <div>
        <h1 class="text-primary" id="confirmed"></h1>
        <p class="text-capitalize"> Total Confirmed Cases </p>
      </div>
      <div>
        <h1 class="text-primary" id="active"></h1>
        <p class="text-capitalize">&nbsp; Active cases </p>
      </div>
      <div>
        <h1 class="text-success" id="recovered"></h1>
        <p class="text-capitalizex"> Cured / Discharged cases </p>
      </div>
      <div>
        <h1 class="text-danger" id="deaths"></h1>
        <p class="text-capitalize"> Death Cases </p>
      </div>
      <div class="update_button">
        <form action="https://www.mohfw.gov.in/" target="_blank"><button type="submit" class="btn btn-outline-success _" blank">Latest Update</button></form>
      </div>
    </div>
    <canvas class="container-fluid bg-transparent text-center p-5 my-3" id="covidChart"></canvas>
  </section>

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
        <h6 class="text-center"> Designed by Soumyadeep Sinha </h6>
        <a href="https://github.com/soumyadeepsinha/covid19pandemic.info.git" id="sourcebtn" class="btn btn-primary" target="_blank">
          Source Code &nbsp; <i class="fa fa-external-link" aria-hidden="true"></i> </a>
      </p>
    </div>
  </footer>

  <!-- JavaScript -->
  <script>
    var url = `https://api.covid19india.org/data.json`

    fetch(url).then(response => response.json()
      .then(data => {
        console.log(data);

        var total_confirmed, total_active, total_recovered, total_deaths

        var state = []
        var confirmed = []
        var active = []
        var recovered = []
        var deaths = []

        $.each(data.statewise, function(id, object) {
          state.push(object.state)
          confirmed.push(object.confirmed)
          active.push(object.active)
          recovered.push(object.recovered)
          deaths.push(object.deaths)
        })

        // remove first element from the array
        state.shift()
        confirmed.shift()
        active.shift()
        recovered.shift()
        deaths.shift()

        console.log(state)


        total_active = data.statewise[0].active
        total_confirmed = data.statewise[0].confirmed
        total_recovered = data.statewise[0].recovered
        total_deaths = data.statewise[0].deaths

        $("#active").append(total_active)
        $("#confirmed").append(total_confirmed)
        $("#recovered").append(total_recovered)
        $("#deaths").append(total_deaths)

        var Chartdata = document.getElementById("covidChart").getContext('2d')

        var chart = new Chart(Chartdata, {
          type: "line",
          data: {
            labels: state,
            datasets: [{
                label: "Confirmed Cases",
                data: confirmed,
                backgroundColor: "#f1c40f",
                minBarLength: 100
              },
              {
                label: "Active Cases",
                data: active,
                backgroundColor: "#3357ff",
                minBarLength: 100
              },
              {
                label: "Recovered Cases",
                data: recovered,
                backgroundColor: "#2ecc71",
                minBarLength: 100
              },
              {
                label: "Deceased",
                data: deaths,
                backgroundColor: "#e74c3c",
                minBarLength: 100
              }
            ]
          },
          options: {}
        })
      })
    )


    // javaScript for Arrow button
    mybutton = document.getElementById("myBtn");
    window.onscroll = function() {
      scrollFunction()
    };
    // scrolling page with arrow
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

  <!-- Proper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <!-- Chart JS CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.0.0-alpha/Chart.min.js" integrity="sha256-7l53+mu/oEO4J97EJMByaRPcmFaMmh+GFhHVE0x5rUE=" crossorigin="anonymous"></script>
</body>

</html>