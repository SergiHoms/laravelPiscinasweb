<?php

// donde se encuentra este archivo en la carpeta /app/http/controllers/admin/FaqController.php
// sirve para identificar el archivo,es necesario que se llame igual que el archivo que se esta creando
namespace App\Http\Controllers\Admin;

// Los use equivalen a los import de javascript, es una forma de traer
// otros archivos que contienen código a este archivo
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Http\Requests\Admin\ContactRequest;
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

        $view = View::make('admin.pages.contact.index')
                ->with('contact', $this->contact)
                ->with('contacts', $this->contact);

        if(request()->ajax()) {
            
            $sections = $view->renderSections(); 
    
            return response()->json([
                'table' => $sections['table'],
                'form' => $sections['form'],
            ]); 
        }

        return $view;
    }

    public function create()
    {
       

       $view = View::make('admin.pages.contact.index')
        ->with('contact', $this->contact)
        ->renderSections();      

        return response()->json([
            'form' => $view['form']
            
        ]);
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
                'password' => request('password'),
                'active' => 1,
                'visible' => 1,
        ]);
            
        $view = View::make('admin.pages.contact.index')
        ->with('contacts', $this->contact->where('active', 1)->get())
        ->with('contact', $contact)
        ->renderSections();
        

        return response()->json([
            'table' => $view['table'],
            'form' => $view['form'],
            'id' => $contact->id,
        ]);
    }

    public function edit(Contact $contact)
    {
        $view = View::make('admin.pages.contact.index')
        ->with('contact', $contact)
        ->with('contacts', $this->contact->where('active', 1)->get());   
        
        if(request()->ajax()) {

            $sections = $view->renderSections(); 
    
            return response()->json([
                'form' => $sections['form'],
            ]); 
        }
                
        return $view;
    }

    public function show(Contact $contact){

    }

    public function destroy(Contact $contact)
    {
        $contact->active = 0;
        $contact->save();

        $view = View::make('admin.pages.contact.index')
            ->with('contact', $this->contact)
            ->with('contacts', $this->contact->where('active', 1)->get())
            ->renderSections();
        
        return response()->json([
            'table' => $view['table'],
            'form' => $view['form']
        ]);
    }
}