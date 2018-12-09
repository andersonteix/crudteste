<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\CadastroFuncionario;
use Illuminate\Http\Request;

class CadastroFuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $cadastrofuncionario = CadastroFuncionario::where('nome', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('genero', 'LIKE', "%$keyword%")
                ->orWhere('aniversarioData', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $cadastrofuncionario = CadastroFuncionario::latest()->paginate($perPage);
        }

        return view('cadastro-funcionario.index', compact('cadastrofuncionario'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('cadastro-funcionario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        CadastroFuncionario::create($requestData);

        return redirect('cadastro-funcionario')->with('flash_message', 'CadastroFuncionario added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $cadastrofuncionario = CadastroFuncionario::findOrFail($id);

        return view('cadastro-funcionario.show', compact('cadastrofuncionario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $cadastrofuncionario = CadastroFuncionario::findOrFail($id);

        return view('cadastro-funcionario.edit', compact('cadastrofuncionario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $cadastrofuncionario = CadastroFuncionario::findOrFail($id);
        $cadastrofuncionario->update($requestData);

        return redirect('cadastro-funcionario')->with('flash_message', 'CadastroFuncionario updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        CadastroFuncionario::destroy($id);

        return redirect('cadastro-funcionario')->with('flash_message', 'CadastroFuncionario deleted!');
    }
}
