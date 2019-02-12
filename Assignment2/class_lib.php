<html>
	<body>
		<head>
			<title>CST8238 - Assignment 2</title>
			<link href="css/style.css" rel="stylesheet" type="text/css">
		</head>
		<div id="main">
      <?php
class EventItem {
private $_eventName;
			private $_eventDate;
			private $_eventTime;
			private $_eventDesc;
			private $_eventPrice;

function EventItem($eventName, $eventDate,$eventTime, $eventPrice,$eventDesc) {
$this->_eventName = $eventName;
			$this->_eventDate = $eventDate;
			$this->_eventTime = $eventTime;
			$this->_eventDesc = $eventDesc;
			$this->_eventPrice = $eventPrice;

}
	
	
function printMenu() {
echo "<p><strong class = event>".$this->_eventName."</strong></p>";
			echo '<p>'.$this->_eventDate.'</p>';
			echo '<p>'.$this->_eventTime.'</p>';
			
			echo '<p>'.$this->_eventPrice.'</p>';
echo '<p>'.$this->_eventDesc.'</p>';
	}


}

?>
		</div>
	</body>
</html>


