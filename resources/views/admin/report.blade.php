@extends('admin.layouts.template')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Maintenance Request Form</h4>
        </div>

        <div class="card-body">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control">
            </div>
            <div class="form-group">
                <label>Phone Number</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-phone"></i>
                        </div>
                    </div>
                    <input type="number" class="form-control phone-number">
                </div>
            </div>
            <div class="form-group">
                <label>Division/Department/city</label>
                <select class="form-control">
                    <option>Option 1</option>
                    <option>Option 2</option>
                    <option>Option 3</option>
                </select>
            </div>

            <div class="form-group">
                <label class="d-block">Request Type</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Network
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="defaultCheck3">
                    <label class="form-check-label" for="defaultCheck3">
                        Database
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="defaultCheck3">
                    <label class="form-check-label" for="defaultCheck3">
                        Software
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="defaultCheck3">
                    <label class="form-check-label" for="defaultCheck3">
                        Others
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label>Date</label>
                <input type="date" class="form-control">
            </div>
            <div class="form-group">
                <label class="d-block">Urgency</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        High
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" checked>
                    <label class="form-check-label" for="exampleRadios2">
                        Medium
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" checked>
                    <label class="form-check-label" for="exampleRadios2">
                        Low
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label>Attach an Image</label>
                <input type="file" class="form-control">
            </div>
            <div class="form-group">
                <label>Description of the problem</label>
                <textarea class="form-control"></textarea>
            </div>
        </div>
        <div class="card-footer text-right">
            <button class="btn btn-primary mr-1" type="submit">Submit</button>
            <button class="btn btn-secondary" type="reset">Reset</button>
        </div>
    </div>
@endsection
