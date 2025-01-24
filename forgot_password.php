<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zapomenuté heslo</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@1.14.0/dist/full.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="flex items-center justify-center min-h-screen">
        <div class="w-full max-w-md p-8 space-y-3 bg-white rounded-lg shadow-md">
            <h1 class="text-2xl font-bold text-center">Zapomenuté heslo</h1>
            <form action="forgot_password.php" method="POST" class="space-y-6">
                <div class="space-y-1">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email" required class="w-full px-4 py-2 border rounded-md focus:ring focus:ring-indigo-200 focus:border-indigo-300">
                </div>
                <button type="submit" class="w-full px-4 py-2 text-white bg-indigo-600 rounded-md hover:bg-indigo-700 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">Obnovit heslo</button>
            </form>
            <p class="text-sm text-center text-gray-600">Vzpomněli jste si? <a href="login.php" class="text-indigo-600 hover:underline">Přihlásit se</a></p>
        </div>
    </div>
</body>
</html></div>