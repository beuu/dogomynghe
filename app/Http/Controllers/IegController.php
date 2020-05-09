<?php

namespace App\Http\Controllers;

use App\Models\NangLuc;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Slug;
use App\Models\Event;
use App\Models\IegMePost;
use App\Models\Video;
use Mail;
use App\Models\DangKy;
use App\Models\TuVan;
class IegController extends Controller
{



    public function cauchuyenieg(){
        return view('fe.cauchuyenieg');
    }

    public function nguoigiulua(){
        return view('fe.nguoigiulua');
    }

    public function dayvahoc(){
        return view('fe.dayvahoc');
    }
    public function tienganh(){
        return view('fe.ptienganh');
    }

    public function toivaieg(){
        $data = IegMePost::select()->orderBy('id', 'desc')->paginate(9);
        return view('fe.toivaieg',compact(['data']));
    }

    public function sukien(){
        $data = Event::select()->orderBy('id', 'desc')->paginate(9);
        return view('fe.sukien',compact(['data']));
    }

    public function toivaiegc($slug){
        $dataslug = Slug::where('slug',$slug)->first();
        $data = IegMePost::where('slug_id',$dataslug->id)->first();
        $datas = IegMePost::where('cid',$data->cid)->orderBy('id', 'desc')->take(3)->get();
        return view('fe.toivaiegpchitiet',compact(['data','datas']));
    }

    public function gocnhingd(){
        return view('fe.gocnhingd');
    }

    public function tintuc(){
        $dataf = News::where('feature',1)->orderBy('id', 'desc')->take(3)->get();
        $allspl = $dataf->shift();
        $data = News::select()->orderBy('id', 'desc')
        ->take(5)->get();
        $event = Event::select()->orderBy('id', 'desc')->take(3)->get();
        return view('fe.tintuc',compact(['dataf','data', 'allspl','event']));
    }
    public function tintucn(){
        $dataf = News::where('feature',1)->orderBy('id', 'desc')->take(6)->get();
        $data = News::select()->orderBy('id', 'desc')->paginate(9);
        return view('fe.tintucall',compact(['dataf','data']));
    }
    public function tintucct($slug){
        $dataslug = Slug::where('slug',$slug)->first();
        $data = News::where('slug_id',$dataslug->id)->first();
        $datas = News::where('cid',$data->cid)->orderBy('id', 'desc')->take(3)->get();
        return view('fe.tintucct',compact(['data','datas']));
    }



    public function homeieg(){
        return view('home');
    }

    public function toivaiegp(){
        return view('fe.toivaiegp');
    }

    public function khoahoc(){
        return view('fe.khoahoc');
    }


    public function toanhoc(){
        return view('fe.pagekhoahoc');
    }

    public function ielts(){
        return view('fe.pielts');
    }

    public function socrates(){
        return view('fe.socrates');
    }


    public function video(){
        $data = Video::where('feature',1)->orderBy('id', 'desc')->take(6)->get();
        $datan = Video::select()->orderBy('id', 'desc')
        ->take(6)->get();
        return view('fe.video',compact(['data','datan']));
    }
    public function mailreg(Request $request){


          $data = new DangKy;
          $data->name = $request->name;
          $data->phone = $request->phone;
          $data->email = $request->email;
          $datas = $data->save();


          if ($datas){
              Mail::send('mailreg', array('name'=>$request->name,'sdt'=>$request->phone,'email'=>$request->email), function($message){
                  $message->from('tienvu@ga.vn')->to('tien2vv@gmail.com', 'Visitor')->subject('Visitor Contact!');
              });
              $request->session()->flash('mailreg','Thông tin được gửi thành công. Chúng tôi sẽ liên hệ lại trong thời gian sớm nhất.');
              return redirect()->back();
          } else{
              return redirect()->back();
          }


      }

      public function tuvan(Request $request){
          $data = new TuVan;
          $data->name = $request->name;
          $data->phone = $request->phone;
          $data->email = $request->email;
          $data->text = $request->text;
          $datas = $data->save();


          if ($datas){
              Mail::send('tuvan', array('name'=>$request->name,'sdt'=>$request->phone,'email'=>$request->email,'text'=>$request->text), function($message){
                  $message->from('tienvu@ga.vn')->to('tien2vv@gmail.com', 'Visitor')->subject('Visitor Contact!');
              });

              $request->session()->flash('mailreg','Thông tin được gửi thành công. Chúng tôi sẽ liên hệ lại trong thời gian sớm nhất.');
          } else{
              return redirect()->back();
          }


      return redirect()->back();
    }

    public function nangluc(Request $request){

        $data = new NangLuc;
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->namec = $request->namec;
        $data->nam = $request->nam;
        $data->trungtam = $request->trungtam;
        $data->text = $request->text;
        $datas = $data->save();


        if ($datas){
            Mail::send('nangluc', array('name'=>$request->name,'sdt'=>$request->phone,'email'=>$request->email,'text'=>$request->text,'namec'=>$request->namec,'nam'=>$request->nam,'trungtam'=>$request->trungtam), function($message){
                $message->from('tienvu@ga.vn')->to('tien2vv@gmail.com', 'Visitor')->subject('Visitor Contact!');
            });

            $request->session()->flash('mailreg','Thông tin được gửi thành công. Chúng tôi sẽ liên hệ lại trong thời gian sớm nhất.');
        } else{
            return redirect()->back();
        }

      return redirect()->back();
    }
}
