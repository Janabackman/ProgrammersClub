<!-- ***********************************************************************************
  Page Name  : Program4.php 
  Author     : Jana Backman 
  Your URL   : ocelot-aul.fiu/~jback007
  Course     : WEB-Online Summer 2022
  Program #  : 4
  Purpose    : This website does the same as pgm3 ecxept the added fitures. 
                1. Added the time and date and log in data in the top of the screen. This was done with JS.
                2. Added localized help with css.
                3. Added 2 more buttons help and about. 
  Due Date   : 07/16/2022

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ Jana Backman}..........
******************************************************************************* -->
<!DOCTYPE html><!-- this is a declaration used in HTML 5. It tells the browsers that this is HTML 5 -->

<html><!-- start of html (Hyper Text Markup Language) --> 
    
    <head> <!-- start of the head section -->
        <title>BackmanJanaProgram4</title>
        
        <!-- Creating JS code for displaying the time -->
        <script>
            
            function currentTime() {//currentTime() function displays the date and time to the DiV section in the body
                
                var today   = new Date();//creating instance of Date object
                //getting hours, minutes, and seconds using the Date() insatnce
                var hour    = today.getHours();
                var minutes = today.getMinutes();
                var sec     = today.getSeconds();
            
                minutes = checkTime(minutes);//Calling checkTime() funtion to minutes and secords
                sec     = checkTime(sec);
                
                //adding inner html text to dysplay in the DIV with 'date' id. 
                document.getElementById('date').innerHTML = "Current Time : "+hour+":"+minutes+":"+sec;
            
                var t = setTimeout(function(){currentTime()},500);//waits 500 mseconds to reset the time and loops back to display the time. 
                        
            }

            // this function adds a 0  in front of numbers < 10
            function checkTime(i) {
                if (i<10) {i = "0" + i};  
                return i;
            }
            


        </script><!-- end Script section (JS) -->
    

        <style>/* Here is the CSS to create the localized help with tooltips*/
            .tooltip 
            {
                position: relative;
                display: inline-block;

            }

            /* setting CSS for tooltip one */

            .tooltip .tooltip1
            {
                visibility: hidden;
                width: 180px;
                background-color: #42474B;
                color: #fff;
                text-align: center;
                border-radius: 8px;
                padding: 5px 2px;
                position: absolute;
                z-index: 1;
                bottom: 140%;
                left: 30%;
                margin-left: -60px;
                opacity: 0;
                transition: opacity 1s;
                
            }

             /*arrow bt only displaying a think top border to the after of the object*/
            .tooltip .tooltip1::after 
            {
                content: "";
                position: absolute;
                top: 100%;
                left: 50%;
                margin-left: -5px;
                border-width: 5px;
                border-style: solid;
                border-color: #0A5282 transparent transparent transparent; /*arrow*/
            }

            .tooltip:hover .tooltip1
            {
                visibility: visible;
                opacity: 1;
            }

            /* setting CSS for tooltip two revering the colors */
            .tooltip .tooltip2
            {
                visibility: hidden;
                width: 180px;
                background-color: #0A5282;
                color: #fff;
                text-align: center;
                border-radius: 8px;
                padding: 5px 2px;
                position: absolute;
                z-index: 1;
                bottom: 140%;
                left: 30%;
                margin-left: -60px;
                opacity: 0;
                transition: opacity 1s;
                
            }
            
            /*arrow bt only displaying a think top border ro the after of the object*/
            .tooltip .tooltip2::after 
            {
                content: "";
                position: absolute;
                top: 100%;
                left: 50%;
                margin-left: -5px;
                border-width: 5px;
                border-style: solid;
                border-color: #42474B transparent transparent transparent; 
            }

            
            .tooltip:hover .tooltip2
            {
                visibility: visible;
                opacity: 1;
            }
        </style>
    </head><!-- end of the head section --> 

    <body onload="currentTime()"> <!-- start body call the currentTime function when page loads -->
        
        <?php include 'backman_header.php'; ?><!-- calling the header page to display it -->
        
        <div style = "display: inline-block">     
            <script>//more JS code to display log in date
                
                loggedInTime();//calling loggedInTime function
                    
                var temp1;
                
                function loggedInTime( temp )
                {
                    var tiempo = new Date(); //new Date() instance 
                    var temp2 =  "Logged in: " + tiempo;
                    temp1 = temp2;
                    document.write(temp2);//writing the Date with Logged In to this section of the document
                }

                currentTime();//recalling currentTime
                
            </script><!-- end Script section (js) -->
        </div>
        <div id="date" style = "float: right; display: inline-block"></div><!-- div to display currentTime function from rhe head section JS.-->
        
        <center><h2 style = "color: red">Program 4</h2></center><!--displaying program 4 -->

        <?php include 'mainMenu.php'; ?><!-- calling the mainMenu page to display it -->
        <br><!--entering new line -->

        <form method= "post" action = "Controller4.php"><!-- oppening a form as post and declaring the controller3 file to be the action file -->
            <table style="width: 60%; margin:0px auto; padding-right: 10%"><!-- start of a table -->
                <!-- 9 text imput fields -->
                <tr><!-- start row 1 -->
                    <td style = "width: 10%; text-align: right;">
                        <div class = "tooltip">Programmer ID &nbsp;
                            <span class = "tooltip1">Enter Programmer ID<br>REQUIRED field</span><!--entering localized help with tooltip -->
                        </div>
                    </td><!--column 1 in row 1 which is the label for the input -->
                    
                    <td style = "width: 20%;"><!--column 2 in row 1 -->
                        <input type = "text" name = "ProgrammerId" placeholder = "Programmer ID" value = "<?php echo $ProgrammerId ?>" style = "width: 100%;"><!--text input for programmer ID-->
                    </td>
                </tr><!-- close row 1-->
                
                <tr><!-- start row 2 -->
                    <td style = "width: 10%; text-align: right;">
                        <div class = "tooltip">First Name &nbsp;
                            <span class = "tooltip2">Enter Your First Name</span><!--entering localized help with tooltip -->
                        </div>
                    </td><!--column 1 in row 2 which is the label for the input -->
                    
                    <td style = "width: 20%;"><!--column 2 in row 2 -->
                        <input type = "text" name = "FirstName" placeholder = "First Name" value = "<?php echo $FirstName ?>" style = "width: 100%;"><!--text input for first name-->
                    </td>
                </tr><!-- close row 2-->

                <tr><!-- start row 3 -->
                    <td style = "width: 10%; text-align: right;">
                        <div class = "tooltip">Last Name &nbsp;
                            <span class = "tooltip1">Enter Your Last name</span><!--entering localized help with tooltip -->
                        </div>
                    </td><!--column 1 in row 3 which is the label for the input -->
                    
                    <td style = "width: 20%;"><!--column 2 in row 3 -->
                        <input type = "text" name = "LastName" placeholder = "Last Name" value = "<?php echo $LastName?>" style = "width: 100%;"><!--text input for last name-->
                    </td>
                </tr><!-- close row 3-->
                
                <tr><!-- start row 4 -->
                    <td style = "width: 10%; text-align: right;">
                        <div class = "tooltip">Email &nbsp;
                            <span class = "tooltip2">Enter Your Programmer Email</span><!--entering localized help with tooltip -->
                        </div>
                    </td><!--column 1 in row 4 which is the label for the input -->

                    <td style = "width: 20%;"><!--column 2 in row 4 -->
                        <input type = "text" name = "Email" placeholder = "Email" value = "<?php echo $Email ?>" style = "width: 100%;"><!--text input for email-->
                    </td>
                </tr><!-- close row 4-->
                
                <tr><!-- start row 5 -->
                    <td style = "width: 10%; text-align: right;">
                        <div class = "tooltip">Age &nbsp;
                            <span class = "tooltip1">Enter Your Age</span><!--entering localized help with tooltip -->
                        </div>
                    </td><!--column 1 in row 5 which is the label for the input -->

                    <td style = "width: 20%;"><!--column 2 in row 5 -->
                        <input type = "text" name = "Age" placeholder = "Age" value = "<?php echo $Age ?>" style = "width: 100%;"><!--text input for age-->
                    </td>
                </tr><!-- close row 5-->
                
                <tr><!-- start row 6 -->
                    <td style = "width: 10%; text-align: right;">
                        <div class = "tooltip">Years of Experience &nbsp;
                            <span class = "tooltip2">Enter the years of experience you have as a programmer</span><!--entering localized help with tooltip -->
                        </div>
                    </td><!--column 1 in row 6 which is the label for the input -->
                    
                    <td style = "width: 20%;"><!--column 2 in row 6 -->
                        <input type = "text" name = "YearsOfExperience" placeholder = "Years of Experience" value = "<?php echo $YearsOfExperience ?>" style = "width: 50%;"><!--text input for years of experience-->
                    </td>
                </tr><!-- close row 6-->
                
                <tr><!-- start row 7 -->
                    <td style = "width: 10%; text-align: right;">
                        <div class = "tooltip">Recent Project &nbsp;
                            <span class = "tooltip1">Enter the link to your most recent project</span><!--entering localized help with tooltip -->
                        </div>
                    </td><!--column 1 in row 7 which is the label for the input -->

                    <td style = "width: 20%;"><!--column 2 in row 7 -->
                        <input type = "text" name = "RecentProject" placeholder = "Recent Project" value = "<?php echo $RecentProject ?>" style = "width: 50%;"><!--text input for recent project-->
                    </td>
                </tr><!-- close row 7-->
                
                <tr><!-- start row 8 -->
                    <td style = "width: 10%; text-align: right;">
                        <div class = "tooltip">Work Location &nbsp;
                            <span class = "tooltip2">Enter country, state, company and if you work from home or in site</span><!--entering localized help with tooltip -->
                        </div>
                    </td><!--column 1 in row 8 which is the label for the input -->

                    <td style = "width: 20%;"><!--column 2 in row 8 -->
                        <input type = "text" name = "WorkLocation" placeholder = "Work Location" value = "<?php echo $WorkLocation ?>" style = "width: 50%;"><!--text input for work location-->
                    </td>
                </tr><!-- close row 8-->
                
                <tr><!-- start row 9 -->
                    <td style = "width: 10%; text-align: right;">
                        <div class = "tooltip">Personal Website &nbsp;
                            <span class = "tooltip1">Enter link to your personal website/portfolio</span><!--entering localized help with tooltip -->
                        </div>
                    </td><!--column 1 in row 9 which is the label for the input -->

                    <td style = "width: 20%;"><!--column 2 in row 9 -->
                        <input type = "text" name = "PersonalWebsite" placeholder = "Personal Website" value = "<?php echo $PersonalWebsite ?>" style = "width: 50%;"><!--text input for personal website-->
                    </td>
                </tr><!-- close row 9-->
                
                <tr><td> &nbsp; </td></tr><!-- row 10 with colum to leave an empty line-->
                
                <!--  textarea box  -->
                <tr><!-- start row 11 -->
                    <td style="width: 10%; text-align: right;">
                        <div class = "tooltip">Recent Project Details&nbsp;
                            <span class = "tooltip2">Enter details about your most recent project - the one provided above</span><!--entering localized help with tooltip -->
                        </div>
                    </td><!--column 1 in row 11 which is the label for the texarea -->
                    
                    <td style="width: 20%;"><!--column 2 in row 11 -->
                        <textarea name="RecentProjectDetails" placeholder = "Recent Project Details" rows="5" cols="36"><?php echo $ReecentProjectDetails ?></textarea><!--texarea input -->  
                    </td>
                </tr><!-- close row 11-->
                
                <tr><td> &nbsp; </td></tr><!-- row 12 with colum to leave an empty line-->
            
                <!--  dropdown boxes -->
                <tr><!-- start row 13 -->
                    <td style="width: 10%; text-align: right;">
                        <div class = "tooltip">Favorite Language &nbsp;
                            <span class = "tooltip1">Select your favorite programming language from the presented options</span><!--entering localized help with tooltip -->
                        </div>
                    </td><!--column 1 in row 13 which is the label for the drop down -->
                    
                    <td style="width: 20%; text-align: left;"><!--column 2 in row 13 -->
                        <select name="FavoriteLanguage" style="width: 50%"size="0.6";><!--start select input and options for drop down-->
                            <option value="" disabled selected>--Select a Language--</option><!--adding the disabled option as default-->
                            <option value="Java" <?php if ($FavoriteLanguage == "Java") echo selected ?>>Java</option>
                            <option value="Pyhton" <?php if ($FavoriteLanguage == "Python") echo selected ?>>Python</option>
                            <option value="C" <?php if ($FavoriteLanguage == "C") echo selected ?>>C</option>
                            <option value="C++" <?php if ($FavoriteLanguage == "C++") echo selected ?>>C++</option>
                            <option value="JavaScript" <?php if ($FavoriteLanguage == "JavaScript") echo selected ?>>JavaScript</option>
                            <option value="PHP" <?php if ($FavoriteLanguage == "PHP") echo selected ?>>PHP</option>
                        </select><!--close select (drop down input) -->
                    </td>
                </tr><!-- close row 13-->

                <tr><td> &nbsp; </td> </tr> <!-- row 14 with colum to leave an empty line-->         
                
                <!--  radio buttons  -->
                <tr><!-- start row 15 -->
                    <td style="width: 10%; text-align: right;">
                    <div class = "tooltip">Operating System &nbsp;
                            <span class = "tooltip2">Select the oprating system you use to program</span><!--entering localized help with tooltip -->
                        </div>
                    </td><!--column 1 in row 15 which is the label radio buttons -->
                    
                    <td style="width: 20%; text-align: left;"><!--column 2 in row 15 -->
                        <table style="margin: 0px;"><!--start an inner table in c2 r15 for alignment of radio buttons -->
                            <tr><!--row 1 in inner table -->
                                
                                    <!--radio buttons with the same name to group them (only one option can be selected) -->
                                    <td style="width: 6em; ">
                                        <input type="radio" <?php if ($OperatingSystem == "Win10") echo checked ?>  
                                        style="margin: 0px;" name="OperatingSystem" value="Win10" checked> Win10 &nbsp; &nbsp;
                                    </td>
                                    <td style="width: 6em; ">
                                        <input type="radio" <?php if ($OperatingSystem == "Linux") echo checked ?> 
                                        style="margin: 0px;" name="OperatingSystem" value="Linux"> Linux &nbsp; &nbsp;
                                    </td>
                                    <td style="width: 6em; ">
                                        <input type="radio" <?php if ($OperatingSystem == "MacOS") echo checked ?>
                                        style="margin: 0px;" name="OperatingSystem" value="macOS"> macOS &nbsp; &nbsp;
                                    </td>
                                    <td style="width: 6em; ">
                                        <input type="radio" <?php if ($OperatingSystem == "Other") echo checked ?>
                                        style="margin: 0px;" name="OperatingSystem" value="Other"> Other
                                    </td>
                          
                            </tr><!-- close row 1 in inner table -->
                        </table><!--close inner table -->
                    </td><!-- close column 2 in row 15 -->
                </tr><!-- close row 15-->
                
                <tr><td> &nbsp; </td> </tr><!-- row 16 with colum to leave an empty line-->                                        
                        
                <!-- CheckBoxes -->
                <tr><!-- start row 17 -->
                    <td style="width: 10%; text-align: right">
                        <div class = "tooltip">Concentration Area &nbsp;
                            <span class = "tooltip1">Check your concentration area/s</span><!--entering localized help with tooltip -->
                        </div>
                    </td><!--column 1 in row 17 which is the label checkboxes-->

                    <td style="width: 20%;"><!--column 2 in row 17 -->
                        <table style=" margin: 0px;"><!--start an inner table in c2 r17 for alignment of chckboxes -->
                            <tr><!-- row 1 inner table -->    
                                <!--check boxes. Use different names so many can be selected at the same time -->                             
                                <td style="width: 6em; "><input type="checkbox" style="margin: 0px;" name="AI" 
                                <?php if ($AI == "AI") echo checked;?> value="AI" > AI &nbsp; &nbsp;</td><!--column 1 in row 1 inner table -->  
                                
                                <td style="width: 6em; "><input type="checkbox" style="margin: 0px;" name="IT" 
                                <?php if ($IT == "IT") echo checked;?> value="IT" > IT &nbsp; &nbsp;</td><!--column 2 in row 1 inner table -->     
                                
                                <td style="width: 6em; "><input type="checkbox" style="margin: 0px;" name="Robotic" 
                                <?php if ($Robotic == "Robotic") echo checked;?> value="Robotic" > Robotic &nbsp; &nbsp;</td><!--column 3 in row 1 inner table -->
                                
                                <td style="width: 6em; "><input type="checkbox" style="margin: 0px;" name="WebDev" 
                                <?php if ($WebDev == "WebDev") echo checked;?> value="WebDev" > Web Dev </td><!--column 4 in row 1 inner table -->
                            </tr><!-- close row 1 in inner table -->    
                        </table><!--close inner table -->
                    </td><!-- close column 2 in row 17 -->
                </tr><!-- close row 17-->
                
                <tr><td> &nbsp; </td> </tr><!-- row 18 with colum to leave an empty line-->                                                           
                
                <tr><!-- displaying $message with php-->
                    <td style="width: 10%;"> </td>            
                    <td style="width: 20%;" align="center">                
                        <?php echo $message ?>
                    </td>
                </tr><!-- close row 19-->

                <tr><td> &nbsp; </td> </tr><!-- row 20 with colum to leave an empty line-->                                          
                
                <!-- Submit buttons -->
                <tr><!-- start row 21 with submittion buttons that will call the controller 2 php file-->
                    <table style="width: 80; margin:0px auto; padding-right: 10%"><!-- creating inner table for alignment -->
                        <tr><!-- row 1 in inner table -->   
                            <td style="width: 15%;"></td><!--column 1 in inner table row 1 for alignment-->
                            <td style="width: 90%;" align="center"> <!-- column 2 in inner table row 1 submit buttons-->
                                <input type="submit" name="Save"   value="Save"> &nbsp;
                                <input type="submit" name="Find"   value="Find"> &nbsp;
                                <input type="submit" name="Modify" value="Modify"> &nbsp;
                                <input type="submit" name="Delete" value="Delete"> &nbsp;
                                <input type="submit" name="Clear"  value="Clear"> &nbsp;
                                <a href = "Contact_me.php"><input type="button" name="Contact_me"  value="Contact_me"></a> &nbsp;<!-- Linking button to contact_me.php page-->
                                <input type="submit" name="Help"  value="Help"></a> &nbsp;
                                <a href = "About.php"><input type="button" name="About"  value="About"></a> &nbsp;<!-- Linking button to About.php page-->
                                <input type="hidden" name="found"  value="<?php echo $found ?>" ><!-- hidden variable for debugging-->
                            </td><!-- close column 2 ininner table-->
                        </tr>
                    </table>
                </tr><!-- close row 21-->
            </table><!-- close table-->
        </form><!-- end form-->
        
        <?php include 'mainMenu.php'; ?><!-- call main menu to display the menu again-->
        <br><br><center>Jana Backman</center><!-- displaying my name centered-->

    </body><!-- end body-->
</html><!-- end html -->