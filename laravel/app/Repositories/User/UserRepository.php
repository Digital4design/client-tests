<?php
namespace App\Repositories\User;

use Mail;
use App\Mail\WelcomeNewCustomer;
use App\Repositories\User\UserInterface as UserInterface;
use App\User;


class UserRepository implements UserInterface
{

    function __construct() {
    }
    
    public function adduser($r)
	{
		$input = $r->all();
		Mail::fake();
	    $user = User::create($input);
		Mail::assertSent(WelcomeNewCustomer::class, function ($mail) use ($user) {
			$mail->build();
			return $mail->hasTo($user->email)
			&$ $mail->subject === 'A busy content';
		});
		return true;
	}
    
}
