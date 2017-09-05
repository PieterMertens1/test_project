<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Overzicht boeken</title>
  </head>
  <body>
    <h1>Overzicht boeken</h1>
    <table>
      <tr>
        <td>Id</td>
        <td>Titel</td>
        <td>Prijs excl BTW</td>
        <td>Prijs incl BTW</td>
        <td>Detail</td>
        <td>Delete</td>
      </tr>

      <?php
      include_once './Database/CRUD/BoekDb.php';
      foreach (BoekDb::getAll() as $huidigBoek) {
          ?>
      <tr>
        <td><?php echo $huidigBoek->boekId; ?></td>
        <td><?php echo $huidigBoek->titel; ?></td>
        <td><?php echo $huidigBoek->prijsExclBtw; ?></td>
        <td><?php echo $huidigBoek->prijsExclBtw * 1.06; ?></td>
        <td><a href="detail.php?boekId=<?php echo $huidigBoek->boekId; ?>">Detail</a></td>
        <td>
            <form method="post" action="delete.php">
                <input type="hidden" name="boekId" value="<?php echo $huidigBoek->boekId; ?>" />
                <input type="submit" value="Verwijderen" />
            </form>
        </td>
      </tr>
      <?php
      }
      ?>
    </table>

    <a href="insert.php">Nieuw boek invoeren</a>
  </body>
</html>
