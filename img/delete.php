<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
     <style>
	body
		{
			margin:0;
			padding:0;
			box-sizing: border-box;
			min-width:274px;
			background-image: url('img/unnamed.jpg');
			background-size: cover;
			font-size: 1.5rem;
		
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
		.table
		{
			width:75%;
			margin:auto;
			border-collapse: collapse;
			text-align: center;
		}
		.table tr:nth-child(odd)
		{
			background-color: white;
		}
		.table tr:first-child
		{
			background-color: tomato;
			color:white;
		}
		.table tr:nth-child(even)
		{
			background-color: #f8f8f8;
		}
		.conatiner
		{
			overflow-x: auto;
		}
		.last
		{
			width:80%;
			margin:auto;
			text-align: center;
		}
		.last button
		{
			color:white;
			background-color:tomato;
			border:none;
			border-radius: 15px;
            padding: 0.7rem 0.6rem ;
            font-size: 1.5rem;

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
			
		}
        </style>
</head>
<body>
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
	</header>

		<div class="container">
			<table class="table">
				<tr>
					<td>Product Name</td>
					<td>Image</td>
					<td>Cost</td>
					<td> ProductType</td>
					<td>Delete</td>
				</tr>

				<tr>
					<td>Margherita</td>
					<td><img src="img\veg2.jpg" alt="img not found" style="height:30%;"></td>
					<td>100</td>
					<td>Veg</td>
					<td><input type="checkbox"></td>
				</tr>
					
			</table>
			<br><br>
     <div class="last">
		<form>
		<button>Delete</button>
	</form>
	<br>
		
     </div>



</body>
</html>