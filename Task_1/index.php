<?php
    $random = mt_rand(1,5);
    $img = null;
    $result = null;

    if ($random === 1){
        $result = '短い不在は恋を活気づけるが、長い不在は恋をほろぼす。'.'<br/>'.'<br/>'.'by ミラボー';
        $img = '<img src="img/1.jpeg">';
    }elseif($random === 2){
        $result = '女とパリは留守にしてはだめだ。'.'<br/>'.'<br/>'.'by ナポレオン・ボナパルト';
        $img = '<img src="img/2.jpg">';
    }elseif($random === 3){
        $result = '初恋は、男の一生を左右する。'.'<br/>'.'<br/>'.'by アンドレ・モロワ';
        $img = '<img src="img/3.jpg">';
    }elseif($random === 4){
        $result = '最初のひと目で恋を感じないなら、恋というものはないだろう。'.'<br/>'.'<br/>'.'by クリストファー・マーロウ';
        $img = '<img src="img/4.jpg">';
    }elseif($random === 5){
        $result = '人は恋愛を語ることによって恋愛するようになる。'.'<br/>'.'<br/>'.'by パスカル';
        $img = '<img src="img/5.jpg">';
    }
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Today's philosophy</h1>

    <div class="mes_box">
        <?php echo $img;?>
        <p><?php echo $result;?></p>
    </div> 

    <div class="mes"><?php echo $name;?></div>
</body>

</html>