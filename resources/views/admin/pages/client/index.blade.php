@extends('admin.layout.table_form')

@section('table')
    <div class="table-items">
        @if(isset($clients))
            @foreach($clients as $client_element)
                <div class="table-container">
                    <ul class="table-item-info">
                        <li><span>Id:</span>{{$client_element->id}}</li>
                        <li><span>Nombre:</span>{{$client_element->name}}</li>
                        <li><span>Creado el:</span>{{$client_element->created_at}}</li>                                                                
                    </ul>
                    <div class="table-item-buttons">
                        <div class="edit-button" data-url="{{route('products_categories_edit', ['product_category' => $category_element->id])}}">
                            <svg viewBox="0 0 24 24">
                                <path fill="currentColor" d="M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z" />
                            </svg>
                        </div>
                        <div class="delete-button" data-url="{{route('products_categories_destroy', ['product_category' => $category_element->id])}}">
                            <svg viewBox="0 0 24 24">
                                <path fill="currentColor" d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z" />
                            </svg>    
                        </div>                    
                    </div>      
                </div> 
            @endforeach      
        @endif         
    </div>

    <div class="pagination">
        <div class="pagination-info">
            <ul>
                <li>1 registros</li>
                <li>Mostrando la página 1 de 1</li>
            </ul>
        </div>
        <div class="pagination-navigation">
            <ul>
                <li>Primera</li>
                <li>Anterior</li>
                <li>Siguiente</li>
                <li>Última</li>
            </ul>                          
        </div>   
    </div>         
@endsection
            
@section('form')
    @if(isset($category))
        <div class="tabs-container desktop-only">
            <div class="tabs">

                <div class="tab description-drop">
                    <button class="tab-button active" data-tab="description">Contenido</button>
                </div>
                <div class="tab caracterist-drop">
                    <button class="tab-button" data-tab="specifications">Imágenes</button>        
                </div>
                <div class="form-container-buttons">
                    <div class="svg-box">
                        <div class="store-button" data-url="{{route('products_categories_store')}}">
                            <svg viewBox="0 0 24 24">
                                <path fill="currentColor" d="M15,9H5V5H15M12,19A3,3 0 0,1 9,16A3,3 0 0,1 12,13A3,3 0 0,1 15,16A3,3 0 0,1 12,19M17,3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V7L17,3Z" />
                            </svg>
                        </div>
                        <div class="create-button"data-url="{{route('products_categories_create')}}">
                            <svg viewBox="0 0 24 24">
                                <path fill="currentColor" d="M19.36,2.72L20.78,4.14L15.06,9.85C16.13,11.39 16.28,13.24 15.38,14.44L9.06,8.12C10.26,7.22 12.11,7.37 13.65,8.44L19.36,2.72M5.93,17.57C3.92,15.56 2.69,13.16 2.35,10.92L7.23,8.83L14.67,16.27L12.58,21.15C10.34,20.81 7.94,19.58 5.93,17.57Z" />
                            </svg>
                        </div>                                            
                    </div>                                                                 
                </div>
                <div class="form-swithch-button">
                    <div>
                        <input type="checkbox" hidden="hidden" id="username">
                        <label class="switch" for="username"></label>
                    </div>         
                </div>
            </div>

            <div class="tab-displays desktop-only">
                <div class="tab-display active" data-display="description">
                    <div class="form-content active" data-display="content">
                        <form class='admin-form' action="{{route("products_categories_store")}}">

                            <input type="hidden" name="id" value="{{isset($client->id) ? $client->id : ''}}">

                            <div class="desktop-one-column">
                                <div class="column">
                                    <div class="form-element">
                                        <div class="form-element-label">
                                            <label>Nombre:</label>
                                        </div>
                                        <div class="form-element-input">
                                            <input type="text" name="name" value="{{isset($client->name) ? $client->name : ''}} " placeholder="Escribe aquí tu Nombre" aria-invalid="false">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="desktop-one-column">
                                <div class="column">
                                    <div class="form-element">
                                        <div class="form-element-label">
                                            <label>Apellidos:</label>
                                        </div>
                                        <div class="form-element-input">
                                            <input type="text" name="surname" value="{{isset($client->surname) ? $client->surname : ''}} " placeholder="Escribe aquí tu Título" aria-invalid="false">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="desktop-one-column">
                                <div class="column">
                                    <div class="form-element">
                                        <div class="form-element-label">
                                            <label>Teléfono:</label>
                                        </div>
                                        <div class="form-element-input">
                                            <input type="number" name="phone" value="{{isset($client->phone) ? $client->phone : ''}} " placeholder="Escribe aquí tu Título" aria-invalid="false">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="desktop-one-column">
                                <div class="column">
                                    <div class="form-element">
                                        <div class="form-element-label">
                                            <label>Email:</label>
                                        </div>
                                        <div class="form-element-input">
                                            <input type="text" name="email" value="{{isset($client->email) ? $client->email : ''}} " placeholder="Escribe aquí tu Título" aria-invalid="false">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="desktop-one-column">
                                <div class="column">
                                    <div class="form-element">
                                        <div class="form-element-label">
                                            <label>Código Postal:</label>
                                        </div>
                                        <div class="form-element-input">
                                            <input type="text" name="address" value="{{isset($client->address) ? $client->address : ''}} " placeholder="Escribe aquí tu Título" aria-invalid="false">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="desktop-one-column">
                                <div class="column">
                                    <div class="form-element">
                                        <div class="form-element-label">
                                            <label>Dirección:</label>
                                        </div>
                                        <div class="form-element-input">
                                            <input type="text" name="direction" value="{{isset($client->direction) ? $client->direction : ''}} " placeholder="Escribe aquí tu Título" aria-invalid="false">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>            
                    </div>
                </div>
                </div>             
            </div>
        </div>                    
    @endif
@endsection