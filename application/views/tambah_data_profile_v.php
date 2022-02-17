<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Tambah Data</h1>
    <from action="<?= base_url('profile/action_tambah_data') ?>" method="post">
    <table>
        <tr>
            <td>Nama depan</td>
            <td>:</td>
            <td><input type="text" name="nama_depan"></td>
        </tr>
        <tr>
            <td>nama belakang</td>
            <td>:</td>
            <td><input type="text" name="nama_belakang"></td>
        </tr>
        <tr>
            <td>tempat lahir</td>
            <td>:</td>
            <td><input type="text" name="tempat_lahir"></td>
        </tr>
        <tr>
            <td>tanggal lahir</td>
            <td>:</td>
            <td><input type="text" name="tanggal_lahir"></td>
        </tr>
        <tr>
            <td>jenis kelamin</td>
            <td>:</td>
            <td><input type="radio" name="jenis_kelamin" value="L"></td>
            <td><input type="radio" name="jenis_kelamin" value="P"></td>
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
</body>
</html>