<div class="cart">
    
    <div class="cart-menu">
        <ul class="list-cart">
            <li>Producto</li>
            <li>Precio</li>
            <li>Unidades</li>
        </ul>
    </div>
    <div class="items-menu">
        
            
        @foreach ($carts as $cart)
            <div class="item-image ">
                <img src="images/prefabricada.jpg" alt="destacado">
            </div>
            <div class="item-name">
                <span>
                    {{$cart->price->product->title}}
                </span>
            </div>
            <div class="item-price">
                <span>
                    {{$cart->price->base_price}} eu/und
                </span>
            </div>
            <div class="product-form">
                <div class="plus-minus-button">
                    <button class="minus" data-url="{{route('front_minus_cart', ['fingerprint' => $fingerprint, 'price_id' => $cart->price_id])}}"> - </button>
                    <form>
                        <input id="numbers" class="plus-minus-input" type="number" name="quantity" value="{{$cart->quantity}}" >
                    </form>
                    <button class="plus" data-url="{{route('front_plus_cart', ['fingerprint' => $fingerprint, 'price_id' => $cart->price_id])}}"> + </button>
                </div>
            </div>
        @endforeach
        
    </div>
    <div class="desktop-one-column">
        <div class="column-box">
            <div class="top-box">
                <h3>Resumen de la compra</h3>
            </div>
            <div class="desktop-two-columns-box">
                <div class="column">
                    <div class="element-checkout-list-left">
                        <ul class="left">
                            <li>IVA</li>
                            <li>Base imponible</li>
                        </ul> 
                    </div>
                </div>
                <div class="column">
                    <div class="element-checkout-list-right">
                        @if(isset($carts))

                            @foreach ($carts as $cart)
                                <li data-tax="{{$cart->cart}}">{{$cart->price->tax_id}}</li>
                                <li data-price="{{$cart->cart}}">{{$cart->price->base_price}} eu</li>
                            @endforeach
                        
                        @endisset
                    </div> 
                </div>
            </div>
            <div class="desktop-two-columns">
                <div class="box-bottom">
                    <ul class="bottom">
                        <li>Total</li>  
                    </ul>
                </div>
                <div class="box-bottom">
                    @if(isset($carts))
                        @foreach ($carts as $cart)
                            <li data-price="{{$cart->cart}}">{{$cart->price->base_price}} eu</li>
                        @endforeach
                    
                    @endif
                    
                </div>
            </div>
        </div> 
    </div>
    <div class="cart-buttons">
        <button>
            Volver
        </button>
        <div class="send-button" data-url="{{route('front_show_checkout')}}">
            
            <button>
                Comprar
            </button>

        </div>
        
    </div>    
</div>
   