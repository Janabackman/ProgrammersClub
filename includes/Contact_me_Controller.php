<!-- ***********************************************************************************
  Page Name  : Contact_me_Controller.php 
  Author     : Jana Backman 
  Your URL   : ocelot-aul.fiu/~jback007
  Course     : WEB-Online Summer 2022
  Program #  : 3
  Purpose    : Gets the data from contact_me and sends it to an email, back end only
  Due Date   : 07/02/2022

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ Jana Backman}..........
******************************************************************************* -->
<?php 

    if(isset($_POST['submit'])) 
    { 
        //setting the variables to use in mail() function
        $to = "michael.robinson@cs.fiu.edu"; 
        $subject = "From Teaching Website"; 
        //setting the variables from front end for the body
        $Your_Email = $_POST['Your_Email']; 
        $LastName = $_POST['LastName']; 
        $FirstName = $_POST['FirstName']; 
        $ContactingReason = $_POST['ContactingReason'];  
        
        //using if statement to see if checkbox checked else set to nothing for alignmet
        if($_POST['Java']=="Java"){
            $Java = $_POST['Java']." ";
        }
        else{ $Java = ""; } 

        if($_POST['PHP']=="PHP"){
            $PHP = $_POST['PHP']." ";
        }
        else{ $PHP = ""; } 

        if($_POST['HTML']=="HTML"){
            $HTML = $_POST['HTML'];
        }
        else{ $HTML = ""; } 

        $PriorityLevel = $_POST['PriorityLevel'];
        $message = $_POST['Comments'];

        //seting the body of the email and aligning
        $body = "From:       $FirstName $LastName\nE-Mail:     $Your_Email\n\nReason:     $ContactingReason\nLanguage:   $Java$PHP$HTML\n\nPriority:   $PriorityLevel\n\nMessage:    $message\n\n";

        mail($to, $subject, $body); //this function sends the email 

        include("ContactMeSend.php");//calls contactMeSent.php to inform that email was sent succesfully
    } 
?><!--closing php-->
