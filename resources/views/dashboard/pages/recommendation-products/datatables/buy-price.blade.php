@if ($data->varianProducts->first())
    @foreach ($data->varianProducts as $varianProduct)
        <div class="d-flex">
            <p>{{ $varianProduct->name }}</p>
            <p>: </p>
            <p>Rp. {{ number_format($varianProduct->buy_price, 2, ',', '.') }}</p>
        </div>
    @endforeach
@else
    <p>Rp. {{ number_format($data->buy_price, 2, ',', '.') }}</p>
@endif
