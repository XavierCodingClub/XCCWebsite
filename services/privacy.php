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
    <h1>Privacy Policy</h1>
    <p>We do not collect Personal Data, Derivative data, Financial Data, or Mobile data. However we use google’s api and services on this website and they may collect Social Network Data, and 3rd party Data.</P>
    </div>
</body>