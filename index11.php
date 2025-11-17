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
    array_push($fruits,"kiwi","pineapple");
    print_r($fruits);
    array_unshift($fruits, "kiwi");
    print_r($fruits);
    $student = [
        "anun" => "Anahit"
        "tariq" => "18"
        "gnahatakan" => "19"
    ];
    echo "all:<br>";
    foreach(array_keys($student) as $key){
        echo $key . "<br>";
    }//error e talis
    echo:"<br>";
    foreach ($student as $value){
        echo $value . "<br>";
    if (array_key_exists("tariq", $student))
        echo"exist:<br>"
    }else{

    echo"doesn't exist:<br>"
    }
    $student["qaxaq"] = "Erevan";
    echo "<br>";
    print_r($student);//xndir9 en erroric heto mnacacy chem pordzel, bayc kodery iti chisht lini
    $numbers = [5, 12, 8, 130, 44, 3];
    echo(max($numbers)) . "<br>";
    echo(min($numbers)) . "<br>";
    if (in_array("44", $numbers)){
        echo "exist 44"
    }else{
        echo "doesn't exist 44"
    }//menak es mi hatiky error tvec
    $evenNumbers = array_filter($numbers, function($num)){
        return $num %2 == 0;
    }print_r($evenNumbers);//es mekn el error tvec//xndir10


        
$name = $lastname = $email = $gender = $username = $phone = $address = $date = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $lastname = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $gender = test_input($_POST["gender"]);
  $username = test_input($_POST["name"]);
  $phone = test_input($_POST["name"]);
  $address = test_input($_POST["name"]);
  $date = test_input($_POST["name"]);
  $password = test_input($_POST["name"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Forms</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  Last Name:  <input type="text" name="lastname">
  E-mail: <input type="text" name="email">
  <input type="submit" name="submit" value="Submit"> 
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <br><br>
  Username: <input type="text" username="username">
  <br><br>
  Phone: <input type="text" name="phone">
  <input type="submit" name="submit" value="Submit"> 
  <br><br>
  Address: <textarea name="comment" rows="5" cols="40"></textarea>
  <input type="submit" name="submit" value="Submit">
  <br><br>
  Date: <input type="text" name="date">
  <input type="submit" name="submit" value="Submit">
  Password: <input type="text" name="date">
  <input type="submit" name="submit" value="Submit">
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $lastname;
echo "<br>";
echo $email;
echo "<br>";
echo $gender;
echo "<br>";
echo $username;
echo "<br>";
echo $phone;
echo "<br>";
echo $address;
echo "<br>";
echo $date;
echo "<br>";
echo $password;
echo "<br>";         
    ?>
</body>
<html>
