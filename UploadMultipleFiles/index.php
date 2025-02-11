<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>Upload multiple files</title>
</head>
<body>
    <main>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <div>
                <label for="files">Выберите файлы для загрузки:</label>
                <input type="file" name="files[]" id="files" multiple required />
            </div>
            <div>
                <input type="submit" value="Upload"/>
            </div>
        </form>
    </main>
</body>
</html>