<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>

    <main>
        <section class="container mt-5 ">
            <div class="card">
                <div class="card-header">Product Table <a href="{{ url('/add_product') }}" class="btn btn-primary btn-sm">Add Data</a></div>
                <div class="card-body">
                  @if (Session::has('msg'))
                    <p class=" alert alert-success">{{ Session::get('msg') }}</p>
                  @endif
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Sel No.</th>
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                      @php
                        $serial = 1;
                      @endphp
                        @foreach ($products as $key=>$product)  
                          <tr>
                            <th scope="row">{{ $serial++ }}</th>
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->description }}</td>
                            <td>
                                <a href="{{ route('product.edit',$product->id) }}" class="btn btn-warning btn-sm fw-medium">Edit</a> 
                                <a href=""  class="btn btn-danger btn-sm fw-medium">Delete</a> 
                            </td>
                          </tr>

                        @endforeach 
                        </tbody>
                      </table>

                     
                </div>
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>