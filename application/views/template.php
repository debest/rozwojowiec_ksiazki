<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="projekt testowy">
        <meta name="keywords" content="książki">
        <?php foreach ($styles as $file => $type) echo HTML::style($file, array('media' => $type)), PHP_EOL ?>
        <?php foreach ($scripts as $file) echo HTML::script($file), PHP_EOL ?>
    </head>
    <body>
        <div id="top">
            <h1>Książki</h1>
        </div>
        <div id="content">
            <?=$content?>
        </div>
        <div id="footer">
            <p>&copy; Dominik Baranowski 2014. Wszelkie prawa zastrzeżone</p>
        </div>
    </body>
</html>