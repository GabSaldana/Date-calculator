<?PHP

	$plat=$_POST["plataforma"];
	$sist=$_POST["sistema"];
	$port=$_POST["portable"];
	$esca=$_POST["escalar"];
	$prue=$_POST["pruebas"];
	
	$ambi=$plat + $sist + $port + $esca + $prue;
	$pambi=$ambi * 100 / 9;
	
	
	$dise=$_POST["diseno"];
	$len=$_POST["lenguaje"];
	$colo=$_POST["colores"];
	$prob=$_POST["probar"];
	
	$inter=$dise + $len + $colo + $prob;
	$pinter=$inter * 100 / 4;
	
	
	$ver=$_POST["verdad"];
	$priv=$_POST["privado"];
	$seg=$_POST["seguro"];
	$ataq=$_POST["ataques"];
	
	$info=$ver + $priv + $seg + $ataq;
	$pinfo=$info * 100 / 4;
	
	
	$total= $ambi + $inter + $info;
	$ptotal=$total *100 / 17;

   session_start();
   
  echo ' <!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<html>
	<head>
	
		<title>
			Resultados
		</title>
		<link rel="stylesheet" type="text/css" href="css/CSS.css">	 
		
	</head>
	
	<body>
	
		<div id = "header">
			<div class = "description"> <b>Resulatos Finales</b></div> 
			<div class = "title"> Evaluaci&oacute;n de Resultados </div> 
		</div>	
			
	
	 	<div class = "content"> 
		
			
			
			<h2> Tiempo Estimado </h2>
			
				<!--------------------------------------------------------------------------->
				<div class = "row">
					<div class = "l1 l">				
						<label>'. '<h3>TOTAL DE D&Iacute;AS ESTIMADOS</h3>'.$_SESSION["TotDiasplaneados"].', d&iacute;as'.'</label> <br>
						<label>'.'<h3>N&Uacute;MERO DE ENTREGABLES ESTIMADOS</h3>'. $_SESSION["Einiciales"].', entregables'.'</label> <br>
						<label>'. '<h3>DURACI&Oacute;N REAL DEL ROYECTO</h3>'.$_SESSION["TotDiasrealizados"].', d&iacute;as'.'</label> <br>
						<label>'. '<h3>TOTAL DE ENTREGABLES TERMINADOS</h3>'.$_SESSION["Erealizados"].', entregables'.'</label> <br>
						<label>'. '<h3>TOTAL DE ENTREGABLES NO TERMINADOS</h3>'.$_SESSION["Enorealizados"].', entregables'.'</label> <br>
						<label>'.'<h3>TOTAL DE ENTREGABLES TERMINADOS EN TIEMPO</h3>'. $_SESSION["Erealizadosentiempo"].', entregables'.'</label> <br>
						<label>'.'<h3>TOTAL DE ENTREGABLES NO TERMINADOS EN TIEMPO</h3>'. $_SESSION["Enorealizadosentiempo"].', entregables'.'</label> <br>
					</div>
				</div>
				 <!--------------------------------------------------------------------------->
				
				<h2> Porcentaje de Requerimientos Cumplidos </h2>
			
				 <!--------------------------------------------------------------------------->
				<div class = "row"> 				  
					<div class = "l11 l">
						<label><h3>PORCENTAJE DE CALIDAD RESPECTO AL AMBIENTE DEL USUARIO</h3>'. $pambi.' % </label> <br>
						<label><h3>PORCENTAJE DE CALIDAD DE INTERACCI&Oacute;N DE LA APLICACI&Oacute;N CON EL USUARIO</h3>'. $pinter.' % </label> <br>
						<label><h3>PORCENTAJE DE CALIDAD RESPECTO AL MANEJO DE INFORMACI&Oacute;N</h3>'. $pinfo.' % </label> <br>
						<label><h3>PORCENTAJE DE CALIDAD TOTAL RESPECTO A LOS REQUERIMIENTOS</h3>'. $ptotal.' % </label> <br>
					</div>				
				</div>
			
			<footer><h3>Basado en las normas de ISO/IEC 25000</h3></footer>
		</div> 	
	</body>
</html> ';



?>
