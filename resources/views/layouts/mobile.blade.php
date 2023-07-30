<li class="main-menu-item position-static"><a href="#" class="main-menu-link">Shop</a>
    <!-- mega menu start -->
    <ul class="mega-menu">
    @foreach($categories as $category => $subcategories)
        <li class="mega-menu-item">
        {{ $category }}
            <!-- sub-mega-menu start -->
            <ul class="sub-mega-menu">
            @foreach($subcategories as $subID => $subcategory)
                <li class="sub-mega-menu-item"><a class="sub-mega-menu-link" href="/{{ $subID }}/products">{{ $subcategory }}
                    </a>
                </li>
            @endforeach
                @endforeach
            </ul>
            <!-- sub-mega-menu end -->
        </li>
    </ul>
    <!-- mega menu end -->
</li>
