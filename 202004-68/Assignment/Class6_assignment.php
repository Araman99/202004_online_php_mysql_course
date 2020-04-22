<html>
<body>

  <form action="grade.php" method="post">
  Enter your mark:<input type="text" name="mark" value="">
  <input type="submit"  value="submit">
  </form>

</body>
</html>
  <?php
  @$mark = $_POST['mark'];
  if($mark>100||$mark<0){
    echo "<span style='background-color:gray;color:red;font-size:40px;'>Please,Chack your input</span>";
  }
  elseif ($mark>=80) {
    echo "<span style='background-color:yellow;color:green;font-size:40px;'>Congrats...!You got A+</span>";
  }
  elseif ($mark>=70) {
    echo "<span style='background-color:yellow;color:green;font-size:40px;'>You got A</span>";
  }
  elseif ($mark>=60) {
    echo "<span style='background-color:yellow;color:green;font-size:40px;'>You got B</span>";
  }
  elseif ($mark>=50) {
    echo "<span style='background-color:yellow;color:green;font-size:40px;'>You got C</span>";
  }
  elseif ($mark>=40) {
    echo "<span style='background-color:yellow;color:green;font-size:40px;'>You got D</span>";
  }
  elseif ($mark<40) {
    echo "<span style='background-color:yellow;color:green;font-size:40px;'>Ohh..!You are failed.Best luck next time.</span>";
  }
  else{
    echo "<span style='background-color:gray;color:red;font-size:40px;'>Please,Chack your input</span>";
  }
 ?>
