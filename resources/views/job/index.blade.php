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

  <section class="content" style="margin-top:20px">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12" style="justify-content: center;">
          <div class="card">
            <div class="card-header" >
              <h3 class="card-title" style="margin-bottom:0px; float:left">My Jobs</h3>
              <a href="{{route('job.create')}}" class="btn btn-secondary" style="float: right; float">Add Job</a>
            </div>
            <div class="card-body">
              <table class="table table-bordered table-striped" id="example">
                <thead>
                  <tr>
                    <th>S No.</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Location</th>
                    <th>Salary</th>
                    <th>Contact</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @php $i=1 @endphp
                  @foreach ($job as $data)
                  <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $data->title }}</td>
                    <td>{{ $data->dis }}</td>
                    <td>{{ $data->location }}</td>
                    <td>{{ $data->salary }}</td>
                    <td>{{ $data->contact }}</td>
                    <td style="display: flex; justify-content:space-evenly">
                      <a class="btn btn-primary" href="{{route('job.edit',$data->id)}}"> Edit</a>
                      <form action="{{ route('job.destroy', $data->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger"  type="submit"> Delete</button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</body>

</html>
