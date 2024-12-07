<?php

$id = isset($_POST["id"]) ? intval($_POST["id"]) : null;

if ($id == null)
  header("Location: index.php");

require_once("models/Team.php");

$team = new Team();
$team->delete($id);

header("Location: index.php");
