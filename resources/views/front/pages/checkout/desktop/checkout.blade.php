<div class="checkout">
    
    <div class="desktop-two-columns">
        <div class="column">
            <div class="checkout-form">
                <form class="front-form" action="{{route('front_checkout_store')}}">
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
                                    <input type="tel" name="phone" placeholder="Escribe aquí " aria-invalid="false">
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="form-element-checkout">
                                <div class="form-element-label">
                                    <label>Email</label>
                                </div>
                                <div class="form-element-input">
                                    <input type="email" name="email" placeholder="Escribe aquí" aria-invalid="false">
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
                                    <input type="email" name="postal-code" placeholder="Escribe aquí " aria-invalid="false">
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
                            <input type="email" name="address" placeholder="Escribe aquí " size="0" aria-invalid="false">
                        </div>
                    </div> 
                </div>
                
                    <input type="hidden" id="tax_total" value="{{$tax_total}}" name="tax_total">
                    <input type="hidden" id="total" value="{{'total'}}" name="total">
                    <input type="hidden" id="total_base_price" value="{{'base_total'}}" name="total_base_price">
                    <input type="hidden" id="fingerprint" value="{{$fingerprint}}" name="fingerprint">

                </form>
            </div>  
        </div>
        <div class="column">
            <div class="checkout-end">
                <div class="desktop-one-columns">
                    <div class="column-box">
                        <div class="top-box">
                            <h3>Resumen de la compra</h3>
                        </div>
                
                        <div class="desktop-two-columns-box">
                            <div class="column">
                                <div class="element-checkout-list-left">
                                    <ul class="left">
                                        <li>IVA</li>
                                        <li>Total</li>
                                    </ul> 
                                </div>
                            </div>
                            <div class="column">
                                <div class="element-checkout-list-right">
                                    <ul class="left">
                                        <li>{{$tax_total}} eu</li>
                                        <li>{{$total}} eu</li>
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
                    <div class="successful-button" data-url="{{route('front_checkout_store')}}">
                        <button>
                            <span>Pagar</span>
                        </button>
                    </div>                                                                                   
                </div>
            </div>
        </div>
    </div>
</div>

            