<?php
    echo '<pre>';
    print_r($_FILES);

    foreach ($_FILES['files']['name'] as $key => $name) {
        $fullpath = __DIR__ . '\..\uploads\\' . $name;
        move_uploaded_file($_FILES['files']['tmp_name'][$key], $fullpath);

        if ($_FILES['files']['type'][$key] === 'image/jpeg') {
            echo '<img src="../uploads/' . $name . '" alt="' . $fullpath . '" height="500px">';
        } elseif ($_FILES['files']['type'][$key] === 'audio/mpeg') {
            echo '<audio controls ip="player">';
            echo '<source src="../uploads/' . $name . '">';
            echo '</audio>';
        } elseif ($_FILES['files']['type'][$key] === 'video/mp4') {
            echo '<video controls ip="player">';
            echo '<source src="../uploads/' . $name . '">';
            echo '</video>';
        }
    }

    echo '</pre>';
?>
