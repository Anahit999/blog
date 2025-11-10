<!Doctype html>
<html>
    <head>
        <title>My project</title>
</head>
<body>
    <?php
    $price = 18.78;
    echo(round($price)) . "<br>";
    echo(ceil($price)) . "<br>";
    echo(floor($price)) . "<br>";//xndir1
    echo(rand(10, 100)) . "<br>";
    echo(rand(0, 100)/100) . "<br>";
    echo(min(0, 10, 100, 56, 77)) . "<br>";
    echo(max(0, 10, 100, 56, 77)) . "<br>";//xndir2
    $num1 = -15.7;
    $num2 = 8.3;
    echo(abs($num1)) . "<br>";
    echo(abs($num2)) . "<br>";
    echo(pow($num1,2)) . "<br>";
    echo(sqrt($num2)) . "<br>";
    echo(pow($num1,$num2)) . "<br>";//xndir3,bayc es verjiny nayel
    $text = "It is a beutiful flower";
    echo(trim($text)) . "<br>";
    echo(strtolower($text)) . "<br>";
    echo(strtoupper($text)) . "<br>";
    echo(strlen($text)) . "<br>";
    echo(ucfirst($text)) . "<br>";//xndir4
    $sentence = "I love JavaScript, JavaScript is great";
    echo(str_replace("JavaScript", "PHP", $sentence)) . "<br>";
    if(strpos($sentence, "love") !==false){
        echo "true" . "<br>";

    } else {
        "false" . "<br>";
    }
    echo(substr_count($sentence, "JavaScript"));//xndir5,bayc 2rdy chi stacvel,echo(strpos($sentence("JavaScript")));echo(substr_replace("PHP"));
    $email = "user@example.com";
    print_r (explode( "@", $email)) . "<br>";//sxal
    echo(join("at", $email));//sxal
    echo (str_replace("@", "at", "$email")) . "<br>";
    //chhaskaca pahanjy - het glxir toxy???
    echo substr("$email", 4) . "<br>";//xndir6
    function getInitials($name){
        $words = explode(" ", $name);
        $initials = "";
        foreach ($words as $word){
            $initials .= strtoupper($word[0]) . ".";
        }
        return $initials;
    }
    echo getInitials("john smith");
    $fruits = array("orange", "banana", "mango", "avokado", "apple");//xndir7
    print_r(array_count_values($fruits));
    array_pop($fruits);
    print_r($fruits);
    array_push($fruit,"kiwi","pineapple");//error e talis
    print_r($fruit);//error a talis

    ?>
</body>
<html>
