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

         return $PdoStatement->fetchAll();    
    }    

    public function createTodo($todo)
    {
  
        $pdo = $this->getConnection();
        $query = 'INSERT INTO todos(title, description) VALUES (:title, :description)';

        $PdoStatement = $pdo->prepare($query);
        return $PdoStatement->execute($todo);   
    }

    // public function updateTodo()
    // {
    //     $pdo = $this->getConnection();
    //     $query = 'UPDATE `todos` SET `title`=:title,`description`= :description WHERE 1';

    //     $PdoStatement = $pdo->prepare($query);

    //     return $PdoStatement->execute($todo);
    // }
    
    public function deleteTodo($todo)
    {
        $pdo = $this->getConnection();
        $query = 'DELETE FROM `todos` WHERE id = :id';

        $PdoStatement = $pdo->prepare($query);
        $values =[
            'id' => $todo['id'],
        ];

       return $PdoStatement->execute($values);   
    }
}    



