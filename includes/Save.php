<!-- ***********************************************************************************
  Page Name  : Save.php 
  Author     : Jana Backman 
  Your URL   : ocelot-aul.fiu/~jback007
  Course     : WEB-Online Summer 2022
  Program #  : 3
  Purpose    : Saves the data (record) inputed to the SQL database
  Due Date   : 07/02/2022

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ Jana Backman}..........
******************************************************************************* -->
<!DOCTYPE html>   <!-- declaration used in HTML 5. Tells browsers that this is HTML 5 -->

<html>
   
   <body>
      
      <?php
         //----debbuging code 
         /*echo "Programmer ID: ".$ProgrammerId."<br>"; 
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
         echo $IT." ";
         echo $Robotic." ";
         echo $WebDev."<br>";*/
         //----end debuguing code
                        
         //trimming the inputed PK field all extra spaces        
         $ProgrammerId = trim($ProgrammerId);
       
         if(strlen($ProgrammerId)>0)//if PK length is larger than 0 > there is a value in the PK field then insert the data fields into the table       
         {   
            $sql="INSERT INTO customers (
                ProgrammerId, 
                FirstName,
                LastName,
                Email,
                Age,
                YearsOfExperience,
                RecentProject,
                WorkLocation,
                PersonalWebsite,
                RecentProjectDetails,
                FavoriteLanguage,
                OperatingSystem,
                AI,
                IT, 
                Robotic,
                WebDev
               )
              
               VALUES
               (            
                '$ProgrammerId',
                '$FirstName',
                '$LastName',
                '$Email',
                '$Age',
                '$YearsOfExperience',
                '$RecentProject',
                '$WorkLocation',
                '$PersonalWebsite',
                '$RecentProjectDetails',
                '$FavoriteLanguage',
                '$OperatingSystem',
                '$AI',
                '$IT',
                '$Robotic',
                '$WebDev'
               )";
                
         //if the insert went through means that record was inserted    
          if (mysqli_query($connection, $sql)) 
          {
             //debugguing line
             //echo "<br>New record created successfully";
             //displaying to the user that the record was saved
             $message ="<span style=\"color: blue;\">RECORD $ProgrammerId ADDED</span><br\>";
          } //end if (mysqli_query($connection, $sql)) 
          else
          {
             //echo "<br>Error: " . $sql . "<br>" . mysqli_error($connection);
             $message ="<span style=\"color: red;\">RECORD $ProgrammerId ALREADY EXIST</span><br\>";
          }//end else
           
         } //end if(strlen($Telephone)>0)                      
         else // else if PK field is empty promp the user to enter Programmer ID
         {
            $message ="<span style=\"color: red;\">YOU MUST ENTER Programmer ID TO SAVE THE RECORD</span><br\>";
         } //end else
                  
      ?><!--closing php-->
   </body><!--closing body-->
</html><!--closing html-->