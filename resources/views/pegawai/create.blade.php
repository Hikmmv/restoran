<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <h1 class="text-center mb-5">Data pegawai</h1>
        <!-- Button trigger modal -->
        <a href="/tambahpegawai" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          tambah+</a>

  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/insertpegawai" method="post" enctype="multipart/form-data">
        @csrf
        {{--  <input type="hidden" name="_csrf" value="{{ csrf_field() }}">  --}}
        <div class="modal-body">
          <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">NIP</label>
            <input type="text" name="nip" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Jabatan</label>
            <input type="text" name="jabatan" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
          </div>
          <td>
            <a href="/daletedpegawai/{$id}" class="btn btn-danger btn-sm">Dalete</a>
            <a href="/tampilpegawai/{$id}" class="btn btn-success btn-sm">EDIT</a>
          </td>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>
        <div class="card mt-2">
            <div class="card-body">
                <table class="table">
                  <thead>
                    <th scope="col">NO</th>
                    <th scope="col">NIP</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Aksi</th>
                  </thead>
                  <tbody>
                    @foreach ($data as $row)
                    <th scope='id'>{{ $row->id }}</th>
                    <td>{{ $row->nama }}</td>
                    <td>{{ $row->nip }}</td>
                    <td>{{ $row->jabatan }}</td>
                    <td>
                      <a href="/daletedpegawai/{$id}" class="btn btn-danger btn-sm">Dalete</a>
                      <a href="/tampilpegawai/{$id}" class="btn btn-success btn-sm">EDIT</a>
                    </td>
                  </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>