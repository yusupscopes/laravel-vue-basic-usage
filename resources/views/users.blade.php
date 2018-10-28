@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Halaman User</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- <users></users> --}}
                    <br><br>
                    <p class="text-center">@{{ test }}</p>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    new Vue({
        el: "#app",
        data: {
            test: 'ini dari vue (bukan dari blade)'
        }
    })
</script>
@endsection
