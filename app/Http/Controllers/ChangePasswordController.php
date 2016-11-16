<?php

namespace App\Http\Controllers;

use App\Encrypt;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequest;
use App\Repositories\UserRepositoryInterface;

class ChangePasswordController extends Controller
{
	protected $user;

	public function _construct(User $user)
	{
		$this->user = $user;	
	}

	public function edit($id)
	{
		return view('back-end.changepassword',['enc_id' => $id]);
	}

	public function update($id, ChangePasswordRequest $request)
	{
		$id = Encrypt::decrypt($id);
		//dd($id);
		try{
			dd($this->user);
			$user = $this->user->find($id);
			$user->password = \Hash::make($request->input('password'));
			$user->save();
		}catch (Exception $e){
			return redirect()->back()->withFlashMessage('Password Change Failed!!')->withType('danger');
		}
		    return redirect()->back()->withFlashMessage('Password Changed Successfully!')->withType('primary');
	}
}
