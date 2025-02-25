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
        var answer ;

        // Функция для загрузки вопроса
        function loadQuestion() 
        {
            let request = new XMLHttpRequest();
            //let answer = getAnswer();
            request.onreadystatechange = function() 
            {
                if (request.readyState === 4 && request.status === 200) 
                {
                    document.getElementById("question_number").innerHTML = request.responseText;
                }
            };
            if(answer==null)request.open("GET", "question.php?q=" + questionNumber, true);
            else request.open("GET", "question.php?q=" + questionNumber+"&a="+answer.value, true);
            //request.open("GET", "question.php?q=" + questionNumber, true);
            //request.open("GET", "question.php?q=" + questionNumber+"?a="+answer_no, true);
            request.send();
        }

        function nextQuestion()
        {   
            answer = getAnswer();
            questionNumber++;  // Увеличиваем только после первого вызова
            loadQuestion();
        }        
        function prevQuestion()
        {
            if (questionNumber > 0) // Проверка, чтобы не уйти в отрицательные значения
            { 
                questionNumber--;  // Сначала уменьшаем
                loadQuestion();    // Потом загружаем вопрос
            }        
        }

        function getAnswer()
        {
            let answer = document.querySelector(`input[name="question_${questionNumber}"]:checked`);
            if (answer!=null) console.log(answer.value);
            else console.log("No answer");
            return answer;
        }



    </script>
</body>
</html>