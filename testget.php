<?php  
$order = $_POST['Orders'];
$option = $order;
$quantity = $_POST['quantity'];
$cash = $_POST['cash'];
$change = 0;
$cost = 0;
	if ( $option == "Fishball"){
        $cost = 30 * $quantity;
        $change = $cash - $cost;
    }elseif($option == "Kikiam"){
        $cost= 40 * $quantity;
        $change = $cash - $cost;
    }elseif($option == "Corndog"){
        $cost = 50 * $quantity;
        $change = $cash - $cost;
    }
echo "<h2> The total cost is " . $cost . "</h2>";
echo "<h2> Your change is " . $change . "</h2>";
echo "Thanks for your order!"
?>
