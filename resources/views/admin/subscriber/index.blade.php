@extends('layouts.admin.index')
@section('content')
  <main id="subscriber-content">
      <div class="row">
          <div class="col-lg-10 offset-lg-1 col-sm-12 col-12">
              <div class="card">
                  <div class="card-body">
                      <h4 class="card-title">Subscriber</h4>

                      <table class="table" id="subscriber-table">
                          <thead>
                          <tr>
                              <th>#</th>
                              <th>Mail</th>
                              <th>Creation Date</th>
                          </tr>
                          </thead>

                          <tbody>
                          <tr>
                              <th>1</th>
                              <th>aks@gmail.com</th>
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
            $('#subscriber-table').DataTable({
                "searching": false,
                "lengthChange": false,
                "ordering": false,
            });
        });
    </script>
@endpush
