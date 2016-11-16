<?php

namespace App\Http\Controllers;

use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\LoginFormRequest;


class SessionsController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('back-end.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(LoginFormRequest $request)
    {
        $input = $request->only('email','password');

        try {
            // dd((boolean)Sentinel::authenticate($input,$request->has('remember')));

            if (Sentinel::authenticate($input, $request->has('remember'))) {
                return $this->redirectWhenLoggedIn();
            }

            return redirect()->back()->withInput()->withFlashMessage('Invalid credentials provided')->withType('danger');

        } catch (\Cartalyst\Sentinel\Checkpoints\NotActivatedException $e) {
            return redirect()->back()->withInput()->withFlashMessage('User Not Activated.')->withType('primary');
        } catch (\Cartalyst\Sentinel\Checkpoints\ThrottlingException $e) {
            return redirect()->back()->withInput()->withFlashMessage($e->getMessage())->withType('primary');
        }

    }

    protected function redirectWhenLoggedIn()
    {    
        return redirect()->intended('dashboard');
    } 

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id = null)
    {
        Sentinel::logout();

        return redirect()->route('login');
    }
}