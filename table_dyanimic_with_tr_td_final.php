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
        $j = 1;
        $count = 6;
        $columns = 4;
        for ($i=0; $i < $count; $i++) {                         
            if($i % $columns == 0){
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
          for($k = $j; $k < $columns; $k++ ){
            //echo $k;
            if($k < $columns - 1){
              echo '<td></td>';
            } else {
              echo '<td></td></tr>';
            }
          }
        }        
    ?>

</table>

</body>
</html>