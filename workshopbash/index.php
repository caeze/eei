<?php
require_once('../config.php');
$short = 'WSBS'; #Kürzel des Events
$meal = false;
$info = $error = '';
$E = $events[$short]; #select Event
$freeSpots = getNumberOfRemainingSpots($events[$short]);
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css<?php echo $FILE_REVISION; ?>">
    <title><?php echo "{$E['name']} - {$CONFIG_TERM}"; ?></title>
</head>
<body>
    <div id="center">
        <div class="block">
            <h1><?php echo "{$E['name']} - {$CONFIG_TERM}"; ?></h1>
            <h2 class="description icon clock"><?php echo $E['date'];?></h2>
            <h2 class="description icon marker"><?php echo $E['location'];?></h2>
            <?php echo $freeSpots;?>
            Workshop Bash<br>
            Der Gedanke an unixartige Systeme und die Kommandozeile bereitet dir Unbehagen? Das muss nicht sein! <br>
            In diesem Workshop lernst du am Beispiel der Bourne-again-Shell, dich in einer POSIX Shell zu bewegen und grundlegende Dateioperationen durchzuführen.<br>
            Workshop von Studenten für Studenten. <br>
            <b style='color:red !important;'>Dieser Workshop ist für Studenten im 2. Semester oder höher gedacht!</b><br>
            Melde dich mit deinen Daten unten an, um am Workshop teilzunehmen.<br>
            <b style='color:red !important;'>Ohne Anmeldung ist eine Teilnahme nicht möglich!</b><br>
            Diese Daten werden evtl. auch an das Gesundheitsamt weitergegeben. Solltest du damit nicht einverstanden sein oder falsche Daten angeben, kannst du nicht teilnehmen.<br><br>
        </div>
        <?php
            echo ($h['info'] == '' ? '' : "<div class='block info'>{$h['info']}</div>");
            echo ($h['error'] == '' ? '' : "<div class='block info'>{$h['error']}</div>");
        ?>
        <div class="block>">
            <?php
                if($_SERVER['REQUEST_METHOD'] === 'POST')
                    register($E, $meal);
                showRegistration($E, $meal);
            ?>
        </div>
    </div>
</body>
</html>
