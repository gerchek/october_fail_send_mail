<?php 

namespace Atash\Users\Components;
use Input;
use Mail;
use Flash;
use Atash\Users\Models\Users;

use Cms\Classes\ComponentBase;

// Maglumat => components ichindaki at

class Form extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'form_name',
            'description' => 'form_description'
        ];
    }


    public function onSend()
    {
        $users = new Users();
        $a=$users->file_m =Input::file('file_f');

        $users->save();

         if($users)
         {
             Flash::success($users->file_m->getPath());
         }
         else{
            Flash::error("no");
         }



        //   $vars = [
        // 'email' => Input::get('email'),
        // 'password' => Input::get('password'),
        //  ];

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

    // Mail::send('atash.users::mail.message', $vars, function($message) {

    //     $message->to('gerchekgerchek1@gmail.com', 'Admin Person');
    //     $message->subject('This is a reminder');

    // });
    // return true;
    //                  dogry end
    
    }
    
}