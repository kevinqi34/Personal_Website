<?php

  function test_input($data)
  {
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     $special=array("select","drop","delete","insert","update","alter");
     $data=str_replace($special,"",$data);
     return $data;
  }




  $destination = "kevinqi34@gmail.com";
  $email = $_POST['Email'];
  $name = $_POST['Name'];
  $msg = $_POST['Content'];

  $continue = false;
  $form_error = "";

  //validation

  //verify name
     if (empty($name)) {


           $form_error = "A name is required.";
         }
         else {

           $name_input = test_input($name);

           if ((strlen($name_input) < 3) || (strlen($name_input) >29))
             {
                 $form_error ="Name should be between 3-30 letters.";
               }
           // check if name only contains letters and whitespace
           if (!preg_match("/^[a-zA-Z \.]*$/",$name)) {
             $form_error = "Only letters and white space allowed.";
           }


           if ($form_error == "") {

              $continue = true;

           }


         }


   //verify email

   if ($continue) {

     if (empty($email)) {
        $form_error = "An email is required.";
      } else {
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          echo $email;
          $form_error = "Invalid email format.";

        }
      }

      if ($form_error != "") {

        $continue = false;
      }


    }


    //verify content



    if ($continue) {


      if (empty($msg)) {
         $form_error = "A message is required.";
       }
       if ($form_error != "") {
         $continue = false;
       }

       }




    // send mail

    if ($continue && $form_error == "") {

      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
      $headers .= "From: support@spere.io" . "\r\n";

      $msg = "<p>From: " . $email . "</p><p>Name: " . $name . "</p><p>Message: " . $msg . "</p>";


      mail($destination,"Inquiry",$msg,$headers);


    }






    if ($form_error != "") {

      header('Location: ../?err=' . $form_error . '&Email=' . $email . '&Name=' . $name);


    }else {
      header('Location: ../?msg=Your message has been sent.');



    }
















 ?>
