<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

/**$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});*/

//get all todos
$app->get('/todos', function($request, $response, $args){
	$sth = $this->db->prepare("SELECT * FROM tasks ORDER BY task");
	$sth->execute();
	$todos = $sth->fetchAll();
	return $this->response->withJson($todos);
});

//Get a single todo by $id
$app->get('/todos/[{id}]', function($request, $response, $args){
	$sth = $this->db->prepare("SELECT * FROM tasks WHERE id=:id");
	$sth->bindParam("id", $args['id']);
	$sth->execute();
	$todos = $sth->fetchObject();
	return $this->response->withJson($todos);
});

//Search for todo with given search term in their name
$app->get('/todos/search/[{query}]', function($request, $response, $args){
	$sth = $this->db->prepare("SELECT * FROM tasks WHERE UPPER(task) LIKE :query ORDER BY task");
	$query = "%". $args['query']. "%";
	$sth->bindParam("query", $query);
	$todos = $sth->fetchAll();
	return $this->response->withJson($todos);
});

//Add a new todo
$app->post('/todos', function($request, $response){
	$input = $request->getParsedBody();
	$sql = "INSERT INTO tasks (task) VALUES (:task)";
	$sth = $this->db->prepare($sql);
	$sth->bindParam("task", $input['task']);
	$sth->execute();
	$input['id'] = $this->db->lastInsertId();
	return $this->response->withJson($input);
});

//Delete a todos with given id
$app->delete('/todos/[{id}]', function($request, $response, $args){
	$sth = $this->db->prepare("DELETE FROM tasks WHERE id=:id");
	$sth->bindParam("id", $args['id']);
	$sth->execute();
	$todos = $sth->fetchAll();
	return $this->response->withJson($todos);
});

//Update todos with given id
$app->put('/todos/[{id}]', function($request, $response, $args){
	$input = $request->getParsedBody();
	$sql = "UPDATE tasks SET task=:task WHERE id=:id";
	$sth = $this->db->prepare($sql);
	$sth->bindParam("id", $args['id']);
	$sth->bindParam("task", $input['task']);
	$sth->execute();
	$input['id'] = $args['id'];
	return $this->response->withJson($input);
});