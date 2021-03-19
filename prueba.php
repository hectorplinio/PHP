<html>
<head>
    <title>Prueba PHP</title>
    <style>
        #caja{
            text-align:center;
        }
    </style>
</head>
<body>
<div id="caja">
<?php
    for ($i=1; $i<11;$i++){
        for($j=0; $j<$i; $j++){
            if($i==1){
                $num[$j]=1;
                echo $num[$j]."<br/>";
            }
            else if($j==0)
            {
                $num[$j]=1;
                echo $num[$j]." | ";
            }
            else if($j==($i-1)){
                $num[$j]=1;
                echo $num[$j]."<br/>";
            }
            else 
            {
                $num[$j]=$pascal[$j]+$pascal[$j-1];
                echo $num[$j]." | ";
            }
        }
        $pascal=$num;
    }
?>
</div>

</body>
</html>