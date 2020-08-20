<div class="box-body">
    <div class="form-group">
        <!-- Create Your Field Label Here -->
        <!-- Look Below Example for reference -->
         {{ Form::label('name', trans('labels.backend.districts.name'), ['class' => 'col-lg-2 control-label required']) }}

        <div class="col-lg-10">
            <!-- Create Your Input Field Here -->
            <!-- Look Below Example for reference -->
            {{ Form::text('name', null, ['class' => 'form-control box-size', 'placeholder' => trans('labels.backend.districts.name'), 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form-group-->
    <div class="form-group">
        {{ Form::label('provinces', trans('validation.attributes.backend.districts.provinces'), ['class' => 'col-lg-2 control-label required']) }}

        <div class="col-lg-10">
        @if(!empty($selectedprovinces))
           {{ Form::select('provinces_id', $provinces, $selectedprovinces, ['class' => 'form-control tags box-size', 'required' => 'required']) }}
        @else
            {{ Form::select('provinces_id', $provinces, null, ['class' => 'form-control tags box-size', 'required' => 'required']) }}
        @endif
        </div><!--col-lg-3-->
    </div><!--form control-->
</div><!--box-body-->

@section("after-scripts")
    <script type="text/javascript">
        //Put your javascript needs in here.
        //Don't forget to put `@`parent exactly after `@`section("after-scripts"),
        //if your create or edit blade contains javascript of its own
        $( document ).ready( function() {
            //Everything in here would execute after the DOM is ready to manipulated.
        });
    </script>
@endsection
