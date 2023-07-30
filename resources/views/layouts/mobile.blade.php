<li>
    <a href="#">Shop</a>
    <!-- mega menu start -->
    <ul>
    @foreach($categories as $category => $subcategories)
        <li >
            {{ $category }}
            <!-- sub-mega-menu start -->
            <ul >
            @foreach($subcategories as $subID => $subcategory)
                <li >
                    <a href="/{{ $subID }}/products">{{ $subcategory }}</a>
                </li>
            @endforeach
            </ul>
            <!-- sub-mega-menu end -->
        </li>
    @endforeach
    </ul>
    <!-- mega menu end -->
</li>
