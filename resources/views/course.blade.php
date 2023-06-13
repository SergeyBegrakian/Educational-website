@extends('samepart_layout')
@section('the_same_part')

<section id=course class="course-area pt-140">
  <div class=container>
    <div class=row>
      <div class=col-lg-8>
        <div class=single-course-wrapper>
          <div class="course-title mb-30">
            <h3 class=mb-20>{{$courses->title}}</h3>
      
          </div>
     
          <div class="course-img mb-30">
          <script data-pagespeed-no-defer>
              window['pagespeed'] = window['pagespeed'] || {};
              var pagespeed = window['pagespeed'];
              pagespeed.switchToHighResAndMaybeBeacon = function(elem) {
                setTimeout(function() {
                  elem.onload = null;
                  var srcset = elem.getAttribute('data-pagespeed-high-res-srcset');
                  if (srcset) {
                    elem.srcset = srcset;
                  }
                  elem.src = elem.getAttribute('data-pagespeed-high-res-src');
                  if (pagespeed.CriticalImages) {
                    elem.onload = pagespeed.CriticalImages.checkImageForCriticality(elem);
                  }
                }, 0);
              };
            </script>
            <img data-pagespeed-high-res-src="{{ asset('images/' . $courses->image_path)}}" alt="" src="data:image/jpeg; onload="pagespeed.switchToHighResAndMaybeBeacon(this); onerror="this.onerror=null;pagespeed.switchToHighResAndMaybeBeacon(this);" id=pagespeed_img_MViZvmWReJ1>
          </div>
          <div class="course-description pb-20 border-bottom">
            <h3 class=mb-20>DESCRIPTION</h3>
            <p class=mb-30>{{ $courses->description}}</p>
        
          </div>
          <div class="course-included pt-50 pb-50 border-bottom">
            <h3 class=mb-20>TOPICS INCLUDED</h3>
            <div class=row>
              <div class=col-md-6>
                <ul>
                  <li>
                    <i class="lni lni-checkmark"></i>
                    {{ $courses->topics}}
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="course-content pt-50 pb-35">
            <h3 class=mb-20>COURSE CONTENT</h3>
            <div class=accordion id=accordionExample>
              <div class=single-accordion>
                <div class=accordion-btn id=headingOne>
                  <button class="btn-block text-left" type=button data-toggle=collapse data-target="#collapseOne" aria-expanded=true aria-controls=collapseOne>
                   Learn more
                  </button>
                </div>
                <div id=collapseOne class="collapse show" aria-labelledby=headingOne data-parent="#accordionExample">
                {{ $courses->content}} 
                </div>
              </div>
              <div class=single-accordion>
                <div class=accordion-btn id=headingTwo>
              
                </div>
          
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=col-lg-4>
        <div class=right-sidebar>
          <div class="course-info mb-50">
            <h3 class="mb-20 text-center">Course Information</h3>
            <ul class=mb-30>
              <li class="d-flex justify-content-between">
                <span>Starts:</span>
                <span class=text-right>{{ $courses->start}}</span>
              </li>
              <li class="d-flex justify-content-between">
                <span>Duration:</span>
                <span class=text-right>{{ $courses->duration}}</span>
              </li>
              <li class="d-flex justify-content-between">
                <span>Study Level:</span>
                <span class=text-right>{{ $courses->level}}</span>
            </li>
              <li class="d-flex justify-content-between">
                <span>Price:</span>
                <span class="text-right text-warning">${{ $courses->price}}</span>
              </li>
            </ul>
            <form action="{{ route('checkout',['id' => $courses->id]) }}" method="POST"> 
              @csrf
              <button href="javascript:void(0)" class="main-btn btn-hover">Purchase Course</bitton>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection



