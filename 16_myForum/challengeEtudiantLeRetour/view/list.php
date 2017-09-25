
    <html>
      <head>
        <title>Enregistrement Etudiants</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
          <style>
              .red{
                  color: red;
              }
          </style>
      </head>
      <body>
        <?php if ($var == "success"): ?>
            <h2 class="red">Elève bien enregistré</h2>
        <?php else: ?>
            <h2 class="red">Une erreur s'est produite</h2>
        <?php endif; ?>
        <h1>Formulaire enregistrement étudiants</h1>
        <h2>Liste d'étudiants</h2>
        <?php if (!empty($students)): ?>
          <table>
            <thead>
              <th>Prénom</th>
              <th>Nom</th>
              <th>Age</th>
              <th>Email</th>
              <th>Langue</th>
            </thead>
            <tbody>
              <?php foreach($students as $s): ?>
              <tr>
                <td><?=$s['prenom']?></td>
                <td><?=$s['nom']?></td>
                <td><?=$s['age']?></td>
                <td><?=$s['email']?></td>
                <td><?=$s['langue']?></td>
              </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
        <?php else: ?>
            <p>Il n'y a pas d'étudiants enregistrés</p>
        <?php endif; ?>
        
      </body>
    </html>