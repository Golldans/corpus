<?php

namespace App\Repositories;

use App\Models\Luden;

class LudensRepository{

    protected $ludensModel;

    public function __construct(Luden $ludensModel){
        $this->ludensModel = $ludensModel;
    }

    public function index(){
        return $this->ludensModel->all();
    }

    public function store($data){
        return $this->ludensModel->create($data);
    }

    public function find($id){
        return $this->ludensModel->findOrFail($id);
    }

}
