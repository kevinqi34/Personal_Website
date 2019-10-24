<?php


$info = array(
   0 => array(
       'Name' => 'Exam Owl',
       'Pic' => './pics/examowl.png',
       'Link' => 'http://www.examowl.co',
       'Dis' => "<p><b>Exam Owl</b> is your one stop destination for testing help.
                  Featuring AP, IB, SAT, ACT and Final Grade/GPA calculators, forums and resources.</p>
                 <p>Began as a personal project to help out my fellow students in 2014 and has
                 grown to become the world's second most popular AP score site.</p>
                 <p>Boasts the only up-to-date scoring formulas as of April, 2016 and features a responsive mobile design.</p>
                 <p>Built from scratch with PHP and a custom MVC framework.</p>"
   ),
   1 => array(
       'Name' => 'Gadget Owl',
       'Pic' => './pics/gadgetowl.png',
       'Link' => 'https://github.com/kevinqi34/Spere_2017',
       'Dis' => '<p><b>Gadget Owl</b> is an online shopping platform that simplifies
                 the process of purchasing electronics.</p>
                 <p>Using algorithms to summarize both technical attributes and
                 consumer sentiment into one Spere Score,
                 users are able to make accurate purchasing decisions without worry
                 of getting an inferior product.</p>
                 <p>After deciding on which product to buy, users are then able to
                 track and compare prices from a limited selection of up to 5 trusted sellers.</p>
                 <p>Spere is built from scratch with PHP and JS.</p>'
   ),
   2 => array(

     'Name' => "Mike&E's",
     'Pic' => './pics/mike.png',
     'Link' => 'http://kevinqi34.github.io/Mike/',
     'Dis' => '<p>Created an online presence for a local 6 month old restaurant. Using Jekyll and SASS, I built a custom design with the goal of converting visitors to restaurant patrons.</p>
               <p>Made with HTML and SCSS</p>'
   ),
   3 => array(
     'Name' => 'Sinoclean',
     'Pic' => './pics/sinoclean.png',
     'Link' => 'http://www.sinoclean.co/en',
     'Dis' => '<p>Created an updated website for the #4 environmental construction company in China. </p><p>Using Grav, I built a multi-language supported, mobile friendly website with the goal of converting new clients for the company.</p>
     <p>Made with HTML and SCSS</p>'

   ),
   4 => array(
     'Name' => 'GM Location Finder',
     'Pic' => './pics/mhacks8.png',
     'Link' => 'https://github.com/kevinqi34/Location-Finder-For-GM-Vehicles',
     'Dis' => "<p>Location finder for GM vehicles is an app that I built in 36 hours during MHacks 8, in the fall of 2016.</p>
     <p>The app lets you find restaurants, hotels, atms and gas nearby within a set distance from your location all from a GM vehicle dashboard.</p>
     <p>Built with Google Location API and JS.</p>"
   ),
);

for ($i = 0; $i < count($info); $i++) {

?>
  <a target="_blank" href="<?php echo $info[$i]['Link'] ?>">
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
