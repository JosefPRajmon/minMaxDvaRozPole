

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
        $dataArray = [];
        for ($i=0;$i<$firstArray;$i++){

            for ($y=0;$y<$secondArray;$y++){
                $dataArray[$i][$y] = rand();
            }
        }
        $minMaxArray= [];
        $minMaxID =0;
    //    echo "<br>".count($pes)."<br>";
        for ($i=0;$i<count($dataArray);$i++){
            for ($y=0;$y<$secondArray;$y++){
                if ($i===0 && $y ===0){
                   echo $dataArray[$i][$y];
                }
                else{
                echo ", ".$dataArray[$i][$y];}
                $minMaxArray[$minMaxID] =$dataArray[$i][$y];
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