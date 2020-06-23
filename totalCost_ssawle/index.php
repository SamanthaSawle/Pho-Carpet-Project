<!DOCTYPE html>
<html lang="en">
	       
<head>
	<title>Form that calls the totalCost program</title>
	<meta charset="utf-8">
		       
	<link href="css/styles.css" rel="stylesheet">

</head>

<body>
    <?php
    if(isset($_POST['submit'])) {
        echo "this";
        
    } else {
    ?>
	<h2>Total Cost input form</h2>

	<form name="widgets" action="index.php" method="post">

	   <label for="fName">First Name: </label>
	   <input type="text" name="fName" id="fName">
	   <br>

	   <label for="lName">Last Name: </label>
	   <input type="text" name="lName" id="lName">
	   <br><br>

	   <label for="fgColor"> Foreground Color: </label>
	   <select name="fgColor" id="fgColor">
                  <option value="#ffb300">orange</option>
                  <option value="rgb(176, 23, 31)">indian red</option>
                  <option value="rgb(75, 0, 130)">indigo</option>
                  <option value="rgb(72, 61, 139)">darkslateblue</option>
                  <option value="rgb(132, 112, 255)">lightslateblue</option>
                  <option value="rgb(69, 139, 0)">chartreuse4</option>
                  <option value="rgb(162, 205, 90)">darkolivegreen3</option>
	   </select>
	   <br><br>

	   <label for="bgColor">Background Color: </label>
	   <select name="bgColor" id="bgColor">
                  <option value="rgb(75, 0, 130)">indigo</option>
		  <option value="rgb(176, 23, 31)">indian red</option>
		  <option value="rgb(72, 61, 139)">darkslateblue</option>
		  <option value="rgb(132, 112, 255)">lightslateblue</option>
		  <option value="rgb(69, 139, 0)">chartreuse4</option>
		  <option value="rgb(162, 205, 90)">darkolivegreen3</option>
		  <option value="#ffb300">orange</option>
	   </select>
	   <br><br>

	   <label for="fontChoice">Font Choice: </label>
	   <select name="fontChoice" id="fontChoice">
		  <option value="Trebuchet MS">Trebuchet MS</option>
		  <option value="Jokerman">Jokerman</option>
		  <option value="Papyrus">Papyrus</option>
		  <option value="Comic Sans MS">Comic Sans MS</option>
		  <option value="Tekton Pro">Tekton Pro</option>
		  <option value="Arial">Arial</option>
		  <option value="Courier New">Courier New</option>
		  <option value="Verdana">Verdana</option>
	   </select>
	   <br><br>

	   <label for="quantity">Number of Widgets: </label>
	   <input type="text" name="quantity" id="quantity">
	   <br><br>

	   <input type="submit" name="submit" id="submit" value="Calculate Cost">
	   <input type="reset" name="reset" id="reset" value="Clear">

	</form>
        
        <?php
            } // end else form is not submitted.
        ?>

</body>
</html>