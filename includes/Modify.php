<!-- ***********************************************************************************
  Page Name  : Modify.php 
  Author     : Jana Backman 
  Your URL   : ocelot-aul.fiu/~jback007
  Course     : WEB-Online Summer 2022
  Program #  : 3
  Purpose    : Allows the user to modify a record after being found 
  Due Date   : 07/02/2022

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ Jana Backman}..........
******************************************************************************* -->
<!DOCTYPE html>   <!-- declaration used in HTML 5. Tells browsers that this is HTML 5 -->

<html>

  <body>
      <!--h3>this is modify.phd</h3-->
      <?php
       
       $found = $_POST['found']; // reassinig the variable found to the value set up previously by Find.php

       //----debugging and testing code
       /* echo $ProgrammerId."<br>";
        echo $FirstName."<br>";
        echo $LastName."<br>";
        echo $Email."<br>";
        echo $Age."<br>";
        echo $YearsOfExperience."<br>";
        echo $RecentProject."<br>";
        echo $WorkLocation."<br>";
        echo $PersonalWebsite."<br>";
        echo $RecentProjectDetails."<br>";
        echo $FavoriteLanguage."<br>";
        echo $OperatingSystem."<br>";
        echo $AI."<br>";
        echo $IT."<br>";
        echo $Robotic."<br>";
        echo $WebDev."<br>";
        echo "<br>modify found = [" . $found . "]";*/
        //---end debugging and testing code

        if((strlen(trim($found)) > 0 ) && ($found == $ProgrammerId)) // if the length of the PK is higer than 0 and $found variable is equal to the PK (it was found previosly)
         { //update the record fields with the new entered data with this SQL query                       
            $query = "UPDATE customers 
                    SET FirstName ='$FirstName',
                        LastName ='$LastName',
                        Email ='$Email',
                        Age ='$Age',
                        YearsOfExperience ='$YearsOfExperience',
                        RecentProject ='$RecentProject',
                        WorkLocation ='$WorkLocation',
                        PersonalWebsite ='$PersonalWebsite',
                        RecentProjectDetails ='$RecentProjectDetails',
                        FavoriteLanguage ='$FavoriteLanguage',
                        OperatingSystem ='$OperatingSystem',
                        AI ='$AI',
                        IT ='$IT',
                        Robotic ='$Robotic',
                        WebDev ='$WebDev'                            
                   WHERE ProgrammerId = '$ProgrammerId'";
                       
            $sql = mysqli_query( $connection,$query );//pass the query to mysql
                                              
            if ($sql)//if the record was updated
            {
               $message ="<span style=\"color: blue;\">RECORD $found MODIFIED</span><br\>";//inform the user
            }  //end if($sql)
            else//else inform the user that there was a problem
            {
               //debugguing line
               //echo "Problem updating record. MySQL Error: " . mysqli_error($connection);

               $message ="<span style=\"color: red;\">PROBLEM UPDATING RECORD</span><br\>";
            }//end else
             
         } //end if((strlen(trim($found)) > 0 ) && ($found == $ProgrammerId)) 
         else//else if programmer ID not entered, or not equal to $found, advise the user to find the record before modifiying
         {
            $message ="<span style=\"color: red;\">RECORD $ProgrammerId CAN NOT BE MODIFIED, FIND IT FIRST</span><br\>";
         }//end else

       
      ?><!--closing php-->
    </body><!--closing body-->           
</html><!--closing html-->