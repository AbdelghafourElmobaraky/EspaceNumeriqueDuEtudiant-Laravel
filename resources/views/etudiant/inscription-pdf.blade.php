<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
  <title>Informations de l'étudiant</title>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      text-align: center;
    }
    .card {
      width: 600px;
      margin: 0 auto;
      padding: 4px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .card img {
      width: 150px;
      border-radius: 50%;
      margin-bottom: 10px;
    }
    .card h2 {
      margin-top: 0;
    }
    .card p {
      margin-bottom: 5px;
    }
    .card .info-line {
      display: flex;
      justify-content: space-between;
    }
  </style>
</head>
<body>
  <div class="card">
    <h2>Informations de l'étudiant</h2>

    <div class="info-line">
      <p><strong>CNE:</strong> {{ $etudiants->cne }}</p>
      <p><strong>Nom:</strong> {{ $etudiants->nom }}</p>
    </div>
    <div class="info-line">
      <p><strong>Prénom:</strong> {{ $etudiants->prenom }}</p>
      <p><strong>Nom arabe:</strong> {{ $etudiants->nom_ar }}</p>
    </div>
    <div class="info-line">
      <p><strong>Prénom arabe:</strong> {{ $etudiants->prenom_ar }}</p>
      <p><strong>CIN:</strong> {{ $etudiants->cin }}</p>
    </div>
    <div class="info-line">
      <p><strong>Adresse:</strong>  {{ $etudiants->adresse }}</p>
      <p><strong>Date de naissance:</strong> {{ $etudiants->lieu_de_naissance }}</p>
    </div>
    <div class="info-line">
      <p><strong>Lieu de naissance:</strong> {{ $etudiants->lieu_de_naissance }}</p>
      <p><strong>Diplôme:</strong> {{ $etudiants->id_diplome }}</p>
    </div>
    <div class="info-line">
      <p><strong>Filière:</strong> {{ $etudiants->id_filiere }}</p>
      <p><strong>Email:</strong> {{ $etudiants->email }}</p>
    </div>
    <div class="info-line">
      <p><strong>Téléphone:</strong> {{ $etudiants->telephone }}</p>
      <p><strong>Nationalité:</strong> {{ $etudiants->code_pays }}</p>
    </div>
  </div>
</body>
</html>
