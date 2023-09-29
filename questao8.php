
<?php
$n1 = 2;
$n2 = 3;
If ($n1 < $n2){
    echo "Ordem crescente: ",$n1, " e " ,$n2, "<br>";
    echo "Ordem decrescente: ",$n2, " e ", $n1, "<br>";
} else if($n1 > $n2){
    echo "Ordem crescente: ",$n2," e ",$n1,"<br>";
    echo "Ordem decrescente: ",$n1," e ",$n2, "<br>";
    
}else{
    echo "Os números são iguais";
}

