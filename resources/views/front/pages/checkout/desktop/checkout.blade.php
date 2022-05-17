<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="https://www.youtube.com/s/desktop/12d6b690/img/favicon.ico">

		<title>Checkout</title>
		<meta name="description" content="descripción de la web, se recomienda 90 caracteres">
        <meta name="keywords" 	 content="palabras clave, separadas, por comas">

        
        @include('front.layout.partials.style')
        
    </head>
    <body>

        @include('front.layout.partials.header')
        
        <main>
            <div class="checkout">
                <div class="title-checkout">
                    <h2>Finalizar compra</h2>
                </div>
                <div class="desktop-two-columns mobile-one-column">
                    <div class="column">
                        <div class="checkout-form">
                            <form>
                                <div class="desktop-two-columns">
                                    <div class="column">
                                        <div class="form-element-checkout">
                                            <div class="form-element-label">
                                                <label>Nombre</label>
                                            </div>
                                            <div class="form-element-input">
                                                <input type="text" name="name" placeholder="Escribe aquí " aria-invalid="false">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="form-element-checkout">
                                            <div class="form-element-label">
                                                <label>Apellidos</label>
                                            </div>
                                            <div class="form-element-input">
                                                <input type="text" name="surname" placeholder="Escribe aquí " aria-invalid="false">
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                                <div class="desktop-two-columns">
                                    <div class="column">
                                        <div class="form-element-checkout">
                                            <div class="form-element-label">
                                                <label>Teléfono</label>
                                            </div>
                                            <div class="form-element-input">
                                                <input type="tel" name="box" placeholder="Escribe aquí " aria-invalid="false">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="form-element-checkout">
                                            <div class="form-element-label">
                                                <label>Email</label>
                                            </div>
                                            <div class="form-element-input">
                                                <input type="email" name="box" placeholder="Escribe aquí" aria-invalid="false">
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                                <div class="desktop-two-columns">
                                    <div class="column">
                                        <div class="form-element-checkout">
                                            <div class="form-element-label">
                                                <label>Ciudad</label>
                                            </div>
                                            <div class="form-element-input">
                                                <input list="cities" name="city">
                                                <datalist id="cities">
                                                    <option value="Palma">
                                                    <option value="Manacor">
                                                    <option value="Inca">
                                                    <option value="Alcudia">
                                                    <option value="Lloseta">
                                                  </datalist>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="form-element">
                                            <div class="form-element-label">
                                                <label>Código postal</label>
                                            </div>
                                            <div class="form-element-input">
                                                <input type="email" name="box" placeholder="Escribe aquí " aria-invalid="false">
                                            </div>
                                        </div> 
                                    </div>           
                            </div>
                            <div class="column">
                                <div class="form-element">
                                    <div class="form-element-label">
                                        <label>Dirección</label>
                                    </div>
                                    <div class="form-element-input">
                                        <input type="email" name="box" placeholder="Escribe aquí " size="0" aria-invalid="false">
                                    </div>
                                </div> 
                            </div>           
                            </form>
                        </div>  
                    </div>
                    <div class="column">
                        <div class="checkout-end">
                            <div class="desktop-one-columns mobile-one-column">
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
                                                    <li>Total</li>
                                                </ul> 
                                            </div>
                                        </div>
                                        <div class="column">
                                            <div class="element-checkout-list-right">
                                                <ul class="left">
                                                    <li>21%</li>
                                                    <li>Incluido</li>
                                                    <li>1125eu</li>
                                                </ul> 
                                            </div> 
                                        </div>
                                    </div> 
                                </div> 
                                </form>
                            </div>


                
                            <div class="column-how">
                                <div class="input-form">
                                    <form>
                                        <input type="radio" id="html" name="fav_language" value="HTML">
                                        <label for="html">Transferencia bancaria</label><br>
                                        <input type="radio" id="css" name="fav_language" value="CSS">
                                        <label for="css">Paypal</label><br>
                                        <input type="radio" id="javascript" name="fav_language" value="JavaScript">
                                        <label for="javascript">Tarjeta de crédito</label>
                                    </form>
                                </div>
                            </div>
                            <div class="column-pay">
                                <div class="input-button">
                                    <form>
                                        <div class="form-send-button">
                                            <button>
                                                <span>Pagar</span>
                                            </button>
                                        </div>                     
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>

        @include('front.layout.partials.footer')

        @include('front.layout.partials.js')

    </body>
</html>