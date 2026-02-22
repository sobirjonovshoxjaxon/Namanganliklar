@extends('admin.includes.general')
@section('content')

            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Post Table</h4>
                    <a href="{{ route('posts.create')}}" class="btn btn-success">Create</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>Id</th>
                          <th>Title</th>
                          <th>Image</th>
                          <th>Short content</th>
                          <th>Content</th>
                          <th colspan="3">Action</th>
                        </tr>

                    
                        <tr>
                          <td>1</td>
                          <td>Irwansyah Saputra</td>
                          <td>Image part</td>
                          <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, repellat!
                          <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dolorum qui similique perspiciatis facere facilis deleniti natus! Ea iure debitis fugiat hic numquam quo eum?</td>
                          </td>
                          <td>
                            <a href="" class="btn btn-primary">Show</a>
                          </td>
                          <td>
                            <a href="" class="btn btn-warning">Edit</a>
                          </td>
                          <td>
                            <a href="" class="btn btn-danger">Delete</a>
                          </td>
                        </tr>

                      </table>
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <nav class="d-inline-block">
                      <ul class="pagination mb-0">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1 <span
                              class="sr-only">(current)</span></a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                      </ul>
                    </nav>
                  </div>
                </div>
            </div>

@endsection