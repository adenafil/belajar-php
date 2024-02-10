<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menampilkan isi $_SERVER</title>
</head>
<body>
<h1>$_SERVER</h1>
<table border="1">
    <?php foreach ($_SERVER as $key => $value) { ?>
    <tr>
        <td><?= $key ?></td>
        <td><?= $value ?></td>
    </tr>
    <?php } ?>
</table>
</body>
</html>