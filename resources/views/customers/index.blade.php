<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shCk5KVpMq5/E7iRMoK21Qfoiie0t8o5tVm6q" crossorigin="anonymous"></script>

<div class="container">
    <h1>Daftar Customer</h1>
    <a href="{{ route('customers.create') }}" class="btn btn-primary mb-3">Tambah Customer</a>
    <ul class="list-group">
        @foreach($customers as $customer)
        <li class="list-group-item">

            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="mb-1">{{ $customer->cst_name }}</h5>
                        <p class="mb-1">Tanggal Lahir: {{ $customer->cst_dob }}</p>
                        <p class="mb-1">No Telepon: {{ $customer->cst_phoneNum }}</p>
                        <p class="mb-1">Email: {{ $customer->cst_email }}</p>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('customers.edit', $customer->cst_id) }}" class="btn btn-info w-50 float-right">Edit</a>
                        <form action="{{ route('customers.destroy', $customer->cst_id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger w-50 float-right">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
            <br />
            <div class="col-md-12">
                <h5 class="mb-1">List Keluarga</h5>
                <ul class="list-group mt-2">
                    @foreach($customer->familyList as $family)
                    <li class="list-group-item">{{ $family->fl_name }} - {{ $family->fl_dob }}</li>
                    @endforeach
                </ul>
            </div>
        </li>
        @endforeach
    </ul>
</div>