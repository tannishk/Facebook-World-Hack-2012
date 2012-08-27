<?php
//ABQIAAAAClqiMGWGA2Z-L2SOVE97aBRsVue5PIBPSrOBXiDeJlraSArIihQfgcFEtk5WE2uDvm_5sa7QS5oaSQ
//ABQIAAAAfCb7sk192hfEtenlAeCI9RT2yXp_ZAY8_ufC3CFXhHIE1NvwkxTBZIVmyxlqdA-WdCeuQ1RcSZ_0Eg
?>
<!DOCTYPE html>
<html>
	<head>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
		<title>Facebook World Hack 20120</title>
			<style type="text/css">
				html, body {}
				body { background-color:  #c3c3c3; border: solid 1px #c9c9c9; }
			</style>

			<script type="text/javascript" 
					src="https://www.google.com/jsapi"></script>

			<script type="text/javascript">
				window.onload = function()
				{
				var start;
				var geContainer;
				var geOkMethod;
				var geFailtMethod;

					google.load('earth','1');

					geContainer = document.getElementById('map3d');

					geOkMethod = function(e)
					{
						//
						geContainer.innerHTML = 'Success!';
					};
					
					geFailtMethod = function(e)
					{
						//
						geContainer.innerHTML = 'Buuhhh, it failed!';
					};

					start = function()
					{
						google.earth.createInstance(geContainer, geOkMethod, geFailtMethod);
					};

					google.setOnLoadCallback(start);

				};
			</script>
	</head>
    <body marginbottom="0" margintop="0" marginleft="0" masrginright="0">
    	<section>
    		<article>test 001</article>
    	</section>
    	<section>
    		<article><div id="map3d" style=" width: 300px; hegith: 300px;">Google Earth Plugin Preload</div></article>
    	</section>
    	<section>
    		<article>test 003</article>
    	</section>
    </body>
</html>
<?php    ?>