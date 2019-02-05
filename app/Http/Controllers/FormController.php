<?php

namespace App\Http\Controllers;

use App\Models\SalesForm;
use Illuminate\Http\Request;
use App\Models\User;

class FormController extends Controller
{
	public function index()
	{
		$users = User::get();
		$sales = SalesForm::get();
        return view('form',compact('users','sales'));
	}

	public function store(Request $request)
	{
	    SalesForm::create($request->all());
		return redirect('sales');
	}
}
