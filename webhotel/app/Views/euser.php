		<div class="pagetitle">
      <h1>Edit Data</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= base_url ('home/halamanutama')?>">Home</a></li>
          <li class="breadcrumb-item">Edit</li>
          <li class="breadcrumb-item active">Edit User</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">User</h5>

		<form action="<?= base_url('gudang/simpan_user')?>" method="POST">
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" class="form-control" id="username" name="username"  value="<?=$chelsica->username?>"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="Password" class="form-control" id="pswd" name="password" value="<?=$chelsica->password?>"></td>
				</tr>
				<tr>
					<td>Level</td>
					<td><input type="text" class="form-control" id="level"name="level" value="<?= $chelsica->level ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="hidden" value="<?=$chelsica->id_user?>" name="id">
						<button type="submit" class="btn btn-primary">Simpan</button>
						<button type="reset" class="btn btn-secondary">Reset</button>
						<button type="button" class="btn btn-secondary">Kembali</button>
					</td>
				</tr>
			</table>
		</form>