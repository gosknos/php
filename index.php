<html>
<head>
    <title> My friends book</title>
</head>
<body>
<form action="index.php" method="post">
    Name: <input type="text" name="name">
    <input type="submit" value="Add new friend">
    <input type="text" name="nameFilter" value="<?php if(empty($_POST['nameFilter'])) $nameFilter = NULL;?>">
    <input type="submit" name="filter" value="Filter list">
</form>
<?php
include('header.html');

echo "<h1>My best friends: </h1>";

$filename = 'friends.txt';
$name = $_POST['name'];
$nameFilter = $_POST['nameFilter'];
$file = fopen( $filename, "r" );
$file2 = fopen( $filename, "r" );

while (!feof($file)) {
    if ($nameFilter != NULL){
        if (strstr(fgets($file), "$nameFilter", false) != NULL){
            $ligne = fgets($file2)."<br/>";
            echo $ligne;
        }
        else {
            fgets($file2);
        }
    }
    else { echo fgets($file)."<br/>";}
}

// appending to file
$file = fopen( $filename, "a+" );
if ($file != false)
{
    echo "<b>$name</b>";
    fwrite($file,"$name\n");
    fclose($file);
}
include('footer.html');
?>