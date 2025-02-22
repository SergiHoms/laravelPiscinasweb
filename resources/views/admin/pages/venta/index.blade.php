
@extends('admin.layout.table_form')

@section('table')
    <div class="table-items">
        @if(isset($ventas))
            @foreach($ventas as $venta_element)
                <div class="table-container">
                    <ul class="table-item-info">
                        <li><span>Id:</span> {{$venta_element->id}}</li>
                        <li><span>Número de ticket:</span> {{$venta_element->ticket_number}}</li>
                        <li><span>Creado el:</span>{{$venta_element->created_at}}</li>                                                                
                    </ul>
                    <div class="table-item-buttons">
                        <div class="edit-button" data-url="{{route('ventas_edit', ['venta' => $venta_element->id])}}">
                            <svg viewBox="0 0 24 24">
                                <path fill="currentColor" d="M20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18,2.9 17.35,2.9 16.96,3.29L15.12,5.12L18.87,8.87M3,17.25V21H6.75L17.81,9.93L14.06,6.18L3,17.25Z" />
                            </svg>
                        </div>
                        <div class="delete-button" data-url="{{route('ventas_destroy', ['venta' => $venta_element->id])}}">
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
                    <div class="store-button">
                        <svg viewBox="0 0 24 24">
                            <path fill="currentColor" d="M15,9H5V5H15M12,19A3,3 0 0,1 9,16A3,3 0 0,1 12,13A3,3 0 0,1 15,16A3,3 0 0,1 12,19M17,3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V7L17,3Z" />
                        </svg>
                    </div>
                    <div class="create-button"data-url="{{route('ventas_create')}}">
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
                    <form class='admin-form' action="{{route("ventas_store")}}">

                        <input type="hidden" name="id" value="{{isset($venta->id) ? $venta->id : ''}} ">
                        
                        <div class="venta">
                            <div class="form-element">
                                <div class="venta-title">
                                    <label>VENTA</label>
                                </div>
                                
                                <div class="desktop-two-columns">
                                    <div class="column">
                                        <div class="form-element">
                                            <div class="form-element-label">
                                                <label>Número de ticket:</label>
                                            </div>
                                            <div class="ticket-input">
                                                <label type="text" name="ticket_number" aria-invalid="false">{{$venta->ticket_number}}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="form-element">
                                            <div class="form-element-label">
                                                <label>Método de pago:</label>
                                            </div>
                                            <div class="method-input">
                                                <label type="text" name="method">{{$venta->payment_method}}</label>
                                            </div>
                                        </div> 
                                    </div>
                                </div>

                                <div class="desktop-two-columns">
                                    <div class="column">
                                        <div class="form-element">
                                            <div class="form-element-label">
                                                <label>Fecha:</label>
                                            </div>
                                            <div class="date-input">
                                                <label type="text" name="date">{{$venta->date_emision}}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="form-element">
                                            <div class="form-element-label">
                                                <label>Hora:</label>
                                            </div>
                                            <div class="time-input">
                                                <label type="text" name="time">{{$venta->time_emision}}</label>
                                            </div>
                                        </div> 
                                    </div>
                                </div>

                                <div class="precios">

                                    <div class="column">
                                        <div class="form-element">
                                            <div class="form-element-label">
                                                <label>Precio base total:</label>
                                            </div>
                                            <div class="base-price">
                                                <label type="text" name="base_price">{{$venta->total_base_price}}</label>
                                            </div>
                              
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="form-element">
                                            <div class="form-element-label">
                                                <label>Total del impuesto añadido al precio:</label>
                                            </div>

                                            <div class="taxe-price">
                                                <label type="text" name="tax_total">{{$venta->total_tax_price}} </label>
                                            </div>
                                            
                                        </div> 
                                    </div>
                                    <div class="column">
                                        <div class="form-element">
                                            <div class="form-element-label">
                                                <label>Precio total:</label>
                                            </div>
                                            
                                            <div class="total-price">
                                                <label type="text" name="total_price">{{$venta->total_price}} </label>
                                            </div>

                                        </div> 
                                    </div>
                                </div>                         
                            </div>                           
                        </div>

                        <div class="cliente">
                            <div class="column">
                                <div class="form-element">
                                    <div class="client-title">
                                        <label>CLIENTE</label>
                                    </div>
                                </div>

                                <div class="desktop-two-columns">
                                    <div class="column">
                                        <div class="form-element">
                                            <div class="form-element-label">
                                                <label>Nombre:</label>
                                            </div>
                                            <div class="name-input">
                                                <label type="text" name="name">{{isset($venta->client->name) ? $venta->client->name : ''}}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="form-element">
                                            <div class="form-element-label">
                                                <label>Apellidos:</label>
                                            </div>
                                            <div class="surname-input">
                                                <label type="text" name="surname">{{isset($venta->client->surname) ? $venta->client->surname : ''}}</label>
                                            </div>
                                        </div> 
                                    </div>
                                </div>

                                <div class="desktop-two-columns">
                                    <div class="column">
                                        <div class="form-element">
                                            <div class="form-element-label">
                                                <label>Teléfono:</label>
                                            </div>
                                            <div class="name-input">
                                                <label type="text" name="phone">{{isset($venta->client->phone) ? $venta->client->phone : ''}}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="form-element">
                                            <div class="form-element-label">
                                                <label>Email:</label>
                                            </div>
                                            <div class="surname-input">
                                                <label type="text" name="email">{{isset($venta->client->email) ? $venta->client->email : ''}}</label>
                                            </div>
                                        </div> 
                                    </div>
                                </div>

                                <div class="desktop-two-columns">
                                    <div class="column">
                                        <div class="form-element">
                                            <div class="form-element-label">
                                                <label>Ciudad:</label>
                                            </div>
                                            <div class="name-input">
                                                <label type="text" name="city">{{isset($venta->client->city) ? $venta->client->city : ''}}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="form-element">
                                            <div class="form-element-label">
                                                <label>Dirección:</label>
                                            </div>
                                            <div class="surname-input">
                                                <label type="text" name="address">{{isset($venta->client->address) ? $venta->client->address : ''}}</label>
                                            </div>
                                        </div> 
                                    </div>
                                </div>  

                                

                            </div>
                        </div>

                        <div class="producto">

                            <div class="column">
                                <div class="form-element">
                                    <div class="product-title">
                                        <label>PRODUCTO</label>
                                    </div>
                                </div>

                                <div class="product-list">
                                    <div class="product-name">
                                        <label>Nombre:</label>
                                    </div>

                                    <div class="product-price">
                                        <label>Precio:</label>
                                    </div>

                                    <div class="product-quantity">
                                        <label>Cantidad:</label>
                                    </div>
                                </div>

                                <div class="product-display">
                                    
                                    <div class="product-list">
                                        <div class="product-name">
                                            <label type=text name="name">{{$venta->title}}</label>
                                        </div>

                                        <div class="product-price">
                                            <label>{{$venta->total_base_price}}</label>
                                        </div>

                                        <div class="product-quantity">
                                            <label></label>
                                        </div>
                                    </div>
                                    
                                </div>

                            </div>
                        </div> 
                    </form>            
                </div>
            </div>
        
        </div>
    </div>                    

@endsection
      