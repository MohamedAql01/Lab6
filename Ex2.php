<html>
 
<head>
	
	<title>Quiz results</title>
	
	
</head>
 
<body>
 
 
		<h1>Results</h1>
		
  <?php
    $Q1 = $_POST["Q1"];
    $Q2 = $_POST["Q2"];
    $Q3 = $_POST["Q3"];
    $Q4 = $_POST["Q4"];
    $Q5 = $_POST["Q5"];
    $answer1 = $_POST["question-1-answers"];
    $answer2 = $_POST["question-2-answers"];
    $answer3 = $_POST["question-3-answers"];
    $answer4 = $_POST["question-4-answers"];
    $answer5 = $_POST["question-5-answers"];
    $correct1 = $_POST["correct1"];
    $correct2 = $_POST["correct2"];
    $correct3 = $_POST["correct3"];
    $correct4 = $_POST["correct4"];
    $correct5 = $_POST["correct5"];
  
    $totalCorrect = 0;
    
    if ($answer1 == "A") { $totalCorrect++; }
    if ($answer2 == "C") { $totalCorrect++; }
    if ($answer3 == "C") { $totalCorrect++; }
    if ($answer4 == "A") { $totalCorrect++; }
    if ($answer5 == "C") { $totalCorrect++; }
    $percentage = ($totalCorrect / 5) * 100;
  
    echo "Question 1: $Q1";
    echo "<br>";
    echo "Your Answer: $answer1";
    echo "<br>";
    echo "Correct Answer: $correct1";
    echo "<br>";
    echo "<br>";
    echo "Question 2: $Q2";
    echo "<br>";
    echo "Your Answer:  $answer2";
    echo "<br>";
    echo "Correct Answer: $correct2";
    echo "<br>";
    echo "<br>";
    echo "Question 2: $Q3";
    echo "<br>";
    echo "Your Answer:  $answer3";
    echo "<br>";
    echo "Correct Answer: $correct3";
    echo "<br>";
    echo "<br>";
    echo "Question 2: $Q4";
    echo "<br>";
    echo "Your Answer:  $answer4";
    echo "<br>";
    echo "Correct Answer: $correct4";
    echo "<br>";
    echo "<br>";
    echo "Question 2: $Q5";
    echo "<br>";
    echo "Your Answer:  $answer5";
    echo "<br>";
    echo "Correct Answer: $correct5";
    echo "<br>";
    echo "$totalCorrect / 5 correct";
    echo "<br>";
    echo "$percentage %";
  ?>
	
 
</body>
 
</html>