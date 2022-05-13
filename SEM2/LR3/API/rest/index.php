<?php
require_once '../vendor/autoload.php';
require_once "../classes/crews.php";
require_once "../classes/collectors.php";
$app = new Silex\Application();

//Бригады:
$app->get('/crews/list', function () use ($app){
	$crew = new Crews;
	$list = $crew->read();
	return $app->json($list);
});

$app->post('/crews/add-item', function () use ($app){
    $crew = new Crews;
    $message = json_decode(file_get_contents('php://input'),true);
    $crew->create($message);
	$lastid = $crew->lastID();
	return $app->json(array("create-crew" => "yes", "create-id" => $lastid));
});
$app->post('/crews/update-item', function ()use ($app) {
    $crew = new Crews;
    $message = json_decode(file_get_contents('php://input'),true);
	$idGroup = $message["id"];
    $crew->update($message);
    return $app->json(array("update-group" => "yes", "id_update" => $idGroup));
});

$app->post('/crews/delete-item', function ()use ($app) {
	$crew = new Crews;
    $message = json_decode( file_get_contents('php://input'),true);
    $id = intval($message["id"]);
	if ($crew->exists($id)) {
            $crew->delete($id);
			return $app->json(array("delete-crew" => "yes", "id_delete" => $id));
	} else {
		return $app->json(array("delete-crew" => "no"));
	}
});
//Сборщики

$app->get('/collectors/list', function () use ($app){
	$collector = new Collectors;
    $needcrews = true;
	$list = $collector->read($needcrews);
	return $app->json($list);
});
$app->post('/collectors/upload-image', function () use ($app){
    $collector = new Collectors;
    $collector->uploadImage();
    return $app->json(array("upload-image" => "yes"));
});
$app->post('/collectors/list-filtered', function () use ($app){
    $collector = new Collectors;
    $needcrews = true;
    $message = json_decode(file_get_contents('php://input'),true);
    $list = $collector->read($needcrews,$message["id"]);
    return $app->json($list);
});
$app->post('/collectors/add-item', function () use ($app) {
    $message = json_decode(file_get_contents('php://input'),true);
    $collector = new Collectors();
    $collector->create($message);
    $lastid = $collector->lastID();
    return $app->json(array("create-collector" => "yes", "create-id" => $lastid));
});
$app->post('/collectors/update-item', function () use ($app){
    $collector = new Collectors;
    $message = json_decode(file_get_contents('php://input'),true);
    $id = $message["id"];
    $collector->deleteImage($id);
    $collector->update($message);
	return $app->json(array("update-student" => "yes", "id_update" => $id));
});

$app->post('/collectors/delete-item', function () use ($app) {
    $collector = new Collectors();
    $message = json_decode( file_get_contents('php://input'),true);
    $id = intval($message["id"]);
    if ($collector->exists($id)) {
        $collector->deleteImage($id);
        $collector->delete($id);

        return $app->json(array("delete-collector" => "yes", "id_delete" => $id));
    } else {
        return $app->json(array("delete-collector" => "no"));
    }
});

$app->run();