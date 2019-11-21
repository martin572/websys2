<!DOCTYPE html>
<html>
<head>
	<title>
		loop 
	</title>
</head>
<body>
    <?php
       $a =  0;
       $b  = 0;

      /// for loop statement
       for( $i=0; $i < 2; $i++){
       	 $a+= 10; // equalvalent to a = a+10
       	 $b+=5;

       }
        echo "at the end of the loop a = $a and b = $b";

    ?>
    <br/>
    <?php
       //while loop 
      $i = 0;
      $num = 50;
      while ($i < 2){
      	  $num++;
      	  $i++;
      }

      echo "loop stopped at i = $i and num = $num";

    ?>
    <br/>
    <?php 
        // do while loop
    $i = 0;
    $num = 0;
    do {
    	$i++;

    }while($i<10);
       echo "loop stopped at i = $i";

 ?>
 <br/>
   <?php

     $fruits = array ( 'guava', 'apple','mango','orange');

     foreach($fruits as $fruit){
     	echo "list of fruits: $fruit<br/>";
     }
    ?>
</body>
</html>