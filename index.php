<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Grade Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="grade-box">
        <h2>Student Grade Calculator</h2>
        <form method="POST" action="">
            <label>Quiz (out of 100):</label>
            <input type="number" name="quiz" required>
            <label>Assignment (out of 100):</label>
            <input type="number" name="assignment" required>
            <label>Final Exam (out of 100):</label>
            <input type="number" name="exam" required>
            <button type="submit" name="submit">Calculate</button>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $quiz = $_POST['quiz'];
            $assignment = $_POST['assignment'];
            $exam = $_POST['exam'];

            $total = ($quiz * 0.2) + ($assignment * 0.3) + ($exam * 0.5);
            $grade = '';

            if ($total >= 90) $grade = 'A';
            elseif ($total >= 80) $grade = 'B';
            elseif ($total >= 70) $grade = 'C';
            elseif ($total >= 60) $grade = 'D';
            else $grade = 'F';

            echo "<div class='result'>
                    <p><strong>Total:</strong> " . round($total, 2) . "%</p>
                    <p><strong>Grade:</strong> $grade</p>
                  </div>";
        }
        ?>
    </div>
</body>
</html>
