
@extends('users.layouts.index')
    <!--create register form-->
@section('content')
    <div class="clean-top"></div>
                <div class="card col-md-6 offset-md-3">
                    <div class="card-header bg-success bg-opacity-75 text-white">
                        <h3 class="text-center">Register</h3>
                    </div>
                    <div class="card-body bg-light bg-opacity-75">
                        <form action="{{route('users.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Enter email" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Enter password" required>
                            </div>
                            <div class="form-group">
                                <label for="confirm_password">Confirm Password</label>
                                <input type="password" class="form-control" id="confirm_password"
                                    name="confirm_password" placeholder="Confirm password" required>
                            </div>
                            <div class="form-group">
                                <label for="birthday">Birthday</label>
                                <input type="date" class="form-control" id="birthday" name="birthday"
                                    placeholder="Enter birthday">
                            </div>
                            <div class="form-group">
                                <label for="  image">Image</label>
                                <input type="file" class="form-control" id="image" name="image" placeholder="Enter image">
                            </div>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </form>
                    </div>
                </div>
@endsection

{{-- <!-- @section('script')
    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
@endsection --> --}}
