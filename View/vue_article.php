<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./asset/style/style.css">
    <title>Ajouter Article</title>
</head>
<body>
<div class="container">
    <br>
    <h1>Ajouter un Article</h1>
    <br>
    <form method="post" action="">
      <div class="mb-3">
      <label class="form-label">Nom Article</label>
        <input type="text" class="form-control" name="nom_article">
      </div>
      <div>
      <label class="form-label">Prix Article</label>
        <input type="text" class="form-control" name="prix_article">
      </div>
      <div>
      <p><input type="submit" class="btn btn-primary m-3" name="valider" value="Ajouter"></p>
      </div>
    </form>

</div>
</body>
</html>