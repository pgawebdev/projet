<?php

class TodoController
{
    private $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function getALL()
    {
        $data = $this->model->getTodos();

        if(count($data) > 0)
        {
            $response = [
                'status' => 'success',
                'message' => 'Les données ont bien été récupérées',
                'payload' => $data,
            ];
        } else 
        {
            $response = [
                'status' => 'error',
                'message' => 'Aucune données dans la table',
            ];
        }
        echo json_encode($response);
    }

    public function addTodo($request)
    {

        if(isset($request['title'],$request['description']))
        {
            $todo = [
                'title' => $request['title'],
                'description' => $request['description'],
            ];

            if($this->model->createTodo($todo)) {
                $response = [
                    'status' => 'success',
                    'message' => 'La nouvelle tâche a bien été enrgistrée',
                ];
            } else {
                $response = [
                    'status' => 'error',
                    'message' => 'Echec de création de la nouvelle tâche',
                ];
            }
            echo json_encode(($response));
        }

    }

}





