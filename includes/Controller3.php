<!-- ***********************************************************************************
  Page Name  : Controller3.php 
  Author     : Jana Backman 
  Your URL   : ocelot-aul.fiu/~jback007
  Course     : WEB-Online Summer 2022
  Program #  : 3
  Purpose    : Controller backendprogram for program 3. takes data from backend and cretaes a conection to mysql database. It sends the user to the right program according to the pressed button.
  Due Date   : 07/02/2022

  Certification: 

  I hereby certify that this work is my own and none of it is the work of any other person. 

  ..........{ Jana Backman}..........
******************************************************************************* -->
<!DOCTYPE html>   <!-- declaration used in HTML 5. Tells browsers that this is HTML 5 -->

<html>
    <head>
        <title>Controller3</title>
    </head>

    <body>
        
        <?php
            //connecting to mysql 
            //echo "<h3>I am going to connect to mySql";
            
            //                                server                user          password      database     
            $connection = mysqli_connect("sql5.freesqldatabase.com","sql5510019","LFatVbIkw1","sql5510019");
            
            
            if (mysqli_connect_errno())//if error 
            {
                //debugging line
                //echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
            else
            {
                //---debbuging and testing code
                //echo "<br>I have connected to mySql<br>";
                // $dbName = "sum22_jback007";
                // $db_selected = mysqli_select_db( $connection, $dbName );       
                // if (!$db_selected)
                // {
                //    die( $dbName . ' does not exist, can\'t use it ' . mysqli_error());
                // } 
                // else{
                //     echo "I selected database : " . $db_selected . " " . $dbName . "<br>" ;
                // }
                //---end debugging code
                
                //access table                    
                $tableName = "customers";
                        
                $query = mysqli_query( $connection, "SELECT * FROM $tableName" );//returns true if query returns something
                
                //---debugg code
                //printf("Result %d<br>", $query);
            
                if(!$query){//if table doesn't exist
                    
                    //FIXME check if needs commented
                    //---testing and debugging
                    //echo "The ".$tableName." does not exists<br>";        
                    //echo "<br>Creating table : ".$tableName."<br>";


                    //create table customers using sql query and passing it to the $sql variable
                    //table is already created, but I leave the code here in case some deletes it  
                    $sql = "CREATE TABLE ".$tableName."(
                        ProgrammerId VARCHAR(10) NOT NULL,
                        PRIMARY KEY(ProgrammerId),
                        FirstName VARCHAR(30),
                        LastName VARCHAR(30),
                        Email VARCHAR(30),
                        Age VARCHAR(5),
                        YearsOfExperience VARCHAR(2),
                        RecentProject VARCHAR(20),
                        WorkLocation VARCHAR(35),
                        PersonalWebsite  VARCHAR(50),
                        RecentProjectDetails VARCHAR(400),
                        FavoriteLanguage VARCHAR(10),
                        OperatingSystem VARCHAR(5),
                        AI  VARCHAR(2),
                        IT VARCHAR(2), 
                        Robotic  VARCHAR(7),
                        WebDev  VARCHAR(6)
                        )";
                                    
                    $result = mysqli_query( $connection, $sql );//pass the query to the sql connection
                            
                    //debugguing code for table creation if error on table creation
                    if ($result)
                    {
                        $message = "Table ". $tableName." created<br>";
                    }
                    else
                    {
                        die ("Can't create ". $tableName." ". mysqli_error() );
                    }
                }//end if(!query)
                               
            }//end else
        
            //assigning each field value to a variable using the input name
            $ProgrammerId  = $_POST['ProgrammerId'];
            $FirstName = $_POST['FirstName'];
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
            $IT = $_POST['IT'];
            $Robotic = $_POST['Robotic'];
            $WebDev = $_POST['WebDev'];
            
            $found = $_POST['found'];//debugging variable

            //---displaying name of field for debugging
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
            //---end debugging
            
            
            //calling the appropiate php program depending on which button was cliked using if.. else statements
            if ( $_POST['Save'] )
            { 
                include('Save.php');
            }
            else if ( $_POST['Find'] )
            { 
                include('Find.php');
            }
            else if ( $_POST['Modify'] )
            {  
                include('Modify.php');
            }
            else if ( $_POST['Delete'] )
            { 
                include('Delete.php');
            }
            else if ( $_POST['Clear'] )
            { 
                include('Clear.php');
            }
            else if ($_POST['Contact_me']){}
            else
            { 
               echo "<br><h1> you pressed UNKOWN button</h1>";   
            }

            mysqli_close($connection); //closing the mysql connection

            include( "Program3.php" );//recalling the front-end after backend is excuted


        ?> <!--closing php-->

    </body><!--closing body-->
</html><!--closing html-->
