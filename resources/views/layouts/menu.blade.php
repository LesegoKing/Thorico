<ul class="mega-menu">
    @foreach($categories as $category => $subcategories)
        <li class="mega-menu-item">
            {{ $category }}
            <!-- sub-mega-menu start -->
            <ul class="sub-mega-menu">
                @foreach($subcategories as $subID => $subcategory)
                <li class="sub-mega-menu-item">
                    <a class="sub-mega-menu-link" href="/{{ $subID }}/products">{{ $subcategory }}</a>
                </li>
                @endforeach
            </ul>
        </li>
    @endforeach
</ul>




