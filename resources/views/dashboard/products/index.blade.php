@extends('dashboard.layout.main')

@section('container')
<!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Product</h6>
            </div>
            <div class="card-body">
                <a href="/dashboardAdmin/products/create" class="btn btn-primary mb-3">Create new Product</a>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Name</th>
                                <th>Job Position</th>
                                <th>Since</th>
                                <th class="text-right">Salary</th>
                                <th class="text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td>Andrew Mike</td>
                                <td>Develop</td>
                                <td>2013</td>
                                <td class="text-right">&euro; 99,225</td>
                                <td class="td-actions text-right">
                                    <a href="/dashboardAdmin/products/" class="btn btn-success btn-icon btn-sm ">Update</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">2</td>
                                <td>John Doe</td>
                                <td>Design</td>
                                <td>2012</td>
                                <td class="text-right">&euro; 89,241</td>
                                <td class="td-actions text-right">
                                  <button type="button" rel="tooltip" class="btn btn-info btn-icon btn-sm " data-original-title="" title="">
                                    <i class="ni ni-circle-08 pt-1"></i>
                                  </button>
                                  <button type="button" rel="tooltip" class="btn btn-success btn-icon btn-sm " data-original-title="" title="">
                                    <i class="ni ni-settings-gear-65 pt-1"></i>
                                  </button>
                                  <button type="button" rel="tooltip" class="btn btn-danger btn-icon btn-sm " data-original-title="" title="">
                                    <i class="ni ni-fat-remove pt-1"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">3</td>
                                <td>Alex Mike</td>
                                <td>Design</td>
                                <td>2010</td>
                                <td class="text-right">&euro; 92,144</td>
                                <td class="td-actions text-right">
                                  </button>
                                  <button type="button" rel="tooltip" class="btn btn-success btn-icon btn-sm btn-simple" data-original-title="" title="">
                                    <i class="ni ni-settings-gear-65 pt-1"></i>
                                  </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
      <!-- /.container-fluid -->
    <!-- End of Main Content -->
@endsection