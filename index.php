<?php
//線形探索
//検索する配列データ
$array=[1,3,4,5,6,7,8,9,11,13,14,17,18,28];
// var_dump($array);
//検索する値
$search_value=7;

//「調べた値」と「探す値が」一致したとき、indexを保存する変数
//初期値はエラー(-1)に設定
$index=-1;

//繰り返し
for($i=0;$i<count($array);$i++){
  //条件分岐「調べた値」と「探す値」が一致した時にindexを保存して処理終了
  if($array[$i]==$search_value){
    $index=$i;
    break;
  }
}

echo $array[$index]."<br>".$index."番目"."<br>";

//二分探索
$array2=[1,2,15,3,17,4,16,5,18,19,6,7,20,8,9,10,11,12,13,14];
$array2=bubble_sort($array2);
$search_value2=9;

$index2=-1;

$left=0;

$right=count($array2)-1;

while($left<=$right){

  $middle=floor(($left+$right)/2);

  if($array2[$middle]==$search_value2){
    $index2=$middle;
    break;
  }elseif($array2[$middle]<$search_value2){
    $left=$middle+1;
  }else{
    $right=$middle-1;
  }
}

echo $array2[$index2]."<br>".$index2."番目"."<br>";


//バブルソート
// $array3=[2,3,1,5,63,7,9,10,15,11,12,13,14,19,17,18,22,21,20];

function bubble_sort($array3){
  for($i=0;$i<count($array3);$i++){
    for($j=1;$j<count($array3);$j++){
      if($array3[$j]<$array3[$j-1]){
        $tmp=$array3[$j-1];
        $array3[$j-1]=$array3[$j];
        $array3[$j]=$tmp;
      }

    }
  }
  print_r($array3);
  return $array3;
}

?>