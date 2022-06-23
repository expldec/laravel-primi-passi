<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagamenti</title>
</head>
<body>
    <header>
        <ul>
            <li>
                <a href="{{ route('home') }}">Home</a>
            </li>
            <li>
                <a href="{{ route('disburse') }}">Pagamenti</a>
            </li>
        </ul>
    </header>
    <h2>Ecco i suoi Pagamenti in uscita</h2>
    <ul>
        @foreach ($creditors as $creditor)
            <li>{{ $creditor['name'] }} - A pagare: {{$creditor['amount']}}
                {{-- Aggiungo solo se primo elemento --}}
            </li>
        @endforeach
    </ul>
</body>
</html>