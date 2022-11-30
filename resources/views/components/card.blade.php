<div {{$attributes->merge(["class" => "card mb-3"])}}  style="max-width: 18rem; max-height: 12rem">
    <div class="card-header">{{$title}}</div>
    <div class="card-body position-relative">
        <div class="icon">
        {{$icon}}
        </div>
        <span class="numero" id="{{$id}}">{{$numero}}</span>
    </div>
</div>