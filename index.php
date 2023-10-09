<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>

<body>

    <form action="script.php" method="POST">
        <div>
            <textarea name="paragraph" id="paragraph" cols="20" rows="10" placeholder="insert text"></textarea>
        </div>
        <div>
            <input type="text" name="badword" id="badword" placeholder="insert censored word">
        </div>
        <button type="submit">Submit</button>
    </form>

</body>

</html>