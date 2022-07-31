<!-- ***********************************************************************************
  Page Name  : Help.php 
  Author     : Jana Backman 
  Your URL   : ocelot-aul.fiu/~jback007
  Course     : WEB-Online Summer 2022
  Program #  : 4
  Purpose    : The help button pop's up a new window with expaying the button's function
  Due Date   : 7/16/2022

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ Jana Backman}..........
******************************************************************************* -->
<!DOCTYPE html><!-- this is a declaration used in HTML 5. It tells the browsers that this is HTML 5 -->
<html><!-- start of html (Hyper Text Markup Language) --> 
   <head><!-- start of the head section -->
   <body><!-- start of the body section -->
   <!-- this is both head and body because it displays in the body but it's all done with scripting language -->
            
      <script>//starting scriipt section to write JS. this whole page (pop-up window) is done with JS

         help();// calling the help function

         function help()
         {
            // Open a new window at a specific location
            var myWindow = window.open("", "Help","width=800, height=600, scrollbars=yes, resizable=yes, left=500, top=200"); 
               
            //window title
            myWindow.document.write("<title>Help</title>");
            
            //dispaying the header of the window
            myWindow.document.write("<h1 style = \"color: #9B8613\"><center><b>---------- HELP ----------</b></center><hr style = \"color: #14AFA8\">\n</h1>");
            // Display the purpose of each button on the form in a pop-up window
            myWindow.document.write("<h2 style = \"color: #650739\">Buttons Purpose\n</h2>");
            
            //save button using <li> 1
            myWindow.document.write("<ul style  = \"list-style-type: square; color: #7E315A\"><li><b>SAVE</b>");
            myWindow.document.write("<p style = \" color: #5C5E5D;\">The Save button will save a new record into the database. You must enter the Programmer ID for the record in order to save it.<br>");
            myWindow.document.write("<br>- If you try saving an already existing record, you will receive the error message:<br><span style = \"color: red;\"><br>RECORD [programmer ID] ALREADY EXIST </span><br>");
            myWindow.document.write("<br>- If you try saving a record without a programmer ID, you will receive the error message:<br><span style = \"color: red;\"><br>YOU MUST ENTER Programmer ID TO SAVE THE RECORD</span> </p></li>")

            //find button using <li> 2
            myWindow.document.write("<li><b>FIND</b>");
            myWindow.document.write("<p style = \" color: #5C5E5D;\">The Find button finds the entered record. You must enter the Programmer ID of the record in order to find it.<br>");
            myWindow.document.write("<br>- If you try finding a non-existing record, you will receive the error message:<br><span style = \"color: red;\"><br>RECORD [Programmer ID] NOT FOUND</span><br>");
            myWindow.document.write("<br>- If you try finding a record without entering a programmer ID, you will receive the error message:<br><span style = \"color: red;\"><br>YOU MUST ENTER Programmer ID TO SAVE THE RECORD</span> </p></li>")

            //modify button using <li> 3
            myWindow.document.write("<li><b>MODIFY</b>");
            myWindow.document.write("<p style = \" color: #5C5E5D;\">The Modify button allows you to modify the fields of a record. You must enter the Programmer ID to find it and then you can modify it.<br>");
            myWindow.document.write("<br>- If you try modifying a record without entering programmer ID or finding it first you will get the error message:<br><span style = \"color: red;\"><br>RECORD [programmer ID] CAN NOT BE MODIFIED, FIND IT FIRST</span></p></li>");

            //delete button using <li> 4
            myWindow.document.write("<li><b>DELETE</b>");
            myWindow.document.write("<p style = \" color: #5C5E5D;\">The Delete button allows you to delete a record after finding it. If you made a mistake deleting it, Don't Worry! all the fields are staying in the forms so you can resave the record. You must enter the Programmer ID of the record in order to find it and delete it.<br>");
            myWindow.document.write("<br>- If you try deleting a non-existing record, you will receive the error message:<br><span style = \"color: red;\"><br>RECORD [programmer ID] CAN NOT BE DELETED, IT DOES NOT EXISTS</span></p></li>");

            //clear button using <li> 5
            myWindow.document.write("<li><b>CLEAR</b>");
            myWindow.document.write("<p style = \" color: #5C5E5D;\">The Clear button will clear all the fields from the form.</p></li>");

            //contact_me button using <li> 5
            myWindow.document.write("<li><b>CONTACT ME</b>");
            myWindow.document.write("<p style = \" color: #5C5E5D;\">The Contact Me button will derive you to a new page where you can submit your question and provide reach-back contact info.</p></li>");

            //help button using <li> 6
            myWindow.document.write("<li><b>HELP</b>");
            myWindow.document.write("<p style = \" color: #5C5E5D;\">This is the Help button. It provides help to navigate the website.</p></li>");

            //about button using <li> 7
            myWindow.document.write("<li><b>ABOUT</b>");
            myWindow.document.write("<p style = \" color: #5C5E5D;\">The About button will take you to a page that provides info about the web page reason and org purpose.</p></li>");
         }// end function help()


      </script><!--  end script JS-->

   </body><!-- end body -->
   </head><!-- end head -->
</html><!--end HTML -->