<!-- ***********************************************************************************
  Page Name  : About.php 
  Author     : Jana Backman 
  Your URL   : ocelot-aul.fiu/~jback007
  Course     : WEB-Online Summer 2022
  Program #  : 4
  Purpose    : The about page tells all about the webpage and it's purpose
  Due Date   : 7/16/2022

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ Jana Backman}..........
******************************************************************************* -->
<!DOCTYPE html>
<html><!-- start of html (Hyper Text Markup Language) --> 
    
    <head> <!-- start of the head section -->
        <title>About.php</title>
        
        <style type="text/css">/* internal css*/ 
          
            .slogan{ /* calling the slogan class*/ 
                display: block;
                color: #2980B9;
                background-color: #C5D0CF;
                padding: 5px 0px;
            }
            table{/* calling the table tab name*/ 
                width: 60%;
                margin: auto;
            }
            .left{ /* calling the left class*/ 
                color: 	#800000;
                font-family: Calibri, Helvetica, sans-serif;
                padding-right: 4px;
            }
        </style><!-- end internal style -->
    </head><!-- end head section -->
    <body><!-- start body section -->
        <?php include 'backman_header.php'; ?><!-- calling the header page to display it -->
        
        <h2><center><font face = "Castellar" color = "red" >ABOUT US</font><center></h2><!-- displaying abut us centered, red -->
        
        <center><span class = "slogan">Programmers Space to form a Community. To Share Your Journey</span></center><br><!-- this is the slogan section displayd as a band on top of the page-->
        <?php include 'mainMenu.php'; ?><!-- calling the mainMenu page to display it -->
        
        <br>
        
        <table><!-- using table for page alignmet -->
            <tr>
                <td class = "left">We are here to make your life as a programmer easier by becoming part of our community. </td>
                <td>The life of a programmer can become pretty solitary and sometimes lonely. <br> Here at PROGRAMMER COMMUNITY, we offer you to be a part of a larger group and have the chance to communicate your thoughts, accomplishments, and work, with others that go through the same as you.</td>
            </tr>
            <tr><td><br><br></td><td><br><br></td></tr>
            <tr>
                <td class = "left">How to join? </td>
                <td>It's very simple. Just go back to the home (program4) page and enter your data, including a unique programmer ID. Click save and walla! you are also part of PROGRAMMER COMMUNITY. 
                </td>
            </tr>
            <tr><td><br><br></td><td><br><br></td></tr>
            <tr>
                <td class = "left">How does it work? </td>
                <td>By clicking on the "Contact Us" button. You can enter any question/problem you have about your program.
                </td>
            </tr>
         </table><!-- end table -->
    </body><!-- end body section -->
</html><!-- end HTML -->