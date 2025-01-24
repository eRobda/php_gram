<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hledání</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@1.14.0/dist/full.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <header class="bg-white shadow-md">
        <div class="container mx-auto flex justify-between items-center p-4">
            <h1 class="text-2xl font-bold">PHP Gram</h1>
            <nav>
                <a href="../index.php" class="ml-4 text-indigo-600 hover:underline">Domů</a>
                <a href="#" class="ml-4 text-indigo-600 hover:underline">Hledání</a>
                <a href="../add_post.php" class="ml-4 text-indigo-600 hover:underline">Přidat Příspěvek</a>
            </nav>
            <div>
                <a href="../login.php" class="text-indigo-600 hover:underline">Přihlášení</a>
                <a href="../register.php" class="ml-4 text-indigo-600 hover:underline">Registrace</a>
            </div>
        </div>
    </header>
    <main class="container mx-auto p-4">
        <div class="bg-white p-4 rounded-lg shadow-md mb-4">
            <h2 class="text-xl font-bold mb-2">Hledání</h2>
            <form action="search_results.php" method="GET" class="mb-4">
                <input type="text" name="query" placeholder="Hledat..." class="w-full p-2 border rounded-lg mb-2">
                <button type="submit" class="w-full bg-indigo-600 text-white p-2 rounded-lg">Hledat</button>
            </form>
            <!-- Example Search Result -->
            <div class="mb-4">
                <div class="flex items-center mb-2">
                    <img src="https://via.assets.so/img.jpg?w=40&h=40&tc=&bg=" alt="User Avatar"
                        class="w-10 h-10 rounded-full">
                    <div class="ml-2">
                        <p class="font-bold">Uživatel</p>
                        <p class="text-sm text-gray-600">Popis výsledku hledání...</p>
                    </div>
                </div>
            </div>
            <!-- End Example Search Result -->
        </div>
    </main>
</body>

</html>
</form>