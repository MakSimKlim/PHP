<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>Upload file</title>
</head>
<body>
    <main>
        <form enctype="multipart/form-data" action="inc/upload.php" method="post">
            <div>
                <label for="file">Выберите файл:</label>
                <input type="file" id="file" name="file" accept=".txt"/>
            </div>
            <div>
                <input type="submit" value="Upload"/>
            </div>
        </form>
    </main>
</body>
</html>
