<html>
    <head>
        <style>
            body
      {
        background: linear-gradient(#e66465, #9198e5);
        width: 800px;
        height:800px;
      }
      </style>
    </head>
<?php
    $item1 = 5.99;
    $item2 = 169.99;
    $item3 = 2499999.99;
    $item4 = 0.99;
    $array = [$item1,$item2,$item3,$item4];
    $q1 = $_POST["num1"];
    $q2 = $_POST["num2"];
    $q3 = $_POST["num3"];
    $q4 = $_POST["num4"];
    $prices = [$item1 * $q1, $item2 * $q2, $item3 * $q3, $item4 * $q4];
    $shipping  = $_POST["shipping"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $total = $prices[0] + $prices[1] + $prices[2] + $prices[3] +$shipping;

    if(isset($_POST["submit"]))
    {
        echo "<html>";
        echo "<head>";
        echo "<title>Receipt</title><h4>RECEIPT</h4>";
        echo "<h>Welcome ".$username."! Your password is ".$password."</h><br>";
        echo "</head>";
        echo "<table align = 'center' border = '1' width = '100%'>";
        echo "<tr><th> Item </th>";
        echo "<th>Quantity</th>";
        echo "<th>Price/item</th>";
        echo "<th>Subtotal</th></tr>";
        echo "<tr><td>Chcoclate Chip Cookies</td>";
        echo "<td>".$q1."</td>";
        echo "<td>".$item1."</td>";
        echo "<td>".$prices[0]."</td></tr>";
        echo "<tr><td>Lawn Mower</td>";
        echo "<td>".$q2."</td>";
        echo "<td>".$item2."</td>";
        echo "<td>".$prices[1]."</td></tr>";
        echo "<tr><td>Mansion</td>";
        echo "<td>".$q3."</td>";
        echo "<td>".$item3."</td>";
        echo "<td>".$prices[2]."</td></tr>";
        echo "<tr><td>Tic Tac</td>";
        echo "<td>".$q4."</td>";
        echo "<td>".$item4."</td>";
        echo "<td>".$prices[3]."</td></tr>";
        echo "<tr><td>Shipping cost</td>";
        echo "<td></td><td></td>";
        echo "<td>".$shipping."</td></tr>";
        echo "<tr><td>Total Price</td>";
        echo "<td></td><td></td>";
        echo "<td>".$total."</td></tr>";
        echo "</table>";
        
    }
?>
</html>
