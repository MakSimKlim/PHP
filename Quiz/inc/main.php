<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Quitz</title>
</head>
<body onload="nextQuestion()">
    <h1 id="question_number" name="question_number">Quitz</h1>
    <form id="question" action="result.php" method="post">
            
    </form>
    <script>

        var questionNumber = -1;

        // Функция для загрузки вопроса
        function loadQuestion() 
        {
            let request = new XMLHttpRequest();
            request.onreadystatechange = function() 
            {
                if (request.readyState === 4 && request.status === 200) 
                {
                    document.getElementById("question_number").innerHTML = request.responseText;
                }
            };
            request.open("GET", "question.php?q=" + questionNumber, true);
            request.send();
        }

        function nextQuestion(number)
        {      
            questionNumber++;  // Увеличиваем только после первого вызова
            loadQuestion();
        }        
        function prevQuestion(number)
        {
            if (questionNumber > 0) // Проверка, чтобы не уйти в отрицательные значения
            { 
                questionNumber--;  // Сначала уменьшаем
                loadQuestion();    // Потом загружаем вопрос
            }        
        }

    </script>
</body>
</html>