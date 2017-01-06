<!-- START_{{$parsedRoute['id']}} -->
@if($parsedRoute['title'] != '')## {{$parsedRoute['title']}}
@else## {{$parsedRoute['uri']}}
@endif

@if($parsedRoute['description'])
    {!! $parsedRoute['description'] !!}
@endif

### HTTP Request

@foreach($parsedRoute['methods'] as $method)
    @if($method!="HEAD")`{{$method}} {{$parsedRoute['uri']}}`@endif
@endforeach

@if(count($parsedRoute['parameters']))
### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
@foreach($parsedRoute['parameters'] as $attribute => $parameter)
    {{$attribute}} | {{$parameter['type']}} | @if($parameter['required']) required @else optional @endif | {!! implode(' ',$parameter['description']) !!}
@endforeach
@endif

<!-- END_{{$parsedRoute['id']}} -->