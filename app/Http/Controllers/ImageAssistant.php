<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

class ImageAssistant extends Controller{

		public function index(){
			return view('image-assistant.home');
		}

		public function profile(){
			return view('image-assistant.profile');
		}

		public function enumeration(){
			$user_list = DB::select('select * from users');
			return view('image-assistant.enumeration', ['user_list' => $user_list]);

		}

		public function deluser(Request $request){
			$id_user ="$request->id";
			DB::table('users')->where('id', '=', $id_user)->delete();
			print($id_user);
		}

		public function upimg(Request $request){
			$id_users = "$request->iduser";
			$request->file('img')->move(public_path('images'), $request->file('img')->getClientOriginalName());
			$img_name = $request->file('img')->getClientOriginalName();
			DB::insert('insert into imgstore (name, id_user) values (?, ?)', [$img_name, $id_users]);
			//print($request->file('img')->getClientOriginalName());
			//print($users_id);
		}

		public function getimgs(Request $request){
			$id_user ="$request->iduser";
			$ims_list = DB::select('select * from imgstore where id_user = '.$id_user);
			$ims_list = json_encode($ims_list);
			print($ims_list);
		}

		public function delimgs(Request $request){
			$id_img = "$request->idimg";
			DB::table('imgstore')->where('id', '=', $id_img)->delete();
			print($id_img);
		}



}
