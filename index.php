<!DOCTYPE HTML>
<html>
<head>
<!-- Signature -->
<script>
//![CDATA[
/*

KKKKKKKKK    KKKKKKK     QQQQQQQQQ     IIIIIIIIII
K:::::::K    K:::::K   QQ:::::::::QQ   I::::::::I
K:::::::K    K:::::K QQ:::::::::::::QQ I::::::::I
K:::::::K   K::::::KQ:::::::QQQ:::::::QII::::::II
KK::::::K  K:::::KKKQ::::::O   Q::::::Q  I::::I
  K:::::K K:::::K   Q:::::O     Q:::::Q  I::::I
  K::::::K:::::K    Q:::::O     Q:::::Q  I::::I
  K:::::::::::K     Q:::::O     Q:::::Q  I::::I
  K:::::::::::K     Q:::::O     Q:::::Q  I::::I
  K::::::K:::::K    Q:::::O     Q:::::Q  I::::I
  K:::::K K:::::K   Q:::::O  QQQQ:::::Q  I::::I
KK::::::K  K:::::KKKQ::::::O Q::::::::Q  I::::I
K:::::::K   K::::::KQ:::::::QQ::::::::QII::::::II
K:::::::K    K:::::K QQ::::::::::::::Q I::::::::I
K:::::::K    K:::::K   QQ:::::::::::Q  I::::::::I
KKKKKKKKK    KKKKKKK     QQQQQQQQ::::QQIIIIIIIIII
                                 Q:::::Q
                                  QQQQQQ



Have skills? Contact ME!

*/
//]]>

</script>
<!-- Scripts and Style -->

  <!-- JQuery -->
  <script type="text/javascript" src="./js/jquery-1.11.2.js"></script>
  <script type="text/javascript" src="./js/jquery-ui.js"></script>

  <!-- Other Stuff -->
  <script src="./js/initfunc.js"></script>
  <script src="./js/driver.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Quicksand:400,700,300' rel='stylesheet' type='text/css'>
  <link href="./css/index.css" rel="stylesheet" type="text/css" />
  <link href="./css/rotation.css" rel="stylesheet" type="text/css" />




<!-- Title and Msc. -->
<title>KQI</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
<meta charset="UTF-8">
<meta name="description" content="Contact me, KQI. I'm a web developer, entrepreneur and basketball player. Book me for your next project.">
<meta name="keywords" content="Kevin Qi, KQI, KQI34, Kevin Web Developer">
<link rel="icon" href="./pics/favicon.ico" type="image/x-icon" />
<?php include_once("./php/analytics.php") ?>

</head>

<body>


<?php
  $msg = "";

  if ($_GET['err']) {
    $msg = $_GET['err'];

  }else if ($_GET['msg']){

    $msg = $_GET['msg'];
  }


  if ($msg) {
?>
  <script> $(document).ready( function() { contact_submit(); }); </script>

<?php
  }
?>


<div id="head">
  <p id="home_p">Home</p>
  <p id="portfolio_p">Portfolio</p>
  <p id="about_p">About</p>
  <p id="contact_p">Contact</p>


</div>

<div id="home">
  <h2>KQI</h2>

</div>

<div id="portfolio">
<?php include("./php/portfolio.php") ?>

</div>


<div id="about">

<?php echo exec('./php/get_analytics_data.php'); ?>





</div>



<div id="contact">
  <div id="me">
    <img class="round" title="Me" src="./pics/me.jpg" />
    <img class="orbit" title="Follow me on Instagram" id="insta" src="./pics/instagram.png" />
    <img class="orbit" title="Connect with me on LinkedIn" id="linked" src="./pics/linkedin.png" />
    <img class="orbit" title="Add me on Facebook" id="fb" src="./pics/facebook.png" />
    <img class="orbit" title="Follow me on Github" id="git" src="./pics/github.png" />


  </div>


  <form action="./php/contact_me.php" method="post">
    <p>Shoot me an Email</p>
    <input type="text" name="Name" placeholder="Name" value="<?php echo htmlspecialchars($_GET['Name']); ?>">
    <input type="text" name="Email" placeholder="Email" value="<?php echo htmlspecialchars($_GET['Email']); ?>">
    <textarea placeholder="What's up?" name="Content"></textarea>
    <input type="submit" value="Submit">

    <?php if ($msg) { echo '<p class="msg">' . $msg . '</p>'; } ?>



  </form>



</div>







</body>
</html>
