<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
  <div class="container-fluid" style="margin-top:20px">
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Job</h3>
              </div>
              
              <form action="{{ route('job.update',$data->id) }}" method="POST">
                @csrf
                @method('put')
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-3">
                        <div class="form-group">
                          <label for="">Title</label>
                          <input type="text" class="form-control" name="title" value="{{$data->title}}" required>
                        </div>
                      </div>
                      <div class="col-sm-9">
                        <div class="form-group">
                          <label for="">Discription</label>
                          <input type="text" rows="6" name="dis" class="form-control" value="{{$data->dis}}" required> 
                        </div>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="">Location</label>
                            <input type="text" class="form-control" name="location" value="{{$data->location}}" required>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="">Salary</label>
                            <input type="text" name="salary" class="form-control" value="{{$data->salary}}" required> 
                          </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                              <label for="">Contact</label>
                              <input type="text" name="contact" class="form-control" value="{{$data->contact}}" required> 
                            </div>
                          </div>
                      </div>
                  </div>
                  <div class="card-footer">
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary" style="margin-top:15px;">Save Changes</button>
                    </div>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</body>

</html>
