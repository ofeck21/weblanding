<div class="pagetitle">
    <h1>@stack('pageTitle')</h1>
    <nav>
        <ol class="breadcrumb">
            @foreach($breadcrumbs as $breadcrumb)
                <li class="breadcrumb-item @if(isset($breadcrumb['active']) && $breadcrumb['active']) active @endif">
                    @if(isset($breadcrumb['link']))
                        <a href="{{$breadcrumb['link']}}">{{$breadcrumb['name']}}</a>
                    @else
                        {{$breadcrumb['name']}}
                    @endif
                </li>
            @endforeach
        </ol>
    </nav>
</div><!-- End Page Title -->
