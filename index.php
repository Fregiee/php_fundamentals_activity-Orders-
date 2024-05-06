<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Order</title>
</head>
<body>
    <h1> Welcome to the canteen!  Here are the prices </h1>
        <ul>
            <li>Fishball - 30 PHP</li>
            <li>Kikiam - 40 PHP</li>
            <li>Corndog - 50 PHP</li>
        </ul>
	 <!-- The form submits to the same page using GET method -->
	<form action="testGet.php" method="POST">
        <p> Choose your order:
        <select name="Orders">
            <option value = "Fishball"> Fishball </option>
            <option value = "Kikiam"> Kikiam </option>
            <option value = "Corndog"> Corndog </option>
        </select>
        </p>
	
		<p>Quantity:<input type="text" name="quantity"></p>
		<p>Cash:<input type="text" name="cash"></p>

		<!-- Submit button -->
		<p><input type="submit" value="Submit" name="getOrder"></p>

	</form>
</body>
</html>