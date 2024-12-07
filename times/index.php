<?php
require_once("components/table.php");
require_once("models/Team.php");

$title = "Times";
?>
<!DOCTYPE html>
<html lang="en">
<?php include_once 'components/head.php'; ?>

<body>
  <div class="p-4">
    <div class="p-4">
      <h1 class="text-2xl font-bold">Times</h1>

      <div class="mt-2">
        <?php
        $team = new Team();
        $teams = $team->getAll();

        table(["Nome", "Pontuação", "Editar", "Apagar"], $teams);
        ?>
      </div>
    </div>
  </div>
</body>

</html>