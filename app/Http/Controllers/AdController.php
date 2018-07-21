<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdController extends Controller
{

  public function __construct()
  {
    //$this->middleware('auth');
    //$this->middleware('auth', ['only' => ['create', 'update','store', 'edit', 'delete']]);
    $this->middleware('auth', ['except' => ['index', 'show']]);
  }


    public function index()
    {
      $ads = Ad::all();
      echo 'ad';
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {

      $user = Auth::user();
      $user_id = $user->id;

      $this->validate($request,[
        'title'       =>'required',
        'description' =>'required',
        'price'       =>'required',
        //'state_id'    =>'required',
        //'city_id'     =>'required',
        'image'       =>'required',
      ]);



      //use image key in upload form
      $image = $request->file('image');

      if($image){
        $site_url = 'http://academisto.com/';

        date_default_timezone_set('Asia/Tehran');

        //create image dir
        $year_dir = date('Y', time());
        $month_dir = date('m', time());
        $image_dir = 'uploads/images/' . $year_dir.'/'.$month_dir;

        //generate name to image
        $image_extension = $image->getClientOriginalExtension();

        $day = date('d', time());
        $hour = date('h', time());
        $minute = date('i', time());


        $image_name = $day.'d'.$hour.'h'.$minute. 'm' .$user_id . 'u'. $this->generateRandomString(15) . $image_extension;

        //save image into dir
        $image->move($image_dir, $image_name);

      }


      //save ad
      $newAd = new Ad();
      $newAd->user_id = $user_id;
      $newAd->title = $request->input('title');
      $newAd->description = $request->input('description');
      $newAd->price = $request->input('price');
      $newAd->state_id = $request->input('state_id');
      $newAd->city_id = $request->input('city_id');
      $newAd->univ_id = $request->input('univ_id');
      $newAd->save();

      //save image to table
      $lastAdId = $newAd->id;
      $photo = new Photo();
      $photo->url = $site_url . $image_dir.'/'.$image_name;
      $photo->path = $image_dir.'/'.$image_name;
      $photo->imageable_id = $lastAdId;
      $photo->imageable_type = 'App\Ad';
      $photo->save();



      return redirect('/user-ads');

    }


    public function show($id)
    {
      $ad = Ad::findOrFail($id);
    }


    public function edit($id)
    {
      $ad = Ad::findOrFail($id);
    }


    public function update(Request $request, $id)
    {
      $this->validate($request,[
        'user_id'     =>'required',
        'title'       =>'required',
        'description' =>'required',
        'price'       =>'required',
        'state_id'    =>'required',
        'city_id'     =>'required',
      ]);


      $ad = Ad::findOrFail($id);
      $ad->update($request->all());
    }


    public function destroy($id)
    {
      echo 'h';
      $ad= Ad::findOrFail($id);
      $ad->delete();
      return redirect('/user-ads');
    }







  private function generateRandomString($length = 6) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
      $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
  }



}
