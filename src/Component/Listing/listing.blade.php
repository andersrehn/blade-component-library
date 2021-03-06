<!-- pagination.blade.php -->
@if($list)
  <{{$elementType}} class="{{ $class }}" {!! $attribute !!}>
     
      @foreach($list as $item)

        {{--- List item ---}}
        @if(isset($item['href']))
        <li class="{{$baseClass}}__item {{$baseClass}}__item-{{ $loop->index }}">
          <a href="{{ $item['href'] }}" aria-label="{{ $item['label'] }}" class="{{$baseClass}}__link">
            <span class="{{$baseClass}}__label">
              {{ $item['label'] }}
            </span>
          </a>
          @include('listing.sub') {{--- Recursive action ---}}
        </li>
        @else
        <li class="{{$baseClass}}__item {{$baseClass}}__item-{{ $loop->index }}">
          <span class="{{$baseClass}}__label">
            {{ $item['label'] }}
          </span>
          @include('listing.sub') {{--- Recursive action ---}}
        </li>
        @endif

      @endforeach

  </{{$elementType}}>
@else
<!-- No pagination data -->
@endif