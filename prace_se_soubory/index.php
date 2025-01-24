<?php
$jsonFilePath = 'data.json';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $age = $_POST['age'];

    $data = [
        'name' => $name,
        'age' => $age
    ];

    $jsonData = json_encode($data, JSON_PRETTY_PRINT);

    file_put_contents($jsonFilePath, $jsonData);
}

$jsonData = file_exists($jsonFilePath) ? file_get_contents($jsonFilePath) : '{}';
$data = json_decode($jsonData, true);
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Práce se soubory</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@1.14.0/dist/full.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-6">
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold mb-6">Práce se soubory</h1>
        <form method="post" class="bg-white p-6 rounded-lg shadow-md">
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Jméno:</label>
                <input type="text" id="name" name="name" required class="input input-bordered w-full">
            </div>
            <div class="mb-4">
                <label for="age" class="block text-sm font-medium text-gray-700">Věk:</label>
                <input type="number" id="age" name="age" required class="input input-bordered w-full">
            </div>
            <button type="submit" class="btn btn-primary">Odeslat</button>
        </form>

        <?php if (!empty($data)): ?>
            <div class="mt-6 bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-2xl font-bold mb-4">Uložená data</h2>
                <p class="text-lg">Jméno: <?php echo htmlspecialchars($data['name']); ?></p>
                <p class="text-lg">Věk: <?php echo htmlspecialchars($data['age']); ?></p>
            </div>
        <?php endif; ?>

        <div class="mt-6 bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold mb-4">Zdrojový kód</h2>
            <pre class="bg-gray-100 p-4 rounded-lg overflow-x-auto"><?php echo htmlspecialchars(file_get_contents(__FILE__)); ?></pre>
        </div>
    </div>
</body>
</html>