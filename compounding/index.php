<?php 


$growth_rate = 15;
$years = 30;
$invested_amount = 100;

$total_amount = $invested_amount;

?>

<table border="1px;">
    <tr>
        <td> Year </td> 
        <td> Invested Amount </td> 
        <td> Interest Earned </td>
        <td> Total Amount </td>
    </tr>

 <?php   

for($i = 1; $i <= $years; $i++) {

    $invested_amount = $total_amount;
    $interest_earned = round($invested_amount * ($growth_rate / 100), 2);
    $total_amount = round($total_amount + $interest_earned, 2);

    ?>

    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $invested_amount; ?></td>
        <td><?php echo $interest_earned; ?></td>
        <td><?php echo $total_amount; ?></td>
    </tr>    

<?php } ?>

</table>