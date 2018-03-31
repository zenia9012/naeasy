<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FormController extends Controller {
	public function feedback( Request $request ) {

		$this->validate( $request, [
			'name'    => 'required',
			'email'   => 'required|email',
			'message' => 'required|min:3',
		] );

		$name    = $request->input( 'name' );
		$email   = $request->input( 'email' );
		$message = $request->input( 'message' );

		Feedback::create( $name, $email, $message );
		$successMessage = __('base.success_send_message');

		return back()->with('message', $successMessage);
	}
}
