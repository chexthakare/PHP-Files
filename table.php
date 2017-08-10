/* by using for */
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
        $j = 0;
        for ($i=0; $i < 5; $i++) { 
          
         if($j % 2 == 0){
            if($j == 4){

              echo '<tr><td>'. $i . '</td></tr>';

            } else {
          ?>
          
            <?php 
              echo '<tr><td>'. $i . '</td>'; 
              ?>
          
          <?php
        }
         } else {

          ?>
          
            <?php echo '<td>'. $i . '</td>'; ?>
          </tr>
          <?php

         }
        $j++; }
    ?>

</table>

</body>
</html>
