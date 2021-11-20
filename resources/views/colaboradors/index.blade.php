@extends('layouts.app')
@section('title')
    Colaboradors 
@endsection
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Colaboradores</h1>
            <div class="section-header-breadcrumb">
                <a href="{{ route('colaboradors.create')}}" class="btn btn-primary form-btn">Colaborador <i class="fas fa-plus"></i></a>
            </div>
        </div>
    <div class="section-body">
       <div class="card">
            <div class="card-body">
                @include('colaboradors.table')
            </div>
       </div>
   </div>
    
    </section>
@endsection

