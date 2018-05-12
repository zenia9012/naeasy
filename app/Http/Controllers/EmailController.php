<?php

namespace App\Http\Controllers;

use App\Mail\NotifyAdmin;
use App\Models\Callback;
use App\Models\Feedback;
use App\Models\SendCommercial;
use App\User;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
	const FEEDBACK_KEY = 'feedback';
	const KP_KEY = 'kp';
	const CALLBACK_KEY = 'callback';

	private static function NotifyAdmins( $key, $data ) {
		$admins = User::all();

		foreach ($admins as $admin){
			Mail::to($admin)->send(new NotifyAdmin($data, $key));
		}
	}

	public static function NotifyAdminsFeedback( Feedback $feedback ) {
		self::NotifyAdmins(self::FEEDBACK_KEY, $feedback);
    }

	public static function NotifyAdminsSendKP( SendCommercial $commercial ) {
		self::NotifyAdmins(self::KP_KEY, $commercial);
	}

	public static function NotifyAdminsCallback( Callback $callback ) {
		self::NotifyAdmins(self::CALLBACK_KEY, $callback);
	}


}
