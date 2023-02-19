<ul>
@foreach($childs as $child)
   <li>
       <a href="{{$child->url}}">{{ $child->title }}</a>
   @if(count($child->childs))
            @include('admin.menus.manageChild',['childs' => $child->childs])
        @endif
   </li>
@endforeach
</ul>