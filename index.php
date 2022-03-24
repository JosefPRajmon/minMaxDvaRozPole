

<?php
if (isset($_POST["submit"])){
    $firstArray = $_POST["firstArray"];
    $secondArray = $_POST["secondArray"];}
?>
<form method="post">
    <label><input type="number" name="firstArray" placeholder="první rozměr pole" value=<?php if(isset($_POST["submit"])) {echo $firstArray;} ?> ></label>
    <label><input type="number" name="secondArray" placeholder="druhý rozměr pole" value=<?php  if(isset($_POST["submit"])) {echo $secondArray;} ?> ></label><br>
    <input type="submit" name="submit">
</form>
<?php
    if (isset($_POST["submit"])){
        $pes = [];
        for ($i=0;$i<$firstArray;$i++){

            for ($y=0;$y<$secondArray;$y++){
                $pes[$i][$y] = rand();
            }
        }
        $minMaxArray= [];
        $minMaxID =0;
    //    echo "<br>".count($pes)."<br>";
        for ($i=0;$i<count($pes);$i++){
            for ($y=0;$y<$secondArray;$y++){
                if ($i===0 && $y ===0){
                   echo $pes[$i][$y];
                }
                else{
                echo ", ".$pes[$i][$y];}
                $minMaxArray[$minMaxID] =$pes[$i][$y];
                $minMaxID++;
            }
        }

        $numbers = $minMaxArray;
        $min = min($numbers);
        echo "<br>" ."minimum: ". $min;
        $max = max($numbers);
        echo "<br>" ."maximum: ". $max;
    }
?>