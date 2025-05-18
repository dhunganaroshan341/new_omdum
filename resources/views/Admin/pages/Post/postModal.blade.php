<div class="modal fade" id="formModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form id="formId" class="form">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="postTitle">Add Post</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="validationErrors" class="alert alert-danger d-none"></p>
                    <div class="row">
                        <span class="mt-2 mb-4"><span class="text-danger">Note:</span> (<span
                                class="text-danger">*</span>) symbol represent that the field is required</span>
                        <div class="col-md-12 mb-4">
                            <label for="" class="form-label">Category<span class="text-danger">*</span></label>
                            <select class="form-select" name="post_category_id" id="category_id">
                                <option value="">Select one</option>
                                @foreach ($categories as $index => $category)
                                    <option value="{{ $index }}">{{ $category }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-12 mb-4">
                            @csrf
                            <label for="" class="form-label">Title<span class="text-danger">*</span></label>
                            <input type="text" name="post_title" id="posttitleData" class="form-control"
                                placeholder="" aria-describedby="helpId" />
                        </div>
                        <div class="col-md-12 mb-4">
                            <label for="" class="form-label">Image<span class="text-danger">*</span></label>
                            <input type="file" name="post_images[]" id="post_image" class="form-control" multiple
                                placeholder="" aria-describedby="helpId" />
                            <span class="text-danger infoPostImageText"></span>
                            <div class="postImageData"></div>
                        </div>

                        <div class="mb-3 mb-4">
                            <label for="" class="form-label">Description<span
                                    class="text-danger">*</span></label>
                            <textarea class="form-control summernote" name="post_description" id="post_description" rows="3"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success submitBtn" data-action="">Submit</button>
                    <button type="submit" class="btn btn-success updateBtn" data-action="edit">Update
                        Category</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- Image Crousal --}}
<div class="modal fade" id="imageModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="formId" class="form">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-center" id="postImageTitle">Image List</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner fetch-post-image-data">

                        </div>
                        <button class="carousel-control-prev" type="button"
                            data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button"
                            data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- Comment Lists --}}
<div class="modal fade" id="commentModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="formId" class="form">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 text-center" id="postImageTitle">Comment List</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body fetch-comment-data">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
