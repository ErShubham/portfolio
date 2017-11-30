	<?
	//Get all the datas for the email starts
		$name = $_POST['firstName'];
		$emailAddress = $_POST['emailAddress'];
		$phoneNumber = $_POST['phoneNumber'];
		$projectDesc = $_POST['projectDesc'];
		$to = "shubhambhattacharya.02@gmail.com";
		$subject = "Website Request";
		$message = "Name: ". $name" \n\r Email :".$emailAddress." \n\r Contact # : ".$phoneNumber." \n\r Project Details: ".$projectDesc;
		$header = $headers = 'From: info@webtrigger.in' . "\r\n" .
   'Reply-To: info@shubhambhattacharya.in' . "\r\n" .
   'X-Mailer: PHP/' . phpversion();;
		$headerCustomer = "Sender: Shubham Bhattacharya.";
		$subjectCustomer = "Thank You for Contactinh Me";
		$messageCustomer = "Dear ".$firstName." ".$lastName.", \nThank You for your time, \n \r I will look into your request and get back to you soon. \n \r Warm Regards: \n Shubham Bhattacharya \n \r Feel free to contact me at: \n +91-9907878949";
		$message = wordwrap($message,70);
		$messageCustomer = wordwrap($messageCustomer,70);
	//Get all the datas for the email ends
		
			if(empty($_POST['firstName'])||empty($_POST['lastName'])||empty($_POST['emailAddress'])||empty($_POST['phoneNumber'])||empty($_POST['projectDesc'])){
				echo 0;
			}else{
				
				
				mail($emailAddress,$subjectCustomer,$messageCustomer,$header); //send email to customer.
				echo 1;
			}
	
	//create email start
	//create email ends
	
	//return success messge;
	

?>
