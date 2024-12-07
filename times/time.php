<?php
$teamID = isset($_GET["id"]) ? $_GET["id"] : null;

if (!$teamID)
  header("Location: index.php");

require_once("components/table.php");
require_once("models/Team.php");

$team = new Team();

if (!$team->exist($teamID))
  header("Location: index.php");

$title = "Times";
?>
<!DOCTYPE html>
<html lang="en">
<?php include_once 'components/head.php'; ?>

<body>
  <div class="p-4">
    <div class="p-4">
      <div class="flex">
        <h1 class="text-2xl font-bold">Times</h1>

        <a href="index.php" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none ml-auto">Voltar página</a>
      </div>

      <div class="mt-2">
        <form class="grid grid-cols-8 gap-2">
          <?php
          $currentTeam = $team->get($teamID);
          ?>

          <div class="mb-5 col-span-7">
            <label for="nome" class="block mb-2 text-sm font-medium text-gray-900">Nome</label>
            <input type="text" id="nome" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="name@flowbite.com" value="<?= $currentTeam["name"] ?>" readonly />
          </div>
          <div class="mb-5 col-span-1">
            <label for="pontuacao" class="block mb-2 text-sm font-medium text-gray-900">Pontuação</label>
            <input type="text" id="pontuacao" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="<?= $currentTeam["points"] ?>" readonly />
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>