<?php

require "vendor/autoload.php";
<<<<<<< HEAD
use App\QuestionManager;

session_start();
try {
    // 1. Initialize question manager
    $manager = new QuestionManager;
    $manager->initialize();

    // 2. Check if answers are set in session
    if (!isset($_SESSION['answers'])) {
        throw new Exception('Missing answers');
    }

    // 3. Compute score
    $_SESSION['user_score'] = $score = $manager->computeScore($_SESSION['answers']);

=======

session_start();

// 4.

use App\QuestionManager;
$answers = new QuestionManager;
$score = null;
$correctAnswers = new QuestionManager;
try {
    $manager = new QuestionManager;
    $manager->initialize();

    if (!isset($_SESSION['answers'])) {
        throw new Exception('Missing answers');
    }
    $score = $manager->computeScore($_SESSION['answers']);
>>>>>>> e1d1807a89ef1d09ac8c3c87394f537ad219cb05
} catch (Exception $e) {
    echo '<h1>An error occurred:</h1>';
    echo '<p>' . $e->getMessage() . '</p>';
    exit;
}
<<<<<<< HEAD

=======
>>>>>>> e1d1807a89ef1d09ac8c3c87394f537ad219cb05
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quiz</title>
</head>
<body>

<<<<<<< HEAD
    <h1>Thank You</h1>
    <p style="color: gray">You've completed the exam.</p>

    <h3>Congratulations <?php echo $_SESSION['user_fullname']; ?>! Your score is <?php echo $score; ?> out of <?php echo $manager->getQuestionSize(); ?></h3>

    <p> Your Answers: </p>
    <ol>
        <?php
        $cAnswers = $manager->getAnswers();

        foreach ($_SESSION['answers'] as $index => $answer) {
            if (!isset($answer)) continue;
        
            $cAnswer = $cAnswers[$index];
            $isCorrect = $answer == $cAnswer;
            $color = $isCorrect ? "blue" : "red";
            $status = $isCorrect ? "correct" : "wrong";
        
            echo "<li>$answer (<span style='color:$color'>$status</span>)</li>";
        }
        ?>
    </ol>

    <button type="submit" onclick="window.location.href='download.php'">Download results.</button>

=======
<h1>Thank You</h1>

<p style="color: gray">
    You've completed the exam.
</p>

<h3>
    Congratulations <?php echo $_SESSION['user_fullname']; ?>!
    Your score is <?php echo $score; ?> out of <?php echo $manager->getQuestionSize() ;?></h3>

 <p> Your Answers: </p>
  
<ol>
    <?php /*foreach ($answers->getAnswers() as $answer): ?>
        <?php if (!empty($answer)): ?>
            <li><?php echo $answer; ?></li>
        <?php endif; ?>
    <?php endforeach; */?>

    
<?php 
    $cAnswers = [
        'c',
        'd',
        'a',
        'd',
        'c',
        'd',
        'c',
        'c',
        'c',
        'c'
    ];
    
    foreach ($_SESSION['answers'] as $index => $answers) {
        if ($answers == null) {
            continue; // skip the first element
        }
        $cAnswer = $cAnswers[$index - 1]; // subtract 1 to adjust for the null value in $cAnswers
        if ($_SESSION['answers'][$index] == $cAnswer) {
            echo "<li> {$_SESSION['answers'][$index]} " ."(".'<span style="color:blue">'  . "correct"."</span>)</li>";
        } else {
            echo "<li> {$_SESSION['answers'][$index]} " ."(".'<span style="color:red">'  . "wrong"."</span>)</li>";
        }
    }
?>

</ol>
>>>>>>> e1d1807a89ef1d09ac8c3c87394f537ad219cb05
</body>
</html>

<!-- DEBUG MODE -->
<pre>
<?php
//var_dump($_SESSION);
?>
<<<<<<< HEAD
</pre>
=======
</pre>
>>>>>>> e1d1807a89ef1d09ac8c3c87394f537ad219cb05
