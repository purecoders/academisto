<?php

namespace App\Http\Controllers;

use App\Ad;
use App\City;
use App\Payment;
use App\Photo;
use App\Report;
use App\State;
use App\Univ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Zarinpal\Zarinpal;
use Zarinpal\Drivers\SoapDriver;

class AdController extends Controller
{

    public function __construct()
  {
    //$this->middleware('auth');
    //$this->middleware('auth', ['only' => ['create', 'update','store', 'edit', 'delete']]);
    $this->middleware('auth', ['except' => ['index', 'show', 'showAds','searchAds']]);
  }


    public function showAds(){
       $ads = Ad::orderBy('created_at', 'desc')->paginate(12);
       $states = State::all();
       $cities = City::all();
       $univs = Univ::all();

      return view('site.ads', compact(['ads', 'states', 'cities', 'univs']));
    }


    public function searchAds(Request $request){
      $city_id = $request->input('city_id');
      $univ_id = $request->input('univ_id');
      $text = $request->input('text');


      if($city_id !== null && $city_id != 0){
        $ads = Ad::orderBy('created_at', 'desc')->where('city_id', '=', $city_id)->where('title', 'like', '%'.$text.'%')->paginate(12);
      }elseif ($univ_id !==  null && $univ_id != 0){
        $ads = Ad::orderBy('created_at', 'desc')->where('univ_id', '=', $univ_id)->where('title', 'like', '%'.$text.'%')->paginate(12);
      }else{
        $ads = Ad::orderBy('created_at', 'desc')->where('title', 'like', '%'.$text.'%')->paginate(12);
      }

      $states = State::all();
      $cities = City::all();
      $univs = Univ::all();

      return view('site.ads', compact(['ads', 'states', 'cities', 'univs']));
    }




    //admin
    public function adminShowAds(){
      $ads = Ad::orderBy('created_at', 'desc')->paginate(12);
      $states = State::all();
      $cities = City::all();
      $univs = Univ::all();

      return view('admin.ads', compact(['ads', 'states', 'cities', 'univs']));
    }


    public function adminSearchAds(Request $request){
      $city_id = $request->input('city_id');
      $univ_id = $request->input('univ_id');
      $text = $request->input('text');


      if($city_id !== null && $city_id != 0){
        $ads = Ad::orderBy('created_at', 'desc')->where('city_id', '=', $city_id)->where('title', 'like', '%'.$text.'%')->paginate(12);
      }elseif ($univ_id !==  null && $univ_id != 0){
        $ads = Ad::orderBy('created_at', 'desc')->where('univ_id', '=', $univ_id)->where('title', 'like', '%'.$text.'%')->paginate(12);
      }else{
        $ads = Ad::orderBy('created_at', 'desc')->where('title', 'like', '%'.$text.'%')->paginate(12);
      }

      $states = State::all();
      $cities = City::all();
      $univs = Univ::all();

      return view('admin.ads', compact(['ads', 'states', 'cities', 'univs']));
    }

    public function adminRemoveAd(Request $request){
      $ad_id = $request->input('ad_id');
      $ad = Ad::find($ad_id);
      $reports = Report::where('reportable_id', '=', $ad_id)->where('reportable_type', '=', 'App\Ad')->get();
      foreach ($reports as $report){
        $report->delete();
      }
      $ad->delete();
      return redirect('/admin/ads');
    }








    public function index()
    {

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
        $site_url = env('SITE_URL','http://academisto.ud/');

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


        $image_name = $day.'d'.$hour.'h'.$minute. 'm' .$user_id . 'u'. $this->generateRandomString(15). '.' . $image_extension;

        //save image into dir
        $image->move($image_dir, $image_name);

      }

      $title = $request->input('title');
      $description = $request->input('description');
      $price = $request->input('price');
      if ($request->input('state_id') === null){
        $state_id = 0;
      }else{
        $state_id = $request->input('state_id');
      }
      if ($request->input('city_id') === null){
        $city_id = 0;
      }else{
        $city_id = $request->input('city_id');
      }
      if ($request->input('univ_id') === null){
        $univ_id = 0;
      }else{
        $univ_id = $request->input('univ_id');
      }

      //save ad
      $newAd = new Ad();
      $newAd->user_id = $user_id;
      $newAd->title = $title;
      $newAd->description = $description;
      $newAd->price = $price;
      $newAd->state_id = $state_id;
      $newAd->city_id = $city_id;
      $newAd->univ_id = $univ_id;
      $newAd->save();

      //save image to table
      $lastAdId = $newAd->id;

      $photo = new Photo();
      $photo->url = $site_url . $image_dir.'/'.$image_name;
      $photo->path = $image_dir.'/'.$image_name;
      $photo->imageable_id = $lastAdId;
      $photo->imageable_type = 'App\Ad';
      $photo->save();


      $newAd->delete();


      $this->zarinpalPayment(100, $lastAdId, $user_id);
      //return redirect('/user-ads');

    }




  private function zarinpalPayment($amount, $ad_id, $user_id){
    $zarinpal = new Zarinpal('0959fefa-4605-11e8-984b-005056a205be', new SoapDriver());
    echo json_encode($answer = $zarinpal->request(route('add-new-ad-after-pay',
        ['amount' => $amount, 'ad_id' => $ad_id, 'user_id' => $user_id] )
      , $amount, 'new project'));
    if(isset($answer['Authority'])) {
      file_put_contents('Authority',$answer['Authority']);
      $zarinpal->redirect();
    }
  }


  public function addNewAdAfterPayment($amount, $ad_id, $user_id) {
    $zarinpal = new Zarinpal('0959fefa-4605-11e8-984b-005056a205be', new SoapDriver());
    $answer['Authority'] = file_get_contents('Authority');
    $result = ($zarinpal->verify('OK', $amount, $answer['Authority']));
    //echo json_encode($result);
    $status = $result['Status'];

    if($status == 'success') {
      $RefID = $result['RefID'];
      $payment = new Payment();
      $payment->user_id = $user_id;
      $payment->paymentable_id = $ad_id;
      $payment->paymentable_type = 'App\Ad';
      $payment->amount = $amount;
      $payment->bank_receipt = $RefID;
      $payment->success = 1 ;
      $payment->save();

      Ad::withTrashed()->find($ad_id)->restore();

      return redirect('/user-ads');
      echo 'پرداخت با موفقیت انجام شد';

    }else{
      return redirect('/user-ads');
      echo 'پرداخت ناموفق بود.لطفا دوباره امتحان کنید';
    }

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
      $user = Auth::user();
      $ad= Ad::findOrFail($id);
      if($ad->user_id = $user->id){
        $ad->delete();
      }
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
