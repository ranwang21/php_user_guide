<?php

const HTTP_OK = 200;
const CONTENT_TYPE_JSON_HEADER = 'Content-Type: application/json; charset=UTF-8';
$results = ['a', 'b', 'c', 'd'];

// Assigne un type de contenu JSON a la réponse
header(CONTENT_TYPE_JSON_HEADER);

// Assigne le status de la réponse: 200 OK
http_response_code(HTTP_OK);

// Sérialise en JSON le résultat
echo json_encode($results);
