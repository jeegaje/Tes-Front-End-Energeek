@extends('layouts.index')

@section('main')
  <!-- Input addon -->
<div class="background">
<div class="container py-5">
<div class="card mx-auto" style="max-width: 450px;">
    <h3 class="text-center my-5">Apply Lamaran</h3>
    <div class="card-body">
        <div class="form-group">
            <label for="jabatan">Jabatan</label>
            <select class="form-control select2" id="jabatan" style="width: 100%;">
                <option disabled selected hidden>Pilih Jabatan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="telepon">Telepon</label>
            <div class="input-group">
            <input type="tel" class="form-control" id="telepon" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" placeholder="Cth: 0893239851289">
                <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <div class="input-group">
                <input type="email" class="form-control" id="email" placeholder="Cth: energeekmail@gmail.com">
                <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="tahunLahir">Tahun Lahir</label>
            <div class="input-group">
                <input type="text" class="form-control" id="tahunLahir" placeholder="Cth: 1998">
                <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="skillSet">Skill Set</label>
            <label>Multiple</label>
                  <select id="skillSet" class="select2" multiple="multiple" data-placeholder="Pilih Skill" style="width: 100%;">
                  </select>
            </div>
        </div>
        <button id="applyButton" type="submit" class="btn btn-primary mx-3 mb-3 bg-danger">Apply</button>
    </div>
</div>
</div>

@endsection