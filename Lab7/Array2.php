<html>
	<head>		
			<title> CST8238 - Lab 7 </title>
	</head>
			
		<body>
		
		<?php include 'Header.php';?>
		
		<?php include 'Menu.php';?>
		
		<?php include 'Footer.php';?>
		
			<div id="content">
				<form action="Array2.php" method="post">
                    <fieldset>
                        <table align="center">
                            <tr>
                                <td>Convert</td>
                                <td><input type="text" name="srcamt"></td>
                                <td><select name="basecurr">
                                    <option value = CAD>Canadian Dollar</option>
                                    <option value = NZD>NewZealand Dollar</option>
                                    <option value = USD>US Dollar</option>
                                    </select></td>
<td>to</td>
                                <td><select name="destcurr">
                                  <option value = NZD>NewZealand Dollar</option>
                                    <option value = CAD>Canadian Dollar</option>
                                    <option value = USD>US Dollar</option>
                                    </select></td>
                                <td><button name="subject" type="submit">Submit it!</button>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="6"><h2 align= "center">Convertion results</h2></td>
                            </tr>
                        </table>
                        <?php
                        

                        if(isset($_POST['subject'])){
                            $currencies = array("CAD" => "Canadian Dollar",
                                                "NZD" => "New Zealand Dollar",
                                                "USD" => "US Dollar");

                            $rates = array("CAD" => 0.97645,
                                           "NZD" => 1.20642,
                                           "USD" => 1.26837);

                        $converted_output = $_POST["srcamt"]/$rates[$_POST["basecurr"]] * $rates[$_POST["destcurr"]];
                        echo $_POST["srcamt"]." ".$currencies[$_POST["basecurr"]]." converts to ". number_format((float)$converted_output, 2)." ".$currencies[$_POST["destcurr"]];
                        }
                        ?>
                    </fieldset>
                </form>
			<br><br><br><br><br><br>
			</div>
			</body>		
</html>
	