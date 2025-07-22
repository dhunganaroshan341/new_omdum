<div class="modal fade" id="formModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content shadow">
            <form id="formId" class="form">
                @csrf

                <!-- Modal Header -->
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title">
                        <i class="fas fa-plus-circle me-2"></i> Create Tour Package
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body px-4 py-3" style="max-height: calc(100vh - 200px); overflow-y: auto;">

                    <div class="row g-4">

                        <div class="col-md-6">
                            <label>Title <span class="text-danger">*</span></label>
                            <input type="text" name="title" class="form-control" required>
                        </div>

                        <div class="col-md-6">
                            <label>Slug</label>
                            <input type="text" name="slug" class="form-control"
                                placeholder="Auto-generated if blank">
                        </div>

                        <div class="col-md-6">
                            <label>Country <span class="text-danger">*</span></label>
                            <select name="country_id" class="form-select" required>
                                <option value="">-- Select Country --</option>
                                @foreach ($countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label>Status</label>
                            <select name="status" class="form-select">
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label>Duration</label>
                            <input type="text" name="duration" class="form-control" placeholder="e.g., 12 Days">
                        </div>

                        <div class="col-md-6">
                            <label>Difficulty</label>
                            <select name="difficulty" class="form-select">
                                <option value="">-- Select --</option>
                                <option value="easy">Easy</option>
                                <option value="moderate">Moderate</option>
                                <option value="hard">Hard</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label>Max Elevation (m)</label>
                            <input type="number" name="max_elevation" class="form-control">
                        </div>

                        <div class="col-md-6">
                            <label>Best Season</label>
                            <input type="text" name="best_season" class="form-control" placeholder="e.g., March-May">
                        </div>

                        <div class="col-md-6">
                            <label>Start Point</label>
                            <input type="text" name="start_point" class="form-control">
                        </div>

                        <div class="col-md-6">
                            <label>End Point</label>
                            <input type="text" name="end_point" class="form-control">
                        </div>

                        <div class="col-12">
                            <label>Short Description</label>
                            <textarea name="short_description" rows="3" class="form-control"></textarea>
                        </div>

                        <div class="col-12">
                            <label for="testimonialDescription" class="form-label">Description <span
                                    class="text-danger">*</span></label>
                            <textarea class="form-control summernote" id="testimonialDescription" name="long_description" rows="5"
                                style="min-height: 250px;"></textarea>
                        </div>


                    </div>
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer px-4 py-3">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success submitBtn" data-action="">Submit</button>
                    <button type="submit" class="btn btn-success updateBtn" data-action="edit">Update Package</button>
                </div>
            </form>
        </div>
    </div>
</div>


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
