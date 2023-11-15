@extends('layouts.test')

@section('title', 'CLIV-Input-Skill')

@section('content')
    <form action="{{url ('/skill/store')}}" method="POST">
        @csrf
        <table id="experienceTable">
            <thead>
                <tr>
                    <th>Nama Skill</th>
                    <th>Deskripsi Skill</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <input type="text" id="nama_skill" name="moreFields[0][nama_skill]" aria-label="Nama_skill" class="form-control">
                    </td>
                    <td>
                        <textarea id="inputDeskripsiSkill" name="moreFields[0][deskripsi_skill]" class="form-control" aria-describedby="passwordHelpInline"></textarea>
                    </td>
                    <td>
                        <div class="button-container">
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

            cell1.innerHTML = '<input type="text" id="nama_skill" name="moreFields[' + newIndex + '][nama_skill]" aria-label="Nama_skill" class="form-control">';
            cell2.innerHTML = '<textarea id="inputDeskripsiSkill" name="moreFields[' + newIndex + '][deskripsi_skill]" class="form-control" aria-describedby="passwordHelpInline"></textarea>';
            cell3.innerHTML = '<div class="button-container"><button type="button" class="btn btn-primary btn-block" onclick="editRow(this)">Edit</button><button type="button" class="btn btn-danger btn-block" onclick="deleteRow(this)">Delete</button></div>';
        }

        function deleteRow(button) {
            var row = button.parentNode.parentNode.parentNode;
            row.parentNode.removeChild(row);
        }
        
        function saveData() {
            // Prepare data for submission
            var formData = new FormData(document.getElementById('skillForm'));

            // Send data via AJAX
            $.ajax({
                url: '{{ route("skill.saveData") }}',
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    // Handle success (if needed)
                    console.log(response);
                },
                error: function(error) {
                    // Handle errors (if needed)
                    console.error(error);
                }
            });
        }
    </script>
@endsection
