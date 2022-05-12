<?php

namespace Model;

class CitaServicio extends ActiveRecord {
    protected static $tabla = 'citasServicios';
    protected static $columnasDB = ['id', 'citasId', 'servicioId'];

    public $id;
    public $citasId;
    public $servicioId;


    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->citasId = $args['citasId'] ?? '';
        $this->servicioId = $args['servicioId'] ?? '';
    }

}