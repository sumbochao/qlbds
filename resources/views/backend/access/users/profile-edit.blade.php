@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.access.users.management') . ' | ' . trans('labels.backend.access.users.edit'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.access.users.edit-profile') }}
    </h1>
@endsection

@section('content')
    {{ Form::model($logged_in_user, ['route' => 'admin.profile.update', 'class' => 'form-horizontal', 'method' => 'PATCH']) }}

    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('labels.backend.access.users.edit-profile') }}</h3>
        </div>
        <div class="box-body">
            <div class="form-group">
                {{ Form::label('fullname', trans('validation.attributes.frontend.register-user.fullname'), ['class' => 'col-lg-2 control-label']) }}
                <div class="col-lg-10">
                    {{ Form::input('text', 'fullname', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.frontend.register-user.fullname')]) }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('phone_number', trans('validation.attributes.frontend.register-user.phone_number'), ['class' => 'col-lg-2 control-label']) }}
                <div class="col-lg-10">
                    {{ Form::input('text', 'phone_number', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.frontend.register-user.phone_number')]) }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('position', trans('validation.attributes.frontend.register-user.position'), ['class' => 'col-lg-2 control-label']) }}
                <div class="col-lg-10">
                    {{ Form::input('text', 'position', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.frontend.register-user.position')]) }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('time_to_receive_work', trans('validation.attributes.frontend.register-user.time_to_receive_work'), ['class' => 'col-lg-2 control-label']) }}
                <div class="col-lg-10">
                    {{ Form::input('text', 'time_to_receive_work', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.frontend.register-user.time_to_receive_work')]) }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('statistics_of_trained_content', trans('validation.attributes.frontend.register-user.statistics_of_trained_content'), ['class' => 'col-lg-2 control-label']) }}
                <div class="col-lg-10">
                    {!! Form::textarea('statistics_of_trained_content',null, array('class'=>'form-control',
                        'rows' => 10, 'cols' => 50)) !!}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('matters_need_training', trans('validation.attributes.frontend.register-user.matters_need_training'), ['class' => 'col-lg-2 control-label']) }}
                <div class="col-lg-10">
                    {!! Form::textarea('matters_need_training',null, array('class'=>'form-control',
                        'rows' => 10, 'cols' => 50)) !!}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('desire_yourself_proposed', trans('validation.attributes.frontend.register-user.desire_yourself_proposed'), ['class' => 'col-lg-2 control-label']) }}
                <div class="col-lg-10">
                    {!! Form::textarea('desire_yourself_proposed',null, array('class'=>'form-control',
                        'rows' => 10, 'cols' => 50)) !!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-10 col-md-offset-4">
                    {{ Form::submit(trans('labels.general.buttons.update'), ['class' => 'btn btn-primary', 'id' => 'update-profile']) }}
                </div>
            </div>
        </div>
    </div>
    {{ Form::close() }}
@endsection
@section('after-scripts')

    <script type="text/javascript">
      $(document).ready(function() {
        Backend.Profile.init();
      });
    </script>
@endsection
