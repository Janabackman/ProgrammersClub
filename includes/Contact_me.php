<!-- ***********************************************************************************
  Page Name  : Contact_me.php 
  Author     : Jana Backman 
  Your URL   : ocelot-aul.fiu/~jback007
  Course     : WEB-Online Summer 2022
  Program #  : 3
  Purpose    : The front end page to contact me by email
  Due Date   : 07/02/2022

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ Jana Backman}..........
******************************************************************************* -->
<!DOCTYPE html><!-- this is a declaration used in HTML 5. It tells the browsers that this is HTML 5 -->

<html><!-- start of html (Hyper Text Markup Language) --> 
    
    <head> <!-- start of the head section -->
        <title>Contact Me</title>
    </head><!-- end of the head section --> 
    <body> <!-- start body -->
        
        <?php include 'backman_header.php'; ?><!-- calling the header page to display it -->
        <br><!--entering new line -->

        <center><h2><font color = "red"><b>CONTACT ME</b></font></h2></center><br>
        
        <?php include 'mainMenu.php'; ?><!-- calling the mainMenu page to display it -->
        <br><!--entering new line -->

        <form method= "post" action = "Contact_me_Controller.php"><!-- oppening a form as post and declaring the controller3 file to be the action file -->
            <table style="width: 60%; margin:0px auto; padding-right: 10%"><!-- start of a table -->
                <!-- 9 text imput fields -->
                <tr><!-- start row 1 -->
                    <td style = "width: 10%; text-align: left;">Your Email &nbsp;</td><!--column 1 in row 1 which is the label for the input -->
                    
                    <td style = "width: 20%;"><!--column 2 in row 1 -->
                        <input type = "text" name = "Your_Email" value = "" style = "width: 100%;"><!--text input for your email-->
                    </td>
                </tr><!-- close row 1-->
                
                <tr><!-- start row 2 -->
                    <td style = "width: 10%; text-align: left;">Last Name &nbsp;</td><!--column 1 in row 2 which is the label for the input -->
                    
                    <td style = "width: 20%;"><!--column 2 in row 2 -->
                        <input type = "text" name = "LastName" value = "" style = "width: 100%;"><!--text input for last name-->
                    </td>
                </tr><!-- close row 2-->

                <tr><!-- start row 3 -->
                    <td style = "width: 10%; text-align: left;">First Name &nbsp;</td><!--column 1 in row 3 which is the label for the input -->
                    
                    <td style = "width: 20%;"><!--column 2 in row 3 -->
                        <input type = "text" name = "FirstName" value = "" style = "width: 100%;"><!--text input for first name-->
                    </td>
                </tr><!-- close row 3-->
                
                
                <tr><td> &nbsp; </td></tr><!-- row 4 with colum to leave an empty line-->
                 <!--  radio buttons  -->
                 <tr><!-- start row 5 -->
                    <td style="width: 10%; text-align: left;">Contacting Reason &nbsp;</td><!--column 1 in row 5 which is the label radio buttons -->
                    
                    <td style="width: 20%; text-align: left;"><!--column 2 in row 5 -->
                        <table style="margin: 0px;"><!--start an inner table in c2 r5 for alignment of radio buttons -->
                            <tr><!--row 1 in inner table -->
                                
                                    <!--radio buttons with the same name to group them (only one option can be selected) -->
                                    <td style="width: 10em; ">
                                        <input type="radio" style="margin: 0px;" name="ContactingReason" value="Code Bug" checked> Code Bug &nbsp; &nbsp;
                                    </td>
                                    <td style="width: 10em; ">
                                        <input type="radio" style="margin: 0px;" name="ContactingReason" value="Software Error"> Software Error &nbsp; &nbsp;
                                    </td>
                                    <td style="width: 10em; ">
                                        <input type="radio" style="margin: 0px;" name="ContactingReason" value="Other"> Other &nbsp; &nbsp;
                                    </td>
                          
                            </tr><!-- close row 1 in inner table -->
                        </table><!--close inner table -->
                    </td><!-- close column 2 in row 5 -->
                </tr><!-- close row 5-->
                
                <!-- CheckBoxes -->
                <tr><!-- start row 6 -->
                    <td style="width: 10%; text-align: left">Language Used &nbsp;</td><!--column 1 in row 6 which is the label checkboxes-->

                    <td style="width: 20%;"><!--column 2 in row 6 -->
                        <table style=" margin: 0px;"><!--start an inner table in c2 r6 for alignment of chckboxes -->
                            <tr><!-- row 1 inner table -->    
                                <!--check boxes. Use different names so many can be selected at the same time -->                             
                                <td style="width: 10em; "><input type="checkbox" style="margin: 0px;" name="Java" 
                                 value="Java" > Java &nbsp; &nbsp;</td><!--column 1 in row 1 inner table -->  
                                
                                <td style="width: 10em; "><input type="checkbox" style="margin: 0px;" name="PHP" 
                                 value="PHP" > PHP &nbsp; &nbsp;</td><!--column 2 in row 1 inner table -->     
                                
                                <td style="width: 10em; "><input type="checkbox" style="margin: 0px;" name="HTML" 
                                 value="HTML" > HTML &nbsp; &nbsp;</td><!--column 3 in row 1 inner table -->
                                
                            </tr><!-- close row 1 in inner table -->    
                        </table><!--close inner table -->
                    </td><!-- close column 2 in row 6 -->
                </tr><!-- close row 6-->

                <tr><td> &nbsp; </td></tr><!-- row 7 with colum to leave an empty line-->

                <!--  dropdown boxes -->
                <tr><!-- start row 8 -->
                    <td style="width: 10%; text-align: left;">Priority Level &nbsp;</td><!--column 1 in row 8 which is the label for the drop down -->
                    
                    <td style="width: 20%; text-align: left;"><!--column 2 in row 8 -->
                        <select name="PriorityLevel" style="width: 50%"size="0.6";><!--start select input and options for drop down-->
                            <option value="High" >High (within the day)</option>
                            <option value="Medium">Medium (1 to 2 days)</option>
                            <option value="Low">Low (within the week)</option>
                        </select><!--close select (drop down input) -->
                    </td>
                </tr><!-- close row 8-->
                
                <tr><td> &nbsp; </td></tr><!-- row 9 with colum to leave an empty line-->

                <!--  textarea box  -->
                <tr><!-- start row 10 -->
                    <td style="width: 10%; text-align: left;">Comments&nbsp;</td><!--column 1 in row 11 which is the label for the texarea -->
                    
                    <td style="width: 20%;"><!--column 2 in row 10 -->
                        <textarea name="Comments" rows="5" cols="36">
                        </textarea><!--texarea input -->
                        
                    </td>
                </tr><!-- close row 10-->       
                
                <tr><td> &nbsp; </td></tr><!-- row 11 with colum to leave an empty line-->
                
                <!-- Submit buttons -->
                <tr><!-- start row 12 with submittion buttons that will call the controller 2 php file-->
                    <td style="width: 10%;"> </td><!-- column 1 in row 12 empty for alignment-->

                    <td style="width: 20%;" align="center"> <!-- column 2 in row 21 submit buttons-->
                        <input type="submit" name="submit"  value="Submit"> &nbsp;
                        <input type="reset" name="Clear"  value="Clear"> &nbsp;
                    </td><!-- close column 2 in row  12-->
                </tr><!-- close row 12-->
            </table><!-- close table-->
        </form><!-- end form-->

        <tr><td> &nbsp; </td></tr><!-- row 13 with colum to leave an empty line-->
        
        <?php include 'mainMenu.php'; ?><!-- call main menu to display the menu again-->
    </body><!-- end body-->

</html><!-- end html -->
