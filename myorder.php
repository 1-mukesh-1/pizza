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
			border-radius: 4px;
			
		}
		.tabcontainer
		{
			overflow-x:auto;
		}
		.name
		{
			background-color:tomato;
			text-align:center;
			color:white;
			font-size:2.5rem;
			margin: 1.3rem 0rem;
		}
		.tab
		{
			width:80%;
			text-align: center;
			margin:auto;
			border-collapse: collapse;
	
		}
		.tab tr:nth-child(even)
		{
			background-color: #f2f2f2;
		}
		.tab tr:first-child,th
		{
			color:white;
			padding:0.5rem;
           background-color: tomato;
           
		}
		.tab tr,td
		{
			padding:1rem;
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
		ORDER REPORTS
	</div>
	<div class="tabcontainer">
	<table class="tab">
		<tr>
			<th>Order id</th>
			<th>Customer name</th>
			<th>Customer email</th>
			<th>Contact</th>
			<th>Date</th>
			<th>Order Status</th>
		   <th>Action</th>
		</tr>

		<tr>
			<td>1</td>
			<td>Arun</td>
			<td>Arun@gmail.com</td>
			<td>0987654321</td>
			<td></td>
			<td>Confirmed</td>
			<td><button style="background-color: lightgreen;color:white;border:none;">viewitems</button><button style="background-color: red;color:white;border:none;">Cancelorder</button></td>
			
		</tr>
	</table>
     </div>
</body>
</html>