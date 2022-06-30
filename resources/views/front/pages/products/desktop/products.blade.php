<div class="page-section" id="products">

    <div class="products">
        <div class="desktop-two-columns-aside mobile-two-columns-aside">
            <div class="column-aside">
                <div class="products-category">
                    <div class="products-category-title">
                        <h2>Categorías</h2>
                    </div>               
                    <div class="products-category-menu">
                        @if(isset($product_categories))
                            @foreach($product_categories as $category_element)
                            <div class="box-category">
                                <h3 class="category  {{isset($category) && $category->id == $category_element->id ? 'active' : ''}}"data-url="{{route('front_products_category',['category'=>$category_element->id])}}">{{$category_element->name}}</h3>
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
                        <div class="column-form">
                            <form  class="search-form" action="{{route('front_products_search')}}">
                                <div class="wrapper" id="wrapper">
                                    <div class="search" id="search">
                                        <input name="search" type="text" placeholder="Buscar..." >
                                    </div>
                                </div>    
                            </form>
                            <button class="search-button">Enviar</button>
                        </div>
    
                        <div class="order-price">
                            <select class="order-select">Ordenar por precio
                                <option selected>SELECCIONAR</option>                
                                <option value="{{route('front_products_filter', ['order' => 'desc'])}}">Descendente</option>
                                <option value="{{route('front_products_filter', ['order' => 'asc'])}}">Ascendente</option>
                            </select>
                        </div>
                    </div>                 
                </div>
                <div class="products-gallery">
                    <div class="products-list">
                        <div class="products-front">
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
                                        <div class="product-price" data-price="{{$product->product}}">
                                            <span>{{$product->prices->first()->base_price}} eu</span>
                                        </div>
                                        <div class="product-disponibility">
                                            <h3>
                                                EN STOCK
                                            </h3>
                                        </div>
                                        <div class="view-button" data-url="{{route('front_products_show', ['product' => $product->id])}}">
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


 
                

                