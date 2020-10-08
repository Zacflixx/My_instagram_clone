@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">                      {{--    our headers row--}}
        <div class="col-3">
            <img class="rounded-circle p-5" style="width: 270px" src="https://www.fromoldbooks.org/Aubrey-HistoryOfEngland-Vol3/pages/vol3-401-Sir-Isaac-Newton/vol3-401-Sir-Isaac-Newton-q75-484x500.jpg" alt="">
        </div>

        <div class="col-9 pl-5 pt-5 " >
               <div class="d-flex justify-content-between align-items-lg-baseline" ><h1> {{$user->username}} </h1>
                   <a href="#">Add New Post</a>
               </div>
         <div class="d-flex">
             <div class="pr-5"><strong>120 </strong> posts</div>
             <div class="pr-5"><strong>44k </strong> followers</div>
             <div class="pr-5"><strong>420 </strong> following</div>
          </div>
            <div class="pt-4"> <strong> {{$user->profile->title}}</strong> </div>
            <div>{{$user->profile->description}}</div>
            <div><a href="###">{{$user->profile->url ?? 'N/A' }}</a></div>
         </div>
    </div>

    <div class="row pt-5">  {{--    our posts row--}}
        <div  class="col-4">
            <img class="w-100" src="https://instagram.fkul10-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.113.931.931a/s640x640/120140619_3292667074102704_7427069057961941646_n.jpg?_nc_ht=instagram.fkul10-1.fna.fbcdn.net&amp;_nc_cat=100&amp;_nc_ohc=LNbkdYdR7P4AX9ZU5t8&amp;oh=4b1583e694d5e9120699fcb1efc22234&amp;oe=5FA2A5B5" alt="">
        </div>
        <div class="col-4">
            <img class="w-100" src="https://instagram.fkul10-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c2.0.745.745a/s640x640/119924324_610750296259983_4300350720600387054_n.jpg?_nc_ht=instagram.fkul10-1.fna.fbcdn.net&amp;_nc_cat=103&amp;_nc_ohc=AwNcmMSoWiIAX__9woa&amp;oh=dd991114044ead130c97f13c6dd00e98&amp;oe=5FA535E1" alt="">
        </div>
        <div class="col-4">
            <img class="w-100" src="https://instagram.fkul10-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.113.931.931a/s640x640/119738862_322661082320307_1750163388106352899_n.jpg?_nc_ht=instagram.fkul10-1.fna.fbcdn.net&amp;_nc_cat=103&amp;_nc_ohc=fHjynmtSDK8AX-y4CFo&amp;oh=58c2cdfc225497f0310a939a1c0e7036&amp;oe=5FA522D4" alt="">
        </div>

    </div>

</div>
@endsection
