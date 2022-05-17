<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="https://www.youtube.com/s/desktop/12d6b690/img/favicon.ico">

		<title>Cart</title>
		<meta name="description" content="descripción de la web, se recomienda 90 caracteres">
        <meta name="keywords" 	 content="palabras clave, separadas, por comas">

        @include('front.layout.partials.style')
        
    </head>
    <body>

        @include('front.layout.partials.header')

        <main>
            <div class="cart">
                <div class="title-cart">
                    <h2>Cesta de la compra</h2>
                </div>
                <div class="cart-menu">
                    <ul class="list-cart">
                        <li>Producto</li>
                        <li>Precio</li>
                        <li>Unidades</li>
                    </ul>
                </div>
                <div class="items-menu">
                    <div class="item-image desktop-only">
                        <img src="images/prefabricada.jpg" alt="destacado">
                    </div>
                    <div class="item-name">
                        <span>
                            Piscina climatizada prefabricada
                        </span>
                    </div>
                    <div class="item-price">
                        <span>
                            1060 eu/und
                        </span>
                    </div>
                    <div class="product-form">
                        <div class="plus-minus-button">
                            <button class="minus"> - </button>
                            <form>
                                <input id="numbers" class="plus-minus-input" type="number"name="quantity" value="1" >
                            </form>
                            <button class="plus"> + </button>
                        </div>
                    </div>
                </div>
                <div class="items-menu">
                    <div class="item-image desktop-only">
                        <img src="images/prefabricada.jpg" alt="destacado">
                    </div>
                    <div class="item-name">
                        <span>
                            Piscina climatizada prefabricada
                        </span>
                    </div>
                    <div class="item-price">
                        <span>
                            1060 eu/und
                        </span>
                    </div>
                    <div class="product-form">
                        <div class="plus-minus-button">
                            <button class="minus"> - </button>
                            <form>
                                <input id="numbers" class="plus-minus-input" type="number"name="quantity" value="1" >
                            </form>
                            <button class="plus"> + </button>
                        </div> 
                    </div>
                </div>
                <div class="desktop-one-column mobile-one-column">
                    <div class="column-box">
                        <div class="top-box">
                            <h3>Resumen de la compra</h3>
                        </div>
                        <div class="desktop-two-columns-box mobile-two-columns-box">
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
                        <div class="desktop-two-columns mobile-two-columns-box-bottom">
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
        </main>

        @include('front.layout.partials.footer')

        @include('front.layout.partials.js')

    </body>
</html>
 