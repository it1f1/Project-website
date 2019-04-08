<!DOCTYPE html>
<?php
  /******************Author:Solomon****************/
  /*****************Description: Nested For loop **/
  /***************** Loop to print Y and O * ******/
  /***************** Good Version **********      */
  /****************Practice Test ****************/
  /***************dd-mm-yy:07-04-19 ************/
  /****************Author: Solomon ****************/

/*      Sample
 * 
            Y O O O O O 
            O Y O O O O 
            O O Y O O O 
            O O O Y O O 
            O O O O Y O-------------------------- 
            O O O O O Y 
            O O O O Y O 
            O O O Y O O 
            O O Y O O O 
            O Y O O O O 
            Y O O O O O 
 * 
 * 
 */


?>
        
    <?php
         
        function printSymbol() 
        {  
            //first loop for the first box
            for($outer = 1; $outer <= 5; $outer++)
            {

                //loop to print the first four rows of O which is behind Y
                for($inner = 1; $inner < $outer; $inner++)
                {

                    echo "O ";

                }
                
                //loop to print Y the seperator
                for($inner2 = 1; $inner2 <= 1; $inner2++)
                {

                    echo ' Y ';

                }
                
                //loop to print the second O in front  Y
                for($inner3 = 5; $inner3 >= $outer; $inner3--)
                {

                    echo ' O ';

                }
                
                    echo '<br>';
            }
            
            //second loop for the second box
            for($outer = 1; $outer<= 6; $outer++)
            {
            //loop to print the second rows of O which is behind Y
                for($inner = 6; $inner > $outer; $inner--)
                {

                    echo ' O ';

                }
                
                //loop to print Y the seperator
                for($inner2 = 1; $inner2 <= 1; $inner2++)
                {

                    echo ' Y ';

                }
                
                //loop to print the second O in front  Y
                for($inner3 = 1; $inner3 < $outer; $inner3++ )
                {

                    echo ' O ';

                }
                
                    echo '<br>';
            }
            
         }printSymbol();   
        
        ?>

