<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Expediente</title>
	
	<style type="text/css">
 
	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	
	
	
	
	
	
/* 152316, DOCman */

.dm_taskbar ul
{
  background-image: none;
  margin: 0;
  padding: 0;
}

.dm_taskbar ul li
{
  background-image: none;
}



.stable {
        width:500px;;
        margin-top: 20px;
}

.sintro {
        font-size:12px;
        color:#333;
        padding-top:5px;
        padding-bottom:5px;
        padding-left:10px;
        padding-right:10px;
        margin-bottom: 20px;
}

.sgroup {
        margin-bottom: 15px;
}

.sname {
        font-size:12px;
        color:#333;
        background-color: #E6E6E6;
        border-top: dashed 1px #999;
        border-bottom: solid 1px #D7D7D7;
        padding-top:5px;
        padding-bottom:5px;
        padding-left:10px;
        padding-right:10px;
        margin-bottom: 10px;
}

.sduty {
        font-size:11px;
        color:#333;
        padding-top:2px;
        padding-bottom:2px;
        padding-left:10px;
        padding-right:10px;
        display:none;
}

.semail {
        font-size:11px;
        color:#06C;
        padding-left:10px;
        padding-right:10px;
        padding-bottom:2px;
        border-bottom: solid 1px #D7D7D7;
        margin-bottom: 10px;
}


.sproduct {
        font-size:11px;
        color:#333;
        padding-top:2px;
        padding-bottom:2px;
        padding-left:10px;
        padding-right:10px;
}

.sproduct:hover {
        background-color:#F2F2F2;
        cursor:pointer;
}

.sproduct-row1 {
        background-color: #F8F8F8;
}

.sproduct-row2 {
        background-color: #FFFFFF;
}

.srname { width:250px;}
.sractivity  { margin-left: 5px;}
	</style>
</head>
<body>

<div id="container">
	<h1>Expediente</h1>

	<div id="body">
		<p>Contenido.</p>

		<p>Contenido.</p>
		<code>C&oacute;digo</code>

		<p>Contenido.</p>
		<code>C&oacute;digo</code>

		<p>Contenido <a href="user_guide/">link</a>.</p>
		
		<p>
			<div class="stable">
				<div class="sintro">Contenido</div>
				<div class="sgroup">
					<div class="sname">Contenido</div>
					<div class="sduty">Contenido</div>
					<div class="smail">Contenido</div>
					<div class="sproduct">Contenido</div>
				</div>
				<div class="sgroup">
					<div class="sname">Contenido</div>
					<div class="sduty">Contenido</div>
					<div class="smail">Contenido</div>
					<div class="sproduct">Contenido</div>
				</div>
			</div>
		</p>
	</div>

	<p class="footer">P&aacute;gina generada en <strong>{elapsed_time}</strong> segundos.</p>
</div>
<?php if( isset($parameters) && !empty($parameters) && count($parameters)>0 ){var_dump($parameters);} ?>
</body>
</html>