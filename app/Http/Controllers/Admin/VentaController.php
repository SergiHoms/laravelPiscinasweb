<?php


namespace App\Http\Controllers\Admin;


use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Venta;
use App\Models\Client;
use App\Http\Requests\Admin\VentaRequest;
use Debugbar;

class VentaController extends Controller
{
     

    protected $venta;
    protected $client;


    

    public function __construct(Venta $venta, Client $client)
    {
    
        $this->venta = $venta;
        $this->client = $client;
    }
    
    public function index()
    {

        $view = View::make('admin.pages.venta.index')
                ->with('venta', $this->venta)
                ->with('ventas', $this->venta->where('active', 1)->get())
                ->with('client', $this->client)
                ->with('clients', $this->client->where('active', 1)->get());


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
        

       $view = View::make('admin.pages.venta.index')
        ->with('venta', $this->venta)
        ->renderSections();

        

        return response()->json([
            'form' => $view['form']
            
        ]);
    }

    public function store(VentaRequest $request)
    {            
    
        $venta = $this->venta->updateOrCreate([
                'id' => request('id')],[
                'ticket' => request('ticket_number'),
                'name' => request('name'),
                'surname' => request('surname'),
                'title' => request('title'),
                'description' => request('description'),
                'visible' => 1,
                'active' => 1,
        ]);
            
        $view = View::make('admin.pages.venta.index')
        ->with('ventas', $this->venta->where('active', 1)->get())
        ->with('venta', $venta)
        ->renderSections();
            

        return response()->json([
            'table' => $view['table'],
            'form' => $view['form'],
            'id' => $venta->id,
        ]);
    }

    public function edit(Venta $venta, )
    {

        Debugbar::info($venta->client->name);
        debugbar::info($venta->client->surname);
        debugbar::info($venta->client->email);
        debugbar::info($venta->client->phone);
        debugbar::info($venta->client->address);
        debugbar::info($venta->client->city);


        $view = View::make('admin.pages.venta.index')
        ->with('venta', $venta)
        ->with('ventas', $this->venta->where('active', 1)->get());   
        
        if(request()->ajax()) {

            $sections = $view->renderSections(); 
    
            return response()->json([
                'form' => $sections['form'],
            ]); 
        }
                
        return $view;
    }

    public function show(Venta $venta){

    }

    public function destroy(Venta $venta)
    {
        $venta->active = 0;
        $venta->save();

        $view = View::make('admin.pages.venta.index')
            ->with('venta', $this->venta)
            ->with('ventas', $this->venta->where('active', 1)->get())
            ->renderSections();
        
        return response()->json([
            'table' => $view['table'],
            'form' => $view['form']
        ]);
    }
}