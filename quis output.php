<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Rak</title>
    <style>
        .output {
            margin-top: 20px;
            border: 1px solid #ccc;
            padding: 10px;
            display: none;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <form id="data-rak-form">
        <h2>Tambah Data Rak</h2>
        
        <label for="semester">Semester</label>
        <select id="semester" name="semester">
            <option value="" disabled selected>Pilih Semester</option>
            <option value="">Semester 1-4</option>
            <option value="">Semester 5-8</option>
            <!-- option for semester -->
        </select>
        <br><br>
        
        <label for="lantai">Lantai</label>
        <select id="lantai" name="lantai">
            <option value="" disabled selected>Pilih Lantai</option>
            <option value="">Lantai 1</option>
            <option value="">Lantai 2</option>
            <option value="">Lantai 3</option>
            <!-- options for lantai -->
        </select>
        <br><br>
        
        <label for="kelas">Kelas*</label>
        <select id="kelas" name="kelas" required>
            <option value="" disabled selected>Pilih Kelas</option>
            <option value="">20.1A.11 - 20.1A.13</option>
            <option value="">19.2A.11 - 19.2A.13</option>
            <option value="">18.3A.11 - 18.3A.13</option>
            <option value="">17.4A.11 - 17.4A.13</option>
            <option value="">16.5A.11 - 16.5A.13</option>
            <option value="">15.6A.11 - 15.6A.13</option>
            <option value="">14.7A.11 - 14.7A.13</option>
            <option value="">13.8A.11 - 13.8A.13</option>
            <!-- options  for kelas -->
        </select>
        <br><br>
        
        <label for="kode-rak">Kode Rak*</label>
        <input type="text" id="kode-rak" name="kode-rak" required>
        <br><br>
        
        <label for="nama-rak">Nama Rak*</label>
        <input type="text" id="nama-rak" name="nama-rak" required>
        <br><br>
        
        <label for="kapasitas">Kapasitas (Baris)*</label>
        <input type="number" id="kapasitas" name="kapasitas" required>
        <br><br>
        
        <label for="keterangan">Keterangan</label>
        <textarea id="keterangan" name="keterangan"></textarea>
        <br><br>
        
        <button type="button" onclick="closeForm()">Tutup</button>
        <button type="submit">Simpan</button>
    </form>
    
    <div class="output" id="output">
        <h3>Data Rak</h3>
        <table>
            <tr>
                <th>Semester</th>
                <td id="output-semester"></td>
            </tr>
            <tr>
                <th>Lantai</th>
                <td id="output-Lantai"></td>
            </tr>
            <tr>
                <th>Kelas</th>
                <td id="output-kelas"></td>
            </tr>
            <tr>
                <th>Kode Rak</th>
                <td id="output-kode-rak"></td>
            </tr>
            <tr>
                <th>Nama Rak</th>
                <td id="output-nama-rak"></td>
            </tr>
            <tr>
                <th>Kapasitas (Baris)</th>
                <td id="output-kapasitas"></td>
            </tr>
            <tr>
                <th>Keterangan</th>
                <td id="output-keterangan"></td>
            </tr>
        </table>
    </div>
    
    <script>
        document.getElementById('data-rak-form').addEventListener('submit', function(event) {
            event.preventDefault();
            
            // Get form values
            var Semester = document.getElementById('semester').value;
            var Lantai = document.getElementById('lantai').value;
            var Kelas = document.getElementById('kelas').value;
            var kodeRak = document.getElementById('kode-rak').value;
            var namaRak = document.getElementById('nama-rak').value;
            var kapasitas = document.getElementById('kapasitas').value;
            var keterangan = document.getElementById('keterangan').value;
            
            // Display output
            document.getElementById('output-semester').textContent = Semester;
            document.getElementById('output-lantai').textContent = Lantai;
            document.getElementById('output-Kelas').textContent = Kelas;
            document.getElementById('output-kode-rak').textContent = kodeRak;
            document.getElementById('output-nama-rak').textContent = namaRak;
            document.getElementById('output-kapasitas').textContent = kapasitas;
            document.getElementById('output-keterangan').textContent = keterangan;
            
            // Show the output div
            document.getElementById('output').style.display = 'block';
        });
        
        function closeForm() {
            // Function to close the form, depending on the implementation
            // For example, you might hide the form or navigate to another page
            alert('Form closed');
        }
    </script>
</body>
</html>