<?php


$info = array(
   0 => array(
       'Name' => 'Spere',
       'Pic' => './pics/spere.png',
       'Link' => 'http://www.spere.org',
       'Dis' => '<p><b>Spere</b> is an online shopping platform that simplifies the process of purchasing electronics.</p>
                 <p>Using algorithms to summarize both technical attributes and consumer sentiment into one Spere Score, users are able to make accurate purchasing decisions without worry of getting an inferior product.</p>
                 <p>After deciding on which product to buy, users are then able to track and compare prices from a limited selection of up to 5 trusted sellers.</p>
                 <p>Spere is built from scratch with PHP and JS.</p>'
   ),
   1 => array(
       'Name' => 'AP Calculator',
       'Pic' => './pics/apcalculator.png',
       'Link' => 'http://www.apcalculator.com',
       'Dis' => "<p><b>AP Calculator</b> is your one stop destination for testing help. Featuring AP, IB, SAT, ACT and Final Grade/GPA calculators.</p>
                 <p>Began as a personal project to help out my fellow students in 2014 and has grown to become the world's second most popular AP score site.</p>
                 <p>Boasts the only up-to-date scoring formulas as of April, 2016 and features a responsive mobile design. Ranks number one in APUSH calculator keywords and number two in AP calculator keywords.</p>
                 <p>Built in a week from scratch with PHP and a custom CSS/JS Front-End Framework.</p>"
   ),
   2 => array(
     'Name' => 'Flash Pilot',
     'Pic' => './pics/flashpilot.png',
     'Link' => 'http://www.flashpilot.net',
     'Dis' => '<p><b>Flash Pilot</b> is a gaming portal I aquired a few months ago.</p>
               <p>Since I was a kid, I have always dreamed of having a job that involves gaming, Flash Pilot is my oppurtunity.</p>
               <p>It is a PHP driven gaming portal that I plan on renovating and using as a launchpad to promote my own brand of mobile games, as soon as I have time to build them.</p>'
   ),
   3 => array(
     'Name' => "Mike&E's",
     'Pic' => './pics/mike.png',
     'Link' => 'http://www.mikeandes.com',
     'Dis' => '<p>Created an online presence for a local 6 month old restaurant. Using Jekyll and SASS, I built a custom design with the goal of converting visitors to restaurant patrons.</p>
               <p>Made with HTML and SCSS</p>'
   )
);

for ($i = 0; $i < count($info); $i++) {

?>
  <a href="<?php echo $info[$i]['Link'] ?>">
    <div class="port">
      <div class="cover">
        <img src="<?php echo $info[$i]['Pic'] ?>" />
        <p class="name"><?php echo $info[$i]["Name"] ?></p>
      </div>

      <div class="text">
        <?php echo $info[$i]['Dis'] ?>

      </div>


    </div>
  </a>

<?php } ?>
