<?php
$returnValues = [];

$name = $_POST['contactName'];
$mail = $_POST['contactMail'];
$message = $_POST['contactMessage'];

//$pdo = new PDO('mysql:host=localhost;dbname=flint;charset=utf8mb4', 'root', '');
$pdo = new PDO('mysql:host=localhost;dbname=flintmedia_nl_flintme;charset=utf8mb4', 'flint_nl_flintme', 'vN4XBDu74qso');

$mail_qry = "
	INSERT INTO `messages`
	(`contactName`, `contactMail`, `message`) 
	VALUES (:name, :mail, :message)
";
$mail_stmt = $pdo->prepare($mail_qry);

$mail_stmt->bindParam(':name', $name);
$mail_stmt->bindParam(':mail', $mail);
$mail_stmt->bindParam(':message', $message);

if($mail_stmt->execute()) {
	$returnValues['status'] = 'succesful';
	$returnValues['responseMessage'] = 'Het bericht is verzonden. Wij zullen zo snel mogelijk met u contact opnemen!';
} else {
	$returnValues['status'] = 'unsuccesful!';
	$returnValues['responseMessage'] = 'Er ging iets mis met het verzonden van de mail! Errorcode: ' . $pdo->errorCode();
}

echo json_encode($returnValues);
?>