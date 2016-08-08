<?php

namespace App\Http\Controllers;

use App\Helper\PageDescription;
use App\HotelFasilitasCategory;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class HotelFasilitasCategoryController extends Controller
{

    public function __construct(PageDescription $page)
    {
        $this->page = $page;
        $this->middleware('auth-admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->page->setTitle('Category All');
        return view('data-entry.hotel-fasilitas-category.index')->with([
            'page' => $this->page,
            'hotelFasilitasCategories' => HotelFasilitasCategory::with('fasilitas')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->page->setTitle('Create');
        return view('data-entry.hotel-fasilitas-category.create')->with([
            'page' => $this->page
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\HotelFasilitasCategoryRequest $request)
    {
        $c = HotelFasilitasCategory::create($request->all());
        if(is_null($c)){
            abort(500);
        }
        Session::flash('hotel-fasilitas-category-registered','Telah Ditambahkan');
        return redirect(action('HotelFasilitasCategoryController@index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cat = HotelFasilitasCategory::find($id);
        if(is_null(404)){
            abort(404);
        }
        return response()->json([
            'status' => 'ok',
            'data' => $cat
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat = HotelFasilitasCategory::find($id);
        if(is_null(404)){
            abort(404);
        }
        $this->page->setTitle($cat->name . ' - edit');
        return view('data-entry.hotel-fasilitas-category.edit')->with([
            'page' => $this->page,
            'hotelFasilitasCategory' => $cat
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\HotelFasilitasCategoryRequest $request, $id)
    {
        $cat = HotelFasilitasCategory::find($id);
        if(is_null(404)){
            abort(404);
        }
        $t = $cat->update($request->all());
        if(!$t){
            abort(500);
        }
        Session::flash('hotel-fasilitas-category-edited','Telah Teredit');
        return redirect(action('HotelFasilitasCategoryController@index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = HotelFasilitasCategory::find($id);
        if(is_null(404)){
            abort(404);
        }
        $t = $cat->delete();
        if(!$t){
            abort(500);
        }
        return redirect()->back();
    }
}
