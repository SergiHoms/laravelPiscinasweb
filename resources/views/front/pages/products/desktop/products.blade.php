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
                        <div class="box-category"data-url="{{route('front_product')}}">
                            <h3 class="category{{isset($category) && $category_element->id == $category_element->id ? 'active' : ''}}"data-url="{{route('front_products_show',['front_product'=>$category_element->id])}}">{{$category_element->name}}</h3>
                        </div>                                                        
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
                            <form action="{{route('front_products_show')}}" method="GET">
                                <input type="text" name="search" placeholder="Buscar...">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            @if(isset($products))
                                @foreach($products as $product)
                            
                                <select name="price-list" class="form-control mr-sm-2">
                                    <option >Todos los productos</option>
                                    <option value="{{$product->product}}" >Precio más alto</option>
                                    <option value="2">Precio más bajo</option>
                                </select>       
                                <button class="button-submit" type="submit">Buscar</button>
                            </form> 
                                @endforeach
                        @endif
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
                                            <div class="view-button">
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


                

                