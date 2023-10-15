@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ $section->id ? 'Edit' : 'Tambah' }} {{ __('Tambah Sesi Pengukuran') }}
                </div>

                <form id="formAction" action="{{ $section->id ? route('testsections.update',$section->id) : route('testsections.store') }}" method="post">
                    @csrf
                    @if ($section->id)
                        @method('PUT')
                    @endif
                    <div class="card-body">
                        <div class="row">
                            {{-- <div class="col-md-2">
                                <div class="mb-3">
                                    <label for="id" class="form-label">CODE</label> --}}
                                    <input type="hidden" value="{{ $section->id ? $section->code : Str::random(6) }}" name="code" class="form-control" id="code">
                                    <input type="hidden" value="{{ Auth::id() }}" name="user_id" class="form-control" id="user_id">
                                {{-- </div>
                            </div> --}}
                            <div class="col-md-10">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nama Sesi Pengukuran</label>
                                    <input type="text" value="{{ $section->name }}" name="name" class="form-control" id="name" autofocus placeholder="Tuliskan nama sesi pengukuran, contoh sekolah kelas">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="type" class="form-label">Tipe Form</label>
                                    <select id="type" class="form-control @error('type') is-invalid @enderror" name="type">
                                        <option value="">-- Pilih Tipe Form --</option>
                                        @foreach ($forms as $form)
                                            <option value="{{ $form->id }}" @selected($form->id == $section->form_id) >{{ $form->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="available_start" class="form-label">Mulai</label>
                                    <input type="date" value="{{ $section->available_start }}" name="available_start" class="form-control" id="available_start">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="available_stop" class="form-label">Berakhir</label>
                                    <input type="date" value="{{ $section->available_stop }}" name="available_stop" class="form-control" id="available_stop">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="interval_time" class="form-label">Waktu Pengisian (menit)</label>
                                    <input type="number" value="{{ $section->interval_time }}" name="interval_time" class="form-control" id="interval_time">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
