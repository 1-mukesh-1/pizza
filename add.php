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
			background-image: url('img/unnamed.jpg');
			background-size: cover;
		
		}
		.head
		{
		    color:white;
			display: flex;
			align-items:center;
			padding:2rem;
			flex-direction: column;

			
		}
        .head h1
        {
        	margin:0;
        	font-weight: 200;
        	font-family: serif;
        	font-size:2rem;
        	margin-bottom: 0.7rem;
        }
        .head h1:first-letter
        {
        	color:red;
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
	        color:white;
    		font-size:0.8rem;
			padding:0.3rem;
		}
		nav ul a:hover
		{
			background-color:tomato;
			color:white;
			border-radius: 4px;
			
		}
		.container
        {
        	display: flex;
        	justify-content: center;
        	align-items: center;
        	height:70vh;
        }
        .login
        {
        	text-align: center;
        	width:30%;
        	padding:2.5rem 1rem;
        	border-radius: 15px;
        	background-color:rgba(255, 255, 255, 0.9);
        
        }
        .login input[type="text"],select
        {
        	width:80%;
        	margin-bottom:1rem;
        	border-radius: 15px;
        	font-size:1.3rem;

        }
        .login input[type="file"]
        {
        	margin-bottom: 1rem;
        }

         .login input[type="submit"]
         {
         	border-radius: 30px;
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
			.login
			{
				width:75%;

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
					<a href="#"><li>ADD PIZZA</li></a>
					<a href="#"><li>DELETE PIZZA</li></a>
					<a href="#"><li>ORDERS</li></a>
					<a href="#"><li>LOGOUT</li></a>
				</ul>
			</nav>
		</div>
	</header>
	<div class="container">
		<div class="login">
		<form>
				<h1>ADMIN LOGIN</h1>
         <input type="text" placeholder=" Pizza Name">	<br>
         <input type="text" placeholder=" prize">	<br>
         IMAGE:
         <input type="file">
         <select>
         <option >veg</option>
         <option >NonVeg</option>
         <option >PizzaMania</option>
         <option >Beverages</option>
         </select>
         <input type="submit" value="ADD PIZZA" style="width:40%;color:white;background-color:tomato;border:none;">
         </form>
     </div>
	</div>
</body>
</html>