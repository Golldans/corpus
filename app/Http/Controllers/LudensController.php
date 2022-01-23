<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\LudensService;

class LudensController extends Controller
{

    protected $ludensService;

    public function __construct(LudensService $ludensService)
    {
        $this->ludensService = $ludensService;
    }

    public function index(){
        return response()->json($this->ludensService->index());
    }

    public function store(Request $request){
        $data = $request->all();
        return response()->json($this->ludensService->store($data));
    }

    public function find($id){
        return response()->json($this->ludensService->find($id));
    }

}
