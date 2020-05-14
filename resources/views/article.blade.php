<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/api/articles" method="POST">
        @csrf
        <label>
            Autheur
            <input type="text" name="user_id" value="1">
        </label>
        <label>
            Titre
            <input type="text" name="title">
        </label>
        <label>
            Contenu
            <input type="text" name="content">
        </label>
        <input type="submit" value="Valider">
    </form>
</body>
</html>
