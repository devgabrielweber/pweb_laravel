<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DOCUMENTO</title>
</head>

<body>
    <p>Mostrando os nomes:</p>
    @foreach ($nomes as $nome)
        Nome n°{{ $loop->index + 1 }}: {{ $nome }}
        <br>
    @endforeach
    <p>Mostrando as idades:</p>
    @foreach ($idades as $idade)
        @if ($idade >= 18)
            Idade n°{{ $loop->index + 1 }}:
            {{ $idade }}
            <br>
        @endif
    @endforeach
</body>

</html>
