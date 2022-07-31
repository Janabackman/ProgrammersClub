<!-- ***********************************************************************************
  Page Name  : program2.php 
  Author     : Jana Backman 
  Your URL   : ocelot-aul.fiu/~jback007
  Course     : WEB-Online Summer 2022
  Program #  : 2
  Purpose    : This is the main program 2 page. It allows the user (a programmer in the programmers community) to submit a form for job opportunities and more.

  Due Date   : 06/10/2022

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ Jana Backman}..........
******************************************************************************* -->
<!DOCTYPE html><!-- this is a declaration used in HTML 5. It tells the browsers that this is HTML 5 -->

<html><!-- start of html (Hyper Text Markup Language) --> 
    
    <head> <!-- start of the head section -->
        <title>BackmanJProgram2</title>
    </head><!-- end of the head section --> 

    <body> <!-- start body -->
        
        <?php include 'backman_header.php'; ?><!-- calling the header page to display it -->
        <br><!--entering new line -->
        
        <?php include 'mainMenu.php'; ?><!-- calling the mainMenu page to display it -->
        <br><!--entering new line -->

        <form method= "post" action = "Controller2.php"><!-- oppening a form as post and declaring the controller2 file to be the action file -->
            <table style="width: 60%; margin:0px auto; padding-right: 10%"><!-- start of a table -->
                <!-- 9 text imput fields -->
                <tr><!-- start row 1 -->
                    <td style = "width: 10%; text-align: right;">Programmer ID &nbsp;</td><!--column 1 in row 1 which is the label for the input -->
                    
                    <td style = "width: 20%;"><!--column 2 in row 1 -->
                        <input type = "text" name = "ProgrammerId" value = " " style = "width: 100%;"><!--text input for programmer ID-->
                    </td>
                </tr><!-- close row 1-->
                
                <tr><!-- start row 2 -->
                    <td style = "width: 10%; text-align: right;">First Name &nbsp;</td><!--column 1 in row 2 which is the label for the input -->
                    
                    <td style = "width: 20%;"><!--column 2 in row 2 -->
                        <input type = "text" name = "FirtsName" value = " " style = "width: 100%;"><!--text input for first name-->
                    </td>
                </tr><!-- close row 2-->

                <tr><!-- start row 3 -->
                    <td style = "width: 10%; text-align: right;">Last Name &nbsp;</td><!--column 1 in row 3 which is the label for the input -->
                    
                    <td style = "width: 20%;"><!--column 2 in row 3 -->
                        <input type = "text" name = "LastName" value = " " style = "width: 100%;"><!--text input for last name-->
                    </td>
                </tr><!-- close row 3-->
                
                <tr><!-- start row 4 -->
                    <td style = "width: 10%; text-align: right;">Email &nbsp;</td><!--column 1 in row 4 which is the label for the input -->

                    <td style = "width: 20%;"><!--column 2 in row 4 -->
                        <input type = "text" name = "Email" value = " " style = "width: 100%;"><!--text input for email-->
                    </td>
                </tr><!-- close row 4-->
                
                <tr><!-- start row 5 -->
                    <td style = "width: 10%; text-align: right;">Age &nbsp;</td><!--column 1 in row 5 which is the label for the input -->

                    <td style = "width: 20%;"><!--column 2 in row 5 -->
                        <input type = "text" name = "Age" value = " " style = "width: 100%;"><!--text input for age-->
                    </td>
                </tr><!-- close row 5-->
                
                <tr><!-- start row 6 -->
                    <td style = "width: 10%; text-align: right;">Years of Experience &nbsp;</td><!--column 1 in row 6 which is the label for the input -->
                    
                    <td style = "width: 20%;"><!--column 2 in row 6 -->
                        <input type = "text" name = "YearsOfExperience" value = " " style = "width: 50%;"><!--text input for years of experience-->
                    </td>
                </tr><!-- close row 6-->
                
                <tr><!-- start row 7 -->
                    <td style = "width: 10%; text-align: right;">Recent Project &nbsp;</td><!--column 1 in row 7 which is the label for the input -->

                    <td style = "width: 20%;"><!--column 2 in row 7 -->
                        <input type = "text" name = "RecentProject" value = " " style = "width: 50%;"><!--text input for recent project-->
                    </td>
                </tr><!-- close row 7-->
                
                <tr><!-- start row 8 -->
                    <td style = "width: 10%; text-align: right;">Work Location &nbsp;</td><!--column 1 in row 8 which is the label for the input -->

                    <td style = "width: 20%;"><!--column 2 in row 8 -->
                        <input type = "text" name = "WorkLocation" value = " " style = "width: 50%;"><!--text input for work location-->
                    </td>
                </tr><!-- close row 8-->
                
                <tr><!-- start row 9 -->
                    <td style = "width: 10%; text-align: right;">Personal Website &nbsp;</td><!--column 1 in row 9 which is the label for the input -->

                    <td style = "width: 20%;"><!--column 2 in row 9 -->
                        <input type = "text" name = "PersonalWebsite" value = " " style = "width: 50%;"><!--text input for personal website-->
                    </td>
                </tr><!-- close row 9-->
                
                <tr><td> &nbsp; </td></tr><!-- row 10 with colum to leave an empty line-->
                
                <!--  textarea box  -->
                <tr><!-- start row 11 -->
                    <td style="width: 10%; text-align: right;">Recent Project Details&nbsp;</td><!--column 1 in row 11 which is the label for the texarea -->
                    
                    <td style="width: 20%;"><!--column 2 in row 11 -->
                        <textarea name="RecentProjectDetails" rows="5" cols="36"></textarea><!--texarea input -->
                    </td>
                </tr><!-- close row 11-->
                
                <tr><td> &nbsp; </td></tr><!-- row 12 with colum to leave an empty line-->
            
                <!--  dropdown boxes -->
                <tr><!-- start row 13 -->
                    <td style="width: 10%; text-align: right;">Favorite Language &nbsp;</td><!--column 1 in row 13 which is the label for the drop down -->
                    
                    <td style="width: 20%; text-align: left;"><!--column 2 in row 13 -->
                        <select name="FavoriteLanguage" style="width: 50%"size="0.6";><!--start select input and options for drop down-->
                            <option value="Java"      >Java      </option>
                            <option value="Pyhton"    >Python    </option>
                            <option value="C"         >C         </option>
                            <option value="C++"       >C++       </option>
                            <option value="JavaScript">JavaScript</option>
                            <option value="PHP"       >PHP       </option>
                        </select><!--close select (drop down input) -->
                    </td>
                </tr><!-- close row 13-->

                <tr><td> &nbsp; </td> </tr> <!-- row 14 with colum to leave an empty line-->         
                
                <!--  radio buttons  -->
                <tr><!-- start row 15 -->
                    <td style="width: 10%; text-align: right;">Operating System &nbsp;</td><!--column 1 in row 15 which is the label radio buttons -->
                    
                    <td style="width: 20%; text-align: left;"><!--column 2 in row 15 -->
                        <table style="margin: 0px;"><!--start an inner table in c2 r15 for alignment of radio buttons -->
                            <tr><!--row 1 in inner table -->
                                
                                    <!--radio buttons with the same name to group them (only one option can be selected) -->
                                    <td style="width: 6em; "><input type="radio"  style="margin: 0px;" name="OperatingSystem" value="Win10" checked> Win10 &nbsp; &nbsp;</td>
                                    <td style="width: 6em; "><input type="radio"  style="margin: 0px;" name="OperatingSystem" value="Linux"> Linux &nbsp; &nbsp;</td>
                                    <td style="width: 6em; "><input type="radio"  style="margin: 0px;" name="OperatingSystem" value="macOS"> macOS &nbsp; &nbsp;</td>
                                    <td style="width: 6em; "><input type="radio"  style="margin: 0px;" name="OperatingSystem" value="Other"> Other</td>
                          
                            </tr><!-- close row 1 in inner table -->
                        </table><!--close inner table -->
                    </td><!-- close column 2 in row 15 -->
                </tr><!-- close row 15-->
                
                <tr><td> &nbsp; </td> </tr><!-- row 16 with colum to leave an empty line-->                                        
                        
                <!-- CheckBoxes -->
                <tr><!-- start row 17 -->
                    <td style="width: 10%; text-align: right">Concentration Area &nbsp;</td><!--column 1 in row 17 which is the label checkboxes-->

                    <td style="width: 20%;"><!--column 2 in row 17 -->
                        <table style=" margin: 0px;"><!--start an inner table in c2 r17 for alignment of chckboxes -->
                            <tr><!-- row 1 inner table -->    
                                <!--check boxes. Use different names so many can be selected at the same time -->                             
                                <td style="width: 6em; "><input type="checkbox" style="margin: 0px;" name="AI" value="AI" > AI &nbsp; &nbsp;</td><!--column 1 in row 1 inner table -->  
                                <td style="width: 6em; "><input type="checkbox" style="margin: 0px;" name="IT" value="IT" > IT &nbsp; &nbsp;</td><!--column 2 in row 1 inner table -->     
                                <td style="width: 6em; "><input type="checkbox" style="margin: 0px;" name="Robotic" value="Robotic" > Robotic &nbsp; &nbsp;</td><!--column 3 in row 1 inner table -->
                                <td style="width: 6em; "><input type="checkbox" style="margin: 0px;" name="WebDev" value="WebDev" > Web Dev </td><!--column 4 in row 1 inner table -->
                            </tr><!-- close row 1 in inner table -->    
                        </table><!--close inner table -->
                    </td><!-- close column 2 in row 17 -->
                </tr><!-- close row 17-->
                
                <tr><td> &nbsp; </td> </tr><!-- row 18 with colum to leave an empty line-->                                                           
                
                <tr><!-- displaying $message with php-->
                    <td style="width: 10%;"> </td>            
                    <td style="width: 20%;" align="center">                
                        <?php echo '$message' ?>
                    </td>
                </tr><!-- close row 19-->

                <tr><td> &nbsp; </td> </tr><!-- row 20 with colum to leave an empty line-->                                          
                
                <!-- Submit buttons -->
                <tr><!-- start row 21 with submittion buttons that will call the controller 2 php file-->
                    <td style="width: 10%;"> </td><!-- column 1 in row 21 empty for alignment-->

                    <td style="width: 20%;" align="center"> <!-- column 2 in row 21 submit buttons-->
                        <input type="submit" name="Save"   value="Save"> &nbsp;
                        <input type="submit" name="Find"   value="Find"> &nbsp;
                        <input type="submit" name="Modify" value="Modify"> &nbsp;
                        <input type="submit" name="Delete" value="Delete"> &nbsp;
                        <input type="reset" name="ClearScreen"  value="ClearScreen"><!-- clears the screen and doesnt call the action file-->
                        <input type="hidden" name="found"  value="<?php echo $found ?>" ><!-- to use in further assignments-->
                    </td><!-- close column 2 in row  21-->
                </tr><!-- close row 21-->
            </table><!-- close table-->
        </form><!-- end form-->
        
        <?php include 'mainMenu.php'; ?><!-- call main menu to display the menu again-->

    </body><!-- end body-->

</html><!-- end html -->