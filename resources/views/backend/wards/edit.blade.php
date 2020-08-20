@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.wards.management') . ' | ' . trans('labels.backend.wards.edit'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.wards.management') }}
        <small>{{ trans('labels.backend.wards.edit') }}</small>
    </h1>
@endsection

@section('content')
    {{ Form::model($wards, ['route' => ['admin.wards.update', $ward], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'edit-ward']) }}

        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">{{ trans('labels.backend.wards.edit') }}</h3>

                <div class="box-tools pull-right">
                    @include('backend.wards.partials.wards-header-buttons')
                </div><!--box-tools pull-right-->
            </div><!--box-header with-border-->

            <div class="box-body">
                <div class="form-group">
                    {{-- Including Form blade file --}}
                    @include("backend.wards.form")
                    <div class="edit-form-btn">
                        {{ link_to_route('admin.wards.index', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-md']) }}
                        {{ Form::submit(trans('buttons.general.crud.update'), ['class' => 'btn btn-primary btn-md']) }}
                        <div class="clearfix"></div>
                    </div><!--edit-form-btn-->
                </div><!--form-group-->
            </div><!--box-body-->
        </div><!--box box-success -->
    {{ Form::close() }}
@endsection
