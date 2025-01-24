<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: ../login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Můj Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@1.14.0/dist/full.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <header class="bg-white shadow-md">
        <div class="container mx-auto flex justify-between items-center p-4">
            <h1 class="text-2xl font-bold">PHP Gram</h1>
            <nav>
                <a href="../index.php" class="ml-4 text-indigo-600 hover:underline">Domů</a>
                <a href="../search/" class="ml-4 text-indigo-600 hover:underline">Hledání</a>
                <a href="../add_post.php" class="ml-4 text-indigo-600 hover:underline">Přidat Příspěvek</a>
            </nav>
            <div>
                <a href="../scripts/logout.php" class="text-indigo-600 hover:underline">Odhlásit se</a>
            </div>
        </div>
    </header>
    <main class="container mx-auto p-4">
        <div class="bg-white p-4 rounded-lg shadow-md">
            <div class="flex items-center mb-4">
                <img src="<?php echo $_SESSION["user"]["pfp"]; ?>" alt="User Avatar" class="w-24 h-24 rounded-full">
                <div class="ml-4">
                    <h2 class="text-2xl font-bold"><?php echo $_SESSION["user"]["username"] ?></h2>
                    <p class="text-gray-600"><?php echo $_SESSION["user"]["bio"] ?></p>
                    <div class="flex mt-2">
                        <div class="mr-4">
                            <span class="font-bold">Příspěvků:</span> 10
                        </div>
                        <div class="mr-4">
                            <span class="font-bold">Sledujících:</span> 150
                        </div>
                        <div>
                            <span class="font-bold">Sleduji:</span> 75
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- Example Post -->
                <div class="bg-white p-4 rounded-lg shadow-md mb-4">
                    <img src="https://via.assets.so/img.jpg?w=600&h=400&tc=&bg=" alt="Post Image"
                        class="w-full rounded-lg mb-2">
                    <p class="text-gray-800">Popis příspěvku...</p>
                </div>
                <!-- End Example Post -->
            </div>
        </div>
    </main>
</body>

</html>