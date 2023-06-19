<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>
<body>
    <div class="container">
        <ul>
            <li><b>Nom :</b> {{ $user->nom }}</li>
            <li><b>Prenom :</b> {{ $user->prenom }}</li>
            <li><b>cne :</b> {{ $user->code_massar }}</li>
            <li><b>Email :</b> {{ $user->email }}</li>
        </ul>
    </div>

</body>
</html>
