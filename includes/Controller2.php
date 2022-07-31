<!-- ***********************************************************************************
  Page Name  : Controller2.php 
  Author     : Jana Backman 
  Your URL   : ocelot-aul.fiu/~jback007
  Course     : WEB-Online Summer 2022
  Program #  : 2
  Purpose    : This is the controller page. The action that retrieves all the data enterd by the user in the form in program 2. 

  Due Date   : 06/10/2022

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ Jana Backman}..........
******************************************************************************* -->
<!DOCTYPE html>   <!-- declaration used in HTML 5. Tells browsers that this is HTML 5 -->

<html>
   <head><!-- start of the head section -->
      <title>Controller2</title><!-- page title to display in window tab-->
   </head><!-- end of the head section --> 
          
   <body><!-- start of the body section -->

     <p>This is Controller2.php</p>
     <p>Called from Program 2</p>
        <!-- starting php --> 
        <?php
            //assigning each field value to a variable using the input name
            $ProgrammerId  = $_POST['ProgrammerId'];
            $FirstName = $_POST['FirtsName'];
            $LastName = $_POST['LastName'];
            $Email = $_POST['Email'];
            $Age = $_POST['Age'];
            $YearsOfExperience = $_POST['YearsOfExperience'];
            $RecentProject = $_POST['RecentProject'];
            $WorkLocation = $_POST['WorkLocation'];
            $PersonalWebsite = $_POST['PersonalWebsite'];
            $RecentProjectDetails = $_POST['RecentProjectDetails'];
            $FavoriteLanguage = $_POST['FavoriteLanguage'];
            $OperatingSystem = $_POST['OperatingSystem'];
            $AI = $_POST['AI'];
            $ITm = $_POST['IT'];
            $Robotic = $_POST['Robotic'];
            $WebDev = $_POST['WebDev'];
            //variable for futher assignments
            $found = $_POST['found'];


            //displaying name of field and field value in a div with margin 
            echo "Programmer ID: ".$ProgrammerId."<br>"; 
            echo "Firts Name: ".$FirstName."<br>";  
            echo "Last Name: ".$LastName."<br>"; 
            echo "Email: ".$Email."<br>";
            echo "Age: ".$Age."<br>"; 
            echo "Years of Experience: ".$YearsOfExperience."<br>"; 
            echo "Reecent Project: ".$RecentProject."<br>"; 
            echo "Work Location: ".$WorkLocation."<br>"; 
            echo "Personal Website: ".$PersonalWebsite."<br>";
            echo "Recent Project Details: ".$RecentProjectDetails."<br>";
            echo "Favorite Language: ".$FavoriteLanguage."<br>";
            echo "Operating System: ".$OperatingSystem."<br>";
            echo "Concentration Area: ".$AI." ";
            echo $ITm." ";
            echo $Robotic." ";
            echo $WebDev."<br><br>";
            
            
            //displaying the button clicked depending on which button was cliked using if.. else statements
            if ( $_POST['Find'] )
            { 
               echo "You pressed the Find botton";
            }
            else if ( $_POST['Save'] )
            { 
               echo "You pressed the Save botton";
            }
            else if ( $_POST['Modify'] )
            {  
               echo "You pressed the Modify botton";
            }
            else if ( $_POST['Delete'] )
            { 
               echo "You pressed the Delete botton";
            }
            else
            { 
               echo "<br><h1> you pressed UNKOWN button</h1>";   
            }
         ?><!-- end php --> 
   </body><!-- end body --> 
</html><!-- end html --> 