<!DOCTYPE html>
<html>
	<head>
		<title>Calculator</title>
		<meta charset="utf-8">
	</head>
	<body>
		<style>
			body{
				background-color: rgb(9, 38, 82);
			}
			h1{
				font-style: italic;
				font-size:x-large;
				background-color: rgb(153, 190, 238);
				text-align:center;
				margin:10px;
				padding:20px;
				text-decoration: solid;
				outline-color: black;
			}
			*{
				box-sizing: border-box;
			}
			div.form{
				display:block;
				text-align:center;
			}
		</style>

		<h1> Simple Calculator </h1>
		<div class=form>
		<form>

		<style>
			input[type="text"], select[name="operator"]{
				width:50%;
				height:50px;
				margin:20px;
				padding: 10px;
				text-align: center;
				background-color: rgb(63, 59, 59);
				color: rgb(255, 255, 255);
				
			}
			button{
				width:50%;
				height:50px;
				margin:20px;
				padding: 10px;
				text-align: center;
				background-color:rgb(255, 255, 255);
				color: rgb(2, 65, 121);
				font-size: large;
				text-decoration:double solid;
			}
			p{
				font-size: x-large;
				color: rgb(255, 255, 255);
				font-variant: small-caps;
				text-decoration-style: solid;
				text-align:center;
			}
			#result{
				font-size: x-large;
				color: rgb(255, 255, 255);
				font-variant: small-caps;
				text-decoration-style: solid;
				text-align:center;
			}
		</style>
			<input type="text" name="num1" placeholder="Enter the number">
			<input type="text" name="num2" placeholder="Enter the number">
			<select name="operator"> 
				<option>None</option>
				<option>Add</option>
				<option>Subtract</option>
				<option>Multiply</option>
				<option>Divide</option>
			</select>
			<br>
			<button type="submit" name="submit" value="submit" >Calculate</button>
		</form>
		</div>
		<p>The answer is :</p>
		<div id=result>
		<?php
			if(isset($_GET['submit'])){
				$result1 = $_GET['num1'];
				$result2 = $_GET['num2'];
				$operator = $_GET['operator'];

				switch ($operator) {
					case 'None':
						echo "You need to select an operator";
						break;

					case 'Add':
						echo $result1 + $result2;
						break;

					case 'Subtract':
						echo $result1 - $result2;
						break;								
					case 'Multiply':
						echo $result1 * $result2;
						break;

					case 'Divide':										
						echo $result1 / $result2;
						break;
					default:
						# code...
						break;
				}
			}
		?>
		</div>

	</body>
</html>