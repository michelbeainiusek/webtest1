<?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $answers = [
                'q1' => 'b',
                'q2' => 'b',
                'q3' => 'a'
            ];

            $score = 0;
            foreach ($answers as $question => $correctAnswer) {
                if (isset($_POST[$question]) && $_POST[$question] === $correctAnswer) {
                    $score++;
                }
            }

            $totalQuestions = count($answers);
            $percentage = ($score / $totalQuestions) * 100;

            echo "<div id='result' class='result'>You scored $score out of $totalQuestions. Your grade is " . number_format($percentage, 2) . "%.</div>";
        }
        ?>