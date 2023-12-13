<?php
require_once 'db/Database.php';
interface Modelo
{
    public function findAll();
    public function findById($id);
    public function store($datos);
    public function updateById($id, $datos);
    public function destroyById($id);
}
