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
<body class="font-mono">
    <div class="py-8 min-h-[20%] flex items-center justify-center">
        <img width="24" height="24" src="https://img.icons8.com/material-two-tone/24/pdf-2.png" alt="pdf-2"/>
        <p class="px-8">
            hello dear user.
            <br>
            This application goal is to generate a PDF from the data entered through the fields below. have fun
        </p>
    </div>

    <div class="py-8 h-[70%] flex items-center justify-center">
        <form action="pdf.php" method="post">
            <h2 class="p-8">PDF Generator</h2>

            <!-- first-name -->
            <div class="py-4">
                <label for="first_name">First Name</label>
                <div>
                    <input id="first_name" type="text" placeholder="First Name" name="first_name">
                </div>
            </div>

            <!-- last-name -->
            <div class="py-4">
                <label for="last_name">Last Name</label>
                <div>
                    <input id="last_name" type="text" placeholder="Last Name" name="last_name">
                </div>
            </div>

            <!-- email -->
            <div class="py-4">
                <label for="email">Email</label>
                <div>
                    <input id="email" type="email" placeholder="email" name="email">
                </div>
            </div>

            <!-- contact -->
            <div class="py-4">
                <label for="contact">Contact</label>
                <div>
                    <input id="contact" type="tel" placeholder="Contact" name="contact">
                </div>
            </div>

            <!-- text -->
            <div class="py-4">
                <label for="text">Text</label>
                <div>
                    <textarea id="text" placeholder="text" name="text"></textarea>
                </div>
            </div>

            <!-- submit -->
            <div class="py-4 hover:text-indigo-600 ">
                <div>
                    <button class="hover:uppercase" id="submit" type="submit" name="submit">submit</button>
                </div>
            </div>
        </form>
    </div>

</body>
</html>