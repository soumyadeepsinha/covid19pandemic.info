<?php
if (isset($_POST['submit'])) {      // if user clicks on 'Submit' button
    $to = $_POST['email'];          // user's given email id
    $username = $_POST['username'];
    $subject = 'COVID-19';
    $mailbody = 'Dear ' . $username . ' thank you for showing your interest & providing valuable feedback. 
    To prevent COVID-19 Please  Stay Safe at Home Quarantine....Don\'t panic!
    We will contact with you shortly...
    From: Soumyadeep Sinha';                    // mail text
    $headers = 'From: sinhajiko@gmail.com';   // sender email address

    // if user doesn't provide a email
    if ($email == '') {
?>
        <script type="text/javascript">
            alert("You haven't provided any email!");
        </script>
    <?php
        exit();
    } else
        // Executing mail function when user provides a email
        if (mail($to, $subject, $mailbody, $headers)) {
    ?>
        <script type="text/javascript">
            alert("Please check your email inbox!");
        </script>
    <?php
        } else {
    ?>
        <script type="text/javascript">
            alert("Something went wrong. Please try again later!");
        </script>
<?php
        }
}
?>