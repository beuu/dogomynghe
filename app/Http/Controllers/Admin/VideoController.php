<?php

namespace App\Http\Controllers\Admin;

use App\Models\CateVideo;
use App\Models\Video;
use App\Models\Slug;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use DataTables;

class VideoController extends Controller
{
    //    public function __construct()
//    {
//        $this->middleware('permission:post_list', ['only' => ['index']]);
//        $this->middleware('permission:post_create', ['only' => ['create', 'store']]);
//        $this->middleware('permission:post_edit', ['only' => ['edit', 'update']]);
//        $this->middleware('permission:post_delete', ['only' => ['delete']]);
//        $this->middleware('permission:post_view', ['only' => ['show']]);
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
            $data = Video::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){

                    $btn = '<a  href="'.route('video.edit', $row->id).'" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="View">
                        <i class="la la-edit"></i>
                      </a> <a  href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill deleteUser" title="View">
                      <i class="la la-close"></i>
                    </a>';

                    return $btn;
                })
                ->rawColumns(['action'])

                ->make(true);
        }
        return view('admin.video.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data= CateVideo::all();
        return view('admin.video.create',compact('data'));
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
            'image'=>'required',
            'link'=>'required',
            'postcate_id' => 'required'
        ]);
        $slug = new Slug;
        $slug->slug = $request->slug;
        $slug->type = 'video';
        $slug->save();
        $data = new Video();
        $data->title = $request->title;
        $data->slug_id = $slug->id;
        if($request->feature != NULL){
            $data->feature = 1;
        }
        $data->keywords = $request->keywords;
        $data->uid = Auth::id();
        $data->mdescription = $request->mdescription;
        $data->image = $request->image;
        $data->link = $request->link;
        $data->cid = $request->postcate_id;
        $newsave = $data->save();
        if($newsave){

            return redirect()->route('video.index')
                ->with('success','Tạo mới video thành công');
        }else{
            Slug::findOrFail($slug->id)->delete();
        }

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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data2 = Video::findOrFail($id);
        $data = CateVideo::all();
        return view('admin.video.edit',compact('data2','data'));
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
        $data = Video::findOrFail($id);
        $this->validate($request, [
            'title' => 'required',
            'slug' => 'required|unique:slugs,slug,'.$data->slug_id ,
            'image'=>'required',
            'link'=>'required',
            'postcate_id' => 'required'
        ]);

        $slug = Slug::findOrFail($data->slug_id);
        $data->title = $request->title;
        $data->slug_id = $slug->id;
        if($request->feature != NULL){
            $data->feature = 1;
        }else{
            $data->feature = 0;
        }
        $data->keywords = $request->keywords;
        $data->uid = Auth::id();
        $data->mdescription = $request->mdescription;
        $data->image = $request->image;
        $data->link = $request->link;
        $data->cid = $request->postcate_id;
        $data->save();

        $slug->slug = $request->slug;
        $slug->type = 'video';
        $slug->save();
        return redirect()->route('video.index')
            ->with('success','Sửa video thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Video::find($id);
        $data->delete();
        Slug::findOrFail($data->slug_id)->delete();
        return redirect()->route('video.index')
            ->with('success','Xóa video thành công');
    }
}
