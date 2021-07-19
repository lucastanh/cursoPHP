<head>
    <title>Names</title>
</head>

<body>
    <?php
        $names = [
            "Lucas",
            "Vinicius",
            "Castanheiro"
        ]
    ?>

    <ol>
        <?php foreach($names as $name):?>
            <li>
                <a href="08-get.php?name=<?php echo $name ?>"><?php echo $name ?></a>
            </li>
        <?php endforeach?>
    </ol>
</body>

</html>