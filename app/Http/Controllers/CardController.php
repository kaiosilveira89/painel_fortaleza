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

class CardController extends Controller
{

    private $actionService;

    /**
     * @param ActionService $actionService
     */
    public function __construct(ActionService $actionService){
        $this->actionService = $actionService;
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
        
        return view('pages/dash_all', ['actions'=>$actions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

            return view("pages/admin_cosan");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ActionCreateRequest $request)
    {
        try {
            $this->actionService->create($request->all());
        } catch(Exception $exception){
            return redirect()->route('dashall.index')->with(
                ["error" => "Erro ao cadastrar dados!".$exception->getMessage()]
            );
        }
        return redirect()->route('dashall.index')->with(
            ["success" => "Criado com Sucesso!"]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$actions = Action::all();
        if(request('dataInicial') && request('dataFinal')){
            $actions = Action::whereBetween('data', array(request('dataInicial'), request('dataFinal')))->get();
        } else {
            $actions = Action::all();
        }
        
        //$actions = Action::whereBetween('data', array(request('dataInicial'), request('dataInicial')))->get();

        return view('pages/dash_cosan', ['actions'=>$actions, 'id'=>$id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $actions = Action::with('$id', $id)->first();
        if(!empty($actions))
        {
            return view('pages/edit', ['actions'=>$actions]);
        } else {
            return redirect()->route('pages/dash_cosan');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = [
            'value' => $request->value,
        ];


            Action::where("id_action", $request->id_action)->update($data);

            return redirect()->route('dashall.index')->with(
                ["success" => "Atualizado com Sucesso!"]
            );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


    }
}
