<ul>
    @foreach ($categories as $category)
        <li>
            <a href="{{ route('categories.show', $category) }}">{{ $category->name }}</a>
            ({{ $category->subcategories->map(function($subcategory) {
                return $subcategory->subcategories->sum('products_count');
            })->sum() }})
        </li>
        @if ($category->subcategories)
            <ul>
                @foreach ($category->subcategories as $subcategory)
                    <li>
                        <a href="{{ route('categories.show', $subcategory) }}">{{ $subcategory->name }}</a>
                        ({{ $subcategory->subcategories->sum('products_count') }})
                    </li>
                    @if ($subcategory->subcategories)
                        <ul>
                        @foreach ($subcategory->subcategories as $subsubcategory)
                            <li>
                                <a href="{{ route('categories.show', $subsubcategory) }}">{{ $subsubcategory->name }}</a>
                                ({{ $subsubcategory->products_count }})
                            </li>
                        @endforeach
                        </ul>
                    @endif
                @endforeach
            </ul>
        @endif
    @endforeach
</ul>
