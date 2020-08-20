<div class="box-body">
    <div class="form-group">
        <!-- Create Your Field Label Here -->
        <!-- Look Below Example for reference -->
        {{ Form::label('name', trans('labels.backend.documents.name'), ['class' => 'col-lg-2 control-label required']) }} 

        <div class="col-lg-10">
            <!-- Create Your Input Field Here -->
            <!-- Look Below Example for reference -->
           {{ Form::text('name', null, ['class' => 'form-control box-size', 'placeholder' => trans('labels.backend.documents.name'), 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form-group-->
    <div class="form-group">
        {{ Form::label('link_document', trans('validation.attributes.backend.documents.link_document'), ['class' => 'col-lg-2 control-label required']) }}
        @if(!empty($documents->link_document))
            <div class="col-lg-1">
                <a href="{{ Storage::disk('public')->url('img/link_document/' . $documents->link_document) }}">{{$documents->link_document}}</a>
                <!-- <img src="{{ Storage::disk('public')->url('img/link_document/' . $documents->link_document) }}" height="80" width="80"> -->
            </div>
            <div class="col-lg-5">
                <div class="custom-file-input">
                    <input type="file" name="link_document" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" />
                    <label for="file-1"><i class="fa fa-upload"></i><span>Choose a file</span></label>
                </div>
            </div>
        @else
            <div class="col-lg-5">
                <div class="custom-file-input">
                        <input type="file" name="link_document" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" />
                        <label for="file-1"><i class="fa fa-upload"></i><span>Choose a file</span></label>
                </div>
            </div>
        @endif
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
