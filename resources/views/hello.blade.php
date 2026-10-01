{{-- resources/views/hello.blade.php --}}
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Hola</title>
</head>
<body>
<h1>{{ $greeting }}</h1>
<p>Laravel {{ app()->version() }} · PHP {{ PHP_VERSION }}</p>
</body>
</html>
