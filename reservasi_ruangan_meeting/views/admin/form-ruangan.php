<form>
    <div class="row g-3">
        <div class="col-md-6">
            <label class="form-label">Nama Ruangan</label>
            <input type="text" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">Ukuran Ruangan</label>
            <input type="text" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">Detail Tambahan</label>
            <input type="text" class="form-control">
        </div>
        <div class="col-md-6">
            <label class="form-label">Fasilitas</label>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="proyektor" value="">
                        <label class="form-check-label">
                            Proyektor
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="layar_proyektor" value="" checked>
                        <label class="form-check-label">
                            Layar Proyektor
                        </label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="whiteboard" value="">
                        <label class="form-check-label">
                            Whiteboard
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="audio_sound_system" value="" checked>
                        <label class="form-check-label">
                            Audio / Sound System
                        </label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="televisi" value="">
                        <label class="form-check-label">
                            Televisi
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="video_conference" value="" checked>
                        <label class="form-check-label">
                            Video Conference
                        </label>
                    </div>
                </div>
            </div>


        </div>
        <div class="col-md-6">
            <label class="form-label">Ketersediaan</label>
            <input type="text" class="form-control" required>
        </div>
        <div class="col-6">
            <label class="form-label">Gambar</label>
            <input class="form-control" type="file" id="formFile">
        </div>
        <div class="col-12">
            <div class="row">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary w-100 fw-bold"><i class="bi bi-house-add"></i>
                        Simpan</button>
                </div>
            </div>
        </div>
    </div>
</form>