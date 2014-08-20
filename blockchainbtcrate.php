<html>
<header>
<title>Currency Exchange</title>
</header> 
<body>
<?php
$value =  $_POST['value'];
if($value == ""){
$amount = "";
}else{
$currency =  $_POST['currency'];
$amount = file_get_contents('https://blockchain.info/tobtc?currency=USD&value='.$value.'');}
?>
<tr>
<td>
<select class="form-control" name="currency">
<option value="currency" name="currency">USD</option>
</select>
</td>
<form class="form" method="POST" action="">
<input type="text" placeholder="Amount" class="btn" name="value"/>
</tr>
<input type="submit" value="submit" class="btn"/>
<br>
<input type="text" value="<?php echo $amount; ?>" class="btn"/>
</form>
</body>
</html>