<?php
interface Controller
{
    public static function index();
    public static function create();
    public static function save($datos);
    public static function edit();
    public static function update($id);
    public static function destroy($id);
}
