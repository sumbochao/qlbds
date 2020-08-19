
<li>
@if (empty($item->children))
<a href="{{ getRouteUrl($item->url, $item->url_type) }}"  @if(!empty($item->open_in_new_tab) && ($item->open_in_new_tab == 1)) {{ 'target="_blank"' }} @endif >
        <i class="fa {{ @$item->icon }}"></i>
        <span>{{ $item->name }}</span>
        @if (!empty($item->children))
            <i class="fa fa-angle-left pull-right"></i>
        @endif
    </a>
    @if (!empty($item->children))
    <ul aria-expanded="false" class="collapse">
        {{ renderMenuItems($item->children) }}
    </ul>
    @endif
@else
<a @if($item->url) aria-expanded="false" class="has-arrow waves-effect waves-dark" href="{{ getRouteUrl($item->url, $item->url_type) }}" @else class="has-arrow waves-effect waves-dark" href="javascript:void(0)" @endif @if(!empty($item->open_in_new_tab) && ($item->open_in_new_tab == 1)) {{ 'target="_blank"' }} @endif >
        <i class="fa {{ @$item->icon }}"></i>
        <span>{{ $item->name }}</span>
        @if (!empty($item->children))
            <i class="fa fa-angle-left pull-right"></i>
        @endif
    </a>
    @if (!empty($item->children))
    <ul aria-expanded="false" class="collapse">
        {{ renderMenuItems($item->children) }}
    </ul>
    @endif
@endif
  
</li>