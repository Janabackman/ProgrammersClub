<!-- ***********************************************************************************
  Page Name  : ContactMeSend.php 
  Author     : Jana Backman 
  Your URL   : ocelot-aul.fiu/~jback007
  Course     : WEB-Online Summer 2022
  Program #  : 3
  Purpose    : The front end page to fedback the user that email has been sent
  Due Date   : 07/02/2022

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ Jana Backman}..........
******************************************************************************* -->
<!DOCTYPE html><!-- this is a declaration used in HTML 5. It tells the browsers that this is HTML 5 -->

<html><!-- start of html (Hyper Text Markup Language) --> 
    
    <head> <!-- start of the head section -->
        <title>ContactMeSend</title>
    </head><!-- end of the head section --> 
    <body> <!-- start body -->
        
        <?php include 'backman_header.php'; ?><!-- calling the header page to display it -->
        <br><!--entering new line -->
        
        <center><h2><font color = "red"><b>CONTACT ME</b></font></h2></center><br>
 
        <?php include 'mainMenu.php'; ?><!-- calling the mainMenu page to display it -->
        <br><!--entering new line -->

        <!-- telling the user that the email has been succesfully sent -->
        <center><p>Your message has been submitted to michael.robinson@cs.fiu.edu<p></center>
        <center><p>Thank you<p></center>

    </body><!-- end body-->

</html><!-- end html -->
