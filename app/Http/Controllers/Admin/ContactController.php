<?php

namespace App\Http\Controllers\Admin;

use App\Models\NangLuc;
use App\Models\TuVan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DangKy;
use DB;
use DataTables;

class ContactController extends Controller
{

    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->parameters([
                'buttons' => ['excel'],
            ]);
    }
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = DangKy::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()

                ->make(true);
        }

        return view('admin.contact.index');
    }

    public function tuvan(Request $request)
    {
        if ($request->ajax()) {
            $data = TuVan::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()

                ->make(true);
        }

        return view('admin.contact.tuvan');
    }

    public function nangluc(Request $request)
    {
        if ($request->ajax()) {
            $data = NangLuc::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()

                ->make(true);
        }

        return view('admin.contact.nangluc');
    }
}
