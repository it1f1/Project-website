  <?php
  /***************Author:Solomon****************/
  /***************Description: the program *****/
  /*************** Checks the Season ***********/
  /***************A person was born**************/
  /**************Use of explod to extract********/
   /*************The month **********************/
  /****************Practice Test ****************/
  /***************dd-mm-yy:04-04-19 *************/
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>String Manipulation</title>
    </head>
    <body>

<?php
        //Name: Solomon Asezebhobor
        //Student No:4612930
        
        //you can change the month
        //use either words or numbers for month
        $dateString = "23-03-2010";

        $date_array = explode("-", $dateString);

        $date_month = $date_array[1];//gets the month index



        //check for the month dates        
        if(($date_month == "03")|| ($date_month == "04") || ($date_month == "05"))
        {

            echo "The Person was born: ".$dateString." in the spring period";

        }  
        
        elseif (($date_month == "06") || ($date_month == "07") || ($date_month == "08") )
        {
            
            echo "The Person was born on: " .$dateString." in the summer time ";
            
        }  
        
        elseif( ($date_month == "09") || ($date_month == "10") || ($date_month == "11") )
        {
            
            echo "The Person was born on: ".$dateString. " in the autum period";
            
        }   
        
        elseif(($date_month == "12") || ($date_month == "01") || ($date_month == "02"))
        {

            echo "The person was born: ".$dateString. " in the Winter period";

        }   
        
        else
        {
            
            echo "Not Know";
            
        }    
            echo '<br>';   
?>
        
<?php
    /***************Author:Solomon*****************/
    /***************Description: the program *******/
    /*************** Checks the Season *************/
    /***************the person was born**************/
    /**************Use of explod to extract**********/
    /*************The month *************************/
    /*************Use of switch cases****************/
    /****************Practice Test ****************/
    /***************dd-mm-yy:04-04-19 *************/
?>
      
<?php   //Code for Switch 
                
            $dateString = "23-07-2019";

            $date_array = explode("-", $dateString);

            $date_month = $date_array[1];

            switch ($date_month)
            {
                case "12":
                case "01":
                case "02": 
                    echo "The Person was born in: ".$dateString. " the winter period";
                    break;

                case "03":
                case "04":
                case "05": 
                    echo "The Person was born in: ".$dateString. " the Spring period";
                    break;
                
                
                case "06":
                case "07":
                case "08": 
                    echo "The Person was born on: ".$dateString. " in the summer time";
                    break;
                
                case "09":
                case "10":
                case "11": 
                    echo "The Person was born on: ".$dateString. "the autum time";
                    break;
                
                default:
                    echo "The Season is Not known";
                    break;
            }


?>
    </body>
</html>
