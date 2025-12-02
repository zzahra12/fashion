<?php echo "INI FORM INPUT GENRE"; ?>

<div class="card">
  <div class="card-body">
    <h4 class="card-title">Input Genre</h4>

    <form action="?page=genre&action=store" method="POST">
        <div class="mb-3">
            <label class="form-label">Nama Genre</label>
            <input type="text" name="nama_genre" 
                   class="form-control" placeholder="Masukkan Genre"
                   required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

  </div>
</div>