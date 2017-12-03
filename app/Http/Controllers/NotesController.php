<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotesController extends Controller
{
	public function index()
	{
		return 'none';
	}
	
    public function notes($note = 'gaada tulisan')
		{
			 return view('notes',['note' =>$note]);
		}
		
}
