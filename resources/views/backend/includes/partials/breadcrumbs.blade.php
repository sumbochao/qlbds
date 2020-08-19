@if ($breadcrumbs)
    <div class="row page-titles">
        <div class="col-md-12 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    @foreach ($breadcrumbs as $breadcrumb)
                        @if ($breadcrumb->url && !$loop->last)
                            <li class="breadcrumb-item"><a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a></li>
                        @else
                            <li class=" breadcrumb-item active">{{ $breadcrumb->title }}</li>
                        @endif
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
@endif
