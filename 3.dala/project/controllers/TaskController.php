<?php
require_once "models/TaskModel.php";

class TaskController {
    private $model;

    public function __construct() {
        $this->model = new TaskModel();
    }

    public function handleRequest() {
        $action = $_GET['action'] ?? $_POST['action'];

        switch ($action) {

            case 'get':
                echo json_encode($this->model->getAll());
                break;

            case 'add':
                $tasks = $this->model->getAll();
                $title = $_POST['title'];

                $tasks[] = [
                    "id" => time(),
                    "title" => $title,
                    "status" => "not-done"
                ];

                $this->model->saveAll($tasks);
                echo json_encode(["success" => true]);
                break;

            case 'delete':
                $tasks = $this->model->getAll();
                $id = $_POST['id'];

                $tasks = array_filter($tasks, fn($t) => $t['id'] != $id);

                $this->model->saveAll(array_values($tasks));
                echo json_encode(["success" => true]);
                break;

            case 'update':
                $tasks = $this->model->getAll();
                $id = $_POST['id'];
                $title = $_POST['title'];

                foreach ($tasks as &$task) {
                    if ($task['id'] == $id) {
                        $task['title'] = $title;
                    }
                }

                $this->model->saveAll($tasks);
                echo json_encode(["success" => true]);
                break;

            case 'toggle':
                $tasks = $this->model->getAll();
                $id = $_POST['id'];

                foreach ($tasks as &$task) {
                    if ($task['id'] == $id) {
                        $task['status'] = $task['status'] === 'done' ? 'not-done' : 'done';
                    }
                }

                $this->model->saveAll($tasks);
                echo json_encode(["success" => true]);
                break;
        }
    }
}