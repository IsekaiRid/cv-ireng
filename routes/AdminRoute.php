<?php

$routeCore = new RouteCore();
$routeCore->route("/", "ControllerAuth::login", ['GET']);
$routeCore->route("/register", "ControllerAuth::regis", ['GET']);
$routeCore->route("/prosesRegister", "ControllerAuth::proses_regis", ['POST']);

$routeCore->handleRequest();


