    <a href="{{ url('checkout') }}" class="jsDrawerOpenRight">
        <i class="iconCart"></i>
        <span class="title">Cart</span>
        <span id="CartCount">{{ Shpcart::cart()->total_items() }}</span>
        <span>items</span>
        <span id="CartCost">{{ price(Shpcart::cart()->total() )}}</span>
    </a>