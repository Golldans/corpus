<?php

namespace App\Services;

use App\Repositories\LudensRepository;

class LudensService{


    protected $ludensRepository;

    public function __construct(LudensRepository $ludensRepository)
    {
        $this->ludensRepository = $ludensRepository;
    }

    public function index(){
        return $this->ludensRepository->index();
    }

    public function store($data){
        return $this->ludensRepository->store($data);
    }

    public function find($id){
        return $this->ludensRepository->find($id);
    }

}
