<?php

namespace App\Http\Controllers;

use App\Helper\PageDescription;
use App\Paket;
use App\PaketCategory;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;

class PaketCategoryController extends Controller
{
    public function __construct(PageDescription $page)
    {
        $this->page = $page;
        $this->middleware('auth-admin',['except' => ['getJson','getPaketJson']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->page->setTitle('Paket Category All');
        return view('data-entry.paket-category.index')->with([
            'page' => $this->page,
            'paketCategories' => PaketCategory::with('pakets')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->page->setTitle('Paket Category Create');
        return view('data-entry.paket-category.create')->with([
            'page' => $this->page
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\PaketCategoryRequest $request)
    {
        $cat = PaketCategory::create($request->all());
        if(is_null($cat)){
            abort(500);
        }
        Session::flash('paket-category-registered','Telah Ditambahkan');
        return redirect(action('PaketCategoryController@index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cat = PaketCategory::find($id);
        if(is_null($cat)){
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
        $cat = PaketCategory::find($id);
        if(is_null($cat)){
            abort(404);
        }
        $this->page->setTitle($cat->name . ' - edit');
        return view('data-entry.paket-category.edit')->with([
            'page' => $this->page,
            'paketCategory' => $cat
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\PaketCategoryRequest $request, $id)
    {
        $cat = PaketCategory::find($id);
        if(is_null($cat)){
            abort(404);
        }
        $t = $cat->update($request->all());
        if(!$t){
            abort(500);
        }
        Session::flash('paket-category-edited','Telah Teredit');
        return redirect(action('PaketCategoryController@index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = PaketCategory::find($id);
        if(is_null($cat)){
            abort(404);
        }
        $t = $cat->delete();
        if(!$t){
            abort(500);
        }
        Session::flash('paket-category-deleted','Terdelete~');
        return redirect()->back();
    }

    public function getJson(){
        return response()->json([
            'status' => true,
            'data' => PaketCategory::all()
        ]);
    }

    public function getPaketJson($id,Request $request){
//        $paketCategory = PaketCategory::find($id);
//        if(is_null($paketCategory)){
//            abort(404);
//        }
//
//        $arr = array();
//
//        foreach ($paketCategory->pakets as $y){
//            array_push($arr,$y->load(['hotelMekah','hotelMadinah','pesawat.attachments','embarkasi']));
//        }
//
//        return response()->json([
//            'status' => true,
//            'data' => $arr
//        ]);
        $paket = Paket::where('paket_category_id','=',$id)->with(['hotelMekah' => function($q){
            $q->select('nama','id');
        },'hotelMadinah' => function($q){
            $q->select('id','nama');
        },'pesawat' => function($q){
            $q->select('id','nama')->with('attachments')->get();
        },'embarkasi' => function($q){
            $q->select('id','nama');
        }]);

        if($request->has('jumlah_jamaah')){
            $paket = $paket->where('sisa_kuota','>=',$request->query('jumlah_jamaah'));
        }
        if($request->has('tanggal_keberangkatan')){
            $paket = $paket->where('waktu','>=',$request->query('tanggal_keberangkatan'));
        }
        if($request->has('embarkasi')){
            $paket->where('embarkasi_id','=',$request->query('embarkasi'));
        }

        if($request->has('hotel_mekah')){
            $paket->where('hotel_mekah_id','=',$request->query('hotel_mekah'));
        }

        if($request->has('hotel_madinah')){
            $paket->where('hotel_madinah_id','=',$request->query('hotel_madinah'));
        }
        return response()->json([
            'data' => $paket->get()
        ]);
    }
}
