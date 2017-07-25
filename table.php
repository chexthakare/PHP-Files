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
        for ($i=0; $i < 10; $i++) { 
          
         if($j % 2 == 0){
          echo '<tr>';
          ?>
          
            <td><?php echo $i; ?></td>
          
          <?php
         } else {
          ?>
          
            <td><?php echo $i; ?></td>
          </tr>
          <?php
         }
        $j++;
    ?>
  
  
  <?php } ?>
</table>

</body>
</html>