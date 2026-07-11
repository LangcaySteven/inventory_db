<div class="table-container">
    <div class="table-responsive">
        <table class="table inventory-table align-middle mb-0">

            <thead class="inventory-header">
    <tr class="text-center">
        <th><i class="bi bi-hash me-1"></i> ID</th>
        <th><i class="bi bi-box-seam me-1"></i> Product</th>
        <th><i class="bi bi-tag me-1"></i> Category</th>
        <th><i class="bi bi-boxes me-1"></i> Stock</th>
        <th><i class="bi bi-exclamation-triangle me-1"></i> Min Stock</th>
        <th><i class="bi bi-cash-stack me-1"></i> Price</th>
        <th><i class="bi bi-check-circle me-1"></i> Status</th>
        <th><i class="bi bi-gear me-1"></i> Actions</th>
    </tr>
</thead>

            <tbody>

                @forelse($products as $product)

                <tr>

                   <td>
    <div class="id-circle">
        {{ ($products->currentPage() - 1) * $products->perPage() + $loop->iteration }}
    </div>
</td>

                    <td>
    <div class="d-flex align-items-center">

        <div class="product-icon me-3">

            @switch(strtolower($product->product_name))

                @case('printer ink')
                    <i class="bi bi-printer-fill"></i>
                    @break

                @case('monitor')
                    <i class="bi bi-display-fill"></i>
                    @break

                @case('keyboard')
                    <i class="bi bi-keyboard-fill"></i>
                    @break

                @case('mouse')
                    <i class="bi bi-mouse-fill"></i>
                    @break

                @case('seagate 1tb external hard drive')
                    <i class="bi bi-device-hdd-fill"></i>
                    @break

                @case('hp usb keyboard')
                    <i class="bi bi-keyboard-fill"></i>
                    @break

                @case('logitech wireless mouse')
                    <i class="bi bi-mouse-fill"></i>
                    @break

                @default
                    <i class="bi bi-box-seam-fill"></i>

            @endswitch

        </div>

        <div class="product-name fw-semibold">
            {{ $product->product_name }}
        </div>

    </div>
</td>

                    <td class="text-center">
                        <span class="badge category-badge">
                            {{ $product->category }}
                        </span>
                    </td>

                    <td class="text-center fw-bold">
                        {{ $product->stock }}
                    </td>

                    <td class="text-center">
                        {{ $product->minimum_stock }}
                    </td>

                    <td class="text-center">
    <span class="price">
        ₱{{ number_format($product->price,2) }}
    </span>
</td>

                    <td class="text-center">

                        @if($product->stock <= $product->minimum_stock)

                            <span class="badge bg-danger px-3 py-2 rounded-pill">
                                <i class="fas fa-arrow-trend-down me-1"></i>
                                Low Stock
                            </span>

                        @else

                            <span class="badge bg-success px-3 py-2 rounded-pill">
                                <i class="fas fa-arrow-trend-up me-1"></i>
                                In Stock
                            </span>

                        @endif

                    </td>

                    <td>

                        <div class="d-flex justify-content-center gap-2 flex-wrap">

                            {{-- Edit --}}
                            <a href="{{ route('products.edit', $product->id) }}"
                               class="btn btn-primary btn-sm rounded-circle action-btn">
                                <i class="fas fa-pen"></i>
                            </a>

                            {{-- Adjust Stock --}}
                            <button
                                class="btn btn-warning btn-sm rounded-circle action-btn"
                                data-bs-toggle="modal"
                                data-bs-target="#adjustStockModal"
                                data-id="{{ $product->id }}"
                                data-name="{{ $product->product_name }}"
                                data-stock="{{ $product->stock }}">
                                <i class="fas fa-chart-bar"></i>
                            </button>

                            {{-- Logs --}}
                            <a href="{{ route('products.logs', $product->id) }}"
                               class="btn btn-purple btn-sm rounded-circle action-btn">
                                <i class="fas fa-file-alt"></i>
                            </a>

                            {{-- Delete --}}
                            <form action="{{ route('products.destroy', $product->id) }}"
                                  method="POST"
                                  onsubmit="return confirm('Delete this product?')">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="btn btn-danger btn-sm rounded-circle action-btn">
                                    <i class="fas fa-trash"></i>
                                </button>

                            </form>

                        </div>

                    </td>

                </tr>

                @empty

                <tr>
                    <td colspan="8" class="text-center py-5 text-muted">
                        <i class="fas fa-box-open fa-3x mb-3"></i>
                        <h5>No Products Found</h5>
                        <p>Add your first inventory product.</p>
                    </td>
                </tr>

                @endforelse

            </tbody>

        </table>
    </div>
</div>

<div class="mt-4 d-flex justify-content-center">
    {{ $products->links() }}
</div>