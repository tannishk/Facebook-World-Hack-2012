
<!DOCTYPE html>
<html>
<head>

<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Francis HTML/CSS Template</title>

<!-- <link rel="stylesheet" type="text/css" href="css/main.css" /> -->

<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<!-- <script type="text/javascript" src="js/main.js"></script> -->
<script type="text/javascript">
	window.onload = function()
	{
	var geMapContainer;
	var geStartSuccess;
	var geStartFailure;

		geMapContainer = document.getElementById("map3d");

		geStartSuccess = function()
		{
			/**/
			geMapContainer.innerHTML = "ok";
		};

		geStartFailure = function()
		{
			/**/
			geMapContainer.innerHTML = "fail";
		};

		function geInit()
		{
			//
			google.earth.createInstance(geMapContainer, geStartSuccess, geStartFailure);
	
		}
	};
</script>
</head>

<body>

<section>
	<div>
		<header>
			<h1>h1</h1>
			<h2>h2</h2>
			<h3>h3</h3>
			<nav>
				<ul>
					<li>l1</li>
					<li>l2</li>
					<li>l3</li>
					<li>l4</li>
				</ul>
			</nav>
		</header>
	</div>

	<section>
		<article>Element1</article>
	</section>

	<section>
		<article><div id="map3d"></div></article>
	</section>

	<section>
		<article>Element3</article>
	</section>

</section>

</body>
</html>