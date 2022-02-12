@extends('backend.layout')
@section('main')
<div class="main-content">
    <div class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Publish News</h4>
                    </div>
                    <div class="card-body">
                        <form action="publish-news" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" name="title" required>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Subtitle</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" name="subtitle" required>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                                <div class="col-sm-12 col-md-7">
                                    <select class="form-control selectric" name="category" required>
                                        <option value="#">---Select---</option>
                                        <option value="0">Tech</option>
                                        <option value="1">News</option>
                                        <option value="2">Political</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
                                <div class="col-sm-12 col-md-7">
                                    <textarea class="summernote" name="content" required></textarea>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">News Image</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="file" class="form-control" name="newsImage" required>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image
                                    Caption</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" name="imageCaption" required>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image Alt</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" name="imageAlt" required>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">News Source</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" name="newsSource" required>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label
                                    class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description(short)</label>
                                <div class="col-sm-12 col-md-7">
                                    <textarea class="form-control" name="shortDescription" required></textarea>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tags</label>
                                <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control" name="tags" required>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Lead</label>
                                <div class="col-sm-12 col-md-7">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="1"
                                            name="mainLead">
                                        <label class="form-check-label" for="inlineCheckbox1">Main Lead</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="2"
                                            name="subLead">
                                        <label class="form-check-label" for="inlineCheckbox2">Sub Lead</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox3"
                                            value="option3" disabled>
                                        <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
                                <div class="col-sm-12 col-md-7">
                                    <select class="form-control form-select" name="status" required>
                                        <option>--Select--</option>
                                        <option value="0">Publish</option>
                                        <option value="1">Draft</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
