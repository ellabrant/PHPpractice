<!DOCTYPE html>

<html>
  <body>
    <p>Ella's shopping list</p>
  </body>

<?php
  $inventory = [
    "milk" => 1,
    "eggs" => 2,
    "cereal" => 3,
    "bread" => 4,
    "mayo" => 5,
    "ramen" => 6,
    "juice" => 7,
    "bagels" => 8,
    "shampoo" => 9,
    "conditioner" => 10
  ];

  $my_shopping_list = [];

  foreach ($inventory as $item => $number) {
    if ($number < 5) {
        $my_shopping_list[] = $item; 
    }
}
?>
<br>
<?php foreach ($my_shopping_list as $item): ?>
      <li><?php echo $item; ?></li>
<?php endforeach; 

?>
</html>
