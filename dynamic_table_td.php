<!DOCTYPE html>
<html>
<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
<body>

    <table table style="width:100%">
        
        <?php
            //print_r($email_parsing_keywords);
            $j = 1;
            $i = 0;
            $columns = 6;
            foreach ($get_emp_emails as $emp_emails) {
                                
                if($i % $columns == 0) {
                    echo '<tr><td>' . $emp_emails->id . '</td>';

                } else {
                    echo '<td>' . $emp_emails->id . '</td>';
                }
                if($columns == $j){
                  echo '</tr>';
                  $j = 0;
                }
                $j++;
                $i++;
                
            }
            /*$j = $j - 1;        
            if($j % $columns != 0){
              for($k = $j; $k < $columns; $k++ ) {
                if($k < $columns - 1){
                  echo '<td></td>';
                } else {
                  echo '<td></td></tr>';
                }
              }
            } */
            
        ?>
        
        
        
        <?php 
            /*
            $j = 1;
            $count = 11;
            $columns = 2;
            for ($i=0; $i < $count; $i++) {                                
                if($i % $columns == 0) {
                    echo '<tr><td>' . $i . '</td>';

                } else {
                    echo '<td>' . $i . '</td>';
                }
                if($columns == $j){
                  echo '</tr>';
                  $j = 0;
                }
                $j++;
            }
            $j = $j - 1;        
            if($j % $columns != 0){
              for($k = $j; $k < $columns; $k++ ) {
                if($k < $columns - 1){
                  echo '<td></td>';
                } else {
                  echo '<td></td></tr>';
                }
              }
            }   
            
            */
        ?>

    </table>

</body>
</html>