<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>

    </style>
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <h3>Teste para Desenvolvedor em Laravel (API)</h3>

    <div id="api-docs"></div>

    <a href="/api-docs" target="_blank">
        <button>Ir para a Documentação da API</button>
    </a>

    <script>
        var xhr = new XMLHttpRequest();
        xhr.open('GET', '/api-docs', true);
        xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
        var json = JSON.parse(xhr.responseText);
        // Exibir o JSON na página
        document.getElementById('api-docs').innerText = JSON.stringify(json, null, 2);
        }
        };
        xhr.send();
    </script>

</body>

</html>
