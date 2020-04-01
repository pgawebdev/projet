<?php

require_once'Database.php';



class Model
{
    private function getConnection()
    { 
        $db = new Database();

        return $db->connect(); 
    }

    public function getTodos()
    {
         $pdo = $this->getConnection();
         $query = 'SELECT * FROM todos';

         $PdoStatement = $pdo->prepare($query);
         $PdoStatement->execute();

         print_r($PdoStatement->fetchAll());    
    }    

    public function createTodo($todo)
    {
  
        $pdo = $this->getConnection();
        $query = 'INSERT INTO todos(title, description) VALUES (:title, :description)';

        $PdoStatement = $pdo->prepare($query);
        $PdoStatement->execute($todo);   
    }

    public function updateTodo()
    {
        $pdo = $this->getConnection();
        $query = 'UPDATE `todos` SET `title`=:title,`description`= :description WHERE 1';

        $PdoStatement = $pdo->prepare($query);

        return $PdoStatement->execute($todo);
    }
    
    // public function deleteTodo()
    // {
    //     $pdo = $this->getConnection();
    //     $query = 'DELETE FROM `todos` WHERE 0';

    //     $PdoStatement = $pdo->prepare($query);
    //     $PdoStatement->execute();   
    // }
}    


$model = new Model();

$response = $model->createTodo([
    "title" => "Test",
    "description" => "Test desc",
]);

var_dump($response);

$model->getTodos();