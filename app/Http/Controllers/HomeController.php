<?php

namespace App\Http\Controllers;

use App\Http\Requests\Action\ActionCreateRequest;
use App\Models\Action;
use App\Models\Equipament;
use App\Models\Indicator;
use App\Models\User;
use App\Service\Action\ActionService;
use Illuminate\Http\Request;
use mysql_xdevapi\Exception;

class HomeController extends Controller
{
    private $actionService;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ActionService $actionService){
        $this->actionService = $actionService;
        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {


        $actions = $this->actionService->search("data", \Carbon\Carbon::yesterday());

        if(request("d"))
            $actions = $this->actionService->search("data", date(\request("d")));

        if(request("t"))
            $actions = $this->actionService->search("id_task", date(\request("t")));

        return view('home', ['actions'=>$actions]);
    }

    public function show($id, $id_task)
    {
        $actions = Action::all();
        return view('pages/dash_cosan', ['actions'=>$actions, 'id'=>$id, 'id_task'=>$id_task]);
    }

}

