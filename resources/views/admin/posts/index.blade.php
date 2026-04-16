@extends('admin.requires.general')
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

                        
                        @foreach ($posts as $post)
                          
                        
                          <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ Str::limit($post->title,20) }}</td>
                            <td>
                              <img width="100px" src="{{ asset('storage/'.$post->image)}}" alt="">
                            </td>
                            <td>{{ Str::limit($post->short_content,20) }}</td>
                            <td>{{ Str::limit($post->content,50) }}</td>
                            </td>
                            <td>
                              <a href="{{ route('posts.show',$post->id)}}" class="btn btn-primary">Show</a>
                            </td>
                            <td>
                              <a href="{{ route('posts.edit',$post->id)}}" class="btn btn-warning">Edit</a>
                            </td>
                            <td>
                              <form action="{{ route('posts.destroy',$post->id)}}" method="POST" onsubmit="return confirm('Are you sure to delete this post')">
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
                    {{ $posts->links('vendor.pagination.bootstrap-5') }}
                  </div>
                </div>
            </div>

@endsection