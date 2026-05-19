@extends('admin.requires.general')
@section('content')

            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Category Table</h4>
                    <a href="{{ route('categories.create')}}" class="btn btn-success">Create</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>Id</th>
                          <th>Category</th>
                          <th colspan="3">Action</th>
                        </tr>

                        
                        @foreach ($categories as $category)
                          
                        
                          <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{$category->category }}</td>
                            </td>
                            <td>
                              <a href="{{ route('categories.show',$category->id)}}" class="btn btn-primary">Show</a>
                            </td>
                            <td>
                              <a href="{{ route('categories.edit',$category->id)}}" class="btn btn-warning">Edit</a>
                            </td>
                            <td>
                              <form action="{{ route('categories.destroy',$category->id)}}" method="POST" onsubmit="return confirm('Are you sure to delete this post')">
                                @csrf 
                                @method('DELETE')

                                  <input type="submit" class="btn btn-danger" value="Delete">
                              </form>
                            </td>
                          </tr>

                        @endforeach

                      </table>
                    </div>
                  </div>


                  <div class="card-footer text-right">
                    {{-- {{ $posts->links('vendor.pagination.bootstrap-5') }} --}}
                  </div>
                </div>
            </div>

@endsection