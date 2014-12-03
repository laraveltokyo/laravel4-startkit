<?php

class AuthController extends BaseController {

	public function getLogin()
	{
		return View::make('auth.login');
	}

	public function postLogin()
	{
		$input = InputModel::make('forms.login');

		// rule based validation
		if ($input->fails()) {
			return Redirect::to('/login')
				->withErrors($input->errors())
				->withInput()
			;
		}

		// value based validation
		if ($input->username !== 'user1' || $input->password !== 'pass') {
			return Redirect::to('/login')
				->withErrors([trans('auth.error-invalid-credential')])
				->withInput()
			;
		}

		return Redirect::to('/home');
	}

	public function getLogout()
	{
		return Redirect::to('/home');
	}

}
