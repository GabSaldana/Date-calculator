
<?php

    $inidias= array();
    $findias= array();

//ARRAY PARA LAS FECHAS IDEALES

if ( !empty($_GET["entregables"]) && is_array($_GET["entregables"]) ) { 
    
    $entregables =$_GET["entregables"];
    $ne=count($entregables);

    echo "<ul>";
    for( $i=0;$i<$ne;$i++ ){ 
            $ent=$entregables[$i];
            echo "<li>";
            if(IAN($ent)){
            	$day = substr($ent,8,strlen($ent));
            	array_push($inidias,$day);
            	echo "Dia: ".$day;
            }else{
            	echo "Entregable: ".$ent;
            }
            echo "</li>";

    }
     echo "</ul>";
}


//ARRAY PARA LAS FECHAS REALES

if ( !empty($_GET["entregablesR"]) && is_array($_GET["entregablesR"]) ) { 
    
    $entregablesR =$_GET["entregablesR"];
    $neR=count($entregablesR);

    echo "<ul>";
    for( $j=0;$j<$neR;$j++ ){ 
            $entR=$entregablesR[$j];
            echo "<li>";
            if(IAN($entR)){
            	$dayR = substr($entR,8,strlen($entR));
            	array_push($findias,$dayR);
            	echo "Dia: ".$dayR;
            }else{
            	echo "Entregable: ".$entR;
            }
            echo "</li>";

    }
     echo "</ul>";
}

//CALCULODE LOS DIAS***********************************

$nentreI=count($inidias)/2;//ENTREGABLES INICIALES
$nentreF=count($findias)/2;//ENTREGABLES FINALES
$nentreFaltntes=abs($nentreF-$nentreI);//ENTREGABLES FALTANTES

$id=calcula_tot_d($inidias);
echo "<br/>TOTAL DIAS INICIALES: ". $id;
$fd=calcula_tot_d($findias);
echo "<br/>TOTAL DIAS REALIZADOS: ". $fd;

echo "<br/>ENTREGABLES INICIALES:". $nentreI;
echo "<br/>ENTREGABLES REALIZADOS:". $nentreF;
echo "<br/>ENTREGABLES FALTANTES:". $nentreFaltntes;

$intime=calcula_en_tiempo($inidias,$findias);//ENTREGABLES EN TIEMPO
echo "<br/>Entrgables REALIZADOS en tiempo: ". $intime;
$nointime=$nentreF-$intime;//ENTREGABLES EN DESTIEMPO
echo "<br/>Entrgables REALIZADOS en destiempo: ". $nointime;

//FUNCTIONS*********************************************

function str_starts_with($haystack, $needle)
{
    return strpos($haystack, $needle) === 0;
}

function str_ends_with($haystack, $needle)
{
    return strrpos($haystack, $needle) + strlen($needle) ===
        strlen($haystack);
}


function IAN($string){
 
	$numeros = array("1", "2", "3", "4","5","6","7","8","9","0");
 
	  for($j=0; $j<count($numeros); $j++){

	  		if(str_starts_with($string,$numeros[$j])){
	  				return true;
	  		}
	  	}
}

function calcula_tot_d($array){

	$d=0;
	$i=0;
	while($i<=count($array)-2){

		$i1=$array[$i];
		$i2=$array[$i+1];
		$resta=($i2-$i1);
		//echo "<br/>i: ".$i." VAL1: ".$i1." ,VAL2: ".$i2." TotD:".$resta;
		$d=$d+$resta;
		$i+=2;
	}
	return $d;
}

function calcula_en_tiempo($ar1,$ar2){

    $arv=array();
    if($ar1>$ar2){
        $arv=$ar2;
    }else{
        $arv=$ar1;
    }

    $i=0;
    $na=0;
    while($i<=count($arv)-2){

        if($ar2[$i]==$ar1[$i]){

            if($ar2[$i+1]==$ar1[$i+1]){
                
                //echo "<br/>ar0: ".$ar2[$i]."ar1: ".$ar2[$i+1];
                //echo "<br/>ar0: ".$ar1[$i]."ar1: ".$ar1[$i+1];
                $na++;
                //echo "<br/>na: ".$na;
            }
        }
        $i+=2;
    }

    return $na;
}

//AQI DEBO PASARTE LO NECESARIO 

session_start();

//idealmente
$_SESSION["TotDiasplaneados"]= $id;
$_SESSION["Einiciales"]= $nentreI;
//realmente
$_SESSION["TotDiasrealizados"]= $fd;
$_SESSION["Erealizados"]= $nentreF;
$_SESSION["Enorealizados"]= $nentreFaltntes;
$_SESSION["Erealizadosentiempo"]= $intime;
$_SESSION["Enorealizadosentiempo"]= $nointime;

//AQUI LLAMO A TU HTML PRINCIPAL

header('Location: formulario.html');



?>
