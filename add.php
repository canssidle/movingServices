<?php
if(isset($_GET))


?>
<!Doctype html>
<html>
<?php include('header.php');?>
<section class="container grey-text">
<h4 class="center">Add a PIZZA</h4>
<from class="white" action="add.php" method="GET">
<Lable>Your email</lable>
<input type ="text" name = "email">
<Lable>Pizza title</lable>
<input type ="text" name = "title">
<Lable>Ingredients</lable>
<input type ="text" name = "ingrediets">
<div class= "center">
<input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
</div>
</form>
</section>

<?php include('footer.php');?>
</html>