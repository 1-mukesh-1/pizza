<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
	body
		{
			margin:0;
			padding:0;
			box-sizing: border-box;
			min-width:274px;
		}
		.head
		{
			display: flex;
			align-items:baseline;
			justify-content:space-around;
			padding:2rem;
			background-color:#f8f8f8;
		}
        .head h1
        {
        	margin:0;
        	font-weight: 200;
        	font-family: serif;
        	font-size:2rem;
        }
		nav ul
		{
			list-style-type:none;
			padding:0;
			margin:0;
			display: flex;
            
		}
		nav ul a
		{
			margin-left:0.7rem;
			text-decoration:none;
			display:block;
			transition-duration:0.4s;
			color:black;
			font-size:0.8rem;
			padding:0.3rem;
		}
		nav ul a:hover
		{
			background-color:tomato;
			color:white;
			border-radius: 4px;\
		}
		.name
		{
			background-color:tomato;
			text-align:center;
			color:white;
			font-size:2.5rem;
		}
		.change
		{
			width:30%;
			margin:auto;
			border:1px solid #ccc;
			
			text-align: center;
		}
		.change .f
		{
			width:90%;
			margin-top: 0.5rem;
			border-radius: 10px;

		}
		.change button
		{
			width:40%;
			color:white;
			background-color:tomato;
			border:none;
			border-radius: 5px;
			margin:0.5rem;
            padding:0.5rem;

		}
		@media screen and (max-width:850px)
		{
			.head
			{
				flex-direction:column;
				align-items: center;
			}
			.head h1
			{
				margin-bottom: 1rem;
				text-align:center;
			}
			nav ul
			{
				flex-direction: column;
				text-align:center;
		      
				
			}
			.change
			{
				width:60%;
			}
		}
		
			
</style>
</head>
<body>
	<header>
		<div class="head">
			<div>
				<h1>Online Pizza Ordering System</h1>
			</div>
		
			<nav>
				<ul>
					<a href="#"><li>VEGPIZZA</li></a>
					<a href="#"><li>NON-VEGPIZZA</li></a>
					<a href="#"><li>BEVERAGES</li></a>
					<a href="#"><li>PIZZA MANIA</li></a>
					<a href="#"><li>CART</li></a>
					<a href="#"><li>LOGOUT</li></a>
				</ul>
			</nav>
	
		</div>
	</header>

	<br><br>

	<div class="name">
		CHANGE PASSWORD
	</div>

<br><br>

	<div class="change">
		<h2 style="margin:0 0 0.5rem 0;color:white;background-color: tomato;">CHANGE PASSWORD</h2>
		<form onsubmit="return matchpassword()">
		
			<input  class="f" type="password" name="password" required placeholder=" PASSWORD"><br><br>
			
			<input class="f" type="password" name="password2" required placeholder=" CONFIRM PASSWORD"><br>
			<button class="b">CHANGE PASSWORD</button>
		</form>
	</div>
</body>
</html>
<script>
	function matchpassword()
{
	var firstpassword=document.forms[0].querySelector('input[name="password"]').value;
	var secondpassword=document.forms[0].querySelector('input[name="password2"]').value;
	if(firstpassword==secondpassword)
	{
		return true;
	}
	else
	{alert('PASSWORD and CONFIRMPASSWORD must match');
		return false;
		
	}
}
</script>