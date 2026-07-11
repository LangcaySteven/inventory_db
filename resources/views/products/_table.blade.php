<div class="table-responsive shadow rounded-4 border">
    <table class="table table-hover align-middle mb-0">
        <thead style="background:#4B5563; color:white;">
            <tr class="text-center">
                <th class="py-3">#</th>
                <th class="py-3">📦 Product Name</th>
                <th class="py-3">📂 Category</th>
                <th class="py-3">📊 Stock</th>
                <th class="py-3">⚠️ Min Stock</th>
                <th class="py-3">💰 Price</th>
                <th class="py-3">📌 Status</th>
                <th class="py-3">⚙️ Actions</th>
            </tr>
        </thead>

        <tbody>

            @forelse($products as $product)

            <tr class="text-center">

                <td class="fw-bold text-secondary">
                    {{ ($products->currentPage() - 1) * $products->perPage() + $loop->iteration }}
                </td>

                <td class="fw-semibold text-dark">
                    {{ $product->product_name }}
                </td>

                <td>
                    <span class="badge rounded-pill px-3 py-2"
                        style="background:#14B8A6;">
                        {{ $product->category }}
                    </span>
                </td>

                <td class="fw-semibold">
                    {{ $product->stock }}
                </td>

                <td>
                    {{ $product->minimum_stock }}
                </td>

                <td class="fw-bold text-success">
                    ₱{{ number_format($product->price,2) }}
                </td>

                <td>

                    @if($product->stock <= $product->minimum_stock)

                        <span class="badge rounded-pill px-3 py-2 bg-danger">
                            Low Stock
                        </span>

                    @else

                        <span class="badge rounded-pill px-3 py-2 bg-success">
                            In Stock
                        </span>

                    @endif

                </td>

                <td>

                    <div class="d-flex justify-content-center gap-2 flex-wrap">

                        <a href="{{ route('products.edit', $product->id) }}"
                            class="btn btn-sm text-white"
                            style="background:#3B82F6;border-radius:10px;">
                            ✏️
                        </a>

                        <button
                            class="btn btn-sm text-white"
                            style="background:#F59E0B;border-radius:10px;"
                            data-bs-toggle="modal"
                            data-bs-target="#adjustStockModal"
                            data-id="{{ $product->id }}"
                            data-name="{{ $product->product_name }}"
                            data-stock="{{ $product->stock }}">
                            📈
                        </button>

                        <a href="{{ route('products.logs', $product->id) }}"
                            class="btn btn-sm text-white"
                            style="background:#8B5CF6;border-radius:10px;">
                            📜
                        </a>

                        <form action="{{ route('products.destroy', $product->id) }}"
                            method="POST"
                            onsubmit="return confirm('Are you sure you want to delete this product?');">

                            @csrf
                            @method('DELETE')

                            <button
                                class="btn btn-sm text-white"
                                style="background:#EF4444;border-radius:10px;">
                                🗑️
                            </button>

                        </form>

                    </div>

                </td>

            </tr>

            @empty

            <tr>

                <td colspan="8" class="text-center py-5 text-muted">
                    <h5>No Products Found</h5>
                    <small>Add your first inventory product.</small>
                </td>

            </tr>

            @endforelse

        </tbody>

    </table>
</div>

<div class="mt-4 d-flex justify-content-center">
    {{ $products->links() }}
</div>