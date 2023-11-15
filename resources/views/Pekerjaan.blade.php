@extends('layouts.test')

@section('title', 'CLIV-Input-Riwayat Pekerjaan')

@section('content')
    <form action="{{url ('/pekerjaan/store')}}" method="POST">
        @csrf
        <table id="experienceTable">
            <thead>
                <tr>
                    <th>Nama Perusahaan</th>
                    <th>Posisi</th>
                    <th>Lokasi</th>
                    <th>Tahun Masuk Kerja</th>
                    <th>Tahun Keluar Kerja</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <input type="text" name="moreFields[0][nama_perusahaan]" aria-label="Nama_sekolah" class="form-control">
                    </td>
                    <td>
                        <input type="text" name="moreFields[0][posisi]" aria-label="Posisi" class="form-control">
                    </td>
                    <td>
                        <input type="text" name="moreFields[0][lokasi]" aria-label="Lokasi" class="form-control">
                    </td>
                    <td>
                        <input type="date" name="moreFields[0][tanggal_masuk_kerja]" class="form-control">
                    </td>
                    <td>
                        <input type="date" name="moreFields[0][tanggal_keluar_kerja]" class="form-control" >
                    </td>
                    <td>
                        <div class="button-container">
                            <button type="button" class="btn btn-primary btn-block" onclick="editRow(this)">Edit</button>
                            <button type="button" class="btn btn-danger btn-block" onclick="deleteRow(this)">Delete</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <button type="button" class="btn btn-success btn-block ms-4" onclick="addRow()">Add</button>
        <button type="submit" class="btn btn-primary btn-block">Selesai</button>
    </form>

    <script>
        function addRow() {
            var table = document.getElementById("experienceTable").getElementsByTagName('tbody')[0];
            var newIndex = table.rows.length;

            var newRow = table.insertRow(newIndex);
            var cell1 = newRow.insertCell(0);
            var cell2 = newRow.insertCell(1);
            var cell3 = newRow.insertCell(2);
            var cell4 = newRow.insertCell(3);
            var cell5 = newRow.insertCell(4);
            var cell6 = newRow.insertCell(5);

            cell1.innerHTML = '<input type="text" name="moreFields[' + newIndex + '][nama_perusahaan]" aria-label="Nama_sekolah" class="form-control">';
            cell2.innerHTML = '<input type="text" name="moreFields[' + newIndex + '][posisi]" aria-label="Posisi" class="form-control">';
            cell3.innerHTML = '<input type="text" name="moreFields[' + newIndex + '][lokasi]" aria-label="Jurusan" class="form-control">';
            cell4.innerHTML = '<input type="date" name="moreFields[' + newIndex + '][tanggal_masuk_kerja]" class="form-control">';
            cell5.innerHTML = '<input type="date" name="moreFields[' + newIndex + '][tanggal_keluar_kerja]" class="form-control">';
            cell6.innerHTML = '<div class="button-container"><button type="button" class="btn btn-primary btn-block" onclick="editRow(this)">Edit</button><button type="button" class="btn btn-danger btn-block" onclick="deleteRow(this)">Delete</button></div>';
        }

        function deleteRow(button) {
            var row = button.parentNode.parentNode.parentNode;
            row.parentNode.removeChild(row);
        }
    </script>
@endsection
