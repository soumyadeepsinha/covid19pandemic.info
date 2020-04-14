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
                    <h1> Stay Home <i class="fa fa-home"></i> <span class="text-primary"> Stay Safe </span> Fight Together Against C<span class="rotate"><img src="./assets/images/O.png" alt="O"></span>rona Virus </h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Lastest Update -->
    <section class="corona_update container-fluid">
        <div class="my-4">
            <h3 class="text-capitalize text-center"> COVID-19 Updates in India <span class="update"> </span></h3>
            <h3 class="timestamp text-center"> on
                <?php date_default_timezone_set('Asia/Kolkata');
                $currentTime = date('d-m-Y h:i:s A', time());
                echo $currentTime; ?>
                <form action="world.php" target="_blank"><button type="submit" class="btn btn-outline-success update_button">World Wide Update</button></form>
            </h3>
        </div>
        <div class="d-flex justify-content-around align-items-center count_style">
            <div>
                <h1 class="count"> 1,524,266 </h1>
                <p class="text-capitalize"> Passengers screened at airport </p>
            </div>
            <div>
                <h1 class="count"> 8,978 </h1>
                <p class="text-capitalize"> Active cases </p>
            </div>
            <div>
                <h1 class="count"> 1,205 </h1>
                <p class="text-capitalize"> Cured / Discharged cases </p>
            </div>
            <div>
                <h1 class="count"> 358 </h1>
                <p class="text-capitalize"> Death Cases </p>
            </div>
            <div class="update_button">
                <form action="https://www.covid19india.org/" target="_blank"><button type="submit" class="btn btn-outline-success _" blank">Latest Update</button></form>
            </div>
        </div>
    </section>
    <!-- About -->
    <section class=" about_corona">
        <div class="container-fluid sub-section pt-5 pb-5" id="aboutid">
            <div class="section_header text-center mb-5 mt-5">
                <h1> About COVID-19 </h1>
            </div>
            <div class="row pt-2">
                <div class="col-lg-5 col-md-6 col-12">
                    <img src="./assets/images/coronavirusabout.jpg" alt="aboutcovid" class="about pl-5 img-fluid">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h2><b> What is COVID-19 (Corona-Virus)? </b><br>
                        <span class="text-primary"> According to World Health Organization (WHO) </span>
                    </h2>
                    <p> Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.
                        Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment. Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness. </p>
                    <p> The COVID-19 virus spreads primarily through droplets of saliva or discharge from the nose when an infected person coughs or sneezes, so it’s important that you also practice respiratory etiquette (for example, by coughing into a flexed elbow). </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Symptoms -->
    <section class="symtoms_corona">
        <div class="container-fluid pt-5 pb-5" id="sympid">
            <div class="section_header text-center mb-5 mt-4">
                <h1> COVID-19 Symtoms </h1>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12 mt-5">
                        <figure class="text-center">
                            <img src="./assets/images/HighFever.png" alt="Fever" class="img-fluid" width="120" height="120">
                            <figcaption> Fever </figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 mt-5">
                        <figure class="text-center">
                            <img src="./assets/images/CaughProblem.png" alt="Fever" class="img-fluid" width="120" height="120">
                            <figcaption> Cough </figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 mt-5">
                        <figure class="text-center">
                            <img src="./assets/images/BreathingProblem.png" alt="Fever" class="img-fluid" width="120" height="120">
                            <figcaption> Difficulty in Breathing </figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 mt-5">
                        <figure class="text-center">
                            <img src="./assets/images/cold.jpeg" alt="Fever" class="img-fluid" width="120" height="120">
                            <figcaption> Sneezing </figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 mt-5">
                        <figure class="text-center">
                            <img src="./assets/images/runny-nose.png" alt="Fever" class="img-fluid" width="120" height="120">
                            <figcaption> Runny-Nose </figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 mt-5">
                        <figure class="text-center">
                            <img src="./assets/images/sick.jpeg" alt="Fever" class="img-fluid" width="120" height="120">
                            <figcaption> Sick/Tiredness </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
        <div class="govt_info sub-section pt-5 pb-5">
            <h2 class=" text-info text-center" mt-5> Govt. of India says about Corona Virus Symptoms: </h2>
            <img src="./assets/images/coronaInformation.jpg" alt="Information About Corona Virsu">
        </div>
    </section>
    <!-- Prevention -->
    <section class="prevent_corona">
        <div class="govt_inst do_dont" id="previd">
            <h2 class=" text-info text-center mt-5"> Instruction from Govt. of India about Corona Virus: </h2>
            <iframe src="assets/pdf/Poster_Corona_ad_Eng.pdf" frameborder="1" width="80%" height="500px" class="mt-2 mb-10"></iframe>
        </div>
        <div class="container-fluid">
            <div class="section_header text-center mb-5 mt-4">
                <h1> 3 easy-Steps to Prevent Nobel Corona Virus </h1>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12 mt-5">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <figure class="text-center">
                                    <img src="./assets/images/hwash.png" alt="Wash Hand" class="img-fluid" width="90" height="90">
                                </figure>
                            </div>
                            <div class="col-lg-8 col-md-8 col-12">
                                <p class="text-align-left"> Wash Your Hands Properly with soap or alcohol-based sanitizer </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 mt-5">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <figure class="text-center">
                                    <img src="./assets/images/quarantine.png" alt="Home Quarantine" class="img-fluid" width="90" height="90">
                                </figure>
                            </div>
                            <div class="col-lg-8 col-md-8 col-12">
                                <p class="text-align-left"> Avoid close contact with People (1 meter or 3 feets),
                                    Home Quarantine Yourself for till <span class="text-primary"> 30th April </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 mt-5">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <figure class="text-center">
                                    <img src="./assets/images/mask.png" alt="Wear Mask" class="img-fluid" width="90" height="90">
                                </figure>
                            </div>
                            <div class="col-lg-8 col-md-8 col-12">
                                <p class="text-align-left"> Cover your Nose and Mouth with Mask, fix your elbow while coughing and sneezing </p>
                            </div>
                        </div>
                    </div>
                    <p class="prevention_info">
                        According to WHO : The best way to prevent and slow down transmission is be well informed about the COVID-19 virus, the disease it causes and how it spreads. Protect yourself and others from infection by washing your hands or using an alcohol based rub frequently and not touching your face.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact with us -->
    <section class="contact">
        <div class="container-fluid pt-5 pb-5" id="contactid">
            <div class="section_header text-center mb-5 mt-4">
                <h1> Contact with Us </h1>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-12">
                        <form action="index.php" method="POST">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="name" class="form-control" name="username" placeholder="Enter your Name" autocomplete="off" required />
                            </div>
                            <div class="form-group">
                                <label>Email address</label>
                                <input type="email" class="form-control" name="email" placeholder="name@example.com" autocomplete="off" />
                            </div>
                            <div class="form-group">
                                <label>Contact No</label>
                                <input type="number" class="form-control" name="mobile" placeholder="Enter your conatact no" autocomplete="off" required />
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="address" class="form-control" name="address" placeholder="Enter your address" autocomplete="off" required />
                            </div>
                            <div class="form-group">
                                <label> Select Symptoms </label> <br>

                                <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                    <input type="checkbox" class="custom-control-input" id="customcheckbox1" name="coronasym[]" value="cold">
                                    <label class="custom-control-label" for="customcheckbox1">Cold</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                    <input type="checkbox" class="custom-control-input" id="customcheckbox2" name="coronasym[]" value="cough">
                                    <label class="custom-control-label" for="customcheckbox2">cough</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                    <input type="checkbox" class="custom-control-input" id="customcheckbox3" name="coronasym[]" value="fever">
                                    <label class="custom-control-label" for="customcheckbox3">fever</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                    <input type="checkbox" class="custom-control-input" id="customcheckbox4" name="coronasym[]" value="breath">
                                    <label class="custom-control-label" for="customcheckbox4">breathing problem</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                    <input type="checkbox" class="custom-control-input" id="customcheckbox5" name="coronasym[]" value="tird">
                                    <label class="custom-control-label" for="customcheckbox5">tiredness</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                                    <input type="checkbox" class="custom-control-input" id="customcheckbox6" name="coronasym[]" value="no problem">
                                    <label class="custom-control-label" for="customcheckbox6">no problem</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Define your Problems</label>
                                <textarea class="form-control" name="message" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-outline-success btn-block" name="submit" value="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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
                <form action="https://github.com/soumyadeepsinha/COVID-19_Info"><button type="submit" class="btn btn-outline-success"> Source Code </button></form>
            </p>
        </div>
        <div class=" footer_style text-white text-center container-fluid">
            <h6 class="text-center"><i class="fa fa-copyright fa-1.5x text-black"></i> 2020 Soumyadeep Sinha </h6>
        </div>
    </footer>
    <!-- JavaScript -->
    <script>
        // JQuery for Counter
        $('.count').counterUp({
            delay: 10,
            time: 2000
        })
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

<?php
// including database connectivity file
require_once 'dbconnection.php';
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];   // Storing user data
    $symp = $_POST['coronasym'];
    $message = $_POST['message'];

    $check = "";
    foreach ($symp as $check1) {
        $check .= $check1 . ",";    // Storing multiple symptoms in array
    }

    // statement to insert data in table 
    $insert = "INSERT INTO info (username, email, mobile, address, symptom, message)
    VALUES ('$username', '$email', '$mobile', '$address', '$check', '$message')";

    // run the SQL query
    $query = mysqli_query($con, $insert);

    if ($query) {   // if query executes
?>
        <script type="text/javascript">
            alert("Your Information has been Inserted Successfully!");
        </script>
    <?php
    } else {    //if query not executes
    ?>
        <script type="text/javascript">
            alert("Opps!! Something went wrong. Please try again");
        </script>
<?php
    }
}
// Redirecting to email page
include 'email.php';
?>