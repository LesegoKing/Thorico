<ul >
    @foreach($categories as $category => $subcategories)
        <li>
            {{ $category }}
            <!-- sub-mega-menu start -->
            <ul>
                @foreach($subcategories as $subID => $subcategory)
                <li>
                    <a href="/{{ $subID }}/products">{{ $subcategory }}</a>
                </li>
                @endforeach
            </ul>
        </li>
    @endforeach
</ul>
