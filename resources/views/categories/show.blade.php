<h2>{{ $category->name }}</h2>

Products:
<ol>
    @foreach ($products as $product)
        <li>{{ $product->name }} (${{ $product->price }})</li>
    @endforeach
</ol>
