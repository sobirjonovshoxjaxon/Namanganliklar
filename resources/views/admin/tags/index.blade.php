@extends('admin.requires.general')
@section('content')

            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Tag Table</h4>
                    <a href="{{ route('tags.create')}}" class="btn btn-success">Create</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tr>
                          <th>Id</th>
                          <th>Tag</th>
                          <th colspan="3">Action</th>
                        </tr>

                        
                        @foreach ($tags as $tag)
                          
                        
                          <tr>
                            <td>{{ $tag->id }}</td>
                            <td>{{$tag->tag }}</td>
                            </td>
                            <td>
                              <a href="{{ route('tags.show',$tag->id)}}" class="btn btn-primary">Show</a>
                            </td>
                            <td>
                              <a href="{{ route('tags.edit',$tag->id)}}" class="btn btn-warning">Edit</a>
                            </td>
                            <td>
                              <form action="{{ route('tags.destroy',$tag->id)}}" method="POST" onsubmit="return confirm('Are you sure to delete this post')">
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