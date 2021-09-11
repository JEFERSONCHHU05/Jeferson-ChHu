<?php	
    function asaber($v,$n)
    {
        $n = 0; 
        $i = 0; $n--;
        $result = 0; $n--;
        while ($i >= 0)
        {
            $result = $result + $v[$i];
	$i=$i-2;
            $n=$i-2;
        }        
        return $result;
        echo  $n, "<br>";
    }
    $arreglo = array(1,2,3,4);
    Echo asaber($arreglo,count($arreglo));
?>
