<?php

$paragraph = $_POST['paragraph'];

$badWord = $_POST['badword'];

$paragraphLength = strlen($paragraph);

$censoredParagraph = str_replace($badWord, '***', $paragraph);

$censoredParagraphLength = strlen($censoredParagraph);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>

<body>
    <div>
        <h3>
            Your paragraph is <?php echo $paragraphLength ?> characters long
        </h3>
        <p>
            <?php echo $paragraph; ?>
        </p>
    </div>
    <div>
        <h3>
            Word you want to censor is:
        </h3>
        <p>
            <?php echo $badWord; ?>
        </p>
    </div>
    <div>
        <h3>
            Your censored paragraph is <?php echo $censoredParagraphLength ?> characters long :
        </h3>
        <p>
            <?php echo $censoredParagraph; ?>
        </p>
    </div>


</body>

</html>