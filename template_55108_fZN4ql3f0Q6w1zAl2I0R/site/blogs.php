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
        	//echo "<h3 class=\"primary\">".$data['topic']."</h3><p>".$data['content']."</p><hr>";
        	
        	echo  "<h3 class=\"entry-header\"> <a href=\"#\">".$data['topic']."</a> </h3> <div class=\"entry-content\">
			<div class=\"entry-body\">".$data['content']."</div></div><div class=\"entry-footer\"><p class=\"entry-footer-info\">
			Posted by <a href=\"#\">Mr. Saurabh Pokhrel</a> on September 08, 2015 </p> </div>";
        	        	
        	}
        }
        catch (PDOExeception $e) {
        	echo "Connection failed: " . $e->getMessage();
    	}
?>