<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Secret Fininvest Dashbord</title>
</head>
<body>
    @if ($isLoggedIn)
    <h1>Benvenuto Cavaliere</h1>
    <h2>Ecco lo stato dei suoi Minions</h2>
    <ul>
        @foreach ($minions as $minion)
            <li>{{ $minion['name'] }} {{ $minion['lastname'] }} - Stato: {{$minion['status']}}
                {{-- Aggiungo solo se primo elemento --}}
                @if ($loop->first)
                    -> (Il prediletto)
                @endif
            </li>
        @endforeach
    </ul>
@else
    <h1>Vai Via</h1>
@endif
</body>
</html>