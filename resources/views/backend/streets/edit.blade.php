@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.streets.management') . ' | ' . trans('labels.backend.streets.edit'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.streets.management') }}
        <small>{{ trans('labels.backend.streets.edit') }}</small>
    </h1>
@endsection

@section('content')
    {{ Form::model($streets, ['route' => ['admin.streets.update', $street], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'edit-street']) }}

        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">{{ trans('labels.backend.streets.edit') }}</h3>

                <div class="box-tools pull-right">
                    @include('backend.streets.partials.streets-header-buttons')
                </div><!--box-tools pull-right-->
            </div><!--box-header with-border-->

            <div class="box-body">
                <div class="form-group">
                    {{-- Including Form blade file --}}
                    @include("backend.streets.form")
                    <div class="edit-form-btn">
                        {{ link_to_route('admin.streets.index', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-md']) }}
                        {{ Form::submit(trans('buttons.general.crud.update'), ['class' => 'btn btn-primary btn-md']) }}
                        <div class="clearfix"></div>
                    </div><!--edit-form-btn-->
                </div><!--form-group-->
            </div><!--box-body-->
        </div><!--box box-success -->
    {{ Form::close() }}
@endsection
