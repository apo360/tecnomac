<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de E-mails</title>
</head>
<body>
    <h1>Lista de E-mails Recebidos</h1>

    @if ($emails->isEmpty())
        <p>Nenhum e-mail recebido.</p>
    @else
        @foreach ($emails as $email)
            <div>
                <p><strong>Remetente:</strong> {{ $email->from[0]->mail }} ({{ $email->from[0]->personal }})</p>
                <p><strong>Assunto:</strong> {{ $email->subject }}</p>
                <p><strong>Data:</strong> {{ $email->date }}</p>
                <p><strong>Conteúdo:</strong></p>
                <div>{!! $email->getHTMLBody() !!}</div>
            </div>
            <hr>
        @endforeach
    @endif
</body>
</html>
