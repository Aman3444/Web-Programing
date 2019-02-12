<!DOCTYPE html>
<html>
    <head>
        <title>CST8238 - Lab6</title>
        <link href="StyleSheet.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="container">
            <?php
            include_once "Header.php";
            include_once "Menu.php";
            ?>
            <div id = "content">
                <form action="NameForm.php" method="post">


                    <fieldset>



                        <h2><p align ="center">Name Form</p></h2>
                        <table align ="center">
                            <tr>
                           

			     <td>First Name:</td>
                             <td><input type="text" name="firstName"></td>
                     
		           </tr>
                            <tr>
                    

		                <td>Middle Name:</td>
                                <td><input type="text" name="middleName"></td>
                    

			        </tr>
                                <tr>
                            


			        <td>Last Name:</td>
                                <td><input type="text" name="lastName"></td>
                            

				</tr>
                                <tr>
                                


				<td><input type="submit" name = "submit"></td>
                                <td><button type="reset" value="Reset">Reset Form</button></td>
                            </tr>
                        </table>
                        <?php
                       
                        if(isset($_POST['submit'])){
                          


                            $firstName = $_POST["firstName"];
                          
			    $middleName =  $_POST["middleName"];
                          
		            $lName =  $_POST["lastName"];
                           
                            if($firstName == Null && $middleName == Null && $lastName == Null )
                                echo "You did not supply any names.";
                           
                            elseif($firstName != Null && $middleName == Null && $lastName == Null )
                                echo "Hello $firstName! Welcome to php.";
                          
                            elseif($firstName != Null && $middleName == Null && $lastName != Null )
                                echo "Hello $firstName $lastName! It is a pleasure to meet you.";
                          
                            elseif($firstName != Null && $middleName != Null && $lastName != Null )
                                echo "Hello $firstName $middleName $lastName! Your middle name is very unique.";
                           

			     else
                                echo "Hello World !";
                        }
                        ?>
                    </fieldset>
                </form>
           
			 </div>
            		 <?php include_once "Footer.php";?>
    		
		         </div>

    </body>
</html>