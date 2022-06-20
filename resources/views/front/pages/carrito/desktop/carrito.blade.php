<div class="cart">
    
    <div class="cart-menu">
        <ul class="list-cart">
            <li>Producto</li>
            <li>Precio</li>
            <li>Unidades</li>
        </ul>
    </div>
    <div class="items-menu">
        @if(isset($cart))

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
                    <button class="minus" data-url="{{route('front_minus_cart', ['fingerprint' => $fingerprint->id], ['price_id' => $price_id->id])}}"> - </button>
                    <form>
                        <input id="numbers" class="plus-minus-input" type="number" name="quantity" value="{{$carts->quantity}}" >
                    </form>
                    <button class="plus" data-url="{{route('front_plus_cart', ['fingerprint' => $fingerprint->id], ['price_id' => $price_id->id])}}"> + </button>
                </div>
            </div>
        @endforeach
        @endif
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
                            <li>Transporte</li>
                        </ul> 
                    </div>
                </div>
                <div class="column">
                    <div class="element-checkout-list-right">
                        <ul class="right">
                            <li>21%</li>
                            <li>Incluido</li>
                        </ul> 
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
                    <ul class="bottom">
                        <li>1250eu</li>   
                    </ul>
                </div>
            </div>
        </div> 
    </div>
    <div class="cart-buttons">
        <button>
            Volver
        </button>
        <button>
            Comprar
        </button>
    </div>    
</div>
   