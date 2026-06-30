<html>
    <head>
        <title>Первый пример</title>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1251"/>
        <link href="css/styles.css" rel="stylesheet"type="text/css"/>
        <body>
            <?php
            $title="Наша первая динамическая страница";
            $user_name="Екатерина";
            define("PI",3.141592);
            echo "<h3>$title</h3>";
            echo "<p>","Ваше имя:",$user_name,"</p>";
            echo "<p>","Дата:",date("d-m-Y"), "</p>";
            echo "<p>","Константа pi=",PI,"</p>";
            ?>
            <hr/>
        </body>
    </head>
</html>