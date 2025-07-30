<!-- Page Form Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl custom-scrollable-modal">
        <div class="modal-content d-flex flex-column" style="height: 80vh;">
            <form id="pageForm" enctype="multipart/form-data" class="d-flex flex-column flex-grow-1">
                @csrf
                <input type="hidden" name="id" id="page_id">

                <div class="modal-header flex-shrink-0">
                    <h5 class="modal-title" id="formModalLabel">Add / Edit Page</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body overflow-auto flex-grow-1">
                    <div id="validationErrors" class="alert alert-danger d-none"></div>

                    <div class="container-fluid">
                        <!-- Smaller fields in two columns -->
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label for="title" class="form-label">Page Title *</label>
                                <input type="text" class="form-control form-control-sm" id="title" name="title"
                                    required>
                            </div>

                            <div class="col-md-6">
                                <label for="slug" class="form-label">Slug (URL)</label>
                                <input type="text" class="form-control form-control-sm" id="slug"
                                    name="slug">
                            </div>

                            <div class="col-md-6">
                                <label for="meta_title" class="form-label">Meta Title</label>
                                <input type="text" class="form-control form-control-sm" id="meta_title"
                                    name="meta_title">
                            </div>

                            <div class="col-md-6">
                                <label for="meta_keywords" class="form-label">Meta Keywords</label>
                                <input type="text" class="form-control form-control-sm" id="meta_keywords"
                                    name="meta_keywords">
                            </div>

                            <div class="col-12">
                                <label for="meta_description" class="form-label">Meta Description</label>
                                <textarea class="form-control form-control-sm" id="meta_description" name="meta_description" rows="2"></textarea>
                            </div>
                        </div>

                        <!-- Larger textareas for content and descriptions -->
                        <div class="mb-3">
                            <label for="content" class="form-label">Content</label>
                            <textarea class="form-control summernote" name="content" id="content" rows="5"></textarea>
                        </div>

                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label for="title1" class="form-label">Title 1</label>
                                <input type="text" class="form-control form-control-sm" name="title1"
                                    id="title1">
                            </div>

                            <div class="col-md-6">
                                <label for="title2" class="form-label">Title 2</label>
                                <input type="text" class="form-control form-control-sm" name="title2"
                                    id="title2">
                            </div>

                            <div class="col-md-6">
                                <label for="short_desc1" class="form-label">Short Desc 1</label>
                                <input type="text" class="form-control form-control-sm" name="short_desc1"
                                    id="short_desc1">
                            </div>

                            <div class="col-md-6">
                                <label for="short_desc2" class="form-label">Short Desc 2</label>
                                <input type="text" class="form-control form-control-sm" name="short_desc2"
                                    id="short_desc2">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="desc1" class="form-label">Long Desc 1</label>
                            <textarea class="form-control summernote" name="desc1" id="desc1" rows="4"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="desc2" class="form-label">Long Desc 2</label>
                            <textarea class="form-control summernote" name="desc2" id="desc2" rows="4"></textarea>
                        </div>

                        <!-- File inputs grouped nicely -->
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label for="image1" class="form-label">Image 1</label>
                                <input class="form-control form-control-sm" type="file" id="image1"
                                    name="image1" accept="image/*">
                            </div>

                            <div class="col-md-6">
                                <label for="image2" class="form-label">Image 2</label>
                                <input class="form-control form-control-sm" type="file" id="image2"
                                    name="image2" accept="image/*">
                            </div>

                            <div class="col-md-6">
                                <label for="video1" class="form-label">Video 1</label>
                                <input class="form-control form-control-sm" type="file" id="video1"
                                    name="video1" accept="video/*">
                            </div>

                            <div class="col-md-6">
                                <label for="video2" class="form-label">Video 2</label>
                                <input class="form-control form-control-sm" type="file" id="video2"
                                    name="video2" accept="video/*">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="gallery_images" class="form-label">Gallery Images</label>
                            <input type="file" class="form-control form-control-sm" id="gallery_images"
                                name="gallery_images[]" multiple accept="image/*">
                            <div class="form-text">You can upload multiple images.</div>
                            <ul class="list-unstyled mt-2 gallery-preview"></ul>
                        </div>
                    </div>
                </div>

                <div class="modal-footer flex-shrink-0">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary submitBtn">Save</button>
                    <button type="button" class="btn btn-success updateBtn d-none">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
