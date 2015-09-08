<?php
	$servername = "localhost";
	$username = "root";
    $password = "";
    $myDB = "impulse";
    try {
    	$conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
        // set the PDO error mode to exeception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully";
        $stmt = $conn->prepare("SELECT topic,content FROM blog");
        $stmt->execute();
        //
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //print_r($result);
        foreach ($result as $text){
        	$data = (Array)$text;
        	echo "<h2>".$data['topic']."</h2><h3>".$data['content']."</h3><hr>";
        	}
        }
        catch (PDOExeception $e) {
        	echo "Connection failed: " . $e->getMessage();
    	}
?>