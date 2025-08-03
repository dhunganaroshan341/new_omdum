<!-- Button trigger modal -->

<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <form id="pageForm" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" id="page_id">

                <div class="modal-header">
                    <h5 class="modal-title" id="formModalLabel">Add / Edit Page</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    {{-- Validation errors --}}
                    <div id="validationErrors" class="alert alert-danger d-none"></div>

                    <div class="row g-3">

                        <div class="col-md-6">
                            <label for="title" class="form-label">Page Title *</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>

                        <div class="col-md-6">
                            <label for="slug" class="form-label">Slug (URL)</label>
                            <input type="text" class="form-control" id="slug" name="slug">
                        </div>

                        <div class="col-12">
                            <label for="content" class="form-label">Content</label>
                            <textarea class="form-control summernote" name="content" id="content" rows="5"></textarea>
                        </div>

                        {{-- SEO Fields --}}
                        <div class="col-md-6">
                            <label for="meta_title" class="form-label">Meta Title</label>
                            <input type="text" class="form-control" id="meta_title" name="meta_title">
                        </div>

                        <div class="col-md-6">
                            <label for="meta_keywords" class="form-label">Meta Keywords</label>
                            <input type="text" class="form-control" id="meta_keywords" name="meta_keywords">
                        </div>

                        <div class="col-12">
                            <label for="meta_description" class="form-label">Meta Description</label>
                            <textarea class="form-control" id="meta_description" name="meta_description" rows="3"></textarea>
                        </div>

                        {{-- Descriptions --}}
                        <div class="col-md-6">
                            <label for="title1" class="form-label">Title 1</label>
                            <input type="text" class="form-control" name="title1" id="title1">
                        </div>

                        <div class="col-md-6">
                            <label for="title2" class="form-label">Title 2</label>
                            <input type="text" class="form-control" name="title2" id="title2">
                        </div>

                        <div class="col-md-6">
                            <label for="short_desc1" class="form-label summernote">Short Desc 1</label>
                            <input type="text" class="form-control" name="short_desc1" id="short_desc1">
                        </div>

                        <div class="col-md-6">
                            <label for="short_desc2" class="form-label summernote">Short Desc 2</label>
                            <input type="text" class="form-control" name="short_desc2" id="short_desc2">
                        </div>

                        <div class="col-12">
                            <label for="desc1" class="form-label">Long Desc 1</label>
                            <textarea class="form-control summernote" name="desc1" id="desc1" rows="4"></textarea>
                        </div>

                        <div class="col-12">
                            <label for="desc2" class="form-label">Long Desc 2</label>
                            <textarea class="form-control summernote" name="desc2" id="desc2" rows="4"></textarea>
                        </div>

                        {{-- Images --}}
                        {{-- Image 1 --}}
                        <div class="col-md-6">
                            <label for="image1" class="form-label">Image 1</label>
                            <input class="form-control" type="file" id="image1" name="image1"
                                accept="image/*">
                            <div class="mt-2" id="preview_image1"></div> {{-- ⬅️ Image preview will go here --}}
                        </div>

                        {{-- Image 2 --}}
                        <div class="col-md-6">
                            <label for="image2" class="form-label">Image 2</label>
                            <input class="form-control" type="file" id="image2" name="image2"
                                accept="image/*">
                            <div class="mt-2" id="preview_image2"></div>
                        </div>

                        {{-- Video 1 --}}
                        <div class="col-md-6">
                            <label for="video1" class="form-label">Video 1</label>
                            <input class="form-control" type="file" id="video1" name="video1"
                                accept="video/*">
                            <div class="mt-2" id="preview_video1"></div>
                        </div>

                        {{-- Video 2 --}}
                        <div class="col-md-6">
                            <label for="video2" class="form-label">Video 2</label>
                            <input class="form-control" type="file" id="video2" name="video2"
                                accept="video/*">
                            <div class="mt-2" id="preview_video2"></div>
                        </div>


                        {{-- Gallery --}}
                        <div class="col-12">
                            <label for="gallery_images" class="form-label">Gallery Images</label>
                            <input type="file" class="form-control" id="gallery_images" name="gallery_images[]"
                                multiple accept="image/*">
                            <div class="form-text">You can upload multiple images.</div>
                            <ul class="list-unstyled mt-2 gallery-preview"></ul>
                        </div>

                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary submitBtn">Save</button>
                    <button type="submit" class="btn btn-success updateBtn d-none">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
