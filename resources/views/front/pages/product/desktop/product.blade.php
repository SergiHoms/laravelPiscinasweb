<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="https://www.youtube.com/s/desktop/12d6b690/img/favicon.ico">

		<title>Producto</title>
		<meta name="description" content="descripción de la web, se recomienda 90 caracteres">
        <meta name="keywords" 	 content="palabras clave, separadas, por comas">

        
        @include('front.layout.partials.style')
        
</head>
<body>

    @include('front.layout.partials.header')
    
    <main>
        <div class="product">
            <div class="desktop-two-columns mobile-one-column">
                <div class="column">
                    <div class="product-gallery">
                        <div class="product-main-image">
                            <img src="images/exterior.jpg" alt="destacado">
                        </div>
                    </div>
                  
                    <div class="product-mini-images">
                        <div class="desktop-five-columns mobile-three-columns">
                            <div class="column">
                                <div class="product">
                                    <div class="product-container-image">
                                        <img src="images/exterior.jpg" alt="destacado">
                                    </div>        
                                </div>
                            </div>
                            <div class="column">
                                <div class="product">
                                    <div class="product-container-image">
                                        <img src="images/exterior.jpg" alt="destacado">
                                    </div>        
                                </div>
                            </div>
                            <div class="column">
                                <div class="product">
                                    <div class="product-container-image">
                                        <img src="images/exterior.jpg" alt="destacado">                             
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="product">
                                    <div class="product-container-image">
                                        <img src="images/exterior.jpg" alt="destacado">           
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="product">
                                    <div class="product-container-image">
                                        <img src="images/exterior.jpg" alt="destacado">                                
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div> 
  
                <div class="column">
                    <div class="product-info-article">
                        <div class="product-info">
                            <div class="product-title">
                                <h2>
                                    Piscina Exterior de hormigón
                                </h2>
                            </div>
                        </div>
                        <div class="product-info-price">
                            <div class="product-price">
                                <h3>
                                    1.100 eu/u
                                </h3>
                            </div>
                        </div>
                    
                        <div class="product-info-title">
                            <div class="product-article-title">
                                <h3>Información general:</h3>
                            </div>
                        </div>
                    
                        <div class="product-info desktop-only">
                            <div class="product-article">
                                <p>
                                    Piscina desmontable Ultra Frame XTR INTEX, medidas piscina: 488x122 cm y capacidad: 19.156 litros. Incluye depuradora de arena con capacidad de filtración de 4.500 litros/hora (arena no incluida), escalera de seguridad, tapiz y cobertor. Sistema de aireación Hydro Technology: mejora la calidad de la filtración, aumenta la pureza del agua y mejora la cantidad de iones negativos sobre la superficie del agua
                                </p>
                            </div>
                        </div>

                        <div class="tabs-container desktop-only">
                            <div class="tabs">
                                <div class="tab description-drop">
                                    <button class="tab-button active" data-tab="description">Descripción</button>
                                </div>
                                <div class="tab caracterist-drop">
                                    <button class="tab-button" data-tab="specifications">Características</button>
                                    
                                </div>
                                <div class="tab opinion-drop">
                                    <button class="tab-button" data-tab="opinions">opinión</button>
                                </div>
                            </div>
    
                            <div class="tab-displays desktop-only">
                                <div class="tab-display active" data-display="description">
                                    <p>Piscina desmontable Ultra Frame XTR INTEX</p>
                                </div>
                                <div class="tab-display" data-display="specifications">
                                    <p>medidas piscina: 488x122 cm y capacidad: 19.156 litros.</p>
                                </div>
                                <div class="tab-display" data-display="opinions">
                                    <p>Incluye depuradora de arena con capacidad de filtración de 4.500 litros/hora (arena no incluida), escalera de seguridad, tapiz y cobertor. Sistema de aireación Hydro Technology: mejora la calidad de la filtración, aumenta la pureza del agua y mejora la cantidad de iones negativos sobre la superficie del agua</p>
                                </div>
                            </div>
                        </div>
                        <div class="selects-container mobile-only">
                            <div class="selects">
                            <select name="select">
                                <div class="tab description-drop">
                                    <option class="tab-button active" data-display="description">Descripción</option>
                                </div>
                                <div class="tab caracterist-drop">
                                    <option class="tab-button" data-display="specifications">Características</option>
                                </div>
                                <div class="tab opinion-drop">
                                    <option class="tab-button" data-display="opinions">opiniones</option>
                                </div>       
                            </select>
                            </div>
    
                            <div class="tab-displays mobile-only">
                                <div class="tab-display active" data-display="description">
                                    <p>Piscina desmontable Ultra Frame XTR INTEX</p>
                                </div>
                                <div class="tab-display" data-display="specifications">
                                    <p>medidas piscina: 488x122 cm y capacidad: 19.156 litros.</p>
                                </div>
                                <div class="tab-display" data-display="opinions">
                                    <p>Incluye depuradora de arena con capacidad de filtración de 4.500 litros/hora (arena no incluida), escalera de seguridad, tapiz y cobertor. Sistema de aireación Hydro Technology: mejora la calidad de la filtración, aumenta la pureza del agua y mejora la cantidad de iones negativos sobre la superficie del agua</p>
                                </div>
                            </div>
                        </div>
                        
    
                        <div class="product-form">
                            
                            <button id="minus"> - </button>
                            <form>
                                <input id="numbers" type="number"name="quantity" value="1" >
                            </form>
                            <button id="plus"> + </button>
                        </div>
                        <div class="product-button">
                            <button >
                                <p>Comprar</p>
                            </button>
                        </div>
                        <div class="notification">
                            <span id="notification-message"></span>
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
 