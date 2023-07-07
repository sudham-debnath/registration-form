<?php   
    if($_POST)  
    {  
        
        $num = $_POST['num'];  

        
        $reverse = strrev($num);  
          
       
        if($num == $reverse){  
            echo "The number $num is Not Palindrome";     
        }else{  
            echo "The number $num is a Palindrome";   
        }  
}     

?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome or Not</title>
</head>
<body>

<form method="post"> 
<br>     
Enter a Number: <input type="text" name="num"/><br> <br>
<button type="submit">Check Number</button>  
</form> 
    
</body>
</html> 