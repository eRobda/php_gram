<?php
session_start();
require_once "api/db.php";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $loggedUser = login($email, $password);

    if ($loggedUser !== false) {
        $_SESSION["user"] = $loggedUser;
        header("Location: index.php");
        exit();
    }
    else{
        $message = "Špatné přihlašovací údaje";
    }
}
?>
<!DOCTYPE html>
<html lang="cs"></html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Přihlášení</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@1.14.0/dist/full.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="flex items-center justify-center min-h-screen">
        <div class="w-full max-w-md p-8 space-y-3 bg-white rounded-lg shadow-md">
            <h1 class="text-2xl font-bold text-center">Přihlášení</h1>
            <div class="text-center text-red-500"><?php echo $message; ?></div>
            <form method="POST" class="space-y-6">
                <div class="space-y-1">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email" required class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-indigo-200 focus:border-indigo-300">
                </div>
                <div class="space-y-1">
                    <label for="password" class="block text-sm font-medium text-gray-700">Heslo</label>
                    <input type="password" name="password" id="password" required class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-indigo-200 focus:border-indigo-300">
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input type="checkbox" name="remember" id="remember" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                        <label for="remember" class="ml-2 text-sm text-gray-600">Zapamatovat si mě</label>
                    </div>
                    <a href="forgot_password.php" class="text-sm text-indigo-600 hover:underline">Zapomněli jste heslo?</a>
                </div>
                <button type="submit" class="w-full px-4 py-2 text-white bg-indigo-600 rounded-md hover:bg-indigo-700 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">Přihlásit se</button>
            </form>
            <p class="text-sm text-center text-gray-600">Nemáte účet? <a href="register.php" class="text-indigo-600 hover:underline">Zaregistrujte se</a></p>
        </div>
    </div>
</body>
</html>