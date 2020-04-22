<html>
<body>

<form action="test.php" method="post">
Enter a year:<input type="text" name="year" value="">
<input type="submit"  value="submit">
</form>

</body>
</html>

<?php

@$year = $_POST['year'];
echo "<h1>$year</h1>";
echo "<br>";
if(($year%100!=0||$year%400==0)&&$year%4==0){
  echo "<span style='background-color:yellow;color:green;font-size:40px;'>The year ".$year ." is leap year.</span>";
}
else {
  echo "<span style='background-color:gray;color:red;font-size:40px;'>The year of your input is not leap a year.</span>";
}
 ?>
