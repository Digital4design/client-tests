<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\User\UserInterface as UserInterface;

class CustomerController extends Controller
{
	
	
   public function store(Request $request,UserInterface $service)
    {
        $data = $request->validate([
		'name'              => 'required',
		'email'             => 'required'
		  ]);
		
		$create = $service->adduser($request);
		
        return ['saved'=>true];
    }    
	
	
}
