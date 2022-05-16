<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="https://www.youtube.com/s/desktop/12d6b690/img/favicon.ico">

		<title>Checkout</title>
		<meta name="description" content="descripción de la web, se recomienda 90 caracteres">
        <meta name="keywords" 	 content="palabras clave, separadas, por comas">

        
        <link href="style/main-mobile.css" rel="stylesheet">
        <!-- <link href="style/main.css" rel="stylesheet"> -->
    </head>
    <body>
        <header>
            <div class="header">
                <div class="header-navigation-mobile mobile-only" id="menu">
                    <ul>
                        <li>INICIO</li>
                        <li>PRODUCTOS</li>
                        <li>CONTACTO</li>
                    </ul>
                </div>
                <div class="desktop-three-columns mobile-two-columns">
                    <div class="column">
                        <div class="header-title">
                            <h1>PISCINAS LLOSETA</h1>
                        </div>
                    </div>
                    <div class="column mobile-only">
                        <div class="hamburger-menu-button mobile-only" id="hamburger">
                            <svg  viewBox="0 0 32 22.5">
                                <g class="hamburger-menu-button-svg" >
                                    <path class="bar" d="M20.945,8.75c0,0.69-0.5,1.25-1.117,1.25H3.141c-0.617,0-1.118-0.56-1.118-1.25l0,0
                                        c0-0.69,0.5-1.25,1.118-1.25h16.688C20.445,7.5,20.945,8.06,20.945,8.75L20.945,8.75z">
                                    </path>
                                    <path class="bar" d="M20.923,15c0,0.689-0.501,1.25-1.118,1.25H3.118C2.5,16.25,2,15.689,2,15l0,0c0-0.689,0.5-1.25,1.118-1.25 h16.687C20.422,13.75,20.923,14.311,20.923,15L20.923,15z">
                                    </path>
                                    <path class="bar" d="M20.969,21.25c0,0.689-0.5,1.25-1.117,1.25H3.164c-0.617,0-1.118-0.561-1.118-1.25l0,0
                                        c0-0.689,0.5-1.25,1.118-1.25h16.688C20.469,20,20.969,20.561,20.969,21.25L20.969,21.25z">
                                    </path>
                                    <rect  fill="none"></rect>
                                </g>
                            </svg>
                        </div>
                    </div>
    
                    <div class="column desktop-only">
                        <div class="header-navigation">
                            <ul>
                                <li>INICIO</li>
                                <li>PRODUCTOS</li>
                                <li>CONTACTO</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
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
        <footer>
            <div class="footer">
                <div class="desktop-one-columns">
                    <div class="column">
                        <div class="footer-title">
                            <h2>PISCINAS LLOSETA</h2>
                        </div>
                        <div class="column">
                            <div class="footer-names">
                                <ul class="footer-list">
                                    <li>Quienes somos</li>
                                    <li>Publicidad</li>
                                    <li>Contacto</li>
                                    <li>Aviso Legal</li>
                                    <li>Política de cookies</li>
                                    <li>Consentimiento</li>
                                    <li>Status</li>
                                </ul>
                            </div>     
                        </div>
                    </div>  
                </div>
            </div>    
        </footer>

        <script type="module" src="dist/app.js"></script>

    </body>
</html>