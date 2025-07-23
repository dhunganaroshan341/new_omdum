<!-- Price Include/Exclude Modal -->
<div class="modal fade" id="priceIncludeModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="priceIncludeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content shadow-lg">
            <form id="priceIncludeForm" class="priceIncludeForm">
                @csrf
                <div class="modal-header bg-info text-white">
                    <h5 class="modal-title" id="priceIncludeModalLabel">
                        <i class="fas fa-money-bill-wave me-2"></i> Add / Edit Price Include/Exclude
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>

                <div class="modal-body px-4 py-3" style="max-height: 70vh; overflow-y: auto;">
                    <div class="row g-4 justify-content-center text-center">

                        <!-- Title -->
                        <div class="col-md-6">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title"
                                placeholder="e.g. Airport Pickup" required>
                        </div>

                        <!-- Price (optional) -->
                        <div class="col-md-6">
                            <label for="price" class="form-label">Price (optional)</label>
                            <input type="text" class="form-control" id="price" name="price"
                                placeholder="e.g. 5000 or Included">
                        </div>

                        <!-- Type: Included or Excluded -->
                        <div class="col-md-6">
                            <label for="is_included" class="form-label">Type</label>
                            <select class="form-select" id="is_included" name="is_included" required>
                                <option value="1">Included</option>
                                <option value="0">Excluded</option>
                            </select>
                        </div>

                        <!-- Description -->
                        <div class="col-md-12">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control summernote" id="description" name="description"
                                placeholder="Write details about the inclusion/exclusion..." style="min-height: 200px;"></textarea>
                        </div>

                        <!-- Hidden -->
                        <input type="hidden" id="tour_package_id_price_include" name="tour_package_id">
                    </div>
                </div>

                <div class="modal-footer px-4 pb-3">
                    <button id="submitPriceIncludeBtn" type="submit" class="btn btn-info w-100">
                        <i class="fas fa-save me-1"></i> Save Item
                    </button>
                    <button id="updatePriceIncludeBtn" type="submit" class="btn btn-primary w-100"
                        style="display: none;">
                        <i class="fas fa-save me-1"></i> Update Item
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
