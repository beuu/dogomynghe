<?php

namespace App\Http\Controllers\Admin;
use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Slug;
use Illuminate\Support\Facades\Auth;
use DataTables;

class EventController extends Controller
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
            $data = Event::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){

                    $btn = '<a  href="'.route('event.edit', $row->id).'" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="View">
                        <i class="la la-edit"></i>
                      </a> <a  href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill deleteUser" title="View">
                      <i class="la la-close"></i>
                    </a>';

                    return $btn;
                })
                ->rawColumns(['action'])

                ->make(true);
        }
        return view('admin.event.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.event.create');
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
            'description' => 'required',
            'image'=>'required',
            'body'=>'required',
        ]);
        $slug = new Slug;
        $slug->slug = $request->slug;
        $slug->type = 'new';
        $slug->save();
        $data = new Event();
        $data->title = $request->title;
        $data->slug_id = $slug->id;
        $data->keywords = $request->keywords;
        $data->uid = Auth::id();
        $data->description = $request->description;
        $data->mdescription = $request->mdescription;
        $data->image = $request->image;
        $data->content = $request->body;
        $newsave = $data->save();
        if($newsave){
            
            return redirect()->route('event.index')
            ->with('success','Tạo mới sự kiện thành công');
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
        $data2 = Event::findOrFail($id);
        return view('admin.event.edit',compact('data2'));
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
        $data = Event::findOrFail($id);
        $this->validate($request, [
            'title' => 'required',
            'slug' => 'required|unique:slugs,slug,'.$data->slug_id ,
            'description' => 'required',
            'image'=>'required',
            'content'=>'required',
        ]);

        $slug = Slug::findOrFail($data->slug_id);
        $data->title = $request->title;
        $data->slug_id = $slug->id;
        $data->keywords = $request->keywords;
        $data->uid = Auth::id();
        $data->description = $request->description;
        $data->mdescription = $request->mdescription;
        $data->image = $request->image;
        $data->content = $request->content;
        $data->save();
        
        $slug->slug = $request->slug;
        $slug->type = 'new';
        $slug->save();
        return redirect()->route('event.index')
            ->with('success','Sửa sự kiện thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Event::findOrFail($id);
        $data->delete();
        Slug::findOrFail($data->slug_id)->delete();
        return redirect()->route('event.index')
            ->with('success','Xóa sự kiện thành công');
    }
}
