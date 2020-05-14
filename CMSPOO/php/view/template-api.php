<?php
$tabAssoJson = [];
$tabAssoJson["request"] = $_REQUEST;

$classeApi  = $_REQUEST["classeApi"] ?? "User";
$methodeApi = $_REQUEST["methodeApi"] ?? "";

// ON VA VERIFIER SI CETTE METHODE EXISTE DANS MON ApiUser
// ASSEZ SPECIAL EN PHP
// https://www.php.net/manual/fr/function.is-callable
$codeApi = "Api$classeApi::$methodeApi";
if (is_callable($codeApi))
{
    // SI PHP A TROUVE LA METHODE
    // ALORS, ON PEUT L'ACTIVER...
    $codeApi();
}

// ON VA RECUPERER LA REPONSE DANS LA PROPRIETE
$tabAssoJson["confirmation"] = ApiUser::$confirmation;
$tabAssoJson["cleApi"]       = ApiUser::$cleApi;

// CONVERTIR LE TABLEAU ASSOCIATIF EN TEXTE FORMATTE EN JSON
// https://www.php.net/manual/fr/function.json-encode.php
$texteJSON = json_encode($tabAssoJson, JSON_PRETTY_PRINT);

echo $texteJSON;