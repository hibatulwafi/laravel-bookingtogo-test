<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shCk5KVpMq5/E7iRMoK21Qfoiie0t8o5tVm6q" crossorigin="anonymous"></script>

<div class="container">
    <h1 style="margin-bottom: 20px;">Tambah Customer</h1>
    <form action="{{ route('customers.store') }}" method="POST">
        @csrf
        <div class="form-group" style="margin-bottom: 20px;">
            <label for="name" style="margin-bottom: 5px;">Nama:</label>
            <input type="text" class="form-control" name="cst_name" id="name" required>
        </div>
        <div class="form-group" style="margin-bottom: 20px;">
            <label for="dob" style="margin-bottom: 5px;">Tanggal Lahir:</label>
            <input type="date" class="form-control" name="cst_dob" id="dob" required>
        </div>
        <div class="form-group" style="margin-bottom: 20px;">
            <label for="phone" style="margin-bottom: 5px;">Phone Number:</label>
            <input type="text" class="form-control" name="cst_phoneNum" id="phone" required>
        </div>
        <div class="form-group" style="margin-bottom: 20px;">
            <label for="email" style="margin-bottom: 5px;">Email:</label>
            <input type="email" class="form-control" name="cst_email" id="email" required>
        </div>
        <div class="form-group" style="margin-bottom: 20px;">
            <label for="nationality" style="margin-bottom: 5px;">Kewarganegaraan:</label>
            <select class="form-control" name="nationality_id" id="nationality" required>
                @foreach($nationalities as $nationality)
                <option value="{{ $nationality->nationality_id }}">{{ $nationality->nationality_name }}</option>
                @endforeach
            </select>
        </div>

        <div class="row" style="margin-bottom: 20px;">
            <div class="col-6">
                <h2>Data Keluarga</h2>
            </div>
            <div class="col-6">
                <button type="button" class="btn btn-primary float-right" id="add-family">Tambah Keluarga</button>
            </div>
        </div>
        <div id="family-container">
            <div class="form-group family" style="margin-bottom: 20px;">
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="family_name[]" placeholder="Nama Keluarga" required>
                    </div>
                    <div class="col-md-4">
                        <input type="date" class="form-control" name="family_dob[]" placeholder="Tanggal Lahir Keluarga" required>
                    </div>
                    <div class="col-md-4">
                        <button type="button" class="btn btn-danger remove-family">Hapus</button>
                    </div>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-success" style="margin-top: 20px;">Tambah Customer</button>
    </form>
</div>

<script>
    document.getElementById('add-family').addEventListener('click', function() {
        var container = document.getElementById('family-container');
        var div = document.createElement('div');
        div.classList.add('form-group', 'family');
        div.innerHTML = `
            <div class="row">
                <div class="col-md-4">
                    <input type="text" class="form-control" name="family_name[]" placeholder="Nama Keluarga" required>
                </div>
                <div class="col-md-4">
                    <input type="date" class="form-control" name="family_dob[]" placeholder="Tanggal Lahir Keluarga" required>
                </div>
                <div class="col-md-4">
                    <button type="button" class="btn btn-danger remove-family">Hapus</button>
                </div>
            </div>
        `;
        container.appendChild(div);
    });

    document.addEventListener('click', function(e) {
        if (e.target && e.target.classList.contains('remove-family')) {
            e.target.parentElement.remove();
        }
    });
</script>