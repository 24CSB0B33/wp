<!DOCTYPE html>
<html>

<head>
    <title>VISA Verification</title>
    <style>
        body {
            background-image: url('https://t4.ftcdn.net/jpg/02/43/54/91/360_F_243549193_1jAgIBe6vliz11uoz9mWu6GsAlKIVtCM.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            text-align: center;
            font-family: Arial, sans-serif;
        }

        h1 {
            color: white;
            text-shadow: 2px 2px 4px black;
        }

        fieldset {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 50px;
            width: 300px;
            border: 5px solid gold;
            border-radius: 10px;
            box-shadow: 0px 4px 6px gray;
            margin: auto;
        }

        fieldset:hover {
            border: 7px solid green;
        }

        select,
        button {
            margin-top: 10px;
            padding: 5px;
            width: 100%;
            background-color: gold;
        }
    </style>
</head>

<body>
    <h1>VISA Enquiry</h1>
    <fieldset>
        <legend>Country Selection</legend>
        <form action="visa_process.php" method="POST">
            <label for="country">Choose your country of travel:</label><br><br>
            <select name="country" id="country">
                <option value="" selected disabled>--Select a country--</option>
                <option value="USA">USA</option>
                <option value="CAN">Canada</option>
                <option value="IND">India</option>
                <option value="UK">United Kingdom</option>
                <option value="AUS">Australia</option>
            </select><br><br>
            <button type="submit">Check Visa</button>
        </form>
    </fieldset>
</body>

</html>
