<?php
// Input data
$subjects = [
    'Bangla' => 80,
    'English' => 90,
    'Math' => 130
];

// Function to calculate GPA based on percentage
function calculateGPA($percentage) {
    if ($percentage >= 80) {
        return 'A+';
    } elseif ($percentage >= 70) {
        return 'A';
    } elseif ($percentage >= 60) {
        return 'A-';
    } elseif ($percentage >= 50) {
        return 'B';
    } elseif ($percentage >= 40) {
        return 'C';
    } else {
        return 'Fail';
    }
}

// Maximum marks for each subject (assumed to be 150)
$maxMarksPerSubject = 150;

// Variables to store total marks and grades
$totalMarks = 0;
$subjectGrades = [];

// Calculate total marks and subject-wise grades
foreach ($subjects as $subject => $marks) {
    $totalMarks += $marks;
    $percentage = ($marks / $maxMarksPerSubject) * 100;
    $subjectGrades[$subject] = calculateGPA($percentage);
}

// Calculate total percentage and GPA
$totalPercentage = ($totalMarks / ($maxMarksPerSubject * count($subjects))) * 100;
$totalGPA = calculateGPA($totalPercentage);

// Display the result
echo "<h3>Result Report</h3>";
echo "<table border='1' cellpadding='5'>";
echo "<tr><th>Subject</th><th>Marks</th><th>Grade</th></tr>";
foreach ($subjectGrades as $subject => $grade) {
    echo "<tr><td>$subject</td><td>{$subjects[$subject]}</td><td>$grade</td></tr>";
}
echo "<tr><td colspan='2'><strong>Total Marks</strong></td><td><strong>$totalMarks</strong></td></tr>";
echo "<tr><td colspan='2'><strong>Total GPA</strong></td><td><strong>$totalGPA</strong></td></tr>";
echo "</table>";
?>
