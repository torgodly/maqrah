@props(['title', 'value', 'icon',])
<div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
    <div class="icon-box">
        <div class="icon"><i class="{{$icon}}"></i></div>
        <h4 class="title"><a class="stretched-link">{{$title}}</a></h4>
        <span data-purecounter-start="0" data-purecounter-end="{{$value}}" data-purecounter-duration="1"
              class="purecounter title" style="color: #d8ab6a"></span>
    </div>
</div>
