<html>
<head>
	<title>Simple Money Format Example</title>
</head>
<body>
	<div id="wrapper">
		<section>
			<h2>With Span</h2>
			<span class="money">10000</span>
		</section>
		<section>
			<h2>With Input</h2>
			<input type="text" class="money" value="20000"/>
		</section>
	</div>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="../CSS/simple.money.format.js"></script>
	<script type="text/javascript">
		$('.money').simpleMoneyFormat();
	</script>
</body>
</html>