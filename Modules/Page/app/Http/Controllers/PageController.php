<?php

namespace Modules\Page\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Page\Models\Page;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Modules\Page\Http\Requests\PageRequest;
use Modules\Page\app\ViewModels\PageViewModel;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pages=Page::get();
        return view('dashboard.pages.pages',compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.pages.create_page',new PageViewModel());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PageRequest $request): RedirectResponse
    {
        //
        $validatedData = $request->validated();
        $page=Page::create($validatedData);

        if ($page)
        {
            Session()->flash('success', 'Page Created Successfully');
        }else{
            Session()->flash('error', 'Page didn\'t Created');

        }

        return redirect()->route('page.index');


    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('page::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('page::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
