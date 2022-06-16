<div class="product">
    <div class="desktop-two-columns">
        <div class="column">
            <div class="product-gallery">
                <div class="product-main-image">
                    <img src="images/exterior.jpg" alt="destacado">
                </div>
            </div>     
            <div class="product-mini-images">
                <div class="desktop-five-columns">
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
                            {{$product->title}}
                        </h2>
                    </div>
                </div>
                <div class="product-info-price">
                    <div class="product-price">
                        <h3>
                            {{$product->prices->first()->base_price}}
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
                        {!!$product->description!!}              
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
                    </div>
                    <div class="tab-displays desktop-only">
                        <div class="tab-display active" data-display="description">
                            {!!$product->description!!}
                        </div>
                        <div class="tab-display" data-display="specifications">
                            {!!$product->caracterist!!}
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
                    </select>
                    </div>
                    <div class="tab-displays mobile-only">
                        <div class="tab-display active" data-display="description">
                            <p>Piscina desmontable Ultra Frame XTR INTEX</p>
                        </div>
                        <div class="tab-display" data-display="specifications">
                            <p>medidas piscina: 488x122 cm y capacidad: 19.156 litros.</p>
                        </div>                      
                    </div>
                </div>              
                <form class="product-form">
                    <button class="minus"> - </button>
                    
                        <input id="numbers" type="number"name="quantity" value="1" >
                    
                    <button class="plus"> + </button>
                
                <div class="store-button" data-url="">
                    <button >
                        <p>Comprar</p>
                    </button>
                </div>
                <div class="notification">
                    <span id="notification-message"></span>
                </div>                        
                </form>
            </div>
        </div>
    </div>
</div>
 