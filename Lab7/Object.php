<!DOCTYPE html>
<html>
    <head>
        <title>CST8238 - Lab 7</title>
        <link href="StyleSheet.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="container">
            <?php
            include_once "Header.php";
            include_once "Menu.php";
            ?>
            <div id = "content">
                <?php
interface Employee{
public function displayEmployeeInfo();

}
class Management implements Employee{
  protected $sin, $age, $salary;

   function __construct($sin, $age, $salary){
    $this->sin = $sin;
    $this->age = $age;
    $this->salary = $salary;
  }
  public function displayEmployeeInfo(){
    return "<strong>SIN</strong>: ". $this->sin .", <strong>Age</strong>: ". $this->age .", <strong>Salary</strong>: ". $this->salary;
  }

}
class Manager extends Management{
  private $adminLevel;
  function __construct($sin, $age, $salary, $adminLevel){
    parent::__construct($sin, $age, $salary);
    $this->adminLevel = $adminLevel;
                    }

  public function displayEmployeeInfo(){
    return parent::displayEmployeeInfo().", <strong>Admin Level</strong>: ".$this->adminLevel;

  }
}
class Development implements Employee{
  protected $sin;
  protected $age;
  protected $salary;
  public function __construct($sin, $age, $salary){
    $this->sin = $sin;
    $this->age = $age;
    $this->salary = $salary;
  }

  public function displayEmployeeInfo(){
    return "<strong>SIN</strong>: ". $this->sin .", <strong>Age</strong>: ". $this->age .", <strong>Salary</strong>: ". $this->salary;

  }
}
class ITSpecialist extends Development{
  private $projectAssigned;
  public function __construct($sin, $age, $salary, $projectAssigned){
    parent::__construct($sin, $age, $salary);
    $this->projectAssigned= $projectAssigned;
  }
  public function displayEmployeeInfo(){
    return parent::displayEmployeeInfo().", <strong>Assigned Project</strong>: ".$this->projectAssigned;
  }
}
echo "<h1><u>Manager</u></h1>";
$worker = new Manager(123786123, 25, 250000, "FQ-08");
$worker2 = new Manager(222555999, 35, 152000, "MQ-85");
echo $worker->displayEmployeeInfo().'<br><br>'.$worker2->displayEmployeeInfo().'<br>';
echo "<h1><u>ITSpecialist</u></h1>";
$itworker = new ITSpecialist(852314796, 40, 125552, "KFUY");
$itworker2 = new ITSpecialist(888555222, 37, 135220, "MNYH");
echo $itworker->displayEmployeeInfo().'<br><br>'.$itworker2->displayEmployeeInfo();


 ?>
           
			 </div>
</br></br></br></br></br>
            		 <?php include_once "Footer.php";?>
    		
		         </div>

    </body>
</html>