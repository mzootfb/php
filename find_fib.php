<?php
echo "Which Fibonacci number would you like?";
echo '<form method="post" action="find_fib.php">
<input type="text" name="numbers">
<input type="submit" value="submit" name="submit">
</form>';
if (isset($_POST['submit']) && isset($_POST['numbers'])){
$n = $_POST['numbers'];
function fib($n){
	$an = (pow((1 + sqrt(5))/2, $n) - pow((1 - sqrt(5))/2, $n))/sqrt(5);
	echo $an;
}
fib($n);
}
