<?php

$nama = ["Figo", "ica", "meliza", "pitri", "rahmat","edo"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Looping for Array</title>
</head>
<body>
<?php
    foreach ($nama as $absen) { // Foreach akan otomatis menampilkan semua isi array
        echo "<li>$absen</li>";
    }
?>
</body>
</html>