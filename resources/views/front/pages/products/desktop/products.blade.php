<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="https://www.youtube.com/s/desktop/12d6b690/img/favicon.ico">

		<title>Productos</title>
		<meta name="description" content="descripción de la web, se recomienda 90 caracteres">
        <meta name="keywords" 	 content="palabras clave, separadas, por comas">

        @include('front.layout.partials.style')
        
</head>
<body>

    @include('front.layout.partials.header')

    <main>
        <div class="products">
            <div class="desktop-two-columns-aside mobile-two-columns-aside">
                <div class="column-aside">
                    <div class="products-category">
                        <div class="products-category-title">
                            <h2>Categorias</h2>
                        </div>
                        <div class="products-category-menu desktop-only">
                            <ul>
                                <li>Hormigón</li>
                                <li>Acero inoxidable</li>
                                <li>Forradas de Liner</li>
                                <li>Con casco de poliéster</li>
                                <li>Desbordantes y de espejo</li>
                                <li>Desmontables</li>
                                <li>Prefabricadas</li>
                            </ul>
                        </div>
                        <div class="products-category-menu mobile-only">
                            <select>
                                <option>Hormigón</option>
                                <option>Acero inoxidable</option>
                                <option>Forradas de Liner</option>
                                <option selected>Con casco de poliéster</option>
                                <option>Desbordantes y de espejo</option>
                                <option>Desmontables</option>
                                <option>Prefabricadas</option>

                            </select>
                        </div>
                    </div>
                </div>

                <div class="column-main">
                    <div class="products-menu">
                        <div class="desktop-two-columns">
                            <div class="column">
                                <div class="products-counter">
                                    <h4>Se muestran 10 de 100 elementos</h4>
                                </div>
                            </div>
                            <div class="column">
                                <div class="products-searcher">
                                    <form>
                                         <input id="header_searcher_desktop_input" data-action="search" name="q" type="text" class="form-control auto_head_search_input" value="" placeholder="Buscar" aria-label="Buscar">
                                    </form> 
                                </div>
                            </div>
                        </div>                 
                    </div>
                    <div class="products-gallery">
                        <div class="desktop-three-columns">
                            <div class="column">
                                <div class="product">
                                    <div class="product-image">
                                        <img src="images/exterior.jpg" alt="destacado">
                                    </div>
                                    <div class="product-title">
                                        <h3>
                                            PROMOCIÓN: 80% DE DESCUENTO
                                        </h3>
                                    </div>
                                    <div class="product-offer">
                                        <button>
                                            <p>HASTA FINAL DE MES</p>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="product">
                                    <div class="product-image">
                                        <img src="images/exterior.jpg" alt="destacado">
                                    </div>
                                    <div class="product-title">
                                        <h3>
                                            PROMOCIÓN: 80% DE DESCUENTO
                                        </h3>
                                    </div>
                                    <div class="product-offer">
                                        <button>
                                            <p>HASTA FINAL DE MES</p>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="product">
                                    <div class="product-image">
                                        <img src="images/exterior.jpg" alt="destacado">
                                    </div>
                                    <div class="product-title">
                                        <h3>
                                            PROMOCIÓN: 80% DE DESCUENTO
                                        </h3>
                                    </div>
                                    <div class="product-offer">
                                        <button>
                                            <p>HASTA FINAL DE MES</p>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="desktop-three-columns">
                            <div class="column">
                                <div class="product">
                                    <div class="product-image">
                                        <img src="images/exterior.jpg" alt="destacado">
                                    </div>
                                    <div class="product-title">
                                        <h3>
                                            PROMOCIÓN: 80% DE DESCUENTO
                                        </h3>
                                    </div>
                                    <div class="product-offer">
                                        <button>
                                            <p>HASTA FINAL DE MES</p>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="product">
                                    <div class="product-image">
                                        <img src="images/exterior.jpg" alt="destacado">
                                    </div>
                                    <div class="product-title">
                                        <h3>
                                            PROMOCIÓN: 80% DE DESCUENTO
                                        </h3>
                                    </div>
                                    <div class="product-offer">
                                        <button>
                                            <p>HASTA FINAL DE MES</p>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="product">
                                    <div class="product-image">
                                        <img src="images/exterior.jpg" alt="destacado">
                                    </div>
                                    <div class="product-title">
                                        <h3>
                                            PROMOCIÓN: 80% DE DESCUENTO
                                        </h3>
                                    </div>
                                    <div class="product-offer">
                                        <button>
                                            <p>HASTA FINAL DE MES</p>
                                        </button>
                                    </div>
                                </div>
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
 