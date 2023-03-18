<?php

namespace App\Repo;

interface UserInterface{

    public function all();

    public function create(array $data);

    public function showid(int $id);

    public function update($id, array $data);

    public function delete($id);
}