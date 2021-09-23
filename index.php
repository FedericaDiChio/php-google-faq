<?php 
require_once "partials/data.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Faq</title>
</head>
<body>
    <header></header>    
    <?php foreach ($faqs as $faq) { ?>
        <h2><?php echo $faq["title"] ?></h2>
        <?php foreach($faq["answers"] as $answer) echo $answer ?></p> 
    <?php } ?>    
    <footer></footer>
</body>
</html>