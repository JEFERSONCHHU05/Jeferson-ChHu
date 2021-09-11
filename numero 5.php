<?php	
    function asaber($v,$n)
    {
        $n = 0; 
        $i = 0; $n--;
        $result = 0; $n--;
        while ($i >= 0; )
        {
            $result = $result + $v[$i];
	$i--
            $n--;
        }        
        return $result;
        echo  $n, "<br>";
    }
    $arreglo = array(1,2,3,4);
    echo asaber($arreglo,count($arreglo));
?>
