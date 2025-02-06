<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Тест из 5 вопросов</title>
</head>
<body>
    <h1>Тест из 5 вопросов</h1>
    <form action="index.php" method="post">
        <label for="name">Имя:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <h3>1. Какой язык используется для веб-программирования?</h3>
        <input type="radio" name="q1" value="a" required> a) Python<br>
        <input type="radio" name="q1" value="b"> b) PHP<br>
        <input type="radio" name="q1" value="c"> c) Java<br>
        <input type="radio" name="q1" value="d"> d) C++<br><br>

        <h3>2. Что такое HTML?</h3>
        <input type="radio" name="q2" value="a" required> a) Язык разметки<br>
        <input type="radio" name="q2" value="b"> b) Протокол<br>
        <input type="radio" name="q2" value="c"> c) Язык программирования<br>
        <input type="radio" name="q2" value="d"> d) База данных<br><br>

        <h3>3. Какой тег используется для создания ссылки?</h3>
        <input type="radio" name="q3" value="a" required> a) &lt;div&gt;<br>
        <input type="radio" name="q3" value="b"> b) &lt;p&gt;<br>
        <input type="radio" name="q3" value="c"> c) &lt;a&gt;<br>
        <input type="radio" name="q3" value="d"> d) &lt;link&gt;<br><br>

        <h3>4. Какая функция используется для вывода данных в PHP?</h3>
        <input type="radio" name="q4" value="a" required> a) echo()<br>
        <input type="radio" name="q4" value="b"> b) print_data()<br>
        <input type="radio" name="q4" value="c"> c) display()<br>
        <input type="radio" name="q4" value="d"> d) echo<br><br>

        <h3>5. Какой символ используется для указания переменной в PHP?</h3>
        <input type="radio" name="q5" value="a" required> a) #<br>
        <input type="radio" name="q5" value="b"> b) $<br>
        <input type="radio" name="q5" value="c"> c) @<br>
        <input type="radio" name="q5" value="d"> d) %<br><br>

        <input type="submit" value="Отправить">
    </form>
</body>
</html>