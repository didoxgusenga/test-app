<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funny Libs Game</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
           
            padding: 20px;
        }
        .container{
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        form {
            margin: 20px auto;
            max-width: 300px;
            padding: 20px;
            font-size: 12px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        input[type="text"] {
            width: 100%;
            padding: 6px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .result {
            margin-top: 20px;
            font-size: 12px;
            color: #555;
        }
        .php-result{
            margin-top: 20px;
            font-size: 12px;
            line-height: 15px;
            color: #555;
            background-color: #e7f3fe;
            border-left: 6px solid #2196F3;
            padding: 10px;
            border-radius: 4px;
        }
        
        h1 {
            text-align: center;
            color: #333;
            font-size: 16px;
        }
        p {
            text-align: center;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
    <h1>Funny Libs Game</h1>
    <p>Fill in the blanks and see the funny story!</p>
    <form method="POST">
        <label for="color">Enter a color:</label>
        <input type="text" id="color" name="color" required>
        
        <label for="pluralNoun">Enter a plural noun:</label>
        <input type="text" id="pluralNoun" name="pluralNoun" required>
        
        <label for="celebrity">Enter a celebrity:</label>
        <input type="text" id="celebrity" name="celebrity" required>
        
        <button type="submit">Create Story</button>
    </form>
    <div class="php-result">
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $color = htmlspecialchars($_POST['color']);
        $pluralNoun = htmlspecialchars($_POST['pluralNoun']);
        $celebrity = htmlspecialchars($_POST['celebrity']);

        echo "<div class='result'>";
        echo "Once upon a time, in a <strong>$color</strong> forest, there were magical <strong>$pluralNoun</strong>. ";
        echo "They loved to dance and sing during <strong>$celebrity</strong>. It was the funniest celebration ever!";
        echo "</div>";
    }
    ?>
    </div>
    </div>
  
</body>
</html>