@extends('layouts.table')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Daftar Agent</h1>
    
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4 mx-auto agen" >
        
        <div class="card-body" >
            <h4>Data Pribadi</h4><br/>
            <form action="{{url('admin/agen/store')}}" method="post">
                @csrf
                <div class="row mx-2">
                    <div class="form-group col-lg-4 mx-2">
                        <label> Nama</label>
                        <input type="text" name="name" class="form-control" placeholder = "Nama" required>
                    </div>
                    <div class="form-group col-lg-4 mx-2">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control" placeholder = "Alamat Email" required>
                    </div>
                    <div class="form-group col-lg-4 mx-2">
                        <label>Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder = "Password" required>
						<i class="fa fa-eye" id="togglePassword"></i>
                    </div>
                    <div class="form-group col-lg-4 mx-2">
                        <label>Kota</label>
                        <input type="text" name="kota" class="form-control" placeholder = "Kota" required>
                    </div>
                    <div class="form-group col-lg-9 mx-2">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control" placeholder = "Alamat" required>
                    </div>
                    <div class="form-group col-lg-2 mx-2">
                        <label class="form-label">Role</label>
                        <select name="role" id="role" class="form-control">
                            <option value="">--</option>
                            <option value="agen">Agent</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-3 mx-2">
                        <label>No. HP</label>
                        <input type="text" name="hp" class="form-control"placeholder = "No. HP" required>
                    </div>
                </div>
                <h4>Ruang Lingkup Area</h4><br/>
                <div class="row mx-2">
                    <div class="form-group col-lg-4 mx-2">
                        <label>Kelurahan</label>
                        <input type="text" name="kelurahan" class="form-control" placeholder = "Kelurahan" required>
                    </div>
                    <div class="form-group col-lg-4 mx-2">
                        <label>RW</label>
                        <input type="number" name="rw" class="form-control" placeholder = "RW (menggunakan angka bukan romawi)" required>
                    </div>
                </div>
                <div class="row mx-2">
                    <div class="form-group col-lg-3 mx-2">
                        <button type="submit" class="btn btn-success mt-3">Selesai</button>
                    </div>
                </div> 
            </form>
        </div>
    </div>
    
</div>
<!-- /.container-fluid -->
<script>
	window.addEventListener("DOMContentLoaded", function () {
  const togglePassword = document.querySelector("#togglePassword");

  togglePassword.addEventListener("click", function (e) {
    // toggle the type attribute
    const type =
      password.getAttribute("type") === "password" ? "text" : "password";
    password.setAttribute("type", type);
    // toggle the eye / eye slash icon
    this.classList.toggle("bi-eye");
  });
});
</script>

@endsection