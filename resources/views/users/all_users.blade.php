<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h5>Informação de Contacto:</h5>
    <ul>
        <li>{{ $contactInfo['name'] }}</li>
        <li>{{ $contactInfo['phone'] }}</li>
    </ul>
    <h5>Olá {{ $myName }}, aqui terás uma lista de todos os utilizadores</h5>
    <ul>
        @foreach ($contactsArr as $contact)
            <li>{{ $contact['id'] }}: {{ $contact['name'] }} - {{ $contact['phone'] }} </li>
        @endforeach

    </ul>
</body>

</html>
