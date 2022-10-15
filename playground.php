<!doctype html>
<html>
<head>
    <title>Playground</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/playground.css">
</head>
<body>
    
<form action="" method="get">
    <ul>
        <li>
            <label for="name">Enter Your Name: </label>
            <input id="name" name="name" />
        </li>

        <li>
            <label for="comments">Your Comments:</label>
            <textarea id="comments" name="comments"></textarea>
        </li>

        <li>
            <label for="css">Do You Like CSS?</label>
            <input type="checkbox" name="css" id="css" />
        </li>
    
        <li>
            <label for="">Favourite Language?</label>
            <input type="radio" /> CSS
            <input type="radio" /> HTML
            <input type="radio" /> JavaScript
            <input type="radio" /> Ruby
        </li>

        <li><input type="submit" value="Go!" /><li>
    </ul>

</form>

<footer>
    <a href="index.php">Back to homepage </a>
</footer>
</body>

</html>