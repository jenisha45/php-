<?php
echo "<h1>Array types in PHP</h1><br>";
echo "<h2>Indexed Array</h2><br>";
$fruits = array("Apple", "Banana", "Cherry", "Date", "Elderberry");
for($i=0;$i<count($fruits);$i++){
    echo $fruits[$i]."<br>";
}

echo "<h2>Associative Array</h2><br>";
$movies=[
    "Inception"=>"2010",
    "The Dark Knight"=>"2008",
    "Interstellar"=>"2014",
    "The Matrix"=>"1999"];
foreach($movies as $key =>$value)
    {
        echo "Movie: ".$key." - Year: ".$value."<br>";
    }
echo "<h2>Multidimensional Array</h2><br>";
$students = array(
    array("Name" => "John", "Age" => 20, "Major" => "Computer Science"),
    array("Name" => "Jane", "Age" => 22, "Major" => "Mathematics"),
    array("Name" => "Mike", "Age" => 21, "Major" => "Physics")
);
print_r($students);

echo "<h2>Array Functions</h2><br>";
$girls = array("jenisha", "rita", "gita", "sita");
$boys = array("ram", "shyam", "hari", "Heidi");
$student = array_merge($girls, $boys);
print_r($student);
sort($student);
echo "<br>";
rsort($student);
echo "<br>";

if(in_array("Interstellar", $movies)){
    echo "Interstellar is in the movie list.<br>";
}
else{
    echo "Interstellar is not in the movie list.<br>";
}

?>