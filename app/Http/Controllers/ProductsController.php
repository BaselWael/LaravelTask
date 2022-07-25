<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use DataTables;
class ProductsController extends Controller
{
    public function index(Request $request){
        {
            if ($request->ajax()) {
                $data = Products::select('*');
                return Datatables::of($data)
                        ->addIndexColumn()
                        ->addColumn('action', function($row){
                                $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
                                return $btn;
                        })
                        ->addColumn('Category',function($row){
                            $cate = Products::where('category_id',$row->category_id)->with('category')->select('category_id')->first();
                            
                            return $cate->category->name;
                        })

                        ->rawColumns(['action'])
                        ->make(true);
            }
            return view('products.index');
    }
}
}
