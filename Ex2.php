<html>
 
<head>
	
	<title>Quiz results</title>
  <style>
    body
      {
        background: linear-gradient(#e66465, #9198e5);
        width: 800px;
        height:800px;
      }
    </style>
	
	
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
  
    echo "Question 1: Who was the first president of the U.S.?";
    echo "<br>";
    echo "Your Answer: ".$answer1;
    echo "<br>";
    echo "Correct Answer: A) George Washington ";
    echo "<br>";
    echo "<br>";
    echo "Question 2: Where is the city of Branson?";
    echo "<br>";
    echo "Your Answer: ".$answer2;
    echo "<br>";
    echo "Correct Answer: C) Missouri";
    echo "<br>";
    echo "<br>";
    echo "Question 3: What language is mostly used to create basic websites?";
    echo "<br>";
    echo "Your Answer: ".$answer3;
    echo "<br>";
    echo "Correct Answer: C) HTML/CSS";
    echo "<br>";
    echo "<br>";
    echo "Question 4: What is the state of Missouri's nickname?";
    echo "<br>";
    echo "Your Answer: ".$answer4;
    echo "<br>";
    echo "Correct Answer: A) Show-Me state";
    echo "<br>";
    echo "<br>";
    echo "Question 5: What month and year am I graduating?";
    echo "<br>";
    echo "Your Answer: ".$answer5;
    echo "<br>";
    echo "Correct Answer: C) May 2024";
    echo "<br>";
    echo "<br>";
    echo "$totalCorrect / 5 correct";
    echo "<br>";
    echo "$percentage %";
  ?>
	
 
</body>
 
</html>