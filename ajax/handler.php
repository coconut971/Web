<?php


$db = new PDO('mysql:host=localhost;dbname=registration;charset=utf8', 'root', '', [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);

/**
 * On  analyse la demande faite via l'URL (GET) afin de déterminer si on souhaite récupérer les messages ou en écrire un
 */
$task = "list";

if(array_key_exists("task", $_GET)){
  $task = $_GET['task'];
}

if($task == "write"){
  postMessage();
} else {
  getMessages();
}


function getMessages(){
  global $db;

  //  On requête la base de données pour sortir les 20 derniers messages
  $resultats = $db->query("SELECT * FROM messages ORDER BY created_at DESC LIMIT 20");
  //  On traite les résultats
  $messages = $resultats->fetchAll();
  //  On affiche les données sous forme de JSON
  echo json_encode($messages);
}
/**
 * Si on veut écrire , il faut analyser les paramètres envoyés en POST et les sauvegarder dans la base de données
 */
function postMessage(){
  global $db;
  //  Analyser les paramètres passés en POST (author, content)
  
  if(!array_key_exists('author', $_POST) || !array_key_exists('content', $_POST)){

    echo json_encode(["status" => "error", "message" => "One field or many have not been sent"]);
    return;

  }

  $author = $_POST['author'];
  $content = $_POST['content'];

  //  Créer une requête qui permettra d'insérer ces données
  $query = $db->prepare('INSERT INTO messages SET author = :author, content = :content, created_at = NOW()');

  $query->execute([
    "author" => $author,
    "content" => $content
  ]);

  //  Donner un statut de succes ou d'erreur au format JSON
  echo json_encode(["status" => "success"]);
}
