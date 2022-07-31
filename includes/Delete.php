<!-- ***********************************************************************************
  Page Name  : Delete.php 
  Author     : Jana Backman 
  Your URL   : ocelot-aul.fiu/~jback007
  Course     : WEB-Online Summer 2022
  Program #  : 3
  Purpose    : deleted a record dafter being found if users click the Delete button
  Due Date   : 07/02/2022

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ Jana Backman}..........
******************************************************************************* -->
<!DOCTYPE html>   <!-- declaration used in HTML 5. Tells browsers that this is HTML 5 -->

<html>

  <body>
    
   <!--h3>this is delete.phd</h3-->
        
      <?php
                     
         //$record = "RECORD ". $ProgrammerId." DELETED"; - variable not used
         
         $found = $_POST['found']; //reassinig the variable found to the value set up previously by Find.php
         
         //debugguing line
         //echo "delete  found = [" . $found . "]<br>";
         
         // sql to delete a record
         $sql="DELETE FROM customers WHERE ProgrammerId='$ProgrammerId'";//query to delete record selected
         
         $ProgrammerId = trim($ProgrammerId);//tring PK
                  
         if ((strlen(trim($found)) > 0 ) && ($found == $ProgrammerId))// if the length of the PK is higer than 0 and $found variable is equal to the PK (it was found previosly)
         { 
                        
            if (mysqli_query($connection, $sql))//if the the delition occurs, inform the user that the record was deleted 
            {
               //debugguing line
               //echo "Record deleted successfully found = {".$found."}";
               
               $message ="<span style=\"color: red;\">RECORD $found DELETED</span><br\>";
               $found=""; //this clear the flag for record found to be able to modify 
            }  // end if (mysqli_query($connection, $sql))      
            else//else if delete doesnt occur even thoug the record was found, inform the user that there is an error and print the error   
            { 
               $message = "Error deleting record: " . mysqli_error($connection); 
            }//end else
            
         }  //end if ((strlen(trim($found)) > 0 ) && ($found == $ProgrammerId))
         
         else//else means that the record was not found, or does not exist, inform the user
         {
            $message ="<span style=\"color: red;\">RECORD $ProgrammerId CAN NOT BE DELETED, IT DOES NOT EXISTS</span><br\>";
         }//end else
         
         //debugguing line
         //select FirstName, LastName, ProgrammerId from customers;
      
      ?><!--closing php-->
   </body><!--closing body-->           
</html><!--closing html-->
