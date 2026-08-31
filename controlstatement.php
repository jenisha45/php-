<?php
$mark1 = 85;
$mark2 = 92;
$mark3 = 78;
$mark4 = 96;
$mark5 = 88;
// $marks = array();
$count=0;
for($i = 1; $i <= 5; $i++) {
    // $marks[$i] = (int) readline("Enter mark $i: ");
    echo "The marks are: ".${"mark".$i};
    while(${"mark" . $i} < 40) {
        $count++;
    }
}
echo "The number of subjects failed is: " . $count . "<br>";

$totalMarks = $mark1 + $mark2 + $mark3 + $mark4 + $mark5;
$averageMarks = $totalMarks / 5;
$percentage = ($totalMarks / 500) * 100;
echo "Total Marks: " . $totalMarks . "<br>";
echo "Average Marks: " . $averageMarks . "<br>";
echo "Percentage: " . $percentage . "%<br>";
if($totalMarks<250)
    {
        echo "you have failed";

    }
else
    {
        echo "you have passed";
    }

if($percentage >= 90) {
    echo "Grade: A";
} elseif($percentage >= 80) {
    echo "Grade: B";
} elseif($percentage >= 70) {
    echo "Grade: C";
} elseif($percentage >= 60) {
    echo "Grade: D";
} else {
    echo "Grade: F";
}

switch($percentage) {
    case ($percentage >= 90):
        echo "Excellent!";
        break;
    case ($percentage >= 80):
        echo "Very Good!";
        break;
    case ($percentage >= 70):
        echo "Good!";
        break;
    case ($percentage >= 60):
        echo "Average!";
        break;
    default:
        echo "Needs Improvement!";
}


    
?>