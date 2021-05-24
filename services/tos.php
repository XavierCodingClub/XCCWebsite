<head>
    <title>Xavier Coding Club</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet" />
    <link href="../index.css" rel="stylesheet" type="text/css" />
    <link rel="icon" href="../images/elogo_1.png">
</head>



<body>
    <script src="/utils.js"></script>
    <?php
    $menu = fopen("../menu.html", "r") or die("ERROR! UNABLE TO OPEN MENU FILE");
    echo fread($menu, filesize("../menu.html"));
    fclose($menu);
    ?>

    <div class="content">
    <br>
    <br>
    <h1>Terms of service</h1>
    <p>We have to make a proper terms of service soon</P>
    </div>
</body>