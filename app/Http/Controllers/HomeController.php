<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
      public function index()
		{
			/*
			DB::table('users')->insert(
				[	
					['username' => 'Melly',
				  	'password' => '1234',
				      'kota'		   => 'pekalongan',
					  'gender'	  => 'cowok',
					  'nama_lengkap' 	=> 'Amelia Susanti',
					  'tgl_lahir'		=> '1999-08-21',
					  'date_created'	=> date('Y-m-d H:i:s')
					]
				]
			);
			*/
			
			$users = DB::table('users')->get();
			return view('home',['users'	=> $users]);
		}
		
}
