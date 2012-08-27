<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Acceso - Expediente dxDomus</title>
	
	<style type="text/css">
		body {	background-color: #fff;
				margin: 10px;
				font: 13px/20px normal Helvetica, Arial, sans-serif;
				color: #4F5155;}
		
		.section-title {	font-size:14px;
							font-weight:bold;
							color:#333;
							background-color:#ffffff;
							border-bottom:1px solid #D0D0D0;
							color:#002166;
							padding-top:5px;
							padding-bottom:5px;
							padding-left:10px;
							padding-right:10px;
							margin-bottom:10px;		}
							
		.section-text {		font-size:12px;
							text-align:justify;
							color:#333;
							color:#002166;
							padding-top:5px;
							padding-bottom:5px;
							padding-left:10px;
							padding-right:10px;
							margin-bottom:10px;		}
							
		input, select {		border: 1px #cfcfcf solid;
							font-family: Arial, Helvetica, sans-serif;
							font-size: 11px;
							margin-top: 2px;
							margin-right: 10px;
							margin-bottom: 2px;
							margin-left: 10px;
							padding-top: 1px;
							padding-right: 0px;
							padding-bottom: 1px;
							padding-left: 2px;
							height: 18px	}
		
		label {	padding-left:5px;padding-right:5px;	}
	</style>
</head>
<body>

<div id="myContainer" style="width:780px;margin:10px;border:1px solid #D0D0D0;">
	<div	id="myHeader" 
			style="width:780px;height:199px;color:#444;background-color:transparent;border-bottom:1px solid #D0D0D0;font-size:19px;font-weight:normal;background:url(http://localhost/images/header-blank.jpg) center no-repeat;/*margin:0 0 14px 0;padding:14px 15px 10px 15px;*/"></div>
	
	<div 	id="myBody" 
			style="margin:0 15px 0 15px;">
			<p></p>
			<div	class="section-title"
					style="">Acceso</div>
			
			<div	class="section-text">
					<div align="left">
						<div style="width:300px;height:150px;border: 1px solid #ccc;">
							<div style="font-size:12px;color:#333;background-color:#f9f9f9;border-bottom:1px solid #D0D0D0;color:#002166;padding-top:5px;padding-bottom:5px;padding-left:10px;padding-right:10px;margin-bottom:10px;">Login</div>
							<form>
								<div><input type="textfield" /></div>
								<div><input type="textfield" /></div>
								<div><input type="button" value="Aceptar" /></div>
							</form>
						</div>
					</div>
			</div>		
					
	</div>
	
	<div	id="myFooter" 
			style="text-align:right;font-size:11px;border-top:1px solid #D0D0D0;line-height:32px;padding:0 15px 0 10px;margin:20px 0 0 0;">
			Quedan&nbsp;todos&nbsp;los&nbsp;derechos&nbsp;reservados&nbsp;&copy;&nbsp;dxDomus&nbsp;S.A.&nbsp;de&nbsp;C.V.&nbsp;2012</div>
</div>

<?php if( isset($parameters) && !empty($parameters) && count($parameters)>0 ){var_dump($parameters);} ?>
</body>
</html>