@foreach ($products as $products_list)
	<p style="color: #ff2003;">{{$products_list->product_id}}</p>
	{{$products_list->name}} <br>
	{{$products_list->price}} <br>
	{{$products_list->image}} <br>
	{{$products_list->description}} <br>
@endforeach