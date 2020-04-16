<?php

require_once 'data/glossary.php';

$jsonGlossary = json_encode($glossary, JSON_FORCE_OBJECT);

echo $jsonGlossary;