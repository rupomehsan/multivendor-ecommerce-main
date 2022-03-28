@extends('layouts.admin.index')
@section('content')
  <main id="help-content">
      <div class="row">
          <div class="col-lg-10 offset-lg-1 col-sm-12 col-12">
              <div class="card">
                  <div class="card-body">
                      <h4 class="card-title">Help</h4>

                      <table class="table" id="help-table">
                          <thead>
                          <tr>
                              <th>#</th>
                              <th>User Name</th>
                              <th>Contact Info</th>
                              <th>Subject</th>
                              <th>Message</th>
                              <th>Creation Date</th>
                          </tr>
                          </thead>

                          <tbody>
                          <tr>
                              <th>1</th>
                              <th>Akash</th>
                              <th>Noir Cloth</th>
                              <th>Payment</th>
                              <th>Payment System Not Working</th>
                              <th>12 June, 2022</th>
                          </tr>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
  </main>

@endsection

@push('custom-js')
    <script>
        $(document).ready(function () {
            $('#help-table').DataTable({
                "searching": false,
                "lengthChange": false,
                "ordering": false,
            });
        });
    </script>
@endpush
