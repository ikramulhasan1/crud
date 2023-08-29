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
                <div class="card-header">Read Table <a href="{{ url('/') }}" class="btn btn-primary btn-sm">Show Data</a></div>
                <div class="card-body">
                  
                    <form action="{{ url('/edit_product/'.$editData->id ) }}" method="POST">
                      @csrf
                        <div class="mb-3">
                          <label for="exampleInputName1" class="form-label">Name</label>
                          <input type="text" name="title" value="{{ $editData->title }}" class="form-control" id="exampleInputName1" aria-describedby="emailHelp">
                         @error('title')
                           <p class="text-danger">{{ $message }}</p>
                         @enderror
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Email</label>
                          <input type="text" name="description" value="{{ $editData->description }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          @error('description')
                           <p class="text-danger">{{ $message }}</p>
                          @enderror
                        </div>
                       
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>