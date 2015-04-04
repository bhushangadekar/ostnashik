<?php
 // Connects to Our Database 
 $conn = new mysqli('localhost', '', '', 'test');
 if ($conn->connect_error)
 {
     die("Connection failed: " . $conn->connect_error);
 }	
 ?> 