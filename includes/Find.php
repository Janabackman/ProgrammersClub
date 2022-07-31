<!-- ***********************************************************************************
  Page Name  : Find.php 
  Author     : Jana Backman 
  Your URL   : ocelot-aul.fiu/~jback007
  Course     : WEB-Online Summer 2022
  Program #  : 3
  Purpose    : Lokks for the record inserted using the PK in the database customers table 
  Due Date   : 07/02/2022

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ Jana Backman}..........
******************************************************************************* -->
<!DOCTYPE html>   <!-- declaration used in HTML 5. Tells browsers that this is HTML 5 -->

<html>
    
  <body>
    
    <!--br><h3>this is Find.php</h3><br-->
    <?php
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

                      
      $ProgrammerId = trim($ProgrammerId); //take all front and back spaces out to match the stored PK   
      
      $sql="SELECT * FROM customers where ProgrammerId = '$ProgrammerId'";//query to pull the record

      //if the query results runs smooth     
      if ($result=mysqli_query($connection,$sql))
      {
        //debugguing line 
        //printf("Result of mysqli_query(connection,sql) = %d<br>", $result);
        
        //Return the number of rows in result set
        $rowcount=mysqli_num_rows($result);
        
        //debugguing code
        //printf("Result set has %d rows.\n",$rowcount);
            
        //while there are records -- fetch the data to the corresponding field
        //since the PK is a unique field only one record will be found               
        while( $row = mysqli_fetch_array( $result ) )
        {
          $ProgrammerId = $row['ProgrammerId'];//primary key
          $FirstName = $row['FirstName'];      //text field
          $LastName = $row['LastName'];        //text field
          $Email = $row['Email'];              //text field
          $Age = $row['Age'];                  //text field
          $YearsOfExperience = $row['YearsOfExperience'];//text field
          $RecentProject = $row['RecentProject'];   //text field
          $WorkLocation = $row['WorkLocation'];     //text field
          $PersonalWebsite = $row['PersonalWebsite'];//text field
          $RecentProjectDetails = $row['RecentProjectDetails'];//texarea
          $FavoriteLanguage = $row['FavoriteLanguage'];//dropdown
          $OperatingSystem = $row['OperatingSystem'];// radio field
          $AI = $row['AI'];//checkbox
          $IT = $row['IT'];//checkbox
          $Robotic = $row['Robotic'];//checkbox
          $WebDev = $row['WebDev'];//checkbox
        }//end while 

        //----debugging and testing code
        /*echo $ProgrammerId."<br>";
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
        echo $found."<br>";*/
        //----- end debugging 

        if ($rowcount)//if # of rows is 1
        {
          $found = $ProgrammerId;//assinig PK to the found variable to be used for comparasion later in the program 
          $message ="<span style=\"color: blue;\">RECORD $found FOUND</span><br>";
        } //end if ($rowcount)
        else if(strlen($ProgrammerId) == 0)// if the PK field is empty       
        {
          //inform the user that the PK cannot be empty in order to find the record
          $message ="<span style=\"color: red;\">YOU MUST ENTER Programmer ID TO FIND A RECORD</span><br>";
          
          //deubguing line
          //echo "<br>Error: " . $sql . " " . mysqli_error($connection);
                
          //clear data in variables       
          $FirstName = "" ;
          $LastName = "" ;
          $Email = "" ;
          $Age = "" ;
          $YearsOfExperience = "" ;
          $RecentProject = "" ;
          $WorkLocation = "" ;
          $PersonalWebsite = "" ;
          $RecentProjectDetails = "" ;
          $FavoriteLanguage = "" ;
          $OperatingSystem = "" ;
          $AI = "" ;
          $IT = "" ;
          $Robotic = "" ;
          $WebDev = "" ;
          $found = "" ;
        }//else if(strlen($ProgrammerId) == 0)
        else //else reocod not found in the table
        {
          $message ="<span style=\"color: red;\">RECORD $ProgrammerId NOT FOUND</span><br>";//messsage to the user
          
          //debug code
          //echo "<br>Error: " . $sql . " " . mysqli_error($connection);
              
          //clear data in variables       
          //$ProgrammerId = ""; no need to clear the key value
          $FirstName = "" ;
          $LastName = "" ;
          $Email = "" ;
          $Age = "" ;
          $YearsOfExperience = "" ;
          $RecentProject = "" ;
          $WorkLocation = "" ;
          $PersonalWebsite = "" ;
          $RecentProjectDetails = "" ;
          $FavoriteLanguage = "" ;
          $OperatingSystem = "" ;
          $AI = "" ;
          $IT = "" ;
          $Robotic = "" ;
          $WebDev = "" ;
          $found = "" ;

        }//end else
      }//end if($result=mysqli_query($connection,$sql))
    ?><!--closing php-->
  </body><!--closing body-->
</html><!--closing html-->