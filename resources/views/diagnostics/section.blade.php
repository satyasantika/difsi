@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ __('List Pengukuran') }}
                </div>

                <div class="card-body">
                    <a href="{{ route('testsections.create') }}" class="btn btn-success">+ Tambah Pengukuran</a>
                    <p>Berikut ini hasil pengukuran yang pernah dilakukan</p>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Code</th>
                            <th scope="col">Kelas</th>
                            {{-- <th scope="col">Form</th> --}}
                            <th scope="col">Batas Awal</th>
                            <th scope="col">Batas Akhir</th>
                            <th scope="col">waktu(menit)</th>
                            <th scope="col">action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @forelse ($sections as $index => $section)
                            <tr>
                                <th scope="row">{{ $index+1 }}</th>
                                <td>{{ $section->code }}</td>
                                <td>{{ $section->name }}</td>
                                {{-- <td>{{ $section->form->name }}</td> --}}
                                <td>{{ $section->available_start }}</td>
                                <td>{{ $section->available_stop }}</td>
                                <td>{{ $section->interval_time }}</td>
                                <td>
                                    <a href="{{ route('testsections.edit',$section->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="{{ route('test.resume',$section->id) }}" class="btn btn-sm btn-primary">Result</a>
                                </td>
                            </tr>
                            @empty
                                <span class="alert alert-info">Belum pernah melakukan pengukuran</span>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
