<html>
<head>
    <title>Order PDF</title>
</head>
<body>
    <h1>Order Details</h1>

    Customer Name:<h3>{{$order->name}}</h3>
    Customer email:<h3>{{$order->email}}</h3>
    Customer phone:<h3>{{$order->phone}}</h3>
    Customer address:<h3>{{$order->address}}</h3>
    Customer ID:<h3>{{$order->user_id}}</h3>
    Product Name<h3>{{$order->product_title}}</h3>
    Product price<h3>{{$order->price}}</h3>
    Product quantity<h3>{{$order->quantity}}</h3>
    Product status<h3>{{$order->payment_status}}</h3>
    Product ID<h3>{{$order->product_id}}</h3>
    <br>
    <img height='250' width='450' src='product/{{$order->image}}'>
</body>

</<html>