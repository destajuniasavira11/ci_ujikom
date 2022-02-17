<h1>Edit Data Profilr</h1>
<from action="<? base_url('profile/action_update_data') ?>" method="post">
<table>
    <tr>
        <td>Nama Depan</td>
        <td>:</td>
        <td>
            <input type="hidden" name="id" value="<?=$profile['id'] ?>">
            <input type="text" name="nama_depan" class="from-control" value="<?=$profile['nama-depan'] ?>">
        </td>
    </tr>
    <tr>
        <td>Nama Belakang</td>
        <td>:</td>
        <td><input type="text" name="nama_belakang" class="from-control" value="<?=$profile['nama-belakang'] ?>">
    </tr>
    <tr>
        <td>Tempat Lahir</td>
        <td>:</td>
        <td><input type="text" name="tempat_lahir" class="from-control" value="<?=$profile['tempat_lahir'] ?>">
    </tr>
    <tr>
        <td>Tanggal Lahir</td>
        <td>:</td>
        <td><input type="date" name="tanggal_lahir" class="from-control" value="<?=$profile['tanggal_lahir'] ?>">
    </tr>
    <tr>
        <td>jenis kelamin</td>
        <td>:</td>
        <td>
            <input type="radio" name="jenis_kelamin"  value="L">L
            <input type="radio" name="jenis_kelamin"  value="P">P
         </td>
    </tr>
    <tr>
            <td>alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat"></td>
    </tr>
     <tr>
            <td>jenjang pendidikan</td>
            <td>:</td>
            <td><select name="jenjang_pendidikan" id="" class="form-control">
                <option value="SMK">SMK Sederajat</option>
                <option value="D3">D3</option>
                <option value="S1">S1</option>
                <option value="S2">S2</option>
            </select>
         </td>   
    </tr>
    <tr>
            <td colspan="3" class="text-center">
                <button type="submit" class="btn-primary"> simpan </button>
                <a href="" class="btn btn-warning">kembali</a>
            </td>
        </tr>
</table>  
</from>  