<div class="products">
    <div class="desktop-two-columns-aside mobile-two-columns-aside">
        <div class="column-aside">
            <div class="products-category">
                <div class="products-category-title">
                    <h2>Categorias</h2>
                </div>               
                <div class="products-category-menu desktop-only">
                    @if(isset($product_categories))
                        @foreach($product_categories as $category_element)
                            <ul data-url="{{$category_element->product}}">
                                <li value="{{$category_element->id}}">{{$category_element->name}}</li>
                                <li value="id">Acero inoxidable</li>
                                <li value="id">Forradas de Liner</li>
                                <li value="id">Con casco de poliéster</li>
                                <li value="id">Desbordantes y de espejo</li>
                                <li value="id">Desmontables</li>
                                <li value="id">Prefabricadas</li>
                            </ul>                                                        
                        @endforeach
                   @endif                
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



{{-- @if(isset($product))
                    <div class="products-category-list">
                        @foreach($product as $products_element)
                            <div class="products-category-list-item">
                                
                            </div>
                        @endforeach
                    </div>
                @endif --}}


                

                