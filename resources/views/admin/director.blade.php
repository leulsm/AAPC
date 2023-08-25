@extends('admin.layouts.template')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>Register User</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.directorr') }}">
                            @csrf
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="frist_name">Full Name</label>

                                    <input id="name" type="text" class="form-control" name="name" autofocus>
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />

                                </div>

                                <input id="submitter" type="hidden" class="form-control" name="submitter" value="director"
                                    utofocus>


                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" type="email" class="form-control" name="email">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />

                                <div class="invalid-feedback">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="password" class="d-block">Password</label>
                                    <input id="password" type="password" class="form-control pwstrength"
                                        data-indicator="pwindicator" name="password">

                                    <div id="pwindicator" class="pwindicator">
                                        <div class="bar"></div>
                                        <div class="label"></div>
                                    </div>
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>
                                <div class="form-group col-6">
                                    <label for="password2" class="d-block">Password Confirmation</label>
                                    <input id="password_confirmation" type="password" class="form-control"
                                        name="password_confirmation">
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>

                                <div class="form-group col-6">
                                    <label>Give Roles</label>
                                    <select class="form-control" id="submitter" name="submitter">
                                        <option>---Select the roles---</option>
                                        <option value="user">Employee</option>
                                        <option value="director">Director</option>
                                        <option value="expert">Expert</option>
                                        <option value="division">Division Head</option>
                                        <option value="teamleader">Team Leader</option>
                                    </select>
                                    {{-- <x-input-error :messages="$errors->get('submitter')" class="mt-2" /> --}}
                                </div>

                                {{-- <div class="form-group col-6">
                                    <label>Department/Subcity</label>
                                    <select class="form-control" id="submitter" name="submitter">
                                        <option>---Select Department/SubCity---</option>
                                        <option value="">Software/Yeka</option>
                                        <option value="">Hardware/Arada</option>
                                        <option value="">Database/Bole</option>
                                    </select>
                                    {{-- <x-input-error :messages="$errors->get('submitter')" class="mt-2" /> --}}
                                {{-- </div> --}}

                            </div>
                            {{-- <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                                    <label class="custom-control-label" for="agree">I agree with the terms and
                                        conditions</label>
                                </div>
                            </div> --}}
                            <div class="flex items-center justify-end mt-4">
                                {{-- <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                        href="{{ route('login') }}">
                                        {{ __('Already registered?') }}
                                    </a> --}}

                                <x-primary-button class="ml-4">
                                    {{ __('Register') }}
                                </x-primary-button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
