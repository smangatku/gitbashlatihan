<!-- resources/views/karyawan/index.blade.php -->

<html>

<head>
    <title>Data Karyawan</title>
    <link href="https://cdn.datatables.net/2.0.1/css/dataTables.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Data Karyawan</h1>
        <div class="row g-0 text-center">
            <div class="col-6 col-md-4"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#crudModal" data-action="tambah"><i class="bi bi-plus-square"></i> Tambah Data</button></div>
            <div class="col-sm-6 col-md-8">
                <!-- Tambahkan konten halaman karyawan di sini -->
                <table id="example" class="table">
                    <thead>
                        <tr>
                            <th>ID_Card</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>No Tlp</th>
                            <th>Jabatan</th>
                            <th>Departemen</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $index => $row)
                        <tr>
                            <td>{{ $row->nomor_identitas }}</td>
                            <td>{{ $row->nama }}</td>
                            <td>{{ $row->email }}</td>
                            <td>{{ $row->nomor_telepon }}</td>
                            <td>{{ $row->jabatan }}</td>
                            
                            <td>{{ $row->nama_departemen }}</td>
                            <td>
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#crudModal" data-action="info" data-employee-id="{{ $row->employee_id }}" ><i class="bi bi-info-square"></i></button>
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#crudModal" data-action="update"  data-employee-id="{{ $row->employee_id }}" ><i class="bi bi-pencil-square"></i></button>
                                <a href="#" type="button" class="btn btn-danger" data-employee="{{ $row->employee_id }}" ><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                      
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
<div class="modal fade" id="crudModal" tabindex="-1" role="dialog" aria-labelledby="crudModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="crudModalLabel">CRUD Data Karyawan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form untuk menambahkan, menampilkan detail, dan mengupdate data -->
                <form id="crudForm">
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" class="form-control" id="nama">
                    </div>
                    <!-- Tambahkan input lainnya sesuai dengan kebutuhan -->
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="simpanBtn">Simpan</button>
            </div>
        </div>
    </div>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.datatables.net/2.0.1/js/dataTables.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
    
    $(document).ready(function() {
        // data tabele  
        $('#example').DataTable();
 
        // Fungsi untuk menangani klik tombol Simpan
        $('#simpanBtn').click(function() {
            var nama = $('#nama').val();
            // Lakukan simpan data di sini
            console.log('Nama: ' + nama);
            // Anda dapat menambahkan logika AJAX untuk menyimpan data di sini
        });
        
        // Fungsi untuk menangani klik tombol Buka Modal
        $('#crudModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget); // Tombol yang membuka modal
            var action = button.data('action'); // Mendapatkan nilai atribut data-action dari tombol
            var modal = $(this);
            var id = button.data('employee-id'); // Mendapatkan ID karyawan dari tombol
            modal.find('.modal-body input').val(''); // Bersihkan nilai input dalam modal

            // Mengganti judul modal berdasarkan action yang dipilih
            if (action == 'tambah') {
                modal.find('.modal-title').text('Tambah Data Karyawan');
                $('#simpanBtn').text('Simpan');
            } else if (action == 'info') {
                modal.find('.modal-title').text('Info Detail Data Karyawan');
                $('#simpanBtn').hide(); // Sembunyikan tombol Simpan untuk action 'info'
            } else if (action == 'update') {
                modal.find('.modal-title').text('Update Data Karyawan');
                $('#simpanBtn').text('Update');
            }
        });


 
    });






    </script>




</body>

</html>