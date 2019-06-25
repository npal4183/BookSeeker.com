<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body {
			margin: 0px;
			padding: 0px;
			background-color: darkgray;
			font-family: sans-serif;
		}
		.product {
			position: relative;
			width: 240px;
			height: 340px;
			background: #fff;
			box-shadow: 0 5px 15px rgba(0,0,0,.25);
			border-radius: 5px;
			overflow: hidden;
		}
		
		.imgbox {
			height: 100%;
			box-sizing: border-box;
		}
		.imgbox img {
			display: block;
			width: 240px;
			height: 290px;
			margin: 0 auto 0;

		}
		.details {
			position: absolute;
			width: 100%;
			background-color: #fff;
			padding: 10px;
			box-sizing: border-box;
			box-shadow: 0 0 0 rgba(0,0,0,0);
			transition: .5s;
			bottom: -50px;
			border-radius: 5px;
		}
		.product:hover .details {
			bottom: 0;
			box-shadow: 0 -5px 15px rgba(0,0,0,.25);
		}
		.details h2 {
			margin: 0;
			padding: 0;
			font-size: 16px;
			width: 100%;
		}
		.details h2 span {
			font-size: 12px;
			color: #555;
			font-weight: normal;
		}
		.details .price {
			position: absolute;
			top: 10px;
			right: 20px;
			font-weight: bold;
			font-size: 20px;
		}
		.imgbox label {
			position: absolute;
			top: 10px;
			right: 20px;
			color: #fff;
			font-family: new-bostan;
		}
		.details a {
			display: block;
			padding: 5px;
			color: #fff;
			margin: 15px 0 0;
			background: #ff4f4f;
			text-align: center;
			text-decoration: none;
			transition: .3s;
			cursor: pointer;
		}
		.details a:hover	{
			background: lightgreen;
			color: #f00;
		}


 	</style>
</head>
<body>
	<div class="product">
		<div class="imgbox">
			<label>New</label>
			<img src="upload_image\nareshkumar\3.jpg">
		</div>
		<div class="details">
			<h2>Brand Name<br><span>Men's Designer T-Shirt</span></h2>
			<div class="price"> $59.00</div>

			<a href=""> Add To Cart</a>
		</div>
	</div>
</body>
</html>