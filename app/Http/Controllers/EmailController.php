<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Email;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function mailling()
    {
        $emails =  [

            [
                'email' => 'malekbouzayani9@gmail.com',
                'name' => 'malouka',
                'tags' => [
                  
                    'Vue js',

                ]
            ],

        ];

        foreach ($emails as $data) {
            Mail::to($data['email'])->send(new Email($data['email'], $data['name'], $data['tags']));
        }

        return redirect()->back()->with('message', 'success');
    }
}
