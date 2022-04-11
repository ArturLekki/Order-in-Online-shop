<?php
    define("SHIRTS",15.99);
    define("TROUSERS", 32.99);
    define("HATS", 11.99);
    define("TAX", 0.23);

    $number_shirts=$_POST['shirts'];
    $number_trousers=$_POST['trousers'];
    $number_hats=$_POST['hats'];

    $net_amount_shirts=$number_shirts*SHIRTS;
    $net_amount_trousers=$number_trousers*TROUSERS;
    $net_amount_hats=$number_hats*HATS;
    $net_amount_order=$net_amount_shirts+$net_amount_trousers+$net_amount_hats;

    $gross_amount_shirts=$net_amount_shirts+$net_amount_shirts * TAX;
    $gross_amount_trousers=$net_amount_trousers+$net_amount_trousers * TAX;
    $gross_amount_hats=$net_amount_hats+$net_amount_hats * TAX;
    $gross_amount_order=$gross_amount_shirts+$gross_amount_trousers+$gross_amount_hats;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Order</title>
</head>
<body>
    <table border="1" style="text-align:center;">
        <th>Shirts</th>
        <th>Trousers</th>
        <th>Hats</th>
        <tr>
            <td><?php echo $number_shirts." number" ?></td>
            <td><?php echo $number_trousers." number" ?></td>
            <td><?php echo $number_hats." number" ?></td>
        </tr>
        <tr>
            <td><?php echo $net_amount_shirts." net" ?></td>
            <td><?php echo $net_amount_trousers ." net" ?></td>
            <td><?php echo $net_amount_hats." net"  ?></td>
        </tr>
        <tr>
            <td><?php echo $gross_amount_shirts." gross"  ?></td>
            <td><?php echo $gross_amount_trousers." gross" ?></td>
            <td><?php echo $gross_amount_hats." gross" ?></td>
        </tr>
        <tr>
            <th>Order net amount</th>
            <th>Order gross amount</th>
        </tr>
        <tr>
            <td style="background-color:green;"><?php echo $net_amount_order ?></td>
            <td style="background-color:green;"><?php echo $gross_amount_order ?></td>
        </tr>
    </table>
</body>
</html>