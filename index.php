<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF Generator</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Tailwind CSS -->
</head>
<body>

    <div>
        <form action="pdf.php" method="post">
            <h2>PDF Generator</h2>

            <!-- first-name -->
            <div>
                <label for="first_name">First Name</label>
                <div>
                    <input id="first_name" type="text" placeholder="First Name" name="first_name">
                </div>
            </div>

            <!-- last-name -->
            <div>
                <label for="last_name">Last Name</label>
                <div>
                    <input id="last_name" type="text" placeholder="Last Name" name="last_name">
                </div>
            </div>

            <!-- email -->
            <div>
                <label for="email">Email</label>
                <div>
                    <input id="email" type="email" placeholder="email" name="email">
                </div>
            </div>

            <!-- contact -->
            <div>
                <label for="contact">Contact</label>
                <div>
                    <input id="contact" type="tel" placeholder="Contact" name="contact">
                </div>
            </div>

            <!-- your-Text -->
            <div>
                <label for="text">Text</label>
                <div>
                    <textarea id="text" placeholder="text" name="text"></textarea>
                </div>
            </div>

            <!-- submit-btn -->
            <div>
                <div>
                    <button id="submit" type="submit" name="submit">submit</button>
                </div>
            </div>
        </form>
    </div>

</body>
</html>