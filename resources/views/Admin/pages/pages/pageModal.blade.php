<!-- Page Form Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable"> <!-- wider modal for description -->
        <div class="modal-content">
            <form id="pageForm" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title" id="formModalLabel">Add / Edit Page</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <!-- Validation Errors -->
                    <div id="validationErrors" class="alert alert-danger d-none"></div>

                    <div class="mb-3">
                        <label for="page_title" class="form-label">Page Title</label>
                        <input type="text" class="form-control" id="page_title" name="title"
                            placeholder="Enter page title" required>
                    </div>

                    <div class="mb-3">
                        <label for="page_description" class="form-label">Description</label>
                        <textarea class="form-control summernote" id="page_description" name="description" rows="6"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="seo_title" class="form-label">SEO Title</label>
                        <input type="text" class="form-control" id="seo_title" name="seo_title"
                            placeholder="Enter SEO title">
                    </div>

                    <div class="mb-3">
                        <label for="seo_description" class="form-label">SEO Description</label>
                        <textarea class="form-control" id="seo_description" name="seo_description" rows="3"
                            placeholder="Enter SEO description"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="page_images" class="form-label">Upload Images</label>
                        <input class="form-control" type="file" id="page_images" name="images[]" multiple
                            accept="image/*">
                        <small class="form-text text-muted">You can upload multiple images.</small>
                        <ul class="list-unstyled mt-2 pageImageData"></ul> <!-- preview/removal of existing images -->
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" type="checkbox" id="status" name="status" checked>
                        <label class="form-check-label" for="status">Active</label>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary submitBtn">Save</button>
                    <button type="button" class="btn btn-success updateBtn d-none">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
