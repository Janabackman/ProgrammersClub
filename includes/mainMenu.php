<!-- ***********************************************************************************
  Page Name  : mainMenu.php 
  Author     : Jana Backman 
  Your URL   : ocelot-aul.fiu/~jback007
  Course     : WEB-Online Summer 2022
  Program #  : 4
  Purpose    : This is a drop down menu program. This is to be called from other programs to be dispayed.

  Due Date   : 07/16/2022

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ Jana Backman}..........
******************************************************************************* -->
<!-- The menu was created with help of the following teaching website: http://line25.com/tutorials/how-to-create-a-pure-css-dropdown-menu -->

<!DOCTYPE html><!-- this is a declaration used in HTML 5. It tells the browsers that this is HTML 5 -->

<html>
    
    <head> <!-- start of the head section -->
            
        <!-- internal css to be used by this program, can be overrided by local inline css this is styling the main menu and allowing the drop down to occur-->          
        <style type="text/css">
            nav ul ul /* this hides the inner ul until hover the corresponding li */
            {
                display: none;
            }
            
            nav ul li:hover > ul/* display inner menu when hovering on corresponding li */
            {
                display: block;
            }
            
            nav ul /* navigation bar style*/
            {
                background: #E6B0AA; 
                background: linear-gradient(top, #E6B0AA 0%, #D98880  100%);  
                background: -moz-linear-gradient(top, #E6B0AA 0%, #D98880  100%); 
                background: -webkit-linear-gradient(top, #E6B0AA 0%,#D98880  100%); 
                box-shadow: 0px 0px 9px rgba(0,0,0,0.15);
                padding: 0 20px;
                border-radius: 15px; 
                list-style: none;
                position: relative;
                display: inline-table;
            }

            nav ul::after 
            {
                content: ""; 
                clear: both; 
                display: block;
            }

            nav ul li {
                padding-top: 10px;
                padding-bottom: 10px;
                float: left;
            }
            
            nav ul li:hover { /* hovering style of menu li's*/
                background: #4b545f;
                background: linear-gradient(top, #154360 0%, #2471A3 40%);
                background: -moz-linear-gradient(top, #154360 0%, #2471A3 40%);
                background: -webkit-linear-gradient(top, #154360 0%,#2471A3 40%);
            }

            nav ul li:hover a { /* hovering color of hyperlinks*/
                color: #fff;
            }
            
            nav ul li a {
                color: #641E16; 
                text-decoration: none;
            }
            
            nav ul ul {
                background: #2471A3; 
                border-radius: 0px; 
                padding: 0;
                position: absolute; 
                top: 100%;
            }
            
            nav ul ul li {
                float: none; /* removes the default floating left*/
                border-top: 1px solid #5DADE2;
                border-bottom: 1px solid #5DADE2;
                padding-top: 0px;
                padding-bottom: 0px;
            }
            
            nav ul ul li a {
                display: block; 
                padding: 15px 40px;
                color: #fff;
            }	
        </style><!-- end style --> 
    
    </head><!-- end of the head section --> 

 
    <body> <!-- start body -->

        <nav align="center"><!-- start the navigation section -->
            <ul><!-- start a list -->
                <li><a href="../index.html">Home</a> &nbsp;&nbsp;</li><!-- item 1 of list -->
                <li><a href="pgm1.html">Program 1</a> &nbsp;&nbsp; <!-- item 2 of list -->
                    <ul><!-- inner list drop down part-->
                        <li><a href = "Page1.html">Page 1</a></li><!-- item 1 of inner list-->
                        <li><a href = "Page2.html">Page 2</a></li><!-- item 2 of inner list -->
                        <li><a href = "Page3.html">Page 3</a></li><!-- item 3 of inner list -->
                        <li><a href = "Page4.html">Page 4</a></li><!-- item 4 of inner list -->
                        <li><a href = "pgm1.html">Home</a></li><!-- item 5 of inner list -->
                    </ul><!-- end inner list -->
                </li><!--end item 2 of list -->
                <li><a href="program2.php">Program 2</a> &nbsp;&nbsp;</li><!-- item 3 of list -->
                <li><a href="Program3.php">Program 3</a> &nbsp;&nbsp;</li><!-- item 4 of list -->
                <li><a href="Program4.php">Program 4</a></li><!-- item 5 of list -->
            </ul><!-- end list -->
        
        </nav><!-- end navigation section -->

    </body> <!-- end body-->

</html><!-- end html -->