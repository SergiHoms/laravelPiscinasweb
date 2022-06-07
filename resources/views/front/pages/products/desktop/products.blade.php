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
                    <div class="product-gallery">
                        <div class="products-list">
                            <div class="products">
                                @if(isset($products))
                                    @foreach($products as $product)
                                        <div class="product">
                                            <div class="product-image">
                                                <img src="images/exterior.jpg" alt="destacado">
                                            </div>
                                            <div class="list" data-list="{{$product->product}}">
                                                <h3>{{$product->title}}</h3>
                                            </div>
                                            <div class="content" data-content="{{$product->product}}">
                                                {!!$product->description!!}                       
                                            </div>
                                            <div class="product-disponibility">
                                                <h3>
                                                    EN STOCK
                                                </h3>
                                            </div>
                                            <div class="view-product">
                                                <button>
                                                    <p>VER PRODUCTO</p>
                                                </button>
                                            </div>                        
                                        </div>     
                                    @endforeach      
                                @endif        
                            </div>
                        </div>
                    </div> 
                </div>  
            </div> 
        </div>
    </div>
</div> 
 

{{-- data-url="{{route'front_product,[product' =>$product ->id))}}; --}}