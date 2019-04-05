<div class="c-card">
    <img class="c-card__image" src="{{$image}}">
    <div class="c-card__body">
        @if($title)
        <h4 class="c-card__title">{{$title}}</h4>
        @endif
        @if($content)
        <p class="c-card__text">{{$content}}</p>
        @endif
    </div>
</div>
@component('button')