<?php
header("HTTP/1.1 403 Forbidden");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>403 Forbidden</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        .forbidden-container {
            text-align: center;
        }

        .number {
            font-size: 120px;
            font-weight: bold;
            background: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAfQAAADICAIAAACRe4S/AAAPrElEQVR4nO3dW1vaSrzHcRICBgEBRcUqpVptXe//bXi/ahe1BfGAJxqUgyDJvmA/7jwDYjiMxv/+fu5Mw8CaWfkxTGYmxtHRUQQAIIv53h8AALB4hDsACES4A4BAhDsACES4A4BAhDsACES4A4BAhDsACES4A4BAhDsACES4A4BAhDsACES4A4BAhDsACES4A4BAhDsACES4A4BAhDsACES4A4BAhDsACES4A4BAhDsACES4A4BAhDsACES4A4BAhDsACES4A4BAhDsACES4A4BAhDsACES4A4BAhDsACES4A4BAhDsACES4A4BAhDsACES4A4BAhDsACES4A4BAhDsACES4A4BAhDsACES4A4BAhDsACES4A4BAhDsACES4A4BAhDsACES4A4BAhDsACES4A4BAhDsACES4A4BAhDsACES4A4BAhDsACES4A4BAhDsACES4A4BAhDsACES4A4BAhDsACES4A4BAhDsACES4A4BAhDsACES4A4BAhDsACES4A4BAhDsACES4A4BAhDsACES4A4BAhDsACES4A4BAhDsACES4A4BAhDsACES4A4BAhDsACES4A4BAhDsACES4A4BAhDsACES4A4BA1nt/AIzx+Pj477//zvbajY2NT58+BX+jRqPRarW63e5gMPA8LxqNxuPxZDKZyWRSqdRsn0FryR+L67rNZrPVarXb7X6/PxgMXNeNRqOWZS0tLaVSqXQ6bdv2bIVrrWRa8KMzjo6O3vszQPX3798/f/7M9tqA4d7r9Wq1WrPZnHCObdvb29vpdHqqD6Cv5I/Fdd16vX57e/v09DT5zHQ6XSgUkslk8MK1VjItKAPhHkYXFxf1en221wYJd8dxKpWK67qLKvANSv5YWq1WpVLp9XrBX1IoFAqFQpAztVYyLSgGY+5h1Ol09BU+/FkQ8OqNRCJXV1e1Wu19S/5Y7u/vy+XyVMkeiUQuLy8rlcqrp2mtZFpQEsI9jNrttqaSu91utVr1PG+qV93c3Nzd3b1XyR9Lt9v9/fv3tPUw1Gg0Li4uJheur5JpQWG4oRo6/X7fP0qbTqe/fv26qMKr1arSL7MsK5/PZzKZeDxuGEav13Mc5+bmpt/v+087OztLp9OxWOztS/5YarXaaM83lUqtrq4m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') no-repeat;
            -webkit-background-clip: text;
            color: transparent;
        }

        .message {
            font-size: 24px;
            color: #555;
        }
    </style>
</head>
<body>

<div class="forbidden-container">
    <div class="number">403</div>
    <div class="message">Forbidden - Access Denied</div>
</div>

</body>
</html>
