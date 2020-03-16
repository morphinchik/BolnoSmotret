<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\ArticlesRepository;
use Gate;

class ArticlesController extends AdminController
{


    public function __construct(ArticlesRepository $a_rep)
    {
        //dd(Auth::user());
        parent::__construct();

        /*if (Gate::denies('VIEW_ADMIN_ARTICLES')) {
            abort(403);
        }*/

        $this->a_rep = $a_rep;


        $this->template = env('THEME').'.admin.articles';
       // $this->template = 'pink.admin.index';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $this->title = 'Меннеджер статтей';

        $articles = $this->getArticles();

        //dd($articles); 1 check

        $this->content = view(env('THEME').'.admin.articles_content')->with('articles', $articles)->render();

        return $this->renderOutput();
    }

    public function getArticles()
    {
        //
        return $this->a_rep->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        echo "call to show";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
