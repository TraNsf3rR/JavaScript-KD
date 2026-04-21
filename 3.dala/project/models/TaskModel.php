<?php

class TaskModel {
    private $file = "data/tasks.json";

    public function getAll() {
        $data = file_get_contents($this->file);
        return json_decode($data, true);
    }

    public function saveAll($tasks) {
        file_put_contents($this->file, json_encode($tasks, JSON_PRETTY_PRINT));
    }
}