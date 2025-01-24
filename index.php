<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@1.14.0/dist/full.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <header class="bg-white shadow-md">
        <div class="container mx-auto flex justify-between items-center p-4">
            <h1 class="text-2xl font-bold">PHP Gram</h1>
            <nav>
                <a href="profile/" class="ml-4 text-indigo-600 hover:underline">Můj Profil</a>
                <a href="search/" class="ml-4 text-indigo-600 hover:underline">Hledání</a>
                <a href="../add_post.php" class="ml-4 text-indigo-600 hover:underline">Přidat Příspěvek</a>
            </nav>
            <div>
                <a href="login.php" class="text-indigo-600 hover:underline">Přihlášení</a>
                <a href="register.php" class="ml-4 text-indigo-600 hover:underline">Registrace</a>
            </div>
        </div>
    </header>
    <main class="container mx-auto p-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="col-span-2">
                <div class="bg-white p-4 rounded-lg shadow-md mb-4">
                    <h2 class="text-xl font-bold mb-2">Příspěvky</h2>
                    <!-- Example Post -->
                    <div class="mb-4">
                        <div class="flex items-center mb-2">
                            <img src="https://via.assets.so/img.jpg?w=40&h=40&tc=&bg=" alt="User Avatar" class="w-10 h-10 rounded-full">
                            <div class="ml-2">
                                <p class="font-bold">Uživatel</p>
                                <p class="text-sm text-gray-600">Před 1 hodinou</p>
                            </div>
                        </div>
                        <img src="https://via.assets.so/img.jpg?w=600&h=400&tc=&bg=" alt="Post Image" class="w-full rounded-lg mb-2">
                        <p class="text-gray-800">Popis příspěvku...</p>
                    </div>
                    <!-- End Example Post -->
                </div>
            </div>
            <div class="hidden md:block">
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <h2 class="text-xl font-bold mb-2">Doporučení</h2>
                    <!-- Example Recommendation -->
                    <div class="flex items-center mb-2">
                        <img src="https://via.assets.so/img.jpg?w=40&h=40&tc=&bg=" alt="User Avatar" class="w-10 h-10 rounded-full">
                        <div class="ml-2">
                            <p class="font-bold">Uživatel</p>
                            <p class="text-sm text-gray-600">Návrh</p>
                        </div>
                    </div>
                    <!-- End Example Recommendation -->
                </div>
            </div>
        </div>
    </main>
</body>
</html>