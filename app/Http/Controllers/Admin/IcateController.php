<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Slug;
use App\Models\IegMeCate;
use DataTables;

class IcateController extends Controller
{
    //    public function __construct()
//    {
//        $this->middleware('permission:cpost_list', ['only' => ['index']]);
//        $this->middleware('permission:cpost_create', ['only' => ['create', 'store']]);
//        $this->middleware('permission:cpost_edit', ['only' => ['edit', 'update']]);
//        $this->middleware('permission:cpost_delete', ['only' => ['delete']]);
//        $this->middleware('permission:cpost_view', ['only' => ['show']]);
//
//    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = IegMeCate::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('parent', function($row){

                    $rolename = "";
                    if(!empty($row->parent)){
                        $rolename = $row->parent['title'];


                    }else
                    {
                        $rolename = "None";
                    }

                    return $rolename;
                })
                ->rawColumns(['parent'])
                ->addColumn('action', function($row){

                    $btn = '<a  href="'.route('icate.edit', $row->id).'" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="View">
                        <i class="la la-edit"></i>
                      </a> <a  href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill deleteUser" title="View">
                      <i class="la la-close"></i>
                    </a>';

                    return $btn;
                })
                ->rawColumns(['action'])

                ->make(true);
        }
        return view('admin.icate.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $datas = IegMeCate::all();
        return view('admin.icate.create',compact('datas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'slug' => 'required|unique:slugs',
        ]);

        $slug = new Slug;
        $slug->slug = $request->slug;
        $slug->type = 'icate';
        $slug->save();
        $data = new IegMeCate();
        $data->title = $request->title;
        $data->pid = $request->parent_id;
        $data->slug_id = $slug->id;
        $data->image = $request->thumbnail;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $newsave = $data->save();
        if(!$newsave){
            Slug::findOrFail($slug->id)->delete();
        }
        return redirect()->route('icate.index')
            ->with('success','Tọa mới danh mục thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = IegMeCate::find($id);
        return view('admin.icate.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $datas = IegMeCate::all();
        $data = IegMeCate::find($id);
        return view('admin.icate.edit',compact('data','datas'));
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
        $data = IegMeCate::find($id);
        $this->validate($request, [
            'title' => 'required',
            'slug' => 'required|unique:slugs,slug,'.$data->slug_id 
        ]);


        $data->title = $request->title;
        $data->pid = $request->parent_id;
        $data->image = $request->thumbnail;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->save();
        $slug = Slug::find($data->slug_id);
        $slug->slug = $request->slug;
        $slug->type = 'icate';
        $slug->save();
        return redirect()->route('icate.index')
            ->with('success','Sửa danh mục thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = IegMeCate::find($id);
        $data->delete();
        Slug::find($data->slug_id)->delete();
        return redirect()->route('icate.index')
            ->with('success','Xóa danh mục thành công');
    }
}
