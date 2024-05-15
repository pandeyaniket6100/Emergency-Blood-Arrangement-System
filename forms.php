<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SMS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }
        fieldset {
            border: 1px solid #ccc;
            border-radius: 3px;
            padding: 10px;
            margin-bottom: 20px;
        }
        legend {
            font-weight: bold;
            margin-bottom: 10px;
        }
        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>PHP SMS</h1>
        <form method="post" action="send.php">
            <label for="number">Number</label>
            <input type="text" name="number" id="number" placeholder="Enter recipient's number">
            <label for="message">Message</label>
            <textarea name="message" id="message" placeholder="Enter your message"></textarea>
            <fieldset>
                <legend>Provider</legend>
                <label>
                    <input type="radio" name="provider" value="infobip" checked> Infobip
                </label>
                <br>
                <label>
                    <input type="radio" name="provider" value="twilio"> Twilio
                </label>
            </fieldset>
            <button type="submit">Send</button>
        </form>
    </div>

</body>
</html>