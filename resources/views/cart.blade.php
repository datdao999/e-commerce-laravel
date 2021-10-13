@if(Session::has('Cart')!= null)
<table>
    
        @foreach(Session::get('Cart')->products as $newCart)
        <tr>
            <td class="si-pic"><img src="storage/{{$newCart['productInformation']->image}}" alt="" ></td>
            <td class="si-text">
                <div class="product-selected">
                    <p>{{$newCart['productInformation']->price}}₫ x {{$newCart['quantity']}}</p>
                    <h6>{{$newCart['productInformation']->name_product}}</h6>
                </div>
            </td>
            <td class="si-close">
                <i class="fas fa-times" data-id="{{$newCart['productInformation']->id}}"></i>
            </td>
        </tr>
        @endforeach
        <!-- <tr>
            <td class="si-pic"><img src="img/select-product-2.jpg" alt=""></td>
            <td class="si-text">
                <div class="product-selected">
                    <p>₫60.00 x 1</p>
                    <h6>Kabino Bedside Table</h6>
                </div>
            </td>
            <td class="si-close">
                <i class="ti-close"></i>
            </td>
        </tr> -->
    
</table>
<div class="select-total">
    <span>total:</span>
    <h5>{{Session::get('Cart')->totalPrice}}₫</h5>
</div>
<div class="select-button">
    <a href="#" class="primary-btn view-card">VIEW CARD</a>
    <a href="/invoice" class="primary-btn checkout-btn">CHECK OUT</a>
</div>
@endif