<?php

namespace App\Http\Controllers\Front;

use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Http\Requests\Front\ContactRequest;
use Debugbar;

class ContactController extends Controller
{
     
    protected $contact;

    public function __construct(Contact $contact)
    {
    
        $this->contact = $contact;
    }
    
    public function index()
    {

        $view = View::make('front.pages.contact.index');

        if(request()->ajax()) {
            
            $sections = $view->renderSections(); 
    
            return response()->json([
                'content' => $sections['content'],
            ]); 
        }

        return $view;
    }

    public function store(ContactRequest $request)
    {            
    
        $contact = $this->contact->updateOrCreate([
                'id' => request('id')],[
                'name' => request('name'),
                'surname' => request('surname'),
                'phone' => request('phone'),
                'email' => request('email'),
                'message' => request('message'),
        ]);
            
        $view = View::make('front.pages.contact.index');

        $sections = $view->renderSections(); 

        return response()->json([
            'content' => $sections['content'],
        ]); 
    }
}