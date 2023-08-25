<div class="pcoded-content">
    <!-- Page-header end -->
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page body start -->
                <div class="page-body">
                    <form action="{{ route('storeForm') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                <h5>Maintenance Request Form</h5>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-1">
                                        <div class="form-group">
                                            <label class="mt-2">Title</label>
                                            <select name="division" class="form-control">
                                                <option value="Mr.">Mr.</option>
                                                <option value="Mrs.">Mrs.</option>
                                                <option value="Commander">Commander</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group mt-2">
                                            <label>Full Name</label>
                                            <input type="text" name="name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group ">
                                            <label>Email</label>
                                            <input type="email" name="email" class="form-control"
                                                value="{{ Auth::user()->email }}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fa fa-phone"></i>
                                                    </div>
                                                </div>
                                                <input type="tel" id="phoneInput" pattern="\+\d{10,13}"
                                                    value="+251" oninput="isPhoneNumber(this.value)" maxlength="13"
                                                    name="phone_number" class="form-control phone-number">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col">Date</label>
                                            <input type="date" name="date" class="form-control col">
                                        </div>
                                    </div>
                                    <div class="col-6 ">
                                        <div class="form-group mx-5 my-3 ">
                                            <div class="form-group mx-5 my-4 ">
                                                <label class="d-block">Request Type</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name='request_type[]' value="Network" id="defaultCheck1">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        Network
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name='request_type[]' value="Database" id="defaultCheck2">
                                                    <label class="form-check-label" for="defaultCheck2">
                                                        Database
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name='request_type[]' value="Software" id="defaultCheck3">
                                                    <label class="form-check-label" for="defaultCheck3">
                                                        Software
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name='request_type[]' value="Radio" id="defaultCheck4">
                                                    <label class="form-check-label" for="defaultCheck4">
                                                        Radio
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"name='request_type[]'
                                                        value="Others" id="defaultCheck5" onclick="showTextField()">
                                                    <label class="form-check-label" for="defaultCheck5">
                                                        Others
                                                    </label>
                                                    <textarea id="otherTextField" style="display: none"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label class="col">Attach an Image</label>
                                            <input type="file" name="image" class="form-control col">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group mx-5 my-4 ">
                                            <div class="form-group mx-5 my-4 ">
                                                <label class="d-block">Urgency</label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="urgency"
                                                        id="urgency1" checked>
                                                    <label class="form-check-label" for="urgency1">
                                                        High
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="urgency"
                                                        id="urgency2" >
                                                    <label class="form-check-label" for="urgency2">
                                                        Medium
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="urgency"
                                                        id="urgency3">
                                                    <label class="form-check-label" for="urgency3">
                                                        Low
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label>Description of the problem</label>
                                            <textarea name="description" class="form-control"></textarea>
                                        </div>
                                        <div class="text-left">
                                            <button class="btn btn-primary " type="submit">Submit</button>
                                            <button class="btn btn-secondary" type="reset">Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        function showTextField() {
            var checkbox = document.getElementById("defaultCheck5");
            var textField = document.getElementById("otherTextField");

            if (checkbox.checked) {
                textField.style.display = "block";
            } else {
                textField.style.display = "none";
            }
        }
    </script>
</div>
