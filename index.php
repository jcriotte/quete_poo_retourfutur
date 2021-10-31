<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Retour vers le futur</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Poppins:wght@100&display=swap" rel="stylesheet">
    <?php
    // set the default timezone to use.
    date_default_timezone_set('UTC');
    ?>
</head>

<body>

    <div class="containers">
        <h1>Retour vers le futur, vive le voyage dans l'espace temps</h1>

        <section class="container">
            <?php $destinationDate = new DateTime('2015-10-21 04:29:00');
            ?>
            <div>
                <h2>Destination date</h2>
            </div>
            <div class="destination">

                <div class="compteur">
                    <div class="label">
                        <p>Month</p>
                    </div>
                    <div class="time">
                        <p><?php echo $destinationDate->format('M'); ?></p>
                    </div>
                </div>
                <div class="compteur">
                    <div class="label">
                        <p>Day</p>
                    </div>
                    <div class="time">
                        <p><?php echo $destinationDate->format('d'); ?></p>
                    </div>
                </div>
                <div class="compteur">
                    <div class="label">
                        <p>Year</p>
                    </div>
                    <div class="time">
                        <p><?php echo $destinationDate->format('Y'); ?></p>
                    </div>
                </div>
                <div class="compteur">
                    <div class="label">
                        <p>am ou pm</p>
                    </div>
                    <div class="time">
                        <p><?php echo $destinationDate->format('A'); ?></p>
                    </div>
                </div>
                <div class="compteur">
                    <div class="label">
                        <p>HOUR</p>
                    </div>
                    <div class="time">
                        <p><?php echo $destinationDate->format('h'); ?></p>
                    </div>
                </div>
                <div class="compteur">
                    <div class="label">
                        <p>MIN</p>
                    </div>
                    <div class="time">
                        <p><?php echo $destinationDate->format('i'); ?></p>
                    </div>
                </div>
            </div>
        </section>

        <section class="container">
            <div>
                <h2>Present date</h2>
            </div>


            <div class="present">
                <?php $presentDate = new DateTime;
                ?>
                <div class="compteur">
                    <div class="label">
                        <p>Month</p>
                    </div>
                    <div class="time">
                        <p><?php echo $presentDate->format('M'); ?></p>
                    </div>
                </div>
                <div class="compteur">
                    <div class="label">
                        <p>Day</p>
                    </div>
                    <div class="time">
                        <p><?php echo $presentDate->format('d'); ?></p>
                    </div>
                </div>
                <div class="compteur">
                    <div class="label">
                        <p>Year</p>
                    </div>
                    <div class="time">
                        <p><?php echo $presentDate->format('Y'); ?></p>
                    </div>
                </div>
                <div class="compteur">
                    <div class="label">
                        <p>am ou pm</p>
                    </div>
                    <div class="time">
                        <p><?php echo $presentDate->format('A'); ?></p>
                    </div>
                </div>
                <div class="compteur">
                    <div class="label">
                        <p>HOUR</p>
                    </div>
                    <div class="time">
                        <p><?php echo $presentDate->format('h'); ?></p>
                    </div>
                </div>
                <div class="compteur">
                    <div class="label">
                        <p>MIN</p>
                    </div>
                    <div class="time">
                        <p><?php echo $presentDate->format('i'); ?></p>
                    </div>
                </div>
            </div>

        </section>
        <section class='container'>
            <div>
                <h2>Interval</h2>
            </div>

            <div class="result">

                <?php $interval = $presentDate->diff($destinationDate);
                ?>
                <div class="compteur">
                    <div class="label">
                        <p>Month</p>
                    </div>
                    <div class="time">
                        <p><?php echo $interval->m; ?></p>
                    </div>
                </div>
                <div class="compteur">
                    <div class="label">
                        <p>Day</p>
                    </div>
                    <div class="time">
                        <p><?php echo $interval->d; ?></p>
                    </div>
                </div>
                <div class="compteur">
                    <div class="label">
                        <p>Year</p>
                    </div>
                    <div class="time">
                        <p><?php echo $interval->y; ?></p>
                    </div>
                </div>
                <div class="compteur">
                    <div class="label">
                        <p>HOUR</p>
                    </div>
                    <div class="time">
                        <p><?php echo $interval->h; ?></p>
                    </div>
                </div>
                <div class="compteur">
                    <div class="label">
                        <p>MIN</p>
                    </div>
                    <div class="time">
                        <p><?php echo $interval->i; ?></p>
                    </div>
                </div>
            </div>

        </section>
    </div>
</body>

</html>